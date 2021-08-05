<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>TAMBAH DATA KARTU KELUARGA DESA SUCI</b></h4>
                                <hr>
                            </div>

                            <div class="box-body">

                                <?php
                                if ($this->session->flashdata('sukses')) {
                                    ?>
                                <div class="callout callout-success">
                                    <p style="font-size:14px">
                                        <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                                    </p>
                                </div>
                                <?php
                                }
                                ?>

                                <form action="<?php echo base_url('kartu/proses_tambah'); ?>" method="post">


                                    <div class="form-group">
                                        <div>NO KK</div>
                                        <input type="text" name="no_kk" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <div>NIK</div>
                                        <input type="text" name="nik" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <div>Kepala Keluarga</div>
                                        <input type="text" name="kepala_keluarga" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <div>Alamat</div>
                                        <textarea name="alamat" class="form-control" rows="3" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" class="form-control" required>
                                            <option value="" selected disabled>- pilih -</option>
                                            <option value="Laki Laki">Laki Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="<?php echo base_url('kartu/tampil'); ?>"
                                            class="btn btn-danger">Batal</a>
                                    </div>
                                    <?= form_close(); ?>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</section>
</div>