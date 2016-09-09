<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="x-ua-compatible" content="IE=9"/><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developers&#039; Foundation</title>
    <meta name="description" content="Every developer can make a difference.">
    <meta name="keywords"
          content="developers', developer, foundation, developer's Foundation, bootstrap, developers, designers, marketers, non-profit, charity">
    <meta name="author" content="Developers&#039; Foundation">
    <meta property="og:title" content="Developers&#039; Foundation"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:image" content="https://developersfoundation.ca/assets/img/logo.copy.min.png"/>
    <meta property="og:description" content="Every developer can make a difference."/>
    <meta property="og:url" content="https://developersfoundation.ca/"/>
    <meta property="fb:app_id" content="1107893785918456"/>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="assets/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Slider
    ================================================== -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="assets/css/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/style2.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/component.css"/>
    <link rel='stylesheet' type='text/css' href='assets/css/gfonts.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/buttons.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/normalize.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/vicons-font.css'>
    <!--<link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>-->
    <!-- TODO: Fadi.. link tags should always be in head and we already have installed lato in gfonts.css, what is this for? -->
    <!-- modernizr-->
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="demo-blog">
    <div id="home1">
        <div id="large-header-blog" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <!-- <h1 class="main-title" style="font-size: 52pt;"><b>FAQ</b></h1> -->
        </div>
    </div>

    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container" style="padding-left: 5px;padding-right: 5px">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" style="padding: 15px 0px 0px 15px" href="index.php">developers'
                    <span class="thin">Foundation</span></a>
            </div>
        </div><!-- /.container-fluid -->
    </nav>

    <!--=======================================================
    Application form starts
    ========================================================-->

    <!-- going back to previous page
<ul class="list-inline social-list" style="position: fixed; top: 0; z-index: 999">
        <li>
            <a href="join-us">
            <span>
                <i class="ti-angle-left" style="font-size: 1em;"></i>
            </span>
Back to available positions
</a>
        </li>
    </ul> -->
    <a id="top"></a>
    <section>
        <div class="row" style="text-align:center;">
            <span><i class="fa fa-user" style="font-size: 15em;" aria-hidden="true"></i><h2><b>Found a position you're interested in? <br/> Please fill in the application form below</b></h2></span>
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" style="background-color:#f8f8f8;">
                <div class="row">
                    <form class="text-center" data-form-type="default" action="application-form-submit.php"
                          method="post"
                          enctype="multipart/form-data"
                          data-error="There were errors, please check all required fields and try again"
                          data-success="Thanks for taking the time to complete the planner. We'll be in touch shortly!">
                        <h4 class="uppercase mt48 mt-xs-0">Please fill in the application form
                            for <? echo $_GET["position"]; ?></h4>

                        <div class="col-md-12">
                            <h6 class="uppercase">
                                1. Your personal details
                            </h6>
                            <input class="" type="text" name="position" id="position"
                                   value="<? echo $_GET['position']; ?>"
                                   style="display: none;"/>
                            <input type="text" name="name" class="validate-required" placeholder="Full Name*"/>
                            <input type="text" name="email" class="validate-required validate-email"
                                   placeholder="Email Address*"/>
                            <input type="text" name="number" class="validate-required"
                                   placeholder="Phone Number*"/>
                            <button type="button"
                                    class="button button--nuka button--round-s button--text-thick button--size-s"
                                    style="color: #fff; text-align:center" name="filePlaceholder"
                                    onclick="event.preventDefault(); document.getElementsByName('fileToUpload')[0].click(); return false;">
                                Attach
                                your resume
                            </button>
                            <input type="file" name="fileToUpload" style="display: none;" onchange="fileSubmit(this)"/>
                            <script>
                                //document.getElementsByName("filePlaceholder")[0].preventDefault();

                                function fileSubmit(data) {
                                    var file = data.value;
                                    var fileName = file.split("\\");
                                    if (fileName == "") fileName = "Attach your resume";
                                    document.getElementsByName("filePlaceholder")[0].innerHTML = fileName[fileName.length - 1];
                                    return false;
                                }
                            </script>
                        </div>
                        <div class="">
                            All document file formats are supported up to 5Mb</br>
                        </div>
                        <div class="">
                            <h6 class="">
                                2. Program details
                            </h6>
                            <div class="">
                                <i class="ti-angle-down"></i>
                                <select name="school-year">
                                    <option selected value="Default">Select your current school year</option>
                                    <option value="1st year">1st year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>
                                    <option value="Post-grad">Post-grad</option>
                                </select>
                                <br>
                            </div>

                            <input type="text" name="program" class=" validate-required"
                                   placeholder="Program*"/>
                            <hr>
                        </div>
                        <div class="">
                            <h6 class="">
                                3. Links (fill in if you have any of these)
                            </h6>
                            <input type="text" name="linkedin" placeholder="Linkedin URL"/>
                            <input type="text" name="github" placeholder="Github URL"/>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <button type="submit"
                                    class="button button--nuka button--round-s button--text-thick button--size-l"
                                    style="color: #fff; text-align:center" ><b>Submit Application</b>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Application form ends -->

    <!-- Beginning of footer -->
    <nav id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-inline text-center h4">
                        <li><a href="career.php">Careers</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#TermsOfService">Terms of Service</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#PrivacyPolicy">Privacy Policy</a></li>
                    </ul>
                </div>
                <hr style="width: 60%;clear: both;">
                <div class="col-sm-12">
                    <ul class="footer-social list-inline text-center">
                        <li><a href="https://www.facebook.com/Developers-Foundation-989771317784822/?fref=ts"
                               target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-12 text-center">
                    <p>Copyright &copy; 2016. Developers' Foundation. All rights reserved.</a></p>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sart Modal -->
    <div class="modal fade" id="TermsOfService" tabindex="-1" role="dialog" aria-labelledby="Terms of Service"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Terms of Service</h4>
                </div>
                <div class="modal-body">
                    <p>Last updated: August 19, 2016</p>
                    <p>These Terms of Service ("Terms", "Terms of Service") govern your relationship with
                        http://developersfoundation.ca website (the "Service") operated by Developers' Foundation ("us",
                        "we", or "our").</p>
                    <p>Please read these Terms of Service carefully before using the Service.</p>
                    <p>Your access to and use of the Service is based on your acceptance of and compliance with these
                        Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
                    <p>By accessing or using the Service you agree to be bound by these Terms and accept all legal
                        consequences. If you do not agree to these terms and conditions, in whole or in part, please do
                        not use the Service.</p>
                    <p><strong>Intellectual Property</strong></p>
                    <p>The Service and all contents, including but not limited to text, images, graphics or code are the
                        property of Developers' Foundation and are protected by copyright, trademarks, database and
                        other intellectual property rights. You may display and copy, download or print portions of the
                        material from the different areas of the Service only for your own non-commercial use. Any other
                        use is strictly prohibited and may violate copyright, trademark and other laws. These Terms do
                        not grant you a license to use any trademark of Developers' Foundation or its affiliates. You
                        further agree not to use, change or delete any proprietary notices from materials downloaded
                        from the Service.</p>
                    <p><strong>Links To Other Web Sites</strong></p>
                    <p>The Service may contain links to third-party web sites or services that are not owned or
                        controlled by Developers' Foundation.</p>
                    <p>Developers' Foundation has no control over, and assumes no responsibility for, the content,
                        privacy policies, or practices of any third party web sites or services. You further acknowledge
                        and agree that Developers' Foundation shall not be responsible or liable, directly or
                        indirectly, for any damage or loss caused or alleged to be caused by or in connection with use
                        of or reliance on any such content, goods or services available on or through any such websites
                        or services.</p>
                    <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party
                        web sites or services that you visit.</p>
                    <p><strong>Termination</strong></p>
                    <p>We may terminate or suspend access to our Service immediately, without prior notice or liability,
                        for any reason whatsoever, including, without limitation, if you breach the Terms.</p>
                    <p>All provisions of the Terms shall survive termination, including, without limitation, ownership
                        provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                    <p>Upon termination, your right to use the Service will immediately cease.</p>
                    <p><strong>Governing Law</strong></p>
                    <p>These Terms shall be governed by, and interpreted and enforced in accordance with, the laws in
                        the Province of Ontario and the laws of Canada, as applicable.</p>
                    <p>If any provision of these Terms is held to be invalid or unenforceable by a court of competent
                        jurisdiction, then any remaining provisions of these Terms will remain in effect. These Terms
                        constitute the entire agreement between us regarding our Service, and supersede and replace any
                        prior agreements, oral or otherwise, regarding the Service.</p>
                    <p><strong>Changes</strong></p>
                    <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
                        revision is material we will make reasonable efforts to provide at least 15 days' notice prior
                        to any new terms taking effect. What constitutes a material change will be determined at our
                        sole discretion.</p>
                    <p>By continuing to access or use our Service after those revisions become effective, you agree to
                        be bound by the revised terms. If you do not agree to the new terms, in whole or in part, please
                        stop using the website and the Service.</p>
                    <p><strong>Contact Us</strong></p>
                    <p>If you have any questions about these Terms, please contact us.</p>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- End of Terms of Service-->

    <!-- Start Privacy Policy Modal -->
    <div class="modal fade" id="PrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="Privacy Policy"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Privacy Policy</h4>
                </div>
                <div class="modal-body">
                    <div class='innerText'>This privacy policy has been compiled to better serve those who are concerned
                        with how their 'Personally Identifiable Information' (PII) is being used online. PII, as
                        described in US privacy law and information security, is information that can be used on its own
                        or with other information to identify, contact, or locate a single person, or to identify an
                        individual in context. Please read our privacy policy carefully to get a clear understanding of
                        how we collect, use, protect or otherwise handle your Personally Identifiable Information in
                        accordance with our website.<br></div>
                    <span id='infoCo'></span><br>
                    <div class='grayText'><strong>What personal information do we collect from the people that visit our
                            blog, website or app?</strong></div>
                    <br/>
                    <div class='innerText'>When ordering or registering on our site, as appropriate, you may be asked to
                        enter your name, email address, phone number or other details to help you with your experience.
                    </div>
                    <br>
                    <div class='grayText'><strong>When do we collect information?</strong></div>
                    <br/>
                    <div class='innerText'>We collect information from you when you register on our site, place an
                        order, subscribe to a newsletter, fill out a form, Use Live Chat or enter information on our
                        site.
                    </div>
                    <br>Provide us with feedback on our products or services <span id='infoUs'></span><br>
                    <div class='grayText'><strong>How do we use your information? </strong></div>
                    <br/>
                    <div class='innerText'> We may use the information we collect from you when you register, make a
                        purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the
                        website, or use certain other site features in the following ways:<br><br></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To allow us to better
                        service you in responding to your customer service requests.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To quickly process
                        your transactions.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To send periodic
                        emails regarding your order or other products and services.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> To follow up with them
                        after correspondence (live chat, email or phone inquiries)
                    </div>
                    <span id='infoPro'></span><br>
                    <div class='grayText'><strong>How do we protect your information?</strong></div>
                    <br/>
                    <div class='innerText'>We do not use vulnerability scanning and/or scanning to PCI standards.</div>
                    <div class='innerText'>We only provide articles and information. We never ask for credit card
                        numbers.
                    </div>
                    <div class='innerText'>We do not use Malware Scanning.<br><br></div>
                    <div class='innerText'>Your personal information is contained behind secured networks and is only
                        accessible by a limited number of persons who have special access rights to such systems, and
                        are required to keep the information confidential. In addition, all sensitive/credit information
                        you supply is encrypted via Secure Socket Layer (SSL) technology.
                    </div>
                    <br>
                    <div class='innerText'>We implement a variety of security measures when a user places an order
                        enters, submits, or accesses their information to maintain the safety of your personal
                        information.
                    </div>
                    <br>
                    <div class='innerText'>All transactions are processed through a gateway provider and are not stored
                        or processed on our servers.
                    </div>
                    <span id='coUs'></span><br>
                    <div class='grayText'><strong>Do we use 'cookies'?</strong></div>
                    <br/>
                    <div class='innerText'>Yes. Cookies are small files that a site or its service provider transfers to
                        your computer's hard drive through your Web browser (if you allow) that enables the site's or
                        service provider's systems to recognize your browser and capture and remember certain
                        information. For instance, we use cookies to help us remember and process the items in your
                        shopping cart. They are also used to help us understand your preferences based on previous or
                        current site activity, which enables us to provide you with improved services. We also use
                        cookies to help us compile aggregate data about site traffic and site interaction so that we can
                        offer better site experiences and tools in the future.
                    </div>
                    <div class='innerText'><br><strong>We use cookies to:</strong></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Help remember and
                        process the items in the shopping cart.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Understand and save
                        user's preferences for future visits.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Keep track of
                        advertisements.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Compile aggregate data
                        about site traffic and site interactions in order to offer better site experiences and tools in
                        the future. We may also use trusted third-party services that track this information on our
                        behalf.
                    </div>
                    <div class='innerText'><br>You can choose to have your computer warn you each time a cookie is being
                        sent, or you can choose to turn off all cookies. You do this through your browser settings.
                        Since browser is a little different, look at your browser's Help Menu to learn the correct way
                        to modify your cookies.<br></div>
                    <br>
                    <div class='innerText'>If you turn cookies off, some features will be disabled. It won't affect the
                        user's experience that make your site experience more efficient and may not function properly.
                    </div>
                    <br>
                    <div class='innerText'>However, you will still be able to place orders .</div>
                    <br><span id='trDi'></span><br>
                    <div class='grayText'><strong>Third-party disclosure</strong></div>
                    <br/>
                    <div class='innerText'>We do not sell, trade, or otherwise transfer to outside parties your
                        Personally Identifiable Information unless we provide users with advance notice. This does not
                        include website hosting partners and other parties who assist us in operating our website,
                        conducting our business, or serving our users, so long as those parties agree to keep this
                        information confidential. We may also release information when it's release is appropriate to
                        comply with the law, enforce our site policies, or protect ours or others' rights, property or
                        safety. <br><br> However, non-personally identifiable visitor information may be provided to
                        other parties for marketing, advertising, or other uses.
                    </div>
                    <span id='trLi'></span><br>
                    <div class='grayText'><strong>Third-party links</strong></div>
                    <br/>
                    <div class='innerText'>Occasionally, at our discretion, we may include or offer third-party products
                        or services on our website. These third-party sites have separate and independent privacy
                        policies. We therefore have no responsibility or liability for the content and activities of
                        these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any
                        feedback about these sites.
                    </div>
                    <span id='gooAd'></span><br>
                    <div class='blueText'><strong>Google</strong></div>
                    <br/>
                    <div class='innerText'>Google's advertising requirements can be summed up by Google's Advertising
                        Principles. They are put in place to provide a positive experience for users.
                        https://support.google.com/adwordspolicy/answer/1316548?hl=en <br><br></div>
                    <div class='innerText'>We use Google AdSense Advertising on our website.</div>
                    <div class='innerText'><br>Google, as a third-party vendor, uses cookies to serve ads on our site.
                        Google's use of the DART cookie enables it to serve ads to our users based on previous visits to
                        our site and other sites on the Internet. Users may opt-out of the use of the DART cookie by
                        visiting the Google Ad and Content Network privacy policy.<br></div>
                    <div class='innerText'><br><strong>We have implemented the following:</strong></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Google Display Network
                        Impression Reporting
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Demographics and
                        Interests Reporting
                    </div>
                    <br>
                    <div class='innerText'>We, along with third-party vendors such as Google use first-party cookies
                        (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie)
                        or other third-party identifiers together to compile data regarding user interactions with ad
                        impressions and other ad service functions as they relate to our website.
                    </div>
                    <div class='innerText'><br><strong>Opting out:</strong><br>
                        Users can set preferences for how Google advertises to you using the Google Ad Settings page.
                        Alternatively, you can opt out by visiting the Network Advertising Initiative Opt Out page or by
                        using the Google Analytics Opt Out Browser add on.
                    </div>
                    <span id='calOppa'></span><br>
                    <div class='blueText'><strong>California Online Privacy Protection Act</strong></div>
                    <br/>
                    <div class='innerText'>CalOPPA is the first state law in the nation to require commercial websites
                        and online services to post a privacy policy. The law's reach stretches well beyond California
                        to require any person or company in the United States (and conceivably the world) that operates
                        websites collecting Personally Identifiable Information from California consumers to post a
                        conspicuous privacy policy on its website stating exactly the information being collected and
                        those individuals or companies with whom it is being shared. - See more at:
                        http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf<br>
                    </div>
                    <div class='innerText'><br><strong>According to CalOPPA, we agree to the following:</strong><br>
                    </div>
                    <div class='innerText'>Users can visit our site anonymously.</div>
                    <div class='innerText'>Once this privacy policy is created, we will add a link to it on our home
                        page or as a minimum, on the first significant page after entering our website.<br></div>
                    <div class='innerText'>Our Privacy Policy link includes the word 'Privacy' and can be easily be
                        found on the page specified above.
                    </div>
                    <div class='innerText'><br>You will be notified of any Privacy Policy changes:</div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> On our Privacy Policy
                        Page<br></div>
                    <div class='innerText'>Can change your personal information:</div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> By logging in to your
                        account
                    </div>
                    <div class='innerText'><br><strong>How does our site handle Do Not Track signals?</strong><br></div>
                    <div class='innerText'>We honor Do Not Track signals and Do Not Track, plant cookies, or use
                        advertising when a Do Not Track (DNT) browser mechanism is in place.
                    </div>
                    <div class='innerText'><br><strong>Does our site allow third-party behavioral tracking?</strong><br>
                    </div>
                    <div class='innerText'>It's also important to note that we allow third-party behavioral tracking
                    </div>
                    <span id='coppAct'></span><br>
                    <div class='blueText'><strong>COPPA (Children Online Privacy Protection Act)</strong></div>
                    <br/>
                    <div class='innerText'>When it comes to the collection of personal information from children under
                        the age of 13 years old, the Children's Online Privacy Protection Act (COPPA) puts parents in
                        control. The Federal Trade Commission, United States' consumer protection agency, enforces the
                        COPPA Rule, which spells out what operators of websites and online services must do to protect
                        children's privacy and safety online.<br><br></div>
                    <div class='innerText'>We do not specifically market to children under the age of 13 years old.
                    </div>
                    <span id='ftcFip'></span><br>
                    <div class='blueText'><strong>Fair Information Practices</strong></div>
                    <br/>
                    <div class='innerText'>The Fair Information Practices Principles form the backbone of privacy law in
                        the United States and the concepts they include have played a significant role in the
                        development of data protection laws around the globe. Understanding the Fair Information
                        Practice Principles and how they should be implemented is critical to comply with the various
                        privacy laws that protect personal information.<br><br></div>
                    <div class='innerText'><strong>In order to be in line with Fair Information Practices we will take
                            the following responsive action, should a data breach occur:</strong></div>
                    <div class='innerText'>We will notify you via email</div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Within 7 business days
                    </div>
                    <div class='innerText'>We will notify the users via in-site notification</div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Within 7 business days
                    </div>
                    <div class='innerText'><br>We also agree to the Individual Redress Principle which requires that
                        individuals have the right to legally pursue enforceable rights against data collectors and
                        processors who fail to adhere to the law. This principle requires not only that individuals have
                        enforceable rights against data users, but also that individuals have recourse to courts or
                        government agencies to investigate and/or prosecute non-compliance by data processors.
                    </div>
                    <span id='canSpam'></span><br>
                    <div class='blueText'><strong>CAN SPAM Act</strong></div>
                    <br/>
                    <div class='innerText'>The CAN-SPAM Act is a law that sets the rules for commercial email,
                        establishes requirements for commercial messages, gives recipients the right to have emails
                        stopped from being sent to them, and spells out tough penalties for violations.<br><br></div>
                    <div class='innerText'><strong>We collect your email address in order to:</strong></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Send information,
                        respond to inquiries, and/or other requests or questions
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Process orders and to
                        send information and updates pertaining to orders.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Send you additional
                        information related to your product and/or service
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Market to our mailing
                        list or continue to send emails to our clients after the original transaction has occurred.
                    </div>
                    <div class='innerText'><br><strong>To be in accordance with CANSPAM, we agree to the
                            following:</strong></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Not use false or
                        misleading subjects or email addresses.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Identify the message
                        as an advertisement in some reasonable way.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Include the physical
                        address of our business or site headquarters.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Monitor third-party
                        email marketing services for compliance, if one is used.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Honor
                        opt-out/unsubscribe requests quickly.
                    </div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Allow users to
                        unsubscribe by using the link at the bottom of each email.
                    </div>
                    <div class='innerText'><strong><br>If at any time you would like to unsubscribe from receiving
                            future emails, you can email us at</strong></div>
                    <div class='innerText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&bull;</strong> Follow the
                        instructions at the bottom of each email.
                    </div>
                    and we will promptly remove you from <strong>ALL</strong> correspondence.
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- End of Privacy Policy modal-->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script src="js/jquery.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.4/SmoothScroll.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.isotope.js"></script>

<script src="assets/js/owl.carousel.js"></script>

<!-- Javascripts
================================================== -->
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>

<script src="assets/js/TweenLite.min.js"></script>
<script src="assets/js/EasePack.min.js"></script>

<!-- <script src="assets/js/demo-1.js"></script> -->

<!-- Slick Slider -->
<script type="text/javascript" src="assets/js/slick.js"></script>
<!-- Counter -->
<script type="text/javascript" src="assets/js/waypoints.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
<!-- mixit slider -->
<script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
<!-- Add fancyBox -->
<script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
<!-- Wow animation -->
<script type="text/javascript" src="assets/js/wow.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/custom.js"></script>
</body>
</html>
