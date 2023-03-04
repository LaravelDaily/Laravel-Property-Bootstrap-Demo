@extends('layouts.app')

@section('content')
    <div class="hero">
      <div class="hero-slide">
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_3.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_2.jpg')"
        ></div>
        <div
          class="img overlay"
          style="background-image: url('images/hero_bg_1.jpg')"
        ></div>
      </div>

      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
              Easiest way to find your dream home
            </h1>
            <form
              action="#"
              class="narrow-w form-search d-flex align-items-stretch mb-3"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <input
                type="text"
                class="form-control px-4"
                placeholder="Your ZIP code or City. e.g. New York"
              />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Popular Properties
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a
                href="#"
                target="_blank"
                class="btn btn-primary text-white py-3 px-4"
                >View all properties</a
              >
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
                  @foreach($properties as $property)
                      <x-property :property="$property" />
                  @endforeach
              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="features-1">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="box-feature">
              <span class="flaticon-house"></span>
              <h3 class="mb-3">Our Properties</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="box-feature">
              <span class="flaticon-building"></span>
              <h3 class="mb-3">Property for Sale</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="box-feature">
              <span class="flaticon-house-3"></span>
              <h3 class="mb-3">Real Estate Agent</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
          <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="box-feature">
              <span class="flaticon-house-1"></span>
              <h3 class="mb-3">House for Sale</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Voluptates, accusamus.
              </p>
              <p><a href="#" class="learn-more">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="section sec-testimonials">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
              Customer Says
            </h2>
          </div>
          <div class="col-md-6 text-md-end">
            <div id="testimonial-nav">
              <span class="prev" data-controls="prev">Prev</span>

              <span class="next" data-controls="next">Next</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
              @foreach($testimonials as $testimonial)
                  <div class="item">
                      <div class="testimonial">
                          <img
                              src="{{ $testimonial->photo }}"
                              alt="Image"
                              class="img-fluid rounded-circle w-25 mb-4"
                          />
                          <div class="rate">
                              @for($i = 0; $i < $testimonial->rating; $i++)
                                  <span class="icon-star text-warning"></span>
                              @endfor
                          </div>
                          <h3 class="h5 text-primary mb-4">{{ $testimonial->full_name }}</h3>
                          <blockquote>
                              <p>
                                  &ldquo;{{ $testimonial->testimonial }}&rdquo;
                              </p>
                          </blockquote>
                          <p class="text-black-50">{{ $testimonial->company }}</p>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Let's find home that's perfect for you
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit.
            </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">2M Properties</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Top Rated Agents</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>

            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Legit Properties</h3>
                <p class="text-black-50">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Nostrum iste.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row section-counter mt-5">
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">3298</span></span
              >
              <span class="caption text-black-50"># of Buy Properties</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">2181</span></span
              >
              <span class="caption text-black-50"># of Sell Properties</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">9316</span></span
              >
              <span class="caption text-black-50"># of All Properties</span>
            </div>
          </div>
          <div
            class="col-6 col-sm-6 col-md-6 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="600"
          >
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number"
                ><span class="countup text-primary">7191</span></span
              >
              <span class="caption text-black-50"># of Agents</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Be a part of our growing real state agents</h2>
          <p>
            <a
              href="#"
              target="_blank"
              class="btn btn-primary text-white py-3 px-4"
              >Apply for Real Estate agent</a
            >
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4">
              Our Agents
            </h2>
            <p class="text-black-50">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              enim pariatur similique debitis vel nisi qui reprehenderit totam?
              Quod maiores.
            </p>
          </div>
        </div>
          <div class="row">
              @foreach($agents as $agent)
                  <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                      <div class="h-100 person">
                          <img
                              src="{{ asset($agent->photo) }}"
                              alt="Image"
                              class="img-fluid"
                          />

                          <div class="person-contents">
                              <h2 class="mb-0"><a href="#">{{ $agent->full_name }}</a></h2>
                              <span class="meta d-block mb-3">{{ $agent->title }}</span>
                              <p>
                                  {{ $agent->description }}
                              </p>

                              <ul class="social list-unstyled list-inline dark-hover">
                                  <li class="list-inline-item">
                                      <a href="{{ $agent->twitter }}"><span class="icon-twitter"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="{{ $agent->facebook }}"><span class="icon-facebook"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="{{ $agent->linkedin }}"><span class="icon-linkedin"></span></a>
                                  </li>
                                  <li class="list-inline-item">
                                      <a href="{{ $agent->instagram }}"><span class="icon-instagram"></span></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
    </div>
@endsection
