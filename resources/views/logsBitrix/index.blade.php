@extends('adminlte::page')

@section('title', 'Logs')

@section('content_header')
    <div class="card-header">
        <h5 class="card-title"><strong>Logs Registrados</strong></h5>
    </div>
@stop

@section('content')
    <div class="card-body">
        <div class="row">
            @foreach ($logs as $log)
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            @if (
                                !empty($log->description_payload_pretty) &&
                                    $log->description_payload_pretty !== 'Descrição não disponível ou inválida.')
                                <p style="background: #f8f9fa; padding: 10px; border-radius: 5px; white-space: pre-wrap;">
                                    {{ $log->description_payload_pretty }}
                                </p>
                            @else
                                <p>Descrição não disponível ou inválida.</p>
                            @endif
                            <p><strong>Criação: </strong> {!! $log->created_at !!}</p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
