// endpoints
const download_endpoint = server_endpoint + "/download/";
const get_info_endpoint = server_endpoint + "/getInfo/";
//
const submit_btn = document.getElementById("submit-btn");
const url_text_input = document.getElementById("url-text-input");
const get_info_ring = document.getElementById("get-info-ring");
const convert_btn = document.getElementById("convert-btn");
const download_btn = document.getElementById("download-btn");
const thumbnail_img = document.getElementById("thumbnail_img");
const download_container = document.getElementById("download-container");
const url_error_box = document.getElementById("url-error-box");
const song_cut_time_error_box = document.getElementById("song-cut-time-error-box");
const EMPTY_URL_ERROR = "Preencha o campo com a URL do Vídeo!";
let songInfo = null;

window.onload = () => {
    var form = document.querySelector("form");
    form.addEventListener("submit", getSongInfo, false);
    updateStats()
};
async function getSongInfo(e) {
    e.preventDefault();

    if (url_text_input.value == "") {
        url_error_box.innerHTML = EMPTY_URL_ERROR;
        url_error_box.style.display = "inline-block";
        return;
    } else {
        url_error_box.style.display = "none";
    }

    const full_url = get_info_endpoint + "?" + new URLSearchParams({ url: url_text_input.value });

    get_info_ring.style.display = "block";
    clearData();

    let res = await fetch(full_url);
    let data = await res.json();
    songInfo = data;

    if (data.error != "") {
        url_text_input.value = "";
        url_error_box.innerHTML = data.error;
        url_error_box.style.display = "none";
        get_info_ring.style.display = "none";
        return;
    }
    get_info_ring.style.display = "none";
    submit_btn.disabled = false;
    //Artista
    artist.innerHTML = data.artist; 
}
async function convertSong() {
    songInfo["artist"] = artist.textContent;
}
function clearData() {
    download_btn.style.display = "none";
    download_btn.href = "";
    
}