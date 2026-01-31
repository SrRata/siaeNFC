<?php

/**
 * Renderiza el componente Link Page Target con opciones de personalización.
 *
 * @param string $icon Nombre del icono de Lucide (ej. 'user-cog').
 * @param string $color Clase de color para el contenedor del icono (ej. 'icon-blue').
 * @param string $title Título de la acción.
 * @param string $description Descripción de la acción.
 * @param string $url URL del enlace (opcional, por defecto '#').
 * @param string $linkText Texto del enlace (opcional, por defecto 'Ver listados').
 */
function renderLinkPageTarget($icon, $color, $title, $description, $url = '#', $linkText = 'Ver listados') {
?>
    <div class="link-pages-target">
        <div class="icon-container icon-square <?php echo $color; ?>">
            <i class="icon" data-lucide="<?php echo $icon; ?>"></i>
        </div>
        <p class="link-pages-target-action"><?php echo $title; ?></p>
        <p class="link-pages-target-description"><?php echo $description; ?></p>
        <a href="<?php echo $url; ?>" class="link">
            <?php echo $linkText; ?>
            <i data-lucide="chevron-right"></i>
        </a>
    </div>
<?php
}
?>


<?php include 'src/components/elements/link-page-target.php'; ?>

<!-- Ejemplo 1: Gestión de alumnos -->
<?php renderLinkPageTarget(
    'user-cog', 
    'icon-blue', 
    'Gestión de mis alumnos', 
    'Ver fichas, reportes individuales y tags NFC asignados a sus estudiantes.'
); ?>

<!-- Ejemplo 2: Historial -->
<?php renderLinkPageTarget(
    'history', 
    'icon-purple', 
    'Historial de Clase', 
    'Revise el registro de asistencia de clases anteriores.'
); ?>
