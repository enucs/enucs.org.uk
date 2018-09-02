<div id="nav" role="navigation">
    <ul id="desktop">
        <li><a href="/" <?= $page == 'events' ? 'class="active"' : '' ?>>events</a></li>
        <li><a href="/society" <?= $page == 'society' ? 'class="active"' : '' ?>>society</a></li>
        <li class="logo">
            <span class="logo dark">{<span class="enu">enu</span><span class="cs">cs</span>}</span>
        </li>
        <li><a href="/sponsors" <?= $page == 'sponsors' ? 'class="active"' : '' ?>>sponsors</a></li>
        <li><a href="/join" <?= $page == 'join' ? 'class="active"' : '' ?>>join us</a></li>
        <li id="hamburger" onclick="toggleNav()">
            <i class="fa fa-bars"></i>
        </li>
    </ul>

    <ul id="mobile" class="disabled" aria-hidden="true">
        <li><a href="/" <?= $page == 'events' ? 'class="active"' : '' ?>>events</a></li>
        <li><a href="/society" <?= $page == 'society' ? 'class="active"' : '' ?>>society</a></li>
        <li><a href="/sponsors" <?= $page == 'sponsors' ? 'class="active"' : '' ?>>sponsors</a></li>
        <li><a href="/join" <?= $page == 'join' ? 'class="active"' : '' ?>>join us</a></li>
    </ul>
</div>
