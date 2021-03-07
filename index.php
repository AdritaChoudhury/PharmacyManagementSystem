<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <h1 class="head">Pharmaceutical Management System</h1>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins:700|Raleway" rel="stylesheet">

    <style>
    body{
      background: #000000;
      background: -webkit-linear-gradient(to right, #F5F7FA,#B8C6DB);
      background: linear-gradient(to right, #F5F7FA,#B8C6DB);
      font-family: calibri;
    }
    .head{
     font-family: cursive;
     font-style: oblique;
     text-align: left;
     color: black;
     text-shadow: 2px 1px #403a3a;

    }
    h1 {
  font-family: "Poppins";
  text-align: center;
}

.row {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

.column {
  flex: 100%;
  max-width: 100%;
}

.column img {
  vertical-align: middle;
}

.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 0.5s ease;
  background-color: black;
}

.container:hover .overlay {
  opacity: 0.5;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
@media only screen and (min-width: 481px) {
    .column {
      flex: 50%;
      max-width: 50%;
    }
}

@media only screen and (min-width: 1024px) {
    .column {
      flex: 33.3%;
      max-width: 33.3%;
    }
}
    </style>
    <title>Main page</title>
  </head>
  <body>
    <div class="row">
  <div class="column">
    <a href="hospital-signup.html">
      <div class="container">
        <img src="images\hospital.png" alt="Hospital" class="image">
        <div class="overlay">
          <div class="text">Hospital</div>
        </div>
      </div>
    </a>
  </div>
  <div class="column">
    <a href="patient-signup.html">
      <div class="container">
        <img src="images\patient.png" alt="Patient" class="image">
        <div class="overlay">
          <div class="text">Customer</div>
        </div>
      </div>
    </a>
  </div>
</div>
  </body>
</html>
