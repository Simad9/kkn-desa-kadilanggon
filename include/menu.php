<?php
//cek session
if (!empty($_SESSION['admin'])) {
?>
    <nav class="white">
        <div class="nav-wrapper">
            <ul id="slide-out" class="side-nav white" data-simplebar-direction="vertical">
                <li class="no-padding">
                    <!-- 
<div class="logo-side center white">
    <?php
    /*
    $query = mysqli_query($config, "SELECT * FROM tbl_instansi");
    while ($data = mysqli_fetch_array($query)) {
        if (!empty($data['logo'])) {
            echo '<img class="logoside" src="./upload/' . $data['logo'] . '"/>';
        } else {
            echo '<img class="logoside" src="./asset/img/logo.png"/>';
        }
        if (!empty($data['nama'])) {
            echo '<h5 class="smk-side black-text">' . $data['nama'] . '</h5>';
        } else {
            echo '<h5 class="smk-side black-text">SMK Al - Husna Loceret Nganjuk</h5>';
        }
        if (!empty($data['alamat'])) {
            echo '<p class="description-side black-text">' . $data['alamat'] . '</p>';
        } else {
            echo '<p class="description-side black-text">Jalan Raya Kediri Gg. Kwagean No. 04 Loceret Telp/Fax. (0358) 329806 Nganjuk 64471</p>';
        }
    }
    */
    ?>
</div>
-->

                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header black-text"><i class="material-icons black-text">account_circle</i> <?php echo $_SESSION['nama']; ?></a>
                            <div class="collapsible-body white">
                                <ul>
                                    <li><a class="black-text" href="?page=pro">Profil</a></li>
                                    <li><a class="black-text" href="?page=pro&sub=pass">Ubah Password</a></li>
                                    <li><a class="black-text" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a class="black-text" href="./"><i class="material-icons black-text">dashboard</i> Beranda</a></li>

                <?php if ($_SESSION['admin'] == 1 || $_SESSION['admin'] == 3) { ?>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header black-text"><i class="material-icons black-text">repeat</i> Transaksi Surat</a>
                                <div class="collapsible-body white">
                                    <ul>
                                        <li><a class="black-text" href="?page=tsm">Surat Masuk</a></li>
                                        <li><a class="black-text" href="?page=tsk">Surat Keluar</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header black-text"><i class="material-icons black-text">assignment</i> Buku Agenda</a>
                            <div class="collapsible-body white">
                                <ul>
                                    <li><a class="black-text" href="?page=asm">Surat Masuk</a></li>
                                    <li><a class="black-text" href="?page=ask">Surat Keluar</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li>
                            <a class="collapsible-header black-text"><i class="material-icons black-text">image</i> Galeri File</a>
                            <div class="collapsible-body white">
                                <ul>
                                    <li><a class="black-text" href="?page=gsm">Surat Masuk</a></li>
                                    <li><a class="black-text" href="?page=gsk">Surat Keluar</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>

                <li><a class="black-text" href="?page=ref"><i class="material-icons black-text">class</i> Referensi</a></li>

                <?php if ($_SESSION['admin'] == 1) { ?>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header black-text"><i class="material-icons black-text">settings</i> Pengaturan</a>
                                <div class="collapsible-body white">
                                    <ul>
                                        <li><a class="black-text" href="?page=sett">Instansi</a></li>
                                        <li><a class="black-text" href="?page=sett&sub=usr">User</a></li>
                                        <li><a class="black-text" href="?page=sett&sub=back">Backup Database</a></li>
                                        <li><a class="black-text" href="?page=sett&sub=rest">Restore Database</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php } ?>

                <?php if ($_SESSION['admin'] == 2) { ?>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li>
                                <a class="collapsible-header black-text"><i class="material-icons black-text">settings</i> Pengaturan</a>
                                <div class="collapsible-body white">
                                    <ul>
                                        <li><a class="black-text" href="?page=sett">Instansi</a></li>
                                        <li><a class="black-text" href="?page=sett&sub=usr">User</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>

            <!-- Menu on large screen -->
            <ul class="center hide-on-med-and-down" id="nv">
                <li><a class="black-text" href="./"><i class="material-icons black-text"></i> Beranda</a></li>
                <?php if ($_SESSION['admin'] == 1 || $_SESSION['admin'] == 3) { ?>
                    <li><a class="dropdown-button black-text" href="#!" data-activates="transaksi">Transaksi Surat <i class="material-icons md-18 black-text">arrow_drop_down</i></a></li>
                    <ul id="transaksi" class="dropdown-content white">
                        <li><a class="black-text" href="?page=tsm">Surat Masuk</a></li>
                        <li><a class="black-text" href="?page=tsk">Surat Keluar</a></li>
                    </ul>
                <?php } ?>
                <li><a class="dropdown-button black-text" href="#!" data-activates="agenda">Buku Agenda <i class="material-icons md-18 black-text">arrow_drop_down</i></a></li>
                <ul id="agenda" class="dropdown-content white">
                    <li><a class="black-text" href="?page=asm">Surat Masuk</a></li>
                    <li><a class="black-text" href="?page=ask">Surat Keluar</a></li>
                </ul>
                <li><a class="dropdown-button black-text" href="#!" data-activates="galeri">Galeri File <i class="material-icons md-18 black-text">arrow_drop_down</i></a></li>
                <ul id="galeri" class="dropdown-content white">
                    <li><a class="black-text" href="?page=gsm">Surat Masuk</a></li>
                    <li><a class="black-text" href="?page=gsk">Surat Keluar</a></li>
                </ul>
                <li><a class="black-text" href="?page=ref">Referensi</a></li>
                <?php if ($_SESSION['admin'] == 1 || $_SESSION['admin'] == 2) { ?>
                    <li><a class="dropdown-button black-text" href="#!" data-activates="pengaturan">Pengaturan <i class="material-icons md-18 black-text">arrow_drop_down</i></a></li>
                    <ul id="pengaturan" class="dropdown-content white">
                        <li><a class="black-text" href="?page=sett">Instansi</a></li>
                        <li><a class="black-text" href="?page=sett&sub=usr">User</a></li>
                        <?php if ($_SESSION['admin'] == 1) { ?>
                            <li class="divider"></li>
                            <li><a class="black-text" href="?page=sett&sub=back">Backup Database</a></li>
                            <li><a class="black-text" href="?page=sett&sub=rest">Restore Database</a></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
                <li class="right" style="margin-right:10px;">
                    <a class="dropdown-button black-text" href="#!" data-activates="logout"><i class="material-icons black-text">account_circle</i> <?php echo $_SESSION['nama']; ?> <i class="material-icons md-18 black-text">arrow_drop_down</i></a>
                </li>
                <ul id="logout" class="dropdown-content white">
                    <li><a class="black-text" href="?page=pro">Profil</a></li>
                    <li><a class="black-text" href="?page=pro&sub=pass">Ubah Password</a></li>
                    <li class="divider"></li>
                    <li><a class="black-text" href="logout.php"><i class="material-icons black-text">settings_power</i> Logout</a></li>
                </ul>
            </ul>

            <a href="#" data-activates="slide-out" class="button-collapse" id="menu"><i class="material-icons black-text">menu</i></a>
        </div>
    </nav>
<?php
} else {
    header("Location: ../");
    die();
}
?>