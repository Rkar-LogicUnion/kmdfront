let imgData = [
    {
        title: "One Stop for All IT Needs",
        description:
            "KMD Group of Companies has been successfully delivering solutions for all technology needs of Industries. With the experience of 30+ years, KMD has established itself as one-stop provider for all IT needs in Myanmar. KMD was started as a training institute and now KMD holds strong presence in IT and Mobile Retail and Distribution",
        link: "https:www.google.com",
        image: "images/03.jpg"
    },
    {
        title: "Ronald Aung Moe Shwe (CEO, KMD)",
        description:
            "At KMD, we are committed to delivering quality and purposeful solutions to different evolving IT needs in our country. We have partnered  with world-class OEM to bring best quality IT products to our customers",
        link: "https:www.google.com",
        image: "images/02.jpg"
    },
    {
        title: "About KMD",
        description:
            "KMD was founded in 1986 as a Training Institute. Now it holds presence in complete Technology paradigm of country with 900+ workforce.",
        link: "https:www.google.com",
        image: "images/21.jpg"
    }
];
let imgIndex = 1;
setInterval(() => {
    imgIndex = ++imgIndex >= imgData.length ? 0 : imgIndex;
    gsap.to(".slide-stagger", {
        y: 250,
        opacity: 0,
        duration: 1.5,
        stagger: 0.2,
        onComplete: () => {
            document.querySelector("#slide-title").innerHTML =
                imgData[imgIndex]["title"];
            document.querySelector("#slide-description").innerHTML =
                imgData[imgIndex]["description"];
            document.querySelector("#slide-link").href =
                imgData[imgIndex]["link"];
            gsap.to(".slide-stagger", {
                y: 0,
                opacity: 1,
                duration: 1.5,
                stagger: 0.3
            });
        }
    });
    gsap.to(".slide-stagger2", {
        x: 500,
        opacity: 0,
        duration: 2,
        onComplete: () => {
            let slideImages = document.getElementsByClassName("slide-img");

            for (const element of slideImages) {
                element.src = imgData[imgIndex]["image"];
            }
            gsap.to(".slide-stagger2", {
                x: 0,
                opacity: 1,
                duration: 3
            });
        }
    });
    bgChange();
}, 10000);

var blurElement = { a: 5 };

function bgChange() {
    gsap.to(blurElement, 2, {
        a: 40,
        onUpdate: applyBlur,
        onComplete: changeResetBlur
    });
}

function changeResetBlur() {
    gsap.to(blurElement, 2, { a: 5, onUpdate: applyBlur });
}
function applyBlur() {
    gsap.set([".slide-stagger3"], {
        webkitFilter: "blur(" + blurElement.a + "px)",
        filter: "blur(" + blurElement.a + "px)"
    });
}
