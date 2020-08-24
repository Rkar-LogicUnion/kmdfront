document.addEventListener("DOMContentLoaded", () => {
    const logo = new Vivus(
        "kmd-svg-2",
        { type: "sync", duration: 150 },
        function(obj) {
            obj.el.classList.add("finished");
            var tl = gsap.timeline();
            tl.to("#svg-1", { height: 50, duration: 1 });
            tl.to("#svg-2", { height: 100, duration: 1 });
            tl.to("#svg-3", { height: 50, duration: 1 });
            tl.to("#svg-4", { height: 100, duration: 1 });
            tl.to("#svg-5", { height: 50, duration: 1 });
            tl.to("#svg-6", { height: 100, duration: 1 });
            tl.to("#svg-7", { height: 50, duration: 1 });
            tl.to("#svg-8", { opacity: 1, duration: 1 });
        }
    );
});
