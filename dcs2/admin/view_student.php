<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #fff;
            background-color: #28a745; /* Green background color */
            padding: 20px;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #28a745; /* Green background color for header */
            color: white; /* White text color for header */
        }

        .go-back-button {
            text-align: center;
            margin-top: 20px;
        }

        .go-back-button a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            background-color: #28a745; 
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <h1>Attendance Record</h1>

    <?php
    include '../db/config.php'; // Include your database connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the class ID is set
    $classID = isset($_GET['class_id']) ? $_GET['class_id'] : null;

    // Fetch attendance data based on the class ID
    $sql = "SELECT a.id, class_id, CONCAT(s.last_name, ', ', s.first_name, ' ', s.middle_name) AS student_name, a.attendance_status, a.attendance_time
            FROM tblattendance a
            JOIN tblclass c ON a.class_id = c.id
            JOIN tblstudents s ON a.student_id = s.id
            WHERE a.class_id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $classID);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the table
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr>';
        echo '<th style="width: auto;">Student Name</th>';
        echo '<th style="width: auto;">Attendance Status</th>';
        echo '<th style="width: auto;">Attendance Time</th>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['student_name'] . '</td>';
            echo '<td>' . $row['attendance_status'] . '</td>';
            echo '<td>' . $row['attendance_time'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No attendance records found for the specified class</p>';
    }

    // Close connection
    $stmt->close();
    $conn->close();
    ?>

    <div class="go-back-button">
        <a href="view-attendance.php">Go Back to View Attendance</a>
    </div>

</body>

</html>
