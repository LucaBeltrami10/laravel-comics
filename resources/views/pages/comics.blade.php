@extends('layout.app')

@section('main-content')
<main>
    <div class="jumbotron"></div>
    <div class="container">
        <div class="stiker">
            <p>current series</p>
        </div>
        <div class="card-container">
            @foreach($comics as $comic)
            <article class="my__card">
                <div>
                    <img src="{{$comic['thumb']}}" alt="descriptionImage">
                </div>
                <p>{{$comic['title']}}</p>
            </article>
            @endforeach
        </div>
        <button>load more</button>
    </div>
</main>
@endsection