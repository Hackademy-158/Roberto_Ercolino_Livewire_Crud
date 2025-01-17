<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Tutti gli articoli</h3>
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{session('message')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12">
                    <h4>{{$article->title}}</h4>
                    <p>{{$article->body}}</p>
                    <a href="{{route('article.edit', $article)}}" class="btn btn-primary">MODIFY</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
