<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-box {
        background: #ffffff;
        padding: 30px;
        width: 320px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        text-align: center;
    }

    .login-box h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .input-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .input-group label {
        font-size: 14px;
        color: #555;
    }

    .input-group input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ddd;
        border-radius: 8px;
        outline: none;
        transition: 0.3s;
    }

    .input-group input:focus {
        border-color: #4facfe;
        box-shadow: 0 0 5px rgba(79,172,254,0.5);
    }

    button {
        width: 100%;
        padding: 12px;
        background: #4facfe;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }

    button:hover {
        background: #00c6ff;
    }

    .register-link {
        margin-top: 15px;
        display: block;
        font-size: 14px;
    }

    .register-link a {
        color: #4facfe;
        text-decoration: none;
        font-weight: bold;
    }

    .register-link a:hover {
        text-decoration: underline;
    }

</style>


</head>

<body>

<div class="login-box">
    <h2>SIAU</h2>


<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="input-group">
        <label>Correo Institucional</label>
        <input type="email" name="email" placeholder="ejemplo@correo.com" required>
    </div>

    <div class="input-group">
        <label>Contraseña</label>
        <input type="password" name="password" placeholder="********" required>
    </div>

     <div class="input-group">
        <label>Repite 
            Contraseña</label>
        <input type="password" name="password_confirmation" placeholder="********" required>
    </div>

 <div class="input-group">
        <label>Codigo de estudiante.</label>
        <input type="number" name="codigo" placeholder="123456" required>
    </div>

    <button type="submit">Registrar.  </button>
</form>

</body>

</html>
