<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner">
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.roles')) ?></h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                            class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                    <a class="breadcrumb-item"
                        href="<?= esc(base_url('admin/dashboard')) ?>"><?= esc(lang('App.dashboard')) ?></a>
                    <span class="breadcrumb-item active"><?= esc(lang('App.roles')) ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="card mg-b-30">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-header-title tx-13 mb-0"></h6>
                    </div>
                    <div class="text-right">
                        <div class="d-flex">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pd-0">
                <div class="table-responsive">
                    <table class="table table-separated">
                        <thead>
                            <tr>
                                <th><?= esc(lang('App.icon')) ?></th>
                                <th><?= esc(lang('App.name')) ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($paginate): ?>
                            <?php foreach($paginate as $row): ?>
                            <tr><?php $role = $app->getRoleInfo($row['id']); ?>
                                <td><i data-feather="user"></i></td>
                                <td><?= esc(lang('App.' . $role['name'])) ?></td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>