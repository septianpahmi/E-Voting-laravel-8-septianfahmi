<base href="/public">
@include('user.head')
@include('user.navbar')
{{-- main --}}
    <br> <br> <br>
    <div class="pagetitle">
        <h1 style="text-align: center">DAFTAR CALON KETUA & WAKIL KETUA OSIS <br> SMKS PASUNDAN 2 CIANJUR</h1>
      </div><!-- End Page Title -->
    <section class="section">
      <div class="row" >
        <div class="col-lg-1">
        </div>
        {{-- <form action="{{ url('/pemilsos/vote', $item->id) }}" method="POST">
          @csrf --}}
        @foreach ($data as $item)
        <div class="col-lg-3">

            <div class="card">
              <div class="card-body">
                <h2 class="card-title" style="text-align: center"><b>{{$item->nomor}}</b><br>{{$item->nm_kandidat}}</h2>
  
                <!-- Slides only carousel -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/kandidat/{{$item->photo}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div><!-- End Slides only carousel-->

                <div class="d-grid gap-2 mt-3">
                <a href="{{url('/pemilsos/vote', $item->id)}}" type="button" class="btn btn-Success" onclick="return confirm('Apakah Anda Yakin?')">Vote</a>
                </div>

                <!-- Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Visi 
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{$item->visi}}</div>
                  </div>
                </div>
              </div><!-- End Accordion without outline borders -->
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Misi 
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">{{$item->misi}}</div>
                  </div>
                </div>
              </div><!-- End Accordion without outline borders -->
              </div>
            </div>
        </div>
        @endforeach
        {{-- </form> --}}
      </div>
    </section>

  </main>
{{-- end main --}}
@include('user.footer')