<?php
    session_start();
    include "controller/connections.php";

    if(isset($_GET['article'])){
        $article = $_GET['article'];
        $get_news = $connectdb->prepare("SELECT * FROM news_events WHERE article_id = :article_id");
        $get_news->bindvalue("article_id", $article);
        $get_news->execute();
        $news = $get_news->fetchAll();
        foreach($news as $new):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bob & sil is an oil and gas company dedicated to providing off-shore and on-shore services across the globe .">
    <meta name="keyword" content="Bob & sil, oil and gas energy, haulage, tank, tank farm" />
	<meta name="author" content=""/>
	<meta name="og:url" property="og:url" content="https://">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="" />
    <meta name="og:site_name" property="og:site_name" content="" />
    <meta name="og:description" property="og:description" content="Bob & sil is an oil and gas company dedicated to providing off-shore and on-shore services across the globe">
    <meta name="og:image" property="og:image" itemprop="image" content="images/bobsil_logo.png">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>Bob & sil Global | <?php echo $new->title?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="images/bobsil_logo.JPG" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
        <section class="top_head" id="topHeader">
            <div class="social_media">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
            <div class="contact_phone">
                <ul>
                    <li>
                        <a><i class="far fa-clock"></i> Mon - Fri : 8:00am - 5:00pm</a>
                    </li>
                    <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> info@bobsilglobal.com</a></li>
                   
                    <li><a href="events_news.php">News Updates</a></li>
                </ul>
            </div>
        </section>
    <section id="aboutBanner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/bobsil_logo.JPG" alt="logo">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are"><i class="fas fa-users"></i>Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="What we do"><i class="fa-solid fa-gas-pump"></i>Our services <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="petroleum.html"><i class="fa-solid fa-truck"></i> Haulage & Storage</a></li>
                            <li><a href="sales.html"><i class="fas fa-oil-can"></i> Offshore supplies</a></li>
                            <li><a href="marine_logistics.html"><i class="fa-solid fa-gas-pump"></i> Marine Logistics</a></li>
                            <li><a href="waste_management.html"><i class="fas fa-dumpster"></i> Waste Management</a></li>
                            
                            
                        </ul>
                    </li>
                    <li><a href="gallery.php" title="News and updates"><i class="fa-solid fa-photo-video"></i>Gallery</a></li>
                    <li><a href="projects.php" title="Our work"><i class="fa-solid fa-helmet-safety"></i>Projects</a></li>
                    <!-- <li><a href="recruitment.html" title="Job recruitment">Career</a></li> -->
                    <!-- <li><a href="blog.html" title="Job recruitment">Our Blog</a></li> -->
                    <li id="login"><a href="contact.html" title="Contact us">Request Quote<i class="fas fa-sign-in-alt"></i></a></li>
                </ul>
            </nav>
            <div class="quote">
                <a href="contact.html" title="Contact us">Request Quote<i class="fas fa-sign-in-alt"></i></a>
            </div>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="about_banner">
                <div class="slide">
                    <div class="banner_img">
                        <img src="<?php 
                            if($new->photo == ''){
                                echo 'images/head_office2.JPG';
                            }else{
                                echo 'media/'.$new->photo;
                            }
                        ?>" alt="article">
                    </div>
                    <div class="taglines">
                        <h2><?php echo $new->title?></h2>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <div class="article_details">
        <h3><?php echo $new->title?></h3>
        <p>
            <?php echo $new->details?>
        </p>
    </div>
    
        <footer>
        <section class="mainFooter">
            <section class="mainFooter1">
                <div class="contactAddress">
                
                    <!-- <h3>For more info and to book an appointment</h3> -->
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="addtext">
                            <!-- <h4>Head office:</h4> -->
                            <p>Our Head office is located at Obitugbo Community, Along Koko Expressway, Koko Delta state</p>
                        </div>
                    </div>
                    <div class="address">
                        <i class="fas fa-database"></i>
                        <div class="addtext">
                            <!-- <h4>Head office:</h4> -->
                            <p>Our Storage Facility is situated at Ajagbodudu community, Warri North LGA, Koko, Delta state, Nigeria</p>
                        </div>
                    </div>
                    <div class="address phone">
                        <i class="fas fa-tty"></i>
                        <div class="addtext">
                            <h4>Help Lines: If you have any questions or need help, feel free to contact with our team, or you can call us any time </h4>
                            <p>+2348066175827, +2347085254761, +2348062442775</p>
                        </div>
                    </div>
                    <div class="address email">
                        <i class="fas fa-envelope-open-text"></i>
                        <div class="addtext">
                            <h4>Email:</h4>
                            <p>info@bobsilglobal.com</p>
                        </div>
                    </div>
                </div>
                <div class="subscribe_category">
                    <section id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.388712776677!2d5.317601814092497!3d5.941043831309873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040933d076ae0a9%3A0x7e5adb00f186dd2!2sBOB%20%26%20SIL%20GLOBAL%20SERVICES%20LIMITED!5e0!3m2!1sen!2sng!4v1654573311914!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </section>
                    <div class="category">
                        <h3>Quick Links</h3>
                        <div class="categories">
                            <li><a href="about.php">About Bob & sil</a></li>
                            <li><a href="#">Career Opportunities</a></li>
                            <li><a href="#">Vessels</a></li>
                            <li><a href="petroleum.html">Haulage & Storage</a></li>
                            <li><a href="waste_management.html">Waste management</a></li>
                            
                            
                        </div>
                    </div>
                    <!-- <div class="subscribe">
                        <h3>Please subscribe to our newsletter</h3>
                        <form id="subscribe" method="post" action="">
                            <input type="email" id="email" name="email" placeholder="enter your email">
                            <input type="submit" id="submit" value="Subscribe">
                        </form>
                    </div> -->
                </div>
                <div class="socialMedia_workHours">
                    <div class="workingHours">
                        <h3>Working hours</h3>
                        <div class="hours">
                            <p>We are Open Mondays to Fridays 8:00am to 5:00pm</p>
                        </div>
                    </div> 
                    <div class="socialMedia">
                        <h3>Follow us on social media</h3>
                        <div class="socialLinks">
                            <a target="_blank" href="#" title="Follow bob abd sil on facebook"><i class="fab fa-facebook-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on twitter"><i class="fab fa-twitter-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on instagram"><i class="fab fa-instagram-square"></i></a>
                            <a target="_blank" href="#" title="Follow bob abd sil on Linkedin"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>   
                </div>
            </section>
        </section>
        <section class="secondaryFooter">
            <p>&copy;<?php echo date("Y")?> Bob & Sil Global. All Rights Reserved.</p>
        </section>
    </footer>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    
    <div class="toTop">
        <a href="#aboutBanner"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>


        <script src="script.js"></script>
        <script src="jquery.js"></script>
</body>
</html>

<?php 
    endforeach;
}
?>