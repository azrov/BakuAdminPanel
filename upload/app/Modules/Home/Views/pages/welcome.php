<?= $this->extend('admin/layouts/html') ?>
<?= $this->section('content') ?>

<div class="ht-100v d-flex bg-gradient pd-20"><?php $info = $app->getInfo(); ?>
    <div class="jumbotron ui-hero ui-mh-100vh text-white overflow-hidden align-self-center mx-auto"
        style="background: #e8cbc0; background: linear-gradient(180deg, #3949ab, #2962ff);">
        <div class="container flex-shrink-1 my-5">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-xl-5 text-lg-left text-center my-5">
                    <h1 class="tx-40 tx-white tx-bold"><?= esc($title) ?></h1>
                    <p class="lead pb-2 my-4"><?= esc($info['description']) ?></p>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?= esc(lang('App.language')) ?>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= esc(base_url('home/lang/en')) ?>" data-lang="en">
                                <i class="flag-icon flag-icon-us mr-2"></i><span><?= esc(lang('App.en')) ?></span></a>

                            <a class="dropdown-item" href="<?= esc(base_url('home/lang/ru')) ?>" data-lang="ru">
                                <i class="flag-icon flag-icon-ru mr-2"></i><span><?= esc(lang('App.ru')) ?></span></a>

                            <a class="dropdown-item" href="<?= esc(base_url('home/lang/tr')) ?>" data-lang="tr">
                                <i class="flag-icon flag-icon-tr mr-2"></i><span><?= esc(lang('App.tr')) ?></span></a>

                            <a class="dropdown-item" href="<?= esc(base_url('home/lang/az')) ?>" data-lang="az">
                                <i class="flag-icon flag-icon-az mr-2"></i><span><?= esc(lang('App.az')) ?></span></a>
                        </div>
                    </div>

                    <a href="<?= esc(base_url('admin')) ?>"
                        class="btn btn-default"><?= esc(lang('App.dashboard')) ?></a>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 pd-md-30">
                    <div class="ui-presentation-right ui-window float-left rounded">
                        <div class="window-content"><img src="<?= esc($cdn) ?>assets/images/gallery/dashboard.gif" alt>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>