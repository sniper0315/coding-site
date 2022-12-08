const DOMAIN_MONETIZATION_ONCLICK = 'inoradde.com';
window.surveyData = {
    adex: 0,
    adex_alert_url: '',
    adex_warning_url: '',
    id: 0,
    creative: 0,
    comment: 'VPN Survey',
    push_zone: 4844753,
    reverse_zone: 4268583,
    autoexit: 4268586,
    autoexit_step: 4879021,
    //popunder_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268588/?var={zone}&ymid={request_var}`,
    //lead: { not_unique: { redirect_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268580/?var={zone}&ymid={request_var}` } },
    title: 'Protect Your Devices in 2022',
    subtitle: "Take this FREE test and find out if you're qualify for a special VPN offer to protect your devices",
    logo_text: `<img src='images/topline.svg' class='img-fluid'>`,
    alert: {
        welcome: `<h1 class="alert-title">NOTIFICATION</h1>
        <p class="alert-item">75% of computers used on the Internet may not be protected enough.</p>
        <p>Complete the survey and find out how much you are protected from unauthorized access to your devices.</p>`,
        welcomebtn: 'Continue'
    },
    main: {
        type: 'question',
        text: '1- Do you use your computer over 2 hours a day?',
        options: [
            { type: 'button', text: 'Yes', audience_id: [60623, 61427], action: { goto: 'step1' } },
            { type: 'button', text: 'No', audience_id: [60623, 61427], action: { goto: 'step1' } }
        ]
    },
    step1: {
        type: 'question',
        text: '2- Do you want a safe web browsing experience?',
        options: [
            { type: 'button', text: 'Yes', audience_id: [60623, 61427], action: { goto: 'step2' } },
            { type: 'button', text: 'No', audience_id: [60623, 61427], action: { goto: 'step2' } }
        ]
    },
    step2: {
        type: 'question',
        text: '3- Do you want privacy online? ',
        options: [
            { type: 'button', text: 'Yes', audience_id: [62182, 68426, 78098], action: { goto: 'step3' } },
            { type: 'button', text: 'No', audience_id: [60623, 61427], action: { goto: 'step3' } }
        ]
    },
    step3: {
        type: 'question',
        text: '4- Do you want your data collected by Facebook and other sites?',
        options: [
            { type: 'button', text: 'Yes', audience_id: [62182, 62384, 78102], action: { goto: 'step4' } },
            { type: 'button', text: 'No', audience_id: [60623, 61427], action: { goto: 'step4' } }
        ]
    },
    step4: {
        type: 'question',
        text: '5- Claim a free VPN trial by clicking Yes below',
        options: [
            { type: 'button', text: 'Yes', audience_id: 0, action: { goto: 'stepFinal' } },
            { type: 'button', text: 'No', audience_id: [60623, 61427], action: { goto: 'stepFinal' } }
        ]
    },

    stepFinal: {
        type: 'thank_you',
        text: '',
        content: `<div style="text-align: center; font-size:2rem; margin:auto; max-width:400px;">
                    <img src="images/betternet-logo.png" class="img-fluid better_net_logo"/>
                    
                </div><div class="reasons"><ul>
<li><i class="fa-solid fa-check"></i> <span>Your web browser will be secure</span></li>
<li><i class="fa-solid fa-check"></i> <span>Your data will be protected</span></li>
<li><i class="fa-solid fa-check"></i> <span>Guarantee Your Privacy & Anonymity</span></li>
</ul></div>`,
        timeout: 999999999999999999,
        //        timeout_url: "https://toplinesurvey.com/index2.php?v=abc",
        //      timeout_conversion: 1,
        progress_title: 'Please wait...',
        progress_texts: ['Wait... Checking answers', 'Wait... Counting your score'],
        progress_content: '',
        options: [{ type: 'button', text: 'Proceed', audience_id: '61426' }]
    }
};
