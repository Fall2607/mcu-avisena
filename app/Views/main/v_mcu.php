<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<main class="main-content position-relative border-radius-lg ">
    <!-- ======= navbar ======= -->
    <?= $this->include('templates/navbar'); ?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>FORM MEDICAL CHECK UP RSU AVISENA</h6>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cek-mcu row">
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="pemfis">
                                                <label class="custom-control-label" for="pemfis">PEMFIS</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ro">
                                                <label class="custom-control-label" for="ro">RO</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="audiometri">
                                                <label class="custom-control-label" for="audiometri">AUDIOMETRI</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="lab">
                                                <label class="custom-control-label" for="lab">LAB</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="ekg">
                                                <label class="custom-control-label" for="ekg">EKG</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 border">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="spirometri">
                                                <label class="custom-control-label" for="spirometri">SPIROMETRI</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="judul text-center pt-3">
                                <p><b>FORM MEDICAL CHECK UP RSU AVISENA</b><br>Jl. Melong No. 170 Cimahi</p>
                            </div>

                            <form action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Nama</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Nama Lengkap" type="text">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Umur</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Umur" type="Number">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-9">
                                                <select class="form-control">
                                                    <option hidden>Pilih Jenis Kelamin</option>
                                                    <option>Laki-Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Tanggal Pemeriksaan</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Berat Badan [Kg]</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Berat Badan" type="number">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Tinggi Badan [cm]</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Tinggi Badan" type="Number">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Tekanan Darah [mmHg]</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Tekanan Darah" type="Number">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Nadi [x/m]</label>
                                            </div>
                                            <div class="col-9">
                                                <input class="form-control" placeholder="Ketikan Nadi" type="Number">
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Merokok</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="roko1" value="merokok">
                                                    <label class="custom-control-label" for="roko1">Merokok</label>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="roko2" value="tidak merokok">
                                                    <label class="custom-control-label" for="roko2">Tidak Merokok</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-md-6">
                                        <h6>1. KEPALA</h6>
                                        <h6>A. Mata</h6>
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
                                                            <td><input class="form-control" placeholder="" type="Number"></td>
                                                            <td><input class="form-control" placeholder="" type="Number"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control" placeholder="" type="Number"></td>
                                                            <td><input class="form-control" placeholder="" type="Number"></td>
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
                                                    <input class="form-check-input" type="radio" name="" id="bw1" value="Partial">
                                                    <label class="custom-control-label" for="bw1">Partial</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="bw2" value="Total">
                                                    <label class="custom-control-label" for="bw2">Total</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="bw3" value="Normal">
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
                                                    <input class="form-check-input" type="radio" name="" id="sk1" value="Iketrik">
                                                    <label class="custom-control-label" for="sk1">Iketrik</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="sk2" value="Tidak">
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
                                                    <input class="form-check-input" type="radio" name="" id="ko1" value="Anemis">
                                                    <label class="custom-control-label" for="ko1">Anemis</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="ko2" value="Tidak">
                                                    <label class="custom-control-label" for="ko2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Mata" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">B. THT</h6>
                                        <h6>1. Telinga</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Serumen</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="se1" value="Ada">
                                                    <label class="custom-control-label" for="se1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="se2" value="Tidak">
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
                                                    <input class="form-check-input" type="radio" name="" id="be1" value="Ada">
                                                    <label class="custom-control-label" for="be1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="be2" value="Tidak">
                                                    <label class="custom-control-label" for="be2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>2. Hidung</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Polip</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="po1" value="Ada">
                                                    <label class="custom-control-label" for="po1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="po2" value="Tidak">
                                                    <label class="custom-control-label" for="po2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>3. Tenggorokan</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Hipermesis</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="hi1" value="Ada">
                                                    <label class="custom-control-label" for="hi1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="hi2" value="Tidak">
                                                    <label class="custom-control-label" for="hi2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Tenggorokan" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">C. MULUT</h6>
                                        <h6>1. Gigi</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Karies</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="ka1" value="Ada">
                                                    <label class="custom-control-label" for="ka1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="ka2" value="Tidak">
                                                    <label class="custom-control-label" for="ka2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Gigi" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">D. LEHER</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>KGB</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="kgb1" value="Ada">
                                                    <label class="custom-control-label" for="kgb1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="kgb2" value="Tidak">
                                                    <label class="custom-control-label" for="kgb2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Leher" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h6>2. DADA / PUNGGUNG</h6>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>A. Dada [Bentuk]</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada1_1" value="Partial">
                                                    <label class="custom-control-label" for="dada1_1">Elips</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada1_2" value="Total">
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
                                                    <input class="form-check-input" type="radio" name="" id="dada2_1" value="Partial">
                                                    <label class="custom-control-label" for="dada2_1">Lordosis</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada2_2" value="Total">
                                                    <label class="custom-control-label" for="dada2_2">Kiposis</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada2_3" value="Total">
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
                                                    <input class="form-check-input" type="radio" name="" id="dada3_1" value="Partial">
                                                    <label class="custom-control-label" for="dada3_1">Simetris</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada3_2" value="Total">
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
                                                    <input class="form-check-input" type="radio" name="" id="dada2_1" value="Partial">
                                                    <label class="custom-control-label" for="dada2_1">Lordosis</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada2_2" value="Total">
                                                    <label class="custom-control-label" for="dada2_2">Kiposis</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="dada2_3" value="Total">
                                                    <label class="custom-control-label" for="dada2_3">Scoliosis</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Mata" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">B. THT</h6>
                                        <h6>1. Telinga</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Serumen</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="se1" value="Ada">
                                                    <label class="custom-control-label" for="se1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="se2" value="Tidak">
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
                                                    <input class="form-check-input" type="radio" name="" id="be1" value="Ada">
                                                    <label class="custom-control-label" for="be1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="be2" value="Tidak">
                                                    <label class="custom-control-label" for="be2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>2. Hidung</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Polip</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="po1" value="Ada">
                                                    <label class="custom-control-label" for="po1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="po2" value="Tidak">
                                                    <label class="custom-control-label" for="po2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h6>3. Tenggorokan</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Hipermesis</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="hi1" value="Ada">
                                                    <label class="custom-control-label" for="hi1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="hi2" value="Tidak">
                                                    <label class="custom-control-label" for="hi2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Tenggorokan" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">C. MULUT</h6>
                                        <h6>1. Gigi</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>Karies</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="ka1" value="Ada">
                                                    <label class="custom-control-label" for="ka1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="ka2" value="Tidak">
                                                    <label class="custom-control-label" for="ka2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Gigi" rows="1"></textarea>
                                            </div>
                                        </div>
                                        <h6 class="pt-4">D. LEHER</h6>
                                        <div class="row align-items-center">
                                            <div class="col-3">
                                                <label>KGB</label>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="kgb1" value="Ada">
                                                    <label class="custom-control-label" for="kgb1">Ada</label>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="kgb2" value="Tidak">
                                                    <label class="custom-control-label" for="kgb2">Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center pt-2">
                                            <div class="col-3">
                                                <label>Kesimpulan</label>
                                            </div>
                                            <div class="col-9">
                                                <textarea class="form-control" placeholder="Ketikan Kesimpulan Pemeriksaan Leher" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
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