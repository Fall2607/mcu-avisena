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
                            <button id="printPage" class="btn btn-primary ms-2">Print</button>
                        </div>
                    </div>
                    <div class="card-body px-0" id="contentToPrint">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img width="70px" class="float-end"
                                        src="<?= base_url('assets/img/logo-avisena.png') ?>" alt="">
                                </div>
                                <div class="col-sm-6 pt-3 text-center">
                                    <h4 class="text-bold" style="line-height: 1; font-weight: 800;">
                                        LABORATORIUM RSU AVISENA
                                    </h4>
                                    <p style="font-size: 12px; line-height: 1.4;">
                                        Jl. Melong No. 170 Cimahi Telp 022-6000830 </p>
                                </div>
                                <div class="col-sm-3">
                                    <img width="58px" class="float-start"
                                        src="<?= base_url('assets/img/logo-lars.png') ?>" alt="">
                                </div>
                            </div>
                            <hr style="border: black 1px solid;">
                            <div class="bgnya">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="u_name" placeholder="Ketikan Nama Lengkap" type="text"> -->
                                                <?= '<label>: ' . $lab['nama'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <select name="jk" class="form-control">
                                                        <option hidden>Pilih Jenis Kelamin</option>
                                                        <option value="Laki - Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select> -->
                                                <?= '<label>: ' . $lab['jenis_kelamin'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Tanggal Periksa</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="Bagian" placeholder="Ketikan Unit" type="Number"> -->
                                                <!-- <input name="tgl" class="form-control" type="date"> -->
                                                <?php
                                                $date = new DateTime($lab['tgl_mcu']);
                                                echo '<label>: ' . date_format($date, 'd-m-Y') . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Usia</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="unit" placeholder="Ketikan Unit" type="text"> -->
                                                <?php
                                                $birthDate = new DateTime($lab['tgl']);
                                                $today = new DateTime();
                                                $age = $today->diff($birthDate)->y;
                                                echo '<label>: ' . $age . ' tahun</label>';
                                                ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Perusahaan</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="unit" placeholder="Ketikan Unit" type="text"> -->
                                                <?= '<label>: ' . $lab['nama_perusahaan'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Bagian</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="bagian" placeholder="Ketikan Bagian" type="text"> -->
                                                <?= '<label>: ' . $lab['bagian'] . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: black 1px solid;">
                                <div class="pemeriksaan-lab">
                                    <div class="table-container">
                                        <table class='table mb-0' id="hematologiTable"
                                            style="font-size:12px; border-collapse:collapse; border: none;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" scope="col"
                                                        style="width: 10%; padding:4px; border-bottom: 2px solid #dee2e6;">
                                                        <b>No</b>
                                                    </th>
                                                    <th scope="col"
                                                        style="padding:4px; border-bottom: 2px solid #dee2e6;">
                                                        <b>Specimen</b>
                                                    </th>
                                                    <th scope="col"
                                                        style="padding:4px; border-bottom: 2px solid #dee2e6;">
                                                        <b>Hasil</b>
                                                    </th>
                                                    <th scope="col"
                                                        style="padding:4px; border-bottom: 2px solid #dee2e6;">
                                                        <b>Kesimpulan</b>
                                                    </th>
                                                    <th scope="col"
                                                        style="padding:4px; border-bottom: 2px solid #dee2e6;"><b>Nilai
                                                            Normal</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="text-center" scope="row"
                                                        style="padding:4px; border:none;"><b>1</b>
                                                    </th>
                                                    <td colspan="4" style="padding:4px; border:none;"><b>Hematologi</b>
                                                    </td>
                                                </tr>
                                                <?php
                                                $hematologiData = json_decode($lab['hematologi'], true);
                                                foreach ($hematologiData as $key => $item_hema) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row" style="padding:4px; border:none;">-</th>';
                                                    echo '<td style="padding-left:30px; padding:4px; border:none;">' . $item_hema['name'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_hema['value'] . ' ' . $item_hema['satuan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_hema['kesimpulan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_hema['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <tr>
                                                    <th class="text-center" scope="row"
                                                        style="padding:4px; border:none;"><b>2</b>
                                                    </th>
                                                    <td colspan="4" style="padding:4px; border:none;"><b>Urinalisa</b>
                                                    </td>
                                                </tr>
                                                <?php
                                                $hitungMakroskopik = json_decode($lab['makroskopik'], true);
                                                foreach ($hitungMakroskopik as $key => $item_makro) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row" style="padding:4px; border:none;">-</th>';
                                                    echo '<td style="padding-left:30px; padding:4px; border:none;">' . $item_makro['name'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_makro['value'] . ' ' . $item_makro['satuan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_makro['kesimpulan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_makro['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <?php
                                                $hitungMikroskopik = json_decode($lab['mikroskopik'], true);
                                                foreach ($hitungMikroskopik as $key => $item_mikro) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row" style="padding:4px; border:none;">-</th>';
                                                    echo '<td style="padding-left:30px; padding:4px; border:none;">' . $item_mikro['name'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_mikro['value'] . ' ' . $item_mikro['satuan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_mikro['kesimpulan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_mikro['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                                <?php
                                                $hitungSedimen = json_decode($lab['sedimen_urine'], true);
                                                foreach ($hitungSedimen as $key => $item_sedimen) {
                                                    echo '<tr>';
                                                    echo '<th class="text-center" scope="row" style="padding:4px; border:none;">-</th>';
                                                    echo '<td style="padding-left:30px; padding:4px; border:none;">' . $item_sedimen['name'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_sedimen['value'] . ' ' . $item_sedimen['satuan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_sedimen['kesimpulan'] . '</td>';
                                                    echo '<td style="padding:4px; border:none;">' . $item_sedimen['nilai_normal'] . '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <style>
                                            #hematologiTable th,
                                            #hematologiTable td {
                                                padding: 4px !important;
                                                margin: 0 !important;
                                                border: none !important;
                                                vertical-align: middle !important;
                                            }

                                            #hematologiTable thead th {
                                                border-bottom: 2px solid #dee2e6 !important;
                                            }

                                            #hematologiTable {
                                                border-collapse: collapse !important;
                                                margin-bottom: 0 !important;
                                            }
                                        </style>
                                        <hr style="border: black 1px solid;">
                                        <div class="row">
                                            <!-- Kolom Penanggung Jawab -->
                                            <div class="col-sm-6 text-center d-flex flex-column align-items-center"
                                                style="font-size:12px;">
                                                <h6 style="font-size:12px;">Penanggung Jawab</h6>
                                                <img src="<?= base_url('assets/img/bar/drAmel.png') ?>" height="50px">
                                                <h6 class="" style="font-size:12px;">dr. Amelia Rachmiwatie, Sp.PK,
                                                    M.Kes</h6>
                                            </div>

                                            <!-- Kolom Analis -->
                                            <div class="col-sm-6 text-center d-flex flex-column align-items-center"
                                                style="font-size:12px;">
                                                <h6 style="font-size:12px;">Analis</h6>
                                                <img src="<?= base_url('assets/img/bar/fajriah.png') ?>" height="50px">
                                                <h6 class="" style="font-size:12px;">Fajriah Nurjayanti, Amd.A.K. <br>
                                                    <?php
                                                    $date = new DateTime($lab['tgl_mcu']);
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
    document.getElementById('exportPDF').addEventListener('click', async function () {
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
                    format: 'a4',
                    compressPDF: true
                },
                pagebreak: {
                    mode: ['css', 'legacy'],
                    before: '.break-before',
                    after: '.break-after',
                    avoid: '.no-break'
                }
            };

            await html2pdf().set(options).from(element).save();
        } else {
            // Fallback: open print dialog if html2pdf is not available
            var printContents = element.innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    });
</script>

<script>
    document.getElementById('printPage').addEventListener('click', function () {
        // Print only the content inside 'contentToPrint' with all CSS
        var printContents = document.getElementById('contentToPrint').innerHTML;
        var printWindow = window.open('', '', 'height=800,width=1000');
        // Get all stylesheets
        var styles = '';
        Array.from(document.styleSheets).forEach(function (sheet) {
            try {
                if (sheet.href) {
                    styles += '<link rel="stylesheet" href="' + sheet.href + '">';
                } else if (sheet.ownerNode && sheet.ownerNode.tagName === 'STYLE') {
                    styles += '<style>' + sheet.ownerNode.innerHTML + '</style>';
                }
            } catch (e) {
                // Ignore CORS issues
            }
        });
        // Add print CSS to hide header/footer options in print dialog (where supported)
        styles += `
            <style>
                @media print {
                    @page {
                        margin: 10mm;
                        /* Chrome/Edge: disables default header/footer */
                        size: auto;
                    }
                    body {
                        -webkit-print-color-adjust: exact;
                        print-color-adjust: exact;
                    }
                }
            </style>
        `;
        printWindow.document.write('<html><head><title>Print</title>' + styles + '</head><body>' + printContents + '</body></html>');
        printWindow.document.close();
        printWindow.focus();
        printWindow.onload = function () {
            // For Chrome: try to disable headers/footers by default (user can still override)
            printWindow.print();
            printWindow.close();
        };
    });
</script>


<!-- Load Library HTML2PDF -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<?= $this->endSection(); ?>