<?php
include '../../src/layout/dashboard-sidebar.php';
include '../../src/layout/dashboard-header.php';

$default = 'panel';

$view = $_GET['view'] ?? $default;

$viewsPermitidas = ['panel', 'courses', 'students', 'history', 'reports', 'observations', 'profile', 'configuration', 'help'];

if (!in_array($view, $viewsPermitidas)) {
    $view = $default;
};

$menuItems = [
    [
        'title' => 'Panel de Control',
        'href'  => 'index.php?view=panel',
        'icon'  => 'layout-dashboard',
        'view'  => 'panel'
    ],
    [
        'title' => 'Mis Cursos',
        'href'  => 'index.php?view=courses',
        'icon'  => 'book-open',
        'view'  => 'courses'
    ], 
    [
        'title' => 'Mis Alumnos',
        'href'  => 'index.php?view=students',
        'icon'  => 'user',
        'view'  => 'students'
    ],
    [
        'title' => 'Historial',
        'href'  => 'index.php?view=history',
        'icon'  => 'history',
        'view'  => 'history'
    ],
    [
        'title' => 'Reportes de Curso',
        'href'  => 'index.php?view=reports',
        'icon'  => 'clipboard',
        'view'  => 'reports'
    ],
    [
        'title' => 'Observaciones',
        'href'  => 'index.php?view=observations',
        'icon'  => 'clipboard-pen',
        'view'  => 'observations'
    ],
    [
        'title' => 'Mi Perfil',
        'href'  => 'index.php?view=profile',
        'icon'  => 'user-cog',
        'view'  => 'profile'
    ],
    [
        'title' => 'Configuración',
        'href'  => 'index.php?view=configuration',
        'icon'  => 'settings',
        'view'  => 'configuration'
    ],
    [
        'title' => 'Ayuda',
        'href'  => 'index.php?view=help',
        'icon'  => 'help-circle',
        'view'  => 'help'
    ]
    
];

$viewTitles = [
    'panel'         => 'Panel de Control',
    'courses'       => 'Mis Cursos',
    'students'      => 'Mis Alumnos',
    'history'       => 'Historial',
    'reports'       => 'Reportes de Curso',
    'observations'  => 'Observaciones',
    'profile'       => 'Mi Perfil',
    'configuration' => 'Configuración',
    'help'          => 'Ayuda'
];

$pageTitle = $viewTitles[$view] ?? 'Dashboard';


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="components.css">

</head>
<body>

    <?php Sidebar($menuItems, $view) ?>
    <?php DashboardHeader($pageTitle, 'Bienvenido, lic. Juan Perez', 'Juan Perez', 'Docente') ?>

    <main class="main">
        <section class="container grid-main-dashboard">
            <?php include_once "views/$view.php"; ?>
        </section>
    </main>

</body>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
</html>
