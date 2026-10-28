<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>SIGEM - Dashboard</title>
<style>
body { margin:0; font-family: 'Segoe UI', sans-serif; background:#f4f7fe; display:flex; }
.sidebar { width:240px; background:#0f2a93; color:white; min-height:100vh; padding:20px; }
.sidebar h2 { margin:0 0 30px 0; letter-spacing:1px; }
.sidebar a { display:block; color:#cbd5ff; text-decoration:none; padding:12px; border-radius:8px; margin-bottom:8px; }
.sidebar a:hover, .sidebar a.active { background:white; color:#0f2a93; font-weight:bold; }
.main { flex:1; padding:40px; }
.main h1 { margin:0 0 30px 0; color:#0f172a; }
.cards { display:flex; gap:20px; }
.card { background:white; padding:25px; border-radius:12px; flex:1; box-shadow:0 2px 10px rgba(0,0,0,0.05); }
.card h3 { margin:0; color:#64748b; font-size:14px; }
.card p { font-size:28px; font-weight:bold; margin:10px 0 0 0; color:#0f2a93; }
</style>
</head>
<body>
<div class="sidebar">
<h2>SIGEM</h2>
<a href="#" class="active">🏠 Inicio</a>
<a href="#">🎓 Alumnos</a>
<a href="#">📋 Asistencias</a>
<a href="#">📝 Notas</a>
<a href="salir.php">Salir</a>
</div>
<div class="main">
<h1>Bienvenido</h1>
<div class="cards">
<div class="card"><h3>Alumnos</h3><p>120</p></div>
<div class="card"><h3>Asistencia</h3><p>95%</p></div>
<div class="card"><h3>Materias</h3><p>11</p></div>
</div>
</div>
</body>
</html>