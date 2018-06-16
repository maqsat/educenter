<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(Auth::check() && Auth::user()->type_id == 1)
                    <li>
                        <a class="waves-effect waves-dark" href="/faculty" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Факультеты</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/specialty" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Специальность</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/logout" aria-expanded="false"><i class="mdi mdi-power"></i><span class="hide-menu">Выйти</span></a>
                    </li>
                @elseif(Auth::check() && Auth::user()->type_id == 2)
                    <li>
                        <a class="waves-effect waves-dark" href="/profile" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Профиль</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/teachers-group" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Группы</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/teachers#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Расписание</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/attestation" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Текущая аттестация</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/logout" aria-expanded="false"><i class="mdi mdi-power"></i><span class="hide-menu">Выйти</span></a>
                    </li>
                @elseif(Auth::check() && Auth::user()->type_id == 3)

                @else
                    <li>
                        <a class="waves-effect waves-dark" href="/login" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Вход</span></a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> </div>
    <!-- End Bottom points-->
</aside>