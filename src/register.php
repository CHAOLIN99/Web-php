<?php include("head.php"); ?>


<div class="center">
    <p>Welcome! Please Register</p>
    <form action="register.php" method="$_POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" placeholder="your first name..." class="f_input"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" placeholder="your last name..." class="f_input"><br><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="your email" class="f_input"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="set password" class="f_input"><br><br>
        <label for="cpassword">Confirm Password:</label><br>
        <input type="password" id="cpassword" name="cpassword" placeholder="type your password again" class="f_input"><br><br>
        <input type="submit" value="Submit" class="submit">
    </form>
</div>

<?php include("foot.php"); ?>