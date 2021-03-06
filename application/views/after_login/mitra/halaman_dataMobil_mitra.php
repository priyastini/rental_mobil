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
            <title>RentCar | Beranda Mitra RentCar</title>
            <!-- Bootstrap Core CSS -->
            <link href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.css')?>" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="<?php echo base_url('assets/css/helper.css')?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
            <!--[if lt IE 9]>
            <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            <link href="<?php echo base_url('assets/css/front.css')?>" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css')?>"> 
            <style type="text/css">
                #warna_teks{
                    color: #444444; 
                }
                #warna_teks2{
                    color: white; 
                }
            </style>
            <?php function format_ribuan ($nilai){
                return number_format ($nilai, 0, ',', '.');
            } ?>
        </head>
        <body class="fix-header">
        <!-- Preloader - style you can find in spinners.css -->
          <!--   <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
            </div> -->
            <!-- Main wrapper  -->
            <div id="main-wrapper">
                <!-- header header  -->
                <?php include 'header_mitra.php'; ?>

            <div class="container-fluid edit_form">
                <!-- Start Page Content -->
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body"> 
                                <center> 
                                    <h2><b><i class="fa fa-car"></i> Data Mobil </b></h2>
                                    <span>Ayo Kelola Mobil Anda! Kelola mobil Anda bersama kami. </span>
                                </center>
                            </div>
                        </div>
                        <!-- ALERT BERHASIL TAMBAH DATA-->
                        <?php 
                            if($this->session->flashdata('success_msg')){
                        ?>
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <i class="fa fa-check"></i><?php echo $this->session->flashdata('success_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                        <!-- ALERT GAGAL TAMBAH DATA-->
                        <?php 
                            if($this->session->flashdata('error_msg')){
                        ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fa fa-close"></i><?php echo $this->session->flashdata('error_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                        <!-- ALERT WARNING-->
                        <?php 
                            if($this->session->flashdata('warning_msg')){
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle"></i><?php echo $this->session->flashdata('warning_msg'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="card_edit2 col-lg-9">
                        <form class="form-valide" method="post">
                            <div class="col-lg-5">
                            <a href="<?php echo site_url('c_beranda_mitra/tambahMobil/'.$this->session->userdata('id'));?>" class="btn btn-success"><i class="fa fa-plus"></i> TAMBAH MOBIL</a>
                            </div>
                        </form>
                    </div>
                    <!--Start Data-->
                    <?php foreach ($mobil as $mobil) { ?>
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12" id="hehe">
                                    <thead>
                                        <tr>
                                            <th width="220"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="140"></th>
                                            <th width="160"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="4" height="100"><img src="<?=base_url()?>uploads/<?=$mobil['gbr_mobil']?>" alt="homepage" class="dark-logo" width="210" /></td>
                                            <td width="10"></td>
                                            <td id="warna_teks" align="left" colspan="3" style="font-size: 15pt"><b><?php echo $mobil['merk']; ?>/<?php echo $mobil['tipe_mobil']; ?> 
                                                <?php if ($mobil['status'] == "verified") {?>
                                                <b><span class="badge badge-info"><i class="fa fa-check-circle"></i> <?php echo $mobil['status']; ?></span></b><?php } ?>
                                                <?php if ($mobil['status'] == "unverified") {?>
                                                <b><span class="badge badge-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $mobil['status']; ?></span></b><?php } ?>
                                                <?php if ($mobil['status'] == "blokir") {?>
                                                <b><span class="badge badge-danger"><i class="fa fa-times-circle"></i> <?php echo $mobil['status']; ?></span></b><?php } ?>
                                            </td>
                                            <td id="warna_teks" align="center">Harga</td>
                                            <td id="warna_teks" width="150" colspan="1" align="center"><b>Rp <?php echo format_ribuan($mobil['biaya']); ?></b>/hari</td>
                                            <td></td>
                                        </tr>
                                         <tr>
                                            <td></td>
                                            <td id="warna_teks2" bgcolor="#093645" align="left" colspan="3"><i class="fa fa-user-circle"></i><i> <?php echo $mobil['nama']; ?></i></td>
                                            <td id="warna_teks2" bgcolor="12505E" colspan="2" align="center">
                                                <i class="fa fa-location-arrow"></i> <b><?php echo $mobil['kota']; ?>,<?php echo $mobil['provinsi']; ?></b>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks">Transmisi</td>
                                            <td id="warna_teks" align="left"><b><?php echo $mobil['transmisi']; ?></b></td>
                                            <td id="warna_teks">Penumpang</td>
                                            <td id="warna_teks" align="left"><b><?php echo $mobil['jlh_penumpang']; ?> orang(maks)</b></td>
                                            <td rowspan="2">
                                                <center>
                                                    <a href=" <?php echo base_url('c_beranda_mitra/editMobil/'.$mobil['id_mobil']); ?> " class="btn col-lg-4 btn-info" onclick="return confirm('Apakah anda ingin mengedit data mobil ini?');"><i class="fa fa-edit"></i></a>
                                                    <a href="<?php echo base_url('c_beranda_mitra/deleteMobil/'.$mobil['id_mobil']); ?>" class="btn col-lg-4 btn-danger" onclick="return confirm('Apakah anda yakin menghapus mobil ini?');"><i class="fa fa-trash"></i></a>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td id="warna_teks">Bahan Bakar</td>
                                            <td id="warna_teks"><b><?php echo $mobil['bahan_bakar']; ?></b></td>
                                            <td id="warna_teks">Nomor Polisi</td>
                                            <td id="warna_teks"><b><?php echo $mobil['nomor_polisi']; ?></b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <!-- /page content -->

                    <!-- End Page Content -->
                </div>

                <!-- End Container fluid  -->
                <!-- footer -->
                <?php include 'footer_mitra.php'; ?>
                <!-- End footer -->
                
                <!-- End Page wrapper  -->
            </div>
            <!-- End Wrapper -->
            <!-- All Jquery -->
            <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.js')?>"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
            <!--Menu sidebar -->
            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
            <!--stickey kit -->
            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
            <!--Date Picker-->
            <script src="<?php echo base_url('assets/css/lib/datepicker/lib/zebra_datepicker.js')?>"></script>
            <link rel="stylesheet" href="<?php echo base_url('assets/css/lib/datepicker/lib/css/default.css')?>" />
        </body>
</html>