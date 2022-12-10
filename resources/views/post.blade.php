@extends('layouts.app')

@section('content')
    <div data-bss-parallax-bg="true" class="backgroundimages"
         style="background-image:url({{Storage::url(str_replace('\\', '/', $pst[0]->imageHeader))}})"></div><!-- End: Background Image - Parallax - No Text -->
    <!-- Start: article -->
    <article class="py-3" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p><span style="color: rgb(0, 0, 0);">{!! $pst[0]->longDesc !!}</span><br>

                    </p>

                </div>
            </div>
        </div>
    </article><!-- End: article -->
    <!-- Start: Back-Next Nav -->

    <div class="container py-3">
        <a class="btn btn-outline-primary @if($pst[0]->id ==  $arcID[0]->id) disabled @endif" role="button" href="{{url('post/'.$pst[0]->id+1)}}">← التالي</a>

        <a class="btn btn-outline-primary float-end  @if($pst[0]->id ==1) disabled @endif" role="button" href="{{url('post/'.$pst[0]->id-1)}}">السابق →</a>
    </div><!-- End: Back-Next Nav -->

@endsection
