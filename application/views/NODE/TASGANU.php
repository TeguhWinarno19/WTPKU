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
                                <img class="card-img-top" src="<?= base_url() ?>assets/img/Node.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Node TASGANU</h5>
                                    <p class="card-text">Node yang akan mengukur konsumsi air yang meliputi Kawasan Gedung Produksi Kertas Berharga Non-uang</p>
                                </div>                                
                            </div>
                        </div>
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card border-left-primary shadow mb-2 py-2">
                                <div class="card-body m-2">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Water Meter Value</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $field3 ?> m<sup>3</sup></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-water fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Grafik Water Meter</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <iframe width="600" height="260" style="border: 1px solid #cccccc;" src="<?= $grafik ?>"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->