<?php

include 'connect.php';

    if(isset($_POST['submiti']))
    {

        $folder="images/";
        $imgtmp1=$_FILES['img1']['tmp_name'];
        $target1=$folder.basename($_FILES['img1']['name']);
        move_uploaded_file($imgtmp1,$target1);



        $imgtmp2=$_FILES['image2']['tmp_name'];
        $target2=$folder.basename($_FILES['image2']['name']);
        move_uploaded_file($imgtmp2,$target2);


        $imgtmp3=$_FILES['image3']['tmp_name'];
        $target3=$folder.basename($_FILES['image3']['name']);
        move_uploaded_file($imgtmp3,$target3);

        $imgtmp4=$_FILES['image4']['tmp_name'];
        $target4=$folder.basename($_FILES['image4']['name']);
        move_uploaded_file($imgtmp4,$target4);


        $truncate="TRUNCATE TABLE images";
        mysqli_query($conn,$truncate);
        $insert="INSERT INTO images(image1,image2,image3,image4) VALUES('$target1','$target2','$target3','$target4')";
        mysqli_query($conn,$insert);
       
    }

    if(isset($_POST['submitv']))
    {

        $folder="videos/";
        $vidtmp1=$_FILES['videos']['tmp_name'];
        $target1=$folder.basename($_FILES['videos']['name']);
        move_uploaded_file($vidtmp1,$target1);



      


        $truncate="TRUNCATE TABLE videos";
        mysqli_query($conn,$truncate);
        $insert="INSERT INTO videos(video) VALUES('$target1')";
        mysqli_query($conn,$insert);
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
       <style>
        *{
            padding:0px;
            margin:0px;
            box-sizing:border-box;
        }
        .btns{
            padding:20px;
            background-color:aqua;
            /* padding:20px; */
            
        }
    
            
      
    </style>
</head>
<body>
    

            <center>
                <div class="btns">
                  <button id="uploadimg" class="btn btn-success">Upload Images</button>
             
             
                <button id="uploadvideo" class="btn btn-success">Upload Video</button>
                </div>
                </center> 
     

        <div class="container">
           
            <div id="imagesform">
                   
             
               
            </div>
            <div id="videoform" >
               
            </div>
        </div>



        <script>

            $("#uploadimg").click(function(){

                $('#videoform').hide();
                $('#imagesform').show();
                $.ajax({
                type: 'post',
                data: {img:1},
                url: "imagesuploadform.php",
                success: function (html) {
                    $("#imagesform").html(html); 
                }
                })
                    
                
            })
                
            

            $("#uploadvideo").click(function(){
                $('#imagesform').hide();
                $('#videoform').show();
            $.ajax({
            type: 'post',
            data: {img:1},
            url: "videosuploadform.php",
            success: function (html) {
                $("#videoform").html(html);
                
            }
            })
                

            })

        </script>

</body>
</html>