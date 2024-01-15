@extends('template.navigation2')

@section('konten')
<style>
  .item{
    height: 200!important
  }

  p{
    font-size: 16px!important;
  }
</style>
  @if($data->id == 1)
  <br> <br>
  <section class="transaksi-detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 vertical-line">
                  <br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                  <div class="owl-carousel">
                      <div class="item">
                        <a href="" class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/edukasi.jpg')}}" width="auto" alt="">
                          <p>Sejarah Edukasi Lengkap </p>
                        </a>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/tamanmain.jpg')}}" width="auto" alt="">
                          <p>Taman Bermain</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/minizoo.jpg')}}" width="auto" alt="">
                          <p>Mini Zoo</p>
                        </div>
                      </div>
                  </div>
                    <br>
                    <h3>Destinasi Wisata</h3>
                    <div class="detail-content-pkt">
                      <ul class="destinasi-pkt">
                          <li>Sejarah Edukasi Lengkap dengan Pemandu
                            <span>Rp. 20.000,-</span>
                          </li>
                          <li>Taman Bermain
                            <span>Rp. 0,-</span>
                          </li>
                          <li>Mini Zoo
                            <span>Rp. 0,-</span>
                          </li>
                      </ul>
                      <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!4v1705284602567!6m8!1m7!1sCAoSLEFGMVFpcE5GakJSMFpaR1pEV0sxc0NUREhpVWpsOE03YTVKRHdPSUJZNE5S!2m2!1d-7.419999649358918!2d109.1961216554046!3f200!4f0!5f0.7820865974627469" width="800" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-3">
                  <div class="sticky-book">
                      <div class="booking-section">
                          <div class="container-fluid">
                              <div class="row">
                                  <form role="form" action="/transaksi" method="POST">
                                  @csrf
                                  <div class="col-12">
                                      <h4>Total</h4>
                                      <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                  </div>
                                  <input type="hidden" name="harga" value="{{$data->harga}}">
                                  <div class="col-12">
                                    <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                    <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                        <br>
                                        @if(Auth::user())
                                        <button type="submit" class="btn btn-primary"> Booking Now </button>
                                        @else
                                        <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                        @endif
                                  </div>
                                </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    @elseif($data->id == 2)

    <section class="transaksi-detail">
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 vertical-line">
                      <br><br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                      <div class="owl-carousel">
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/edukasi.jpg')}}" width="auto" alt="">
                              <p>Sejarah Edukasi Lengkap </p>
                            </div>
                          </div>
                          <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/tamanmain.jpg')}}" width="auto" alt="">
                          <p>Taman Bermain</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/minizoo.jpg')}}" width="auto" alt="">
                          <p>Mini Zoo</p>
                        </div>
                      </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/snack.jpg')}}" width="auto" alt="">
                              <p>Snack dan Minuman</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/foto.jpg')}}" width="auto" alt="">
                              <p>Dokumentasi Foto</p>
                            </div>
                          </div>
                      </div>
                      <br>
                      <h3>Destinasi Wisata</h3>
                      <div class="detail-content-pkt">
                          <ul class="destinasi-pkt">
                          <li>Sejarah Edukasi Lengkap dengan Pemandu
                            <span>Rp. 20.000,-</span>
                          </li>
                          <li>Taman Bermain
                            <span>Rp. 0,-</span>
                          </li>
                          <li>Mini Zoo
                            <span>Rp. 0,-</span>
                          </li>
                            <li>Snack dan Minuman
                              <span>Rp. 10.000,-</span>
                            </li>
                            <li>Dokumentasi Foto
                              <span>Rp. 20.000,-</span>
                            </li>
                          </ul>
                          <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!4v1705284602567!6m8!1m7!1sCAoSLEFGMVFpcE5GakJSMFpaR1pEV0sxc0NUREhpVWpsOE03YTVKRHdPSUJZNE5S!2m2!1d-7.419999649358918!2d109.1961216554046!3f200!4f0!5f0.7820865974627469" width="800" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                  <div class="col-lg-3">
                    <div class="sticky-book">
                        <div class="booking-section">
                            <div class="container-fluid">
                                <div class="row">
                                    <form role="form" action="/transaksi" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <h4>Total</h4>
                                        <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                    </div>
                                    <input type="hidden" name="harga" value="{{$data->harga}}">
                                    <div class="col-12">
                                      <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                      <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                          <br>
                                          @if(Auth::user())
                                          <button type="submit" class="btn btn-primary"> Booking Now </button>
                                          @else
                                          <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                          @endif
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>

      @elseif($data->id == 3)

      <section class="transaksi-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 vertical-line">
                      <br><br><h2 style="margin-bottom: -10px"> {{ $data->nama }} </h2>
                        <div class="owl-carousel">
                        <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/edukasi.jpg')}}" width="auto" alt="">
                              <p>Sejarah Edukasi Lengkap </p>
                            </div>
                          </div>
                          <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/tamanmain.jpg')}}" width="auto" alt="">
                          <p>Taman Bermain</p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="card-detailpaket">
                          <img class="img-fluid" src="{{url('assets/images/wisata/minizoo.jpg')}}" width="auto" alt="">
                          <p>Mini Zoo</p>
                        </div>
                      </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/snack.jpg')}}" width="auto" alt="">
                              <p>Snack dan Minuman</p>
                            </div>
                          </div>
                          <div class="item">
                            <div class="card-detailpaket">
                              <img class="img-fluid" src="{{url('assets/images/wisata/foto.jpg')}}" width="auto" alt="">
                              <p>Dokumentasi Foto</p>
                            </div>
                          </div>
                            <div class="item">
                              <div class="card-detailpaket">
                                <img class="img-fluid" src="{{url('assets/images/wisata/gedung.jpg')}}" width="auto" alt="">
                                <p>Sewa Aula Pertemuan</p>
                              </div>
                            </div>
                        </div>
                        <br>
                        <h3>Destinasi Wisata</h3>
                        <div class="detail-content-pkt">
                            <ul class="destinasi-pkt">
                            <li>Sejarah Edukasi Lengkap dengan Pemandu
                            <span>Rp. 20.000,-</span>
                          </li>
                          <li>Taman Bermain
                            <span>Rp. 0,-</span>
                          </li>
                          <li>Mini Zoo
                            <span>Rp. 0,-</span>
                          </li>
                            <li>Snack dan Minuman
                              <span>Rp. 10.000,-</span>
                            </li>
                            <li>Dokumentasi Foto
                              <span>Rp. 20.000,-</span>
                            </li>
                              <li>Sewa Aula Pertemuan
                                <span>Rp. 25.000,-</span>
                              </li>
                            </ul>
                            <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!4v1705284602567!6m8!1m7!1sCAoSLEFGMVFpcE5GakJSMFpaR1pEV0sxc0NUREhpVWpsOE03YTVKRHdPSUJZNE5S!2m2!1d-7.419999649358918!2d109.1961216554046!3f200!4f0!5f0.7820865974627469" width="800" height="450" style="border:0;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                    <div class="col-lg-3">
                      <div class="sticky-book">
                          <div class="booking-section">
                              <div class="container-fluid">
                                  <div class="row">
                                      <form role="form" action="/transaksi" method="POST">
                                      @csrf
                                      <div class="col-12">
                                          <h4>Total</h4>
                                          <p>Rp{{ number_format($data->harga ,2,',','.') }}- /pax</p>
                                      </div>
                                      <input type="hidden" name="harga" value="{{$data->harga}}">
                                      <div class="col-12">
                                        <input name="tanggal" type="date" class="form-control" min="<?php echo date("Y-m-d"); ?>">
                                        <input type="hidden" name="id_paket" value="{{ $data->id }}">
                                            <br>
                                            @if(Auth::user())
                                            <button type="submit" class="btn btn-primary"> Booking Now </button>
                                            @else
                                            <a href="/login" class="btn btn-primary">Login Untuk Booking</a>
                                            @endif
                                      </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    @else

    @endif
    <!-- Footer  -->
    <section style="margin-top:100px!important;" class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/logofull.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2024 - MuseumJensoed - Institut Teknologi Telkom Purwokerto</p>
          </center>
        </div>
    </section>
    <!-- End of Footer  -->

    <script src="{{url('assets/scripts/jquery.min.js')}}"></script>
    <script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYTqP6EacKcUYlnQaaGs2TlrKwAhUonoY&callback=initMap"
    async defer></script>
<script>
     let locationArrPkt = []

$(".destinasi-pkt li").each(function (a) {
    locationArrPkt.push($(this).text())
})


function initMap() {
    const map = new google.maps.Map(document.getElementById("mapPaket"), {
        center: { lat: -6.893396, lng: 107.62067 },
        zoom: 12
    });

    const geocoder = new google.maps.Geocoder();

    geoLocation(geocoder, map);
}

function geoLocation(geocoder, mapResults) {

    locationArrPkt.map(location => {
        geocoder.geocode({ address: location }, function (res, status) {
            if (status == "OK") {
                // mapResults.setCenter(res[0].geometry.location);
                const marker = new google.maps.Marker({
                    map: mapResults,
                    position: res[0].geometry.location
                });

                marker.addListener('click', () => {
                    console.log('clicked')
                    mapResults.setZoom(15);
                    mapResults.setCenter(res[0].geometry.location)
                })
            } else {
                console.log(status);
            }
        });
    })

}

// Owl Carousel
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 2,
  dots: false,
  nav: false,
  autoplay:true,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      margin: 2,
      stagePadding: 4,
    },
    600: {
      items: 3,
      margin: 4,
      stagePadding:10,
    },
    1000: {
      items: 3
    }
  }
});
  </script>
@endsection
