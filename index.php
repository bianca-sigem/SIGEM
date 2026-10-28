<?php require 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIGEM - Login</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
*{box-sizing:border-box;font-family:'Inter',Arial}
body{margin:0;min-height:100vh;display:flex;background:#f5f7fb}
.left{flex:1;background:linear-gradient(135deg,#1a237e 0%,#3949ab 100%);color:white;display:flex;flex-direction:column;justify-content:center;padding:60px}
.left h1{font-size:48px;margin:0}.left p{opacity:.9;font-size:18px;line-height:1.5}
.right{flex:1;display:flex;justify-content:center;align-items:center;padding:20px}
.card{background:white;width:100%;max-width:380px;padding:40px;border-radius:20px;box-shadow:0 20px 60px rgba(0,0,0,.1)}
.card h2{margin:0 0 5px}.card span{color:#666;font-size:14px}
.input-group{margin-top:20px}
.input-group label{font-size:13px;font-weight:600;color:#333}
.input-group input, .input-group select{width:100%;padding:12px 14px;margin-top:6px;border-radius:10px;border:1.5px solid #e0e0e0;outline:none;transition:.2s}
.input-group input:focus{border-color:#3949ab}
.btn{width:100%;padding:12px;background:#1a237e;color:white;border:none;border-radius:10px;font-weight:600;margin-top:25px;cursor:pointer;transition:.2s}
.btn:hover{background:#283593;transform:translateY(-1px)}
.logo{width:50px;height:50px;background:white;border-radius:12px;display:flex;align-items:center;justify-content:center;color:#1a237e;font-weight:800;font-size:22px;margin-bottom:20px}
</style>
</head>
<body>
<div class="left">
  <div class="logo">S</div>
  <h1>SIGEM</h1>
  <p>Sistema Integral de Gestión<br>Educativa Moderna</p>
  <p style="margin-top:40px;font-size:14px;opacity:.7">✓ Control de asistencias<br>✓ Calificaciones<br>✓ Gestión de alumnos y tutores</p>
</div>
<div class="right">
  <div class="card">
    <h2>Bienvenido</h2>
    <span>Ingresá con tu usuario institucional</span>
    <form action="dashboard.php" method="POST">
      <div class="input-group"><label>Usuario</label><input type="text" placeholder="ej: admin.sigem" required></div>
      <div class="input-group"><label>Contraseña</label><input type="password" placeholder="••••••••" required></div>
      <div class="input-group"><label>Rol</label><select required><option value="">Seleccionar rol</option><option>Administrador</option><option>Preceptor</option><option>Profesor</option><option>Tutor</option></select></div>
      <button class="btn">Ingresar al sistema →</button>
    </form>
  </div>
</div>
</body>
</html>