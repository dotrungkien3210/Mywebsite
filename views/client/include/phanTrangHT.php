
<div id="pagination">
<?php
if ($current_pageHT > 20) {
    $first_page = 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>">First</a>
    <?php
}

?>
<?php for ($numHT = 1; $numHT <= $totalPagesHT; $numHT++) { ?>
    <?php if ($numHT != $current_pageHT) { ?>
        <?php if ($numHT > $current_pageHT - 20 && $numHT < $current_pageHT + 20) { ?>
            <a class="page-item" href="index.php?mod=client&c=home&act=getCateHT&use=volunteer&per_page=<?php echo $item_per_page ?>&page=<?php echo $numHT ?>"><?php echo $numHT ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?php echo $numHT ?></strong>
    <?php } ?>
<?php } ?>

<?php

if ($current_pageHT < $totalPagesHT - 20) {
    $end_pageHT = $totalPagesHT;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=getCateHT&use=volunteer&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_pageHT ?>">Last</a>
    <?php
}
?>
</div>