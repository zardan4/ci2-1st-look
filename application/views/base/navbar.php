<nav class="navbar navbar-expand-md bg-body-tertiary mb-5">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="navigation__logo" src="<?php echo base_url('vendor/img/logo.png') ?>">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse d-md-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <!-- todo: "active" class for current page -->
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ask">Ask</a>
                </li>
            </ul>

            <ul class="navbar-nav ">
                <?php

                if ($is_admin) {
                    echo '<li class="nav-item">
                        <a class="nav-link" href="/auth">All users</a>
                    </li>
                    ';
                }

                ?>

                <li class="nav-item">
                    <a class="nav-link" href="/auth/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>