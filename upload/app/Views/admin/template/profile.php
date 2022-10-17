<li class="list-inline-item dropdown"><?php $id = $app->getVar('id'); $info = $app->getUserInfo($id); ?>
    <a href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?= esc(base_url('uploads/avatar/' . $info['avatar'])) ?>"
            class="img-fluid wd-30 ht-30 rounded-circle" alt="">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-profile">
        <div class="user-profile-area">
            <div class="user-profile-heading">
                <div class="profile-thumbnail">
                    <img src="<?= esc(base_url('uploads/avatar/' . $info['avatar'])) ?>"
                        class="img-fluid wd-35 ht-35 rounded-circle" alt="">
                </div>
                <div class="profile-text">
                    <h6><?= esc($info['name']) ?> <?= esc($info['surname']) ?></h6>
                    <span><?= esc($info['email']) ?></span>
                </div>
            </div>
            <a href="<?= esc(base_url('admin/users/info/' . $info['id'])) ?>" class="dropdown-item"><i
                    data-feather="user" class="wd-16 mr-2"></i> <?= esc(lang('App.profile')) ?></a>
            <a href="<?= esc(base_url('admin/logout')) ?>" class="dropdown-item"><i data-feather="power"
                    class="wd-16 mr-2"></i><?= esc(lang('App.logout')) ?></a>
        </div>
    </div>
</li>