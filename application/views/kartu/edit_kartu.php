<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>EDIT DATA KARTU KELUARGA</b></h4>
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
                <form action="<?php echo base_url('kartu/proses_edit'); ?>" method="post">
                    <div class="form-group">
                        <label>No. KK</label>
                        <input type="text" name="no_kk" value="<?php echo $kartu->no_kk; ?>" class="form-control"
                            readonly />
                    </div>

                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="nik" value="<?php echo $kartu->nik; ?>" class="form-control"
                            required />
                    </div>

                    <div class="form-group">
                        <label>Kepala Keluarga</label>
                        <input type="text" name="kepala_keluarga" value="<?php echo $kartu->kepala_keluarga; ?>" class="form-control"
                            required />
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $kartu->alamat; ?>" class="form-control"
                            required />
                    </div>

                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="select2 form-control custom-select" name="jenis_kelamin" required>
                            <option value="Laki Laki" <?php if ($kartu->jenis_kelamin == "L") echo "selected"; ?>>
                                Laki Laki
                            </option>
                            <option value="Perempuan" <?php if ($kartu->jenis_kelamin == "P") echo "selected"; ?>>
                                Perempuan
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success">Simpan</button>
                        <a href="<?php echo base_url('kartu/tampil'); ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>