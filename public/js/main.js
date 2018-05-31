$("#services").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

$("#introButton").click(function(){
    TweenMax.to(window, 1.5, {scrollTo:"#eservices"});
});

var controller = new ScrollMagic.Controller();

new ScrollMagic.Scene({
    triggerElement: "#companyTitle",
    triggerHook: "onLeave",
    offset: window.innerHeight * -0.145
})
    .setTween(TweenMax.to("#companyTitle", 0.2, {autoAlpha: 0}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#introText",
    triggerHook: "onLeave",
    offset: window.innerHeight * -0.145
})
    .setTween(TweenMax.to("#introText", 0.2, {autoAlpha: 0}))
    .addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#introButton",
    triggerHook: "onLeave",
    offset: window.innerHeight * -0.145
})
    .setTween(TweenMax.to("#introButton", 0.2, {autoAlpha: 0}))
    .addTo(controller);