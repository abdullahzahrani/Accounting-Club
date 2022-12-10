@extends('layouts.app')

@section('content')
    <!-- Start: Bootstrap 4 - Team Members --><div class="container py-5" dir="rtl">
        <div class="row text-center">

            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">عبدالله الحسن</h5><span class="small text-uppercase text-muted">رئيس النادي</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="mailto:Abdullah.alhassan1@outlook.com" class="social-link c"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/abdullah-alhassan-087195187" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">فيصل العيد</h5><span class="small text-uppercase text-muted">نائب رئيس النادي</span>
                    <ul class="social mb-0 list-inline mt-3">
                        <li class="list-inline-item"><a href="mailto:FaisalBinEid@outlook.com" class="social-link c"><i class="fa fa-envelope"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/faisalbineid" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div><!-- End -->
@foreach($mbr as $mb)
            <!-- Team item -->
            <div class="col-xl-3 col-sm-6 mb-5">
                <div class="bg-white rounded shadow-sm py-5 px-4">
                    <img src="{{Storage::url($mb->img)}}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                    <h5 class="mb-0">{{$mb->name}}</h5><span class="small text-uppercase text-muted">{{$mb->rank}}</span>

                    <ul class="social mb-0 list-inline mt-3">
                        @if (!is_null($mb->mail))
                            <li class="list-inline-item"><a href="mailto:{{$mb->mail}}" class="social-link c"><i class="fa fa-envelope"></i></a></li>
                        @endif
                            @if (!is_null($mb->twt))
                                <li class="list-inline-item"><a href="{{$mb->twt}}" class="social-link"><i class="fab fa-twitter"></i></a></li>
                            @endif
                            @if (!is_null($mb->link))
                                <li class="list-inline-item"><a href="{{$mb->link}}" class="social-link"><i class="fab fa-linkedin"></i></a></li>
                            @endif
                    </ul>

                </div>
            </div><!-- End -->
            @endforeach
        </div>
    </div><!-- End: Bootstrap 4 - Team Members -->
@endsection
