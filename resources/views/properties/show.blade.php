@extends('layouts.app')

@section('content')
    <div
      class="hero page-inner overlay"
      style="background-image: url({{ asset('images/hero_bg_3.jpg') }})"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
                {{ $property->address }}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  {{ $property->address }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                  @foreach($property->images as $image)
                    <img src="{{ asset($image->image) }}" alt="Image" class="img-fluid" />
                  @endforeach
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">{{ $property->address }}</h2>
            <p class="meta">{{ $property->country }}</p>
            <p class="text-black-50">
              {{ $property->description }}
            </p>

            <div class="d-block agent-box p-5">
              <div class="img mb-4">
                <img
                  src="{{ asset($property->agent->photo) }}"
                  alt="Image"
                  class="img-fluid"
                />
              </div>
              <div class="text">
                <h3 class="mb-0">{{ $property->agent->name }}</h3>
                <div class="meta mb-3">{{ $property->agent->title }}</div>
                <p>
                    {{ $property->agent->description }}
                </p>
                <ul class="list-unstyled social dark-hover d-flex">
                  <li class="me-1">
                    <a href="{{ $property->agent->instagram }}"><span class="icon-instagram"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="{{ $property->agent->twitter }}"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="{{ $property->agent->facebook }}"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="{{ $property->agent->linkedin }}"><span class="icon-linkedin"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
