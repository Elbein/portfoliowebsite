
<!DOCTYPE html>
<html>
<head>
<style>

li {
}

#ex1 {
  float: left;
}

#ex2 {
  float: right;
  color: white;
}

#checkmeout:visited {
  color: black;
}

div.container {
  text-align: center;
  overflow: hidden;
}


li a {
  display: block;
  color: black;
  text-align: right;
  padding: 16px;
  text-decoration: none;
}

a:visited {
  color: #cbddfb;
  background-color: transparent;
  text-decoration: none;
}



h1 {
  color: black;
  padding: 5px;
}

p {
  color: black;
  padding: 5px;
}

strong {
  color: black;
  padding: 5px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #black;
}

ul.myUL {
  display: inline-block;
  text-align: left;
}

li {
}





li a:hover {
  background-color: #111111;
}

.center { 
  height: 200px;
  position: relative;
}

.center p {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.strong b {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);

</style>
</style>
</head>

<body style="background-color:white; overflow: hidden">

  <ul style = "background-color: black; color: white">
  <li><h1 style = "color: white"; id = "ex1" padding: 5px>Benjamin Horn</h1></li>
  <!-- <li><a id = "ex2" style="font-size:150%; margin-top: 15px; "href="contactinfo.html">Contact Info</a></li> -->
  <li><a id = "ex2" style="font-size:150%; margin-top: 15px; "href="projects.html">My Projects</a></li>
  <li><a id = "ex2" style="font-size:150%; margin-top: 15px; "href="myskills.html">My Skills</a></li>
  <li><a id = "ex2" style="font-size:150%; margin-top: 15px; "href="whoami.html">About Me</a></li>
  <li><a id = "ex2" style="font-size:150%; margin-top: 15px; "href="index.php">Home</a></li>
</ul>

</body>

<hr>

<body>
  <div>
    <p></p>
  </div>


<div class = "container" style = "overflow: hidden">

<ul class = "myUL">

<li style="float: left">

<div style = "overflow: hidden">

<p style="color: black; margin-top: 125px; margin-right: 100px; font-size: 45px; font-family:corbel;">
<strong> Benjamin Horn</strong>
</p>
<strong id = "team_creator_name_main"; style="color:#FFFFFF; ">

</strong>

<p style="color: black; margin-right: 100px; font-size: 30px; font-family: corbel;">A full-stack software engineer with great aspirations:</p>
<p id = "team_creator_name_main"; style="color:#FFFFFF; "></p>


</div>


</li>


<li style = "float: left">


<p>

 <img src="images/ProfilePictureCropped.png" style="width: calc(100% - 80px);height: 300px; padding: center; object-fit: cover; fetchpriority="high">



</p>

</li>

</ul>
</div>

  <h1 style = "text-align: center">Check out my GitHub, LinkedIn, and Resume</h1>
  <br>
  <br>

<div style = "text-align: center">
<a id = "checkmeout" href="https://github.com/Elbein">
  <img src="images/gitHubLogo.png" style="width:60px;height:60px;" alt="My GitHub">
</a>
<a id = "checkmeout" href="https://www.linkedin.com/in/benjamin-horn-a565021ba/">
  <img src="images/LinkedInLogo.png" style="width:60px;height:60px;" alt="My LinkedIn">
</a>
<form style = "display: inline-block; text-align: center;" action="BenjaminHornResume.pdf" target="_blank">
    <input type="image" src="images/ResumeIcon.jpeg" action="Benjamin Horn Resume 6-1-2024.pdf" style="width:60px; height:60px;" alt="My Resume">
</form>
</div>

<br>
<br>

</body>

</html>


