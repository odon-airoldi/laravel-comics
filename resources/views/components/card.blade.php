<div class="card">
    {{-- variabile che rappresenta il contenuto child del componente --}}
    {{ $slot }}
    {{-- named slots --}}
     
    <h3>{{ $title }}</h3>
    <p>{{ $description }}</p>
    <img src="{{ $thumb }}" alt="">

    
</div>