<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="_token" content="{{ csrf_token() }}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" />
    <link rel="stylesheet" href="{{'css/hover-min.css'}}" />
    <link rel="stylesheet" href="{{'css/main.css'}}" />

    {{--<link rel="icon" href="/images/">--}}
    <script src="https://cdn.jsdelivr.net/npm/typeit@5.10.1/dist/typeit.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.5/paper-full.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <title>eStack Systems and Security - A leading services, consulting and training firm in Information Security in Tanzania</title>
</head>
<body>

<div id="blank"></div>

<div id="header">
    <span class="moto">World-Class<br />Information Security Providers</span>

    <div id="pmenu">
        <div class="bar1"></div><br />
        <div class="bar2"></div><br />
        <div class="bar3"></div>
    </div>

</div>

<div id="logo">
    <h1><a href="/">eStack</a></h1>
</div>

<div id="links">
    <div id="services">
        <span class="linktitle">SERVICES</span>
    </div>
    <div id="about">
        <span class="linktitle">ABOUT US</span>
    </div>
    <div id="contact">
        <span class="linktitle">CONTACT US</span>
    </div>
</div>

<div id="content">

    <div id="intro">
        <div id="companyTitle">eStack Systems &amp; Security</div>

        <div id="introText">
            <div class="goal"></div>
        </div>

        <button id="introButton"><span class="introbtntxt">DISCOVER MORE</span></button>

    </div>

    <div id="eservices">

        <div id="companyBrief">

            <i>eStack</i> was established to respond to the potential challenges<br />
            in the Information Security Industry in Tanzania, where<br />
            there's lack of adequate skills in protecting many<br />
            organizations from potential cyber-attacks.

        </div>

        <div id="servicesTitle">
            What We Do
        </div>

        <div id="wwd1"></div>
        <div id="wwd1Details">
            For organizations to appreciate security risks and protect their<br />
            information assets, eStack provides world-class &amp; affordable<br />
            info-security training to tech professionals in Tanzania.<br /><br />

            <button onclick="location.href='services/information-security-training'"><span class="trainingbtn">TRAINING</span></button>
        </div>

        <div id="wwd2"></div>
        <div id="wwd2Details">
            With our experience in banking, financial institutions, ISPs &amp;<br />
            government organisations, eStack improves the security of firms in<br />
            Tanzania by providing quality Information Security Consultancy.<br /><br />

            <button onclick="location.href='services/consultancy'"><span class="consultbtn">CONSULTANCY</span></button>
        </div>

        <div id="wwd3"></div>
        <div id="wwd3Details">

            eStack provides Managed Security Services to organizations that do<br />
            not carry out info-security operations. We protect the client’s environment<br />
            while observing confidentiality of the organization’s information.<br /><br />

            <button onclick="location.href='services/managed-security'"><span class="managbtn">MANAGED SECURITY</span></button>
        </div>
    </div>

    <div id="aboutus">

        <img src="/images/Amani-Place.jpg"/>

        <div id="aboutBrief">
            <i>eStack</i> believes in utilizing global experience and expertise in solving<br />
              our customer’s problems. We employ local staff, and partner with<br />
              international top notch Systems &amp; Security specialist to deliver top<br />
              class service to our customers.
        </div>
        <div id="aboutPeople"></div>
        <div id="aboutList">
            <span class="ppl1">Senior Systems Engineers</span><br />
            <span class="ppl2">System Developers</span><br />
            <span class="ppl3">Systems Security Specialists</span><br />
            <span class="ppl4">Senior Network Specialists</span><br />
            <span class="ppl5">Technology Trainers</span>
        </div>
    </div>

    <div id="contactus">

        <div id="contactBody">
            <span class="contactTitle">eStack</span><br />
            <span class="contactTitle">Systems | Security</span><br />
            email: info@estack.co.tz<br />
            phone: 0715 123 338
        </div>

        <svg id="contactSvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 85.7143" preserveAspectRatio="none">
            <path fill="#f4645f" stroke="#f4645f" stroke-width="0" d=" M75,0 C60,63.9 30,70 0,62.14 L0,85.71 L75,85.71 Z "></path>
        </svg>

        <svg id="contactSvg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 95 85.7143" preserveAspectRatio="none">
            <path fill="#f4645f" stroke="#f4645f" stroke-width="0" d=" M95,0 C60,63.9 30,70 0,62.14 L0,85.71 L95,85.71 Z "></path>
        </svg>

        <div id="contactTitle"></div>

    </div>

    <div id="footer">
        <div class="left">
            eStack Systems &amp; Security &copy; 2018
        </div>
        <div class="right">
            Site by <a href="http://www.bryceandy.com">BryceAndy</a>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TimelineMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/plugins/CSSPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/plugins/ScrollToPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script>window.jQuery || document.write('<script src="{{'js/jquery-3.2.1.js'}}">\x3C/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{--menu opening--}}
<script type="text/javascript">
    $(document).ready(function(){

        $("#pmenu").click(function(){

            $("#links, #pmenu").toggleClass("slide");

        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function(){

        $servicestop = parseInt(window.innerHeight * 1.05) ;
        $servicesbottom = parseInt(window.innerHeight * 3.25) ;
        $abouttop = parseInt(window.innerHeight * 3.3) ;
        $aboutbottom = parseInt(window.innerHeight * 4.5) ;
        $contacttop = parseInt(window.innerHeight * 4.6) ;

        $(window).scroll(function () {
                if ($(this).scrollTop() > $servicestop) {
                    $('#header').addClass('changeHeader');
                    $('#services').addClass('changeServices');
                }
                if ($(this).scrollTop() > $servicesbottom) {
                    $('#header').removeClass('changeHeader');
                    $('#services').removeClass('changeServices');
                }
                if ($(this).scrollTop() < $servicestop) {
                    $('#header').removeClass('changeHeader');
                    $('#services').removeClass('changeServices');
                }

                if ($(this).scrollTop() > $abouttop) {
                    $('#about').addClass('changeAbout');
                }
                if ($(this).scrollTop() > $aboutbottom) {
                    $('#about').removeClass('changeAbout');
                }
                if ($(this).scrollTop() < $abouttop) {
                    $('#about').removeClass('changeAbout');
                }

                if ($(this).scrollTop() > $contacttop) {
                    $('#contact').addClass('changeContact');
                    $('#header').addClass('changeHeader');
                }
                if (($(this).scrollTop() < $contacttop) && ($(this).scrollTop() > $servicesbottom)){
                    $('#contact').removeClass('changeContact');
                    $('#header').removeClass('changeHeader');
                }
        });

    });

</script>

<script type="text/javascript">
    $(document).ready(function(){

        $("#services").click(function(){
            $('body, html').animate({
                scrollTop: $("#eservices").offset().top
            }, 1200);

            $("#pmenu, #links").removeClass("slide");
        });

        $("#about").click(function(){
            $('body, html').animate({
                scrollTop: $("#aboutus").offset().top
            }, 1200);

            $("#pmenu, #links").removeClass("slide");
        });

        $("#contact").click(function(){
            $('body, html').animate({
                scrollTop: $("#contactus").offset().top
            }, 1200);

            $("#pmenu, #links").removeClass("slide");
        });

    });
</script>

<script src="{{'js/main.js'}}"></script>
</body>
</html>
