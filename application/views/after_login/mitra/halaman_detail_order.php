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
            <title>RentCar | Detail Order Mobil</title>
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
            <!-- untuk css footer -->
            <style type="text/css">
                #warna_teks{
                    color: #444444; 
                }
                #warna_teks2{
                    color: white; 
                }
                #warna_teks3{
                    color: #8F8F8F;
                }
            </style>
            <?php function format_ribuan ($nilai){
                return number_format ($nilai, 0, ',', '.');
            } ?>
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
                
                <div class="container-fluid edit_form">
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body"> 
                                    <table border="0">
                                        <tbody>
                                            <tr>
                                                <td style="font-size: 20pt">
                                                    <?php if ($valid->status == "Berhasil") {?>
                                                        <i class="fa fa-check-circle" style="color: #3374BA"></i></td>
                                                    <?php } ?>
                                                    <?php if ($valid->status == "Ditolak") {?>
                                                        <i class="fa fa-times-circle" style="color: #EF5451"></i></td>
                                                    <?php } ?>
                                                    <?php if ($valid->status == "Masih di proses") {?>
                                                        <i class="fa fa-warning" style="color: orange"></i></td>
                                                    <?php } ?>
                                                <td width="10"></td>
                                                <td width="700"><h2 style="font-weight: bold;">Pemesanan <?php echo $valid->status; ?></h2></td>
                                                <td width="280" id="warna_teks" style="font-size: 15pt">ID. Pesanan <b> <?php echo $valid->id_pemesanan; ?></b></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td colspan="2" id="warna_teks"><?php echo $valid->hari_b; ?>, <?php echo $valid->tgl_b; ?> <?php echo $valid->bulan_b; ?> <?php echo $valid->tahun_b; ?>, <?php echo $valid->waktu; ?></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th width="130"></th>
                                            <th width="400"></th>
                                            <th width="130"></th>
                                            <th width="200"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Detail Pesanan</h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Dipesan oleh</td>
                                            <td colspan="3" id="warna_teks"><b> <?php echo $valid->nama; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Pemesanan</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->hari_b; ?>, <?php echo $valid->tgl_b; ?> <?php echo $valid->bulan_b; ?> <?php echo $valid->tahun_b; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Detail Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->email; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">No. Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->no_hp_pengguna; ?></b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th width="130"></th>
                                            <th width="400"></th>
                                            <th width="130"></th>
                                            <th width="200"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#12505E"></td>
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Rental Mobil - <?php echo $valid->merk; ?></h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="2" rowspan="3" align="center"><img src="<?=base_url()?>uploads/<?=$valid->gbr_mobil;?>" alt="homepage" class="dark-logo" width="280" /></td>
                                            <td colspan="4" id="warna_teks3">Biaya Rental Mobil ini</td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="4" id="warna_teks"><b>Rp <?php echo format_ribuan($valid->biaya); ?></b>/hari</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#093645" height="50"></td>
                                            <td colspan="4" style="font-size: 15pt">
                                                <?php if ($valid->status == "Berhasil") {?>
                                                    <b><span class="badge badge-info"><i class="fa fa-check-circle"></i> Pemesanan <?php echo $valid->status; ?></span></b></td>
                                                <?php } ?>
                                                <?php if ($valid->status == "Ditolak") {?>
                                                    <b><span class="badge badge-danger"><i class="fa fa-times-circle"></i> Pemesanan <?php echo $valid->status; ?></span></b></td>
                                                <?php } ?>
                                                <?php if ($valid->status == "Masih di proses") {?>
                                                    <b><span class="badge badge-warning"><i class="fa fa-warning"></i> Pemesanan <?php echo $valid->status; ?></span></b></td>
                                                <?php } ?>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card_edit2 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <table border="0" class="col-lg-12">
                                    <thead>
                                        <tr>
                                            <th width="20"></th>
                                            <th width="130"></th>
                                            <th width="400"></th>
                                            <th width="130"></th>
                                            <th width="200"></th>
                                            <th></th>
                                            <th></th>
                                            <th width="10"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td height="30" align="left" colspan="6"><h2 style="font-weight: bold;">Detail Pesanan</h2></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Nama Produk</td>
                                            <td colspan="3" id="warna_teks"><b>Rental Mobil - <?php echo $valid->merk; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Nama Pemesan</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->nama; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Alamat Pemesan</td>
                                            <td colspan="3" id="warna_teks"><b> <?php echo $valid->alamat; ?> - <?php echo $valid->kota; ?>, <?php echo $valid->provinsi; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">No. Kontak</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->no_hp; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Rental</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->hari_r; ?>, <?php echo $valid->tgl_r; ?> <?php echo $valid->bulan_r; ?> <?php echo $valid->tahun_r; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Tanggal Pengembalian</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->hari_p; ?>, <?php echo $valid->tgl_p; ?> <?php echo $valid->bulan_p; ?> <?php echo $valid->tahun_p; ?></b></td>
                                            <td></td>
                                        </tr>
                                        <?php if ($valid->status == "Berhasil") {?>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Lama Rental</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->selisih; ?> Hari</b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Total Biaya Rental</td>
                                            <td colspan="3" id="warna_teks"><b>Rp <?php echo format_ribuan($valid->total); ?></b></td>
                                            <td></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Deskripsi Produk</td>
                                            <td colspan="3" id="warna_teks"><b>Transmisi yang digunakan: <?php echo $valid->transmisi; ?>, Jumlah CC:<?php echo $valid->jlh_cc; ?>, Bahan Bakar yang digunakan: <?php echo $valid->bahan_bakar; ?>, Jumlah penumpang maksimal: <?php echo $valid->jlh_penumpang; ?> Orang</b></td>
                                            <td></td>
                                        </tr>
                                        <tr bgcolor="#E7EAED">
                                            <td height="50"></td>
                                            <td colspan="2" id="warna_teks3">Catatan</td>
                                            <td colspan="3" id="warna_teks"><b><?php echo $valid->ket; ?></b></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php if ($valid->status == "Masih di proses") {?>
                    <div class="card_edit2 col-lg-9">
                        <table border="0">
                            <tbody>
                                <tr>
                                    <td width="550">
                                        <center>
                                            <button type="button" class="btn col-lg-6 btn-danger" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="fa fa-warning"></i> Tidak Setuju
                                            </button>
                                            <!--Button 2-->
                                            <form action="<?php echo base_url('c_beranda_mitra/validasiOrder2/'.$valid->id_pemesanan); ?>" class="form-valide" method="post">
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning"></i> Validasi Order</h3>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Anda <b>Tidak memberikan izin</b> untuk memberikan rental kepada pihak yang bersangkutan. Anda tidak dapat mengubah keputusan ini. *s&k</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda dapat memberi pesan mengenai alasan tidak memberikan izin.</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Pesan:</label>
                                                                    <textarea class="form-control" id="message-text" placeholder="Masukkan pesan Anda (optional)" name="pesan"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Kirim</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </td>
                                    <td width="550">
                                        <center>
                                            <button type="button" class="btn col-lg-6 btn-info" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-check-square-o"></i> Setuju
                                            </button>
                                            <!--Button 1-->
                                            <form action="<?php echo base_url('c_beranda_mitra/validasiOrder1/'.$valid->id_pemesanan); ?>" class="form-valide" method="post">
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title" id="exampleModalLabel"><i class="fa fa-check-square-o"></i> Validasi Order</h3>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                  <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="col-form-label">Menyetujui hal ini berarti Anda <b>memberi Izin rental</b> kepada pihak yang berkaitan. Anda tidak dapat membatalkan apabila telah menyetujui izin. *s&k</label>
                                                                    <label for="recipient-name" class="col-form-label">Anda dapat memberi pesan mengenai kelangsungan rental mobil, nomor telepon dan alamat Anda akan kami berikan.</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="message-text" class="col-form-label">Pesan:</label>
                                                                    <textarea class="form-control" id="message-text"  name="pesan" placeholder="Masukkan pesan Anda (optional)"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Kirim</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
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
        </body>
</html>