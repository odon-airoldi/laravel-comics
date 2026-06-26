<div class="border">
    {{-- variabile che rappresenta il contenuto child del componente --}}
    {{ $slot }}
    {{-- named slots --}}
    <div class="p-3">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
    </div>
    <img class="img-fluid" src="{{ $thumb }}" alt="">

    
</div>