<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>Le Grand Prix de Photographie By Darem Bouchentouf</title>
		<meta charset="utf-8" />
		<meta name="description" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta name="keywords" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Le Grand Prix de Photographie By Darem Bouchentouf" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{asset('assets-metronic/media/logos/Concours-photo-SocialLogoTransicon.png')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href=" {{asset('assets-metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets-metronic/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
<!-- Meta Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1003648677850338');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1003648677850338&ev=PageView&noscript=1"
	/></noscript>
	
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Page bg image-->
            <style>body { background-image: url({{asset('assets-metronic/media/auth/bg4.jpg')}}); } [data-bs-theme="dark"] body { background-image: url( { { asset('assets-metronic/media/auth/bg4-dark.jpg') } } ); }</style>

			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="/" class="mb-7">
							<img alt="Logo" class="h-75px"  src="{{asset('assets-metronic/media/logos/Concours-photo-SocialLogoTransicon.png')}}"/>
							<img alt="Logo" class="h-200px" src="{{asset('assets-metronic/media/logos/logo-gpp.png')}}"/>
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0"></h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
					<!--begin::Card-->
					<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
						<!--begin::Wrapper-->
						<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
							<!--begin::Form-->
							<form class="form w-100"  id="kt_sign_up_form" >
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h4 class="text-dark fw-bolder mb-3">Connectez-vous pour participer au grand prix de la photographie et tenter de gagner 100 000 DHS !</h4><br>
									<h3 class="text-dark fw-bolder mb-3" dir="rtl" >قم بتسجيل الدخول للمشاركة في الجائزة الكبرى للتصوير الفوتوغرافي وحاول الفوز بـ 100,000 درهم!</h3>
									<!--end::Title-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-3 mb-9">
									<!--begin::Col-->

									@if (session('error'))
										<div class="alert alert-danger text-center">
											{!! session('error') !!}
										</div>
									@endif
									<p id="googleMessage" class="text-center" style="display: none; text-align: center;">
										Inscrivez-vous avec votre compte Facebook.<br>Pour l'inscription avec le compte Google veuillez utiliser Chrome ou autre navigateur, directement sur le site www.grandprixphoto.ma
									</p>

									<div class="col-md-12" id="googleButton" >
										<!--begin::Google link=-->
										<a href="/backoffice/auth/google" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="{{asset('assets-metronic/media/svg/brand-logos/google-icon.svg')}}" class="h-15px me-3" />Connectez-vous avec Google</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->

									<!--begin::Col-->
									<div class="col-md-12">
										<!--begin::Google link
										<a href="/backoffice/auth/facebook" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                            <img alt="Logo" src="{{asset('assets-metronic/media/svg/brand-logos/facebook-2.svg')}}" class="theme-light-show h-15px me-3" />
										    <img alt="Logo" src="{{asset('assets-metronic/media/svg/brand-logos/facebook-2.svg')}}" class="theme-dark-show h-15px me-3" />Connectez-vous avec Facebook
										</a>-->
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->

								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<span class="text-dark mb-3">«Conformément à la loi 09-08, vous disposez d’un droit d’accès, de rectification et d’opposition au traitement de vos données personnelles. Ce traitement et le transfert de données ont été autorisé par la CNDP sous le numéro A-PO-429/2024»
										<br>En continuant, vous acceptez <a style="font-weight: bold; color: rgb(17, 17, 17);" href="https://grandprixphoto.ma/reglement-du-concours/"> conditions générales d’utilisation</a>, notamment la mention relative à la protection de données personnelles</span>
										<div class="zI7 iyn Hsu" style="border-bottom: 1px solid rgb(222, 222, 222); margin: 10px auto; width: 110px;"></div>
										<span class="text-dark  mb-3" dir="rtl" >"بموجب القانون 09-08، لديك الحق في الوصول إلى بياناتك الشخصية وتصحيحها والاعتراض عليها. تمت الموافقة على هذه المعالجة ونقل البيانات من قبل CNDP تحت الرقم A-PO-429/2024."
										<br>من خلال المتابعة، فإنك توافق على <a style="font-weight: bold; color: rgb(17, 17, 17);" href="https://grandprixphoto.ma/reglement-du-concours/">الشروط العامة للاستخدام</a>، ولا سيما الإشعار المتعلق بحماية البيانات الشخصية</span>

										
									<!--end::Title-->
								</div>
								<!--begin::Heading-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Footer-->
						<div class="d-flex flex-stack px-lg-10">
							<!--begin::Links-->
							<!-- <div class="d-flex fw-semibold text-primary fs-base gap-5">
								<a href="https://grandprixphoto.ma/reglement-du-concours" target="_blank">Terms</a>
							</div> -->
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->

		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('assets-metronic/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets-metronic/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('assets-metronic/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
		<script>
			// Detect if the user is coming from Instagram browser
			var isInstagramBrowser = navigator.userAgent.includes("Instagram");
		
			// If the user is coming from Instagram browser, hide the Facebook button and show the message
			if (isInstagramBrowser) {
				document.getElementById("googleButton").style.display = "none";
				document.getElementById("googleMessage").style.display = "block";
			}
		</script>
	</body>
	<!--end::Body-->
</html>