<?php include APPROOT . '/views/inc/header.inc.php' ?>

<div class="row mt-3">
    <div class="col-md-6">
        <h2>Posts</h2>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT; ?>posts/add" class="btn btn-info float-right">Add Post</a>
    </div>

    <div class="p-2 mx-auto w-75">

        <?php
        foreach ($data['posts'] as $post) : ?>
            <div class="card card-body py-3 my-2">
                <span class="card-title"><?php echo $post->postTitle ?></span>
                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->id ?>" class="btn btn-dark">Read more ...</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php include APPROOT . '/views/inc/footer.inc.php' ?>