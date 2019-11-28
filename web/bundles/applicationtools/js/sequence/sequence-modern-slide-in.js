$(document).ready(function(){
    var options = {
        nextButton: true,
        prevButton: true,
        pagination: true,
        animateStartingFrameIn: true,
        autoPlay: true,
        autoPlayDelay: 3000,
        preloader: true,
        preloadTheseFrames: [1],
        preloadTheseImages: [
            "../../images/sequence/tn-model1.png",
            "../../images/sequence/tn-model2.png",
            "../../images/sequence/tn-model3.png"
        ]
    };
    
    var mySequence = $("#sequence").sequence(options).data("sequence");
});