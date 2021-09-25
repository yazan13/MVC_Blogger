<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo APPNAME; ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>posts">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>pages/about_us">About us</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <span class="mr-3 text-light align-self-center ">Welcome back, <?php echo $_SESSION['user_name'] ?></span>
                <li class="btn btn-outline-danger"><a href="<?php echo URLROOT; ?>users/logout">Logout</a></li>

            <?php else : ?>
                <li class="btn btn-outline-success"><a href="<?php echo URLROOT; ?>users/login">Login</a></li>
                <li class="btn btn-outline-primary"><a href="<?php echo URLROOT; ?>users/register">Register</a></li>
            <?php endif; ?>
        </ul>
    </div>
</nav>