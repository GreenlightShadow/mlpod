function showVideoModal(season, episode, title, description) {
    var src = `https://media.thedoctorteam.ru/videos/season${season}/RusDub/${season}_${episode}.mp4`;
    var modal_wrap = document.getElementById('modal_wrap');
    var video_container = document.getElementById('video_container');
    var video_source = document.getElementById('video_source');
    var video_title = document.getElementById('video_title');
    var video_description = document.getElementById('video_description');

    modal_wrap.style.display = "flex";
    document.body.style.overflow = 'hidden';
    video_container.setAttribute('src', src);
    video_container.setAttribute('poster', `VideoIcons/${season}/${episode}.png`);
    video_title.innerText = title;
    video_description.innerText = description
}

function hideVideoModal() {
        var modal_wrap = document.getElementById('modal_wrap');
        var video_container = document.getElementById('video_container');
        modal_wrap.style.display = "none";
        video_container.setAttribute('src', '');
        document.body.style.overflow = 'auto';
}