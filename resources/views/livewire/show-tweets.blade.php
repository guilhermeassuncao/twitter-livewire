<div>
    <h1>Envie Seu Tweet</h1>
    <br>
    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" wire:model.live="content">
        <br>
        @error('content') {{$message}} @enderror
        <br>

        <button type="submit">Criar Tweet</button>
    </form>

    <br>

    <hr>

    @foreach ($tweets as $tweet)
        <div>
            @if ($tweet->user->photo)
                <img src="{{url("storage/{$tweet->user->photo}")}}" alt="{{$tweet->user->name}}">
            @else
                <img src="{{url('imgs/1.png')}}" alt="{{$tweet->user->name}}">
            @endif
        </div>
        <br>
        <div>
            {{$tweet->content}}
            @if ($tweet->likes->count())
                <a href="#" wire:click.prevent="unlike({{$tweet->id}})">Descurtir</a>
            @else
                <a href="#" wire:click.prevent="like({{$tweet->id}})">Curtir</a>
            @endif
        </div>
        <br>
    @endforeach


    <hr>

    <div>
        {{$tweets->links()}}
    </div>
</div>