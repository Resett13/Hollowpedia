<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}">

</head>
<body>

    
    <!-- Vídeo de fundo -->
    <video autoplay muted loop id="bg-video">
        <source src="{{ asset('images/giphy.mp4') }}" type="video/mp4">
        Seu navegador não suporta vídeos em HTML5.
    </video>

    <!-- Áudio de fundo -->
    <audio id="bg-audio" loop>
        <source src="{{ asset('images/WhatsApp Audio 2025-02-23 at 21.16.15.mp3') }}" type="audio/mpeg">
        Seu navegador não suporta áudio em HTML5.
    </audio>

    <script>// Inicializa o áudio
let audio = document.getElementById("bg-audio");
let maxVolume = 1.0;
let fadeTime = 3000; // Tempo de fade-in em milissegundos

// Define o volume inicial como 0.0
audio.volume = 0.0;

// Reproduz o áudio com fade-in
audio.play().then(() => {
    let step = maxVolume / (fadeTime / 100);
    let fadeIn = setInterval(() => {
        if (audio.volume < maxVolume) {
            audio.volume = Math.min(audio.volume + step, maxVolume);
        } else {
            clearInterval(fadeIn);
        }
    }, 100);
}).catch(error => {
    console.log("Erro ao iniciar o áudio:", error);
});
</script>
          
</body>
</html>
