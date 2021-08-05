 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
         <h1>
             Dashboard
         </h1>
     </section>

     <!-- Main content -->
     <section class="content">
         <div class="row">
             <!-- Dashboard Penduduk -->
             <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-aqua">
                     <span class="info-box-icon"> <i class="fa fa-users"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text">Penduduk</span>
                         <span class="info-box-number"><?= $this->db->count_all_results('penduduk'); ?></span>
                     </div>
                 </div>
             </div>

             <!-- Dashboard Data Pindah -->
             <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-yellow">
                     <span class="info-box-icon"> <i class="fa fa-copy"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text">Data Pindah</span>
                         <span class="info-box-number"><?= $this->db->count_all_results('pindah'); ?></span>
                     </div>
                 </div>
             </div>

             <!-- Kelahiran -->
             <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-green">
                     <span class="info-box-icon"><i class="fa fa-book"></i></span>

                     <div class="info-box-content">
                         <span class="info-box-text"> Kelahiran </span>
                         <span class="info-box-number"><?= $this->db->count_all_results('kelahiran'); ?></span>                        
                     </div>
                 </div>
             </div>

             <!-- Kematian -->
             <div class="col-md-3 col-sm-6 col-xs-12">
                 <div class="info-box bg-red">
                     <span class="info-box-icon"><i class="fa fa-history"></i></span>
                     <div class="info-box-content">
                         <span class="info-box-text">Kematian</span>
                         <span class="info-box-number"><?= $this->db->count_all_results('kematian'); ?></span>  
                     </div>
                 </div>
             </div>
         </div>
 </div>
 </section>
 </div>