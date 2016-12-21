<div class="kaamHeader">
    <div class="container">
        <a href="<?php print $front_page; ?>"> <h1><?php print $site_name ?></h2></a>
        <div class="kaamUserMenu">
            <?php if ($logged_in): ?>
                <?php print render($page['user_menu']); ?>
            <?php elseif ($is_front): ?>
                <ul>
                    <li><a href="<?php $front_page; ?>user/login">Log In</a></li>
                    <li><a href="<?php $front_page; ?>user/register">Register</a></li>
                </ul>
            <?php else: ?>
                <ul>
                    <li><a href="<?php $front_page; ?>login">Log In</a></li>
                    <li><a href="<?php $front_page; ?>register">Register</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="kaamContent">
    <div class="container">
        <div class="row">
            <div class="col-md-2 kaamUserNav">
                <?php print render($page['user_nav']); ?>
            </div>
            <div class="col-md-10">
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</div>
<div class="kaamFooter">
    <p class="kaamFooterText">&copy; 2016 Kaam. All rights reserved.</p>
</div>
