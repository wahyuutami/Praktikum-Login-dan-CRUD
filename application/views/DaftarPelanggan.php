<div class="container-fluid">
    <div class="block-header">
        <h2>
            DAFTAR PELANGGAN
        </h2>
    </div>
    <!-- Basic Validation -->
    <!-- <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header"> -->
                    <?php 
                        $notifikasi = $this->session->flashdata('notif');
                        if($notifikasi != null){
                            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                        }
                    ?>
                <!-- </div> -->
                <div class="body">
                    <form id="form_validation" method="POST" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan')?>">
                    <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="NamaPelanggan">
                        <label class="form-label">Nama Pelanggan</label>
                    </div>
                </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="NoTelp">
                                <label class="form-label">No Telphon</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="Username">
                                <label class="form-label">Username</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="password" class="form-control" name="Password">
                                <label class="form-label">Password</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <textarea name="Alamat" cols="30" rows="5" class="form-control no-resize"></textarea>
                                <label class="form-label">Alamat</label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <!-- #END# Basic Validation -->
</div>
