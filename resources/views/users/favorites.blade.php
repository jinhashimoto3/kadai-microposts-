@extends('layouts.app')
@section('content')
 <h1>お気に入り一覧</h1>

    @if (count($favorites) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>投稿</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($favorites as $favorite)
                <tr>
                    <td>{{$favorite->content}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif





@endsection