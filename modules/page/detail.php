<div id="content "class="wp-inner ">
    <?php
    $id = (int) $_GET['id'];
    $item = get_page_by_id($id);
    ?>
    <h1 class="title-page"><?php echo $item['title']; ?></h1>
    <div class="detal-page">
        <p> <?php echo $item['excerpt']; ?></p>
        <a  class="intro clearfix" href="intro.php">
            <img src="<?php echo $item['thumb'] ?>">
        </a>
        <p> <?php echo $item['content']; ?></p>
    </div>
</div>