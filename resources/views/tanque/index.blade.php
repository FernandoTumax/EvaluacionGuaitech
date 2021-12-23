@extends('layouts.app')

@section('title', 'Registro de Tanque')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection
    
@section('content')
    <div class="container">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Registro de Tanque</h5>
                        </div>
                        <div class="col-auto">
                            <a href="{{route('tanques.create')}}" class="btn btn-falcon-default btn-sm">Nuevo Registro del Tanque</a>
                        </div>
                    </div>
                </div>
                <div class="card-body fs--1 border-top">
                    <table id="tanques" class="table table-striped table-bordered shadow-lg mt-1" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">Codigo Unico</th>
                                <th scope="col">Hora</th>
                                <th scope="col">Golpes</th>
                                <th scope="col">NIV PKT03</th>
                                <th scope="col">Control Consistencia</th>
                                <th scope="col">Nivel Cuba</th>
                                <th scope="col">Tanque Agua</th>
                                <th scope="col">Vacio Trans</th>
                                <th scope="col">Presion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registros as $registro)
                                <tr>
                                    <th scope="row">{{$registro->id}}</th>
                                    <td scope="row">{{$registro->Hora}}</td>
                                    <td scope="row">{{$registro->Golpes}}</td>
                                    <td scope="row">{{$registro->NIVPKT03}}</td>
                                    <td scope="row">{{$registro->ControlConsistencia}}</td>
                                    <td scope="row">{{$registro->NivelCuba}}</td>
                                    <td scope="row">{{$registro->TanqueAgua}}</td>
                                    <td scope="row">{{$registro->VacioTrans}}</td>
                                    <td scope="row">{{$registro->Presion}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $registro->id }}">
                                            Eliminar
                                          </button>
                                        <a href="{{route('tanques.edit', $registro)}}" class="btn btn-info btn-sm mx-1">Editar</a>
                                    </td>
                                </tr>
                                
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal{{ $registro->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro de tanque</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('tanques.destroy', $registro)}}" method="POST">
                                                <label>¿Esta seguro de eliminar este registro?</label>
                                                <br><br>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
    @section('js')
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#tanques').DataTable({
                    "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "All"]]
                });
            } );
        </script>
    @endsection
@endsection