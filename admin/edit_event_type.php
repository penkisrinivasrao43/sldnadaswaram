<?php
include 'config.php';
	if(isset($_POST['update'])){
        
        $id = $_POST["id"];
        $event_name = $_POST['event_name'];
        $event_heading = $_POST['event_heading'];
        $content = $_POST['content'];
        $ofile=$_POST['ofile'];
        if($_FILES["image"]["name"]!=''){
            $image = $_FILES["image"]["name"];
        $dir = "uploads/event_type/";
        $upload_dir = 'uploads/event_type/'.DIRECTORY_SEPARATOR;
        $allowed_types = array('jpg', 'png', 'jpeg', 'gif');            
        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/event_type/".$_FILES["image"]["name"]);
        }else{
            $image=$ofile;
        }
        // echo $id;
        // echo "<br>";
        // echo $event_name;
        // echo "<br>";
        // echo $event_heading;
        // echo "<br>";
        // echo $content;
        // echo "<br>";
        // echo $ofile;
        // echo "<br>";
        // echo $image;
        // echo "<br>";
        $sql = "UPDATE event_type SET event_name='$event_name',image='$image',event_heading='$event_heading',content='$content' WHERE id = '$id'";
        $result =mysqli_query($conn,$sql);
        //$row= mysqli_num_rows($result);
        if($result){ ?>
          <script>alert('Data Updated Succesfully');window.location.href='view_event_type.php';</script>
          <?php
        
          }
        // header("location: view_event_type.php");
    }


    $id = $_GET["id"];
	

    session_start();
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
    	
?>
<?php include "header.php"; ?>
<article class="content dashboard-page">
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-6">
                <div class="card card-block sameheight-item">
                    <div class="title-block">
                        <h3 class="title"> Add Your Services </h3>
                    </div>
                    <?php if(isset($_POST['submit']))
                        {?>
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                    </div>
                    <?php } ?>

                    <?php
                    
                     	$sql ="SELECT * FROM event_type WHERE id='$id'";
                     	$query=mysqli_query($conn,$sql);
                     	$cnt=1;
                     	while($row=mysqli_fetch_array($query)){
                  	?> 
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        	<input type="hidden" name="id" value="<?php echo htmlentities($row['id']);?>">
                            <label for="example-text-input" class="control-label">Event Name</label>
                            <input class="form-control boxed" type="text" name="event_name"  value="<?php echo htmlentities($row['event_name']);?>" id="example-text-input" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Event Image</label>
                            <?php
                            if(htmlentities($row['image'])!=''){
                            ?>
                            <img src="uploads/event_type/<?php echo htmlentities($row['image']);?>" style="height:100px">
                            <?php } ?>
                            <input type="hidden" class="form-control boxed" name="ofile" value="<?php echo htmlentities($row['image']) ?>">
                            <input type="file" class="form-control boxed" name="image">
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="basicinput">Event Heading</label>
                            <input class="form-control boxed" type="text" name="event_heading"  value="<?php echo htmlentities($row['event_heading']);?>" id="example-text-input" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="basicinput">Content</label>
                            <textarea id="elm1" class="form-control boxed" name="content" rows="4" value=""><?php echo htmlentities($row['content']);?></textarea>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <input type="submit" name="update" class="btn btn-primary" value="Update">
                            </div>
                        </div>
                    </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </section>
</article>
<?php include "footer.php"; ?>
<?php } ?>