<!--<ul class="p-2 z-10  bg-orange-400 text-white">-->
<ul class="p-2 z-10" style="background-color: #555555; color: white;">

    @foreach($procedimientos as $procedimiento)
        <li><a href="{{ route('ver_procedimiento', $procedimiento) }}">{{ $procedimiento->nombre }}</a></li>
    @endforeach
</ul>