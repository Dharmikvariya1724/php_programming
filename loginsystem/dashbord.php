<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Simple Dashboard</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        display: flex;
        min-height: 100vh;
        background: #f4f6f9;
    }

    .sidebar {
        width: 220px;
        background: #2c3e50;
        color: white;
        padding: 20px;
    }

    .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar ul {
        list-style: none;
    }

    .sidebar ul li {
        padding: 12px;
        margin: 8px 0;
        background: #34495e;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    .sidebar ul li:hover {
        background: #1abc9c;
    }

    .main {
        flex: 1;
        padding: 30px;
    }

    .header {
        background: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card h3 {
        margin-bottom: 10px;
        color: #2c3e50;
    }

    .logout {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background: red;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        text-align: right;
    }

    .logout:hover {
        background: darkred;
    }
    </style>
</head>

<body>

    <div class="sidebar">
        <h2>My Dashboard</h2>
        <!-- <ul>
            <li>Home</li>
            <li>Profile</li>
            <li>Settings</li>
            <li>Reports</li>
        </ul> -->
    </div>

    <div class="main">
        <div class="header">
            <h2>Welcome, User</h2>
            <a href="logout.php" class="logout">Logout</a>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p>120</p>
            </div>

            <div class="card">
                <h3>New Orders</h3>
                <p>35</p>
            </div>

            <div class="card">
                <h3>Revenue</h3>
                <p>₹15,000</p>
            </div>
        </div>
    </div>

</body>

</html>