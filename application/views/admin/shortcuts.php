<div class="container">
    <h1>Shortcut</h1>
    <a href="<?php echo site_url('admin/shortcuts/create'); ?>" class="btn btn-primary">Tambah Shortcut</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($shortcuts as $shortcut): ?>
                <tr>
                    <td><?php echo $shortcut['title']; ?></td>
                    <td><?php echo $shortcut['link']; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/shortcuts/edit/' . $shortcut['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('admin/shortcuts/delete/' . $shortcut['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
