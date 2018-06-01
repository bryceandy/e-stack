
$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var typer = new TypeIt('.goal', {
    speed: 90,
    autoStart: true
})
    .type('Bridging skills gap in the Info-Security Industry')
    .break()
    .type('by providing training and mentorship for both')
    .break()
    .type('technical experts and organisations in Tanzania.')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 90})
    .type('Providing affordable technical assistance and')
    .break()
    .type('consulting services to Tanzania’s organizations')
    .break()
    .type('protecting inforrmati')
    .delete(5)
    .type('mation against cyber attackers.')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 90})
    .type('Providing security tools, commercial & custom built')
    .break()
    .type('required in protecting information infrastructures.');

var typer2 = new TypeIt('#wwd1', {
    speed: 120,
    autoStart: false
})
    .type('Information Security Trainging')
    .options({speed: 300})
    .delete(4)
    .options({speed: 150})
    .type('ing');

var typer3 = new TypeIt('#wwd2', {
    speed: 150,
    autoStart: false
})
    .type('Consulting')
    .options({speed: 300})
    .delete(3)
    .options({speed: 150})
    .type('ant')
    .options({speed: 300})
    .delete(3)
    .options({speed: 200})
    .type('ancy');

var typer4 = new TypeIt('#wwd3', {
    speed: 200,
    autoStart: false,
    lifeLike: true
})
    .type('Managed Security');

var typer5 = new TypeIt('#aboutPeople', {
    speed: 250,
    autoStart: false
})
    .type('Our peeple')
    .delete(4)
    .type('ople include...');

var typer6 = new TypeIt('#contactTitle', {
    speed: 250,
    autoStart: false
})
    .type('Feel Free To Sleep In T')
    .delete(9)
    .type('tay In Touch');

var stagg = new TimelineMax();
stagg.staggerFrom(".ppl1", 0.5, {autoAlpha: 0, x: -300, ease:Elastic.easeIn})
    .staggerFrom(".ppl2", 1, {autoAlpha: 0, x: 300, ease:Elastic.easeIn})
    .staggerFrom(".ppl3", 1.5, {autoAlpha: 0, x: -300, ease:Elastic.easeIn})
    .staggerFrom(".ppl4", 2, {autoAlpha: 0, x: 300, ease:Elastic.easeIn})
    .staggerFrom(".ppl5", 2.5, {autoAlpha: 0, x: -300, ease:Elastic.easeIn});

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
    offset: 90
})
    .setTween(TweenMax.to("#wwd1", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd1Details",
    triggerHook: "#servicesTitle",
    offset: 50
})
    .setTween(TweenMax.to("#wwd1Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
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
    offset: 110
})
    .setTween(TweenMax.to("#wwd2", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd2Details",
    triggerHook: "#servicesTitle",
    offset: 80
})
    .setTween(TweenMax.to("#wwd2Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd3",
    triggerHook: "#servicesTitle",
    offset: 110
})
    .setTween(TweenMax.to("#wwd3", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#wwd3Details",
    triggerHook: "#servicesTitle",
    offset: 80
})
    .setTween(TweenMax.to("#wwd3Details", 0.3, {autoAlpha: 0, x: 300, ease: Back.easeIn}))
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



