<?= $this->extend('admin/layouts/html') ?>
<?= $this->section('content') ?>

<div class="ht-100v text-center">
    <div class="row pd-0 mg-0">
        <div class="col-lg-6 bg-gradient hidden-sm">
            <div class="ht-100v d-flex">
                <div class="align-self-center">
                    <!--
                        <img src="<?= esc(base_url('uploads/logo/logo-sm.png')) ?>" class="img-fluid" alt="">
                        <h3 class="tx-20 tx-semibold tx-gray-100 pd-t-50"><?= esc(lang('App.signup')) ?></h3>
                        <p class="pd-y-15 pd-x-10 pd-md-x-100 tx-gray-200"></p>
                        <a href="<?= esc(base_url('admin/signin')) ?>" class="btn btn-outline-primary"><span class="tx-gray-200"><?= esc(lang('App.signin')) ?></span></a>
                        -->
                </div>
            </div>
        </div>
        <div class="col-lg-6 bg-light">
            <div class="ht-100v d-flex align-items-center justify-content-center">
                <form action="<?= esc(base_url('admin/signup/post')) ?>" method="post" enctype="multipart/form-data">
                    <h3 class="tx-dark mg-b-5 tx-left"><?= esc(lang('App.signup_m1')) ?></h3>
                    <p class="tx-gray-500 tx-15 mg-b-40"></p>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="tx-gray-500 mg-b-0"><?= esc(lang('App.name')) ?></label>
                        </div>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="tx-gray-500 mg-b-0"><?= esc(lang('App.surname')) ?></label>
                        </div>
                        <input type="text" id="surname" name="surname" class="form-control" required>
                    </div>
                    <div class="form-group tx-left">
                        <label class="tx-gray-500 mg-b-5"><?= esc(lang('App.email')) ?></label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                            <label class="tx-gray-500 mg-b-0"><?= esc(lang('App.password')) ?></label>
                        </div>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-brand btn-block"><?= esc(lang('App.signup_m2')) ?></button>
                    <div class="tx-13 mg-t-20 tx-center tx-gray-500"><?= esc(lang('App.signup_m3')) ?> <a
                            href="<?= esc(base_url('admin/signin')) ?>"
                            class="tx-semibold"><?= esc(lang('App.signin')) ?></a></div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>