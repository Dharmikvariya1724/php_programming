<?php

require_once "connfig/database.php";

$obj = new Query();
$obj->getData('users','*');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User List</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">
            <h4 class="mb-0">Manage Users</h4>
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">User List</h4>
                <a href="#" class="btn btn-sm btn-success">Add User</a>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle text-center">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <!-- Sample Static Data -->
                            <tr>
                                <td>1</td>
                                <td>Dharmik</td>
                                <td>dharmik@gmail.com</td>
                                <td>2026-02-25</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Rahul</td>
                                <td>rahul@gmail.com</td>
                                <td>2026-02-24</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>

            </div>
        </div>

    </div>

</body>

</html>