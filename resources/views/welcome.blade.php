    <x-guest-layout>
        <div class="row g-4">
            @forelse ($products as $product) <div class="col-xs-12 col-md-6 col-lg-4">
                <p>{{ $product }}</p>
                <x-furniture-product />
            </div>
            @empty
            <p class="text-center">No Furniture!</p>
            @endforelse
        </div>
    </x-guest-layout>