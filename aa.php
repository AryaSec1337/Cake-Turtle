<?php require_once('inc/header.php'); ?>
<?php
if(isset($_GET['Network'])){
?>
<form action="" method="POST">
<div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                            <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Tools</a></li>
                        <li class="breadcrumb-item active" aria-current="page">PORT SCANNER</li>
                    </ol>
                </nav>
                            </h4>
                            <center>
                                <h1>PORT SCANNER</h1>
                            </center>
                            <div class="col-sm-15">
                                <h6>Masukan Domain</h6>
                                <div class="form-group position-relative has-icon-left">
                                    <input type="text" name="domain" class="form-control" placeholder="site.com">
                                    <div class="form-control-icon">
                                    <i class="fa-solid fa-link"></i>
                                    </div>
                                </div>
                            </div>
                            <center><button class="btn btn-outline-success" type="submit" name="submit">PING</button></center>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
                            <br><?= port_scanner(); ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
</form>
<?php
}else{
    echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>';
    echo "
    <script>
    swal.fire('Anda tidak di izinkan untuk menambah apapun di parameter','','warning');
    
    setInterval(() => {
        window.location.href = 'port?Network';
    }, 2000);
    </script>
    ";
}
?>
<?php require_once('inc/footer.php'); ?>
