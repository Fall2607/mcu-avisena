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
                        <h6>DATA MEDICAL CHECK UP RSU AVISENA</h6>
                        <a href="<?= base_url('/form-mcu') ?>" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                    </div>
                    <div class="card-body px-0 pt-3 pb-2">
                        <div class="container">
                            <table id="tableMain" class="table text-center table-hover dataTable dtr-inline">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Bagian</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_users as $d) : ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $d['nama'] ?></td>
                                            <td><?= $d['bagian'] ?></td>
                                            <td>
                                                <?php if ($d['status'] == '0' || $d['status'] == '3') { ?>
                                                    <a href="<?= base_url('/detail-lab') . '/' .   $d['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-file opacity-10"></i></i></a>
                                                    <a href="<?= base_url('/delete-lab') . '/' . $d['id'] ?>" class="btn btn-danger"><i class="fa-solid fa-trash opacity-10"></i></i></a>
                                                    <?php } elseif ($d['status'] == '1') { ?>
                                                    <a href="<?= base_url('/detail-mcu') . '/' . $d['id'] ?>" class="btn btn-success"><i class="fa-solid fa-eye opacity-10"></i></i></a>
                                                    <a href="<?= base_url('/isi-lab') . '/' . $d['id'] ?>" class="btn btn-success"><i class="fa-solid fa-vial opacity-10 "></i></a>
                                                <?php } ?>
                                            </td>

                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
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