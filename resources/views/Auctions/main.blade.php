@extends('Layouts.app')

@section('content')
    <div class="row">
        <?php $n=0;?>
        @if(isset($actauc))
        @foreach($actauc as $auc)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    <img src="https://via.placeholder.com/150" alt="placeholder">
                                </div>
                                <div class="product-desc">
                                    <span class="product-price">
                                        Precio Base: ${{ number_format($auc['Basprcauc'],2) }}
                                    </span>
                                    <small class="text-muted">{{ $auc['Dscentcls'] }}</small>
                                    <a href="/auctions/modal/{{ $auc['Idnentauc'] }}" class="product-name"> {{ $auc['Namentprd'] . " - " . $auc['Qunentprd'] ." - ". $auc['Dscentuni']. "(s)"  }}</a>
                                    <div class="small m-t-xs">
                                        {{ $auc['Dscentprd'] }}
                                    </div>
                                    <small class="text-muted"><i class="fa fa-star m-r-sm"></i>{{ $auc['Dscentqul'] }}</small>
                                    <div class="m-t text-righ">
                                        <a href="/auctions/modal/{{ $auc['Idnentauc'] }}" class="btn btn-xs btn-outline btn-primary">Ver subasta <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @if(++$n%4 == 0)
    </div>
    <div class="row">
            @endif
        @endforeach
        @else
            <div class="ibox">
                <div class="ibox-title">
                    Subastas
                </div>
                <div class="ibox-content">
                    <h2>No hay subastas activas</h2>
                </div>
            </div>
        @endif
    </div>
    <script>

    </script>
@endsection

