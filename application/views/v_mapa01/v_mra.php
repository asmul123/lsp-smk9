<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">Mempersiapkan Rencana Asesmen</h2>
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
                    <li class="active">Mempersiapkan Rencana Asesmen</li>
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
                                <h5>Mempersiapkan Rencana Asesmen pada <?= $dataskema['judul_skema'] ?></h5>
                            </div>
                        </div>
                        <div class="panel-body p-20">
                            <a href="<?= base_url('mapa01/index/' . $dataskema['id'])  ?>" class="btn btn-warning mb-20">
                                <i class="fa fa-arrow-left text-white"></i>
                                Kembali
                            </a>
                            <table id="dataSiswaIndex" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Kode Unit</th>
                                        <th class="text-center">Judul Unit</th>
                                        <th class="text-center">Jenis Standar</th>
                                        <th class="text-center">Status Pengisian</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($dataunit as $data) :
                                        $jmlkuk = $this->Mmapa01->getkukunit($data->id);
                                        $jmlbukti = $this->Mmapa01->getbuktiunit($data->id);
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $no++; ?></td>
                                            <td class="text-center"><?= $data->kode_unit ?></td>
                                            <td><?= $data->judul_unit; ?></td>
                                            <td><?= $data->jenis_standar; ?></td>
                                            <td style="min-width: 175px;">
                                                <div class="btn-group">
                                                    <button class="btn btn-success"><?= $jmlkuk ?> KUK</button><button class="btn btn-primary"><?= $jmlbukti ?> Bukti</button>
                                                </div>
                                            </td>
                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <a href="<?= base_url('mapa01/list_mra/') . $data->id;  ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
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