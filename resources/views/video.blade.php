@extends('layouts.app')

@section('content')
    <main>
        <!-- Start: 2 Videos per Row -->
        <section class="clean-block about-us">
            <div class="container">
                <h1 style="margin-bottom: 25px;">لقاءاتنا</h1>
                <div class="row justify-content-center">


                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{($vid[1]->url)}}" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">{{($vid[1]->name)}}</h4>
                                <p class="card-text">{{($vid[1]->descr)}}كلام عشوائياسم الفيديو</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{($vid[0]->url)}}" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">{{($vid[0]->name)}}</h4>
                                <p class="card-text">{{($vid[0]->descr)}}كلام عشوائياسم الفيديو</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End: 2 Videos per Row -->
        <!-- Start: 3 Videos per Row -->
        <section class="clean-block about-us">
            <div class="container">
                <h6 style="margin-bottom: 25px;">&nbsp;</h6>
                <div class="row justify-content-center">
                    @foreach($vid2 as $vidS)
                    <div class="col-sm-12 col-md-6 col-lg-4" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{$vidS->url}}" style="height: 200px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">{{$vidS->name}}</h4>
                                <p class="card-text">{{$vidS->descr}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End: 3 Videos per Row -->
        <!-- Start: 2 Videos per Row -->
        <section class="clean-block about-us py-3">
            <div class="container">
                <h6 style="margin-bottom: 25px;">&nbsp;</h6>
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{($vid[2]->url)}}" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">{{($vid[2]->name)}}</h4>
                                <p class="card-text">{{($vid[2]->descr)}}كلام عشوائياسم الفيديو</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6" style="border-style: none;">
                        <div class="card clean-card text-center"><iframe allowfullscreen="" frameborder="0" src="{{($vid[3]->url)}}" style="height: 310px;"></iframe>
                            <div class="card-body info">
                                <h4 class="card-title">{{($vid[3]->name)}}</h4>
                                <p class="card-text">{{($vid[3]->descr)}}كلام عشوائياسم الفيديو</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End: 2 Videos per Row -->
    </main><!-- End: Videos in rows, 2 and 3 videos per row -->
@endsection
