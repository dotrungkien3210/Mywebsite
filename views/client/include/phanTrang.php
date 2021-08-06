<div id="pagination">
<?php
if ($current_page > 20) {
    $first_page = 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>">First</a>
    <?php
}
if ($current_page > 1) {
    $prev_page = $current_page - 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $prev_page ?>">Prev</a>
<?php }
?>
<?php for ($num = 1; $num <= $totalPages; $num++) { ?>
    <?php if ($num != $current_page) { ?>
        <?php if ($num > $current_page - 20 && $num < $current_page + 20) { ?>
            <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $num ?>"><?php echo $num ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?php echo $num ?></strong>
    <?php } ?>
<?php } ?>
<?php
if ($current_page < $totalPages - 1) {
    $next_page = $current_page + 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $next_page ?>">Next</a>
<?php
}
if ($current_page < $totalPages - 20) {
    $end_page = $totalPages;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_page ?>">Last</a>
    <?php
}
?>
</div>