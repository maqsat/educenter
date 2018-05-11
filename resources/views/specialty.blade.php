@extends('layouts.app')

@section('content')

    <!-- Column -->
    <div class="col-lg-12">
        <h4 class="card-title">Предметы специальности - "{{ $specialties->title }}"</h4>

        <div class="card">
            <div class="card-block">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/{{ $route_name }}_subjects" method="POST" class="form-horizontal form-material">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Предметы</label>
                        <div class="col-md-12">
                            <select class="form-control form-control-line" name="subject">
                                <option>Не выбрано</option>
                                @foreach($subjects as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Семестр</label>
                        <div class="col-md-12">
                            <select class="form-control form-control-line" name="semester">
                                <option>Не выбрано</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="specialty" value="{{ $specialties->id }}">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @for($i = 1; $i <= 8; $i++)
                @if(DB::table('specialty_subjects')->where('specialty_subjects.specialty', $id)->where('semester',$i)->count() > 0)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">{{ $i }} - семестр</h4>
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
                                    <?php
                                    $specialty_subjects = DB::table('specialty_subjects')
                                        ->join('subjects','specialty_subjects.subject','=','subjects.id')
                                        ->where('specialty_subjects.specialty', $id)
                                        ->where('specialty_subjects.semester',$i)
                                        ->get();
                                    ?>
                                    @foreach($specialty_subjects as $item)
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
                @endif
            @endfor
        </div>
    </div>
@endsection