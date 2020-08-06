document.addEventListener("DOMContentLoaded", () => {
    // var modal = document.getElementById("youtube-model");
    // var ytplayBtn = document.getElementById("ytplayBtn");
    // ytplayBtn.onclick = function() {
    //     modal.style.display = "flex";
    // };
    new Vue({
        el: "#photoBox",
        data: {
            showM: false,
            imgSrc: ""
        },
        methods: {
            showModal(src) {
                this.imgSrc = src;
                this.showM = true;
            }
        }
    });
});
