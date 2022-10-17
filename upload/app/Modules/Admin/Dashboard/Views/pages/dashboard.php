<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner">
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.dashboard')) ?></h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                            class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                    <span class="breadcrumb-item active"><?= esc(lang('App.dashboard')) ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix"><?php $menu = $app->getModules(); ?>
    <?php foreach($menu as $key => $value) { ?>
        <?php if ($value['status']) { ?>
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card mg-b-30">
                <div class="card-body">
                    <h5 class="tx-uppercase tx-spacing-1 tx-semibold tx-10 mg-b-6"><?= esc(lang('App.' . $value['name'])) ?></h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="<?= esc(base_url('admin/' . $value['name'])) ?>">
                            <i data-feather="<?= esc($value['icon']) ?>"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php } } ?>
    </div>

    <div class="row"><?php $users = $app->getNewUsers(); ?>
        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="tx-13 mb-0"><?= esc(lang('App.newusers')) ?></h6>
                </div>
                <div class="card-body pd-y-20">
                    <ul class="list-unstyled mb-0">
                    <?php foreach($users as $key => $value) { ?>
                        <li class="d-flex align-items-center mg-b-15">
                            <div class="avatar">
                                <img class="wd-35 rounded-circle img-fluid" src="<?= esc(base_url('uploads/avatar/' . $value['avatar'])) ?>">
                            </div>
                            <div class="media-body pd-l-15 lh-2">
                                <p class="tx-medium mg-b-2">
                                    <?= esc($value['name'] . ' ' . $value['surname']) ?>
                                </p>
                                <span class="tx-12 tx-gray-500"><?= esc($value['created_at']) ?></span>
                            </div>
                            <div class="mg-l-auto d-flex align-self-center action-icon">
                                <nav class="nav nav-icon-only">
                                    <a href="<?= esc(base_url('admin/users/info/' . $value['id'])) ?>" data-toggle="tooltip" class="mr-2 tx-gray-500" title=""
                                        data-placement="top" data-original-title="<?= esc(lang('App.info')) ?>"><i data-feather="info"
                                            class="wd-16"></i></a>
                                </nav>
                            </div>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>