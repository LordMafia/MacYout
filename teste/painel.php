
<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/principal.css">
    <link rel="icon" href="img/favicon.ico">
    <script src="./relogio/script.js"></script>
    <script type="module" src="./script.js"></script>
    <script src="am.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Principal</title>
</head>
<body>
    <header>
<nav>
    <div class="nav_container">
   
        <img id="logo" src="img/logo.jpeg" alt="Bluet">
        <ul>
        <li><a href="#">Projetos</a></li>
        <li><a href="#">Display</a></li>
        <li><a onclick="som('som-btn')" href="#">Som</a></li>
        <li><p><a href="logout.php">Sair</a></p></li>
    </ul>
    </div>
    <div class="wrapper">
        <div class="display">
            <div id="time">12:00:00 PM</div>
       
</div>
</nav>
<div id="main_banner">
    
    <div id="search_form">
    <h1 class="titulo">Site MacServer</h1>
        <p class="paragrafo"><?php echo $_SESSION['nome']; ?></p>
        <div><p class="error-box" id="url-error-box">
             O URL que você forneceu está incorreto!
            </p></div><div></div><div></div><div></div>
            
        <form method="GET" class="convert-form">
            <input type="text" name="url" id="url-text-input" placeholder="Cole a URL do Youtube..">
            <select class="custom-select" name="bitrate-select" id="bitrate-select">
                <optgroup label="mp3">
                    <option value="64k">mp3 64kbps</option>
                    <option value="128k">mp3 128kbps</option>
                    <option value="192k">mp3 192kbps</option>
                    <option value="256k">mp3 256kbps</option>
                    <option value="320k">mp3 320kbps</option>
                </optgroup>
            </select>
             <input type="submit" id="submit-btn" name="submit" value="buscar">
        </form>
        
    
</div>
</div>
</div>
 <!--<p class="bemvindo">Bem Vindo ao Painel,</p>-->

    </header>
    <div class="main-container">
    <div id="url-form-container">
        </div>
        <div class="loading-ring" id="get-info-ring"><div></div><div></div><div></div><div></div></div>
    
    </div>
    
        <div id="download-container">
       <!-- <div id="img-container">-->
        <div id="download-info-container">
        <img id="thumbnail_img" src="" alt="" width="300" >
                <ul class="song-info-list">
                <div id="song-title"></div>
                    <div id="artist"></div>
                    <li id="song-duration">04:20</li>
                    
                </ul>
                <div class="loading-ring" id="convert-ring"><div></div>
                
                <button class="btn" id="convert-btn">Converter</button>
                
                <a id="download-btn" download href="" target="_blank">
                    <button class="btn">Download</button>
                </a>
            </div>
        <p class="error-box" id="song-cut-time-error-box">
                    Algo deu errado, tente novamente!.
                </p>
                <form class="song-cut-form">
                    <div>
                        
                        <input type="text" name="song-start" id="song-start-input" placeholder="0:00">
                    </div>
                    <div>
                        
                        <input type="text" name="song-end" id="song-end-input" placeholder="0:00">
                    </div>
                </form>
        </div>
        
</div>
        <div class="info-container">
            <div class="card">
                <h3>Propriedades || #Versões // Protótipo Inicial V0.0.2|</h3>
                <ol>
                    <li>V0.0.2|| Objetivo. || MacYout fará requisições com Youtube que será identificado pela URL('https://youtube.com/(watch?v=)!important'), Reconhecendo o ID ||(watch?v=ID).</li>
                    <li>Próximo passo seria determinar os icon's Para || MP3 Or MP4. (nesse teste somente MP3)</li>
                    <li>Para Icon's |MP3 ¨ MP4| Tera uma lista ( ul Or Outra ) ao lado que fornecerá as opções de qualidade.</li>
                    <li>Para Icon |MP3|KB (kbps) Segue as opções de qualidade |64'KB||128'KB||192'KB|256'KB|320'KB|.</li>
                    <li>Para Icon |MP4|P (polegada) Segue as opções de qualidade |360'P|720'P|1080'P|. [EM BREVE]</li>
                    <li>Depois de Finalizado ira aparecer botão "DOWNLOAD"</li>
                    <li>'Download'</li>
                </ol>
            </div>
        </div>
                    </div>
                    </div>
        <script>
function som(sombtn) {
    document.getElementById(sombtn).style.visibility='visible';
}
</script>
        </script>
<script>
        function playAudio() {
            let x = document.getElementById("myAudio");
            x.play();
        }
        function pauseAudio() {
            let x = document.getElementById("myAudio");
            x.pause();
        }       
</script>
<div class="soms">
    <div style="visibility: hidden" id="som-btn" class="som-area">
    <audio id="myAudio">
            <source src="zapp.mp3" type="audio/mpeg">
            Seu navegador não possui suporte ao elemento audio
        </audio><br><br>
        <button class="btn-audio" onclick="playAudio()">Play</button>
        <button class="btn-audio" onclick="pauseAudio()">Pause</button>
</div>
</div>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​
<script>
const button = document.jquerySelector('button')
button.addEventListener('click', function(){
    const audio = document.jquerySelector('audio')
    audio.play()
});
</script>
       
</div>
</main>
</body>
</html>