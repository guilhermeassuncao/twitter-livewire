<div>
    <h1>Foto de Perfil</h1>
    <form action="" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model.live="photo">
        <br>
        @error('photo') {{$message}} @enderror
        <br>
        <button type="submit">Enviar foto</button>
    </form>
</div>