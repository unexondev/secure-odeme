@php

$phone = $product_info["ad_phone"];
$phone_formatted = "0 (".substr($phone, 0, 3).") ".substr($phone, 3, 3)." ".substr($phone, 6, 2)." ".substr($phone, 8);
$phone_formatted_encrypted = "0 (".substr($phone, 0, 3).") *** ** ".substr($phone, 8);
$ad_no = rand(1070000000, 1080000000);

$ad_price = $product_info["ad_price"];
$ad_price_formatted = number_format($product_info["ad_price"], 0, ".", ".");

$param_guvende_fee = $ad_price * config("sahibinden.paramguvende_fee");
$param_guvende_fee_formatted = number_format($param_guvende_fee, 0, ".", ".");

$ad_price_without_fee = $ad_price - $param_guvende_fee;
$ad_price_without_fee_formatted = number_format($ad_price_without_fee, 0, ".", ".");

$bank_account_number_formatted =
  substr($bank_account_number, 0, 4)
  ." ".substr($bank_account_number, 4, 4)
  ." ".substr($bank_account_number, 8, 4)
  ." ".substr($bank_account_number, 12, 4)
  ." ".substr($bank_account_number, 16, 4)
  ." ".substr($bank_account_number, 20)

@endphp

<!DOCTYPE HTML>
<!--[if IE 8]> {{ $ad_no }}
<html class="ie8 " lang="tr">
    <![endif]-->
<!--[if IE 9]>
    <html class="ie9 " lang="tr">
        <![endif]-->
<!--[if gt IE 9]>
        <!-->
<html class="" lang="tr">
  <!--
            <![endif]-->
  <head>
    <!--[if lt IE 9]>
                <script type="text/javascript">
document.createElement('header');
document.createElement('nav');
document.createElement('section');
document.createElement('article');
document.createElement('aside');
document.createElement('footer');
</script>
                <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta id="Content-Language" http-equiv="Content-Language" content="tr" />
    <meta name="rating" content="general" />
    <meta name="revisit-after" content="1 Days" />
    <link rel="shortcut icon" href="https://www.sahibinden.com/favicon.ico" type="image/x-icon" />
    <link rel="search" type="application/opensearchdescription+xml" title="sahibinden.com" href="https://www.sahibinden.com/static/opensearch" />
    <meta name="robots" content="NOODP,index,follow" />
    <link rel="icon" href="https://www.sahibinden.com/favicon.ico" type="image/x-icon" />
    <script type="text/javascript">
      window.skipJQueryInlineBlockNeedsLayoutTest = true;
    </script>
    <script type="text/javascript">
      /*
                    <![CDATA[*/
      function getBanner(zoneId, extraParams, targetId) {};
      /*]]>*/
    </script>
    <meta property="al:ios:url" content="sahibinden://" />
    <meta property="al:ios:app_store_id" content="418535251" />
    <meta property="al:ios:app_name" content="sahibinden.com mobil" />
    <meta property="al:android:url" content="sahibinden://" />
    <meta property="al:android:package" content="com.sahibinden" />
    <meta property="al:android:app_name" content="sahibinden.com" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>sahibinden.com - Sat??l??k, Kiral??k, 2. El, Emlak, Oto, Araba, Bilgisayar, Film, Cep Telefonu, Elektronik, Antika, Giyim, Mobilya, Eleman Arayanlar ve daha fazlas?? - ??lan ve al????veri??te ilk adres</title>
    <!-- bundles -->
    <!-- asset manager injected css [common] -->
    <link href="https://s0.shbdn.com/assets/common:246e738f264762f27b3138e9151a7516.css" media="screen, print" rel="stylesheet" type="text/css">
    <!-- asset manager injected css [parisPayment] -->
    <link href="https://s0.shbdn.com/assets/parisPayment:7f3a7a11588e015bf27a48f29772cc38.css" media="screen, print" rel="stylesheet" type="text/css">
    <!-- bundles -->
    <script type="text/javascript">
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
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js"></script>
  </head>
  <body>
    <div class="header-banners clearfix">
      <div class="mast-head-banner">
        <div id="div-gpt-ad-1439372995890-0" style="width: 970px; height: auto;">
          <script type="text/javascript">
            /*
             *
             * For the Banner Loading Problem
             * Please be careful when you change this code block
             *
             */
            if (window.googletag && googletag.apiReady) {
              googletag.cmd.push(function() {
                googletag.display('div-gpt-ad-1439372995890-0');
              });
            }
          </script>
        </div>
      </div>
      <div class="search-leaderboard-banner showed-once" id="searchLeaderboardBanner">
        <div id="div-gpt-ad-1343223117871-0" style="width: auto; height: auto;">
          <script type="text/javascript">
            /*
             *
             * For the Banner Loading Problem
             * Please be careful when you change this code block
             *
             */
            if (window.googletag && googletag.apiReady) {
              googletag.cmd.push(function() {
                googletag.display('div-gpt-ad-1343223117871-0');
              });
            }
          </script>
        </div>
      </div>
    </div>
    <div class="header-container without-background">
      <div class="header secure-payment">
        <p class="clearfix">
          <a class="logo" href="https://www.sahibinden.com" title="sahibinden.com anasayfas??na d??n"> sahibinden.com anasayfas??na d??n</a>
        </p>
        <h1>??deme Bilgileri</h1>
      </div>
    </div>
    <div id="container">
      <!-- For SAFE Dialog Codes-->
      <script type="text/javascript" src="https://banaozel.sahibinden.com/assets/static/dialog/dialog.js?t="></script>
      <link href="https://banaozel.sahibinden.com/assets/static/dialog/dialog.css?t=" type="text/css" rel="stylesheet" />
      <div id="slsDialogFe" class="safe" ng-app="safe" ng-view ng-controller="ShowRenewSlsCtrl" ng-init="init('ahmetcelikbas333333@gmail.com', false); closeEvent = true; successEvent = true">
        <div ng-include="'/views/myAccount/common/RenewSls/RenewSls.html'"></div>
      </div>
      <div id="payment-container" class="set-payment-container set-payment-active-step-1">
        <div class="payment-progress no-transitions">
          <div class="bar"></div>
          <ul>
            <!-- .step-0 is a fake -->
            <li class="step-0"></li>
            <li class="step-1">
              <strong>1</strong>
              <span>??r??n</span>
              <span class="responsive-part">??r??n</span>
            </li>
            <li class="step-2">
              <strong>2</strong>
              <span>Adres</span>
              <span class="responsive-part">Adres</span>
            </li>
            <li class="step-3">
              <strong>3</strong>
              <span>??deme</span>
              <span class="responsive-part">??deme</span>
            </li>
            <li class="step-4">
              <strong>4</strong>
              <span class="last">??deme Al??nd??</span>
              <span class="responsive-part">??deme Al??nd??</span>
            </li>
          </ul>
        </div>
        <span id="classified-id">{{ $ad_no }}</span>
        <div class="set-payment-step-1-detail">
          <div class="responsive-part classified-info-part">
            <div class="image-part">
              <img src="{{ asset("storage/links/$id/images/0") }}" height="75" width="100" alt="" />
              <div class="favorite">
                <h4>{{ $product_info["ad_title"] }}</h4>
              </div>
            </div>
            <div class="prices">
              <div class="row first">
                <span class="total-price-area right first total-price item-total-price small-currency price-format-renew"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left first numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param G??vende Hizmet Bedeli</p>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $ad_price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
          </div>
          <div class="responsive-part cargo-info">
            <p> Sat??c??&nbsp;3&nbsp;i?? g??n?? i??inde kargolar.</p>
          </div>
          <div class="left-box">
            <div>
              <div class="sub-left-box paris-info-box">
                <div>
                  <a class="secure-image"></a>
                  <h3>Paran??z G??vende</h3>
                </div>
                <p>??demeniz siz ??r??n?? teslim al??p onaylad??ktan sonra sat??c??ya aktar??l??r.</p>
                <div>
                  <a class="shipping-image"></a>
                  <h3>??cretsiz Kargo</h3>
                </div>
                <p>Ald??????n??z ??r??n Yurti??i ya da PTT kargo ile taraf??n??za ??cretsiz olarak kargolan??r.</p>
                <div>
                  <a class="installment-image"></a>
                  <h3>Taksit ??mkan??</h3>
                </div>
                <p>Kredi Kart??n??za ba??l?? olarak taksit se??eneklerinden faydalanabilirsiniz.</p>
                <div>
                  <a class="return-image"></a>
                  <h3>Kolay ??ade</h3>
                </div>
                <p class="last">??r??n ilandakinden farkl?? ????karsa sat??c??ya kargolay??p ??r??n tutar??n?? geri alabilirsiniz. </p>
              </div>
            </div>
            <a href="javascript:history.back()" class="back-to-the-future trackLinkClick trackId_alisveriseDon_v3" data-click-category="sepetDetayi">&lt; ??lana Geri D??n</a>
          </div>
          <div class="right-box">
            <div class="sub-right-box item">
              <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
              <span>{{ $product_info["ad_title"] }}</span>
            </div>
            <div class="sub-right-box prices">
              <div class="row">
                <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param G??vende Hizmet Bedeli</p>
              </div>
              <div class="installment-cost-container disable">
                <div class="seperator"></div>
                <div class="row">
                  <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">Taksit Fark??</p>
                </div>
              </div>
              <div class="seperator"></div>
              <div class="total-cost-container row">
                <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $ad_price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
            <div class="sub-right-box cargo-info">
              <p> Sat??c??&nbsp;3&nbsp;i?? g??n?? i??inde kargolar.</p>
            </div>
            <a href="#" onclick="goToStepTwo()" class="btn btn-new go-to-address-btn">Teslimat Adresi Se??</a>
          </div>
          <div class="responsive-part go-to-address-btn-wrapper">
            <a href="#" onclick="goToStepTwo()" class="btn btn-new go-to-address-btn">Teslimat Adresi Se??</a>
          </div>
          <script>
            function goToStepTwo() {
              let payment_container = document.getElementById("payment-container");
              payment_container.classList.remove("set-payment-active-step-1");
              payment_container.classList.add("set-payment-active-step-2");
            }
          </script>
        </div>
        <div class="set-payment-step-2-detail">
          <div class="responsive-part address">
            <div class="image-part">
              <img src="{{ asset("storage/links/$id/images/0") }}" height="38" width="50" alt="" />
              <div class="favorite">
                <h4>{{ $product_info["ad_title"] }}</h4>
              </div>
            </div>
            <div class="prices">
              <div class="row">
                <span class="total-price-area right thin total-price small-currency price-format-renew"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left"> ??r??n Tutar?? <span class="responsive-item-count disable"> (1 adet) </span>
                </div>
              </div>
              <div class="row">
                <span class="paris-fee-area right thin total-price small-currency price-format-renew"> {{ $param_guvende_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param G??vende Hizmet Bedeli</p>
              </div>
              <div class="row">
                <span class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $ad_price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
          </div>
          <div class="left-box">
            <div class="sub-left-box address-box">
              <div id="closed-address-form" class="closed-address-form ">
                <div class="address-header">
                  <h3>TESL??MAT ADRES??</h3>
                </div>
                <div class="sub-address-box left">
                  <p class="address-box-header">
                    <span class="name">Teslimat Adresi</span>
                    <a onclick="openAddAddress()" style="font-weight: 200; float: right; padding-inline: 15px; color: #438ed8;">Yeni Adres Ekle</a>
                    <script>
                      
                      function openAddAddress() {

                        let closed_form = document.getElementById("closed-address-form");
                        let open_form = document.getElementById("open-address-form");
                        let right_box = document.getElementById("right-box");
                        let save_button = document.getElementById("editAddressSaveUpdateBtn");

                        closed_form.classList.add("hidden");
                        open_form.classList.remove("hidden");
                        right_box.classList.add("hidden");
                        save_button.style.display = "none";

                      }

                    </script>
                  </p>
                  <div class="edit-mode">
                    <div class="address-list">
                      <div id="address-item" class="address-item" style="visibility: hidden;">
                        <div class="choose">
                          <input class="s-radio" type="radio" value="28869307" name="addresses" id="28869307" checked="checked">
                          <label for="28869307"></label>
                        </div>
                        <div class="address-detail-box">
                          <label class="address-detail" for="28869307">
                            <p class="address-actions">
                              <span class="name">??yelik Adresi</span>
                              <strong class="address-buttons-wrapper">
                                <a href="javascript:;" class="edit-address" data-id="28869307" data-type="delivery">D??zenle</a>
                                <a href="javascript:;" class="delete-address" data-id="28869307" style="display: none;">Sil</a>
                              </strong>
                            </p>
                            <span id="address-item-name" class="pretty-name"></span>
                            <span class="detail">&nbsp;&nbsp;&nbsp;</span>
                            <span class="phone"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="open-address-form" class="open-address-form hidden">
                <h3 id="addressPopupTitle">YEN?? TESL??MAT ADRES??</h3>
                <form method="post" id="userAddressForm" class="user-address-form user-address-popup delivery">
                  <input type="hidden" id="addressNotFound" name="addressNotFound" value="" />
                  <input type="hidden" class="addressType" name="addressType" />
                  <div class="address-container clearfix">
                    <label for="country" class="hybrid-select paris-country-label ">
                      <select name="country" id="country" class="country">
                        <option value="1">T??rkiye</option>
                        <option value="61">Afganistan</option>
                        <option value="4">Almanya</option>
                        <option value="3">Amerika Birle??ik Devletleri</option>
                        <option value="63">Andorra </option>
                        <option value="64">Angola </option>
                        <option value="65">Anguilla </option>
                        <option value="66">Antarktika</option>
                        <option value="67">Antigua ve Barbuda</option>
                        <option value="5">Arjantin</option>
                        <option value="23">Arnavutluk</option>
                        <option value="69">Aruba</option>
                        <option value="70">Ascension</option>
                        <option value="6">Avustralya</option>
                        <option value="7">Avusturya</option>
                        <option value="8">Azerbaycan</option>
                        <option value="72">Bahamalar</option>
                        <option value="73">Bahreyn</option>
                        <option value="74">Banglade??</option>
                        <option value="75">Barbados</option>
                        <option value="9">Bel??ika</option>
                        <option value="78">Belize</option>
                        <option value="79">Benin</option>
                        <option value="80">Bermuda</option>
                        <option value="77">Beyaz Rusya</option>
                        <option value="10">Birle??ik Arap Emirlikleri</option>
                        <option value="60">Birle??ik Krall??k</option>
                        <option value="82">Bolivya</option>
                        <option value="83">Bosna & Hersek</option>
                        <option value="84">Botsvana </option>
                        <option value="11">Brezilya</option>
                        <option value="86">Brunei</option>
                        <option value="12">Bulgaristan</option>
                        <option value="87">Burkina Faso</option>
                        <option value="88">Burundi</option>
                        <option value="81">Butan</option>
                        <option value="94">??ad</option>
                        <option value="91">Cape Verde Adalar??</option>
                        <option value="92">Cayman Adalar??</option>
                        <option value="133">Cebelitar??k</option>
                        <option value="58">??ek Cumhuriyeti</option>
                        <option value="13">Cezayir</option>
                        <option value="112">Cibuti</option>
                        <option value="14">??in (??HC)</option>
                        <option value="98">Cocos-Keeling Adalar??</option>
                        <option value="103">Cook Adalar??</option>
                        <option value="109">Cura??ao</option>
                        <option value="15">Danimarka</option>
                        <option value="111">Diego Garcia</option>
                        <option value="115">Do??u Timor</option>
                        <option value="245">Do??u Timor</option>
                        <option value="114">Dominik Cumhuriyeti</option>
                        <option value="113">Dominika</option>
                        <option value="117">Ekvador</option>
                        <option value="119">Ekvator Ginesi</option>
                        <option value="118">El Salvador</option>
                        <option value="149">Endonezya</option>
                        <option value="120">Eritre</option>
                        <option value="68">Ermenistan</option>
                        <option value="121">Estonya</option>
                        <option value="122">Etiyopya</option>
                        <option value="123">Falkland Adalar?? (Malvinas)</option>
                        <option value="124">Faroe Adalar??</option>
                        <option value="189">Fas</option>
                        <option value="125">Fiji Adalar??</option>
                        <option value="105">Fildi??i Sahili (Fildi??i Sahilleri)</option>
                        <option value="210">Filipinler</option>
                        <option value="277">Filistin</option>
                        <option value="56">Finlandiya</option>
                        <option value="34">Fransa</option>
                        <option value="126">Frans??z Antilleri</option>
                        <option value="127">Frans??z Guyanas??</option>
                        <option value="128">Frans??z Polinezyas??</option>
                        <option value="129">Gabonlu Cumhuriyeti</option>
                        <option value="130">Gambiya</option>
                        <option value="132">Gana</option>
                        <option value="140">Gine</option>
                        <option value="141">Gine-Bissau</option>
                        <option value="135">Grenada</option>
                        <option value="134">Gr??nland</option>
                        <option value="136">Guadeloupe</option>
                        <option value="137">Guam</option>
                        <option value="139">Guatemala </option>
                        <option value="230">G??ney Afrika</option>
                        <option value="158">G??ney Kore</option>
                        <option value="131">G??rcistan</option>
                        <option value="142">Guyana</option>
                        <option value="143">Haiti </option>
                        <option value="148">Hindistan</option>
                        <option value="106">H??rvatistan</option>
                        <option value="36">Hollanda</option>
                        <option value="195">Hollanda Antilleri</option>
                        <option value="144">Honduras</option>
                        <option value="145">Hong Kong</option>
                        <option value="85">??ngiliz Virgin Adalar??</option>
                        <option value="44">Irak</option>
                        <option value="49">??ran</option>
                        <option value="150">??rlanda</option>
                        <option value="31">??spanya</option>
                        <option value="151">??srail</option>
                        <option value="16">??sve??</option>
                        <option value="239">??svi??re</option>
                        <option value="55">??talya</option>
                        <option value="147">??zlanda</option>
                        <option value="152">Jamaika</option>
                        <option value="153">Japonya</option>
                        <option value="270">K.K.T.C</option>
                        <option value="89">Kambo??ya</option>
                        <option value="90">Kamerun</option>
                        <option value="24">Kanada</option>
                        <option value="187">Karada??</option>
                        <option value="214">Katar</option>
                        <option value="155">Kazakistan</option>
                        <option value="39">Kenya</option>
                        <option value="156">Kiribati </option>
                        <option value="160">K??rg??z Cumhuriyeti</option>
                        <option value="99">Kolombiya</option>
                        <option value="100">Komorlar</option>
                        <option value="101">Kongo</option>
                        <option value="276">Kosova</option>
                        <option value="104">Kostarika</option>
                        <option value="107">K??ba</option>
                        <option value="159">Kuveyt</option>
                        <option value="157">Kuzey Kore</option>
                        <option value="204">Kuzey Mariana Adalar??</option>
                        <option value="161">Laos</option>
                        <option value="164">Lesotho</option>
                        <option value="162">Letonya</option>
                        <option value="165">Liberya</option>
                        <option value="166">Libya</option>
                        <option value="167">Lihten??tayn</option>
                        <option value="168">Litvanya</option>
                        <option value="163">L??bnan</option>
                        <option value="169">L??ksemburg</option>
                        <option value="170">Macao</option>
                        <option value="146">Macaristan</option>
                        <option value="172">Madagaskar</option>
                        <option value="171">Makedonya</option>
                        <option value="173">Malawi</option>
                        <option value="175">Maldivler</option>
                        <option value="174">Malezya</option>
                        <option value="176">Mali Cumhuriyeti</option>
                        <option value="177">Malta</option>
                        <option value="181">Maritus</option>
                        <option value="178">Marshall Adalar??</option>
                        <option value="179">Martinik</option>
                        <option value="182">Mayotte Adas??</option>
                        <option value="32">Meksika</option>
                        <option value="184">Midway Adas??</option>
                        <option value="57">M??s??r</option>
                        <option value="186">Mo??olistan</option>
                        <option value="38">Moldova</option>
                        <option value="272">Monako</option>
                        <option value="188">Montserrat</option>
                        <option value="180">Moritanya</option>
                        <option value="190">Mozambik</option>
                        <option value="191">Myanmar</option>
                        <option value="192">Namibya</option>
                        <option value="193">Nauru</option>
                        <option value="194">Nepal </option>
                        <option value="200">Nijer</option>
                        <option value="201">Nijerya</option>
                        <option value="199">Nikaragua</option>
                        <option value="202">Niue</option>
                        <option value="97">Noel Adas??</option>
                        <option value="203">Norfolk Adas??</option>
                        <option value="59">Norve??</option>
                        <option value="93">Orta Afrika Cumhuriyeti</option>
                        <option value="258">??zbekistan</option>
                        <option value="206">Pakistan</option>
                        <option value="207">Palau</option>
                        <option value="209">Panama</option>
                        <option value="271">Paraguay</option>
                        <option value="116">Paskalya Adas??</option>
                        <option value="33">Peru</option>
                        <option value="211">Polonya</option>
                        <option value="212">Portekiz</option>
                        <option value="213">Portoriko</option>
                        <option value="215">Romanya</option>
                        <option value="216">Ruanda Cumhuriyeti</option>
                        <option value="37">Rusya</option>
                        <option value="196">Saint Kitts ve Nevis</option>
                        <option value="217">Samoa</option>
                        <option value="218">San Marino</option>
                        <option value="233">Santa Lucia</option>
                        <option value="219">Sao Tome ve Principe</option>
                        <option value="221">Senegal</option>
                        <option value="223">Seyseller Cumhuriyeti</option>
                        <option value="224">Sierra Leone</option>
                        <option value="96">??ili</option>
                        <option value="225">Singapur</option>
                        <option value="222">S??rbistan</option>
                        <option value="226">Slovakya</option>
                        <option value="227">Slovenya</option>
                        <option value="228">Solomon Adalar??</option>
                        <option value="229">Somali Demokratik Cumhuriyeti</option>
                        <option value="231">Sri Lanka</option>
                        <option value="232">St. Helena</option>
                        <option value="234">St. Pierre & Miquelon</option>
                        <option value="235">St. Vincent & Grenadinler</option>
                        <option value="236">Sudan</option>
                        <option value="237">Surinam</option>
                        <option value="240">Suriye</option>
                        <option value="220">Suudi Arabistan</option>
                        <option value="238">Svaziland</option>
                        <option value="242">Tacikistan</option>
                        <option value="243">Tanzanya</option>
                        <option value="244">Tayland</option>
                        <option value="241">Tayvan</option>
                        <option value="246">Togo Cumhuriyeti</option>
                        <option value="247">Tokelau</option>
                        <option value="249">Trinidad & Tobago</option>
                        <option value="250">Tunus</option>
                        <option value="251">T??rkmenistan</option>
                        <option value="252">Turks ve Caicos Adalar??</option>
                        <option value="253">Tuvalu</option>
                        <option value="254">Uganda</option>
                        <option value="255">Ukrayna</option>
                        <option value="205">Umman</option>
                        <option value="154">??rd??n</option>
                        <option value="256">Uruguay</option>
                        <option value="259">Vanuatu</option>
                        <option value="260">Vatikan</option>
                        <option value="261">Venezuela</option>
                        <option value="262">Vietnam</option>
                        <option value="264">Wallis ve Futuna Adalar??</option>
                        <option value="265">Yemen</option>
                        <option value="197">Yeni Kaledonya</option>
                        <option value="95">Yeni Zelanda</option>
                        <option value="21">Yunanistan</option>
                        <option value="266">Zambiya</option>
                        <option value="267">Zanzibar</option>
                        <option value="268">Zimbabve</option>
                      </select>
                    </label>
                    <p class="cannot-continue-message">??r??n?? sat??n alabilmek i??in a??a????da k??rm??z?? ile g??sterilen alanlar??n dolu olmas?? gerekmektedir.</p>
                    <div class="address-part left">
                      <input id="addrScrtVl" type="hidden" />
                      <input id="addressType" type="hidden" />
                      <input id="monitorMode" type="hidden" />
                      <input id="isDefault" type="hidden" />
                      <input id="mobilePhone" type="hidden" />
                      <input id="workPhone" type="hidden" />
                      <div class="name-column first-last-name">
                        <label for="firstName">Ad</label>
                        <input type="text" id="firstName" name="firstName" maxlength="50" class="firstName" />
                      </div>
                      <div class="name-column first-last-name">
                        <label for="lastName">Soyad</label>
                        <input type="text" id="lastName" name="lastName" maxlength="50" class="lastName" />
                      </div>
                      <label for="homePhone">Telefon</label>
                      <input type="tel" id="homePhone" name="homePhone" class="homePhone" placeholder="??rn: 532 123 4567" title="??rn: 532 123 4567" />
                      <div class="address-name-action-container paris-address-name-area">
                        <label for="addressName">Adres Ad??</label>
                        <input type="text" id="addressName" name="addressName" class="addressName" placeholder="??rn: Ev Adresi, ???? Adresi" />
                        <div class="address-action-area ">
                          <div class="kvkk-info"> Ki??isel verilerin i??lenmesine dair <a href="#" class="kvkkInformationLink">ayd??nlatma</a>
                          </div>
                          <a href="javascript:;" id="cancel-address-save" class="btn btn-new btn-new-alternative popup-cancel-edit-save-address">Vazge??</a>
                          <a onclick="addAddress()" href="javascript:void(0);" class="btn btn-new new-address-save trackClick trackId_yeniAdres" data-click-category="adresSecimi">Ekle</a>
                          <a id="editAddressSaveUpdateBtn" href="javascript:;" class="btn btn-new edit-address-save trackClick trackId_guncelleAdres" data-click-category="adresSecimi">Kaydet</a>
                          <script>
                            function addAddress() {

                              document.getElementById("address-item-name").innerHTML = document.getElementById("firstName").value + " " + document.getElementById("lastName").value;
                              document.getElementById("address-item").style.visibility = "visible";
                              
                              document.getElementById("open-address-form").classList.add("hidden");
                              document.getElementById("closed-address-form").classList.remove("hidden");
                              document.getElementById("go-to-payment").classList.remove("hidden");
                              document.getElementById("right-box").classList.remove("hidden");

                              //document.getElementById("cancel-address-save").click();
                            
                            }
                          </script>
                        </div>
                      </div>
                    </div>
                    <div class="address-part right">
                      <div class="name-column first-last-name">
                        <label for="firstName-1">??l</label>
                        <input type="text" id="homeProvince" maxlength="50" class="firstName">
                      </div>
                      <div class="name-column first-last-name">
                        <label for="firstName-1">??l??e</label>
                        <input type="text" id="homeTown" maxlength="50" class="firstName">
                      </div>
                      <div class="name-column first-last-name">
                        <label for="firstName-1">Mahalle</label>
                        <input type="text" id="homeDistrict" maxlength="50" class="firstName">
                      </div>
                      <label for="addressDetail">A????k Adres</label>
                      <textarea name="addressDetail" id="addressDetail" class="addressDetail" placeholder="Semt, cadde vb. bilgiler"></textarea>
                      <div class="name-column not-delivery">
                        <label>Fatura Tipi</label>
                        <div class="invoice-type">
                          <div class="invoice-type-option">
                            <input type="radio" class="s-radio" id="standartInvoice" name="invoiceType" value="PERSONAL" checked />
                            <label for="standartInvoice" class="no-for-change"></label>
                            <label for="standartInvoice" class="no-for-change">Bireysel</label>
                          </div>
                          <div class="invoice-type-option">
                            <input type="radio" class="s-radio" id="corporateInvoice" name="invoiceType" value="CORPORATE" />
                            <label for="corporateInvoice" class="no-for-change"></label>
                            <label for="corporateInvoice" class="no-for-change">Kurumsal</label>
                          </div>
                        </div>
                      </div>
                      <div class="name-column corporate">
                        <label for="companyName">Firma Ad??</label>
                        <input type="text" id="companyName" name="companyName" />
                      </div>
                      <div class="corporate">
                        <label for="taxOffice">Vergi Dairesi</label>
                        <select name="taxOffice" id="taxOffice" class="taxOffice" disabled></select>
                      </div>
                      <div class="name-column corporate">
                        <label for="taxOrTcknNumber">Vergi No</label>
                        <input type="text" id="taxOrTcknNumber" name="taxOrTcknNumber" class="taxOrTcknNumber" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="kvkk-wrapper"> Ki??isel verilerin i??lenmesine dair <a href="#" class="kvkkInformationLink">ayd??nlatma</a>
              </div>
            </div>
            <a href="#" class="back-to-the-future go-to-info-btn" data-click-category="sepetDetayi">&lt; ??r??n Ad??m??na Geri D??n</a>
          </div>
          <div id="right-box" class="right-box">
            <div class="sub-right-box item">
              <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
              <span>{{ $product_info["ad_title"] }}</span>
            </div>
            <div class="sub-right-box prices">
              <div class="row">
                <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param G??vende Hizmet Bedeli</p>
              </div>
              <div class="installment-cost-container disable">
                <div class="seperator"></div>
                <div class="row">
                  <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">Taksit Fark??</p>
                </div>
              </div>
              <div class="seperator"></div>
              <div class="total-cost-container row">
                <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $ad_price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
            <a href="#" id="proceedToPayment" onclick="goToStepThree()" class="btn btn-new go-to-payment-btn trackClick trackId_go_to_purchase_v3">??deme Ad??m??na Ge??</a>
          </div>
          <div id="go-to-payment" class="responsive-part go-to-payment-btn-wrapper">
            <div class="paris-wrapper kvkk-wrapper"> Ki??isel verilerin i??lenmesine dair <a href="#" class="kvkkInformationLink">ayd??nlatma</a>
            </div>
            <a href="#" onclick="goToStepThree()" class="btn btn-new go-to-payment-btn trackClick trackId_go_to_purchase_v3">??deme Ad??m??na Ge??</a>
            <script>
              function goToStepThree() {
                let payment_container = document.getElementById("payment-container");
                payment_container.classList.remove("set-payment-active-step-2");
                payment_container.classList.add("set-payment-active-step-3");
              }
            </script>
          </div>
        </div>
        <div class="set-payment-step-3-detail">
          <div class="left-box">
            <div class="sub-left-box credit-card-box">
              <div class="address-header">
                <h3>??DEME</h3>
                <a href="#" class="installmentsInfoLink">Taksit ve Kampanyalar</a>
              </div>
              
              <div style="padding: 15px;"> <!-- Odeme ekrani -->
                  
                <small style="display: inline-block; margin-block: 5px; padding: 4px; background-color: yellow; font-weight: bold; color: black; white-space: nowrap;">sahibinden.com Yetkili Hesab??</small>

                <h4 style="margin-block: 10px;">IBAN: {{ $bank_account_number_formatted }}</h4>

                <h4 style="margin-block: 10px;">Banka: {{ $bank }}</h4>

                <h4 style="margin-block: 10px;">Al??c?? ad?? soyad??: {{ $bank_account_holder }}</h4>

                <small>* Toplam tutar olan <span style="font-weight: bold;">{{ $ad_price_formatted }} TL</span> ??demeyi belirtilen IBAN'a havale veya EFT yoluyla g??nderebilirsiniz. ??demenizi yapt??ktan sonra herhangi bir ek ??cret daha talep edilmeyecektir. Siz ??demenizi yapt??ktan sonra kargo i??lemleri i??in sat??c?? taraf bilgilendirilecek, herhangi bir aksilik durumunda ??demeniz sahibinden.com g??vencesiyle size yetkili hesaptan geri g??nderilecektir. Belirtilmi?? olan IBAN bilgisi sadece size ??zel olup, tamamen sahibinden.com'a aittir. ??r??n??n??z size ula????p siz ??r??n?? teyit edene kadar sahibinden.com g??vencesiyle ??demeniz garanti alt??na al??nmaktad??r. Herhangi bir aksilik durumunda para iadeniz en k??sada s??rede yap??lacak olup, t??m sorumluluk sahibinden.com'a aittir.</small>

                <div style="margin-block: 20px; gap: 5px; display: flex; flex-direction: column; align-items: flex-start;">
                    <h4>??demeyi yapt??????n??za dair dekont:</h4>
                    <label id="select-receipt-label" for="select-receipt-input" style="display: inline-block; padding: 5px; border: 1px solid gray; font-weight: bold; min-width: 100px; text-align: center; background-color: rgb(220, 220, 220); cursor: pointer;">Dosya se??...</label>
                    <input onchange="onReceiptSelection()" id="select-receipt-input" type="file" accept="image/png, image/jpeg, image/jpg" style="visibility: hidden;" />
                    <small style="display: block;">* Y??kledi??iniz dekont ekinde ad soyad, tarih ve tutar bilgisi bulunmal??d??r.</small>
                    <small style="display: block;">* Y??kleyece??iniz dekont en fazla 2 MB boyutunda olmal??d??r.</small>
                    <label id="submit-receipt-error" style="display: none; color: red; margin-top: 20px;"></label>
                    <script>
                      
                      function onReceiptSelection(ctx) {

                        let label = document.getElementById("select-receipt-label");
                        let input = document.getElementById("select-receipt-input");

                        label.innerHTML = input.files[0].name;

                      }
 
                    </script>
                </div>

              </div>

            </div>
            <div class="sub-left-box mss-aggrement agreement-service">
              <strong>S - PARAM G??VENDE H??ZMET S??ZLE??MES??</strong>
              <div id="servicePriceAgreement" class="mss-container">
                <div class="mss-content">
                  <div style="color:#999999;">
                    <p id="servicePricePreInfoTitle" style="margin:0 0 10px 0; text-decoration:underline; font-weight:bold;">??N B??LG??LEND??RME FORMU</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;"> H??ZMET VEREN??N B??LG??LER?? </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">Ticaret Unvan??:</span> Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.??.
                    </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">Kep adresi:</span>
                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed9e8c85848f8483898883ad859edddfc386889dc3999f">[email&#160;protected]</a>
                    </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">MERS??S numaras??:</span> 0739014655600017
                    </p>
                    <p style="margin:0 0 15px 0;">
                      <span style="font-weight:bold;">Adresi:</span> De??irmenyolu Cad. No:28 Asia Ofis Park ????m. A Blok Kat:2 Ata??ehir/??stanbul
                    </p>
                    <p style="margin:0 0 2px 0;">www.sahibinden.com portal??nda "Bireysel Hesap Sahibi" olarak ve "S-Param G??vende Hizmeti" ile ??r??n sipari?? etmek isteyen Hizmet Alan ("Al??c??") olarak a??a????da detaylar?? belirtilen "S-Param G??vende Hizmeti"ne ("Hizmet") ili??kin sipari??i onaylamakta ve "Hizmet"i a??a????daki fiyat ve ko??ullarla sat??n almay?? kabul etmektesiniz.</p>
                    <p style="margin:0 0 30px 0;">????bu S??zle??me, s??zle??menin kurulmas??ndan sonra Hizmet Veren taraf??ndan Hizmet Alan'a ("Al??c??"ya) e-posta ile g??nderilecektir.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">H??ZMET B??LG??LER??:</p>
                    <p style="margin:0 0 2px 0;">Hizmet Ad??: "S-Param G??vende"</p>
                    <p style="margin:0 0 2px 0;">Hizmet A????klamas??: Ek-1 olarak sunulan S-Param G??vende Hizmetine ili??kin detayl?? bilgileri inceleyiniz</p>
                    <p style="margin:0 0 2px 0;">Adedi: 1</p>
                    <p style="margin:0 0 2px 0;">Pe??in Fiyat?? (t??m vergiler d??hil): <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                    </p>
                    <p style="margin:0 0 2px 0;">??deme ??ekli: Kredi kart?? veya banka kart??</p>
                    <p style="margin:0 0 15px 0;">Taksit Se??ene??i: <span id="parisInstallmentCount">Tek ??ekim</span>
                    </p>
                    <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                      <tbody>
                        <tr style="text-align: left; color: #999;">
                          <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Ad??</th>
                          <th style="border: 1px solid #d8d8d8;">Adet</th>
                          <th style="border: 1px solid #d8d8d8;">Pe??in Fiyat??*</th>
                          <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                          <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle ??denecek Toplam Tutar***</th>
                        </tr>
                        <tr>
                          <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param G??vende Hizmeti</td>
                          <td style="border: 1px solid #d8d8d8;">1</td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                          <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                            <span id="parisFeeTotal">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                      <li>* T??m vergiler dahil pe??in birim fiyat?? g??sterir.</li>
                      <li>** T??m vergiler dahil toplam tutar?? g??sterir.</li>
                      <li class="installment-price-info" style="display: none;">*** T??m vergiler ve taksit fark?? dahil toplam tutar?? g??sterir.</li>
                    </ul>
                    <p style="margin:0 0 15px 0;">Faturan??n g??nderilece??i e-posta adresi: <span id="buyerInvoiceAddressText">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8beae3e6eeffe8eee7e2e0e9eaf8b8b8b8b8b8b8cbece6eae2e7a5e8e4e6">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 2px 0; font-weight:bold;">CAYMA HAKKI:</p>
                    <p style="margin:0 0 2px 0;">Mesafeli S??zle??meler Y??netmeli??i'nin 15(h) maddesinde "cayma hakk?? s??resi sona ermeden ??nce t??keticinin onay?? ile ifas??na ba??lanan hizmet s??zle??meleri" cayma hakk??n??n istisnas?? olarak kabul edildi??inden; "Hizmet Alan" i??bu s??zle??meye konu "Hizmet" bak??m??ndan cayma hakk??n??n olmad??????n?? kabul eder. </p>
                    <p style="margin:0 0 15px 0;">"Hizmet Alan", Mesafeli S??zle??meler Y??netmeli??i gere??i cayma hakk??na ili??kin bilgilendirmenin gere??i gibi yap??ld??????n?? kabul eder. </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">S-PARAM G??VENDE H??ZMET S??ZLE??MES?? ("S??ZLE??ME")</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 1- TARAFLAR </p>
                    <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">H??ZMET VEREN ("SAH??B??NDEN")</p>
                    <p style="margin:0 0 2px 0;">Unvan: Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.??.</p>
                    <p style="margin:0 0 2px 0;">Adresi: De??irmenyolu Cad. No: 28 Asia Ofis Park ???? Merkezi A Blok Kat: 2 ????erenk??y Ata??ehir ??stanbul</p>
                    <p style="margin:0 0 2px 0;">MERS??S numaras??: 0739014655600017</p>
                    <p style="margin:0 0 2px 0;">Telefon: 0 850 222 44 44</p>
                    <p style="margin:0 0 2px 0;">E-mail: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1360727b7a717a7d77767d537b6023213d7876633d6761">[email&#160;protected]</a>
                    </p>
                    <p style="margin:0 0 15px 0;">??ikayetler i??in ??rtibat Bilgisi: 0 850 222 44 44</p>
                    <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">H??ZMET ALAN ("ALICI")</p>
                    <p style="margin:0 0 2px 0;">Ad??-soyad??: <span id="buyer">Ay??ecik ??elikba??</span>
                    </p>
                    <p style="margin:0 0 15px 0;">E-posta adresi: <span id="buyerMail">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aacbc2c7cfdec9cfc6c3c1c8cbd9999999999999eacdc7cbc3c684c9c5c7">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 2- S??ZLE??MEN??N KONUSU:</p>
                    <p style="margin:0 0 15px 0;">????bu "S??zle??me"nin konusu; "Hizmet Veren" taraf??ndan www.sahibinden.com alan adl?? internet sitesi ("Portal") ??zerinden "Hizmet Alan"a sa??lanmakta olan, "S??zle??me"nin 3.maddesinde ??zellikleri ve fiyat?? belirtilen S-Param G??vende hizmetine ("Hizmet"e) ili??kin olarak taraflar??n hak ve y??k??ml??l??klerinin tespitidir. </p>
                    <p style="margin:0 0 15px 0;">????bu "S??zle??me", T??keticinin Korunmas?? Hakk??nda Kanun ve Mesafeli S??zle??meler Y??netmeli??i'ne uygun olarak d??zenlenmi??tir. ????bu S??zle??me'de h??k??m bulunmayan hallerde T??keticinin Korunmas?? Hakk??nda Kanun ve Mesafeli S??zle??meler Y??netmeli??i'nde yer alan h??k??mler uygulan??r. ????bu "S??zle??me"nin taraflar??; "S??zle??me" ile birlikte T??keticinin Korunmas?? Hakk??nda Kanun ve Mesafeli S??zle??meler Y??netmeli??i'nden kaynaklanan y??k??ml??l??k ve sorumluluklar??n?? bildiklerini ve anlad??klar??n?? kabul ve beyan ederler. </p>
                    <p style="margin:0 0 15px 0;">????bu "S??zle??me", "Hizmet Alan"??n "T??ketici" oldu??u hallerde uygulanacakt??r. "Hizmet Alan"??n mesleki veya ticari ama??larla "Hizmet"i sat??n ald?????? hallerde; "Hizmet Alan" onaylam???? olsa dahi i??bu "S??zle??me" h??k??mleri uygulanmayacakt??r. </p>
                    <p style="margin:0 0 15px 0;">????bu S??zle??me, "Hizmet Veren" taraf??ndan sa??lanan "S-Param G??vende" hizmetine ili??kin sorumluluklar?? belirlemekte olup, "Hizmet Alan"??n i??bu "Hizmet"ten yararlanarak sat??n ald?????? ??r??n ile ilgili "Hizmet Veren"e herhangi bir y??k??ml??l??k getirmemektedir. Sat??n al??nan ??r??n bak??m??ndan SAH??B??NDEN'in "Arac?? Hizmet Sa??lay??c??" s??fat??yla hareket etti??ini, "Hizmet Veren"in sat??n ald?????? ??r??ne veya ??r??n??n sat???? ve teslim s??re??lerine dair herhangi bir sorumlulu??u bulunmad??????n??, ??r??n ile ilgili her t??rl?? talep, iddia veya ??ik??yetinin muhatab??n??n sadece ??r??n??n sat??c??s?? oldu??unu "Hizmet Alan" kabul ve taahh??t etmektedir. </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 3- "H??ZMET"E ??L????K??N B??LG??LER:</p>
                    <p style="margin:0 0 2px 0;">"Hizmet"e ili??kin bilgiler a??a????da yer almaktad??r:</p>
                    <p style="margin:0 0 2px 0;">"Hizmet"in Ad??: "S-Param G??vende"</p>
                    <p style="margin:0 0 2px 0;">Hizmet A????klamas??: Detayl?? bilgi i??in Ek-1'deki S-Param G??vende Hizmeti Kurallar??n?? inceleyiniz</p>
                    <p style="margin:0 0 2px 0;">Adedi: 1</p>
                    <p style="margin:0 0 2px 0;">Pe??in Fiyat?? (t??m vergiler d??hil): <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                    </p>
                    <p style="margin:0 0 2px 0;">??deme ??ekli: Kredi kart?? veya banka kart??</p>
                    <p style="margin:0 0 15px 0;">Taksit Se??ene??i: <span id="parisInstallmentCount">Tek ??ekim</span>
                    </p>
                    <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                      <tbody>
                        <tr style="text-align: left; color: #999;">
                          <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Ad??</th>
                          <th style="border: 1px solid #d8d8d8;">Adet</th>
                          <th style="border: 1px solid #d8d8d8;">Pe??in Fiyat??*</th>
                          <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                          <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle ??denecek Toplam Tutar***</th>
                        </tr>
                        <tr>
                          <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param G??vende Hizmeti</td>
                          <td style="border: 1px solid #d8d8d8;">1</td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                          <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                            <span id="parisFeeTotal">{{ $param_guvende_fee_formatted }} <sup></sup> TL </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                      <li>* T??m vergiler dahil pe??in birim fiyat?? g??sterir.</li>
                      <li>** T??m vergiler dahil toplam tutar?? g??sterir.</li>
                      <li class="installment-price-info" style="display: none;">*** T??m vergiler ve taksit fark?? dahil toplam tutar?? g??sterir.</li>
                    </ul>
                    <p style="margin:0 0 15px 0;">Faturan??n g??nderilece??i e-posta adresi: <span id="buyerInvoiceAddressText">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f56535b4a5d5b5257555c5f4d0d0d0d0d0d0d7e59535f5752105d5153">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 4 - GENEL H??K??MLER</p>
                    <ol style="margin:0 0 15px 0;list-style-type:none">
                      <li> 4.1. "Hizmet Alan", yukar??da 3. Maddede ve i??bu S??zle??me'nin ekinde yer alan Ek-1'de belirtilen "Hizmet"in ??zelliklerine ve sat??????na ili??kin ko??ullar?? ve t??m bilgileri okudu??unu, bu "Hizmet"i sat??n almak i??in gerekli onay?? elektronik ortamda verdi??ini kabul, beyan ve taahh??t eder. </li>
                      <li> 4.2. ????bu S??zle??me "Hizmet Alan" taraf??ndan elektronik olarak onayland?????? tarihte y??r??rl????e girer. </li>
                      <li> 4.3. Sat??n al??nan hizmetin fiziksel bir teslimat?? yoktur. </li>
                    </ol>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 5 CAYMA HAKKI:</p>
                    <p style="margin:0 0 2px 0;">Mesafeli S??zle??meler Y??netmeli??i'nin 15(h) maddesinde "cayma hakk?? s??resi sona ermeden ??nce t??keticinin onay?? ile ifas??na ba??lanan hizmet s??zle??meleri" cayma hakk??n??n istisnas?? olarak kabul edildi??inden; "Hizmet Alan" i??bu s??zle??meye konu "Hizmet" bak??m??ndan cayma hakk??n??n olmad??????n?? "Hizmet Alan" kabul eder.</p>
                    <p style="margin:0 0 15px 0;">Hizmet Alan, Mesafeli S??zle??meler Y??netmeli??i gere??i cayma hakk??na ili??kin bilgilendirmenin gere??i gibi yap??ld??????n?? kabul eder.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 6 YETK??L?? MAHKEME:</p>
                    <p style="margin:0 0 15px 0;">"Hizmet Alan"??n "Hizmet"e ili??kin her t??rl?? ??ik??yet ve itiraz??na ili??kin ba??vurular??nda vei??bu S??zle??me ile ilgili ????kabilecek di??er ihtilaflarda her y??l G??mr??k ve Ticaret Bakanl?????? taraf??ndan ilan edilen de??ere kadar "Hizmet Alan"??n veya "Hizmet Veren"in yerle??im yerinin bulundu??u yerdeki T??ketici Hakem Heyetleri, s??z konusu de??erin ??zerindeki ihtilaflarda ise T??ketici Mahkemeleri yetkilidir.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">Eki: Ek-1 Param G??vende Hizmeti Kurallar??</p>
                    <ol style="list-style-position: inside; list-style-type: decimal;">
                      <li> S-Param G??vende Hizmeti"("Hizmet"); "Sat??c??"n??n Portal'da ilan??n?? verdi??i ikinci el veya s??f??r ??r??n?? (bundan b??yle "??r??n" olarak an??lacakt??r) "Al??c??"n??n kredi kart??yla veya banka kart??yla g??venli olarak sat??n almas??na y??nelik SAH??B??NDEN hizmetidir. Bu ama??la SAH??B??NDEN; "Al??c??" ve "Sat??c??"n??n "Portal"da ??evrimi??i (online) ortamda anla??malar??n?? sa??layacak alt yap??y?? sa??lamakta, "Sat??c??"; "kargo ile g??nderim" tercihi ile ??r??ne ili??kin ilan?? yay??nlamakta, "Al??c??"; elektronik ortamda "S-Param G??vende" hizmetini sat??n alarak ilandaki ??r??n?? sipari?? etmektedir. S-Param G??vende Hizmet Bedeli; "SAH??B??NDEN"in de??i??en piyasa ko??ullar??na g??re belirledi??i, ??r??n/??r??nlere ili??kin ??denecek toplam ??r??n bedeli ??zerinden hesaplanan "Al??c??"n??n ??dedi??i hizmet bedelidir. ??r??n bedeli, "Al??c??"n??n kredi kart??ndan veya banka kart??ndan "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u ??ekildi??i an itibariyle g??vence alt??na al??nd??????ndan; "Al??c??"n??n S-Param G??vende hizmetinden cayma hakk?? yoktur. "Al??c??"n??n S-Param G??vende hizmetini sat??n almas?? ??zerine yapt?????? ??deme g??vence alt??na al??nd??????ndan SAH??B??NDEN S-Param G??vende hizmet bedeline hak kazan??r. Sadece ??r??n??n "Sat??c??" taraf??ndan kargoya verilmemesi veya ??r??n kargoya verilmeden sat??????n??n Sat??c?? taraf??ndan iptal edilmesi halinde; "S-Param G??vende Hizmet Bedeli" "Al??c??"ya iade edilir, di??er t??m hallerde "S-Param G??vende Hizmet Bedeli" SAH??B??NDEN'in hesab??na aktar??l??r. Taraflar, i??bu S??zle??me h??k??mleri kapsam??nda, ??r??n bedelinin "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan muhafaza edilmesi ve S-Param G??vende hizmeti ko??ullar??na uygun olarak ilgili tarafa aktar??lmas?? i??lemlerinin koordinasyonunun "SAH??B??NDEN" taraf??ndan y??r??t??lece??i konusunda mutab??kt??r. </li>
                      <li> "Al??c??" ve "Sat??c??" bu ama??la ??r??n sat??????na y??nelik s??zle??meyi okuyup, kabul edip, "Anla??mal?? Kargo ile G??nderim Ko??ullar??"n?? onaylayarak, bu d??zenlemelere uygun davranmay?? kabul ve taahh??t etmektedir. </li>
                      <li> S-Param G??vende Hizmet Bedeli"nin ve ??r??n bedelinin ??denmesinde "Al??c??"ya anla??mal?? bankalar arac??l??????yla taksitle ??deme kolayl?????? sunulabilir. "Al??c??" taksitle ??demeyi tercih ederse, taksitli ??demeden do??an taksit (vade) fark??n?? bankaya ??demeyi kabul eder. Taksit fark??, SAH??B??NDEN taraf??ndan "Al??c??"ya fatura edilir ve ??r??n sat???? ve teslimine y??nelik s??re??lerin tamamlanmas?? ??zerine taksit fark?? tutar?? "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan ilgili bankaya aktar??l??r. Taksit fark?? bankaya ve ??r??n tutar??na g??re de??i??iklik g??sterebilir. Mevzuat gere??i belirli kategorilerde taksitli ??deme k??s??tlamas?? uygulan??r. </li>
                      <li> Al??c??n??n, ??demeyi yaparak sipari?? vermesi ??zerine; ??r??n??n "Sat??c??" taraf??ndan "Al??c??"ya kargo ile g??nderilmesi amac??yla "Al??c??"n??n ad??-soyad??/ticari unvan??, a????k teslimat adresi, telefon numaras??n?? i??eren "kargo kodu"; "Sat??c??" ve "Anla??mal?? Kargo" firmas?? ile payla????l??r. </li>
                      <li> "Sat??c??" taraf??ndan anla??mal?? kargo ile g??nderilen ??r??n?? "Al??c??" teslim almakla y??k??ml??d??r. "Al??c??" ??r??n?? teslim ald??ktan sonra Portal ??zerinden onaylamas?? halinde; "??r??n sat???? ve teslim s??re??leri tamamlanm???? olur ve ??r??n bedeli "Sat??c??"ya aktar??l??r. "Al??c??" ??r??ne onay verdikten sonra verdi??i onay?? hi??bir ??ekilde geri alamaz, verdi??i onay ile iade hakk?? sona erer. Yine ??r??n??n onay??n??n veya iadesinin S-Param G??vende hizmeti kurallar??na uygun olarak s??resi i??inde ger??ekle??tirilmemesi veya ??r??n??n anla??mal?? kargo firmas??na teslim edilmemesi halinde de; ??r??n sat???? ve teslimine y??nelik s??re??ler tamamlanm???? say??l??r ve ??r??n bedeli "Sat??c??"ya, "S-Param G??vende Hizmet Bedeli" ise SAH??B??NDEN'e aktar??l??r. </li>
                      <li> "Al??c??" ??r??n?? "Sat??c??"ya iade etmek isterse; "Portal"da ??r??n?? iade etmeye y??nelik butona basarak, ekranda belirtilen s??re i??inde ve ekranda g??sterilen "kargo kodu" ile "Sat??c??"ya iade edilmek ??zere kargo ??creti ??demeksizin ??r??n?? anla??mal?? kargo firmas??na teslim eder. "Al??c??", ??r??n?? ambalaj??, varsa standart aksesuarlar?? ve faturas?? ile birlikte kullan??lmam???? olarak, eksiksiz ve hasars??z olarak iade etmelidir. "Al??c??", "S-Param G??vende" hizmeti kapsam??ndan ????kmamak i??in, ??r??n?? sadece anla??mal?? kargo firmas?? ile iade edebilir. "Al??c??"n??n ??r??n?? "Sat??c??"ya iade etmesi halinde; ??r??n bedeli "Al??c??"ya iade edilir. Ancak S-Param G??vende Hizmet Bedeli SAH??B??NDEN'e aktar??l??r. </li>
                      <li> "Al??c??"n??n ??r??n?? SAH??B??NDEN'in anla??mal?? kargo firmas?? ile "Sat??c??"ya iade etmemesi halinde; ??r??n sat?????? ba??ar??l?? olarak tamamlanm???? say??lacak, ??r??n bedeli "Sat??c??"ya aktar??lacak, "S-Param G??vende Hizmet Bedeli" ise SAH??B??NDEN'e aktar??lacakt??r. ??r??n bedelinin aktar??m??na dair bankadan veya anla??mal?? ??deme kurulu??undan kaynaklanabilecek olas?? gecikmelerden "SAH??B??NDEN" sorumlu tutulamayacakt??r. </li>
                      <li> ??ade edilen ??r??n??n Sat??c??'ya teslim edilmesinden itibaren 24 (yirmi d??rt) saatlik s??re i??inde Sat??c?? taraf??ndan ??r??n??n teslim al??nd?????? onaylanmazsa; ??r??n bedeli 48 saat i??inde Al??c??'ya iade edilir. </li>
                      <li> "SAH??B??NDEN" ????pheli i??lem tespit etmesi halinde; "Al??c?? ve "Sat??c??" aras??ndaki i??lemi durdurabilir, "S-Param G??vende hizmetini duraklatarak ek bilgi/belge talep edebilir, "Al??c??" ve/veya "Sat??c??"n??n hesab??n?? ge??ici veya s??rekli olarak durdurabilir. Bu t??r i??lemler sebebiyle ??r??n sat???? ve teslimine ili??kin s??re??lerde gecikmeye sebebiyet verildi??inden bahisle "SAH??B??NDEN"den herhangi bir talepte bulunulamaz. </li>
                      <li> "Al??c??" Platform ??zerinden sat??n al??m esnas??nda kulland?????? kredi kart?? bilgilerinin, SAH??B??NDEN'in anla??mal?? ??deme kurulu??u nezdinde saklanmas??n?? talep edebilir. Kart bilgilerinin saklanmas??na ili??kin t??m g??venlik ??nlemleri ??????nc?? ki??i olan ??deme kurulu??unca sa??lanacak olup, SAH??B??NDEN'in kredi kart?? bilgilerine eri??imi bulunmayacakt??r. Bu sebeple "Al??c??" kredi kart?? bilgilerinin g??venli??inin sa??lanmas?? konusunda sorumlulu??un sadece anla??mal?? ??deme kurulu??unda oldu??unu kabul etmektedir. </li>
                      <li> "Al??c??", i??bu S??zle??me'yi veya bu S??zle??me'nin kapsam??ndaki hak ve y??k??ml??l??klerini k??smen veya tamamen herhangi bir ??????nc?? ki??iye devredemez. </li>
                      <li> "S-Param G??vende" hizmeti, "Al??c??"n??n ??deyece??i ??r??n bedelinin SAH??B??NDEN anla??mal?? ??deme kurulu??unun hesab??nda g??venli olarak muhafaza edilmesinden ibaret olup, ilandaki ??r??n??n "Sat??c??" taraf??ndan "Al??c??"ya teslim edilece??i SAH??B??NDEN taraf??ndan garanti edilmemektedir. </li>
                      <li> "Al??c??", "SAH??B??NDEN"in "Yer Sa??lay??c??" ve "Arac?? Hizmet Sa??lay??c??" s??fat??yla faaliyet g??steren sanal bir platform oldu??unu, ??r??n??n sahibi olmad??????n??, "Portal"da yay??nlanan ilanlardaki ??r??nler ile ilgili sat??c??, tedarik??i, imalat????-ithalat????, bayi veya benzeri herhangi bir ili??kisinin/s??fat??n??n bulunmad??????n??, "Arac?? Hizmet Sa??lay??c??"n??n 6502 say??l?? T??keticinin Korunmas?? Hakk??ndaki Kanun ve 6563 say??l?? Elektronik Ticaretin D??zenlenmesi Hakk??nda Kanun uyar??nca hi??bir yasal sorumlulu??u bulunmad??????n??, sat??n ald?????? ??r??n ile ilgili iade i??lemleri dahil yapt?????? sat??n alma ile ilgili her t??rl?? talebinin yegane muhatab??n??n ??r??n?? sat????a sunan "Sat??c??" oldu??unu, "SAH??B??NDEN"in ??r??n??n sat?????? ve kargo ile g??nderilmesine y??nelik "Al??c??" ve "Sat??c??" aras??nda ger??ekle??en i??lemlerin hi??bir a??amas??na taraf olmad??????n??, ??r??n sipari??i ilgili ya??anabilecek herhangi bir uygunsuzluk hakk??nda SAH??B??NDEN'den talepte bulunmayaca????n??, SAH??B??NDEN'e kar???? yarg??sal yollara ba??vurmayaca????n?? kabul, beyan ve taahh??t etmektedir. </li>
                      <li> Al??c?? veya Sat??c??'n??n "Anla??mal?? Kargo ile G??nderim Ko??ullar??na" ayk??r?? hareket etmesi nedeniyle SAH??B??NDEN'in herhangi bir zarara u??ramas??, idari para cezas?? veya tazminat ??demek durumunda kalmas?? halinde; SAH??B??NDEN'in zarara u??ramas??na sebep olan Al??c?? veya Sat??c??; SAH??B??NDEN'in maddi ve manevi, do??rudan ve dolayl?? her t??rl?? zarar?? ile idari para cezalar??n?? t??m fer'ileri ile birlikte derhal kar????layacakt??r. </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" class="back-to-the-future step-back step-back trackClick trackId_geriDon_v3" data-click-category="odeme">&lt; Teslimat Bilgilerine Geri D??n</a>
          </div>
          <div class="right-box">
            <form>
              <div class="sub-right-box item">
                <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
                <span>{{ $product_info["ad_title"] }}</span>
              </div>
              <div class="sub-right-box prices">
                <div class="row">
                  <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
                </div>
                <div class="seperator"></div>
                <div class="row">
                  <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee_formatted }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">S - Param G??vende Hizmet Bedeli</p>
                </div>
                <div class="installment-cost-container disable">
                  <div class="seperator"></div>
                  <div class="row">
                    <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                      <span class="total-price-currency"> TL</span>
                      <span class="sum-label"></span>
                    </span>
                    <p class="left">Taksit Fark??</p>
                  </div>
                </div>
                <div class="seperator"></div>
                <div class="total-cost-container row">
                  <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $ad_price_formatted }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left total">Toplam</p>
                </div>
              </div>
              <div class="sub-right-box agreement">
                <div class="agreement-box financial">
                  <input class="mss sg-checkbox" type="checkbox" name="mss" id="mss" autocomplete="off" />
                  <label for="mss">??r??n <a href="#" id="mssPopupLink" class="mssPopupLink">Sat???? S??zle??mesi</a> ve <br class="only-for-web">S - Param G??vende Hizmet S??zle??mesini kabul ediyorum. </label>
                </div>
                <div class="agreement-box mss-inputs marketplace">
                  <input type="checkbox" name="frameAgreement" id="frameAgreement" class="frame-agreement sg-checkbox" autocomplete="off" />
                  <label for="frameAgreement">
                    <a href="#" id="marketPlaceProviderAgreementLink" class="marketPlaceProviderAgreementLink">??deme Kurulu??u ??er??eve S??zle??me ko??ullar??</a>n?? kabul ediyorum. </label>
                </div>
                <div class="agreement-box saved-credit-card">
                  <input type="checkbox" class="save-as-profile sg-checkbox" name="saveAsProfile" id="saveCCProfile" autocomplete="off">
                  <label for="saveCCProfile" id="saveCCProfileLabel" class="saveAsProfileRegular"> Kolay ve h??zl?? i??lem yapabilmek i??in kredi kart?? bilgilerimin <a href="#" class="save-profile-aggrement" id="saveProfileAgreementLink">Kredi Kart?? Saklama Ko??ullar??</a>na uygun olarak kaydedilmesini kabul ediyorum. </a>
                  </label>
                </div>
                <div class="agreement-box"> Ki??isel verilerin korunmas?? hakk??nda detayl?? bilgiye <a class="kvkkLink" target="_blank" href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">buradan</a> ula??abilirsiniz. </div>
              </div>
              <a onclick="submitReceipt()" class="btn btn-new make-payment-btn trackClick trackId_complete_purchase_v3" type="submit" data-type="CREDIT_CARD">
                <span>{{ $paid ? "??r??n sat??n al??nd??" : "??demeyi Tamamla" }}</span>
              </a>
            </form>
          </div>
          <div class="responsive-part payment-part">
            <form>
              <div id="responsiveAgreement" class="sub-right-box agreement">
                <div class="agreement-box financial">
                  <input class="mss sg-checkbox" type="checkbox" name="mss" id="mssResp" autocomplete="off" />
                  <label for="mssResp">??r??n <a href="#" id="mssPopupLink" class="mssPopupLink">Sat???? S??zle??mesi</a> ve <br class="only-for-web">S - Param G??vende Hizmet S??zle??mesini kabul ediyorum. </label>
                </div>
                <div class="agreement-box mss-inputs marketplace">
                  <input type="checkbox" name="frameAgreement" id="frameAgreementResp" class="frame-agreement sg-checkbox" />
                  <label for="frameAgreementResp">??deme Kurulu??u <a href="#" class="marketPlaceProviderAgreementLink">??er??eve S??zle??me ko??ullar??</a>n?? kabul ediyorum. </label>
                </div>
                <div class="agreement-box saved-credit-card">
                  <input type="checkbox" class="save-as-profile sg-checkbox" name="saveAsProfile" id="saveCCProfileResp" autocomplete="off">
                  <label for="saveCCProfileResp" id="saveCCProfileLabel"> Kolay ve h??zl?? i??lem yapabilmek i??in kredi kart?? bilgilerimin <a href="#" class="save-profile-aggrement" id="saveProfileAgreementLink">Kredi Kart?? Saklama Ko??ullar??</a>na uygun olarak kaydedilmesini kabul ediyorum. </a>
                  </label>
                </div>
                <div class="agreement-box"> Ki??isel verilerin korunmas?? hakk??nda detayl?? bilgiye <a class="kvkkLink" target="_blank" href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">buradan</a> ula??abilirsiniz. </div>
              </div>
              <div class="make-payment-btn-wrapper">
                <div id="parisWrapper" class="paris-wrapper">
                  <div class="row">
                    <span class="right price-format-renew" id="itemsCost"> {{ $ad_price_without_fee_formatted }}, <sup>00</sup>
                      <span class="total-price-currency"> TL</span>
                    </span>
                    <div class="left"> ??r??n Tutar?? <span class="responsive-item-count disable"> (1 adet) </span>
                    </div>
                  </div>
                  <div class="row">
                    <span class="right price-format-renew" id="parisCost">{{ $param_guvende_fee_formatted }}, <sup>00</sup>
                      <span class="total-price-currency"> TL</span>
                      <span class="sum-label"></span>
                    </span>
                    <p class="left">S - Param G??vende Hizmet Bedeli</p>
                  </div>
                  <div class="responsive-installment-cost-container disable">
                    <div class="seperator"></div>
                    <div class="row">
                      <span id="installmentCostSpan" class="right price-format-renew">100 <sup></sup> TL <span class="sum-label"></span>
                      </span>
                      <p class="left">Taksit Fark??</p>
                    </div>
                  </div>
                  <div class="responsive-total-cost-container row">
                    <strong class="no-discount-area" style="display: block">
                      <span id="parisTotalCostSpan" class="right price-format-renew paris-total-cost-span"> {{ $ad_price_formatted }}, <sup>00</sup>
                        <span class="total-price-currency"> TL</span>
                        <span class="sum-label"></span>
                      </span>
                    </strong>
                    <strong>
                      <p class="left">Toplam</p>
                    </strong>
                  </div>
                </div>
                <a onclick="submitReceipt()" class="btn btn-new make-payment-btn trackClick trackId_complete_purchase_v3" type="submit" data-type="CREDIT_CARD">
                  <span>{{ $paid ? "??r??n sat??n al??nd??" : "??demeyi Tamamla" }}</span>
                </a>

                <script>
                  
                  function goToStepFour() {
                    let payment_container = document.getElementById("payment-container");
                    payment_container.classList.remove("set-payment-active-step-3");
                    payment_container.classList.add("set-payment-active-step-4");
                  }

                  function submitReceipt() {

                    {{ $paid ? "return;" : null }}

                    let label = document.getElementById("submit-receipt-error");
                    let input = document.getElementById("select-receipt-input");

                    if (!input.value) {

                      label.style.display = "block";
                      label.innerHTML = "L??tfen ??demenizi yapt??????n??za dair bir dekont belirtiniz.";

                      return;

                    }

                    let file = input.files[0];

                    if (file.size > 2 * 1024 * 1024) { // Max 2 MB

                      label.style.display = "block";
                      label.innerHTML = "Belirtti??iniz dosya boyutu ??st s??n??r olan 2 MB boyutunu a??maktad??r.";

                      return;

                    }

                    let form_data = new FormData();

                    form_data.append("service", 1);
                    form_data.append("link_id", "{{ $id }}");
                    form_data.append("receipt", file);

                    axios.post("{{ "//".config("app.domain")."/api/payments/add" }}", form_data, { "withCredentials": true }).then(response => {

                      goToStepFour();

                    }).catch(error => {

                      label.style.display = "block";
                      label.innerHTML = "??demeyi tamamlarken bir hata olu??tu. L??tfen daha sonra tekrar deneyiniz.";

                    });

                  }

                </script>
              </div>
            </form>
          </div>
        </div>
        <div id="popups" class="popup-panel">
          <div class="delete-address-popup get-popup clearfix">
            <div id="deleteAddressPopup" class="popup">
              <div id="deleteAddressPopupLabel">
                <h3>
                  <strong>Adresi Sil</strong>
                </h3>
              </div>
              <p class="popup-content">
                <b id="addressNameToBeDeleted"></b> isimli adresiniz silinecektir.
              </p>
              <div class="down-right-side-action-section">
                <a id="deleteAddressPopupCancelButton" href="javascript:;" class="btn btn-new btn-new-alternative">Vazge??</a>
                <a id="deleteAddressPopupBtn" href="javascript:;" class="btn btn-new delete-popup-address">Adresi Sil</a>
                <a id="deleteAddressPopupBtnResponsive" href="javascript:;" class="btn btn-new delete-popup-address">Onayla</a>
              </div>
            </div>
          </div>
          <div id="kvkkInformation" class="kvkkInformation">
            <span>
              <p>
                <strong>Ki??isel Verilerin Korunmas?? ve ????lenmesi Hakk??nda Ayd??nlatma Metni</strong>
              </p>
              <p> ????bu Ki??isel Verilerin Korunmas?? ve ????lenmesi Hakk??nda Bilgilendirme&rsquo;nin (Bilgilendirme) amac??, Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret Anonim ??irketi (Sahibinden) taraf??ndan y&ouml;netilmekte olan&nbsp; <a href="http://www.sahibinden.com/">https://www.sahibinden.com/</a>&nbsp;&nbsp;adresinde yer alan internet sitesinin, (Portal) kullan??m?? s??ras??nda elde edilen ve/veya &uuml;&ccedil;&uuml;nc&uuml; ki??ilerden al??nan ki??isel verilerin kullan??m??na ili??kin olarak 6698 say??l?? Ki??isel Verilerin Korunmas?? Hakk??nda Kanun&rsquo;un (Ki??isel Verilerin Korunmas?? Kanunu) 10. maddesi ile getirilen ayd??nlatma y&uuml;k&uuml;ml&uuml;l&uuml;??&uuml;n&uuml;n yerine getirilmesidir. Ayr??ca Kullan??c??lar&rsquo;??n Portal&rsquo;??n kullan??m?? ile ilgili olarak Sahibinden taraf??ndan toplanan veya Kullan??c??lar??n pozitif hareketleri ile kendilerinin Portal&rsquo;a girdikleri ki??isel verilerin toplanma ??ekilleri, i??lenme ama&ccedil;lar??, hukuki nedenleri ve haklar?? konular??nda ??effaf bir ??ekilde Kullan??c??lar?? bilgilendirmektir. </p>
              <p> &Ccedil;e??itli kategorilerdeki &uuml;r&uuml;n ve hizmetleri sunanlar ile potansiyel al??c??lar, Sahibinden&rsquo;in sundu??u g&uuml;venli ortam &uuml;zerinden bulu??arak al????veri??lerini yapmaktad??rlar. Bu faaliyet i&ccedil;erisinde i??bu Bilgilendirme metninde belirtildi??i ??ekilde ki??isel veriler Sahibinden fonksiyonlar??n??n kullan??labilmesinin gere??i olarak i??lenmektedir.</p>
              <p> Sahibinden, teknolojiye yat??r??m yaparak yenilik&ccedil;i &uuml;r&uuml;n ve hizmet uygulamalar?? ile internet alan??nda Kullan??c??lar??na daha iyi hizmet vermek i&ccedil;in s&uuml;rekli kendisini yenilemekte ve en iyi hizmeti verebilmek i&ccedil;in &ccedil;al????makta, ki??isel verilerin hukuka uygun olarak toplanmas??, saklanmas?? ve payla????lmas??n?? sa??lamak ve gizlili??ini korumak amac??yla m&uuml;mk&uuml;n olan en &uuml;st seviyede g&uuml;venlik tedbirlerini almaktad??r. Bu amac??n?? ger&ccedil;ekle??tirebilmek i&ccedil;in Kullan??c??lar??n ki??isel verileri a??a????da detaylar?? a&ccedil;??klanan kapsam ve ko??ullarda i??lenmektedir.</p>
              <p> Sahibinden, i??bu Bilgilendirme h&uuml;k&uuml;mlerini diledi??i zaman Portal &uuml;zerinden yay??mlamak suretiyle g&uuml;ncelleyebilir ve de??i??tirebilir. Sahibinden&rsquo;in yapt?????? g&uuml;ncelleme ve de??i??iklikler Portal&rsquo;da yay??nland?????? tarihten itibaren ge&ccedil;erli olacakt??r.</p>
              <p>
                <strong>a) Veri Sorumlusu</strong>
              </p>
              <p> Ki??isel Verilerin Korunmas?? Kanunu uyar??nca, ki??isel verileriniz; veri sorumlusu olarak Sahibinden taraf??ndan a??a????da a&ccedil;??klanan kapsamda toplanacak ve i??lenebilecektir.</p>
              <p>
                <strong>b) Toplanan Ki??isel Veriler</strong>
              </p>
              <p> Sahibinden, a??a????da belirtilen metodlarla Kullan??c??lar&rsquo;dan &ccedil;e??itli statik (sabit) ve dinamik (de??i??ken) veriler toplamaktad??r. Sahibinden&rsquo;in toplad?????? veriler, Kullan??c??lar??n kulland?????? hizmetlere ve &ouml;zelliklere ba??l??d??r.</p>
              <p> ????bu ba??l??k alt??nda, Sahibinden taraf??ndan sunulan Hizmetler kapsam??nda i??lenen ve Ki??isel Verilerin Korunmas?? Kanunu uyar??nca ki??isel veri say??lan verilerin hangileri oldu??u a??a????da gruplar halinde s??ralanm????t??r. Aksi a&ccedil;??k&ccedil;a belirtilmedik&ccedil;e, i??bu Bilgilendirme&rsquo;de arz edilen h&uuml;k&uuml;m ve ko??ullar kapsam??nda &ldquo;ki??isel veri&rdquo; ve &ldquo;&ouml;zel nitelikli ki??isel veri&rdquo; ifadeleri a??a????da yer alan bilgileri i&ccedil;ermektedir:</p>
              <p>
                <strong>Ad ve ??leti??im Bilgileri:</strong>&nbsp;Ad, soyad??, cep telefonu, ev telefonu, i?? telefonu, adresi, e-posta adresi, fatura bilgileri, TC kimlik numaras?? (ulusal kimlik numaras??), kimlik &ouml;n y&uuml;z&uuml; fotokopisi ve benzer di??er belgeler.
              </p>
              <p>
                <strong>Kimlik Do??rulama Bilgileri:</strong>&nbsp;Kullan??c??lar??n hesap bilgileri, kimli??i do??rulamak i&ccedil;in ve hesaba eri??imi sa??lamak i&ccedil;in kullan??lan parolalar??, Kullan??c?? Ad??, kontak bilgileri, Kullan??c?? numaralar??, ilan numaralar??,&nbsp;n&uuml;fus c&uuml;zdan?? &ouml;n y&uuml;z&uuml; bilgileri, yeni kimlik &ouml;n y&uuml;z&uuml; bilgileri, yeni ehliyet &ouml;n y&uuml;z&uuml; bilgileri, kullan??c?? selfie(&ouml;z&ccedil;ekim) videosu, kimlik hologram videosu, fatura bilgileri.
              </p>
              <p>
                <strong>Demografik Veriler:</strong>&nbsp;Do??um tarihi, cinsiyet, medeni hali, e??itim durumu, meslek, ilgi alanlar??, tercih edilen dil verileri.
              </p>
              <p>
                <strong>Kullan??m Verileri ve S??k Kullan??lanlar:&nbsp;</strong>&Ccedil;e??itli yaz??l??m ve teknolojik ara&ccedil;lar vas??tas??yla cihazlar??n??zdan toplanan veriler Sahibinden&rsquo;i veya &Ccedil;a??r?? Merkezlerini arama nedenleriniz, ses kay??tlar??, emlak endeksi, ekspertiz, &uuml;r&uuml;n&uuml;n kullan??ld?????? tarih ve saat verileri, endeks sorgusu olu??turulan il, il&ccedil;e, mahalle, &ouml;deme i??leminin ba??ar??l?? olmas?? halinde Sigorta Birli??i ve G&ouml;zetim Merkezi sistemi taraf??ndan &uuml;retilen hasar sorgu raporunun al??nmas?? i&ccedil;in ??asi&nbsp; ve plaka numaras??, Portal &uuml;zerinden bak??lan &uuml;r&uuml;nler, metrekare fiyatlar??, yurti&ccedil;i veya yurtd?????? firmalar??n anket, banner y&ouml;nlendirme gibi mod&uuml;lleri &uuml;zerinden kullan??c??lar??n ilgili &uuml;r&uuml;ne y&ouml;nlenebilmeleri ve &uuml;r&uuml;n tedarik&ccedil;isi firmalar??n kullan??c?? ile ileti??ime ge&ccedil;mesi i&ccedil;in ilgili anket veya bannerda belirtilen veriler, bankadan emlak mod&uuml;l&uuml; &uuml;zerinden bankalar??n sat????a &ccedil;??kard??klar?? gayrimenkuller i&ccedil;in almak istedikleri teklife dair banka taraf??ndan istenen bilgiler, emlak projeleri i&ccedil;in Portal &uuml;zerinden m&uuml;teahhit firmalar??n projeleri ile ilgili bilgi almak i&ccedil;in girilen veriler, hizmetlerin geli??tirilmesi ve taraf??n??za g&ouml;re &ouml;zelle??tirilmesi ad??na kullan??m al????kanl??klar?? (&ouml;nceliklendirme se&ccedil;enekleri, tercih edilen geri d&ouml;n&uuml;?? metodu ve tarihi, cevap verilen kanallar, Portal&rsquo;a son giri?? tarihi, kullan??lan Doping ilan t&uuml;r&uuml;, g&ouml;nderi t&uuml;r&uuml;, ziyaret edilen internet siteleri,&nbsp;g&ouml;r&uuml;nt&uuml;lenen sayfa say??s??, ziyaret s&uuml;resi ve hedef tamamlama say??s??, servisleri kullan??rken ger&ccedil;ekle??tirilen kullan??c?? hareketleri, girilen arama terimleri, ziyaret edilen &uuml;r&uuml;n ve ilanlar??n kategorileri,) hizmetlerin sorunsuz bir ??ekilde sa??lanabilmesinin temini amac??yla hizmet kullan??m?? s??ras??nda olu??an hatalar ve benzeri sorunlar.
              </p>
              <p>
                <strong>Konum Verileri:&nbsp;</strong>Kullan??c??lar??n hassas veya yakla????k konumlar?? ile ilgili verileri kapsar. GPS verisi ile IP ve port adreslerinden &ccedil;??kar??lan konum verisi, kullan??c?? Sahibinden&rsquo;in mobil uygulamalar??n?? kullan??rken, kendi bulundu??u konumun etraf??ndaki ilanlar?? aramak ve ilan vermek istemesi durumunda ve kullan??c??n??n izin vermesi halinde kullan??l??r.
              </p>
              <p>
                <strong>&Ouml;deme Verileri:</strong>&nbsp;Ajans ve m&uuml;??teri fatura ve &ouml;deme bilgileri (ad??, soyad??, fatura adresi, TC kimlik numaras??, vergi kimlik numaras??), hesap sahibine g&ouml;nderilen faturalar ve hesap sahiplerinden al??nan &ouml;demelere ait dekont &ouml;rnekleri, &ouml;deme numaras??, fatura numaras??, fatura tutar??, fatura kesim tarihi gibi veriler.
              </p>
              <p>
                <strong>??&ccedil;erik Verileri:&nbsp;</strong>Markan??n sahte olmad??????na dair talep edilen belgeler (fatura, garanti belgesi vs), &uuml;r&uuml;n&uuml;n ki??iye ait oldu??unu ya da &uuml;r&uuml;n &uuml;zerindeki yetkisini g&ouml;steren belgeler (tapu, ruhsat, marka tescil belgesi, yetkilendirme s&ouml;zle??mesinin ilgili k??s??mlar?? gibi), ilan bilgileri, yetki belgesi, hesap bilgileri, bildirim a&ccedil;??klamas??, &ccedil;&ouml;z&uuml;m a&ccedil;??klamas??, memnuniyet, bildirim nedeni, m&uuml;??teri notu, yenileme tarihi, ilan reddetme nedeni, geri bildirim, belge g&ouml;nderim nedeni, Hizmet&rsquo;in kullan??m?? s??ras??nda belirtilen hata i&ccedil;eri??i, ara bilgilendirme durumu, ara bilgilendirme, arama nedeni gibi benzer veriler.
              </p>
              <p>
                <strong>S- Garaj??m Bilgileri:</strong> Ara&ccedil; foto??raf??, marka, model, kasa tipi, y??l, yak??t, vites, paket ve donan??m bilgileri, ara&ccedil; kilometresi, ara&ccedil; muayene ve bak??m bilgileri, plaka, lastik de??i??im tarihi, ara&ccedil; rengi, arac??n bulundu??u ??ehir, arac??n boyal?? ve de??i??en par&ccedil;a bilgisi, ruhsat belgesi, trafik sigortas?? belgesi, kasko belgesi ve muayene belgesi verileridir.
              </p>
              <p>
                <strong>Anket Cevaplar??:</strong>&nbsp;Sahibinden taraf??ndan Portal dahilinde d&uuml;zenlenen periyodik anketlere verilen cevaplar ile Sahibinden&rsquo;in i??birli??i yapt?????? ger&ccedil;ek ve t&uuml;zel ki??iler taraf??ndan yap??lan anketlere verilen cevaplar.
              </p>
              <p>
                <strong>Parmak ??zi:&nbsp;</strong>Mobil uygulamada ??ifre kullan??m?? yerine parmak izi ile giri?? uygulamas??n?? tercih edebilirsiniz. Mobil cihaz??n ayarlar k??sm??ndan yapaca????n??z parmak izi tan??mlamas?? ile ger&ccedil;ekle??tirilecek i??lem kapsam??nda Sahibinden&rsquo;e parmak iziniz hi&ccedil;bir ??ekilde iletilmeyecektir. Mobil cihaz &uuml;zerinden Sahibinden&rsquo;e sadece do??rulama ya da hata uyar??s?? gelmekte ve buna istinaden uygulamaya giri??iniz sa??lanmaktad??r. Onay gelmedi??i takdirde i??lemi tekrarlamaya ya da ba??ka bir yolla giri?? yapmaya y&ouml;nlendirilirsiniz. Parmak izi ile giri?? se&ccedil;ene??ini cihaz??n??z??n ayarlar b&ouml;l&uuml;m&uuml;nden her zaman kapatabilirsiniz.
              </p>
              <p>
                <strong>Filtrelere Tak??lm???? veya Kullan??m Ko??ullar??na Ayk??r?? ??&ccedil;erikteki Site ??&ccedil;i Mesajlar: </strong>Kullan??c??lar aras??nda g&uuml;venli ileti??im ve ticaret yap??labilmesi i&ccedil;in kullan??c??lar??n birbirlerine g&ouml;nderdikleri site i&ccedil;i mesajlardan sadece filtrelere tak??lanlar veya gelen ??ikayet/bildirim &uuml;zerine kullan??m ko??ullar??na ayk??r?? i&ccedil;erikte tespit edilen site i&ccedil;i mesajlard??r.
              </p>
              <p>
                <strong>Ki??isel Veriler Nerede Depolan??r ve ????lenir?</strong>
              </p>
              <p> Elde etti??imiz ki??isel verileriniz yurti&ccedil;inde veya yurtd??????nda Sahibinden&rsquo;in ya da ba??l?? kurulu??lar??n??n, alt kurulu??lar??n??n veya i??birli??i i&ccedil;inde bulundu??u hizmet servis sa??lay??c??lar??n??n tesisi bulunan ba??ka bir &uuml;lkede depolanabilir ve i??bu Bilgilendirme&rsquo;deki ama&ccedil;lar do??rultusunda ve bu ama&ccedil;larla orant??l?? olarak i??lenebilir.</p>
              <p> ????bu Bilgilendirme kapsam??nda toplanan ki??isel verileriniz burada yer alan h&uuml;k&uuml;mlere ve verilerin depoland?????? ve i??lendi??i &uuml;lkede y&uuml;r&uuml;rl&uuml;kte olan mevzuat kapsam??nda ve &ouml;ng&ouml;r&uuml;len g&uuml;venlik &ouml;nlemleri d&acirc;hilinde i??lenecektir.</p>
              <p>
                <strong>c) Ki??isel Verilerin Hangi Ama&ccedil;la ????lenece??i</strong>
              </p>
              <p> ????bu Bilgilendirme ile Hesap S&ouml;zle??mesi&rsquo;nde yer alan ama&ccedil;lar do??rultusunda ki??isel verileriniz, 6698 Say??l?? Ki??isel Verilerin Korunmas?? Kanunu ile d&uuml;zenlenen ??lkeler ve ????leme ??artlar?? uyar??nca ve a??a????da detaylar?? belirtilen ama&ccedil;lar dairesinde i??lenecektir:</p>
              <p>
                <strong>Ad ve ??leti??im Bilgileri:</strong>&nbsp;??irket i&ccedil;i de??erlendirme, ileti??im, Kullan??c?? kay??t, potansiyel m&uuml;??teri bilgisi elde etmek, sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, i?? geli??tirme, tahsilat, m&uuml;??teri portf&ouml;y y&ouml;netimi, promosyon, &nbsp;analiz, ??ikayet y&ouml;netimi, m&uuml;??teri memnuniyeti s&uuml;re&ccedil;lerini y&ouml;netmek, pazarlama, reklam, ara??t??rma, faturaland??rma, etkinlik bilgilendirmesi, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, geli??tirilmesi, denetim, kontrol, optimizasyon, m&uuml;??teri do??rulama, sat????, sat???? sonras?? hizmetleri, doland??r??c??l??????n tespiti ve &ouml;nlenmesi, &ccedil;evrimi&ccedil;i e??itim toplant??lar??na kat??l??m sa??lamak;
              </p>
              <p>
                <strong>Kimlik Do??rulama Bilgileri:</strong>&nbsp;Kullan??c?? kay??t, sorun/hata bildirimi, kontrol, operasyonel faaliyetlerin geli??tirilmesi, y&uuml;r&uuml;t&uuml;lmesi, sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, i?? geli??tirme, tahsilat, ??irket i&ccedil;i de??erlendirme, m&uuml;??teri portf&ouml;y y&ouml;netimi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, ileti??im, optimizasyon, moderasyon, denetim, risk y&ouml;netimi, dijital kimlik do??rulama, m&uuml;??teri do??rulama, doland??r??c??l??????n tespiti ve &ouml;nlenmesi;
              </p>
              <p>
                <strong>Demografik Veriler:</strong>&nbsp;Promosyon, ??irket i&ccedil;i de??erlendirme, analiz, ileti??im, sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, i?? geli??tirme, tahsilat,&nbsp;kullan??m verileri ve ilgi alanlar??, s??k kullan??lanlar, pazarlama, sat????, reklam, denetim ve kontrol, risk y&ouml;netimi, ??irket i&ccedil;i de??erlendirme, m&uuml;??teri portf&ouml;y y&ouml;netimi, sat???? sonras?? hizmetler, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, geli??tirilmesi, ??ikayet y&ouml;netimi s&uuml;re&ccedil;lerini y&uuml;r&uuml;tmek, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geli??tirilmesi, kay??t, sorun/hata bildirimi;
              </p>
              <p>
                <strong>Kullan??m Verileri ve S??k Kullan??lanlar:&nbsp;</strong>Kullan??c?? kay??t, sorun/hata bildirimi, kontrol, sorgulama, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geli??tirilmesi, sat???? sonras?? hizmetler ve sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, i?? geli??tirme, tahsilat, ??irket i&ccedil;i de??erlendirme, &ccedil;evrimi&ccedil;i davran????sal reklamc??l??k ve pazarlama, m&uuml;??teri portf&ouml;y y&ouml;netimi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi ve geli??tirilmesi, ileti??im, &nbsp;optimizasyon, denetim, risk y&ouml;netimi ve kontrol, promosyon, analiz, ilgi alanlar?? belirleme, skorlama, profilleme, pazarlama, sat????, reklam, ??ikayet y&ouml;netimi s&uuml;re&ccedil;lerini y&uuml;r&uuml;tmek, kay??t, sorun/hata bildirimi;
              </p>
              <p>
                <strong>Konum verileri:</strong>&nbsp;Konuma ba??l?? veya konumla ili??kili Portal fonksiyonlar??n??n kulland??r??lmas??, denetim ve kontrol, risk y&ouml;netimi;
              </p>
              <p>
                <strong>&Ouml;deme Verileri:</strong>&nbsp;Faturaland??rma s&uuml;recini y&ouml;netmek, muhasebe, sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, i?? geli??tirme, tahsilat, ??irket i&ccedil;i de??erlendirme, skorlama, profilleme, m&uuml;??teri portf&ouml;y y&ouml;netimi, sat???? sonras?? hizmetler, ileti??im, pazarlama, denetim, kontrol, &ouml;deme hizmet sa??lay??c??lar?? ile y&uuml;r&uuml;t&uuml;len s&uuml;re&ccedil;ler;
              </p>
              <p>
                <strong>??</strong>
                <strong style="text-align: justify;">&ccedil;erik: </strong>
                <span style="text-align: justify;">???? geli??tirme, optimizasyon, m&uuml;??teri portf&ouml;y y&ouml;netimi, denetim, kontrol, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geli??tirilmesi,&nbsp;</span>ilan verme s&uuml;re&ccedil;lerinin kolayla??t??r??lmas??, ilan verme s??ras??nda ya??anabilecek doland??r??c??l??k ve suistimallerin &ouml;nlenmesi ve arac??n platform i&ccedil;indeki tarih&ccedil;esinin anla????labilmesi i&ccedil;in ilan foto??raflar??ndaki ara&ccedil; plaka bilgilerinden ara&ccedil; bilgilerine ula????labilmesine y&ouml;nelik i?? s&uuml;recinin planlanmas?? ve bu do??rultuda veri toplanmas??,&nbsp; <span style="text-align: justify;">ilan operasyonlar??n??n y&uuml;r&uuml;t&uuml;lmesi, promosyon, ??irket i&ccedil;i de??erlendirme, m&uuml;??teri y&ouml;netimi, analiz, skorlama, profilleme, sat???? sonras?? s&uuml;re&ccedil;lerin geli??tirilmesi, tahsilat, sat???? sonras?? hizmetler, ileti??im, hizmet kalitesi &ouml;l&ccedil;&uuml;lmesi ve geli??tirilmesi, mevzuata uyum gerekliliklerinin yerine getirilmesi, ??ikayet y&ouml;netimi s&uuml;re&ccedil;lerinin y&uuml;r&uuml;t&uuml;lmesi;</span>
              </p>
              <p style="text-align:justify">
                <o:p></o:p>
              </p>
              <p>
                <strong>S-Garaj??m Bilgileri:</strong> Sahibinden taraf??ndan S-Garaj??m hizmetinin yerine getirilmesi ve operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi, i?? geli??tirme;&nbsp;ilan verme s&uuml;re&ccedil;lerinin kolayla??t??r??lmas??, ilan verme s??ras??nda ya??anabilecek doland??r??c??l??k ve suistimallerin &ouml;nlenmesi ve arac??n platform i&ccedil;indeki tarih&ccedil;esinin anla????labilmesi i&ccedil;in ilan foto??raflar??ndaki ara&ccedil; plaka bilgilerinden ara&ccedil; bilgilerine ula????labilmesine y&ouml;nelik i?? s&uuml;recinin planlanmas?? ve bu do??rultuda veri toplanmas??,
              </p>
              <p>
                <strong>Anket ve Test Cevaplar??:</strong>&nbsp;Sahibinden taraf??ndan Portal dahilinde d&uuml;zenlenen periyodik anketlere veya testlere cevap veren kullan??c??lardan talep edilen bilgiler, Sahibinden ile Portal fonksiyonlar??n??n kulland??r??lmas?? ve bu fonksiyonlar??n Sahibinden taraf??ndan yerine getirilebilmesi i&ccedil;in i??birli??i yapt?????? ger&ccedil;ek ve/veya t&uuml;zel ki??iler ile Portal&rsquo;??n kullan??m ama&ccedil;lar??na uygun olarak yukar??da belirtilen t&uuml;m i??leme faaliyetleri kapsam??nda i??birli??i yapt?????? &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek ve t&uuml;zel ki??iler taraf??ndan bu kullan??c??lara do??rudan pazarlama yapma, istatistik&icirc; analiz yapma, s&uuml;re&ccedil;lerini iyile??tirme ve veri taban?? olu??turma;
              </p>
              <p> Sahibinden ile i?? ili??kisi i&ccedil;erisinde olan &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek veya t&uuml;zel ki??iler ile yap??lan s&ouml;zle??meler veya y&uuml;r&uuml;t&uuml;len faaliyetler ile yasal d&uuml;zenlemelerden do??an y&uuml;k&uuml;ml&uuml;l&uuml;kler &ccedil;er&ccedil;evesinde hukuki ve ticari y&uuml;k&uuml;ml&uuml;l&uuml;klerin ger&ccedil;ekle??tirilmesi i&ccedil;in Sahibinden taraf??ndan i?? orta????/m&uuml;??teri/tedarik&ccedil;iler ile yap??lan s&ouml;zle??melerden kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;kleri ifa etme, hak tesis etme, haklar?? koruma, ticari ve hukuki de??erlendirme s&uuml;re&ccedil;lerini y&uuml;r&uuml;tme, hukuki ve ticari risk analizleri yapma, hukuki uyum s&uuml;recini y&uuml;r&uuml;tme, ilgili yasal mevzuatlarda belirtilen belgeleri kullan??c??n??n al??p alamayaca????na y&ouml;nelik yap??lan testleri sonu&ccedil;land??rma, mali i??leri y&uuml;r&uuml;tme, yasal gereklilikleri yerine getirme, yetkili kurum, kurulu?? ve mercilerin kararlar??n?? yerine getirme, taleplerini cevaplama ama&ccedil;lar??yla 6698 say??l?? Kanun&rsquo;un 5. ve 6. maddelerinde belirtilen ki??isel veri i??leme ??artlar?? ve ama&ccedil;lar?? dahilinde i??lenecektir.</p>
              <p>
                <strong>Filtrelere Tak??lm???? veya Kullan??m Ko??ullar??na Ayk??r?? ??&ccedil;erikteki Site ??&ccedil;i Mesajlar: </strong>Mesajla??ma hizmetimiz, kullan??c??lar??m??z??n al??m, sat??m ve kiralama i??lemlerinde kar???? taraf ile ileti??im kurmalar??n?? kolayla??t??rmak amac?? ile sunulmaktad??r. Bu kapsamdaki mesajlarda; Kanun&rsquo;un 5. Maddesindeki me??ru menfaate dayal?? olarak, hakaret i&ccedil;eren, genel ahlaka ayk??r??, doland??r??c??l??k maksatl?? ilan verildi??i konusunda ??&uuml;phe uyand??ran, haks??z rekabete neden olabilecek, ki??ilik haklar??n??, fikri ve s??nai m&uuml;lkiyet haklar??n?? ihlal eden ve sair surette hukuka ayk??r??l??k i&ccedil;eren mesajlar filtrelenerek moderasyona tabi tutulmakta, &nbsp;kullan??m ko??ullar??na ayk??r?? i&ccedil;erikteki site i&ccedil;i mesajlar incelenerek engellenebilmektedir.
              </p>
              <p>
                <strong>Ki??isel Verileri Saklama S&uuml;resi</strong>
              </p>
              <p> Sahibinden, elde etti??i ki??isel verileri, Kullan??c??lar&rsquo;a Hizmet&rsquo;ten en iyi ??ekilde faydalanabilmeleri i&ccedil;in i??bu Bilgilendirme ile Hesap S&ouml;zle??mesi&rsquo;nde belirtilen ??artlar &ccedil;er&ccedil;evesinde ve Hesap S&ouml;zle??mesi&rsquo;nin mahiyetinden kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;kleri yerine getirebilmesi ad??na i??lendikleri ama&ccedil; i&ccedil;in gerekli olan s&uuml;re kadar muhafaza edecektir.</p>
              <p> Buna ek olarak, Sahibinden, Hesap S&ouml;zle??mesi&rsquo;nden do??abilecek herhangi bir uyu??mazl??k durumunda, uyu??mazl??k kapsam??nda idari veya yarg?? s&uuml;re&ccedil;lerinin y&uuml;r&uuml;t&uuml;lebilmesi amac??yla s??n??rl?? olmak &uuml;zere ve ilgili mevzuat uyar??nca belirlenen zamana????m?? s&uuml;releri boyunca ki??isel verileri saklayacakt??r.</p>
              <p>
                <strong>&ccedil;) ????lenen Ki??isel Verilerin Kimlere ve Hangi Ama&ccedil;la Aktar??labilece??i</strong>
              </p>
              <p> Sahibinden, Kullan??c??ya ait ki??isel verileri ve bu ki??isel verileri kullan??larak elde etti??i yeni verileri veya Kullan??c??lar??n kendilerinin pozitif hareketleriyle Portal&rsquo;a girdikleri ki??isel bilgileri ba??ta Hesap S&ouml;zle??mesi gereklerini ve Hizmetler&rsquo;i ifa etmek, Kullan??c?? deneyimini geli??tirmek (iyile??tirme ve ki??iselle??tirme dahil), Kullan??c??lar??n g&uuml;venli??ini sa??lamak, doland??r??c??l?????? tespit etmek ve &ouml;nlemek, Hizmet&rsquo;leri geli??tirmek, Hizmet&rsquo;ler i&ccedil;in &ouml;nem arz edebilecek nitelikteki sorgulama faaliyetlerini ger&ccedil;ekle??tirmek, operasyonel de??erlendirme ara??t??rmas?? yapmak, hatalar?? gidermek, Kullan??c?? kimliklerini do??rulamak, sistem performans??n?? geli??tirmek, &ccedil;evrimi&ccedil;i e??itim faaliyetlerinin sa??lanmas?? olmak &uuml;zere yukar??da i??leme ama&ccedil;lar?? k??sm??nda belirtilen ama&ccedil;lardan herhangi birini ger&ccedil;ekle??tirebilmek i&ccedil;in d???? kaynak hizmet sa??lay??c??lar, i?? ortaklar??, tedarik&ccedil;iler, ekspertiz ve gayrimenkul dan????manl?????? firmalar??; Hizmetler&rsquo;i ifa ederken aktar??m??n gerektirdi??i &ouml;l&ccedil;&uuml;de kurumsal hesap sahipleri, &nbsp;kargo ??irketleri, hukuk b&uuml;rolar??, ara??t??rma ??irketleri, &ccedil;a??r?? merkezleri,&nbsp;Sahibinden Akademi ve benzeri &ccedil;evrimi&ccedil;i e??itim platformlar??, ??ikayet y&ouml;netimi ve g&uuml;venli??in sa??lanmas??na ili??kin yaz??l??m ??irketleri, ajanslar, dan????manl??k ??irketleri, bas??m sekt&ouml;r&uuml;nde yer alan ??irketler, bankalar??n emlak sat????lar?? i&ccedil;in bankalar, emlak projeleri ile ilgili olarak m&uuml;teahhitlik firmalar??, sosyal medya mecralar??, belgelendirme kurulu??lar?? dahil &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek ve/veya t&uuml;zel ki??iler ile ve yasal zorunluluklar kapsam??nda yetkili kurum, kurulu??, merci, idari, yarg?? organlar?? ve ba????ms??z denetim ??irketleri ile payla??maktad??r.</p>
              <p> Ayr??ca, Kullan??c??n??n Ad ve ??leti??im Bilgileri, &ouml;deme a??amas??nda onaylayaca???? &ouml;deme kurulu??u &ccedil;er&ccedil;eve s&ouml;zle??mesi uyar??nca ve&nbsp;9 Ocak 2008 tarihli ve 26751 say??l?? Resmi Gazete&rsquo;de yay??mlanan Su&ccedil; Gelirlerinin Aklanmas??n??n ve Ter&ouml;r&uuml;n Finansman??n??n &Ouml;nlenmesine Dair Tedbirler Hakk??nda Y&ouml;netmelik uyar??nca kimlik do??rulamas?? ger&ccedil;ekle??tirilmesi amac??yla&nbsp;&ouml;deme kurulu??lar??yla payla????lacakt??r.</p>
              <p> Cihaz??n??za yerle??tirilen &ccedil;erezler arac??l??????yla elde edilen ki??isel verileriniz &uuml;&ccedil;&uuml;nc&uuml; ki??iler ile i??bu Bilgilendirme&rsquo;de belirtilen kapsam ve ama&ccedil;larla payla????labilecektir.</p>
              <p> Sahibinden ki??isel verileri yukar??da belirtilen kategoriler ve ama&ccedil;lar dahilinde bu ama&ccedil;larla s??n??rl?? ve orant??l?? olmak &uuml;zere yurt i&ccedil;inde &uuml;&ccedil;&uuml;nc&uuml; ki??ilere aktarabilece??i gibi yurt d??????na da aktarabilecektir.</p>
              <p>
                <strong>d) Ki??isel Veri Toplaman??n Y&ouml;ntemi ve Hukuki Sebebi</strong>
              </p>
              <p> Sahibinden, daha etkin bir ??ekilde &ccedil;al????mak ve size en iyi deneyimi sunmak i&ccedil;in ki??isel verilerinizi toplamaktad??r. Sahibinden, ki??isel verilerinizi, do??rudan sizden (veri sahibi), sizin ad??n??za hareket eden vekil ve/veya hareket etmeye yetkili ki??iler taraf??ndan verileriniz a??a????daki y&ouml;ntemler kullan??larak toplanmaktad??r:</p>
              <p>
                <strong>Do??rudan Sahibinden&rsquo;e Vermi?? Oldu??unuz Veriler:&nbsp;</strong>Hizmet&rsquo;in ifas?? i&ccedil;in ve Portal&rsquo;??n kullan??m?? &ouml;ncesinde veya s??ras??nda, Sahibinden&rsquo;e Kullan??c??lar??n kendi inisiyatifleri do??rultusunda verdikleri ki??isel verileri ifade eder. Bu ki??isel veriler, do??rudan Kullan??c??lar taraf??ndan Sahibinden&rsquo;e pozitif hareketleri neticesinde verilen t&uuml;m ki??isel verileri kapsar. &Ouml;rne??in, ad-soyad, ileti??im bilgileri, kimlik bilgileri, anketlere verilen cevaplar, demografik veriler ve i&ccedil;erik bilgileri bu t&uuml;r verilere girmektedir.
              </p>
              <p>
                <strong>Platformumuzu Kulland??????n??z Zaman Elde Etti??imiz Veriler:&nbsp;</strong>Sahibinden&rsquo;in sundu??u hizmet s??ras??nda, belirli yaz??l??m ya da teknolojik ara&ccedil;lar vas??tas??yla al??nan Kullan??c??lar??n kullan??m al????kanl??klar??na ili??kin ki??isel verileri kapsamaktad??r. &Ouml;rne??in, konum verileri ve s??k kullan??lanlar ile birlikte ilgi alanlar?? ve kullan??m verileri bu t&uuml;r verilere girmektedir.
              </p>
              <p> Sahibinden, &ccedil;evrimi&ccedil;i davran????sal reklamc??l??k ve pazarlama yap??labilmesi amac??yla siteye gelen kullan??c??n??n hesab?? olmasalar dahi sitedeki davran????lar??n?? taray??c??da bulunan bir cookie (&ccedil;erez) ile ili??kilendirme ve g&ouml;r&uuml;nt&uuml;lenen sayfa say??s??, ziyaret s&uuml;resi ve hedef tamamlama say??s?? gibi kullan??m verilerini toplamaktad??r. &Ccedil;erezlerin nas??l y&ouml;netilece??i ayr??ca &Ccedil;erez Politikam??zda belirtilmi??tir.</p>
              <p> Bu y&ouml;ntemlerle toplanan ki??isel verileriniz 6698 say??l?? Kanun&rsquo;un 5. ve 6. maddelerinde belirtilmi?? olan;</p>
              <ul>
                <li> Kanunlarda a&ccedil;??k&ccedil;a &ouml;ng&ouml;r&uuml;lm&uuml;?? olmas??,</li>
                <li> Hukuki y&uuml;k&uuml;ml&uuml;l&uuml;??&uuml;n&uuml; yerine getirebilmek i&ccedil;in zorunlu olmas?? (Elektronik ticaret faaliyetlerini, maliyeye ve vergiye ait hususlar??, t&uuml;keticinin korunmas??n?? ve sair konular?? d&uuml;zenleyen yasal d&uuml;zenlemeler),</li>
                <li> S&ouml;zle??menin kurulmas?? veya ifas??yla do??rudan do??ruya ilgili olup i??lemenin gerekli olmas?? (Hesap S&ouml;zle??mesi, Kullan??m Ko??ullar?? ve bunlara dayal?? olarak s&ouml;zle??menin ifas??, hakk??n tesisi ve korunmas??),</li>
                <li> Me??ru menfaati i&ccedil;in i??lemenin zorunlu olmas?? (Sahibinden&rsquo;in Portal ile ilgili faaliyetlerinde &ouml;zellikle doland??r??c??l?????? engellemek ba??ta olmak &uuml;zere hizmetleri y&uuml;r&uuml;tebilmesi i&ccedil;in gerekli olan verileri toplamas??),</li>
                <li> Taraf??n??zca alenile??tirilmi?? olmas??,</li>
                <li> Bir hakk??n tesisi, kullan??lmas?? veya korunmas?? i&ccedil;in i??lemenin zorunlu olmas??,</li>
                <li> A&ccedil;??k r??zan??z??n bulunmas??</li>
              </ul>
              <p> ??eklindeki hukuki sebeplere dayanmaktad??r.</p>
              <p> Bu y&ouml;ntemlerle toplanan ki??isel verileriniz 6698 say??l?? Kanun&rsquo;un 5. ve 6. maddelerinde belirtilen ki??isel veri i??leme ??artlar?? ve ama&ccedil;lar?? kapsam??nda bu Bilgilendirme&rsquo;de belirtilen ama&ccedil;larla i??lenebilmekte ve aktar??labilmektedir.</p>
              <p> Ki??isel verileri toplaman??n hukuki dayanaklar??;</p>
              <ul>
                <li> Hesap S&ouml;zle??mesi, Kullan??m Ko??ullar?? ve bunlara dayal?? olarak s&ouml;zle??menin ifas??, hakk??n tesisi ve korunmas??</li>
                <li> Elektronik ticaret faaliyetlerini, maliyeye ve vergiye ait hususlar??, t&uuml;keticinin korunmas??n?? ve sair konular?? d&uuml;zenleyen yasal d&uuml;zenlemeler</li>
                <li> Sahibinden&rsquo;in Portal ile ilgili faaliyetlerinde &ouml;zellikle doland??r??c??l?????? engellemek ba??ta olmak &uuml;zere hizmetleri y&uuml;r&uuml;tebilmesi i&ccedil;in gerekli olan verileri toplamas??ndaki me??ru menfaatine dayanmaktad??r.</li>
              </ul>
              <p>
                <strong>e) Veri G&uuml;venli??ine ??li??kin &Ouml;nlemlerimiz ve Taahh&uuml;tlerimiz</strong>
              </p>
              <p> Sahibinden, ki??isel verileri g&uuml;venli bir ??ekilde korumay?? taahh&uuml;t eder. Ki??isel verilerin hukuka ayk??r?? olarak i??lenmesini ve eri??ilmesini engellemek ve ki??isel verilerin muhafazas??n?? sa??lamak amac??yla uygun g&uuml;venlik d&uuml;zeyini temin etmeye y&ouml;nelik teknik ve idari tedbirleri &ccedil;e??itli y&ouml;ntemler ve g&uuml;venlik teknolojileri kullanarak ger&ccedil;ekle??tirmektedir.</p>
              <p> Sahibinden, elde etti??i ki??isel verileri bu i??bu Bilgilendirme ve 6698 Say??l?? Ki??isel Verilerin Korunmas?? Kanunu h&uuml;k&uuml;mlerine ayk??r?? olarak ba??kas??na a&ccedil;??klamayacakt??r ve i??leme amac?? d??????nda kullanmayacakt??r. Sahibinden, i??bu Bilgilendirme uyar??nca d???? kaynak hizmet sa??lay??c??larla Kullan??c??lar&rsquo;a ait ki??isel verilerin payla????lmas?? durumunda, s&ouml;z konusu d???? kaynak tedarik&ccedil;ilerinin de i??bu madde alt??nda yer alan taahh&uuml;tlere riayet etmeleri i&ccedil;in gerekli uyar?? ve denetim faaliyetlerini icra edece??ini beyan eder.</p>
              <p> Portal &uuml;zerinden ba??ka uygulamalara link verilmesi halinde Sahibinden, link verilen uygulamalar??n gizlilik politikalar?? ve i&ccedil;eriklerine y&ouml;nelik herhangi bir sorumluluk ta????mamaktad??r.</p>
              <p> Kullan??c??, i??bu Bilgilendirmeye konu bilgilerinin tam, do??ru ve g&uuml;ncel oldu??unu, bu bilgilerde herhangi bir de??i??iklik olmas?? halinde bunlar?? derhal&nbsp; <a href="https://banaozel.sahibinden.com/">https://banaozel.sahibinden.com/</a>&nbsp;adresinden g&uuml;ncelleyece??ini taahh&uuml;t eder. Kullan??c??&rsquo;n??n g&uuml;ncel bilgileri sa??lamam???? olmas?? halinde Sahibinden&rsquo;in herhangi bir sorumlulu??u olmayacakt??r. </p>
              <p>
                <strong>f) Ki??isel Veri Sahibi&rsquo;nin 6698 say??l?? Kanun&rsquo;un 11. maddesinde Say??lan Haklar??</strong>
              </p>
              <p> Ki??isel veri sahipleri olarak, haklar??n??za ili??kin taleplerinizi a??a????da d&uuml;zenlenen y&ouml;ntemlerle Sahibinden&rsquo;e iletmeniz durumunda Sahibinden talebin niteli??ine g&ouml;re talebi en k??sa s&uuml;rede ve en ge&ccedil; otuz g&uuml;n i&ccedil;inde sonu&ccedil;land??racakt??r. Verilecek cevapta on sayfaya kadar &uuml;cret al??nmayacakt??r. On sayfan??n &uuml;zerindeki her sayfa i&ccedil;in 1 T&uuml;rk Liras?? i??lem &uuml;creti al??nacakt??r. Ba??vuruya cevab??n CD,&nbsp;flash&nbsp;bellek gibi bir kay??t ortam??nda verilmesi halinde Sahibinden taraf??ndan talep edilebilecek &uuml;cret kay??t ortam??n??n maliyetini ge&ccedil;meyecektir.</p>
              <p> Bu kapsamda ki??isel veri sahipleri;</p>
              <ul>
                <li> Ki??isel verilerinin i??lenip i??lenmedi??ini &ouml;??renme,</li>
                <li> Ki??isel verileri i??lenmi??se buna ili??kin bilgi talep etme,</li>
                <li> Ki??isel verilerin i??lenme amac??n?? ve bunlar??n amac??na uygun kullan??l??p kullan??lmad??????n?? &ouml;??renme,</li>
                <li> Yurt i&ccedil;inde veya yurt d??????nda ki??isel verilerin aktar??ld?????? &uuml;&ccedil;&uuml;nc&uuml; ki??ileri bilme,</li>
                <li> Ki??isel verilerin eksik veya yanl???? i??lenmi?? olmas?? h&acirc;linde bunlar??n d&uuml;zeltilmesini isteme ve bu kapsamda yap??lan i??lemin ki??isel verilerin aktar??ld?????? &uuml;&ccedil;&uuml;nc&uuml; ki??ilere bildirilmesini isteme,</li>
                <li> 6698 say??l?? Kanun ve ilgili di??er kanun h&uuml;k&uuml;mlerine uygun olarak i??lenmi?? olmas??na ra??men, i??lenmesini gerektiren sebeplerin ortadan kalkmas?? halinde ki??isel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yap??lan i??lemin ki??isel verilerin aktar??ld?????? &uuml;&ccedil;&uuml;nc&uuml; ki??ilere bildirilmesini isteme,</li>
                <li> ????lenen verilerin m&uuml;nhas??ran otomatik sistemler vas??tas??yla analiz edilmesi suretiyle ki??inin kendisi aleyhine bir sonucun ortaya &ccedil;??kmas??na itiraz etme,</li>
                <li> Ki??isel verilerin kanuna ayk??r?? olarak i??lenmesi sebebiyle zarara u??ramas?? halinde zarar??n giderilmesini talep etme haklar??na sahiptir.</li>
              </ul>
              <p> Yukar??da belirtilen haklar??n??z?? kullanmak ile ilgili talebinizi, Veri Sorumlusuna Ba??vuru Usul ve Esaslar?? Hakk??nda Tebli??&#39;in 5. maddesi uyar??nca, T&uuml;rk&ccedil;e olarak; veri sorumlusu s??fat??yla Sahibinden&#39;in De??irmen Yolu Cad. No:28 Asia OfisPark A Blok Kat:2 34752 Ata??ehir/??stanbul/T&uuml;rkiye adresine kimli??inizi tevsik edici bilgi ve belgeler ile yaz??l?? olarak, <a href="/cdn-cgi/l/email-protection#3b485a53525952555f5e557b53480b0915505e4b154f49">
                  <span class="__cf_email__" data-cfemail="1665777e7f747f78727378567e652624387d7366386264">[email&#160;protected]</span>
                </a>&nbsp;adresine kay??tl?? elektronik posta (KEP) ile, <a href="/cdn-cgi/l/email-protection#7b100d103b081a13121912151f1e1555181416">
                  <span class="__cf_email__" data-cfemail="1c776a775c6f7d74757e7572787972327f7371">[email&#160;protected]</span>
                </a> adresine g&uuml;venli elektronik imza, mobil imza ile veya ilgili ki??i taraf??ndan Sahibinden sisteminde kay??tl?? bulunan elektronik posta adresini kullanmak suretiyle iletebilirsiniz. </p>
              <p> Sahibinden&#39;in ki??isel verilerinizin hukuka ayk??r?? payla????m??n??n &ouml;nlenmesi amac??yla kimli??inizi do??rulama hakk?? sakl??d??r.</p>
              <p> Ba??vurunuzda;</p>
              <ol>
                <li> Ad??n??z??n,&nbsp;soyad??n??z??n&nbsp;ve ba??vuru yaz??l?? ise imzan??z??n,</li>
                <li> T&uuml;rkiye Cumhuriyeti vatanda??lar?? i&ccedil;in T.C. kimlik numaran??z??n, yabanc?? iseniz uyru??unuzun, pasaport numaran??z??n veya varsa kimlik numaran??z??n,</li>
                <li> Tebligata esas yerle??im yeri veya i?? yeri adresinizin,</li>
                <li> Varsa bildirime esas elektronik posta adresi, telefon ve faks numaran??z??n,</li>
                <li> Talep konunuzun,</li>
              </ol>
              <p> bulunmas??&nbsp;zorunlu olup varsa konuya ili??kin bilgi ve belgelerin de ba??vuruya eklenmesi gerekmektedir.</p>
            </span>
          </div>
          <div id="recantationFormExample" class="recantationFormExample">
            <div class="agreement">
              <h4>Cayma Hakk?? Formu ??rne??i</h4>
              <p style="margin:15px 0 15px 0">
                <strong>Kime:</strong> (SATICI'n??n ismi, unvan??, adresi varsa faks numaras?? ve e-posta adresi yer alacakt??r.)
              </p>
              <p style="margin:0 0 15px 0"> Bu form ile a??a????daki mallar??n sat??????na veya hizmetlerin sunulmas??na ili??kin s??zle??meden cayma hakk??m?? kulland??????m?? beyan ederim.</p>
              <p style="margin:0 0 15px 0">
                <strong>Sipari?? tarihi veya teslim tarihi:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>Cayma hakk??na konu mal veya hizmet:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>Cayma hakk??na konu mal veya hizmetin bedeli:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'n??n ad?? ve soyad??:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'n??n adresi:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'n??n imzas??: </strong>(Sadece ka????t ??zerinde g??nderilmesi halinde)
              </p>
              <p style="margin:0 0 15px 0">
                <strong> Tarih:</strong>
              </p>
            </div>
          </div>
          <div id="creditcardSavingAgreement" class="creditcardSavingAgreement">
            <h1>Kredi Kart?? Saklama Ko??ullar??</h1>
            <p> sahibinden.com taraf??ndan sunulan hizmetler ile sahibinden.com taraf??ndan sat??n al??nmas??na arac??l??k edilen &uuml;r&uuml;n ve hizmetlerin al??m??nda; kredi kart?? bilgilerinin kaydedilmesine ve kaydedilmi?? kredi kart?? bilgilerinin kullan??lmas??na ili??kin bilgiler ile ilgili beyan??m a??a????da yer almaktad??r:</p>
            <br />
            <p> ????bu Kullan??c?? Beyan?? ile; PAYTEN TEKNOLOJ?? A.??. (&ldquo;PAYTEN&rdquo;)(eski unvan?? ASSECO SEE TEKNOLOJ?? A.??. k??saca &ldquo;ASSECO&rdquo;)&rsquo;ye sundu??um kredi kart?? bilgilerinin PAYTEN taraf??ndan kaydedilmesine, saklanmas??na, SAH??B??NDEN B??LG?? TEKNOLOJ??LER?? PAZARLAMA ve T??CARET A.??. (&ldquo;SAH??B??NDEN&rdquo;) taraf??ndan verilecek tahsilat talimatlar??na uygun olarak PAYTEN arac??l??????yla SAH??B??NDEN ad??na &ouml;demenin ger&ccedil;ekle??tirilmesi amac??yla kredi kart?? bilgilerimin kullan??lmas??na ve tahsilata ili??kin i??lem sonu&ccedil;lar??n??n SAH??B??NDEN&rsquo;e iletilmesine muvafakat etti??imi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p>
              <strong>
                <u>sahibinden.com taraf??ndan sat??n al??nmas??na arac??l??k edilen &uuml;r&uuml;n ve hizmetlere ili??kin bilgi:</u>
              </strong>
              <br /> sahibinden.com taraf??ndan sat??n al??nmas??na arac??l??k edilen &uuml;r&uuml;n ve hizmetlere ili??kin Kullan??c??lar??n kredi kart?? bilgileri sadece PAYTEN&rsquo;de saklanmakta olup, kredi kart??ndan tahsilat i??lemleri SAH??B??NDEN&rsquo;in talimat?? ile ??YZ?? &Ouml;DEME VE ELEKTRON??K PARA H??ZMETLER?? A.??. (&ldquo;??YZ??CO&rdquo;) taraf??ndan ger&ccedil;ekle??tirilmekte, kredi kart?? bilgileri ??YZ??CO ve SAH??B??NDEN taraf??ndan saklanmamaktad??r.
            </p>
            <br />
            <p> ????bu Kullan??c?? Beyan?? ile; PAYTEN&rsquo;e sundu??um kredi kart?? bilgilerinin PAYTEN taraf??ndan kaydedilmesine, saklanmas??na, sahibinden.com taraf??ndan sat??n al??nmas??na arac??l??k edilen &uuml;r&uuml;n ve hizmetlerde; SAH??B??NDEN taraf??ndan verilecek tahsilat talimatlar??na uygun olarak ??YZ??CO taraf??ndan SAH??B??NDEN ad??na ger&ccedil;ekle??tirilen &ouml;deme i??lemleri i&ccedil;in kredi kart?? bilgilerimin PAYTEN taraf??ndan ??YZ??CO&rsquo;ya iletilmesine, tahsilata ili??kin i??lem sonu&ccedil;lar??n??n SAH??B??NDEN&rsquo;e g&ouml;nderilmesine muvafakat etti??imi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> ??YZ??CO taraf??ndan SAH??B??NDEN&rsquo;e verilen &ouml;deme hizmetinin herhangi bir sebeple sona ermesi halinde; kredi kart?? bilgilerimin PAYTEN taraf??ndan SAH??B??NDEN&rsquo;in &ouml;deme hizmeti alaca???? &ouml;deme kurulu??una g&ouml;nderilmesine muvafakat etti??imi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p>
              <strong>
                <u>sahibinden.com taraf??ndan sunulan hizmetlerin al??m??na ili??kin bilgi:</u>
              </strong>
              <br /> sahibinden.com taraf??ndan sunulan herhangi bir hizmeti sat??n almak isteyen Kullan??c??lar??n da kredi kart?? bilgileri PAYTEN taraf??ndan sakland?????? gibi, &ouml;deme i??lemlerinin ger&ccedil;ekle??tirilebilmesi i&ccedil;in kart bilgilerinin kullan??lmas?? ve i??lenmesi de sadece PAYTEN taraf??ndan ger&ccedil;ekle??tirilmektedir.
            </p>
            <br />
            <p> Kredi kart?? bilgileri kullan??m??n??n her bir i??lemde benim talebim ve onay??m &uuml;zerine ger&ccedil;ekle??mekte oldu??unu ve bu kapsamda SAH??B??NDEN&rsquo;in kart bilgilerimin saklanmas??na ili??kin herhangi bir sorumlulu??u bulunmad??????n??, kart bilgilerimin saklanmas?? ile ilgili SAH??B??NDEN&rsquo;e kar???? yasal yollara ba??vurma hakk??mdan gayri kabili r&uuml;cu olarak feragat etti??imi ayr??ca kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> PAYTEN taraf??ndan SAH??B??NDEN&rsquo;e verilen hizmetin herhangi bir sebeple sona ermesi halinde; kredi kart?? bilgilerimin SAH??B??NDEN&rsquo;e veya SAH??B??NDEN taraf??ndan bildirilen firmaya PAYTEN taraf??ndan devredilmesine gayri kabili r&uuml;cu olarak muvafakat etti??imi, bu konuda PAYTEN&rsquo;i yetkilendirdi??imi ve talepte bulundu??umu, devir tarihi itibariyle kredi kart?? bilgilerimin kaydedilmesi, saklanmas??, &ouml;demelerde kullan??lmas??na ili??kin sorumlulu??un devredilen firmaya ait olaca????n?? kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> Kredi kart?? bilgilerimin ve kredi kart?? i??lem sonucu bilgilerimin al??nmas??n??n, PAYTEN&rsquo;e ve ??YZ??CO&rsquo;ya veya ileride olabilecek di??er bir &ouml;deme kurulu??una aktar??lmas??n??n ve i??lenmesinin kredi kart?? ile &ouml;deme yap??lan yukar??da say??lan sahibinden.com taraf??ndan sunulan hizmetler ile sahibinden.com taraf??ndan sat??n al??nmas??na arac??l??k edilen &uuml;r&uuml;n ve hizmetler i??lemlerinin yap??labilmesi i&ccedil;in gerekli oldu??unu, bu bak??mdan bu i??lemlerin yap??labilmesi i&ccedil;in bu verilerin taraf??mca verilmesinin ifa ??art?? te??kil etti??ini, SAH??B??NDEN&rsquo;in ve PAYTEN ile ??YZ??CO&rsquo;nun veya ileride olabilecek di??er bir &ouml;deme kurulu??unun bu bilgileri Hesap S&ouml;zle??mesi, Kullan??m Ko??ullar??, Gizlilik Politikas?? kapsam??nda kulland??????n?? bildi??imi, ki??isel verilerim ile ilgili olarak&nbsp; <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">Ki??isel Verilerin Korunmas??</a>&nbsp;sayfas??ndaki Ki??isel Verilerin Korunmas?? Hakk??nda Bilgilendirme metnini okudu??umu ve haklar??m?? bildi??imi; kendi kredi kart?? bilgilerim d??????nda &uuml;&ccedil;&uuml;nc&uuml; ki??ilerin kredi kart?? bilgilerini vermem veya SAH??B??NDEN portali &uuml;zerinden bu verileri kullanmam durumunda bu verilerin korunmas??ndan, i??lenmesinden, aktar??lmas??ndan ve KVKK kapsam??ndaki t&uuml;m y&uuml;k&uuml;ml&uuml;l&uuml;klerden ve hukuka ayk??r?? kullan??mdan dolay?? t&uuml;m cezai ve hukuki sorumlulu??un taraf??ma ait oldu??unu, SAH??B??NDEN&rsquo;in ve &ouml;deme kurulu??lar??n??n kendi sistemlerinde yukar??da say??lan i??lemlerin ger&ccedil;ekle??tirilmesi i&ccedil;in zorunlu olarak toplad?????? ki??isel veriler d??????ndaki hi&ccedil;bir ki??isel veri i&ccedil;in KVKK kapsam??nda herhangi bir y&uuml;k&uuml;ml&uuml;l&uuml;klerinin ve sorumluluklar??n??n olmad??????n?? kabul, beyan ve taahh&uuml;t ederim. </p>
            <br />
            <p> Ki??isel verilerin korunmas?? y&uuml;k&uuml;ml&uuml;l&uuml;??&uuml;ne ayk??r?? hareket etmem veya ki??isel verilerin i??lenmesi, aktar??lmas?? veya sair surette bir i??leme taraf??mca konu edilmesi ve bu kullan??m??n bir ihlal meydana getirmesi durumunda, Ki??isel Verileri Koruma Kurulu&rsquo;nun veya idari makamlar??n veya mahkemelerin ki??isel verilerle ilgili olarak verdikleri kararlar neticesinde &ldquo;SAH??B??NDEN&rdquo;in bir zarara u??ramas?? durumunda bu zarar?? ilk talepte nakden ve defaten tazmin edece??imi kabul, beyan ve taahh&uuml;t ederim.</p>
          </div>
          <div id="marketPlaceProviderAgreement" class="marketPlaceProviderAgreement">
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">27 Haziran 2015 tarihinde y&uuml;r&uuml;rl&uuml;??e giren &Ouml;deme Hizmetleri Y&ouml;netmeli??i&rsquo;ne g&ouml;re; &ouml;deme i??lemleri y&ouml;netiminin Bankac??l??k D&uuml;zenleme ve Denetleme Kurumu (BDDK) taraf??ndan yetkilendirilmi?? bir &ouml;deme kurulu??u taraf??ndan yap??lmas?? zorunludur. &Ouml;denen &uuml;r&uuml;n bedeli, yetkilendirilmi?? bir &ouml;deme kurulu??u taraf??ndan g&uuml;vence alt??na al??nm???? olmaktad??r.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Bu ama&ccedil;la, Sahibinden.com &uuml;zerinden &uuml;r&uuml;n veya hizmet sat??n alabilmeniz i&ccedil;in, &ouml;deme i??lemini ger&ccedil;ekle??tirecek olan iyzico &Ouml;deme ve Elektronik Para Hizmetleri A.??.&#39;ye (&ldquo;iyzico&rdquo;) ait a??a????daki &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zle??mesi&rsquo;ni onaylaman??z, &ouml;deme i??lemlerinizin iyzico &uuml;zerinden yap??laca????n?? kabul etmeniz gerekmektedir.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p align="center" style="margin-bottom: 0.21cm; line-height: 100%">
              <br /> &nbsp;
            </p>
            <p align="center" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">iYZICO &Ouml;DEME H??ZMET?? &Ccedil;ER&Ccedil;EVE S&Ouml;ZLE??MES??</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">1. TARAFLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">????bu &ldquo;</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">iyzico &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zle??mesi&rdquo; (&ldquo;S&ouml;zle??me&rdquo;)</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">, a??a????da bilgileri yer alan &ldquo;iyzico&rdquo; ile i??bu S&ouml;zle??me&rsquo;deki hizmetlerden faydalanmak isteyen Kullan??c?? aras??nda akdedilmi??tir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Unvan</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">: iyzi &Ouml;deme ve Elektronik Para Hizmetleri A.??. (&ldquo;iyzico&rdquo;)</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Adres</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">: Burhaniye Mah. Atilla Sok. No:7 &Uuml;sk&uuml;dar ??stanbul</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Vergi Daire ve No</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">: &Uuml;sk&uuml;dar Vergi Dairesi 483 034 3157</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">iyzico ve Kullan??c?? bundan b&ouml;yle birlikte &ldquo;Taraflar&rdquo;, ayr?? ayr?? &ldquo;Taraf&rdquo; olarak an??lacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">2. TANIMLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">??nternet Sitesi</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">: Sat??c?? taraf??ndan sat????a sunulan &uuml;r&uuml;n ve hizmetleri te??hir etmek i&ccedil;in, Al??c?? taraf??ndan ise &uuml;r&uuml;n veya hizmetlerin sat??n al??nmas?? i&ccedil;in kullan??lan </font>
                </font>
              </font>
              <font color="#0000ff">
                <u>
                  <a href="http://www.sahibinden.com/">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">www.sahibinden.com</font>
                    </font>
                  </a>
                </u>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt"> alan adl?? internet sitesi ve/veya mobil uygulamalar</font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Servis: ????bu S&ouml;zle??me&rsquo;de belirlenen h&uuml;k&uuml;m ve ko??ullar &ccedil;er&ccedil;evesinde iyzico taraf??ndan Al??c?? ve Sat??c??&rsquo;ya sunulacak olan hizmet</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Al??c??</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: ??nternet Sitesi &uuml;zerinden i??bu S&ouml;zle??me kapsam??nda sunulan servisler arac??l?????? ile &uuml;r&uuml;n veya hizmet al??m?? yapan ve bu ama&ccedil;la Servis&rsquo;ten faydalanan ger&ccedil;ek veya t&uuml;zel ki??i,</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Sat??c??: &Ouml;deme ????lemi&rsquo;ne konu fonun ula??mas?? istenilen, ??nternet Sitesi &uuml;zerinden sat???? ger&ccedil;ekle??tiren ger&ccedil;ek veya t&uuml;zel ki??i</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Kullan??c??: ????bu S&ouml;zle??me&rsquo;deki hizmetlerden Al??c?? veya Sat??c?? s??fat??yla faydalanan ger&ccedil;ek veya t&uuml;zel ki??i (Al??c?? ve Sat??c?? birlikte &ldquo;Kullan??c??&rdquo; olarak an??lacakt??r)</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">S&ouml;zle??me</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c?? ile akdedilen i??bu &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zle??mesi</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Pazaryeri veya </font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">SAH??B??NDEN: ??nternet Sitesi&rsquo;ni i??letmekte olan Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.??.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">iyzico</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: ??leti??im bilgileri i??bu S&ouml;zle??me&rsquo;nin 1. maddesinde belirtilen ve i??bu S&ouml;zle??me&rsquo;de &ouml;deme hizmeti sa??lay??c?? taraf olan iyzi &Ouml;deme ve Elektronik Para Hizmetleri A.??.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Platform: iyzico taraf??ndan geli??tirilen sanal &ouml;deme ve do??rulama a?? ge&ccedil;idi olan bir yaz??l??mdan ibaret sanal platform</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">&Ouml;deme Arac??</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c?? taraf??ndan &ouml;deme emrini vermek i&ccedil;in kullan??lan kart, cep telefonu, ??ifre ve benzeri ki??iye &ouml;zel ara&ccedil;</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">&Ouml;deme Hesab??</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c?? ad??na iyzico nezdinde a&ccedil;??lan ve &ouml;deme i??leminin y&uuml;r&uuml;t&uuml;lmesinde kullan??lan hesap</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">&Ouml;deme ????lemi</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: ??nternet Sitesi&rsquo;nde sat????a sunulan &uuml;r&uuml;nler veya hizmetler i&ccedil;in &ouml;deme yap??lmas?? amac??yla, Platform arac??l?????? ile y&uuml;r&uuml;t&uuml;len i??lemler</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Sistem Orta????: Platform arac??l?????? ile &ouml;demelerin i??lenmesi konusunda i??birli??inde bulunulan banka veya finans kurulu??u</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Onay Tarihi</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c?? taraf??ndan ??nternet Sitesi&rsquo;nden sat??n al??nan &uuml;r&uuml;n veya hizmetin teslim edildi??ine ili??kin onay??n verildi??i veya s&ouml;z konusu onay??n verilmesi i&ccedil;in Pazaryeri taraf??ndan belirlenen s&uuml;renin doldu??u tarih</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Hatal??/Yetkisiz ????lem</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Hatal?? bir ??ekilde veya Kullan??c??&rsquo;n??n talimat?? d??????nda ger&ccedil;ekle??tirilen &Ouml;deme ????lemi</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">??&uuml;pheli ????lem</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: S&ouml;zle??me ile belirlenen durumlar da dahil olmak &uuml;zere, Hatal??/Yetkisiz ????lem olarak de??erlendirilme ihtimali bulunan &Ouml;deme ????lemi</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Hassas &Ouml;deme Verisi</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c?? taraf??ndan &ouml;deme emrinin verilmesinde veya Kullan??c??&rsquo;n??n kimli??inin do??rulanmas??nda kullan??lan, ele ge&ccedil;irilmesi veya de??i??tirilmesi halinde doland??r??c??l??k ya da kullan??c??lar ad??na sahte i??lem yap??lmas??na imk&acirc;n verebilecek ??ifre, g&uuml;venlik sorusu, sertifika, ??ifreleme anahtar?? ile PIN, kart numaras??, son kullanma tarihi, CVV2, CVC2 kodu gibi veriler</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Yetkili Personel</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullan??c??&rsquo;ya Platform kullan??m?? hakk??nda destek vermek ve ileti??ime ge&ccedil;mek &uuml;zere iyzico taraf??ndan yetkilendirilmi?? olan personel</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <br /> &nbsp;
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">3. S&Ouml;ZLE??MEN??N KONUSU</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Pazaryeri taraf??ndan i??letilmekte ??nternet Sitesi&rsquo;nde &ouml;deme hizmetleri iyzico taraf??ndan sunulmaktad??r. iyzico, bu kapsamda hem Sat??c??&rsquo;ya, hem de Al??c??&rsquo;ya 6493 say??l?? &Ouml;deme ve Menkul K??ymet Mutabakat Sistemleri, &Ouml;deme Hizmetleri ve Elektronik Para Kurulu??lar?? Hakk??nda Kanun (&ldquo;Kanun&rdquo;) uyar??nca &ouml;deme hizmeti verecektir. Bu kapsamda; Al??c??&rsquo;dan tahsil edilen ve ??nternet Sitesi &uuml;zerinden temin edilen &uuml;r&uuml;n veya hizmetin Al??c??&rsquo;ya tam ve gere??i gibi teslimine ili??kin onay??n al??nmas??na kadar Al??c??&rsquo;n??n &Ouml;deme Hesab??&rsquo;nda tutulan &uuml;r&uuml;n/hizmet bedeli; &uuml;r&uuml;n/hizmet sat??????na ili??kin h&uuml;k&uuml;mlere uygun olarak Al??c??&rsquo;n??n onay?? &uuml;zerine veya sat??n al??nan hizmetin kullan??m?? &uuml;zerine iyzico taraf??ndan Sat??c??&rsquo;n??n &Ouml;deme Hesab??na aktar??lacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">????bu S&ouml;zle??me; yukar??da belirtilen kapsamda Al??c??&rsquo;ya ??nternet Sitesi &uuml;zerinden sat??n ald?????? &uuml;r&uuml;n ve hizmetin &uuml;cretinin Sat??c??&rsquo;ya aktar??m?? i&ccedil;in sunulan Servis&rsquo;e ili??kin esaslar ile Taraflar&rsquo;??n bu kapsamdaki hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenlemektedir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">4. GENEL ??ARTLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">4.1. KAYIT</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">S&ouml;zle??me&rsquo;nin Kullan??c?? taraf??ndan ??nternet Sitesi &uuml;zerinden onayland?????? tarih itibariyle i??bu S&ouml;zle??me y&uuml;r&uuml;rl&uuml;k ve ge&ccedil;erlilik kazanacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">4.2. KULLANIM KO??ULLARI</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullan??c?? Servis&rsquo;i ancak S&ouml;zle??me y&uuml;r&uuml;rl&uuml;??e girdikten sonra kullanabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Kullan??c??&rsquo;y?? telefonla arama ve Pazaryeri taraf??ndan iletilen bilgileri do??rulama, ek bilgi ve belge talep etme, herhangi bir sebep bildirmeksizin Kullan??c??&rsquo;y?? kaydetmeme haklar??n?? sakl?? tutmaktad??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">5. TARAFLARIN HAK VE Y&Uuml;K&Uuml;ML&Uuml;L&Uuml;KLER?? </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) ????bu S&ouml;zle??me uyar??nca iyzico, Kullan??c?? taraf??ndan ??nternet Sitesi&rsquo;nden sipari?? edilen &uuml;r&uuml;n ve hizmetlere ili??kin &ouml;demelerin i??leme al??nmas?? ve Sat??c??&rsquo;ya &ouml;demelerin yap??lmas?? amac??yla Servis sunmay?? kabul ve taahh&uuml;t eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, yetkisiz ki??iler taraf??ndan bilgilere eri??ilmesinin engellenmesi amac??yla Platform&rsquo;u gerekli g&uuml;venlik seviyesinde tutmak i&ccedil;in en iyi &ccedil;abay?? g&ouml;sterecektir. Kullan??c?? bu anlamda iyzico&rsquo;ya azami deste??i sa??layacak ve iyzico&rsquo;nun talimatlar??na uygun davranacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, &ouml;zellikle Sistem Ortaklar?? taraf??ndan ger&ccedil;ekle??tirilen g&uuml;venlik standard?? de??i??ikliklerinin sonucunda g&uuml;venlik standard??n?? de??i??tirme hakk??n?? sakl?? tutar.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullan??c??, yapt?????? &ouml;demelere ait provizyonlar??n Sistem Ortaklar?? taraf??ndan belirtilen ko??ullar kapsam??nda ger&ccedil;ekle??tirildi??ini bildi??ini, Sistem Ortaklar??&rsquo;n??n sitelerine y&ouml;nelik ihl&acirc;ller veya sald??r??larda (hacking, phishing) iyzico&rsquo;nun herhangi bir sorumlulu??u bulunmad??????n?? kabul eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kullan??c??, Platform&rsquo;a eri??im imkan?? tan??yan ??ifreyi ve/veya &Ouml;deme Arac??&rsquo;na ili??kin temin etti??i bilgileri (varsa) gizli tutmakla, yetkisiz ??ah??slara if??a etmemekle ve bu ??ifrelerin tahsis amac?? haricinde ba??kaca ama&ccedil;lar i&ccedil;in kullan??lmas??n?? &ouml;nlemekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Kullan??c?? ayr??ca bahsi ge&ccedil;en bilgiler veya &Ouml;deme Arac??&rsquo;na ait bilgilerin kaybolmas??, &ccedil;al??nmas?? veya yetkisiz bir ??ekilde kullan??m??n??n s&ouml;z konusu olmas?? halinde; durumu derhal iyzico&rsquo;ya i??bu S&ouml;zle??me&rsquo;de belirtilen y&ouml;ntemlerden biriyle bildirmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. iyzico, Kullan??c?? taraf??ndan s&ouml;z konusu bilgilerin kaybedilmesi veya if??a edilmesi durumunda herhangi bir sorumlulu??a sahip olmad?????? gibi, kusurun iyzico&rsquo;ya ait oldu??u kan??tlanmad?????? m&uuml;ddet&ccedil;e &uuml;&ccedil;&uuml;nc&uuml; ??ah??slar taraf??ndan Kullan??c??&rsquo;ya verilecek zararlardan da sorumlu de??ildir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) Kullan??c??, Platform&rsquo;un veya bir y&ouml;netim hesab??n??n kan??tlanabilir bir ??ekilde yetkisiz olarak k&ouml;t&uuml; ama&ccedil;l?? kullan??m??ndan veya y&ouml;netim hesab??na yetkisiz eri??imden kendi kusuru &ouml;l&ccedil;&uuml;s&uuml;nde sorumlu olacakt??r.</font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">g) Kullan??c??, Platform&rsquo;un i??levlerine m&uuml;dahale etmeyece??ini, Platform&rsquo;u kurulum ve kullan??m talimatlar??na uygun olarak kullanaca????n??, iyzico&rsquo;nun talimatlar??na uygun davranaca????n?? kabul ve beyan eder.</font>
                    </font>
                  </font>
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt"></font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">h) Kullan??c??, iyzico taraf??ndan sunulan Platform &ouml;zelliklerine ili??kin a&ccedil;??klama ile &ldquo;iyzico Platform Arac??l??????yla &Ouml;deme Yap??lmas??na ??li??kin Kurallar&rdquo;a ve bunlarla ilgili t&uuml;m g&uuml;ncellemelere uyacak, uymamas?? nedeniyle meydana gelecek t&uuml;m taleplerden sorumlu olacakt??r.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff"> &nbsp;</p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">??) </font>
                    </font>
                  </font>
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Sat??c??, ??nternet Sitesi&rsquo;nde sat?????? yasal olmayan &uuml;r&uuml;nler ve hizmetler sunmayacakt??r. iyzico taraf??ndan, ??nternet Sitesi&rsquo;nde sat?????? hukuka ayk??r?? olan ya da iyzico ilkelerine ters d&uuml;??en &uuml;r&uuml;n veya hizmetlerin sunuldu??unun tespiti h&acirc;linde, Sat??c?? taraf??ndan Platform&rsquo;un kullan??lmas??n?? tamamen veya k??smen durdurma yetkisi vard??r. Bu durumda &Ouml;deme ????lemi&rsquo;nin reddedilmesi veya Platform&rsquo;a eri??imin tamamen ask??ya al??nmas?? S&ouml;zle??me&rsquo;nin iyzico taraf??ndan ihl&acirc;li olarak de??erlendirilemez.</font>
                    </font>
                  </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <br /> &nbsp;
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6) GENEL ESASLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6.1. iyzico&rsquo;nun Platform&rsquo;a Eri??imi Engelleme Hakk??</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, &ouml;zellikle a??a????daki durumlar??n meydana gelmesi halinde, Platform&rsquo;a eri??imi engelleme hakk??na sahip olacakt??r. S&ouml;z konusu durumun ortadan kald??r??lmas??n?? m&uuml;teakip eri??im tekrar sa??lanacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Platform&rsquo;a y&ouml;nelik bilgisayar vir&uuml;s&uuml; tehdidi varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Kullan??c?? i??bu S&ouml;zle??me kapsam??nda kendisinden talep edilen bilgileri sa??lam??yorsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico&rsquo;nun i??bu S&ouml;zle??me&rsquo;ye ili??kin hizmetleri &ouml;nceden Kullan??c??&rsquo;ya haber vermeksizin denetleme yetkisi mevcuttur.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6.2. Platform Bak??m??, Kesintiler ve Ar??za &Ccedil;&ouml;z&uuml;mleri</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, Platform&rsquo;un d&uuml;zg&uuml;n olarak &ccedil;al????mas?? i&ccedil;in gerekli olan s&uuml;rekli bak??m??, donan??m?? ve teknik deste??i sa??layacakt??r. Bununla ba??lant??l?? olarak iyzico&rsquo;nun, i??bu S&ouml;zle??me&rsquo;de a&ccedil;??k&ccedil;a belirtilen durumlarda ilgili sunucular??n &ccedil;al????mas??n?? ge&ccedil;ici olarak durdurma veya s??n??rland??rma hakk?? sakl??d??r. Bu durumda, Kullan??c??&rsquo;n??n herhangi bir tazminat hakk?? mevcut de??ildir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Platform&rsquo;un kesintisiz &ccedil;al????aca????n?? garanti etmemektedir. iyzico, &ouml;demeleri zaman??nda i??leyecek olup, Sistem Ortaklar??&rsquo;ndan kaynaklanan sorunlar nedeniyle, bu i??lemlerin zaman??nda ger&ccedil;ekle??memesinden sorumlu olmamakla birlikte, s&ouml;z konusu sorunlar??n en k??sa s&uuml;re i&ccedil;erisinde giderilmesi i&ccedil;in gayret edecek ve Sistem Ortaklar?? ile ileti??im halinde olacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6.3. Ki??isel Bilgilerin Korunmas??</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullan??c??, kendisine ait bilgilerin sadece Servis&rsquo;in verilmesini temin amac??yla, iyzico Gizlilik&amp;Ki??isel Veri Politikas??&rsquo;n??n </font>
                </font>
              </font>
              <font color="#0000ff">
                <u>
                  <a href="https://www.iyzico.com/gizlilik-politikasi/">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">https://www.iyzico.com/gizlilik-politikasi/</font>
                    </font>
                  </a>
                </u>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt"> adresinde yay??nlanan en g&uuml;ncel halinde belirtildi??i ??ekilde iyzico taraf??ndan i??lenmesine, saklanmas??na ve benzeri i??lemlerin (sisteme tan??mlamak ve kay??t etmek) yap??lmas??na ve gerekti??inde &uuml;&ccedil;&uuml;nc&uuml; ki??iler ile payla????lmas??na ili??kin bilgilendirildi??ini kabul etmektedir. iyzico ki??isel verilerin &ldquo;gizli bilgi&rdquo; oldu??unun, kendisine bu ama&ccedil;la verilen ki??isel bilgilerin gizlili??ini temin i&ccedil;in gerekli &ouml;zeni g&ouml;stermekle y&uuml;k&uuml;ml&uuml; oldu??unun ve 6698 say??l?? Ki??isel Verilen Korunmas?? Kanunu&rsquo;na ve di??er g&uuml;ncel mevzuatlara uygun davranmas?? gerekti??inin bilincindedir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Kullan??c??, iyzico&rsquo;nun bir ??ik&acirc;yeti i??leme ald?????? durumlarda, Servis kapsam??nda ger&ccedil;ekle??tirdi??i i??lemlere ili??kin bilgiler ile kendisine ait sair bilgilerin, ??ik&acirc;yetin &ccedil;&ouml;z&uuml;m&uuml; i&ccedil;in gerekli oldu??u &ouml;l&ccedil;&uuml;de Sat??c?? ve/veya Pazaryeri&rsquo;ne iletilebilece??ini kabul ve beyan eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7. ????K&Acirc;YET PROSED&Uuml;R&Uuml;, HATA VE ZARAR SORUMLULUKLARI</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.1. ????K&Acirc;YET PROSED&Uuml;R&Uuml;</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullan??c??, iyzico taraf??ndan sa??lanan hizmetlere ili??kin ??ik&acirc;yetleri </font>
                </font>
              </font>
              <font color="#0000ff">
                <u>
                  <a>
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">
                        <span class="__cf_email__" data-cfemail="3a4953515b435f4e7a53434053595514595557">[email&#160;protected]</span>
                      </font>
                    </font>
                  </a>
                </u>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt"> e-posta adresine e-posta g&ouml;ndermek suretiyle iletecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Kullan??c?? taraf??ndan ayr??ca Yetkili Personel&rsquo;e ileti??im telefon numaras??ndan ula??arak da ??ik&acirc;yet prosed&uuml;r&uuml; ba??lat??labilecektir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, ??ik&acirc;yet konusu sorunun giderilmesi i&ccedil;in elinden gelen en iyi &ccedil;abay?? sarf edecektir. iyzico, ??ik&acirc;yetlerdeki eksiklikler (bildirim eksiklikleri) ile ba??lant??l?? olarak meydana gelen gecikmelerden sorumlu olmayacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullan??c?? taraf??ndan y&ouml;neltilecek ??ik&acirc;yetler en az ??u ayr??nt??lar?? i&ccedil;ereceklerdir: ??ik&acirc;yet nedeni, i??lemde dahil edilen taraflar??n listesi, varsa i??lem kodu ve sorunun ayr??nt??l?? bir listesi ve olas?? hata mesajlar??n??n i&ccedil;eri??i.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kullan??c?? ile herhangi bir Kullan??c?? veya Sat??c?? aras??nda meydana gelen uyu??mazl??klar ile ilgili Kullan??c?? ile i??lemin taraf?? olan Kullan??c?? veya Sat??c?? aras??nda &ccedil;&ouml;z&uuml;me ula??t??r??lacak olup, iyzico bu i??lemlerden veya uyu??mazl??klardan sorumlu olmayacakt??r. iyzico&rsquo;nun bu madde kapsam??nda herhangi bir nedenle (kendi kusurundan kaynakl?? haller d??????nda) bir bedel &ouml;demek durumunda kalmas?? halinde, Kullan??c?? iyzico taraf??ndan &ouml;denen bedeli derhal tazmin edecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) iyzico gelen ??ik&acirc;yetleri kendisine ula??ma tarihinden itibaren en ge&ccedil; 20 (yirmi) g&uuml;n i&ccedil;erisinde yan??tlayacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.2. HATA VE ZARARDAN DO??AN SORUMLULUK</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) ??nternet Sitesi&rsquo;nde sunulan &uuml;r&uuml;nlerin veya hizmetlerin Kullan??c??&rsquo;ya tedarik edilmesine veya iade edilmesine ili??kin Al??c?? ve Sat??c?? aras??ndaki s&ouml;zle??menin hukuka uygun bir ??ekilde akdedilmi?? olmas??ndan iyzico sorumlu olmayacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, sadece S&ouml;zle??me&rsquo;den kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;klerini ihl&acirc;l etmesi h&acirc;linde meydana gelen do??rudan zararlardan sorumlu olup, kendi kusurunun bulunmad?????? &uuml;&ccedil;&uuml;nc&uuml; ??ah??s veya Sistem Ortaklar?? taraf??ndan neden olunan zararlardan sorumlu olmayacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, &ouml;deme emrinin verilmesinin ard??ndan Kullan??c?? taraf??ndan bilgilerin hatal?? veya eksik girilmesi nedeniyle i??lemlerin tamamlanmamas?? veya gecikmesinden veya kendisi taraf??ndan &ouml;ng&ouml;r&uuml;lemeyen veya engellenemeyen durumlar neticesinde meydana gelen gecikmelerden &ouml;t&uuml;r&uuml; &Ouml;deme ????lemi&rsquo;nin ger&ccedil;ekle??tirilememesinden veya &Ouml;deme ????lemi&rsquo;nde kendi kusuru d??????nda hata vermesinden veya bunlar??n sonucunda meydana gelen zararlardan sorumlu olmayacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullan??c??&rsquo;n??n i??bu S&ouml;zle??me kapsam??ndaki herhangi bir taahh&uuml;t veya y&uuml;k&uuml;ml&uuml;l&uuml;??&uuml;ne ayk??r?? ayk??r?? davranmas??, yasalar?? veya herhangi bir &uuml;&ccedil;&uuml;nc&uuml; ki??inin haklar??n?? ihlal etmesi nedeniyle iyzico&rsquo;nun, g&ouml;revlilerinin, y&ouml;neticilerinin ve &ccedil;al????anlar??n??n bir zarara u??ramas?? yahut iyzico&rsquo;nun yasal, idari veya cezai bir yapt??r??ma tabi tutulmas?? halinde, &ouml;dedi??i tutarlar (avukatl??k &uuml;cretleri de dahil olarak) ferileri ile birlikte Kullan??c??&rsquo;ya r&uuml;cu edilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.3. ??&Uuml;PHEL??/YETK??LEND??R??LMEM????/HATALI ????LEMLERDE SORUMLULUK</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Al??c?? taraf??ndan &ouml;demenin iyzico&rsquo;ya iletilmesi halinde iyzico i??bu S&ouml;zle??me&rsquo;de belirtilen ko??ullarda ve Pazaryeri taraf??ndan belirtilen kurallar dahilinde ilgili onay s&uuml;re&ccedil;lerinin tamamlanmas??n?? m&uuml;teakip &ouml;demeyi Sat??c??&rsquo;ya aktaracakt??r. Kullan??c??&rsquo;dan kaynaklanan sebeplerle &ouml;demenin iyzico&rsquo;ya aktar??lmamas?? halinde, iyzico&rsquo;nun Sat??c??&rsquo;ya &ouml;deme yapma y&uuml;k&uuml;ml&uuml;l&uuml;??&uuml; s&ouml;z konusu olmayacakt??r. Onay s&uuml;recinin herhangi bir nedenle gere??i gibi tamamlanmamas?? halinde ise; iyzico ilgili tutar?? Al??c??&rsquo;ya iade edebilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Al??c??, Onay Tarihi&rsquo;nde ilgili &Ouml;deme ????lemi&rsquo;ne ili??kin &ouml;deme emrini vermi?? kabul edilir. Kullan??c??, teslimata (ge&ccedil; veya eksik teslim, ay??pl?? &uuml;r&uuml;n vb.) ili??kin herhangi bir bildirim yapmamas?? veya teslimat??n gere??i gibi ger&ccedil;ekle??ti??ine ili??kin bildirim yapm???? olmas?? halinde tutar??n Sat??c??&rsquo;ya aktar??lm???? olmas?? ile ilgili iyzico&rsquo;dan herhangi bir talepte bulunamaz.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font face="Arial, serif">
                <font size="2" style="font-size: 10pt">c) </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Herhangi bir i??leme ili??kin olarak iyzico&rsquo;ya Hatal??/Yetkisiz ????lem bildiriminde bulunuldu??u takdirde, derhal ve her hal&uuml;karda &Ouml;deme ????lemi&rsquo;nin ger&ccedil;ekle??tirilmesini takip eden azami 13 (on&uuml;&ccedil;) ay i&ccedil;erisinde Kullan??c?? taraf??ndan VISA, Mastercard kurallar?? gere??ince d&uuml;zeltme veya harcama itiraz?? talebinde bulunulabilecektir. Bu durumda s&ouml;z konusu bildirimin do??ru oldu??unun kan??tlanmas?? veya Sistem Orta????&rsquo;n??n bildirimi halinde ilgili i??lem bedeli Sat??c??&rsquo;ya aktar??lmayarak iyzico taraf??ndan do??rudan Kullan??c??&rsquo;ya iade edilebilecek, bildirim an??nda i??lem bedeli Sat??c??&rsquo;ya aktar??lm???? ise iyzico ilgili tutarlar?? Sat??c??&rsquo;dan iade talep ederek (Sat??c?? iadeyi 1 g&uuml;n i&ccedil;erisinde ger&ccedil;ekle??tirecek olup iyzico&rsquo;nun ilgili bedeli Sat??c??&rsquo;ya yap??lacak &ouml;demelerden mahsup hakk?? sakl??d??r) Kullan??c??&rsquo;ya aktarabilecekt??r. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) iyzico, &ouml;zellikle a??a????daki durumlar olmak &uuml;zere ??&uuml;pheli ????lemler&rsquo;de ve Al??c?? veya Sistem Orta???? taraf??ndan kendisine bildirilmesi h&acirc;linde, i??lem tutarlar??n?? Sistem Orta???? veya Al??c??&rsquo;n??n &Ouml;deme ????lemi&rsquo;ne ili??kin onay?? verme tarihine kadar saklama ve Sat??c??&rsquo;ya &ouml;deme yapmama hakk??na sahiptir. ??&uuml;pheli durumun belgelendirilmek kayd??yla kesinle??mesi halinde &ouml;demeler kesin olarak i??lenmeyecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme ????lemi&rsquo;nin yasal h&uuml;k&uuml;mlere uygun olmad??????na y&ouml;nelik bir ??&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme ????lemi&rsquo;nin, &Ouml;deme ????lemi&rsquo;nde kullan??lan kredi kart??n??n hamilinin bilgisi d??????nda yap??ld??????na y&ouml;nelik bir ??&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme ????lemi&rsquo;nin, &Ouml;deme ????lemi&rsquo;nde kullan??lan banka hesab?? sahibinin bilgisi d??????nda yap??ld??????na y&ouml;nelik bir ??&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme ????lemi&rsquo;nin ger&ccedil;ek bir &Ouml;deme ????lemi olmad??????na (testler hari&ccedil;) y&ouml;nelik bir ??&uuml;phe varsa.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kay??p veya &ccedil;al??nt?? bir &Ouml;deme Arac??&rsquo;n??n kullan??lmas?? ya da ki??isel g&uuml;venlik bilgilerinin gere??i gibi muhafaza edilmemesi nedeniyle &ouml;deme arac??n??n ba??kalar?? taraf??ndan kullan??lmas?? durumunda, Kullan??c??, yetkilendirmedi??i &ouml;deme i??lemlerinden do??an zarar??n &Ouml;deme Hizmetleri ve Elektronik Para ??hrac?? ile &Ouml;deme Kurulu??lar?? ve Elektronik Para Kurulu??lar?? Hakk??nda Y&ouml;netmelik (&ldquo;Y&ouml;netmelik&rdquo;) Madde 45/4&rsquo;te belirtilen miktar kadar olan b&ouml;l&uuml;m&uuml;nden sorumludur. Kullan??c??, Y&ouml;netmelik&rsquo;in 44. maddesinin d&ouml;rd&uuml;nc&uuml; f??kras?? uyar??nca yapt?????? bildirimden sonra ger&ccedil;ekle??en yetkilendirmedi??i &ouml;deme i??lemlerinden sorumlu de??ildir. &Ouml;deme Arac??&rsquo;n?? hileli kullanmas?? veya bildirim y&uuml;k&uuml;ml&uuml;l&uuml;klerini kasten veya a????r ihmalle yerine getirmemesi durumunda ise Kullan??c??, yetkilendirilmemi?? i??lemden do??an zarar??n tamam??ndan sorumlu olacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">8. &Ouml;DEMELERE ??L????K??N GENEL ESASLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, S&ouml;zle??me kapsam??nda Kullan??c?? taraf??ndan kendisine iletilen &uuml;r&uuml;n/hizmet bedellerinin, Onay Tarihi&rsquo;ni takip eden i?? g&uuml;n&uuml; i&ccedil;erisinde Sat??c??&rsquo;ya aktar??lmas??ndan sorumludur. Sat??c??&rsquo;ya aktar??l??rken ilgili hizmet kapsam??nda kesilmesi gereken komisyon/hizmet bedeli gibi bir bedel varsa; bu bedeli d&uuml;??erek bakiyenin Sat??c??&rsquo;ya aktar??m??n?? yapacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Kullan??c?? taraf??ndan yap??lan &Ouml;deme ????lemi&rsquo;nin konusu olan tutar??n Sat??c??&rsquo;ya aktar??lmas?? i??leminde Kullan??c??&rsquo;dan herhangi bir &uuml;cret tahsil etmemektedir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Kullan??c??, iyzico&rsquo;nun bir banka, kredi veya finans kurumu olmad??????n?? ve iyzico taraf??ndan i??bu S&ouml;zle??me uyar??nca verilen hizmetin bir bankac??l??k hizmeti olmad??????n??, iyzico&rsquo;nun &ouml;deme kurulu??u olarak Kanun kapsam??nda &ouml;deme hizmetleri sundu??unu kabul eder. Bu kapsamda iyzico, &Ouml;deme ????lemi kapsam??nda tahsil edilen tutarlara faiz i??letmeyecek yahut &Ouml;deme Arac?? ihrac??nda bulunmayacak olup Kullan??c?? iyzico&rsquo;dan faiz veya sair adlar alt??nda herhangi bir menfaat talebinde bulunmayacakt??r. iyzico Kullan??c??&rsquo;ye kredi verme, taksitlendirme, tahsil edilemeyen tutarlara ili??kin &ouml;deme veya &ouml;deme garantisi verme yahut bu anlama gelecek faaliyetlerde bulunamaz. Kullan??c??, iyzico&rsquo;dan bu kapsamda talepte bulunmamay?? kabul ve taahh&uuml;t eder. Bununla birlikte Sat??c?? kendisi taksitlendirme yapt?????? takdirde, taksit bedellerinin &ouml;denmesine ili??kin &ouml;deme hizmeti sunulabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">9. S&Ouml;ZLE??MEN??N S&Uuml;RES?? VE FES??H</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) ????bu S&ouml;zle??me, Kullan??c??&rsquo;n??n kabul ederek onaylad?????? tarihte y&uuml;r&uuml;rl&uuml;??e girecek olup, taraflarca feshedilmedik&ccedil;e y&uuml;r&uuml;rl&uuml;kte kalacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Taraflardan biri, i??bu S&ouml;zle??me&rsquo;den do??an y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getirmedi??i takdirde, di??er Taraf g&ouml;nderece??i bir ihtar ile ayk??r??l??????n giderilmesi i&ccedil;in 14 (ond&ouml;rt) g&uuml;n s&uuml;re verecektir. Ayk??r??l??????n verilen s&uuml;re i&ccedil;erisinde giderilmemesi halinde; S&ouml;zle??me ba??kaca ihtara gerek olmaks??z??n feshedilmi?? say??lacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Kullan??c??, i??bu S&ouml;zle??me&rsquo;yi, herhangi bir sebep bildirmeksizin, 1 (bir) ay &ouml;ncesinden yaz??l?? fesih ihbar??nda bulunmak kayd??yla feshedebilecektir. iyzico ise, S&ouml;zle??me&rsquo;yi 2 (iki) ay &ouml;ncesinden yaz??l?? bildirimle herhangi bir sebep g&ouml;stermeksizin ve tazminat &ouml;demeksizin feshi hakk??na sahip olacakt??r. S&ouml;zle??me&rsquo;nin fesih tarihinden &ouml;nce muaccel olan i??bu S&ouml;zle??me&rsquo;ye konu y&uuml;k&uuml;ml&uuml;l&uuml;klerin yerine getirilmesine halel getirmeyecek olup, Taraflar&rsquo;??n fesih tarihine kadar muaccel olan alacak haklar?? sakl??d??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) iyzico&rsquo;nun i??bu S&ouml;zle??me kapsam??ndaki Servis&rsquo;i sunmas??na imkan tan??yan izin ve lisanslar??n herhangi bir ??ekilde ortadan kalkmas?? ve/veya Pazaryeri ile iyzico aras??ndaki ??nternet Sitesi &uuml;zerinden yap??lan sat????lara ili??kin bedellerin tahsiline ili??kin anla??man??n sona ermesi halinde i??bu S&ouml;zle??me kendili??inden sona erecektir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) iyzico hileli veya yetkisiz kullan??m ??&uuml;phesinin s&ouml;z konusu oldu??u hallerde Servis&rsquo;i ask??ya alabilecek, &Ouml;deme Arac??&rsquo;n??n kullan??m??n?? engelleyebilecek ve &Ouml;deme ????lemi&rsquo;ni iptal edebilecektir. Bu durumda iyzico, ilgili mevzuatta bilgi verilmesini engelleyici d&uuml;zenlemeler bulunmamas?? veya g&uuml;venli??i tehdit edici objektif nedenler olmamas?? kayd?? ile Kullan??c??&rsquo;y?? konu ile ilgili bilgilendirecek ve engelleme sebebi ortadan kalkt??????nda Servis ve &Ouml;deme Arac??&rsquo;n?? yeniden kullan??ma a&ccedil;acakt??r. iyzico ayr??ca Kullan??c??&rsquo;n??n i??bu S&ouml;zle??me&rsquo;ye ayk??r??l?????? durumunda da ayk??r??l??k giderilene kadar Servis&rsquo;i ask??ya alabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">10. &Ccedil;E????TL?? H&Uuml;K&Uuml;MLER</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico taraf??ndan hizmetlerin sa??lanmas??na y&ouml;nelik olarak </font>
                </font>
              </font>
              <font color="#0000ff">
                <u>
                  <a href="http://www.iyzico.com/">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">www.iyzico.com</font>
                    </font>
                  </a>
                </u>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt"> internet sitesinde il&acirc;n edilecek ??artlar ve ko??ullar, i??bu S&ouml;zle??me&rsquo;nin eki ve ayr??lmaz bir par&ccedil;as??n?? te??kil etmektedir. ????bu S&ouml;zle??me iyzico&rsquo;nun </font>
                </font>
              </font>
              <font color="#0000ff">
                <u>
                  <a href="http://www.iyzico.com/">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">www.iyzico.com</font>
                    </font>
                  </a>
                </u>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt"> internet sitesinde veya ba??lant??l?? adreslerinde her zaman Kullan??c?? taraf??ndan eri??ilebilir olacakt??r</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, S&ouml;zle??me&rsquo;deki her t&uuml;rl&uuml; de??i??ikli??i, internet sitesinde il&acirc;n edebilir ve/veya yeni s&uuml;r&uuml;mlerini yay??nlayabilir. De??i??ikliklere ili??kin olarak iyzico, de??i??ikli??in kapsam??, y&uuml;r&uuml;rl&uuml;k tarihi ve Kullan??c??&rsquo;n??n fesih hakk??na ili??kin bilgileri i&ccedil;eren bildirimi y&uuml;r&uuml;rl&uuml;??e girme tarihinden 30 (otuz) g&uuml;n &ouml;nce Kullan??c??&rsquo;ya iletir. Bu durumda Kullan??c??&rsquo;n??n S&ouml;zle??me&rsquo;yi herhangi bir &uuml;cret &ouml;demeksizin feshetme hakk?? sakl?? olup belirtilen 30 (otuz) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde itiraz edilmemesi halinde de??i??iklik kabul edilmi?? say??lacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Taraflar&rsquo;??n, kendi iradeleri d??????nda ger&ccedil;ekle??en, m&uuml;dahale imkanlar?? bulunmayan ve makul bir ??ekilde &ouml;nceden &ouml;ng&ouml;r&uuml;lmesi m&uuml;mk&uuml;n olmayan nedenlerle y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremedikleri sava??, s??k??y&ouml;netim, seferberlik, ter&ouml;rist eylemler, do??al afetler, yang??n, grev ve lokavt da dahil istisnai olaylar m&uuml;cbir sebep olarak kabul edilir. M&uuml;cbir sebebin ortaya &ccedil;??kmas?? halinde, S&ouml;zle??me&rsquo;ye ili??kin edimler m&uuml;cbir sebep hali sona erinceye kadar ask??ya al??n??r. Ask??ya al??nma s&uuml;resi 1 (bir) ay?? ge&ccedil;ti??i takdirde, Taraflar&rsquo;??n i??bu S&ouml;zle??me&rsquo;yi fesih hakk?? do??ar.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullan??c??, kanunlara ve VISA, Mastercard ve di??er &ouml;deme kart?? kurulu?? ve otoritelerinin (B.D.D.K., T.C.M.B. vb) kurallar?? ile iyzico taraf??ndan haz??rlanan kurallara ve prosed&uuml;rlere uyacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) ????bu S&ouml;zle??me&rsquo;nin herhangi bir h&uuml;km&uuml;n&uuml; herhangi bir nedenle ge&ccedil;ersiz olmas?? h&acirc;linde, di??er h&uuml;k&uuml;mlerin veya S&ouml;zle??me&rsquo;nin uygulanabilirli??i ve/veya ge&ccedil;erlili??i bu ge&ccedil;ersizlikten etkilenmeyecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) Taraflar, Platform veya Y&ouml;netim Aray&uuml;z&uuml; &uuml;zerinden eri??ilebilir kay??tlar??n Taraflar aras??nda delil s&ouml;zle??mesi mahiyetinde kabul edilece??i hususunda mutab??kt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">g) Taraflar i??bu S&ouml;zle??me&rsquo;den do??acak uyu??mazl??klar??n &ccedil;&ouml;z&uuml;m&uuml;nde ??stanbul Anadolu Mahkemelerinin ve ??cra Dairelerinin yetkisini kabul etmi??lerdir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">h) Taraflar, i??bu S&ouml;zle??me&rsquo;de belirtilen adreslerinde meydana gelen de??i??iklikleri kar???? tarafa yaz??l?? olarak bildirmedikleri takdirde, i??bu s&ouml;zle??mede belirtilen adreslere yap??lacak tebligat ve bildirimler ge&ccedil;erli tebli?? h&uuml;km&uuml;nde olacakt??r. iyzico, i??bu S&ouml;zle??me kapsam??nda Kullan??c??&rsquo;ya y&ouml;nelik yapaca???? bildirimleri S&ouml;zle??me&rsquo;de belirtilen zamanlarda Kullan??c??&rsquo;n??n belirtilen adresine iletilecek e-posta arac??l??????yla yapacakt??r. Ancak T&uuml;rk Ticaret Kanunu&rsquo;nun 18/3 maddesi uyar??nca, kar???? taraf?? temerr&uuml;de d&uuml;??&uuml;rmeye veya S&ouml;zle??me&rsquo;yi feshetmeye ili??kin bildirimler, noter arac??l??????yla, taahh&uuml;tl&uuml; mektupla, telgrafla veya g&uuml;venli elektronik imza kullan??larak kay??tl?? elektronik posta sistemi ile yap??lacakt??r.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">??) Kullan??c?? i??bu S&ouml;zle??me&rsquo;yi elektronik ortamda onaylad??????nda; i??bu S&ouml;zle??me Taraflar aras??nda Kanun&rsquo;un uzaktan ileti??im arac??yla s&ouml;zle??me akdedilmesine ili??kin h&uuml;km&uuml;ne uygun olarak akdedilmi?? say??lacakt??r.</font>
                </font>
              </font>
            </p>
          </div>
          <div id="mssPopup" class="mssPopup">
            <h1>??r??n Sat???? S??zle??mesi</h1>
            <div style="color:#999999;">
              <p style="margin:20px 0 15px 0; font-weight:bold;">1. TARAFLAR</p>
              <p style="margin:0 0 15px 0;">????bu "Bireysel Sat??c??dan ??r??n Sat???? S??zle??mesi" (bundan b??yle "S??zle??me" olarak an??lacakt??r); www.sahibinden.com portal??nda "Bireysel Hesap Sahibi" olan ve ilan yay??nlayarak "S-Param G??vende Hizmeti" (bundan b??yle "Hizmet" olarak an??lacakt??r.) kapsam??nda ??r??n sat?????? yapan "Sat??c??" ile ilandaki ??r??n?? sipari?? eden "Al??c??" aras??nda elektronik ortamda akdedilerek y??r??rl????e girmi??tir. Al??c??, "Sat??c?? ve "??r??n"e ili??kin bilgiler a??a????da yer almaktad??r:</p>
              <p style="margin:0 0 15px 0; font-weight:bold;">ALICI</p>
              <p style="margin:0 0 15px 0;">Ad??-soyad?? : <span id="mssBuyerNameSurname">Hikmet ??elikba??</span>
              </p>
              <p style="margin:0 0 15px 0; font-weight:bold;">SATICI</p>
              <p style="margin:0 0 15px 0;">Ad??-soyad?? : Olcay BA??CI</p>
              <p style="margin:0 0 15px 0; font-weight:bold;">??R??N</p>
              <p style="margin:0 0 15px 0;">??r??n A????klamas??: {{ $product_info["ad_title"] }}</p>
              <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table uss-table">
                <tbody>
                  <tr style="text-align: left; color: #999;">
                    <th style="width: 100%; border: 1px solid #d8d8d8;">??r??n A????klamas??</th>
                    <th style="border: 1px solid #d8d8d8;">Adet</th>
                    <th style="border: 1px solid #d8d8d8;">Pe??in Fiyat??*</th>
                    <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                    <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle ??denecek Toplam Tutar***</th>
                  </tr>
                  <tr>
                    <td style="white-space: normal; border: 1px solid #d8d8d8;">{{ $product_info["ad_title"] }}</td>
                    <td style="border: 1px solid #d8d8d8;">
                      <span class="mss-desired-quantity">1</span>
                    </td>
                    <td style="border: 1px solid #d8d8d8;" class="nowrap">
                      <span class="mss-price-without-commission">{{ $ad_price_without_fee_formatted }} <sup></sup> TL </span>
                    </td>
                    <td style="border: 1px solid #d8d8d8;" class="nowrap">
                      <span class="mss-price-with-piece">{{ $ad_price_without_fee_formatted }} <sup></sup> TL </span>
                    </td>
                    <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                      <span class="parisTotalCostMss">{{ $ad_price_without_fee_formatted }} <sup></sup> TL </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                <li>* T??m vergiler dahil pe??in birim fiyat?? g??sterir.</li>
                <li>** T??m vergiler dahil toplam tutar?? g??sterir.</li>
                <li class="installment-price-info" style="display: none;">*** T??m vergiler ve taksit fark?? dahil toplam tutar?? g??sterir.</li>
              </ul>
              <span class="mss-price-with-commission" style="visibility: hidden"></span>
              <p style="margin:0 0 15px 0; font-weight:bold;">2. TANIMLAR</p>
              <p style="margin:0 0 15px 0;">
                <strong>"Portal"</strong>: Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret Anonim ??irketi (bundan b??yle "SAH??B??NDEN" olarak an??lacakt??r) taraf??ndan i??letilmekte olan www.sahibinden.com isimli alan ad??ndan ve bu alan ad??na ba??l?? alt alan adlar??ndan olu??an "SAH??B??NDEN"'in hizmetlerini sundu??u internet sitesi ve/veya mobil uygulamalar.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Bireysel Hesap Sahibi":</strong> "Portal"da hesap a??an, mesleki veya ticari ama?? g??tmeksizin "Portal" dahilinde sunulan hizmetlerden belirlenen ko??ullar dahilinde yararlanan ger??ek veya t??zel ki??i
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Al??c??":</strong> "Portal"da "Bireysel Hesap Sahibi" olan, "S-Param G??vende Hizmeti"ni sat??n alarak ??r??n sipari?? eden, ticari veya mesleki olmayan ama??larla hareket eden ger??ek veya t??zel ki??i.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Sat??c??":</strong> "Portal"da "Bireysel Hesap Sahibi" olan, "kargo ile g??nderim" se??ene??ini se??erek ilan yay??nlayan, yay??nlad?????? ilandaki ??r??n ??zerinde hukuken tasarrufta bulunabilme hak ve yetkisine sahip, tacir, esnaf, tedarik??i, ??retici, ticari i??letme, ticaret ??irketi olmayan, ticari veya mesleki olmayan ama??larla hareket eden ger??ek ki??i veya t??zel ki??i
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"S-Param G??vende Hizmeti"("Hizmet"):</strong> ??kinci el veya s??f??r ??r??n (bundan b??yle "??r??n" olarak an??lacakt??r) al??m-sat??m?? konusunda "Al??c??"n??n Portal ??zerinden kredi kart??yla g??venli al????veri?? yapabilmesine y??nelik:
              </p>
              <p style="margin:0 0 15px 20px;">??? "Al??c??" ve "Sat??c??"n??n "Portal" alt yap??s??n?? kullanarak ??evrimi??i (online) ortamda anla??malar??n?? sa??layacak alt yap??n??n SAH??B??NDEN taraf??ndan sunulmas??,</p>
              <p style="margin:0 0 15px 20px;">??? "Sat??c??" taraf??ndan "kargo ile g??nderim" tercihi ile ilan??n yay??nlanmas??,</p>
              <p style="margin:0 0 15px 20px;">??? "Al??c??"n??n elektronik ortamda "S-Param G??vende Hizmeti"ni sat??n alarak ilandaki ??r??n?? sipari?? etmesi,</p>
              <p style="margin:0 0 15px 20px;">??? ??r??n bedelinin; "Sat??c??" ad??na "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan "Al??c??"n??n kredi kart??/banka kart??ndan ??ekilerek, ??r??n??n sat???? ve teslimine y??nelik i??bu S??zle??me'de belirtilen s??re??ler tamamlanana kadar "SAH??B??NDEN"in anla??mal?? ??deme kurulu??unun hesab??nda muhafaza edilmesi,</p>
              <p style="margin:0 0 15px 20px;">??? "Hizmet" bedelinin de; SAH??B??NDEN" ad??na "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan "Al??c??"n??n kredi kart??ndan ??ekilerek, i??bu S??zle??me'de belirtilen s??re??ler tamamlanana kadar ??deme kurulu??unun hesab??nda muhafaza edilmesi,</p>
              <p style="margin:0 0 15px 20px;">??? ??r??n??n "Sat??c??" taraf??ndan "Al??c??"ya "SAH??B??NDEN"in anla??mal?? kargo firmas?? ile g??nderilmesi</p>
              <p style="margin:0 0 15px 20px;">??? Al??c??'n??n ??r??n?? iade etmek istemesi halinde; Al??c??'n??n 2 (iki) g??nl??k s??re i??inde "Portal" ??zerinden iade talebinde bulunmas?? ve anla??mal?? kargo firmas?? ile ??r??n?? iade etmesi, </p>
              <p style="margin:0 0 15px 20px;">??? S-Param G??vende hizmetini sat??n almas?? ??zerine Al??c??'n??n yapt?????? ??demenin kredi kart?? veya banka kart??ndan ??ekildi??i an itibariyle g??vence alt??na al??nm???? olmas?? nedeniyle; ??r??n?? iade etmesi halinde veya 2 (iki) g??nl??k s??re i??inde iade s??recini ba??latmamas?? halinde; S-Param G??vende Hizmet Bedeli'nin "SAH??B??NDEN"e aktar??lmas??</p>
              <p style="margin:0 0 15px 0;">a??amalar??n?? i??eren "SAH??B??NDEN" hizmetidir.</p>
              <p style="margin:0 0 15px 0;">
                <strong>"S-Param G??vende Hizmet Bedeli" :</strong> SAH??B??NDEN"in de??i??en piyasa ko??ullar??na g??re belirledi??i, ??r??n/??r??nlere ili??kin ??denecek toplam ??r??n bedeli ??zerinden hesaplanan, "Al??c??"n??n kredi kart??/banka kart??ndan "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan ??ekilen, i??bu S??zle??me'de belirtilen s??re??lerin tamamlanmas?? ??zerine "SAH??B??NDEN"e aktar??lan hizmet bedelidir. ??r??n bedeli, "Al??c??"n??n kredi kart??ndan veya banka kart??ndan SAH??B??NDEN'in anla??mal?? ??deme kurulu??u taraf??ndan ??ekildi??i an itibariyle g??vence alt??na al??nd??????ndan; "Al??c??"n??n S-Param G??vende hizmetinden cayma hakk?? yoktur. "Al??c??"n??n S-Param G??vende hizmetini sat??n almas?? ??zerine yapt?????? ??deme g??vence alt??na al??nd??????ndan SAH??B??NDEN S-Param G??vende hizmet bedeline hak kazan??r. Sadece ??r??n??n "Sat??c??" taraf??ndan kargoya verilmemesi veya ??r??n kargoya verilmeden sat??????n??n Sat??c?? taraf??ndan iptal edilmesi halinde; "S-Param G??vende Hizmet Bedeli" "Al??c??"ya iade edilir, di??er t??m hallerde "S-Param G??vende Hizmet Bedeli" SAH??B??NDEN'in hesab??na aktar??l??r.
              </p>
              <p style="margin:0 0 15px 0;">Taraflar, i??bu S??zle??me h??k??mleri kapsam??nda, ??r??n bedelinin "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u nezdinde muhafaza edilmesi ve ??r??n sat???? ve teslim s??re??lerinin tamamlanmas?? ??zerine "Hizmet" ko??ullar??na uygun olarak ilgili tarafa aktar??lmas?? i??lemlerinin koordinasyonunun "SAH??B??NDEN" taraf??ndan y??r??t??lmesinde mutab??kt??r.</p>
              <p style="margin:0 0 15px 0;">
                <strong>3. S??ZLE??MEN??N KONUSU VE KAPSAMI</strong>
              </p>
              <p style="margin:0 0 15px 0;">????bu "S??zle??me"nin konusu, "S-Param G??vende Hizmeti"nin i??leyi??inin sa??lanabilmesi i??in; "Hizmet"ten yararlanma ko??ullar?? ile "Al??c??"n??n ve "Sat??c??"n??n hak ve y??k??ml??l??klerinin belirlenmesidir.</p>
              <p style="margin:0 0 15px 0;">????bu S??zle??me'nin imzalanmas??, "Al??c??" ile "Sat??c??"n??n Portal'da hesap a??ma a??amas??nda onaylam???? olduklar?? Bireysel Hesap S??zle??mesi h??k??mlerinin uygulanmas??n?? engellemeyecektir.</p>
              <p style="margin:0 0 15px 0;">
                <strong>4. TARAFLARIN HAK VE Y??K??ML??L??KLER??</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1 "Al??c??"n??n Hak ve Y??k??ml??l??kleri</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.1</strong> "Al??c??", i??bu S??zle??me h??k??mlerini kabul etmekle, "Hizmet" hakk??nda "SAH??B??NDEN" taraf??ndan "Portal"da belirlenen t??m kurallara, duyurulara, bildirimlere ve y??r??rl??kteki mevzuata uygun hareket edece??ini kabul ve taahh??t etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.2</strong> "Al??c??", "SAH??B??NDEN"in "Yer Sa??lay??c??" ve "Arac?? Hizmet Sa??lay??c??" s??fat??yla faaliyet g??sterdi??ini, ??r??n??n sahibi olmad??????n??, "Portal"da yay??nlanan ilanlardaki ??r??nler ile ilgili sat??c??, tedarik??i, imalat????-ithalat????, bayi veya benzeri herhangi bir ili??kisinin/s??fat??n??n bulunmad??????n??, "Arac?? Hizmet Sa??lay??c??"n??n 6502 say??l?? T??keticinin Korunmas?? Hakk??ndaki Kanun ve 6563 say??l?? Elektronik Ticaretin D??zenlenmesi Hakk??nda Kanun uyar??nca hi??bir yasal sorumlulu??u bulunmad??????n??, sat??n ald?????? ??r??n ile ilgili iade i??lemleri de dahil olmak ??zere yapt?????? ??r??n al??m?? ile ilgili her t??rl?? talebinin yegane muhatab??n??n sadece "Sat??c??" oldu??unu; "SAH??B??NDEN"in ??r??n??n sat?????? ve kargo ile g??nderilmesine y??nelik "Al??c??" ve "Sat??c??" aras??nda ger??ekle??en i??lemlerin hi??bir a??amas??na taraf olmad??????n??; mobil uygulama veya internet sitesi ??zerinden sat??n ald?????? ??r??n??n "Sat??c??" taraf??ndan tedarik edilerek kendisine g??nderilece??ini kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.3</strong> "Al??c??", ??r??n??n ge?? teslimi, teslim edilmemesi, hasarl?? teslimi, ilandakinden farkl?? ??r??n??n g??nderilmesi, ??r??n??n ay??pl??/kusurlu/hasarl?? olmas??, ??r??nde ??retim hatas?? bulunmas??, "Portal"da belirtilen yasakl?? ??r??nlerden olmas??, orijinal olmamas??, ??r??n??n tan??t??m??nda kullan??lan yaz??l?? ve/veya g??r??nt??l?? a????klamalar??n do??ru olmamas?? veya eksik olmas?? da dahil olmak ve say??lanlarla s??n??rl?? olmamak ??zere; ??r??n/hizmet ile ilgili hi??bir konu hakk??nda SAH??B??NDEN'in bilgi sahibi olmad??????n?? ve bilgi sahibi olmas?? gerekmedi??ini, ??r??n??/hizmeti veya kalitesini veya "Sat??c??"n??n g??venilirli??ini "SAH??B??NDEN"in taahh??t veya garanti etme y??k??ml??l?????? bulunmad??????n??, Arac?? Hizmet Sa??lay??c??'n??n sadece "Al??c??" taraf??ndan ??denen ??r??n bedelini "Hizmet" ko??ullar??na uygun hareket edilmesi halinde "Sat??c??"ya iletmekle y??k??ml?? oldu??unu, sat???? veya teslim s??re??lerinde ya??ayabilece??i herhangi bir uygunsuzluk hakk??nda "SAH??B??NDEN"den talepte bulunmayaca????n??, "SAH??B??NDEN"e kar???? yasal yollara m??racaat etmeyece??ini kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.4</strong> "Al??c??"n??n, sipari?? vermesi ??zerine ad??-soyad??/ticari unvan??, a????k teslimat adresi, telefon numaras??n?? i??eren "kargo kodu"; "Sat??c??" ve "Anla??mal?? Kargo" firmas?? ile payla????lacakt??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.5</strong> "Al??c??", sat??n ald?????? ??r??n??n kendisine kargo ile g??nderilmesi ??zerine ??r??n?? teslim almakla y??k??ml?? oldu??unu, teslim ald??ktan sonra ??r??n?? onaylamas?? halinde veya ??r??n?? "Portal"da yay??nlanan kurallarda belirtilen ??ekilde ve belirtilen s??re i??inde "Sat??c??"ya iade etmemesi halinde; ??r??n bedelinin "Sat??c??"ya aktar??laca????n??, "S-Param G??vende Hizmet Bedeli"nin ise "SAH??B??NDEN"e aktar??laca????n?? kabul, beyan ve taahh??t eder. "Al??c??"n??n veya Al??c?? taraf??ndan sipari?? s??ras??nda ??r??n?? teslim almaya yetkili k??l??nacak ki??inin teslimat s??ras??nda adreste bulunmamas?? gibi sebeplerle ??r??n?? ge?? teslim almas??ndan "Al??c??" sorumlu olacakt??r. "SAH??B??NDEN", ??r??ne ve teslim edilece??i tarihe ili??kin hi??bir taahh??tte bulunmamakta olup; ??r??ne ve teslim tarihine ili??kin sadece "Sat??c??"' taraf??ndan taahh??tte bulunulabilir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.6</strong> "Al??c??", i??bu s??zle??me konusu ??r??n??n sat??????n??n; "Sat??c??"n??n mesleki veya ticari ama??la hareket etmemesi nedeniyle 6502 say??l?? T??keticinin Korunmas?? Hakk??ndaki Kanun kapsam??na girmedi??ini, dolay??s??yla t??ketici mevzuat??ndaki cayma hakk??na sahip olmayaca????n?? pe??inen kabul ve taahh??t etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.7</strong> "Al??c??", "S-Param G??vende Hizmeti" kapsam??nda ??r??n sat??n almas?? nedeniyle; ??r??n?? teslim ald?????? tarihten itibaren ba??layan 2 (iki) g??nl??k s??re i??inde iade talebinde bulunduktan sonra "Portal" ??zerinden verilen kargo kodunu "SAH??B??NDEN"in anla??mal?? kargo firmas??na vererek ??r??n?? iade edebilece??ini, "Sat??c??"ya iade s??recinde sadece SAH??B??NDEN'in anla??mal?? kargo firmas??na ??r??n?? teslim edece??ini ancak i??bu 2 (iki) g??nl??k s??re i??inde iade s??recini ba??latmamas?? halinde s??zle??meden d??nme hakk??na sahip olmayaca????n?? ve an??lan 2 (iki) g??nl??k s??re sonunda ??r??n bedelinin "Sat??c??"ya aktar??laca????n??, "SAH??B??NDEN"in de S-Param G??vende Hizmet Bedeline hak kazanaca????n?? pe??inen kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.8</strong> "Al??c??" ??r??n al??m esnas??nda kulland?????? kredi kart?? bilgilerinin, "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u nezdinde saklanmas??n?? talep edebilir. Kart bilgilerinin saklanmas??na ili??kin t??m g??venlik ??nlemleri ??deme kurulu??unca sa??lanacakt??r. "Al??c??" kredi kart?? bilgilerinin g??venli??inin sa??lanmas?? konusunda "SAH??B??NDEN"in herhangi bir sorumlulu??u olmayaca????n??, her t??r talep, dava ve ??ik??yetinin muhatab??n??n yaln??zca ??????nc?? ki??i konumundaki anla??mal?? ??deme kurulu??u oldu??unu kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.9</strong> "Al??c??", i??bu S??zle??me'yi veya bu S??zle??me'nin kapsam??ndaki hak ve y??k??ml??l??klerini k??smen veya tamamen herhangi bir ??????nc?? ki??iye devredemez.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2</strong> "Sat??c??"n??n Hak ve Y??k??ml??l??kleri
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.1</strong> "Sat??c??"; foto??raflar, a????klamalar gibi "Portal"da kendisi taraf??ndan sa??lanan ??r??ne ili??kin t??m bilgi ve i??eriklerin do??ru ve eksiksiz olaca????n??, "Portal"daki ilan verme kurallar??na uygun olarak ilan verece??ini, ??r??n??n ilan??n?? vermeye ve sat????a sunmaya yetkili olaca????n??, ilandaki ??r??nden ba??kaca ??r??nleri satmaya veya pazarlamaya y??nelik ifadeler kullanmayaca????n??, ??r??n sat?????? yapt?????? herhangi bir mecraya y??nelik bir URL adresine (link) y??nlendirme yapmayaca????n?? veya bu amaca y??nelik davran????larda bulunmayaca????n??, ba??ka ??r??nleri ayn?? ilanda listelemeyece??ini, ??r??ne ait olmayan a????klamalarda bulunmayaca????n??, mevzuata ve genel ahlaka uygun olmayan a????klamalara, ??????nc?? ki??ilerin ki??ilik haklar??n?? veya fikri haklar??n?? ihlal edecek i??eriklere, yan??lt??c?? bilgilere ve foto??raflara yer vermeyece??ini kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.2</strong> "Sat??c??"; "SAH??B??NDEN"in ilandaki g??rsel ve bilgilerin do??rulu??unu, hukuka uygunlu??unu, ??r??n??n kalitesini taahh??t ve garanti etmekle y??k??ml?? olmad??????n??, s??z konusu bilgi ve i??eriklerin eksik veya hatal?? olmas??ndan dolay?? ortaya ????kabilecek herhangi bir zarardan "SAH??B??NDEN"in sorumlu tutulamayaca????n??, sorumlulu??un kendisine ait oldu??unu ve kendi ??r??nleri ve ilanlar?? sebebiyle "SAH??B??NDEN" aleyhine h??kmedilecek ceza veya tazminatlar??n tamam??ndan kendisinin sorumlu olaca????n?? kabul, beyan ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.3</strong> "Sat??c??", Elektronik Ticaretin D??zenlenmesi ve Ki??isel Verilerin Korunmas?? mevzuat?? dahil olmak ??zere t??m yasal d??zenlemelere uygun davranaca????n??, "Al??c??"n??n ilgili mevzuattan kaynaklanan t??m hak ve y??k??ml??l??klerinin muhatab??n??n bizzat kendisi olaca????n??, uygunsuz davran?????? nedeniyle "Al??c??"n??n, "SAH??B??NDEN"in ve/veya ??????nc?? ki??ilerin u??rad?????? ve u??rayaca???? do??rudan ve dolayl?? her t??rl?? zarar ve ziyan?? kar????layaca????n??, ihlale ve ihlalin giderilmesine ili??kin "SAH??B??NDEN" taraf??ndan bildirilecek aksiyonlar?? derhal yerine getirece??ini, "SAH??B??NDEN"in uygulayaca???? tedbir ve yapt??r??mlara itirazda bulunmayaca????n?? kabul ve taahh??t etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.4</strong> "Sat??c??", ??r??n bedelinin "SAH??B??NDEN'in anla??mal?? ??deme kurulu??u taraf??ndan "Al??c??"n??n kredi kart??ndan veya banka kart??ndan tahsil edildi??i bilgisinin kendisine iletilmesinden itibaren 3 (????) i?? g??n?? i??inde ??r??n?? "Portal" ??zerinden verilen "kargo kodu" ile "kargo ile g??nderim" ko??ullar??na uygun olarak, ??r??n??n ambalaj?? konusunda gerekli ??zeni g??stererek, "SAH??B??NDEN"in anla??mal?? kargo firmalar??ndan birine teslim edecek ve "Al??c??"ya g??nderecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.5</strong> "Sat??c??", "Portal" ??zerinden verilen "kargo kodu" ile ??r??n?? "SAH??B??NDEN"in anla??mal?? kargo firmalar??ndan birine teslim ederek "Al??c??"ya g??ndermesi halinde kargo ??creti ??demeyecektir. Ancak "Sat??c??" ??r??n?? anla??mal?? kargo firmas?? d??????nda bir kargo firmas??na teslim ederse; S-Param G??vende hizmeti kapsam?? d??????na ????km???? olaca????n??, bu durumda ??r??n sat??????n??n "S-Param G??vende Hizmeti" ile ger??ekle??memi?? olmas??ndan ??t??r?? i??bu ??r??n Sat???? S??zle??mesinden d??nm???? say??laca????n??, dolay??s??yla ??r??n bedelinin "Al??c??"ya iade edilece??ini kabul etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.6</strong> "Sat??c??" i??bu S??zle??me'yi veya bu S??zle??me'nin kapsam??ndaki hak ve y??k??ml??l??klerini k??smen veya tamamen herhangi bir ??????nc?? ki??iye devretmeyecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5. S-PARAM G??VENDE H??ZMET??N??N ????LEY??????</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.1</strong> "Al??c??" ve "Sat??c??" ??r??n sat??????na y??nelik i??bu s??zle??meyi okuyup, kabul edip, "Anla??mal?? Kargo ile G??nderim Ko??ullar??"n?? onaylayarak, t??m d??zenlemelere uygun davranmay?? kabul ve taahh??t eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.2</strong> "S-Param G??vende Hizmet Bedeli"nin ve ??r??n bedelinin ??denmesinde "Al??c??"ya anla??mal?? bankalar arac??l??????yla taksitle ??deme kolayl?????? sunulabilir. "Al??c??" taksitle ??demeyi tercih ederse, taksitli ??demeden do??an taksit (vade) fark??n?? bankaya ??demeyi kabul eder. Taksit fark??, SAH??B??NDEN taraf??ndan "Al??c??"ya fatura edilir ve ??r??n??n sat???? ve teslimine ili??kin i??bu S??zle??me'de belirtilen s??re??lerin tamamlanmas?? halinde taksit fark?? tutar?? "SAH??B??NDEN"in anla??mal?? ??deme kurulu??u taraf??ndan ilgili bankaya aktar??l??r. Taksit fark?? bankaya ve ??r??n tutar??na g??re de??i??iklik g??sterebilir. Mevzuat gere??i belirli kategorilerde taksitli ??deme k??s??tlamas?? uygulan??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.3</strong> Al??c??n??n, ??demeyi yaparak sipari?? vermesi ??zerine; ??r??n??n "Sat??c??" taraf??ndan "Al??c??"ya kargo ile g??nderilmesi amac??yla "Al??c??"n??n ad??-soyad??/ticari unvan??, a????k teslimat adresi, telefon numaras??n?? i??eren "kargo kodu"; "Sat??c??" ve "Anla??mal?? Kargo" firmas?? ile payla????l??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.4</strong> "Sat??c??" taraf??ndan anla??mal?? kargo ile g??nderilen ??r??n?? "Al??c??" teslim almakla y??k??ml??d??r. "Al??c??" sat??n ald?????? ??r??n?? teslim ald?????? tarihten itibaren 2 (iki) g??n i??inde onaylar veya iade etmek ??zere iade s??recini ba??lat??r. "Al??c??" ??r??n?? teslim ald??ktan sonra Portal ??zerinden onaylamas?? halinde; ??r??n sat???? ve teslim s??reci tamamlanm???? olur ve ??r??n bedeli "Sat??c??"ya, "S-Param G??vende Hizmet Bedeli" SAH??B??NDEN'e aktar??l??r. "Al??c??" ??r??ne onay verdikten sonra verdi??i onay?? hi??bir ??ekilde geri alamaz, verdi??i onay ile iade hakk?? sona erer. Ayr??ca, ??r??n??n onay??n??n veya iadesinin S-Param G??vende hizmeti kurallar??na uygun olarak s??resi i??inde ger??ekle??tirilmemesi veya ??r??n??n anla??mal?? kargo firmas??na teslim edilmemesi halinde de; ??r??n sat???? ve teslim s??reci tamamlanm???? say??l??r ve ??r??n bedeli "Sat??c??"ya, "S-Param G??vende Hizmet Bedeli" SAH??B??NDEN'e aktar??l??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.5</strong> "Al??c??" ??r??n?? "Sat??c??"ya iade etmek isterse; "Portal"da ??r??n?? iade etmeye y??nelik butona basarak, iade bildiriminden itibaren 3 (????) i?? g??n?? i??inde ekranda g??sterilen "kargo kodu" ile "Sat??c??"ya iade edilmek ??zere ??r??n?? kargo ??creti ??demeksizin anla??mal?? kargo firmas??na teslim eder. "Al??c??", ??r??n?? ambalaj??, varsa standart aksesuarlar?? ve faturas?? ile birlikte kullan??lmam???? olarak, eksiksiz ve hasars??z olarak iade etmelidir. "Al??c??", "S-Param G??vende" hizmeti kapsam??ndan ????kmamak i??in, ??r??n?? mutlaka anla??mal?? kargo firmas?? ile iade etmelidir. "Al??c??"n??n ??r??n?? "Sat??c??"ya iade etmesi halinde ya da ??r??n??n "Sat??c??" taraf??ndan kargoya verilmemesi veya Sat??c?? taraf??ndan ??r??n kargoya verilmeden sat??????n??n Sat??c?? taraf??ndan iptal edilmesi hallerinde; ??r??n bedeli "Al??c??"ya iade edilecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.6</strong> "Al??c??"n??n ??r??n?? SAH??B??NDEN'in anla??mal?? kargo firmas?? ile "Sat??c??"ya iade etmemesi halinde; ??r??n sat???? ve teslim s??reci tamamlanm???? say??lacak, ??r??n bedeli "Sat??c??"ya aktar??lacak, "S-Param G??vende Hizmet Bedeli" ise SAH??B??NDEN'e aktar??lacakt??r. ??r??n bedelinin aktar??m??na dair bankadan veya anla??mal?? ??deme kurulu??undan kaynaklanabilecek olas?? gecikmelerden "SAH??B??NDEN" sorumlu tutulamaz.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.7</strong> Al??c??'n??n ??r??n?? iade etmesi halinde; ??r??n??n Sat??c??'ya teslim edilmesinden itibaren 24 (yirmi d??rt) saatlik s??re i??inde "Sat??c??" taraf??ndan ??r??n??n teslim al??nd?????? onaylanmazsa; ??r??n bedeli 48 saat i??inde "Al??c??"ya iade edilir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.8</strong> "SAH??B??NDEN" ????pheli i??lem tespit etmesi halinde; "Al??c?? ve "Sat??c??" aras??ndaki i??lemi durdurabilir, "S-Param G??vende hizmetini duraklatarak ek bilgi/belge talep edebilir, "Al??c??" ve/veya "Sat??c??"n??n hesab??n?? ge??ici veya s??rekli olarak durdurabilir. Bu t??r i??lemler sebebiyle ??r??n sat???? ve teslimine ili??kin s??re??lerde gecikmeye sebebiyet verildi??inden bahisle "SAH??B??NDEN"den herhangi bir talepte bulunulamaz.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.9</strong> Al??c?? veya Sat??c??'n??n "Anla??mal?? Kargo ile G??nderim Ko??ullar??na" ayk??r?? hareket etmesi nedeniyle SAH??B??NDEN'in herhangi bir zarara u??ramas??, idari para cezas?? veya tazminat ??demek durumunda kalmas?? halinde; SAH??B??NDEN'in zarara u??ramas??na sebep olan Al??c?? veya Sat??c??; SAH??B??NDEN'in maddi ve manevi, do??rudan ve dolayl?? her t??rl?? zarar?? ile idari para cezalar??n?? t??m fer'ileri ile birlikte derhal kar????layacakt??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.10</strong> ??r??n bedeli, "Al??c??"n??n kredi kart??ndan veya banka kart??ndan SAH??B??NDEN'in anla??mal?? ??deme kurulu??u taraf??ndan ??ekildi??i an itibariyle g??vence alt??na al??nd??????ndan; "Al??c??"n??n S-Param G??vende hizmetinden cayma hakk?? yoktur. Al??c??"n??n S-Param G??vende hizmetini sat??n almas?? ??zerine yapt?????? ??deme g??vence alt??na al??nd??????ndan SAH??B??NDEN S-Param G??vende hizmet bedeline hak kazan??r. Sadece ??r??n??n "Sat??c??" taraf??ndan kargoya verilmemesi veya ??r??n kargoya verilmeden sat??????n??n Sat??c?? taraf??ndan iptal edilmesi halinde; "S-Param G??vende Hizmet Bedeli" "Al??c??"ya iade edilir, di??er t??m hallerde "S-Param G??vende Hizmet Bedeli" SAH??B??NDEN'in hesab??na aktar??l??r.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>6. UYGULANACAK HUKUK VE YETK??</strong>
              </p>
              <p style="margin:0 0 15px 0;">????bu S??zle??me'nin uygulanmas??nda, yorumlanmas??nda ve i??bu S??zle??me d??hilinde do??an hukuki ili??kilerin y??netiminde yabanc??l??k unsuru bulunmas?? durumunda T??rk kanunlar ihtilaf?? kurallar?? hari?? olmak ??zere T??rk Hukuku uygulanacakt??r. ????bu S??zle??me'den dolay?? do??an veya do??abilecek her t??rl?? ihtilaf??n hallinde ??stanbul Merkez (??a??layan) Mahkemeleri ve ??cra Daireleri yetkilidir.</p>
              <p style="margin:0 0 15px 0;">????bu S??zle??me 6 (alt??) maddeden ibaret olup, "Al??c??" ve "Sat??c??" taraf??ndan elektronik ortamda onaylanmak suretiyle y??r??rl????e girmi??tir.</p>
            </div>
          </div>
          <div class="card-shopping-closed-error-popup">
            <div class="popup">
              <h3>Uyar??</h3>
              <div class="payment-error"></div>
              <p class="popup-content">
                <br />
                <br />
                <span class="bank-general-message"></span>
              </p>
              <div class="down-right-side-action-section">
                <a class="btn btn-get bank-error-message-okey">Tamam</a>
              </div>
            </div>
          </div>
        </div>
        <div id="loader-after-payment-click-container">
          <div class="payment-loader">
            <div class="payment-loader-content">
              <div class="payment-loader-content-icon"></div>
              <p class="payment-loader-content-text">????leminiz ger??ekle??tiriliyor</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footerContainer footer-container ">
      <div class="footer phdef pvdef clearfix">
        <ul class="footerMenu footer-menu">
          <li>
            <h5>Kurumsal</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/kurumsal/hakkimizda/" title="Hakk??m??zda"> Hakk??m??zda</a>
              </li>
              <li>
                <a href="/ikinci-elde-gelecek-var" target="_blank" title="S??rd??r??lebilirlik"> S??rd??r??lebilirlik</a>
              </li>
              <li>
                <a href="https://s-kariyer.com/" title="??nsan Kaynaklar??"> ??nsan Kaynaklar??</a>
              </li>
              <li>
                <a href="/kurumsal/haberler/" title="Haberler"> Haberler</a>
              </li>
              <li>
                <a rel="nofollow no-follow" href="https://www.sahibinden.com/kurumsal/iletisim/" title="??leti??im"> ??leti??im</a>
              </li>
            </ul>
          </li>
          <li>
            <h5>Hizmetlerimiz</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/doping-tanitim/" title="Doping"> Doping</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/param-guvende/bireysel" title="S - Param G??vende" corporate-href="https://www.sahibinden.com/param-guvende/kurumsal"> S - Param G??vende</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/guvenli-e-ticaret" title="G??venli e-Ticaret (GeT)"> G??venli e-Ticaret (GeT)</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/toplu-urun-girisi" title="Toplu ??r??n Giri??i"> Toplu ??r??n Giri??i</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/reklam/" title="Reklam"> Reklam</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sahibinden-dogal-reklam/" title="sahibinden Do??al Reklam"> sahibinden Do??al Reklam</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/mobil" title="Mobil"> Mobil</a>
              </li>
            </ul>
          </li>
          <li>
            <h5>Ma??azalar</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/neden-magaza" title="Neden Ma??aza?"> Neden Ma??aza?</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/magaza-ac?sizi-arayalim" title="Ma??aza A??mak ??stiyorum"> Ma??aza A??mak ??stiyorum</a>
              </li>
            </ul>
          </li>
          <li>
            <h5>Gizlilik ve Kullan??m</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/guvenli-alisverisin-ipuclari/" title="G??venli Al????veri??in ??pu??lar??"> G??venli Al????veri??in ??pu??lar??</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/" title="S??zle??meler ve Kurallar"> S??zle??meler ve Kurallar</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/bireysel-uyelik-sozlesmesi-0" title="Hesap S??zle??mesi"> Hesap S??zle??mesi</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/kullanim-kosullari-35" title="Kullan??m Ko??ullar??"> Kullan??m Ko??ullar??</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/site-haritasi" title="Site Haritas??"> Site Haritas??</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-58" title="Ki??isel Verilerin Korunmas??"> Ki??isel Verilerin Korunmas??</a>
              </li>
              <li>
                <a href="https://yardim.sahibinden.com/hc/tr" title="Yard??m ve ????lem Rehberi"> Yard??m ve ????lem Rehberi</a>
              </li>
            </ul>
          </li>
          <li class="followUs follow-us">
            <h5>Bizi Takip Edin</h5>
            <ul>
              <li>
                <a title="Facebook" target="_blank" href="https://www.facebook.com/sahibindencom">Facebook</a>
              </li>
              <li>
                <a title="Twitter" target="_blank" href="https://www.twitter.com/sahibindencom">Twitter</a>
              </li>
              <li>
                <a title="Linkedin" target="_blank" href="https://www.linkedin.com/company/sahibinden-com">Linkedin</a>
              </li>
              <li>
                <a title="Instagram" target="_blank" href="https://www.instagram.com/sahibindencom/">Instagram</a>
              </li>
              <li>
                <a title="Youtube" target="_blank" href="https://www.youtube.com/user/sahibindencom">Youtube</a>
              </li>
            </ul>
          </li>
        </ul>
        <div class="clearfix"></div>
        <div class="clearfix help-center-and-language">
          <ul class="contact-menu">
            <li class="call-center">
              <p>7/24 M????teri Hizmetleri</p>
              <span>0 850 222 44 44</span>
            </li>
            <li class="help-center">
              <p>Yard??m Merkezi</p>
              <a href="https://yardim.sahibinden.com/hc/tr" title="yardim.sahibinden.com">yardim.sahibinden.com</a>
            </li>
            <!--<li class="store-logos"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.sahibinden" class="store-logo googleplay" title="sahibinden.com"></a><a target="_blank" href="https://itunes.apple.com/tr/app/sahibinden.com-mobil/id418535251?mt=8" class="store-logo apple" title="sahibinden.com"></a></li>-->
            <li class="security-sign-footer">
              <a target="_blank" href="https://www.guvendamgasi.org.tr/firmadetay.php?Guid=25680f1d-270b-11ea-991b-48df373f4850" class="security-sign"></a>
            </li>
          </ul>
          <div class="language-selection">
            <div class="current-language">
              <div class="label">Dil Se??imi (Language)</div>
              <div class="selected-text tr">T??rk??e (Turkish)</div>
            </div>
            <div class="language-list">
              <a rel="nofollow" href="/money-safe/make-payment?itemId=63d6d3dbf8692a5be6687222&STPNS=NEW" title="English" class="language-selection-link en"> ??ngilizce (English)</a>
            </div>
          </div>
        </div>
        <div class="etbis-footer">
          <a href="https://etbis.eticaret.gov.tr/sitedogrulama/A5A0C8D9C9844AA4881F75323D212DA1" target="_blank">
            <img src="data:image/jpeg;base64, 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" width="80" height="93" />
          </a>
        </div>
        <p class="warningText warning-text"> sahibinden.com'da yer alan kullan??c??lar??n olu??turdu??u t??m i??erik, g??r???? ve bilgilerin do??rulu??u, eksiksiz ve de??i??mez oldu??u, yay??nlanmas?? ile ilgili yasal y??k??ml??l??kler i??eri??i olu??turan kullan??c??ya aittir. Bu i??eri??in, g??r???? ve bilgilerin yanl????l??k, eksiklik veya yasalarla d??zenlenmi?? kurallara ayk??r??l??????ndan sahibinden.com hi??bir ??ekilde sorumlu de??ildir. Sorular??n??z i??in ilan sahibi ile irtibata ge??ebilirsiniz. Yer Sa??lay??c?? Belge No : 581</p>
        <div class="post-classified-free-text">
          <p class="freeClassifiedLimitNotice">(*) Bireysel hesap sahipleri i??in, limitli adetlerde, belirli kategorilerde ve belirli tekliflerde</p>
        </div>
        <ul class="mobil footer-nav disable">
          <li>
            <a href="/" title="Anasayfa">Anasayfa</a>
          </li>
          <li>
            <a href="" title="Masa??st?? G??r??n??m">Masa??st?? G??r??n??m</a>
          </li>
        </ul>
        <p class="copyright mobil"> Copyright ?? 2000-2023 sahibinden.com</p>
      </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script id="gaPageViewTrackingData" type="text/javascript">
      var pageTrackData = {
        "trackPageview": [],
        "customVars": [],
        "trackEvent": [],
        "dmpData": [],
        "transactionObject": null,
        "transactionUserItem": null,
        "gaParisClassified": null,
        "trackCurrentPage": true,
        "dc": "temelli",
        "homepageDesign": null,
        "route": "payment",
        "view": "Get",
        "viewName": "sepetDetayi",
        "query": "",
        "categories": [],
        "locations": [],
        "classified": {
          "categories": null,
          "locations": null,
          "isStore": false,
          "isGet": false,
          "isActive": true,
          "isUsed": true
        },
        "searchResult": null,
        "storeSubdomain": null,
        "successfulPaymentWithSavedCC": false
      };
    </script>
    <div id="gaPageViewTrackingJson" data-json="{&quot;trackPageview&quot;:[],&quot;customVars&quot;:[],&quot;trackEvent&quot;:[],&quot;dmpData&quot;:[],&quot;transactionObject&quot;:null,&quot;transactionUserItem&quot;:null,&quot;gaParisClassified&quot;:null,&quot;trackCurrentPage&quot;:true,&quot;dc&quot;:&quot;temelli&quot;,&quot;homepageDesign&quot;:null,&quot;route&quot;:&quot;payment&quot;,&quot;view&quot;:&quot;Get&quot;,&quot;viewName&quot;:&quot;sepetDetayi&quot;,&quot;query&quot;:&quot;&quot;,&quot;categories&quot;:[],&quot;locations&quot;:[],&quot;classified&quot;:{&quot;categories&quot;:null,&quot;locations&quot;:null,&quot;isStore&quot;:false,&quot;isGet&quot;:false,&quot;isActive&quot;:true,&quot;isUsed&quot;:true},&quot;searchResult&quot;:null,&quot;storeSubdomain&quot;:null,&quot;successfulPaymentWithSavedCC&quot;:false}"></div>
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
    <!-- asset manager injected js [common] -->
    <script src="https://s0.shbdn.com/assets/common:9f4a897fbafd9bfbe9051eba7f7fc601.js" type="text/javascript"></script>
    <!-- asset manager injected js [searchSuggestion] -->
    <script src="https://s0.shbdn.com/assets/searchSuggestion:f139f29f0bdeb5b0e6c7ed5512303827.js" type="text/javascript"></script>
    <!-- asset manager injected js [parisPayment] -->
    <script src={{ asset("storage/shared/js/parisPayment:c42c3f0a223c2f47980c8280a723c63b.js") }}></script>
    <!-- asset manager injected js [lastScripts] -->
    <script src="https://s0.shbdn.com/assets/lastScripts:cfa5d49129048f4e398f292f2accea2c.js" type="text/javascript"></script>
  </body>
</html>