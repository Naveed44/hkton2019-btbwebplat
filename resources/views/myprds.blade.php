@extends('Layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="ibox">
                    <div class="ibox-title">
                        <div class="botonera" style="height: 35px;">
                            <h3 style="float:left; position: relative">Mis productos</h3>
                            <a class="btn btn-outline btn-success" style="float: right; position: relative;" href="/newproduct">
                                Añadir un nuevo producto.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <?php $cont = 0; ?>
            @for($i=0;$i<$length;$i++)
                @if($cont<4)
                    <div class="col-md-3">
                        <div class="ibox">
                            <div class="ibox-content product-box">
                                <div class="product-imitation">
                                    [ Imagen de muestra ]
                                </div>
                                <div class="product-desc">
                                    {{--<span class="product-price">

                                    </span>--}}
                                    <small class="text-muted"></small>

                                    <a href="#" class="product-name"> {!!$products[$i]['Namentprd']!!}</a>
                                    [Cantidad: {!!$products[$i]['Qunentprd']!!}]


                                    <div class="small m-t-xs" style="word-wrap: break-word;">
                                        {!!$products[$i]['Dscentprd']!!}
                                    </div>
                                    <div class="m-t text-righ">

                                        <a href="/product/{!!$products[$i]['Idnentprd']!!}" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $cont = $cont+1; ?>
                @else
                    <?php $cont = 0; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="ibox">
                                <div class="ibox-content product-box">
                                    <div class="product-imitation">
                                        [ Imagen de muestra ]
                                    </div>
                                    <div class="product-desc">
                                        {{--<span class="product-price">

                                        </span>--}}
                                        <small class="text-muted"></small>

                                        <a href="#" class="product-name"> {!!$products[$i]['Namentprd']!!}</a>
                                        [Cantidad: {!!$products[$i]['Qunentprd']!!}]


                                        <div class="small m-t-xs" style="word-wrap: break-word;">
                                            {!!$products[$i]['Dscentprd']!!}
                                        </div>
                                        <div class="m-t text-righ">

                                            <a href="/product/{!!$products[$i]['Idnentprd']!!}" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $cont = $cont+1; ?>
                @endif
            @endfor
        </div>
@endsection
