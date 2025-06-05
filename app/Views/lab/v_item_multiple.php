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
                        <h6><?= $title; ?></h6>
                        <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambahPaket">
                            <i class="fa-solid fa-plus"></i>
                        </a>
                        <?php if ($swal = session()->getFlashdata('swal')): ?>
                            <script>Swal.fire(<?= json_encode($swal) ?>);</script>
                        <?php endif; ?>
                        <!-- Modal Tambah Paket -->
                        <div class="modal fade" id="modalTambahPaket" tabindex="-1"
                            aria-labelledby="modalTambahPaketLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="<?= site_url('lab/savePaket'); ?>" method="post" id="formTambahPaket">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTambahPaketLabel">Tambah Paket Lab</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="paket-container">
                                                <div class="paket-group border rounded p-2 mb-2">
                                                    <div class="mb-3">
                                                        <label for="nama_paket_0" class="form-label">Nama Paket</label>
                                                        <input type="text" class="form-control" id="nama_paket_0"
                                                            name="paket[0][nama_paket]" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="catatan_0" class="form-label">Deskripsi
                                                            Paket</label>
                                                        <textarea class="form-control" id="catatan_0"
                                                            name="paket[0][deskripsi]" rows="1"></textarea>
                                                    </div>
                                                    <button type="button"
                                                        class="btn btn-danger btn-sm btn-remove-paket d-none">Hapus</button>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm" id="btnAddPaket"><i
                                                    class="fa fa-plus"></i> Tambah Paket</button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </form>
                                    <script>
                                        let paketIndex = 1;
                                        document.getElementById('btnAddPaket').addEventListener('click', function () {
                                            const container = document.getElementById('paket-container');
                                            const newPaket = document.createElement('div');
                                            newPaket.className = 'paket-group border rounded p-2 mb-2';
                                            newPaket.innerHTML = `
                                                <div class="mb-3">
                                                    <label for="nama_paket_${paketIndex}" class="form-label">Nama Paket</label>
                                                    <input type="text" class="form-control" id="nama_paket_${paketIndex}" name="paket[${paketIndex}][nama_paket]" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="catatan_${paketIndex}" class="form-label">Deskripsi Paket</label>
                                                    <textarea class="form-control" id="catatan_${paketIndex}" name="paket[${paketIndex}][deskripsi]" rows="1"></textarea>
                                                </div>
                                                <button type="button" class="btn btn-danger btn-sm btn-remove-paket">Hapus</button>
                                            `;
                                            container.appendChild(newPaket);
                                            paketIndex++;
                                        });

                                        document.getElementById('paket-container').addEventListener('click', function (e) {
                                            if (e.target.classList.contains('btn-remove-paket')) {
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
                                        <th scope="col">Nama Paket</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($paket as $p): ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= esc($p['nama_paket']); ?></td>
                                            <td>
                                                <button type="button" class="btn btn-success act-bt btn-sm p-1">
                                                    <i class="fa-solid fa-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary act-bt btn-sm p-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalJenisTindakan<?= $p['id_paket']; ?>">
                                                    <i class="fa-solid fa-plus"></i>
                                                </button>
                                                <div class="modal fade" id="modalJenisTindakan<?= $p['id_paket']; ?>"
                                                    tabindex="-1"
                                                    aria-labelledby="modalJenisTindakanLabel<?= $p['id_paket']; ?>"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form
                                                                action="<?= site_url('lab/saveJenisTindakan/' . $p['id_paket']); ?>"
                                                                method="post">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="modalJenisTindakanLabel<?= $p['id_paket']; ?>">
                                                                        Paket <?= $p['nama_paket'] ?></h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="<?= site_url('lab/delete-lab/' . $p['id_paket']); ?>"
                                                    class="btn btn-danger act-bt btn-sm p-1"
                                                    onclick="return confirm('Yakin ingin menghapus paket ini?');">
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