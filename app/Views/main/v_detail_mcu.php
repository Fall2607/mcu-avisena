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
                        <label>FORM MEDICAL CHECK UP RSU AVISENA</label>
                        <button id="printContent" class="btn btn-primary">Print</button>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2" id="contentToPrint">
                        <form action="<?= base_url('save-mcu') ?>" method="POST">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img width="90px" class="float-end" src="<?= base_url('assets/img/logo-avisena.png') ?>" alt="">
                                    </div>
                                    <div class="col-sm-6 pt-3 text-center">
                                        <p><b>FORM MEDICAL CHECK UP RSU AVISENA</b><br>Jl. Melong No. 170 Cimahi</p>
                                    </div>
                                    <div class="col-sm-3">
                                        <img width="68px" class="float-start" src="<?= base_url('assets/img/logo-lars.png') ?>" alt="">
                                    </div>
                                </div>
                                <div class="judul text-center pt-3 mx-auto d-block">
                                    <div class="cek-mcu row container">
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['pemfis'] == '1') ? '<label>PEMFIS: ✔</label>'  : '<label>PEMFIS</label>' ?>
                                        </div>
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['ro'] == '1') ? '<label>RO: ✔</label>'  : '<label>RO</label>' ?>
                                        </div>
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['audiometri'] == '1') ? '<label>AUDIOMETRI: ✔</label>'  : '<label>AUDIOMETRI</label>' ?>
                                        </div>
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['lab'] == '1') ? '<label>LAB: ✔</label>'  : '<label>LAB</label>' ?>
                                        </div>
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['ekg'] == '1') ? '<label>EKG : ✔</label>'  : '<label>EKG</label>' ?>
                                        </div>
                                        <div class="col-sm-4 border">
                                            <?= ($mcu['spirometri'] == '1') ? '<label>SPIROMETRI: ✔</label>'  : '<label>SPIROMETRI</label>' ?>
                                        </div>
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
                                                    <?= '<label>: ' . $mcu['nama'] . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-6">
                                                    <?= '<label>: ' . $mcu['jenis_kelamin'] . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <label>Unit</label>
                                                </div>
                                                <div class="col-6">
                                                    <?= '<label>: ' . $mcu['unit'] . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <label>Bagian</label>
                                                </div>
                                                <div class="col-6">
                                                    <?= '<label>: ' . $mcu['bagian'] . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-6">
                                                    <label>Tanggal Periksa</label>
                                                </div>
                                                <div class="col-6">
                                                    <?php
                                                    $date = new DateTime($mcu['tgl']);
                                                    echo '<label>: ' . date_format($date, 'd-m-Y') . '</label>'; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <label>Berat Badan [Kg]</label>
                                                </div>
                                                <div class="col-5">
                                                    <?= '<label>: ' . $mcu['berat_badan'] . ' Kg' . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <label>Tinggi Badan [cm]</label>
                                                </div>
                                                <div class="col-5">
                                                    <?= '<label>: ' . $mcu['tinggi_badan'] . ' cm' . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <label>Tekanan Darah [mmHg]</label>
                                                </div>
                                                <div class="col-5">
                                                    <?= '<label>: ' . $mcu['tekanan_darah'] . '</label>'; ?>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-7">
                                                    <label>Nadi [x/m]</label>
                                                </div>
                                                <div class="col-5">
                                                    <?= '<label>: ' . $mcu['nadi'] . ' x/m' . '</label>'; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: black 1px solid;">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="utama">
                                                <label>1. KEPALA</label>
                                                <div class="sub-utama">
                                                    <label>A. Mata</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Visus</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?= '<label>: OD ' . $mcu['visus_od_1'] . '/20</label>'; ?>
                                                                <?= '<label>: OS ' . $mcu['visus_os_1'] . '/20</label>'; ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Buta Warna</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $buta_warna_options = [
                                                                    '1' => 'Partial',
                                                                    '2' => 'Total',
                                                                    '3' => 'Normal'
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($buta_warna_options as $key => $value) {
                                                                    if ($mcu['buta_warna'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($buta_warna_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Sklera</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $sklera_options = [
                                                                    '1' => 'Iketrik',
                                                                    '2' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($sklera_options as $key => $value) {
                                                                    if ($mcu['sklera'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($sklera_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Konjungtiva</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $konjungtiva_options = [
                                                                    '1' => 'Anemis',
                                                                    '2' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($konjungtiva_options as $key => $value) {
                                                                    if ($mcu['konjungtiva'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($konjungtiva_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?= '<label>: ' . $mcu['kesimpulan_mata'] . '</label>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="utama">
                                                <label>B. THT</label>
                                                <div class="sub-utama">
                                                    <label>1. Telinga</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Serumen</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $serumen_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($serumen_options as $key => $value) {
                                                                    if ($mcu['serumen'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($serumen_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2 pb-2">
                                                            <div class="col-4">
                                                                <label>Benjolan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $benjolan_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($benjolan_options as $key => $value) {
                                                                    if ($mcu['benjolan'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($benjolan_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label>2. Hidung</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Polip</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $polip_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($polip_options as $key => $value) {
                                                                    if ($mcu['polip'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($polip_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label>3. Tenggorokan</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Hipermesis</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $hipermatis_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($hipermatis_options as $key => $value) {
                                                                    if ($mcu['hipermatis'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($hipermatis_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-4">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?= '<label>: ' . $mcu['kesimpulan_tht'] . '</label>' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="utama">
                                                <label class="">C. MULUT</label>
                                                <div class="sub-utama">
                                                    <label>1. Gigi</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>Karies</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $karies_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($karies_options as $key => $value) {
                                                                    if ($mcu['karies'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($karies_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-4">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?= '<label>: ' . $mcu['kesimpulan_gigi'] . '</label>' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label>D. LEHER</label>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-4">
                                                                <label>KGB</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?php
                                                                $kgb_options = [
                                                                    '1' => 'Ada',
                                                                    '0' => 'Tidak',
                                                                ];

                                                                echo '<label>: ';

                                                                foreach ($kgb_options as $key => $value) {
                                                                    if ($mcu['kgb'] == $key) {
                                                                        echo "($value)";
                                                                    } else {
                                                                        echo "<s>$value</s>";
                                                                    }
                                                                    if ($key != array_key_last($kgb_options)) {
                                                                        echo " | ";
                                                                    }
                                                                }
                                                                echo '</label>';
                                                                ?>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-4">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <?= '<label>: ' . $mcu['kesimpulan_leher'] . '</label>' ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="sub-utama">
                                                <label>2. DADA / PUNGGUNG</label>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>A. Dada [Bentuk]</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?php
                                                        $dada_options = [
                                                            '1' => 'Elips',
                                                            '2' => 'Barrel',
                                                        ];

                                                        echo '<label>: ';

                                                        foreach ($dada_options as $key => $value) {
                                                            if ($mcu['dada'] == $key) {
                                                                echo "($value)";
                                                            } else {
                                                                echo "<s>$value</s>";
                                                            }
                                                            if ($key != array_key_last($dada_options)) {
                                                                echo " | ";
                                                            }
                                                        }
                                                        echo '</label>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>B. Punggung [Bentuk]</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?php
                                                        $punggung_options = [
                                                            '1' => 'Lordosis',
                                                            '2' => 'Kiposis',
                                                            '3' => 'Scoliosis',
                                                            '' => 'Normal'
                                                        ];

                                                        echo '<label>: ';
                                                        $count = 0;
                                                        foreach ($punggung_options as $key => $value) {
                                                            if ($mcu['punggung'] == $key) {
                                                                echo "($value)";
                                                            } else {
                                                                echo "<s>$value</s>";
                                                            }
                                                            if ($key != array_key_last($punggung_options)) {
                                                                echo " | ";
                                                            }
                                                            $count++;
                                                        }
                                                        echo '</label>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>C. Pergerakan</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?php
                                                        $pergerakan_options = [
                                                            '1' => 'Simetris',
                                                            '2' => 'Asimetris',
                                                        ];

                                                        echo '<label>: ';

                                                        foreach ($pergerakan_options as $key => $value) {
                                                            if ($mcu['pergerakan'] == $key) {
                                                                echo "($value)";
                                                            } else {
                                                                echo "<s>$value</s>";
                                                            }
                                                            if ($key != array_key_last($pergerakan_options)) {
                                                                echo " | ";
                                                            }
                                                        }
                                                        echo '</label>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>D. Bunyi Paru</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?php
                                                        $bunyi_paru_options = [
                                                            '1' => 'Vesikuler',
                                                            '2' => 'Weezing',
                                                            '3' => 'Ronchi',
                                                        ];

                                                        echo '<label>: ';

                                                        foreach ($bunyi_paru_options as $key => $value) {
                                                            if ($mcu['bunyi_paru'] == $key) {
                                                                echo "($value)";
                                                            } else {
                                                                echo "<s>$value</s>";
                                                            }
                                                            if ($key != array_key_last($bunyi_paru_options)) {
                                                                echo " | ";
                                                            }
                                                        }
                                                        echo '</label>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>E. Bunyi Jantung</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?= '<label>S1 : ' . $mcu['s1'] . '</label>'; ?>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?= '<label>S2 : ' . $mcu['s2'] . '</label>'; ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label style="margin-left: 20px;">Murmur</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?php
                                                        $murmur_options = [
                                                            '1' => 'Ada',
                                                            '0' => 'Tidak',
                                                        ];

                                                        echo '<label>: ';

                                                        foreach ($murmur_options as $key => $value) {
                                                            if ($mcu['murmur'] == $key) {
                                                                echo "($value)";
                                                            } else {
                                                                echo "<s>$value</s>";
                                                            }
                                                            if ($key != array_key_last($murmur_options)) {
                                                                echo " | ";
                                                            }
                                                        }
                                                        echo '</label>';
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-6">
                                                        <label>F. Kesimpulan</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <?= '<label>: ' . $mcu['kesimpulan_dada'] . '</label>' ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label>3. PERUT</label>
                                                <div class="sub-utama">
                                                    <div class="row align-items-center">
                                                        <div class="col-5">
                                                            <label>A. Bentuk</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?php
                                                            $bentuk_options = [
                                                                '1' => 'Datar',
                                                                '2' => 'Cembung',
                                                                '3' => 'Supel'
                                                            ];

                                                            echo '<label>: ';

                                                            foreach ($bentuk_options as $key => $value) {
                                                                if ($mcu['bentuk'] == $key) {
                                                                    echo "($value)";
                                                                } else {
                                                                    echo "<s>$value</s>";
                                                                }
                                                                if ($key != array_key_last($bentuk_options)) {
                                                                    echo " | ";
                                                                }
                                                            }
                                                            echo '</label>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-5">
                                                            <label>B. Bising Usus</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?php
                                                            $bising_usus_options = [
                                                                '1' => 'Positif',
                                                                '2' => 'Negatif',
                                                            ];

                                                            echo '<label>: ';

                                                            foreach ($bising_usus_options as $key => $value) {
                                                                if ($mcu['bising_usus'] == $key) {
                                                                    echo "($value)";
                                                                } else {
                                                                    echo "<s>$value</s>";
                                                                }
                                                                if ($key != array_key_last($bising_usus_options)) {
                                                                    echo " | ";
                                                                }
                                                            }
                                                            echo '</label>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-5">
                                                            <label>C. Nyeri Tekan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?php
                                                            $nyeri_tekan_options = [
                                                                '1' => 'Ada',
                                                                '0' => 'Tidak',
                                                            ];

                                                            echo '<label>: ';

                                                            foreach ($nyeri_tekan_options as $key => $value) {
                                                                if ($mcu['nyeri_tekan'] == $key) {
                                                                    echo "($value)";
                                                                } else {
                                                                    echo "<s>$value</s>";
                                                                }
                                                                if ($key != array_key_last($nyeri_tekan_options)) {
                                                                    echo " | ";
                                                                }
                                                            }
                                                            echo '</label>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-5">
                                                            <label>D. Hepar</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?php
                                                            $hepar_options = [
                                                                '1' => 'Membesar',
                                                                '0' => 'Tidak',
                                                            ];

                                                            echo '<label>: ';

                                                            foreach ($hepar_options as $key => $value) {
                                                                if ($mcu['hepar'] == $key) {
                                                                    echo "($value)";
                                                                } else {
                                                                    echo "<s>$value</s>";
                                                                }
                                                                if ($key != array_key_last($hepar_options)) {
                                                                    echo " | ";
                                                                }
                                                            }
                                                            echo '</label>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-6">
                                                            <label>E. Pembesaran Organ</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?= '<label>: ' . $mcu['pembesaran_organ'] . '</label>' ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-6">
                                                            <label>F. Kesimpulan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?= '<label>: ' . $mcu['kesimpulan_perut'] . '</label>' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label>4. EKSTRIMITAS</label>
                                                <div class="sub-utama">
                                                    <div class="row align-items-center">
                                                        <div class="col-4">
                                                            <label>A. Kekuatan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <table class="text-center">
                                                                <tr>
                                                                    <td class="p-1" style="border-right:1px solid black;border-bottom:1px solid black"><?= $mcu['kiri_atas'] ?></td>
                                                                    <td class="p-1" style="border-bottom:1px solid black"><?= $mcu['kanan_atas'] ?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="p-1" style="border-right:1px solid black"><?= $mcu['kiri_bawah'] ?></td>
                                                                    <td class="p-1"><?= $mcu['kanan_bawah'] ?></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-4">
                                                            <label>B. Pergerakan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?php
                                                            $pergerakan_options = [
                                                                '1' => 'Bebas',
                                                                '2' => 'Terbatas',
                                                            ];

                                                            echo '<label>: ';

                                                            foreach ($pergerakan_options as $key => $value) {
                                                                if ($mcu['pergerakan'] == $key) {
                                                                    echo "($value)";
                                                                } else {
                                                                    echo "<s>$value</s>";
                                                                }
                                                                if ($key != array_key_last($pergerakan_options)) {
                                                                    echo " | ";
                                                                }
                                                            }
                                                            echo '</label>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-4">
                                                            <label>C. Kesimpulan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <?= '<label>: ' . $mcu['kesimpulan_ekstrimitas'] . '</label>' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: black 1px solid;">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="col">
                                                <label>Kesimpulan Keseluruhan :</label>
                                                <?= '<label> ' . $mcu['kesimpulan_keseluruhan'] . '</label>' ?>
                                            </div>
                                            <div class="col">
                                                <label>Saran :</label>
                                                <?= '<label> ' . $mcu['saran'] . '</label>' ?>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="text-center float-end">
                                                <h6 class="pb-0">
                                                    <?php
                                                    $date = new DateTime($mcu['tgl']);
                                                    echo '' . date_format($date, 'd-m-Y'); ?>
                                                </h6>
                                                <img width="100px" src="<?php if ($mcu['dr'] == 'Dr. Elda lizma') {
                                                                            echo base_url('assets/img/bar/dr_elda.png');
                                                                        } elseif ($mcu['dr'] == 'Dr. Aji tri Wibowo ') {
                                                                            echo base_url('assets/img/bar/dr_aji.png');
                                                                        } elseif ($mcu['dr'] == 'Dr. Luthfia yosti') {
                                                                            echo base_url('assets/img/bar/dr_luthfia.png');
                                                                        } elseif ($mcu['dr'] == 'Dr. Sofia salsabila') {
                                                                            echo base_url('assets/img/bar/dr_sofia.png');
                                                                        } ?>" alt="">
                                                <h6><?= $mcu['dr'] ?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Footer ======= -->
        <?= $this->include('templates/footer'); ?>
    </div>
</main>
<script>
    document.getElementById('printContent').addEventListener('click', function() {
        var printContents = document.getElementById('contentToPrint').innerHTML;
        var printWindow = window.open('', '_blank', 'height=600,width=800');

        // Menulis konten yang akan dicetak ke dalam jendela baru
        printWindow.document.write('<html><head><title><?= 'Dokumen MCU ' . $mcu['nama'] ?></title>');

        // Sertakan CSS yang diperlukan
        var cssLinks = document.querySelectorAll('link[rel="stylesheet"], style');
        cssLinks.forEach(function(link) {
            printWindow.document.write(link.outerHTML);
        });

        printWindow.document.write('</head><body>');
        printWindow.document.write(printContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Menunggu konten selesai di-load sebelum mencetak
        printWindow.onload = function() {
            printWindow.print();
            printWindow.close();
        };
    });
</script>

<?= $this->endSection(); ?>