<?= $this->extend('admin/layouts/html') ?>
<?= $this->section('content') ?>

<div class="ht-100v d-flex">
    <div class="pd-20 mx-auto text-center bd-1 align-self-center">
        <div class="login-wrapper">
            <div class="loginbox  align-self-center">
                <div class="login-left hidden-xs">
                    <img class="img-fluid" src="<?= esc(base_url('uploads/logo/logo-sm.png')) ?>" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap wd-300">
                        <div class="lock-user">
                            <img class="img-fluid wd-50 rounded-circle"
                                src="<?= esc(base_url('uploads/logo/logo-dark.png')) ?>" alt="User Image">
                            <h4 class="mg-b-30 tx-semibold"></h4>
                            <p class="tx-gray-500"></p>
                        </div>
                        <a href="<?= esc(base_url('admin/dashboard')) ?>"
                            class="btn btn-brand btn-block"><?= esc(lang('App.dashboard')) ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>