<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
    <title>ajax</title>
    <style>
      .centered-btn {
        /* Add your custom CSS styling here */
        background-color: blue; /* Example background color */
        color: white; /* Example text color */
        padding: 10px 20px; /* Example padding */
        /* Add more styles as needed */
    }

    </style>


</head>
<body>
    <div class="header text-center my-4" style="color: red; background-color: grey;"" >
        <h1 >
            Insert Data into Database using Ajax in php
        </h1>
    </div>

    <div class="website">
    <h2 id="messagedisplay">

        </h2>
    </div>

    <div class="container">
    <div class="  formpost text-center mt-5" style="color: blue;">
    <form id="vedformid" method="post">
        <table class="table ">

        <tr>
          <th class="msg" scope="col">Enter Name</th>
          <td><input type="text" class="textbox" name="name" id="name"></td>
        </tr>
        <tr>
          <th class="msg" scope="col">Enter Email ID</th>
          <td><input type="text" class="textbox" name="email" id="email"></td>
        </tr>
        <tr>
        <th class="msg" scope="col">Enter Contact</th>
        <td><input type="text" class="textbox" name="contact" id="contact"></td>
        </tr>
        <th></th>
        <td style="text-align: center;">
          <input type="submit" class="btn centered-btn" name="insertbtn" id="insertbtn" value="Add">
      </td>
        </tr>
    </table>
    </form>
    </div>


    </div>


<?php  
  include('ajax.js');



?>    

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
</body>
</html>