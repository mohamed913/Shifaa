
{{--@foreach($users as $user)--}}
{{--    <div>--}}
{{--<img src="{{$user->avatar}}">--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--<img src="{{Auth::user()->avatar}}">--}}
{{--<img src="{{Auth::user()->DoctorCertificate}}">--}}

{{--<form action="/profiles/{{$user->id}}" method="post" enctype="multipart/form-data">--}}
{{--    @php--}}
{{--    dd($user->id);--}}
{{--    @endphp--}}
{{--    {{ method_field('PUT') }}--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" id="">--}}
{{--    <input type="email" name="email" id="" value="{{$user->email}}">--}}
{{--    <input type="file" name="avatar" id="">--}}
{{--    <input type="submit" id="">--}}

{{--</form>--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">--}}
{{--    <link href="{{ asset('css/preview.css') }}" rel="stylesheet">--}}

{{--    <link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">--}}
{{--    <div class="container main-secction">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12 col-sm-12 col-xs-12 image-section">--}}
{{--                <img src="http://nicesnippets.com/demo/Nature-Night-Sky-Stars-Blurred-Light-Show-Mountains-WallpapersByte-com-1920x1080.jpg">--}}
{{--            </div>--}}
{{--            <div class="row user-left-part">--}}
{{--                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">--}}
{{--                    <div class="row ">--}}
{{--                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">--}}
{{--                            <img src="http://nicesnippets.com/demo/1499344631_malecostume.png">--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">--}}
{{--                            <button class="btn btn-defult follow "><i class="fa fa-user-o" aria-hidden="true"></i> FOLLOW</button>--}}
{{--                        </div>--}}
{{--                        <div class="row user-detail-row">--}}
{{--                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">--}}
{{--                                <div class="border"></div>--}}
{{--                                <p>FOLLOWER</p>--}}
{{--                                <span>320</span>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-right">--}}
{{--                                <div class="border"></div>--}}
{{--                                <p>FOLLOWING</p>--}}
{{--                                <span>147</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12 user-detail-section2">--}}
{{--                            <div class="border"></div>--}}
{{--                            <p>PERFORMANCE</p>--}}
{{--                            <span>56 <small>and 42 review</small></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">--}}
{{--                    <div class="row profile-right-section-row">--}}
{{--                        <div class="col-md-12 profile-header">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">--}}
{{--                                    <h1>Mario Mendez</h1>--}}
{{--                                    <p>Senior Architect</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">--}}
{{--                                    <button class="btn btn-info req-btn"> REQUEST</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-8  profile-tag-section text-center">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-3 col-sm-3 profile-tag">--}}
{{--                                            <a href="#"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></a>--}}
{{--                                            <p>info</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 col-sm-3 profile-tag">--}}
{{--                                            <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i></a>--}}
{{--                                            <p>feed</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 col-sm-3 profile-tag">--}}
{{--                                            <a href="#"><i class="fa fa-id-card-o" aria-hidden="true"></i></a>--}}
{{--                                            <p>Agenda</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-3 col-sm-3 profile-tag">--}}
{{--                                            <a href="#"><i class="fa fa-paperclip" aria-hidden="true"></i></a>--}}
{{--                                            <p>Resume</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-4 img-main-rightPart">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-12">--}}
{{--                                            <div class="row image-right-part">--}}
{{--                                                <div class="col-md-6 pull-left image-right-detail">--}}
{{--                                                    <p>TODAYHIGHLIGHT</p>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-md-6 pull-right image-right-detail text-right">--}}
{{--                                                    <span><a href="http://nicesnippets.com">more</a></span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div  class="col-md-12 image-right">--}}
{{--                                            <img src="http://nicesnippets.com/demo/Nature-Night-Sky-Stars-Blurred-Light-Show-Mountains-WallpapersByte-com-1920x1080.jpg">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-12 image-right-detail-section2">--}}
{{--                                            <p>Urban planning consulation</p>--}}
{{--                                            <span>Lorem ipsum dolor sit amet, consectetur adipisibj.</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
