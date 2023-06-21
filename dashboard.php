<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // User is not logged in, redirect to the login page
    header('Location: index.php');
    exit();
}

// If needed, you can retrieve user information from the database using the session data

// Process any other actions or logic specific to the dashboard

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID Vaccination Booking - Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>

    <main>
        <h2>Dashboard Content Goes Here</h2>
        <p>This is the protected area that only logged-in users can access.</p>
<p>You can display any relevant information, links, or functionality here.</p>
    </main>

    <footer>
        <a href="logout.php">Logout</a>
        <p>&copy; <?php echo date("Y"); ?> COVID Vaccination Booking. All rights reserved.</p>
    </footer>
</body>

</html>