<?php
include(APPPATH .'views/layout/header.php');
?>
  <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success text-dark">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
        <form action="<?php echo site_url('admin/contact/save'); ?>" method="post" class="mt-4">
            <button type="submit" class="btn btn-primary" style="border-radius: 15%;">Save</button>
            <textarea name="value" id="value" cols="30" rows="30" style="width: 100%;" class="mt-3"><?php echo isset($contact->value) ? $contact->value : ''; ?></textarea>
        </form>
<?php
include(APPPATH .'views/layout/footer.php');
?>