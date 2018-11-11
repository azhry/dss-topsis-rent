<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <?php  
                    $username = $this->session->userdata('username');
                    if (!isset($username)):
                ?>
                <li>
                    <a href="<?= base_url('login') ?>">Login</a>
                </li>
                <?php else: ?>
                <li>
                    <a href="<?= base_url('logout') ?>">Logout</a>
                </li>
                <?php endif; ?>
                <li><a href="<?= base_url() ?>"><h5>Sistem Sewa Ruko</h5></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->