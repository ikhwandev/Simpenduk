<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA KARTU KELUARGA</b></h4>
                <hr>
            </div>

            <div class="box-body table-responsive">

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

                <p>
                    <a href="<?php echo base_url('kartu/tambah'); ?>" class="btn btn-success">Tambah Data
                        Kartu</a>


                    <a href="<?php echo base_url('#'); ?>" target="_blank">
                    </a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">No KK</th>
                            <th style="text-align:center">NIK</th>
                            <th style="text-align:center">Kepala Keluarga</th>
                            <th style="text-align:center">Alamat</th>
                            <th style="text-align:center">Jenis Kelamin</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $no = 1;
            foreach ($kartu as $kartu) {
              ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no; ?></td>
                            <td><?php echo $kartu->no_kk; ?></td>
                            <td><?php echo $kartu->nik; ?></td>
                            <td><?php echo $kartu->kepala_keluarga; ?></td>
                            <td><?php echo $kartu->alamat; ?></td>
                            <td><?php echo $kartu->jenis_kelamin; ?></td>
                            <td style="text-align:center">
                                <a href="<?php echo base_url('kartu/edit/' . $kartu->no_kk); ?>"
                                    class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('kartu/hapus/' . $kartu->no_kk); ?>"
                                    class="btn btn-danger btn-xs"
                                    onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                        class="fa fa-trash-o"></i> Hapus</a>
                                <a href="<?php echo base_url('kartu/detail/' . $kartu->no_kk); ?>"
                                    class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
                        </tr>
                        </td>
                        <?php
              $no++;
            }
            ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>