$("#services").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var typer = new TypeIt('.goal', {
    speed: 25,
    autoStart: true
})
    .type('Bridge skills gap in the Info-Security Industry')
    .break()
    .type('by providing training and mentorship for both')
    .break()
    .type('technical experts and organisations in Tanzania.')
    .pause(2000)
    .options({speed: 700})
    .delete()
    .options({speed: 50})
    .type('Providing affordable technical assistance and...')
    .break()
    .type('consulting services to Tanzania’s organizations')
    .break()
    .type('protecting inforrmation against cyber attackers')
    .pause(2000)
    .options({speed: 700})
    .delete()
    .options({speed: 25})
    .type('Providing security tools, commercial & custom built')
    .break()
    .type('required in protecting information infrastructure');

var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#header",
    triggerHook: "onLeave",
    offset: 0
})
    .setPin("#header")
    .addTo(controller);

