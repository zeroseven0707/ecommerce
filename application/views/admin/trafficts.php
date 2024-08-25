<?php
include(APPPATH .'views/layout/header.php');
?>
<div class="section-body mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url('trafficts/action'); ?>" method="post">
                    <p>
                        <input type="submit" class="btn btn-primary" name="export" value="Export to CSV" style="border-radius: 15px;">
                        <input type="submit" class="btn btn-danger" name="delete" value="Delete Selected" style="border-radius: 15px;">
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
            </div>
        </div>
    </div>
</div>
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
