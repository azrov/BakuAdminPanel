<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner">
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.users')) ?></h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                            class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                    <a class="breadcrumb-item"
                        href="<?= esc(base_url('admin/dashboard')) ?>"><?= esc(lang('App.dashboard')) ?></a>
                    <span class="breadcrumb-item active"><?= esc(lang('App.users')) ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="card mg-b-30">
            <div class="card-header d-flex align-items-center justify-content-between">
                    <h6 class="tx-16 tx-semibold mg-b-0"></h6>
                    <nav class="nav nav-with-icon tx-13">
                        <a href="<?= esc(base_url('admin/users/add')) ?>" class="nav-link pd-0"><span data-feather="plus" class="wd-16"></span> <?= esc(lang('App.add')) ?></a>
                    </nav>
                </div>
            <div class="card-body pd-0">
                <div class="table-responsive">
                    <table class="table table-separated">
                        <thead>
                            <tr>
                                <th><?= esc(lang('App.avatar')) ?></th>
                                <th><?= esc(lang('App.role')) ?></th>
                                <th><?= esc(lang('App.username')) ?></th>
                                <th><?= esc(lang('App.name')) ?></th>
                                <th><?= esc(lang('App.surname')) ?></th>
                                <th><?= esc(lang('App.created')) ?></th>
                                <th><?= esc(lang('App.updated')) ?></th>
                                <th class="text-right w-100px"><?= esc(lang('App.actions')) ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if($paginate): ?>
                            <?php foreach($paginate as $row): ?>
                            <tr><?php $role = $app->getRoleInfo($row['role']); ?>
                                <td>
                                    <img class="wd-35 rounded-circle img-fluid" src="<?= esc(base_url('uploads/avatar/' . $row['avatar'])) ?>">
                                </td>
                                <td><?= esc(lang('App.' . $role['name'])) ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['surname']; ?></td>
                                <td><?php echo $row['created_at']; ?></td>
                                <td><?php echo $row['updated_at']; ?></td>

                                <td class="text-right table-actions">
                                    <a class="table-action  mg-r-10" href="<?= esc(base_url('admin/users/edit/' . $row['id'])) ?>"><i class="fa fa-pencil"></i></a>
                                    <?php if ($row['role'] > 1) { ?>
                                    <a class="table-action  mg-r-10" href="<?= esc(base_url('admin/users/delete/' . $row['id'])) ?>"><i class="fa fa-trash"></i></a>
                                    <?php } ?>
                                    <span class="dropdown-toggle " data-toggle="dropdown"></span>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?= esc(base_url('admin/users/info/' . $row['id'])) ?>"><i class="fa fa-info"></i> <?= esc(lang('App.info')) ?></a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?= $pager->links('group', 'admin') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>