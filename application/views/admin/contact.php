<?php
include(APPPATH .'views/layout/header.php');
?>
   <div class="section-header">
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Contact</a></div>
              <div class="breadcrumb-item"><a href="#">Create?Update Contact</a></div>
            </div>
        </div>
        <form action="<?php echo site_url('admin/contact/save'); ?>" method="post">
            <button type="submit" class="btn btn-primary" style="border-radius: 15%;">Save</button>
            <textarea name="value" id="value" cols="30" rows="30" style="width: 100%;" class="mt-3"><?php echo isset($contact->value) ? $contact->value : ''; ?></textarea>
        </form>
<?php
include(APPPATH .'views/layout/footer.php');
?>