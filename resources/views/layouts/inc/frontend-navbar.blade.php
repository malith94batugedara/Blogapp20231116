<div class="global-navbar mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/images/logo.jpeg')}}" width="150px" height="150px" alt="Logo"/>
            </div>
            <div class="col-md-9 mt-5">
                <div class="border text-center p-2">
                    <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-green">
            <div class="container">
              {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                  </li>
                  <?php
                  $categories = App\Models\Category::where('status','1')->where('navbar_status','1')->get();
                  ?>
                  @foreach($categories as $category)
                    <li class="nav-item">
                       <a class="nav-link" href="{{ $category->slug }}">{{ $category->name }}</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </nav>
    </div>
    
</div>