@props(['property'])

<div class="property-item">
    <a href="{{ route('properties.show', $property) }}" class="img">
        <img src="{{ asset($property->images->first()->image) }}" alt="Image" class="img-fluid" /> </a>

    <div class="property-content">
        <div class="price mb-2"><span>${{ number_format($property->price, 2) }}</span></div>
        <div>
              <span class="d-block mb-2 text-black-50"
              >{{ $property->address }}</span
              > <span class="city d-block mb-3">{{ $property->country }}</span>

            <div class="specs d-flex mb-4">
                <span class="d-block d-flex align-items-center me-3">
                  <span class="icon-bed me-2"></span>
                  <span class="caption">{{ $property->beds }} beds</span>
                </span> <span class="d-block d-flex align-items-center">
                  <span class="icon-bath me-2"></span>
                  <span class="caption">{{ $property->baths }} baths</span>
                </span>
            </div>

            <a
                href="{{ route('properties.show', $property) }}"
                class="btn btn-primary py-2 px-3"
            >See details</a
            >
        </div>
    </div>
</div>
