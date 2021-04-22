<nav class="navbar navbar-expand-lg navbar-light py-3" style="background:#20c997">
    <div class="container mb-auto">
        <a class="navbar-brand" href="#">CBT TOEFL EXAM</a>
        <div class="dropdown">
            <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/assets/img/user.png" alt=".." width="30">
                <?php
                    $session = \Config\Services::session();
                    echo @$session->nama;
                ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="/logout">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>