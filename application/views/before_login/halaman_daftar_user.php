<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/logo-icon.png')?>">
            <title>RentCar | Daftar Akun</title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo base_url('assets/css/helper.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
            <!--[if lt IE 9]>
            <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            <link href="<?php echo base_url('assets/css/fronter.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/respon.css')?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <!-- untuk css footer -->
        </head>
        <body class="fix-header">
        <!-- Preloader - style you can find in spinners.css -->
            <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
            </div>
            <!-- Main wrapper  -->
            <div id="main-wrapper">
                <!-- header header  -->
                <?php include 'header_user.php'; ?>
                
                <!-- End header header -->
                <!-- Left Sidebar  -->
                
                <!-- End Left Sidebar  -->
                <!-- Page wrapper  -->
                    <!-- Bread crumb -->
                    
                    <!-- End Bread crumb -->
                    <!-- Container fluid  -->
                <div class="container-fluid edit_form res2">
                    <!-- Start Page Content -->
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body"> 
                                <h2><b>Buat Akun RentCar Anda</b></h2>
                                    <span>sudah menjadi member?
                                        <a href="<?php echo base_url()."index.php/auth_user";?>" class="link"> Login </a>disini</span>
                            </div>
                        </div>
                    </div>
                    <!-- page content -->
                    <div class="col-lg-7"><!--mengganti ukuran form-->
                        <div class="card card-outline-primary">
                            <div class="card-body">
                                <form class="form-valide" action="<?php echo base_url()."index.php/c_register_user/insert_data";?>" method="post">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nama lengkap
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                            <input type="text" class="form-control" id="val-username" name="val-nama" placeholder="Nama Lengkap">
                                                    </div> 
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Alamat Email
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Mohon isi alamat email Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Kata Sandi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Minimal 6 karakter">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Tulis ulang kata sandi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Mohon tulis ulang kata sandi Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Alamat
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-alamat" name="val-alamat" placeholder="Mohon isi alamat Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nomor Handphone
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-phone" name="val-phone" placeholder="Mohon isi nomor handphone Anda">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Provinsi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-provinsi1" name="val-provinsi">
                                                            <option value="">Pilih provinsi Anda</option>
                                                                <?php foreach($provinsi as $a){ ?>
                                                                    <option value="<?php echo $a['id_provinsi']; ?>"><?php echo $a['provinsi']; ?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="">
                                                        <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                            <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                            <span class="css-control-indicator">Saya menyetujui</span> 
                                                            <a href="#">Kebijakan Privasi RentCar
                                                                <span class="text-danger">*</span>
                                                            </a>
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn col-lg-12 btn-success">DAFTAR</button>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Kota
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-kota1" name="val-kota" disabled="">
                                                            <option value="">Pilih kota Anda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="edit_ntf">
                                            <?php 
                                                        $info = $this->session->flashdata('info');
                                                        if(!empty($info)){
                                                            echo $info;
                                                        }
                                                    ?></div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>
                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer.php'; ?>
                <!-- End footer -->
                
                <!-- End Page wrapper  -->
            </div>
            <!-- End Wrapper -->
            <!-- All Jquery -->
            <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
            <!--stickey kit -->
            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#val-provinsi').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#val-kota').prop('disabled', true);
                        }else{
                            $('#val-kota').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#val-kota').html(data);
                                },
                                error: function(){
                                    alert('data kota tidak ada...');
                                }
                            });
                        }
                    });
                });
            </script>
            <!--Header Data Kota -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#val-provinsi1').on('change', function(){
                        var id_provinsi = $(this).val();
                        if(id_provinsi==''){
                            $('#val-kota1').prop('disabled', true);
                        }else{
                            $('#val-kota1').prop('disabled', false);
                            $.ajax({
                                url:"<?php echo base_url()?>c_get_kota",
                                type: "POST",
                                data: {'id_provinsi' : id_provinsi},
                                dataType: 'json',
                                success: function(data){
                                    $('#val-kota1').html(data);
                                },
                                error: function(){
                                    alert('data kota tidak ada...');
                                }
                            });
                        }
                    });
                });
            </script>
            <!--End Header Data Kota -->
            
            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
            <!--Date Picker-->
            <script src="<?php echo base_url('assets/css/lib/datepicker/lib/zebra_datepicker.js')?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/datepicker/lib/css/default.css')?>" />
            <script>
                $(document).ready(function(){
                    $('#val-tglMulai').Zebra_DatePicker({
                        direction: [true,20],
                        pair: $('#val-tglKembali'),
                        format: 'Y-m-d',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                    $('#val-tglKembali').Zebra_DatePicker({
                        direction: [1,10],
                        format: 'Y-m-d',
                        months : ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'],
                        days : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
                        days_abbr : ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu']
                    });
                });
            </script>
            <!--End Date Picker-->
        </body>
</html>