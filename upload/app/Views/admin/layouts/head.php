<!DOCTYPE html><?php $info = $app->getInfo(); ?>
<html lang="<?= esc($lang) ?>">
<head>
    <?= $this->include('admin/layouts/meta') ?>

    <title><?= esc($title) ?></title>

    <?= $this->include('admin/layouts/styles') ?>

    <link href="<?= esc(base_url($info['icon'])) ?>" rel="icon">
    <link href="<?= esc(base_url($info['icon'])) ?>" rel="apple-touch-icon">
</head>
<body>