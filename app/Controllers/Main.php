<?php

namespace App\Controllers;

use App\Models\Check;
use App\Models\Dada;
use App\Models\Ekstrimitas;
use App\Models\M_Lab;
use App\Models\Mata;
use App\Models\Mulut;
use App\Models\Perut;
use App\Models\THT;
use App\Models\Users;

class Main extends BaseController
{
    protected $user, $mata, $tht, $dada, $mulut, $perut, $ekstrimitas, $db, $check, $lab;
    public function __construct()
    {
        $this->db = db_connect();
        $this->user = new Users();
        $this->check = new Check();
        $this->mata = new Mata();
        $this->tht = new THT();
        $this->mulut = new Mulut();
        $this->dada = new Dada();
        $this->perut = new Perut();
        $this->ekstrimitas = new Ekstrimitas();
        $this->lab = new M_Lab();
    }

    public function index(): string
    {
        $data['title'] = 'Dashboard';
        $data['side'] = '1';
        $data['subside'] = '';
        return view('Main/v_dash', $data);
    }

    public function data_mcu(): string
    {
        $data = [
            'title' => 'Medical Check Up',
            'side' => '2',
            'subside' => '',
            'data_users' => $this->user->where('id_perusahaan !=', 2)->findAll()
        ];
        return view('Main/v_data_mcu', $data);
    }

    public function medcheck(): string
    {
        $data['title'] = 'Form Medical Check Up';
        $data['side'] = '2';
        $data['subside'] = '';
        return view('Main/v_form_mcu', $data);
    }

    public function save_mcu()
    {
        $nama = $this->request->getVar('u_name');

        $this->user->save([
            'nama' => $nama,
            'jenis_kelamin' => $this->request->getVar('jk'),
            'dr' => $this->request->getVar('dr'),
            'unit' => $this->request->getVar('unit'),
            'bagian' => $this->request->getVar('bagian'),
            'tgl' => $this->request->getVar('tgl'),
            'berat_badan' => $this->request->getVar('bb'),
            'tinggi_badan' => $this->request->getVar('tinggi'),
            'tekanan_darah' => $this->request->getVar('tekanan_d'),
            'nadi' => $this->request->getVar('nadi'),
            'status' => '1'
        ]);

        $data_id = $this->user->getUserId($nama);

        $this->check->save([
            'id_user' => $data_id,
            'pemfis' => $this->request->getVar('1'),
            'ro' => $this->request->getVar('2'),
            'audiometri' => $this->request->getVar('3'),
            'lab' => $this->request->getVar('4'),
            'ekg' => $this->request->getVar('5'),
            'spirometri' => $this->request->getVar('6'),
        ]);

        $this->mata->save([
            'id_user' => $data_id,
            'visus_od_1' => $this->request->getVar('od1'),
            'visus_os_1' => $this->request->getVar('os1'),
            'visus_od_2' => $this->request->getVar('od2'),
            'visus_os_2' => $this->request->getVar('os2'),
            'buta_warna' => $this->request->getVar('A_1'),
            'sklera' => $this->request->getVar('A_2'),
            'konjungtiva' => $this->request->getVar('A_3'),
            'kesimpulan_mata' => $this->request->getVar('A_4'),
        ]);

        $this->tht->save([
            'id_user' => $data_id,
            'serumen' => $this->request->getVar('B1_1'),
            'benjolan' => $this->request->getVar('B1_2'),
            'polip' => $this->request->getVar('B2_1'),
            'hipermatis' => $this->request->getVar('B3_1'),
            'kesimpulan_tht' => $this->request->getVar('B3_2'),
        ]);

        $this->mulut->save([
            'id_user' => $data_id,
            'karies' => $this->request->getVar('C_1'),
            'kesimpulan_gigi' => $this->request->getVar('C_2'),
            'kgb' => $this->request->getVar('D_1'),
            'kesimpulan_leher' => $this->request->getVar('D_2'),
        ]);

        $this->dada->save([
            'id_user' => $data_id,
            'dada' => $this->request->getVar('2_1'),
            'punggung' => $this->request->getVar('2_2'),
            'pergerakan' => $this->request->getVar('2_3'),
            'bunyi_paru' => $this->request->getVar('2_4'),
            's1' => $this->request->getVar('2_5'),
            's2' => $this->request->getVar('2_6'),
            'murmur' => $this->request->getVar('2_7'),
            'kesimpulan_dada' => $this->request->getVar('2_8'),
        ]);

        $this->perut->save([
            'id_user' => $data_id,
            'bentuk' => $this->request->getVar('3_1'),
            'bising_usus' => $this->request->getVar('3_2'),
            'nyeri_tekan' => $this->request->getVar('3_3'),
            'hepar' => $this->request->getVar('3_4'),
            'pembesaran_organ' => $this->request->getVar('3_5'),
            'kesimpulan_perut' => $this->request->getVar('3_6'),
        ]);

        $this->ekstrimitas->save([
            'id_user' => $data_id,
            'kiri_atas' => $this->request->getVar('kiri_atas'),
            'kanan_atas' => $this->request->getVar('kanan_atas'),
            'kiri_bawah' => $this->request->getVar('kiri_bawah'),
            'kanan_bawah' => $this->request->getVar('kanan_bawah'),
            'pergerakan' => $this->request->getVar('4_1'),
            'kesimpulan_ekstrimitas' => $this->request->getVar('4_2'),
            'kesimpulan_keseluruhan' => $this->request->getVar('kesimpulan_kes'),
            'saran' => $this->request->getVar('saran'),
        ]);

        return redirect()->to('data-mcu');
    }

    public function detail_mcu($id_user)
    {
        $detail_mcu = $this->user->getUserById($id_user);
        $data = [
            'title' => 'Detail Medical Check Up',
            'side' => '2',
            'subside' => '',
            'mcu' => $detail_mcu
        ];
        return view('Main/v_detail_mcu', $data);
    }

    public function formlab()
    {
        $data = [
            'title' => 'Form Lab',
            'side' => '3',
            'subside' => '',
        ];
        return view('Main/v_form_lab', $data);
    }

    public function save_lab()
    {
        $jk = $this->request->getVar('jk');

        $this->user->save([
            'nama' => $this->request->getVar('u_name'),
            'jenis_kelamin' => $this->request->getVar('jk'),
            'unit' => $this->request->getVar('unit'),
            'bagian' => $this->request->getVar('bagian'),
            'tgl' => $this->request->getVar('tgl'),
            'status' => '1'
        ]);
        $id_user = $this->user->getInsertID();

        $data_hematologi = [];
        $data_hitungjenis = [];
        $data_kimiadarah = [];
        $data_makroskopik = [];
        $data_mikroskopik = [];
        $data_sedimen = [];
        $item_hematologi = ['Hemoglobin', 'Leukosit', 'Eritrosit', 'Hematokrit', 'Trombosit', 'MCV', 'MCH', 'MCHC', 'LED'];
        $satuan_hematologi = ['gr', 'rb mm3', 'jt mm3', '%', 'x 1000 ul', '', '', '', ''];
        $item_hitungjenis = ['Basofil', 'Eosinofil', 'Batang', 'Segmen', 'Limsofit', 'Monosit'];
        $satuan_hitungjenis = ['%', '%', '%', '%', '%', '%'];
        $item_kimiadarah = ['SGOT', 'SGPT', 'Creatinin'];
        $satuan_kimiadarah = ['U/L', 'U/L', 'mg/dl'];
        $item_makroskopik = ['Warna', 'Kekeruhan', 'pH', 'Berat_Jenis'];
        $satuan_makroskopik = ['', '', '', ''];
        $item_mikroskopik = ['Leukosit', 'Nitrit', 'Urobilinogen', 'Protein', 'Blood', 'Keton', 'Bilirubin', 'Glukosa'];
        $satuan_mikroskopik = ['', '', '', '', '', '', '', ''];
        $item_sedimen = ['Eritrosit', 'Leukosit', 'Epitel', 'Bakteri', 'Kristal'];
        $satuan_sedimen = ['', '', '', '', ''];

        $range_1 = [
            1 => ['Pria' => [12.5, 18], 'Wanita' => [11.5, 16]],
            2 => [4, 10],
            3 => [4, 6.5],
            4 => ['Pria' => [38, 51], 'Wanita' => [36, 48]],
            5 => [150, 400],
            6 => [83.9, 99.1],
            7 => [27.8, 33.8],
            8 => [32, 36],
            9 => ['Pria' => [13, 18], 'Wanita' => [10, 15]],
        ];

        $range_2 = [
            1 => [0, 1],
            2 => [0, 4],
            3 => [2, 5],
            4 => [36, 66],
            5 => [22, 40],
            6 => [4, 8],
        ];

        $range_3 = [
            1 => ['Pria' => [8, 37], 'Wanita' => [8, 31]],
            2 => ['Pria' => [6, 40], 'Wanita' => [6, 31]],
            3 => ['Pria' => [0.8, 1.5], 'Wanita' => [0.6, 1.2]],
        ];

        $range_4 = [
            1 => [],
            2 => [],
            3 => [7.35, 7.5],
            4 => [1.000, 1.030],
        ];

        $range_6 = [
            1 => [0, 1],
            2 => [0, 6],
            3 => [],
            4 => [],
            5 => [],
        ];

        for ($a = 1; $a <= 9; $a++) {
            $value = $this->request->getVar("hematologi_$a");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;
            if ($a == 9 && preg_match('/\d+(\.\d+)?/', $value, $matches)) {
                $compareValue = (float) $matches[0]; // Hanya gunakan angka pertama untuk perbandingan
            }

            if (!empty($range_1[$a])) {
                if (isset($range_1[$a]['Pria'], $range_1[$a]['Wanita'])) {
                    $gender = $jk ?? 'Wanita';
                    $limits = $range_1[$a][$gender];
                } else {
                    $limits = $range_1[$a];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}"; // Menambahkan nilai normal

                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_hematologi["hematologi_$a"] = [
                "name" => $item_hematologi[$a - 1],
                "value" => $value,
                "satuan" => $satuan_hematologi[$a - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }


        for ($b = 1; $b <= 6; $b++) {
            $value = $this->request->getVar("hitungjenis_$b");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_2[$b])) {
                if (isset($range_2[$b]['Pria'], $range_2[$b]['Wanita'])) {
                    $gender = $jk ?? 'Wanita';
                    $limits = $range_2[$b][$gender];
                } else {
                    $limits = $range_2[$b];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }
            $data_hitungjenis["hitungjenis_$b"] = [
                "name" => $item_hitungjenis[$b - 1],
                "value" => $this->request->getVar("hitungjenis_$b"),
                "satuan" => $satuan_hitungjenis[$b - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($c = 1; $c <= 3; $c++) {
            $value = $this->request->getVar("kimiadarah_$c");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_3[$c])) {
                if (isset($range_3[$c]['Pria'], $range_3[$c]['Wanita'])) {
                    $gender = $jk ?? 'Wanita';
                    $limits = $range_3[$c][$gender];
                } else {
                    $limits = $range_3[$c];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_kimiadarah["kimiadarah_$c"] = [
                "name" => $item_kimiadarah[$c - 1],
                "value" => $this->request->getVar("kimiadarah_$c"),
                "satuan" => $satuan_kimiadarah[$c - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($d = 1; $d <= 4; $d++) {
            $value = $this->request->getVar("dd_$d");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_4[$d])) {
                if (isset($range_4[$d]['Pria'], $range_4[$d]['Wanita'])) {
                    $gender = $jk ?? 'Wanita';
                    $limits = $range_4[$d][$gender];
                } else {
                    $limits = $range_4[$d];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_makroskopik["makroskopik_$d"] = [
                "name" => $item_makroskopik[$d - 1],
                "value" => $this->request->getVar("dd_$d"),
                "satuan" => $satuan_makroskopik[$d - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($e = 1; $e <= 8; $e++) {
            $data_mikroskopik["mikroskopik_$e"] = [
                "name" => $item_mikroskopik[$e - 1],
                "value" => $this->request->getVar("cc_$e"),
                "satuan" => $satuan_mikroskopik[$e - 1],
                "kesimpulan" => '',
                "nilai_normal" => NULL
            ];
        }

        for ($f = 1; $f <= 5; $f++) {
            $value = $this->request->getVar("sedimen_$f");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;
            if (in_array($f, [1, 2, 3]) && preg_match('/\d+(\.\d+)?/', $value, $matches)) {
                $compareValue = (float) $matches[0]; // Hanya gunakan angka pertama untuk perbandingan
            }

            if (!empty($range_6[$f])) {
                if (isset($range_6[$f]['Pria'], $range_6[$f]['Wanita'])) {
                    $gender = $jk ?? 'Wanita';
                    $limits = $range_6[$f][$gender];
                } else {
                    $limits = $range_6[$f];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_sedimen["sedimen_$f"] = [
                "name" => $item_sedimen[$f - 1],
                "value" => $this->request->getVar("sedimen_$f"),
                "satuan" => $satuan_sedimen[$f - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        $hematologi = json_encode($data_hematologi, JSON_PRETTY_PRINT);
        $hitung_jenis = json_encode($data_hitungjenis, JSON_PRETTY_PRINT);
        $kimia_darah = json_encode($data_kimiadarah, JSON_PRETTY_PRINT);
        $makroskopik = json_encode($data_makroskopik, JSON_PRETTY_PRINT);
        $mikroskopik = json_encode($data_mikroskopik, JSON_PRETTY_PRINT);
        $sedimen_urine = json_encode($data_sedimen, JSON_PRETTY_PRINT);

        $this->lab->save([
            'id_user' => $id_user,
            'hematologi' => $hematologi,
            'hitung_jenis' => $hitung_jenis,
            'kimia_darah' => $kimia_darah,
            'makroskopik' => $makroskopik,
            'mikroskopik' => $mikroskopik,
            'sedimen_urine' => $sedimen_urine,
        ]);

        $this->user->update($id_user, ['status' => '3']);

        return redirect()->to('data-mcu');
    }

    public function half_lab($id)
    {
        $detail_usr = $this->user->getUserLabById($id);
        $data = [
            'title' => 'Isi Hasil Lab',
            'side' => '3',
            'subside' => '',
            'user' => $detail_usr,
            'id' => $id
        ];
        // dd($data);
        return view('Main/v_isi_lab', $data);
    }

    public function save_half_lab()
    {
        $id_user = $this->request->getVar("id");
        $jk = $this->user->getJkById($id_user);

        $data_hematologi = [];
        $data_hitungjenis = [];
        $data_kimiadarah = [];
        $data_makroskopik = [];
        $data_mikroskopik = [];
        $data_sedimen = [];
        $item_hematologi = ['Hemoglobin', 'Leukosit', 'Eritrosit', 'Hematokrit', 'Trombosit', 'MCV', 'MCH', 'MCHC', 'LED'];
        $satuan_hematologi = ['gr', 'rb mm3', 'jt mm3', '%', 'x 1000 ul', '', '', '', ''];
        $item_hitungjenis = ['Basofil', 'Eosinofil', 'Batang', 'Segmen', 'Limsofit', 'Monosit'];
        $satuan_hitungjenis = ['%', '%', '%', '%', '%', '%'];
        $item_kimiadarah = ['SGOT', 'SGPT', 'Creatinin'];
        $satuan_kimiadarah = ['U/L', 'U/L', 'mg/dl'];
        $item_makroskopik = ['Warna', 'Kekeruhan', 'pH', 'Berat_Jenis'];
        $satuan_makroskopik = ['', '', '', ''];
        $item_mikroskopik = ['Leukosit', 'Nitrit', 'Urobilinogen', 'Protein', 'Blood', 'Keton', 'Bilirubin', 'Glukosa'];
        $satuan_mikroskopik = ['', '', '', '', '', '', '', ''];
        $item_sedimen = ['Eritrosit', 'Leukosit', 'Epitel', 'Bakteri', 'Kristal'];
        $satuan_sedimen = ['', '', '', '', ''];

        $range_1 = [
            1 => ['Pria' => [12.5, 18], 'Wanita' => [11.5, 16]],
            2 => [4, 10],
            3 => [4, 6.5],
            4 => ['Pria' => [38, 51], 'Wanita' => [36, 48]],
            5 => [150, 400],
            6 => [83.9, 99.1],
            7 => [27.8, 33.8],
            8 => [32, 36],
            9 => ['Pria' => [13, 18], 'Wanita' => [10, 15]],
        ];

        $range_2 = [
            1 => [0, 1],
            2 => [0, 4],
            3 => [2, 5],
            4 => [36, 66],
            5 => [22, 40],
            6 => [4, 8],
        ];

        $range_3 = [
            1 => ['Pria' => [8, 37], 'Wanita' => [8, 31]],
            2 => ['Pria' => [6, 40], 'Wanita' => [6, 31]],
            3 => ['Pria' => [0.8, 1.5], 'Wanita' => [0.6, 1.2]],
        ];

        $range_4 = [
            1 => [],
            2 => [],
            3 => [7.35, 7.5],
            4 => [1.000, 1.030],
        ];

        $range_6 = [
            1 => [0, 1],
            2 => [0, 6],
            3 => [],
            4 => [],
            5 => [],
        ];

        for ($a = 1; $a <= 9; $a++) {
            $value = $this->request->getVar("hematologi_$a");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;
            if ($a == 9 && preg_match('/\d+(\.\d+)?/', $value, $matches)) {
                $compareValue = (float) $matches[0]; // Hanya gunakan angka pertama untuk perbandingan
            }

            if (!empty($range_1[$a])) {
                if (isset($range_1[$a]['Pria'], $range_1[$a]['Wanita'])) {
                    $gender = $jk['jenis_kelamin'] ?? 'Wanita';
                    $limits = $range_1[$a][$gender];
                } else {
                    $limits = $range_1[$a];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}"; // Menambahkan nilai normal

                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_hematologi["hematologi_$a"] = [
                "name" => $item_hematologi[$a - 1],
                "value" => $value,
                "satuan" => $satuan_hematologi[$a - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }


        for ($b = 1; $b <= 6; $b++) {
            $value = $this->request->getVar("hitungjenis_$b");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_2[$b])) {
                if (isset($range_2[$b]['Pria'], $range_2[$b]['Wanita'])) {
                    $gender = $jk['jenis_kelamin'] ?? 'Wanita';
                    $limits = $range_2[$b][$gender];
                } else {
                    $limits = $range_2[$b];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }
            $data_hitungjenis["hitungjenis_$b"] = [
                "name" => $item_hitungjenis[$b - 1],
                "value" => $this->request->getVar("hitungjenis_$b"),
                "satuan" => $satuan_hitungjenis[$b - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($c = 1; $c <= 3; $c++) {
            $value = $this->request->getVar("kimiadarah_$c");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_3[$c])) {
                if (isset($range_3[$c]['Pria'], $range_3[$c]['Wanita'])) {
                    $gender = $jk['jenis_kelamin'] ?? 'Wanita';
                    $limits = $range_3[$c][$gender];
                } else {
                    $limits = $range_3[$c];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_kimiadarah["kimiadarah_$c"] = [
                "name" => $item_kimiadarah[$c - 1],
                "value" => $this->request->getVar("kimiadarah_$c"),
                "satuan" => $satuan_kimiadarah[$c - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($d = 1; $d <= 4; $d++) {
            $value = $this->request->getVar("dd_$d");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;

            if (!empty($range_4[$d])) {
                if (isset($range_4[$d]['Pria'], $range_4[$d]['Wanita'])) {
                    $gender = $jk['jenis_kelamin'] ?? 'Wanita';
                    $limits = $range_4[$d][$gender];
                } else {
                    $limits = $range_4[$d];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_makroskopik["makroskopik_$d"] = [
                "name" => $item_makroskopik[$d - 1],
                "value" => $this->request->getVar("dd_$d"),
                "satuan" => $satuan_makroskopik[$d - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        for ($e = 1; $e <= 8; $e++) {
            $data_mikroskopik["mikroskopik_$e"] = [
                "name" => $item_mikroskopik[$e - 1],
                "value" => $this->request->getVar("cc_$e"),
                "satuan" => $satuan_mikroskopik[$e - 1],
                "kesimpulan" => '',
                "nilai_normal" => NULL
            ];
        }

        for ($f = 1; $f <= 5; $f++) {
            $value = $this->request->getVar("sedimen_$f");
            $hasil = '';
            $nilai_normal = NULL;

            $compareValue = $value;
            if (in_array($f, [1, 2, 3]) && preg_match('/\d+(\.\d+)?/', $value, $matches)) {
                $compareValue = (float) $matches[0]; // Hanya gunakan angka pertama untuk perbandingan
            }

            if (!empty($range_6[$f])) {
                if (isset($range_6[$f]['Pria'], $range_6[$f]['Wanita'])) {
                    $gender = $jk['jenis_kelamin'] ?? 'Wanita';
                    $limits = $range_6[$f][$gender];
                } else {
                    $limits = $range_6[$f];
                }

                if (is_array($limits) && count($limits) === 2) {
                    $nilai_normal = "{$limits[0]} - {$limits[1]}";
                    if ($compareValue < $limits[0]) {
                        $hasil = 'Low';
                    } elseif ($compareValue > $limits[1]) {
                        $hasil = 'High';
                    }
                }
            }

            $data_sedimen["sedimen_$f"] = [
                "name" => $item_sedimen[$f - 1],
                "value" => $this->request->getVar("sedimen_$f"),
                "satuan" => $satuan_sedimen[$f - 1],
                "kesimpulan" => $hasil,
                "nilai_normal" => $nilai_normal
            ];
        }

        $hematologi = json_encode($data_hematologi, JSON_PRETTY_PRINT);
        $hitung_jenis = json_encode($data_hitungjenis, JSON_PRETTY_PRINT);
        $kimia_darah = json_encode($data_kimiadarah, JSON_PRETTY_PRINT);
        $makroskopik = json_encode($data_makroskopik, JSON_PRETTY_PRINT);
        $mikroskopik = json_encode($data_mikroskopik, JSON_PRETTY_PRINT);
        $sedimen_urine = json_encode($data_sedimen, JSON_PRETTY_PRINT);

        // dd($sedimen_urine);


        $this->lab->save([
            'id_user' => $id_user,
            'hematologi' => $hematologi,
            'hitung_jenis' => $hitung_jenis,
            'kimia_darah' => $kimia_darah,
            'makroskopik' => $makroskopik,
            'mikroskopik' => $mikroskopik,
            'sedimen_urine' => $sedimen_urine,
        ]);

        $this->user->update($id_user, ['status' => '3']);

        return redirect()->to('data-mcu');
    }

    public function detail_lab($id)
    {
        $detail_lab = $this->user->getDetailLabById($id);
        $data = [
            'title' => 'Detail Lab',
            'side' => '3',
            'subside' => '',
            'lab' => $detail_lab
        ];
        return view('Main/v_detail_lab', $data);
    }

    public function delete_lab($id)
    {
        $user_lab = $this->lab->getIdByUser($id);
        $this->lab->delete($user_lab['id']);
        $this->user->update($id, ['status' => '1']);
        return redirect()->to('data-mcu');
    }
}
