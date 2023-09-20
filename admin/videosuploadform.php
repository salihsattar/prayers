<?php


if($_POST['img']==1)
{
    ?>

<center><h1 class="p-3"> Upload Video</h1></center>
<form action="" method="post" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload Video</label>
    <input type="file" class="form-control" name="videos" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>


  <input type="submit" name="submitv" value="Upload" class="btn btn-primary" id="">
</form>

<?php
}




?>