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
        <li>{{ $student['name']}} {{ $student['lastname']}}</li>
    @endforeach
</ul>

<ul>
    @for ($i = 0; $i < 10; $i++)
        <li> {{ $i }} </li>
    @endfor
</ul>

