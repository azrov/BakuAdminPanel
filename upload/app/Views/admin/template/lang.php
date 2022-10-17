<li class="list-inline-item dropdown hidden-xs"><?php if ($lang == 'en') { $lang = 'us'; } ?>
    <a href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="flag-icon flag-icon-<?= esc($lang) ?>"></i>
    </a>
    <ul class="dropdown-menu languages-dropdown">
        <li>
            <a href="<?= esc(base_url('admin/lang/en')) ?>" data-lang="en">
                <i class="flag-icon flag-icon-us mr-2"></i><span><?= esc(lang('App.en')) ?></span></a>
        </li>
        <li>
            <a href="<?= esc(base_url('admin/lang/ru')) ?>" data-lang="ru">
                <i class="flag-icon flag-icon-ru mr-2"></i><span><?= esc(lang('App.ru')) ?></span></a>
        </li>
        <li>
            <a href="<?= esc(base_url('admin/lang/tr')) ?>" data-lang="tr">
                <i class="flag-icon flag-icon-tr mr-2"></i><span><?= esc(lang('App.tr')) ?></span></a>
        </li>
        <li>
            <a href="<?= esc(base_url('admin/lang/az')) ?>" data-lang="az">
                <i class="flag-icon flag-icon-az mr-2"></i><span><?= esc(lang('App.az')) ?></span></a>
        </li>
    </ul>
</li>