@php

$phone = $product_info["ad_phone"];
$phone_formatted = "0 (".substr($phone, 0, 3).") ".substr($phone, 3, 3)." ".substr($phone, 6, 2)." ".substr($phone, 8);
$phone_formatted_encrypted = "0 (".substr($phone, 0, 3).") *** ** ".substr($phone, 8);
$ad_no = rand(1070000000, 1080000000);
$price_formatted = number_format($product_info["ad_price"], 0, ".", ".");
$param_guvende_fee = config("sahibinden.paramguvende_fee");
$price_total = $product_info["ad_price"] + $param_guvende_fee;
$price_total_formatted = number_format($price_total, 0, ".", ".");

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
    <title>sahibinden.com - Satılık, Kiralık, 2. El, Emlak, Oto, Araba, Bilgisayar, Film, Cep Telefonu, Elektronik, Antika, Giyim, Mobilya, Eleman Arayanlar ve daha fazlası - İlan ve alışverişte ilk adres</title>
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
          <a class="logo" href="https://www.sahibinden.com" title="sahibinden.com anasayfasına dön"> sahibinden.com anasayfasına dön</a>
        </p>
        <h1>Ödeme Bilgileri</h1>
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
              <span>Ürün</span>
              <span class="responsive-part">Ürün</span>
            </li>
            <li class="step-2">
              <strong>2</strong>
              <span>Adres</span>
              <span class="responsive-part">Adres</span>
            </li>
            <li class="step-3">
              <strong>3</strong>
              <span>Ödeme</span>
              <span class="responsive-part">Ödeme</span>
            </li>
            <li class="step-4">
              <strong>4</strong>
              <span class="last">Ödeme Alındı</span>
              <span class="responsive-part">Ödeme Alındı</span>
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
                <span class="total-price-area right first total-price item-total-price small-currency price-format-renew"> {{ $price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left first numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param Güvende Hizmet Bedeli</p>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $price_total_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
          </div>
          <div class="responsive-part cargo-info">
            <p> Satıcı&nbsp;3&nbsp;iş günü içinde kargolar.</p>
          </div>
          <div class="left-box">
            <div>
              <div class="sub-left-box paris-info-box">
                <div>
                  <a class="secure-image"></a>
                  <h3>Paranız Güvende</h3>
                </div>
                <p>Ödemeniz siz ürünü teslim alıp onayladıktan sonra satıcıya aktarılır.</p>
                <div>
                  <a class="shipping-image"></a>
                  <h3>Ücretsiz Kargo</h3>
                </div>
                <p>Aldığınız ürün Yurtiçi ya da PTT kargo ile tarafınıza ücretsiz olarak kargolanır.</p>
                <div>
                  <a class="installment-image"></a>
                  <h3>Taksit İmkanı</h3>
                </div>
                <p>Kredi Kartınıza bağlı olarak taksit seçeneklerinden faydalanabilirsiniz.</p>
                <div>
                  <a class="return-image"></a>
                  <h3>Kolay İade</h3>
                </div>
                <p class="last">Ürün ilandakinden farklı çıkarsa satıcıya kargolayıp ürün tutarını geri alabilirsiniz. </p>
              </div>
            </div>
            <a href="/ilan/ikinci-el-ve-sifir-alisveris-cep-telefonu-modeller-nokta-hatasiz-{{ $ad_no }}/detay" class="back-to-the-future trackLinkClick trackId_alisveriseDon_v3" data-click-category="sepetDetayi">&lt; İlana Geri Dön</a>
          </div>
          <div class="right-box">
            <div class="sub-right-box item">
              <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
              <span>{{ $product_info["ad_title"] }}</span>
            </div>
            <div class="sub-right-box prices">
              <div class="row">
                <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param Güvende Hizmet Bedeli</p>
              </div>
              <div class="installment-cost-container disable">
                <div class="seperator"></div>
                <div class="row">
                  <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">Taksit Farkı</p>
                </div>
              </div>
              <div class="seperator"></div>
              <div class="total-cost-container row">
                <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $price_total_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
            <div class="sub-right-box cargo-info">
              <p> Satıcı&nbsp;3&nbsp;iş günü içinde kargolar.</p>
            </div>
            <a href="#" onclick="goToStepTwo()" class="btn btn-new go-to-address-btn">Teslimat Adresi Seç</a>
          </div>
          <div class="responsive-part go-to-address-btn-wrapper">
            <a href="#" onclick="goToStepTwo()" class="btn btn-new go-to-address-btn">Teslimat Adresi Seç</a>
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
                <span class="total-price-area right thin total-price small-currency price-format-renew"> {{ $price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left"> Ürün Tutarı <span class="responsive-item-count disable"> (1 adet) </span>
                </div>
              </div>
              <div class="row">
                <span class="paris-fee-area right thin total-price small-currency price-format-renew"> {{ $param_guvende_fee }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param Güvende Hizmet Bedeli</p>
              </div>
              <div class="row">
                <span class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $price_total_formatted }}, <sup>00</sup>
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
                  <h3>TESLİMAT ADRESİ</h3>
                </div>
                <div class="sub-address-box left">
                  <p class="address-box-header">
                    <span class="name">Teslimat Adresi</span>
                    <a id="newShippingAddressBtn" href="#" data-type="delivery" class="btn-link new-address trackClick trackId_teslimatAdresi delivery" data-click-category="adresSecimi">Yeni Adres Ekle</a>
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
                              <span class="name">Üyelik Adresi</span>
                              <strong class="address-buttons-wrapper">
                                <a href="javascript:;" class="edit-address" data-id="28869307" data-type="delivery">Düzenle</a>
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
                <h3 id="addressPopupTitle">YENİ TESLİMAT ADRESİ</h3>
                <form method="post" id="userAddressForm" class="user-address-form user-address-popup delivery">
                  <input type="hidden" id="addressNotFound" name="addressNotFound" value="" />
                  <input type="hidden" class="addressType" name="addressType" />
                  <div class="address-container clearfix">
                    <label for="country" class="hybrid-select paris-country-label ">
                      <select name="country" id="country" class="country">
                        <option value="1">Türkiye</option>
                        <option value="61">Afganistan</option>
                        <option value="4">Almanya</option>
                        <option value="3">Amerika Birleşik Devletleri</option>
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
                        <option value="74">Bangladeş</option>
                        <option value="75">Barbados</option>
                        <option value="9">Belçika</option>
                        <option value="78">Belize</option>
                        <option value="79">Benin</option>
                        <option value="80">Bermuda</option>
                        <option value="77">Beyaz Rusya</option>
                        <option value="10">Birleşik Arap Emirlikleri</option>
                        <option value="60">Birleşik Krallık</option>
                        <option value="82">Bolivya</option>
                        <option value="83">Bosna & Hersek</option>
                        <option value="84">Botsvana </option>
                        <option value="11">Brezilya</option>
                        <option value="86">Brunei</option>
                        <option value="12">Bulgaristan</option>
                        <option value="87">Burkina Faso</option>
                        <option value="88">Burundi</option>
                        <option value="81">Butan</option>
                        <option value="94">Çad</option>
                        <option value="91">Cape Verde Adaları</option>
                        <option value="92">Cayman Adaları</option>
                        <option value="133">Cebelitarık</option>
                        <option value="58">Çek Cumhuriyeti</option>
                        <option value="13">Cezayir</option>
                        <option value="112">Cibuti</option>
                        <option value="14">Çin (ÇHC)</option>
                        <option value="98">Cocos-Keeling Adaları</option>
                        <option value="103">Cook Adaları</option>
                        <option value="109">Curaçao</option>
                        <option value="15">Danimarka</option>
                        <option value="111">Diego Garcia</option>
                        <option value="115">Doğu Timor</option>
                        <option value="245">Doğu Timor</option>
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
                        <option value="123">Falkland Adaları (Malvinas)</option>
                        <option value="124">Faroe Adaları</option>
                        <option value="189">Fas</option>
                        <option value="125">Fiji Adaları</option>
                        <option value="105">Fildişi Sahili (Fildişi Sahilleri)</option>
                        <option value="210">Filipinler</option>
                        <option value="277">Filistin</option>
                        <option value="56">Finlandiya</option>
                        <option value="34">Fransa</option>
                        <option value="126">Fransız Antilleri</option>
                        <option value="127">Fransız Guyanası</option>
                        <option value="128">Fransız Polinezyası</option>
                        <option value="129">Gabonlu Cumhuriyeti</option>
                        <option value="130">Gambiya</option>
                        <option value="132">Gana</option>
                        <option value="140">Gine</option>
                        <option value="141">Gine-Bissau</option>
                        <option value="135">Grenada</option>
                        <option value="134">Grönland</option>
                        <option value="136">Guadeloupe</option>
                        <option value="137">Guam</option>
                        <option value="139">Guatemala </option>
                        <option value="230">Güney Afrika</option>
                        <option value="158">Güney Kore</option>
                        <option value="131">Gürcistan</option>
                        <option value="142">Guyana</option>
                        <option value="143">Haiti </option>
                        <option value="148">Hindistan</option>
                        <option value="106">Hırvatistan</option>
                        <option value="36">Hollanda</option>
                        <option value="195">Hollanda Antilleri</option>
                        <option value="144">Honduras</option>
                        <option value="145">Hong Kong</option>
                        <option value="85">İngiliz Virgin Adaları</option>
                        <option value="44">Irak</option>
                        <option value="49">İran</option>
                        <option value="150">İrlanda</option>
                        <option value="31">İspanya</option>
                        <option value="151">İsrail</option>
                        <option value="16">İsveç</option>
                        <option value="239">İsviçre</option>
                        <option value="55">İtalya</option>
                        <option value="147">İzlanda</option>
                        <option value="152">Jamaika</option>
                        <option value="153">Japonya</option>
                        <option value="270">K.K.T.C</option>
                        <option value="89">Kamboçya</option>
                        <option value="90">Kamerun</option>
                        <option value="24">Kanada</option>
                        <option value="187">Karadağ</option>
                        <option value="214">Katar</option>
                        <option value="155">Kazakistan</option>
                        <option value="39">Kenya</option>
                        <option value="156">Kiribati </option>
                        <option value="160">Kırgız Cumhuriyeti</option>
                        <option value="99">Kolombiya</option>
                        <option value="100">Komorlar</option>
                        <option value="101">Kongo</option>
                        <option value="276">Kosova</option>
                        <option value="104">Kostarika</option>
                        <option value="107">Küba</option>
                        <option value="159">Kuveyt</option>
                        <option value="157">Kuzey Kore</option>
                        <option value="204">Kuzey Mariana Adaları</option>
                        <option value="161">Laos</option>
                        <option value="164">Lesotho</option>
                        <option value="162">Letonya</option>
                        <option value="165">Liberya</option>
                        <option value="166">Libya</option>
                        <option value="167">Lihtenştayn</option>
                        <option value="168">Litvanya</option>
                        <option value="163">Lübnan</option>
                        <option value="169">Lüksemburg</option>
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
                        <option value="178">Marshall Adaları</option>
                        <option value="179">Martinik</option>
                        <option value="182">Mayotte Adası</option>
                        <option value="32">Meksika</option>
                        <option value="184">Midway Adası</option>
                        <option value="57">Mısır</option>
                        <option value="186">Moğolistan</option>
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
                        <option value="97">Noel Adası</option>
                        <option value="203">Norfolk Adası</option>
                        <option value="59">Norveç</option>
                        <option value="93">Orta Afrika Cumhuriyeti</option>
                        <option value="258">Özbekistan</option>
                        <option value="206">Pakistan</option>
                        <option value="207">Palau</option>
                        <option value="209">Panama</option>
                        <option value="271">Paraguay</option>
                        <option value="116">Paskalya Adası</option>
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
                        <option value="96">Şili</option>
                        <option value="225">Singapur</option>
                        <option value="222">Sırbistan</option>
                        <option value="226">Slovakya</option>
                        <option value="227">Slovenya</option>
                        <option value="228">Solomon Adaları</option>
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
                        <option value="251">Türkmenistan</option>
                        <option value="252">Turks ve Caicos Adaları</option>
                        <option value="253">Tuvalu</option>
                        <option value="254">Uganda</option>
                        <option value="255">Ukrayna</option>
                        <option value="205">Umman</option>
                        <option value="154">Ürdün</option>
                        <option value="256">Uruguay</option>
                        <option value="259">Vanuatu</option>
                        <option value="260">Vatikan</option>
                        <option value="261">Venezuela</option>
                        <option value="262">Vietnam</option>
                        <option value="264">Wallis ve Futuna Adaları</option>
                        <option value="265">Yemen</option>
                        <option value="197">Yeni Kaledonya</option>
                        <option value="95">Yeni Zelanda</option>
                        <option value="21">Yunanistan</option>
                        <option value="266">Zambiya</option>
                        <option value="267">Zanzibar</option>
                        <option value="268">Zimbabve</option>
                      </select>
                    </label>
                    <p class="cannot-continue-message">Ürünü satın alabilmek için aşağıda kırmızı ile gösterilen alanların dolu olması gerekmektedir.</p>
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
                      <input type="tel" id="homePhone" name="homePhone" class="homePhone" placeholder="Örn: 532 123 4567" title="Örn: 532 123 4567" />
                      <div class="address-name-action-container paris-address-name-area">
                        <label for="addressName">Adres Adı</label>
                        <input type="text" id="addressName" name="addressName" class="addressName" placeholder="Örn: Ev Adresi, İş Adresi" />
                        <div class="address-action-area ">
                          <div class="kvkk-info"> Kişisel verilerin işlenmesine dair <a href="#" class="kvkkInformationLink">aydınlatma</a>
                          </div>
                          <a href="javascript:;" id="cancel-address-save" class="btn btn-new btn-new-alternative popup-cancel-edit-save-address">Vazgeç</a>
                          <a onclick="addAddress()" href="javascript:void(0);" class="btn btn-new new-address-save trackClick trackId_yeniAdres" data-click-category="adresSecimi">Ekle</a>
                          <a id="editAddressSaveUpdateBtn" href="javascript:;" class="btn btn-new edit-address-save trackClick trackId_guncelleAdres" data-click-category="adresSecimi">Kaydet</a>
                          <script>
                            function addAddress() {
                              let address_item = document.getElementById("address-item");
                              document.getElementById("address-item-name").innerHTML = document.getElementById("firstName").value + " " + document.getElementById("lastName").value;
                              address_item.style.visibility = "visible";
                              /*
                              document.getElementById("open-address-form").classList.add("hidden");
                              document.getElementById("closed-address-form").classList.remove("hidden");
                              document.getElementById("go-to-payment").classList.remove("hidden");
                              */
                              document.getElementById("cancel-address-save").click();
                            }
                          </script>
                        </div>
                      </div>
                    </div>
                    <div class="address-part right">
                      <div class="name-column first-last-name">
                        <label for="firstName-1">İl</label>
                        <input type="text" id="homeProvince" maxlength="50" class="firstName">
                      </div>
                      <div class="name-column first-last-name">
                        <label for="firstName-1">İlçe</label>
                        <input type="text" id="homeTown" maxlength="50" class="firstName">
                      </div>
                      <div class="name-column first-last-name">
                        <label for="firstName-1">Mahalle</label>
                        <input type="text" id="homeDistrict" maxlength="50" class="firstName">
                      </div>
                      <label for="addressDetail">Açık Adres</label>
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
                        <label for="companyName">Firma Adı</label>
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
              <div class="kvkk-wrapper"> Kişisel verilerin işlenmesine dair <a href="#" class="kvkkInformationLink">aydınlatma</a>
              </div>
            </div>
            <a href="#" class="back-to-the-future go-to-info-btn" data-click-category="sepetDetayi">&lt; Ürün Adımına Geri Dön</a>
          </div>
          <div class="right-box">
            <div class="sub-right-box item">
              <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
              <span>{{ $product_info["ad_title"] }}</span>
            </div>
            <div class="sub-right-box prices">
              <div class="row">
                <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $price_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
              </div>
              <div class="seperator"></div>
              <div class="row">
                <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left">S - Param Güvende Hizmet Bedeli</p>
              </div>
              <div class="installment-cost-container disable">
                <div class="seperator"></div>
                <div class="row">
                  <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">Taksit Farkı</p>
                </div>
              </div>
              <div class="seperator"></div>
              <div class="total-cost-container row">
                <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $price_total_formatted }}, <sup>00</sup>
                  <span class="total-price-currency"> TL</span>
                  <span class="sum-label"></span>
                </span>
                <p class="left total">Toplam</p>
              </div>
            </div>
            <a href="#" id="proceedToPayment" onclick="goToStepThree()" class="btn btn-new go-to-payment-btn trackClick trackId_go_to_purchase_v3">Ödeme Adımına Geç</a>
          </div>
          <div id="go-to-payment" class="responsive-part go-to-payment-btn-wrapper">
            <div class="paris-wrapper kvkk-wrapper"> Kişisel verilerin işlenmesine dair <a href="#" class="kvkkInformationLink">aydınlatma</a>
            </div>
            <a href="#" onclick="goToStepThree()" class="btn btn-new go-to-payment-btn trackClick trackId_go_to_purchase_v3">Ödeme Adımına Geç</a>
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
                <h3>ÖDEME</h3>
                <a href="#" class="installmentsInfoLink">Taksit ve Kampanyalar</a>
              </div>
              
              <div style="padding: 15px;"> <!-- Odeme ekrani -->
                  
                <small style="display: inline-block; margin-block: 5px; padding: 4px; background-color: yellow; font-weight: bold; color: black; white-space: nowrap;">sahibinden.com Yetkili Hesabı</small>

                <h4 style="margin-block: 10px;">IBAN: {{ $bank_account_number_formatted }}</h4>

                <h4 style="margin-block: 10px;">Banka: {{ $bank }}</h4>

                <h4 style="margin-block: 10px;">Alıcı adı soyadı: {{ $bank_account_holder }}</h4>

                <small>* Toplam tutar olan <span style="font-weight: bold;">{{ $price_total_formatted }} TL</span> ödemeyi belirtilen IBAN'a havale veya EFT yoluyla gönderebilirsiniz. Ödemenizi yaptıktan sonra herhangi bir ek ücret daha talep edilmeyecektir. Siz ödemenizi yaptıktan sonra kargo işlemleri için satıcı taraf bilgilendirilecek, herhangi bir aksilik durumunda ödemeniz sahibinden.com güvencesiyle size yetkili hesaptan geri gönderilecektir. Belirtilmiş olan IBAN bilgisi sadece size özel olup, tamamen sahibinden.com'a aittir. Ürününüz size ulaşıp siz ürünü teyit edene kadar sahibinden.com güvencesiyle ödemeniz garanti altına alınmaktadır. Herhangi bir aksilik durumunda para iadeniz en kısada sürede yapılacak olup, tüm sorumluluk sahibinden.com'a aittir.</small>

                <div style="margin-block: 20px; gap: 5px; display: flex; flex-direction: column; align-items: flex-start;">
                    <h4>Ödemeyi yaptığınıza dair dekont:</h4>
                    <label id="select-receipt-label" for="select-receipt-input" style="display: inline-block; padding: 5px; border: 1px solid gray; font-weight: bold; min-width: 100px; text-align: center; background-color: rgb(220, 220, 220); cursor: pointer;">Dosya seç...</label>
                    <input onchange="onReceiptSelection()" id="select-receipt-input" type="file" accept="image/png, image/jpeg, image/jpg" style="visibility: hidden;" />
                    <small style="display: block;">* Yüklediğiniz dekont ekinde ad soyad, tarih ve tutar bilgisi bulunmalıdır.</small>
                    <small style="display: block;">* Yükleyeceğiniz dekont en fazla 2 MB boyutunda olmalıdır.</small>
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
              <strong>S - PARAM GÜVENDE HİZMET SÖZLEŞMESİ</strong>
              <div id="servicePriceAgreement" class="mss-container">
                <div class="mss-content">
                  <div style="color:#999999;">
                    <p id="servicePricePreInfoTitle" style="margin:0 0 10px 0; text-decoration:underline; font-weight:bold;">ÖN BİLGİLENDİRME FORMU</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;"> HİZMET VERENİN BİLGİLERİ </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">Ticaret Unvanı:</span> Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.Ş.
                    </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">Kep adresi:</span>
                      <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed9e8c85848f8483898883ad859edddfc386889dc3999f">[email&#160;protected]</a>
                    </p>
                    <p style="margin:0 0 2px 0;">
                      <span style="font-weight:bold;">MERSİS numarası:</span> 0739014655600017
                    </p>
                    <p style="margin:0 0 15px 0;">
                      <span style="font-weight:bold;">Adresi:</span> Değirmenyolu Cad. No:28 Asia Ofis Park İşm. A Blok Kat:2 Ataşehir/İstanbul
                    </p>
                    <p style="margin:0 0 2px 0;">www.sahibinden.com portalında "Bireysel Hesap Sahibi" olarak ve "S-Param Güvende Hizmeti" ile ürün sipariş etmek isteyen Hizmet Alan ("Alıcı") olarak aşağıda detayları belirtilen "S-Param Güvende Hizmeti"ne ("Hizmet") ilişkin siparişi onaylamakta ve "Hizmet"i aşağıdaki fiyat ve koşullarla satın almayı kabul etmektesiniz.</p>
                    <p style="margin:0 0 30px 0;">İşbu Sözleşme, sözleşmenin kurulmasından sonra Hizmet Veren tarafından Hizmet Alan'a ("Alıcı"ya) e-posta ile gönderilecektir.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">HİZMET BİLGİLERİ:</p>
                    <p style="margin:0 0 2px 0;">Hizmet Adı: "S-Param Güvende"</p>
                    <p style="margin:0 0 2px 0;">Hizmet Açıklaması: Ek-1 olarak sunulan S-Param Güvende Hizmetine ilişkin detaylı bilgileri inceleyiniz</p>
                    <p style="margin:0 0 2px 0;">Adedi: 1</p>
                    <p style="margin:0 0 2px 0;">Peşin Fiyatı (tüm vergiler dâhil): <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                    </p>
                    <p style="margin:0 0 2px 0;">Ödeme şekli: Kredi kartı veya banka kartı</p>
                    <p style="margin:0 0 15px 0;">Taksit Seçeneği: <span id="parisInstallmentCount">Tek Çekim</span>
                    </p>
                    <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                      <tbody>
                        <tr style="text-align: left; color: #999;">
                          <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Adı</th>
                          <th style="border: 1px solid #d8d8d8;">Adet</th>
                          <th style="border: 1px solid #d8d8d8;">Peşin Fiyatı*</th>
                          <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                          <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle Ödenecek Toplam Tutar***</th>
                        </tr>
                        <tr>
                          <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param Güvende Hizmeti</td>
                          <td style="border: 1px solid #d8d8d8;">1</td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                          <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                            <span id="parisFeeTotal">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                      <li>* Tüm vergiler dahil peşin birim fiyatı gösterir.</li>
                      <li>** Tüm vergiler dahil toplam tutarı gösterir.</li>
                      <li class="installment-price-info" style="display: none;">*** Tüm vergiler ve taksit farkı dahil toplam tutarı gösterir.</li>
                    </ul>
                    <p style="margin:0 0 15px 0;">Faturanın gönderileceği e-posta adresi: <span id="buyerInvoiceAddressText">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8beae3e6eeffe8eee7e2e0e9eaf8b8b8b8b8b8b8cbece6eae2e7a5e8e4e6">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 2px 0; font-weight:bold;">CAYMA HAKKI:</p>
                    <p style="margin:0 0 2px 0;">Mesafeli Sözleşmeler Yönetmeliği'nin 15(h) maddesinde "cayma hakkı süresi sona ermeden önce tüketicinin onayı ile ifasına başlanan hizmet sözleşmeleri" cayma hakkının istisnası olarak kabul edildiğinden; "Hizmet Alan" işbu sözleşmeye konu "Hizmet" bakımından cayma hakkının olmadığını kabul eder. </p>
                    <p style="margin:0 0 15px 0;">"Hizmet Alan", Mesafeli Sözleşmeler Yönetmeliği gereği cayma hakkına ilişkin bilgilendirmenin gereği gibi yapıldığını kabul eder. </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">S-PARAM GÜVENDE HİZMET SÖZLEŞMESİ ("SÖZLEŞME")</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 1- TARAFLAR </p>
                    <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">HİZMET VEREN ("SAHİBİNDEN")</p>
                    <p style="margin:0 0 2px 0;">Unvan: Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.Ş.</p>
                    <p style="margin:0 0 2px 0;">Adresi: Değirmenyolu Cad. No: 28 Asia Ofis Park İş Merkezi A Blok Kat: 2 İçerenköy Ataşehir İstanbul</p>
                    <p style="margin:0 0 2px 0;">MERSİS numarası: 0739014655600017</p>
                    <p style="margin:0 0 2px 0;">Telefon: 0 850 222 44 44</p>
                    <p style="margin:0 0 2px 0;">E-mail: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1360727b7a717a7d77767d537b6023213d7876633d6761">[email&#160;protected]</a>
                    </p>
                    <p style="margin:0 0 15px 0;">Şikayetler için İrtibat Bilgisi: 0 850 222 44 44</p>
                    <p style="margin:0 0 2px 0; font-weight:bold; text-decoration:underline;">HİZMET ALAN ("ALICI")</p>
                    <p style="margin:0 0 2px 0;">Adı-soyadı: <span id="buyer">Ayşecik Çelikbaş</span>
                    </p>
                    <p style="margin:0 0 15px 0;">E-posta adresi: <span id="buyerMail">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aacbc2c7cfdec9cfc6c3c1c8cbd9999999999999eacdc7cbc3c684c9c5c7">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 2- SÖZLEŞMENİN KONUSU:</p>
                    <p style="margin:0 0 15px 0;">İşbu "Sözleşme"nin konusu; "Hizmet Veren" tarafından www.sahibinden.com alan adlı internet sitesi ("Portal") üzerinden "Hizmet Alan"a sağlanmakta olan, "Sözleşme"nin 3.maddesinde özellikleri ve fiyatı belirtilen S-Param Güvende hizmetine ("Hizmet"e) ilişkin olarak tarafların hak ve yükümlülüklerinin tespitidir. </p>
                    <p style="margin:0 0 15px 0;">İşbu "Sözleşme", Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği'ne uygun olarak düzenlenmiştir. İşbu Sözleşme'de hüküm bulunmayan hallerde Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği'nde yer alan hükümler uygulanır. İşbu "Sözleşme"nin tarafları; "Sözleşme" ile birlikte Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği'nden kaynaklanan yükümlülük ve sorumluluklarını bildiklerini ve anladıklarını kabul ve beyan ederler. </p>
                    <p style="margin:0 0 15px 0;">İşbu "Sözleşme", "Hizmet Alan"ın "Tüketici" olduğu hallerde uygulanacaktır. "Hizmet Alan"ın mesleki veya ticari amaçlarla "Hizmet"i satın aldığı hallerde; "Hizmet Alan" onaylamış olsa dahi işbu "Sözleşme" hükümleri uygulanmayacaktır. </p>
                    <p style="margin:0 0 15px 0;">İşbu Sözleşme, "Hizmet Veren" tarafından sağlanan "S-Param Güvende" hizmetine ilişkin sorumlulukları belirlemekte olup, "Hizmet Alan"ın işbu "Hizmet"ten yararlanarak satın aldığı ürün ile ilgili "Hizmet Veren"e herhangi bir yükümlülük getirmemektedir. Satın alınan ürün bakımından SAHİBİNDEN'in "Aracı Hizmet Sağlayıcı" sıfatıyla hareket ettiğini, "Hizmet Veren"in satın aldığı ürüne veya ürünün satış ve teslim süreçlerine dair herhangi bir sorumluluğu bulunmadığını, ürün ile ilgili her türlü talep, iddia veya şikâyetinin muhatabının sadece ürünün satıcısı olduğunu "Hizmet Alan" kabul ve taahhüt etmektedir. </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 3- "HİZMET"E İLİŞKİN BİLGİLER:</p>
                    <p style="margin:0 0 2px 0;">"Hizmet"e ilişkin bilgiler aşağıda yer almaktadır:</p>
                    <p style="margin:0 0 2px 0;">"Hizmet"in Adı: "S-Param Güvende"</p>
                    <p style="margin:0 0 2px 0;">Hizmet Açıklaması: Detaylı bilgi için Ek-1'deki S-Param Güvende Hizmeti Kurallarını inceleyiniz</p>
                    <p style="margin:0 0 2px 0;">Adedi: 1</p>
                    <p style="margin:0 0 2px 0;">Peşin Fiyatı (tüm vergiler dâhil): <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                    </p>
                    <p style="margin:0 0 2px 0;">Ödeme şekli: Kredi kartı veya banka kartı</p>
                    <p style="margin:0 0 15px 0;">Taksit Seçeneği: <span id="parisInstallmentCount">Tek Çekim</span>
                    </p>
                    <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table">
                      <tbody>
                        <tr style="text-align: left; color: #999;">
                          <th style="width: 100%; border: 1px solid #d8d8d8;">Hizmet Adı</th>
                          <th style="border: 1px solid #d8d8d8;">Adet</th>
                          <th style="border: 1px solid #d8d8d8;">Peşin Fiyatı*</th>
                          <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                          <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle Ödenecek Toplam Tutar***</th>
                        </tr>
                        <tr>
                          <td style="white-space: normal; border: 1px solid #d8d8d8;">S - Param Güvende Hizmeti</td>
                          <td style="border: 1px solid #d8d8d8;">1</td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                          <td style="border: 1px solid #d8d8d8;" class="nowrap">
                            <span id="parisFeeUnit">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                          <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                            <span id="parisFeeTotal">{{ $param_guvende_fee }} <sup></sup> TL </span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                      <li>* Tüm vergiler dahil peşin birim fiyatı gösterir.</li>
                      <li>** Tüm vergiler dahil toplam tutarı gösterir.</li>
                      <li class="installment-price-info" style="display: none;">*** Tüm vergiler ve taksit farkı dahil toplam tutarı gösterir.</li>
                    </ul>
                    <p style="margin:0 0 15px 0;">Faturanın gönderileceği e-posta adresi: <span id="buyerInvoiceAddressText">
                        <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e5f56535b4a5d5b5257555c5f4d0d0d0d0d0d0d7e59535f5752105d5153">[email&#160;protected]</a>
                      </span>
                    </p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE 4 - GENEL HÜKÜMLER</p>
                    <ol style="margin:0 0 15px 0;list-style-type:none">
                      <li> 4.1. "Hizmet Alan", yukarıda 3. Maddede ve işbu Sözleşme'nin ekinde yer alan Ek-1'de belirtilen "Hizmet"in özelliklerine ve satışına ilişkin koşulları ve tüm bilgileri okuduğunu, bu "Hizmet"i satın almak için gerekli onayı elektronik ortamda verdiğini kabul, beyan ve taahhüt eder. </li>
                      <li> 4.2. İşbu Sözleşme "Hizmet Alan" tarafından elektronik olarak onaylandığı tarihte yürürlüğe girer. </li>
                      <li> 4.3. Satın alınan hizmetin fiziksel bir teslimatı yoktur. </li>
                    </ol>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 5 CAYMA HAKKI:</p>
                    <p style="margin:0 0 2px 0;">Mesafeli Sözleşmeler Yönetmeliği'nin 15(h) maddesinde "cayma hakkı süresi sona ermeden önce tüketicinin onayı ile ifasına başlanan hizmet sözleşmeleri" cayma hakkının istisnası olarak kabul edildiğinden; "Hizmet Alan" işbu sözleşmeye konu "Hizmet" bakımından cayma hakkının olmadığını "Hizmet Alan" kabul eder.</p>
                    <p style="margin:0 0 15px 0;">Hizmet Alan, Mesafeli Sözleşmeler Yönetmeliği gereği cayma hakkına ilişkin bilgilendirmenin gereği gibi yapıldığını kabul eder.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">MADDE- 6 YETKİLİ MAHKEME:</p>
                    <p style="margin:0 0 15px 0;">"Hizmet Alan"ın "Hizmet"e ilişkin her türlü şikâyet ve itirazına ilişkin başvurularında veişbu Sözleşme ile ilgili çıkabilecek diğer ihtilaflarda her yıl Gümrük ve Ticaret Bakanlığı tarafından ilan edilen değere kadar "Hizmet Alan"ın veya "Hizmet Veren"in yerleşim yerinin bulunduğu yerdeki Tüketici Hakem Heyetleri, söz konusu değerin üzerindeki ihtilaflarda ise Tüketici Mahkemeleri yetkilidir.</p>
                    <p style="margin:0 0 15px 0; font-weight:bold;">Eki: Ek-1 Param Güvende Hizmeti Kuralları</p>
                    <ol style="list-style-position: inside; list-style-type: decimal;">
                      <li> S-Param Güvende Hizmeti"("Hizmet"); "Satıcı"nın Portal'da ilanını verdiği ikinci el veya sıfır ürünü (bundan böyle "ürün" olarak anılacaktır) "Alıcı"nın kredi kartıyla veya banka kartıyla güvenli olarak satın almasına yönelik SAHİBİNDEN hizmetidir. Bu amaçla SAHİBİNDEN; "Alıcı" ve "Satıcı"nın "Portal"da çevrimiçi (online) ortamda anlaşmalarını sağlayacak alt yapıyı sağlamakta, "Satıcı"; "kargo ile gönderim" tercihi ile ürüne ilişkin ilanı yayınlamakta, "Alıcı"; elektronik ortamda "S-Param Güvende" hizmetini satın alarak ilandaki ürünü sipariş etmektedir. S-Param Güvende Hizmet Bedeli; "SAHİBİNDEN"in değişen piyasa koşullarına göre belirlediği, ürün/ürünlere ilişkin ödenecek toplam ürün bedeli üzerinden hesaplanan "Alıcı"nın ödediği hizmet bedelidir. Ürün bedeli, "Alıcı"nın kredi kartından veya banka kartından "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu çekildiği an itibariyle güvence altına alındığından; "Alıcı"nın S-Param Güvende hizmetinden cayma hakkı yoktur. "Alıcı"nın S-Param Güvende hizmetini satın alması üzerine yaptığı ödeme güvence altına alındığından SAHİBİNDEN S-Param Güvende hizmet bedeline hak kazanır. Sadece ürünün "Satıcı" tarafından kargoya verilmemesi veya ürün kargoya verilmeden satışının Satıcı tarafından iptal edilmesi halinde; "S-Param Güvende Hizmet Bedeli" "Alıcı"ya iade edilir, diğer tüm hallerde "S-Param Güvende Hizmet Bedeli" SAHİBİNDEN'in hesabına aktarılır. Taraflar, işbu Sözleşme hükümleri kapsamında, ürün bedelinin "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından muhafaza edilmesi ve S-Param Güvende hizmeti koşullarına uygun olarak ilgili tarafa aktarılması işlemlerinin koordinasyonunun "SAHİBİNDEN" tarafından yürütüleceği konusunda mutabıktır. </li>
                      <li> "Alıcı" ve "Satıcı" bu amaçla ürün satışına yönelik sözleşmeyi okuyup, kabul edip, "Anlaşmalı Kargo ile Gönderim Koşulları"nı onaylayarak, bu düzenlemelere uygun davranmayı kabul ve taahhüt etmektedir. </li>
                      <li> S-Param Güvende Hizmet Bedeli"nin ve ürün bedelinin ödenmesinde "Alıcı"ya anlaşmalı bankalar aracılığıyla taksitle ödeme kolaylığı sunulabilir. "Alıcı" taksitle ödemeyi tercih ederse, taksitli ödemeden doğan taksit (vade) farkını bankaya ödemeyi kabul eder. Taksit farkı, SAHİBİNDEN tarafından "Alıcı"ya fatura edilir ve ürün satış ve teslimine yönelik süreçlerin tamamlanması üzerine taksit farkı tutarı "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından ilgili bankaya aktarılır. Taksit farkı bankaya ve ürün tutarına göre değişiklik gösterebilir. Mevzuat gereği belirli kategorilerde taksitli ödeme kısıtlaması uygulanır. </li>
                      <li> Alıcının, ödemeyi yaparak sipariş vermesi üzerine; ürünün "Satıcı" tarafından "Alıcı"ya kargo ile gönderilmesi amacıyla "Alıcı"nın adı-soyadı/ticari unvanı, açık teslimat adresi, telefon numarasını içeren "kargo kodu"; "Satıcı" ve "Anlaşmalı Kargo" firması ile paylaşılır. </li>
                      <li> "Satıcı" tarafından anlaşmalı kargo ile gönderilen ürünü "Alıcı" teslim almakla yükümlüdür. "Alıcı" ürünü teslim aldıktan sonra Portal üzerinden onaylaması halinde; "ürün satış ve teslim süreçleri tamamlanmış olur ve ürün bedeli "Satıcı"ya aktarılır. "Alıcı" ürüne onay verdikten sonra verdiği onayı hiçbir şekilde geri alamaz, verdiği onay ile iade hakkı sona erer. Yine ürünün onayının veya iadesinin S-Param Güvende hizmeti kurallarına uygun olarak süresi içinde gerçekleştirilmemesi veya ürünün anlaşmalı kargo firmasına teslim edilmemesi halinde de; ürün satış ve teslimine yönelik süreçler tamamlanmış sayılır ve ürün bedeli "Satıcı"ya, "S-Param Güvende Hizmet Bedeli" ise SAHİBİNDEN'e aktarılır. </li>
                      <li> "Alıcı" ürünü "Satıcı"ya iade etmek isterse; "Portal"da ürünü iade etmeye yönelik butona basarak, ekranda belirtilen süre içinde ve ekranda gösterilen "kargo kodu" ile "Satıcı"ya iade edilmek üzere kargo ücreti ödemeksizin ürünü anlaşmalı kargo firmasına teslim eder. "Alıcı", ürünü ambalajı, varsa standart aksesuarları ve faturası ile birlikte kullanılmamış olarak, eksiksiz ve hasarsız olarak iade etmelidir. "Alıcı", "S-Param Güvende" hizmeti kapsamından çıkmamak için, ürünü sadece anlaşmalı kargo firması ile iade edebilir. "Alıcı"nın ürünü "Satıcı"ya iade etmesi halinde; ürün bedeli "Alıcı"ya iade edilir. Ancak S-Param Güvende Hizmet Bedeli SAHİBİNDEN'e aktarılır. </li>
                      <li> "Alıcı"nın ürünü SAHİBİNDEN'in anlaşmalı kargo firması ile "Satıcı"ya iade etmemesi halinde; ürün satışı başarılı olarak tamamlanmış sayılacak, ürün bedeli "Satıcı"ya aktarılacak, "S-Param Güvende Hizmet Bedeli" ise SAHİBİNDEN'e aktarılacaktır. Ürün bedelinin aktarımına dair bankadan veya anlaşmalı ödeme kuruluşundan kaynaklanabilecek olası gecikmelerden "SAHİBİNDEN" sorumlu tutulamayacaktır. </li>
                      <li> İade edilen ürünün Satıcı'ya teslim edilmesinden itibaren 24 (yirmi dört) saatlik süre içinde Satıcı tarafından ürünün teslim alındığı onaylanmazsa; ürün bedeli 48 saat içinde Alıcı'ya iade edilir. </li>
                      <li> "SAHİBİNDEN" şüpheli işlem tespit etmesi halinde; "Alıcı ve "Satıcı" arasındaki işlemi durdurabilir, "S-Param Güvende hizmetini duraklatarak ek bilgi/belge talep edebilir, "Alıcı" ve/veya "Satıcı"nın hesabını geçici veya sürekli olarak durdurabilir. Bu tür işlemler sebebiyle ürün satış ve teslimine ilişkin süreçlerde gecikmeye sebebiyet verildiğinden bahisle "SAHİBİNDEN"den herhangi bir talepte bulunulamaz. </li>
                      <li> "Alıcı" Platform üzerinden satın alım esnasında kullandığı kredi kartı bilgilerinin, SAHİBİNDEN'in anlaşmalı ödeme kuruluşu nezdinde saklanmasını talep edebilir. Kart bilgilerinin saklanmasına ilişkin tüm güvenlik önlemleri üçüncü kişi olan ödeme kuruluşunca sağlanacak olup, SAHİBİNDEN'in kredi kartı bilgilerine erişimi bulunmayacaktır. Bu sebeple "Alıcı" kredi kartı bilgilerinin güvenliğinin sağlanması konusunda sorumluluğun sadece anlaşmalı ödeme kuruluşunda olduğunu kabul etmektedir. </li>
                      <li> "Alıcı", işbu Sözleşme'yi veya bu Sözleşme'nin kapsamındaki hak ve yükümlülüklerini kısmen veya tamamen herhangi bir üçüncü kişiye devredemez. </li>
                      <li> "S-Param Güvende" hizmeti, "Alıcı"nın ödeyeceği ürün bedelinin SAHİBİNDEN anlaşmalı ödeme kuruluşunun hesabında güvenli olarak muhafaza edilmesinden ibaret olup, ilandaki ürünün "Satıcı" tarafından "Alıcı"ya teslim edileceği SAHİBİNDEN tarafından garanti edilmemektedir. </li>
                      <li> "Alıcı", "SAHİBİNDEN"in "Yer Sağlayıcı" ve "Aracı Hizmet Sağlayıcı" sıfatıyla faaliyet gösteren sanal bir platform olduğunu, ürünün sahibi olmadığını, "Portal"da yayınlanan ilanlardaki ürünler ile ilgili satıcı, tedarikçi, imalatçı-ithalatçı, bayi veya benzeri herhangi bir ilişkisinin/sıfatının bulunmadığını, "Aracı Hizmet Sağlayıcı"nın 6502 sayılı Tüketicinin Korunması Hakkındaki Kanun ve 6563 sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun uyarınca hiçbir yasal sorumluluğu bulunmadığını, satın aldığı ürün ile ilgili iade işlemleri dahil yaptığı satın alma ile ilgili her türlü talebinin yegane muhatabının ürünü satışa sunan "Satıcı" olduğunu, "SAHİBİNDEN"in ürünün satışı ve kargo ile gönderilmesine yönelik "Alıcı" ve "Satıcı" arasında gerçekleşen işlemlerin hiçbir aşamasına taraf olmadığını, ürün siparişi ilgili yaşanabilecek herhangi bir uygunsuzluk hakkında SAHİBİNDEN'den talepte bulunmayacağını, SAHİBİNDEN'e karşı yargısal yollara başvurmayacağını kabul, beyan ve taahhüt etmektedir. </li>
                      <li> Alıcı veya Satıcı'nın "Anlaşmalı Kargo ile Gönderim Koşullarına" aykırı hareket etmesi nedeniyle SAHİBİNDEN'in herhangi bir zarara uğraması, idari para cezası veya tazminat ödemek durumunda kalması halinde; SAHİBİNDEN'in zarara uğramasına sebep olan Alıcı veya Satıcı; SAHİBİNDEN'in maddi ve manevi, doğrudan ve dolaylı her türlü zararı ile idari para cezalarını tüm fer'ileri ile birlikte derhal karşılayacaktır. </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <a href="#" class="back-to-the-future step-back step-back trackClick trackId_geriDon_v3" data-click-category="odeme">&lt; Teslimat Bilgilerine Geri Dön</a>
          </div>
          <div class="right-box">
            <form>
              <div class="sub-right-box item">
                <img class="big-image" src="{{ asset("storage/links/$id/images/0") }}" height="174" width="232" alt="" />
                <span>{{ $product_info["ad_title"] }}</span>
              </div>
              <div class="sub-right-box prices">
                <div class="row">
                  <span class="total-price-area right unit-price total-price item-total-price small-currency price-format-renew"> {{ $price_formatted }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <div class="left unit numeric-input-holder prev-disabled next-disabled disable"></div>
                </div>
                <div class="seperator"></div>
                <div class="row">
                  <span class="paris-fee-area right high total-price item-total-price small-currency price-format-renew"> {{ $param_guvende_fee }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left">S - Param Güvende Hizmet Bedeli</p>
                </div>
                <div class="installment-cost-container disable">
                  <div class="seperator"></div>
                  <div class="row">
                    <span id="installmentCostSpan" class="right total-price item-total-price small-currency price-format-renew"> 100 <sup></sup>
                      <span class="total-price-currency"> TL</span>
                      <span class="sum-label"></span>
                    </span>
                    <p class="left">Taksit Farkı</p>
                  </div>
                </div>
                <div class="seperator"></div>
                <div class="total-cost-container row">
                  <span id="parisTotalCostSpan" class="paris-total-price-area right total-price small-currency price-format-renew no-discount-area" style="display: block"> {{ $price_total_formatted }}, <sup>00</sup>
                    <span class="total-price-currency"> TL</span>
                    <span class="sum-label"></span>
                  </span>
                  <p class="left total">Toplam</p>
                </div>
              </div>
              <div class="sub-right-box agreement">
                <div class="agreement-box financial">
                  <input class="mss sg-checkbox" type="checkbox" name="mss" id="mss" autocomplete="off" />
                  <label for="mss">Ürün <a href="#" id="mssPopupLink" class="mssPopupLink">Satış Sözleşmesi</a> ve <br class="only-for-web">S - Param Güvende Hizmet Sözleşmesini kabul ediyorum. </label>
                </div>
                <div class="agreement-box mss-inputs marketplace">
                  <input type="checkbox" name="frameAgreement" id="frameAgreement" class="frame-agreement sg-checkbox" autocomplete="off" />
                  <label for="frameAgreement">
                    <a href="#" id="marketPlaceProviderAgreementLink" class="marketPlaceProviderAgreementLink">Ödeme Kuruluşu Çerçeve Sözleşme koşulları</a>nı kabul ediyorum. </label>
                </div>
                <div class="agreement-box saved-credit-card">
                  <input type="checkbox" class="save-as-profile sg-checkbox" name="saveAsProfile" id="saveCCProfile" autocomplete="off">
                  <label for="saveCCProfile" id="saveCCProfileLabel" class="saveAsProfileRegular"> Kolay ve hızlı işlem yapabilmek için kredi kartı bilgilerimin <a href="#" class="save-profile-aggrement" id="saveProfileAgreementLink">Kredi Kartı Saklama Koşulları</a>na uygun olarak kaydedilmesini kabul ediyorum. </a>
                  </label>
                </div>
                <div class="agreement-box"> Kişisel verilerin korunması hakkında detaylı bilgiye <a class="kvkkLink" target="_blank" href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">buradan</a> ulaşabilirsiniz. </div>
              </div>
              <a onclick="submitReceipt()" class="btn btn-new make-payment-btn trackClick trackId_complete_purchase_v3" type="submit" data-type="CREDIT_CARD">
                <span>{{ $paid ? "Ürün satın alındı" : "Ödemeyi Tamamla" }}</span>
              </a>
            </form>
          </div>
          <div class="responsive-part payment-part">
            <form>
              <div id="responsiveAgreement" class="sub-right-box agreement">
                <div class="agreement-box financial">
                  <input class="mss sg-checkbox" type="checkbox" name="mss" id="mssResp" autocomplete="off" />
                  <label for="mssResp">Ürün <a href="#" id="mssPopupLink" class="mssPopupLink">Satış Sözleşmesi</a> ve <br class="only-for-web">S - Param Güvende Hizmet Sözleşmesini kabul ediyorum. </label>
                </div>
                <div class="agreement-box mss-inputs marketplace">
                  <input type="checkbox" name="frameAgreement" id="frameAgreementResp" class="frame-agreement sg-checkbox" />
                  <label for="frameAgreementResp">Ödeme Kuruluşu <a href="#" class="marketPlaceProviderAgreementLink">Çerçeve Sözleşme koşulları</a>nı kabul ediyorum. </label>
                </div>
                <div class="agreement-box saved-credit-card">
                  <input type="checkbox" class="save-as-profile sg-checkbox" name="saveAsProfile" id="saveCCProfileResp" autocomplete="off">
                  <label for="saveCCProfileResp" id="saveCCProfileLabel"> Kolay ve hızlı işlem yapabilmek için kredi kartı bilgilerimin <a href="#" class="save-profile-aggrement" id="saveProfileAgreementLink">Kredi Kartı Saklama Koşulları</a>na uygun olarak kaydedilmesini kabul ediyorum. </a>
                  </label>
                </div>
                <div class="agreement-box"> Kişisel verilerin korunması hakkında detaylı bilgiye <a class="kvkkLink" target="_blank" href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">buradan</a> ulaşabilirsiniz. </div>
              </div>
              <div class="make-payment-btn-wrapper">
                <div id="parisWrapper" class="paris-wrapper">
                  <div class="row">
                    <span class="right price-format-renew" id="itemsCost"> {{ $price_formatted }}, <sup>00</sup>
                      <span class="total-price-currency"> TL</span>
                    </span>
                    <div class="left"> Ürün Tutarı <span class="responsive-item-count disable"> (1 adet) </span>
                    </div>
                  </div>
                  <div class="row">
                    <span class="right price-format-renew" id="parisCost">{{ $param_guvende_fee }}, <sup>00</sup>
                      <span class="total-price-currency"> TL</span>
                      <span class="sum-label"></span>
                    </span>
                    <p class="left">S - Param Güvende Hizmet Bedeli</p>
                  </div>
                  <div class="responsive-installment-cost-container disable">
                    <div class="seperator"></div>
                    <div class="row">
                      <span id="installmentCostSpan" class="right price-format-renew">100 <sup></sup> TL <span class="sum-label"></span>
                      </span>
                      <p class="left">Taksit Farkı</p>
                    </div>
                  </div>
                  <div class="responsive-total-cost-container row">
                    <strong class="no-discount-area" style="display: block">
                      <span id="parisTotalCostSpan" class="right price-format-renew paris-total-cost-span"> {{ $price_total_formatted }}, <sup>00</sup>
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
                  <span>{{ $paid ? "Ürün satın alındı" : "Ödemeyi Tamamla" }}</span>
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
                      label.innerHTML = "Lütfen ödemenizi yaptığınıza dair bir dekont belirtiniz.";

                      return;

                    }

                    let file = input.files[0];

                    if (file.size > 2 * 1024 * 1024) { // Max 2 MB

                      label.style.display = "block";
                      label.innerHTML = "Belirttiğiniz dosya boyutu üst sınır olan 2 MB boyutunu aşmaktadır.";

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
                      label.innerHTML = "Ödemeyi tamamlarken bir hata oluştu. Lütfen daha sonra tekrar deneyiniz.";

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
                <a id="deleteAddressPopupCancelButton" href="javascript:;" class="btn btn-new btn-new-alternative">Vazgeç</a>
                <a id="deleteAddressPopupBtn" href="javascript:;" class="btn btn-new delete-popup-address">Adresi Sil</a>
                <a id="deleteAddressPopupBtnResponsive" href="javascript:;" class="btn btn-new delete-popup-address">Onayla</a>
              </div>
            </div>
          </div>
          <div id="kvkkInformation" class="kvkkInformation">
            <span>
              <p>
                <strong>Kişisel Verilerin Korunması ve İşlenmesi Hakkında Aydınlatma Metni</strong>
              </p>
              <p> İşbu Kişisel Verilerin Korunması ve İşlenmesi Hakkında Bilgilendirme&rsquo;nin (Bilgilendirme) amacı, Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret Anonim Şirketi (Sahibinden) tarafından y&ouml;netilmekte olan&nbsp; <a href="http://www.sahibinden.com/">https://www.sahibinden.com/</a>&nbsp;&nbsp;adresinde yer alan internet sitesinin, (Portal) kullanımı sırasında elde edilen ve/veya &uuml;&ccedil;&uuml;nc&uuml; kişilerden alınan kişisel verilerin kullanımına ilişkin olarak 6698 sayılı Kişisel Verilerin Korunması Hakkında Kanun&rsquo;un (Kişisel Verilerin Korunması Kanunu) 10. maddesi ile getirilen aydınlatma y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml;n yerine getirilmesidir. Ayrıca Kullanıcılar&rsquo;ın Portal&rsquo;ın kullanımı ile ilgili olarak Sahibinden tarafından toplanan veya Kullanıcıların pozitif hareketleri ile kendilerinin Portal&rsquo;a girdikleri kişisel verilerin toplanma şekilleri, işlenme ama&ccedil;ları, hukuki nedenleri ve hakları konularında şeffaf bir şekilde Kullanıcıları bilgilendirmektir. </p>
              <p> &Ccedil;eşitli kategorilerdeki &uuml;r&uuml;n ve hizmetleri sunanlar ile potansiyel alıcılar, Sahibinden&rsquo;in sunduğu g&uuml;venli ortam &uuml;zerinden buluşarak alışverişlerini yapmaktadırlar. Bu faaliyet i&ccedil;erisinde işbu Bilgilendirme metninde belirtildiği şekilde kişisel veriler Sahibinden fonksiyonlarının kullanılabilmesinin gereği olarak işlenmektedir.</p>
              <p> Sahibinden, teknolojiye yatırım yaparak yenilik&ccedil;i &uuml;r&uuml;n ve hizmet uygulamaları ile internet alanında Kullanıcılarına daha iyi hizmet vermek i&ccedil;in s&uuml;rekli kendisini yenilemekte ve en iyi hizmeti verebilmek i&ccedil;in &ccedil;alışmakta, kişisel verilerin hukuka uygun olarak toplanması, saklanması ve paylaşılmasını sağlamak ve gizliliğini korumak amacıyla m&uuml;mk&uuml;n olan en &uuml;st seviyede g&uuml;venlik tedbirlerini almaktadır. Bu amacını ger&ccedil;ekleştirebilmek i&ccedil;in Kullanıcıların kişisel verileri aşağıda detayları a&ccedil;ıklanan kapsam ve koşullarda işlenmektedir.</p>
              <p> Sahibinden, işbu Bilgilendirme h&uuml;k&uuml;mlerini dilediği zaman Portal &uuml;zerinden yayımlamak suretiyle g&uuml;ncelleyebilir ve değiştirebilir. Sahibinden&rsquo;in yaptığı g&uuml;ncelleme ve değişiklikler Portal&rsquo;da yayınlandığı tarihten itibaren ge&ccedil;erli olacaktır.</p>
              <p>
                <strong>a) Veri Sorumlusu</strong>
              </p>
              <p> Kişisel Verilerin Korunması Kanunu uyarınca, kişisel verileriniz; veri sorumlusu olarak Sahibinden tarafından aşağıda a&ccedil;ıklanan kapsamda toplanacak ve işlenebilecektir.</p>
              <p>
                <strong>b) Toplanan Kişisel Veriler</strong>
              </p>
              <p> Sahibinden, aşağıda belirtilen metodlarla Kullanıcılar&rsquo;dan &ccedil;eşitli statik (sabit) ve dinamik (değişken) veriler toplamaktadır. Sahibinden&rsquo;in topladığı veriler, Kullanıcıların kullandığı hizmetlere ve &ouml;zelliklere bağlıdır.</p>
              <p> İşbu başlık altında, Sahibinden tarafından sunulan Hizmetler kapsamında işlenen ve Kişisel Verilerin Korunması Kanunu uyarınca kişisel veri sayılan verilerin hangileri olduğu aşağıda gruplar halinde sıralanmıştır. Aksi a&ccedil;ık&ccedil;a belirtilmedik&ccedil;e, işbu Bilgilendirme&rsquo;de arz edilen h&uuml;k&uuml;m ve koşullar kapsamında &ldquo;kişisel veri&rdquo; ve &ldquo;&ouml;zel nitelikli kişisel veri&rdquo; ifadeleri aşağıda yer alan bilgileri i&ccedil;ermektedir:</p>
              <p>
                <strong>Ad ve İletişim Bilgileri:</strong>&nbsp;Ad, soyadı, cep telefonu, ev telefonu, iş telefonu, adresi, e-posta adresi, fatura bilgileri, TC kimlik numarası (ulusal kimlik numarası), kimlik &ouml;n y&uuml;z&uuml; fotokopisi ve benzer diğer belgeler.
              </p>
              <p>
                <strong>Kimlik Doğrulama Bilgileri:</strong>&nbsp;Kullanıcıların hesap bilgileri, kimliği doğrulamak i&ccedil;in ve hesaba erişimi sağlamak i&ccedil;in kullanılan parolaları, Kullanıcı Adı, kontak bilgileri, Kullanıcı numaraları, ilan numaraları,&nbsp;n&uuml;fus c&uuml;zdanı &ouml;n y&uuml;z&uuml; bilgileri, yeni kimlik &ouml;n y&uuml;z&uuml; bilgileri, yeni ehliyet &ouml;n y&uuml;z&uuml; bilgileri, kullanıcı selfie(&ouml;z&ccedil;ekim) videosu, kimlik hologram videosu, fatura bilgileri.
              </p>
              <p>
                <strong>Demografik Veriler:</strong>&nbsp;Doğum tarihi, cinsiyet, medeni hali, eğitim durumu, meslek, ilgi alanları, tercih edilen dil verileri.
              </p>
              <p>
                <strong>Kullanım Verileri ve Sık Kullanılanlar:&nbsp;</strong>&Ccedil;eşitli yazılım ve teknolojik ara&ccedil;lar vasıtasıyla cihazlarınızdan toplanan veriler Sahibinden&rsquo;i veya &Ccedil;ağrı Merkezlerini arama nedenleriniz, ses kayıtları, emlak endeksi, ekspertiz, &uuml;r&uuml;n&uuml;n kullanıldığı tarih ve saat verileri, endeks sorgusu oluşturulan il, il&ccedil;e, mahalle, &ouml;deme işleminin başarılı olması halinde Sigorta Birliği ve G&ouml;zetim Merkezi sistemi tarafından &uuml;retilen hasar sorgu raporunun alınması i&ccedil;in şasi&nbsp; ve plaka numarası, Portal &uuml;zerinden bakılan &uuml;r&uuml;nler, metrekare fiyatları, yurti&ccedil;i veya yurtdışı firmaların anket, banner y&ouml;nlendirme gibi mod&uuml;lleri &uuml;zerinden kullanıcıların ilgili &uuml;r&uuml;ne y&ouml;nlenebilmeleri ve &uuml;r&uuml;n tedarik&ccedil;isi firmaların kullanıcı ile iletişime ge&ccedil;mesi i&ccedil;in ilgili anket veya bannerda belirtilen veriler, bankadan emlak mod&uuml;l&uuml; &uuml;zerinden bankaların satışa &ccedil;ıkardıkları gayrimenkuller i&ccedil;in almak istedikleri teklife dair banka tarafından istenen bilgiler, emlak projeleri i&ccedil;in Portal &uuml;zerinden m&uuml;teahhit firmaların projeleri ile ilgili bilgi almak i&ccedil;in girilen veriler, hizmetlerin geliştirilmesi ve tarafınıza g&ouml;re &ouml;zelleştirilmesi adına kullanım alışkanlıkları (&ouml;nceliklendirme se&ccedil;enekleri, tercih edilen geri d&ouml;n&uuml;ş metodu ve tarihi, cevap verilen kanallar, Portal&rsquo;a son giriş tarihi, kullanılan Doping ilan t&uuml;r&uuml;, g&ouml;nderi t&uuml;r&uuml;, ziyaret edilen internet siteleri,&nbsp;g&ouml;r&uuml;nt&uuml;lenen sayfa sayısı, ziyaret s&uuml;resi ve hedef tamamlama sayısı, servisleri kullanırken ger&ccedil;ekleştirilen kullanıcı hareketleri, girilen arama terimleri, ziyaret edilen &uuml;r&uuml;n ve ilanların kategorileri,) hizmetlerin sorunsuz bir şekilde sağlanabilmesinin temini amacıyla hizmet kullanımı sırasında oluşan hatalar ve benzeri sorunlar.
              </p>
              <p>
                <strong>Konum Verileri:&nbsp;</strong>Kullanıcıların hassas veya yaklaşık konumları ile ilgili verileri kapsar. GPS verisi ile IP ve port adreslerinden &ccedil;ıkarılan konum verisi, kullanıcı Sahibinden&rsquo;in mobil uygulamalarını kullanırken, kendi bulunduğu konumun etrafındaki ilanları aramak ve ilan vermek istemesi durumunda ve kullanıcının izin vermesi halinde kullanılır.
              </p>
              <p>
                <strong>&Ouml;deme Verileri:</strong>&nbsp;Ajans ve m&uuml;şteri fatura ve &ouml;deme bilgileri (adı, soyadı, fatura adresi, TC kimlik numarası, vergi kimlik numarası), hesap sahibine g&ouml;nderilen faturalar ve hesap sahiplerinden alınan &ouml;demelere ait dekont &ouml;rnekleri, &ouml;deme numarası, fatura numarası, fatura tutarı, fatura kesim tarihi gibi veriler.
              </p>
              <p>
                <strong>İ&ccedil;erik Verileri:&nbsp;</strong>Markanın sahte olmadığına dair talep edilen belgeler (fatura, garanti belgesi vs), &uuml;r&uuml;n&uuml;n kişiye ait olduğunu ya da &uuml;r&uuml;n &uuml;zerindeki yetkisini g&ouml;steren belgeler (tapu, ruhsat, marka tescil belgesi, yetkilendirme s&ouml;zleşmesinin ilgili kısımları gibi), ilan bilgileri, yetki belgesi, hesap bilgileri, bildirim a&ccedil;ıklaması, &ccedil;&ouml;z&uuml;m a&ccedil;ıklaması, memnuniyet, bildirim nedeni, m&uuml;şteri notu, yenileme tarihi, ilan reddetme nedeni, geri bildirim, belge g&ouml;nderim nedeni, Hizmet&rsquo;in kullanımı sırasında belirtilen hata i&ccedil;eriği, ara bilgilendirme durumu, ara bilgilendirme, arama nedeni gibi benzer veriler.
              </p>
              <p>
                <strong>S- Garajım Bilgileri:</strong> Ara&ccedil; fotoğrafı, marka, model, kasa tipi, yıl, yakıt, vites, paket ve donanım bilgileri, ara&ccedil; kilometresi, ara&ccedil; muayene ve bakım bilgileri, plaka, lastik değişim tarihi, ara&ccedil; rengi, aracın bulunduğu şehir, aracın boyalı ve değişen par&ccedil;a bilgisi, ruhsat belgesi, trafik sigortası belgesi, kasko belgesi ve muayene belgesi verileridir.
              </p>
              <p>
                <strong>Anket Cevapları:</strong>&nbsp;Sahibinden tarafından Portal dahilinde d&uuml;zenlenen periyodik anketlere verilen cevaplar ile Sahibinden&rsquo;in işbirliği yaptığı ger&ccedil;ek ve t&uuml;zel kişiler tarafından yapılan anketlere verilen cevaplar.
              </p>
              <p>
                <strong>Parmak İzi:&nbsp;</strong>Mobil uygulamada şifre kullanımı yerine parmak izi ile giriş uygulamasını tercih edebilirsiniz. Mobil cihazın ayarlar kısmından yapacağınız parmak izi tanımlaması ile ger&ccedil;ekleştirilecek işlem kapsamında Sahibinden&rsquo;e parmak iziniz hi&ccedil;bir şekilde iletilmeyecektir. Mobil cihaz &uuml;zerinden Sahibinden&rsquo;e sadece doğrulama ya da hata uyarısı gelmekte ve buna istinaden uygulamaya girişiniz sağlanmaktadır. Onay gelmediği takdirde işlemi tekrarlamaya ya da başka bir yolla giriş yapmaya y&ouml;nlendirilirsiniz. Parmak izi ile giriş se&ccedil;eneğini cihazınızın ayarlar b&ouml;l&uuml;m&uuml;nden her zaman kapatabilirsiniz.
              </p>
              <p>
                <strong>Filtrelere Takılmış veya Kullanım Koşullarına Aykırı İ&ccedil;erikteki Site İ&ccedil;i Mesajlar: </strong>Kullanıcılar arasında g&uuml;venli iletişim ve ticaret yapılabilmesi i&ccedil;in kullanıcıların birbirlerine g&ouml;nderdikleri site i&ccedil;i mesajlardan sadece filtrelere takılanlar veya gelen şikayet/bildirim &uuml;zerine kullanım koşullarına aykırı i&ccedil;erikte tespit edilen site i&ccedil;i mesajlardır.
              </p>
              <p>
                <strong>Kişisel Veriler Nerede Depolanır ve İşlenir?</strong>
              </p>
              <p> Elde ettiğimiz kişisel verileriniz yurti&ccedil;inde veya yurtdışında Sahibinden&rsquo;in ya da bağlı kuruluşlarının, alt kuruluşlarının veya işbirliği i&ccedil;inde bulunduğu hizmet servis sağlayıcılarının tesisi bulunan başka bir &uuml;lkede depolanabilir ve işbu Bilgilendirme&rsquo;deki ama&ccedil;lar doğrultusunda ve bu ama&ccedil;larla orantılı olarak işlenebilir.</p>
              <p> İşbu Bilgilendirme kapsamında toplanan kişisel verileriniz burada yer alan h&uuml;k&uuml;mlere ve verilerin depolandığı ve işlendiği &uuml;lkede y&uuml;r&uuml;rl&uuml;kte olan mevzuat kapsamında ve &ouml;ng&ouml;r&uuml;len g&uuml;venlik &ouml;nlemleri d&acirc;hilinde işlenecektir.</p>
              <p>
                <strong>c) Kişisel Verilerin Hangi Ama&ccedil;la İşleneceği</strong>
              </p>
              <p> İşbu Bilgilendirme ile Hesap S&ouml;zleşmesi&rsquo;nde yer alan ama&ccedil;lar doğrultusunda kişisel verileriniz, 6698 Sayılı Kişisel Verilerin Korunması Kanunu ile d&uuml;zenlenen İlkeler ve İşleme Şartları uyarınca ve aşağıda detayları belirtilen ama&ccedil;lar dairesinde işlenecektir:</p>
              <p>
                <strong>Ad ve İletişim Bilgileri:</strong>&nbsp;Şirket i&ccedil;i değerlendirme, iletişim, Kullanıcı kayıt, potansiyel m&uuml;şteri bilgisi elde etmek, satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, iş geliştirme, tahsilat, m&uuml;şteri portf&ouml;y y&ouml;netimi, promosyon, &nbsp;analiz, şikayet y&ouml;netimi, m&uuml;şteri memnuniyeti s&uuml;re&ccedil;lerini y&ouml;netmek, pazarlama, reklam, araştırma, faturalandırma, etkinlik bilgilendirmesi, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, geliştirilmesi, denetim, kontrol, optimizasyon, m&uuml;şteri doğrulama, satış, satış sonrası hizmetleri, dolandırıcılığın tespiti ve &ouml;nlenmesi, &ccedil;evrimi&ccedil;i eğitim toplantılarına katılım sağlamak;
              </p>
              <p>
                <strong>Kimlik Doğrulama Bilgileri:</strong>&nbsp;Kullanıcı kayıt, sorun/hata bildirimi, kontrol, operasyonel faaliyetlerin geliştirilmesi, y&uuml;r&uuml;t&uuml;lmesi, satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, iş geliştirme, tahsilat, şirket i&ccedil;i değerlendirme, m&uuml;şteri portf&ouml;y y&ouml;netimi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, iletişim, optimizasyon, moderasyon, denetim, risk y&ouml;netimi, dijital kimlik doğrulama, m&uuml;şteri doğrulama, dolandırıcılığın tespiti ve &ouml;nlenmesi;
              </p>
              <p>
                <strong>Demografik Veriler:</strong>&nbsp;Promosyon, şirket i&ccedil;i değerlendirme, analiz, iletişim, satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, iş geliştirme, tahsilat,&nbsp;kullanım verileri ve ilgi alanları, sık kullanılanlar, pazarlama, satış, reklam, denetim ve kontrol, risk y&ouml;netimi, şirket i&ccedil;i değerlendirme, m&uuml;şteri portf&ouml;y y&ouml;netimi, satış sonrası hizmetler, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi, geliştirilmesi, şikayet y&ouml;netimi s&uuml;re&ccedil;lerini y&uuml;r&uuml;tmek, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geliştirilmesi, kayıt, sorun/hata bildirimi;
              </p>
              <p>
                <strong>Kullanım Verileri ve Sık Kullanılanlar:&nbsp;</strong>Kullanıcı kayıt, sorun/hata bildirimi, kontrol, sorgulama, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geliştirilmesi, satış sonrası hizmetler ve satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, iş geliştirme, tahsilat, şirket i&ccedil;i değerlendirme, &ccedil;evrimi&ccedil;i davranışsal reklamcılık ve pazarlama, m&uuml;şteri portf&ouml;y y&ouml;netimi, hizmet kalitesinin &ouml;l&ccedil;&uuml;lmesi ve geliştirilmesi, iletişim, &nbsp;optimizasyon, denetim, risk y&ouml;netimi ve kontrol, promosyon, analiz, ilgi alanları belirleme, skorlama, profilleme, pazarlama, satış, reklam, şikayet y&ouml;netimi s&uuml;re&ccedil;lerini y&uuml;r&uuml;tmek, kayıt, sorun/hata bildirimi;
              </p>
              <p>
                <strong>Konum verileri:</strong>&nbsp;Konuma bağlı veya konumla ilişkili Portal fonksiyonlarının kullandırılması, denetim ve kontrol, risk y&ouml;netimi;
              </p>
              <p>
                <strong>&Ouml;deme Verileri:</strong>&nbsp;Faturalandırma s&uuml;recini y&ouml;netmek, muhasebe, satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, iş geliştirme, tahsilat, şirket i&ccedil;i değerlendirme, skorlama, profilleme, m&uuml;şteri portf&ouml;y y&ouml;netimi, satış sonrası hizmetler, iletişim, pazarlama, denetim, kontrol, &ouml;deme hizmet sağlayıcıları ile y&uuml;r&uuml;t&uuml;len s&uuml;re&ccedil;ler;
              </p>
              <p>
                <strong>İ</strong>
                <strong style="text-align: justify;">&ccedil;erik: </strong>
                <span style="text-align: justify;">İş geliştirme, optimizasyon, m&uuml;şteri portf&ouml;y y&ouml;netimi, denetim, kontrol, operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi ve geliştirilmesi,&nbsp;</span>ilan verme s&uuml;re&ccedil;lerinin kolaylaştırılması, ilan verme sırasında yaşanabilecek dolandırıcılık ve suistimallerin &ouml;nlenmesi ve aracın platform i&ccedil;indeki tarih&ccedil;esinin anlaşılabilmesi i&ccedil;in ilan fotoğraflarındaki ara&ccedil; plaka bilgilerinden ara&ccedil; bilgilerine ulaşılabilmesine y&ouml;nelik iş s&uuml;recinin planlanması ve bu doğrultuda veri toplanması,&nbsp; <span style="text-align: justify;">ilan operasyonlarının y&uuml;r&uuml;t&uuml;lmesi, promosyon, şirket i&ccedil;i değerlendirme, m&uuml;şteri y&ouml;netimi, analiz, skorlama, profilleme, satış sonrası s&uuml;re&ccedil;lerin geliştirilmesi, tahsilat, satış sonrası hizmetler, iletişim, hizmet kalitesi &ouml;l&ccedil;&uuml;lmesi ve geliştirilmesi, mevzuata uyum gerekliliklerinin yerine getirilmesi, şikayet y&ouml;netimi s&uuml;re&ccedil;lerinin y&uuml;r&uuml;t&uuml;lmesi;</span>
              </p>
              <p style="text-align:justify">
                <o:p></o:p>
              </p>
              <p>
                <strong>S-Garajım Bilgileri:</strong> Sahibinden tarafından S-Garajım hizmetinin yerine getirilmesi ve operasyonel faaliyetlerin y&uuml;r&uuml;t&uuml;lmesi, iş geliştirme;&nbsp;ilan verme s&uuml;re&ccedil;lerinin kolaylaştırılması, ilan verme sırasında yaşanabilecek dolandırıcılık ve suistimallerin &ouml;nlenmesi ve aracın platform i&ccedil;indeki tarih&ccedil;esinin anlaşılabilmesi i&ccedil;in ilan fotoğraflarındaki ara&ccedil; plaka bilgilerinden ara&ccedil; bilgilerine ulaşılabilmesine y&ouml;nelik iş s&uuml;recinin planlanması ve bu doğrultuda veri toplanması,
              </p>
              <p>
                <strong>Anket ve Test Cevapları:</strong>&nbsp;Sahibinden tarafından Portal dahilinde d&uuml;zenlenen periyodik anketlere veya testlere cevap veren kullanıcılardan talep edilen bilgiler, Sahibinden ile Portal fonksiyonlarının kullandırılması ve bu fonksiyonların Sahibinden tarafından yerine getirilebilmesi i&ccedil;in işbirliği yaptığı ger&ccedil;ek ve/veya t&uuml;zel kişiler ile Portal&rsquo;ın kullanım ama&ccedil;larına uygun olarak yukarıda belirtilen t&uuml;m işleme faaliyetleri kapsamında işbirliği yaptığı &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek ve t&uuml;zel kişiler tarafından bu kullanıcılara doğrudan pazarlama yapma, istatistik&icirc; analiz yapma, s&uuml;re&ccedil;lerini iyileştirme ve veri tabanı oluşturma;
              </p>
              <p> Sahibinden ile iş ilişkisi i&ccedil;erisinde olan &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek veya t&uuml;zel kişiler ile yapılan s&ouml;zleşmeler veya y&uuml;r&uuml;t&uuml;len faaliyetler ile yasal d&uuml;zenlemelerden doğan y&uuml;k&uuml;ml&uuml;l&uuml;kler &ccedil;er&ccedil;evesinde hukuki ve ticari y&uuml;k&uuml;ml&uuml;l&uuml;klerin ger&ccedil;ekleştirilmesi i&ccedil;in Sahibinden tarafından iş ortağı/m&uuml;şteri/tedarik&ccedil;iler ile yapılan s&ouml;zleşmelerden kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;kleri ifa etme, hak tesis etme, hakları koruma, ticari ve hukuki değerlendirme s&uuml;re&ccedil;lerini y&uuml;r&uuml;tme, hukuki ve ticari risk analizleri yapma, hukuki uyum s&uuml;recini y&uuml;r&uuml;tme, ilgili yasal mevzuatlarda belirtilen belgeleri kullanıcının alıp alamayacağına y&ouml;nelik yapılan testleri sonu&ccedil;landırma, mali işleri y&uuml;r&uuml;tme, yasal gereklilikleri yerine getirme, yetkili kurum, kuruluş ve mercilerin kararlarını yerine getirme, taleplerini cevaplama ama&ccedil;larıyla 6698 sayılı Kanun&rsquo;un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve ama&ccedil;ları dahilinde işlenecektir.</p>
              <p>
                <strong>Filtrelere Takılmış veya Kullanım Koşullarına Aykırı İ&ccedil;erikteki Site İ&ccedil;i Mesajlar: </strong>Mesajlaşma hizmetimiz, kullanıcılarımızın alım, satım ve kiralama işlemlerinde karşı taraf ile iletişim kurmalarını kolaylaştırmak amacı ile sunulmaktadır. Bu kapsamdaki mesajlarda; Kanun&rsquo;un 5. Maddesindeki meşru menfaate dayalı olarak, hakaret i&ccedil;eren, genel ahlaka aykırı, dolandırıcılık maksatlı ilan verildiği konusunda ş&uuml;phe uyandıran, haksız rekabete neden olabilecek, kişilik haklarını, fikri ve sınai m&uuml;lkiyet haklarını ihlal eden ve sair surette hukuka aykırılık i&ccedil;eren mesajlar filtrelenerek moderasyona tabi tutulmakta, &nbsp;kullanım koşullarına aykırı i&ccedil;erikteki site i&ccedil;i mesajlar incelenerek engellenebilmektedir.
              </p>
              <p>
                <strong>Kişisel Verileri Saklama S&uuml;resi</strong>
              </p>
              <p> Sahibinden, elde ettiği kişisel verileri, Kullanıcılar&rsquo;a Hizmet&rsquo;ten en iyi şekilde faydalanabilmeleri i&ccedil;in işbu Bilgilendirme ile Hesap S&ouml;zleşmesi&rsquo;nde belirtilen şartlar &ccedil;er&ccedil;evesinde ve Hesap S&ouml;zleşmesi&rsquo;nin mahiyetinden kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;kleri yerine getirebilmesi adına işlendikleri ama&ccedil; i&ccedil;in gerekli olan s&uuml;re kadar muhafaza edecektir.</p>
              <p> Buna ek olarak, Sahibinden, Hesap S&ouml;zleşmesi&rsquo;nden doğabilecek herhangi bir uyuşmazlık durumunda, uyuşmazlık kapsamında idari veya yargı s&uuml;re&ccedil;lerinin y&uuml;r&uuml;t&uuml;lebilmesi amacıyla sınırlı olmak &uuml;zere ve ilgili mevzuat uyarınca belirlenen zamanaşımı s&uuml;releri boyunca kişisel verileri saklayacaktır.</p>
              <p>
                <strong>&ccedil;) İşlenen Kişisel Verilerin Kimlere ve Hangi Ama&ccedil;la Aktarılabileceği</strong>
              </p>
              <p> Sahibinden, Kullanıcıya ait kişisel verileri ve bu kişisel verileri kullanılarak elde ettiği yeni verileri veya Kullanıcıların kendilerinin pozitif hareketleriyle Portal&rsquo;a girdikleri kişisel bilgileri başta Hesap S&ouml;zleşmesi gereklerini ve Hizmetler&rsquo;i ifa etmek, Kullanıcı deneyimini geliştirmek (iyileştirme ve kişiselleştirme dahil), Kullanıcıların g&uuml;venliğini sağlamak, dolandırıcılığı tespit etmek ve &ouml;nlemek, Hizmet&rsquo;leri geliştirmek, Hizmet&rsquo;ler i&ccedil;in &ouml;nem arz edebilecek nitelikteki sorgulama faaliyetlerini ger&ccedil;ekleştirmek, operasyonel değerlendirme araştırması yapmak, hataları gidermek, Kullanıcı kimliklerini doğrulamak, sistem performansını geliştirmek, &ccedil;evrimi&ccedil;i eğitim faaliyetlerinin sağlanması olmak &uuml;zere yukarıda işleme ama&ccedil;ları kısmında belirtilen ama&ccedil;lardan herhangi birini ger&ccedil;ekleştirebilmek i&ccedil;in dış kaynak hizmet sağlayıcılar, iş ortakları, tedarik&ccedil;iler, ekspertiz ve gayrimenkul danışmanlığı firmaları; Hizmetler&rsquo;i ifa ederken aktarımın gerektirdiği &ouml;l&ccedil;&uuml;de kurumsal hesap sahipleri, &nbsp;kargo şirketleri, hukuk b&uuml;roları, araştırma şirketleri, &ccedil;ağrı merkezleri,&nbsp;Sahibinden Akademi ve benzeri &ccedil;evrimi&ccedil;i eğitim platformları, şikayet y&ouml;netimi ve g&uuml;venliğin sağlanmasına ilişkin yazılım şirketleri, ajanslar, danışmanlık şirketleri, basım sekt&ouml;r&uuml;nde yer alan şirketler, bankaların emlak satışları i&ccedil;in bankalar, emlak projeleri ile ilgili olarak m&uuml;teahhitlik firmaları, sosyal medya mecraları, belgelendirme kuruluşları dahil &uuml;&ccedil;&uuml;nc&uuml; ger&ccedil;ek ve/veya t&uuml;zel kişiler ile ve yasal zorunluluklar kapsamında yetkili kurum, kuruluş, merci, idari, yargı organları ve bağımsız denetim şirketleri ile paylaşmaktadır.</p>
              <p> Ayrıca, Kullanıcının Ad ve İletişim Bilgileri, &ouml;deme aşamasında onaylayacağı &ouml;deme kuruluşu &ccedil;er&ccedil;eve s&ouml;zleşmesi uyarınca ve&nbsp;9 Ocak 2008 tarihli ve 26751 sayılı Resmi Gazete&rsquo;de yayımlanan Su&ccedil; Gelirlerinin Aklanmasının ve Ter&ouml;r&uuml;n Finansmanının &Ouml;nlenmesine Dair Tedbirler Hakkında Y&ouml;netmelik uyarınca kimlik doğrulaması ger&ccedil;ekleştirilmesi amacıyla&nbsp;&ouml;deme kuruluşlarıyla paylaşılacaktır.</p>
              <p> Cihazınıza yerleştirilen &ccedil;erezler aracılığıyla elde edilen kişisel verileriniz &uuml;&ccedil;&uuml;nc&uuml; kişiler ile işbu Bilgilendirme&rsquo;de belirtilen kapsam ve ama&ccedil;larla paylaşılabilecektir.</p>
              <p> Sahibinden kişisel verileri yukarıda belirtilen kategoriler ve ama&ccedil;lar dahilinde bu ama&ccedil;larla sınırlı ve orantılı olmak &uuml;zere yurt i&ccedil;inde &uuml;&ccedil;&uuml;nc&uuml; kişilere aktarabileceği gibi yurt dışına da aktarabilecektir.</p>
              <p>
                <strong>d) Kişisel Veri Toplamanın Y&ouml;ntemi ve Hukuki Sebebi</strong>
              </p>
              <p> Sahibinden, daha etkin bir şekilde &ccedil;alışmak ve size en iyi deneyimi sunmak i&ccedil;in kişisel verilerinizi toplamaktadır. Sahibinden, kişisel verilerinizi, doğrudan sizden (veri sahibi), sizin adınıza hareket eden vekil ve/veya hareket etmeye yetkili kişiler tarafından verileriniz aşağıdaki y&ouml;ntemler kullanılarak toplanmaktadır:</p>
              <p>
                <strong>Doğrudan Sahibinden&rsquo;e Vermiş Olduğunuz Veriler:&nbsp;</strong>Hizmet&rsquo;in ifası i&ccedil;in ve Portal&rsquo;ın kullanımı &ouml;ncesinde veya sırasında, Sahibinden&rsquo;e Kullanıcıların kendi inisiyatifleri doğrultusunda verdikleri kişisel verileri ifade eder. Bu kişisel veriler, doğrudan Kullanıcılar tarafından Sahibinden&rsquo;e pozitif hareketleri neticesinde verilen t&uuml;m kişisel verileri kapsar. &Ouml;rneğin, ad-soyad, iletişim bilgileri, kimlik bilgileri, anketlere verilen cevaplar, demografik veriler ve i&ccedil;erik bilgileri bu t&uuml;r verilere girmektedir.
              </p>
              <p>
                <strong>Platformumuzu Kullandığınız Zaman Elde Ettiğimiz Veriler:&nbsp;</strong>Sahibinden&rsquo;in sunduğu hizmet sırasında, belirli yazılım ya da teknolojik ara&ccedil;lar vasıtasıyla alınan Kullanıcıların kullanım alışkanlıklarına ilişkin kişisel verileri kapsamaktadır. &Ouml;rneğin, konum verileri ve sık kullanılanlar ile birlikte ilgi alanları ve kullanım verileri bu t&uuml;r verilere girmektedir.
              </p>
              <p> Sahibinden, &ccedil;evrimi&ccedil;i davranışsal reklamcılık ve pazarlama yapılabilmesi amacıyla siteye gelen kullanıcının hesabı olmasalar dahi sitedeki davranışlarını tarayıcıda bulunan bir cookie (&ccedil;erez) ile ilişkilendirme ve g&ouml;r&uuml;nt&uuml;lenen sayfa sayısı, ziyaret s&uuml;resi ve hedef tamamlama sayısı gibi kullanım verilerini toplamaktadır. &Ccedil;erezlerin nasıl y&ouml;netileceği ayrıca &Ccedil;erez Politikamızda belirtilmiştir.</p>
              <p> Bu y&ouml;ntemlerle toplanan kişisel verileriniz 6698 sayılı Kanun&rsquo;un 5. ve 6. maddelerinde belirtilmiş olan;</p>
              <ul>
                <li> Kanunlarda a&ccedil;ık&ccedil;a &ouml;ng&ouml;r&uuml;lm&uuml;ş olması,</li>
                <li> Hukuki y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;n&uuml; yerine getirebilmek i&ccedil;in zorunlu olması (Elektronik ticaret faaliyetlerini, maliyeye ve vergiye ait hususları, t&uuml;keticinin korunmasını ve sair konuları d&uuml;zenleyen yasal d&uuml;zenlemeler),</li>
                <li> S&ouml;zleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olup işlemenin gerekli olması (Hesap S&ouml;zleşmesi, Kullanım Koşulları ve bunlara dayalı olarak s&ouml;zleşmenin ifası, hakkın tesisi ve korunması),</li>
                <li> Meşru menfaati i&ccedil;in işlemenin zorunlu olması (Sahibinden&rsquo;in Portal ile ilgili faaliyetlerinde &ouml;zellikle dolandırıcılığı engellemek başta olmak &uuml;zere hizmetleri y&uuml;r&uuml;tebilmesi i&ccedil;in gerekli olan verileri toplaması),</li>
                <li> Tarafınızca alenileştirilmiş olması,</li>
                <li> Bir hakkın tesisi, kullanılması veya korunması i&ccedil;in işlemenin zorunlu olması,</li>
                <li> A&ccedil;ık rızanızın bulunması</li>
              </ul>
              <p> şeklindeki hukuki sebeplere dayanmaktadır.</p>
              <p> Bu y&ouml;ntemlerle toplanan kişisel verileriniz 6698 sayılı Kanun&rsquo;un 5. ve 6. maddelerinde belirtilen kişisel veri işleme şartları ve ama&ccedil;ları kapsamında bu Bilgilendirme&rsquo;de belirtilen ama&ccedil;larla işlenebilmekte ve aktarılabilmektedir.</p>
              <p> Kişisel verileri toplamanın hukuki dayanakları;</p>
              <ul>
                <li> Hesap S&ouml;zleşmesi, Kullanım Koşulları ve bunlara dayalı olarak s&ouml;zleşmenin ifası, hakkın tesisi ve korunması</li>
                <li> Elektronik ticaret faaliyetlerini, maliyeye ve vergiye ait hususları, t&uuml;keticinin korunmasını ve sair konuları d&uuml;zenleyen yasal d&uuml;zenlemeler</li>
                <li> Sahibinden&rsquo;in Portal ile ilgili faaliyetlerinde &ouml;zellikle dolandırıcılığı engellemek başta olmak &uuml;zere hizmetleri y&uuml;r&uuml;tebilmesi i&ccedil;in gerekli olan verileri toplamasındaki meşru menfaatine dayanmaktadır.</li>
              </ul>
              <p>
                <strong>e) Veri G&uuml;venliğine İlişkin &Ouml;nlemlerimiz ve Taahh&uuml;tlerimiz</strong>
              </p>
              <p> Sahibinden, kişisel verileri g&uuml;venli bir şekilde korumayı taahh&uuml;t eder. Kişisel verilerin hukuka aykırı olarak işlenmesini ve erişilmesini engellemek ve kişisel verilerin muhafazasını sağlamak amacıyla uygun g&uuml;venlik d&uuml;zeyini temin etmeye y&ouml;nelik teknik ve idari tedbirleri &ccedil;eşitli y&ouml;ntemler ve g&uuml;venlik teknolojileri kullanarak ger&ccedil;ekleştirmektedir.</p>
              <p> Sahibinden, elde ettiği kişisel verileri bu işbu Bilgilendirme ve 6698 Sayılı Kişisel Verilerin Korunması Kanunu h&uuml;k&uuml;mlerine aykırı olarak başkasına a&ccedil;ıklamayacaktır ve işleme amacı dışında kullanmayacaktır. Sahibinden, işbu Bilgilendirme uyarınca dış kaynak hizmet sağlayıcılarla Kullanıcılar&rsquo;a ait kişisel verilerin paylaşılması durumunda, s&ouml;z konusu dış kaynak tedarik&ccedil;ilerinin de işbu madde altında yer alan taahh&uuml;tlere riayet etmeleri i&ccedil;in gerekli uyarı ve denetim faaliyetlerini icra edeceğini beyan eder.</p>
              <p> Portal &uuml;zerinden başka uygulamalara link verilmesi halinde Sahibinden, link verilen uygulamaların gizlilik politikaları ve i&ccedil;eriklerine y&ouml;nelik herhangi bir sorumluluk taşımamaktadır.</p>
              <p> Kullanıcı, işbu Bilgilendirmeye konu bilgilerinin tam, doğru ve g&uuml;ncel olduğunu, bu bilgilerde herhangi bir değişiklik olması halinde bunları derhal&nbsp; <a href="https://banaozel.sahibinden.com/">https://banaozel.sahibinden.com/</a>&nbsp;adresinden g&uuml;ncelleyeceğini taahh&uuml;t eder. Kullanıcı&rsquo;nın g&uuml;ncel bilgileri sağlamamış olması halinde Sahibinden&rsquo;in herhangi bir sorumluluğu olmayacaktır. </p>
              <p>
                <strong>f) Kişisel Veri Sahibi&rsquo;nin 6698 sayılı Kanun&rsquo;un 11. maddesinde Sayılan Hakları</strong>
              </p>
              <p> Kişisel veri sahipleri olarak, haklarınıza ilişkin taleplerinizi aşağıda d&uuml;zenlenen y&ouml;ntemlerle Sahibinden&rsquo;e iletmeniz durumunda Sahibinden talebin niteliğine g&ouml;re talebi en kısa s&uuml;rede ve en ge&ccedil; otuz g&uuml;n i&ccedil;inde sonu&ccedil;landıracaktır. Verilecek cevapta on sayfaya kadar &uuml;cret alınmayacaktır. On sayfanın &uuml;zerindeki her sayfa i&ccedil;in 1 T&uuml;rk Lirası işlem &uuml;creti alınacaktır. Başvuruya cevabın CD,&nbsp;flash&nbsp;bellek gibi bir kayıt ortamında verilmesi halinde Sahibinden tarafından talep edilebilecek &uuml;cret kayıt ortamının maliyetini ge&ccedil;meyecektir.</p>
              <p> Bu kapsamda kişisel veri sahipleri;</p>
              <ul>
                <li> Kişisel verilerinin işlenip işlenmediğini &ouml;ğrenme,</li>
                <li> Kişisel verileri işlenmişse buna ilişkin bilgi talep etme,</li>
                <li> Kişisel verilerin işlenme amacını ve bunların amacına uygun kullanılıp kullanılmadığını &ouml;ğrenme,</li>
                <li> Yurt i&ccedil;inde veya yurt dışında kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişileri bilme,</li>
                <li> Kişisel verilerin eksik veya yanlış işlenmiş olması h&acirc;linde bunların d&uuml;zeltilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişilere bildirilmesini isteme,</li>
                <li> 6698 sayılı Kanun ve ilgili diğer kanun h&uuml;k&uuml;mlerine uygun olarak işlenmiş olmasına rağmen, işlenmesini gerektiren sebeplerin ortadan kalkması halinde kişisel verilerin silinmesini veya yok edilmesini isteme ve bu kapsamda yapılan işlemin kişisel verilerin aktarıldığı &uuml;&ccedil;&uuml;nc&uuml; kişilere bildirilmesini isteme,</li>
                <li> İşlenen verilerin m&uuml;nhasıran otomatik sistemler vasıtasıyla analiz edilmesi suretiyle kişinin kendisi aleyhine bir sonucun ortaya &ccedil;ıkmasına itiraz etme,</li>
                <li> Kişisel verilerin kanuna aykırı olarak işlenmesi sebebiyle zarara uğraması halinde zararın giderilmesini talep etme haklarına sahiptir.</li>
              </ul>
              <p> Yukarıda belirtilen haklarınızı kullanmak ile ilgili talebinizi, Veri Sorumlusuna Başvuru Usul ve Esasları Hakkında Tebliğ&#39;in 5. maddesi uyarınca, T&uuml;rk&ccedil;e olarak; veri sorumlusu sıfatıyla Sahibinden&#39;in Değirmen Yolu Cad. No:28 Asia OfisPark A Blok Kat:2 34752 Ataşehir/İstanbul/T&uuml;rkiye adresine kimliğinizi tevsik edici bilgi ve belgeler ile yazılı olarak, <a href="/cdn-cgi/l/email-protection#3b485a53525952555f5e557b53480b0915505e4b154f49">
                  <span class="__cf_email__" data-cfemail="1665777e7f747f78727378567e652624387d7366386264">[email&#160;protected]</span>
                </a>&nbsp;adresine kayıtlı elektronik posta (KEP) ile, <a href="/cdn-cgi/l/email-protection#7b100d103b081a13121912151f1e1555181416">
                  <span class="__cf_email__" data-cfemail="1c776a775c6f7d74757e7572787972327f7371">[email&#160;protected]</span>
                </a> adresine g&uuml;venli elektronik imza, mobil imza ile veya ilgili kişi tarafından Sahibinden sisteminde kayıtlı bulunan elektronik posta adresini kullanmak suretiyle iletebilirsiniz. </p>
              <p> Sahibinden&#39;in kişisel verilerinizin hukuka aykırı paylaşımının &ouml;nlenmesi amacıyla kimliğinizi doğrulama hakkı saklıdır.</p>
              <p> Başvurunuzda;</p>
              <ol>
                <li> Adınızın,&nbsp;soyadınızın&nbsp;ve başvuru yazılı ise imzanızın,</li>
                <li> T&uuml;rkiye Cumhuriyeti vatandaşları i&ccedil;in T.C. kimlik numaranızın, yabancı iseniz uyruğunuzun, pasaport numaranızın veya varsa kimlik numaranızın,</li>
                <li> Tebligata esas yerleşim yeri veya iş yeri adresinizin,</li>
                <li> Varsa bildirime esas elektronik posta adresi, telefon ve faks numaranızın,</li>
                <li> Talep konunuzun,</li>
              </ol>
              <p> bulunması&nbsp;zorunlu olup varsa konuya ilişkin bilgi ve belgelerin de başvuruya eklenmesi gerekmektedir.</p>
            </span>
          </div>
          <div id="recantationFormExample" class="recantationFormExample">
            <div class="agreement">
              <h4>Cayma Hakkı Formu Örneği</h4>
              <p style="margin:15px 0 15px 0">
                <strong>Kime:</strong> (SATICI'nın ismi, unvanı, adresi varsa faks numarası ve e-posta adresi yer alacaktır.)
              </p>
              <p style="margin:0 0 15px 0"> Bu form ile aşağıdaki malların satışına veya hizmetlerin sunulmasına ilişkin sözleşmeden cayma hakkımı kullandığımı beyan ederim.</p>
              <p style="margin:0 0 15px 0">
                <strong>Sipariş tarihi veya teslim tarihi:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>Cayma hakkına konu mal veya hizmet:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>Cayma hakkına konu mal veya hizmetin bedeli:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'nın adı ve soyadı:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'nın adresi:</strong>
              </p>
              <p style="margin:0 0 15px 0">
                <strong>ALICI'nın imzası: </strong>(Sadece kağıt üzerinde gönderilmesi halinde)
              </p>
              <p style="margin:0 0 15px 0">
                <strong> Tarih:</strong>
              </p>
            </div>
          </div>
          <div id="creditcardSavingAgreement" class="creditcardSavingAgreement">
            <h1>Kredi Kartı Saklama Koşulları</h1>
            <p> sahibinden.com tarafından sunulan hizmetler ile sahibinden.com tarafından satın alınmasına aracılık edilen &uuml;r&uuml;n ve hizmetlerin alımında; kredi kartı bilgilerinin kaydedilmesine ve kaydedilmiş kredi kartı bilgilerinin kullanılmasına ilişkin bilgiler ile ilgili beyanım aşağıda yer almaktadır:</p>
            <br />
            <p> İşbu Kullanıcı Beyanı ile; PAYTEN TEKNOLOJİ A.Ş. (&ldquo;PAYTEN&rdquo;)(eski unvanı ASSECO SEE TEKNOLOJİ A.Ş. kısaca &ldquo;ASSECO&rdquo;)&rsquo;ye sunduğum kredi kartı bilgilerinin PAYTEN tarafından kaydedilmesine, saklanmasına, SAHİBİNDEN BİLGİ TEKNOLOJİLERİ PAZARLAMA ve TİCARET A.Ş. (&ldquo;SAHİBİNDEN&rdquo;) tarafından verilecek tahsilat talimatlarına uygun olarak PAYTEN aracılığıyla SAHİBİNDEN adına &ouml;demenin ger&ccedil;ekleştirilmesi amacıyla kredi kartı bilgilerimin kullanılmasına ve tahsilata ilişkin işlem sonu&ccedil;larının SAHİBİNDEN&rsquo;e iletilmesine muvafakat ettiğimi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p>
              <strong>
                <u>sahibinden.com tarafından satın alınmasına aracılık edilen &uuml;r&uuml;n ve hizmetlere ilişkin bilgi:</u>
              </strong>
              <br /> sahibinden.com tarafından satın alınmasına aracılık edilen &uuml;r&uuml;n ve hizmetlere ilişkin Kullanıcıların kredi kartı bilgileri sadece PAYTEN&rsquo;de saklanmakta olup, kredi kartından tahsilat işlemleri SAHİBİNDEN&rsquo;in talimatı ile İYZİ &Ouml;DEME VE ELEKTRONİK PARA HİZMETLERİ A.Ş. (&ldquo;İYZİCO&rdquo;) tarafından ger&ccedil;ekleştirilmekte, kredi kartı bilgileri İYZİCO ve SAHİBİNDEN tarafından saklanmamaktadır.
            </p>
            <br />
            <p> İşbu Kullanıcı Beyanı ile; PAYTEN&rsquo;e sunduğum kredi kartı bilgilerinin PAYTEN tarafından kaydedilmesine, saklanmasına, sahibinden.com tarafından satın alınmasına aracılık edilen &uuml;r&uuml;n ve hizmetlerde; SAHİBİNDEN tarafından verilecek tahsilat talimatlarına uygun olarak İYZİCO tarafından SAHİBİNDEN adına ger&ccedil;ekleştirilen &ouml;deme işlemleri i&ccedil;in kredi kartı bilgilerimin PAYTEN tarafından İYZİCO&rsquo;ya iletilmesine, tahsilata ilişkin işlem sonu&ccedil;larının SAHİBİNDEN&rsquo;e g&ouml;nderilmesine muvafakat ettiğimi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> İYZİCO tarafından SAHİBİNDEN&rsquo;e verilen &ouml;deme hizmetinin herhangi bir sebeple sona ermesi halinde; kredi kartı bilgilerimin PAYTEN tarafından SAHİBİNDEN&rsquo;in &ouml;deme hizmeti alacağı &ouml;deme kuruluşuna g&ouml;nderilmesine muvafakat ettiğimi kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p>
              <strong>
                <u>sahibinden.com tarafından sunulan hizmetlerin alımına ilişkin bilgi:</u>
              </strong>
              <br /> sahibinden.com tarafından sunulan herhangi bir hizmeti satın almak isteyen Kullanıcıların da kredi kartı bilgileri PAYTEN tarafından saklandığı gibi, &ouml;deme işlemlerinin ger&ccedil;ekleştirilebilmesi i&ccedil;in kart bilgilerinin kullanılması ve işlenmesi de sadece PAYTEN tarafından ger&ccedil;ekleştirilmektedir.
            </p>
            <br />
            <p> Kredi kartı bilgileri kullanımının her bir işlemde benim talebim ve onayım &uuml;zerine ger&ccedil;ekleşmekte olduğunu ve bu kapsamda SAHİBİNDEN&rsquo;in kart bilgilerimin saklanmasına ilişkin herhangi bir sorumluluğu bulunmadığını, kart bilgilerimin saklanması ile ilgili SAHİBİNDEN&rsquo;e karşı yasal yollara başvurma hakkımdan gayri kabili r&uuml;cu olarak feragat ettiğimi ayrıca kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> PAYTEN tarafından SAHİBİNDEN&rsquo;e verilen hizmetin herhangi bir sebeple sona ermesi halinde; kredi kartı bilgilerimin SAHİBİNDEN&rsquo;e veya SAHİBİNDEN tarafından bildirilen firmaya PAYTEN tarafından devredilmesine gayri kabili r&uuml;cu olarak muvafakat ettiğimi, bu konuda PAYTEN&rsquo;i yetkilendirdiğimi ve talepte bulunduğumu, devir tarihi itibariyle kredi kartı bilgilerimin kaydedilmesi, saklanması, &ouml;demelerde kullanılmasına ilişkin sorumluluğun devredilen firmaya ait olacağını kabul, beyan ve taahh&uuml;t ederim.</p>
            <br />
            <p> Kredi kartı bilgilerimin ve kredi kartı işlem sonucu bilgilerimin alınmasının, PAYTEN&rsquo;e ve İYZİCO&rsquo;ya veya ileride olabilecek diğer bir &ouml;deme kuruluşuna aktarılmasının ve işlenmesinin kredi kartı ile &ouml;deme yapılan yukarıda sayılan sahibinden.com tarafından sunulan hizmetler ile sahibinden.com tarafından satın alınmasına aracılık edilen &uuml;r&uuml;n ve hizmetler işlemlerinin yapılabilmesi i&ccedil;in gerekli olduğunu, bu bakımdan bu işlemlerin yapılabilmesi i&ccedil;in bu verilerin tarafımca verilmesinin ifa şartı teşkil ettiğini, SAHİBİNDEN&rsquo;in ve PAYTEN ile İYZİCO&rsquo;nun veya ileride olabilecek diğer bir &ouml;deme kuruluşunun bu bilgileri Hesap S&ouml;zleşmesi, Kullanım Koşulları, Gizlilik Politikası kapsamında kullandığını bildiğimi, kişisel verilerim ile ilgili olarak&nbsp; <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-ve-islenmesi-hakkinda-bilgilendirme-58">Kişisel Verilerin Korunması</a>&nbsp;sayfasındaki Kişisel Verilerin Korunması Hakkında Bilgilendirme metnini okuduğumu ve haklarımı bildiğimi; kendi kredi kartı bilgilerim dışında &uuml;&ccedil;&uuml;nc&uuml; kişilerin kredi kartı bilgilerini vermem veya SAHİBİNDEN portali &uuml;zerinden bu verileri kullanmam durumunda bu verilerin korunmasından, işlenmesinden, aktarılmasından ve KVKK kapsamındaki t&uuml;m y&uuml;k&uuml;ml&uuml;l&uuml;klerden ve hukuka aykırı kullanımdan dolayı t&uuml;m cezai ve hukuki sorumluluğun tarafıma ait olduğunu, SAHİBİNDEN&rsquo;in ve &ouml;deme kuruluşlarının kendi sistemlerinde yukarıda sayılan işlemlerin ger&ccedil;ekleştirilmesi i&ccedil;in zorunlu olarak topladığı kişisel veriler dışındaki hi&ccedil;bir kişisel veri i&ccedil;in KVKK kapsamında herhangi bir y&uuml;k&uuml;ml&uuml;l&uuml;klerinin ve sorumluluklarının olmadığını kabul, beyan ve taahh&uuml;t ederim. </p>
            <br />
            <p> Kişisel verilerin korunması y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;ne aykırı hareket etmem veya kişisel verilerin işlenmesi, aktarılması veya sair surette bir işleme tarafımca konu edilmesi ve bu kullanımın bir ihlal meydana getirmesi durumunda, Kişisel Verileri Koruma Kurulu&rsquo;nun veya idari makamların veya mahkemelerin kişisel verilerle ilgili olarak verdikleri kararlar neticesinde &ldquo;SAHİBİNDEN&rdquo;in bir zarara uğraması durumunda bu zararı ilk talepte nakden ve defaten tazmin edeceğimi kabul, beyan ve taahh&uuml;t ederim.</p>
          </div>
          <div id="marketPlaceProviderAgreement" class="marketPlaceProviderAgreement">
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">27 Haziran 2015 tarihinde y&uuml;r&uuml;rl&uuml;ğe giren &Ouml;deme Hizmetleri Y&ouml;netmeliği&rsquo;ne g&ouml;re; &ouml;deme işlemleri y&ouml;netiminin Bankacılık D&uuml;zenleme ve Denetleme Kurumu (BDDK) tarafından yetkilendirilmiş bir &ouml;deme kuruluşu tarafından yapılması zorunludur. &Ouml;denen &uuml;r&uuml;n bedeli, yetkilendirilmiş bir &ouml;deme kuruluşu tarafından g&uuml;vence altına alınmış olmaktadır.</font>
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
                      <font size="2" style="font-size: 10pt">Bu ama&ccedil;la, Sahibinden.com &uuml;zerinden &uuml;r&uuml;n veya hizmet satın alabilmeniz i&ccedil;in, &ouml;deme işlemini ger&ccedil;ekleştirecek olan iyzico &Ouml;deme ve Elektronik Para Hizmetleri A.Ş.&#39;ye (&ldquo;iyzico&rdquo;) ait aşağıdaki &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zleşmesi&rsquo;ni onaylamanız, &ouml;deme işlemlerinizin iyzico &uuml;zerinden yapılacağını kabul etmeniz gerekmektedir.</font>
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
                  <font size="2" style="font-size: 10pt">iYZICO &Ouml;DEME HİZMETİ &Ccedil;ER&Ccedil;EVE S&Ouml;ZLEŞMESİ</font>
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
                  <font size="2" style="font-size: 10pt">İşbu &ldquo;</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">iyzico &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zleşmesi&rdquo; (&ldquo;S&ouml;zleşme&rdquo;)</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">, aşağıda bilgileri yer alan &ldquo;iyzico&rdquo; ile işbu S&ouml;zleşme&rsquo;deki hizmetlerden faydalanmak isteyen Kullanıcı arasında akdedilmiştir.</font>
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
                  <font size="2" style="font-size: 10pt">: iyzi &Ouml;deme ve Elektronik Para Hizmetleri A.Ş. (&ldquo;iyzico&rdquo;)</font>
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
                  <font size="2" style="font-size: 10pt">: Burhaniye Mah. Atilla Sok. No:7 &Uuml;sk&uuml;dar İstanbul</font>
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
                  <font size="2" style="font-size: 10pt">iyzico ve Kullanıcı bundan b&ouml;yle birlikte &ldquo;Taraflar&rdquo;, ayrı ayrı &ldquo;Taraf&rdquo; olarak anılacaktır.</font>
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
                  <font size="2" style="font-size: 10pt">İnternet Sitesi</font>
                </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">: Satıcı tarafından satışa sunulan &uuml;r&uuml;n ve hizmetleri teşhir etmek i&ccedil;in, Alıcı tarafından ise &uuml;r&uuml;n veya hizmetlerin satın alınması i&ccedil;in kullanılan </font>
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
                  <font size="2" style="font-size: 10pt"> alan adlı internet sitesi ve/veya mobil uygulamalar</font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Servis: İşbu S&ouml;zleşme&rsquo;de belirlenen h&uuml;k&uuml;m ve koşullar &ccedil;er&ccedil;evesinde iyzico tarafından Alıcı ve Satıcı&rsquo;ya sunulacak olan hizmet</font>
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
                      <font size="2" style="font-size: 10pt">Alıcı</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: İnternet Sitesi &uuml;zerinden işbu S&ouml;zleşme kapsamında sunulan servisler aracılığı ile &uuml;r&uuml;n veya hizmet alımı yapan ve bu ama&ccedil;la Servis&rsquo;ten faydalanan ger&ccedil;ek veya t&uuml;zel kişi,</font>
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
                      <font size="2" style="font-size: 10pt">Satıcı: &Ouml;deme İşlemi&rsquo;ne konu fonun ulaşması istenilen, İnternet Sitesi &uuml;zerinden satış ger&ccedil;ekleştiren ger&ccedil;ek veya t&uuml;zel kişi</font>
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
                      <font size="2" style="font-size: 10pt">Kullanıcı: İşbu S&ouml;zleşme&rsquo;deki hizmetlerden Alıcı veya Satıcı sıfatıyla faydalanan ger&ccedil;ek veya t&uuml;zel kişi (Alıcı ve Satıcı birlikte &ldquo;Kullanıcı&rdquo; olarak anılacaktır)</font>
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
                      <font size="2" style="font-size: 10pt">S&ouml;zleşme</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullanıcı ile akdedilen işbu &Ouml;deme Hizmeti &Ccedil;er&ccedil;eve S&ouml;zleşmesi</font>
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
                      <font size="2" style="font-size: 10pt">SAHİBİNDEN: İnternet Sitesi&rsquo;ni işletmekte olan Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret A.Ş.</font>
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
                      <font size="2" style="font-size: 10pt">: İletişim bilgileri işbu S&ouml;zleşme&rsquo;nin 1. maddesinde belirtilen ve işbu S&ouml;zleşme&rsquo;de &ouml;deme hizmeti sağlayıcı taraf olan iyzi &Ouml;deme ve Elektronik Para Hizmetleri A.Ş.</font>
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
                      <font size="2" style="font-size: 10pt">Platform: iyzico tarafından geliştirilen sanal &ouml;deme ve doğrulama ağ ge&ccedil;idi olan bir yazılımdan ibaret sanal platform</font>
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
                      <font size="2" style="font-size: 10pt">&Ouml;deme Aracı</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullanıcı tarafından &ouml;deme emrini vermek i&ccedil;in kullanılan kart, cep telefonu, şifre ve benzeri kişiye &ouml;zel ara&ccedil;</font>
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
                      <font size="2" style="font-size: 10pt">&Ouml;deme Hesabı</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Kullanıcı adına iyzico nezdinde a&ccedil;ılan ve &ouml;deme işleminin y&uuml;r&uuml;t&uuml;lmesinde kullanılan hesap</font>
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
                      <font size="2" style="font-size: 10pt">&Ouml;deme İşlemi</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: İnternet Sitesi&rsquo;nde satışa sunulan &uuml;r&uuml;nler veya hizmetler i&ccedil;in &ouml;deme yapılması amacıyla, Platform aracılığı ile y&uuml;r&uuml;t&uuml;len işlemler</font>
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
                      <font size="2" style="font-size: 10pt">Sistem Ortağı: Platform aracılığı ile &ouml;demelerin işlenmesi konusunda işbirliğinde bulunulan banka veya finans kuruluşu</font>
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
                      <font size="2" style="font-size: 10pt">: Kullanıcı tarafından İnternet Sitesi&rsquo;nden satın alınan &uuml;r&uuml;n veya hizmetin teslim edildiğine ilişkin onayın verildiği veya s&ouml;z konusu onayın verilmesi i&ccedil;in Pazaryeri tarafından belirlenen s&uuml;renin dolduğu tarih</font>
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
                      <font size="2" style="font-size: 10pt">Hatalı/Yetkisiz İşlem</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: Hatalı bir şekilde veya Kullanıcı&rsquo;nın talimatı dışında ger&ccedil;ekleştirilen &Ouml;deme İşlemi</font>
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
                      <font size="2" style="font-size: 10pt">Ş&uuml;pheli İşlem</font>
                    </font>
                  </font>
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">: S&ouml;zleşme ile belirlenen durumlar da dahil olmak &uuml;zere, Hatalı/Yetkisiz İşlem olarak değerlendirilme ihtimali bulunan &Ouml;deme İşlemi</font>
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
                      <font size="2" style="font-size: 10pt">: Kullanıcı tarafından &ouml;deme emrinin verilmesinde veya Kullanıcı&rsquo;nın kimliğinin doğrulanmasında kullanılan, ele ge&ccedil;irilmesi veya değiştirilmesi halinde dolandırıcılık ya da kullanıcılar adına sahte işlem yapılmasına imk&acirc;n verebilecek şifre, g&uuml;venlik sorusu, sertifika, şifreleme anahtarı ile PIN, kart numarası, son kullanma tarihi, CVV2, CVC2 kodu gibi veriler</font>
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
                      <font size="2" style="font-size: 10pt">: Kullanıcı&rsquo;ya Platform kullanımı hakkında destek vermek ve iletişime ge&ccedil;mek &uuml;zere iyzico tarafından yetkilendirilmiş olan personel</font>
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
                  <font size="2" style="font-size: 10pt">3. S&Ouml;ZLEŞMENİN KONUSU</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Pazaryeri tarafından işletilmekte İnternet Sitesi&rsquo;nde &ouml;deme hizmetleri iyzico tarafından sunulmaktadır. iyzico, bu kapsamda hem Satıcı&rsquo;ya, hem de Alıcı&rsquo;ya 6493 sayılı &Ouml;deme ve Menkul Kıymet Mutabakat Sistemleri, &Ouml;deme Hizmetleri ve Elektronik Para Kuruluşları Hakkında Kanun (&ldquo;Kanun&rdquo;) uyarınca &ouml;deme hizmeti verecektir. Bu kapsamda; Alıcı&rsquo;dan tahsil edilen ve İnternet Sitesi &uuml;zerinden temin edilen &uuml;r&uuml;n veya hizmetin Alıcı&rsquo;ya tam ve gereği gibi teslimine ilişkin onayın alınmasına kadar Alıcı&rsquo;nın &Ouml;deme Hesabı&rsquo;nda tutulan &uuml;r&uuml;n/hizmet bedeli; &uuml;r&uuml;n/hizmet satışına ilişkin h&uuml;k&uuml;mlere uygun olarak Alıcı&rsquo;nın onayı &uuml;zerine veya satın alınan hizmetin kullanımı &uuml;zerine iyzico tarafından Satıcı&rsquo;nın &Ouml;deme Hesabına aktarılacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">İşbu S&ouml;zleşme; yukarıda belirtilen kapsamda Alıcı&rsquo;ya İnternet Sitesi &uuml;zerinden satın aldığı &uuml;r&uuml;n ve hizmetin &uuml;cretinin Satıcı&rsquo;ya aktarımı i&ccedil;in sunulan Servis&rsquo;e ilişkin esaslar ile Taraflar&rsquo;ın bu kapsamdaki hak ve y&uuml;k&uuml;ml&uuml;l&uuml;klerini d&uuml;zenlemektedir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">4. GENEL ŞARTLAR</font>
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
                  <font size="2" style="font-size: 10pt">S&ouml;zleşme&rsquo;nin Kullanıcı tarafından İnternet Sitesi &uuml;zerinden onaylandığı tarih itibariyle işbu S&ouml;zleşme y&uuml;r&uuml;rl&uuml;k ve ge&ccedil;erlilik kazanacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">4.2. KULLANIM KOŞULLARI</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullanıcı Servis&rsquo;i ancak S&ouml;zleşme y&uuml;r&uuml;rl&uuml;ğe girdikten sonra kullanabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Kullanıcı&rsquo;yı telefonla arama ve Pazaryeri tarafından iletilen bilgileri doğrulama, ek bilgi ve belge talep etme, herhangi bir sebep bildirmeksizin Kullanıcı&rsquo;yı kaydetmeme haklarını saklı tutmaktadır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">5. TARAFLARIN HAK VE Y&Uuml;K&Uuml;ML&Uuml;L&Uuml;KLERİ </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) İşbu S&ouml;zleşme uyarınca iyzico, Kullanıcı tarafından İnternet Sitesi&rsquo;nden sipariş edilen &uuml;r&uuml;n ve hizmetlere ilişkin &ouml;demelerin işleme alınması ve Satıcı&rsquo;ya &ouml;demelerin yapılması amacıyla Servis sunmayı kabul ve taahh&uuml;t eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, yetkisiz kişiler tarafından bilgilere erişilmesinin engellenmesi amacıyla Platform&rsquo;u gerekli g&uuml;venlik seviyesinde tutmak i&ccedil;in en iyi &ccedil;abayı g&ouml;sterecektir. Kullanıcı bu anlamda iyzico&rsquo;ya azami desteği sağlayacak ve iyzico&rsquo;nun talimatlarına uygun davranacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, &ouml;zellikle Sistem Ortakları tarafından ger&ccedil;ekleştirilen g&uuml;venlik standardı değişikliklerinin sonucunda g&uuml;venlik standardını değiştirme hakkını saklı tutar.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullanıcı, yaptığı &ouml;demelere ait provizyonların Sistem Ortakları tarafından belirtilen koşullar kapsamında ger&ccedil;ekleştirildiğini bildiğini, Sistem Ortakları&rsquo;nın sitelerine y&ouml;nelik ihl&acirc;ller veya saldırılarda (hacking, phishing) iyzico&rsquo;nun herhangi bir sorumluluğu bulunmadığını kabul eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kullanıcı, Platform&rsquo;a erişim imkanı tanıyan şifreyi ve/veya &Ouml;deme Aracı&rsquo;na ilişkin temin ettiği bilgileri (varsa) gizli tutmakla, yetkisiz şahıslara ifşa etmemekle ve bu şifrelerin tahsis amacı haricinde başkaca ama&ccedil;lar i&ccedil;in kullanılmasını &ouml;nlemekle y&uuml;k&uuml;ml&uuml;d&uuml;r. Kullanıcı ayrıca bahsi ge&ccedil;en bilgiler veya &Ouml;deme Aracı&rsquo;na ait bilgilerin kaybolması, &ccedil;alınması veya yetkisiz bir şekilde kullanımının s&ouml;z konusu olması halinde; durumu derhal iyzico&rsquo;ya işbu S&ouml;zleşme&rsquo;de belirtilen y&ouml;ntemlerden biriyle bildirmekle y&uuml;k&uuml;ml&uuml;d&uuml;r. iyzico, Kullanıcı tarafından s&ouml;z konusu bilgilerin kaybedilmesi veya ifşa edilmesi durumunda herhangi bir sorumluluğa sahip olmadığı gibi, kusurun iyzico&rsquo;ya ait olduğu kanıtlanmadığı m&uuml;ddet&ccedil;e &uuml;&ccedil;&uuml;nc&uuml; şahıslar tarafından Kullanıcı&rsquo;ya verilecek zararlardan da sorumlu değildir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) Kullanıcı, Platform&rsquo;un veya bir y&ouml;netim hesabının kanıtlanabilir bir şekilde yetkisiz olarak k&ouml;t&uuml; ama&ccedil;lı kullanımından veya y&ouml;netim hesabına yetkisiz erişimden kendi kusuru &ouml;l&ccedil;&uuml;s&uuml;nde sorumlu olacaktır.</font>
                </font>
              </font>
            </p>
            <p style="margin-bottom: 0cm; line-height: 100%; background: #ffffff">
              <font face="Times New Roman, serif">
                <font size="3" style="font-size: 12pt">
                  <font color="#000000">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">g) Kullanıcı, Platform&rsquo;un işlevlerine m&uuml;dahale etmeyeceğini, Platform&rsquo;u kurulum ve kullanım talimatlarına uygun olarak kullanacağını, iyzico&rsquo;nun talimatlarına uygun davranacağını kabul ve beyan eder.</font>
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
                      <font size="2" style="font-size: 10pt">h) Kullanıcı, iyzico tarafından sunulan Platform &ouml;zelliklerine ilişkin a&ccedil;ıklama ile &ldquo;iyzico Platform Aracılığıyla &Ouml;deme Yapılmasına İlişkin Kurallar&rdquo;a ve bunlarla ilgili t&uuml;m g&uuml;ncellemelere uyacak, uymaması nedeniyle meydana gelecek t&uuml;m taleplerden sorumlu olacaktır.</font>
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
                      <font size="2" style="font-size: 10pt">ı) </font>
                    </font>
                  </font>
                  <font color="#333333">
                    <font face="Arial, serif">
                      <font size="2" style="font-size: 10pt">Satıcı, İnternet Sitesi&rsquo;nde satışı yasal olmayan &uuml;r&uuml;nler ve hizmetler sunmayacaktır. iyzico tarafından, İnternet Sitesi&rsquo;nde satışı hukuka aykırı olan ya da iyzico ilkelerine ters d&uuml;şen &uuml;r&uuml;n veya hizmetlerin sunulduğunun tespiti h&acirc;linde, Satıcı tarafından Platform&rsquo;un kullanılmasını tamamen veya kısmen durdurma yetkisi vardır. Bu durumda &Ouml;deme İşlemi&rsquo;nin reddedilmesi veya Platform&rsquo;a erişimin tamamen askıya alınması S&ouml;zleşme&rsquo;nin iyzico tarafından ihl&acirc;li olarak değerlendirilemez.</font>
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
                  <font size="2" style="font-size: 10pt">6.1. iyzico&rsquo;nun Platform&rsquo;a Erişimi Engelleme Hakkı</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, &ouml;zellikle aşağıdaki durumların meydana gelmesi halinde, Platform&rsquo;a erişimi engelleme hakkına sahip olacaktır. S&ouml;z konusu durumun ortadan kaldırılmasını m&uuml;teakip erişim tekrar sağlanacaktır.</font>
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
                  <font size="2" style="font-size: 10pt">Kullanıcı işbu S&ouml;zleşme kapsamında kendisinden talep edilen bilgileri sağlamıyorsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico&rsquo;nun işbu S&ouml;zleşme&rsquo;ye ilişkin hizmetleri &ouml;nceden Kullanıcı&rsquo;ya haber vermeksizin denetleme yetkisi mevcuttur.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6.2. Platform Bakımı, Kesintiler ve Arıza &Ccedil;&ouml;z&uuml;mleri</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, Platform&rsquo;un d&uuml;zg&uuml;n olarak &ccedil;alışması i&ccedil;in gerekli olan s&uuml;rekli bakımı, donanımı ve teknik desteği sağlayacaktır. Bununla bağlantılı olarak iyzico&rsquo;nun, işbu S&ouml;zleşme&rsquo;de a&ccedil;ık&ccedil;a belirtilen durumlarda ilgili sunucuların &ccedil;alışmasını ge&ccedil;ici olarak durdurma veya sınırlandırma hakkı saklıdır. Bu durumda, Kullanıcı&rsquo;nın herhangi bir tazminat hakkı mevcut değildir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Platform&rsquo;un kesintisiz &ccedil;alışacağını garanti etmemektedir. iyzico, &ouml;demeleri zamanında işleyecek olup, Sistem Ortakları&rsquo;ndan kaynaklanan sorunlar nedeniyle, bu işlemlerin zamanında ger&ccedil;ekleşmemesinden sorumlu olmamakla birlikte, s&ouml;z konusu sorunların en kısa s&uuml;re i&ccedil;erisinde giderilmesi i&ccedil;in gayret edecek ve Sistem Ortakları ile iletişim halinde olacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">6.3. Kişisel Bilgilerin Korunması</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullanıcı, kendisine ait bilgilerin sadece Servis&rsquo;in verilmesini temin amacıyla, iyzico Gizlilik&amp;Kişisel Veri Politikası&rsquo;nın </font>
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
                  <font size="2" style="font-size: 10pt"> adresinde yayınlanan en g&uuml;ncel halinde belirtildiği şekilde iyzico tarafından işlenmesine, saklanmasına ve benzeri işlemlerin (sisteme tanımlamak ve kayıt etmek) yapılmasına ve gerektiğinde &uuml;&ccedil;&uuml;nc&uuml; kişiler ile paylaşılmasına ilişkin bilgilendirildiğini kabul etmektedir. iyzico kişisel verilerin &ldquo;gizli bilgi&rdquo; olduğunun, kendisine bu ama&ccedil;la verilen kişisel bilgilerin gizliliğini temin i&ccedil;in gerekli &ouml;zeni g&ouml;stermekle y&uuml;k&uuml;ml&uuml; olduğunun ve 6698 sayılı Kişisel Verilen Korunması Kanunu&rsquo;na ve diğer g&uuml;ncel mevzuatlara uygun davranması gerektiğinin bilincindedir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Kullanıcı, iyzico&rsquo;nun bir şik&acirc;yeti işleme aldığı durumlarda, Servis kapsamında ger&ccedil;ekleştirdiği işlemlere ilişkin bilgiler ile kendisine ait sair bilgilerin, şik&acirc;yetin &ccedil;&ouml;z&uuml;m&uuml; i&ccedil;in gerekli olduğu &ouml;l&ccedil;&uuml;de Satıcı ve/veya Pazaryeri&rsquo;ne iletilebileceğini kabul ve beyan eder.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7. ŞİK&Acirc;YET PROSED&Uuml;R&Uuml;, HATA VE ZARAR SORUMLULUKLARI</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.1. ŞİK&Acirc;YET PROSED&Uuml;R&Uuml;</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Kullanıcı, iyzico tarafından sağlanan hizmetlere ilişkin şik&acirc;yetleri </font>
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
                  <font size="2" style="font-size: 10pt">b) Kullanıcı tarafından ayrıca Yetkili Personel&rsquo;e iletişim telefon numarasından ulaşarak da şik&acirc;yet prosed&uuml;r&uuml; başlatılabilecektir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, şik&acirc;yet konusu sorunun giderilmesi i&ccedil;in elinden gelen en iyi &ccedil;abayı sarf edecektir. iyzico, şik&acirc;yetlerdeki eksiklikler (bildirim eksiklikleri) ile bağlantılı olarak meydana gelen gecikmelerden sorumlu olmayacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullanıcı tarafından y&ouml;neltilecek şik&acirc;yetler en az şu ayrıntıları i&ccedil;ereceklerdir: Şik&acirc;yet nedeni, işlemde dahil edilen tarafların listesi, varsa işlem kodu ve sorunun ayrıntılı bir listesi ve olası hata mesajlarının i&ccedil;eriği.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kullanıcı ile herhangi bir Kullanıcı veya Satıcı arasında meydana gelen uyuşmazlıklar ile ilgili Kullanıcı ile işlemin tarafı olan Kullanıcı veya Satıcı arasında &ccedil;&ouml;z&uuml;me ulaştırılacak olup, iyzico bu işlemlerden veya uyuşmazlıklardan sorumlu olmayacaktır. iyzico&rsquo;nun bu madde kapsamında herhangi bir nedenle (kendi kusurundan kaynaklı haller dışında) bir bedel &ouml;demek durumunda kalması halinde, Kullanıcı iyzico tarafından &ouml;denen bedeli derhal tazmin edecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) iyzico gelen şik&acirc;yetleri kendisine ulaşma tarihinden itibaren en ge&ccedil; 20 (yirmi) g&uuml;n i&ccedil;erisinde yanıtlayacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.2. HATA VE ZARARDAN DOĞAN SORUMLULUK</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) İnternet Sitesi&rsquo;nde sunulan &uuml;r&uuml;nlerin veya hizmetlerin Kullanıcı&rsquo;ya tedarik edilmesine veya iade edilmesine ilişkin Alıcı ve Satıcı arasındaki s&ouml;zleşmenin hukuka uygun bir şekilde akdedilmiş olmasından iyzico sorumlu olmayacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, sadece S&ouml;zleşme&rsquo;den kaynaklanan y&uuml;k&uuml;ml&uuml;l&uuml;klerini ihl&acirc;l etmesi h&acirc;linde meydana gelen doğrudan zararlardan sorumlu olup, kendi kusurunun bulunmadığı &uuml;&ccedil;&uuml;nc&uuml; şahıs veya Sistem Ortakları tarafından neden olunan zararlardan sorumlu olmayacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) iyzico, &ouml;deme emrinin verilmesinin ardından Kullanıcı tarafından bilgilerin hatalı veya eksik girilmesi nedeniyle işlemlerin tamamlanmaması veya gecikmesinden veya kendisi tarafından &ouml;ng&ouml;r&uuml;lemeyen veya engellenemeyen durumlar neticesinde meydana gelen gecikmelerden &ouml;t&uuml;r&uuml; &Ouml;deme İşlemi&rsquo;nin ger&ccedil;ekleştirilememesinden veya &Ouml;deme İşlemi&rsquo;nde kendi kusuru dışında hata vermesinden veya bunların sonucunda meydana gelen zararlardan sorumlu olmayacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullanıcı&rsquo;nın işbu S&ouml;zleşme kapsamındaki herhangi bir taahh&uuml;t veya y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml;ne aykırı aykırı davranması, yasaları veya herhangi bir &uuml;&ccedil;&uuml;nc&uuml; kişinin haklarını ihlal etmesi nedeniyle iyzico&rsquo;nun, g&ouml;revlilerinin, y&ouml;neticilerinin ve &ccedil;alışanlarının bir zarara uğraması yahut iyzico&rsquo;nun yasal, idari veya cezai bir yaptırıma tabi tutulması halinde, &ouml;dediği tutarlar (avukatlık &uuml;cretleri de dahil olarak) ferileri ile birlikte Kullanıcı&rsquo;ya r&uuml;cu edilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">7.3. Ş&Uuml;PHELİ/YETKİLENDİRİLMEMİŞ/HATALI İŞLEMLERDE SORUMLULUK</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) Alıcı tarafından &ouml;demenin iyzico&rsquo;ya iletilmesi halinde iyzico işbu S&ouml;zleşme&rsquo;de belirtilen koşullarda ve Pazaryeri tarafından belirtilen kurallar dahilinde ilgili onay s&uuml;re&ccedil;lerinin tamamlanmasını m&uuml;teakip &ouml;demeyi Satıcı&rsquo;ya aktaracaktır. Kullanıcı&rsquo;dan kaynaklanan sebeplerle &ouml;demenin iyzico&rsquo;ya aktarılmaması halinde, iyzico&rsquo;nun Satıcı&rsquo;ya &ouml;deme yapma y&uuml;k&uuml;ml&uuml;l&uuml;ğ&uuml; s&ouml;z konusu olmayacaktır. Onay s&uuml;recinin herhangi bir nedenle gereği gibi tamamlanmaması halinde ise; iyzico ilgili tutarı Alıcı&rsquo;ya iade edebilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Alıcı, Onay Tarihi&rsquo;nde ilgili &Ouml;deme İşlemi&rsquo;ne ilişkin &ouml;deme emrini vermiş kabul edilir. Kullanıcı, teslimata (ge&ccedil; veya eksik teslim, ayıplı &uuml;r&uuml;n vb.) ilişkin herhangi bir bildirim yapmaması veya teslimatın gereği gibi ger&ccedil;ekleştiğine ilişkin bildirim yapmış olması halinde tutarın Satıcı&rsquo;ya aktarılmış olması ile ilgili iyzico&rsquo;dan herhangi bir talepte bulunamaz.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font face="Arial, serif">
                <font size="2" style="font-size: 10pt">c) </font>
              </font>
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">Herhangi bir işleme ilişkin olarak iyzico&rsquo;ya Hatalı/Yetkisiz İşlem bildiriminde bulunulduğu takdirde, derhal ve her hal&uuml;karda &Ouml;deme İşlemi&rsquo;nin ger&ccedil;ekleştirilmesini takip eden azami 13 (on&uuml;&ccedil;) ay i&ccedil;erisinde Kullanıcı tarafından VISA, Mastercard kuralları gereğince d&uuml;zeltme veya harcama itirazı talebinde bulunulabilecektir. Bu durumda s&ouml;z konusu bildirimin doğru olduğunun kanıtlanması veya Sistem Ortağı&rsquo;nın bildirimi halinde ilgili işlem bedeli Satıcı&rsquo;ya aktarılmayarak iyzico tarafından doğrudan Kullanıcı&rsquo;ya iade edilebilecek, bildirim anında işlem bedeli Satıcı&rsquo;ya aktarılmış ise iyzico ilgili tutarları Satıcı&rsquo;dan iade talep ederek (Satıcı iadeyi 1 g&uuml;n i&ccedil;erisinde ger&ccedil;ekleştirecek olup iyzico&rsquo;nun ilgili bedeli Satıcı&rsquo;ya yapılacak &ouml;demelerden mahsup hakkı saklıdır) Kullanıcı&rsquo;ya aktarabilecektır. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) iyzico, &ouml;zellikle aşağıdaki durumlar olmak &uuml;zere Ş&uuml;pheli İşlemler&rsquo;de ve Alıcı veya Sistem Ortağı tarafından kendisine bildirilmesi h&acirc;linde, işlem tutarlarını Sistem Ortağı veya Alıcı&rsquo;nın &Ouml;deme İşlemi&rsquo;ne ilişkin onayı verme tarihine kadar saklama ve Satıcı&rsquo;ya &ouml;deme yapmama hakkına sahiptir. Ş&uuml;pheli durumun belgelendirilmek kaydıyla kesinleşmesi halinde &ouml;demeler kesin olarak işlenmeyecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme İşlemi&rsquo;nin yasal h&uuml;k&uuml;mlere uygun olmadığına y&ouml;nelik bir ş&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme İşlemi&rsquo;nin, &Ouml;deme İşlemi&rsquo;nde kullanılan kredi kartının hamilinin bilgisi dışında yapıldığına y&ouml;nelik bir ş&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme İşlemi&rsquo;nin, &Ouml;deme İşlemi&rsquo;nde kullanılan banka hesabı sahibinin bilgisi dışında yapıldığına y&ouml;nelik bir ş&uuml;phe varsa,</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">&ndash; <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">&Ouml;deme İşlemi&rsquo;nin ger&ccedil;ek bir &Ouml;deme İşlemi olmadığına (testler hari&ccedil;) y&ouml;nelik bir ş&uuml;phe varsa.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) Kayıp veya &ccedil;alıntı bir &Ouml;deme Aracı&rsquo;nın kullanılması ya da kişisel g&uuml;venlik bilgilerinin gereği gibi muhafaza edilmemesi nedeniyle &ouml;deme aracının başkaları tarafından kullanılması durumunda, Kullanıcı, yetkilendirmediği &ouml;deme işlemlerinden doğan zararın &Ouml;deme Hizmetleri ve Elektronik Para İhracı ile &Ouml;deme Kuruluşları ve Elektronik Para Kuruluşları Hakkında Y&ouml;netmelik (&ldquo;Y&ouml;netmelik&rdquo;) Madde 45/4&rsquo;te belirtilen miktar kadar olan b&ouml;l&uuml;m&uuml;nden sorumludur. Kullanıcı, Y&ouml;netmelik&rsquo;in 44. maddesinin d&ouml;rd&uuml;nc&uuml; fıkrası uyarınca yaptığı bildirimden sonra ger&ccedil;ekleşen yetkilendirmediği &ouml;deme işlemlerinden sorumlu değildir. &Ouml;deme Aracı&rsquo;nı hileli kullanması veya bildirim y&uuml;k&uuml;ml&uuml;l&uuml;klerini kasten veya ağır ihmalle yerine getirmemesi durumunda ise Kullanıcı, yetkilendirilmemiş işlemden doğan zararın tamamından sorumlu olacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">8. &Ouml;DEMELERE İLİŞKİN GENEL ESASLAR</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico, S&ouml;zleşme kapsamında Kullanıcı tarafından kendisine iletilen &uuml;r&uuml;n/hizmet bedellerinin, Onay Tarihi&rsquo;ni takip eden iş g&uuml;n&uuml; i&ccedil;erisinde Satıcı&rsquo;ya aktarılmasından sorumludur. Satıcı&rsquo;ya aktarılırken ilgili hizmet kapsamında kesilmesi gereken komisyon/hizmet bedeli gibi bir bedel varsa; bu bedeli d&uuml;şerek bakiyenin Satıcı&rsquo;ya aktarımını yapacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, Kullanıcı tarafından yapılan &Ouml;deme İşlemi&rsquo;nin konusu olan tutarın Satıcı&rsquo;ya aktarılması işleminde Kullanıcı&rsquo;dan herhangi bir &uuml;cret tahsil etmemektedir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Kullanıcı, iyzico&rsquo;nun bir banka, kredi veya finans kurumu olmadığını ve iyzico tarafından işbu S&ouml;zleşme uyarınca verilen hizmetin bir bankacılık hizmeti olmadığını, iyzico&rsquo;nun &ouml;deme kuruluşu olarak Kanun kapsamında &ouml;deme hizmetleri sunduğunu kabul eder. Bu kapsamda iyzico, &Ouml;deme İşlemi kapsamında tahsil edilen tutarlara faiz işletmeyecek yahut &Ouml;deme Aracı ihracında bulunmayacak olup Kullanıcı iyzico&rsquo;dan faiz veya sair adlar altında herhangi bir menfaat talebinde bulunmayacaktır. iyzico Kullanıcı&rsquo;ye kredi verme, taksitlendirme, tahsil edilemeyen tutarlara ilişkin &ouml;deme veya &ouml;deme garantisi verme yahut bu anlama gelecek faaliyetlerde bulunamaz. Kullanıcı, iyzico&rsquo;dan bu kapsamda talepte bulunmamayı kabul ve taahh&uuml;t eder. Bununla birlikte Satıcı kendisi taksitlendirme yaptığı takdirde, taksit bedellerinin &ouml;denmesine ilişkin &ouml;deme hizmeti sunulabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">9. S&Ouml;ZLEŞMENİN S&Uuml;RESİ VE FESİH</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) İşbu S&ouml;zleşme, Kullanıcı&rsquo;nın kabul ederek onayladığı tarihte y&uuml;r&uuml;rl&uuml;ğe girecek olup, taraflarca feshedilmedik&ccedil;e y&uuml;r&uuml;rl&uuml;kte kalacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) Taraflardan biri, işbu S&ouml;zleşme&rsquo;den doğan y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getirmediği takdirde, diğer Taraf g&ouml;ndereceği bir ihtar ile aykırılığın giderilmesi i&ccedil;in 14 (ond&ouml;rt) g&uuml;n s&uuml;re verecektir. Aykırılığın verilen s&uuml;re i&ccedil;erisinde giderilmemesi halinde; S&ouml;zleşme başkaca ihtara gerek olmaksızın feshedilmiş sayılacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Kullanıcı, işbu S&ouml;zleşme&rsquo;yi, herhangi bir sebep bildirmeksizin, 1 (bir) ay &ouml;ncesinden yazılı fesih ihbarında bulunmak kaydıyla feshedebilecektir. iyzico ise, S&ouml;zleşme&rsquo;yi 2 (iki) ay &ouml;ncesinden yazılı bildirimle herhangi bir sebep g&ouml;stermeksizin ve tazminat &ouml;demeksizin feshi hakkına sahip olacaktır. S&ouml;zleşme&rsquo;nin fesih tarihinden &ouml;nce muaccel olan işbu S&ouml;zleşme&rsquo;ye konu y&uuml;k&uuml;ml&uuml;l&uuml;klerin yerine getirilmesine halel getirmeyecek olup, Taraflar&rsquo;ın fesih tarihine kadar muaccel olan alacak hakları saklıdır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) iyzico&rsquo;nun işbu S&ouml;zleşme kapsamındaki Servis&rsquo;i sunmasına imkan tanıyan izin ve lisansların herhangi bir şekilde ortadan kalkması ve/veya Pazaryeri ile iyzico arasındaki İnternet Sitesi &uuml;zerinden yapılan satışlara ilişkin bedellerin tahsiline ilişkin anlaşmanın sona ermesi halinde işbu S&ouml;zleşme kendiliğinden sona erecektir. </font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) iyzico hileli veya yetkisiz kullanım ş&uuml;phesinin s&ouml;z konusu olduğu hallerde Servis&rsquo;i askıya alabilecek, &Ouml;deme Aracı&rsquo;nın kullanımını engelleyebilecek ve &Ouml;deme İşlemi&rsquo;ni iptal edebilecektir. Bu durumda iyzico, ilgili mevzuatta bilgi verilmesini engelleyici d&uuml;zenlemeler bulunmaması veya g&uuml;venliği tehdit edici objektif nedenler olmaması kaydı ile Kullanıcı&rsquo;yı konu ile ilgili bilgilendirecek ve engelleme sebebi ortadan kalktığında Servis ve &Ouml;deme Aracı&rsquo;nı yeniden kullanıma a&ccedil;acaktır. iyzico ayrıca Kullanıcı&rsquo;nın işbu S&ouml;zleşme&rsquo;ye aykırılığı durumunda da aykırılık giderilene kadar Servis&rsquo;i askıya alabilecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">10. &Ccedil;EŞİTLİ H&Uuml;K&Uuml;MLER</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">a) iyzico tarafından hizmetlerin sağlanmasına y&ouml;nelik olarak </font>
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
                  <font size="2" style="font-size: 10pt"> internet sitesinde il&acirc;n edilecek şartlar ve koşullar, işbu S&ouml;zleşme&rsquo;nin eki ve ayrılmaz bir par&ccedil;asını teşkil etmektedir. İşbu S&ouml;zleşme iyzico&rsquo;nun </font>
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
                  <font size="2" style="font-size: 10pt"> internet sitesinde veya bağlantılı adreslerinde her zaman Kullanıcı tarafından erişilebilir olacaktır</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">b) iyzico, S&ouml;zleşme&rsquo;deki her t&uuml;rl&uuml; değişikliği, internet sitesinde il&acirc;n edebilir ve/veya yeni s&uuml;r&uuml;mlerini yayınlayabilir. Değişikliklere ilişkin olarak iyzico, değişikliğin kapsamı, y&uuml;r&uuml;rl&uuml;k tarihi ve Kullanıcı&rsquo;nın fesih hakkına ilişkin bilgileri i&ccedil;eren bildirimi y&uuml;r&uuml;rl&uuml;ğe girme tarihinden 30 (otuz) g&uuml;n &ouml;nce Kullanıcı&rsquo;ya iletir. Bu durumda Kullanıcı&rsquo;nın S&ouml;zleşme&rsquo;yi herhangi bir &uuml;cret &ouml;demeksizin feshetme hakkı saklı olup belirtilen 30 (otuz) g&uuml;nl&uuml;k s&uuml;re i&ccedil;inde itiraz edilmemesi halinde değişiklik kabul edilmiş sayılacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">c) Taraflar&rsquo;ın, kendi iradeleri dışında ger&ccedil;ekleşen, m&uuml;dahale imkanları bulunmayan ve makul bir şekilde &ouml;nceden &ouml;ng&ouml;r&uuml;lmesi m&uuml;mk&uuml;n olmayan nedenlerle y&uuml;k&uuml;ml&uuml;l&uuml;klerini yerine getiremedikleri savaş, sıkıy&ouml;netim, seferberlik, ter&ouml;rist eylemler, doğal afetler, yangın, grev ve lokavt da dahil istisnai olaylar m&uuml;cbir sebep olarak kabul edilir. M&uuml;cbir sebebin ortaya &ccedil;ıkması halinde, S&ouml;zleşme&rsquo;ye ilişkin edimler m&uuml;cbir sebep hali sona erinceye kadar askıya alınır. Askıya alınma s&uuml;resi 1 (bir) ayı ge&ccedil;tiği takdirde, Taraflar&rsquo;ın işbu S&ouml;zleşme&rsquo;yi fesih hakkı doğar.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">d) Kullanıcı, kanunlara ve VISA, Mastercard ve diğer &ouml;deme kartı kuruluş ve otoritelerinin (B.D.D.K., T.C.M.B. vb) kuralları ile iyzico tarafından hazırlanan kurallara ve prosed&uuml;rlere uyacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">e) İşbu S&ouml;zleşme&rsquo;nin herhangi bir h&uuml;km&uuml;n&uuml; herhangi bir nedenle ge&ccedil;ersiz olması h&acirc;linde, diğer h&uuml;k&uuml;mlerin veya S&ouml;zleşme&rsquo;nin uygulanabilirliği ve/veya ge&ccedil;erliliği bu ge&ccedil;ersizlikten etkilenmeyecektir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">f) Taraflar, Platform veya Y&ouml;netim Aray&uuml;z&uuml; &uuml;zerinden erişilebilir kayıtların Taraflar arasında delil s&ouml;zleşmesi mahiyetinde kabul edileceği hususunda mutabıktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">g) Taraflar işbu S&ouml;zleşme&rsquo;den doğacak uyuşmazlıkların &ccedil;&ouml;z&uuml;m&uuml;nde İstanbul Anadolu Mahkemelerinin ve İcra Dairelerinin yetkisini kabul etmişlerdir.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">h) Taraflar, işbu S&ouml;zleşme&rsquo;de belirtilen adreslerinde meydana gelen değişiklikleri karşı tarafa yazılı olarak bildirmedikleri takdirde, işbu s&ouml;zleşmede belirtilen adreslere yapılacak tebligat ve bildirimler ge&ccedil;erli tebliğ h&uuml;km&uuml;nde olacaktır. iyzico, işbu S&ouml;zleşme kapsamında Kullanıcı&rsquo;ya y&ouml;nelik yapacağı bildirimleri S&ouml;zleşme&rsquo;de belirtilen zamanlarda Kullanıcı&rsquo;nın belirtilen adresine iletilecek e-posta aracılığıyla yapacaktır. Ancak T&uuml;rk Ticaret Kanunu&rsquo;nun 18/3 maddesi uyarınca, karşı tarafı temerr&uuml;de d&uuml;ş&uuml;rmeye veya S&ouml;zleşme&rsquo;yi feshetmeye ilişkin bildirimler, noter aracılığıyla, taahh&uuml;tl&uuml; mektupla, telgrafla veya g&uuml;venli elektronik imza kullanılarak kayıtlı elektronik posta sistemi ile yapılacaktır.</font>
                </font>
              </font>
            </p>
            <p align="justify" style="margin-bottom: 0.21cm; line-height: 100%">
              <font color="#000000">
                <font face="Arial, serif">
                  <font size="2" style="font-size: 10pt">ı) Kullanıcı işbu S&ouml;zleşme&rsquo;yi elektronik ortamda onayladığında; işbu S&ouml;zleşme Taraflar arasında Kanun&rsquo;un uzaktan iletişim aracıyla s&ouml;zleşme akdedilmesine ilişkin h&uuml;km&uuml;ne uygun olarak akdedilmiş sayılacaktır.</font>
                </font>
              </font>
            </p>
          </div>
          <div id="mssPopup" class="mssPopup">
            <h1>Ürün Satış Sözleşmesi</h1>
            <div style="color:#999999;">
              <p style="margin:20px 0 15px 0; font-weight:bold;">1. TARAFLAR</p>
              <p style="margin:0 0 15px 0;">İşbu "Bireysel Satıcıdan Ürün Satış Sözleşmesi" (bundan böyle "Sözleşme" olarak anılacaktır); www.sahibinden.com portalında "Bireysel Hesap Sahibi" olan ve ilan yayınlayarak "S-Param Güvende Hizmeti" (bundan böyle "Hizmet" olarak anılacaktır.) kapsamında ürün satışı yapan "Satıcı" ile ilandaki ürünü sipariş eden "Alıcı" arasında elektronik ortamda akdedilerek yürürlüğe girmiştir. Alıcı, "Satıcı ve "Ürün"e ilişkin bilgiler aşağıda yer almaktadır:</p>
              <p style="margin:0 0 15px 0; font-weight:bold;">ALICI</p>
              <p style="margin:0 0 15px 0;">Adı-soyadı : <span id="mssBuyerNameSurname">Hikmet Çelikbaş</span>
              </p>
              <p style="margin:0 0 15px 0; font-weight:bold;">SATICI</p>
              <p style="margin:0 0 15px 0;">Adı-soyadı : Olcay BAĞCI</p>
              <p style="margin:0 0 15px 0; font-weight:bold;">ÜRÜN</p>
              <p style="margin:0 0 15px 0;">Ürün Açıklaması: {{ $product_info["ad_title"] }}</p>
              <table border="1" cellspacing="0" cellpadding="10" style="min-height: 75px; width: 100%; margin-bottom: 20px; border-collapse: collapse;border: 1px solid #d8d8d8; white-space: nowrap; color: #999999;" class="agreement-table uss-table">
                <tbody>
                  <tr style="text-align: left; color: #999;">
                    <th style="width: 100%; border: 1px solid #d8d8d8;">Ürün Açıklaması</th>
                    <th style="border: 1px solid #d8d8d8;">Adet</th>
                    <th style="border: 1px solid #d8d8d8;">Peşin Fiyatı*</th>
                    <th style="border: 1px solid #d8d8d8;">Toplam Tutar**</th>
                    <th class="installment-price-info" style="border: 1px solid #d8d8d8;display: none;">Taksitle Ödenecek Toplam Tutar***</th>
                  </tr>
                  <tr>
                    <td style="white-space: normal; border: 1px solid #d8d8d8;">{{ $product_info["ad_title"] }}</td>
                    <td style="border: 1px solid #d8d8d8;">
                      <span class="mss-desired-quantity">1</span>
                    </td>
                    <td style="border: 1px solid #d8d8d8;" class="nowrap">
                      <span class="mss-price-without-commission">{{ $price_formatted }} <sup></sup> TL </span>
                    </td>
                    <td style="border: 1px solid #d8d8d8;" class="nowrap">
                      <span class="mss-price-with-piece">{{ $price_formatted }} <sup></sup> TL </span>
                    </td>
                    <td class="nowrap installment-price-info" style="border: 1px solid #d8d8d8;display: none;">
                      <span class="parisTotalCostMss">{{ $price_formatted }} <sup></sup> TL </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <ul class="table-description" style="list-style-type: none; color: #999999; margin-bottom: 10px; padding: 0;">
                <li>* Tüm vergiler dahil peşin birim fiyatı gösterir.</li>
                <li>** Tüm vergiler dahil toplam tutarı gösterir.</li>
                <li class="installment-price-info" style="display: none;">*** Tüm vergiler ve taksit farkı dahil toplam tutarı gösterir.</li>
              </ul>
              <span class="mss-price-with-commission" style="visibility: hidden"></span>
              <p style="margin:0 0 15px 0; font-weight:bold;">2. TANIMLAR</p>
              <p style="margin:0 0 15px 0;">
                <strong>"Portal"</strong>: Sahibinden Bilgi Teknolojileri Pazarlama ve Ticaret Anonim Şirketi (bundan böyle "SAHİBİNDEN" olarak anılacaktır) tarafından işletilmekte olan www.sahibinden.com isimli alan adından ve bu alan adına bağlı alt alan adlarından oluşan "SAHİBİNDEN"'in hizmetlerini sunduğu internet sitesi ve/veya mobil uygulamalar.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Bireysel Hesap Sahibi":</strong> "Portal"da hesap açan, mesleki veya ticari amaç gütmeksizin "Portal" dahilinde sunulan hizmetlerden belirlenen koşullar dahilinde yararlanan gerçek veya tüzel kişi
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Alıcı":</strong> "Portal"da "Bireysel Hesap Sahibi" olan, "S-Param Güvende Hizmeti"ni satın alarak ürün sipariş eden, ticari veya mesleki olmayan amaçlarla hareket eden gerçek veya tüzel kişi.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"Satıcı":</strong> "Portal"da "Bireysel Hesap Sahibi" olan, "kargo ile gönderim" seçeneğini seçerek ilan yayınlayan, yayınladığı ilandaki ürün üzerinde hukuken tasarrufta bulunabilme hak ve yetkisine sahip, tacir, esnaf, tedarikçi, üretici, ticari işletme, ticaret şirketi olmayan, ticari veya mesleki olmayan amaçlarla hareket eden gerçek kişi veya tüzel kişi
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>"S-Param Güvende Hizmeti"("Hizmet"):</strong> İkinci el veya sıfır ürün (bundan böyle "ürün" olarak anılacaktır) alım-satımı konusunda "Alıcı"nın Portal üzerinden kredi kartıyla güvenli alışveriş yapabilmesine yönelik:
              </p>
              <p style="margin:0 0 15px 20px;">• "Alıcı" ve "Satıcı"nın "Portal" alt yapısını kullanarak çevrimiçi (online) ortamda anlaşmalarını sağlayacak alt yapının SAHİBİNDEN tarafından sunulması,</p>
              <p style="margin:0 0 15px 20px;">• "Satıcı" tarafından "kargo ile gönderim" tercihi ile ilanın yayınlanması,</p>
              <p style="margin:0 0 15px 20px;">• "Alıcı"nın elektronik ortamda "S-Param Güvende Hizmeti"ni satın alarak ilandaki ürünü sipariş etmesi,</p>
              <p style="margin:0 0 15px 20px;">• Ürün bedelinin; "Satıcı" adına "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından "Alıcı"nın kredi kartı/banka kartından çekilerek, ürünün satış ve teslimine yönelik işbu Sözleşme'de belirtilen süreçler tamamlanana kadar "SAHİBİNDEN"in anlaşmalı ödeme kuruluşunun hesabında muhafaza edilmesi,</p>
              <p style="margin:0 0 15px 20px;">• "Hizmet" bedelinin de; SAHİBİNDEN" adına "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından "Alıcı"nın kredi kartından çekilerek, işbu Sözleşme'de belirtilen süreçler tamamlanana kadar ödeme kuruluşunun hesabında muhafaza edilmesi,</p>
              <p style="margin:0 0 15px 20px;">• Ürünün "Satıcı" tarafından "Alıcı"ya "SAHİBİNDEN"in anlaşmalı kargo firması ile gönderilmesi</p>
              <p style="margin:0 0 15px 20px;">• Alıcı'nın ürünü iade etmek istemesi halinde; Alıcı'nın 2 (iki) günlük süre içinde "Portal" üzerinden iade talebinde bulunması ve anlaşmalı kargo firması ile ürünü iade etmesi, </p>
              <p style="margin:0 0 15px 20px;">• S-Param Güvende hizmetini satın alması üzerine Alıcı'nın yaptığı ödemenin kredi kartı veya banka kartından çekildiği an itibariyle güvence altına alınmış olması nedeniyle; ürünü iade etmesi halinde veya 2 (iki) günlük süre içinde iade sürecini başlatmaması halinde; S-Param Güvende Hizmet Bedeli'nin "SAHİBİNDEN"e aktarılması</p>
              <p style="margin:0 0 15px 0;">aşamalarını içeren "SAHİBİNDEN" hizmetidir.</p>
              <p style="margin:0 0 15px 0;">
                <strong>"S-Param Güvende Hizmet Bedeli" :</strong> SAHİBİNDEN"in değişen piyasa koşullarına göre belirlediği, ürün/ürünlere ilişkin ödenecek toplam ürün bedeli üzerinden hesaplanan, "Alıcı"nın kredi kartı/banka kartından "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından çekilen, işbu Sözleşme'de belirtilen süreçlerin tamamlanması üzerine "SAHİBİNDEN"e aktarılan hizmet bedelidir. Ürün bedeli, "Alıcı"nın kredi kartından veya banka kartından SAHİBİNDEN'in anlaşmalı ödeme kuruluşu tarafından çekildiği an itibariyle güvence altına alındığından; "Alıcı"nın S-Param Güvende hizmetinden cayma hakkı yoktur. "Alıcı"nın S-Param Güvende hizmetini satın alması üzerine yaptığı ödeme güvence altına alındığından SAHİBİNDEN S-Param Güvende hizmet bedeline hak kazanır. Sadece ürünün "Satıcı" tarafından kargoya verilmemesi veya ürün kargoya verilmeden satışının Satıcı tarafından iptal edilmesi halinde; "S-Param Güvende Hizmet Bedeli" "Alıcı"ya iade edilir, diğer tüm hallerde "S-Param Güvende Hizmet Bedeli" SAHİBİNDEN'in hesabına aktarılır.
              </p>
              <p style="margin:0 0 15px 0;">Taraflar, işbu Sözleşme hükümleri kapsamında, ürün bedelinin "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu nezdinde muhafaza edilmesi ve ürün satış ve teslim süreçlerinin tamamlanması üzerine "Hizmet" koşullarına uygun olarak ilgili tarafa aktarılması işlemlerinin koordinasyonunun "SAHİBİNDEN" tarafından yürütülmesinde mutabıktır.</p>
              <p style="margin:0 0 15px 0;">
                <strong>3. SÖZLEŞMENİN KONUSU VE KAPSAMI</strong>
              </p>
              <p style="margin:0 0 15px 0;">İşbu "Sözleşme"nin konusu, "S-Param Güvende Hizmeti"nin işleyişinin sağlanabilmesi için; "Hizmet"ten yararlanma koşulları ile "Alıcı"nın ve "Satıcı"nın hak ve yükümlülüklerinin belirlenmesidir.</p>
              <p style="margin:0 0 15px 0;">İşbu Sözleşme'nin imzalanması, "Alıcı" ile "Satıcı"nın Portal'da hesap açma aşamasında onaylamış oldukları Bireysel Hesap Sözleşmesi hükümlerinin uygulanmasını engellemeyecektir.</p>
              <p style="margin:0 0 15px 0;">
                <strong>4. TARAFLARIN HAK VE YÜKÜMLÜLÜKLERİ</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1 "Alıcı"nın Hak ve Yükümlülükleri</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.1</strong> "Alıcı", işbu Sözleşme hükümlerini kabul etmekle, "Hizmet" hakkında "SAHİBİNDEN" tarafından "Portal"da belirlenen tüm kurallara, duyurulara, bildirimlere ve yürürlükteki mevzuata uygun hareket edeceğini kabul ve taahhüt etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.2</strong> "Alıcı", "SAHİBİNDEN"in "Yer Sağlayıcı" ve "Aracı Hizmet Sağlayıcı" sıfatıyla faaliyet gösterdiğini, ürünün sahibi olmadığını, "Portal"da yayınlanan ilanlardaki ürünler ile ilgili satıcı, tedarikçi, imalatçı-ithalatçı, bayi veya benzeri herhangi bir ilişkisinin/sıfatının bulunmadığını, "Aracı Hizmet Sağlayıcı"nın 6502 sayılı Tüketicinin Korunması Hakkındaki Kanun ve 6563 sayılı Elektronik Ticaretin Düzenlenmesi Hakkında Kanun uyarınca hiçbir yasal sorumluluğu bulunmadığını, satın aldığı ürün ile ilgili iade işlemleri de dahil olmak üzere yaptığı ürün alımı ile ilgili her türlü talebinin yegane muhatabının sadece "Satıcı" olduğunu; "SAHİBİNDEN"in ürünün satışı ve kargo ile gönderilmesine yönelik "Alıcı" ve "Satıcı" arasında gerçekleşen işlemlerin hiçbir aşamasına taraf olmadığını; mobil uygulama veya internet sitesi üzerinden satın aldığı ürünün "Satıcı" tarafından tedarik edilerek kendisine gönderileceğini kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.3</strong> "Alıcı", ürünün geç teslimi, teslim edilmemesi, hasarlı teslimi, ilandakinden farklı ürünün gönderilmesi, ürünün ayıplı/kusurlu/hasarlı olması, üründe üretim hatası bulunması, "Portal"da belirtilen yasaklı ürünlerden olması, orijinal olmaması, ürünün tanıtımında kullanılan yazılı ve/veya görüntülü açıklamaların doğru olmaması veya eksik olması da dahil olmak ve sayılanlarla sınırlı olmamak üzere; ürün/hizmet ile ilgili hiçbir konu hakkında SAHİBİNDEN'in bilgi sahibi olmadığını ve bilgi sahibi olması gerekmediğini, ürünü/hizmeti veya kalitesini veya "Satıcı"nın güvenilirliğini "SAHİBİNDEN"in taahhüt veya garanti etme yükümlülüğü bulunmadığını, Aracı Hizmet Sağlayıcı'nın sadece "Alıcı" tarafından ödenen ürün bedelini "Hizmet" koşullarına uygun hareket edilmesi halinde "Satıcı"ya iletmekle yükümlü olduğunu, satış veya teslim süreçlerinde yaşayabileceği herhangi bir uygunsuzluk hakkında "SAHİBİNDEN"den talepte bulunmayacağını, "SAHİBİNDEN"e karşı yasal yollara müracaat etmeyeceğini kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.4</strong> "Alıcı"nın, sipariş vermesi üzerine adı-soyadı/ticari unvanı, açık teslimat adresi, telefon numarasını içeren "kargo kodu"; "Satıcı" ve "Anlaşmalı Kargo" firması ile paylaşılacaktır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.5</strong> "Alıcı", satın aldığı ürünün kendisine kargo ile gönderilmesi üzerine ürünü teslim almakla yükümlü olduğunu, teslim aldıktan sonra ürünü onaylaması halinde veya ürünü "Portal"da yayınlanan kurallarda belirtilen şekilde ve belirtilen süre içinde "Satıcı"ya iade etmemesi halinde; ürün bedelinin "Satıcı"ya aktarılacağını, "S-Param Güvende Hizmet Bedeli"nin ise "SAHİBİNDEN"e aktarılacağını kabul, beyan ve taahhüt eder. "Alıcı"nın veya Alıcı tarafından sipariş sırasında ürünü teslim almaya yetkili kılınacak kişinin teslimat sırasında adreste bulunmaması gibi sebeplerle ürünü geç teslim almasından "Alıcı" sorumlu olacaktır. "SAHİBİNDEN", ürüne ve teslim edileceği tarihe ilişkin hiçbir taahhütte bulunmamakta olup; ürüne ve teslim tarihine ilişkin sadece "Satıcı"' tarafından taahhütte bulunulabilir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.6</strong> "Alıcı", işbu sözleşme konusu ürünün satışının; "Satıcı"nın mesleki veya ticari amaçla hareket etmemesi nedeniyle 6502 sayılı Tüketicinin Korunması Hakkındaki Kanun kapsamına girmediğini, dolayısıyla tüketici mevzuatındaki cayma hakkına sahip olmayacağını peşinen kabul ve taahhüt etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.7</strong> "Alıcı", "S-Param Güvende Hizmeti" kapsamında ürün satın alması nedeniyle; ürünü teslim aldığı tarihten itibaren başlayan 2 (iki) günlük süre içinde iade talebinde bulunduktan sonra "Portal" üzerinden verilen kargo kodunu "SAHİBİNDEN"in anlaşmalı kargo firmasına vererek ürünü iade edebileceğini, "Satıcı"ya iade sürecinde sadece SAHİBİNDEN'in anlaşmalı kargo firmasına ürünü teslim edeceğini ancak işbu 2 (iki) günlük süre içinde iade sürecini başlatmaması halinde sözleşmeden dönme hakkına sahip olmayacağını ve anılan 2 (iki) günlük süre sonunda ürün bedelinin "Satıcı"ya aktarılacağını, "SAHİBİNDEN"in de S-Param Güvende Hizmet Bedeline hak kazanacağını peşinen kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.8</strong> "Alıcı" ürün alım esnasında kullandığı kredi kartı bilgilerinin, "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu nezdinde saklanmasını talep edebilir. Kart bilgilerinin saklanmasına ilişkin tüm güvenlik önlemleri ödeme kuruluşunca sağlanacaktır. "Alıcı" kredi kartı bilgilerinin güvenliğinin sağlanması konusunda "SAHİBİNDEN"in herhangi bir sorumluluğu olmayacağını, her tür talep, dava ve şikâyetinin muhatabının yalnızca üçüncü kişi konumundaki anlaşmalı ödeme kuruluşu olduğunu kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.1.9</strong> "Alıcı", işbu Sözleşme'yi veya bu Sözleşme'nin kapsamındaki hak ve yükümlülüklerini kısmen veya tamamen herhangi bir üçüncü kişiye devredemez.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2</strong> "Satıcı"nın Hak ve Yükümlülükleri
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.1</strong> "Satıcı"; fotoğraflar, açıklamalar gibi "Portal"da kendisi tarafından sağlanan ürüne ilişkin tüm bilgi ve içeriklerin doğru ve eksiksiz olacağını, "Portal"daki ilan verme kurallarına uygun olarak ilan vereceğini, ürünün ilanını vermeye ve satışa sunmaya yetkili olacağını, ilandaki üründen başkaca ürünleri satmaya veya pazarlamaya yönelik ifadeler kullanmayacağını, ürün satışı yaptığı herhangi bir mecraya yönelik bir URL adresine (link) yönlendirme yapmayacağını veya bu amaca yönelik davranışlarda bulunmayacağını, başka ürünleri aynı ilanda listelemeyeceğini, ürüne ait olmayan açıklamalarda bulunmayacağını, mevzuata ve genel ahlaka uygun olmayan açıklamalara, üçüncü kişilerin kişilik haklarını veya fikri haklarını ihlal edecek içeriklere, yanıltıcı bilgilere ve fotoğraflara yer vermeyeceğini kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.2</strong> "Satıcı"; "SAHİBİNDEN"in ilandaki görsel ve bilgilerin doğruluğunu, hukuka uygunluğunu, ürünün kalitesini taahhüt ve garanti etmekle yükümlü olmadığını, söz konusu bilgi ve içeriklerin eksik veya hatalı olmasından dolayı ortaya çıkabilecek herhangi bir zarardan "SAHİBİNDEN"in sorumlu tutulamayacağını, sorumluluğun kendisine ait olduğunu ve kendi ürünleri ve ilanları sebebiyle "SAHİBİNDEN" aleyhine hükmedilecek ceza veya tazminatların tamamından kendisinin sorumlu olacağını kabul, beyan ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.3</strong> "Satıcı", Elektronik Ticaretin Düzenlenmesi ve Kişisel Verilerin Korunması mevzuatı dahil olmak üzere tüm yasal düzenlemelere uygun davranacağını, "Alıcı"nın ilgili mevzuattan kaynaklanan tüm hak ve yükümlülüklerinin muhatabının bizzat kendisi olacağını, uygunsuz davranışı nedeniyle "Alıcı"nın, "SAHİBİNDEN"in ve/veya üçüncü kişilerin uğradığı ve uğrayacağı doğrudan ve dolaylı her türlü zarar ve ziyanı karşılayacağını, ihlale ve ihlalin giderilmesine ilişkin "SAHİBİNDEN" tarafından bildirilecek aksiyonları derhal yerine getireceğini, "SAHİBİNDEN"in uygulayacağı tedbir ve yaptırımlara itirazda bulunmayacağını kabul ve taahhüt etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.4</strong> "Satıcı", ürün bedelinin "SAHİBİNDEN'in anlaşmalı ödeme kuruluşu tarafından "Alıcı"nın kredi kartından veya banka kartından tahsil edildiği bilgisinin kendisine iletilmesinden itibaren 3 (üç) iş günü içinde ürünü "Portal" üzerinden verilen "kargo kodu" ile "kargo ile gönderim" koşullarına uygun olarak, ürünün ambalajı konusunda gerekli özeni göstererek, "SAHİBİNDEN"in anlaşmalı kargo firmalarından birine teslim edecek ve "Alıcı"ya gönderecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.5</strong> "Satıcı", "Portal" üzerinden verilen "kargo kodu" ile ürünü "SAHİBİNDEN"in anlaşmalı kargo firmalarından birine teslim ederek "Alıcı"ya göndermesi halinde kargo ücreti ödemeyecektir. Ancak "Satıcı" ürünü anlaşmalı kargo firması dışında bir kargo firmasına teslim ederse; S-Param Güvende hizmeti kapsamı dışına çıkmış olacağını, bu durumda ürün satışının "S-Param Güvende Hizmeti" ile gerçekleşmemiş olmasından ötürü işbu Ürün Satış Sözleşmesinden dönmüş sayılacağını, dolayısıyla ürün bedelinin "Alıcı"ya iade edileceğini kabul etmektedir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>4.2.6</strong> "Satıcı" işbu Sözleşme'yi veya bu Sözleşme'nin kapsamındaki hak ve yükümlülüklerini kısmen veya tamamen herhangi bir üçüncü kişiye devretmeyecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5. S-PARAM GÜVENDE HİZMETİNİN İŞLEYİŞİ</strong>
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.1</strong> "Alıcı" ve "Satıcı" ürün satışına yönelik işbu sözleşmeyi okuyup, kabul edip, "Anlaşmalı Kargo ile Gönderim Koşulları"nı onaylayarak, tüm düzenlemelere uygun davranmayı kabul ve taahhüt eder.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.2</strong> "S-Param Güvende Hizmet Bedeli"nin ve ürün bedelinin ödenmesinde "Alıcı"ya anlaşmalı bankalar aracılığıyla taksitle ödeme kolaylığı sunulabilir. "Alıcı" taksitle ödemeyi tercih ederse, taksitli ödemeden doğan taksit (vade) farkını bankaya ödemeyi kabul eder. Taksit farkı, SAHİBİNDEN tarafından "Alıcı"ya fatura edilir ve ürünün satış ve teslimine ilişkin işbu Sözleşme'de belirtilen süreçlerin tamamlanması halinde taksit farkı tutarı "SAHİBİNDEN"in anlaşmalı ödeme kuruluşu tarafından ilgili bankaya aktarılır. Taksit farkı bankaya ve ürün tutarına göre değişiklik gösterebilir. Mevzuat gereği belirli kategorilerde taksitli ödeme kısıtlaması uygulanır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.3</strong> Alıcının, ödemeyi yaparak sipariş vermesi üzerine; ürünün "Satıcı" tarafından "Alıcı"ya kargo ile gönderilmesi amacıyla "Alıcı"nın adı-soyadı/ticari unvanı, açık teslimat adresi, telefon numarasını içeren "kargo kodu"; "Satıcı" ve "Anlaşmalı Kargo" firması ile paylaşılır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.4</strong> "Satıcı" tarafından anlaşmalı kargo ile gönderilen ürünü "Alıcı" teslim almakla yükümlüdür. "Alıcı" satın aldığı ürünü teslim aldığı tarihten itibaren 2 (iki) gün içinde onaylar veya iade etmek üzere iade sürecini başlatır. "Alıcı" ürünü teslim aldıktan sonra Portal üzerinden onaylaması halinde; ürün satış ve teslim süreci tamamlanmış olur ve ürün bedeli "Satıcı"ya, "S-Param Güvende Hizmet Bedeli" SAHİBİNDEN'e aktarılır. "Alıcı" ürüne onay verdikten sonra verdiği onayı hiçbir şekilde geri alamaz, verdiği onay ile iade hakkı sona erer. Ayrıca, ürünün onayının veya iadesinin S-Param Güvende hizmeti kurallarına uygun olarak süresi içinde gerçekleştirilmemesi veya ürünün anlaşmalı kargo firmasına teslim edilmemesi halinde de; ürün satış ve teslim süreci tamamlanmış sayılır ve ürün bedeli "Satıcı"ya, "S-Param Güvende Hizmet Bedeli" SAHİBİNDEN'e aktarılır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.5</strong> "Alıcı" ürünü "Satıcı"ya iade etmek isterse; "Portal"da ürünü iade etmeye yönelik butona basarak, iade bildiriminden itibaren 3 (üç) iş günü içinde ekranda gösterilen "kargo kodu" ile "Satıcı"ya iade edilmek üzere ürünü kargo ücreti ödemeksizin anlaşmalı kargo firmasına teslim eder. "Alıcı", ürünü ambalajı, varsa standart aksesuarları ve faturası ile birlikte kullanılmamış olarak, eksiksiz ve hasarsız olarak iade etmelidir. "Alıcı", "S-Param Güvende" hizmeti kapsamından çıkmamak için, ürünü mutlaka anlaşmalı kargo firması ile iade etmelidir. "Alıcı"nın ürünü "Satıcı"ya iade etmesi halinde ya da ürünün "Satıcı" tarafından kargoya verilmemesi veya Satıcı tarafından ürün kargoya verilmeden satışının Satıcı tarafından iptal edilmesi hallerinde; ürün bedeli "Alıcı"ya iade edilecektir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.6</strong> "Alıcı"nın ürünü SAHİBİNDEN'in anlaşmalı kargo firması ile "Satıcı"ya iade etmemesi halinde; ürün satış ve teslim süreci tamamlanmış sayılacak, ürün bedeli "Satıcı"ya aktarılacak, "S-Param Güvende Hizmet Bedeli" ise SAHİBİNDEN'e aktarılacaktır. Ürün bedelinin aktarımına dair bankadan veya anlaşmalı ödeme kuruluşundan kaynaklanabilecek olası gecikmelerden "SAHİBİNDEN" sorumlu tutulamaz.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.7</strong> Alıcı'nın ürünü iade etmesi halinde; ürünün Satıcı'ya teslim edilmesinden itibaren 24 (yirmi dört) saatlik süre içinde "Satıcı" tarafından ürünün teslim alındığı onaylanmazsa; ürün bedeli 48 saat içinde "Alıcı"ya iade edilir.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.8</strong> "SAHİBİNDEN" şüpheli işlem tespit etmesi halinde; "Alıcı ve "Satıcı" arasındaki işlemi durdurabilir, "S-Param Güvende hizmetini duraklatarak ek bilgi/belge talep edebilir, "Alıcı" ve/veya "Satıcı"nın hesabını geçici veya sürekli olarak durdurabilir. Bu tür işlemler sebebiyle ürün satış ve teslimine ilişkin süreçlerde gecikmeye sebebiyet verildiğinden bahisle "SAHİBİNDEN"den herhangi bir talepte bulunulamaz.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.9</strong> Alıcı veya Satıcı'nın "Anlaşmalı Kargo ile Gönderim Koşullarına" aykırı hareket etmesi nedeniyle SAHİBİNDEN'in herhangi bir zarara uğraması, idari para cezası veya tazminat ödemek durumunda kalması halinde; SAHİBİNDEN'in zarara uğramasına sebep olan Alıcı veya Satıcı; SAHİBİNDEN'in maddi ve manevi, doğrudan ve dolaylı her türlü zararı ile idari para cezalarını tüm fer'ileri ile birlikte derhal karşılayacaktır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>5.10</strong> Ürün bedeli, "Alıcı"nın kredi kartından veya banka kartından SAHİBİNDEN'in anlaşmalı ödeme kuruluşu tarafından çekildiği an itibariyle güvence altına alındığından; "Alıcı"nın S-Param Güvende hizmetinden cayma hakkı yoktur. Alıcı"nın S-Param Güvende hizmetini satın alması üzerine yaptığı ödeme güvence altına alındığından SAHİBİNDEN S-Param Güvende hizmet bedeline hak kazanır. Sadece ürünün "Satıcı" tarafından kargoya verilmemesi veya ürün kargoya verilmeden satışının Satıcı tarafından iptal edilmesi halinde; "S-Param Güvende Hizmet Bedeli" "Alıcı"ya iade edilir, diğer tüm hallerde "S-Param Güvende Hizmet Bedeli" SAHİBİNDEN'in hesabına aktarılır.
              </p>
              <p style="margin:0 0 15px 0;">
                <strong>6. UYGULANACAK HUKUK VE YETKİ</strong>
              </p>
              <p style="margin:0 0 15px 0;">İşbu Sözleşme'nin uygulanmasında, yorumlanmasında ve işbu Sözleşme dâhilinde doğan hukuki ilişkilerin yönetiminde yabancılık unsuru bulunması durumunda Türk kanunlar ihtilafı kuralları hariç olmak üzere Türk Hukuku uygulanacaktır. İşbu Sözleşme'den dolayı doğan veya doğabilecek her türlü ihtilafın hallinde İstanbul Merkez (Çağlayan) Mahkemeleri ve İcra Daireleri yetkilidir.</p>
              <p style="margin:0 0 15px 0;">İşbu Sözleşme 6 (altı) maddeden ibaret olup, "Alıcı" ve "Satıcı" tarafından elektronik ortamda onaylanmak suretiyle yürürlüğe girmiştir.</p>
            </div>
          </div>
          <div class="card-shopping-closed-error-popup">
            <div class="popup">
              <h3>Uyarı</h3>
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
              <p class="payment-loader-content-text">İşleminiz gerçekleştiriliyor</p>
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
                <a href="https://www.sahibinden.com/kurumsal/hakkimizda/" title="Hakkımızda"> Hakkımızda</a>
              </li>
              <li>
                <a href="/ikinci-elde-gelecek-var" target="_blank" title="Sürdürülebilirlik"> Sürdürülebilirlik</a>
              </li>
              <li>
                <a href="https://s-kariyer.com/" title="İnsan Kaynakları"> İnsan Kaynakları</a>
              </li>
              <li>
                <a href="/kurumsal/haberler/" title="Haberler"> Haberler</a>
              </li>
              <li>
                <a rel="nofollow no-follow" href="https://www.sahibinden.com/kurumsal/iletisim/" title="İletişim"> İletişim</a>
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
                <a href="https://www.sahibinden.com/param-guvende/bireysel" title="S - Param Güvende" corporate-href="https://www.sahibinden.com/param-guvende/kurumsal"> S - Param Güvende</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/guvenli-e-ticaret" title="Güvenli e-Ticaret (GeT)"> Güvenli e-Ticaret (GeT)</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/toplu-urun-girisi" title="Toplu Ürün Girişi"> Toplu Ürün Girişi</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/reklam/" title="Reklam"> Reklam</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sahibinden-dogal-reklam/" title="sahibinden Doğal Reklam"> sahibinden Doğal Reklam</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/mobil" title="Mobil"> Mobil</a>
              </li>
            </ul>
          </li>
          <li>
            <h5>Mağazalar</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/neden-magaza" title="Neden Mağaza?"> Neden Mağaza?</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/magaza-ac?sizi-arayalim" title="Mağaza Açmak İstiyorum"> Mağaza Açmak İstiyorum</a>
              </li>
            </ul>
          </li>
          <li>
            <h5>Gizlilik ve Kullanım</h5>
            <ul>
              <li>
                <a href="https://www.sahibinden.com/guvenli-alisverisin-ipuclari/" title="Güvenli Alışverişin İpuçları"> Güvenli Alışverişin İpuçları</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/" title="Sözleşmeler ve Kurallar"> Sözleşmeler ve Kurallar</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/bireysel-uyelik-sozlesmesi-0" title="Hesap Sözleşmesi"> Hesap Sözleşmesi</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/kullanim-kosullari-35" title="Kullanım Koşulları"> Kullanım Koşulları</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/site-haritasi" title="Site Haritası"> Site Haritası</a>
              </li>
              <li>
                <a href="https://www.sahibinden.com/sozlesmeler/kisisel-verilerin-korunmasi-58" title="Kişisel Verilerin Korunması"> Kişisel Verilerin Korunması</a>
              </li>
              <li>
                <a href="https://yardim.sahibinden.com/hc/tr" title="Yardım ve İşlem Rehberi"> Yardım ve İşlem Rehberi</a>
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
              <p>7/24 Müşteri Hizmetleri</p>
              <span>0 850 222 44 44</span>
            </li>
            <li class="help-center">
              <p>Yardım Merkezi</p>
              <a href="https://yardim.sahibinden.com/hc/tr" title="yardim.sahibinden.com">yardim.sahibinden.com</a>
            </li>
            <!--<li class="store-logos"><a target="_blank" href="https://play.google.com/store/apps/details?id=com.sahibinden" class="store-logo googleplay" title="sahibinden.com"></a><a target="_blank" href="https://itunes.apple.com/tr/app/sahibinden.com-mobil/id418535251?mt=8" class="store-logo apple" title="sahibinden.com"></a></li>-->
            <li class="security-sign-footer">
              <a target="_blank" href="https://www.guvendamgasi.org.tr/firmadetay.php?Guid=25680f1d-270b-11ea-991b-48df373f4850" class="security-sign"></a>
            </li>
          </ul>
          <div class="language-selection">
            <div class="current-language">
              <div class="label">Dil Seçimi (Language)</div>
              <div class="selected-text tr">Türkçe (Turkish)</div>
            </div>
            <div class="language-list">
              <a rel="nofollow" href="/money-safe/make-payment?itemId=63d6d3dbf8692a5be6687222&STPNS=NEW" title="English" class="language-selection-link en"> İngilizce (English)</a>
            </div>
          </div>
        </div>
        <div class="etbis-footer">
          <a href="https://etbis.eticaret.gov.tr/sitedogrulama/A5A0C8D9C9844AA4881F75323D212DA1" target="_blank">
            <img src="data:image/jpeg;base64, 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" width="80" height="93" />
          </a>
        </div>
        <p class="warningText warning-text"> sahibinden.com'da yer alan kullanıcıların oluşturduğu tüm içerik, görüş ve bilgilerin doğruluğu, eksiksiz ve değişmez olduğu, yayınlanması ile ilgili yasal yükümlülükler içeriği oluşturan kullanıcıya aittir. Bu içeriğin, görüş ve bilgilerin yanlışlık, eksiklik veya yasalarla düzenlenmiş kurallara aykırılığından sahibinden.com hiçbir şekilde sorumlu değildir. Sorularınız için ilan sahibi ile irtibata geçebilirsiniz. Yer Sağlayıcı Belge No : 581</p>
        <div class="post-classified-free-text">
          <p class="freeClassifiedLimitNotice">(*) Bireysel hesap sahipleri için, limitli adetlerde, belirli kategorilerde ve belirli tekliflerde</p>
        </div>
        <ul class="mobil footer-nav disable">
          <li>
            <a href="/" title="Anasayfa">Anasayfa</a>
          </li>
          <li>
            <a href="" title="Masaüstü Görünüm">Masaüstü Görünüm</a>
          </li>
        </ul>
        <p class="copyright mobil"> Copyright © 2000-2023 sahibinden.com</p>
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