<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['pelajar']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['pelajar']['ndp']; ?></h6>
            <p class="card-text"><?= $data['pelajar']['email']; ?></p>
            <p class="card-text"><?= $data['pelajar']['kursus']; ?></p>
            <a href="<?= BASEURL; ?>/pelajar" class="card-link">Kembali</a>
        </div>
    </div>
</div>