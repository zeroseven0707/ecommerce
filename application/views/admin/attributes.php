<div class="container">
    <h1>Atribut</h1>
    <a href="<?php echo site_url('admin/attributes/create'); ?>" class="btn btn-primary">Tambah Atribut</a>
    <table class="table">
        <thead>
            <tr>
                <th>Prefix</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attributes as $attribute): ?>
                <tr>
                    <td><?php echo $attribute['prefix']; ?></td>
                    <td><?php echo $attribute['title']; ?></td>
                    <td><?php echo $attribute['description']; ?></td>
                    <td>
                        <a href="<?php echo site_url('admin/attributes/edit/' . $attribute['id']); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo site_url('admin/attributes/delete/' . $attribute['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
