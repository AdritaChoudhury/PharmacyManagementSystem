<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Patients-info</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');
*, ::before, ::after { box-sizing: border-box; }
body{
font-family:'Quicksand', sans-serif;
text-align:center;
line-height:1.5em;
background: -webkit-linear-gradient(to right,#F5F7FA,#B8C6DB);
background: linear-gradient(to right, #F5F7FA,#B8C6DB);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#69d2e7', endColorstr='#fa6900',GradientType=1 );
}
hr {
border:none;
background:#E0E4CC;
height:1px;
/*   width:60%;
display:block;
margin-left:0; */
}
.container {
max-width: 1000px;
margin: 1em auto;
background:#FFF;
padding:30px;
border-radius:5px;
}
.productcont {
display: flex;
}
.product {
padding:1em;
border:1px solid #E0E4CC;
margin-right:1em;
border-radius:5px;
}
.cart-container {
border:1px solid #E0E4CC;
border-radius:5px;
margin-top:1em;
padding:1em;
}
button, input[type="submit"] {
 border:1px solid #3bebc2;
 color:#fff;
 background: #3bebc2;
 padding:0.6em 1em;
 font-size:1em;
 line-height:1;
 border-radius: 1.2em;
 transition: color 0.2s ease-in-out, background 0.2s ease-in-out, border-color 0.2s ease-in-out;
}
button:hover, button:focus, button:active, input[type="submit"]:hover, input[type="submit"]:focus, input[type="submit"]:active {
 background: #A7DBD8;
 border-color:#69D2E7;
 color:#000;
 cursor: pointer;
}
table {
margin-bottom:1em;
border-collapse:collapse;
}
table td, table th {
text-align:left;
padding:0.25em 1em;
border-bottom:1px solid #E0E4CC;
}
#carttotals {
margin-right:0;
margin-left:auto;
}
.cart-buttons {
width:auto;
margin-right:0;
margin-left:auto;
display:flex;
justify-content:flex-end;
padding:1em 0;
}
#emptycart {
margin-right:1em;
}
table td:nth-last-child(1) {
text-align:right;
}
.message {
border-width: 1px 0px;
border-style:solid;
border-color:#A7DBD8;
color:#679996;
padding:0.5em 0;
margin:1em 0;
}
.navbar {
  overflow: hidden;
  background-color: inherit;

}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  border: 2px;
}
.dropdown {
  float: left;
  overflow: hidden;

}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:  #3bebc2;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color:  #3bebc2;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.topnav {
  background-color: #3bebc2;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: black;
  color: white;
}

    </style>
  </head>
  <body>
    <div class="topnav">
      <a class="active" href="H_interface.html">Home</a>
      <a href="#contact">Contact</a>
      <a href="about.html">About</a>
    </div>
    <script type="text/javascript">

    </script>
    <div class="container">
  <h1>PATIENTS INFORMATION</h1>
  <p></p>
  <p></p>
  <div id="alerts"></div>

<table>
    <tr>
        <th> ID </th>
        <th> Name </th>
        <th> Email </th>
        <th> Age </th>
        <th> Phone </th>
        <th> Gender </th>
        <th> Hospital Name </th>
    </tr>

  <?php

include 'dbconnection.php';

$query="CALL `get_patients`();";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $id=$row["ID"];
        $fname=$row["First-name"];
        $lname=$row["Last-name"];
        $name=$fname." ".$lname;
        $email=$row["Email"];
        $pass=$row["Password"];
        $age=$row["Age"];
        $phone=$row["Phone"];
        $gender=$row["Gender"];
        $hname=$row["Hospital-name"];
?>

<tr>
    <td> <?php echo $id ?> </td>
    <td> <?php echo $name ?> </td>
    <td> <?php echo $email ?> </td>
    <td> <?php echo $age ?> </td>
    <td> <?php echo $phone ?> </td>
    <td> <?php echo $gender ?> </td>
    <td> <?php echo $hname ?> </td>
</tr>
<?php 
    }
}
?>
</table>
  </body>
</html>
