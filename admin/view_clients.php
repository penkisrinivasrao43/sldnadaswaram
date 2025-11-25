<?php
    session_start();
    include('config.php');
    if (!isset($_SESSION['id'])) {
        header("location: login.php");
    }else{
        if(isset($_GET['del']))
        {
            $id = $_GET["id"];
            $sql = "DELETE FROM clients WHERE id = '$id'";
            $result =mysqli_query($conn,$sql);
            header("location: view_clients.php");
        }
?>

<?php include "header.php"; ?>
	<article class="content responsive-tables-page">
	    <div class="title-block">
	        <h1 class="title"> View Clients Information </h1>
	    </div>
	    <section class="section">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="card">
	                    <div class="card-block">
	                        <div class="card-title-block">
	                            <h3 class="title"> Clients In Tabular Form </h3>
	                        </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblUser">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Mobile Numbes</th>
                                            <th>Email</th>
                                            <th>Event Name</th>
                                            <th>Content</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
	                                        $sql = "SELECT * FROM clients" ;
	                                        $result = mysqli_query($conn,$sql);
                                            if (!$result) {
                                                trigger_error(mysqli_error($conn), E_USER_ERROR);
                                            }
	                                        $cnt = 1;
	                                        while($row = mysqli_fetch_array($result)){
                                                
	                                    ?>
                                        <tr>
                                            <td><?php echo $cnt++;?></td>
                                           
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['phone'];?></td>
                                            <td><?php echo $row['email'];?></td>
                                            <td><?php echo $row['event'];?></td>
                                            <td><?php echo $row['content'];?></td>
                                            <td><?php echo $row['date'];?></td>
                                            <td><?php echo $row['time'];?></td>
                                            <td class="item-actions-block">
                                                <a class="remove" href="view_clients.php?id=<?php echo $row['id'];?>&del=delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                    <i class="fa fa-trash-o"></i>
                                                </a> &nbsp; &nbsp;
                                                <a class="edit" href="show_client_details.php?id=<?php echo $row['id']?>">
                                                    <i class="fa fa-eye"></i>
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

<?php include "footer.php"; ?>
<?php } ?>