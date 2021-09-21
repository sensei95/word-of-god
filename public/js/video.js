const video_player = document.getElementById("video_player");
const links = video_player.getElementsByTagName("a");

for (let i = 0; i < links.length; i++) {
    links[i].addEventListener("click", handler);
}

function handler(e) {
    e.preventDefault();
    let video_target = this.getAttribute("href");

    removeActiveClass();
    this.classList.add("active_media");
    this.parentNode.classList.add("active_media");
    video_player.setAttribute("data-current", this.getAttribute("data-id"));
    playVideo(video_target);
    console.log(this.getAttribute("data-id"));
}

function playVideo(target) {
    let filename = target.substr(0, target.lastIndexOf(".")) || target;
    let video = document.querySelector("#video_player video");
    video.removeAttribute("poster");

    let captionTitle = filename.replace("/videos/", "");

    video_player.querySelector("figcaption h2").innerText = captionTitle;

    let source = document.querySelector("#video_player video source");
    source.src = filename + ".mp4";
    video.load();
    video.play();
}

const next_btn = document.getElementById("next_btn");
const prev_btn = document.getElementById("prev_btn");

next_btn.addEventListener("click", (e) => {
    e.preventDefault();

    let current_video = video_player.getAttribute("data-current");
    let next_video = null;

    if (parseInt(current_video) < links.length) {
        next_video = parseInt(current_video) + 1;
        video_player.setAttribute("data-current", next_video);
    } else {
        next_video = 1;
        video_player.setAttribute("data-current", next_video);
    }

    let video_target = document
        .getElementById("video_" + next_video)
        .getAttribute("href");

    removeActiveClass();
    document
        .getElementById("video_" + next_video)
        .parentNode.classList.add("active_media");

    playVideo(video_target);
    // console.log(`current : ${parseInt(current_video)}, next: ${next_video}`);
});

prev_btn.addEventListener("click", (e) => {
    e.preventDefault();

    let current_video = video_player.getAttribute("data-current");
    let next_video = null;

    if (parseInt(current_video) > 1) {
        next_video = parseInt(current_video) - 1;
        video_player.setAttribute("data-current", next_video);
    } else {
        next_video = links.length;
        video_player.setAttribute("data-current", next_video);
    }

    console.log(parseInt(current_video) > 1);

    let video_target = document
        .getElementById("video_" + next_video)
        .getAttribute("href");

    removeActiveClass();
    document
        .getElementById("video_" + next_video)
        .parentNode.classList.add("active_media");

    playVideo(video_target);
    // console.log(`current : ${parseInt(current_video)}, next: ${next_video}`);
});

function removeActiveClass() {
    for (let i = 0; i < links.length; i++) {
        links[i].parentNode.classList.remove("active_media");
    }
}
