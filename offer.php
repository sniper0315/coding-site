<?php
    if (! isset($_SERVER['HTTPS']) or $_SERVER['HTTPS'] == 'off' ) {
        $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: $redirect_url");
        exit();
    }
?>
<!DOCTYPE html>
<!-- saved from url=(0316)https://moneysurvey360.top/survey.html?offer_id=112779&geo=CL&s=577980093520244903&z=4937745&b=13161297&campaignid=5625682&var=3425382&ymid=577980093520244903&var_3=%7Bvar_3%7D&ntr=1&vpn=1&abtest=2912000&rdk=rk3&utm_campaign=3425382&utm_medium=4937745&utm_source=zd_5625682&utm_term=13161297&utm_content=zd_public_v2 -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="google" content="notranslate">
        <meta name="referrer" content="no-referrer">
        <title>(1) Notification - Unprotected Device </title>
        <meta content="survey" name="description">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="js/rtc.js" defer="defer"></script>
        <script src="js/v2_config.js?v=0" defer="defer"></script>
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" href="css/survey.css?v=3">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body data-theme="dark-v2,light" class="dark-v2" data-new-gr-c-s-check-loaded="14.1073.0" data-gr-ext-installed="">
        <div class='offer_top_bar'>
            <img src='images/betternet-logo.png' alt='' />
        </div>
        <section class="body-wrapper">
            <div class="offer_red_bar">
                <span>ATTENTION: Do Not leave this page its a secure connection</span>
            </div>
            <div class='horizontal_center_bar'>
                <div class='toggle_button_group'>
                    <button>Order Started</button>
                    <button>20% Off</button>
                    <button>Bonus #1</button>
                    <button>Bonus #2</button>
                    <button>Bonus #3</button>
                    <button>Completed</button>
                </div>
                <div class='sale_ads_section'>
                    <p>Wait Don’t Forget About Your Friends<br/>& Family... Or Grab More For Yourself</p>
                    <div>
                        <div class='top_button_group'>
                            <button>Save 45%</button>
                            <button>Best Value</button>
                        </div>
                        <div class='sale_ads_container'>
                            <div class='sale_ads_description_container'>
                                <img src='images/phone.png' alt='images' />
                                <div class='sale_ads_description'>
                                    <div class='description_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>Ultrafast connection speed</p>
                                    </div>
                                    <div class='description_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>10 Premium virtual location</p>
                                    </div>
                                    <div class='description_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>Ad-free experience</p>
                                    </div>
                                    <div class='description_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>Connect up to 10 devices</p>
                                    </div>
                                </div>
                            </div>
                            <div class='sale_item_container'>
                                <p> We want you to take full advantages of<br/>this <span>offer</span> to protect your security.</p>
                                <div class='offer_timer'>
                                    <p>The offer ends in</p>
                                    <p id='offer_clock'>00 : 00 : 00</p>
                                    <div class='time_units'>
                                        <p>HRS</p>
                                        <p>MIN</p>
                                        <p>SECS</p>
                                    </div>
                                </div>
                                <div class='select_package_section'>
                                    <p>Select Your Package</p>
                                    <div class='package_group' id='package_group'>
                                        <div class='package_item'>
                                            <div class='discount_group'>
                                                <p>45% off</p>
                                            </div>
                                            <p>12 months</p>
                                            <div class='item_price_section'>
                                                <p>$12.99</p>
                                                <p>/ month</p>
                                            </div>
                                            <input type='radio' id='price_12' name='package_group' />
                                        </div>
                                        <div class='package_item'>
                                            <div class='discount_group'>
                                                <p>30% off</p>
                                            </div>
                                            <p>6 months</p>
                                            <div class='item_price_section'>
                                                <p>$3.99</p>
                                                <p>/ month</p>
                                            </div>
                                            <input type='radio' id='price_6' name='package_group' />
                                        </div>
                                        <div class='package_item'>
                                            <div class='discount_group'>
                                                <p>21% off</p>
                                            </div>
                                            <p>1 months</p>
                                            <div class='item_price_section'>
                                                <p>$2.99</p>
                                                <p>/ month</p>
                                            </div>
                                            <input type='radio' id='price_1' name='package_group' />
                                        </div>
                                    </div>
                                    <div class='offer_status'>
                                        <p>Regular Price:<span>$16</span></p>
                                        <div></div>
                                        <p>Your Total:<span>Free Trial</span></p>
                                    </div>
                                    <div class='offer_controller'>
                                        <div class='offer_button_group'>
                                            <button>Skip, Show me next offer</button>
                                            <button>Yes, upgrade my offer</button>
                                        </div>
                                        <p>HURRY! SALE ENDS IN <span id='offer_end_timer'>00:00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='credit_alert_section'>
                    <div class='credit_alert_item'>
                        <div class='icon_container'>
                            <img src='images/thumb_up.png' />
                        </div>
                        <div class='credit_alert_text'>
                            <p>100%<br/>Satisfaction</p>
                        </div>
                    </div>
                    <div class='credit_alert_item'>
                        <div class='icon_container'>
                            <img src='images/assignment_return.png' />
                        </div>
                        <div class='credit_alert_text'>
                            <p>Free<br/>Returns</p>
                        </div>
                    </div>
                    <div class='credit_alert_item'>
                        <div class='icon_container'>
                            <img src='images/payments.png' />
                        </div>
                        <div class='credit_alert_text'>
                            <p>Safe<br/>Payments</p>
                        </div>
                    </div>
                </div>
                <div class='sale_experience_container'>
                    <p><span>99%</span> of our happy customers took this offer to ensure a convenient self-care.</p>
                </div>
                <div class='offer_users_feedback_horizontal_bar'>
                    <p class='offer_users_feedback_title'>What customers say about us</p>
                    <div class='offer_users_feedback_group'>
                        <div class='offer_users_feedback_item'>
                            <div class='feedback_content'>
                                <div class='user_avatar'>
                                    <img src='images/avt-1.jpg' alt='' />
                                    <img src='images/green_checked.png' alt='' />
                                </div>
                                <div class='user_feedback'>
                                    <div class='name_title'>
                                        <p>Chris Stevens</p>
                                        <div class='feedback_status_mobile'>
                                            <img src='images/green_star.png' alt='' />
                                            <p>Trustpilot</p>
                                        </div>
                                    </div>
                                    <div class='rate_section'>
                                        <div class='rate_stars'>
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                        </div>
                                        <p>09 October,2022</p>
                                    </div>
                                    <p>Great Vpn Service. i use it for all of my devices: Laptop, Desktop and my mobile Phone.</p>
                                </div>
                            </div>
                            <div class='feedback_status_pc'>
                                <img src='images/green_star.png' alt='' />
                                <p>Trustpilot</p>
                            </div>
                        </div>
                        <div class='offer_users_feedback_item'>
                            <div class='feedback_content'>
                                <div class='user_avatar'>
                                    <img src='images/avt-2.jpg' alt='' />
                                    <img src='images/green_checked.png' alt='' />
                                </div>
                                <div class='user_feedback'>
                                    <div class='name_title'>
                                        <p>Ayylah Brooks</p>
                                        <div class='feedback_status_mobile'>
                                            <img src='images/green_star.png' alt='' />
                                            <p>Trustpilot</p>
                                        </div>
                                    </div>
                                    <div class='rate_section'>
                                        <div class='rate_stars'>
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                        </div>
                                        <p>24 October,2022</p>
                                    </div>
                                    <p>Good Stable and realiable VPN Service..</p>
                                </div>
                            </div>
                            <div class='feedback_status_pc'>
                                <img src='images/green_star.png' alt='' />
                                <p>Trustpilot</p>
                            </div>
                        </div>
                        <div class='offer_users_feedback_item'>
                            <div class='feedback_content'>
                                <div class='user_avatar'>
                                    <img src='images/avt-3.jpg' alt='' />
                                    <img src='images/green_checked.png' alt='' />
                                </div>
                                <div class='user_feedback'>
                                    <div class='name_title'>
                                        <p>Henry Davids</p>
                                        <div class='feedback_status_mobile'>
                                            <img src='images/green_star.png' alt='' />
                                            <p>Trustpilot</p>
                                        </div>
                                    </div>
                                    <div class='rate_section'>
                                        <div class='rate_stars'>
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                            <img src='images/orange_star.png' alt='' />
                                        </div>
                                        <p>3 November,2022</p>
                                    </div>
                                    <p>Easy to Install, fast connect, no annyoning ads, its totally free excellent!</p>
                                </div>
                            </div>
                            <div class='feedback_status_pc'>
                                <img src='images/green_star.png' alt='' />
                                <p>Trustpilot</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img id='#trust_badge' src='images/trust-badges.png' alt='' />
            </div>
            <script src="js/survey-site.js?v=18" async></script>
        </section>
        <div class="cookie-consent">
            <div class="cookie-consent__text">
                <p>This website uses cookies to ensure you get the best experience on our website. <a href="./cookie.html" target="_blank">Learn more</a></p>
            </div>
            <div class="cookie-consent__btn">
                <div> Got it!</div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/survey-no-notification.js" defer="defer"></script>
        <script type="text/javascript">
            var one = 0;
            var ten = 0;
            var hundered = 6;
            var intervalId = setInterval(function () {
                time();
            }, .7);

            function time() {
                one--;

                if (one == -1) {
                    ten = ten - 1;
                    one = 0 + 9;
                }

                if (ten == -1) {
                    hundered = hundered - 1;
                    ten = 0 + 9;
                }

                var wholeNum = hundered + '' + ten + '' + one;

                if (wholeNum == 250) {
                    clearInterval(intervalId);
                }

                $('.timer').html('<span>' + hundered + '</span><span>' + ten + '</span><span>' + one + '</span>');
            }

            var spd = 1000;
            var spdVal = 1;
            var cntDown = 59 * 60 * spdVal;

            cntDown += 7;
            setInterval(function () {
                var hr, mn, sc, ms;

                cntDown--;

                if (cntDown < 0) return false;

                hr = Math.floor((cntDown / spdVal) / 3600);
                mn = Math.floor(((cntDown / spdVal) - hr * 3600) / 60);
                sc = Math.floor((cntDown / spdVal) - hr * 3600 - mn * 60);
                hr = (hr < 10 ? '0' + hr : hr);
                mn = (mn < 10 ? '0' + mn : mn);
                sc = (sc < 10 ? '0' + sc : sc);
                ms = Math.floor(cntDown % spdVal);
                ms = (ms < 10 ? '0' + ms : ms);

                document.getElementById('offer_end_timer').innerHTML = mn + ':' + sc;
                document.getElementById('offer_end_timer1').innerHTML = mn + ':' + sc;
                document.getElementById('offer_clock').innerHTML = hr + ' : ' + mn + ' : ' + sc;
            }, spd);
            document.getElementById('price_12').checked = true;
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>