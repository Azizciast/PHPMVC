<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary tombalTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Pelajar
            </button>
        </div>
    </div>
    <br>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/pelajar/cari" method="post">
            
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari pelajar..." name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3>Daftar Pelajar</h3>
            <ul class="list-group">
                <?php foreach ($data['students'] as $pelajar) : ?>
                    <li class="list-group-item">
                        <?= $pelajar['nama']; ?>
                        <a href="<?= BASEURL; ?>/pelajar/hapus/<?= $pelajar['id']; ?> " class="badge text-bg-danger float-sm-end ms-1" onclick="return confirm('yakin');"><img src="<?= BASEURL; ?>/img/trash.png" width="30px"></a>
                        <a href="<?= BASEURL; ?>/pelajar/edit/<?= $pelajar['id']; ?> " class="badge text-bg-success float-sm-end ms-1 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $pelajar['id']; ?>"><img src="<?= BASEURL; ?>/img/edit-text.png" width="30px"></a>
                        <a href="<?= BASEURL; ?>/pelajar/detail/<?= $pelajar['id']; ?> " class="badge text-bg-primary float-sm-end"><img src="<?= BASEURL; ?>/img/detail.png" width="30px"></a>
                    </li>
                <?php endforeach; ?>
            </ul>


        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Pelajar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/pelajar/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="ndp" class="form-label">Ndp</label>
                        <input type="text" class="form-control" id="ndp" name="ndp">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <label for="kursus">kursus</label>
                    <select class="form-select" aria-label="Default select example" id="kursus" name="kursus">
                        <option selected>Open this select menu</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Elektrikal">Elektrikal</option>
                        <option value="Automotif">Automotif</option>
                        <option value="TVET-i">TVET-i</option>
                        <option value="Kimpalan">Kimpalan</option>
                        <option value="Pemensinan">Pemensinan</option>
                        <option value="Dron">Dron</option>
                        <option value="Fesyen">Fesyen</option>
                    </select>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>