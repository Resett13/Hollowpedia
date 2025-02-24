<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Corrigindo o uso do asset() -->
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script src="{{ asset('js/nav.js') }}"></script>
</head>
<body>

<nav>     
    <table>
        </li>
    <ul>
        <li>
            <a href="{{ route('Personagens') }}">
                <span>Personagens</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Inimigos') }}">
                <span>Inimigos</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Historia') }}">
                <span>História</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Itens') }}">
                <span>Itens</span>
            </a>
        </li>

        <li>
            <a href="{{ route('Conquistas') }}">
                <span>Conquistas</span>
            </a>
        </li>
    </ul>
</table>
    <span class="btSom">
    <button id="TocarMusica" onclick="toggleMusic()">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-volume-down" viewBox="0 0 15 15" style="background: none; color:  #565a75 ;">
            <path d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12zM6.312 6.39 8 5.04v5.92L6.312 9.61A.5.5 0 0 0 6 9.5H4v-3h2a.5.5 0 0 0 .312-.11M12.025 8a4.5 4.5 0 0 1-1.318 3.182L10 10.475A3.5 3.5 0 0 0 11.025 8 3.5 3.5 0 0 0 10 5.525l.707-.707A4.5 4.5 0 0 1 12.025 8"/>
        </svg>
    </button>
</span>
</nav>

</body>
</html>
