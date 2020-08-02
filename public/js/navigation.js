document.addEventListener("DOMContentLoaded", () => {
    var navTime = gsap.timeline();
    navTime.to("#nav-bar", {
        scrollTrigger: {
            trigger: "#nav-check",
            start: "500px center",
            end: "bottom top",
            // markers: true,
            scrub: true,
            toggleActions: "restart none reverse none"
        },
        backgroundColor: "#21409A",
        duration: 1
    });
    gsap.from(".nav-logo", {
        scrollTrigger: {
            trigger: "#nav-check",
            start: "500px center",
            end: "bottom top",
            // markers: true,
            scrub: true,
            toggleActions: "restart none reverse none"
        },
        y: -200,
        duration: 1
    });

    var parentMenus = document.getElementsByClassName("parent-menu");

    for (let pmenu of parentMenus) {
        pmenu.onclick = function() {
            hideAllMenu();
            var cmenu = pmenu.querySelector(".child-menu");
            cmenu.style.display = "block";
        };
    }

    var mmi = document.getElementById("mobile-menu-icon");
    var mmbox = document.getElementById("mobile-menu-box");
    var mcon = true;
    mmi.onclick = function() {
        this.innerHTML = mcon
            ? '<i class="fas fa-times"></i>'
            : '<i class="fas fa-bars"></i>';
        if (mcon) {
            mmbox.style.display = "block";
        } else {
            mmbox.style.display = "none";
        }
        mcon = !mcon;
    };

    var modal = document.getElementById("youtube-model");
    window.onclick = function(event) {
        if (!event.target.matches(".parent-menu")) {
            hideAllMenu();
        }
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
    function hideAllMenu() {
        let menus = document.getElementsByClassName("child-menu");
        for (const menu of menus) {
            menu.style.display = "none";
        }
    }
});
