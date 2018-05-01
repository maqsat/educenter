@extends('layouts.app')

@section('content')

    <!-- Column -->
    <div class="col-lg-12">
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

                <form action="/{{ $route_name }}" method="POST" class="form-horizontal form-material">
                    {{ csrf_field() }}
                    @if($route_name == 'group')
                        <div class="form-group">
                            <label class="col-md-12">Специальности</label>
                            <div class="col-md-12">
                                <select class="form-control form-control-line" name="specialty">
                                    <option>Не выбрано</option>
                                    @foreach($specialties as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Год поступление</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control form-control-line" name="date_arrival" value="{{ date('Y') }}" min="2010">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Номер группы</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control form-control-line" name="group_number" min="1" value="01">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Семестр</label>
                            <div class="col-md-12">
                                <input type="number" class="form-control form-control-line" name="semester" min="1" max="8" value="1">
                            </div>
                        </div>
                    @else
                        <div class="form-group">
                            <label class="col-md-12">Наименование</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control form-control-line" name="title">
                            </div>
                        </div>
                    @endif
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Отправить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection