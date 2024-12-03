$(document).ready(function() {
    console.log("TEST IF WORKs")
    const arrayImage = ["airplane.jpeg", "cooking.jpg", "business.jpeg", "aaa.jpg"];
    let variable = 0;
    function fadingAnimation() {
        if (variable >= 4) {
            variable = 0;
        }
        $('#imageTransition').animate({opacity: 0}, "slow");
        setTimeout(()=>{
            console.log(variable)
            $('#imageTransition').attr('src', arrayImage[variable]);
            $('#imageTransition').animate({opacity: 0.3}, "slow");
            console.log("fired");
            console.log(variable)
            variable++
        }, 1000)
    }
    setInterval(fadingAnimation, 5000);
});