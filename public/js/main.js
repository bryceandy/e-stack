$("#services").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var typer = new TypeIt('.goal', {
    speed: 100,
    autoStart: true,
    loop: true,
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
    .options({speed: 100})
    .type('Providing affordable technical assistance and')
    .break()
    .type('consulting services to Tanzania’s organizations')
    .break()
    .type('protecting inforrmati')
    .delete(5)
    .type('tion against cyber attackers.')
    .pause(5000)
    .options({speed: 10})
    .delete()
    .options({speed: 100})
    .type('Providing security tools, commercial & custom built')
    .break()
    .type('required in protecting information infrastructures.');

var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#header",
    triggerHook: "onLeave",
    offset: 0
})
    .setPin("#header")
    .addTo(controller);

