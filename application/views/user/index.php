
<!-- Begin Page Content -->
<div class="container-fluid">

                    <!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><strong><?= $title; ?></strong></h1>
<div class="row">
    <div class="col-lg-6">
        <?= $this->session->flashdata('message'); ?>
    </div>
</div>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <div class="img">
            <img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="card-img" >
            </div>
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-tittle"><?= $user['name'];?></h5>
                <p class="card-text"><?= $user['email'];?></p>
                <p class="card-text"><small class="text-muted">Member Since, <?=date('d-M-Y', $user['date_created']);?></small></p>
            </div>
        </div>
    </div>
</div>
    
                 <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
       
       