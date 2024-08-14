<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="row">
        <div class=" col-xl-4 col-md-6 mb-4" >
            <div class="card shadow" style="width: 18rem;">
                <!-- Gambar akan responsif dan sesuai dengan frame -->
                <img class="card-img-top img-fluid" src="<?= base_url() ?>/assets/img/Menara.png" alt="Card image cap" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Water Tower Status</h5>
                    <p class="card-text">Monitoring status ketersediaan air pada Water tower.</p>
                    <a href="<?= base_url() ?>/dashboard/Menara" class="btn btn-primary mt-2">Lihat</a>
                </div>
            </div>
        </div>
        <!-- Earnings (Annual) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow" style="width: 18rem;">
                <img class="card-img-top img-fluid" src="<?= base_url() ?>/assets/img/Node.png" alt="Card image cap" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">loRa Node</h5>
                    <p class="card-text">Monitoring penggunaan Air bersih pada masing-masing gedung di kawasan Perum Peruri Karawang.</p>
                    <a href="<?= base_url()?>/dashboard/MAKO" class="btn btn-primary">Lihat</a>
                </div>
            </div> 
        </div>

        <!-- Tasks Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card shadow" style="width: 18rem;">
                <!-- Gambar akan responsif dan sesuai dengan frame -->
                <img class="card-img-top img-fluid" src="<?= base_url() ?>/assets/img/Valve.png" alt="Card image cap" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">Supply Bank Indonesia</h5>
                    <p class="card-text">Monitoring Supply dan Penggunaan Air kawasan Bank indonesia Karawang.</p>
                    <a href="<?= base_url()?>/dashboard/BI" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
