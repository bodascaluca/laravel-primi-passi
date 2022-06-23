<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home')}}">Home</a>
            </li>
            <li>
               <a href="{{ route('about')}}">Chi siamo</a> 
            </li>
            <li>
                <a href="{{ route('camere')}}">Camere</a> 
             </li>
        </ul>
    </header>
    
    <h1>Ciao benvenuto al mondo</h1>
    <h2>Potrai sceglese diverse dimore. Una all'inzio e una a seconda asseconda di come ti comporterai </h2>
    <p>Tutto è stato creato per poterti farti vivere, non per forzare vivere bne . Comportati bene e scegli ciò che è giusto........</p>
    
    
    <ul>
        @if(count($stanze) > 0)
    
        @foreach($stanze as $stanza)
        <li> <b class="red"> {{ $stanza['name']}} </b> </li>
        <li>Possiamo ospitare {{ $stanza['ospiti']}} persone</li>
        <li>Abbiamo{{ $stanza['camere']}}</li>
        <li>Abbiamo{{ $stanza['bagni']}}</li>
        <li>
                @if($terrazzo)
                <p>L'aloggio comprende anche un ampio terrazzo</p>  
                @else
                <p>Mi spiace niente terazzo, suda un nano in stanza grazie</p>
                @endif
        </li>
        @endforeach
        @else
        <p>la lsita è vuota</p>
        @endif
    </ul>
</body>
</html>


