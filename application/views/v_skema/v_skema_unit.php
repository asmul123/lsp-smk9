<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">Unit Skema </h2>
                <p class="sub-title">LSP P1 - SMK NEGERI 9 GARUT</p>
            </div>
            <!-- /.col-sm-6 -->
            <!-- <div class="col-sm-6 right-side">
                <a class="btn bg-black toggle-code-handle tour-four" role="button">Toggle Code!</a>
            </div> -->
            <!-- /.col-sm-6 text-right -->
        </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('/') ?>"><i class="fa fa-home"></i>Beranda</a></li>
                    <li>Referensi</li>
                    <li class="active">Skema - Unit Skema</li>
                </ul>
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <?= $this->session->flashdata('alert'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Data Unit pada <?= $dataskema['judul_skema'] ?></h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <a href="<?= base_url('skema')  ?>" class="btn btn-warning mb-20">
                                <i class="fa fa-arrow-left text-white"></i>
                                Kembali
                            </a>
                            <a href="<?= base_url('skema/tambah_unit/' . $dataskema['id'])  ?>" class="btn btn-primary mb-20">
                                <i class="fa fa-plus text-white"></i>
                                Tambah Data Unit
                            </a>
                            <table id="dataSiswaIndex" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Unit</th>
                                        <th class="text-center">Judul Unit</th>
                                        <th class="text-center">Jenis Standar</th>
                                        <th class="text-center">Jumlah Elemen</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataunit as $data) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td class="text-center"><?= $data->kode_unit ?></td>
                                            <td><?= $data->judul_unit; ?></td>
                                            <td><?= $data->jenis_standar; ?></td>
                                            <td>
                                                <?php
                                                $cekakun = $this->Mskema->cekElemen($data->id);
                                                if ($cekakun == "") {
                                                ?>
                                                    <a href="<?= base_url() ?>skema/tambah_elemen/<?= $data->id ?>" class="btn btn-warning">Tambah Elemen</a>
                                                <?php
                                                } else {
                                                ?>
                                                    <a href="<?= base_url() ?>skema/elemen/<?= $data->id ?>" class="btn btn-success"><?= $cekakun ?> Elemen</a>
                                                <?php } ?>
                                            </td>
                                            <td style="min-width: 175px;">
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('skema/ubah_unit/') . $data->id;  ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?= base_url('skema/hapus_unit/') . $data->id ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus?')"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.section -->
</div>
</div>
</div>