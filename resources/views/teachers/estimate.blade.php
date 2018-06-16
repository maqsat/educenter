@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">{{ $group[0]->title }}</h4>
                <div class="table-responsive">
                    <form action="/estimated" method="get">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="color: red;">ТК1</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>ФИО</th>
                            <th>12.05.2018</th>
                            <th>18.05.2018</th>
                            <th>20.05.2018</th>
                            <th>25.05.2018</th>
                            @foreach(DB::table('estimate_dates')->get() as $item)
                                <th>{{ $item->date }}</th>
                            @endforeach
                            <th><input type="date" placeholder="Дата" class="form-control form-control-line" name="date"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Алпыс Динара Сейтжанқызы</td>
                            <td>8</td>
                            <td>8</td>
                            <td>8</td>
                            <td>8</td>
                            @if(DB::table('dates_estimate')->count() > 0)
                                <td>{{ DB::table('dates_estimate')->get()[0]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line" name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td>Алшынов Ахметжан Әнуарбекұлы </td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            @if(DB::table('dates_estimate')->count() > 1)
                                <td>{{ DB::table('dates_estimate')->get()[1]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line"  name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td>Бакбаева Айгерим Толегеновна </td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            @if(DB::table('dates_estimate')->count() > 2)
                                <td>{{ DB::table('dates_estimate')->get()[2]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line"  name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td>Баянды Ерлан</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            <td>12</td>
                            @if(DB::table('dates_estimate')->count() > 3)
                                <td>{{ DB::table('dates_estimate')->get()[3]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line"  name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td>Ерболатова Мадина Бахытжановна </td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            <td>5</td>
                            @if(DB::table('dates_estimate')->count() > 4)
                                <td>{{ DB::table('dates_estimate')->get()[4]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line"  name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td>Есбергенов Айдын Ардақұлы </td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            <td>15</td>
                            @if(DB::table('dates_estimate')->count() > 5)
                                <td>{{ DB::table('dates_estimate')->get()[5]->estimate }}</td>
                            @endif
                            <td><input type="text" class="form-control form-control-line"  name="estimate[]"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                            </td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                            </td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                            </td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                            </td>
                            @if(DB::table('dates_estimate')->count() > 0)
                                <td>
                                    <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                                </td>
                            @endif
                            <td>
                                <button  type="submit" class="btn btn-success"> Отправить</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection