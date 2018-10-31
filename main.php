<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.1.css">
</head>
<body>
<div class="container">  
  <form id="contact" action="main.php" method="post">
    <h3>Artificial Intelligence </h3>
    <form method="POST" action="main.php">
    	<fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus name="name">
    </fieldset>
  <fieldset>
  	<select class="select" name="grade">
      	<option>9</option>
      	<option>10</option>
      	<option>11</option>
      	<option>12</option>
      </select>
      <select class="select" name="section">
      	<option>Corbett</option>
      	<option>Sariska</option>
      	<option>Gir</option>
      </select>
  </fieldset>
     
     <fieldset>
     	    	<h4>Question 1- What is AI?</h4>
      <textarea placeholder="Type your answer here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
    	<h4>Question 2- What differentiates AI technology from other technologies in health care?</h4>
      <input type="radio" name="r1" value="a">  AI has ability to gain information, process it and give well-defined output to
doctors
      <br>
      <input type="radio" name="r1" value="b">  AI provides nursing assistance to patients
      <br> 
      <input type="radio" name="r1" value="c">  AI can do surgeries to remove cancerous tissues
    </fieldset>
     <fieldset>
    	<h4>Question 3- How does AI work?</h4>
      <input type="radio" name="r2" value="a">  Providing medicines to patients
      <br>
      <input type="radio" name="r2" value="b">  Machine learning algorithms
      <br> 
      <input type="radio" name="r2" value="c">  Preventing transmission of viruses
    </fieldset>
     <fieldset>
    	<h4>Question 4- The first expert system developed for application of AI in medicine?</h4>
      <input type="radio" name="r3" value="a">  Aploris
      <br>
      <input type="radio" name="r3" value="b">  Thinkcell
      <br> 
      <input type="radio" name="r3" value="c">  Mycin
    </fieldset>
     <fieldset>
    	<h4>Question 5- Do you think the data you enter into various apps ( fitness) can only be
accessed by you?</h4>
      <input type="radio" name="r4" value="a">  Yes
      <br>
      <input type="radio" name="r4" value="b">  No
    </fieldset>
     <fieldset>
    	<h4>Question 6- Do you think your data is sold to different companies?</h4>
      <input type="radio" name="r5" value="a">  Yes
      <br>
      <input type="radio" name="r5" value="br">  No
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    </form>
    <p class="copyright">Designed by Aryan Tomar</p>
  </form>
  <?php
if (isset($_POST["submit"])) {
	$servername = "localhost";
$username = "id7669108_kalyaani";
$password = "kalyaani";
$dbname = "id7669108_funkaar_bio";
$name = $_POST["name"];
$grade = $_POST["grade"];
$section = $_POST["section"];
$q1 = $_POST["r1"];
$q2 = $_POST["r2"];
$q3 = $_POST["r3"];
$q4 = $_POST["r4"];
$q5 = $_POST["r5"];
$q6 = $_POST["r6"];
$q7 = $_POST["r7"];
$q8 = $_POST["r8"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `main`(`I.D.`, `Name`, `Grade`, `Section`, `Question 1`, `Question 2`, `Question 3`, `Question 4`, `Question 5`, `Question 6`) VALUES ( NULL,'$name','$grade','$section','$q1','$q2','$q3','$q4','$q5','$q6')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}

?>
</div>
</body>
</html>