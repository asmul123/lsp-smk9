<div class="main-page">
    <div class="container-fluid bg-white">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">FR.APL-01. PERMOHONAN SERTIFIKASI KOMPETENSI</h2>
                <p class="sub-title">LSP P1 - SMK NEGERI 9 GARUT</p>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <?= $this->session->flashdata('alert'); ?>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header p-2">
                                <?php
                                $HAD = $this->Maksesasesi->getApl01Asesi($idasesi);
                                if ($HAD) {
                                    if ($HAD['status'] == 1 or $HAD['status'] == 2) {
                                        $disabled = "disabled";
                                    } else {
                                        $disabled = "";
                                    }
                                } else {
                                    $disabled = "";
                                }
                                ?>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#apl01" aria-controls="apl01" role="tab" data-toggle="tab">Formulir APL-01</a></li>
                                    <li role="presentation"><a href="#unit" aria-controls="unit" role="tab" data-toggle="tab">Data Sertifikasi</a></li>
                                    <li role="presentation"><a href="#bukti" aria-controls="bukti" role="tab" data-toggle="tab">Data Bukti</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content bg-white p-15">
                                    <div role="tabpanel" class="tab-pane active" id="apl01">
                                        <?php if ($HAD) {
                                            if ($HAD['status'] == 1) {
                                        ?>
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h5><i class="fa fa-exclamation-triangle"></i> Status Data!</h5>
                                                    Anda telah mengisi Formulir APL-01, dan sedang dilakukan pemeriksaan oleh Maneger Sertifikasi!
                                                </div>
                                            <?php } else if ($HAD['status'] == 2) {
                                            ?>
                                                <div class="alert alert-success alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h5><i class="fa fa-check"></i> Status Data!</h5>
                                                    Formulir APL-01 Anda telah diterima, anda bisa melanjutkan mengisi formulir APL-02!<br>
                                                    Catatan : <?= $HAD['catatan'] ?>
                                                </div>
                                            <?php } else if ($HAD['status'] == 3) {
                                            ?>
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <h5><i class="fa fa-ban"></i> Status Data!</h5>
                                                    Data Anda ditolak, silahkan perbaiki data Anda!<br>
                                                    Catatan : <?= $HAD['catatan'] ?>
                                                </div>
                                        <?php }
                                        } ?>
                                        <form action="<?= base_url('aksesasesi/apl01_process') ?>" method="POST">
                                            <h3 class="card-title">Data Pribadi</h3>

                                            <div class="form-group left-icon">
                                                <label for="name2">Nama Lengkap</label>
                                                <span class="fa fa-user form-left-icon"></span>
                                                <input type="hidden" class="form-control" id="id_asesi" name="id_asesi" value="<?= $idasesi ?>">
                                                <input type="text" class="form-control" id="name" name="nama_lengkap" readonly value="<?= $this->session->userdata('nama') ?>">
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="nik">No. KTP/NIK/Paspor</label>
                                                <span class="fa fa-pencil form-left-icon"></span>
                                                <input type="text" class="form-control" id="name" name="nik" placeholder="NIK" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                            echo $HAD['nik'];
                                                                                                                                                        } ?>" required>
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <span class="fa fa-map form-left-icon"></span>
                                                <input type="text" class="form-control" id="name" name="tempat_lahir" placeholder="Tempat Lahir" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                                                echo $HAD['tempat_lahir'];
                                                                                                                                                                            } ?>" required>
                                            </div>

                                            <!-- /.form group -->
                                            <div class="form-group left-icon">
                                                <label>Tanggal Lahir</label>
                                                <span class="fa fa-calendar form-left-icon"></span>
                                                <input type="date" class="form-control datepicker" name="tgl_lahir" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                echo $HAD['tgl_lahir'];
                                                                                                                                            } ?>" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label>Jemis Kelamin</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="radio" name="jk" value="L" <?= $disabled ?> <?php if ($HAD) {
                                                                                                                            if ($HAD['jenis_kelamin'] == "L") {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                        } ?> required>
                                                        </span>
                                                        <input type="text" class="form-control" value="Laki-laki" disabled>
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                                <!-- /.col-lg-6 -->
                                                <div class="col-lg-3">
                                                    <label>&nbsp;</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="radio" name="jk" value="P" <?= $disabled ?> <?php if ($HAD) {
                                                                                                                            if ($HAD['jenis_kelamin'] == "P") {
                                                                                                                                echo "checked";
                                                                                                                            }
                                                                                                                        } ?> required>
                                                        </span>
                                                        <input type="text" class="form-control" value="Perempuan" disabled>
                                                    </div>
                                                    <!-- /input-group -->
                                                </div>
                                                <!-- /.col-lg-6 -->
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="kebangsaan">Kebangsaan</label>
                                                <span class="fa fa-pencil form-left-icon"></span>
                                                <input type="text" class="form-control" id="name" name="kebangsaan" placeholder="Kebangsaan" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                                            $HAD['kebangsaan'];
                                                                                                                                                                        } ?>" required>
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="tempat_lahir">Alamat Rumah</label>
                                                <span class="fa fa-map form-left-icon"></span>
                                                <textarea class="form-control" name="alamat_rumah" rows="3" placeholder="Alamat Rumah" <?= $disabled ?> required><?php if ($HAD) {
                                                                                                                                                                        echo $HAD['alamat_rumah'];
                                                                                                                                                                    } ?></textarea>
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="kodepos">Kode Pos</label>
                                                <span class="fa fa-home form-left-icon"></span>
                                                <input type="number" class="form-control" id="name" name="kode_pos" placeholder="Kode Pos" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                                        echo $HAD['kode_pos'];
                                                                                                                                                                    } ?>" required>
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="telp">No.Telp/HP</label>
                                                <span class="fa fa-book form-left-icon"></span>
                                                <input type="text" class="form-control" id="name" name="telp" placeholder="No. Telp/HP" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                                    echo $HAD['telp'];
                                                                                                                                                                } ?>" required>
                                            </div>

                                            <div class="form-group left-icon">
                                                <label for="telp">Email</label>
                                                <span class="fa fa-envelope form-left-icon"></span>
                                                <input type="email" class="form-control" id="name" name="mail" placeholder="Email Aktif" <?= $disabled ?> value="<?php if ($HAD) {
                                                                                                                                                                        echo $HAD['email'];
                                                                                                                                                                    } ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanda Tangan</label>
                                                <?php if ($HAD) {
                                                    if ($HAD['status'] == 1 or $HAD['status'] == 2) {
                                                ?>
                                                        <img src='data:<?= $HAD['ttd'] ?>' width="100%" />
                                                    <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div class="card-body">
                                                        <!-- canvas tanda tangan  -->
                                                        <canvas id="signature-pad" class="signature-pad"></canvas>

                                                        <!-- tombol submit  -->
                                                        <div style="float: left;">
                                                            <button type="button" id="btn-submit" class="btn btn-primary">
                                                                Set Tanda Tangan
                                                            </button>
                                                        </div>

                                                        <div style="float: right;">
                                                            <!-- tombol ganti warna  -->
                                                            <button type="button" class="btn btn-success" id="change-color">
                                                                Ganti Warna
                                                            </button>

                                                            <!-- tombol undo  -->
                                                            <button type="button" class="btn btn-dark" id="undo">
                                                                <span class="fa fa-undo"></span>
                                                                Batal
                                                            </button>

                                                            <!-- tombol hapus tanda tangan  -->
                                                            <button type="button" class="btn btn-danger" id="clear">
                                                                <span class="fa fa-eraser"></span>
                                                                Hapus
                                                            </button>

                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type='hidden' id='output' name="ttd"><br />
                                                        <!-- Preview image -->
                                                        <img src='' id='sign_prev' style='display: none;' />
                                                    </div>
                                                <?php }
                                                ?>
                                            </div>
                                            <div class="form-group">
                                                <label>Persetujuan</label>
                                                <div class="input-group">
                                                    <input type="checkbox" class="icheck-primary d-inline" name="persetujuan" value="Ya" <?= $disabled ?> <?php if ($disabled != "") {
                                                                                                                                                                echo "checked";
                                                                                                                                                            } ?> required>&nbsp;&nbsp;Saya telah memeriksa formulir ini, dan telah memastikan data yang diinputkan sudah benar!
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="submit" id="btn-submit" class="btn btn-primary" name="simpan_apl01" value="Ajukan" <?= $disabled ?>>
                                                </div>
                                                <!-- /.input group -->
                                            </div>
                                        </form>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="unit">
                                        <?php
                                        $data_skema = $this->Mskema->getskemadetail($skema['id_skema']);
                                        ?>
                                        <table width="100%" border='1' cellpadding="4" cellspacing="0">
                                            <tr>
                                                <td rowspan="2">Skema Sertifikasi<br>
                                                    ( <?= $data_skema["jenis_skema"] ?> )</td>
                                                <td>Judul</td>
                                                <td>:</td>
                                                <td><?= $data_skema["judul_skema"] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor</td>
                                                <td>:</td>
                                                <td><?= $data_skema["nomor_skema"] ?></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" rowspan="5">Tujuan Asesmen</td>
                                                <td>:</td>
                                                <td><input type="checkbox" disabled checked> Sertifikasi</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" disabled> Sertifikasi Ulang</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" disabled> Pengakuan Kompetensi Terkini (PKT)</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" disabled> Rekognisi Pembelajaran Lampau</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td><input type="checkbox" disabled> Lainnya</td>
                                            </tr>
                                        </table>
                                        <hr>
                                        Daftar Unit Kompetensi sesuai kemasan :
                                        <hr>
                                        <table class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Unit</th>
                                                    <th>Judul Unit</th>
                                                    <th>Jenis Standar (Standar Khusus/Standar Internasional/SKKNI)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $No     = 1;
                                                $data_unit = $this->Mskema->getunit($data_skema['id']);
                                                foreach ($data_unit as $du) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $No . '. '; ?></td>
                                                        <td><?= $du->kode_unit ?></td>
                                                        <td><?= $du->judul_unit ?></td>
                                                        <td><?= $du->jenis_standar ?></td>
                                                    </tr> <?php
                                                            $No++;
                                                        }
                                                            ?>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="bukti">
                                        <table width="100%">
                                            <tr>
                                                <td align="left">
                                                    <h3 class="card-title">Daftar Persyaratan</h3>
                                                </td>
                                                <td align="right"><a href="#" data-toggle="modal" data-target="#tambahBukti"><button class="btn btn-primary btn-animated btn-wide"><i class="fa fa-plus"></i> Tambah</button></a></td>

                                            </tr>
                                        </table>
                                        <!-- Modal -->
                                        <div class="modal fade" id="tambahBukti" tabindex="-1" role="dialog" aria-labelledby="tambahBukti">
                                            <form method="post" action="<?= base_url('aksesasesi/add_bukti')  ?>" enctype="multipart/form-data">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="tambahBukti">Upload Persyaratan <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row panel">
                                                                <div class="panel-body">
                                                                    <div class="col-md-12">
                                                                        <i>( * ) Wajib di Isi</i>
                                                                        <div class="form-group has-feedback">
                                                                            <label for="name5">Jenis Persyaratan*</label>
                                                                            <select name="id_bukti" class="form-control">
                                                                                <?php
                                                                                $persyaratan = $this->Mapl01->getpersyaratan($data_skema['id']);
                                                                                foreach ($persyaratan as $ps) : ?>
                                                                                    <option value="<?= $ps['id'] ?>"><?= $ps['bukti'] ?></option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                            <span class="help-block">Pilih Jenis Persyaratan</span>
                                                                        </div>
                                                                        <div class="form-group has-feedback">
                                                                            <label for="exampleInputPassword5">File Persyaratan</label>
                                                                            <input type="file" class="form-control" name="file_bukti">
                                                                            <span class="fa fa-file form-control-feedback"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="btn-group" role="group">
                                                                <button type="button" class="btn btn-gray btn-wide btn-rounded" data-dismiss="modal"><i class="fa fa-times"></i>Batal</button>
                                                                <button type="submit" class="btn bg-success btn-wide btn-rounded"><i class="fa fa-check"></i>Simpan</button>
                                                            </div>
                                                            <!-- /.btn-group -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Jenis Persyaratan</th>
                                                    <th>File Persyaratan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $No     = 1;
                                                $SQL     = $this->db->query("SELECT tb_bukti_asesi.id as id_bukti_asesi, bukti, file_bukti FROM tb_bukti_asesi left join tb_bukti on (tb_bukti_asesi.id_bukti=tb_bukti.id) where id_asesi='$idasesi'")->result_array();
                                                foreach ($SQL as $hSQL) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $No . '. '; ?></td>
                                                        <td><?= $hSQL["bukti"] ?></td>
                                                        <td><a href="<?= base_url() ?>assets/bukti/<?= $hSQL["file_bukti"] ?>" target="_blank" class="btn btn-info"><i class="fa fa-download"></i> Download</a></td>
                                                        <td><a href="<?= base_url() ?>aksesasesi/hapusbukti/<?= $hSQL["id_bukti_asesi"] ?>" onclick="return confirm('Yakin untuk menghapus?')" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
                                                    </tr> <?php
                                                            $No++;
                                                        }
                                                            ?>
                                                </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- /.card-header -->
                        </div>
                        <!-- /.nav-tabs-custom -->

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.row -->
    </div>
</div>