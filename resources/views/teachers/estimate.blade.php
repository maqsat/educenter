@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">Группа: Информационные системы-2018-01(курс-1)</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>ФИО</th>
                            <th>12.05.2018</th>
                            <th><input type="text" placeholder="Дата"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Алпыс Динара Сейтжанқызы</td>
                            <td>8</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Алшынов Ахметжан Әнуарбекұлы </td>
                            <td>12</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Бакбаева Айгерим Толегеновна </td>
                            <td>5</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Баянды Ерлан</td>
                            <td>12</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Ерболатова Мадина Бахытжановна </td>
                            <td>5</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Есбергенов Айдын Ардақұлы </td>
                            <td>15</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Изменить</a>
                            </td>
                            <td>
                                <a href="" class="btn waves-effect waves-light btn-warning hidden-md-down"> Отправить</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection