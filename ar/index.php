<?php
// تحميل ملف JSON
$content = json_decode(file_get_contents('../content.json'), true);

// تحديد اللغة
$lang = 'ar';

// STATIC
$view_services = $content['static'][$lang]['view_services'];
$who_we_are = $content['static'][$lang]['who_we_are'];
$contact_with_us_on = $content['static'][$lang]['contact_with_us_on'];
$follow_us = $content['static'][$lang]['follow_us'];
$our_location_on_the_map = $content['static'][$lang]['our_location_on_the_map'];
$our_services = $content['static'][$lang]['our_services'];
$learn_more = $content['static'][$lang]['learn_more'];
$borders_we_serve = $content['static'][$lang]['borders_we_serve'];
$why_us_title = $content['static'][$lang]['why_us'];
$our_mission = $content['static'][$lang]['our_mission'];
$our_vision = $content['static'][$lang]['our_vision'];
$our_value = $content['static'][$lang]['our_value'];
$active_border_points = $content['static'][$lang]['active_border_points'];
$shipments_cleared = $content['static'][$lang]['shipments_cleared'];
$years_of_experience = $content['static'][$lang]['years_of_experience'];
$client_satisfaction = $content['static'][$lang]['client_satisfaction'];
$active_border_points_text = $content['static'][$lang]['active_border_points_text'];
$shipments_cleared_text = $content['static'][$lang]['shipments_cleared_text'];
$years_of_experience_text = $content['static'][$lang]['years_of_experience_text'];
$client_satisfaction_text = $content['static'][$lang]['client_satisfaction_text'];
$address_text = $content['static'][$lang]['address_text'];
$working_hours_text = $content['static'][$lang]['working_hours_text'];
$contact_us_text = $content['static'][$lang]['contact_text'];
$email_text = $content['static'][$lang]['email_text'];
$whatsapp_text = $content['static'][$lang]['whatsapp_text'];
$phone_text = $content['static'][$lang]['phone_text'];
$home = $content['static'][$lang]['home'];




// META
$title = $content['meta'][$lang]['title'];
$description = $content['meta'][$lang]['description'];
$keywords = $content['meta'][$lang]['keywords'];

// HERO
$hero_company = $content['hero'][$lang]['company'];
$hero_headline = $content['hero'][$lang]['headline'];
$hero_text = $content['hero'][$lang]['text'];
$hero_cta = $content['hero'][$lang]['cta'];

// ABOUT
$about_title = $content['about'][$lang]['title'];
$about_text = $content['about'][$lang]['text'];

// SERVICES - Customs Clearance
$customs_title = $content['services']['customs_clearance'][$lang]['title'];
$customs_description = $content['services']['customs_clearance'][$lang]['description'];
$customs_items = $content['services']['customs_clearance'][$lang]['items'];

// SERVICES - Documentation Handling
$docs_title = $content['services']['documentation'][$lang]['title'];
$docs_description = $content['services']['documentation'][$lang]['description'];
$docs_items = $content['services']['documentation'][$lang]['items'];

// BORDERS
$borders_land = $content['borders'][$lang]['land'];
$borders_sea = $content['borders'][$lang]['sea'];
$borders_air = $content['borders'][$lang]['air'];

// WHY US
$why_us = $content['why_us'][$lang];

// CONTACT & SOCIAL
$contact_text = $content['contact_social'][$lang]['contact_text'];
$social_text = $content['contact_social'][$lang]['social_text'];

// SOCIAL MEDIA
$facebook = $content['social_media']['facebook'];
$twitter = $content['social_media']['twitter'];
$linkedin = $content['social_media']['linkedin'];
$instagram = $content['social_media']['instagram'];
$youtube = $content['social_media']['youtube'];
$tiktok = $content['social_media']['tiktok'];

// CONTACT
$whatsapp = $content['social_media']['whatsapp'];
$telegram = $content['social_media']['telegram'];
$email = $content['social_media']['email'];
$phone = $content['social_media']['phone'];

// ADDRESS & MAP
$address = $content['address'][$lang];
$map_link = $content['map_link'];
$working_hours = $content['working_hours'][$lang];

// FOOTER
$footer_text = $content['footer_text'][$lang];
$privacy_policy = $content['privacy_policy'][$lang];
$terms_of_service = $content['terms_of_service'][$lang];

// MISSION & VISION
$mission = $content['mission'][$lang];
$vision = $content['vision'][$lang];

// CORE VALUES
$integrity_title = $content['core_values']['integrity']['title'][$lang];
$integrity_description = $content['core_values']['integrity']['description'][$lang];

$consistency_title = $content['core_values']['consistency']['title'][$lang];
$consistency_description = $content['core_values']['consistency']['description'][$lang];

$customer_satisfaction_title = $content['core_values']['customer_satisfaction']['title'][$lang];
$customer_satisfaction_description = $content['core_values']['customer_satisfaction']['description'][$lang];
?>

<!DOCTYPE html>
<html lang="ar">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- hreflang tags -->
    <link rel="alternate" hreflang="ar" href="https://wasaldayim.com/ar/index.php" />
    <link rel="alternate" hreflang="en" href="https://wasaldayim.com/en/index.php" />
    <link rel="alternate" hreflang="x-default" href="https://wasaldayim.com/index.php" />


    <!-- Title -->
    <title><?php echo $title ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/logo4.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Stoshi font -->
    <link rel="stylesheet" href="../assets/css/satoshi.css">
    <!-- swiper Slider -->
    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
    <!-- AOS -->
    <link rel="stylesheet" href="../assets/css/aos.css">
    <!-- Circle Progress -->
    <link rel="stylesheet" href="../assets/css/animated-radial-progress.css">
    <!-- magnific -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body>

    <!--==================== Preloader Start ====================-->
    <div class="preloader bg-white tw-h-screen justify-content-center align-items-center tw-z-999 position-fixed top-0 tw-start-0 w-100 h-100">
        <div class="car-road">
            <div class="car">
                <div class="car-top">
                    <div class="window">
                    </div>
                </div>
                <div class="car-base">
                </div>
                <div class="wheel-left wheel">
                    <div class="wheel-spike">
                    </div>
                    <div class="wheel-center">
                    </div>
                </div>
                <div class="wheel-right wheel">
                    <div class="wheel-spike">
                    </div>
                    <div class="wheel-center">
                    </div>
                </div>
                <div class="head-light"></div>
            </div>
            <div class="road">
            </div>
        </div>
    </div>
    <!--==================== Preloader End ====================-->

    <!--==================== Overlay Start ====================-->
    <div class="overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap cursor-big">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- Custom Cursor Start -->
    <!-- <div class="cursor"></div> -->
    <!-- <span class="dot"></span> -->
    <!-- Custom Cursor End -->

    <!-- ======================= Offcanvas sidebar popup start ================================= -->
    <div class="offcanvas-sidebar tw-p-8 bg-white position-fixed top-0 end-0 tw-max-h-screen tw-z-999 max-w-400-px w-100 tw-translate-x-full overflow-y-auto">
        <button type="button" class="cursor-small offcanvas-sidebar__close border border-main-600 tw-w-10 tw-h-10 text-main-600 rounded-circle d-flex justify-content-center align-items-center tw-text-xl hover-bg-main-600 hover-text-white position-absolute tw-mt-8 top-0 tw-end-0 tw-me-8 z-1">
            <i class="ph-bold ph-x"></i>
        </button>

        <div dir="rtl" class="d-flex flex-column tw-gap-8 overflow-hidden">
            <div class="animate-item">
                <a href="./index.php" class="cursor-big">
                    <img src="../assets/images/logo/logo4.png" alt="Logo" class="max-w-200-px">
                </a>
            </div>
            <div>
                <h4 class="cursor-big tw-mb-5 animate-item"><?php echo $about_title; ?></h4>
                <p class="cursor-small text-neutral-950 animate-item"><?php echo $about_text; ?></p>
            </div>
            <div>
                <h4 class="cursor-big tw-mb-5 animate-item"><?php echo $contact_us_text; ?></h4>
                <div class="d-flex flex-column tw-gap-6">
                    <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                        <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-phone"></i>
                        </span>
                        <a href="tel:<?php echo $phone; ?>" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg"><?php echo $phone; ?></a>
                    </div>
                    <div class="cursor-small animate-item d-flex align-items-center tw-gap-5">
                        <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-envelope"></i>
                        </span>
                        <a href="mailto:<?php echo $email; ?>" class="text-main-two-600 hover-text-main-600 hover--translate-x-1 fw-medium tw-text-lg"><?php echo $email ?></a>
                    </div>
                    <div class="cursor-small animate-item d-flex align-items-start tw-gap-5">
                        <span class="tw-w-10 tw-h-10 flex-shrink-0 bg-main-600 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center">
                            <i class="ph ph-map-pin"></i>
                        </span>
                        <p class="text-main-two-600 fw-medium tw-text-lg"><?php echo $address ?></p>
                    </div>
                </div>
            </div>
            <div class="">
                <h4 class="cursor-big tw-mb-5 animate-item"><?php echo $follow_us ?></h4>
                <ul class="cursor-small d-flex align-items-center tw-gap-3 animate-item">
                    <li>
                        <a href="https://www.facebook.com/" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-facebook-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-tiktok-logo"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" class="tw-w-11 tw-h-11 border border-neutral-200 rounded-circle text-main-two-600 tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200">
                            <i class="ph ph-instagram-logo"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- ======================= Offcanvas sidebar popup End ================================= -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block scroll-sm position-fixed bg-white tw-w-300-px tw-h-screen overflow-y-auto tw-p-6 tw-z-999 tw--translate-x-full tw-pb-68 ">

        <button type="button" class="close-button position-absolute tw-end-0 top-0 tw-me-2 tw-mt-2 tw-w-605 tw-h-605 rounded-circle d-flex justify-content-center align-items-center text-main-two-600 bg-neutral-200 hover-bg-main-two-600 hover-text-white">
            <i class="ph ph-x"></i>
        </button>

        <div class="mobile-menu__inner">
            <a href="./index.php" class="mobile-menu__logo">
                <img src="../assets/images/logo/logo4.png" alt="Logo">
            </a>
            <div class="mobile-menu__menu">
                <!-- Nav menu Start -->
                <ul class="nav-menu cursor-small d-lg-flex align-items-center nav-menu--mobile d-block tw-mt-8">
                    <li class="nav-menu__item">
                        <a href="#services" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100 tw-pe-4"><?php echo $our_services ?></a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="#about" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100"><?php echo $who_we_are ?></a>
                    </li>
                    <li class="nav-menu__item">
                        <a href="#contact" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-9 fw-medium w-100"><?php echo $contact_us_text ?></a>
                    </li>
                </ul>
                <!-- Nav menu End  -->

            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->


    <div class="absolute-headers md-bg-main-two-600 position-absolute top-0 tw-start-0 tw-end-0 w-100 tw-z-99 header py-0">
        <!-- ============================ Header Top Start ==================================== -->
        <div class="top-header-three z-1 d-sm-block d-none tw-py-2">
            <div class="container tw-container-1554-px">
                <div class="d-flex align-items-center justify-content-between tw-gap-6">

                    <div class="d-flex align-items-center tw-gap-6">
                        <div class="cursor-small d-flex align-items-center tw-gap-2 tw-py-205">
                            <span class="text-main-600 d-flex"><i class="ph-bold ph-map-pin"></i></span>
                            <span class="text-white xl-tw-text-sm tw-text-xs fw-medium"><?php echo $address ?></span>
                        </div>
                        <div class="cursor-small d-flex align-items-center tw-gap-2 tw-py-205">
                            <span class="text-main-600 d-flex"><i class="ph-bold ph-envelope"></i></span>
                            <a href="mailto:<?php echo $email ?>" class="text-white xl-tw-text-sm tw-text-xs fw-medium hover--translate-x-05 hover-text-main-600 tw-transition-all"><?php echo $email ?></a>
                        </div>
                    </div>
                    <div class="d-md-flex d-none align-items-center tw-gap-8 cursor-small">
                        <div class="tw-px-10 tw-py-3 bg-main-600 d-flex align-items-center tw-gap-6 both-clipped">
                            <i class="ph ph-whatsapp-logo text-white"></i>
                            <a href="https://wa.me/<?php echo $whatsapp ?>" class="text-white fw-medium hover-underline">
                                تواصل واتساب
                            </a>
                        </div>
                        <ul class="d-lg-flex d-none align-items-center tw-gap-5 cursor-small">
                            <li>
                                <a href="https://wwww.twitter.com/" class="tw-text-base text-white hover-text-white hover-scale-20"><i class="ph-fill ph-tiktok-logo"></i></a>
                            </li>
                            <li>
                                <a href="https://wwww.facebook.com/" class="tw-text-base text-white hover-text-white hover-scale-20"><i class="ph-fill ph-facebook-logo"></i></a>
                            </li>
                            <li>
                                <a href="https://wwww.instagram.com/" class="tw-text-base text-white hover-text-white hover-scale-20"><i class="ph-bold ph-instagram-logo"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- ============================ Header Top End ==================================== -->

        <!-- ==================== Header Start Here ==================== -->
        <header class="transition-all links-white">
            <div class="tw-container-1760-px pe-lg-0 mx-auto">
                <nav class="bg-green d-flex justify-content-between tw-pe-100-px py-lg-0 py-3">

                    <div class="d-flex">
                        <!-- Logo Start -->
                        <a href="./index.php" class="cursor-big bg-main-600 d-lg-flex d-none justify-content-center align-items-center tw-ps-10 tw-pe-14 hexagon-right">
                            <img src="../assets/images/logo/logo4.png" alt="Logo" class="max-w-130-px">
                        </a>
                        <!-- Logo End  -->
                        <!-- Logo Start -->
                        <a href="./index.php" class="d-lg-none d-flex justify-content-center align-items-center">
                            <img src="../assets/images/logo/logo4.png" alt="Logo" class="max-w-130-px">
                        </a>
                        <!-- Logo End  -->

                        <!-- Menu Start  -->
                        <div class="header-menu d-lg-block d-none ps-108-px">
                            <!-- Nav menu Start -->
                            <ul class="nav-menu cursor-small d-lg-flex align-items-center xl-tw-gap-12 tw-gap-4">
                                <li class="nav-menu__item">
                                    <a href="#home" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-5 fw-medium w-100"><?php echo $home ?></a>
                                </li>
                                <li class="nav-menu__item">
                                    <a href="#about" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-5 fw-medium w-100"><?php echo $who_we_are ?></a>
                                </li>
                                <li class="nav-menu__item">
                                    <a href="#services" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-5 fw-medium w-100"><?php echo $our_services ?></a>
                                </li>
                                <li class="nav-menu__item">
                                    <a href="#why-us" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-5 fw-medium w-100"><?php echo $why_us_title ?></a>
                                </li>
                                <li class="nav-menu__item">
                                    <a href="#contact" class="nav-menu__link hover--translate-y-1 text-main-two-600 tw-py-5 fw-medium w-100"><?php echo $contact_us_text ?></a>
                                </li>




                            </ul>
                            <!-- Nav menu End  -->

                        </div>
                        <!-- Menu End  -->
                    </div>

                    <!-- Header Right start -->
                    <div class="d-flex gap-xxl-5 gap-3">
                        <div class="d-flex align-items-center tw-gap-36-px flex-shrink-0">
                            <!-- Language Start -->
                            <div class="cursor-small position-relative group-item hover-mt-0 xs-d-block d-none">
                                <div class="d-flex align-items-center tw-gap-2">
                                    <a href="../en" class="selected-text text-white d-flex align-items-center gap-2">
                                        <span class="tw-w-25-px tw-h-25-px border border-white border-2 rounded-circle common-shadow d-flex justify-content-center align-items-center">
                                            <img src="../assets/images/thumbs/flag1.png" alt="" class="w-100 h-100 object-fit-cover rounded-circle">
                                        </span>
                                        English
                                    </a>
                                </div>

                            </div>
                            <!-- Language End -->

                            <!-- Line Start -->
                            <span class="line light-white h-100 d-xl-block d-none"></span>
                            <!-- Line End -->

                            <!-- Bar icon -->
                            <button type="button" class="offcanvas-bar-icon cursor-small hover--translate-y-1 active--translate-y-05 tw-duration-150 xs-d-block d-none">
                                <img src="../assets/images/icons/bars-two.svg" alt="">
                            </button>
                            <!-- Bar icon End -->
                        </div>

                        <button type="button" class="toggle-mobileMenu leading-none d-lg-none text-white tw-text-9">
                            <i class="ph ph-list"></i>
                        </button>
                    </div>

                    <!-- Header Right End  -->
                </nav>
            </div>
        </header>
        <!-- ==================== Header End Here ==================== -->
    </div>

    <!-- ================================== Banner Three Section start ============================= -->
    <section class="banner-three bg-img overflow-hidden position-relative z-1" data-background-image="../assets/images/thumbs/banner-three-img.png">
        <img src="../assets/images/thumbs/only-track.png" alt="" class="only-track position-absolute  tw-start-0 bottom-0 max-w-64-percent tw-z-2">
        <img src="../assets/images/shapes/curve-road.png" alt="" class="curve-road position-absolute tw-end-0 bottom-0 tw-mb-142-px">
        <img src="../assets/images/shapes/banner--three-plane.png" alt="" class="banner-three-plane position-absolute tw-end-0 top-0 tw-mt-254-px">


        <div class="circle-image before-bg-main-600 position-absolute max-w-430-px tw-max-h-430-px rounded-circle w-100 h-100 border border-white border-4 tw-start-0 tw-top-30-percent tw-ms-290-px d-lg-block d-none" data-aos="zoom-in" data-aos-duration="1500">
            <img src="../assets/images/thumbs/plane-track-img.png" alt="" class="w-100 h-100 object-fit-cover">
        </div>


        <div class="container" id="home">
            <div class="row gy-4 justify-content-end">
                <div class="col-lg-7 position-relative z-2">
                    <span class="splitTextStyleTwo cursor-small text-white fw-bold tw-text-lg tw-mb-5 w-100 text-center"><?php echo $hero_company ?></span>
                    <h1 class="splitTextStyleOne cursor-big text-white tw-text-60-px text-rtl"><?php echo $hero_headline ?></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================== Banner Three Section End ============================= -->

    <!-- =============================== Testimonials section three start ========================= -->
    <section class="bg-neutral-50 tw-mt-20 py-60 position-relative z-1">
        <img src="../assets/images/shapes/pattern-bg-two.png" alt="" class="position-absolute bottom-0 tw-start-0 z-n1 w-100">

        <div class="container" id="about">

            <div class="row gy-4">
                <div class="col-lg-7 pe-lg-5">
                    <div class="">
                        <div dir="rtl" class="">
                            <span class="splitTextStyleTwo cursor-small text-dark fw-bold tw-text-lg tw-mb-5 w-100 text-center"><?php echo $hero_company ?></span>
                            <h1 class="splitTextStyleOne cursor-big tw-mb-8"><?php echo $about_title ?></h1>
                        </div>

                        <div dir="rtl" class="testimonials-three-content-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="bg-neutral-50">
                                        <p class="h6 fw-normal tw-leading-18 text-main-two-600 cursor-big"><?php echo $about_text ?></p>
                                        <span class="tw-my-10 border-bottom border-neutral-200 d-block"></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="swiper testimonials-three-thumbs-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="position-relative tw-me-11 tw-mt-11">
                                    <div class="mask-shape style-two d-flex position-relative">
                                        <img src="../assets/images/thumbs/about-img.png" alt="Testimonials Image" class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <span class="tw-w-90-px tw-h-90-px bg-main-600 rounded-circle d-flex justify-content-center align-items-center position-absolute top-0 tw-end-0 tw--me-45-px tw--mt-45-px cursor-big">
                                        <img src="../assets/images/icons/quate-icon.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="position-relative tw-me-11 tw-mt-11">
                                    <div class="mask-shape style-two d-flex position-relative">
                                        <img src="../assets/images/thumbs/about-img.png" alt="Testimonials Image" class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <span class="tw-w-90-px tw-h-90-px bg-main-600 rounded-circle d-flex justify-content-center align-items-center position-absolute top-0 tw-end-0 tw--me-45-px tw--mt-45-px cursor-big">
                                        <img src="../assets/images/icons/quate-icon.svg" alt="">
                                    </span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="position-relative tw-me-11 tw-mt-11">
                                    <div class="mask-shape style-two d-flex position-relative">
                                        <img src="../assets/images/thumbs/about-img.png" alt="Testimonials Image" class="w-100 h-100 object-fit-cover">
                                    </div>
                                    <span class="tw-w-90-px tw-h-90-px bg-main-600 rounded-circle d-flex justify-content-center align-items-center position-absolute top-0 tw-end-0 tw--me-45-px tw--mt-45-px cursor-big">
                                        <img src="../assets/images/icons/quate-icon.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============================== Testimonials section three End ========================= -->



    <!-- ========================= brand Three Start ============================= -->
    <div class="brand-three-slider-wrapper tw-mt-13" id="contact">
        <div class="max-w-856-px mx-auto text-center tw-pb-4 tw-mb-2">
            <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center">
                <i class="ph-fill ph-caret-right"></i>
                <?php echo $contact_text ?>
                <i class="ph-fill ph-caret-left"></i>
            </span>
        </div>
        <div class="container">
            <div class="brand-three-slider swiper">
                <div class="swiper-wrapper align-items-center justify-content-center tw-gap-17">
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/whatsapp-c.png" alt="WhatsApp" class="" width="75px">
                        </div>
                    </div>
                    <!-- <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/telegram-c.png" alt="" class="" width="75px">
                        </div>
                    </div> -->
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/gmail-c.png" alt="Email" class="" width="75px">
                        </div>
                    </div>
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/phone-c.png" alt="Phone call" class="" width="75px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ========================= brand Three Start ============================= -->
    <div class="brand-three-slider-wrapper tw-mt-13">
        <div class="max-w-856-px mx-auto text-center tw-pb-4 tw-mb-2">
            <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center">
                <i class="ph-fill ph-caret-right"></i>
                <?php echo $social_text ?>
                <i class="ph-fill ph-caret-left"></i>
            </span>
        </div>
        <div class="container">
            <div class="brand-three-slider swiper">
                <div class="swiper-wrapper align-items-center justify-content-center tw-gap-17">
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/facebook-c.png" alt="Facebook" class="" width="75px">
                        </div>
                    </div>
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/instagram-c.png" alt="Instagram" class="" width="75px">
                        </div>
                    </div>
                    <div class="me-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="text-center cursor-big">
                            <img src="../assets/images/social/tiktok-c.png" alt="TikTok" class="" width="75px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================================ -->

    <div class="brand-three-slider-wrapper tw-mt-13">
        <div class="max-w-856-px mx-auto text-center tw-pb-4 tw-mb-2">
            <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center">
                <i class="ph-fill ph-caret-right"></i>
                <?php echo $our_location_on_the_map ?>
                <i class="ph-fill ph-caret-left"></i>
            </span>
        </div>
        <div class="container">
            <!-- Google Map Embed -->
            <div class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3641.3285454278903!2d51.63165448501151!3d24.125097484406066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e43c10f38891c5d%3A0x59ee2aec2a6af1ea!2z2LTYp9ix2Lkg2KfZhNit2LjZiti4IC0g2KfZhNi62YjZitmB2KfYqiAtINij2KjZiCDYuNio2YogLSDYp9mE2KXZhdin2LHYp9iqINin2YTYudix2KjZitipINin2YTZhdiq2K3Yr9ip!5e0!3m2!1sar!2sus!4v1767460964221!5m2!1sar!2sus" width="80%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <!-- ========================= brand Three End ============================= -->

        <div class="position-relative z-1">
            <img src="../assets/images/shapes/thrree-sections-bg.png" alt="" class="position-absolute bottom-0 tw-start-0 w-100 tw-mb-128-px z-n1 tw-h-60-percent object-fit-cover">
            <img src="../assets/images/shapes/moon-shape.png" alt="" class="moon-shape position-absolute top-50 tw-start-0 z-n1 tw-mb-17">

            <!-- ============================= Service Three section start =================================== -->
            <section dir="rtl" class="service-three tw-py-10 overflow-hidden" id="services">
                <div class="container">
                    <div class="max-w-856-px mx-auto text-center tw-pb-6 tw-mb-6">
                        <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center"><?php echo $hero_company ?></span>
                        <h1 class="splitTextStyleOne cursor-big" dir="rtl">
                            <i class="ph-fill ph-caret-right"></i>
                            <?php echo $our_services ?>
                            <i class="ph-fill ph-caret-left"></i>
                        </h1>
                    </div>

                    <div class="row g-6 d-flex">
                        <!-- Customs Clearance Service Card -->
                        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <div class="service-three-item tw-pb-13 overflow-hidden position-relative group bg-white common-shadow-five p-4 rounded">
                                <div class="d-flex align-items-start tw-gap-4">
                                    <span class="tw-h-85-px tw-w-85-px bg-main-600 tw-rounded d-flex justify-content-center align-items-center cursor-big flex-shrink-0">
                                        <img src="../assets/images/icons/tranport-way-icon1.svg" style="width: 3rem;" alt="">
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="tw-mb-2 tw-text-lg fw-semibold">
                                            <?php echo $customs_title ?>
                                        </h6>
                                        <p class="text-neutral-1000 cursor-small"><?php echo $customs_description ?></p>
                                        <?php if (!empty($customs_items) && is_array($customs_items)): ?>
                                            <ul class="list-disc ps-4 mt-2 text-neutral-800" style="list-style: disc;">
                                                <?php foreach ($customs_items as $item): ?>
                                                    <li><?php echo $item ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Documentation Handling Service Card -->
                        <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="service-three-item tw-pb-13 overflow-hidden position-relative group bg-white common-shadow-five p-4 rounded">
                                <div class="d-flex align-items-start tw-gap-4">
                                    <span class="tw-h-85-px tw-w-85-px bg-main-600 tw-rounded d-flex justify-content-center align-items-center cursor-big flex-shrink-0">
                                        <img src="../assets/images/icons/process-icon1.svg" style="width: 3rem;" alt="">
                                    </span>
                                    <div class="flex-grow-1">
                                        <h6 class="tw-mb-2 tw-text-lg fw-semibold">
                                            <?php echo $docs_title ?>
                                        </h6>
                                        <p class="text-neutral-1000 cursor-small"><?php echo $docs_description ?></p>
                                        <?php if (!empty($docs_items) && is_array($docs_items)): ?>
                                            <ul class="list-disc ps-4 mt-2 text-neutral-800" style="list-style: disc;">
                                                <?php foreach ($docs_items as $item): ?>
                                                    <li><?php echo $item ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================= Service Three section End =================================== -->




            <!-- ============================== How it work three section start ================================ -->
            <section class="how-it-work-three tw-py-10">
                <div class="container">
                    <div class="max-w-856-px mx-auto text-center tw-pb-16">
                        <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center"><?php echo $hero_company ?></span>
                        <h2 class="cursor-big h1">
                            <i class="ph-fill ph-caret-right"></i>
                            <span class="splitTextStyleOne" dir="rtl"><?php echo $borders_we_serve ?></span>
                            <i class="ph-fill ph-caret-left"></i>
                        </h2>
                    </div>

                    <div class="how-it-work-item-wrapper">
                        <div class="row gy-4 justify-content-around">
                            <div class="col-lg-3 col-sm-6" style="width: 40%;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <div class="transport-way-item transport-card style-two position-relative text-center">
                                    <img src="../assets/images/icons/rocket.svg" alt="" class="rocket position-absolute tw-start-full bottom-0 tw-mb--88-px d-lg-block d-none">

                                    <span class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center tw-transition-all tw-duration-300">
                                        <img src="../assets/images/icons/tranport-way-icon3.svg" alt="">
                                    </span>
                                    <div class="transport-way-item__content border border-neutral-50 bg-neutral-50 tw-py-15 tw-px-24-px tw-rounded tw-duration-300">
                                        <h5 class="tw-mb-6 cursor-big"><?php echo $borders_land[0] ?></h5>
                                        <p class="text-neutral-1000 cursor-small line-clamp-2"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6" style="width: 40%;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <div class="transport-way-item transport-card style-two position-relative text-center">
                                    <img src="../assets/images/icons/rocket.svg" alt="" class="rocket position-absolute tw-start-full bottom-0 tw-mb--88-px d-lg-block d-none">

                                    <span class="transport-way-item__icon cursor-big tw-w-95-px tw-h-95-px bg-main-600 rounded-circle tw-rounded-bl-0 d-inline-flex justify-content-center align-items-center tw-transition-all tw-duration-300">
                                        <img src="../assets/images/icons/tranport-way-icon3.svg" alt="">
                                    </span>
                                    <div class="transport-way-item__content border border-neutral-50 bg-neutral-50 tw-py-15 tw-px-24-px tw-rounded tw-duration-300">
                                        <h5 class="tw-mb-6 cursor-big"><?php echo $borders_land[1] ?></h5>
                                        <p class="text-neutral-1000 cursor-small line-clamp-2"></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- ============================== How it work three section End ================================ -->























            <!-- =========================== About Three Section start =============================== -->
            <section class="pt-140 pb-60">
                <div class="container" id="why-us">
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="tw-pe-9 tw-pb-6 tw-ps-5 position-relative h-100 tw-min-h-500-px">
                                <img src="../assets/images/thumbs/about-three-img1.png" alt="" class="w-100 h-100 object-fit-cover">
                                <div class="position-absolute tw-start-0 bottom-0 bg-white tw-p-205 tw-rounded-lg common-shadow-five" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                                    <img src="../assets/images/thumbs/about-three-img2.png" alt="" class="w-100 h-100 object-fit-cover tw-rounded-lg">
                                </div>
                                <div class="bg-main-two-600 tw-rounded-xl tw-py-105 position-absolute tw-end-0 top-50 tw--translate-y-50">
                                    <div class="bg-main-600 tw-rounded-xl tw-px-7 tw-py-11">
                                        <h5 dir="rtl" class="writing-mode text-center font-carter text-white fw-normal cursor-big splitTextStyleOne"><span class="fw-bolder"><?php echo $hero_company ?></span></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 ps-lg-5" dir="rtl">
                            <div class="">
                                <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center"><?php echo $hero_company ?></span>
                                <h1 class="splitTextStyleOne cursor-big tw-mb-8"><?php echo $why_us_title ?></h1>
                                <!-- <p class="cursor-small text-neutral-900 tw-ps-205 border-end border-main-600 border-2">Temperate ocean-bass sea chub unicorn fish treefish eulachon tidewater goby. Flier, bighe carp Devario shortnose sucker platy smalleye</p> -->

                                <div class="tw-mt-8">
                                    <div class="row gy-4">
                                        <div class="col-sm-12">
                                            <div class="tw-mt-9">
                                                <?php if (!empty($why_us) && is_array($why_us)): ?>
                                                    <ul class="cursor-small d-flex flex-column tw-gap-4">
                                                        <?php foreach ($why_us as $item): ?>
                                                            <li class="d-flex align-items-center tw-gap-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                                                <span class="text-main-600 d-flex tw-text-xl"><i class="ph-fill ph-check-circle"></i></span>
                                                                <span class="text-neutral-1000 fw-medium"><?php echo $item ?></span>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =========================== About Three Section End =============================== -->
        </div>

        <div class="position-relative z-1 overflow-hidden">
            <img src="../assets/images/shapes/project-three-bg.png" alt="" class="position-absolute bottom-0 tw-start-0 z-n1 w-100 h-75 object-fit-cover">


        </div>


        <div class="position-relative z-1 overflow-hidden">
            <img src="../assets/images/shapes/how-it-work-bg.png" alt="" class="position-absolute top-0 tw-start-0 w-100 tw-h-60-percent tw-mt-188-px z-n1">
            <img src="../assets/images/thumbs/projects-shape-img.png" alt="" class="project-shape-img position-absolute tw-start-0 top-0 z-n1 tw-mt-300-px  z-n1">
            <!-- ================================= Counter Three section start ================================== -->
            <section class="pt-60 pb-120 shape-bg-main-600 position-relative z-1 overflow-hidden">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-3 col-sm-6 col-xs-6">
                            <div class="counter-three-item common-shadow-five bg-white tw-duration-500 tw-rounded-lg tw-px-2 tw-pb-10 tw-pt-80-px animation-item position-relative text-center tw-mt-14" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <span class="cursor-big bg-white common-shadow-four tw-w-108-px tw-h-108-px d-inline-flex justify-content-center align-items-center rounded-circle tw-duration-300 position-absolute top-0 tw-start-50 tw--translate-x-50 tw--mt-54-px">
                                    <img src="../assets/images/icons/counter-three-icon1.svg" alt="" class="animate__heartBeat">
                                </span>

                                <h2 class="tw-mb-5 cursor-big counter hover-text tw-duration-500"><?php echo $active_border_points; ?></h2>
                                <p class="hover-text tw-duration-500 text-main-two-600 fw-medium tw-text-md cursor-small mx-auto"><?php echo $active_border_points_text; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-6">
                            <div class="counter-three-item common-shadow-five bg-white tw-duration-500 tw-rounded-lg tw-px-2 tw-pb-10 tw-pt-80-px animation-item position-relative text-center tw-mt-14 bg-main-600" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <span class="cursor-big bg-white common-shadow-four tw-w-108-px tw-h-108-px d-inline-flex justify-content-center align-items-center rounded-circle tw-duration-300 position-absolute top-0 tw-start-50 tw--translate-x-50 tw--mt-54-px">
                                    <img src="../assets/images/icons/counter-three-icon2.svg" alt="" class="animate__heartBeat">
                                </span>

                                <h2 class="tw-mb-5 cursor-big counter hover-text tw-duration-500 text-white"><?php echo $shipments_cleared; ?></h2>
                                <p class="hover-text tw-duration-500 text-main-two-600 fw-medium tw-text-md cursor-small mx-auto text-white"><?php echo $shipments_cleared_text; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-6">
                            <div class="counter-three-item common-shadow-five bg-white tw-duration-500 tw-rounded-lg tw-px-2 tw-pb-10 tw-pt-80-px animation-item position-relative text-center tw-mt-14" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <span class="cursor-big bg-white common-shadow-four tw-w-108-px tw-h-108-px d-inline-flex justify-content-center align-items-center rounded-circle tw-duration-300 position-absolute top-0 tw-start-50 tw--translate-x-50 tw--mt-54-px">
                                    <img src="../assets/images/icons/counter-three-icon3.svg" alt="" class="animate__heartBeat">
                                </span>

                                <h2 class="tw-mb-5 cursor-big counter hover-text tw-duration-500"><?php echo $years_of_experience; ?></h2>
                                <p class="hover-text tw-duration-500 text-main-two-600 fw-medium tw-text-md cursor-small mx-auto"><?php echo $years_of_experience_text; ?></p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-6">
                            <div class="counter-three-item common-shadow-five bg-white tw-duration-500 tw-rounded-lg tw-px-2 tw-pb-10 tw-pt-80-px animation-item position-relative text-center tw-mt-14" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <span class="cursor-big bg-white common-shadow-four tw-w-108-px tw-h-108-px d-inline-flex justify-content-center align-items-center rounded-circle tw-duration-300 position-absolute top-0 tw-start-50 tw--translate-x-50 tw--mt-54-px">
                                    <img src="../assets/images/icons/counter-three-icon4.svg" alt="" class="animate__heartBeat">
                                </span>

                                <h2 class="tw-mb-5 cursor-big counter hover-text tw-duration-500"><?php echo $client_satisfaction; ?></h2>
                                <p class="hover-text tw-duration-500 text-main-two-600 fw-medium tw-text-md cursor-small mx-auto"><?php echo $client_satisfaction_text; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ================================= Counter Three section End ================================== -->

        </div>



        <!-- ========================== Contact us three section start ================================= -->
        <section class="py-60 position-relative overflow-hidden">
            <img src="../assets/images/shapes/contact-us-three-plane.png" alt="" class="contact-us-three-plane position-absolute tw-end-0 top-0 tw-mt-254-px">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-7">
                        <div class="" dir="rtl">
                            <span class="splitTextStyleTwo cursor-small tw-text-xl fw-bold text-main-600 tw-mb-305 w-100 text-center"><?php echo $hero_company ?></span>

                            <h3 class="splitTextStyleOne cursor-big tw-mb-4"><?php echo $our_mission ?></h3>
                            <p class="tw-mb-8 cursor-small text-neutral-900 tw-ps-205 border-end border-main-600 border-2"><?php echo $mission ?></p>

                            <h3 class="splitTextStyleOne cursor-big tw-mb-4"><?php echo $our_vision ?></h3>
                            <p class="tw-mb-8 cursor-small text-neutral-900 tw-ps-205 border-end border-main-600 border-2"><?php echo $vision ?></p>

                            <h3 class="splitTextStyleOne cursor-big tw-mb-4"><?php echo $our_value ?></h3>

                            <div class="d-flex d-flex flex-sm-nowrap flex-wrap tw-mt-10 justify-content-around text-center">
                                <div class="tw-pe-32-px tw-me-32-px" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class=" max-w-130-px">
                                        <img src="../assets/images/icons/star-icon.svg" alt="" class="cursor-big">
                                        <h6 class="cursor-small tw-text-base tw-mt-4 fw-semibold"><?php echo $integrity_title ?></h6>
                                    </div>
                                </div>
                                <div class="tw-pe-32-px tw-me-32-px" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                    <div class=" max-w-130-px">
                                        <img src="../assets/images/icons/facility-icon2.svg" alt="" class="cursor-big">
                                        <h6 class="cursor-small tw-text-base tw-mt-4 fw-semibold"><?php echo $consistency_title ?></h6>
                                    </div>
                                </div>
                                <div class="tw-pe-32-px tw-me-32-px" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                    <div class=" max-w-130-px">
                                        <img src="../assets/images/icons/hand-love.svg" alt="" class="cursor-big">
                                        <h6 class="cursor-small tw-text-base tw-mt-4 fw-semibold"><?php echo $customer_satisfaction_title ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="position-relative">
                            <div class="row gy-4">
                                <div class="col-6">
                                    <div class="">
                                        <img src="../assets/images/thumbs/contact-us-three-img1.png" alt="" class="clip-top-left w-100 h-100 object-fit-cover">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="">
                                        <img src="../assets/images/thumbs/contact-us-three-img2.png" alt="" class="clip-bottom-right w-100 h-100 object-fit-cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================== Contact us three section End ================================= -->


        <div class="position-relative z-2 overflow-hidden">
            <img src="../assets/images/shapes/blog-three-bg.png" alt="" class="position-absolute tw-start-0 bottom-0 w-100 h-50 z-n1">

        </div>

        <!-- =============================== Footer start ============================== -->
        <footer dir="rtl" class="footer bg-main-two-600 position-relative z-1 mt-auto tw-pt-14">
            <div class="container">
                <div class="tw-pb-84-px">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-5">

                        <!-- Logo + Short Text + Social -->
                        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <a href="./index.php" class="cursor-big">
                                <img src="../assets/images/logo/logo4.png" width="200px" alt="WASAL DAYIM">
                            </a>
                            <p class="text-neutral-100 tw-mt-10 cursor-small">
                                <?php echo $contact_text ?>
                            </p>
                            <div class="tw-mt-9">
                                <ul class="cursor-small d-flex align-items-center tw-gap-3">
                                    <li><a href="<?php echo $facebook ?>" class="tw-w-11 tw-h-11 border border-neutral-1100 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"><i class="ph ph-facebook-logo"></i></a></li>
                                    <li><a href="<?php echo $instagram ?>" class="tw-w-11 tw-h-11 border border-neutral-1100 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"><i class="ph ph-instagram-logo"></i></a></li>
                                    <li><a href="<?php echo $tiktok ?>" class="tw-w-11 tw-h-11 border border-neutral-1100 rounded-circle text-white tw-text-xl d-flex justify-content-center align-items-center hover-bg-main-600 hover-text-white hover-border-main-600 active-scale-09 tw-duration-200"><i class="ph ph-tiktok-logo"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Address + Working Hours -->
                        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h5 class="text-white tw-mb-6 cursor-big splitTextStyleTwo"><?php echo $address_text ?></h5>
                            <p class="tw-mb-12 cursor-small text-neutral-100"><?php echo $address ?></p>

                            <h5 class="text-white tw-mb-6 cursor-big splitTextStyleTwo"><?php echo $working_hours_text ?></h5>
                            <p class="cursor-small text-neutral-100"><?php echo $working_hours ?></p>
                        </div>

                        <!-- Contact Methods -->
                        <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="text-white tw-mb-6 cursor-big splitTextStyleTwo"><?php echo $contact_us_text ?></h5>
                            <ul class="d-flex flex-column tw-gap-4">
                                <li><a href="<?php echo $whatsapp ?>" class="text-neutral-100 hover-text-main-600 cursor-small"><?php echo $whatsapp_text ?></a></li>
                                <li><a href="mailto:<?php echo $email ?>" class="text-neutral-100 hover-text-main-600 cursor-small"><?php echo $email_text ?></a></li>
                                <li><a href="tel:<?php echo $phone ?>" class="text-neutral-100 hover-text-main-600 cursor-small"><?php echo $phone_text ?></a></li>
                            </ul>
                        </div>

                    </div>
                </div>

                <!-- Bottom Footer -->
                <div class="border-top border-dashed border-neutral-1100 tw-py-8">
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="mb-2">
                            <a href="./index.php" class="cursor-big">
                                <img src="../assets/images/logo/logo4.png" width="100px" alt="WASAL DAYIM">
                            </a>
                        </div>
                        <p class="text-white cursor-small mb-2">
                            <?php echo $footer_text ?>
                        </p>
                        <!-- Footer Developer Credit -->
                        <div class="text-center tw-text-xs text-neutral-400 tw-mt-2 tw-pb-2">
                            تطوير <a href="https://nadim.pro" target="_blank" class="hover-text-main-600">Nadim Alzoubi</a>
                        </div>

                    </div>
                </div>

            </div>
        </footer>
        <!-- =============================== Footer End ============================== -->

        <!-- Jquery js -->
        <script src="../assets/js/jquery-3.7.1.min.js"></script>

        <!-- phosphor Js -->
        <script src="../assets/js/phosphor-icon.js"></script>
        <!-- Bootstrap Bundle Js -->
        <script src="../assets/js/boostrap.bundle.min.js"></script>
        <!-- swiper slider Js -->
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <!-- Split Text -->
        <script src="../assets/js/SplitText.min.js"></script>
        <!-- Scroll Trigger -->
        <script src="../assets/js/ScrollTrigger.min.js"></script>
        <!-- Gsap js -->
        <script src="../assets/js/gsap.min.js"></script>
        <!-- custom gsap -->
        <script src="../assets/js/custom-gsap.js"></script>
        <!-- aos -->
        <script src="../assets/js/aos.js"></script>
        <!-- Circle Progress bar -->
        <script src="../assets/js/animated-radial-progress.js"></script>
        <!-- counter up -->
        <script src="../assets/js/counterup.min.js"></script>
        <!-- magnific popup -->
        <script src="../assets/js/magnific-popup.min.js"></script>
        <!-- marquee -->
        <script src="../assets/js/jquery.marquee.min.js"></script>

        <!-- main js -->
        <script src="../assets/js/main.js"></script>



</body>


</html>