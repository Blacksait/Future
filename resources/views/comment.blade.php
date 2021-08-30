@extends('layouts.main')

@section('content')
    <div class="wrapper">
        <div class="container">
            <!-- Show Comments-->
            <div class="comments">
                @foreach($comments as $comment)
                    <div class="user">
                        <div class="user-info">
                            <ul style='padding-left: 0'>
                                <li class="first-li">{{$comment->name}}</li>
                                <li>{{substr($comment->created_at,0,-3)}}</li>
                            </ul>
                        </div>
                        <div class="user-comment">
                            <p>{{$comment->mess}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Create Comments-->
            <div class="create-comment">
                <h1 style="font-size: 32px;padding-top: 3%">Оставить коментарий</h1>
                <div class="comment-form">
                    <div class="row pb-5">
                        <form action="/" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="name">Ваше имя</label><br>
                            <input type="text" name="name" placeholder="Ваше имя" class="col-6 p-2"><br>

                            <label for="name" class="pt-3">Ваш комментарий</label><br>
                            <textarea name="mess" id="mess" class="col-6"></textarea><br>

                            <button type="submit" style="border-radius: 6px">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
