<?php
if ($field8 == 1){
    $status = "Aman";
    $warna = "success";
}
else{
    $status = "tidak aman";
    $warna = "danger";
}
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-1">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tentang Perangkat ini</h6>
                                </div>
                                <img class="card-img-top" src="<?= base_url() ?>assets/img/Menara.png" alt="Card image cap" style="height: 300px; object-fit: contain;">
                                <div class="card-body">
                                    <h5 class="card-title">Water Tower Monitoring</h5>
                                    <p class="card-text">Node yang memonitoring status ketersediaan air pada Water tower.</p>
                                </div>                                
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card border-left-<?= $warna; ?> shadow mb-2 py-2">
                                <div class="card-body m-2">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-<?= $warna; ?> text-uppercase mb-1">Water Tower Status</div>
                                            <div class="h5 mb-0 font-weight-bold text-<?= $warna; ?> "><?= $status ?> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-water fa-2x text-<?= $warna; ?>"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-left-<?= $warna; ?> shadow mb-2 py-2">
                                <div class="card-body m-2">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-<?= $warna; ?> text-uppercase mb-1">Update Terakhir</div>
                                            <div class="h5 mb-0 font-weight-bold text-<?= $warna; ?> "><?= $created_at ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->