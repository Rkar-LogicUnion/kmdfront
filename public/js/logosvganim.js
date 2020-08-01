document.addEventListener("DOMContentLoaded", () => {
    const logo = new Vivus("kmd-svg", { type: "sync", duration: 100 }, function(
        obj
    ) {
        obj.el.classList.add("finished");
    });
});
