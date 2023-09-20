<?php 

    include 'admin/connect.php';
    $select="SELECT * FROM images";
    $result=mysqli_query($conn,$select);
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
        .navbar{
            display:grid;
            grid-template-columns:19% 30% 20% 30%;
            background-color:black;
         
            color:white;
     
            /* border:2px solid white; */
            /* padding:20px; */
            
        }
        .currentdate{
            /* border:2px solid black; */
            text-align:center;
            font-size:20px;
            
        }
        .hero{
            display:grid;
            grid-template-columns:20% 80%;
            height:85vh;
            /* justify-content:center; */
        }
    
        .sidebar{
          background-color:black;
          padding:0px 20px 30px 20px;
          color:white;
        
            /* border:2px solid white; */
        }
        .carousel
        {
          margin:1px;
          width:100%;
        } 
        .logo img{
          width:100%;
          height:80px;
          margin-left:4px;
        }
        img{
          width:100%;
          height:79vh;
        }
        .currenttime{
          
          text-align:center;
          font-size:20px;
        }

        .wicon{
          width:60px;
          height:60px;
        }
    </style>
</head>
<body>
    
        <div class="navbar">
                <div class="logo">
                    <img src="capture.png" alt="">
                </div>
                <div class="currentdate">
                   Date <p id="ctime"></p>
                </div>
                <div class="xyz">
                   
                </div>
                <div class="weather">
                       <div class="row">
                        <div class="col">
                          <div class="row">
                             <div class="col"><div><img src="cloudy.png" class="wicon" alt=""></div></div>

                          <div class="col">
                           
                            <div id="city">

</div>
                            <div id="temp">

                            </div>
                          </div>
                          </div>

                        </div>
                        <div class="col">

                        </div>
                       </div>
                </div>
        </div>

        <div class="hero">
            <div class="sidebar">
                <div class="currenttime">
                <div id="time">

                </div>
                </div>
               <p>Fajar</p>
               <p>Dhuhr</p>
               <p>Asr</p>
               <p>Maghrib</p>
               <p>Isha </p>
               <p>Jumma</p>
            
            </div>
            <div class="slider">
                <?php
            while ($row=mysqli_fetch_array($result)) {


               
                ?>


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="<?php echo "admin/".$row['image1']; ?>"  class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
      
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="<?php echo "admin/".$row['image2']; ?>"   class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo "admin/".$row['image3']; ?>"  class="d-block " alt="...">
      <div class="carousel-caption d-none d-md-block">
       
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


             
                <?php
        
      }
               ?>
            </div>
        </div>


        


        <script>

// const apiKey="30dbc44ab1d530f5ef76c468208609a9";
//   const apiUrl="https://api.openweathermap.org/data/2.5/weather?units=metric&q=hyderabad";

apiKey="https://api.openweathermap.org/data/2.5/weather?q=SCHWEINFURt&appid=30dbc44ab1d530f5ef76c468208609a9&units=metric";
  async function checkWeather() {
    // const response = await fetch(apiUrl + '&appid=${apiKey}');
    const response = await fetch(apiKey);
    var data = await response.json();
    // console.log(data);
    var cityname=data.name;
    // console.log(cityname);
    var temp=data.main.temp;
    var humidity=data.main.humidity;
    var wind=data.wind.speed;

    // console.log(temp);

    document.getElementById('city').innerHTML=cityname;

    document.getElementById('temp').innerHTML=temp + "C";

    
    
  }
  checkWeather();




          var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();

today = mm + '/' + dd + '/' + yyyy;
// document.write(today);
document.getElementById("ctime").innerHTML=today;




function checkTime(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  // add a zero in front of numbers<10
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
  t = setTimeout(function() {
    startTime()
  }, 500);
}
startTime();


        </script>






</body>
</html>