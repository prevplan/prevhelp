<header id="header" class="@yield('header_class', 'header-effect-shrink')" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 header-body-bottom-border">
        <div class="header-top header-top-default border-bottom-0">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    {{--
                                    maybe used later...
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
                                    </li>
                                    --}}
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block">
                                        <a class="nav-link" href="{{ route('contact.show') }}"><i class="fas fa-angle-right"></i> Kontakt</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a href="mailto:info@prevhelp.de"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> info@prevhelp.de</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tel:0800-77384357"><i class="far fa-phone text-4 text-color-primary" style="top: 0;"></i> 0800-PREVHELP</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="PrevHelp"  height="48" data-sticky-height="40" src="{{ asset('img/logo-klein.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item" href="/">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle
                                            {{ request()->is('erste-hilfe-kurs-fuehrerschein') ||
                                                request()->is('erste-hilfe-kurs-betriebe')
                                                ? 'active' : ''
                                            }}" href="#">
                                                Erste-Hilfe-Kurse
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('fa.wuppertal') }}">... f&uuml;r den F&uuml;hrerschein</a></li>
                                                <li><a class="dropdown-item" href="{{ route('fa.business') }}">... f&uuml;r Betriebe / Unternehmen</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is('termine*') ? 'active' : ''}}" href="{{ route('event.overview') }}">
                                                Termine
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is('faq') ? 'active' : ''}}" href="{{ route('question.index') }}">
                                                FAQ
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item {{ request()->is('garantie') ? 'active' : ''}}" href="{{ route('warranty') }}">
                                                Garantie
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle
                                            {{ request()->is('impressum') ||
                                                request()->is('datenschutz') ||
                                                request()->is('agb') ||
                                                request()->is('widerruf')
                                                ? 'active' : ''
                                            }}" href="#">
                                                Rechtliches
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('legal.imprint') }}">Impressum</a></li>
                                                <li><a class="dropdown-item" href="{{ url('datenschutz') }}">Datenschutz</a></li>
                                                <li><a class="dropdown-item" href="{{ route('legal.conditions') }}">AGB</a></li>
                                                <li><a class="dropdown-item" href="{{ route('legal.revocation') }}">Widerrufsbelehrung</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        {{--
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
