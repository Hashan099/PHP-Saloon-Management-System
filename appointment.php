<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Appointment Form</title>
    <!-- Include Bootstrap CSS via CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 50px;
        }
        h2 {
            text-align: center;
            color: #6c757d;
        }
        label {
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ced4da;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .form-control:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container"  style="background-color: #D2AACF;">
    <h2 class="mb-4">Request an Appointment</h2>
    <form action="process_form.php" method="post">
        <div class="form-group">
            <label for="name">Your Name*</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email*</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone*</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="service">Service*</label>
            <select class="form-control" id="service" name="service">
                <option value="">Select a service</option>
                <!-- PHP code to fetch services goes here -->
                <?php
                    $query = mysqli_query($con, "SELECT * FROM tblservices");
                    while ($row = mysqli_fetch_array($query)) {
                        echo "<option value='" . $row['ServiceName'] . "'>" . $row['ServiceName'] . "</option>";
                    }
                ?>

            </select>
        </div>
        <div class="form-group">
            <label for="date">Reservation Date*</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Reservation Time*</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>

        <div style="text-align: center; border: radius:100px">
    <button type="submit" class="btn btn-primary" id="submitBtn" style="width: 400px;">Submit</button>
</div>

    </form>
</div>
<!-- Include Bootstrap JS via CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

