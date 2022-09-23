@extends('layouts.layout')
@section('title, ブログ一覧')
@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2">
      <h2>ブログ記事一覧</h2>
      <table class="table table-striped">
          <tr>
              <th>記事番号</th>
              <th>タイトル</th>
              <th>日付</th>
              <th></th>
          </tr>
          @foreach($posts as $post)
          <tr>
              <td>{{ $post->id  }}</td>
              <td><a href="/post/{{ $post->id }}">{{ $post->title  }}</a></td>
              <td>{{ $post->updated_at  }}</td>
          </tr>
          @endforeach
      </table>
  </div>
</div>
@endsection