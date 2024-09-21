<?php
include("head.php"); ?>

<?php
// Database connection
$connection = mysqli_init();
if (!$connection->real_connect($_ENV["DATABASE_HOST"], $_ENV["DATABASE_USER"], $_ENV["DATABASE_PASSWORD"], $_ENV["DATABASE_DB"])) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check if passwords match
    if ($password !== $cpassword) {
        die("Passwords do not match!");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement (change 'password' to 'hashpassword')
    $stmt = $connection->prepare("INSERT INTO users (name, email, hashpassword) VALUES (?, ?, ?)");
    
    if (!$stmt) {
        die("Prepare failed: " . $connection->error);
    }

    // Bind parameters
    $stmt->bind_param("sss", $name, $email, $hashed_password);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}
?>

<div class="center">
    <h2>Welcome! Please Register</h2>
    <form action="register.php" method="POST">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Your name" class="f_input">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Your email" class="f_input">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Set password" class="f_input">
        </div>
        <div>
            <label for="cpassword">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword" placeholder="Type your password again" class="f_input">
        </div>
        <input type="submit" value="Submit" class="submit button-89">
    </form>
</div>


<?php
// Close connection
$connection->close();
include("foot.php");
?>