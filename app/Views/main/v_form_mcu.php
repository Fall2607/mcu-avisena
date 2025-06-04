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
                        <h6>FORM MEDICAL CHECK UP RSU AVISENA</h6>
                        <a href="<?= base_url('/data-mcu') ?>" class="btn btn-success"><i class="fa-solid fa-backward"></i></a>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2">
                        <form action="<?= base_url('save-mcu') ?>" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 pt-2">
                                        <div class="cek-mcu row">
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="1" type="checkbox" value="1" id="pemfis">
                                                    <label class="custom-control-label" for="pemfis">PEMFIS</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="2" type="checkbox" value="1" id="ro">
                                                    <label class="custom-control-label" for="ro">RO</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="3" type="checkbox" value="1" id="audiometri">
                                                    <label class="custom-control-label" for="audiometri">AUDIOMETRI</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="4" type="checkbox" value="1" id="lab">
                                                    <label class="custom-control-label" for="lab">LAB</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="5" type="checkbox" value="1" id="ekg">
                                                    <label class="custom-control-label" for="ekg">EKG</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 border">
                                                <div class="form-check">
                                                    <input class="form-check-input" name="6" type="checkbox" value="1" id="spirometri">
                                                    <label class="custom-control-label" for="spirometri">SPIROMETRI</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-2">
                                        <img width="100px" class="mx-auto d-block" src="<?= base_url('assets/img/logo-avisena.png') ?>" alt="">
                                    </div>
                                </div>
                                <div class="judul text-center pt-3">
                                    <p><b>FORM MEDICAL CHECK UP RSU AVISENA</b><br>Jl. Melong No. 170 Cimahi</p>
                                </div>
                                <hr style="border: black 1px solid;">
                                <div class="bgnya">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <label>Nama</label>
                                                </div>
                                                <div class="col-9">
                                                    <input class="form-control" name="u_name" placeholder="Ketikan Nama Lengkap" type="text">
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Unit</label>
                                                </div>
                                                <div class="col-9">
                                                    <input class="form-control" name="unit" placeholder="Ketikan Unit" type="text">
                                                    <!-- <select name="jk" class="form-control">
                                                        <option hidden>Pilih Jenis Kelamin</option>
                                                        <option value="Laki - Laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select> -->
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Bagian</label>
                                                </div>
                                                <div class="col-9">
                                                    <input class="form-control" name="bagian" placeholder="Ketikan Bagian" type="text">
                                                    <!-- <input name="tgl" class="form-control" type="date"> -->
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Tanggal Periksa</label>
                                                </div>
                                                <div class="col-9">
                                                    <!-- <input class="form-control" name="Bagian" placeholder="Ketikan Unit" type="Number"> -->
                                                    <input name="tgl" class="form-control" type="date">
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="form-select" name="jk">
                                                        <option hidden>Pilih Jenis Kelamin</option>
                                                        <option value="Pria">Pria</option>
                                                        <option value="Wanita">Wanita</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row align-items-center">
                                                <div class="col-3">
                                                    <label>Dokter Pemeriksa</label>
                                                </div>
                                                <div class="col-9">
                                                    <select class="form-select" name="dr">
                                                        <option hidden>Pilih Dokter Pemeriksa</option>
                                                        <option value="Dr. Elda lizma">Dr. Elda lizma</option>
                                                        <option value="Dr. Aji tri Wibowo ">Dr. Aji tri Wibowo</option>
                                                        <option value="Dr. Luthfia yosti">Dr. Luthfia yosti</option>
                                                        <option value="Dr. Sofia salsabila">Dr. Sofia salsabila</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Berat Badan [Kg]</label>
                                                </div>
                                                <div class="col-9">
                                                    <input name="bb" class="form-control" placeholder="Ketikan Berat Badan" type="number">
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Tinggi Badan [cm]</label>
                                                </div>
                                                <div class="col-9">
                                                    <input name="tinggi" class="form-control" placeholder="Ketikan Tinggi Badan" type="text">
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Tekanan Darah [mmHg]</label>
                                                </div>
                                                <div class="col-9">
                                                    <input name="tekanan_d" class="form-control" placeholder="Ketikan Tekanan Darah" type="text">
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <div class="col-3">
                                                    <label>Nadi [x/m]</label>
                                                </div>
                                                <div class="col-9">
                                                    <input name="nadi" class="form-control" placeholder="Ketikan Nadi" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-5">
                                        <div class="col-md-6">
                                            <div class="utama">
                                                <h6>1. KEPALA</h6>
                                                <div class="sub-utama">
                                                    <h6>A. Mata</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Visus</label>
                                                            </div>
                                                            <div class="col-5">
                                                                <table class="table text-center">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">OD</th>
                                                                            <th scope="col">OS</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><input class="form-control" name="od1" type="text" style="height: 30px;"></td>
                                                                            <td><input class="form-control" name="os1" type="text" style="height: 30px;"></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><input class="form-control" name="od2" type="text" style="height: 30px;"></td>
                                                                            <td><input class="form-control" name="os2" type="text" style="height: 30px;"></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Buta Warna</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_1" id="bw1" value="1">
                                                                    <label class="custom-control-label" for="bw1">Partial</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_1" id="bw2" value="2">
                                                                    <label class="custom-control-label" for="bw2">Total</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_1" id="bw3" value="3">
                                                                    <label class="custom-control-label" for="bw3">Normal</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Sklera</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_2" id="sk1" value="1">
                                                                    <label class="custom-control-label" for="sk1">Iketrik</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_2" id="sk2" value="2">
                                                                    <label class="custom-control-label" for="sk2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Konjungtiva</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_3" id="ko1" value="1">
                                                                    <label class="custom-control-label" for="ko1">Anemis</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="A_3" id="ko2" value="2">
                                                                    <label class="custom-control-label" for="ko2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <textarea class="form-control" name="A_4" placeholder="Ketikan Kesimpulan Pemeriksaan Mata" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="utama">
                                                <h6 class="pt-4">B. THT</h6>
                                                <div class="sub-utama">
                                                    <h6>1. Telinga</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <label>Serumen</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B1_1" id="se1" value="1">
                                                                    <label class="custom-control-label" for="se1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B1_1" id="se2" value="0">
                                                                    <label class="custom-control-label" for="se2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2 pb-2">
                                                            <div class="col-3">
                                                                <label>Benjolan</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B1_2" id="be1" value="1">
                                                                    <label class="custom-control-label" for="be1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B1_2" id="be2" value="0">
                                                                    <label class="custom-control-label" for="be2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6>2. Hidung</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <label>Polip</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B2_1" id="po1" value="1">
                                                                    <label class="custom-control-label" for="po1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B2_1" id="po2" value="0">
                                                                    <label class="custom-control-label" for="po2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6>3. Tenggorokan</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <label>Hipermesis</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B3_1" id="hi1" value="1">
                                                                    <label class="custom-control-label" for="hi1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="B3_1" id="hi2" value="0">
                                                                    <label class="custom-control-label" for="hi2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <textarea name="B3_2" class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Tenggorokan" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="utama">
                                                <h6 class="pt-4">C. MULUT</h6>
                                                <div class="sub-utama">
                                                    <h6>1. Gigi</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <label>Karies</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="C_1" id="ka1" value="1">
                                                                    <label class="custom-control-label" for="ka1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="C_1" id="ka2" value="0">
                                                                    <label class="custom-control-label" for="ka2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <textarea name="C_2" class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Gigi" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="pt-4">D. LEHER</h6>
                                                    <div class="sub-utama">
                                                        <div class="row align-items-center">
                                                            <div class="col-3">
                                                                <label>KGB</label>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="D_1" id="kgb1" value="1">
                                                                    <label class="custom-control-label" for="kgb1">Ada</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="D_1" id="kgb2" value="0">
                                                                    <label class="custom-control-label" for="kgb2">Tidak</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center pt-2">
                                                            <div class="col-3">
                                                                <label>Kesimpulan</label>
                                                            </div>
                                                            <div class="col-9">
                                                                <textarea name="D_2" class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Leher" rows="1"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sub-utama">
                                                <h6>2. DADA / PUNGGUNG</h6>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>A. Dada [Bentuk]</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_1" id="dada1_1" value="1">
                                                            <label class="custom-control-label" for="dada1_1">Elips</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_1" id="dada1_2" value="2">
                                                            <label class="custom-control-label" for="dada1_2">Barel Chest</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>B. Punggung [Bentuk]</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_2" id="dada2_1" value="1">
                                                            <label class="custom-control-label" for="dada2_1">Lordosis</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_2" id="dada2_2" value="2">
                                                            <label class="custom-control-label" for="dada2_2">Kiposis</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_2" id="dada2_3" value="3">
                                                            <label class="custom-control-label" for="dada2_3">Scoliosis</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>C. Pergerakan</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_3" id="dada3_1" value="1">
                                                            <label class="custom-control-label" for="dada3_1">Simetris</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_3" id="dada3_2" value="2">
                                                            <label class="custom-control-label" for="dada3_2">Asimetris</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>D. Bunyi Paru</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_4" id="dada4_1" value="1">
                                                            <label class="custom-control-label" for="dada4_1">Vesikuler</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_4" id="dada4_2" value="2">
                                                            <label class="custom-control-label" for="dada4_2">Weezing</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_4" id="dada4_3" value="3">
                                                            <label class="custom-control-label" for="dada4_3">Ronchi</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>E. Bunyi Jantung</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <label>S1</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input class="form-control" type="text" name="2_5" id="dada5_1" style="height: 30px;">
                                                    </div>
                                                    <div class="col-auto">
                                                        <label>S2</label>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <input class="form-control" type="text" name="2_6" id="dada5_2" style="height: 30px;">
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label style="margin-left: 20px;">Murmur</label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_7" id="dada6_1" value="1">
                                                            <label class="custom-control-label" for="dada6_1">Ada</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="2_7" id="dada6_2" value="0">
                                                            <label class="custom-control-label" for="dada6_2">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center pt-2">
                                                    <div class="col-3">
                                                        <label>F. Kesimpulan</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <textarea class="form-control" name="2_8" placeholder="Ketikan Kesimpulan Pemeriksaan dada / punggung" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="pt-4">3. PERUT</h6>
                                                <div class="sub-utama">
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>A. Bentuk</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_1" id="perutA_1" value="1">
                                                                <label class="custom-control-label" for="perutA_1">Datar</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_1" id="perutA_2" value="2">
                                                                <label class="custom-control-label" for="perutA_2">Cembung</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_1" id="perutA_3" value="3">
                                                                <label class="custom-control-label" for="perutA_3">Supel</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>B. Bising Usus</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_2" id="perutB_1" value="1">
                                                                <label class="custom-control-label" for="perutB_1">Positif</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_2" id="perutB_2" value="0">
                                                                <label class="custom-control-label" for="perutB_2">Negatif</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>C. Nyeri Tekan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_3" id="perutC_1" value="1">
                                                                <label class="custom-control-label" for="perutC_1">Ada</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_3" id="perutC_2" value="0">
                                                                <label class="custom-control-label" for="perutC_2">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>D. Hepar</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_4" id="perutD_1" value="1">
                                                                <label class="custom-control-label" for="perutD_1">Membesar</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="3_4" id="perutD_2" value="0">
                                                                <label class="custom-control-label" for="perutD_2">Tidak</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>E. Pembesaran Organ</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <input type="text" class="form-control" name="3_5" placeholder="Jelaskan">
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center pt-2">
                                                        <div class="col-3">
                                                            <label>F. Kesimpulan</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <textarea class="form-control" name="3_6" placeholder="Ketikan Kesimpulan Pemeriksaan perut" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="pt-4">4. EKSTRIMITAS</h6>
                                                <div class="sub-utama">
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>A. Kekuatan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <table>
                                                                <tr>
                                                                    <td style="border-right:1px solid black;border-bottom:1px solid black"><input name="kiri_atas" style="width: 40px; height: 40px;" type="text" class="form-control"></td>
                                                                    <td style="border-bottom:1px solid black"><input name="kanan_atas" style="width: 40px; height: 40px;" type="text" class="form-control"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-right:1px solid black"><input name="kiri_bawah" style="width: 40px; height: 40px;" type="text" class="form-control"></td>
                                                                    <td><input name="kanan_bawah" style="width: 40px; height: 40px;" type="text" class="form-control"></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center">
                                                        <div class="col-3">
                                                            <label>B. Pergerakan</label>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="4_1" id="i4_1" value="1">
                                                                <label class="custom-control-label" for="i4_1">Bebas</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="4_1" id="i4_2" value="2">
                                                                <label class="custom-control-label" for="i4_2">Terbatas</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row align-items-center pt-2">
                                                        <div class="col-3">
                                                            <label>C. Kesimpulan</label>
                                                        </div>
                                                        <div class="col-9">
                                                            <textarea name="4_2" class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Ekstrimitas" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <label>Kesimpulan Keseluruhan</label>
                                                <div class="col">
                                                    <textarea name="kesimpulan_kes" class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Ekstrimitas" rows="3"></textarea>
                                                </div>
                                            </div>
                                            <div class="row align-items-center pt-2">
                                                <label>Saran</label>
                                                <div class="col">
                                                    <textarea name="saran" class="form-control" placeholder="Ketikan Saran" rows="2"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-4 float-end">Simpan</button>
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
<?= $this->endSection(); ?>