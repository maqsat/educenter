<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                @if(Route::currentRouteName() == 'teachers')
                    <li>
                        <a class="waves-effect waves-dark" href="/teachers#" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Профиль</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/teachers" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Группы</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/teachers#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Расписание</span></a>
                    </li>
                @else
                    <li>
                        <a class="waves-effect waves-dark" href="/faculty" aria-expanded="false"><i class="mdi mdi-bank"></i><span class="hide-menu">Факультеты</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/specialty" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Специальность</span></a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="/group" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Группы</span></a>
                    </li>
                @endif
            </ul>
            <div class="text-center m-t-30">
                <a href="https://wrappixel.com/templates/materialpro/" class="btn waves-effect waves-light btn-warning hidden-md-down"> Upgrade to Pro</a>
            </div>
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