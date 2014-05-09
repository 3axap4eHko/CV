<?php
ob_start();
ini_set('display_errors',1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8">
    <title>Zakharchenko Ivan — Zend Certified Engineer PHP 5.3 with experience in HTML5, CSS3, JavaScript, PHP, MySQL, Linux, MongoDB</title>
    <meta name="description" content="Zakharchenko Ivan — Zend Certified Engineer PHP 5.3 with experience in HTML5, CSS3, JavaScript (ECMAScript 5), PHP, MySQL, Linux, MongoDB. Experienced with a lot of frameworks such as Zend Framework 1 and 2, Symfony 2, Phalcon, jQuery, Sencha products">
    <meta name="keywords" content="linux, apache, php, mysql, web, nosql, mongodb, javascript, ecmascript, css3, html5, extjs, frameworks, certified, developer" />
    <meta name="author" content="Zakharchenko Ivan">
    <meta name="revisit-after" content="10 days">

    <meta property="og:title" content="Zakharchenko Ivan"/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content="favicon.png"/>
    <meta property="og:description" content="Zakharchenko Ivan — Zend Certified Engineer PHP 5.3 with experience in HTML5, CSS3, JavaScript, PHP, MySQL, Linux, MongoDB"/>
    <meta property="og:site_name" content="Zakharchenko Ivan">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Zakharchenko Ivan">
    <meta name="twitter:description" content="Zakharchenko Ivan — Zend Certified Engineer PHP 5.3 with experience in HTML5, CSS3, JavaScript, PHP, MySQL, Linux, MongoDB">
    <meta name="twitter:image" content="favicon.png">
    <meta name="twitter:url" content="">
    <meta name="twitter:site" content="@3axap4eHko">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/liga-font.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body data-spy="scroll" data-target="#nav-bar" data-offset="80">
<div class="container">
    <nav data-spy="affix" data-offset-top="55" class="navbar navbar-default" role="navigation" id="nav-bar">
        <ul class="nav navbar-nav">
            <li><a href="#about">About me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#certificates">Certificates</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
        </ul>
    </nav>
    <header>
        <h1>Zakharchenko Ivan</h1>
        <h2>Software Engineer</h2>
        <h3>
            I love to build beautiful things based on fast and powerful technologies, so drop me a line if you’d like to create something beautiful together.
        </h3>
    </header>
    <div class="content-container">
        <section class="row break-page" id="about">
            <aside class="col-lg-3">
                <h2>About me</h2>
                <h5>professional profile<br/>and contact info</h5>
            </aside>
            <article class="col-lg-9">
                <div class="col-lg-6">
                    <img src="img/photo.jpg" class="img-thumbnail pull-left w100">
                    <p>Hello there! I’m Ivan. I love startups (of which I’ve co-founded three) and regularly contribute to open-source projects on GitHub.</p>
                    <p>I love building gorgeous, secure, powerful, responsive websites, writing clean, maintainable code, and building software to make people’s lives a little bit easier.</p>
                    <p>My hobbies include drawing, design, gym, sport, write poetry, playing guitar and of course the programming.</p>
                    <p>My main qualities is perseverance, desire for knowledge, a healthy lifestyle, resistance to stress and of course the hig intelligence.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="socials">
                        <li><a href="https://www.facebook.com/3axap4eHko" target="_my_facebook"><img src="img/icons/facebook.png" alt="Facebook"/></a></li>
                        <li><a href="http://twitter.com/3axap4eHko" target="_my_twitter"><img src="img/icons/twitter.png" alt="Twitter"/></a></li>
                        <li><a href="https://www.linkedin.com/in/3axap4ehko" target="_my_linkedin"><img src="img/icons/linkedin.png" alt="LinkedIn"/></a></li>
                        <li><a href="https://github.com/3axap4eHko" target="_my_github"><img src="img/icons/github.png" alt="GitHub"/></a></li>
                        <li><a href="http://habrahabr.ru/users/3axap4ehko" target="_my_github"><img src="img/icons/habrahabr.png" alt="Habrahabr"/></a></li>
                    </ul>
                    <ul class="contacts">
                        <li><span class="glyphicon glyphicon-gift"></span><a>29 January 1986</a></li>
                        <li><span class="glyphicon glyphicon-phone"></span><a href="tel:+375292439867">+375 29 243 98 67</a></li>
                        <li><span class="glyphicon-liga skype"></span><a href="skype:battlebit">battlebit</a></li>
                        <li><span class="glyphicon glyphicon-map-marker"></span><a href="https://www.google.com/maps/preview#!q=Minsk+Belarus" target="_blank">Belarus, Minsk</a></li>
                        <li><span class="glyphicon glyphicon-envelope"></span><a href="mailto:3axap4eHko@gmail.com">3axap4eHko@gmail.com</a></li>
                        <li><span class="glyphicon glyphicon-star"></span><a href="http://3axap4ehko.github.io/CV/">My web CV</a></li>
                    </ul>
                </div>
            </article>
        </section>
<?php
$nowYear = date('Y');

$skills = [
    'OS' => [
        'Windows 98/XP/7/8' => 1996,
        'Linux (CentOS, Debian, Ubuntu)' => 2006,
    ],
    'Web servers' => [
        'Apache 2+' => 2006,
        'Ngnix' => 2011,
        'NodeJS' => 2011,
        'PHP Build-in' => 2011,
    ],
    'Databases \ Storage \ Cache systems' => [
        'MySQL 5+' => 2006,
        'MongoDB' => 2011,
        'SQLite' => 2012,
        'Memcache' => 2010,
        'APC' => 2011
    ],
    'Programming Languages' => [
        'PHP 5+' => 2006,
        'JavaScript (ECMAScript 3)' => 1996,
        'JavaScript (ECMAScript 5)' => 2011,
        'Bash script' => 2008,
        'C#(.NET/Mono)' => 2011,
        'Python 3' => 2013,
        'Zephir' => 2013
    ],
    'Frameworks' => [
        'Zend Framework' => 2006,
        'Zend Framework 2' => 2011,
        'Phalcon' => 2013,
        'Symfony 2' => 2012,
        'Doctrine 2 ORM/ODM' => 2012,
        'Twitter Bootstrap' => 2012,
        'JQuery (JQuery UI, JQuery Mobile)' => 2012,
        'ExtJS 4' => 2011,
        'AngularJS' => 2012,
        'Unity 3D' => 2013
    ],
    'Design' => [
        'HTML' => 1996,
        'HTML5' => 2011,
        'CSS' => 1996,
        'CSS3' => 2011,
        'Photoshop' => 2006,
        '3ds Studio Max' => 2012,
        'Corel Draw' => 2006
    ],
    'System Version Control' => [
        'Git' => 2008,
        'Mercurial' => 2011,
        'SVN' => 2006
    ],
    'Unit testing' => [
        'PHPUnit' => 2008,
        'Jasmin' => 2012,
        'Karma' => 2013,
        'NUnit' => 2013
    ],
    'Code profiling \ Debugging' => [
        'XDebug' => 2008,
        'XHprof' => 2011
    ],
    'Continuous Integration' => [
        'Jenkins / Hudson' => 2011,
        'Travis' => 2013
    ],
    'Other skills' => [
        'RESTful API' => 2010,
        'JSON-RPC/XML-RPC' => 2012,
        'OAuth / OAuth2' => 2011,
        'Google Chrome Extension API' => 2011
    ]
];
?>
        <section class="row break-page" id="skills">
            <aside class="col-lg-3">
                <h2>Skills</h2>
                <h5>experienced<br/>known technologies</h5>
            </aside>
            <article class="col-lg-9">
                <div class="skills col-lg-12">
                    <p>I love to learn new technologies and use them in my projects.</p>
                    <div class="row-fluid">
                    <?php foreach($skills as $title => $items):?>
<h3><?php echo $title ?></h3>
                        <ul>
                            <?php foreach($items as $item => $year): ?>
<li><?php echo $item ?><span class="label label-primary pull-right"><?php echo ($nowYear-$year) ?> years</span></li>
                            <?php endforeach ?>

                        </ul>
                    <?php endforeach ?>

                    </div>
                </div>
            </article>
        </section>

        <section class="row break-page" id="experience">
            <aside class="col-lg-3">
                <h2>Experience</h2>
                <h5>where I’ve worked</h5>
            </aside>
            <article class="col-lg-9">
                <div class="row-fluid">
                    <div class="col-lg-3"><div class="date">2006-2014</div></div>
                    <div class="col-lg-9">
                        <h3><a>Freelancer</a> : Software Engineer</h3>
                        <ul class="responsibility">
                            <li>
                                Application architecture
                            </li>
                            <li>
                                Web design
                            </li>
                            <li>
                                Software development (Web,Linux,Windows\Windows Phone 8)
                            </li>
                            <li>
                                Open-source contributing
                            </li>
                            <li>
                                Design database architecture
                            </li>
                            <li>
                                Unit test code covering
                            </li>
                            <li>
                                Continuous integration
                            </li>
                            <li>
                                Linux server administration
                            </li>
                            <li>
                                Consulting
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-lg-3"><div class="date">2013-2014</div></div>
                    <div class="col-lg-9">
                        <h3><a href="http://effective-soft.com">Effective Soft</a> : Software Engineer</h3>
                        <ul class="responsibility">
                            <li>
                                Team lead
                            </li>
                            <li>
                                Application architecture
                            </li>
                            <li>
                                Software development
                            </li>
                            <li>
                                Design database architecture
                            </li>
                            <li>
                                Unit test code covering
                            </li>
                            <li>
                                Continuous integration
                            </li>
                            <li>
                                Linux server administration
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-lg-3"><div class="date">2012-2013</div></div>
                    <div class="col-lg-9">
                        <h3><a href="http://effective-soft.com">Effective Soft</a> : Software Engineer</h3>
                        <ul class="responsibility">
                            <li>
                                Team lead
                            </li>
                            <li>
                                Software development
                            </li>
                            <li>
                                Design database architecture
                            </li>
                            <li>
                                Unit test code covering
                            </li>
                            <li>
                                Continuous integration
                            </li>
                            <li>
                                Linux server administration
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="col-lg-3"><div class="date">2011</div></div>
                    <div class="col-lg-9">
                        <h3><a href="http://antalika.com">Antalika</a> : Software Engineer</h3>
                        <ul class="responsibility">
                            <li>
                                Software development
                            </li>
                            <li>
                                Design database architecture
                            </li>
                            <li>
                                Unit test code covering
                            </li>
                            <li>
                                Continuous integration
                            </li>
                            <li>
                                Linux server administration
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>

        <section class="row break-page" id="certificates">
            <aside class="col-lg-3">
                <h2>Certificates</h2>
                <h5>The documents or seals <br/>certifying the authenticity<br/>of my skills</h5>
            </aside>
            <article class="col-lg-9">
                <div class="col-xs-6 col-sm-3">
                    <a href="http://www.zend.com/en/yellow-pages#show-ClientCandidateID=ZEND022406" class="thumbnail">
                        <img src="img/zce-php5-3-logo.gif">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <a href="certificates/HTML5_Game_Development.pdf" class="thumbnail">
                        <img src="img/udacity.png"><br>
                        HTML5 Game Development (8/1/13)
                    </a>
                </div>
            </article>
        </section>

        <section class="row break-page" id="portfolio">
            <aside class="col-lg-3">
                <h2>Portfolio</h2>
                <h5>My works</h5>
            </aside>
            <article class="col-lg-9">
                <div class="col-sm-6 col-md-4">
                    <a href="http://fcs.adform.com/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/fcs-adform-thmb.png">
                        Adform Flash to HTML5 system
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://vbb.adform.com/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/vbb-adform-thmb.png">
                        Adform Video Banner Builder
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="https://chrome.google.com/webstore/detail/owa-notifier/hldldpjjjagjfikfknadmnnmpbbhgihg" class="thumbnail">
                        <img src="img/portfolio/owa-thmb.png">
                        OWA Notifier
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://aton.ru/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/aton-thmb.png">
                        Aton.ru
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="https://www.quidcycle.com/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/quidcycle-thmb.png">
                        Quidcycle.com
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://keepit.com/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/keepit-thmb.png">
                        Keepit.com
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://www.youwell.ru/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/youwell-thmb.png">
                        YouWell.ru
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://yakupon.ru" class="thumbnail">
                        <img src="img/portfolio/yakupon-thmb.png">
                        Yakupon.RU
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://yami.ua" class="thumbnail">
                        <img src="img/portfolio/yami-thmb.png">
                        Yami.UA
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://qpon.ru" class="thumbnail" target="_blank">
                        <img src="img/portfolio/qpon-thmb.png">
                        Qpon.RU
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://freshsale.com.ua/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/fresh-sale-thmb.png">
                        Freshsale.com.ua
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="http://samkupon.ru/" class="thumbnail" target="_blank">
                        <img src="img/portfolio/samkupon-thmb.png">
                        Samkupon.ru
                    </a>
                </div>
            </article>
        </section>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/webfont/1.5.2/webfont.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42435799-1', '3axap4ehko.github.io');
    ga('send', 'pageview');

</script>
</body>
</html>
<?php file_put_contents(__DIR__ . '/index.html', ob_get_contents());