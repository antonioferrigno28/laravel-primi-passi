{{-- componente header --}}
<div>
    {{-- link per reindirizzare alle varie pagine NB si usa il "name" che definiamo nelle route e non il nome del file o l'url  --}}
    <a href={{ route('home') }}>Home</a>
    <a href={{ route('landingpage') }}>Landing</a>
    <a href={{ route('testcompactpage') }}>compact</a>
</div>
