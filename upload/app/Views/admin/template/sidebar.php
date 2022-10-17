<div class="page-container">
    <div class="page-sidebar">
        <div class="logo">
            <a class="logo-img" href="#">
                <img class="desktop-logo" src="<?= esc(base_url('uploads/logo/logo.png')) ?>" alt="">
                <img class="small-logo" src="<?= esc(base_url('uploads/logo/small-logo.png')) ?>" alt="">
            </a>
            <a id="sidebar-toggle-button-close"><i class="wd-20" data-feather="x"></i> </a>
        </div>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <?= $this->include('admin/template/menu') ?>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-footer">
                <a class="pull-left" href="<?= esc(base_url('admin/logout')) ?>" data-toggle="tooltip"
                    data-placement="top" data-original-title="<?= esc(lang('App.logout')) ?>">
                    <i data-feather="log-out" class="wd-16"></i></a>
            </div>
        </div>
    </div>