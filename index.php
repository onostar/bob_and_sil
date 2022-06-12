<?php
    require "controller/connections.php";
    session_start();

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
    <meta name="og:image" property="og:image" itemprop="image" content="images/bobsil_logo.jpg">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>Welcome to Bob & Sil Global service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-web/css/all.min.css">
    
    <link rel="icon" href="images/bobsil_logo.jpg" type="image/png" size="32X32">
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
               
                <li><a href="javascript:void(0);">News Updates</a></li>
            </ul>
        </div>
    </section>
    <section id="banner">
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
            <div class="slides">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/home.jpg" alt="bob and sil">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Welcome to Bob & Sil Global Services</h2>
                            <p>We strive to meet up with the growing worldwide demand for oil & gas while preparing for the future..</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="projects.php">Projects <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/vessel.jpg" alt="Bob and sil">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Quality Oil. Quality Service </h2>
                            <p>Providing quality, sustainable and affordable products & services in the Oil & Gas Industry</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="contact.html">Get a Quote <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/storage.jpg" alt="Bob and sil">
                    </div>
                    <div class="taglines">
                        <div class="taglines_note">
                            <h2>Providing Innovative Industrial solutions</h2>
                            <p>We are here to provide your oil and gas needs</p>
                            
                            <div class="btns">
                                <!-- <a href="javascript:void(0)" class="showRequest">Schedule an Appointment Now</a> -->
                                <a href="about.php">Learn more <i class="fas fa-info"></i></a>
                                <a href="contact.html">Contact us <i class="fas fa-sign-in-alt"></i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    <!-- summary of services -->
    <section id="service_summary">
        <div class="sum_serv">
            <div class="serv_icon">
                <i class="fas fa-ship"></i>
            </div>
            <h3>Marine Logisitics</h3>
            <hr>
            <p>High-quality logistics services with  efficient & seamless transportation of products</p>
            <div class="serv_icon2">
                <a href="marine_logistics.html" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="sum_serv">
            <div class="serv_icon">
                <i class="fas fa-truck"></i>
            </div>
            <h3>Haulage & Storage</h3>
            <hr>
            <p>We purchase, ship and market all kinds of refined petroleum products such as AGO, DPK, PMS</p>
            <div class="serv_icon2">
                <a href="petroleum.html" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="sum_serv">
            <div class="serv_icon">
                <i class="fas fa-gas-pump"></i>
            </div>
            <h3>Offshore supplies</h3>
            <hr>
            <p>We provide invaluable support at all levels to help customers reduce costs and risk.</p>
            <div class="serv_icon2">
                <a href="sales.html" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <div class="sum_serv">
            <div class="serv_icon">
                <i class="fas fa-dumpster"></i>
            </div>
            <h3>Waste Management</h3>
            <hr>
            <p>We provide state-of-the-art and traditional treatment and control methods for removing, controlling, and treating waste problems. </p>
            <div class="serv_icon2">
                <a href="waste_management.html" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
            </div>
        </div>
        <!-- <div class="sum_serv">
            <div class="serv_icon">
                <i class="fas fa-ship"></i>
            </div>
            <h3>Marine Logisitics</h3>
            <hr>
            <p>High-quality logistics services with  efficient & seamless transportation of products</p>
            <div class="serv_icon2">
                <a href="marine_logisitics.html" title="Click to learn more"><i class="fas fa-angle-right"></i></a>
            </div>
        </div> -->
        
    </section>
    <main>
        <!-- features -->
        <section id="features">
            <div class="features">
                <h3>Features</h3>
                <h4>We offer</h4>
                <h2>Petroleum and Engineering Services</h2>
                <hr>
                <div class="feats">
                    <div class="feat">
                        <i class="fas fa-truck"></i>
                        <h3>Punctual Delivery</h3>
                        <p>We offer timely and prompt delivery to our customers nation wide. Distance is not  barrier</p>
                    </div>
                    <hr>
                    <div class="feat">
                        <i class="fas fa-users"></i>
                        <h3>Professional Engineers</h3>
                        <p>We have world class engineers on-shore and off-shore to manage and fix our vessels</p>
                    </div>
                </div>
            </div>
            <div class="feature_img">
                <img src="images/gm.jpg" alt="Our services">
            </div>
        </section>
        <!-- about page -->
        <section id="about_us">
            <div class="about_banner">
                <div class="banner_img">
                    <img src="images/banner1.jpg" alt="bob & sil">
                </div>
                <!-- <div class="clients">
                    <img src="images/gm.jpg" alt="bob & sil">

                </div> -->
            </div>
            <div class="about_text">
                <h3>Who we are</h3>
                <h2>We Are Pioneers In The Oil and gas Industry!</h2>
                <div class="notes">
                    <div class="notes_1">
                        <p>Bob & Sil Global services is among the world’s leading Oil & Gas e solutions provider that is revolutionising and redefining the way sustainable Oil & Gas sources are harnessed across the world. Bob & Sil Global  Oil & Gas company is a renown leader, proof-tested at working in extremely difficult environments, both onshore and offshore.</p><br>
                        <p>At Bob & Sil, we provide a wide selection of off-shore support services that ensures our clients operations are fully optimized and they receive value for their money.
                        <br>
                        Our experience in the Nigerian maritime industry in combination with our vast network allows us to provide offshore supply within the shortest delivery time among other maritime suppliers in the region. This also enables us to quote high quality products at a low price.<br><br>
                        <!-- Our team provides invaluable support at all levels to help customers reduce costs and risk by making informed choices at the earliest possible stage.<br>
                        <p>At <strong>Bob & Sil</strong>, our business is people-centric and we believe and adhere to our guiding principle of building strong human resource capacity to achieve and sustain our business goals and objectives. --></p>
                        <!-- <p style="text-align: justify;">Our current staff strength of almost a hundred (100) actively engaged personnel.</p>
                        <p style="text-align: justify;">A greater percentage of our team is made up of qualified persons from within our business operating communities. --></p>
                        <a href="about.php"class="about_btn">Read more <i class="fas fa-angle-double-right"></i></a>
                    </div>
                    <!-- <div class="notes_2">
                        <p>How can we meet the growing demand for oil and gas while protecting our climate & make planet a better place?</p>
                        <ul>
                            <li>We ensure strict adherence to being HSC compliant</li>
                            <li>We have high focus on the sustainability of the environment</li>
                            <li>We increase local participation in the oil and gas sector.</li>
                            <li>We do not relent in our continued contribution to community development</li>
                            <li>We increase healthy competition in the petroleum industry.</li>
                            
                        </ul>
                    </div> -->
                </div>
            </div>
        </section>
        
        <!-- why choose us -->
        <section id="why_choose">
            <div class="reasons">
                <h3 id="this">Why choose us</h3>
                <h2>We are Building a Sustainable Future</h2>
                <div class="all_reasons">
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Best Oil & gas Solutions</h3>
                            <p>About a decade of rich experience in the oil & gas sector with best practice and production.</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="reason_note">
                            <h3>Global Expertise</h3>
                            <p>We have an unwavering dedication to excellence by providing timely delivery and high quality products at all times</p>
                        </div>
                    </div>
                    <div class="reason">
                        <div class="reason_icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="reason_note">
                            <h3>End-to-End services</h3>
                            <p>We create employment and steady income opportunities for the unemployed youths in the country, particularly within our operation communities</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our_service">
                <div class="service_box" id="box1">
                    <div class="service_img">
                        <img src="images/banner2.jpg" alt="Bob and sil">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-building"></i>
                        <h3>Haulage & Storage</h3>
                        <p>Professional oil and gas haulage and Storage services</p>
                    </div>
                </div>
                <div class="service_box">
                    <div class="service_img">
                        <img src="images/tank4.jpg" alt="Haulage">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-hotel"></i>
                        <h3>Haulage services</h3>
                        <p>Professional oil and gas haulage and maintainance</p>
                    </div>
                </div>
                <div class="service_box" id="box3">
                    <div class="service_img">
                        <img src="images/engineers.jpg" alt="bob and sil">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-building"></i>
                        <h3>Engineering</h3>
                        <p>Industrial and chemical engineering service</p>
                    </div>
                </div>
                
                
                <div class="service_box" id="box4">
                    <div class="service_img">
                        <img src="images/gantry2.jpg" alt="bob and sil">
                    </div>
                    <div class="service_note">
                        <i class="fas fa-gopuram"></i>
                        <h3>Engineering</h3>
                        <p>Industrial and chemical engineering service</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- core service -->
        <section id="core_service">
            <div class="core_tool">
                <img src="images/home.jpg" alt="core service tools">
            </div>
            <div class="core">
                <div class="core_notes">
                    <h3>services</h3>
                    <h2>Our core services</h2>
                    <p>We operate with excellence and high business ethics in major areas of the oil and gas industry including:</p><br>
                    <a href="contact.html">Get a quote <i class="fas fa-angle-double-right"></i></a>
                    <img src="images/oil-gas.png" alt="service image">
                </div>
                
                <div class="core_services">
                    <figure>
                        <i class="fas fa-database"></i>
                        <figcaption>
                            <h3>Haulage & Storage</h3>
                            <p>We import, store and distribute all forms of petroleum products across the nation</p><br>
                            <a href="petroleum.html">Discover more <i class="fas fa-file-invoice-dollar"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-gas-pump"></i>
                        <figcaption>
                            <h3>Offshore supplies</h3>
                            <p>Get the best price for all petroleum products at your request. </p><br>
                            <a href="sales.html">Discover more <i class="fas fa-headset"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-ship"></i>
                        <figcaption>
                            <h3>Marine Logistics</h3>
                            <p>we provide ancillary marine logistics services used in the oil and gas industry.</p><br>
                            <a href="marine_logistics.html.html">Get a Quote <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    <figure>
                        <i class="fas fa-dumpster"></i>
                        <figcaption>
                            <h3>Waste management</h3>
                            <p>Recycling renewable energy is one of our expertise. Contact us for a quote</p><br>
                            <a href="waste_management.html">Get a Quote <i class="fas fa-paper-plane"></i></a>
                        </figcaption>
                    </figure>
                    
                </div>
            </div>
            
        </section>
        <!-- team -->
        <section id="team">
            <h2>The Amazing team behind our Company</h2>
            <hr>
            <p>We have a qualified team of in-house Engineers and professionals in the oil & gas sector dedicated to providing professional service to your doorstep</p>
            <div class="team">
                <figure>
                    <img src="images/ceo2.jpg" alt="management photo">
                    <figcaption>
                        <h3>Akuyoma Orighomisan Bobson<span>Chairman/CEO</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <img src="images/" alt="management photo">
                    <figcaption>
                        <h3><span>General Manager</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <img src="images/" alt="management photo">
                    <figcaption>
                        <h3><span>Admin/HRM</span></h3>
                    </figcaption>
                </figure>
                <figure>
                    <img src="images/accountant.jpg" alt="management photo">
                    <figcaption>
                        <h3>Maureen Oseghae<span>Accountant</span></h3>
                    </figcaption>
                </figure>
            </div>
            <div class="more_team">
                <a href="about.php#team" title="View team members">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </section>
        <!-- recent projects -->
        <Section id="plans">
            <h3 class="plans_title">Portfolio</h3>
            <h2>Check out our recent projects</h2>
            <p class="first_p">Discover a few of our most successful projects</p>
            <div class="plans">
                <?php 
                    $get_projects = $connectdb->prepare("SELECT * FROM projects ORDER BY post_date LIMIT 7");
                    $get_projects->execute();
                    $projects = $get_projects->fetchAll();
                    foreach($projects as $project):
                ?>
                <div class="plan_form" id="plan1">
                    
                        <figure>
                            <div class="project_img">
                                <img src="<?php echo 'media/'.$project->photo?>" alt="projects">
                            </div>
                            <figcaption>
                                <h3><?php echo $project->title?></h3>
                                <!-- <p><?php echo $project->details?></p> -->
                            </figcaption>
                        </figure>
                </div>
                <?php endforeach?>
                
                

            </div>
            <a id="moreProjects" href="projects.php" title="View more projects">More Projects <i class="fas fa-angle-double-right"></i></a>

        </Section>
        <!-- hero -->
        <section id="hero">
            <div class="hero_image">
                <img src="images/vessel4.jpg" alt="hero image">
            </div>
            <div class="hero_notes">
                <div class="note">
                    <h3>96%</h3>
                    <p>Positive Feedback</p>
                </div>
                <div class="note">
                    <h3><?php
                        $get_projects = $connectdb->prepare("SELECT * FROM projects");
                        $get_projects->execute();
                        echo $get_projects->rowCount();
                    ?></h3>
                    <p>Projects completed</p>
                </div>
                <div class="note">
                    <h3>100+</h3>
                    <p>Staff strength</p>
                </div>
                <div class="note">
                    <h3>10+</h3>
                    <p>Years of Experience</p>
                </div>
            </div>
        </section>
        <!-- investment -->
        <section id="investment">
            <div class="intro">
                <p>greener tomorrow for everyone</p>
                <h2>Save the planet by using and recycling Crude Oil Waste</h2>
                <p>Sustainable development is the creed that underpins Bob & sils bespoke initiatives to protect the environment, strengthen communitites and propel financial growth.<br><br>Bob & Sil global is among the worlds leading Oil & gas solutions provider that is revolutionizing and redefining the way sustaininable petroleum sources are harnessed across the world.</p>
                <a href="contact.html">Contact us <i class="fa-solid fa-headset"></i></a>
            </div>
            <div class="invest_img">
                <img src="images/vessel2.jpg" alt="Investment">

            </div>
        </section>
        
        <!-- <section id="testimonies">
            <h2>testimonies from our Clients</h2>
            <hr>
            <div class="box">
                <div class="testimonies">
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_01-540x518.jpg" alt="James Chester">
                        </div>
                        <div class="test_note">
                            <p>"I couldn’t be happier with the service I was provided. Everyone took ample time with me to ensure that my visit exceeded my expectations."</p>
                            <div class="testifier">
                                <img src="images/team_01-540x518.jpg" alt="testifier">
                                <span>- James Chester</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_02-540x518.jpg" alt="Andre Coleman morgans">
                        </div>
                        <div class="test_note">
                            <p>"We have used Bob and sil to provide services that our competitions cannot begin to offer. That has given us a decisive edge in our market. Now we can produce even more with sustainable energy"</p>
                            <div class="testifier">
                                <img src="images/team_02-540x518.jpg" alt="testifier">
                                <span>- Eddie Smith</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_03-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"We have been engaged with Bob and sil for several months now. They have been very responsive to all requests. Investing with Irecco has brought more financial value to us as a company as well as development."</p>
                            <div class="testifier">
                                <img src="images/team_03-540x518.jpg" alt="testifier">
                                <span>- Damian wilsbrock</span>
                            </div>
                        </div>
                        
                    </div>
                    <div class="testimony">
                        <div class="test_img">
                            <img src="images/team_04-540x518.jpg" alt="Will pilo">
                        </div>
                        <div class="test_note">
                            <p>"Bob and SIl globale an excellent service, be it on a business or personal level.I found the company's various investment plans very helpful to the growth of my business and i am heading on a great path to finanncial freedom"</p>
                            <div class="testifier">
                                <img src="images/team_04-540x518.jpg" alt="testifier">
                                <span>- Sean Mendoz</span>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section> -->
        <!-- gallery -->
        <!-- <Section id="gallery">
            <h3 class="plans_title">Our Gallery</h3>
            <h2>Photos and media</h2>
            <p class="first_p">Discover our work in frames</p>
            <div class="plans">
                <?php 
                    $get_photos = $connectdb->prepare("SELECT * FROM gallery ORDER BY post_date LIMIT 8");
                    $get_photos->execute();
                    $photos = $get_photos->fetchAll();
                    foreach($photos as $photo):
                ?>
                <div class="plan_form">
                    <figure><a href="<?php echo 'media/'.$photo->photo?>" target="_blank">
                        <img src="<?php echo 'media/'.$photo->photo?>" alt="gallery">
                        <figcaption>
                            <h3><?php echo $photo->title?></h3>
                            
                        </figcaption>
                    </figure>
                </div>
                <?php endforeach?>
                
                
                <a id="moreProjects" href="gallery.php" title="View more photos">View more <i class="fas fa-angle-double-right"></i></a>
            </div>
        </Section> -->
        <!-- hero 2 -->
        <section class="investment">
            <div class="invest_img">
                <img src="images/entrance.jpg" alt="Tank farm">

            </div>
            <div class="intro">
                <p>Oil Company that works</p>
                <h2>Taking Haulage service to the next level</h2>
                <p>Bob & Sil has secured all prerequisite government licenses and permits to store petroleum products for its retail and marketing division and for all marketing purposes.</p>
                <p>Our petroleum product storage has current capacity of 380,000 litres and it is in the process of being increased to a mono depot of over 10 million litres.</p>
                <p>Our storage facilities operate from with the local communities of Delta State, Nigeria, but with ambitious capacity for a national and regional coverage of supplies.</p>
                <a href="contact.html">Get a quote <i class="fas fa-paper-plane"></i></a>
            </div>
        </section>
        
        
        <!-- news and articles -->
        <!-- <section class="trends">
            <h2>Our Latest Stories</h2>
            <hr>
            <div class="topics">
                <article>
                    <a href="javascript:void(0)">
                        <img src="images/bob-oil-gas.jpg" alt="blog">
                        <div class="summary">
                            <h3>Helping companies in their green transition</h3>
                            <p>Bob and SIl has received inquiries seeking clarifications of job offers</p> <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
                <article>
                    <a href="javascript:void(0)">
                        <img src="images/project_4.jpg" alt="blogs">
                        <div class="summary">
                            <h3>Wind of change in the power industry</h3>
                            <p>Bob and sil has been fully involved in the development of power from renewable energy world wide through power investments <span>Read more...</span></p>
                        </div>
                    </a>
                </article>
            </div>
        </section> -->
        
    </main>
    <!--Partners -->
    <section id="partners">
            <h3>Our Partners</h3>
            <div class="partners">
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
                <figure>
                    <img src="images/" alt="partners">
                </figure>
            </div>
        </section>
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
                            <p>+2348067495426, +2348125631690, +2348071805429</p>
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
            <p>&copy;2022 Bob & Sil Global. All Rights Reserved.</p>
        </section>
    </footer>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    
    <div class="toTop">
        <a href="#banner"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>
    <!-- addvert -->
    <!-- <div class="addverts">
        <div class="close_add">
            <i class="fas fa-close"></i>
        </div>
        <div class="clear"></div>
        <div class="add_box">
            <h3>Welcome to IppSSolar</h3>
            <div class="welcome_plans">
                <img src="images/ippssolar_logo2.png" alt="logo">
                <p>Have you invested with Ippssolar today? Hurry now as interest rates is now very high. Offer lasts not so long</p>
                <div class="learn">
                    <a href="#investment" id="learn">Learn more <i class="fas fa-info"></i></a>
                </div>
                
            </div>
        </div>
    </div> -->
    <!-- chat -->
    <!-- <div id="chat">
        <div class="chat_icon" title="Live chat">
            <i class="fas fa-comments"></i>
        </div>
        <div class="chat_close" title="Close chat">
            <i class="fas fa-comment-slash"></i>
        </div>
        <div class="chat_message">
            <h2>Live Chat <i class="far fa-comment"></i></h2>
            <div class="all_chat">
                <div id="chat1">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats">Hi. This is customer service<br> Welcome to Bob and sil global. We ar e a world class Renewable energy service company. How may we be of service today?</p>
                        
                    </div>
                </div>
                <div id="chat3">
                    <div class="main_chats">
                        <div class="sender">
                            <i class="fas fa-user-tie"></i>
                            <p>Customer service</p>
                        </div>
                        <p class="chats"> Ask me anything, i am here to help</p>
                        
                    </div>
                </div>
                
                
            </div>
            
             <form action="" id="chat_box">
                <input type="text" name="messages" id="messages" placeholder="Type your message here">
                <a href="views/login_page.php"><i class="fas fa-paper-plane"></i></a>
             </form>   
                
            
        </div>
        
    </div> -->
    
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>