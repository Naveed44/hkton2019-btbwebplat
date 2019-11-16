@extends('Layouts.app')

@section('content')
            <div class="ibox m-b-n">
                <div class="ibox-content">
                    <div class="">
                        <span>Sociedad Cooperativa:</span><span class="pull-right">Unión Campesina SC</span>
                    </div>
                    <div class="">
                        <span>Propuesta por Unidad:</span><span
                            class="pull-right">$1,250.00</span>
                    </div>
                    <div class="">
                        <span>Cantidad acordada:</span><span
                            class="pull-right">2 Tonelada(s)</span>
                    </div>
                    <div class="m-t-sm m-b-sm" style="border-top: 1px solid black">
                        <span>Total propuesta:</span><span
                            class="pull-right">$2,500.00</span>
                    </div>
                    <a href="CONTRATO.pdf">
                        <button type='button' class='btn btn-primary' style="margin-right: 16px">
                            <i class='fa fa-save m-r-sm'></i>Descargar Contrato
                        </button></a>
                    <button type='button' class='btn btn-info' style="margin-right: 16px"
                            onclick='payContract(this)'>
                        <i class='fa fa-save m-r-sm '></i>Pagar
                    </button>
                </div>
            </div>
            <div class="ibox m-b-n">
                <div class="ibox-content">
                    <div class="">
                        <span>Sociedad Cooperativa:</span><span class="pull-right">Sociedad de Cooperación San Miguel</span>
                    </div>
                    <div class="">
                        <span>Propuesta por Unidad:</span><span
                            class="pull-right">$5,000.00</span>
                    </div>
                    <div class="">
                        <span>Cantidad acordada:</span><span
                            class="pull-right">1 Tonelada(s)</span>
                    </div>
                    <div class="m-t-sm m-b-sm" style="border-top: 1px solid black">
                        <span>Total propuesta:</span><span
                            class="pull-right">$5,000.00</span>
                    </div>

                    <a href="CONTRATO.pdf">
                    <button type='button' class='btn btn-primary' style="margin-right: 16px">
                        <i class='fa fa-save m-r-sm'></i>Descargar Contrato
                    </button></a>
                    <button type='button' class='btn btn-info' style="margin-right: 16px"
                            onclick='payContract(this)'>
                        <i class='fa fa-save m-r-sm'></i>Pagar
                    </button>
                </div>
            </div>
    <script>
        function downloadContract() {
            $.AjaxDownloader({
                url: '{{route('contracts.contract')}}',
                data: {
                    _token: '{{ csrf_token() }}',
                }
            });
        }
    </script>
@endsection
