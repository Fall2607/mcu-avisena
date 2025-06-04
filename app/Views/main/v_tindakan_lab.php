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
                        <h6>FORM LAB</h6>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2">
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
                                                <!-- <input class="form-control" name="u_name" placeholder="Ketikan Nama Lengkap" type="text"> -->
                                                <?= '<label>: ' . $user['nama'] . '</label>'; ?>
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
                                                <?= '<label>: ' . $user['jenis_kelamin'] . '</label>'; ?>
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
                                                $date = new DateTime($user['tgl_mcu']);
                                                echo '<label>: ' . date_format($date, 'd-m-Y') . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Usia</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="unit" placeholder="Ketikan Unit" type="text"> -->
                                                <?php
                                                $birthDate = new DateTime($user['tgl']);
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
                                                <?= '<label>: ' . $user['nama_perusahaan'] . '</label>'; ?>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <label>Bagian</label>
                                            </div>
                                            <div class="col-6">
                                                <!-- <input class="form-control" name="bagian" placeholder="Ketikan Bagian" type="text"> -->
                                                <?= '<label>: ' . $user['bagian'] . '</label>'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: black 1px solid;">
                                <form action="<?= base_url('save-half-lab') ?>" method="POST">
                                    <div class="pemeriksaan-lab col-md-6">
                                        <div class="table-container t-scroll" style="height: 300px; overflow-y: auto;">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="col" style="width: 10%;"><b>No</b></th>
                                                        <th scope="col"><b>Specimen</b></th>
                                                        <th scope="col"><b>Hasil</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="text-center" scope="row">1</th>
                                                        <td>Hematologi</td>
                                                        <td style=""><input class="form-control" name="id" type="text" value="<?= $id ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Hemoglobin</td>
                                                        <td><input class="form-control" name="hematologi_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Leukosit</td>
                                                        <td><input class="form-control" name="hematologi_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Eritrosit</td>
                                                        <td><input class="form-control" name="hematologi_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Hematokrit</td>
                                                        <td><input class="form-control" name="hematologi_4" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Trombosit</td>
                                                        <td><input class="form-control" name="hematologi_5" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>MCV</td>
                                                        <td><input class="form-control" name="hematologi_6" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>MCH</td>
                                                        <td><input class="form-control" name="hematologi_7" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>MCHC</td>
                                                        <td><input class="form-control" name="hematologi_8" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>LED</td>
                                                        <td><input class="form-control" name="hematologi_9" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">2</th>
                                                        <td colspan="2">Hitung Jenis</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Basofil</td>
                                                        <td><input class="form-control" name="hitungjenis_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Eosinofil</td>
                                                        <td><input class="form-control" name="hitungjenis_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Batang</td>
                                                        <td><input class="form-control" name="hitungjenis_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Segmen</td>
                                                        <td><input class="form-control" name="hitungjenis_4" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Limsofit</td>
                                                        <td><input class="form-control" name="hitungjenis_5" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Monosit</td>
                                                        <td><input class="form-control" name="hitungjenis_6" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">3</th>
                                                        <td colspan="2">Kimia Darah</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>SGOT</td>
                                                        <td><input class="form-control" name="kimiadarah_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>SGPT</td>
                                                        <td><input class="form-control" name="kimiadarah_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Creatinin</td>
                                                        <td><input class="form-control" name="kimiadarah_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">4</th>
                                                        <td colspan="2">Urinalisa</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">A</th>
                                                        <td colspan="2">Makroskopik</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Warna</td>
                                                        <td><input class="form-control" name="dd_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Kekeruhan</td>
                                                        <td><input class="form-control" name="dd_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>pH</td>
                                                        <td><input class="form-control" name="dd_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Berat Jenis</td>
                                                        <td><input class="form-control" name="dd_4" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">B</th>
                                                        <td colspan="2">Mikroskopik</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Leukosit</td>
                                                        <td><input class="form-control" name="cc_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Nitrit</td>
                                                        <td><input class="form-control" name="cc_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Urobilinogen</td>
                                                        <td><input class="form-control" name="cc_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Protein</td>
                                                        <td><input class="form-control" name="cc_4" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Blood</td>
                                                        <td><input class="form-control" name="cc_5" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Keton</td>
                                                        <td><input class="form-control" name="cc_6" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Bilirubin</td>
                                                        <td><input class="form-control" name="cc_7" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Glukosa</td>
                                                        <td><input class="form-control" name="cc_8" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">C</th>
                                                        <td colspan="2">Sedimen Urine</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Eritrosit</td>
                                                        <td><input class="form-control" name="sedimen_1" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Leukosit</td>
                                                        <td><input class="form-control" name="sedimen_2" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Epitel</td>
                                                        <td><input class="form-control" name="sedimen_3" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Bakteri</td>
                                                        <td><input class="form-control" name="sedimen_4" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="text-center" scope="row">-</th>
                                                        <td>Kristal</td>
                                                        <td><input class="form-control" name="sedimen_5" type="text" placeholder="Isi hasil"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-4 float-end">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Footer ======= -->
        <?= $this->include('templates/footer'); ?>
    </div>
</main>
<?= $this->endSection(); ?>