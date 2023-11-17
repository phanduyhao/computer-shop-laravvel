<aside
    id='layout-menu'
    class='layout-menu menu-vertical menu bg-menu-theme'
    data-bg-class='bg-menu-theme'
>
    <div class='app-brand demo'>
        <a href='/admin' class='app-brand-link'>
            <img src='/temp/images/general/logo.png' width='200' alt='' />
        </a>

        <a
            href='javascript:void(0);'
            class='layout-menu-toggle menu-link text-large ms-auto d-xl-none'
        >
            <i class='bx bx-chevron-left bx-sm align-middle'></i>
        </a>
    </div>

    <div class='menu-inner-shadow'></div>

    <ul class='menu-inner py-1 ps ps--active-y'>
        <!-- Dashboard -->
        <li class='menu-item active'>
            <a href='/admin' class='menu-link'>
                <i class='menu-icon tf-icons bx bx-home-circle'></i>
                <div data-i18n='Analytics'>Dashboard</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Users</span>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bxs-user-account'></i>
                <div data-i18n='Layouts'>Quản lý tài khoản</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='{{route('userAdmin')}}' class='menu-link'>
                        <div data-i18n='Without menu'>Tài khoản quản trị</div>
                    </a>
                </li>
                <li class='menu-item'>
                    <a href='{{route('user')}}' class='menu-link'>
                        <div data-i18n='Without menu'>Tài khoản người dùng</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Shop</span>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-category-alt'></i>
                <div data-i18n='Layouts'>Quản lý danh mục</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='{{route('cates.index')}}' class='menu-link'>
                        <div data-i18n='Without menu'>Danh mục sản phẩm</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-store-alt'></i>
                <div data-i18n='Layouts'>Quản lý sản phẩm</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='{{route('products.index')}}' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách sản phẩm</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-news'></i>
                <div data-i18n='Layouts'>Quản lý bài viết</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='{{route('posts.index')}}' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách bài viết</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Actions</span>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-comment-detail'></i>
                <div data-i18n='Layouts'>Quản lý bình luận</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách bình luận</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-heart'></i>
                <div data-i18n='Layouts'>Quản lý yêu thích</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách yêu thích</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-star'></i>
                <div data-i18n='Layouts'>Quản lý đánh giá</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách đánh giá</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-downvote'></i>
                <div data-i18n='Layouts'>Quản lý tải xuống</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Thống kê lượt tải tài liệu</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-street-view'></i>
                <div data-i18n='Layouts'>Quản lý lượt xem</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Thống kê lượt xem tài liệu</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Components</span>
        </li>
        <!-- Layouts -->
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-food-menu'></i>
                <div data-i18n='Layouts'>Quản lý Menu</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Danh sách Menu</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>
        <li class='menu-item'>
            <a href='javascript:void(0);' class='menu-link menu-toggle'>
                <i class='menu-icon tf-icons bx bx-cog'></i>
                <div data-i18n='Layouts'>Thiết lập</div>
            </a>
            <ul class='menu-sub'>
                <li class='menu-item'>
                    <a href='' class='menu-link'>
                        <div data-i18n='Without menu'>Cài đặt điểm</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
