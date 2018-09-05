<?php

//dd($alumnos);
?>



@foreach ($alumnos as $alumno)

    Nombre: {{ $alumno->nombre }}--{{$alumno->ap }} 
    <img src="{{ Voyager::image( $alumno->foto ) }}" style="width:50px">
   
    
@endforeach