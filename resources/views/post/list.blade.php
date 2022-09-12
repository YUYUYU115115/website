@extends('layouts.layout')
@section('title, ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>日付</th>
              <th>タイトル</th>
              <th>内容</th>
              <th></th>
          </tr>
          @foreach($posts as $post)
          <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->updated_at }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->content }}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection