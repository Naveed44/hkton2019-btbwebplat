@extends('Layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-content product-box">
                    @for($i=0;$i<$length;$i++)
                        <div class="product-imitation">
                            [ Imagen shida ]
                        </div>
                        <div class="product-desc">
                                <span class="product-price">

                                </span>
                            <small class="text-muted"></small>
                            <a href="#" class="product-name"> {!!$products[$i]['Namentprd']!!}</a>



                            <div class="small m-t-xs">
                                {!!$products[$i]['Dscentprd']!!}
                            </div>
                            <div class="m-t text-righ">

                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
@endsection
