@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">
                    @if($route_name == 'user')
                        {{ trans('app.'.$route_name) }} группы:  {{ \App\Models\Group::where('id',$_GET['group'])->first()->title }}
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
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="/estimate?group={{ $item->id }}" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"  title="Оценка"><i class="mdi mdi-eye"></i>Оценка</a>
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