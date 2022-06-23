<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
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
                <a href="{{ route('camere')}}">camere</a> 
             </li>
        </ul>
    </header>  
</body>
</html>



<h1>ciao sono {{ $name }} {{ $lastname}}, una pagina home</h1>
{{-- 
Se l'utente è loggato, scrivo "sei loggato" altrimenti scrivo login --}}

@if($isLogginIn)
    <p>Sei loggato</p>
@else
    <p>Fai login</p>
@endif

{{-- b:i
@if ()
    
@endif --}}

{{-- Stampo la lista degli studenti--}}
<ul>
    @foreach ($students as $student)
        <li>
            {{ $student['name']}} {{ $student['lastname']}}
            {{-- Aggiungo solo se è il proimo eleemneto  --}}
            @if ($loop->first)
                ->first eleemneto
            @endif
        </li>
    @endforeach
</ul>


{{-- Stampo la lista degli studenti se gli studenti ci sono--}}
{{-- altrimenti scrivo "Lista pè vuota" --}}
<ul>
    @if (count($students) > 0)
        
   
    @foreach ($students as $student)
        <li>
            {{ $student['name']}} {{ $student['lastname']}}
            {{-- Aggiungo solo se è il proimo eleemneto  --}}
            @if ($loop->first)
                ->first eleemneto
            @endif
        </li>
    @endforeach
    @else 
    <p>La lista è vuota</p>
    @endif
</ul>

<ul>
    @forelse ($students as $student)
        <li>
            {{ $student['name']}} {{ $student['lastname']}}
            {{-- Aggiungo solo se è il proimo eleemneto  --}}
            @if ($loop->first)
                ->first eleemneto
            @endif
        </li>
        @empty
            <p>la lista è vuota</p>
      
    @endforelse
</ul>

<ul>
    @for ($i = 0; $i < 10; $i++)
        <li> {{ $i }} </li>
    @endfor
</ul>

