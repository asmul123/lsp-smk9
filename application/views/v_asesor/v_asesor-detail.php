<div class="main-page" style="width:100vw;">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">Asesor</h2>
                <p class="sub-title">LSP P1 - SMK NEGERI 9 GARUT</p>
            </div>
        </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
            <div class="col-sm-6">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url('/') ?>"><i class="fa fa-home"></i>Beranda</a></li>
                    <li>Referensi</li>
                    <li class="active">Asesor</li>
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
                                <h5>Data Asesor</h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <table class="table">
                                <tr>
                                    <td>Foto</td>
                                    <td>:</td>
                                    <td><img src="<?= base_url() ?>assets/img/asesor/<?= $dataasesor['foto']; ?>" width="150px"></td>
                                </tr>
                                <tr>
                                    <td>No MET</td>
                                    <td>:</td>
                                    <td><?= $dataasesor['no_met']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $dataasesor['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pengguna</td>
                                    <td>:</td>
                                    <td><?= $dataasesor['username']; ?></td>
                                </tr>
                            </table>
                            <button onclick=" history.go(-1);" class="btn btn-primary"><i class="fa fa-arrow-left"></i>Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
<!-- /.section -->
</div>
</div>
</div>