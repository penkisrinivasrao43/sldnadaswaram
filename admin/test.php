<?php
    session_start();
    include('config.php');
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
?>
<?php include "header.php"; ?>
	<article class="content responsive-tables-page">
	    <div class="title-block">
	        <h1 class="title"> View Contact Information </h1>
	    </div>
	    <section class="section">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-block">
	                        <div class="card-title-block">
	                            <h3 class="title"> Contact Info In Tabular Form </h3>
	                        </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Icon</th>
                                            <th>Name</th>
                                            <th>Contact Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
	                                        $sql = "SELECT * FROM contact_info" ;
	                                        $result = mysqli_query($conn,$sql);
	                                        $cnt = 1;
	                                        while($row = mysqli_fetch_array($result)){
	                                    ?>
                                        <tr>
                                            <td><?php echo $cnt++;?></td>
                                            <td><i class="<?php echo $row['icon_class'];?>"></i></td>
                                            <td><?php echo $row['footer_name'];?></td>
                                            <td><?php echo $row['footer_details'];?></td>
                                            <td class="item-actions-block">
                                                <a class="remove" href="test2.php?id=<?php echo $row['id']?>&del=delete" data-toggle="modal" data-target="#confirm-modal">
                                                    <i class="fa fa-trash-o "></i>
                                                </a> &nbsp; &nbsp;
                                                <a class="edit" href="edit-links.php?id=<?php echo $row['id']?>">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    	<?php }?>
                                    </tbody>
                                </table>
                            </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</article>
<?php } ?>