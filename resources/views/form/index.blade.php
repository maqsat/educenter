@extends('layouts.app')

@section('content')

    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">{{ trans('app.'.$route_name) }}</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Наименование</th>
                            <th>Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down" title="Удалить" style="margin: 5px;"><i class="mdi mdi-delete"></i>Удалить</a>
                                    <a href="" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down"  title="Изменить" style="margin: 5px;"><i class="mdi mdi-grease-pencil"></i>Изменить</a>
                                    <a href="/{{ $route_name }}/{{ $item->id }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"  title="Посмотреть" style="margin: 5px;"><i class="mdi mdi-eye"></i>Посмотреть</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection