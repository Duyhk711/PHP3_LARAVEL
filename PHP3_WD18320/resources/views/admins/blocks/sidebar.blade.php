<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="/" style="text-decoration: none; text-decoration: black;"><h3>Admin Panel</h3></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a class="" href="/" aria-expanded="" style="text-decoration: none">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/dashboard.svg')}}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>

        
       
        <li class>
            <a href="Board.html" aria-expanded="false" style="text-decoration: none">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/2.svg')}}" alt>
                </div>
                <span>Danh Mục</span>
            </a>
        </li>

        <li class>
            <a class="" href="sanpham" aria-expanded="" style="text-decoration: none">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/8.svg')}}" alt>
                </div>
                <span>Sản Phẩm</span>
            </a>
            
        </li>


        <li class>
            <a href="invoice.html" aria-expanded="" style="text-decoration: none">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/14.svg')}}" alt>
                </div>
                <span>Tài Khoản</span>
            </a>
        </li>


        <li class>
            <a href="calender.html" aria-expanded="" style="text-decoration: none">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/13.svg')}}" alt>
                </div>
                <span>Đơn Hàng</span>
            </a>
        </li>

        {{-- <li class>
            <a href="calender.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admins/img/menu-icon/7.svg')}}" alt>
                </div>
                <span></span>
            </a>
        </li> --}}


        
        
    </ul>
</nav>