@extends('layouts.app')

@section('template_title')
    Historiale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Historiale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('historiales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        <th>No</th>
                                        
										<th>Cantidad</th>
										<th>Id Bodega Origen</th>
										<th>Id Bodega Destino</th>
										<th>Created By</th>
										<th>Updated By</th>
										<th>Id Inventario</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($historiales as $historiale)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $historiale->cantidad }}</td>
											<td>{{ $historiale->id_bodega_origen }}</td>
											<td>{{ $historiale->id_bodega_destino }}</td>
											<td>{{ $historiale->created_by }}</td>
											<td>{{ $historiale->updated_by }}</td>
											<td>{{ $historiale->id_inventario }}</td>

                                            <td>
                                                <form action="{{ route('historiales.destroy',$historiale->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('historiales.show',$historiale->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('historiales.edit',$historiale->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $historiales->links() !!}
            </div>
        </div>
    </div>
@endsection
