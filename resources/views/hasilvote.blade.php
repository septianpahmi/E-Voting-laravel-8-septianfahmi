<base href="/public">
@include('component.head')
@include('component.navbar')
@include('component.sidebar')
{{-- main --}}
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Hasil Perolehan Suara</h1>
      </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        @foreach ($data as $item)
        <div class="col-lg-4">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title"></h5>
  
                <!-- Slides only carousel -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="/kandidat/{{$item->photo}}" class="d-block w-100" alt="...">
                    </div>
                  </div>
                </div><!-- End Slides only carousel-->
                <ol class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto">
                        <div class="fw-bold">{{$item->nm_kandidat}}</div>
                        Perolehan Suara
                      </div>
                      <span class="badge bg-primary rounded-pill">{{$item->suara}}</span>
                    </li>
                </ol>
              </div>
            </div>
        </div>
        @endforeach
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Data</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Jumlah Total DPT</td>
                        <td>{{$totaldpt}}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jumlah DPT Memilih</td>
                        <td>{{$dptmemilih}}</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Jumlah DPT Tidak Memilih</td>
                        <td>{{$tdkmemilih}}</td>
                    </tr>
                </tbody>
                
            </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
{{-- end main --}}
@include('component.footer')