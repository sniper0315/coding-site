const DOMAIN_MONETIZATION_ONCLICK = 'inoradde.com';
window.surveyData = {
    adex: 1,
    adex_alert_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4453095/?var={zone}&ymid={request_var}`,
    adex_warning_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4453095/?var={zone}&ymid={request_var}`,
    id: 0,
    creative: 0,
    comment: "VPN Survey - Utilities and Antivirus",
    push_zone: 4844753,
    reverse_zone: 4268583,
    autoexit: 4268586,
    autoexit_step: 4879021,
    popunder_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268588/?var={zone}&ymid={request_var}`,
    lead: { not_unique: { redirect_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268580/?var={zone}&ymid={request_var}` } },
    title: "Did you know cybersecurity professionals will be the highest-paid specialists in 2022?",
    subtitle: "Take this little quiz to find out if you need a VPN service.",
    logo_text: "Utilities and Security",
    alert: {
        welcome: `<h1 class="alert-title">NOTIFICATION</h1>
        <p class="alert-item">75% of passwords used on the Internet may not be protected enough.</p>
        <p>Complete the survey and find out how much you are protected from unauthorized access to your accounts.</p>`,
        welcomebtn: "Continue",
    },
    main: {
        type: "question",
        text: "What is your gender?",
        options: [
            { type: "button", text: "Man", audience_id: [60623, 61427], action: { goto: "step2_man" } },
            { type: "button", text: "Woman", audience_id: [60624, 61428], action: { goto: "step2_woman" } },
        ],
    },
    step2_man: {
        type: "question",
        text: "How old are you?",
        options: [
            {
                type: "button",
                text: "less than 18 years",
                audience_id: [61421, 60625, 60999],
                action: { redirect_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4310725/?var={zone}&ymid={request_var}`, popunder_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4310736/?var={zone}&ymid={request_var}` },
            },
            { type: "button", text: "18-29 years", audience_id: [62180, 62377, 68423, 78096], action: { goto: "step5" } },
            { type: "button", text: "30-49 years", audience_id: [62181, 62380, 68425, 78097], action: { goto: "step5" } },
            { type: "button", text: "50-80 years", audience_id: [62182, 68426, 78098], action: { goto: "step5" } },
        ],
    },
    step2_woman: {
        type: "question",
        text: "How old are you?",
        options: [
            {
                type: "button",
                text: "less than 18 years",
                audience_id: [61421, 62387, 60625, 60999, 62386, 62387],
                action: { redirect_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4310725/?var={zone}&ymid={request_var}`, popunder_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4310736/?var={zone}&ymid={request_var}` },
            },
            { type: "button", text: "18-29 years", audience_id: [62180, 62382, 68427, 78100], action: { goto: "step5" } },
            { type: "button", text: "30-49 years", audience_id: [62181, 62383, 78101], action: { goto: "step5" } },
            { type: "button", text: "50-80 years", audience_id: [62182, 62384, 78102], action: { goto: "step5" } },
        ],
    },
    step5: {
        type: "question",
        text: "What can a virus do?",
        options: [
            { type: "button", text: "Mine cryptocurrency", audience_id: 0, action: { goto: "step6" } },
            { type: "button", text: "Steal passwords", audience_id: 0, action: { goto: "step6" } },
            { type: "button", text: "Pay off a debt", audience_id: 0, action: { goto: "step6" } },
            { type: "button", text: "Play a game", audience_id: 0, action: { goto: "step6" } },
        ],
    },
    step6: {
        type: "question",
        text: "What would you do if you thought there was a virus on your computer?",
        options: [
            { type: "button", text: "Do nothing", audience_id: 0, action: { goto: "step7" } },
            { type: "button", text: "Destroy the computer", audience_id: 0, action: { goto: "step7" } },
            { type: "button", text: "Run a virus scan", audience_id: 0, action: { goto: "step7" } },
            { type: "button", text: "Reformat the hard drive", audience_id: 0, action: { goto: "step7" } },
        ],
    },
    step7: {
        type: "question",
        text: "Cybercriminals only target large companies. True or False?",
        options: [
            { type: "button", text: "TRUE", audience_id: 0, action: { goto: "stepFinal" } },
            { type: "button", text: "FALSE", audience_id: 0, action: { goto: "stepFinal" } },
        ],
    },
    stepFinal: {
        type: "thank_you",
        text: "",
        content: `<div style="text-align: center; font-size:2rem; margin:auto; max-width:400px;">
                    <p style="font-size:2rem;">
                        <span style="font-size:3rem">Your Quiz Result:</span>
                        <br>
                        <br>
                        You've learned a lot about Information Security on the Internet.
                        <br>
                        <br>
                        Personal offer:
                        <br>
                        We recommend you: Try Antivirus Software.
                    </p>
                </div>`,
        timeout: 40,
        timeout_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268576/?var={zone}&ymid={request_var}`,
        timeout_conversion: 1,
        progress_title: "Please wait...",
        progress_texts: ["Wait... Checking answers", "Wait... Counting your score"],
        progress_content: "",
        options: [{ type: "button", text: "Proceed", audience_id: "61426", action: { conversion: 1, redirect_url: `https://${DOMAIN_MONETIZATION_ONCLICK}/4268576/?var={zone}&ymid={request_var}` } }],
    },
};
