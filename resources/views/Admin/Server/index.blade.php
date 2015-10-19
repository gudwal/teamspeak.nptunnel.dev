@extends('Admin.Layout.default')
@section('title','Servers')
@section('content')
    <div class="row mt">
        <div class="col-md-12">
            <div class="content-panel">
                <table class="table table-striped table-advance table-hover">
                    <h4><i class="fa fa-angle-right"></i> Servers disponiveis</h4>
                    <hr>
                    <thead>
                    <tr>
                        <th><i class="fa fa-diamond"></i> Nome</th>
                        <th class="hidden-phone"><i class="fa fa-child"></i> Slots</th>
                        <th><i class="fa fa-usd"></i> IP</th>
                        <th><i class="fa fa-usd"></i> DNS</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th><i class=" fa fa-edit"></i> Ativo Vendas</th>

                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servers as $server)
                        <tr>
                            <td>{{ $server->name }}</td>
                            <td>{{ $server->usage }}</td>
                            <td>{{ $server->ip }}</td>
                            <td>{{ $server->dns }}</td>
                            <td>{{ $server->active }}</td>
                            <td>{{ $server->active_sales }}</td>
                            <td>
                                <a href="{{ route('plan.delete' , ['id' => 1]) }}"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="{{ route('plan.delete' , ['id' => 1]) }}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- /content-panel -->
        </div><!-- /col-md-12 -->
    </div><!-- /row -->
@endsection