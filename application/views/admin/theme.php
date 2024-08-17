<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Themes</title>
</head>
<body>
    <h1>Theme Management</h1>
    <a href="<?= site_url('admin/create_theme'); ?>">Create New Theme</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama Tema</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($themes as $theme): ?>
            <tr>
                <td><?= $theme['id']; ?></td>
                <td><?= $theme['theme_name']; ?></td>
                <td>
                    <a href="<?= site_url('admin/edit_theme/'.$theme['id']); ?>">Edit</a>
                    <a href="<?= site_url('admin/delete_theme/'.$theme['id']); ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
