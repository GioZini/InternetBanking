<nav id="navbarr" class="sb-topnav navbar navbar-expand navbar-dark">
            <a class="navbar-brand ps-3" id="brand">Internet Banking</a>
            <div id="icones">
                <a class="btn btn-link " id="navbarHome" href="../frontend/index.php"><i id="Icon" class="fa-solid fa-house"></i></a>
                <a class="btn btn-link " id="navbarPix" href="../frontend/pix.php"><i id="Icon" class="fa-solid fa-mobile-screen-button"></i></a>
                <a class="btn btn-link " id="navbarInvest" href="../frontend/investments.php"><i id="Icon" class="fa-solid fa-building-columns"></i></a>
                <a class="btn btn-link " id="navbarLogout" href="../backend/logout.php"><i id="Icon" class="fa-solid fa-right-from-bracket"></i></a>
                <a class="navbar-brand ps-3" id="brand">Balanço: R$<?php echo $_SESSION['balanco'];?></a>
            </div>
        </nav>