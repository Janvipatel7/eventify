            </div>
        </div>
    </main>
    <!-- jquery-link -->
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <!-- apex-chart-link -->
    <script src="./assets/js/apexcharts.js"></script>
    <!-- base-line-charts-js-link -->
    <script src="./assets/js/basic-line-chart.js"></script>
    <script>
        $(document).ready(function () {
            // to hide aside-bar 
            $('.inside-icon').on('click', function () {
                $('aside').addClass('hide-left');
                $('.main-container').addClass('margin-0');
                $('.header-logo').removeClass('display-none');
            });
            // to show aside-bar back
            $('.pop-aside-bar').on('click', function () {
                $('aside').removeClass('hide-left');
                $('.main-container').removeClass('margin-0');
                $('.header-logo').addClass('display-none');
            });

            // aside-bar accordion
            $('.dashboard-btn').on('click', function () {
                focused = $(this).next('.accordion');
                focused.slideToggle(400);
                $('.accordion').not(focused).slideUp();
                // rotate-icon
                clickedIcon = $(this).children(".icon-arrow-greater");
                clickedIcon.toggleClass('icon-rotate');
                $(".icon-arrow-greater").not(clickedIcon).removeClass('icon-rotate');
            });
            // input search-bar color change 
            $('.search-bar input').focus(function () {
                $('.search-bar').css('border', '1px solid #2174fa');
            });
            $('.search-bar input').blur(function () {
                $('.search-bar').css('border', '1px solid rgb(224 230 237)');
            });
            // language-popup
            $('#language-option').on('click', function () {
                $('.language-popup').toggleClass('hidden');
            })
            // message-popup
            $('.message-icon').on('click', function () {
                $('.message-popup').toggleClass('hidden');
            })
            // bell-notification-popup
            $('#bell-icon').on('click', function () {
                $('.bell-notification').toggleClass('hidden');
            })
            // user-profile-popup
            $('#user-profile').on('click', function () {
                $('.user-profile-popup').toggleClass('hidden');
            })
            // dark-mode
            $('#theme-btn').on('click', function () {
                $('main').toggleClass('dark-mode');
                $('header').toggleClass('dark-mode');
                $('aside, header').toggleClass('dark-bg-color')
                $('.pop-aside-bar, .statement, .transaction, .favorites').toggleClass('icons-bg-color')
                $('.t-heading, h2, .left-side-navbar li, .right-side-nav li').toggleClass('t-heading-bg-color');
                $('.dashboard-btn:first-child').toggleClass('t-heading-bg-color');
                $('.search-bar input').toggleClass('input-bg-color');
                $('.search-bar').toggleClass('border-color');
                $('.language-popup').toggleClass('popup-menu-color');
                $('.main-notification').toggleClass('popup-menu-color');
                $('.bell-notification').toggleClass('popup-menu-color');
                $('.user-profile-popup').toggleClass('popup-menu-color');
                $('.bell-notification hr').toggleClass('border-color');
                $('.bio h5 span, p').toggleClass('font-color');
                $('.notification-time span:first-child').css('color', '#fafafa');
                $('.sun').toggleClass('display-none')
                $('.moon').toggleClass('display-none')
            })

            $('.to-top').on('click', function(){
                $('html').animate({scrollTop: 0}, 300)
            })
        })

        // for auto hide aside-bar at 992 breakpoint
        $(window).resize(function () {
            if ($(window).width() < 1061) {
                $('aside').addClass('hide-left')
                $('.header-logo').removeClass('display-none')
            } else {
                $('aside').removeClass('hide-left')
                $('.header-logo').addClass('display-none')
            }
        })
        // 
        $(window).resize(function () {
            if ($(window).width() < 385) {
                $('.left-side-navbar').addClass('gap-0')
                $('.right-side-nav').addClass('gap-0')
            } else {
                $('.left-side-navbar').removeClass('gap-0')
                $('.right-side-nav').removeClass('gap-0')
            }
        })

        // to scroll up
        $(window).scroll(function () {
            if (scrollY > 100) {
                $('.to-top').fadeIn(400);
            } else{
                $('.to-top').fadeOut(400);
            }
        })
    </script>
</body>

</html>