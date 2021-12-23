@extends('layouts.app')

@section('title', 'Editar Registro')

@section('content')
    <div class="container">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Editar Registro del tanque</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body fs--1 border-top">
                    <form action="{{route('tanques.update', $tanque)}}" method="POST" id="formTanque">
                        <input type="hidden" id="id" value="{{$tanque->id}}">
                        @csrf
                        @method('put')
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Hora:</label>
                                    <input type="time" class="form-control" id="Hora" name="Hora" value="{{old('Hora', $tanque->Hora)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Golpes:</label>
                                    <input type="number" class="form-control" id="Golpes" name="Golpes" value="{{old('Golpes', $tanque->Golpes)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">NIV PKT03:</label>
                                    <input type="number" class="form-control" id="NIVPKT03" name="NIVPKT03" value="{{old('NIVPKT03', $tanque->NIVPKT03)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Control Consistencia:</label>
                                    <input type="number" class="form-control" id="ControlConsistencia" name="ControlConsistencia" value="{{old('ControlConsistencia', $tanque->ControlConsistencia)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nivel Cuba:</label>
                                    <input type="number" class="form-control" id="NivelCuba" name="NivelCuba" value="{{old('NivelCuba', $tanque->NivelCuba)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanque de Agua:</label>
                                    <input type="number" class="form-control" id="TanqueAgua" name="TanqueAgua" value="{{old('TanqueAgua', $tanque->TanqueAgua)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Vacio Trans:</label>
                                    <input type="number" class="form-control" id="VacioTrans" name="VacioTrans" value="{{old('VacioTrans', $tanque->VacioTrans)}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Presion:</label>
                                    <input type="number" class="form-control" id="Presion" name="Presion" value="{{old('Presion', $tanque->Presion)}}">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col" style="text-align: center">
                                <a href="{{route('tanques.index')}}" class="btn btn-secondary">Regresar</a>
                            </div>
                            <div class="col"></div>
                            <div class="col" style="text-align: center">
                                <button type="submit" class="btn btn-success">Actualizar Registro</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection