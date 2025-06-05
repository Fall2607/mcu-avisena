<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<main class="main-content position-relative border-radius-lg ">
    <!-- ======= navbar ======= -->
    <?= $this->include('templates/navbar'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                        <label>FORM LABORATORIUM RSU AVISENA</label>
                        <div>
                            <button id="exportPDF" class="btn btn-danger">Export PDF</button>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2" id="contentToPrint">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img width="90px" class="float-end" src="<?= base_url('assets/img/logo-avisena.png') ?>" alt="">
                                </div>
                                <div class="col-sm-6 pt-3 text-center">
                                    <h4 class="text-bold" style="line-height: 1; font-weight: 800;">LABORATORIUM<br>RSU AVISENA</h4>
                                    <p style="font-size: 12px; line-height: 1.4;">Jl. Melong No. 170 Cimahi<br>Telp 022 - 6000830 </p>
                                </div>
                                <div class="col-sm-3">
                                    <img width="68px" class="float-start" src="<?= base_url('assets/img/logo-lars.png') ?>" alt="">
                                </div>
                            </div>
                            <hr style="border: black 1px solid;">
                            <div class="bgnya">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-6">
                                                <?= '<label>: ' . $lab['nama'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-6">
                                                <?= '<label>: ' . $lab['jenis_kelamin'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Tanggal Periksa</label>
                                            </div>
                                            <div class="col-6">
                                                <?php
                                                $date = new DateTime($lab['tgl']);
                                                echo '<label>: ' . date_format($date, 'd-m-Y') . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>No Order</label>
                                            </div>
                                            <div class="col-6">
                                                <?= '<label>: 0' . $lab['idlab'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Unit</label>
                                            </div>
                                            <div class="col-6">
                                                <?= '<label>: ' . $lab['unit'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Bagian</label>
                                            </div>
                                            <div class="col-6">
                                                <?= '<label>: ' . $lab['bagian'] . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: black 1px solid;">
                                <div class="pemeriksaan-lab">
                                    <div class="table-container">
                                        <table class='table' id="hematologiTable" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col" style="width: 10%;"><b>No</b></th>
                                                    <th scope="col"><b>Specimen</b></th>
                                                    <th scope="col"><b>Hasil</b></th>
                                                    <th scope="col"><b>Kesimpulan</b></th>
                                                    <th scope="col"><b>Nilai Normal</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>1</b></th>
                                                    <td colspan="3"><b>Hematologi</b></td>
                                                </tr>
                                                <?php
                                                $hematologiData = json_decode($lab['hematologi'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hematologiData as $key => $item_hema) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_hema['name'] . '</td>';
                                                    echo '<td>' . $item_hema['value'] . ' ' . $item_hema['satuan'] . '</td>';
                                                    echo '<td>' . $item_hema['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_hema['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>2</b></th>
                                                    <td colspan="3"><b>Hitung Jenis</b></td>
                                                </tr>
                                                <?php
                                                $hitungJenisData = json_decode($lab['hitung_jenis'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hitungJenisData as $key => $item_jenis) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_jenis['name'] . '</td>';
                                                    echo '<td>' . $item_jenis['value'] . ' ' . $item_jenis['satuan'] . '</td>';
                                                    echo '<td>' . $item_jenis['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_jenis['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr class="break-before">
                                                    <th class="text-center" scope="row"><b>3</b></th>
                                                    <td colspan="3"><b>Kimia Darah</b></td>
                                                </tr>
                                                <?php
                                                $hitungKimiaDarah = json_decode($lab['kimia_darah'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hitungKimiaDarah as $key => $item_kimia) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_kimia['name'] . '</td>';
                                                    echo '<td>' . $item_kimia['value'] . ' ' . $item_kimia['satuan'] . '</td>';
                                                    echo '<td>' . $item_kimia['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_kimia['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>4</b></th>
                                                    <td colspan="3"><b>Urinalisa</b></td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>A</b></th>
                                                    <td colspan="3"><b>Makroskopik</b></td>
                                                </tr>
                                                <?php
                                                $hitungMakroskopik = json_decode($lab['makroskopik'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hitungMakroskopik as $key => $item_makro) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_makro['name'] . '</td>';
                                                    echo '<td>' . $item_makro['value'] . ' ' . $item_makro['satuan'] . '</td>';
                                                    echo '<td>' . $item_makro['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_makro['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>B</b></th>
                                                    <td colspan="3"><b>Mikroskopik</b></td>
                                                </tr>
                                                <?php
                                                $hitungMikroskopik = json_decode($lab['mikroskopik'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hitungMikroskopik as $key => $item_mikro) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_mikro['name'] . '</td>';
                                                    echo '<td>' . $item_mikro['value'] . ' ' . $item_mikro['satuan'] . '</td>';
                                                    echo '<td>' . $item_mikro['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_mikro['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-center" scope="row"><b>C</b></th>
                                                    <td colspan="3"><b>Sedimen Urine</b></td>
                                                </tr>
                                                <?php
                                                $hitungSedimen = json_decode($lab['sedimen_urine'], true);

                                                // Generate table rows based on JSON data
                                                foreach ($hitungSedimen as $key => $item_sedimen) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row">-</th>';
                                                    echo '<td style="padding-left:50px">' . $item_sedimen['name'] . '</td>';
                                                    echo '<td>' . $item_sedimen['value'] . ' ' . $item_sedimen['satuan'] . '</td>';
                                                    echo '<td>' . $item_sedimen['kesimpulan'] . '</td>';
                                                    echo '<td>' . $item_sedimen['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <hr style="border: black 1px solid;">
                                        <div class="row mt-4">
                                            <!-- Kolom Penanggung Jawab -->
                                            <div class="col-sm-6 text-center d-flex flex-column align-items-center">
                                                <h6>Penanggung Jawab</h6>
                                                <img src="<?= base_url('assets/img/bar/drAmel.png') ?>" height="100px">
                                                <h6 class="mt-3">dr. Amelia Rachmiwatie, Sp.PK, M.Kes</h6>
                                            </div>

                                            <!-- Kolom Analis -->
                                            <div class="col-sm-6 text-center d-flex flex-column align-items-center">
                                                <h6>Analis</h6>
                                                <img src="<?= base_url('assets/img/bar/analisRiska.png') ?>" height="100px">
                                                <h6 class="mt-3">Riska Wilianti, A.Md.A.K.</h6>
                                                <h6 class="pb-0 mt-1">
                                                    <?php
                                                    $date = new DateTime($lab['tgl']);
                                                    echo date_format($date, 'd-m-Y');
                                                    ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Footer ======= -->
        <?= $this->include('templates/footer'); ?>
    </div>
</main>

<style>
    /* Atur halaman agar tidak terpotong */
    .break-before {
        page-break-before: always;
    }

    .break-after {
        page-break-after: always;
    }

    .no-break {
        page-break-inside: avoid;
    }
</style>


<!-- Tambahkan JavaScript untuk Print dan Export PDF -->
<script>
    const labName = "<?= $lab['nama']; ?>";
    document.getElementById('exportPDF').addEventListener('click', async function() {
        const element = document.getElementById('contentToPrint');
        if (typeof html2pdf !== 'undefined') {
            const options = {
                margin: [5, 5, 5, 5],
                filename: 'Hasil Lab ' + labName + '.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true
                },
                jsPDF: {
                    orientation: 'portrait',
                    unit: 'mm',
                    format: 'A3', // Mengubah ukuran kertas menjadi A3
                    compressPDF: true
                },
                pagebreak: {
                    mode: ['css', 'legacy'], // Aktifkan page break berdasarkan CSS
                    before: '.break-before', // Elemen sebelum page break
                    after: '.break-after', // Elemen setelah page break
                    avoid: '.no-break' // Elemen yang harus dihindari untuk page break
                }
            };

            await html2pdf().set(options).from(element).save();
        } else {
            console.error('Library html2pdf.js tidak tersedia.');
            alert('Export PDF gagal! Pastikan koneksi internet aktif.');
        }
    });
</script>


<!-- Load Library HTML2PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<?= $this->endSection(); ?>