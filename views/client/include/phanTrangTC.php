<div id="pagination">
<?php
if ($current_pageTC > 20) {
    $first_page = 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>">First</a>
    <?php
}

?>
<?php for ($numTC = 1; $numTC <= $totalPagesTC; $numTC++) { ?>
    <?php if ($numTC != $current_pageTC) { ?>
        <?php if ($numTC > $current_pageTC - 20 && $numTC < $current_pageTC + 20) { ?>
            <a class="page-item" href="index.php?mod=client&c=home&act=getCate&use=share&per_page=<?php echo $item_per_page ?>&page=<?php echo $numTC ?>"><?php echo $numTC ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?php echo $numTC ?></strong>
    <?php } ?>
<?php } ?>

<?php

if ($current_pageTC < $totalPagesTC - 20) {
    $end_pageTC = $totalPagesTC;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=getCate&use=share&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_pageTC ?>">Last</a>
    <?php
}
?>
</div>