<div class="header2">
    <div class="bar_atas">
        <a href="<?php echo base_url()."index.php/auth_mitra";?>" class="jarak head1">MITRA RENTCAR</a>
            <a href="<?php echo base_url()."index.php/auth_user";?>"" class="jarak">LOGIN </a>
            <a href="<?php echo base_url()."index.php/c_register_user";?>" class="jarak">DAFTAR</a>
    </div>
</div>
<div class="header">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- Logo -->
        <div class="navbar-header">
            <a class="navbar-brand edit_logo" href="<?php echo base_url()."c_beranda";?>">
                <!-- Logo icon -->
                <b><img src="<?php echo base_url('assets/images/logo.png')?>" alt="homepage" class="dark-logo" /></b>
                <!--End Logo icon -->
                <!-- Logo text -->
            </a>
        </div>
        <form method="get" action="<?php echo base_url('c_beranda/getDataByKota/'); ?>">
            <table class>
                <tr>
                    <td>
                        <select class="form-control provinsiku" id="val-provinsi" name="val-provinsi" required="">
                            <option value="">Lokasi Provinsi Anda</option>
                                <?php foreach($provinsi as $a){ ?>
                                    <option value="<?php echo $a['id_provinsi']; ?>"><?php echo $a['provinsi']; ?></option>
                                <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-control kotaku" id="val-kota" name="val-kota" disabled="" required="">
                            <option>Lokasi Kota Anda</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="val-tglMulai" name="val-tglMulai" placeholder="Tanggal Mulai" required="">
                    </td>
                    <td>
                        <input type="text" id="val-tglKembali" name="val-tglKembali" placeholder="Tanggal Kembali" required="">
                    </td>
                    <td>
                        <button type="submit" class="btn col-lg-12 btn-success tombolku"><i class="ti-search"></i>CARI</button>
                    </td>
                </tr>
            </table>
        </form>
    </nav>
    <div class="header3">
        <table>
            <tr>
                <td width="400"></td>
                <td><a href="<?php echo base_url()."c_beranda/hlm_bantuan/";?>"><i class="fa fa-list-alt"></i> Pusat Bantuan</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda/hlm_syarat/";?>"><i class="fa fa-list-alt"></i> Syarat & Ketentuan</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda/hlm_about/";?>"><i class="fa fa-tasks"></i> Tentang RentCar</a></td>
                <td width="50"></td>
                <td><a href="<?php echo base_url()."c_beranda/hlm_cara/";?>"><i class="fa fa-user"></i> Cara Pemesanan</a></td>
            </tr>
        </table>
    </div>
</div>