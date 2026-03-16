<?php
session_start();
require_once "config/db.php";

$obj = new Query();

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $data = [
//         'title'  => $_POST['title'],
//         'task' => $_POST['task'],
//     ];

//     if ($obj->insertData('task', $data)) {
//         header("Location: todo.php");
//         exit;
//     }
// }

// View Task
$tasks = $obj->getData('task', '*');
$taskCount = count($tasks);

$editData = null;
if (isset($_GET['edit'])) {
    $id = (int)$_GET['edit'];
    $result = $obj->getData('task', '*', "id = $id");
    if (!empty($result)) {
        $editData = $result[0];
    }
}

// Insert / Update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['id'])) {
        // UPDATE
        $data = [
            'title'      => $_POST['title'],
            'task'       => $_POST['task'],
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $id = (int)$_POST['id'];
        $obj->updateData('task', $data, "id = $id");
    } else {
        // INSERT
        $data = [
            'title'      => $_POST['title'],
            'task'       => $_POST['task'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $obj->insertData('task', $data);
    }

    header("Location: todo.php");
    exit;
}

// Delete Data In Database Using Form(Post) 
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    if ($obj->deleteData('task', "id = $id")) {
        header("Location: todo.php");
        exit;
    }
}
// print_r($tasks);
// exit;

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/todo.css">

    <title>TODO List</title>
</head>

<body>
    <div class="page-shell">
        <div class="container py-4 py-lg-5">
            <div class="d-flex flex-column justify-content-center align-items-center ">
                <div class="col-12 col-lg-4 mb-5">
                    <div class="form-card">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h2><?= $editData ? 'Edit Task' : 'Create Task' ?></h2>
                                <p class="form-subtitle mb-0">Add clear tasks so you can track work quickly.</p>
                            </div>
                            <a href="logout.php" class="btn btn-outline-danger btn-sm">Logout</a>
                        </div>

                        <form method="post" action="" enctype="multipart/form-data">
                            <?php if ($editData) { ?>
                                <input type="hidden" name="id" value="<?= $editData['id'] ?>">
                            <?php } ?>

                            <div class="input-group">
                                <label>Title</label>
                                <input type="text" name="title"
                                    value="<?= htmlspecialchars($editData['title'] ?? '') ?>"
                                    placeholder="Enter task title" required>
                            </div>

                            <div class="input-group">
                                <label>Task Description</label>
                                <textarea name="task" rows="4"
                                    required><?= htmlspecialchars($editData['task'] ?? '') ?></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-submit">
                                    <?= $editData ? 'Update Task' : 'Add Task' ?>
                                </button>
                                <?php if ($editData) { ?>
                                    <a href="todo.php" class="btn btn-light border">Cancel Edit</a>
                                <?php } ?>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12">
                    <div class="table-card">
                        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2">
                            <div>
                                <h4 class="mb-1">Task List</h4>
                                <p class="list-subtitle mb-0">You have <?= $taskCount ?>
                                    task<?= $taskCount === 1 ? '' : 's' ?>.</p>
                            </div>
                            <span class="task-count-badge"><?= $taskCount ?> Total</span>
                        </div>
                        <div class="row g-3">
                            <?php if (!empty($tasks)) { ?>
                                <?php foreach ($tasks as $index => $task) { ?>
                                    <div class="col-12 col-md-3">
                                        <div class="task-item-card h-100">
                                            <div class="d-flex justify-content-between align-items-start mb-2">
                                                <span class="task-number"><?= $index + 1 ?></span>
                                                <?php if (!empty($task['updated_at'])) { ?>
                                                    <span
                                                        class="task-time"><?= date('d M Y', strtotime($task['updated_at'])) ?></span>
                                                <?php } ?>
                                            </div>
                                            <h5 class="task-title mb-2"><?= htmlspecialchars($task['title']) ?></h5>
                                            <p class="task-desc mb-3"><?= nl2br(htmlspecialchars($task['task'])) ?></p>
                                            <div class="d-flex gap-2 mt-auto">
                                                <a href="todo.php?edit=<?= $task['id'] ?>"
                                                    class="btn btn-warning btn-sm">Edit</a>
                                                <a href="todo.php?delete=<?= $task['id'] ?>" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure? Delete This Task')">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } else { ?>
                                <div class="col-12">
                                    <div class="empty-state text-center">
                                        <h5 class="mb-2">No tasks yet</h5>
                                        <p class="mb-0">Create your first task from the left panel.</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>