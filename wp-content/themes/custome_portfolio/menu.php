<nav class="outer-nav left vertical">
    <?php $menu_items = wp_get_nav_menu_items('Main Menu');
    foreach ($menu_items as $item): ?>
        <a href=" <?php echo $item->url; ?>"> <?php echo $item->title; ?></a>
    <?php endforeach; ?>
</nav>
<i id="showMenu" class="icon-menu"></i>