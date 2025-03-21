<div class="main-page" style="height: 100%;">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">Import Data Asesi</h2>
                <p class="sub-title">LSP P1 SMK NEGERI 9 GARUT</p>
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
                    <li class="active">Asesi</li>
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
                                <h5>Data Asesi</h5>
                            </div>
                            <a href="<?= base_url('asesi') ?>" class="btn btn-primary ml-15"><i class="fa fa-arrow-left"></i>Kembali</a>
                        </div>
                        <div class="panel-body p-20">
                            <p>Unggah Data Asesi</p>
                            <div class="row">
                                <div class="col-lg-4 mb-20">
                                    <i><span class="mb-10" id="filename"></span></i>
                                    <form method="post" action="<?php echo base_url('asesiimport') ?>" enctype="multipart/form-data">
                                        <label for="file" class="btn btn-primary">
                                            <i class="fa fa-file"></i>
                                            Pilih File
                                        </label>
                                        <input type="file" name="file" id="file" style="display: none;" required>
                                        <button type="submit" class="btn btn-info"><i class="fa fa-check"></i>Import data</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="<?= base_url() ?>asesi/template" class="btn btn-success btn-tamplate mt-10" id="downTMP">
                                        <i class="fa fa-download"></i>
                                        Unduh Tamplate Excel
                                    </a>
                                </div>
                            </div>
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



<!-- .prop('checked', this.checked) -->