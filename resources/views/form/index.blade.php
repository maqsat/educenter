@extends('layouts.app')

@section('content')

    <!-- Column -->
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">
                    @if($route_name == 'user')
                        @if(isset($_GET['group']))  {{ trans('app.'.$route_name.'.student') }} группы:  {{ \App\Models\Group::where('id',$_GET['group'])->first()->title }}
                        @else {{ trans('app.user.teachers') }} кафедры:  {{ \App\Models\Cathedra::where('id',$_GET['cathedra'])->first()->title }}
                        @endif
                    @else
                        {{ trans('app.'.$route_name) }}
                    @endif
                </h4>
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
                                <td>@if($route_name == 'user') {{ $item->name }} @else {{ $item->title }} @endif</td>
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