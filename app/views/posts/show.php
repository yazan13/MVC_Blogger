<?php include_once APPROOT . '/views/inc/header.inc.php'; ?>
<div class="mt-5">
    <h2 class="my-3"><?php echo $data['post']->postTitle ?></h2>

    <div class="border rounded p-3 mb-2">
        <?php echo $data['post']->postContent; ?>
    </div>

    <?php if ($data['post']->userId == $_SESSION['user_id']) : ?>
        <a href="<?php echo URLROOT; ?>posts/edit/<?php echo $data['post']->id ?>" class="btn btn-info">Edit</a>
        <a href="<?php echo URLROOT; ?>posts/delete/<?php echo $data['post']->id ?>" class="btn btn-danger">Delete</a>

    <?php endif; ?>
</div <?php include_once APPROOT . '/views/inc/footer.inc.php'; ?>