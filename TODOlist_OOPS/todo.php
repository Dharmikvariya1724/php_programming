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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets\todo.css"> -->
    <link rel="stylesheet" href="./assets/todo.css">

    <title>TODO List</title>
</head>

<body>
    <div class="container">
        <!-- Form Card -->
        <center>
            <div class="form-card col-4">
                <h2>Create Task</h2>
                <!-- <h2><?= $editData ? 'Edit Task' : 'Create Task' ?></h2> -->
                <form method="post" action="" enctype="multipart/form-data">

                    <?php if ($editData) { ?>
                        <input type="hidden" name="id" value="<?= $editData['id'] ?>">
                    <?php } ?>

                    <div class="input-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?= $editData['title'] ?? '' ?>"
                            placeholder="Enter Task Title" required>
                    </div>

                    <div class="input-group">
                        <label>Task</label>
                        <textarea name="task" rows="4" required><?= $editData['task'] ?? '' ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-submit">
                        <?= $editData ? 'Update Task' : 'Add Task' ?>
                    </button>

                </form>
            </div>
        </center>

        <!-- Table Card -->
        <div class="table-card">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>User List</h4>
                <div class="d-flex gap-2">
                    <!-- <a href="add-user.php" class="btn btn-success btn-sm">Add New Task</a> -->
                    <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped text-center align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th style="width: 12px;">No:</th>
                            <th style="width: 200px;">Title :</th>
                            <th style="width: auto;">Task :</th>
                            <th style="width: 120px;">Action :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($tasks)) { ?>
                            <?php $i = 1; ?>
                            <?php foreach ($tasks as $task) { ?>
                                <tr>
                                    <td style="width: 12px;"><?= $i++ ?></td>
                                    <td><?= $task['title'] ?></td>
                                    <td><?= $task['task'] ?></td>
                                    <td class="d-flex gap-2 justify-content-center">
                                        <a href="todo.php?edit=<?= $task['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="todo.php?delete=<?= $task['id'] ?>" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="5">No Task found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>