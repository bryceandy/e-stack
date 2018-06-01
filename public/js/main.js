$("#services").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var typer = new TypeIt('.goal', {
    speed: 150,
    autoStart: true,
    lifeLike: true
})
    .type('Bridge skills gap in the Info-Security Industry')
    .break()
    .type('by providing training and mentorship for both')
    .break()
    .type('technical experts and organisations in Tanzania.')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 150})
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
    .options({speed: 150})
    .type('Providing security tools, commercial & custom built')
    .break()
    .type('required in protecting information infrastructures.');

var typer2 = new TypeIt('#wwd1', {
    speed: 120,
    autoStart: true,
    lifeLike: true
})
    .type('Information Security Trainging')
    .options({speed: 200})
    .delete(4)
    .options({speed: 150})
    .type('ing');

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
    .setTween(TweenMax.to(window, 1, {scrollTo:{y: "#eservices", autoKill: false}}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#companyBrief"
})
    .setTween(TweenMax.to("#companyBrief", 0.5, {autoAlpha: 0, y: 300}))
    .addTo(controller);

