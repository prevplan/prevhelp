<footer id="footer">
    <div class="container my-4">
        <div class="row pt-5 py-lg-5">
            <div class="col-5 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-light text-color-light mb-4">{{ t('address') }}</h5>
                <p class="text-4 mb-0">PrevHelp</p>
                <p class="text-4 mb-0">Edith-Stein-Str. 52</p>
                <p class="text-4 mb-0">42329 Wuppertal</p>
            </div>
            <div class="col-7 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-light text-color-light mb-4">{{ t('opening hours') }}</h5>
                <p class="text-4 mb-0">Mo - Fr: <span class="text-color-light">09:00 - 17:00 {{ t('o\'clock') }}</span></p>
                <p class="text-4 mb-0">{{ t('personal appointments') }}</p>
                <p class="text-4 mb-0"><span class="text-color-light">{{ t('by arrangement') }}</span></p>
            </div>
            <div class="col-7 col-md-6 col-lg-3 mb-5 mb-lg-0">
                <h5 class="text-6 text-transform-none font-weight-light text-color-light mb-4">{{ t('phone') }}</h5>
                <p class="text-7 text-color-light font-weight-light mb-2"><a href="tel:0800-77384357" style="text-decoration: none; color: inherit;">0800 - PREVHELP</a></p>
                <p class="text-4 mb-0">{{ t('office') }}: <span class="text-color-light"><a href="tel:0202-89837565" style="text-decoration: none; color: inherit;">0202 - 898 37 565</a></span></p>
            </div>
            <div class="col-5 col-md-6 col-lg-3">
                <h5 class="text-6 text-transform-none font-weight-light text-color-light mb-4">Social Media</h5>
                <ul class="footer-social-icons social-icons m-0">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/prevhelpde" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/prevhelpde" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-top-border bg-color-light-scale-1">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="/" class="logo pr-0 pr-lg-3">
                        <img alt="PrevHelp" src="{{ asset('img/logo-klein.png') }}" height="33">
                    </a>
                </div>
                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>© Copyright 2020. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('contact.show') }}" class="ml-1 text-decoration-none text-color-primary"> {{ t('Contact') }}</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('legal.conditions') }}" class="ml-1 text-decoration-none text-color-primary"> {{ t('GTC') }}</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('legal.privacy') }}" class="ml-1 text-decoration-none text-color-primary"> {{ t('privacy') }}</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="{{ route('legal.imprint') }}" class="ml-1 text-decoration-none text-color-primary"> {{ t('imprint') }}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
