@extends('template.navigation')

@section('konten')
<!-- Hero Landing-->
    <section class="hero">
    <div class="hero-overlay">
            <span></span>
            <span></span>
        </div>
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>
        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                      <div class="header">
                        <h1>Museum Panglima Besar Jenderal Soedirman Purwokerto</h1>
                        <p>Temukan dan Jelajahi Sejarah Jenderal Soedirman yang Menarik <br>Di <strong>Purwokerto</strong><br> Banyumas </p>
                      </div>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="landing city">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Jenderal Soedirman</h2>
                    <p>Jenderal Besar TNI (Anumerta) Raden Soedirman adalah seorang 
                       <strong><i>perwira tinggi Indonesia pada masa Revolusi Nasional Indonesia.</i></strong>.
                       Jenderal Soedirman memiliki peran yang sangat besar pada masa revolusi merebut kemerdekan Indonesia dari kolonial Belanda. 
                       Jenderal Sudirman adalah <strong><i>Panglima Besar Tentara Keamanan Rakyat (TKR)</i></strong>, 
                       kini Tentara Nasional Indonesia (TNI) pertama kelahiran Purbalingga, 24 Januari 1916.
                         </p>
                </div>
                <div class="col-md-6">
                  <iframe width="88%" height="280" src="https://www.google.com/maps/embed?pb=!4v1705251929688!6m8!1m7!1sCAoSLEFGMVFpcFBtblJmUDVMZUN0Q2Zia3RsWEZmSFNoRkxrSmZfMEVBSm4wNHVo!2m2!1d-7.4201782!2d109.1960245!3f260!4f10!5f0.7820865974627469" 
                  frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="landing features">
        <div class="container features-content">
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/kuliner.png')}}" width="120px" alt="">
                    <h3>Diorama</h3>
                    <p>
                    Dalam museum terdapat diorama yang menggambarkan kehidupan jenderal Soedirman dari sekolah sampai beliau wafat. Berupa adegan yang diaplikasikan dalam miniatur tiga dimensi yang menggambarkan bagian kisah hidup beliau.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/wisata.png')}}" width="120px" alt="">
                    <h3>Wisata</h3>
                    <p>
                      Destinasi wisata sambil belajar sejarah yang disediakan taman bermain dan mini zoo, cocok digunakan sebagai tempat liburan bagi anak-anak untuk menambah wawasannya
                    </p>

                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/sejarah.png')}}" width="120px" alt="">
                    <h3>Sejarah</h3>
                    <p>
                      Museum Jenderal Soedirman di Purwokerto memiliki cerita sejarah mengenai perjuangan Jenderal Soedirman dalam memperjuangkan Kemerdekaan Indonesia
                   </p>

                </div>
            </div>
        </div>
        <div id="news"></div>
    </section>

    <section class="landing wisata" id="wisata">
        <div style="padding-top: 60px" class="container">
            <center><h2 style="margin-top:10px">Wisata Museum Jensoed</h2></center>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($wisata as $data)
            <div class="item">
              <a href="/wisata/{{ $data->id }}">
                <div class="item-image">
                  <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                </div>
                <div class="item-text">
                  <span class="item-kicker">{{ $data->nama }}</span>
                  <h3 class="item-title">{{ $data->alamat }}</h3>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; padding-bottom:40px" class="container d-flex justify-content-center">
            <a style="font-weight: 700" class="btn btn-primary" href="/wisata">
                Lihat Semua
            </a>
        </div>
        <div class="features-slanted"></div>
    </section>

    <div id="paket"></div>

    <section class="landing paket">
        <div class="container">
            <h2 style="margin-top: 200px; margin-bottom:50px">Paket Wisata</h2>
            <p>Jelajahi dan Belajar Edukasi Sejarah di Museum Jenderal Soedirman Purwokerto</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>Paket</p>
                            <h2>Edukasi Sejarah</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 20.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Belajar Sejarah Lengkap</p>
                            <p class="font-segoe color-black text-center bg-grey">Taman Bermain</p>
                            <p class="font-segoe color-black text-center">Mini Zoo</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">Snack dan minum</p>
                            <p class="font-segoe color-black text-center color-disable">Dokumentasi Foto</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">Sewa Aula Pertemuan</p>
                            <a href="/paket/1">
                              <button class="btn btn-primary">Detail Paket</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>Paket</p>
                            <h2>Keluarga</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 50.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Belajar Sejarah Lengkap</p>
                            <p class="font-segoe color-black text-center bg-grey">Taman Bermain</p>
                            <p class="font-segoe color-black text-center">Mini Zoo</p>
                            <p class="font-segoe color-black text-center  bg-grey color">Snack dan minum</p>
                            <p class="font-segoe color-black text-center color">Dokumentasi Foto</p>
                            <p class="font-segoe color-black text-center  bg-grey color-disable">Sewa Aula Pertemuan</p>
                              <a href="/paket/2">
                              <button class="btn btn-primary">Detail Paket</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="plans-card d-flex flex-column">
                        <div class="plans-header d-flex align-items-center justify-content-center">
                            <p>Paket</p>
                            <h2>Event</h2>
                        </div>
                        <div class="plans-content">
                            <h3 class="font-segoe color-black text-center">
                              Rp. 75.000,-
                              <span> / pax </span>
                            </h3>
                            <br>
                            <hr>
                            <p class="font-segoe color-black text-center">Belajar Sejarah Lengkap</p>
                            <p class="font-segoe color-black text-center bg-grey">Taman Bermain</p>
                            <p class="font-segoe color-black text-center">Mini Zoo</p>
                            <p class="font-segoe color-black text-center  bg-grey color">Snack dan minum</p>
                            <p class="font-segoe color-black text-center color">Dokumentasi Foto</p>
                            <p class="font-segoe color-black text-center  bg-grey color">Sewa Aula Pertemuan</p>
                            <a href="/paket/3">
                              <button class="btn btn-primary">Detail Paket</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/logofull.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">&#8212; &nbsp; Copyright &copy; 2024 - MuseumJensoed - Institut Teknologi Telkom Purwokerto</p>
          </center>
        </div>
    </section>
    <!-- End of Footer  -->
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
// Owl Carousel
$('.owl-carousel').owlCarousel({
  loop: false,
  margin: 10,
  dots: false,
  nav: false,
  autoplay:false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      margin: 2,
      stagePadding: 10,
    },
    600: {
      items: 3,
      margin: 10,
      stagePadding: 40,
    },
    1000: {
      items: 4
    }
  }
});


// Fetch News API

const newsUrl =
  "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=bandung AND (wisata OR travel OR turis OR alam OR pemandangan)&language=id";
axios.get(newsUrl).then(resp => {
  for (let i = 0; i < 6; i++) {
    var d = new Date(resp.data.articles[i].publishedAt);
    d = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear()+' '+(d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
    $("#newsContainer").append(`
    <div class="col-md-4 col-sm-6 col-xs-6">
    <a href="${resp.data.articles[i].url}" target="_blank">
    <div class="news-card" style='background-image:url("${
      resp.data.articles[i].urlToImage
    }")'>
        <div class="news-content">
                <h5>${resp.data.articles[i].title}</h5>
                <p>${ d }</p>
        </div>
    </div>
    </a>
</div>
    `);
  }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'

        });
    });
});

</script>


@endsection

</html>
