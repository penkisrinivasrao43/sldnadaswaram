<?php
include 'admin/config.php';
if(isset($_POST['id'])){
    $id= $_POST['id'];

}


$sql = "SELECT * FROM event_type WHERE id='$id'" ;
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
?>
   <div class="row b-shadow b-1px align-items-center g-0">

<div class="col-lg-6 col-md-12 col-sm-12 ">
                            <input type="hidden"id="id" value="<?= $row['id']; ?>">
                              <div class="day1-image">
                                <img src="admin/uploads/event_type/<?= $row['image']; ?>" width="100%" height=""/>
                              </div>
                          </div>

                          <div class="col-lg-6 col-md-12 col-sm-12">
                              <div class="day-text">
                                  <h2 class="section-heading"><?= $row['event_heading']; ?></h2>
                                  <div class="underline1"></div>
                                  <div class="underline2"></div>
                                  <p class="article">
                                      
                                      <textarea class="form-control bg-white"  rows="15" disabled><?php echo ($row['content']);?></textarea>
                                    
                                  </p>

                                  <a class="about-contact2 about-button" href="contact.php">Contact Us</a>
                              </div>
                          </div>
</div>
<script>
    var id=$("#id").val();
    console.log(id);
</script>