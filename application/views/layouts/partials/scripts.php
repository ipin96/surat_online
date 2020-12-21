<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="<?= base_url() ?>assets/js/feather-icons/feather.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>

<script src="<?= base_url() ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url() ?>assets/js/vendors.js"></script>
<script src="<?= base_url() ?>assets/js/pages/dashboard.js"></script>

<script src="<?= base_url() ?>assets/js/main.js"></script>

<script type="text/javascript">
    <?php if($this->session->flashdata('message_success')){ ?>
        toastr.success("<?php echo $this->session->flashdata('message_success'); ?>");
    <?php }else if($this->session->flashdata('message_error')){  ?>
        toastr.error("<?php echo $this->session->flashdata('message_error'); ?>");
    <?php }else if($this->session->flashdata('message_warning')){  ?>
        toastr.warning("<?php echo $this->session->flashdata('message_warning'); ?>");
    <?php }else if($this->session->flashdata('message_info')){  ?>
        toastr.info("<?php echo $this->session->flashdata('message_info'); ?>");
    <?php } ?>
</script>
<script>
	$(function () {
	  	$('[data-toggle="tooltip"]').tooltip()
	})
</script>