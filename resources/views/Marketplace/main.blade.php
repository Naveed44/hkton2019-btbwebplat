@extends('Layouts.app')

@section('content')


    <div class="row">
        <div class="col-md-3">
            @if(!empty($usrprd))
            @foreach($usrprd as $prd)
            <div class="ibox">
                <div class="ibox-content product-box">

                    <div class="product-imitation">
                        <img src="https://via.placeholder.com/150" alt="placeholder">
                    </div>
                    <div class="product-desc">
                                <span class="product-price">}
                                    {{ $prd['qunentprd'] }}
                                </span>
                        <small class="text-muted">Category</small>
                        <a href="#" class="product-name">{{ $prd['namentprd'] }}</a>

                        <div class="small m-t-xs">
                            {{ $prd['dscentprd'] }}
                        </div>
                        <div class="m-t text-righ">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <h2>No hay productos registrados</h2>
            @endif
        </div>
    </div>
@endsection
