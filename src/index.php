<?php include("head.php"); //It use the header page instead of header code
   $string = "Introduction"; ?>
<?php echo "Welcome!".$_GET['name'] //please add your name in the URL by typeing ?name=your name ?>
<img class="img0" src="wei.jpg" alt="Wei's picture">
<div>
   <button class ="button-89">who am I</button>
</div>
<div>
   <h3><?php echo $string; ?></h3>
   <p >Aloha! With a Bachelor of Science in Computer Science from Brigham Young University-Hawaii, I have honed my Python, Java, and C++ skills. My passion for coding ignited when I wrote my first lines of Python. Since then, I have developed robust software applications, conducted comprehensive literature reviews, and managed and analyzed vast datasets.
      <br>As a research assistant, I have cultivated strong teamwork, communication, and leadership skills. Collaborating with professors and fellow researchers, I have led projects, ensuring effective communication and coordination among team members. I thrive in team environments, leveraging diverse perspectives to drive innovative solutions and achieve common goals.
      <br>My specialties include rapid learning, innovative problem-solving, and a deep understanding of software development principles. I'm adept at coding, testing, and debugging, ensuring that every project is optimized for success. My toolbox includes Python, Java, C++, and various data analysis and visualization tools.
   </p>
</div>
<?php include("foot.php"); //It use footer page instead of footer code ?>