<div class="humberger__menu__logo">
    <a href="#"><img src="/images/logo.png" alt=""></a>
</div>
@auth
<div class="humberger__menu__cart">
    <ul>
        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
    </ul>
    <div class="header__cart__price">item: <span>$150.00</span></div>
</div>
@endauth
<div class="humberger__menu__widget">
    <div class="header__top__right__language">
        <img src="/images/language.png" alt="">
        <div>English</div>
        <span class="arrow_carrot-down"></span>
        <ul>
            <li><a href="#">Spanis</a></li>
            <li><a href="#">English</a></li>
        </ul>
    </div>
    <div class="header__top__right__language">
        <!-- Authentication Links -->
        <i class="fa fa-user"></i><span class="arrow_carrot-down"></span>
        <ul>
        @guest
        <li>
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
        </li>
    @endguest
        </ul>
    </div>
</div>
<nav class="humberger__menu__nav mobile-menu">
    <ul>
        <li class="active"><a href="./index.html">Home</a></li>
        <li><a href="./shop-grid.html">Shop</a></li>
        <li><a href="#">Pages</a>
            <ul class="header__menu__dropdown">
                <li><a href="./shop-details.html">Shop Details</a></li>
                <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                <li><a href="./checkout.html">Check Out</a></li>
                <li><a href="./blog-details.html">Blog Details</a></li>
            </ul>
        </li>
        <li><a href="./blog.html">Blog</a></li>
        <li><a href="./contact.html">Contact</a></li>
    </ul>
</nav>
<div id="mobile-menu-wrap"></div>
<div class="header__top__right__social">
    <a href="{{ config('social.facebook.url') }}"><i class="fa fa-facebook"></i></a>
    <a href="{{ config('social.twitter.url') }}"><i class="fa fa-twitter"></i></a>
    <a href="{{ config('social.linkedin.url') }}"><i class="fa fa-linkedin"></i></a>
    <a href="{{ config('social.pinterest.url') }}"><i class="fa fa-pinterest-p"></i></a>
</div>
<div class="humberger__menu__contact">
    <ul>
        <li><i class="fa fa-envelope"></i> {{ config('social.email') }}</li>
        <li>Free Shipping for all Order of $99</li>
    </ul>
</div>