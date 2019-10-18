@component('mail::message')

<div class="container">
        <div class="row">
            <div class="col">
                <b>Nombre:</b> {{$c->nombre}}
            </div>
            <div class="col">
                <b>Telefono:</b> {{$c->telefono}}
            </div>
            <div class="col">
                <b>Email:</b> {{$c->email}}
            </div>
            <div class="col">
                <b>Tema:</b> {{$c->tema}}
            </div>
            <div class="col">
                <b>Mensaje:</b> {{$c->mensaje}}
            </div>
        </div>
</div>
<br>
<br>
<br>
<div class="container-fluid">
    <div class="col">
        <h2>Historial de consultas de la misma persona</h2>
    </div>
    <table id="customers" class="table table-striped table-responsive">
        <thead class="thead-dark">
            <tr>
                <th>Fecha</th>
                <th>Telefono</th>
                <th>Tema</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        @forelse ($historial as $historia)
        <tbody>   
            <tr>
                <td>{{$historia->created_at}}</td>
                <td>{{$historia->telefono}}</td>
                <td>{{$historia->tema}}</td>
                <td>{{$historia->mensaje}}</td>
            </tr>
        </tbody> 
        @empty
            <p>No hay más información sobre ésta persona</p>
        @endforelse
    </table>
</div>


      


Gracias,<br>
{{ config('app.name') }}
@endcomponent
