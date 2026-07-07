

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        .container{
            display:flex;
            height:100vh;
        }

        /* Sidebar */

        .sidebar{
            width:250px;
            background:#1f2937;
            color:white;
            padding:20px;
        }

        .sidebar h2{
            margin-bottom:30px;
        }

        .sidebar ul{
            list-style:none;
        }

        .sidebar li{
            padding:12px;
            margin-bottom:8px;
            border-radius:6px;
            cursor:pointer;
        }

        .sidebar li:hover{
            background:#374151;
        }

        /* Main */

        .main{
            flex:1;
        }

        /* Navbar */

        .navbar{
            height:70px;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:0 30px;
            box-shadow:0 2px 8px rgba(0,0,0,.1);
        }

        .profile{
            width:40px;
            height:40px;
            background:#2563eb;
            color:white;
            border-radius:50%;
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight:bold;
        }

        /* Cards */

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:20px;
            padding:30px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
        }

        .card h3{
            color:#555;
            margin-bottom:10px;
        }

        .card p{
            font-size:30px;
            font-weight:bold;
            color:#2563eb;
        }

        /* Table */

        .table-container{
            padding:0 30px 30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
            border-radius:10px;
            overflow:hidden;
            box-shadow:0 2px 8px rgba(0,0,0,.08);
        }

        th,td{
            padding:15px;
            text-align:left;
            border-bottom:1px solid #eee;
        }

        th{
            background:#2563eb;
            color:white;
        }

        tr:hover{
            background:#f5f5f5;
        }

    </style>

</head>
<body>

<div class="container">

    <div class="sidebar">
        <h2>Dashboard</h2>

        <ul>
            <li>Home</li>
            <li>Students</li>
            <li>Teachers</li>
            <li>Courses</li>
            <li>Reports</li>
            <li>Settings</li>
        </ul>

    </div>

    <div class="main">

        <div class="navbar">
            <h2>Welcome , {{$name}}</h2>

            <div class="profile">
                S
            </div>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Total Students</h3>
                <p>520</p>
            </div>

            <div class="card">
                <h3>Teachers</h3>
                <p>28</p>
            </div>

            <div class="card">
                <h3>Courses</h3>
                <p>16</p>
            </div>

            <div class="card">
                <h3>Revenue</h3>
                <p>₹1.2L</p>
            </div>

        </div>

        <div class="table-container">

            <table>

                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>Sachin</td>
                    <td>Computer Science</td>
                    <td>Active</td>
                </tr>

                <tr>
                    <td>Rahul</td>
                    <td>Mathematics</td>
                    <td>Active</td>
                </tr>

                <tr>
                    <td>Priya</td>
                    <td>Physics</td>
                    <td>Pending</td>
                </tr>

            </table>

        </div>

    </div>

</div>

</body>
</html>