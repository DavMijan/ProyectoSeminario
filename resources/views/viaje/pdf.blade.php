<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Pdf</title>
    <style>
    .cabecera{
        background-color: aquamarine;
        color:black;
    } 
    </style> 
  </head>
  <body>
    <h1 class="text-center">Viajes</h1> <br>
    <table class="table table-striped table-bordered" style='text-align: center;font-size:15px' >
                                    <thead class="cabecera">
                                        <tr> 
                                            <th>Conductor</th>
                                            <th>Vehiculo</th>
                                            <th>Fecha</th>
                                            <th>Hora Salida</th>
                                            <th>Kilometraje Salida</th>
                                            <th>Hora Llegada</th>
                                            <th>Kilometraje Llegada</th>
                                            <th>Departamento</th>
                                            <th>Municipio</th>
                                            <th>Direccion</th>
                                            <th>Codigo Factura</th>
                                            <th>Cantidad Galones</th>
                                            <th>Monto Total</th>
                                            <th>Objetivo Visita</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($viajes as $viaje)
                                            <tr>
                                                <td>
                                                    @if ($viaje->user)
                                                    {{ $viaje->user->nombre }} {{ $viaje->user->apellido }}
                                                    @else
                                                        No hay usuario asociado
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($viaje->vehiculo)
                                                        {{ $viaje->vehiculo->Marca }} {{ $viaje->vehiculo->Modelo }}
                                                    @else
                                                        No hay vehículo asociado
                                                    @endif
                                                </td>
                                                <td>{{ $viaje->fecha }}</td>
                                                <td>{{ $viaje->horasalida }}</td>
                                                <td>{{ $viaje->kilometrajesalida }}</td>
                                                <td>{{ $viaje->horallegada }}</td>
                                                <td>{{ $viaje->kilometrajellegada }}</td>
                                                <td>{{ $viaje->departamento }}</td>
                                                <td>{{ $viaje->municipio }}</td>
                                                <td>{{ $viaje->direccion }}</td>
                                                <td>{{ $viaje->codigoFactura }}</td>
                                                <td>{{ $viaje->cantidadgalones }}</td>
                                                <td>{{ $viaje->montototal }}</td>
                                                <td>{{ $viaje->objetivovisita }}</td>
    
                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
