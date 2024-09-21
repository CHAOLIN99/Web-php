<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Wei_Profolio</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="favicon-16x16.png">
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <header>
         <h1> Wei Cheng Chao</h1>
      </header>
     
   
   <nav class="center">
    <ul>
        <li class="button-30"><a href="index.php">Main Page</a></li>
        <li class="button-30"><a href="project.php">Project</a></li>
        <li class="button-30"><a href="research.php">Research</a></li>
        <li class="button-30"><a href="contact.php">Contact</a></li>
        <li class="button-30"><a href="register.php">Register</a></li>
        <li class="button-30"><a href="user.php">All users</a></li>
        <li class="button-30"><a href="profile.php">Profile</a></li>
        <li class="button-30"><a href="answer.php">Answer_Key</a></li>
    </ul>
   </nav>

   <?php if(isset($_GET['name'])):?>
      <?php echo "Welcome!".$_GET['name']; ?>
   <?php endif;?>
   <main>