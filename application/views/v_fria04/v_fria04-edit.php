<div class="main-page">
    <div class="container-fluid bg-white">
        <div class="row page-title-div">
            <div class="col-sm-6">
                <h2 class="title">FR.IA.04. PENJELASAN SINGKAT PROYEK TERKAIT PEKERJAAN / KEGIATAN TERSTRUKTUR LAINNYA</h2>
                <p class="sub-title">LSP P1 - SMK NEGERI 9 GARUT</p>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <?= $this->session->flashdata('alert'); ?>
                </div>
            </div>
        </div>
        <form method="post" action="<?= base_url('fria04/edt_process')  ?>" enctype="multipart/form-data">
            <div class="row panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <table width="100%" cellpadding="4" cellspacing="4" border="1">
                            <tr>
                                <td rowspan="2">Skema Sertifikasi<br>
                                    ( <?= $dataskema["jenis_skema"] ?> )</td>
                                <td>Judul</td>
                                <td>:</td>
                                <td><?= $dataskema["judul_skema"] ?></td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?= $dataskema["nomor_skema"] ?></td>
                            </tr>
                        </table>
                        <i>( * ) Wajib di Isi</i>
                        <div class="form-group has-feedback">
                            <label for="username5">Daftar Unit</label>
                            <select name="daftar_unit[]" class="js-states form-control" id="js-states-mul" multiple="multiple">
                                <?php
                                $daftar_unit = explode("#", $datafr['daftar_unit']);
                                ?>
                                <?php foreach ($dataunit as $du) : ?>
                                    <option value="<?= $du->id ?>" <?php if ((in_array($du->id, $daftar_unit, true))) {
                                                                        echo " selected";
                                                                    } ?>><?= $du->judul_unit ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="username5">Hal yang harus dipersiapkan atau dilakukan atau dihasilkan untuk suatu kegiatan terstruktur:</label>
                            <input type="hidden" name="idskema" value="<?= $dataskema['id'] ?>">
                            <input type="hidden" name="id" value="<?= $datafr['id'] ?>">
                            <textarea class="textarea" name="hasil" placeholder="Silahkan tuliskan SOP disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $datafr['hasil'] ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="username5">Hal yang perlu didemonstrasikan</label>
                            <textarea class="textarea" name="demonstrasi" placeholder="Silahkan tuliskan SOP disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?= $datafr['demonstrasi'] ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <a href="<?= base_url('fria04/index/' . $dataskema['id']) ?>" class="btn btn-primary btn-labeled"><i class="fa fa-arrow-left"></i>Kembali</a>
                            <button type="Submit" class="btn btn-warning btn-labeled">
                                <i class="fa fa-save"></i> Simpan Data Soal
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- /.row -->
    </div>
</div>