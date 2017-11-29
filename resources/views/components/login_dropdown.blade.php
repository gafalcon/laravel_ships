<li class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <span class="profile-ava">
            <img alt="" src="img/avatar2_small.jpg">
        </span>
        <span class="username">{{ Auth::user()->name }}</span>
        <b class="caret"></b>
    </a>
    <ul class="dropdown-menu extended logout">
        <div class="log-arrow-up"></div>
        <li class="eborder-top">
            <a href="#"><i class="icon_profile"></i> My Profile</a>
        </li>
        <li>

            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="icon_key_alt"></i> Salir
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
