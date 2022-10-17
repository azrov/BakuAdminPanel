<?= $this->extend('admin/layouts/html') ?>
<?= $this->section('content') ?>

<div class="ht-100v d-flex bg-gradient pd-20">
    <div class="card shadow-none mx-auto text-center bd-transparent bg-transparent align-self-center">
        <h1 class="tx-bold tx-140 tx-gray-100">5<span class="text-danger">0</span>3</h1>
        <h3 class="tx-36 tx-gray-100"><?= esc(lang('App.urepair')) ?></h3>
        <p class="tx-gray-200"><?= esc(lang('App.urepair_m')) ?></p>
        <div class="text-center tx-gray-100">
            <p>Copyright &copy; 2022</p>
        </div>
    </div>
</div>

<?= $this->endSection() ?>