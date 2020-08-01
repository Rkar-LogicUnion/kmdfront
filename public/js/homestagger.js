document.addEventListener("DOMContentLoaded", () => {
    staggerAnim();
    function staggerAnim() {
        for (let i = 1; i <= 5; i++) {
            gsap.from(".staggerBox-" + i, {
                scrollTrigger: {
                    trigger: ".staggerBox-" + i,
                    toggleActions: "restart pause resume pause"
                },
                stagger: {
                    each: 0.3
                },
                ease: "none",
                opacity: 0,
                x: 20
            });
        }
    }
});
