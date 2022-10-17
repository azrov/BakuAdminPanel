<?= $this->extend('admin/layouts/html') ?>
<?= $this->section('content') ?>
<?= $this->include('admin/template/sidebar') ?>
<?= $this->include('admin/template/header') ?>
<?= $this->renderSection('page') ?>
<?= $this->include('admin/template/footer') ?>
<?= $this->endSection() ?>