<?php 

$itemsLinks = [
    [
        'title' => 'Gestión de Estudiantes',
        'href'  => 'index.php?view=students-management',
        'icon'  => 'book-user',
        'description' => 'Administre el registro de nuevos estudiantes, edición de perfiles y asignación de tags NFC.',
    ],
    [
        'title' => 'Gestión de Usuarios',
        'href'  => 'index.php?view=users-management',
        'icon'  => 'square-user',
        'description' => 'Administre el registro de nuevos usuarios, edición de perfiles y asignación de tags NFC.',
    ],
        [
        'title' => 'Reportes',
        'href'  => 'index.php?view=reports',
        'icon'  => 'clipboard',
        'description' => 'Genere reportes PDF/Excel y visualice estadísticas de puntualidad y ausentismo.',
    ],
        [
        'title' => 'Configuración',
        'href'  => 'index.php?view=configuration',
        'icon'  => 'settings',
        'description' => 'Gestione los parámetros del sistema, usuarios autorizados y terminales NFC.',
    ],
]
?>
    
<div class="info-target">
    <div class="info-target-top">
        <div class="icon-container icon-square icon-blue">
            <i class="icon" data-lucide="book-open"></i>
        </div>
    </div>
    <p class="info-target-title">Mis cursos</p>
    <p class="info-target-value">6 cursos</p>
</div>

<div class="info-target">
    <div class="info-target-top">
        <div class="icon-container icon-square icon-purple">
            <i class="icon" data-lucide="users"></i>
        </div>
    </div>
    <p class="info-target-title">Estudiantes totales</p>
    <p class="info-target-value">1025 estudiantes</p>
</div>

<div class="info-target">
    <div class="info-target-top">
        <div class="icon-container icon-square icon-green">
            <i class="icon" data-lucide="chart-column"></i>
        </div>
        <div class="badge badge-green">
            Promedio
        </div>
    </div>
    <p class="info-target-title">% Asistencia hoy</p>
    <p class="info-target-value">94%</p>
</div>

<!-- <div class="mi-course-info-target">
    <div class="mi-course-info-target-top">
        <p class="mi-course-info-name">10mo grado - paralelo a</p>
        <p class="mi-course-info-description">Datos relevantes de su curso asignado.</p>
        <i class="mi-course-info-icon" data-lucide="graduation-cap" ></i>
    </div>
    <div class="mi-course-info-target-body">
        <div class="mi-course-info-target-state">
            <p>Estado de Asistencia</p>
            <div class="badge badge-green">
                <div class="circle"></div>
                Registro activo
            </div>
        </div>
        <div class="statistics-container">
            <div class="mi-course-statistics-target">
                <p class="mi-course-statistics-target-description">
                    Presentes
                </p>
                <p class="mi-course-statistics-target-students">
                    <span>24 </span>/ 30 alumnos 
                </p>
                <div class="bar">
                    <div class="bar-fill" style="width: 25%;"></div>
                </div>
            </div>
            <div class="mi-course-statistics-target">
                <p class="mi-course-statistics-target-description">
                    Ausentes / Atrasos
                </p>
                <div class="mi-course-statistics-target-value-container">
                    <p class="mi-course-statistics-target-value">
                        <span class="value-orange">4</span>
                        Atrasos
                    </p>
                    <div class="separator"></div>
                    <p class="mi-course-statistics-target-value">
                        <span class="value-red">2</span>
                        Ausentes
                    </p>
                </div>
            </div>
        </div>
        <div class="mi-course-info-target-body-bottom">
            <div class="last-register">
                <div class="icon-container icon-circle icon-blue">
                    <i class="icon" data-lucide="nfc"></i>
                </div>
                <div class="last-register-text">
                    Ultimo registro hace 
                    <span class="last-register-time">2 min</span>
                    :
                    <span class="last-register-name">Luis Matailo</span>
                </div>
            </div>
            <a href="#" class="link">
                Ver listado completo
                <i data-lucide="chevron-right"></i>
            </a>
        </div>
    </div>
</div> -->

<?php foreach ($itemsLinks as $item) : ?>

<div class="link-pages-target">
    <div class="icon-container icon-square icon-blue">
        <i class="icon" data-lucide="<?= $item['icon'] ?>"></i>
        </div>
    <p class="link-pages-target-action"><?= $item['title'] ?></p>
        <p class="link-pages-target-description"><?= $item['description'] ?></p>
    <a href="<?= $item['href'] ?>" class="link">
        Ver listados
        <i data-lucide="chevron-right"></i>
    </a>
</div>

<?php endforeach; ?>


<div class="notifications">
    <div class="notifications-top">
        <div>
            <p class="notifications-title">Actividad reciente</p>
            <p class="notifications-description">Estas visualizando registros recientes de asistencia</p>
        </div>
        <a href="#" class="link">Ver todo</a>
    </div>
    <div class="notifications-item">
        <div class="notifications-item-left">
            <div class="icon-container icon-circle icon-green">
                <i class="icon" data-lucide="check-circle"></i> 
            </div>
            <div class="notifications-item-text">
                <p class="notifications-item-text-info">
                    <span class="notifications-item-text-info-name">Luis Matailo</span>
                    registro entrada puntual
                </p>
                <p class="notifications-item-text-info-description">
                    Hace 3 minutos • 10mo Grado - Paralelo A
                </p>
            </div>
        </div>
        <p class="notifications-item-time">
            11:59 AM
        </p>
    </div>
    <div class="notifications-item">
        <div class="notifications-item-left">
            <div class="icon-container icon-circle icon-orange">
                <i class="icon" data-lucide="triangle-alert"></i> 
            </div>
            <div class="notifications-item-text">
                <p class="notifications-item-text-info">
                    <span class="notifications-item-text-info-name">Braulio Guambaña</span>
                    registro entrada atrasada
                </p>
                <p class="notifications-item-text-info-description">
                    Hace 3 minutos • 10mo Grado - Paralelo A
                </p>
            </div>
        </div>
        <p class="notifications-item-time">
            12:25 PM
        </p>
    </div>
    <div class="notifications-item">
        <div class="notifications-item-left">
            <div class="icon-container icon-circle icon-red">
                <i class="icon" data-lucide="check-circle"></i> 
            </div>
            <div class="notifications-item-text">
                <p class="notifications-item-text-info">
                    <span class="notifications-item-text-info-name">Bryam Illescas</span>
                    no registro salida
                </p>
                <p class="notifications-item-text-info-description">
                    Hace 3 minutos • 10mo Grado - Paralelo A
                </p>
            </div>
        </div>
        <p class="notifications-item-time">
            7:00 PM
        </p>
    </div>
</div>