<?= $this->extend('admin/template/content') ?>
<?= $this->section('page') ?>

<div class="page-inner"><?php $data = $model->getInfo(); ?>
    <div class="wrapper">
        <div class="row row-xs clearfix">
            <div class="pageheader pd-t-25 pd-b-35">
                <div class="d-flex justify-content-between">
                    <div class="clearfix">
                        <div class="pd-t-5 pd-b-5">
                            <h1 class="pd-0 mg-0 tx-20 tx-dark"><?= esc(lang('App.settings')) ?></h1>
                        </div>
                        <div class="breadcrumb pd-0 mg-0">
                            <a class="breadcrumb-item" href="<?= esc(base_url('admin')) ?>"><i
                                    class="icon ion-ios-home-outline"></i> <?= esc(lang('App.home')) ?></a>
                            <a class="breadcrumb-item"
                                href="<?= esc(base_url('admin/dashboard')) ?>"><?= esc(lang('App.dashboard')) ?></a>
                            <span class="breadcrumb-item active"><?= esc(lang('App.settings')) ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-tab1" data-toggle="pill" href="#v-pills-tab1" role="tab"
                            aria-controls="v-pills-tab1" aria-selected="true"><?= esc(lang('App.home')) ?></a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel"
                            aria-labelledby="v-pills-tab1-tab">
                            <div class="col-md-12 col-lg-12">
                                <div class="card mg-b-30">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h6 class="card-header-title tx-13 mb-0"></h6>
                                            </div>
                                            <div class="text-right">
                                                <div class="d-flex"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="<?= esc(base_url('admin/settings/post')) ?>" method="post"
                                            enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="title"><?= esc(lang('App.title')) ?></label>
                                                    <input type="text" class="form-control" id="title" name="title"
                                                        value="<?= esc($data[0]['title']) ?>" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="description"><?= esc(lang('App.description')) ?></label>
                                                    <input type="text" class="form-control" id="description"
                                                        name="description" value="<?= esc($data[0]['description']) ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="keyword"><?= esc(lang('App.keywords')) ?></label>
                                                    <input type="text" class="form-control" id="keywords"
                                                        name="keywords" data-role="tagsinput"
                                                        value="<?= esc($data[0]['keywords']) ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="author"><?= esc(lang('App.author')) ?></label>
                                                    <input type="text" class="form-control" id="author" name="author"
                                                        value="<?= esc($data[0]['author']) ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="version"><?= esc(lang('App.version')) ?></label>
                                                    <input type="text" class="form-control" id="version" name="version"
                                                        value="<?= esc($data[0]['version']) ?>">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="underrepair" name="underrepair"
                                                            <?php if( $data[0]['underrepair'] ) { echo 'checked'; } ?>>
                                                        <label class="custom-control-label"
                                                            for="underrepair"><?= esc(lang('App.urepair')) ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group"></div>
                                            <button class="btn btn-primary"
                                                type="submit"><?= esc(lang('App.update')) ?></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>