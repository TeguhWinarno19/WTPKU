<?php
$persentase = $field2/$fieldlimit*100;

if ($persentase < 30){
    $status = "success";
    $status2 = "Terbuka";
}
else if ($persentase <= 50 && percentase >=20){
    $status = "warning";
    $status2 = "Akan Tertutup";
}
else{
    $status = "danger";
}

if($field2 == $fieldlimit){
    $status2 = "Tertutup";
}




?>

<!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-1">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Tentang Perangkat ini</h6>
                                </div>
                                <img class="card-img-top p-2" src="<?= base_url() ?>assets/img/Valve.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Valve Supply air BI</h5>
                                    <p class="card-text">Perangkat yang berfungsi untuk memonitor dan mengontol banyaknya debit air yang disalurkan ke kawasan Bank Indonesia Karawang.</p>
                                </div>                                
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card border-left-primary shadow mb-2 py-2">
                                <div class="card-body m-2">
                                    <div class="row no-gutters align-items-center mb-3">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Water Meter Value</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $field1 ?> m<sup>3</sup> </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pemakaian hari ini / Batas Pemakaian</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $field2 ?> m<sup>3</sup> / <?= $fieldlimit ?> m<sup>3</sup> </div>
                                            <h4 class="small font-weight-bold"><span class="float-right"><?= $persentase ?>%</span></h4>
                                            <div class="progress mb-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?= $persentase ?>%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Valve Status</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $status2 ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Pemakaian Hari ini</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <iframe width="600" height="260" style="border: 1px solid #cccccc;" src="<?= $grafik1 ?>"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->