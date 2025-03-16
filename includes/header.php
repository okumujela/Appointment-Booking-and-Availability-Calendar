<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/fullcalendar.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="/">Booking System</a>
        <div class="d-flex">
            <?php if(isset($_SESSION['user'])): ?>
                <a href="/dashboard" class="btn btn-light mx-2">Dashboard</a>
                <a href="/logout.php" class="btn btn-outline-light">Logout</a>
            <?php else: ?>
                <a href="#availability" class="btn btn-light mx-2">Availability</a>
                <a href="/login.php" class="btn btn-outline-light">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>