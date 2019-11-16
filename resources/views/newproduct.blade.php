@extends('Layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-2">
                <div class="ibox">
                    <div class="ibox-title">
                        <h3>Registrar nuevo producto</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="ibox-content">
                            <form method="POST" id="regnewprd">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre del producto:</label>

                                    <div class="col-md-6">
                                        <input id="prdname" type="text" class="form-control @error('name') is-invalid @enderror" name="prdname" value="" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Descripcion del producto:</label>

                                    <div class="col-md-6">
                                        <textarea id="prddesc" type="text" class="form-control @error('name') is-invalid @enderror" name="prddesc" value="" required autocomplete="name" autofocus></textarea>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Cantidad:</label>

                                    <div class="col-md-6">
                                        <input id="prdcant" type="number" class="form-control @error('name') is-invalid @enderror" name="prdcant" value="" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                           <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Unidad de medida:</label>

                                    <div class="col-md-6">
                                        <select name="entuni" id="units" style="chosen-select">
                                            <option value="1">Kilogramo</option>
                                            <option value="2">Tonelada</option>
                                            <option value="3">Pieza</option>
                                        </select>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Clasificación del producto:</label>

                                    <div class="col-md-6">
                                        <select name="prdcls" id="cls" style="chosen-select">
                                            <option value="8">Leguminosa</option>
                                            <option value="9">Fruta</option>
                                            <option value="10">Legumbre</option>
                                            <option value="11">Fruto</option>
                                            <option value="12">Planta</option>
                                            <option value="13">Verdura</option>
                                        </select>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Calidad del producto:</label>

                                    <div class="col-md-6">
                                        <select name="qual" id="qual" style="chosen-select">
                                            <option value="7">Categoria A</option>
                                            <option value="8">Categoria B</option>
                                            <option value="9">Categoria C</option>
                                        </select>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                @csrf
                            </form>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary" onclick="sendregprdform()">
                                        Registrar producto
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.chosen-select').chosen({width: "100%"});
        });

        function sendregprdform() {
            $('#regnewprd').form('submit', {
                url: '{{ route('regnewprd') }}',
                onSubmit: function () {
                    return $(this).form('validate');
                },
                success: function (result) {
                    var result = eval('(' + result + ')');
                    if(result.success){
                        //alertaSuccess('Correcto', result.message);
                        console.log("!");
                    }else{
                        //alertaError('Error', result.message);
                        console.log("-");
                    }
                }
            });
        }
    </script>
@endsection

@section('scripts')
@endsection
