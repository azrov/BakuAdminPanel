<script src="<?= esc($cdn) ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/jquery-ui/jquery-ui.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/popper/popper.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/feather/feather.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/typeahead/typeahead.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/typeahead/typeahead-active.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/pace/pace.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/highlight/highlight.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/footable/footable.all.min.js"></script>
<script src="<?= esc($cdn) ?>assets/plugins/toastr/toastr.min.js"></script>
<script src="<?= esc($cdn) ?>assets/js/app.js"></script>
<script src="<?= esc($cdn) ?>assets/js/avesta.js"></script>
<script src="<?= esc(base_url('assets/js/baku.js')) ?>"></script>

<script>
<?php if(session()->getFlashdata('msg')):?>
    toast('<?= session()->getFlashdata('type') ?>', '<?= session()->getFlashdata('msg') ?>');
<?php endif;?>
</script>