@php

$phone = $product_info["ad_phone"];
$phone_formatted = "0 (".substr($phone, 0, 3).") ".substr($phone, 3, 3)." ".substr($phone, 6, 2)." ".substr($phone, 8);
$phone_formatted_encrypted = "0 (".substr($phone, 0, 3).") *** ** ".substr($phone, 8);
$ad_no = rand(1070000000, 1080000000);
$ad_price_formatted = number_format($product_info["ad_price"], 0, ".", ".");

@endphp

<!doctype html>
<html lang="tr" ng-app="sahibindenResponsive">
<head>
    <title>{{ $product_info["ad_title"] }} sahibinden.comda</title>
    <script type="text/javascript"
        src="https://cdn-ukwest.onetrust.com/consent/9f768f58-cb4a-4de6-83e2-f8d83f22909b/OtAutoBlock.js" defer></script>
<script src="https://cdn-ukwest.onetrust.com/scripttemplates/otSDKStub.js" data-document-language="true"
        type="text/javascript" charset="UTF-8" data-domain-script="9f768f58-cb4a-4de6-83e2-f8d83f22909b" defer></script>

<script type="text/javascript">
    window.cmpData$ = new (function () {
        var data = {isConsentAccepted: false};

        this.getData = function () {
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
    window.DMP = new (function () {

        this.isReady = function () {
            return !!window['bk_addPageCtx'];
        }

        this.getResults = function () {
            return window['bk_results'];
        }

        this.addPageCtx = function (phint, value) {
            execute("bk_addPageCtx", arguments);
        };

        this.async = function () {
            execute("bk_async", null)
        };

        this.doTag = function (p1, p2, p3, p4, p5, p6, p7, p8, p9) {
            executeBKTAG("doTag", arguments);
        };

        var execute = function (method, params) {
            if (cmpData$.getData().isConsentAccepted) {
                var fn = window[method];
                fn && fn.apply(null, params);
            }
        };

        var executeBKTAG = function (method, params) {
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

    var setPrebidGDPR = function (enable) {
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

    window.googletag.cmd.push(function () {
        var personalizedAdStatus = resolvePersonalizedAdStatus(cmpData$.getData().isConsentAccepted);
        googletag.pubads().setRequestNonPersonalizedAds(personalizedAdStatus);
        setPrebidGDPR(personalizedAdStatus);
    });

    var customConfigObject = {
        "buckets": [
            {
                "precision": 2,
                "min": 0,
                "max": 10,
                "increment": 0.01
            },
            {
                "precision": 2,
                "min": 10,
                "max": 25,
                "increment": 0.05
            },
            {
                "precision": 2,
                "min": 25,
                "max": 50,
                "increment": 0.1
            },
            {
                "precision": 2,
                "min": 50,
                "max": 100,
                "increment": 0.25
            }
        ]
    };

    var dfpLibraryHelper = (function () {


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
            return new Promise(function (resolve, reject) {
                var head = document.getElementsByTagName('head');
                var script = document.createElement('script');
                script.setAttribute('type', 'text/javascript');
                var sslFlag = (useSSL ? true : 'https:' == document.location.protocol);
                script.src = (sslFlag ? 'https:' : 'http:') +
                    '//' + url;
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

            lastAdUnits.forEach((function (value) {
                pbjs.removeAdUnit(value.code);
            }));

            lastAdUnits = adUnits;

            adUnits.forEach(function (x) {
                if (!x.code)
                    throw 'code must be provided';

                pbjs.addAdUnits(x);
            });

            var promise = new Promise(function (resolve, reject) {
                pbjs.requestBids({
                    bidsBackHandler: function () {
                        createGtpEvent(function () {
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

        DeferWrapper.prototype.init = function () {
            var self = this;
            var resolveFn;
            var rejectFn;

            var promise = new Promise(function (resolve, reject) {
                resolveFn = resolve;
                rejectFn = reject;
            });

            Object.defineProperty(self, 'promise', {
                value: promise,
                writable: false
            });

            DeferWrapper.prototype.resolve = function (x) {
                resolveFn(x);
            };

            DeferWrapper.prototype.reject = function (x) {
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

        DfpHelperNew.prototype.initPrebid = function (useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                createPrebidEvent(function () {
                    resolve();
                })
            })
        };

        function buildCriteoParams(slotConfigs) {
            var placements = slotConfigs.map(function (eachSlot) {
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


        DfpHelperNew.prototype.initCriteo = function (useSSL, injectHead) {
            return new Promise(function (resolve, reject) {
                loadJs('static.criteo.net/js/ld/publishertag.js', useSSL, injectHead)
                    .then(function () {
                        createCriteoEvent(function () {
                            resolve();
                        })
                    }).catch(function () {
                    reject();
                })
            });
        };

        DfpHelperNew.prototype.initGpt = function (useSSL, injectHead) {
                return new Promise(function (resolve, reject) {
                    createGtpEvent(function () {
                        resolve();
                    });
                });
        }

        function addPubServiceSlots(slots) {
            slots.forEach(function (value) {
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
            slots.forEach(function (value) {
                googletag.display(value);
            });
        }

        function refreshSlots(slots) {
            googletag.pubads().refresh(slots)
        }

        function refreshSlotsForEach(slots) {
            slots.forEach(function (x) {
                googletag.pubads().refresh([x])
            });
        }


        function makeCriteoRequest(bidRequest, isResponsiveSearch) {
            var result = {
                resolved: false,
                criteoTimeout: false
            };
            var delayPromise = new Promise(function (resolveFn) {
                setTimeout(function () {
                    if (!result.resolved) {
                        result.resolved = true;
                        result.criteoTimeout = true;
                        resolveFn(result);
                    }
                }, (isResponsiveSearch ? 600 : 500))
            });


            var criteoRequest = new Promise(function (resolveFn) {
                Criteo.SetLineItemRanges("0..10:0.01;10..25:0.05;25..50:0.10;50..100:0.25");
                Criteo.RequestBids(bidRequest, function (x) {
                    if (!result.resolved) {
                        result.resolved = true;
                        setTimeout(function () {
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
<script>
    window.abFlags = Object.assign(window.abFlags, {});
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="referrer" content="no-referrer-when-downgrade" />
<meta id="Content-Language" http-equiv="Content-Language" content="tr"/>
<meta name="rating" content="general"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<meta name="imagetoolbar" content="no"/>
        <meta property="og:title" content="{{ $product_info["ad_title"] }} sahibinden.comda"/>
        <meta property="og:site_name" content="sahibinden.com"/>
        <meta property="og:type" content="product"/>
        <meta name="fb:app_id" content="125353587504837"/>
        <meta name="fb:admins" content="646427846"/>
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:site" content="@sahibindencom"/>
        <meta name="twitter:creator" content="@sahibindencom"/>
        <meta name="twitter:title" content="{{ $product_info["ad_title"] }} sahibinden.comda"/>
        <meta name="twitter:description" content="{{ $product_info["ad_title"] }} sahibinden.comda"/>
        <meta name="revisit-after" content="1 Days"/>
<link rel="shortcut icon" href="https://www.sahibinden.com/favicon.ico"/>
<link rel="search" type="application/opensearchdescription+xml" title="sahibinden.com" href="https://www.sahibinden.com/static/opensearch"/>

<meta name="description" content="{{ $product_info["ad_title"] }} sahibinden.comda"/>
<meta name="robots" content="NOODP,index,follow,noarchive"/>
<meta name="apple-mobile-web-app-capable" content="yes">

<script type="text/javascript">
    /*<![CDATA[*/
    function getBanner(zoneId, extraParams, targetId) {
        
    };
    /*]]>*/
</script>

<meta property="al:ios:app_store_id" content="418535251" />
<meta property="al:ios:app_name" content="sahibinden.com mobil" />
<meta property="al:android:package" content="com.sahibinden" />
<meta property="al:android:app_name" content="sahibinden.com" />
<!-- Real User Monitoring -->
<script>
    var failedAssets = [];

    window.addEventListener('error', function (event) {
        if (event.target.tagName && event.target.tagName.toLowerCase() === 'img') {
            failedAssets.push(event.target.src);
        }
    }, {capture: true}, true)

    window.shbdn_rum = window.shbdn_rum || {};
    window.shbdn_rum.requestType = "CLASSIFIED_DETAIL";
</script>
<script type="text/javascript">
    var SahibindenCfg = SahibindenCfg || {};
    SahibindenCfg.searchBaseUrl = '/arama';
    SahibindenCfg.defaultSorting = '';
    

    SahibindenCfg.facetedSearch = {};
    SahibindenCfg.facetedSearch.ajaxTimeout = 60000;
    SahibindenCfg.facetedSearch.cityListUrl = '/ajax/search/locationFacets';
    SahibindenCfg.facetedSearch.citySearchUrl = '/ajax/location/search/city';

    

    SahibindenCfg.widgets = {};
    SahibindenCfg.enableWidget = function(widget) { this.widgets[widget] = true; };
    SahibindenCfg.isWidgetEnabled = function(widget) { return this.widgets[widget] === true; };
</script><!-- bundles -->
<style>
.ng-hide,.hidden,.modal.off{display:none}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}footer,header,nav{display:block}a{background-color:transparent}b,strong{font-weight:700}h1{font-size:2em;margin: .67em 0}sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}img{border:0}button,input,select{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.428571429;color:#333;background-color:#fff}button,input,select{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#3782c4;text-decoration:none}img{vertical-align:middle}.ng-hide:not(.ng-hide-animate),[ng-cloak]{display:none!important}.dialog-buttons{text-align:right;margin:0}.btn{display:inline-block;padding:9px 22px;margin-bottom:0;font-size:14px;font-weight:700;text-align:center;vertical-align:middle;border:0;border-radius:2px;color:#fff;background-color:#438ed8;-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, .1), 0 0 4px 0 rgba(0, 0, 0, .06), 1px 0 2px 0 rgba(0, 0, 0, .07);box-shadow:0 2px 3px 0 rgba(0, 0, 0, .1), 0 0 4px 0 rgba(0, 0, 0, .06), 1px 0 2px 0 rgba(0,0,0,.07);line-height:1.3em;text-decoration:none}.btn:visited{text-decoration:none}.btn-alternative{color:#438ed8;background-color:#f7f7f7}.btn-form{padding:6px 16px;vertical-align:top}.btn-block{display:block;width:100%;padding-right:0;padding-left:0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}.btn-360{font-size:14px!important;font-weight:500!important;line-height:100%;color:#fff;border-radius:2px;background:#438ed8;padding:18px 40px;border:0;outline:0;-webkit-box-shadow:none;box-shadow:none;text-shadow:none}[ng-cloak]{display:none!important}body{width:100%;height:100%;position:absolute;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;letter-spacing:-.03em;background-color:#f7f7f7}.main-content{position:relative}img{-webkit-touch-callout:none}footer{text-align:center;width:100%;padding-bottom:16px;background:#f7f7f7}footer .footer-tags{text-align:left}footer .footer-tags h3{font-size:14px;color:#666;font-weight:400;margin:0;padding:16px;text-transform:uppercase}footer .footer-social h3{font-size:14px;color:#666;font-weight:400;margin:0;padding:16px;text-transform:uppercase;text-align:left}footer .footer-social ul{background-color:#fff;border:solid #dedede;border-width:1px 0;padding:16px 0}footer .footer-social ul li{display:inline-block;margin:0 8px}footer .footer-social ul li a{display:block}footer .footer-social ul li a:before{content:'';display:block;width:36px;height:36px;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover}footer .footer-apps{padding-top:18px}footer .footer-apps ul li{display:inline-block;margin:0 3px 3px}footer .footer-apps ul li a:before{-webkit-background-size:auto;-moz-background-size:auto;background-size:auto}footer .footer-apps ul li a.android:before{width:111px;height:34px;content:'';display:inline-block;vertical-align:middle}footer .footer-apps ul li a.ios:before{width:124px;height:34px;content:'';display:inline-block;vertical-align:middle}footer .footer-apps ul li a.huawei:before{width:108px;height:33px;content:'';display:inline-block;vertical-align:middle}footer .footer-security-sign{padding-top:18px}footer .footer-security-sign ul li{display:inline-block;margin:0 5px}footer .footer-security-sign ul li a:before{content:'';display:block;width:96px;height:30px;-webkit-background-size:192px 30px;-moz-background-size:192px 30px;background-size:192px 30px}footer .security-sign{width:44px;height:44px;display:block}footer .notice{font-size:12px;color:#bcbbbb;padding-top:16px}footer .switch-desktop{display:inline-block;text-decoration:none;margin-bottom:-16px;padding-top:16px;font-size:13px}footer .switch-desktop:visited{text-decoration:none}footer .switch-desktop:after{content:' | ';color:#a0a0a1}footer .other-sitemap-text{font-size:13px;text-decoration:none}footer .footer-holder{display:inline-block;margin-top:16px}footer .footer-holder span{font-size:13px}footer .footer-holder span{color:#bcbbbb}body,input,select{font:14px"Lucida Grande",Arial,sans-serif}input[type=text]{-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-appearance:none;-moz-appearance:none;-webkit-text-size-adjust:none;-webkit-transform:translateZ(0);-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}input[type=text]::-webkit-input-placeholder{color:#bcbbbb}input[type=text]:-moz-placeholder{color:#bcbbbb}input[type=text]::-moz-placeholder{color:#bcbbbb}input[type=text]:-ms-input-placeholder{color:#bcbbbb}ul{list-style:none}li,ul{margin:0;padding:0}.icon{position:absolute;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}.icon.favorite{right:53px;top:0;padding:13px 0}.icon.favorite:before{width:25px;height:24px;content:'';display:inline-block;vertical-align:middle}.icon.share{right:16px;top:0;padding:13px 0}.icon.share:before{width:21px;height:24px;content:'';display:inline-block;vertical-align:middle}.content{padding-top:50px}header{zoom:1;height:50px;position:fixed;-webkit-transform:translateZ(0);-moz-transform:translateZ(0);-o-transform:translateZ(0);-ms-transform:translateZ(0);transform:translateZ(0);z-index:399;top:0;width:100%;background:#32628d;display:table}header:after,header:before{display:table;content:"";zoom:1}header:after{clear:both}header .icon{padding:15px 16px 17px}header .icon.share{margin:0}header .actions{float:right}.smart-app-banner{zoom:1;position:fixed;width:100%;top:0;height:60px;background-color:#fff;z-index:500;display:none}.smart-app-banner:after,.smart-app-banner:before{display:table;content:"";zoom:1}.smart-app-banner:after{clear:both}.smart-app-banner h3{line-height:60px;display:inline-block;padding:0;margin:0;padding-left:68px}.smart-app-banner h3:before{width:42px;height:42px;content:'';display:inline-block;vertical-align:middle;position:absolute;left:22px;top:9px}.smart-app-banner h3 span{color:#333;font-size:15px;position:relative;display:block;line-height:44px}.smart-app-banner h3 span i{position:absolute;top:18px;left:0;right:0;color:#888;font-size:11px;font-style:normal}.smart-app-banner a.app-button{float:right;margin-right:10px;margin-top:14px;padding:6px 10px;font-size:12px}.smart-app-banner a.close-button{line-height:50px;padding:5px}.smart-app-banner a.close-button:before{width:12px;height:12px;content:'';display:inline-block;vertical-align:middle}a.back-button{text-decoration:none}a.back-button:visited{text-decoration:none}.back-button{position:absolute;display:block;width:12px;height:20px;top:15px;left:16px}.back-button:before{position:absolute;top:0;left:0;width:12px;height:20px;content:'';display:inline-block;vertical-align:middle}[ng-cloak]{display:none!important}#classified-location .map-buttons.type-streetView a{height:29px;width:55px;line-height:29px;font-weight:400;text-align:center}#classified-location .map-buttons.type-streetView a.map{border-top-right-radius:0;border-bottom-right-radius:0;border-top-left-radius:7px;border-bottom-left-radius:7px}#classified-location .map-buttons.type-streetView a.satellite{border-top-left-radius:0;border-bottom-left-radius:0;border-left:0;border-top-right-radius:7px;border-bottom-right-radius:7px}#classified-location{overflow:hidden}#classified-location .streetViewButton{position:absolute;top:10px;right:129px;z-index:12;width:29px;height:29px;border-radius:7px;-webkit-box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);background-color:#fff;display:table}#classified-location .streetViewButton a{width:29px;height:29px;left:4px;bottom:4px}#classified-location .streetViewButton a:before{width:20px;height:20px;content:'';display:inline-block;vertical-align:middle;width:20px;height:20px;position:relative;border:1px;top:4px;left:5px;padding:0;margin:0}#classified-location .street-view-button-tooltip{display:none;position:absolute;z-index:15;background-color:#fff;top:48px;right:95px;text-align:center;width:96px;height:23px;border-radius:7px;-webkit-box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12)}#classified-location .street-view-button-tooltip:before{content:'';height:8px;left:48px;position:absolute;background:-webkit-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-moz-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-o-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-ms-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);top:0;-webkit-transform:translate(-50%, -50%) rotate(-45deg);-moz-transform:translate(-50%, -50%) rotate(-45deg);-o-transform:translate(-50%, -50%) rotate(-45deg);-ms-transform:translate(-50%, -50%) rotate(-45deg);transform:translate(-50%, -50%) rotate(-45deg);width:8px}#classified-location .street-view-button-tooltip .tooltip-text{font-size:10px;color:#1064bc;line-height:23px}#classified-location .map-buttons{position:absolute;top:10px;z-index:12;border-radius:7px;background-color:#fff}#classified-location .map-buttons .map-satellite-divider{overflow:hidden;float:left;display:inline;width:1px;height:18px;background-color:#d5d5d5;position:absolute;top:5px}#classified-location .map-buttons li{display:inline-block;overflow:hidden;float:left;margin:0;padding:0}#classified-location .map-buttons.type-streetView{width:110px;right:14px}#classified-location .map-buttons a{display:inline-block;color:#666;text-align:center;font-weight:700;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}#classified-location .disable{display:none}#classified-location #markerContainer{left:0;top:0;z-index:9;position:absolute}#classified-location .mapTooltipInfo{border-radius:2px;border:1px solid #374636;-webkit-box-shadow:inset 0 1px 1px #fff;-webkit-box-shadow:inset 0 1px 1px #fff;box-shadow:inset 0 1px 1px #fff;color:#fff;background-color:#000;opacity:.75;-ms-filter:"alpha(opacity=75)";filter:"alpha(opacity=75)";-ms-filter:"alpha(opacity=75)";padding:6px 15px 6px 10px;position:absolute;text-shadow:-1px 2px #2c3428;font-size:10px;z-index:10;margin-left:-18px;white-space:nowrap}#classified-location .mapTooltipInfoDetails{border-radius:2px;border:1px solid #c0bebe;color:#828282;background-color:#fff;position:absolute;top:0;left:0;font-size:12px;z-index:10}#classified-location .mapTooltipInfoDetails:after, #classified-location .mapTooltipInfoDetails:before{position:absolute;content:" ";width:0;height:0;border-style:solid;top:100%}#classified-location .mapTooltipInfoDetails:before{border-width:8px;border-color:#fff transparent transparent transparent;left:16px;z-index:1}#classified-location .mapTooltipInfoDetails:after{border-width:9px;border-color:#c0bfbd transparent transparent transparent;left:15px}#classified-location .streetViewNotFoundError{position:absolute;z-index:2;width:100%;height:100%;background:#f2f2f2}#classified-location .expText{top:47%;text-align:center;position:relative;font-size:16px}.ng-hide:not(.ng-hide-animate),[ng-cloak]{display:none!important}header .classified-page-title{top:0;bottom:0;font-size:16px;position:absolute;line-height:50px;color:#fff;left:98px;right:98px;text-align:center;font-weight:700}h1.classified-title{position:relative;margin:0;padding:2px 14px;color:#333;z-index:1;font-size:14px;font-weight:400;text-align:center;word-wrap:break-word;background-color:#f7f7f7}.main-content{padding-bottom:60px;background-color:#f1f1f1}.content{zoom:1;background-color:#ececec}.content:after,.content:before{display:table;content:"";zoom:1}.content:after{clear:both}.content .info-section{zoom:1;background:#f1f1f1}.content .info-section:after, .content .info-section:before{display:table;content:"";zoom:1}.content .info-section:after{clear:both}.content .detail-content{padding:14px;min-height:calc(100vh - 136px);background-color:#fff;overflow:hidden;overflow-x:auto}.content .detail-content ul{list-style:inside}.content .detail-content.map-container{padding:0 0 3px 0}.content ul{display:block;background-color:#fff}.content ul.classified-tabs{zoom:1;background:#f7f7f7}.content ul.classified-tabs:after, .content ul.classified-tabs:before{display:table;content:"";zoom:1}.content ul.classified-tabs:after{clear:both}.classified-info-list{border-bottom:1px solid #e7e7e7}.no-image img{width:100%;height:auto;margin-bottom:15px;border-bottom:1px solid #ccc}.fab-menu-overlay{background:#000;opacity:.4;-ms-filter:"alpha(opacity=40)";position:absolute;width:100%;height:100%;top:0;left:0;z-index:600}.fab-menu-overlay[ng-cloak]{display:none!important}.fab-menu-overlay-text[ng-cloak]{display:none!important}.user-info{position:fixed;width:100%;margin:0;padding:8px;bottom:0;list-style:none;z-index:300}.user-info>li>a:not(.fab-360){display:block;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;white-space:nowrap;text-align:center;text-decoration:none}.user-info>li>a:not(.fab-360):visited{text-decoration:none}.user-info:not(.get){display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-pack:justify;-moz-box-pack:justify;-o-box-pack:justify;-ms-flex-pack:justify;-webkit-justify-content:space-between;justify-content:space-between;background:0 0!important}.user-info:not(.get)>li{width:100%;margin-right:9px}.user-info:not(.get)>li:last-of-type{margin-right:0}.user-info:not(.get)>li>a:not(.fab-360){font-weight:600!important;font-size:15px!important;padding:14px 15px 15px!important;letter-spacing:-.2px!important;-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, .16), 0 0 4px 0 rgba(0, 0, 0, .11), 1px 0 2px 0 rgba(0, 0, 0, .13)!important;box-shadow:0 2px 3px 0 rgba(0, 0, 0, .16), 0 0 4px 0 rgba(0, 0, 0, .11), 1px 0 2px 0 rgba(0,0,0,.13)!important}.user-info:not(.get)>li.fab-360-wrapper{width:44px}.user-info:not(.get)>li.fab-360-wrapper>a{width:44px;height:44px;display:block;border-radius:100px;position:relative}.user-info:not(.get)>li.fab-360-wrapper>a.estate:before{content:'';-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;width:50px;height:51px;display:block;position:absolute;top:-3px;left:-3px}.user-info .fab-menu{position:absolute;bottom:65px;right:8px;background:#fff;border-radius:4px;-webkit-box-shadow:0 2px 3px 0 rgba(0, 0, 0, .16), 0 0 4px 0 rgba(0, 0, 0, .11), 1px 0 2px 0 rgba(0, 0, 0, .13);box-shadow:0 2px 3px 0 rgba(0, 0, 0, .16), 0 0 4px 0 rgba(0, 0, 0, .11), 1px 0 2px 0 rgba(0, 0, 0, .13)}.user-info .fab-menu[ng-cloak]{display:none!important}.user-info .fab-menu .operations-widget .operation-head{background-color:#eaeaea;padding:10px;border-radius:4px 4px 0 0;display:block}.user-info .fab-menu .operations-widget .operation-head:before{-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;width:96px;height:30px;display:block;content:'';-webkit-background-size:cover;-moz-background-size:cover;background-size:cover;margin:0}.user-info .fab-menu .operations-widget .operation-head.estate:before{width:119px;height:29px}.user-info .fab-menu .operations-widget ul{background:0 0}.user-info .fab-menu .operations-widget ul li{padding:0 0 0 10px}.user-info .fab-menu .operations-widget ul li a{display:block;border-bottom:1px solid #e7e7e7;padding:7px 25px 7px 0;height:30px;position:relative;-webkit-box-sizing:unset;-moz-box-sizing:unset;box-sizing:unset;zoom:1}.user-info .fab-menu .operations-widget ul li a:after, .user-info .fab-menu .operations-widget ul li a:before{display:table;content:"";zoom:1}.user-info .fab-menu .operations-widget ul li a:after{clear:both}.user-info .fab-menu .operations-widget ul li a:after{position:absolute;top:50%;right:10px;margin-top:-6px;width:8px;height:12px;content:'';display:inline-block;vertical-align:middle}.user-info .fab-menu .operations-widget ul li a img{float:left;width:24px;height:24px;display:block;margin:3px 8px 3px 3px}.user-info .fab-menu .operations-widget ul li a span{float:left;font-size:14px;color:#333;line-height:30px}.user-info .fab-menu .operations-widget ul li:last-of-type a{border-bottom:0}.map-container{height:100%;padding:0}.map-container{height:100%}.map-container #gmap{width:100%;height:100%}.classified-info-list{padding:0 14px;position:relative}.hidden-attributes{display:none!important;width:0;height:0}.classified-info-list li{zoom:1;line-height:31px;border-bottom:1px solid #e7e7e7;font-size:13px}.classified-info-list li:after, .classified-info-list li:before{display:table;content:"";zoom:1}.classified-info-list li:after{clear:both}.classified-info-list li strong{font-weight:400;color:#666;float:left}.classified-info-list li span{color:#666;float:right;max-width:50%;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;white-space:nowrap}.classified-info-list li span.classifiedId{color:#910000;display:inline-block}.classified-info-list li span.price{color:#1064bc;font-weight:700}.classified-info-list li:last-of-type{border-bottom:0}h5{font-size:14px;color:#333;margin-bottom:0;padding-bottom:0}.share-link-container{margin-bottom:32px}.share-link-container .linktext{font-size:12px}.carousel-holder{width:100%;height:auto;position:relative;text-align:center}.carousel-holder .carousel-dummy{padding-top:75%}.carousel-holder li:before{content:' ';right:0;bottom:0;position:absolute;left:0;top:0;z-index:300}.carousel-holder li:after{content:' ';right:0;bottom:0;position:absolute;left:0;top:0;z-index:299}ul[rn-carousel]{overflow:hidden;padding:0;white-space:nowrap;position:absolute;left:0;right:0;bottom:0;top:0;-webkit-perspective:1000px;-ms-perspective:1000px;-webkit-perspective:1000px;-moz-perspective:1000px;-ms-perspective:1000px;perspective:1000px;-ms-touch-action:pan-y;touch-action:pan-y}ul[rn-carousel]+.nav-holder{position:absolute;width:100%;height:20px;bottom:10px;z-index:200}ul[rn-carousel]+.nav-holder nav{zoom:1;display:inline-block;margin-top:-30px;z-index:100;color:#fff;font-size:16px;text-align:center;padding:6px 8px;background-color:rgba(0, 0, 0, .6);border-radius:16px}ul[rn-carousel]+.nav-holder nav:after, ul[rn-carousel]+.nav-holder nav:before{display:table;content:"";zoom:1}ul[rn-carousel]+.nav-holder nav:after{clear:both}ul[rn-carousel]>li{position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;height:auto;overflow:auto;padding:0;clear:left}ul[rn-carousel]>li img{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;width:auto;max-width:100%;max-height:100%;position:absolute;bottom:0;top:0;right:0;left:0;margin:auto}.user-name{padding:4px 0 13px;height:42px;font-size:14px;color:#1064bc;text-align:center;border-top:1px solid #e7e7e7;background-color:#f7f7f7}.user-name.store-user-name{padding-top:12px}.user-name .user-type-badge{position:absolute;top:-1px;left:0;width:100%;height:8px;background-color:#d7d7d7;display:none}.user-name a{color:#1064bc;vertical-align:top}.user-name div span:first-child{margin-right:4px}.user-name .badge{position:relative;display:inline-block;top:-10px;font-size:11px;font-style:italic;color:#765e18}.user-name .badge:before{position:absolute;top:0;left:0;width:33px;height:38px;content:'';display:inline-block;vertical-align:middle}.user-name .badge span{position:relative;display:block;width:32px;text-align:center;font-style:italic;color:#765e18;line-height:10px}.user-name .badge span:first-child{margin-top:5px;font-weight:700}.user-name[ab-active=true].store-user-name{height:48px;padding-top:15px;position:relative}.user-name[ab-active=true].store-user-name .badge{position:absolute;top:9px;right:14px;color:#775e0e;font-family:Arial}.user-name[ab-active=true].store-user-name .badge:before{width:30px;height:30px;content:'';display:inline-block;vertical-align:middle}.user-name[ab-active=true].store-user-name .badge span{font-size:8px;line-height:8px;width:31px;font-weight:700}.user-name[ab-active=true].store-user-name .badge span:first-child{font-weight:700;font-size:10px;margin-top:7px}.user-name[ab-active=true].store-user-name[premiumuser=true]{padding-top:18px}.user-name[ab-active=true].store-user-name[premiumuser=true] .user-type-badge{display:block}.user-name[ab-active=true].store-user-name[premiumuser=true] .badge{top:-8px;right:10px}.user-name[ab-active=true].store-user-name[premiumuser=true] .user-type-badge{background-color:#3f475f}.user-name[ab-active=true].store-user-name[premiumuser=true] .user-type-badge span{width:65px;height:15px;content:'';display:inline-block;vertical-align:middle;position:absolute;top:0;right:35px}.breadcrumb{padding:7px 17px 4px;color:#666;background-color:#f7f7f7;text-align:center;font-size:12px;border-top:1px solid #e7e7e7;white-space:nowrap;overflow-x:auto;direction:rtl}.breadcrumb a{text-decoration:none;color:#1064bc}.breadcrumb a:visited{text-decoration:none}.breadcrumb a:not(:last-child):after{content:'>'}.location-info{padding:4px 17px;color:#1064bc;border-top:1px solid #e7e7e7;background-color:#f7f7f7;text-align:center;font-size:12px}.location-info a{color:#1064bc;font-size:12px}.breadcrumb+.location-info{margin-top:0;padding-top:0;padding-bottom:7px;border-top:0}.poi-filter{display:none;width:100%;height:428px;z-index:400;left:0;top:unset!important;bottom:0!important;position:absolute;background-color:#fff!important}.poi-filter .filter-header{width:100%;height:39px;z-index:500;left:0;top:0;position:absolute;background-color:#eee}.poi-filter .filter-header .close-modal{color:#7f7f7f;position:absolute;margin:10px 14px;padding:0;background-color:#eee;border:0}.poi-filter .filter-header .filter-button{color:#1064bc;right:14px;top:10px;border:0;position:absolute}.poi-filter .filter-body{width:100%;height:auto;top:50px;position:relative;background-color:#fff}.poi-filter .filter-body .poi-category{margin-left:16px;margin-right:16px;position:relative;border-bottom:1px solid #e7e7e7}.poi-filter .filter-body .poi-category .name-and-definition{margin-left:8px;display:inline-block;position:relative;width:calc(100% - 42px)}.poi-filter .filter-body .poi-category .name-and-definition .category-name{margin-top:7.5px;margin-bottom:2px;font-size:16px;letter-spacing:-.4px;color:#363636;font-weight:400}.poi-filter .filter-body .poi-category .name-and-definition .category-definition{font-size:12px;letter-spacing:-.4px;color:#bcbbbb;font-weight:400;margin-top:2px;margin-bottom:7.5px}.poi-filter .filter-body .poi-category input.filter-checkbox[type=checkbox]{display:none}.poi-filter .filter-body .poi-category .filter-checkbox-icon{position:relative;float:right;width:18px;height:18px;top:16px;left:0;border-radius:3px;border:1px solid #bcbbbb;background-color:#fff}.detail-content #classified-location .map-buttons.type-streetView a{height:29px;width:50px;font-size:10px;line-height:26px;font-weight:400}.detail-content #classified-location .map-buttons.type-streetView a.map{border-top-right-radius:0;border-bottom-right-radius:0;border-top-left-radius:7px;border-bottom-left-radius:7px}.detail-content #classified-location .map-buttons.type-streetView a.satellite{border-top-left-radius:0;border-bottom-left-radius:0;border-left:0;border-top-right-radius:7px;border-bottom-right-radius:7px}.detail-content #classified-location{position:relative;height:calc(100vh - 143px);min-height:300px}.detail-content #classified-location .expText{padding:0 14px}.detail-content #classified-location .poi-category-filter-button{left:15px;z-index:15;padding:0;width:56px;height:56px;position:absolute;bottom:20px;background-color:#fff;border-radius:33px}.detail-content #classified-location .poi-category-filter-button .poi-category-filter-button-icon{width:56px;height:36px;content:'';display:inline-block;vertical-align:middle;background-color:transparent;width:28px;height:18px;display:block;position:absolute;top:19px;right:14px}.detail-content #classified-location .street-view-button-tooltip{display:block;position:absolute;width:106px;height:20px;-webkit-box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);z-index:15;background-color:#fff;top:48px;right:83px;text-align:center;border:0!important}.detail-content #classified-location .street-view-button-tooltip:before{content:'';left:51px;position:absolute;background:-webkit-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-moz-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-o-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-ms-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);top:0;-webkit-transform:translate(-50%, -50%) rotate(-45deg);-moz-transform:translate(-50%, -50%) rotate(-45deg);-o-transform:translate(-50%, -50%) rotate(-45deg);-ms-transform:translate(-50%, -50%) rotate(-45deg);transform:translate(-50%, -50%) rotate(-45deg);height:6px!important;width:6px}.detail-content #classified-location .street-view-button-tooltip .tooltip-text{font-size:10px;color:#1064bc;line-height:12px;margin-right:0}.detail-content #classified-location .streetViewButton{position:absolute;right:124px;top:12px;height:29px;width:28px;z-index:12}.detail-content #classified-location .streetViewButton .streetViewIcon{height:0;background-image:none}.detail-content #classified-location .map-buttons{position:absolute;top:12px;z-index:12;border-radius:7px;background-color:#fff;height:29px;width:100px;font-size:10px}.detail-content #classified-location .map-buttons .map-satellite-divider{overflow:hidden;float:left;display:inline-block;width:1px;height:18px;background-color:#d5d5d5;position:absolute;top:5px}.detail-content #classified-location .map-buttons li{overflow:hidden;float:left;display:inline-block;margin:0;padding:0}.detail-content #classified-location .map-buttons.type-streetView{width:100px;right:14px}.detail-content #classified-location .map-buttons a{display:inline-block;color:#666;text-align:center;font-weight:700;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;border:2px solid transparent}.detail-content #classified-location .mapTooltipInfoDetails{width:auto}.detail-content #classified-location .howToGoButtonContainer{right:15px;z-index:15;padding:0;width:56px;height:56px;position:absolute;background-color:#1064bc;bottom:29px;border-radius:33px}.detail-content #classified-location .howToGoButtonContainer .how-to-go-button-icon{width:26px;height:26px;background-color:transparent;display:block;position:absolute;top:15px;right:15px}.detail-content #classified-location .how-to-go-button-tooltip{position:absolute;width:92px;height:20px;-webkit-box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);z-index:15;background-color:#fff;right:14px;text-align:center;border:0!important;border-radius:7px;bottom:94px}.detail-content #classified-location .how-to-go-button-tooltip:after{content:'';left:63px;position:absolute;background:-webkit-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-moz-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-o-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-ms-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);top:20px;-webkit-transform:translate(-50%, -50%) rotate(135deg);-moz-transform:translate(-50%, -50%) rotate(135deg);-o-transform:translate(-50%, -50%) rotate(135deg);-ms-transform:translate(-50%, -50%) rotate(135deg);transform:translate(-50%, -50%) rotate(135deg);height:6px;width:6px}.detail-content #classified-location .how-to-go-button-tooltip .tooltip-text{font-size:10px;color:#1064bc;line-height:12px;margin-right:0}.detail-content #classified-location .poi-category-button-tooltip{position:absolute;width:82px;height:20px;-webkit-box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);box-shadow:0 1px 5px 1px rgba(0, 0, 0, .12);z-index:15;background-color:#fff;bottom:85px;left:14px;text-align:center;border:0!important;border-radius:7px}.detail-content #classified-location .poi-category-button-tooltip:after{content:'';left:29px;position:absolute;background:-webkit-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-moz-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-o-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:-ms-linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);background:linear-gradient(225deg, #fff 50%, rgba(255, 255, 255, 0) 51%, rgba(255, 255, 255, 0) 100%);top:20px;-webkit-transform:translate(-50%, -50%) rotate(135deg);-moz-transform:translate(-50%, -50%) rotate(135deg);-o-transform:translate(-50%, -50%) rotate(135deg);-ms-transform:translate(-50%, -50%) rotate(135deg);transform:translate(-50%, -50%) rotate(135deg);height:6px;width:6px}.detail-content #classified-location .poi-category-button-tooltip .tooltip-text{font-size:10px;color:#1064bc;line-height:12px;margin-right:0}#how-to-go{display:none;height:330px;position:absolute;bottom:11px;right:0;z-index:400}#how-to-go a{position:absolute;left:20px;top:10px;color:#f2f2f2;font-size:14px;width:100%}#how-to-go .how-to-go-details{right:15px;height:40px;border-radius:4px;background-color:#1064bc;position:absolute}#how-to-go .how-to-go-icons{display:block;position:absolute;top:0;right:30px}#how-to-go .show-map-view{top:0;width:165px}#how-to-go .show-map-view .show-map{width:18px;height:18px}#how-to-go .show-how-to-go{top:50px;width:120px}#how-to-go .show-how-to-go .how-to-go-drive{width:22px;height:19px}#how-to-go .show-how-to-go-walking{top:100px;width:183px}#how-to-go .show-how-to-go-walking .how-to-go-walk{width:19px;height:22px}#how-to-go .show-how-to-go-transportation{top:150px;width:224px}#how-to-go .show-how-to-go-transportation .how-to-go-transport{width:18px;height:24px}#how-to-go .close-how-to-go{top:200px;right:15px;z-index:15;padding:0;width:56px;height:56px;position:absolute;background-color:#d0021b;bottom:20px;border-radius:33px;border:1px solid #d0021b}#how-to-go .close-how-to-go .close-how-to-go-button-icon{width:16px;height:16px;background-color:transparent;display:block;position:absolute;top:18px;right:19px}.chart-wrapper{background:#fff}.chart-wrapper .location{font-size:14px;font-weight:700;margin:15px 10px -10px}.chart-wrapper .location:before{content:'';width:13px;height:13px;background:#7cb5ec;border-radius:100px;display:inline-block;margin-right:5px}.chart-wrapper .graph-container{padding:10px 5px 0;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;width:100%}.chart-wrapper .graph-header{zoom:1;padding:10px 10px 0}.chart-wrapper .graph-header:after, .chart-wrapper .graph-header:before{display:table;content:"";zoom:1}.chart-wrapper .graph-header:after{clear:both}.chart-wrapper .graph-header h3{float:left;margin:3px 0;font-size:18px;color:#666}.chart-wrapper .graph-header select{padding:6px 20px 7px 8px;-webkit-appearance:none;text-indent:.01px;border:1px solid silver;border-radius:3px;position:relative;top:-2px;margin-left:10px}.chart-wrapper .graph-summary{zoom:1;padding:10px 0 0}.chart-wrapper .graph-summary:after, .chart-wrapper .graph-summary:before{display:table;content:"";zoom:1}.chart-wrapper .graph-summary:after{clear:both}.chart-wrapper .graph-summary p{width:55%;float:left;margin:0;text-align:center}.chart-wrapper .graph-summary p span{display:block;color:#9098a4;font-size:13px;margin-top:3px}.chart-wrapper .graph-summary p span+span{color:#333;font-size:16px}.chart-wrapper .graph-summary p+p{width:45%;float:right}.chart-wrapper .graph-summary p i{height:12px;margin-right:3px;display:inline-block}.chart-wrapper .graph-footer{text-align:center;background:#efefef;padding:15px 10px 10px}.chart-wrapper .graph-footer p{margin:0 0 15px;font-size:13px;color:#4a4a4a}.chart-empty-wrapper{background:#efefef;text-align:center}.chart-empty-wrapper p{margin:0 10px 15px;font-size:14px;color:#4a4a4a}.chart-empty-wrapper .chart-empty-header{background:#fff;padding:95px 20px;margin-bottom:20px}.chart-empty-wrapper .chart-empty-header p{color:#9b9b9b;margin:0}.chart-empty-wrapper .chart-empty-header p:before{content:'';display:block;margin:0 auto 15px;width:203px;height:112px}.matterport{margin-top:50px;position:absolute;top:0;bottom:0;right:0;left:0}.matterport iframe{position:relative;width:100%;height:100%;border:0;margin:0;overflow:hidden;z-index:999999}ul.sub-menu{display:none}.price-history-detail-wrapper.price-history-icon{display:inline;margin-left:4px}.price-history-detail-wrapper.price-history-icon:after{content:" ";width:17px;height:15px;content:'';display:inline-block;vertical-align:middle;margin-bottom:3px}#widget-360{top:0;left:0;position:fixed;z-index:9999999;display:none;-webkit-box-orient:vertical;-moz-box-orient:vertical;-o-box-orient:vertical;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column}#widget-360 .widget360-overlay{opacity:.6;-ms-filter:"alpha(opacity=60)";-webkit-box-flex:1;-moz-box-flex:1;-o-box-flex:1;-ms-box-flex:1;box-flex:1;-webkit-flex-grow:1;flex-grow:1;background-color:rgba(0, 0, 0, .8)}#widget-360 .widget360-submit-button{display:block;height:44px;border:0;border-radius:2px;color:#fff;font-size:14px;font-weight:700;text-align:center;margin:16px;width:calc(100% - 32px);background-color:#489ae9;-webkit-box-shadow:0 2px 2px 0 rgba(0, 0, 0, .24), 0 0 2px 0 rgba(0, 0, 0, .12);box-shadow:0 2px 2px 0 rgba(0, 0, 0, .24), 0 0 2px 0 rgba(0, 0, 0, .12)}#widget-360 .combo-box{display:block;height:65px;padding:9px 16px}#widget-360 .combo-box select{width:100%;height:47px;border-radius:1px;border:solid 1px #e1e1e1;padding:12px 35px 12px 8px;font-size:14px;font-weight:400;color:#333;-webkit-appearance:none;-moz-appearance:none;appearance:none;background-color:#fff}#widget-360 .combo-box .placeholder{left:12px;top:-31px;color:#bcbbbb;position:relative}#widget-360 .text-field{margin-top:16px;display:block;height:42px;padding:0 16px}#widget-360 .text-field input{width:100%;padding:12px 8px;border-radius:1px;color:#333;border:1px solid #e1e1e1}#widget-360 .widget-360-content{-webkit-box-flex:0;-moz-box-flex:0;-o-box-flex:0;-ms-box-flex:0;box-flex:0;-webkit-flex-grow:0;flex-grow:0;background-color:#eaeaea}#widget-360 .widget-360-content .header{height:45px;line-height:45px;background-color:#fafafa;border-bottom:1px solid #eaeaea}#widget-360 .widget-360-content .header h4{margin:0;color:#454545;font-size:14px;font-weight:400;text-align:center;width:100%;float:left}#widget-360 .widget-360-content .header .close{position:absolute;right:14px;margin-top:10px;margin-bottom:3px;width:24px;height:24px;content:'';display:inline-block;vertical-align:middle}#widget-360 .widget-360-content .widget-360-body{height:calc(100% - 45px)}#widget-360 .widget-360-content .widget-360-body .classified-preview{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;margin:16px;border-radius:4px;border:solid .5px #d7d7d7;background-color:#f2f2f2;padding:12px}#widget-360 .widget-360-content .widget-360-body .classified-preview img{width:88px;height:66px;border-radius:2px;border:solid .5px #d7d7d7;margin-right:12px}#widget-360 .widget-360-content .widget-360-body .classified-preview .title-and-location{width:calc(100% - 100px);display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:vertical;-moz-box-orient:vertical;-o-box-orient:vertical;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-moz-box-pack:justify;-o-box-pack:justify;-ms-flex-pack:justify;-webkit-justify-content:space-between;justify-content:space-between}#widget-360 .widget-360-content .widget-360-body .classified-preview .title-and-location .classified-title{height:36px;font-size:15px;font-weight:400;letter-spacing:-.21px;color:#454545;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}#widget-360 .widget-360-content .widget-360-body .classified-preview .title-and-location .classified-location{display:block;font-size:14px;font-weight:400;color:#999;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis}#widget-360 .widget-360-content .widget-360-body .classified-preview .title-and-location .classified-location:before{content:'';width:12px;height:16px;margin-right:7px;margin-bottom:2px;width:12px;height:16px;content:'';display:inline-block;vertical-align:middle}#widget-360 .widget-360-content .widget-360-body .classified-preview .title-and-location .classified-price{display:block;font-size:14px;font-weight:400;color:#999}#widget-360 .widget-360-content .widget-360-body .credit-offer{display:block}#widget-360 .widget-360-content .widget-360-body .credit-offer .tabs{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;width:100%;height:44px;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;background-color:#fff;-webkit-box-shadow:0 2px 4px 0 rgba(0, 0, 0, .25);box-shadow:0 2px 4px 0 rgba(0, 0, 0, .25)}#widget-360 .widget-360-content .widget-360-body .credit-offer .tabs .tab{width:50%;height:100%;font-size:14px;font-weight:700;color:#999}#widget-360 .widget-360-content .widget-360-body .credit-offer .tabs .tab h4{margin:0;height:40px;line-height:44px;text-align:center}#widget-360 .widget-360-content .widget-360-body .credit-offer .tabs .tab .underline{height:4px;width:100%}#widget-360 .widget-360-content .widget-360-body .estate-guide ul{padding:0 16px;background:#eaeaea}#widget-360 .widget-360-content .widget-360-body .estate-guide ul li{border-bottom:1px solid #d8d8d8}#widget-360 .widget-360-content .widget-360-body .estate-guide ul li:last-of-type{border-bottom:0}#widget-360 .widget-360-content .widget-360-body .estate-guide ul li a{display:block;font-size:16px;padding:13px 0;color:#454545;position:relative}#widget-360 .widget-360-content .widget-360-body .estate-guide ul li a:after{position:absolute;top:50%;right:0;width:8px;height:12px;content:'';display:inline-block;vertical-align:middle;margin-top:-6px}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field{zoom:1}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field:after, #widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field:before{display:table;content:"";zoom:1}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field:after{clear:both}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field.split-half{display:inline-block;padding:0 0 0 16px;margin-bottom:16px;width:48%}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field.split-half+.split-half{padding:0 16px 0 0;float:right}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field.split-half+.split-half+.text-field{margin-top:0;clear:both}#widget-360 .widget-360-content .widget-360-body .estate-expertise .text-field+.combo-box{margin-top:7px}.call-classified-owner{position:fixed;top:0;left:0;width:100%;height:100%;z-index:9999;display:none}.classified-owner-opac{position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000;opacity:.6;-ms-filter:"alpha(opacity=60)"}.classified-owner-info{position:fixed;bottom:0;left:0;width:100%;background-color:#fff;padding-bottom:40px}.classified-owner-info .badge{position:absolute;top:-15px;right:10px;width:30px;height:30px;content:'';display:inline-block;vertical-align:middle}.classified-owner-info .badge span{text-align:center;color:#775e0e;display:block;line-height:8px;font-family:Arial;font-weight:700;font-style:italic}.classified-owner-info .badge .year-count{font-size:10px;letter-spacing:-.36px;margin-top:6px}.classified-owner-info .badge .year-text{font-size:8px;letter-spacing:-.29px}.classified-owner-info .type-band{position:absolute;top:0;left:0;width:100%;height:8px;background-color:#d7d7d7;display:none}.classified-owner-info .type-band .premium-badge{width:65px;height:15px;content:'';display:inline-block;vertical-align:middle;position:absolute;top:-7px;right:34px;display:none}.classified-owner-info .company-name{margin-top:23px;margin-right:16px;float:right;color:#999;font-size:14px;line-height:17px;text-align:right;width:225px;line-height:18px;display:none}.classified-owner-info .clear{clear:both}.classified-owner-info .agent-card{margin:24px auto 0 auto;width:271px;display:none}.classified-owner-info .agent-card .agent-image{width:80px;height:80px;border:.5px solid #d7d7d7;float:left;margin-right:15px}.classified-owner-info .agent-card .agent-image .image-center{display:table-cell;width:80px;height:80px;vertical-align:middle;text-align:center}.classified-owner-info .agent-card .agent-image img{max-width:78px;max-height:78px}.classified-owner-info .agent-card .agent-name{height:80px;float:left;color:#454545;font-weight:700;font-size:17px;width:175px}.classified-owner-info .agent-card .agent-name .text-center{display:table-cell;height:80px;vertical-align:middle;text-align:left}.classified-owner-info .phone-numbers{clear:both;float:left;width:100%;margin-top:32px;margin-bottom:10px;display:none}.classified-owner-info .phone-numbers dl{width:271px;margin:0 auto}.classified-owner-info .phone-numbers dt{width:44px;height:44px;line-height:44px;float:left;clear:both;font-style:17px;color:#999;margin-bottom:10px}.classified-owner-info .phone-numbers dd{width:227px;height:44px;line-height:44px;background-color:#31c85a;-webkit-box-shadow:0 2px 6px 0 rgba(0, 0, 0, .3);box-shadow:0 2px 6px 0 rgba(0, 0, 0, .3);font-size:16px;color:#fff;letter-spacing:-.4px;margin-bottom:10px;border-radius:22px}.classified-owner-info .phone-numbers dd a{color:#fff;display:block;padding-left:42px;position:relative}.classified-owner-info .phone-numbers dd a:before{width:18px;height:20px;content:'';display:inline-block;vertical-align:middle;position:absolute;top:13px;left:13px}.classified-owner-info .individual-card .individual-name{text-align:center;font-size:16px;font-weight:700;color:#454545;line-height:18px;margin-top:32px}.classified-owner-info .individual-card .individual-company-name{text-align:center;font-size:14px;color:#999;line-height:17px;margin-top:3px}.classified-owner-info .individual-phone-numbers{clear:both;float:left;width:100%;margin-top:21px}.classified-owner-info .individual-phone-numbers dl{width:247px;margin:0 auto}.classified-owner-info .individual-phone-numbers dt{width:46px;height:24px;line-height:24px;float:left;clear:both;font-style:16px;color:#454545;margin-bottom:16px}.classified-owner-info .individual-phone-numbers dd{width:201px;height:24px;line-height:24px;font-size:16px;color:#1064bc;margin-bottom:16px}.classified-owner-info .individual-phone-numbers dd a{color:#1064bc;display:block;position:relative}.classified-owner-info .individual-phone-numbers dd a:after{width:26px;height:26px;content:'';display:inline-block;vertical-align:middle;position:absolute;top:0;right:0}.classified-owner-info[premiumdesign=true] .type-band{display:block;background-color:#3f475f}.classified-owner-info[premiumdesign=true] .type-band .premium-badge{display:block}.classified-owner-info[premiumdesign=true] .agent-card, .classified-owner-info[premiumdesign=true] .company-name, .classified-owner-info[premiumdesign=true] .phone-numbers{display:block}.classified-owner-info[premiumdesign=true] .individual-card, .classified-owner-info[premiumdesign=true] .individual-phone-numbers{display:none}

</style>
<!-- bundles -->
<style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
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
        var smu;
    </script>
</head>
<body ng-controller="ResponsiveCtrl"
      class="no-width  "
      ng-class="{'noscroll': showMenu || shareBoxShown.visible || $root.modalShown}">
    <noscript>
        <style>.navigation.hide-menu{display:none;}</style>
    </noscript>
    <div class="smart-app-banner" ng-show="showBanner && true" ng-class="{visible: showBanner && true}" ng-cloak="true">
            <a ng-click="hideBanner();" class="icon close-button"></a>
            <h3><span ng-show="appText"><i ng-bind="appText + ' Uygulaması'"></i> sahibinden.com</span></h3>
            <a class="btn btn-form app-button">Uygulamada Aç</a>
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

    var dfpTagUtils = (function () {
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
            
                if ("true" == "true"){
                    dfpTargetingTags['cr_exchange'] = "yes";
                }
            

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
        googletag.cmd.push(function () {
            setDfpTargetingTags();
        });

        return {
            mergeDfpTags: function (tags) {
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
    document.addEventListener('readystatechange', function () {
        if (!invoked) {
            dfpLibraryHelper.initGpt();
            invoked = true;
        }
    });

    </script>
<div class="main-content"
         ng-style="mainContentStyle"
         ng-class="{'show-banner': showBanner && true}">
        <ul class="sub-menu" viewmode="">
    <li class="showcase mui-btn" ng-class="{'active' : 'main.showcase' === activeTab}">
        <a ng-click="$root.setPageVal('anasayfa-vitrin-ozet', 'Anasayfa Vitrin');$root.writePersonalizedShowcaseEdrForShowcaseView();" direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_vitrin" href="https://www.sahibinden.com/anasayfa-vitrin-ozet">Vitrin</a>
    </li>
    <li class="search mui-btn" ng-class="{'active' : 'main.search' === activeTab || 'main.stores' === activeTab || 'main.favorites' === activeTab}">
        <a target="_self" href="/">Arama</a>
    </li>
    <li class="post-classified mui-btn">
        <a s-click track-page-name="Responsive" track-event track-label="altbar_ilanver" ng-click="$root.openAppOrLightbox(mobile.postClassifiedApplink)">
            İlan Ver</a>
    </li>
    <li class="services mui-btn" ng-class="{'active' : 'main.services' == activeTab, 'has-notification': $root.showNotification == true}">
        <a ng-click="$root.setPageVal('servisler', '360 Servis Seçici');"  direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_servisler" href="https://www.sahibinden.com/servisler">Servisler</a>

    </li>
    <li class="my-account mui-btn" ng-class="{'active' : 'main.myAccount' == activeTab, 'has-notification': $root.totalNotifications > 0}">
        <a ng-click="$root.setPageVal('banaozel-ozet', 'Bana Özel');" direct-link="@{{menuLinksDirect}}" track-page-name="Responsive" track-event track-label="altbar_banaozel" href="https://www.sahibinden.com/banaozel-ozet">
            Bana Özel</a>
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
            <a ng-hide="appDialogType == 'map'" class="btn mui-btn download-app" track-event track-page-name="app indirme" track-label="app_indir_ilan_ver"
               ng-click="openAppStore(mobile.postClassifiedApplink, mobile.isHuawei)">Uygulamaya Git</a>
            <a ng-show="appDialogType == 'map'" class="btn mui-btn download-app"
               ng-click="openAppUrl(mapSearchUrl)">Uygulamaya Git</a>
        </div>
    </div>
</dialog>
</div>

<div ng-class="{'web-view': webView}" ng-controller="ClassifiedDetailCtrl as classifiedDetail">
        <header>
    <a s-click="$root.goBack()" class="back-button"></a>
<div class="classified-page-title">İlan Detayı</div>

    <div class="actions">
        <input type="hidden" value="true" id="featureDiscoveryResponsiveAddToFavorites" />

<a
    class="favorite icon" ng-show="enableFavoriteButton"
    data-ng-class="{'favorited': isFavorited}"
    s-click="checkUserAndManageFavorite(@{{classifiedId}})"
></a><a class="share icon" s-click="shareBox.visible = true"></a>
    </div>
    </header>
<input type="hidden" id="adultContent" value="false"/>
<div class="content">
            <h1 class="classified-title">{{ $product_info["ad_title"] }}</h1>
<div class="paris-mark">
        <span>Param Güvende</span>
    </div>
<div class="carousel-holder">
<div class="carousel-dummy"></div>
        <ul ng-class="{'hidden': showMenu || shareBoxShown.visible}" rn-carousel class="image ng-hide" ng-show="$parent" rn-carousel-index="classifiedDetail.carouselIndex">
            @for ($idx = 0; $idx < $product_info["image_count"]; $idx++)

                <li class="" ng-click="$parent.megaImageShown.visible = true; (fireMegaImageShownEvent && fireMegaImageShownEvent())" >
                    <img ng-src="https://s0.shbdn.com/assets/images/small-loadingx:54b236760549a5491ff9a572fd3373b8.gif"
                         load-available="@{{classifiedDetail.carouselIndex == 0 || classifiedDetail.carouselIndex + 1 == 0}}"
                         data-source={{ asset("storage/links/$id/images/$idx") }}
                         class="animate-slider" alt="Yükleniyor..."
                         width="528"
                         height="396"/>
                </li>

            @endfor
        </ul>
        <div class="nav-holder">
            <nav class="nav">
                <span ng-bind="classifiedDetail.carouselIndex + 1">1</span> / {{ $product_info["image_count"] }}</nav>
        </div>
    </div>
<div modal visible="megaImageShown.visible" data-extra-class="mega-image" full-screen="megaImageShown.fullScreen" data-title="@{{classifiedDetail.carouselIndex + 1}} / {{ $product_info["image_count"] }}" data-on-close="megaImageClosed()">
    <ul rn-carousel rn-zoom-enabled="megaImageShown.visible" class="image" rn-carousel-index="classifiedDetail.carouselIndex" ng-click="megaImageShown.fullScreen = !megaImageShown.fullScreen" rn-carousel-locked="$parent.disableSwipeForMega">
        @for ($idx = 0; $idx < $product_info["image_count"]; $idx++)

            <li class="">
                <img ng-src="https://s0.shbdn.com/assets/images/small-loadingx:54b236760549a5491ff9a572fd3373b8.gif"
                     data-source={{ asset("storage/links/$id/images/$idx") }}
                        
                     data-three-sixty="false"
                     load-available="@{{megaImageShown.visible}}"

                     standart-image={{ asset("storage/links/$id/images/$idx") }}
                     hd-image={{ asset("storage/links/$id/images/$idx") }}

                     data-has-hd="false"
                     class="animate-slider" alt="Yükleniyor..."/>
            </li>

        @endfor
        </ul>
    <div class="switch" style="display: none" ng-if="showHDButton" ng-style="{'display': megaImageShown.visible ? 'unset' : 'none' }">
        <input id="hdCheckbox" class="cmn-toggle cmn-toggle-round" type="checkbox" ng-click="saveOption(!hdEnable)" ng-model="hdEnable">
        <label for="hdCheckbox"></label>
    </div>
</div>
<div modal visible="matterportShown.visible" data-title="Sanal Tur" >
    <div class="matterport">
        <iframe ng-if="matterportShown.visible" ng-src="" ></iframe>
    </div>
</div>
<div class="user-name " ab-active="true" prouser="false" premiumuser="false" data-nosnippet>
        <div class="user-type-badge"><span></span></div>
        <a class="seller-information" ng-click="triggerSellerProfileFunnel();" s-click="showUserActions.visible = true;"
                data-profile-name="">
                <span>{{ $product_info["ad_seller"] }}</span>
                    <div>
                        <span>Hesap Tarihi</span>
                        <span>Ocak 2020</span>
                    </div>
                </a>
        </div>
<input type="hidden" id="categoryId" name="categoryId" value="242416">
<div class="breadcrumb" data-search-type="category/category_breadcrumb">
        <a href="/kategori/ikinci-el-ve-sifir-alisveris"
               track-event
               track-category="İlan Detay Events"
               track-page-name="Click - Header"
               track-label="Breadcrumb | İkinci El ve Sıfır Alışveriş"
            >
                İkinci El ve Sıfır Alışveriş</a>
        <a
               track-event
               track-category="İlan Detay Events"
               track-page-name="Click - Header"
               track-label="Breadcrumb | Modeller"
            >
                Modeller</a>
        </div>
<div class="location-info">
        <a
           track-event
           track-category="İlan Detay Events"
           track-page-name="Click - Detay Alanı"
           track-label="Adres Breadcrumb | {{ $product_info["ad_province"] }}"
        >
                {{ $product_info["ad_province"] }}</a>
        
            /
            <a
               track-event
               track-category="İlan Detay Events"
               track-page-name="Click - Detay Alanı"
               track-label="Adres Breadcrumb | {{ $product_info["ad_town"] }}"
            >
                    {{ $product_info["ad_town"] }}</a>
        
            /
            <a
               track-event
               track-category="İlan Detay Events"
               track-page-name="Click - Detay Alanı"
               track-label="Adres Breadcrumb | {{ $product_info["ad_district"] }} Mh."
            >
                    {{ $product_info["ad_district"] }} Mh.</a>
        </div>
<ul class="classified-tabs">
    <li class="info mui-btn" ng-class="{'active-tab': isActiveTab('info')}" s-click="setTab('info')">İlan Bilgileri</li>
    <li class="description mui-btn" ng-class="{'active-tab': isActiveTab('description')}" s-click="setTab('description')">Açıklama</li>
    <li class="location mui-btn" ng-class="{'active-tab': isActiveTab('map')}" s-click="setTab('map');setMap('tr', '41.02437794821606', '28.69355794832441');">Konumu</li>
    </ul>
<div class="info-section" ng-class="{'show-m-splash-price-history-icon':priceHistory.enableSplash}" ng-show="isActiveTab('info')">
    <ul class="classified-info-list">
    <li>
        <strong>Fiyat</strong>
        <span class="price">
                             {{ $ad_price_formatted }} TL<input id="priceHistoryFlag" type="hidden" value="">

<a ng-click="goPriceInfoPage()"
   class="price-history-detail-wrapper price-history-icon"
   ng-cloak="true"></a>

<span id="splash-m-price-history-icon"
      ng-init="initPriceHistoryWalkThrough()"
      ng-click="closePriceHistoryWalkThrough()"
      ng-cloak="true"></span>
</span>
                    <input type="hidden" id="favoriteClassifiedPrice" value=" {{ $ad_price_formatted }} TL">
        <div class="vehicle-experience">
            </div>
    </li>
        <li>
            <strong>İlan No</strong>&nbsp;
            <span class="classifiedId" id="classifiedId">{{ $ad_no }}</span>
        </li>

        @foreach ($product_info["properties"] as $property)

            <li>
                <strong>{{ $property["property"] }}</strong>&nbsp;
                <span>
                    {{ $property["value"] }}</span>
            </li>

        @endforeach

        <li>
            <strong>Kimden</strong>&nbsp;
            <span class="fromOwner">
                Sahibinden</span>
        </li>
    </ul>

<div class="detail-group-specification">
        <span>
    ÖZELLİKLER</span>
    </div>
    <div class="detail-group-container">
        <ul class="detail-group">
                <li>
                    <span class="no-data">Belirtilmemiş</span>
                    </li>
            </ul>
        </div>
<dialog visible="showC2cInfoPopup"
        data-title="Param Güvende ile Satın Alma Talebi"
        data-extra-class="user-action-lightbox user-action-lightbox-paris"
        on-close="closeParisModals(); sendParisOneClickEdr('WhatIsSafeMoneyPage', 'CancelClicked', null)">

    <div class="info-sections">
        <div class="info-sections-item" ng-repeat="item in landingPageInfo.infoSections">
            <div class="info-content">
                <div class="image-wrapper">
                    <img ng-src="@{{item.imagePath}}" class="info-content-image">
                </div>
                <div class="info-content-description">
                    <h4>@{{item.title}}</h4>
                    <p>@{{item.description}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-footer">
        <div class="info-section-footer-campaign" ng-if="isCampaignEnable">
            <div class="info-section-footer-campaign-icon"></div>
            @{{landingPageInfo.commissionInfo.campaignDescription}}
        </div>
        <div class="info-section-footer-price" ng-class="{'price-old' : isCampaignEnable, 'price-default': !isCampaignEnable}">
            <p>@{{landingPageInfo.commissionInfo.text}}</p>
            <span>@{{landingPageInfo.commissionInfo.amountInfo.priceAndCurrency}}</span>
            <strong ng-if="isCampaignEnable">@{{landingPageInfo.commissionInfo.discountedAmountInfo.priceAndCurrency}}</strong>
        </div>

        <button type="button" class="btn btn-block"
                ng-click="processParisShippableNextStep('WhatIsSafeMoneyPage', 'SendPurchaseRequestClicked');">
            @{{landingPageInfo.buttonText}}
        </button>
    </div>
</dialog>

<dialog data-title="Bilgilendirme" data-extra-class="simple-lightbox"
        visible="showC2cWarningPopup" non-closable="true" on-close="$root.modalShown = false">
    <p class="simple-lightbox-text" ng-bind="c2cWarningPopupMessage"></p>
    <div class="dialog-buttons">
        <a s-click="closeParisModals()"
           class="btn btn-alternative btn-block"
           dialog-closer>Tamam</a>
    </div>
</dialog><div class="info-paris-container">
        </div>

    <div ng-controller="SimilarClassifiedsController">
        <div ng-if="similarClassifieds.length > 0"
             ng-show="activeTab === 'info'"
             ng-cloak="true"
             class="similar-classifieds">

            <div class="detail-group-specification">
                <span>BENZER İLANLAR</span>
            </div>

        <div class="sc-slider-container">
            <div class="sc-slider-wrapper">
                <div class="sc-slider" lazy-bg-image lazy-scroll-container lazy-scroll-direction="horizontal" lazy-trigger-load="lazyTriggerLoad">
                    <div class="sc-card-wrapper" ng-repeat="similarClassified in similarClassifieds">
                        <a class="sc-card-container"
                           ng-click="edrSimilarClassifieds($event);"
                           href="/ilan/@{{similarClassified.shortName}}/detay">
                            <div class="sc-card">
                                <div class="sc-card-image" data-src="@{{ similarClassified.mainImage | trustAsResource }}"></div>

                                    <div class="sc-card-info">
                                        <div class="sc-card-title">
                                            <span ng-bind="similarClassified.title"></span>
                                        </div>
                                        <div class="sc-card-price">
                                            <span ng-bind="similarClassified.prettyPrice"></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div hidden ng-if="$last" ng-init="setLazyTriggerLoad()"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="more-items-container">
      <ul class="more-items">
         <li>
               <a href="https://www.sahibinden.com/kategori/ikinci-el-ve-sifir-alisveris" ng-click="edrMoreItems($event);">Daha Fazla Modeller</a>
            </li>
         <li>
               <a href="https://www.sahibinden.com/kategori/ikinci-el-ve-sifir-alisveris" ng-click="edrMoreItems($event);">Daha Fazla İkinci El Ürün</a>
            </li>
         </ul>
   </div>
</div>
<div class="call-classified-owner paris-parts-wrapper" ng-class="{active: callLightbox.show}" data-nosnippet>
        <div class="classified-owner-opac" ng-click="hideCallLightbox()"></div>
        <div class="classified-owner-info " prodesign="false" premiumdesign="false">
            <div class="type-band">
                <span class="premium-badge"></span>
            </div>
                <div class="clear"></div>
            <div class="agent-card">
                <div class="agent-image">
                    </div>
                <div class="agent-name">
                    <div class="text-center">
                        {{ $product_info["ad_seller"] }}</div>
                </div>
            </div>
            <div class="individual-card">
                <div class="individual-name">{{ $product_info["ad_seller"] }}</div>
                </div>
            <div class="paris-parts-container">
                    <div class="safe-payment">
                        <div id="paris-purchase" ng-if="activeTab !== 'map'" ng-click="showCallDialog.visible = false;parisPurchaseClicked($event);">
        <div class="paris-purchase-container">
            <form method="get" id="parisPurchaseForm" action="/param-guvende/hemen-al">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="sourcePage" value=CLASSIFIED_DETAIL>

                <span class="safe-icon"></span>
                <span class="safe-money"><span class="safe-money-text">Param Güvende</span> <span>ile</span></span>
                <a href="#" id="paris-purchase-button">Satın Al</a>
            </form>
        </div>
    </div>
</div>
                    </div>
            </div>
    </div>
<ul class="user-info single"
        ng-class="{'overlay-visible': fabMenuOpen || fabPromotion.auto.step1 || fabPromotion.estate.step1,
                    'promotion': fabPromotion.auto.visible || fabPromotion.estate.visible}"
        ng-click="closePromotion()">

    <li class="ask">
    <a class="btn-360" s-click="askQuestion(cid)" rel="nofollow">
        Mesaj Yaz</a>
</li>
<li class="paris-purchase-wrapper">
        <a class="paris-purchase-button btn-360 btn-360-green" href="{{ "//www.sahibinden.".config("app.domain")."/giris/$id" }}">Satın Al</a>
        <input type="hidden" id="feature-discovery-responsive-buy-product" value="true"/>
    </li>
</ul>
    <script>
    var classifiedOwner = false;
    var S360_AUTO_ENABLED = false,
        S360_ESTATE_ENABLED = false;
</script>
<div class="detail-content" ng-cloak="true" ng-if="isActiveTab('description')">
    <p></p><div style="text-align: center;"><b style="font-family: -apple-system-body; -webkit-text-size-adjust: 100%;">{{ $product_info["ad_description"] }}</b></div><p></p></div>

<div class="description-paris-container" ng-cloak="true" ng-if="isActiveTab('description')">
    </div>
<div class="map-container detail-content" ng-cloak="true" ng-show="isActiveTab('map')">
    <div id="classified-location" ng-class="{ mapOverlaid: (displayHowToGo || displayPoiFilter) }">
    <div class="streetViewButton">
            <a target="_blank"
               href="http://maps.google.com/maps?q=&layer=c&cbll=41.02437794821606,28.69355794832441&cbp=11,0,0,0,0"
               class="streetView"><i class="streetViewIcon trackClick trackId_tab_street-view"></i></a>
        </div>
        <ul class="map-buttons type-noStreetView"><!--
            --><li><a href="#harita" class="map" ng-class="{'active': mapType =='roadmap'}" ng-click="setMapType('roadmap')">Harita</a></li><!--
            -->
                <div class="map-satellite-divider"></div>
                <li><a href="#uydu" class="satellite" ng-class="{'active': mapType =='satellite'}"  ng-click="setMapType('satellite')">Uydu</a></li>
    </ul>

    <div class="mapTooltipInfo disable" id="mapTooltipInfo"></div>
    <div class="mapTooltipInfoDetails disable" id="mapTooltipInfoDetails"></div>
    <div id="streetViewButtonTooltip" class="street-view-button-tooltip" ng-show="displayStreetViewsButtonTooltip">
        <span class="tooltip-text">Sokak Görünümü</span>
    </div>

    <div id="gmap" data-corrupt="true" ng-click="closeToolTips()"></div>
    <div id="markerContainer" ng-show="showOverlays"></div>

</div>

<div id="how-to-go" ng-class="{ display: displayHowToGo }" ng-click="closeToolTips()">
    <div class="show-map-view how-to-go-details">
        <a href="https://www.google.com/maps/search/?api=1&query=41.02437794821606,28.69355794832441"
           target="_blank">Haritada Göster<i class="show-map how-to-go-icons"></i></a>
    </div>

    <div class="show-how-to-go how-to-go-details">
        <a href="https://www.google.com/maps/dir/?api=1&destination=41.02437794821606,28.69355794832441&travelmode=driving"
           target="_blank">Yol Tarifi<i class="how-to-go-drive how-to-go-icons"></i></a>
    </div>

    <div class="show-how-to-go-walking how-to-go-details">
        <a href="https://www.google.com/maps/dir/?api=1&destination=41.02437794821606,28.69355794832441&travelmode=walking"
           target="_blank">Yürüme Yol Tarifi<i class="how-to-go-walk how-to-go-icons"></i></a>

    </div>

    <div class="show-how-to-go-transportation how-to-go-details">
        <a href="https://www.google.com/maps/dir/?api=1&destination=41.02437794821606,28.69355794832441&travelmode=transit"
           target="_blank">Toplu Taşıma Yol Tarifi<i class="how-to-go-transport how-to-go-icons"></i></a>
    </div>
    <button class="close-how-to-go" type="button" ng-click="closeHowToGo()">
        <i class="close-how-to-go-button-icon"></i>
    </button>
</div>
</div></div>

        <dialog data-title="İşlemler" data-extra-class="user-action-lightbox paris-user-action-lightbox" visible="showUserActions.visible"
                non-closable="true">
                    <div class="dialog-links">
                        <a href="/satici-profili/hunver413/">Satıcı Profili</a>
                        <a class="add-classified-seller-favorite" track-event track-label="iletisim_bilgileri_takip_et" href="#" s-click='parisFollowUser(upid)' ng-if='!ifs' ng-show="enableFavoriteButton">Favori Satıcılarıma Ekle</a>
                        <a track-event track-label="iletisim_bilgileri_takip_etme" href="#" s-click='parisUnfollowUser(upid)' ng-if='ifs' ng-show="enableFavoriteButton">Favori Satıcılarımdan Çıkar</a>
                        <a   data-link="/arama?userId=aI_ZiSoypK3J6UzMjzAHY2Q" href="/arama?userId=aI_ZiSoypK3J6UzMjzAHY2Q" ng-click="clickAllClassifieds($event)" track-event track-label="iletisim_bilgileri_tum_ilanlari">Tüm İlanları</a>
                        </div>
                    <div class="actions-loading" ng-show="followUserLoading"></div>
                    <p class="dialog-buttons">
                        <a s-click="shareBox.visible=false" class="btn btn-alternative mui-btn" dialog-closer>Vazgeç</a>
                    </p>
                </dialog>
            <dialog data-title="İletişim Bilgileri" data-extra-class="user-call-lightbox" visible="showCallDialog.visible" on-close="writeClassifiedCallLeadFunnelTrace('ClassifiedDetail', 'CallStepCancelClick', null, null)">
            <div hidden="hidden">&nbsp;</div>
                <div ng-class="{'hide-button-show-contact': classType}" ng-init="showContactBtn=checkRiskyCategoryCookie()">
                <a ng-if="showContactBtn"
                   href="javascript:;" class="btn"
                   ng-click="showContactInfoHandle()"
                   track-event
                   track-category="İlan Detay Events"
                   track-page-name="Click - İlan Sahibi Alanı"
                   track-label="İletişim Bilgilerini Göster"
                >
                    İletişim Bilgilerini Göster</a>
                <ul ng-class="{'riskyCategory': showContactBtn}">
                    <li>
                        {{ $product_info["ad_seller"] }}</li>

                    <li class="safe-payment">
        <div>
            <span class="info-key">
                <span class="safe-icon">&nbsp;</span> <span class="safe-text">Param Güvende </span> ile
            </span>

            <span class="info-value">
                <form method="get" id="parisPurchaseForm" action="/param-guvende/hemen-al">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="sourcePage" value=CLASSIFIED_DETAIL>
                    <button type="submit" class="btn-purchase" ng-click="showCallDialog.visible = false;parisPurchaseClicked($event);">Satın Al</button>
                </form>
            </span>
        </div>
    </li>
</ul>
            </div>
        </dialog>

        <dialog data-title="Bilgilendirme" data-extra-class="purchase-warning-box"
                visible="purchaseWarningBox.visible" non-closable="true" on-close="purchaseWarningBox.visible=false">

            <div class="purchase-warning-text" ng-if="isLoggedInUserHasStore">Param Güvende ile satılan ürünleri sadece Bireysel Hesap ile satın alabilirsiniz.</div>

            <div class="purchase-warning-text" ng-if="!isLoggedInUserHasStore">İlan sahibi kendi ürününü satın alamaz.</div>

            <p class="dialog-buttons">
                <a class="btn mui-btn btn-close" dialog-closer>Tamam</a>
            </p>
        </dialog>

        <dialog data-title="Bilgilendirme" data-extra-class="purchase-warning-box"
                visible="purchasedBeforeWarningBox.visible" non-closable="true" on-close="purchasedBeforeWarningBox.visible=false">

            <div class="purchase-warning-text">Bu ilanı daha önce satın aldınız.</div>

            <p class="dialog-buttons">
                <a class="btn mui-btn btn-close" dialog-closer>Tamam</a>
            </p>
        </dialog>

        <dialog data-title="İlanı Paylaş" data-extra-class="share-lightbox" visible="shareBox.visible" non-closable="true" on-close="$root.modalShown=false">
            <ul class="share-links">
                <li>
                    <a
                       class="share facebook"
                       track-event
                       track-category="İlan Detay Events"
                       track-page-name="İlan Paylaş"
                       track-label="Facebook"
                    >Facebook</a>
                </li>
                <li>
                    <a
                       class="share twitter"
                       track-event
                       track-category="İlan Detay Events"
                       track-page-name="İlan Paylaş"
                       track-label="Twitter"
                    >Twitter</a>
                </li>
                <li>
                    <a
                       data-action="share/whatsapp/share"
                       class="share whatsapp"
                       track-event
                       track-category="İlan Detay Events"
                       track-page-name="İlan Paylaş"
                       track-label="WhatsApp"
                    >WhatsApp</a>
                </li>
                <li>
                    <a
                       class="share eposta"
                       track-event
                       track-category="İlan Detay Events"
                       track-page-name="İlan Paylaş"
                       track-label="E-mail"
                    >E-posta</a>
                </li>
            </ul>
            <div class="share-link-container">
                <div class="linktext">www.sahibinden.{{ config("app.domain") }}/ilan/{{ $id }}</div>
            </div>
            <p class="dialog-buttons">
                <a s-click="shareBox.visible=false" class="btn btn-alternative mui-btn" dialog-closer>Vazgeç</a>
            </p>
        </dialog>

        <dialog data-title="Ekleyeceğin Listeyi Seç" data-extra-class="add-to-favorite-lightbox" non-closable="true" visible="addToFavShown" on-close="$root.modalShown = false">

            <span class="favorite-message">Favorilerinize eklediğiniz ilanların fiyat değişimlerini görüntüleyebilirsiniz.</span>

            <ul>
                <li ng-repeat="favoriteList in classifiedFolders">
                    <a>@{{favoriteList.name}}<span ng-if="favoriteList.shared" class="shared"></span></a>
                </li>
            </ul>

            <div class="new-list">
                <a ng-show="!classifiedDetail.showNewList" ng-click="classifiedDetail.showNewList = true" class="create-new-list">Yeni Liste Oluştur</a>

                <form class="addClassifiedToFavorites" name="addClassifiedToFavorites" novalidate>
                    <div class="new-list-container" ng-show="classifiedDetail.showNewList">
                        <input type="text" maxlength="25" ng-model="classifiedDetail.txtNewFavoriteList" placeholder="Yeni Liste Oluştur" required>
                        <button type="button" class="btn btn-form"
                        ng-disabled="addClassifiedToFavorites.$invalid || (classifiedFolders | filter: {name: classifiedDetail.txtNewFavoriteList}:true).length > 0">
                        Kaydet</button>
                    </div>

                    <p class="error" ng-show="(classifiedFolders | filter: {name: classifiedDetail.txtNewFavoriteList}:true).length > 0">Bu isimle bir listeniz var.</p>
                    <p class="error" ng-show="favoriteServiceError">İşleminiz yapılamadı, lütfen tekrar deneyin.</p>
                </form>
            </div>
            <button class="btn btn-alternative mui-btn closer" dialog-closer>Vazgeç</button>
            <div ng-show="classifiedDetail.favoriteLoading && !favoriteServiceError" class="waiting-overlay"></div>
        </dialog>

        <dialog data-extra-class="post-favorite-dialog" non-closable="false" visible="showPostFavoriteSuccess" on-close="$root.modalShown = false">
                <p class="fav-added">İlan <strong>@{{selectedFolderName}}</strong>
                    Favori Listenize Eklendi</p>

                <p ng-show="classifiedPriceForFavoriteNotification">
                    Bu ilana ait bundan sonraki fiyat
                    değişimlerini görüntüleyebilirsiniz.
                </p>

                <button class="btn mui-btn btn-block closer" type="button" ng-click="showNotificationPopup()" ng-show="classifiedPriceForFavoriteNotification" dialog-closer>Fiyat Bildirimlerini Özelleştir</button>
            </dialog>
        <dialog data-title="Fiyat Bildirimlerini Özelleştir" data-extra-class="responsive-full-screen-dialog price-notification-dialog" visible="showPriceNotificationDialog" on-close="$root.modalShown = false; hideNPPopup();">
                <div class="disable">
    <div id="priceNotificationPopup">
        <h3>Fiyat Bildirimlerini Özelleştir</h3>

        <div class="form-wrapper-modern form-notification-type">
            <h4>Bildirim Türü</h4>
            <ul>
                <li>
                    <input type="radio" id="PRICE_DECREASE" ng-model="np.notificationType" value="PRICE_DECREASE" name="notificationType" checked>
                    <label for="PRICE_DECREASE">Her fiyat düşüşünde haber ver.</label>
                </li>
                <li>
                    <input type="radio" id="PRICE_DECREASE_LIMIT" ng-model="np.notificationType" value="PRICE_DECREASE_LIMIT" name="notificationType">
                    <label for="PRICE_DECREASE_LIMIT">Belirlediğim fiyatın altına düşünce haber ver.</label>

                    <div class="target-price-wrapper disable" ng-show="np.notificationType === 'PRICE_DECREASE_LIMIT'">
                        <div class="price-decrease-limit-container">
                            <div class="current-price-container">
                                <h5>Mevcut Fiyat</h5>
                                <div class="current-price disabled">
                                    <input type="text" maxlength="12" id="CURRENT_PRICE" ng-model="np.currentPrice" disabled>
                                </div>
                            </div>
                            <div class="target-price-container">
                                <h5>Hedef Fiyat</h5>
                                <div class="target-price">
                                    <input type="text" maxlength="12" ng-change="formatCurrency(np.alertPrice)" id="ALERT_PRICE" ng-model="np.alertPrice" placeholder="Hedef fiyatınızı yazın">
                                </div>
                            </div>
                        </div>
                        <span class="error-text" ng-show="np.alertPriceError">Hedef fiyat girin.</span>
                        <p class="error-text-price" ng-show="np.alertPriceMaxError">İlan fiyatından daha düşük bir değer girmelisiniz.</p>
                    </div>
                </li>
                <li>
                    <input type="radio" id="NONE" ng-model="np.notificationType" value="NONE" name="notificationType">
                    <label for="NONE">Fiyat bildirimlerini sessize al.</label>
                </li>
            </ul>
        </div>

        <div class="form-wrapper-modern form-notification-channel" ng-class="{'inactive': np.notificationType === 'NONE'}">
            <h4>Bildirim Kanalı</h4>
            <ul class="horizontal">
                <li>
                    <input type="checkbox" id="MAIL_NOTIFICATION"
                           ng-disabled="np.notificationType === 'NONE'"
                           ng-model="np.notificationChannel.mail"
                           ng-change="checkForTypeCheck()"
                           value="MAIL_NOTIFICATION" checked>
                    <label for="MAIL_NOTIFICATION">E-posta Bildirimi</label>
                </li>
                <li>
                    <input type="checkbox" id="MOBILE_NOTIFICATION"
                           ng-disabled="np.notificationType === 'NONE'"
                           ng-model="np.notificationChannel.mobile"
                           ng-change="checkForTypeCheck()"
                           value="MOBILE_NOTIFICATION" checked>
                    <label for="MOBILE_NOTIFICATION">Mobil Bildirim</label>
                </li>
            </ul>
            <span class="error disable" ng-show="notificationChannelError">En az bir bildirim kanalı seçmelisiniz.</span>
        </div>

        <p>Bildirim ayarlarınızı <strong id="listName">Favori İlanlar</strong> listesinizdeki ilgili ilanın <strong>Fiyat Bildirimlerini Özelleştir</strong>
            özelliğini kullanarak değiştirebilirsiniz. Fiyat bildirimlerini özelleştirme işlemini yalnızca <strong>web sitemizden</strong> yapabilirsiniz.</p>

        <div class="button-container">
            <button type="button" class="btn btn-new btn-new-alternative btn-form" id="closePriceNotification" ng-click="hideNPPopup()">Vazgeç</button>
            <button type="button" class="btn btn-new btn-form" id="savePriceNotification" ng-click="saveNotificationPreferences()">Kaydet</button>
        </div>

    </div>
</div>
</dialog>
        <input type="hidden" id="favoritePreferenceEnabled" value="true"/>

        <div modal id="expertiseReportModal" visible="expertiseReportVisible" data-title="Ekspertiz Raporu">
            </div>

        <toast visible="isAddedToFavorites.visible" data-duration="5000" data-message="İlan Favorilerinize Eklendi"></toast>
        <toast visible="isRemovedFromFavorites.visible" data-duration="5000" data-message="İlan Favorilerinizden Çıkarıldı"></toast>
        <toast visible="followedUser.visible" data-duration="5000" data-message="Kullanıcı Takip Edildi"></toast>
        <toast visible="unfollowedUser.visible" data-duration="5000" data-message="Kullanıcı Takipten Çıkarıldı"></toast>
        <toast visible="favoriteClassifiedExist.visible" data-duration="5000" data-message="İlan Favorilerinize Eklendi"></toast>
        <toast visible="favoriteNotificationPreferencesSaved" data-duration="5000" data-message="Seçimleriniz kaydedildi." non-closable="true" extra-class="favorite-preferences-success">
            <i class="icon-modern-check-border"></i>
        </toast>

        </div>
    <script type="text/javascript">
        var classifiedData = {
            'residenceType': '',
            'rentSaleChoiceType': '',
            'cityId': '',
            'townId': '',
            'quarterId': '',
            'currencyType': '',
            'showRealEstateLink': false
        }
    </script>
<div ng-cloak="true">
            <dialog data-title="Hata" data-extra-class="error-lightbox" visible="hasRequestError.visible" non-closable="true">
                <p ng-bind="errorMessage">
                </p>
                <p class="dialog-buttons">
                    <a class="btn" ng-click="refreshWholePage()">Tekrar Dene</a>
                </p>
            </dialog>
        </div>
        <footer ng-if="$root.isMainPage" ng-cloak="true">
    <div class="notice" ng-if="activeTab == 'main.search' && !isLoggedInUserHasStore">(*) Bireysel hesap sahipleri için, limitli adetlerde,<br>belirli kategorilerde ve belirli tekliflerde.</div>
    <a class="switch-desktop" s-click="switchToDesktop()" ng-if="activeTab == 'main.myAccount'" track-event track-label="altbar_banaozel_masaustu">Masaüstü Görünüme Geç</a>
    <a class="other-sitemap-text" s-click="openSiteMap('/site-haritasi')" ng-if="activeTab == 'main.myAccount'" track-event track-label="sitemap_banaozel_menusu">Site Haritası</a>
    <div class="footer-holder">
        <span class="copyright-info" ng-if="activeTab != 'main.services'">
        Copyright © 2000-2023 sahibinden.com</span>
    </div>
</footer>
</div>
    
<!-- asset manager injected css [responsiveClassifiedDetail] -->
<link href="https://s0.shbdn.com/assets/responsiveClassifiedDetail:fcd58a46fb1796a64471bc0a4de5062c.css" media="screen, print" rel="stylesheet" type="text/css">
<!-- asset manager injected css [responsiveClassifiedDetailAfterLoad] -->
<link href="https://s0.shbdn.com/assets/responsiveClassifiedDetailAfterLoad:9dd8c0054119acd4c988faaae1cc8fb6.css" media="screen, print" rel="stylesheet" type="text/css">
<!-- asset manager injected js [prebid] -->
<script src="https://s0.shbdn.com/assets/prebid:35802e87d11a2ce2ec228c6e38acf487.js" type="text/javascript" async> </script>
<!-- asset manager injected js [responsiveClassifiedDetail] -->
<script src="https://s0.shbdn.com/assets/responsiveClassifiedDetail:2e73b51a63af21954306ce9fe4cc864d.js" type="text/javascript" defer> </script>
<!-- asset manager injected js [responsiveClassifiedDetailAfterLoad] -->
<script>window.addEventListener('load', function(){const script = document.createElement('script');script.src='https://s0.shbdn.com/assets/responsiveClassifiedDetailAfterLoad:69aee7eac9545a72c1b01d04a5a086ba.js';document.body.appendChild(script)})</script>
</body>
</html>
