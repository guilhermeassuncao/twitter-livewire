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
        <br>
    @endforeach

    <hr>

    <div>
        {{$tweets->links()}}
    </div>
</div>