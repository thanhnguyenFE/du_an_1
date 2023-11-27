
<div class="wrapper">
    <!-- =========== Sidebar for admin dashboard =========== -->

    <aside id="sidebar" class="js-sidebar">
        <!-- ======== Content For Sidebar ========-->
        <div class="h-100">
            <div class="sidebar-logo">
                <a href="#">CodzSword</a>
            </div>

            <!-- ======= Navigation links for sidebar ======== -->
            <ul class="sidebar-nav">
                <li class="sidebar-header">Admin Elements</li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list pe-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="sidebar-item">
                    <a
                        href="#"
                        class="sidebar-link collapsed"
                        data-bs-target="#pages"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                    >
                        <i class="fa-solid fa-file-lines pe-2"></i>
                        Phim
                    </a>
                    <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="index.php?act=listphim" class="sidebar-link">Tất cả</a>
                        </li>
                        <?php
                        foreach ($listdanhmuc as $item){
                            extract($item);
                            echo '<li class="sidebar-item">
                            <a href="index.php?act=listphim&iddm='.$category_id.'" class="sidebar-link">'.$category_name.'</a>
                        </li>';
                        }
                        ?>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a
                        href="#"
                        class="sidebar-link collapsed"
                        data-bs-target="#posts"
                        data-bs-toggle="collapse"
                        aria-expanded="false"
                    >
                        <i class="fa-solid fa-file-lines pe-2"></i>
                        Pages
                    </a>
                    <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Page1</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Page2</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Page2</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-file-lines pe-2"></i>
                        User
                    </a>
                </li>
            </ul>
        </div>
    </aside>