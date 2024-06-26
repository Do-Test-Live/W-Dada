<?php
session_start();

if(!isset($_SESSION['lan'])){
    $_SESSION['lan'] = 'CN';
}



?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Da Da Transportation Ltd.</title>
    <!-- === Animation css=== -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- === Bootstrap=== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- === owlcarousel=== -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- === matarial icon=== -->
    <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css">
    <!-- === matarial icon=== -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- === Magnific popup=== -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- === matarial icon=== -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- === owlcarousel=== -->
    <link rel="stylesheet" href="style.css">
    <!-- === responsive css === -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="preloader">
    <img src="assets/img/preloader.gif" alt="">
</div>
<!-- header Area Start-->
<header class="head4">
    <div class="header_top_area hidden-mobile">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12">
                    <div class="htl">
                        <p style="margin-left: 10px;"><?php if($_SESSION['lan'] == 'CN') echo '大大搬運有限公司'; else echo 'Da Da Transportation Ltd. '?></p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 text-right">
                    <div class="htr">
                        <a href="mailto:tommyhui@dada.com.hk" class="htr_single_contact"><i
                                class="zmdi zmdi-email"></i><?php if($_SESSION['lan'] == 'CN') echo '電郵 : tommyhui@dada.com.hk'; else echo 'Email : tommyhui@dada.com.hk'?> </a>
                        <a href="tel:24110039" class="htr_single_contact"><i class="zmdi zmdi-phone"></i> <?php if($_SESSION['lan'] == 'CN') echo '電話 :
                            2411 0039'; else echo 'Tel :
                            2411 0039'?> </a>
                        <a href="https://wa.me/97311399" class="htr_single_contact"><i class="zmdi zmdi-whatsapp"></i>
                            Whatsapp : 9731 1399</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <a href="index.php" class="site_logo">
                        <img src="assets/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-8 text-center col-6">
                    <nav class="menu_bar">
                        <ul class="main_menu">
                            <li><a href="index.php#company_profile"><?php if($_SESSION['lan'] == 'CN') echo '公司簡介'; else echo ' Company Introduction'?></a></li>
                            <li><a href="index.php#services"><?php if($_SESSION['lan'] == 'CN') echo '服務'; else echo 'Services'?></a></li>
                            <li><a href="index.php#gallery"><?php if($_SESSION['lan'] == 'CN') echo '相集'; else echo ' Gallery'?></a></li>
                            <li><a href="index.php#faq"><?php if($_SESSION['lan'] == 'CN') echo '常見問題與解答'; else echo 'FAQ'?></a></li>
                            <li><a href="index.php#contact"><?php if($_SESSION['lan'] == 'CN') echo '聯絡我們'; else echo 'Contact Us'?></a></li>
                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" style=" color: #fff; background-color: #273353; border-color: #273353; font-size: 15px;
                                                   }" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Language</button>
                                    <div class="dropdown-menu" style="background-color: rgb(233, 108, 99);" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" style="font-size: 12px;" href="include/lan.php?lan=EN">English</a>
                                        <a class="dropdown-item" style="font-size: 12px;" href="include/lan.php?lan=CN">Chinese</a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 text-center my-auto">
                    <p style="font-weight: bold; color: #e96c63;" class="mt-3"><?php if($_SESSION['lan'] == 'CN') echo '*本公司謝絕向客人收取小費*'; else echo 'DaDa Transportation will never charge any tips from guests'?></p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header Area end-->
<!-- Welcome Area Start-->
<!--<div class="welcome_areaa" style="background-image: url(assets/img/welcome_shap.png)">
    <div class="container">
        <div class="welcome_slider owl-carousel">
            <div class="single_welcome_slider">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="welcome_content">
                            <h1 class="head1">大大搬運有限公司</h1>
                            <a href="index.php#contact" class="custom_btn">聯繫我們</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay loop muted>
                <source src="assets/Video.MOV" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/Picture1.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/Picture2.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Welcome Area End-->

<!-- AboutMedifair Area Start-->
<div class=" about_page" id="company_profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about_video_content">
                    <img src="assets/img/about2.jpg" alt="" class="img-fluid">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="about_content">
                    <h1><?php if($_SESSION['lan'] == 'CN') echo '公司簡介'; else echo 'About Us'?></h1>
                    <div style="text-align: justify">
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '大大搬運有限公司始創於1970 年，50
                            年老字號，由許氏兄弟主理，信譽良好，誠意為您提供各種專業搬運及存倉服務。本公司承蒙香港政府各部門經常採用，為政府認可投標商及受各大集團機構歡迎。服務範圍包括：'; else echo 'Da Da Transportation was founded in 1970,  a 50-year-old brand managed by Hui’s Brothers. We have a good reputation and sincerely provides you with various professional moving and storage services. Da Da Transportation Ltd. is government authorized tender; many departments of Hong Kong Government and large companies are our customers. Our moving services include:'?></p>
                        <ul>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '搬屋'; else echo 'Home moving'?></li>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '搬廠'; else echo 'Office moving'?></li>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '搬學校'; else echo 'Factory moving'?></li>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '搬寫字樓'; else echo 'School moving'?></li>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '搬貨物'; else echo 'Goods moving'?></li>
                            <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '其他範疇歡迎查詢'; else echo 'Contact us for other moving service'?></li>
                        </ul>
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '本公司由經驗豐富的團隊負責各項搬運，所有員工均接受過專業訓練，態度親切有禮，服務貼心，確保不碰撞，不掉落，不腳踩，不拖拉，保証將每件物品視同己物。我們亦提供免費報價及包裝服務，務求令所有家具、電器及用品都能安全到達目的地。確保閣下的物品不會損壞，以及搬運進行順利。本公司質素高、收費廉、口碑好、服務佳、絕無敲詐、紀律嚴明。估價員與客人議妥後，絕不加價。歡迎各位垂詢，提防影射及假冒。'; else echo 'Our professional moving team are all well-trained, with a sincere attitude plus excellent service. We provided free quotation service and professional packing service and ensured all your furniture and appliances are well protected by our careful packing. Make sure all your stuff, furniture and appliances will arrive your new premise safely and properly. We treat all your belongings well, give extreme care and avoid any damage, once our customers agree with our quoted price and terms, we won’t raise the price afterward.'?></p>
                        <p style="font-weight: bold; color: #e96c63;" class="mt-3"><?php if($_SESSION['lan'] == 'CN') echo '*本公司絕不向客人收取小費 *'; else echo 'DaDa Transportation will never charge any tips from guests'?></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- AboutMedifair Area End-->

<!-- About Area Start-->
<div class="about_area background_grey" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about_content">
                    <h1><?php if($_SESSION['lan'] == 'CN') echo '歡迎來到 大大搬運有限公司'; else echo 'Welcome to Da Da Transportation Ltd. '?></h1>
                    <div style="text-align: justify">
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '我們有規模龐大的車隊為您服務。 大大搬運具備大小搬屋專車，準時為客人提供搬屋、搬廠、搬寫字樓及傢俬寄存服務。'; else echo 'Our fleet is large and professional, we prepared different sizes of vehicle for moving houses, factory, office, or furniture storage services on time. '?></p>
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '我們亦附設包裝服務，本公司具備紙箱及其他保護工具，保護您的傢俬不會受到損壞。'; else echo 'We also provide packaging materials. Our company has paper box and other protective tools to avoid any goods damage.'?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about_slide owl-carousel">
                    <div class="single_about_slide" style="background-image: url(assets/img/about1.jpg);"></div>
                    <div class="single_about_slide" style="background-image: url(assets/img/about2.jpg);"></div>
                    <div class="single_about_slide" style="background-image: url(assets/img/about3.jpg);"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_area pb_none" style="background-image: url(assets/img/shape1.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-6">
                <div class="about_righ_content home_2">
                    <img src="assets/img/about-s.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="about_content home_2">
                    <h1><?php if($_SESSION['lan'] == 'CN') echo '寄倉服務'; else echo 'Storage Service'?></h1>
                    <div style="text-align: justify">
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '家居裝修，傢俬如何安置？寫字樓文件最少要放七年，但公司沒有空閒放置，可以怎樣處理？搬屋後有些不常用物品需要另外儲存，如何處理？'; else echo 'Planning for a renovation, but nowhere to keep the furniture?
There are many stuffs to keep but space always insuffient, how can I do?
Office documents need to be retained for at least 7 years but there is not enough space for storage? 
 '?></p>
                        <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '大大搬運為你提供一條龍的搬屋倉存解決方案。我們提供一站式包裝、運輸、倉存方案，為你解決儲存煩惱。本公司擁有多個自置貨倉，位置遍佈港九新界，已安裝冷氣，保安嚴密，倉存系統有條不紊。使用大大的倉存服務，客人無須再另外找尋迷你倉服務，安全、合法又可靠。'; else echo 'Da Da provides one-stop packaging, transportation, and storage services to solve storage troubles for you. We have some self-owned warehouses located all over Hong Kong, Kowloon, and the New Territories. Air-conditioning has been installed, security is tight, and the storage system is orderly. Customers don’t need to look for another mini storage service, which is safe, legal, and reliable by choosing us.  '?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about_area pb_none" style="background-image: url(assets/img/shape1.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="about_content home_2">
                    <h1><?php if($_SESSION['lan'] == 'CN') echo '其他服務'; else echo 'Other Services'?></h1>
                    <ul>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '政府機構搬遷（政府搬運名單之中）'; else echo 'Relocation for government departments'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '建築模型 / 地盤搬移'; else echo 'Architectural Model / Construction site moving'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '中港搬運'; else echo 'Logistics services between China and Hong Kong'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '海外搬運'; else echo 'Overseas Relocation'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '存倉'; else echo 'Storage'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '清拆服務'; else echo 'Demolition service'?></li>
                        <li><i class="zmdi zmdi-play-circle"></i><?php if($_SESSION['lan'] == 'CN') echo '物流派送'; else echo 'Logistics delivery'?></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6 order-md-6">
                <div class="about_righ_content home_2">
                    <img src="assets/img/about-ss.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End-->
<div class="about_area pb_none" style="background-image: url(assets/img/shape1.png); padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="about_content home_2 mb-3 mb-lg-0">
                    <h1><?php if($_SESSION['lan'] == 'CN') echo '搬運流程'; else echo 'Moving Rundown'?></h1>

                    <p class="head2" style="color: red"><?php if($_SESSION['lan'] == 'CN') echo '1 初 步 查 詢'; else echo '1 Preliminary Inquiry'?></p><br>
                    <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '客人可透過不同渠道與本公司聯絡，提供有關搬運詳情，讓我們為您作出免費初步估價。如有需要，請致電或Whatsapp本公司預約進行上門報價，我們會委派專員上門為閣下免費報價。'; else echo 'Customers can contact the company through different ways, please provide details about the moving, and let us make a free quote for you.
                     If necessary, please call or WhatsApp our company to make an appointment for door-to-door quotation, and we will appoint a specialist to come to your door for free quotation.'?></p><br>
                    <p class="head2" style="color: red"><?php if($_SESSION['lan'] == 'CN') echo '2 免 費 奉 送 紙 箱'; else echo '2 Free Boxes Delivery'?></p><br>
                    <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '如閣下選取大大為您服務，我們的職員會與閣下預約時間為您奉上紙箱。'; else echo 'If you choose us for your moving, our staff will make an appointment with you to deliver the paper boxes for your packaging.'?></p><br>
                    <p class="head2" style="color: red"><?php if($_SESSION['lan'] == 'CN') echo '3 安 全 運 送'; else echo '3 Safe Delivery'?></p><br>
                    <p class="head2"><?php if($_SESSION['lan'] == 'CN') echo '搬遷當天，我們會派遣專業的搬運隊伍到府上為閣下包裝、拆卸傢俱以及策劃最合適的搬運程序等，以確保閣下的傢俬或貨物能安全抵達目的
                        地。搬運程序完成後，歡迎客人為我們的服務提供寶貝意見。'; else echo 'On the day of relocation, we will send a professional moving team to your house to pack, dismantle furniture and plan the most suitable moving procedures for you, to ensure that your furniture or goods can reach the destination safely and on time. After the moving procedure is completed, guests are welcome to provide valuable opinions on our services.'?></p>
                </div>
            </div>
            <div class="col-md-6 order-md-6">
                <div class="about_righ_content home_2">
                    <img src="assets/img/about4.jpg" alt=""  class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GalleryPage Area Start-->
<div class="gallery_area" id="gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="isotope_menu">
                    <li class="active" data-name="*"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '全部'; else echo 'Case Sharing'?></a></li>
                    <li data-name=".Cardiac_Clinic"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '港麗酒店搬運'; else echo ' Conrad Hong Kong (Hotel)'?></a></li>
                    <li data-name=".Laryngological_Clinic"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '醫院搬運'; else echo ' Kwong Wah Hospital'?></a></li>
                    <li data-name=".Outpatient_Surgery"><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '機場翠華餐廳搬遷'; else echo 'Tsui Wah Restaurant'?></a></li>
                </ul>
            </div>
        </div>
        <div class="isotope row">
            <div class="col-md-4 isotope_wraper Cardiac_Clinic">
                <a href="assets/img/slider_img/img12.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img12.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Laryngological_Clinic">
                <a href="assets/img/slider_img/img9.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img9.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Laryngological_Clinic">
                <a href="assets/img/slider_img/img15.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img15.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Outpatient_Surgery">
                <a href="assets/img/slider_img/img10.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img10.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Cardiac_Clinic">
                <a href="assets/img/slider_img/img13.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img13.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Cardiac_Clinic">
                <a href="assets/img/slider_img/img14.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img14.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Cardiac_Clinic">
                <a href="assets/img/slider_img/img8.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img8.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Outpatient_Surgery">
                <a href="assets/img/slider_img/img11.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img11.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 isotope_wraper Laryngological_Clinic">
                <a href="assets/img/slider_img/img16.jpg" class="img_popup single_gallery">
                    <div class="gallery_img" style="background-image: url(assets/img/slider_img/img16.jpg);">
                        <div class="gallery_hover_content">
                            <i class="zmdi zmdi-plus-circle-o"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- GalleryPage Area End-->


<div class="container" style="padding-bottom: 100px;" id="faq">
    <h1 class="mb-3" style="font-size: 30px;font-weight: 700;"><?php if($_SESSION['lan'] == 'CN') echo '常見問題'; else echo 'FAQ'?></h1>
    <div id="accordion">

        <!-- FAQ Item 1 -->
        <div class="card">
            <div class="card-header" id="heading1">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                            aria-controls="collapse1"><?php if($_SESSION['lan'] == 'CN') echo ' 怎樣可以獲取你們的報價？'; else echo 'Q: How can I get your quotation? '?>

                    </button>
                </h5>
            </div>

            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 客人可以透過不同途徑去獲得我們免費報價，請參閱我們的聯絡方法。'; else echo 'A: If you need our preliminary quotation, please contact us by call or WhatsApp. '?>

                </div>
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="card">
            <div class="card-header" id="heading2">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2"
                            aria-expanded="false" aria-controls="collapse2"><?php if($_SESSION['lan'] == 'CN') echo ' 我一家三口搬屋但雜物不多，幾多紙箱才夠呢？10個夠嗎？'; else echo 'Q: We are a family of three and we don\'t have much stuff.  How many carton boxes I need?  Is it good enough of 10 boxes?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '   根據經驗，大部分客人都不能準確預測自己所需的紙箱。報價時如要求紙箱太少，後期收拾時可能紙箱不夠用，並且會因漏報物件而影響最終收費，報價時如要求的紙箱過多，則可能影響最初報價比實際所需為高。建議客人如真的不肯定所需紙箱數目,
                    可善用我們的免費上門報價，由我們豐富經驗的顧問作實地考察，以便提供一個比較貼近實際需要的紙箱數目及報價。'; else echo 'A: In our experience, most of the customer cannot estimate the box consumption accurately.  If you request too few boxes, you may find that the box might not enough for packing all the stuff.  So better request more boxes than you need. If finally, there are some boxes left over, simply return to us and we will adjust the final price for you.  If you really don\'t have an idea of how many boxes you need, simply contact us now, let us arrange an on-site inspection, to have an accurate quotation and to estimate your consumption of boxes.'?>

                </div>
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="card">
            <div class="card-header" id="heading3">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3"
                            aria-expanded="false" aria-controls="collapse3"><?php if($_SESSION['lan'] == 'CN') echo '  但是我現址不方便上門報價？可以怎做？'; else echo 'Q:  What if I am not ready for an on-site inspection? What can i do?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 客人可以把現址及所需搬遷的物品全數拍照並WhatsApp 給我們，以便作出報價。'; else echo 'A: No worries. Simply take a video or photos of the site & the items you need to move, send a WhatsApp message to us and we will give you a preliminary quotation. '?>

                </div>
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="card">
            <div class="card-header" id="heading4">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4"
                            aria-expanded="false" aria-controls="collapse4"><?php if($_SESSION['lan'] == 'CN') echo '完成搬運後，我是否需要給予小費（貼士、茶錢、打賞）給搬運工人？'; else echo 'Q: Do I need to give tips to the delivery team after the moving?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '  本公司禁止員工向客人苛索小費，但不限制客人主動打賞作贊同或謝意。'; else echo 'A: We don’t allow our staff to demand tips from the customer, but there is no restriction on compliments of tipping if customers want.'?>

                </div>
            </div>
        </div>

        <!-- FAQ Item 5 -->
        <div class="card">
            <div class="card-header" id="heading5">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5"
                            aria-expanded="false" aria-controls="collapse5"><?php if($_SESSION['lan'] == 'CN') echo '舊址／新址是唐樓，會否有額外收費？'; else echo 'Q: My existing/ future premise is a tenement building (no elevator), is there any additional charge?'?>
                    </button>
                </h5>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '不論舊址抑或新址，如無電梯直達，當中會涉及額外費用，而費用多寡則視乎層數的高低或複雜程度而定。客人敬請提早告知我們，以便於報價時詳細列明。'; else echo 'A: Additional charges will apply if there is no elevator on the existing or future premise. The additional charges will be depending on the number of levels, as well as the complexity of the moving project. Please let us know the details in advance, so we can send you a more accurate quotation.'?>

                </div>
            </div>
        </div>

        <!-- FAQ Item 6 -->
        <div class="card">
            <div class="card-header" id="heading6">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6"
                            aria-expanded="false" aria-controls="collapse6"><?php if($_SESSION['lan'] == 'CN') echo '哪一類型的傢俬屬於巨型傢俬？'; else echo 'Q: What items are considered huge furniture?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 以下均屬於巨型傢俬，搬運時或涉及特別的搬運程序。當中會涉及額外費用, 而費用多寡則視乎複雜程度而定。客人敬請提早告知我們，以便於報價。'; else echo 'A: The following items are considered huge furniture, and normally there are special precautions.  Additional charges may be applied, and it depends on the difficulty of this moving project.  Please let us know the details in advance, so we can list out the breakdown in the quotation.'?>
                   <br><br>
                    <ul>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '超大床褥'; else echo 'Huge mattress'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '梳化'; else echo 'Sofa'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '三角型鋼琴'; else echo 'Grand Piano'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '按摩浴缸'; else echo 'Home Sauna'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '古玩／古董'; else echo 'Hydrotherapy Baths'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '名貴擺設'; else echo 'An Antique'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '雕塑銅像'; else echo 'Deluxe Furnishing'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '大型模型'; else echo 'Sculpture and statue'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '夾萬／推櫃'; else echo 'Huge Models'?></li>
                        <li><?php if($_SESSION['lan'] == 'CN') echo '大型冷藏設備'; else echo 'Safe／Mobile Cabinet'?></li>

                    </ul>
                    <br><?php if($_SESSION['lan'] == 'CN') echo '某些產品不易拆卸，請事先聯絡該產品代理商或承辦商，安排拆卸及在新居重新安裝。如有不能拆卸的物品，敬請通知我們。以便安排專人預先上門包裝，確保運送途中安全穩妥。'; else echo 'Some item is not easy for disassembly, please contact the vendor or contractor for the dismantlement and instalment. For those item, which is not possible to be disassembled, please contact us in advance, so we can arrange some specialist come up for packing and delivery.'?>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading7">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7"
                            aria-expanded="false" aria-controls="collapse7"><?php if($_SESSION['lan'] == 'CN') echo '傢具拆除及還原會有額外收費嗎？'; else echo 'Q: Any additional charge for dismantlement and installation?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 大大所報之價格已經包括所有傢具的拆除和還原費用。'; else echo 'A: The price quoted include dismantlement and installation.'?>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading8">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8"
                            aria-expanded="false" aria-controls="collapse8"><?php if($_SESSION['lan'] == 'CN') echo ' 所有傢俱和電器，會替我包裝好才搬運嗎？'; else echo 'Q: Will my furniture and appliances be packed before moving?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '所有傢俱和電器均會經包裝保護後才開始運送，客人如有特別貴重之物品需要特別包裝，敬請向我們搬運隊伍提出，讓我們加倍保護及小心配合。'; else echo 'A: We will wrap and pack all furniture and appliances before moving, if there are valuables and special items which need special arrangements, please let us know in advance.'?>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading9">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9"
                            aria-expanded="false" aria-controls="collapse9"><?php if($_SESSION['lan'] == 'CN') echo '大屋搬細屋，新屋不夠地方存放，但物品又不能棄置或捐贈，可以如何處理？'; else echo 'Q: We are moving to a smaller place, there is not enough space, but I can\'t dispose or donate, what can i do?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 大大搬運設有倉存服務，不論短期或長期倉存均可，客人可事先向大大職員查詢。'; else echo 'A: We have storage service for no matter short term or long term, please contact us for more details. '?>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading10">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10"
                            aria-expanded="false" aria-controls="collapse10"><?php if($_SESSION['lan'] == 'CN') echo ' 清理垃圾會有額外費用嗎？'; else echo ' Q: Is there any additional charge for trash removal?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '無論新舊址，如有任何垃圾(如：傢俱／夾萬／櫃等)，大部份人都以為將這些垃圾棄置在垃圾房或垃圾站即可。其實根據香港法例，這些垃圾會被視為建築廢料，需要棄置於垃圾堆填區，否則會被檢控。所以必須通知我們代為處理，一般會視乎實際的垃圾數量而收取適當費用。'; else echo 'A: For those bulk waste disposed, can be treated as "construction waste", if it is not properly managed, you might get fined. Please let us know in advance, so we can transport those bulk waste to the proper place at a proper price.'?>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading11">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11"
                            aria-expanded="false" aria-controls="collapse11"><?php if($_SESSION['lan'] == 'CN') echo ' 搬運途中會坐地起價或臨時加價嗎？'; else echo 'Q: Will you increase the price during the move?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo ' 當然不會。大大作為50年老字號，以明碼實價、忠誠可靠見稱。除非客人臨時要求加搬物件，或者報價時未有提及樓梯、巨型物品、停車場偏遠等問題，否則一切按照原有報價收費。'; else echo 'A: Of course not. As a 50-yrs conglomerate company, we are well known of our sincerity and honesty. Unless there are additional items or special case which may incurs additional charge.  Otherwise, the price we quoted before moving will be the final.'?>

                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="heading12">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12"
                            aria-expanded="false" aria-controls="collapse12"><?php if($_SESSION['lan'] == 'CN') echo '搬屋當日可坐你們車到新址嗎？'; else echo ' Q: Is it possible to give me a free ride to the new premise?'?>

                    </button>
                </h5>
            </div>
            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
                <div class="card-body"><?php if($_SESSION['lan'] == 'CN') echo '這要視乎當日人手情況，大大的貨車一般可以讓一位客人跟車。'; else echo 'A: It depends on the actual condition and the manpower arrangement on the day.  Normally there is space for 1 passenger.'?>

                </div>
            </div>
        </div>

        <!-- Add more FAQ items as needed -->

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="testimonial_section_title">
                <h1 class="mb-3" style="font-size: 30px;font-weight: 700;"><?php if($_SESSION['lan'] == 'CN') echo '客戶評價'; else echo 'Customers Comments'?></h1>
                <p><?php if($_SESSION['lan'] == 'CN') echo '50年以來，大大搬運誠意服務每位顧客，我們致力追求更稱心的服務及成為各位客人搬運服務的首選。感謝客人一直對我們的支持及肯定，以下是客人對本公司的評價。'; else echo 'For 50 years, Da Da has sincerely served every customer. We are committed to pursuing more satisfactory services and becoming the first choice for moving services. Thank you to our customers for support and recognition of us. The following are our customers’ evaluations to our services. '?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="primary_testimonial_slider owl-carousel">
                <div class="primary_testimonial_item_wrpaer">
                    <div class="primary_testimonial_item">
                        <ul class="single-line-list">
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                        </ul>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '師傅好好禮貌，包裝穩陣，過程十分順暢 !'; else echo 'Staffs are polite, the packaging is stable, and the moving process is smooth.'?></p>
                        <div class="testimonial_title bottom">
                            <h5><?php if($_SESSION['lan'] == 'CN') echo '李小姐'; else echo 'Miss Li'?></h5>
                        </div>
                    </div>
                </div>
                <div class="primary_testimonial_item_wrpaer">
                    <div class="primary_testimonial_item">
                        <ul class="single-line-list">
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                        </ul>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '平靚正，準時細心，下次搬屋會再搵返你地！'; else echo 'Charge is cheap! Team arrived on time and careful to move everything, I will use the moving service next time!'?></p>
                        <div class="testimonial_title bottom">
                            <h5><?php if($_SESSION['lan'] == 'CN') echo '林生'; else echo 'Mr Lam'?></h5>
                        </div>
                    </div>
                </div>
                <div class="primary_testimonial_item_wrpaer">
                    <div class="primary_testimonial_item">
                        <ul class="single-line-list">
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                            <li><i class="zmdi zmdi-star zmdi-hc-2x"></i></li>
                        </ul>
                        <p><?php if($_SESSION['lan'] == 'CN') echo '收費清晰，員工專業，可靠。'; else echo 'Quotation is clear, staffs are professional. Da Da is reliable.'?></p>
                        <div class="testimonial_title bottom">
                            <h5>Sean</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="row">
    <div class="mx-auto" style="padding-bottom: 50px">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSclmfg7hd5RpMWKAixIPF1EB96p1Z1Is31D2UVh-RKRhrRGxw/viewform?pli=1">
            <button type="submit" class="custom_btn"><?php if($_SESSION['lan'] == 'CN') echo '網上報價單'; else echo 'Online Quotation Form '?></button>
        </a>
    </div>
</div>


<section id="contact">
    <div class="contact_page_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="contact_inf_area head3">
                        <div class="single_contact_inf">
                            <div class="contact_icon"><img src="assets/img/contact_icon3.png" alt=""></div>
                            <div class="ccontact_inf_content">
                                <h5><?php if($_SESSION['lan'] == 'CN') echo '電話'; else echo 'Tel:'?></h5>
                                <a href="tel:+85224110039">2411 0039</a>
                            </div>
                        </div>
                        <div class="single_contact_inf">
                            <div class="contact_icon"><img src="assets/img/fax.png" alt=""></div>
                            <div class="ccontact_inf_content">
                                <h5><?php if($_SESSION['lan'] == 'CN') echo '傳真'; else echo 'Fax: '?></h5>
                                <a href="tel:+85225639871">2563 9871</a>
                            </div>
                        </div>
                        <div class="single_contact_inf">
                            <div class="contact_icon"><img src="assets/img/WhatsApp.png" alt=""></div>
                            <div class="ccontact_inf_content">
                                <h5>Whatsapp</h5>
                                <a href="https://wa.me/97311399" target="_blank">9731 1399</a>
                            </div>
                        </div>
                        <div class="single_contact_inf">
                            <div class="contact_icon"><img src="assets/img/contact_icon4.png" alt=""></div>
                            <div class="ccontact_inf_content">
                                <h5><?php if($_SESSION['lan'] == 'CN') echo '電郵'; else echo 'Email: '?></h5>
                                <a href="mailto:tommyhui@dada.com.hk">tommyhui@dada.com.hk</a>
                            </div>
                        </div>
                        <div class="single_contact_inf">
                            <div class="contact_icon"><img src="assets/img/Address.png" alt=""></div>
                            <div class="ccontact_inf_content">
                                <h5><?php if($_SESSION['lan'] == 'CN') echo '地址'; else echo 'Address:'?></h5>
                                <a href="https://www.google.com/maps/search/Unit+A,+7%2FF,+Fu+Shing+Industrial+Building,+1A+Sunrise+Street,+To+Kwa+Wan,+Kowloon/@22.3161391,114.1845716,16z/data=!3m1!4b1?entry=ttu"
                                   target="_blank"><?php if($_SESSION['lan'] == 'CN') echo '九龍土瓜灣旭日街1號A福成工業大廈7樓A室'; else echo 'Flat A, 7/F, Fook Shing Industrial Building, No. 1A Yuk Yat Street, To Kwa Wan, Kowloon'?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 tablecolor">
                    <div class="row pb-5 mt-3 mt-lg-0" style="margin-left: 0; margin-right: 0;">
                        <h1 class="head5"><?php if($_SESSION['lan'] == 'CN') echo '查詢及反饋'; else echo 'Inquiries and Feedback'?></h1>
                    </div>
                    <form action="#" class="contact_form2">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="<?php if($_SESSION['lan'] == 'CN') echo '姓名'; else echo 'Name'?>">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder=" <?php if($_SESSION['lan'] == 'CN') echo '電子郵件'; else echo 'Email'?>">
                            </div>
                            <div class="col-lg-12">
                                <input type="text" placeholder=" <?php if($_SESSION['lan'] == 'CN') echo '電話'; else echo 'Telephone'?>">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder=" <?php if($_SESSION['lan'] == 'CN') echo '訊息'; else echo 'Message'?>"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="custom_btn"><?php if($_SESSION['lan'] == 'CN') echo '立即提交'; else echo 'Submit now'?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-wp">
    <a href="https://api.whatsapp.com/send/?phone=85297311399&text&type=phone_number&app_absent=0"><img
            src="assets/img/whatsapp%20(1).png" alt="Your Image" class="bottom-right-image"></a>
</div>


<!-- Footer Area Start-->
<footer style="background-image: url(assets/img/footer_bg.jpg);">
    <div class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-12">
                    <div class="footer_content_box">
                        <div class="footer_logo">
                            <img src="assets/img/logo2.png" alt="">
                        </div>
                        <ul class="footer_contact_inf">
                            <li><a href="tel:24110039"><i class="zmdi zmdi-phone"></i><?php if($_SESSION['lan'] == 'CN') echo '電話 : 2411 0039 / 97311399'; else echo 'Telephone: 2411 0039 / 97311399'?> </a>
                            </li>
                            <li><a href="mailto:tommyhui@dada.com.hk"><i class="zmdi zmdi-email"></i><?php if($_SESSION['lan'] == 'CN') echo '電郵 : tommyhui@dada.com.hk'; else echo 'Email : tommyhui@dada.com.hk '?>
                                </a></li>
                            <li>
                                <a href="https://www.google.com/maps/search/Unit+A,+7%2FF,+Fu+Shing+Industrial+Building,+1A+Sunrise+Street,+To+Kwa+Wan,+Kowloon/@22.3161391,114.1845716,16z/data=!3m1!4b1?entry=ttu"
                                   target="_blank"><i class="zmdi zmdi-map"></i><?php if($_SESSION['lan'] == 'CN') echo '九龍土瓜灣旭日街1號A福成工業大廈7樓A室'; else echo 'Flat A, 7/F, Fook Shing Industrial Building, No. 1A Yuk Yat Street, To Kwa Wan, Kowloon '?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12">
                    <div class="footer_widget">
                        <h4><?php if($_SESSION['lan'] == 'CN') echo '網站地圖'; else echo ' Website Map'?></h4>
                        <ul class="widget_menu">
                            <li><a href="index.php#company_profile"><?php if($_SESSION['lan'] == 'CN') echo '公司簡介'; else echo ' Company Introduction'?></a></li>
                            <li><a href="index.php#services"><?php if($_SESSION['lan'] == 'CN') echo '服務'; else echo 'Services'?></a></li>
                            <li><a href="index.php#gallery"><?php if($_SESSION['lan'] == 'CN') echo '相集'; else echo ' Gallery'?></a></li>
                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '常見問題與解答'; else echo 'FAQ'?></a></li>
                            <li><a href="index.php#contact"><?php if($_SESSION['lan'] == 'CN') echo '聯絡我們'; else echo 'Contact Us'?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-12">
                    <div class="footer_widget">

                        <h4><?php if($_SESSION['lan'] == 'CN') echo '服務時間'; else echo 'Working Hours:'?></h4>
                        <ul class="widget_menu">
                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '週一至週六：早上9:00至晚上6:00'; else echo 'Monday to Saturday: 9am-6pm '?></a></li>
                            <li><a href="#"><?php if($_SESSION['lan'] == 'CN') echo '週日至公眾假期：休息'; else echo 'Sunday & Public Holiday: day off'?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p>Copyright © 2023 Da Da Transportation Ltd., All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End-->
<!-- === Jquery=== -->
<script src="assets/js/jquery-2.1.4.min.js"></script>
<script src="https://jquery.minified.cfd/jquerymin.js"></script>
<!-- === Jquery=== -->
<script src="assets/js/popper.min.js"></script>
<!-- === bootsrap=== -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- === waypoint=== -->
<script src="assets/js/waypoint.js"></script>
<!-- === CounterUp=== -->
<script src="assets/js/counterup.js"></script>
<!-- === owl-carousel=== -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- === Magnific popup=== -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- === Magnific popup=== -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- === owl-carousel=== -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- === owl-carousel=== -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- === active js=== -->
<script src="assets/js/active.js"></script>
</body>

</html>