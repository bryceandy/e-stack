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
    <script src="{{'js/main.js'}}"></script>
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

            <i>eStack</i> was established to respond to the challenges<br />
            in the Information Security Industry in Tanzania, where<br />
            there's lack of adequate skills in protecting organizations<br />
            from potential cyber-attacks.

        </div>

        <div id="servicesTitle">
            What We Do
        </div>

        <div id="wwd1"></div>
        <div id="wwd1Details">
            To ensure organizations are able to appropriately appreciate<br />
            Security risks and are able to protect the organization’s<br />
            information assets,eStack provides world-class and affordable<br />
            Information Security training to tech professionals in Tanzania.
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

<script type="text/javascript">
    $(document).ready(function(){

        $servicestop = parseInt(window.innerHeight * 1.05) ;
        $servicesbottom = parseInt(window.innerHeight * 3.72) ;

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
        });

    });

</script>

<script src="{{'js/main.js'}}"></script>
</body>
</html>
