
<div class="logo">
    <a href="/dashboard">
        <img src="{{ asset('JMurrlogo.png') }}" alt="Cool Admin" >
    </a>
    <h5 style="
    padding-left: 12px;
    color:  white;
    font-size: 44px;font-family:'lato';
    font-weight: 900;
    ">JMurr</h5>
</div>
<div class="menu-sidebar2__content js-scrollbar2">
    <div class="account2">
        <div class="image img-cir img-120">
            <img src="{{ asset('AdminStyles/images/icon/avatar-big-01.jpg') }}" alt="John Doe" >

        </div>
        <h4 class="name">{{Auth::guard('admin')->user()->name}}</h4>
        <a href="/logout">Sign out</a>
    </div>
    <nav class="navbar-sidebar2">
        <ul class="list-unstyled navbar__list">
            <li class="active">
                <a href="/dashboard">
                    <i class="fas fa-home"></i>Home</a>
            </li>
            <li class="has-sub">
                <a class="js-arrow" href="#">
                    <i class="fas fa-table"></i>See full table
                    <span class="arrow">
                                        <i class="fas fa-angle-down"></i>
                                    </span>
                </a>
                <ul class="list-unstyled navbar__sub-list js-sub-list">
                    <li>
                        <a href="/dashboard/personal">
                            <i class="fas fa-female"></i>Personal</a>
                    </li>
                    <li>
                        <a href="/dashboard/biography">
                            <i class="fas fa-book-open"></i>Biography</a>
                    </li>
                    <li>
                        <a href="/dashboard/gallery">
                            <i class="far fa-images"></i>Gallery</a>
                    </li>
                    <li>
                        <a href="/dashboard/guests">
                            <i class="fas fa-user"></i>Guest</a>
                    </li>
                    <li>
                        <a href="/dashboard/videos">
                            <i class="fas fa-video"></i>Video</a>
                    </li>
                    <li>
                        <a href="/dashboard/episodes">
                            <i class="fas fa-tv"></i>Episode</a>
                    </li>
                    <li>
                        <a href="/dashboard/testimonials">
                            <i class="fas fa-users"></i>Testimonial</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/dashboard/search">
                    <i class="fas fa-search"></i>Search For Product</a>
            </li>

        </ul>
    </nav>
</div>