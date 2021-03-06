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
                <?php include 'header_mitra.php'; ?>

                <!-- End header header -->
                <!-- Left Sidebar  -->
                <div class="container-fluid edit_form">
            <!-- Start Page Content -->
            <div class="card_edit2 col-lg-9">
                <div class="card">
                    <div class="card-body"> 
                        <h2><b>Tambahkan Mobil Anda</b></h2>
                    </div>
                </div>
            </div>
            <!-- page content -->
            <div class="card_edit2 col-lg-9"><!--mengganti ukuran form-->
                <div class="card card-outline-primary">
                    <div class="card-body">
                        <form class="form-valide" enctype='multipart/form-data' action="<?php echo site_url('c_register_mitra/insert_data_mobil/'.$this->session->userdata('id'));?>" method="post" >

                            <div class="form-body">
                                <div class="row p-t-20">
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <div>
                                                <label class="control-label">Nomor Polisi
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-nomorPolisi" name="val-nomorPolisi" placeholder="Nomor Polisi">
                                                </div> 
                                            </div>
                                        </div>
                                        <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Merk Mobil
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-merkMobil" name="val-merkMobil">
                                                            <option value="">Pilih Merk Mobil Anda</option>
                                                                <?php foreach($merk as $ab){ ?>
                                                                    <option value="<?php echo $ab['id_merk']; ?>"><?php echo $ab['merk']; ?></option>
                                                                <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                <label class="control-label">Tipe Mobil
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-tipeMobil" name="val-tipeMobil" placeholder="Masukkan tipe mobil anda (tingkatan mobil)">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Tahun Rakit
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-tahunRakit" name="val-tahunRakit" placeholder="Masukkan tahun rakit mobil anda">
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
                                                <label class="control-label">Nomor Rangka
                                                    <span class="text-danger">*</span>
                                                </label>
                                                    <input type="text" class="form-control" id="val-nomorRangka" name="val-nomorRangka" placeholder="Masukkan nomor rangka mobil anda">
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <div>
                                                        <label class="control-label">Nomor Mesin
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="val-nomorMesin" name="val-nomorMesin" placeholder="Masukkan nomor mesin mobil anda">
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
                                                        <label class="control-label">Bahan Bakar
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-bahanBakar" name="val-bahanBakar">
                                                            <option value="">Pilih bahan bakar mobil</option>
                                                            <option>Premium</option>
                                                            <option>Solar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                            <!--/span-->
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                <div>
                                                    <label class="control-label">Jumlah CC Mobil
                                                         <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="val-jumlahCC" name="val-jumlahCC" placeholder="Masukkan jumlah CC mobil anda (ex:1500)">
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
                                                        <label class="control-label">Transmisi
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-transmisi" name="val-transmisi">
                                                            <option value="">Pilih transmisi mobil</option>
                                                            <option>Matic</option>
                                                            <option>Manual</option>
                                                        </select>
                                                    </div>
                                                </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                <label class="control-label">Jumlah Penumpang
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <select class="form-control" id="val-jumlahPenumpang" name="val-jumlahPenumpang">
                                                            <option value="">Pilih jumlah penumpang mobil</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                        </select>
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
                                                    <label class="control-label">Biaya Sewa
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="val-biayaSewa" name="val-biayaSewa" placeholder="Masukkan biaya sewa mobil (ex: 200000)">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="exampleInputFile">Gambar Mobil</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="file" class="form-control-file" id="val-gambarMobil" name="val-gambarMobil">

                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar mobil</small>
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
                                                    <label for="exampleInputFile">Gambar STNK</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="file" class="form-control-file" id="val-gambarSTNK" name="val-gambarSTNK" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar STNK mobil</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <label for="exampleInputFile">Gambar BPKB</label>
                                                    <span class="text-danger">*</span>
                                                    <input type="file" class="form-control-file" id="val-gambarBPKB" name="val-gambarBPKB" aria-describedby="fileHelp">
                                                    <small id="fileHelp" class="form-text text-muted">Pilih gambar BPKB mobil</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->                           
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="">
                                                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1">
                                                        <span class="css-control-indicator">Saya mengisi data dengan BENAR</span> 
                                                        <a href="#">Kebijakan Privasi RentCar
                                                            <span class="text-danger">*</span>
                                                        </a>
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" name="btnSave" value="save" class="btn col-lg-6 btn-success">TAMBAH</button>
                                        </div>
                                        <!--/span-->
                                    </div>
                                        <!--/span-->
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                </form>
                </div>
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
            <!--Header Data Kota -->
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
            <!--End Header Data Kota -->

            <!-- Form validation -->
            <script src="<?php echo base_url('assets/js/lib/form-validation/jquery.validate.min.js')?>"></script>
            <script src="<?php echo base_url('assets/js/lib/form-validation/car.validate-init.js')?>"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
        </body>
</html>