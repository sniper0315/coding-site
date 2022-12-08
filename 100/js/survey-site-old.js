! function() {
    "use strict";
    //offer_id=112779&geo=CL&s=577980093520244903&z=4937745&b=13161297&campaignid=5625682&var=3425382&ymid=577980093520244903&var_3={var_3}&ntr=1&vpn=1&abtest=2912000
    var offerid=112779;
    var geo = 'CL';
    var s = 577980093520244903;
    var z = 4937745;
    var b = 13161297;
    var campaignid=5625682
    var url_var=3425382
    var ymid=577980093520244903
    var ntr=1
    var vpn=1
    var ip='';
    var abtest=2912000
    var country= 'RO';
    var city = 'CL';
    var browser;


    var e, n = {
            4116: function(e, n, o) {
                o.d(n, {
                    x: function() {
                        return r
                    }
                });
                var a = function(e) {
                        var n = document.createElement("script");
                        n.src = "//".concat(window.global_vars.domains.vignette, "/401/").concat(e, "?var=").concat(z, "&ymid=").concat(url_var);
                        try {
                        //55    (document.body || document.documentElement).appendChild(n)
                        } catch (e) {
                            console.log(e)
                        }
                    },
                    r = function() {
                        window.addEventListener("message", (function(e) {
                            if (e.data.vignette) {
                            //55    "4619,2897,289701,5522,5733".includes(offerid) && (289701 == offerid ? Math.floor(100 * Math.random()) < 50 && a(e.data.vignette) : a(e.data.vignette))
                            }
                        }))
                    }
            }
        },
        o = {};

    function a(e) {
        var r = o[e];
        if (void 0 !== r) return r.exports;
        var t = o[e] = {
            exports: {}
        };
        return n[e](t, t.exports, a), t.exports
    }
    a.d = function(e, n) {
            for (var o in n) a.o(n, o) && !a.o(e, o) && Object.defineProperty(e, o, {
                enumerable: !0,
                get: n[o]
            })
        }, a.o = function(e, n) {
            return Object.prototype.hasOwnProperty.call(e, n)
        }, e = a(4116),
        function() {
            var n, o, a, r = new URL(window.location.href),
                t = document.querySelector(".body-wrapper"),
                i = r.searchParams.get("theme"),
                c = r.searchParams.get("ip") || (null === (n = ip) || void 0 === n ? void 0 : ip),
                d = r.searchParams.get("vpn") || (null === (o = vpn) || void 0 === o ? void 0 : vpn);
            if (i && i.match(/dark-v2-geo-in/g)) {
                var l = document.createElement("div");
                if (l.className = "geolocation content", window.global_vars.geoIp.countryName || window.global_vars.geoIp.countryCode) {
                    var s = document.createElement("div");
                    if (s.className = "geolocation__country", window.global_vars.geoIp.countryCode) {
                        var u = document.createElement("img");
                        u.className = "geolocation__flag", u.src = "/img/flag/".concat(window.global_vars.geoIp.countryCode.toLowerCase(), ".png"), s.appendChild(u)
                    }
                    var m = document.createElement("span");
                    m.innerHTML = window.global_vars.geoIp.countryName || window.global_vars.geoIp.countryCode, s.appendChild(m), l.appendChild(s)
                }
                if (window.global_vars.geoIp.city) {
                    var p = document.createElement("div");
                    p.className = "geolocation__city";
                    var w = document.createElement("img");
                    w.className = "geolocation__icon", w.src = "/img/icon/geolocation.png", p.appendChild(w);
                    var g = document.createElement("span");
                    g.innerHTML = window.global_vars.geoIp.city, p.appendChild(g), l.appendChild(p)
                }
                t.insertBefore(l, t.firstChild);
                var v = function() {
                    if (window.surveyData.marquee_text && window.global_vars.geoIp.city) {
                        var e = document.createElement("marquee");
                        e.className = "marquee", e.innerHTML = window.surveyData.marquee_text.replace("{city}", window.global_vars.geoIp.city), document.body.appendChild(e)
                    }
                };
                window.surveyReady ? v() : document.addEventListener("survey-data-ready", v)
            }
            if (d && ((a = document.createElement("style")).type = "text/css", a.innerHTML = "\n            .rain { display: none !important; }\n            .step-thank_you .survey__question-text { color:red !important; }\n            .step-thank_you .survey__button { text-transform:uppercase; font-size: 3rem; font-weight:bold; color:#fff !important; background-color: #008b24; background-image: linear-gradient(to top, #38c54a, #008b24); }\n            .step-thank_you .survey__button:hover { background-color: #008b24; }\n            .loading-screen__title, .loading-screen__content, .loading-screen__text_dynamic { color:#fff }\n        ", document.head.appendChild(a)), c) {
                var y = {
                    city: city ? city : "",
                    country: country ? country : "",
                    ip: c,
                    browser: r.searchParams.get("browser") || browser
                };
                document.addEventListener("hide-content", (function() {
                    var e = document.querySelector(".user-data-location"),
                        n = document.querySelector(".user-data-ip"),
                        o = document.querySelector(".user-data-browser");
                    e && (e.innerHTML = e.innerHTML.replace("{city}", y.country + " " + y.city)), n && (n.innerHTML = n.innerHTML.replace("{ip}", y.ip)), o && (o.innerHTML = o.innerHTML.replace("{browser}", y.browser))
                }))
            }(0, e.x)()
        }()
}();