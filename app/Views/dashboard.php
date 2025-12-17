<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<h1 class="h3 mb-4 text-gray-800">Dashboard Bengkel</h1>

<div class="row">

    <!-- Total Pelanggan -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Pelanggan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_pelanggan ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Suku Cadang -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Suku Cadang</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_suku_cadang ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tools fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Transaksi -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Transaksi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            <?= $total_transaksi ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <!-- Grafik -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Servis Mingguan</h6>
            </div>
            <div class="card-body">
                <canvas id="servisChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Servis Terbaru</h6>
            </div>
            <div class="card-body">
                <p><i>Data akan tampil dari database nanti...</i></p>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
let dataServis = <?= json_encode($servis_mingguan) ?>;

new Chart(document.getElementById("servisChart"), {
    type: 'line',
    data: {
        labels: ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"],
        datasets: [{
            label: "Servis",
            data: dataServis,
            borderColor: "#4e73df",
            backgroundColor: "rgba(78,115,223,0.1)",
            borderWidth: 2,
            tension: 0.4
        }]
    }
});
</script>

<?= $this->endSection(); ?>
