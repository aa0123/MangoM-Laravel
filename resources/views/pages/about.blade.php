<!DOCTYPE html>
<html>
<title>About MyWeb</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
.w3-quarter{
    float:right;
}
</style>
@extends('layouts.app')
@section('content')
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1300px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-quarter" >
    
      <div class="w3-black w3-text-white w3-card-4">
        <div class="w3-display-container" width="40">
          <img src="/storage/cover_images/avatar.jpg" width="100%" height="300">
          <div class="w3-display-bottomright w3-container w3-text-white">
            <h1>A Ali</h1>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-white"></i>Web Developer</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-white"></i>London, UK</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-white"></i>alifarah0123@gmail.com</p>
        </div>
        <hr>

      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-threequarter">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h1 class="w3-text-black w3-center w3-padding-16"></i>About This Site</h1>
        <div class="w3-container">
        <hr>
          <p>This is a test subject website for the sole purpose of improving and enhancing my current web development abilities.<br> The programs/softwares I have used include; Visual Studio Code, Laravel and XAMPP to set up Apache server and database</p>
          <hr>
        </div>
        <div class="w3-container w3-threequarter">
          <h3 class="w3-center"><u>Skills</u></h3>
          <table class="w3-table w3-centered">
                <tr>
                  <td>PHP</td>
                  <td>MySQL</td>
                  <td>HTML</td>
                </tr>
                <tr>
                  <td>CSS</td>
                  <td>JavaScript</td>
                  <td>XHTML</td>
                </tr>
              </table>
        </div>
            <div class="w3-container w3-quarter">

                <h3 class="w3-center"><u>Program/Software</u></h3>
                <ul style="list-style-type:square">
                        <li>Visual Studio Code</li>
                        <li>Laravel</li>
                        <li>Brackets</li>
                        <li>NetBeans</li>
                        <li>Android Studio</li>
                    </ul>
                </div>

        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

</body>
</html>
@endsection