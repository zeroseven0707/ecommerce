<div class="container">
    <h1>Lisensi</h1>
    <a href="<?php echo site_url('admin/licenses/create'); ?>" class="btn btn-primary">Tambah Lisensi</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($licenses as $license): ?>
                <tr>
                    <td><?php echo $license['title']; ?></td>
                    <td><?php echo $license['description']; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/licenses/edit/' . $license['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('admin/licenses/delete/' . $license['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
