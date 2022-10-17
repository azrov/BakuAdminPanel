<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner pd-0-force"><?php $info = $app->getUserInfo($id); $role = $app->getRoleInfo($info['role']); ?>
    <div class="bg-white mg-b-30">
        <div class="media col-md-10 col-lg-8 col-xl-7 pd-30 mx-auto">
            <img src="<?= esc(base_url('uploads/avatar/' . $info['avatar'])) ?>" alt="" class="d-block rounded-circle hidden-xs">
            <div class="media-body ml-0 ml-md-5">
                <h4 class="tx-semibold"><?= esc($info['name']) ?> <?= esc($info['surname']) ?></h4>
                <p class="tx-gray-500"><?= esc(lang('App.' . $role['name'])) ?></p>
                <div class="d-flex mg-b-25">
                    <a class="btn btn-primary" href="<?= esc(base_url('admin/users/edit/' . $id)) ?>"><?= esc(lang('App.edit')) ?></a>
                </div>
            </div>
        </div>
        <hr class="m-0">
    </div>
    <div class="row clearfix mg-x-15-force">
        <div class="col">
            <div class="card mg-b-30">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="tx-16 tx-semibold mg-b-0"></h6>
                </div>
                <div class="card-body">
                    <h6 class="my-3"><?= esc(lang('App.personal')) ?></h6>
                    <div class="row mb-2">
                        <div class="col-md-3 tx-gray-500 tx-semibold"><?= esc(lang('App.username')) ?>:</div>
                        <div class="col-md-9"><?= esc($info['username']) ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 tx-gray-500 tx-semibold"><?= esc(lang('App.name')) ?>:</div>
                        <div class="col-md-9"><?= esc($info['name']) ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-3 tx-gray-500 tx-semibold"><?= esc(lang('App.surname')) ?>:</div>
                        <div class="col-md-9"><?= esc($info['surname']) ?></div>
                    </div>
                    <h6 class="my-3"><?= esc(lang('App.contacts')) ?></h6>
                    <div class="row mb-2">
                        <div class="col-md-3 tx-gray-500 tx-semibold"><?= esc(lang('App.email')) ?>:</div>
                        <div class="col-md-9"><a href="mailto:<?= esc($info['email']) ?>"><?= esc($info['email']) ?></a></div>
                    </div>
                </div>
                <div class="card-footer text-center p-0">
                    <div class="row no-gutters row-bordered row-border-light">
                        <!--
                        <a href="" class="d-flex col flex-column  py-3">
                            <div class="font-weight-bold"></div>
                            <div class="text-muted small"></div>
                        </a>
                        <a href="" class="d-flex col flex-column  py-3 bd-l bd-r">
                            <div class="font-weight-bold"></div>
                            <div class="text-muted small"></div>
                        </a>
                        <a href="" class="d-flex col flex-column  py-3">
                            <div class="font-weight-bold"></div>
                            <div class="text-muted small"></div>
                        </a>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>