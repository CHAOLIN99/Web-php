<?php include("head.php"); ?>

<?php
// Get the user ID from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $user_id = $_GET['id'];
    
    // Database connection
    $connection = mysqli_init();
    if (!$connection->real_connect($_ENV["DATABASE_HOST"], $_ENV["DATABASE_USER"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_DB"])) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare SQL statement to fetch user information
    $stmt = $connection->prepare("SELECT name, email, hashpassword FROM users WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $user_id); // Bind the user ID as an integer
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if a user was found
        if ($result->num_rows > 0) {
            // Fetch the user data
            $user = $result->fetch_assoc();
            ?>
            
            <div class="center">
            <h2>Profile for <?php echo htmlspecialchars($user['name']); ?></h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
            </div>
            
            <?php
        } else {
            echo "<p>User not found.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Error: " . $connection->error . "</p>";
    }

    $connection->close();
} else {
    echo "<p>Invalid user ID.</p>";
}
?>

<?php include("foot.php"); ?>
