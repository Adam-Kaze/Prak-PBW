<div class="login-wrapper">
    <div class="login-container">
        <h2>Login to Your Account</h2>
        <form action="<?= BASEURL; ?>index.php?url=login/auth" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>