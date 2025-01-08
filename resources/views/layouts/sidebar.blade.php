            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('treatment') }}"
                                class="nav-link {{ request()->routeIs('treatment') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Treatment
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('diagnosa') }}"
                                class="nav-link {{ request()->routeIs('diagnosa') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Diagnosa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('janji_temu') }}"
                                class="nav-link {{ request()->routeIs('janjitemu') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Janji Temu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('pasien') }}"
                                class="nav-link {{ request()->routeIs('pasien') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Pasien
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('obat') }}"
                                class="nav-link {{ request()->routeIs('obat') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-heart"></i>
                                <p>
                                    Obat
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                              Chat
                            </p>
                          </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
