<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="section-header">
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('dashboard')?>">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Trafficts</a></div>
    </div>
</div>
    <form action="<?php echo site_url('trafficts/export_csv'); ?>" method="post">
    <p>
            <input type="submit" class="btn btn-primary" value="Export to CSV" style="border-radius: 15px;">
        </p>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th><input type="checkbox" onclick="toggleCheckboxes(this)"></th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php foreach ($trafficts as $traffict): ?>
            <tr>
                <td><input type="checkbox" name="traffict_ids[]" value="<?php echo $traffict->id; ?>"></td>
                <td><?php echo $traffict->name; ?></td>
                <td><?php echo $traffict->email; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>    
    </form>
    <script>
        function toggleCheckboxes(source) {
            checkboxes = document.getElementsByName('traffict_ids[]');
            for (var i = 0; i < checkboxes.length; i++) {
                checkboxes[i].checked = source.checked;
            }
        }
    </script>
    <?php
include(APPPATH .'views/layout/footer.php');
?>
