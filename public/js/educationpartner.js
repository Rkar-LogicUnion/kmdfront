new Swiper(".swiper-container", {
    loop: true,
    autoplay: {
        delay: 2000
    },
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 30,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true
    }
});

document.addEventListener("DOMContentLoaded", () => {
    var modal = document.getElementById("youtube-model");
    var ytplayBtn = document.getElementById("ytplayBtn");
    ytplayBtn.onclick = function() {
        modal.style.display = "flex";
    };
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // };
});
