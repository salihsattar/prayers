<?php


if($_POST['img']==1)
{
    ?>

<center><h1 class="p-3"> Upload Images</h1></center>
<form action="" method="post" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image 1</label>
    <input type="file" class="form-control" name="img1" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image2 2</label>
    <input type="file" class="form-control" name="image2" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image 3</label>
    <input type="file" class="form-control" name="image3" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image 4</label>
    <input type="file" class="form-control" name="image4" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>

  <input type="submit" name="submiti" value="Upload" class="btn btn-primary" id="">
</form>

<?php
}




?>