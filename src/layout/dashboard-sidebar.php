<?php
function Sidebar(array $items, string $activeView) {
?>
<aside class="sidebar">

    <div class="top">
        logo
    </div>

    <nav class="content">
        <ul>
            <?php foreach ($items as $item): ?>
                <a href="<?= $item['href'] ?>"
                   class="sidebar-item <?= $activeView === $item['view'] ? 'item-selected' : '' ?>">
                    
                    <i data-lucide="<?= $item['icon'] ?>"></i>
                    <?= $item['title'] ?>
                </a>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="bottom">
        <a href="logout.php" class="sidebar-item logout">
            <i data-lucide="log-out"></i>
            Cerrar Sesión
        </a>
    </div>

</aside>
<?php
}
?>
