document.addEventListener("DOMContentLoaded", () => {
    let tmImages = document.getElementsByClassName("testimonial-img");
    let movePosition = 0;
    for (const imImg of tmImages) {
        imImg.style.backgroundPosition = movePosition + "%";
        movePosition += 11;
    }

    gsap.to(".testimonial-img", {
        x: -10,
        scale: 0.85,
        duration: 1.9,
        stagger: 0.15,
        yoyo: true,
        repeat: -1,
        repeatDelay: 2
    });
});
