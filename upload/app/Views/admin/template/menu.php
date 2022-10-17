<?php $uri = service('uri'); $menu = $app->getModules(); ?>
<?php foreach($menu as $key => $value) { ?>
<?php if ($value['status']) { ?>
<li class="<?= ($uri->getSegment(2) == $value['name'])? 'active' : null ?>">
    <a href="<?= esc(base_url('admin/' . $value['name'])) ?>"><i
            data-feather="<?= esc($value['icon']) ?>"></i><span><?= esc(lang('App.' . $value['name'])) ?></span></a>
</li>
<?php } } ?>

<li class="mg-l-20-force mg-t-25-force menu-navigation"><?= esc(lang('App.system')) ?></li>
<li class="<?= ($uri->getSegment(2) == 'modules')? 'active' : null ?>">
    <a href="<?= esc(base_url('admin/modules')) ?>"><i
            data-feather="cpu"></i><span><?= esc(lang('App.modules')) ?></span></a>
</li>