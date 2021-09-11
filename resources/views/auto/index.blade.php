@extends('layouts.app')

@section('template_title')
    Auto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Autos') }}
                            </span>
                            <form action="">
                            <div width="1px">
                                <div class="input-group"> 
                                <input id="inputbtn" name="idsearch" value="{{ $idsearch }}" type="number" class="form-control" placeholder="Ingresa un ID" min="1" onkeyup="this.value=Numeros(this.value)" onkeypress="showBtn()">
                                <span class="input-group-btn">
                                    <button id="btnOculto" class="btn btn-primary" type="submit" style="border-bottom-left-radius: 0;border-top-left-radius: 0;" onblur="hideBtn()">Buscar</button>
                                </span>
                            </div>
                            </form>

                            <script>
                                function Numeros(string){
                                var out = '';
                                var filtro = '1234567890';
                                for (var i=0; i<string.length; i++)
                                if (filtro.indexOf(string.charAt(i)) != -1) 
                                    out += string.charAt(i);
                                return out;
                                } 
                                var btn = document.getElementById('btnOculto');
                                btn.style.display = 'none';
                                function showBtn() {
                                    var btn = document.getElementById('btnOculto');
                                    btn.style.display = 'inline';
                                }
                                function hideBtn() {
                                    var btn = document.getElementById('btnOculto');
                                    btn.style.display = 'none';
                                }
                            </script>
                            </div>
                            
                             <div class="float-right">
                                <a href="{{ route('autos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar ') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        
										<th>Modelo</th>
										<th>Marca</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($autos as $auto)
                                        <tr>
                                            <td>{{ $auto->id }}</td>
                                            
											<td>{{ $auto->modelo }}</td>
											<td>{{ $auto->marca }}</td>
											<td>${{ $auto->precio }}</td>

                                            <td>
                                                <form action="{{ route('autos.destroy',$auto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('autos.show',$auto->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('autos.edit',$auto->id) }}"><i class="fa fa-fw fa-edit"></i> Ediar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $autos->links() !!}
            </div>
        </div>
    </div>
@endsection
