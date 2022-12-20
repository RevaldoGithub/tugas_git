@extends('homepage.layouts')
@section('content')

<section aria-label="section" class="jarallax no-top no-bottom">
    <!-- <img src="{{asset('')}}assets/images/background/6.jpg" class="jarallax-img" alt=""> -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="spacer-10"></div>
                <div class="h1 text-white wow fadeInUp" data-wow-delay=".6s">
                    Hi, Saya <span class="id-color-2">{{$banners->nama}}</span> a
                    <div class="typed-strings">
                        @foreach($profesis as $prf)
                        <p>{{$prf->profesi}}.</p>
                        @endforeach
                    </div>
                    <div class="typed"></div>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".6s">
                    {!!$banners->intro!!}
                </p>
                <div class="spacer-10"></div>
                <a class="btn-main wow fadeInUp" data-wow-delay=".6s" href="#section-resume">My Resume</a>
            </div>
            <div class="col-md-6 offset-md-1 jarallax">
                <img src="{{asset('storage/' . $banners->image)}}" class="img-fluid wow fadeInUp" data-wow-delay=".8s" alt="">
            </div>
        </div>
    </div>
    <a href="#section-about" class="mouse-icon-click scroll-to wow fadeInUp" data-wow-delay=".8s">
        <span class="mouse fadeScroll relative" data-scroll-speed="10">
            <span class="scroll"></span>
        </span>
    </a>
    <div class="de-gradient-edge-bottom"></div>
</section>
<section id="section-about">
    <div class="container relative">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>About Me</h2>
                <div class="space-border"></div>
            </div>
            <div class="col-md-8 offset-md-2 text-center wow fadeInUp">
                <p>{{$abouts->content}}</p>
            </div>
            <div class="spacer-single"></div>
            @foreach($persens as $prs)
            <div class="col-lg-3 position-relative wow fadeIn" data-wow-delay=".2s">
                <div class="position-relative">
                    <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="{{$prs->persen}}">
                            <div></div>
                        </div>
                        <h4>{{$prs->keahlian}}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="section-my-quote" aria-label="section" class="jarallax no-top no-bottom">
    <div class="de-gradient-edge-top"></div>
    <!-- <img src="{{asset('')}}assets/images/background/2.jpg" class="jarallax-img" alt=""> -->
    <div class="v-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1">
                    <blockquote class="q-big wow fadeIn" data-wow-duration="3s">
                        <i class="d-big icon_quotations"></i>
                        {{$abouts->qoutes}}
                        <span class="d-quote-by">{{$abouts->nama}}</span>
                    </blockquote>
                    <div class="spacer-double"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="de-gradient-edge-bottom"></div>
</section>
<section id="section-services" class="no-bottom">
    <div class="container relative">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>What I Do</h2>
                <div class="space-border"></div>
            </div>
            <div class="spacer-single"></div>
            <div class="row g-0">
                @foreach($job as $jb)
                <div class="col-lg-4 wow fadeIn" data-wow-delay=".2s">
                    <div class="de_3d-box">
                        <div class="d-inner">
                            <!-- <i class="icon_genius id-color-2"></i> -->
                            <img src="{{asset('storage/' . $jb->icon)}}" alt="{{$jb->job}}" title="{{$jb->job}}" style="width: 70px; max-width: 100px; margin-top: -145px;">
                            <div class="text">
                                <h3>{{$jb->job}}</h3>
                                {!!$jb->content!!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section id="section-portfolio" class="no-bottom">
    <div class="container relative">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>Portfolio</h2>
                <div class="space-border"></div>
            </div>
        </div>
        <div id="gallery" class="row sequence">
            @foreach($portos as $prt)
            <div class="col-md-4 item wow">
                <div class="de_modal">
                    <div class="card-image-1 mod-c" data-tilt>
                        <div class="d-text">
                            <h3>{{$prt->judul}}</h3>
                            <!-- <h5 class="d-tag">website</h5> -->
                        </div>
                        <img src="{{asset('storage/' . $prt->image)}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section id="section-resume">
    <div class="container relative">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>My Resume</h2>
                <div class="space-border"></div>
            </div>
        </div>
        <div class="row gh-5">
            <div class="col-lg-6 wow fadeInUp">
                <div class="p-4">
                    <h3 class="s_border">Experiences</h3>
                    <ul class="d_timeline">
                        @foreach($pengalaman as $pgl)
                        <li class="d_timeline-item">
                            <h3 class="d_timeline-title">{{$pgl->tahun}}</h3>
                            <p class="d_timeline-text"><span class="d_title">{{$pgl->job}}</span><span class="d_company">{{$pgl->company}}</span>{!!$pgl->content!!}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp">
                <div class="p-4">
                    <h3 class="s_border">Education</h3>
                    <ul class="d_timeline">
                        @foreach($sekolah as $skl)
                        <li class="d_timeline-item">
                            <h3 class="d_timeline-title">{{$skl->tahun}}</h3>
                            <p class="d_timeline-text"><span class="d_title">{{$skl->sekolah}}</span><span class="d_company">{{$skl->nama_sekolah}}</span>{{$skl->content}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-fun-facts" aria-label="section" class="jarallax">
    <div class="de-gradient-edge-top"></div>
    <!-- <img src="{{asset('')}}assets/images/background/3.jpg" class="jarallax-img" alt=""> -->
    <div class="container">
        <div class="row">
            @foreach($count as $ctn)
            <div class="col-md-3 wow fadeIn" data-wow-delay="0">
                <div class="de_count text-center">
                    <h3 class="timer" data-to="{{$ctn->angka}}" data-speed="2500">0</h3>
                    <span>{{$ctn->judul}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="de-gradient-edge-bottom"></div>
</section>
<section id="section-contact" class="jarallax">
    <div class="de-gradient-edge-top"></div>
    <!-- <img src="{{asset('')}}assets/images/background/5.jpg" class="jarallax-img" alt=""> -->
    <div class="container z-index-1000">
        <div class="row">
            <div class="col-md-12 text-center wow fadeInUp">
                <h2>Contact Me</h2>
                <div class="space-border"></div>
            </div>
            <div class="col-lg-8 offset-lg-2 wow fadeInUp">
                <div class="contact_form_wrapper">

                    <form class="form-border" method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-set">
                                    <input type="text" name="nama" class="form-control" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <div class="field-set">
                                <textarea name="pesan" class="form-control" placeholder="Your Message" required></textarea>
                            </div>
                            <div id='submit' class="mt10">
                                <button type='submit' id='send_message' class="btn-main">Kirim Pesan</button>
                            </div>

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Maaf Ygy ada masalah saat di input!!</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                        </div>
                    </form>
                </div>
                <div class="spacer-double"></div>
                <div class="row text-center wow fadeInUp">
                    <div class="col-md-4">
                        <div class="wm-1"></div>
                        <h6>Email Me</h6>
                        <p>{{$contact->email}}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="wm-1"></div>
                        <h6>Call Me</h6>
                        <p>{{$contact->no_telp}}</p>
                    </div>
                    <div class="col-md-4">
                        <div class="wm-1"></div>
                        <h6>Address</h6>
                        <p>{{$contact->alamat}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="de-gradient-edge-bottom"></div>
</section>

@endsection