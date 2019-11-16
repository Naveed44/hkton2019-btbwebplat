@extends('Layouts.app')

@section('content')
    <div class="col-md-12 ibox">
        <div class="ibox-title">
            <h4>Subasta Activa: {{ $auc['Namentprd']  }}</h4>
        </div>
        <div class="ibox-content">
            <div class="row">
                <div class="col-md-4 m-r-n">
                    <div class="product-imitation">
                        <img src="https://via.placeholder.com/150" alt="placeholder">
                    </div>
                    <div class="product-desc">
                        <span class="product-price">
                            Precio Base: ${{ number_format($auc['Basprcauc'],2) }}
                        </span>
                        <small class="text-muted">{{ $auc['Dscentcls'] }}</small>
                        <a href="#"
                           class="product-name"> {{ $auc['Namentprd'] . " - " . $auc['Qunentprd'] ." - ". $auc['Dscentuni']. "(s)"  }}</a>
                        <div class="small m-t-xs">
                            {{ $auc['Dscentprd'] }}
                        </div>
                        <small class="text-muted"><i class="fa fa-star m-r-sm"></i>{{ $auc['Dscentqul'] }}</small>
                        <div class="m-t text-righ">
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="ibox">
                            <div class="ibox-content">
                                <form role='form' id='frmBid' method='POST'>
                                    <div class="form-group">
                                        <label>Propuesta por Unidad:</label>
                                        <input id="Ppuni" id="Ppuni" class="form-control" placeholder="$0.00">
                                    </div>
                                    <div class="form-group">
                                        <label>Cantidad requerida:</label>
                                        <input id="Cantidad" id="Cantidad" class="form-control" placeholder="0.00">
                                    </div>

                                </form>
                                <button type='button' class='btn btn-primary' style="margin-right: 16px"
                                        onclick='saveBid(this)'>
                                    <i class='fa fa-save m-r-sm'></i>Ofertar
                                </button>
                            </div>
                        </div>
                    </div>
                    @if(!empty($aucbid))
                        @foreach($aucbid as $bid)
                            <div class="ibox m-b-n">
                                <div class="ibox-content">
                                    <div class="">
                                        <span>Empresa:</span><span class="pull-right">{{ $bid['Name'] }}</span>
                                    </div>
                                    <div class="">
                                        <span>Propuesta por Unidad:</span><span
                                            class="pull-right">${{ number_format($bid['Prcunibid'], 2) }}</span>
                                    </div>
                                    <div class="">
                                        <span>Cantidad requerida:</span><span
                                            class="pull-right">{{ $bid['Qununibid'] }}</span>
                                    </div>
                                    <div class="m-t-sm" style="border-top: 1px solid black">
                                        <span>Total propuesta:</span><span
                                            class="pull-right">${{number_format(intval($bid['Qununibid'])*intval($bid['Prcunibid']),2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="ibox">
                            <div class="ibox-content">
                                <div class="">
                                    <span>Se el primero en hacer una propuesta</span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function saveBid(e) {
            $.post('{{ route('auctions.bid') }}',
                {
                    _token: '{{ csrf_token() }}',
                    ppuni: $('#Ppuni').val(),
                    quant: $('#Cantidad').val(),
                    auct: '{{ $auc['Idnentauc'] }}'
                }, function(result){
                    var result = eval('(' + result + ')');
                    if (result.success) {
                        window.location.reload(true);
                    } else {
                        toastr.error(result.message, 'Error');
                    }
                });
        }
    </script>
@endsection
