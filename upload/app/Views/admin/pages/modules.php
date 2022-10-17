<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner">
    <div class="pageheader pd-t-25 pd-b-35">
        <div class="d-flex justify-content-between">
            <div class="clearfix">
                <div class="pd-t-5 pd-b-5">
                    <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.modules')) ?></h1>
                </div>
                <div class="breadcrumb pd-0 mg-0">
                    <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                            class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                    <a class="breadcrumb-item"
                        href="<?= esc(base_url('admin/dashboard')) ?>"><?= esc(lang('App.dashboard')) ?></a>
                    <span class="breadcrumb-item active"><?= esc(lang('App.modules')) ?></span>
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
                <div class="row">
                </div>
                <table id="foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                        <tr>
                            <th><?= esc(lang('App.icon')) ?></th>
                            <th><?= esc(lang('App.role')) ?></th>
                            <th><?= esc(lang('App.name')) ?></th>
                            <th><?= esc(lang('App.description')) ?></th>
                            <th><?= esc(lang('App.author')) ?></th>
                            <th><?= esc(lang('App.path')) ?></th>
                            <th><?= esc(lang('App.version')) ?></th>
                            <th><?= esc(lang('App.status')) ?></th>
                            <th><?= esc(lang('App.blocked')) ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($paginate): ?>
                        <?php foreach($paginate as $row): ?>
                        <tr><?php $role = $app->getRoleInfo($row['role']); ?>
                            <td><i data-feather="<?= esc($row['icon']) ?>"></i></td>
                            <td><?= esc(lang('App.' . $role['name'])) ?></td>
                            <td><?= esc($row['name']) ?></td>
                            <td><?= esc($row['description']) ?></td>
                            <td><?= esc($row['author']) ?></td>
                            <td><?= esc($row['path']) ?></td>
                            <td><?= esc($row['version']) ?></td>
                            <td>
                            <?php if ($row['status']) { ?>
                                <span class="label label-table label-success"><?= esc(lang('App.enabled')) ?></span></td>
                            <?php } else { ?>
                                <span class="label label label-table label-danger"><?= esc(lang('App.disabled')) ?></span></td>
                            <?php } ?>
                            </td>
                            <td>
                            <?php if ($row['blocked']) { ?>
                                <span class="label label-table label-success"><?= esc(lang('App.yes')) ?></span></td>
                            <?php } else { ?>
                                <span class="label label label-table label-danger"><?= esc(lang('App.no')) ?></span></td>
                            <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>