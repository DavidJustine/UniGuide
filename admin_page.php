<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: admin_login.php');
    exit;
}

if (isset($_POST['logout'])) {
  // Unset all session variables
  $_SESSION = [];

  // Destroy the session
  session_destroy();

  // Redirect to the login page after logout
  header("Location: admin_login.php");
  exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniguide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$feedback_sql = "SELECT * FROM feedbacks ORDER BY feed_id DESC";
$feedback_result = $conn->query($feedback_sql);

$complaint_sql = "SELECT * FROM compform ORDER BY comp_id DESC";
$complaint_result = $conn->query($complaint_sql);

$visits_sql = "SELECT role, COUNT(*) AS visit_count FROM visits GROUP BY role";
$visits_result = $conn->query($visits_sql);
$visit_data = array();
while ($row = $visits_result->fetch_assoc()) {
    $visit_data[$row['role']] = $row['visit_count'];
}
$roles = array_keys($visit_data);
$visit_counts = array_values($visit_data);

?>



<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-4X8B0m5HRX5DXv3Ol1sNUo0DzRQzzrc5VgvA4k2ESQHQNRgY1FyEgP+0px4QKcNBlz6jAcs+2T2b7VeTgbQgBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #fcb900;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #2c6346;
            color: #ffffff;
        }

        .content {
            margin-left: 350px;
            padding: 20px;
            margin-top: 70px;
        }

        /* Styles specific to the content area */
        .dashboard,
        #roleChart,
        .feedback,
        .complaints {
            display: none;
        }

        .active {
            display: block;
        }

        .createacc img {
            width: 100px;
            margin-left: 70px;
            margin-bottom: 60px;
        }

        #logout {
            margin-top: 360px;
            padding: 10px;
            text-decoration: none;
            text-align: start;
            font-size: 25px;
            color: white;
            display: block;
            transition: 0.3;
            background-color: #fcb900;
            border: none;
            width: 250px;
        }

        .sidebar #logout:hover {
            background-color: #2c6346;
            color: #ffffff;
        }

        .content {
            margin-left: 350px;
            padding: 20px;
            margin-top: 70px;
            overflow-x: none; /* Hide horizontal overflow */
            overflow-y: auto; /* Enable vertical scrollbar */
        }

        thead {
            position: sticky;
            top: 0;
            background-color: #fcb900;
            color: #ffffff;
        }

        tbody {
            max-height: 400px; /* Set your desired height */
            overflow-y: auto; /* Add vertical scrollbar if needed */
            display: block; /* Enable block display */
        }

        table {
            border-color: #0eab38;
            border-radius: 5px;
            margin-bottom: 50px;
            background-color: white;
            border-style: none;
            border-color: transparent;
            margin-top: 50px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Adjust shadow values as needed */
            table-layout: fixed; /* Set table layout to fixed */
            width: 95%; /* Set table width to 100% */
            overflow-y: hidden; /* Add vertical scrollbar if needed */
            width: calc(100% - 20px); /* Adjust width to prevent horizontal overflow */
        }

        td,
        th {
            padding: 5px 10px; /* Adjust padding */
            text-align: left;
            height: 50px;
            white-space: nowrap; /* Prevent line breaks */
            overflow: hidden; /* Hide overflow content */
            text-overflow: ellipsis; /* Show ellipsis for overflow */
        }

        th {
            color: white;
        }

        #th-feed {
            width: 1030px;
            background-color: #2c6346;
        }

        #th-id,
        #th-stud,
        #th-name,
        #th-com,
        #th-status,
        #user {
            background-color: #2c6346;
        }

        thead tr {
            background-color: #0eab38;
            color: #ffffff;
        }

        td:nth-child(4) {
            /* 4th column, change the number as needed based on the column order */
            max-width: 720px; /* Set your desired width */
            white-space: normal; /* Allow text wrap */
            word-wrap: break-word; /* Allow word wrap for long words */
        }

        tbody tr:nth-child(odd) {
            background-color: #fffef0;
        }

        tbody tr:nth-child(even) {
            background-color: #fffcd7;
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 6px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Styling for the labels */
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        /* Styling for the input fields */
        input[type="text"] {
            width: 20%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            margin-bottom: 10px;
        }

        /* Placeholder style */
        input[type="text"]::placeholder {
            color: #999;
        }

        input[type="text"]:focus {
            outline: none; /* Remove default focus outline */
            border-color: #46e068; /* Change border color on focus */
            box-shadow: 0 0 5px #46e068; /* Add a subtle box shadow on focus */
        }

        #feedbackTable {
        width: 98%; /* Ensuring the table takes up the available width */
        }
        #feedbackTable td:nth-child(2) { /* Targeting the second column (message) */
        white-space: pre-wrap; /* Allowing wrapping of long lines */
        word-wrap: break-word; /* Breaking long words to prevent overflow */
        }

        #complaintsTable button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: transparent;
            text-decoration: uppercase;
            width: 100%; /* Adjusted width */
        }

        #complaintsTable button.pending {
            background-color: #ff0000; /* Red color for pending */
            color: #ffffff;
        }

        #complaintsTable button.replied {
            background-color: #008000; /* Green color for replied */
            color: #ffffff;
        }

        #complaintsTable button:disabled {
            background-color: #008000; /* Green color for replied */
            color: #ffffff;
            cursor: not-allowed;
        }

        .filter{
            display:flex;
            flex:1;
        }
        .filter-container {
            display: flex;
            align-items: center;
            margin-bottom: 10px; /* Add some bottom margin for spacing */
        }

        .filter-container label {
            margin-right: 10px; /* Add right margin to separate icon from select */
            font-size: 20px; /* Adjust font size */
        }

        .filter-container select {
            padding: 8px; /* Adjust padding */
            font-size: 16px; /* Adjust font size */
            border-radius: 5px; /* Add border radius */
            border: 1px solid #ccc; /* Add border */
        }

        /* Adjust the icon size */
        .filter-container .fas {
            font-size: 20px;
            margin-right: 5px; /* Add some right margin */
        }
        .roles-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 columns */
            gap: 15px; /* Adjust the gap between containers */
            margin-top: 10px;
            margin-left: 2%;
        }

        .role-container {
            border-radius: 5px;
            text-align: center;
            padding: 15px;
            width: 220px; /* Set width for each container */
            height: 220px; /* Set height for each container */
            background-color: #f9f9f9;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add slight shadow */
        }

        .role-label {
            font-size: 15px; /* Adjust font size */
            font-weight: bold; /* Make it bold */
            color: white; /* Change label color to white */
            margin-bottom: 7px; /* Increase space between label and visit count */
        }

        .visit-count {
            font-size: 45px; /* Adjust font size */
            font-weight: bold; /* Make it bold */
            color: white; /* Change number color to white */
        }

        .chart-container {
            padding: 15px;
            background-color: #fcfcfc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add slight shadow */
        }

        #dashboardTable{
            border-collapse: collapse;
            width:480px;
            margin-top:10px;
            max-height: 500px; /* Limiting the height to prevent excessive scrolling */
            overflow-y: auto; /* Adding vertical scrollbar when content exceeds max height */
        }
        

        #title_stud h2{
            margin-top:20px;
            margin-bottom:30px;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <div class="createacc">
        <img src="images/logo.png" alt="Logo" class="logo" />
    </div>
    <a href="#" onclick="openTab('dashboard')">Dashboard</a>
    <a href="#" onclick="openTab('feedback')">Feedback</a>
    <a href="#" onclick="openTab('complaints')">Complaints</a>

    <form method="post" action="">
        <button type="submit" name="logout" id="logout">LogOut</button>
    </form>
</div>
    
<div class="content">
    <div class="dashboard active">
        <h2>Dashboard</h2>
        <div style="display: flex; margin-bottom:30px;">

            <!-- Container for Chart -->
            <div class="chart-container" style="width: 50%; height: 500px;">
                <canvas id="roleChart" width="450" height="450"></canvas>
            </div>

            <!-- Container for Visit Counts -->
            <div class="roles-container">
                <?php
                // Query to retrieve visit counts per role from the database
                $visit_counts_sql = "SELECT role, COUNT(*) AS visit_count FROM visits GROUP BY role";
                $visit_counts_result = $conn->query($visit_counts_sql);

                // Check if there are any visits for any role
                if ($visit_counts_result->num_rows > 0) {
                    $roles = [];
                    while ($row = $visit_counts_result->fetch_assoc()) {
                        // Display visit count per role in the specified format within its own container
                        $roles[] = $row["role"];
                        echo "<div class='role-container' style='background-color: " . getColorForRole($row["role"]) . ";'>";
                        echo "<p class='role-label'>" . $row["role"] . "</p>";
                        echo "<p class='visit-count'>" . $row["visit_count"] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No visits found for any role.</p>";
                }

                // Function to get color for each role
                function getColorForRole($role) {
                    switch (strtolower(trim($role))) {
                        case "nluc student":
                            return '#FCB900'; // Yellow
                        case "mluc student":
                            return '#2C6346'; // Green
                        case "sluc student":
                            return '#2823a1'; // Blue
                        case "guest":
                            return '#d91511'; // Red
                        default:
                            return '#ccc'; // Default color
                    }
                }
                ?>
            </div>

        </div>

      <!-- Dashboard Table -->
<div style="display: flex; gap:100px;">
    <div>
        <h2 id="title_stud">Registered Students</h2>
        <!-- Search input -->
        <input type="text" id="searchInput" placeholder="Search..." style="position: sticky; top: 0; z-index: 1; background-color: white;" autocomplete="off">
        <table id="dashboardTable" border="1">
            <tr>
                <th id=user>Student ID</th>
                <th id=user>Username</th>
                <th id=user>Password</th>
                <th id=user>Role</th>
            </tr>
            <?php
            // Query to retrieve users from the database
            $users_sql = "SELECT * FROM users";
            $users_result = $conn->query($users_sql);

            if ($users_result->num_rows > 0) {
                while ($row = $users_result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["student_id"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </table>
    </div>
    <div>
        <h2>Registered Students Count</h2>
        <div style="width: 99%; margin-top:50px;">
            <canvas id="studentChart" width="500" height="700"></canvas>
        </div>
        <?php
        $role_counts_sql = "SELECT role, COUNT(*) AS count FROM users GROUP BY role";
        $role_counts_result = $conn->query($role_counts_sql);

        $role_counts = array(); // Array to store role counts

        if ($role_counts_result->num_rows > 0) {
            // Fetch role counts and store them in an array
            while ($row = $role_counts_result->fetch_assoc()) {
                $role_counts[$row["role"]] = $row["count"];
            }
        } else {
            echo "No data available";
        }
        ?>
    </div>

    
</div>
    
<!-- JavaScript for search functionality -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById('searchInput');
        const rows = document.querySelectorAll('#dashboardTable tr');

        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            rows.forEach(row => {
                let found = false;
                row.querySelectorAll('td').forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(searchTerm)) {
                        found = true;
                    }
                });
                if (found) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    });
</script>

    <script>
        // PHP array holding counts of registered students per role
        var roleCounts = <?php echo json_encode($role_counts); ?>;

        // Get canvas element
        var ctx = document.getElementById('studentChart').getContext('2d');

        // Create bar chart
        var studentChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: Object.keys(roleCounts), // Get role names from PHP array keys
                datasets: [{
                    label: 'Registered Students by Role',
                    data: Object.values(roleCounts), // Get role counts from PHP array values
                    backgroundColor: [
                        '#FCB900', // yellow for NLUC
                        '#2C6346', // green for MLUC
                        '#2823a1', // blue for SLUC
                        // Add more colors if you have more roles
                    ],
                    borderColor: [
                        '#FCB900', // yellow for NLUC
                        '#2C6346', // green for MLUC
                        '#2823a1', // blue for SLUC
                        // Add more colors if you have more roles
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


   

</div>


    <script>
        // Chart.js code to create the donut chart
        var ctx = document.getElementById('roleChart').getContext('2d');
        var roleChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($roles); ?>,
                datasets: [{
                    label: 'UniGuide Visits',
                    data: <?php echo json_encode($visit_counts); ?>,
                    backgroundColor: [
                        '#FCB900', // yellow for NLUC
                        '#2C6346', // green for MLUC
                        '#2823a1', // blue for SLUC
                        '#d91511'  // red for GUEST
                    ],
                    borderColor: [
                        '#FCB900', // yellow for NLUC
                        '#2C6346', // green for MLUC
                        '#2823a1', // blue for SLUC
                        '#d91511'  // red for GUEST
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'right',
                        labels: {
                            font: {
                                size: 14 // Adjust font size of legend labels
                            },
                      
                            margin: {
                                left: 20 // Add left margin to the legend
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'Visits by Role',
                        font: {
                            size: 18 // Adjust font size of the title
                        },
                        margin: {
                            left: 70 // Add left margin to the legend
                         }
                    }
                },
                layout: {
                    padding: {
                        right: 20 // Add right margin to the chart
                    }
                },
                cutout: '60%' // Adjust the hole size here (percentage of the chart radius)
            }
        });

    </script>
<div style="margin-top: 20px;">
    <a href="orgchart.html" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px; background-color: #2C6346; color: #fff; border: none; border-radius: 5px; text-decoration: none; float: left;">Edit Org Chart</a>
    <a href="about_us_img.php" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px; background-color: #2C6346; color: #fff; border: none; border-radius: 5px; text-decoration: none; float: left; margin-left: 10px;">Upload Org Chart</a>
</div>

        <div class="feedback">
            <h2>Feedback</h2>
            <label for="feedbackSearch"></label>
            <input type="text" id="feedbackSearch" onkeyup="searchTable('feedbackTable', 'feedbackSearch')" placeholder="Search for ID...">
            <table id="feedbackTable" border="1">
                <tr>
                    <th id="th-id">ID</th>
                    <th id="th-feed">Message</th>
                </tr>
                <?php
                if ($feedback_result->num_rows > 0) {
                    while ($row = $feedback_result->fetch_assoc()) {
                        echo "<tr><td>" . $row["feed_id"] . "</td><td>" . $row["message"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No feedback found</td></tr>";
                }
                ?>
            </table>
        </div>

        <div class="complaints">
        <h2>Complaints</h2>
        <div class="filter">
            <label for="complaintsSearch"></label>
            <input type="text" id="complaintsSearch" onkeyup="searchTable('complaintsTable', 'complaintsSearch')" placeholder="Search for ID...">
            <div class="filter-container">
                <label for="filterSelect"><i class="fas fa-filter"></i></label>
                <select id="filterSelect" onchange="filterStatus(this.value)">
                    <option value="All">All</option>
                    <option value="pending">Pending</option>
                    <option value="replied">Replied</option>
                </select>
            </div>
        </div>
            <table id="complaintsTable" border="1">
                <tr>
                    <th id="th-id">ID</th>
                    <th id="th-stud">Student ID</th>
                    <th id="th-name">Name</th>
                    <th id="th-com">Complaint</th>
                    <th id="th-status">Status</th>
                </tr>
                <?php
               if ($complaint_result->num_rows > 0) {
                while ($row = $complaint_result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["comp_id"] . "</td>";
                    echo "<td>" . $row["stud_id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["complaint"] . "</td>";
                    echo "<td style='background-color:";
                    if ($row["status"] == 'pending') {
                        echo "red"; // Red for pending
                    } else if ($row["status"] == 'replied') {
                        echo "green"; // Green for replied
                    } else {
                        echo "white"; // Default color for other statuses
                    }
                    echo "'>";
                    if ($row["status"] == 'pending') {
                        // Display "Pending" button and mark as replied after opening Gmail
                        echo "<button id='pendingButton" . $row["comp_id"] . "' class='pending' onclick=\"openGmail(" . $row["comp_id"] . ")\">PENDING</button>";
                    } else {
                        echo "<button class='replied' disabled>REPLIED</button>";
                    }
                    echo "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No complaints found</td></tr>";
            }
                ?>
            </table>
        </div>


        <script>
            function openGmail(compId) {
                // Open Gmail in a new tab
                window.open('https://mail.google.com/', '_blank');

                // Change button text to "Replied" and disable it
                var button = document.getElementById('pendingButton' + compId);
                button.innerText = 'Replied';
                button.classList.remove('pending');
                button.classList.add('replied');
                button.disabled = true;

                // Send AJAX request to update status to "Replied" in the database
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "update_status.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        // Status updated successfully
                    }
                };
                xhr.send("compId=" + compId);
            }

            function filterStatus(status) {
                var rows = document.getElementById("complaintsTable").getElementsByTagName("tr");
                if (status === 'All') {
                    for (var i = 1; i < rows.length; i++) {
                        rows[i].style.display = "";
                    }
                } else {
                    for (var i = 1; i < rows.length; i++) {
                        var rowStatus = rows[i].getElementsByTagName("td")[4].textContent;
                        if (rowStatus.toLowerCase() === status.toLowerCase()) {
                            rows[i].style.display = "";
                        } else {
                            rows[i].style.display = "none";
                        }
                    }
                }
            }
        </script>

    </div>

    <script>
        function openTab(tabName) {
            var i, tabContent;
            tabContent = document.getElementsByClassName("content")[0].children;
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].classList.remove("active");
            }
            document.getElementsByClassName(tabName)[0].classList.add("active");
        }

        function searchTable(tableId, inputId) {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById(inputId);
            filter = input.value.toUpperCase();
            table = document.getElementById(tableId);
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Assuming ID is the first column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.visibility = ""; // Show the row by adjusting visibility
                    } else {
                        tr[i].style.visibility = "collapse"; // Hide the row's content without affecting the layout
                    }
                }
            }
        }
    </script>
</body>

</html>
