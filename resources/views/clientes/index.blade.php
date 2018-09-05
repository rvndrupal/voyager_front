<?php
//dd($clientes);
?>
    @foreach($clientes as $cliente)

        Nombre: {{ $cliente->first_name}}   Apellidos: {{ $cliente->last_name}}


       
    @endforeach


