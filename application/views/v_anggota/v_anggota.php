<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">Anggota</h2>
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
                    <li class="active">Anggota</li>
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
                                <h5>Data Anggota</h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <?php if ($akses['add'] == 1) { ?>
                                <?php if ($akses['add'] == 1) { ?>
                                    <a href="<?= base_url('anggota/tambah')  ?>" class="btn btn-primary mb-20">
                                        <i class="fa fa-plus text-white"></i>
                                        Tambah Data Anggota
                                    </a>
                                <?php  } ?>
                            <?php  } ?>
                            <table id="dataSiswaIndex" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Jabatan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataanggota as $data) : ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td><img src="<?= base_url() ?>assets/img/anggota/<?= $data->foto ?>" width="100px" )"></td>
                                            <td><?= $data->nama; ?></td>
                                            <td><?= $data->jabatan; ?></td>
                                            <td style="min-width: 175px;">
                                                <center>
                                                    <div class="btn-group">
                                                        <?php if ($akses['edit'] == 1) { ?>
                                                            <a href="<?= base_url('anggota/ubah/') . $data->id;  ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                        <?php  } ?>
                                                        <?php if ($akses['delete'] == 1) { ?>
                                                            <a href="<?= base_url('anggota/hapus/') . $data->id ?>" class="btn btn-danger" onclick="return confirm('Yakin untuk menghapus?')"><i class="fa fa-trash"></i></a>
                                                        <?php  } ?>
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