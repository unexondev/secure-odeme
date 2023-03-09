<!doctype html>
<html lang="tr" ng-app="sahibindenResponsive">
    <head>
        <title>sahibinden.com giriş</title>
        <script type="text/javascript" src="https://cdn-ukwest.onetrust.com/consent/9f768f58-cb4a-4de6-83e2-f8d83f22909b/OtAutoBlock.js" defer></script>
        <script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" data-document-language="true" type="text/javascript" charset="UTF-8" data-domain-script="9f768f58-cb4a-4de6-83e2-f8d83f22909b" defer></script>
        <script type="text/javascript">
            window.cmpData$ = new(function() {
                var data = {
                    isConsentAccepted: false
                };
                this.getData = function() {
                    if (window.OptanonActiveGroups) {
                        data.isConsentAccepted = !!OptanonActiveGroups.match(/,C0004,/);
                    }
                    return data;
                };
            });

            function OptanonWrapper() {
                //handle cmp event here
            };
            // bk_xxx functions defined in gtm(google tag manager)
            window.DMP = new(function() {
                this.isReady = function() {
                    return !!window['bk_addPageCtx'];
                }
                this.getResults = function() {
                    return window['bk_results'];
                }
                this.addPageCtx = function(phint, value) {
                    execute("bk_addPageCtx", arguments);
                };
                this.async = function() {
                    execute("bk_async", null)
                };
                this.doTag = function(p1, p2, p3, p4, p5, p6, p7, p8, p9) {
                    executeBKTAG("doTag", arguments);
                };
                var execute = function(method, params) {
                    if (cmpData$.getData().isConsentAccepted) {
                        var fn = window[method];
                        fn && fn.apply(null, params);
                    }
                };
                var executeBKTAG = function(method, params) {
                    if (cmpData$.getData().isConsentAccepted) {
                        var bktag = window['BKTAG'];
                        bktag && bktag[method].apply(bktag, params);
                    }
                };
            });
        </script>
        <script src="https://securepubads.g.doubleclick.net/tag/js/gpt.js" type="text/javascript" defer></script>
        <script>
            //initials
            window.Criteo = window.Criteo || {};
            window.Criteo.events = window.Criteo.events || [];
            window.googletag = window.googletag || {};
            window.googletag.cmd = window.googletag.cmd || [];
            window.pbjs = window.pbjs || {};
            window.pbjs.que = window.pbjs.que || [];
            var setPrebidGDPR = function(enable) {
                var cmpConfig = null;
                if (enable) {
                    cmpConfig = {
                        gdpr: {
                            cmpApi: 'static',
                            consentData: {
                                getTCData: {
                                    tcString: 'CPNBuu4PNBuu4AcABBENBtCgAEAAAAAAACaIAAAAAAAA',
                                    gdprApplies: true
                                }
                            }
                        }
                    };
                }
                pbjs.setConfig({
                    consentManagement: cmpConfig
                })
            };

            function resolvePersonalizedAdStatus(isConsentAccepted) {
                return isConsentAccepted ? 0 : 1;
            }
            window.googletag.cmd.push(function() {
                var personalizedAdStatus = resolvePersonalizedAdStatus(cmpData$.getData().isConsentAccepted);
                googletag.pubads().setRequestNonPersonalizedAds(personalizedAdStatus);
                setPrebidGDPR(personalizedAdStatus);
            });
            var customConfigObject = {
                "buckets": [{
                    "precision": 2,
                    "min": 0,
                    "max": 10,
                    "increment": 0.01
                }, {
                    "precision": 2,
                    "min": 10,
                    "max": 25,
                    "increment": 0.05
                }, {
                    "precision": 2,
                    "min": 25,
                    "max": 50,
                    "increment": 0.1
                }, {
                    "precision": 2,
                    "min": 50,
                    "max": 100,
                    "increment": 0.25
                }]
            };
            var dfpLibraryHelper = (function() {
                function createCriteoEvent(fn) {
                    window.Criteo.events.push(fn);
                }

                function createGtpEvent(fn) {
                    window.googletag.cmd.push(fn);
                }

                function createPrebidEvent(fn) {
                    window.pbjs.que.push(fn);
                }

                function loadJs(url, useSSL, injectHead) {
                    return new Promise(function(resolve, reject) {
                        var head = document.getElementsByTagName('head');
                        var script = document.createElement('script');
                        script.setAttribute('type', 'text/javascript');
                        var sslFlag = (useSSL ? true : 'https:' == document.location.protocol);
                        script.src = (sslFlag ? 'https:' : 'http:') + '//' + url;
                        script.async = true;
                        script.onload = resolve;
                        script.onerror = reject;
                        if (injectHead) {
                            head[0].appendChild(script);
                        } else {
                            var node = document.getElementsByTagName('script')[0];
                            node.parentNode.insertBefore(script, node);
                        }
                    });
                }
                var criteoApi = {
                    initCriteSlots: initCriteSlots
                };
                var gptApi = {
                    addPubServiceSlots: addPubServiceSlots,
                    displaySlots: displaySlots,
                    refreshSlots: refreshSlots,
                    refreshSlotsForEach: refreshSlotsForEach,
                    clearSlots: clearSlots
                };
                var prebidApi = {
                    requestBids: requestBids
                };
                var lastAdUnits = [];

                function requestBids(adUnits) {
                    var PREBID_TIMEOUT = 2000;
                    pbjs.setConfig({
                        priceGranularity: customConfigObject,
                        enableSendAllBids: true,
                        bidderTimeout: PREBID_TIMEOUT,
                        timeoutBuffer: 300,
                        currency: {
                            adServerCurrency: 'TRY'
                        }
                    });
                    lastAdUnits.forEach((function(value) {
                        pbjs.removeAdUnit(value.code);
                    }));
                    lastAdUnits = adUnits;
                    adUnits.forEach(function(x) {
                        if (!x.code) throw 'code must be provided';
                        pbjs.addAdUnits(x);
                    });
                    var promise = new Promise(function(resolve, reject) {
                        pbjs.requestBids({
                            bidsBackHandler: function() {
                                createGtpEvent(function() {
                                    pbjs.setTargetingForGPTAsync();
                                    resolve();
                                });
                            },
                            timeout: PREBID_TIMEOUT
                        });
                    });
                    return promise;
                }

                function DeferWrapper() {
                    this.init();
                }
                DeferWrapper.prototype.init = function() {
                    var self = this;
                    var resolveFn;
                    var rejectFn;
                    var promise = new Promise(function(resolve, reject) {
                        resolveFn = resolve;
                        rejectFn = reject;
                    });
                    Object.defineProperty(self, 'promise', {
                        value: promise,
                        writable: false
                    });
                    DeferWrapper.prototype.resolve = function(x) {
                        resolveFn(x);
                    };
                    DeferWrapper.prototype.reject = function(x) {
                        rejectFn(x);
                    };
                };

                function defer() {
                    return new DeferWrapper();
                }

                function DfpHelperNew() {
                    this.gptApi = gptApi;
                    this.prebidApi = prebidApi;
                    this.criteoApi = criteoApi;
                }
                DfpHelperNew.prototype.defer = defer;
                DfpHelperNew.prototype.initPrebid = function(useSSL, injectHead) {
                    return new Promise(function(resolve, reject) {
                        createPrebidEvent(function() {
                            resolve();
                        })
                    })
                };

                function buildCriteoParams(slotConfigs) {
                    var placements = slotConfigs.map(function(eachSlot) {
                        return buildCriteoParam(eachSlot);
                    });
                    var bidRequest = {
                        "placements": placements
                    };
                    return bidRequest;
                }

                function buildCriteoParam(slotConfig) {
                    return {
                        slotid: slotConfig.slotId,
                        zoneid: slotConfig.zoneId
                    }
                }

                function initCriteSlots(slotConfigs, isResponsiveSearch) {
                    var bidRequest = buildCriteoParams(slotConfigs);
                    return makeCriteoRequest(bidRequest, isResponsiveSearch);
                }
                DfpHelperNew.prototype.initCriteo = function(useSSL, injectHead) {
                    return new Promise(function(resolve, reject) {
                        loadJs('static.criteo.net/js/ld/publishertag.js', useSSL, injectHead).then(function() {
                            createCriteoEvent(function() {
                                resolve();
                            })
                        }).catch(function() {
                            reject();
                        })
                    });
                };
                DfpHelperNew.prototype.initGpt = function(useSSL, injectHead) {
                    return new Promise(function(resolve, reject) {
                        createGtpEvent(function() {
                            resolve();
                        });
                    });
                }

                function addPubServiceSlots(slots) {
                    slots.forEach(function(value) {
                        if (!value.__slotServiceDefined) {
                            value.addService(googletag.pubads());
                            value.__slotServiceDefined = true
                        }
                    })
                }

                function clearSlots(slots) {
                    if (googletag) {
                        googletag.pubads().clear(slots);
                    }
                }

                function displaySlots(slots) {
                    slots.forEach(function(value) {
                        googletag.display(value);
                    });
                }

                function refreshSlots(slots) {
                    googletag.pubads().refresh(slots)
                }

                function refreshSlotsForEach(slots) {
                    slots.forEach(function(x) {
                        googletag.pubads().refresh([x])
                    });
                }

                function makeCriteoRequest(bidRequest, isResponsiveSearch) {
                    var result = {
                        resolved: false,
                        criteoTimeout: false
                    };
                    var delayPromise = new Promise(function(resolveFn) {
                        setTimeout(function() {
                            if (!result.resolved) {
                                result.resolved = true;
                                result.criteoTimeout = true;
                                resolveFn(result);
                            }
                        }, (isResponsiveSearch ? 600 : 500))
                    });
                    var criteoRequest = new Promise(function(resolveFn) {
                        Criteo.SetLineItemRanges("0..10:0.01;10..25:0.05;25..50:0.10;50..100:0.25");
                        Criteo.RequestBids(bidRequest, function(x) {
                            if (!result.resolved) {
                                result.resolved = true;
                                setTimeout(function() {
                                    Criteo.SetDFPKeyValueTargeting();
                                    resolveFn(result);
                                })
                            }
                        });
                    });
                    return Promise.race([criteoRequest]);
                }
                return new DfpHelperNew();
            })();
        </script>
        <script>
            window.abFlags = {};
        </script>
        <link rel="dns-prefetch" href="//s0.shbdn.com">
        <link rel="dns-prefetch" href="//static.sahibinden.com">
        <link rel="dns-prefetch" href="//www.googletagservices.com">
        <link rel="dns-prefetch" href="//www.googletagmanager.com">
        <link rel="dns-prefetch" href="//banaozel.sahibinden.com">
        <link rel="dns-prefetch" href="//adservice.google.com.tr">
        <link rel="dns-prefetch" href="//securepubads.g.doubleclick.net">
        <link rel="dns-prefetch" href="//tags.bluekai.com">
        <link rel="dns-prefetch" href="//connect.facebook.net">
        <link rel="dns-prefetch" href="//www.google-analytics.com">
        <link rel="dns-prefetch" href="//cdn-ukwest.onetrust.com">
        <link rel="preconnect" href="https://image5.sahibinden.com">
        <link rel="preconnect" href="https://banaozel.sahibinden.com">
        <link rel="preconnect" href="https://s0.shbdn.com">
        <link rel="preconnect" href="https://adservice.google.com">
        <link rel="preconnect" href="https://adx.adform.net">
        <link rel="preconnect" href="https://bidder.criteo.com">
        <link rel="preconnect" href="https://cdn-ukwest.onetrust.com">
        <link rel="preconnect" href="https://static.criteo.net">
        <link rel="preconnect" href="https://gum.criteo.com">
        <link rel="preconnect" href="https://static.sahibinden.com">
        <link rel="preconnect" href="https://pagead2.googlesyndication.com">
        <link rel="preconnect" href="https://securepubads.g.doubleclick.net">
        <link rel="preconnect" href="https://www.googletagservices.com">
        <link rel="preconnect" href="https://tpc.googlesyndication.com">
        <link rel="preconnect" href="https://adservice.google.com">
        <link rel="preconnect" href="https://connect.facebook.net">
        <link rel="preconnect" href="https://tags.bluekai.com">
        <link rel="preconnect" href="https://www.facebook.com">
        <link rel="preconnect" href="https://www.googletagmanager.com">
        <link rel="preconnect" href="https://tags.bkrtx.com">
        <link rel="preconnect" href="https://stags.bluekai.com">
        <link rel="preconnect" href="https://googleads.g.doubleclick.net">
        <link rel="preconnect" href="https://www.googleadservices.com">
        <link rel="preconnect" href="https://bid.g.doubleclick.net">
        <link rel="preconnect" href="https://www.google-analytics.com">
        <link rel="preconnect" href="https://cm.g.doubleclick.net">
        <link rel="preconnect" href="https://stats.g.doubleclick.net">
        <link rel="preconnect" href="//connect.facebook.net">
        <link rel="preload" href="https://securepubads.g.doubleclick.net/tag/js/gpt.js" as="script">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="referrer" content="no-referrer-when-downgrade" />
        <meta id="Content-Language" http-equiv="Content-Language" content="tr" />
        <meta name="rating" content="general" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="revisit-after" content="1 Days" />
        <link rel="shortcut icon" href="https://www.sahibinden.com/favicon.ico" />
        <link rel="search" type="application/opensearchdescription+xml" title="sahibinden.com" href="https://www.sahibinden.com/static/opensearch" />
        <meta name="robots" content="NOODP,index,follow" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="canonical" href="https://www.sahibinden.com/">
        <script type="text/javascript">
            /*
<![CDATA[*/
            function getBanner(zoneId, extraParams, targetId) {};
            /*]]>*/
            undefined
        </script>undefined
        <meta property="al:ios:url" content="sahibinden://" />undefined
        <meta property="al:ios:app_store_id" content="418535251" />undefined
        <meta property="al:ios:app_name" content="sahibinden.com mobil" />undefined
        <meta property="al:android:url" content="sahibinden://" />undefined
        <meta property="al:android:package" content="com.sahibinden" />undefined
        <meta property="al:android:app_name" content="sahibinden.com" />undefined
        <!-- Real User Monitoring -->undefined<script>
            var failedAssets = [];
            window.addEventListener('error', function(event) {
                if (event.target.tagName && event.target.tagName.toLowerCase() === 'img') {
                    failedAssets.push(event.target.src);
                }
            }, {
                capture: true
            }, true)
            window.shbdn_rum = window.shbdn_rum || {};
            window.shbdn_rum.requestType = "GENERIC";
        </script>undefined<script type="text/javascript">
            var SahibindenCfg = SahibindenCfg || {};
            SahibindenCfg.searchBaseUrl = '/arama';
            SahibindenCfg.defaultSorting = '';
            SahibindenCfg.facetedSearch = {};
            SahibindenCfg.facetedSearch.ajaxTimeout = 60000;
            SahibindenCfg.facetedSearch.cityListUrl = '/ajax/search/locationFacets';
            SahibindenCfg.facetedSearch.citySearchUrl = '/ajax/location/search/city';
            SahibindenCfg.widgets = {};
            SahibindenCfg.enableWidget = function(widget) {
                this.widgets[widget] = true;
            };
            SahibindenCfg.isWidgetEnabled = function(widget) {
                return this.widgets[widget] === true;
            };
        </script>undefined
        <!-- bundles -->undefined
        <!-- asset manager injected css [responsive] -->undefined
        <link href="https://s0.shbdn.com/assets/responsive:d5daa5b8fc5792debc9c74ffa100552c.css" media="screen, print" rel="stylesheet" type="text/css">
        <!-- asset manager injected css [responsiveLogin] -->
        <link href="https://s0.shbdn.com/assets/responsiveLogin:202301305278ec74f3dd60d7c099444c.css" media="screen, print" rel="stylesheet" type="text/css">
        <!-- bundles -->
        <style>
            [ng\:cloak],
            [ng-cloak],
            [data-ng-cloak],
            [x-ng-cloak],
            .ng-cloak,
            .x-ng-cloak {
                display: none !important;
            }

            #onetrust-consent-sdk {
                display: none;
            }

            #onetrust-consent-sdk.visible {
                display: block;
            }
        </style>
        <script>
            var smu = 'sahibinden://';
        </script>
    </head>
    <body ng-controller="ResponsiveCtrl" class="no-width  " ng-class="{'noscroll': showMenu || shareBoxShown.visible || $root.modalShown}">
        <noscript>
            <style>
                .navigation.hide-menu {
                    display: none;
                }
            </style>
        </noscript>
        <div class="smart-app-banner" ng-show="showBanner && true" ng-class="{visible: showBanner && true}" ng-cloak="true">
            <a ng-click="hideBanner();" class="icon close-button"></a>
            <h3>
                <span ng-show="appText">
                    <i ng-bind="appText + ' Uygulaması'"></i> sahibinden.com </span>
            </h3>
            <a class="btn btn-form app-button" ng-click="openAppUrl('')">Uygulamada Aç</a>
        </div>
        <script type="text/javascript">
            var knoValue = getCookie('kno');
            var accTypeValue = getCookie('acc_type');

            function getCookie(cname) {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) {
                        return c.substring(name.length, c.length);
                    }
                }
                return "";
            }
            var dfpTagUtils = (function() {
                var loggedUser = true;
                var kno = knoValue.trim();
                if (knoValue && knoValue !== "") {
                    loggedUser = true;
                    kno = knoValue.trim();
                } else {
                    loggedUser = false;
                }

                function getBaseDfpTags() {
                    var dfpTargetingTags = {};
                    if (loggedUser && kno && kno.length > 0) {
                        dfpTargetingTags.kno = kno;
                    }
                    if (accTypeValue && accTypeValue !== "") {
                        dfpTargetingTags['acc_type'] = accTypeValue;
                    }
                    return dfpTargetingTags;
                }

                function setDfpTargetingTags() {
                    var tags = getBaseDfpTags();
                    if (window.googletag && googletag.apiReady) {
                        for (var key in tags) {
                            googletag.pubads().setTargeting(key, tags[key]);
                        }
                    }
                }
                //initial tags for every dfp
                googletag.cmd.push(function() {
                    setDfpTargetingTags();
                });
                return {
                    mergeDfpTags: function(tags) {
                        if (!tags) {
                            return {};
                        }
                        tags.loggedUser = loggedUser;
                        if (!tags.hasOwnProperty('kno') && loggedUser) {
                            tags.kno = kno;
                        }
                    }
                }
            })();
        </script>
        <script type="text/javascript">
            var invoked = false;
            document.addEventListener('readystatechange', function() {
                if (!invoked) {
                    dfpLibraryHelper.initGpt();
                    invoked = true;
                }
            });
        </script>
        <div class="main-content" ng-style="mainContentStyle" ng-class="{'show-banner': showBanner && true}">
            <ul class="sub-menu" viewmode="">
                <li class="showcase mui-btn" ng-class="{'active' : 'main.showcase' === activeTab}">
                    <a ng-click="$root.setPageVal('anasayfa-vitrin-ozet', 'Anasayfa Vitrin');$root.writePersonalizedShowcaseEdrForShowcaseView();" direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_vitrin" href="https://www.sahibinden.com/anasayfa-vitrin-ozet">Vitrin</a>
                </li>
                <li class="search mui-btn" ng-class="{'active' : 'main.search' === activeTab || 'main.stores' === activeTab || 'main.favorites' === activeTab}">
                    <a target="_self" href="/">Arama</a>
                </li>
                <li class="post-classified mui-btn">
                    <a s-click track-page-name="Responsive" track-event track-label="altbar_ilanver" ng-click="$root.openAppOrLightbox(mobile.postClassifiedApplink)"> İlan Ver</a>
                </li>
                <li class="services mui-btn" ng-class="{'active' : 'main.services' == activeTab, 'has-notification': $root.showNotification == true}">
                    <a ng-click="$root.setPageVal('servisler', '360 Servis Seçici');" direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_servisler" href="https://www.sahibinden.com/servisler">Servisler</a>
                </li>
                <li class="my-account mui-btn" ng-class="{'active' : 'main.myAccount' == activeTab, 'has-notification': $root.totalNotifications > 0}">
                    <a ng-click="$root.setPageVal('banaozel-ozet', 'Bana Özel');" direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_banaozel" href="https://www.sahibinden.com/banaozel-ozet"> Bana Özel</a>
                    <span data-notification-count="@{{$root.totalNotifications}}"></span>
                </li>
            </ul>
            <div ng-cloak="true">
                <dialog data-extra-class="mobile-app-download-lightbox" visible="appDialogVisible">
                    <div ng-if="mobile.isMobile">
                        <h3>Mobil Uygulamayı İndir</h3>
                        <p ng-class="{'android': mobile.isAndroid, 'ios': mobile.isIos}">
                            <span ng-hide="appDialogType == 'map'">Sahibinden.com'un mobil uygulamasını indirerek kolayca ilan verebilirsiniz.</span>
                            <span ng-show="appDialogType == 'map'">Sahibinden.com'un mobil uygulamasını indirerek kolayca haritada emlak arayabilirsiniz.</span>
                        </p>
                        <div class="action-wrapper">
                            <span ng-class="{'app-store huawei': mobile.isHuawei, 'app-store googlePlay': mobile.isAndroid, 'app-store  appleStore': mobile.isIos}"></span>
                            <a ng-hide="appDialogType == 'map'" class="btn mui-btn download-app" track-event track-page-name="app indirme" track-label="app_indir_ilan_ver" ng-click="openAppStore(mobile.postClassifiedApplink, mobile.isHuawei)">Uygulamaya Git</a>
                            <a ng-show="appDialogType == 'map'" class="btn mui-btn download-app" ng-click="openAppUrl(mapSearchUrl)">Uygulamaya Git</a>
                        </div>
                    </div>
                </dialog>
            </div>
            <div ng-controller="LoginCtrl">
                <header>
                    <a s-click="$root.goBack()" class="back-button"></a>
                    <h1 class="login-social-signin-title">Giriş Yap</h1>
                </header>
                <div class="content">
                    <div class="form-content form-wrapper-modern" ng-class="{'social-signin-form-content-padding social-signin-family-spacing': socialSignInFeatureFlag != 'SOCIAL_SIGN_IN_AB_LEGACY'}" ng-init="showBannedPopup=false">
                        <div ng-show="returnUrlMsg" class="ng-hide return-url-wrapper">
                            <p ng-bind="::returnUrlMsg"></p>
                        </div>
                        <input type="hidden" ng-init="recaptchaSiteKey = '6Ldc2L0ZAAAAAHjwIFxPenLFwsGtKq9cndWJ9UaQ'" />
                        <input type="hidden" ng-init="recaptchaSiteKeyEnterprise = '6Ld4zicdAAAAALN0_e5tuzU6t_QmQde_F2QhYjos'" />
                        <input type="hidden" ng-init="enableEnterpriseCaptcha = 'true'" />
                        <div id='recaptcha'></div>
                        <script src="https://www.google.com/recaptcha/enterprise.js?render=6Ld4zicdAAAAALN0_e5tuzU6t_QmQde_F2QhYjos"></script>
                        <input type="hidden" ng-init="enableV2Captcha = 'true'" />
                        <script src="https://www.google.com/recaptcha/api.js?hl=tr" async defer></script>
                        <input id="socialSignInFeatureFlag" type="hidden" name="socialSignInFeatureFlag" value="SOCIAL_SIGN_IN_AB_A" />
                        <input id="googleSocialId" type="hidden" name="googleSocialId" value="998609949251-di88ghsmju45dr0kh1oi42ti46k9f4nl.apps.googleusercontent.com" />
                        <input id="appleSocialId" type="hidden" name="appleSocialId" value="com.sahibinden.bireysel" />
                        <input id="authenticationError" type="hidden" name="authenticationError" value="" />
                        <input id="authenticationErrorTooManyRequest" type="hidden" name="authenticationErrorTooManyRequest" value="" />
                        <input id="authenticationWaitinApproval" type="hidden" name="authenticationWaitinApproval" value="" />
                        <div class="opening"></div>
                        <div id="loginSocialSignInSelectionPage" class="user-login guest-buy form-wrapper-modern new-login-screen with-captcha login-social-signin-input-new-change disable">
                            <div id="loginSocialSignInTab-1" class="disable">
                                <div id="loginSocialSignInTabContent" class="login-social-signin-buttons-container">
                                    <form id="loginPageSocialSignInForm" name="loginPageSocialSignInForm" class="disable" novalidate>
                                        <dl>
                                            <dd>
                                                <div class="text">
                                                    <input id="loginSelectionPageEmail" ng-class="{'ng-invalid ng-touched': loginSelectionPageEmailInvalid}" name="loginSelectionPageEmail" ng-model="loginSelectionPageEmail" ng-focus="loginSelectionPageEmailFocus" type="text" placeholder="E-posta Adresiniz" tabindex="1" autocapitalize="none" autocomplete="username" ng-change="autoFilled = false" autofill="true" required>
                                                    <label for="loginSelectionPageEmail">E-posta Adresiniz</label>
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="btn-container">
                                            <button type="button" class="btn btn-new login-with-email" id="signInWithEmail" tabindex="2" ng-click="socialButtonsClickEdr('LoginTypeSelectionForm', 'LoginWithEmailClick'); userLoginState(loginPageSocialSignInForm)"> E-Posta ile Giriş Yap </button>
                                        </div>
                                    </form>
                                    <div class="split-line">
                                        <span class="line"></span>
                                        <span class="split-text">VEYA</span>
                                        <span class="line"></span>
                                    </div>
                                    <div class="btn-email-continue-container" id="emailContinueButton" ng-click="socialButtonsClickEdr('LoginTypeSelectionForm', 'LoginWithEmailClick'); socialSignInLoginPageContinue()">
                                        <div class="icon"></div>
                                        <span>E-Posta ile Devam Et</span>
                                    </div>
                                    <div class="btn-google-container">
                                        <div class="icon"></div>
                                        <span>Google ile Devam Et</span>
                                    </div>
                                    <div class="btn-apple-container">
                                        <div class="icon"></div>
                                        <span>Apple ile Devam Et</span>
                                    </div>
                                    <div class="tab-3-info-description-container disable">
                                        <p class="set-password-container-wrap disable">
                                            <span class="set-password-google-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabını <strong>Google</strong> ile oluşturduğunuzdan Google ile devam edilebilir veya <strong>şifre belirleyerek</strong> e-posta ile giriş yapabilirsiniz. </span>
                                            <span class="set-password-apple-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabını <strong>Apple kimliğiniz</strong> ile oluşturduğunuzdan Apple ile devam edilebilir veya <strong>şifre belirleyerek</strong> e-posta ile giriş yapabilirsiniz. </span>
                                            <span class="set-password-google-and-apple-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabını <strong>Google</strong> ve <strong>Apple kimliğiniz</strong> ile oluşturduğunuzdan Google veya Apple ile devam edebilir veya <strong>şifre belirleyerek</strong> e-posta ile giriş yapabilirsiniz. </span>
                                        </p>
                                        <p class="not-set-password-container-wrap disable">
                                            <span class="set-password-google-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabına daha önce <strong>Google</strong> ile giriş yapmışsınız. </span>
                                            <span class="set-password-apple-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabına daha önce <strong>Apple kimliğiniz</strong> ile giriş yapmışsınız. </span>
                                            <span class="set-password-google-and-apple-text disable">
                                                <strong class="social-email-or-username" ng-bind="socialEmailOrUsername"></strong> hesabına daha önce <strong>Google</strong> ve <strong>Apple kimliğiniz</strong> ile giriş yapmışsınız. </span>
                                        </p>
                                    </div>
                                    <div class="btn-container tab-3-set-password-button-container disable">
                                        <a href="https://secure.sahibinden.com/sifre-belirle" class="btn btn-new login-with-email" rel="nofollow">Şifre Belirle</a>
                                    </div>
                                </div>
                            </div>
                            <div id="loginSocialSignInTabFooter-1" class="login-page-social-signin-footer disable">
                                <dl class="eula-area">
                                    <dd>
                                        <div class="checkbox">
                                            <label>
                                                <span>
                                                    <label> Google veya Apple kimliğinizle bir sonraki adıma geçmeniz halinde <a href="/sozlesmeler/bireysel-uyelik-sozlesmesi-0" rel="nofollow" target="_blank">Bireysel Hesap Sözleşmesi ve Ekleri</a>
                                                    </label> 'ni kabul etmiş sayılırsınız. </span>
                                            </label>
                                        </div>
                                    </dd>
                                </dl>
                                <p class="redirect-to-register">
                                    <span>Henüz hesabın yok mu?</span>
                                    <a class="trackClick trackId_hemen_uye_ol" data-click-event="get_odeme" href="/kayit?returnUrl=https%3A%2F%2Fwww.sahibinden.com%2Fparam-guvende%2Fhemen-al%3FclassifiedId%3D1070134328%26quantity%3D1%26sourcePage%3DCLASSIFIED_DETAIL" data-funnel-trigger-register="login" ng-click="triggerFunnel($event, 'mobileLogin', username)">Hesap Aç</a>
                                </p>
                            </div>
                            <div id="loginPageContainer" class="social-login-two-tab">
                                <form id="loginForm" name="loginForm" novalidate="novalidate" ng-class="{&#39;submitted&#39;: submitted}" action="https://secure.sahibinden.com/giris" method="post">
                                    <dl>
                                        <dd>
                                            <div class="text">
                                                <input id="username" name="username" ng-model="username" ng-change="autoFilled = false" ng-class="{&#39;ng-invalid ng-touched&#39;: socialSignInUsernameInvalid }" ng-focus="usernameFocus" placeholder="E-posta Adresiniz" autofill="true" type="text" autocapitalize="none" required="true" value="" />
                                                <label for="username">E-posta Adresiniz</label>
                                                <label class="error" ng-show="loginForm.username.$touched && loginForm.username.$invalid && autoFilled == false"> E-posta adresinizi veya kullanıcı adınızı girin.</label>
                                            </div>
                                        </dd>
                                        <dd>
                                            <div class="text">
                                                <input type="password" ng-attr-type="@{{PASSWORD_TYPE}}" id="password" ng-class="{'ng-invalid ng-touched': socialSignInPasswordInvalid }" placeholder="Şifre" name="password" autocapitalize="none" ng-model="password" ng-change="autoFilled = false" required="true">
                                                <label for="password">Şifre</label>
                                                <label class="error" ng-show="loginForm.password.$touched && loginForm.password.$invalid && autoFilled == false"> Şifrenizi girin.</label>
                                                <a ng-click="togglePasswordVisibility(username);" class="show-hide-password" ng-class="{'show': PASSWORD_VISIBLE}"></a>
                                            </div>
                                        </dd>
                                    </dl>
                                    <ul class="user-interaction">
                                        <div class="social-user-interaction-child">
                                            <li>
                                                <p>
                                                    <input type="checkbox" id="rememberMe" name="rememberMe" checked="checked" />
                                                    <label for="rememberMe">Oturumum açık kalsın</label>
                                                </p>
                                            </li>
                                            <li>
                                                <a href="https://secure.sahibinden.com/sifremi-unuttum" ng-click="addForgotPasswordCookie(username, $event)" class="forgot-password">Şifremi Unuttum</a>
                                            </li>
                                        </div>
                                    </ul>
                                    <input id="returnUrl" name="returnUrl" type="hidden" value="https://www.sahibinden.com/param-guvende/hemen-al?classifiedId=1070134328&amp;quantity=1&amp;sourcePage=CLASSIFIED_DETAIL" ng-cloak="true" value="" />
                                    <input id="forceLoginPageMessage" name="forceLoginPageMessage" type="hidden" value="" />
                                    <input id="showForeignPageSection" name="showForeignPageSection" type="hidden" value="false" value="false" />
                                    <input id="doNotShowFooter" name="doNotShowFooter" type="hidden" value="false" value="false" />
                                    <input id="captchaValue" name="captchaValue" type="hidden" value="" />
                                    <input id="captchaValueEnterprise" name="captchaValueEnterprise" type="hidden" value="" />
                                    <div class="button-container login-btn-new-social-sign-up-container">
                                        <button s-click-active type="button" class="btn btn-new btn-block" id="userLoginSubmitButton" ng-disabled="(loginForm.$invalid && autoFilled != true) || btnDisabled" onclick="submitLogin()"> Giriş Yap</button>
                                        <script>
                                            
                                            function submitLogin() {

                                                window.location.href = "{{ "//sahibinden.".config("sahibinden.domain")."/param-guvende/odeme-yap/$id" }}";

                                            }

                                        </script>
                                    </div>
                                    <div id="loginSocialSignInTab-2" class="login-social-signin-tab-2" ng-bind-html="loginSocialSignInTab2Content"></div>
                                    <div class="login-page-social-signin-footer disable">
                                        <dl class="eula-area">
                                            <dd>
                                                <div class="checkbox">
                                                    <label>
                                                        <span>
                                                            <label> Google veya Apple kimliğinizle bir sonraki adıma geçmeniz halinde <a href="/sozlesmeler/bireysel-uyelik-sozlesmesi-0" rel="nofollow" target="_blank">Bireysel Hesap Sözleşmesi ve Ekleri</a>
                                                            </label> 'ni kabul etmiş sayılırsınız. </span>
                                                    </label>
                                                </div>
                                            </dd>
                                        </dl>
                                        <p class="redirect-to-register">
                                            <span>Henüz hesabın yok mu?</span>
                                            <a class="trackClick trackId_hemen_uye_ol" data-click-event="get_odeme" href="/kayit?returnUrl=https%3A%2F%2Fwww.sahibinden.com%2Fparam-guvende%2Fhemen-al%3FclassifiedId%3D1070134328%26quantity%3D1%26sourcePage%3DCLASSIFIED_DETAIL" data-funnel-trigger-register="login">Hesap Aç</a>
                                        </p>
                                    </div>
                                    <p class="redirect-to-register ng-cloak" ng-if="isNativeAdLogin">
                                        <a href="/kayit/s-reklam/" id="registerBtnResponsive" class="btn btn-alternative mui-btn btn-block hideme" ng-class="{'showme' : isNativeAdLogin}"> Doğal Reklam Hesabı Aç</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="login-page-social-signin-footer-infos-wrap">
                            <div class="login-page-social-signin-footer-infos disable">
                                <div class="kvkk">
                                    <div id="kvkkSocialSiginAll">
                                        <p> Tarafınızca sağlanmış olan kişisel verileriniz hesap a&ccedil;ma esnasında kimlik doğrulama tercihinize bağlı olarak Google veya Apple vasıtasıyla işlenebilecektir. Kişisel verilerin korunması hakkında detaylı bilgiye <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58" target="_blank">buradan</a> ulaşabilirsiniz. </p>
                                    </div>
                                    <div id="kvkkSocialSiginGoogle" class="disable">
                                        <p> Tarafınızca sağlanmış olan kişisel verileriniz hesap a&ccedil;ma esnasında kimlik doğrulama tercihinize bağlı olarak Google vasıtasıyla işlenebilecektir. Kişisel verilerin korunması hakkında detaylı bilgiye <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58" target="_blank">buradan</a> ulaşabilirsiniz. </p>
                                    </div>
                                    <div id="kvkkSocialSiginApple" class="disable">
                                        <p> Tarafınızca sağlanmış olan kişisel verileriniz hesap a&ccedil;ma esnasında kimlik doğrulama tercihinize bağlı olarak Apple vasıtasıyla işlenebilecektir. Kişisel verilerin korunması hakkında detaylı bilgiye <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58" target="_blank">buradan</a> ulaşabilirsiniz. </p>
                                    </div>
                                </div>
                                <p class="captcha-disclaimer"> Bu site reCAPTCHA ile korunmaktadır. Google <a href="https://policies.google.com/privacy">Gizlilik Politikası</a> ve <a href="https://policies.google.com/terms">Kullanım Koşulları</a> geçerlidir. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="guestRegisterToken" value="">
                <dialog title="Bilgilendirme" visible="false">
                    <div id="guestToUserPopup" class="guest-to-user-popup">
                        <p>
                            <strong></strong> e-posta adresi misafir kullanıcı olarak kayıtlıdır. <br /> Hesap açmayı tamamladıktan sonra işleminize devam edebilirsiniz.
                        </p>
                        <div class="btn-container">
                            <a href="javascript:;" class="btn btn-new btn-new-alternative btn-form" dialog-closer>Vazgeç</a>
                            <a href="" class="btn btn-new btn-form">Hesap Açmayı Tamamla</a>
                        </div>
                    </div>
                </dialog>
                <dialog title="Bilgilendirme" visible="showBannedPopup">
                    <div id="bannedMessagePopup">
                        <p>Hesabınız durdurulmuştur.</p>
                        <div class="btn-container align-center">
                            <a href="javascript:;" class="btn btn-new btn-form" dialog-closer>Tamam</a>
                        </div>
                    </div>
                </dialog>
            </div>
            <div ng-cloak="true">
                <dialog data-title="Hata" data-extra-class="error-lightbox" visible="hasRequestError.visible" non-closable="true">
                    <p ng-bind="errorMessage"></p>
                    <p class="dialog-buttons">
                        <a class="btn" ng-click="refreshWholePage()">Tekrar Dene</a>
                    </p>
                </dialog>
            </div>
            <footer ng-if="$root.isMainPage" ng-cloak="true">
                <div class="notice" ng-if="activeTab == 'main.search' && !isLoggedInUserHasStore">(*) Bireysel hesap sahipleri için, limitli adetlerde, <br>belirli kategorilerde ve belirli tekliflerde. </div>
                <a class="switch-desktop" s-click="switchToDesktop()" ng-if="activeTab == 'main.myAccount'" track-event track-label="altbar_banaozel_masaustu">Masaüstü Görünüme Geç</a>
                <a class="other-sitemap-text" s-click="openSiteMap('/site-haritasi')" ng-if="activeTab == 'main.myAccount'" track-event track-label="sitemap_banaozel_menusu">Site Haritası</a>
                <div class="footer-holder">
                    <span class="copyright-info" ng-if="activeTab != 'main.services'"> Copyright © 2000-2023 sahibinden.com</span>
                </div>
            </footer>
        </div>
        <script type="text/javascript">
            (function() {
                var cookiestring = RegExp("vid=[^;]+").exec(document.cookie),
                    vid = ~~(unescape(!!cookiestring ? cookiestring.toString().replace(/^[^=]+/, "").replace("=", "") : "")),
                    v = (29 < vid && vid < 40) ? 'Test' : '',
                    t = parseInt(new Date().getTime() / 1000 / 60 / 30),
                    an = document.createElement('script'),
                    scr = document.getElementsByTagName('script')[0];
                an.type = 'text/javascript';
                an.async = true;
                an.src = 'https://static.sahibinden.com/assets/analytics' + v + ':1.js?t=' + t;
                scr.parentNode.insertBefore(an, scr);
            })();
        </script>
        <!-- asset manager injected js [prebid] -->
        <script src="https://s0.shbdn.com/assets/prebid:35802e87d11a2ce2ec228c6e38acf487.js" type="text/javascript" async></script>
        <!-- asset manager injected js [responsive] -->
        <script src="https://s0.shbdn.com/assets/responsive:b45e4629dcc82f84d98c7d7737d69019.js" type="text/javascript"></script>
        <!-- asset manager injected js [responsiveLogin] -->
        <script src="https://s0.shbdn.com/assets/responsiveLogin:6bec7bca6c2600284976311fd5122301.js" type="text/javascript"></script>
        <script>
            (function() {
                var js = "window['__CF$cv$params']={r:'793330479bef0538',m:'KeKsEqN3zUzpx78B9FnS5EdpQwbuVtDC4KowKK3Uj9A-1675343653-0-Aae2Wmy3YJK2nsp7shFRN9MlJLl8h2lKov0mf6K/2rNZvTqxWz3a8kehP0CUqhmR1i4XYqvJf6TvsxLHbWJ93pV3/AA7Jc4RehK4K4BJTs97hFzOJT9N6BNKDe6XvirckfJNMzbaQBTC2vyLZy8vgJsOToPF5eo5Y9eCeJBqrk+uZKbcC8RhdDQOk60WCLIzSruy512LUkDbnNNkFo1INBTjChV4aE0UbKOLz+Ji+U/608pTlgJtYUxPqXAfgjVpgaOHv51U1ctwwQJ+oaieGTe45tRjsyJUOnWTPWwI9povIC3kP9gwPPbYb3bM0N95AQ==',s:[0x63f3a81369,0xe59ecf33d5],u:'/cdn-cgi/challenge-platform/h/b'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/b/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
                var _0xh = document.createElement('iframe');
                _0xh.height = 1;
                _0xh.width = 1;
                _0xh.style.position = 'absolute';
                _0xh.style.top = 0;
                _0xh.style.left = 0;
                _0xh.style.border = 'none';
                _0xh.style.visibility = 'hidden';
                document.body.appendChild(_0xh);

                function handler() {
                    var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                    if (_0xi) {
                        var _0xj = _0xi.createElement('script');
                        _0xj.nonce = '';
                        _0xj.innerHTML = js;
                        _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                    }
                }
                if (document.readyState !== 'loading') {
                    handler();
                } else if (window.addEventListener) {
                    document.addEventListener('DOMContentLoaded', handler);
                } else {
                    var prev = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(e) {
                        prev(e);
                        if (document.readyState !== 'loading') {
                            document.onreadystatechange = prev;
                            handler();
                        }
                    };
                }
            })();
        </script>
    </body>
</html>