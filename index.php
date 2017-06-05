<?php
include 'library.php'; // include the library to get the session values
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Expanse.tech | Blockchain for everyone</title>
    <meta name="author" content="Expanse">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="expanse, blockchain, smart contracts, cloud computer, cryptocurrency, crypto, ethereum">
    <meta name="description" content="Expanse is an Ethereum based blockchain platform for smart contracts.">

    <meta property="og:url" content="http://www.expanse.tech">
    <meta property="og:image" content="http://www.expanse.tech/images/expanse-newsletter-hero.jpg">
    <meta property="og:title" content="Expanse.tech" />
    <meta property="og:description" content="Ethereum based blockchain platform for smart contracts." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli:300,400,600,700');
    </style>
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- slickmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/slicknav.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- FontAwesome CDN
        ============================================ -->
    <script src="https://use.fontawesome.com/aea9fc5902.js"></script>

</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<!--  Preloader Start
========================-->
<div id='preloader'>
    <div id='status'>
        <img src='img/ajax-loading.gif' alt='ajax-loading' />
    </div>
</div>

<!--  Header Area Start
========================-->
<header id="home">
    <div class="main-navigation sticky-header">
        <div class="container">
            <div class="row">
                <!-- logo-area-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6" >
                    <div class="logo-area">
                        <a href="#">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <!-- mainmenu-area-->
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-6" >
                    <div class="menubar">
                        <nav>
                            <ul class="text-right" id="menu" style="white-space: nowrap">
                                <li><a href="#home"><?php echo $lang["home"]; ?></a></li>
                                <li><a href="#about"><?php echo $lang["about"]; ?></a></li>

                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $lang["Mining"]; ?><span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="http://pool.expanse.tech/"><?php echo $lang["EXP.POOL"]; ?></a></li>
                                        <li><a href="https://exp.suprnova.cc/"><?php echo $lang["suprnova"]; ?></a></li>
                                        <li><a href="http://dwarfpool.com/exp"><?php echo $lang["dwarfpool"]; ?></a></li>
                                        <li><a href="http://exp.akasha-pool.eu/"><?php echo $lang["akasha"]; ?></a></li>
                                        <li><a href="http://exp.digger.ws/"><?php echo $lang["Digger.ws"]; ?></a></li>
                                    </ul>
                                </li>

                                <li><a href="#exchanges"><?php echo $lang["buy"]; ?></a></li>
                                <li><a href="http://explorer.expanse.tech"><?php echo $lang["explore"]; ?></a></li>
                                <li><a href="http://docs.expanse.tech"><?php echo $lang["docs"]; ?></a></li>
                                <li><a href="http://blog.expanse.tech"><?php echo $lang["news"]; ?></a></li>
                                <li><a href="#contact"><?php echo $lang["contact"]; ?></a></li>

                                <select style= "color:#f95959" data-style="btn-new" class="btn-cta" onChange="window.location = '?lang='+this.value+''">
<option value=""  disabled="disabled">Select language</option>
 <?php   if($language == 'chinese') {

    ?>
    <option value="chinese" selected="selected" >中文</option>
    <option value="english">English</option>
<option value="russian">русский</option>
<option value="japanese">日本語</option>
<option value="spanish">Español</option>
<option value="korean">한국어</option>
    <?php } 
    else if($language == 'russian'){
        ?>
 <option value="russian" selected="selected">русский</option>
 <option value="english">English</option>

<option value="chinese">中文</option>
<option value="japanese">日本語</option>
<option value="spanish">Español</option>
<option value="korean">한국어</option>
        <?php
    }
    else if($language == 'japanese'){
        ?>
        <option value="japanese" selected="selected" >日本語</option>
        <option value="english">English</option>
<option value="russian">русский</option>
<option value="chinese">中文</option>

<option value="spanish">Español</option>
<option value="korean">한국어</option>
        <?php }
        else if($language == 'spanish'){
            ?>
<option value="spanish" selected="selected">Español</option>
<option value="english">English</option>
<option value="russian">русский</option>
<option value="chinese">中文</option>
<option value="japanese">日本語</option>

<option value="korean">한국어</option>
            <?php
        }
        else if($language == 'korean'){
            ?>
<option value="korean" selected="selected">한국어</option>
<option value="english">English</option>
<option value="russian">русский</option>
<option value="chinese">中文</option>
<option value="japanese">日本語</option>
<option value="spanish">Español</option>

            <?php
        }
    else{

        ?> 
        <option value="english" selected="selected">English</option>
       
<option value="russian">русский</option>
<option value="chinese">中文</option>
<option value="japanese">日本語</option>
<option value="spanish">Español</option>
<option value="korean">한국어</option>
        <?php } ?>
</select>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Image area
    ============================================ -->
<section>
    <div class="header-image-area" id="particles-js">
        <div class="intro-text">
            <h1><?php echo $lang["welcome to expanse.tech"]; ?></h1>
            <h3><?php echo $lang["Expanse is "]; ?><span class="element"></span></h3>
            <div class="learnmore">
                <a href="http://www.github.com/expanse-org/mist/releases" class="skill-btn"><?php echo $lang["download wallet"]; ?></a>
            </div>
        </div>
    </div>
</section>

<!--  About Area Start
=================================-->
<section id="about">
    <div class="about-area">
        <div class="container">
            <div class="row">
                <!-- about image-area-->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="about-image">
                        <img src="img/about-me.png" alt="about-me">
                    </div>
                </div>
                <!-- about text-area-->
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="about-text">
                        <!--section heading area-text-->
                        <div class="portion-heading wow fadeInUp" data-wow-delay="0.1s">
                            <h3><?php echo $lang["our story"]; ?></h3>
                        </div>
                        <div class="portion-content">
                            <p>
                            <?php echo $lang["Expanse.Tech™ was created as the first stable fork of Ethereum by one of the earliest blockchain developers and cryptocurrency entrepreneurs out there, Christopher Franko. Co-founder James Clayton is also the founder of the Cryptocurrency Collectors Club, (CCC), which is the largest and most popular Cryptocurrency group on Facebook. Dan Conway, another blockchain expert with extensive experience, soon joined the team as the third founder, bringing a great deal of talent, balance, and expertise to the project."]; ?>
                                
                            </p>
                            <p>
                                <?php echo $lang["Expanse was built as a community-based project without an ICO, (Initial Coin Offering), and is blockchain agnostic. The idea is to use cutting-edge blockchain technology to build anything the community and team can imagine—using a Decentralized Autonomous Organization, (DAO), with a self-funded design to keep it truly decentralized. This way, the Expanse community can evolve and grow while rewarding holders, partners, and investors."]; ?>
                                
                            </p>
                            <p>
                            <?php echo $lang["The Expanse platform now has a two-year history of consistent growth and stability. Starting out small, but with big ideas, the team is growing and other projects are now coming on board to help make the dream a reality—limited only by the imagination and talent of all the diverse people around the world involved in the journey. Each new community member and partner brings new ideas and visions for the future. Expanse.Tech plans to be one of the top blockchain projects in the world. Won’t you join us on this adventure? Start learning more about Expanse today!"]; ?>
                                
                            </p>
                        </div>
                        <!-- about social icon-area-->
                        <div class="portion-contact-info">
                            <!-- resume button-area-->
                            <div class="resume-btn">
                                <a href="http://www.github.com/expanse-org/mist/releases"><?php echo $lang["wallet "]; ?><i class="fa fa-download"></i> </a>
                            </div>

                            <div class="resume-btn">
                                <a href="http://www.expanse.tech/docs/roadmap.pdf"><?php echo $lang["roadmap "]; ?><i class="fa fa-download"></i> </a>
                            </div>

                            <div class="resume-btn">
                                <a href="http://www.expanse.tech/docs/whitepaper.pdf"><?php echo $lang["whitepaper "]; ?><i class="fa fa-download"></i> </a>
                            </div>

                            <div class="resume-btn">
                                <a href="http://www.expanse.tech/docs/Presskit.zip"><?php echo $lang["presskit "]; ?><i class="fa fa-download"></i> </a>
                            </div>

                            <br><br>

                            <div class="social-link">
                                <a href="https://www.facebook.com/groups/expanseofficial"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/expanseofficial"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                                <a href="https://www.reddit.com/r/ExpanseOfficial"><i class="fa fa-reddit" aria-hidden="true"></i></a>
                                <a href="https://www.github.com/expanse-org"><i class="fa fa-github" aria-hidden="true"></i> </a>
                                <a href="http://slack.expanse.tech/"><i class="fa fa-slack" aria-hidden="true"></i> </a>
                                <a href="https://telegram.me/ExpanseTech"><i class="fa fa-telegram" aria-hidden="true"></i> </a>
                                <a href="https://bitcointalk.org/index.php?topic=1173722.new#new"><i class="fa fa-bitcoin" aria-hidden="true"></i> </a>
                            </div>

                            <div class="portion-heading wow fadeInUp" data-wow-delay="0.1s">
                                <br><br><br>
                                <h3><?php echo $lang["our partners"]; ?></h3>
                            </div>

                            <div class="client-carousel owl-partners">
                                <div><img src="img/partners/azure.jpg" alt="image"></div>
                                <div><img src="img/partners/bizspark.jpg" alt="image"></div>
                                <div><img src="img/partners/centurylink.jpg" alt="image"></div>
                                <div><img src="img/partners/changelly.jpg" alt="image"></div>
                                <div><img src="img/partners/chankura.jpg" alt="image"></div>
                                <div><img src="img/partners/hcblockchain.jpg" alt="image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Services Area Start
=================================-->
<section id="experience">
    <div class="experience">
        <div class="container">
            <div class="row">
                <!--section heading area-text-->
                <div class="col-lg-12 col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4><?php echo $lang["dApps (decentralized applications)"]; ?></h4>
                    </div>
                </div>
                <!--single work experience area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="experience-item service-work-mb">
                        <div class="experience-content">
                            <h6><?php echo $lang["Expanse Bond System (EBS)"]; ?></h6>
                            <h7><?php echo $lang["Hold Expanse; Earn Expanse."]; ?></h7>
                            <p> <?php echo $lang["The Expanse Bond System, (EBS), is an innovative method to reward buying and holding Expanse tokens for a pre-defined period of time. Unlike traditional currency-based bond systems, EBS uses only native EXP to reward those who participate. Functioning similar to a self-funded, secured token savings account, it uses smart contract-based simulated staking on the blockchain with decentralized open source parameters. Find out more by visiting our website at expanse.tech."]; ?>
                            </p>
                            <center><img src="img/dapps/ebs.png" width="120px"></center>
                        </div>
                    </div>
                </div>
                <!--single work experience area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="experience-item service-work-mb">
                        <div class="experience-content">
                            <h6><?php echo $lang["Borderless Identity Management"]; ?></h6>
                            <p><?php echo $lang["Borderless.tech is a revolutionary decentralized governance services platform—one that can offer a variety of services for free, or at almost no costs, anywhere and easily. Services such as citizenship, identity, notary, marriage, asset rights management and more, are easily able to adapt to specific needs of various groups that are choosing their own ways to be free. These dApps are just two examples of where the potential of Expanse is totally superior to any other decentralized blockchain-based application platform."]; ?>
                            </p>
                            <center>
                                <a href="http://www.borderless.tech/"><img src="img/dapps/borderless.png"></a>
                            </center>
                        </div>
                    </div>
                </div>
                <!--single work experience area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="experience-item service-work-mb">
                        <div class="experience-content">
                            <h6><?php echo $lang["voting on the blockchain"]; ?></h6>
                            <p><?php echo $lang["The patent-pending blockchain-based voting dApp, VoteLock™, has the power to change the dynamics of elections, instilling trust into the voting process and eliminating the possibility of vote “rigging.” It’s an easy, accurate and tamper-proof method to employ for elections world-wide. With a true identity system in development, Expanse has prototyped a nearly perfectvoting system. One person, one vote."]; ?>
                            </p>
                            <center><img src="img/dapps/votelock.png"></center>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!--  Skill Area Start
=================================-->
<section id="partnerships">
    <div class="main-skill-area">
        <div class="container">
            <div class="row">
                <!--section heading area-text-->
                <div class="col-lg-12 col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4><?php echo $lang["our technology stack"]; ?></h4>
                    </div>
                </div>
                <!--single skill area-->
                <div class="col-lg-3 col-md-3 col-sm-6 skill-bottom skill-mobile-mb">
                    <canvas id="demo-1"></canvas>
                    <div class="skill-item">
                        <h5><?php echo $lang["distributed ledger"]; ?></h5>
                    </div>
                </div>
                <!--single skill area-->
                <div class="col-lg-3 col-md-3 col-sm-6 skill-bottom skill-mobile-mb">
                    <canvas id="demo-2"></canvas>
                    <div class="skill-item">
                        <h5><?php echo $lang["smart contracts"]; ?></h5>
                    </div>
                </div>
                <!--single skill area-->
                <div class="col-lg-3 col-md-3 col-sm-6 skill-mobile-mb">
                    <canvas id="demo-3"></canvas>
                    <div class="skill-item">
                        <h5><?php echo $lang["ethereum virtual machine"]; ?></h5>
                    </div>
                </div>
                <!--single skill area-->
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <canvas id="demo-4"></canvas>
                    <div class="skill-item">
                        <h5><?php echo $lang["cmd line interface"]; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Work Experience Area Start
=================================-->
<section class="padding-style1" id="exchanges">
    <div class="main-service">
        <div class="container">
            <div class="row">
                <!--section heading area-text-->
                <div class="col-lg-12 col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4><?php echo $lang["Exchanges"]; ?></h4>
                        <div align="center">
                            <A href="https://www.coinmarketcap.com/currencies/expanse/"><img src="img/chart.png"></a>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4 service-work-mb">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="https://poloniex.com/exchange#btc_exp"><img src="img/poloniex.png"></a></h5>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4 service-work-mb">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="https://bittrex.com/Market/Index?MarketName=BTC-EXP"><img src="img/Bittrex.png"></a></h5>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="https://changelly.com/exchange/btc/exp"><img src="img/changelly.png"></a></h5>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="http://www.coinvc.com/market/trade/exp"><img src="img/coinvc-logo.png"></a></h5>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="https://bleutrade.com/exchange/EXP/BTC"><img src="img/bleutrade.png"></a></h5>
                        </div>
                    </div>
                </div>
                <!--single service area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <div class="service-content">
                            <h5><a href="https://alcurex.com/#EXP-BTC"><img src="img/alcurex.png"></a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Testimonial Slider Area Start
=================================-->
<section id="work">
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <!--section heading area-text-->
                <div class="col-lg-12 col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4><?php echo $lang["our team"]; ?></h4>
                    </div>
                </div>
                <!--testimonial slider area-->
                <div class="owl-demo">
                    <!--single testimonial area 1-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/christopherfranko.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Christopher Franko"]; ?></p>
                                <p class="profession"><?php echo $lang["Co-founder / Lead Developer"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["An experienced cryptocurrency developer with expert level knowledge of blockchain technology, Chris has a diverse understanding of the industry and a long-standing reputation in the community. Christopher's only mission in life is to empower individuals with intuitive and cost effective decentralized software."]; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--single testimonial area 2-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/james.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["James Clayton"]; ?></p>
                                <p class="profession"><?php echo $lang["Co-founder / Community Manager"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["James is a cryptocurrency analyst and investor who founded one of the largest active communities for Cryptocurrency discussion in the world. James is also one of the founders of Expanse, and an experienced crypto markets advisor, writer, and community manager, James served on the teams of multiple well-established blockchain technology projects."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--single testimonial area 3-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/dan.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Dan Conway"]; ?></p>
                                <p class="profession"><?php echo $lang["Co-founder / Senior Developer"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Dan is a blockchain technology advocate and developer, providing consultancy for a number of projects and companies in the cryptocurrency and blockchain technology space."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/marcia.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Marcia Danzeisen"]; ?></p>
                                <p class="profession"><?php echo $lang["Marketing Strategy"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Marcia Danzeisen has led marketing and strategy for some of the largest banks and financial services technology companies in the world. An accomplished writer, Danzeisen saw how crypto currency and blockchain technology have changed the traditional FinTech world."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/sieva.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Sandro Ieva"]; ?></p>
                                <p class="profession"><?php echo $lang["Director of Art"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Sandro has worked with several blockchain companies from around the world. He is skilled with visual conceptualization and design. An expert at creating interfaces, websites, motion graphics, 3D, and creative art."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/scott.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Scott Williams"]; ?></p>
                                <p class="profession"><?php echo $lang["Director of Brand Awareness"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Scott brings a wealth of experience to Expanse with his business consulting and expertise in brand awareness. He has an MBA from Northeastern University, is currently a Global Liaison for Shared Services, a partner for Briefcaseit Network, and he is the Director of Operations for Borderless Charity that was built on the Expanse platform."]; ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/ahmad.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Ahmad Siddiqi"]; ?></p>
                                <p class="profession"><?php echo $lang["Advisory Board Member"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Ahmad Siddiqi is a successful cryptocurrency investor and enthusiast. He’s been actively involved in the crypto economy since 2013. With a 15 year of software development and finance experience under his belt, he is in a unique position to understand the benefits of crypto assets. He’s currently working on growing the Smart-Contract ecosystem on the Expanse and Ethereum blockchains coupled with cutting edge technologies such as ReactJS and Aspnet core."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/timothysuggs.jpeg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Timothy Suggs"]; ?></p>
                                <p class="profession"><?php echo $lang["Advisory Board Member"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Timothy Suggs is a computer software entrepreneur that specializes in Web and TV Video Production, web development and refreshing Internet Marketing (PPC/SEO/Social). Timothy is also experienced with software and Web Application development, Internet Marketing Strategy and Marketing Consulting."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/maurice.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Maurice Beutnagel"]; ?></p>
                                <p class="profession"><?php echo $lang["Advisory Board Member"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Maurice Beutnagel holds a masters degree in innovation management and has been helping companies in different industries (space, insurance, gaming) to grow their business. Focus is on implementing new products and services in the market. Over 10 years of investing experience. Sees cryptos as one of the most promising sectors moving forward."]; ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/niko.jpg" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Nikola Šaric"]; ?></p>
                                <p class="profession"><?php echo $lang["General Practice Physician"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Nikola Šarić works as a medical doctor (physician, general practice) in a small village of Stanišić near Sombor, Serbia. He is interested in alternative currency systems, social networking, collaborative consumption. Community currency developer, 5 years of experience in designing alternative systems for local exchange. Founder of Alva Alternative currency."]; ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/noimg.png" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Soopnon"]; ?></p>
                                <p class="profession"><?php echo $lang["Chinese Ambassador"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["Soopnon is the Chinese Ambassador from Hongico.com, he will be working with the Expanse along with his team of marketers in China to spread the news about Expanse, start discussions in China, translate Newsletters, Announcements, and work on getting Expanse added to Chinese Exchanges. Soopnon has worked with Supernet, PIVX, Komodo, and has extensive experience with making projects a success in China."]; ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--single testimonial area 4-->
                    <div class="col-lg-6 col-md-6 full-w">
                        <div class="item">
                            <div class="client-img">
                                <img src="img/team/asim.png" alt="client">
                            </div>
                            <div class="client-identity">
                                <p class="name"><?php echo $lang["Asim Ashfaq"]; ?></p>
                                <p class="profession"><?php echo $lang["Senior Developer"]; ?></p>
                            </div>
                            <div class="testimonial-content">
                                <p><?php echo $lang["A cryptocurrency enthusiast by heart, Asim is passionate about creating next generation decentralized apps. He has a vast experience working as a full stack developer in some of the most challenging environments where he helped solve complex problems. Asim, along with his team, aims to make Expanse more prevalent and more accessible for a wider audience. As a hobby, he also runs a 30-GPU mining rig at home."]; ?>
                                   
                                </p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</section>

<!--  Contact Area Start
=================================-->
<section id="contact">
    <div class="contact-area">
        <div class="container">
            <div class="row">
                <!--section heading area-text-->
                <div class="col-lg-12 col-md-12">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h4><?php echo $lang["get in touch"]; ?></h4>
                    </div>
                </div>

                <!--contact form area-->
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="row">
                        <form action="mailsender.php" method="post">
                            <div class="col-lg-6 col-md-6 padding-reduce">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="text" name="yname" placeholder="<?php echo $lang["Your Name"]; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="yemail" placeholder="<?php echo $lang["Type Your Email"]; ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" rows="7" id="comment" name="ycomment" placeholder= "<?php echo $lang["Write Message"]; ?>" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="submit-btn">
                                    <input type="submit" value="<?php echo $lang["send"]; ?>" id="send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--contact info area-->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="contact-info">
                        <h5><?php echo $lang["contact info"]; ?></h5>
                        <p><?php echo $lang["If you have any questions or would like to get in contact with someone from our team use this form."]; ?></p>
                        <address>
                            www.expanse.tech<br>
                             <?php echo $lang["Call me +1(252)495-0363"]; ?><br>
                            <?php echo $lang["P.O. Box 2703, Washington, NC. USA"]; ?>
                        </address>
                        <div class="social-link">
                            <a href="https://www.facebook.com/groups/expanseofficial"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/expanseofficial"><i class="fa fa-twitter" aria-hidden="true"></i> </a>
                            <a href="https://www.reddit.com/r/ExpanseOfficial"><i class="fa fa-reddit" aria-hidden="true"></i></a>
                            <a href="https://www.github.com/expanse-org"><i class="fa fa-github" aria-hidden="true"></i> </a>
                            <a href="http://slack.expanse.tech/"><i class="fa fa-slack" aria-hidden="true"></i> </a>
                            <a href="https://telegram.me/ExpanseTech"><i class="fa fa-telegram" aria-hidden="true"></i> </a>
                            <a href="https://bitcointalk.org/index.php?topic=1173722.new#new"><i class="fa fa-bitcoin" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portion-heading wow fadeInUp" data-wow-delay="0.1s">
                <br><br>
                <center>
                    <h3><?php echo $lang["upcoming events"]; ?></h3></center>
            </div>

            <div class="portion-content">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $lang["Collision 2017"]; ?></h4>
                        <p class="list-group-item-text"><?php echo $lang["May 2-4, 2017 "]; ?> <br> <?php echo $lang["New Orleans, USA"]; ?></p>
                    </a>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $lang["Consensus"]; ?></h4>
                        <p class="list-group-item-text"><?php echo $lang["May 22-24, 2017 "]; ?> <br> <?php echo $lang["MADRID, SPAIN"]; ?></p>
                    </a>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $lang["Token Summit"]; ?></h4>
                        <p class="list-group-item-text"><?php echo $lang["May 25, 2017 "]; ?><br> <?php echo $lang["MADRID, SPAIN"]; ?></p>
                    </a>
                </div>

                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><?php echo $lang["MADRID, SPAIN"]; ?></h4>
                        <p class="list-group-item-text"><?php echo $lang["June 6th, 2017 "]; ?><br> <?php echo $lang["MADRID, SPAIN"]; ?></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  Footer Area Start
=================================-->
<footer>
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="copyright-text text-right">
                        <p>@ <?php echo $lang["copyright all right reserved by | expanse.tech"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="scrollUp"></div>
    </div>
</footer>
<!--  All JS Start
=================================-->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js/wow.min.js"></script>
<!-- typed JS
    ============================================ -->
<script src="js/typed.js"></script>
<!-- slickmenu JS
    ============================================ -->
<script src="js/jquery.slicknav.min.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- Particles JS
    ============================================ -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<!-- Skill JS
    ============================================ -->
<script src="js/waterbubble.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
    ============================================ -->
 <?php   if($language == 'chinese') {

    ?>
    <script src="lang/chinese/main.js"></script>
    <?php } 
    else if($language == 'russian'){
        ?>
 <script src="lang/russian/main.js"></script>
        <?php
    }
    else if($language == 'japanese'){
        ?>
        <script src="lang/japanese/main.js"></script>
        <?php }
        else if($language == 'spanish'){
            ?>
<script src="lang/spanish/main.js"></script>
            <?php
        }
        else if($language == 'korean'){
            ?>
<script src="lang/korean/main.js"></script>
            <?php
        }
    else{

        ?> 
        <script src="js/main.js"></script>
        <?php } ?>


<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-99073881-1', 'auto');
    ga('send', 'pageview');

    $(document).ready(function () {
    $("select").each(function () {
        $(this).val($(this).find('option[selected]').val());
    });
})
</script>
</body>

</html>
