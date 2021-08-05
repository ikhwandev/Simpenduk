<div class="content-wrapper">
  <section class="content">
    <div class=" box box-info">
      <div class="box-header">
        <h4 style="text-align:center; margin-bottom: 30px"><b>DETAIL KARTU KELUARGA DESA SUCI</b></h4><hr>
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
      <h4><b>Data Kartu Keluarga Desa Suci</b> </h4>
      <table class="table table-striped">
        <tr>
          <th> NO KK </th>
          <td><?php echo $detail->no_kk; ?></td>
        </tr>
        <tr>
          <th> NIK </th>
          <td><?php echo $detail->nik; ?></td>
        </tr>
        <tr>
          <th>  Kepala Keluarga </th>
          <td><?php echo $detail->kepala_keluarga; ?> </td>
        </tr>
          <th> Alamat </th>
          <td><?php echo $detail->alamat; ?></td>
        </tr>
        <tr>
         <th> Jenis Kelamin </th>
         <td><?php echo $detail->jenis_kelamin; ?></td>
      </tr>
  </table>
</div>
</div>
<button onClick="goBack()".GoBack  class="btn btn-danger"> Kembali</button>
<script>
  function goBack() {
    window.history.back();
  }
</script>
</section>
</div>