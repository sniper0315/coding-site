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
        <link rel="stylesheet" href="css/survey.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body data-theme="dark-v2,light" class="dark-v2" data-new-gr-c-s-check-loaded="14.1073.0" data-gr-ext-installed="">
        <div class='survey_top_bar_1'>
            <div class='icon_container'>
                <img src='images/survey_icon_blue.png' alt='' />
                <p>SurveyJunkie</p>
            </div>
            <button onClick="redirectToOfferPage()">Get Offer</button>
        </div>
        <section class="survey_container">
            <div class='survey_title_bar'>
                <p class='first_title'>
                    Protect your 
                    <span>Devices</span>
                    in 
                    <span>2022</span>
                </p>
                <p>Take this free Test and find out if you are qualify for a special VPN offer to protect your device</p>
                <div class='question_center_bar_1'>
                    <div class='question_container'>
                        <div class='trade_mark_section' style='background: #D4FFEB;'>
                            <p>Trusted by startups and the world’s largest companies</p>
                            <div class='trade_mark_container'>
                                <img src='images/blockfi_mark.png' alt='' />
                                <img src='images/square_mark.png' alt='' />
                                <img src='images/udemy_mark.png' alt='' />
                            </div>
                        </div>
                        <div class='question_section_1' id='question_stages'>
                            <p>Give answers to some Questions</p>
                            <progress id='survey_quiz_progress' value='0' max='100'></progress>
                            <p id='survey_quiz_text'>Do you use your Computer over 2 hours a day?</p>
                            <button onClick="quiz_button_click('Yes')">Yes</button>
                            <button onClick="quiz_button_click('No')">No</button>
                        </div>
                        <div class='question_section_1' id='question_process'>
                            <p>Please wait while we process your answers...</p>
                            <main class='question_process_section'>
                                <p>Congratulations!</p>
                                <div class='question_process_container'>
                                    <div class='question_process_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>Answers submitted</p>
                                    </div>
                                    <div class='question_process_item'>
                                        <img src='images/green_checked.png' alt='' />
                                        <p>IP address checked</p>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
            <div class='survey_users_feedback_horizontal_bar_1'>
                <p class='survey_users_feedback_title_1'>What others have achieved with Betternet:</p>
                <div class='survey_users_feedback_group_1'>
                    <div class='survey_users_feedback_item_1'>
                        <div class='user_avatar_1'>
                            <img src='images/avt-1.jpg' alt='' />
                        </div>
                        <div class='user_feedback_1'>
                            <p>Chris Stevens</p>
                            <div class='rate_stars_1'>
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                            </div>
                            <p>Great Vpn Service. i use it for all of my devices: Laptop, Desktop and my mobile Phone.</p>
                        </div>
                    </div>
                    <div class='survey_users_feedback_item_1'>
                        <div class='user_avatar_1'>
                            <img src='images/avt-2.jpg' alt='' />
                        </div>
                        <div class='user_feedback_1'>
                            <p>Ayylah Brooks</p>
                            <div class='rate_stars_1'>
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                            </div>
                            <p>Good Stanle and realiable VPN Service.</p>
                        </div>
                    </div>
                    <div class='survey_users_feedback_item_1'>
                        <div class='user_avatar_1'>
                            <img src='images/avt-3.jpg' alt='' />
                        </div>
                        <div class='user_feedback_1'>
                            <p>Henry Davids</p>
                            <div class='rate_stars_1'>
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                                <img src='images/orange_star.png' alt='' />
                            </div>
                            <p>Earsy to Install, fast connect, no annyoning ads, its totally free excellent!</p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class='survey_footer' style='padding: 0;'>
                <div class='social_icons'>
                    <a href='https://www.twitter.com'><img src='images/black_twitter_icon.png' alt='' /></a>
                    <a href='https://www.linkedin.com'><img src='images/black_linkedin_icon.png' alt='' /></a>
                    <a href='https://www.google.com'><img src='images/black_google_icon.png' alt='' /></a>
                </div>
                <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> Surveyjunkie</p>
            </footer>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type='text/javascript'>
            const redirectToOfferPage = () => {
                window.location.href = 'offer.php';
            }
            
            const quiz_button_click = (ans) => {
                var step = window.localStorage.getItem('quiz_step');
                var answers = JSON.parse(window.localStorage.getItem('quiz_answers'));
                var qCount = parseInt(window.localStorage.getItem('quiz_count'));
                var options = window.surveyData[step].options;
                var action = options.filter((item) => item.text === ans)[0].action;

                if (answers === null) {
                    var result = [{question: step, answer: ans}];

                    window.localStorage.setItem('quiz_answers', JSON.stringify(result));
                } else {
                    answers = [...answers, {question: step, answer: ans}];
                    window.localStorage.setItem('quiz_answers', JSON.stringify(answers));
                }
                
                if (action.goto !== 'stepFinal') {
                    window.localStorage.setItem('quiz_step', action.goto);
                    document.getElementById('survey_quiz_text').innerHTML = window.surveyData[action.goto].text;
                    qCount += 1;
                    document.getElementById('survey_quiz_progress').value += 20;
                    window.localStorage.setItem('quiz_count', qCount.toString());
                } else {
                    document.getElementById('question_stages').style='display:none;';
                    document.getElementById('question_process').style='display:flex;';
                    setInterval(function() {
                        redirectToOfferPage();
                    }, 1000);
                }
            }

            const testFunc = () => {
                var quizTextElement = document.getElementById('survey_quiz_text');
                var step = window.localStorage.getItem('quiz_step');

                console.log('$$$$$$$$ => ', step)
                quizTextElement.innerHTML = window.surveyData.main.text;
                window.localStorage.setItem('quiz_step', 'main');
                window.localStorage.setItem('quiz_count', '1');
                window.localStorage.removeItem('quiz_answers')
            }

            document.addEventListener("survey-data-ready", testFunc);
        </script>
    </body>
</html>