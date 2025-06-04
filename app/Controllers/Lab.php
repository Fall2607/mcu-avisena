<?php

namespace App\Controllers;

use App\Models\M_Nilai;
use App\Models\M_Paket;
use App\Models\M_Tindakan;

class Lab extends BaseController
{
    protected $db,$tindakan,$paket,$nn;
    public function __construct()
    {
        $this->db = db_connect();
        $this->tindakan = new M_Tindakan();
        $this->paket = new M_Paket();
        $this->nn = new M_Nilai();
    }

    // public function index(): string
    // {
    //     $data['title'] = 'Item Lab Single Test';
    //     $data['side'] = '4';
    //     $data['tindakan'] = $this->tindakan->findAll();
    //     return view('Lab/v_item_single', $data);
    // }

    public function index(): string
    {
        $data['title'] = 'Item Lab Single Test';
        $data['side'] = '4'; // Asumsi ini untuk navigasi atau styling

        // 1. Ambil semua data tindakan
        $tindakanList = $this->tindakan->findAll(); // Mengembalikan array of objects atau array of arrays

        // 2. Untuk setiap tindakan, ambil data nilai normalnya
        $data_tindakan_dengan_nilai_normal = [];
        if (!empty($tindakanList)) {
            foreach ($tindakanList as $tindakan) {
                // Tentukan cara mengakses id_tindakan (tergantung $returnType model TindakanModel)
                $id_tindakan = is_object($tindakan) ? $tindakan->id_tindakan : $tindakan['id_tindakan']; // Sesuaikan 'id_tindakan' jika nama kolomnya berbeda

                // Panggil fungsi dari NilaiNormalModel
                $nilai_normal = $this->nn->getNilaiNormalByTindakan($id_tindakan);

                // Sisipkan data nilai normal ke dalam data tindakan
                if (is_object($tindakan)) {
                    $tindakan->nilai_normal_list = $nilai_normal; // Tambah properti baru
                    $data_tindakan_dengan_nilai_normal[] = $tindakan;
                } else { // Jika $tindakan adalah array
                    $tindakan['nilai_normal_list'] = $nilai_normal; // Tambah key baru
                    $data_tindakan_dengan_nilai_normal[] = $tindakan;
                }
            }
        }

        // dd($data_tindakan_dengan_nilai_normal);

        $data['tindakan'] = $data_tindakan_dengan_nilai_normal;

        return view('Lab/v_item_single', $data);
    }

    public function multiple(): string
    {
        $data['title'] = 'Item Lab Multiple Test';
        $data['side'] = '5';
        $data['paket'] = $this->paket->findAll();
        return view('Lab/v_item_multiple', $data);
    }

    public function saveTindakan()
    {
        $items = $this->request->getPost('items');
        if (empty($items)) {
            session()->setFlashdata('swal', [
            'icon'  => 'error',
            'title' => 'Gagal!',
            'text'  => 'Tidak ada item tindakan yang dikirim.'
            ]);
            return redirect()->back();
        }

        $allValid = true;
        foreach ($items as $index => $item) {
            if (empty(trim($item['nama_item']))) {
                $allValid = false;
                session()->setFlashdata('swal', [
                    'icon'  => 'error',
                    'title' => 'Gagal Validasi!',
                    'text'  => 'Nama Item pada salah satu baris wajib diisi.'
                ]);
                return redirect()->back()->withInput();
                break;
            }
        }
        if ($allValid) {
            $savedCount = 0;
            foreach ($items as $itemData) {
                $nama_item = trim($itemData['nama_item']);
                $satuan = isset($itemData['satuan']) ? trim($itemData['satuan']) : '';
                $catatan = isset($itemData['catatan']) ? trim($itemData['catatan']) : null;

                if (empty($catatan)) {
                    $catatan = null;
                }
                $this->tindakan->save([
                    'nama_tindakan'    => $nama_item,
                    'satuan'           => $satuan,
                    'catatan_tindakan' => $catatan
                ]);
                $savedCount++;
            }

            if ($savedCount > 0) {
                session()->setFlashdata('swal', [
                    'icon'  => 'success',
                    'title' => 'Berhasil!',
                    'text'  => $savedCount . ' item tindakan berhasil disimpan.'
                ]);
            } else {
                session()->setFlashdata('swal', [
                    'icon'  => 'warning',
                    'title' => 'Tidak Ada Perubahan',
                    'text'  => 'Tidak ada item tindakan baru yang disimpan.'
                ]);
            }
            return redirect()->to('/lab/single-test');
        }
        return redirect()->back();
    }

    public function savePaket()
    {
        $paket = $this->request->getPost('paket');
        // dd($paket);
        if (empty($paket)) {
            session()->setFlashdata('swal', [
            'icon'  => 'error',
            'title' => 'Gagal!',
            'text'  => 'Tidak ada item Paket yang dikirim.'
            ]);
            return redirect()->back();
        }

        $allValid = true;
        foreach ($paket as $index => $item) {
            if (empty(trim($item['nama_paket']))) {
                $allValid = false;
                session()->setFlashdata('swal', [
                    'icon'  => 'error',
                    'title' => 'Gagal Validasi!',
                    'text'  => 'Nama Paket pada salah satu baris wajib diisi.'
                ]);
                return redirect()->back()->withInput();
                break;
            }
        }
        if ($allValid) {
            $savedCount = 0;
            foreach ($paket as $itemData) {
                $nama_paket = trim($itemData['nama_paket']);
                $deskripsi = isset($itemData['deskripsi']) ? trim($itemData['deskripsi']) : null;

                if (empty($deskripsi)) {
                    $deskripsi = null;
                }
                $this->paket->save([
                    'nama_paket'    => $nama_paket,
                    'deskripsi_paket' => $deskripsi
                ]);
                $savedCount++;
            }

            if ($savedCount > 0) {
                session()->setFlashdata('swal', [
                    'icon'  => 'success',
                    'title' => 'Berhasil!',
                    'text'  => $savedCount . ' item tindakan berhasil disimpan.'
                ]);
            } else {
                session()->setFlashdata('swal', [
                    'icon'  => 'warning',
                    'title' => 'Tidak Ada Perubahan',
                    'text'  => 'Tidak ada item tindakan baru yang disimpan.'
                ]);
            }
            return redirect()->to('/lab/multiple-test');
        }
        return redirect()->back();
    }

    public function saveNilaiNormal($id)
    {
        $nilai = $this->request->getPost('nilai_normal');
        if (!is_array($nilai)) {
            session()->setFlashdata('swal', [
                'icon'  => 'error',
                'title' => 'Gagal!',
                'text'  => 'Data nilai normal tidak valid.'
            ]);
            return redirect()->back()->withInput();
        }
        $allValid = true;
        foreach ($nilai as $index => $itemData) {
            if (!is_array($itemData)) {
                $allValid = false;
                session()->setFlashdata('swal', [
                    'icon'  => 'error',
                    'title' => 'Gagal Validasi!',
                    'text'  => 'Nilai Normal pada salah satu baris wajib diisi.'
                ]);
                return redirect()->back()->withInput();
                break;
            }
        }
        if ($allValid) {
            $savedCount = 0;
            foreach ($nilai as $itemData) {
                $kategori = $itemData['kategori'] ?? '';
                $min = $itemData['min'] ?? '';
                $max = $itemData['max'] ?? '';

                $this->nn->save([
                    'id_tindakan' => $id,
                    'kategori'    => $kategori,
                    'nilai_min' => $min,
                    'nilai_max' => $max
                ]);
                $savedCount++;
            }

            if ($savedCount > 0) {
                session()->setFlashdata('swal', [
                    'icon'  => 'success',
                    'title' => 'Berhasil!',
                    'text'  => $savedCount . ' nilai normal berhasil disimpan.'
                ]);
            } else {
                session()->setFlashdata('swal', [
                    'icon'  => 'warning',
                    'title' => 'Tidak Ada Perubahan',
                    'text'  => 'Tidak ada nilai normal baru yang disimpan.'
                ]);
            }
            return redirect()->to('/lab/single-test');
        }
        return redirect()->back();
    }
}
