<form action="login.php" method="post">
    <h2>Login Admin</h2>
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Login" class="btn">
    </div>
</form>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f5f6fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h2 {
        text-align: center;
        font-size: 24px;
        color: #333;
        margin-bottom: 40px;
    }

    form {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
        display: block;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .btn {
        text-align: center;
        font-weight: bold;
    }

    /* Optional: For error message */
    p {
        text-align: center;
        color: red;
    }
</style>