<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords"
        content="Jeff Anderson-Lester, Jeff Goji, Goji, Gojira, Miata, Mazda, MX5, Mazdaspeed, Supermiata, Xida, Review, Xida Club Sport, Miata Pictures, Web Developer, 91 Miata, Houston, Autocross, STO Autocross, SSM Autocross, STO, SSM, Hoosier, A7, HTML, CSS, JavaScript">
    <meta name="author" content="Jeff Anderson-Lester">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta lang="en" content>
    <meta charset=utf-8>
    <meta description="Web Devlopement R'US">

    <!--Google Font link below-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

    <!--Links to the CSS Style sheet and the jQuery sheet-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/layout.css">
    <script type="text/javascript" src="js/java.js"></script>

    <title>Web Development R'US</title>
</head>


<div class="navbar">
    <a href="#home">Home</a>
    <a href="#Projects">Projects</a>
    <a href="#contact">Contact</a>
    <a href="../index.html">Main Site</a>
</div>

<div class="main">
    Did you enjoy the site? Do you have questions? Would you like to contact us about building a site for you or your
    business?
    <br>
    If so, feel free to contact us using the form below and we will get back to you as soon as we can.
</div>
<div class="container">
    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
    
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]);?>">
        <br> <label for="fname">Your Name:</label>
        <br>
        <input type="text" id="fname" name="firstname" placeholder="Your name...">
        <span class="error">*
            <?php echo $nameErr;?>
        </span>
        <br>
        <br>
        <label for="email">Your email:</label>
        <br>
        <input type="text" id="email" name="email" placeholder="Your e-mail address...">
        <span class="error">*
            <?php echo $emailErr;?>
        </span>
        <br>
        <label for="website">Your Website</label>
        <br>
        <input type="text" id="website" name="website" placeholder="Your website...">
        <span class="error">
            <?php echo $websiteErr;?>
        </span>
        <br>
    </form>
    </select>
    <br>
    <label for="subject">Subject:</label>
    <br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    ?>

</div>
</body>

</html>