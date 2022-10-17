<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner"><?php $list = $app->getRoleList(); ?>
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.add')) ?></h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                            class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                    <a class="breadcrumb-item"
                        href="<?= esc(base_url('admin/dashboard')) ?>"><?= esc(lang('App.dashboard')) ?></a>
                    <a class="breadcrumb-item"
                        href="<?= esc(base_url('admin/users')) ?>"><?= esc(lang('App.users')) ?></a>
                    <span class="breadcrumb-item active"><?= esc(lang('App.add')) ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card mg-b-30">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="tx-13 mb-0"><?= esc(lang('App.personal')) ?></h6>
                </div>
                <div class="card-body pd-y-20">
                    <form action="<?= esc(base_url('admin/users/post')) ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <input type="hidden" id="func" name="func" value="1">
                                <label for="name"><?= esc(lang('App.name')) ?></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="surname"><?= esc(lang('App.surname')) ?></label>
                                <input type="text" class="form-control" id="surname" name="surname"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email"><?= esc(lang('App.email')) ?></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="password"><?= esc(lang('App.password')) ?></label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="role"><?php echo lang('App.role'); ?></label>
                                <select class="form-control" id="role" name="role" required>
                                    <?php foreach($list as $key => $value) { ?>
                                    <?php echo '<option value="' . $value['id'] . '">' . lang('App.' . $value['name']) . '</option>' . PHP_EOL; ?>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="avatar"><?= esc(lang('App.avatar')) ?> (150px x 150px) </label>
                                <input type="file" class="form-control" id="avatar" name="avatar">
                            </div>
                        </div>
                        <div class="form-group"></div>
                        <button class="btn btn-primary" type="submit"><?= esc(lang('App.add')) ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>