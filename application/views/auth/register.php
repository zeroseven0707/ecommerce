<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Register</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/register'); ?>
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirm">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    <?php echo form_close(); ?>
</div>
</body>
</html>
