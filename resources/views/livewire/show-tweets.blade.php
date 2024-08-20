<div>
    {{$content}}
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
        {{$tweet->user->name}} - {{$tweet->content}}
        @if ($tweet->likes->count())
            <a href="#" wire:click.prevent="unlike({{$tweet->id}})">Descurtir</a>
        @else
            <a href="#" wire:click.prevent="like({{$tweet->id}})">Curtir</a>
        @endif
        <br>
    @endforeach


    <hr>

    <div>
        {{$tweets->links()}}
    </div>
</div>