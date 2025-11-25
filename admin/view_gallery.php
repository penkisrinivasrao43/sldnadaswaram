<?php
   session_start();
   if (!isset($_SESSION['id'])) {
      header("location: login.php");
   }
   else{
?>
<?php include "header.php"; ?>
<article class="content cards-page">
    <div class="title-block">
        <h3 class="title"> Cards </h3>
        <p class="title-description"> Cards can contain almost any kind of element inside </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Default card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Primary card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Success card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-info">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Info card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-warning">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Warning card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-danger">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Danger card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
        </div>
        <!-- /.row -->
    </section>
</article>

<?php include "footer.php"; ?>
<?php } ?>