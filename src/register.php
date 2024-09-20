<?php include("head.php"); ?>

<h1>Welcome! Please Register</h1>
<div>
    <form action="register.php" method="$_POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="your first name..."><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="your last name..."><br><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="your email..."><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="set password..."><br><br>
        <label for="cpassword">Confirm Password:</label><br>
        <input type="password" id="cpassword" name="cpassword" placeholder="please type your password again..."><br><br>
        <input type="submit" value="Submit">
    </form>
</div>

<?php include("foot.php"); ?>