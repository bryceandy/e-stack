
function openMenu(){
    $("#links, #pmenu").toggleClass("slide");
}

$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var typer = new TypeIt('.goal', {
    speed: 65,
    autoStart: true
})
    .type('Bridging skills gap in the info-security industry')
    .break()
    .type('by our training and mentorship for both technical')
    .break()
    .type('experts and organisations in Tanzania.')
    .pause(5000)
    .options({speed: 1})
    .delete()
    .options({speed: 65})
    .type('Providing affordable technical assistance &')
    .break()
    .type('consulting services to Tanzania’s organizations')
    .break()
    .type('protecting information against cyber attackers.')
    .pause(5000)
    .options({speed: 1})
    .delete()
    .options({speed: 65})
    .type('Providing security tools, commercial & custom built')
    .break()
    .type('required in protecting information infrastructures.');

var typer2 = new TypeIt('#wwd1', {
    speed: 120,
    autoStart: false
})
    .type('Information Security Training');

var typer3 = new TypeIt('#wwd2', {
    speed: 250,
    autoStart: false
})
    .type('Consultancy');

var typer4 = new TypeIt('#wwd3', {
    speed: 220,
    autoStart: false,
    lifeLike: true
})
    .type('Managed Security');

var typer5 = new TypeIt('#aboutPeople', {
    speed: 250,
    autoStart: false
})
    .type('Our team includes...');

var typer6 = new TypeIt('#contactTitle', {
    speed: 250,
    autoStart: false
})
    .type('Feel Free To Get In Touch');

var hlf = window.innerHeight * .4;
var hlf2 = (window.innerHeight * .4) - 30;

var stagg = new TimelineMax();
stagg.staggerFrom(".ppl1", 0.5, {autoAlpha: 0, x: -100, ease:Back.easeOut})
    .staggerFrom(".ppl2", 1, {autoAlpha: 0, x: 200, ease:Back.easeOut})
    .staggerFrom(".ppl3", 1.5, {autoAlpha: 0, x: -300, ease:Back.easeOut})
    .staggerFrom(".ppl4", 2, {autoAlpha: 0, x: 400, ease:Back.easeOut})
    .staggerFrom(".ppl5", 2.5, {autoAlpha: 0, x: -500, ease:Back.easeOut});

var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#header",
    triggerHook: "onLeave",
    offset: 0
})
    .setPin("#header")
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#content",
    triggerHook: "onLeave"
})
    .setTween(TweenMax.to(window, 1, {scrollTo: "#eservices"}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd1",
    triggerHook: "#servicesTitle",
    offset: hlf
})
    .setTween(TweenMax.to("#wwd1", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "training1", colorStart: "red"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd1Details",
    triggerHook: "#servicesTitle",
    offset: hlf2
})
    .setTween(TweenMax.to("#wwd1Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "training2", colorStart: "red"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#eservices",
    triggerHook: "onLeave", duration: window.innerHeight * 2
})
    .setPin("#servicesTitle")
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#eservices",
    triggerHook: "onLeave", duration: window.innerHeight * 2
})
    .setPin("#companyBrief")
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd2",
    triggerHook: "#servicesTitle",
    offset: hlf
})
    .setTween(TweenMax.to("#wwd2", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "consul1", colorStart: "yellow"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd2Details",
    triggerHook: "#servicesTitle",
    offset: hlf2
})
    .setTween(TweenMax.to("#wwd2Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "consul2", colorStart: "yellow"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd3",
    triggerHook: "#servicesTitle",
    offset: hlf
})
    .setTween(TweenMax.to("#wwd3", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "manage1", colorStart: "green"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd3Details",
    triggerHook: "#servicesTitle",
    offset: hlf2
})
    .setTween(TweenMax.to("#wwd3Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    /*.addIndicators({name: "manage2", colorStart: "green"})*/
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#aboutBrief",
    triggerHook: "onEnter"
})
    .setTween(TweenMax.from("#aboutBrief", 0.5, {autoAlpha: 0, y: 400, ease: Power1.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#aboutList",
    triggerHook: "onEnter",
    offset: 50
})
    .setTween(stagg)
    .addTo(controller);



