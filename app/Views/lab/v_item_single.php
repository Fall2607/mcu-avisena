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
                        <h6><?=$title;?></h6>
                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahItem">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                        <?php if ($swal = session()->getFlashdata('swal')): ?>
                            <script>Swal.fire(<?= json_encode($swal) ?>);</script>
                        <?php endif; ?>
                        <!-- Modal Tambah Item -->
                        <div class="modal fade" id="modalTambahItem" tabindex="-1" aria-labelledby="modalTambahItemLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?= site_url('lab/saveTindakan'); ?>" method="post" id="formTambahItems">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTambahItemLabel">Tambah Tindakan Lab</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="items-container">
                                                <div class="item-group border rounded p-2 mb-2">
                                                    <div class="mb-3">
                                                        <label for="nama_item_0" class="form-label">Nama Item</label>
                                                        <input type="text" class="form-control" id="nama_item_0" name="items[0][nama_item]" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="satuan_0" class="form-label">Satuan</label>
                                                        <input type="text" class="form-control" id="satuan_0" name="items[0][satuan]">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="specimen_0" class="form-label">Specimen</label>
                                                        <select class="form-select" id="specimen_0" name="items[0][specimen]" required>
                                                            <option value="" selected hidden>Pilih Specimen</option>
                                                            <option value="Darah">Darah</option>
                                                            <option value="Urine">Urine</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="catatan_0" class="form-label">Catatan Tindakan</label>
                                                        <textarea class="form-control" id="catatan_0" name="items[0][catatan]" rows="1"></textarea>
                                                    </div>
                                                    <button type="button" class="btn btn-danger btn-sm btn-remove-item d-none">Hapus</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm" id="btnAddItem"><i class="fa fa-plus"></i> Tambah Item</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                    <script>
                                        let itemIndex = 1;
                                        document.getElementById('btnAddItem').addEventListener('click', function() {
                                            const container = document.getElementById('items-container');
                                            const newItem = document.createElement('div');
                                            newItem.className = 'item-group border rounded p-2 mb-2';
                                            newItem.innerHTML = `
                                                <div class="mb-3">
                                                    <label for="nama_item_${itemIndex}" class="form-label">Nama Item</label>
                                                    <input type="text" class="form-control" id="nama_item_${itemIndex}" name="items[${itemIndex}][nama_item]" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="satuan_${itemIndex}" class="form-label">Satuan</label>
                                                    <input type="text" class="form-control" id="satuan_${itemIndex}" name="items[${itemIndex}][satuan]">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="specimen_${itemIndex}" class="form-label">Specimen</label>
                                                    <select class="form-select" id="specimen_${itemIndex}" name="items[${itemIndex}][specimen]" required>
                                                        <option value="" selected hidden>Pilih Specimen</option>
                                                        <option value="Darah">Darah</option>
                                                        <option value="Urine">Urine</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="catatan_${itemIndex}" class="form-label">Catatan Tindakan</label>
                                                    <textarea class="form-control" id="catatan_${itemIndex}" name="items[${itemIndex}][catatan]" rows="1"></textarea>
                                                </div>
                                                <button type="button" class="btn btn-danger btn-sm btn-remove-item">Hapus</button>
                                            `;
                                            container.appendChild(newItem);
                                            itemIndex++;
                                        });

                                        document.getElementById('items-container').addEventListener('click', function(e) {
                                            if (e.target.classList.contains('btn-remove-item')) {
                                                e.target.parentElement.remove();
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2">
                        <div class="container-fluid">
                            <table id="tableMain" class="table text-center table-hover dataTable dtr-inline">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 50px; min-width: 50px;">No</th>
                                        <th scope="col">Nama Item</th>
                                        <th scope="col">Specimen</th>
                                        <th scope="col">Satuan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($tindakan as $item): ?>
                                        <?php
                                            // Sesuaikan cara akses properti/key berdasarkan returnType TindakanModel
                                            $current_id_tindakan = is_object($item) ? $item->id_tindakan : $item['id_tindakan'];
                                            $current_nama_tindakan = is_object($item) ? $item->nama_tindakan : $item['nama_tindakan'];
                                            // Akses nilai normal list
                                            $nilai_normal_list = is_object($item) ? $item->nilai_normal_list : $item['nilai_normal_list'];
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= esc($item['nama_tindakan']); ?></td>
                                            <td><?= esc($item['specimen']); ?></td>
                                            <td><?= esc($item['satuan']); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary act-bt btn-sm p-1" data-bs-toggle="modal" data-bs-target="#modalItem<?=$item['id_tindakan']?>">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                <div class="modal fade" id="modalItem<?=$item['id_tindakan']?>" tabindex="-1" aria-labelledby="modalItem<?=$item['id_tindakan']?>Label" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modalItem<?=$item['id_tindakan']?>Label">Tindakan <?=$item['nama_tindakan']?></h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <ul class="list-group text-start" style="border: none;">
                                                                    <li class="list-group-item border-0"><strong>Nama Item:</strong> <?= esc($item['nama_tindakan']); ?></li>
                                                                    <li class="list-group-item border-0"><strong>Specimen:</strong> <?= esc($item['specimen']); ?></li>
                                                                    <li class="list-group-item border-0"><strong>Satuan:</strong> <?= esc($item['satuan']); ?></li>
                                                                    <li class="list-group-item border-0"><strong>Catatan:</strong> <?= esc($item['catatan_tindakan']); ?></li>
                                                                </ul>
                                                                    <div>
                                                                        <table class="table table-sm text-start border">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Kategori</th>
                                                                                    <th>Min</th>
                                                                                    <th>Max</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php if (!empty($nilai_normal_list) && is_array($nilai_normal_list)): ?>
                                                                                    <?php foreach ($nilai_normal_list as $nilai): ?>
                                                                                        <tr>
                                                                                            <td><?= esc($nilai['kategori']) ?></td>
                                                                                            <td><?= esc($nilai['nilai_min']) ?></td> 
                                                                                            <td><?= esc($nilai['nilai_max']) ?></td>
                                                                                        </tr>
                                                                                    <?php endforeach; ?>
                                                                                <?php else: ?>
                                                                                    <tr>
                                                                                        <td class="text-center" colspan="3">Tidak ada data nilai normal.</td>
                                                                                    </tr>
                                                                                <?php endif; ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                <form action="<?= site_url('lab/saveNilaiNormal/' . $item['id_tindakan']); ?>" method="post">
                                                                    <div class="">
                                                                        <div id="nilai-normal-container-<?= $item['id_tindakan']; ?>">
                                                                            <div class="row g-2 align-items-end text-start nilai-normal-group">
                                                                                <div class="col-md-6">
                                                                                    <label class="form-label">Item-1</label>
                                                                                    <select class="form-select" name="nilai_normal[0][kategori]" required>
                                                                                        <option selected hidden>Pilih Jenis Kelamin</option>
                                                                                        <option value="Pria">Pria</option>
                                                                                        <option value="Wanita">Wanita</option>
                                                                                        <option value="Umum">Umum</option>
                                                                                    </select>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" class="form-control" name="nilai_normal[0][min]" placeholder="Min" required>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <input type="text" class="form-control" name="nilai_normal[0][max]" placeholder="Max" required>
                                                                                </div>
                                                                                <div class="col-12 mt-2 d-none">
                                                                                    <button type="button" class="btn btn-danger btn-sm btn-remove-nilai-normal">Hapus</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row pt-3">
                                                                            <div class="col-12 d-flex justify-content-end gap-2">
                                                                                <button type="button" class="btn btn-primary" id="btnTambahNilaiNormal-<?= $item['id_tindakan']; ?>">Tambah</button>
                                                                                <button type="submit" class="btn btn-success">Simpan</button>
                                                                            </div>
                                                                        </div>
                                                                        <script>
                                                                            (function() {
                                                                                let idx = 1;
                                                                                const container = document.getElementById('nilai-normal-container-<?= $item['id_tindakan']; ?>');
                                                                                const btnTambah = document.getElementById('btnTambahNilaiNormal-<?= $item['id_tindakan']; ?>');
                                                                                btnTambah.addEventListener('click', function() {
                                                                                    const group = document.createElement('div');
                                                                                    group.className = 'row g-2 align-items-end text-start nilai-normal-group';
                                                                                    group.innerHTML = `
                                                                                        <div class="col-md-6">
                                                                                        <label class="form-label">Item-${idx+1}</label>
                                                                                            <select class="form-select" name="nilai_normal[${idx}][kategori]" required>
                                                                                                <option selected hidden>Pilih Jenis Kelamin</option>    
                                                                                                <option value="Pria">Pria</option>
                                                                                                <option value="Wanita">Wanita</option>
                                                                                                <option value="Umum">Umum</option>
                                                                                            </select>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" class="form-control" name="nilai_normal[${idx}][min]" placeholder="Min" required>
                                                                                        </div>
                                                                                        <div class="col-md-3">
                                                                                            <input type="text" class="form-control" name="nilai_normal[${idx}][max]" placeholder="Max" required>
                                                                                        </div>
                                                                                        <div class="col-12 mt-2">
                                                                                            <button type="button" class="btn btn-danger btn-sm btn-remove-nilai-normal">Hapus</button>
                                                                                        </div>
                                                                                    `;
                                                                                    container.appendChild(group);
                                                                                    idx++;
                                                                                });
                                                                                container.addEventListener('click', function(e) {
                                                                                    if (e.target.classList.contains('btn-remove-nilai-normal')) {
                                                                                        e.target.closest('.nilai-normal-group').remove();
                                                                                    }
                                                                                });
                                                                            })();
                                                                        </script>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="<?= site_url('lab/delete-lab/' . $item['id_tindakan']); ?>" class="btn btn-danger act-bt btn-sm p-1" onclick="return confirm('Yakin ingin menghapus item ini?');">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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