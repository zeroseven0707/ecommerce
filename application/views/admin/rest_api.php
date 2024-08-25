<?php
include(APPPATH .'views/layout/header.php');
?>
  <?php if ($this->session->flashdata('success')): ?>
    <div class="alert alert-success text-dark">
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<form action="<?php echo site_url('admin/api/save-product'); ?>" method="post" class="mt-4">
    <button type="submit" class="btn btn-primary" style="border-radius: 15%;">Save</button>
    <div class="float-right">
        <button type="button" id="copyButton" class="btn btn-danger" style="border-radius: 15%;">Copy</button>  
        <a href="<?= base_url('admin/api/preview') ?>" target="_blank" class="btn btn-warning" style="border-radius: 15%;">Preview</a>  
    </div>
    <textarea name="value" id="value" cols="30" rows="30" style="width: 100%;" class="mt-3"><?php echo isset($rest->value) ? $rest->value : ''; ?></textarea>
</form>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the copy button and textarea elements
    const copyButton = document.getElementById('copyButton');
    const textarea = document.getElementById('value');

    // Add event listener to the copy button
    copyButton.addEventListener('click', function () {
        // Select the textarea content
        textarea.select();
        textarea.setSelectionRange(0, 99999); // For mobile devices

        // Copy the selected text to clipboard
        document.execCommand('copy');

        // Optionally, show an alert or change button text to indicate success
        alert('Text copied to clipboard!');
    });
});
</script>

<?php
include(APPPATH .'views/layout/footer.php');
?>