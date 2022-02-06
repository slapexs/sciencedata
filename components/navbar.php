<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="./" onclick="loadLab(0)">Lab ทั้งหมด</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <?php for ($i = 1; $i < 8; $i++) { ?>
                    <li class="nav-item">
                        <a class="nav-link <?= ($lab == $i ? 'text-primary' : ''); ?>" id="route_lab<?= $i; ?>" href="./?lab=<?= $i; ?>" onclick="loadLab(<?= $i; ?>)">Lab <?= $i; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>