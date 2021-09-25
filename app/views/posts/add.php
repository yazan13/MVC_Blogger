<?php include_once APPROOT . '/views/inc/header.inc.php'; ?>

<div class="card card-body mt-5">
    <h2 class="mb-3">Create new Post</h2>
    <form action="<?php echo URLROOT; ?>posts/add" method="post">
        <div class="form-group">
            <input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="title ..." class="form-control form-control-lg <?php echo (!empty($data['title_err']) ? 'is-invalid' : '') ?>">
            <span class="invalid-feedback"> <?php echo $data['title_err'] ?></span>
        </div>
        <div class="form-group">
            <textarea name="body" placeholder="post body ..." class="form-control form-control-lg <?php echo (!empty($data['body_err']) ? 'is-invalid' : '') ?>"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"> <?php echo $data['body_err'] ?></span>
        </div>
        <div>
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>

<?php include_once APPROOT . '/views/inc/footer.inc.php'; ?>