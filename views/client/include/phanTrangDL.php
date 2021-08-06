
<div id="pagination">
<?php
if ($current_pageDL > 20) {
    $first_page = 1;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=allPost&per_page=<?php echo $item_per_page ?>&page=<?php echo $first_page ?>">First</a>
    <?php
}

?>
<?php for ($numDL = 1; $numDL <= $totalPagesDL; $numDL++) { ?>
    <?php if ($numDL != $current_pageDL) { ?>
        <?php if ($numDL > $current_pageDL - 20 && $numDL < $current_pageDL + 20) { ?>
            <a class="page-item" href="index.php?mod=client&c=home&act=getCateDL&use=travel&per_page=<?php echo $item_per_page ?>&page=<?php echo $numDL ?>"><?php echo $numDL ?></a>
        <?php } ?>
    <?php } else { ?>
        <strong class="current-page page-item"><?php echo $numDL ?></strong>
    <?php } ?>
<?php } ?>

<?php

if ($current_pageDL < $totalPagesDL - 20) {
    $end_pageDL = $totalPagesDL;
    ?>
    <a class="page-item" href="index.php?mod=client&c=home&act=getCateDL&use=travel&per_page=<?php echo $item_per_page ?>&page=<?php echo $end_pageDL ?>">Last</a>
    <?php
}
?>
</div>