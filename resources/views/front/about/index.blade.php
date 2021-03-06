@extends('layouts.front.master')
@section('page-content')
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1>{!! $content->header_content_top??'' !!}</h1>
                            <p>{!! $content->header_content_bottom??'' !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-push-6">
                        <div class="desc">
                            <h3>History</h3>
                            <p>{!! $content->history??'' !!}</p>
                        </div>
                        <div class="desc">
                            <h3>Mission &amp; Vission</h3>
                            <p>{!! $content->mission??'' !!}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6">
                        <img class="img-responsive" src="images/img_bg_1.jpg" alt="about">
                    </div>

                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span>Productive Staff</span>
                    <h2>Meet Our Staff</h2>
                    <p>{!! $content->meet??'' !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person1.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
                        <h3>Jean Smith</h3>
                        <strong class="role">Web Designer</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        @php

                            $social_links=Share::load($url, 'About')->services('facebook','twitter','gplus','email');
                            /*$link=Html::link($url, $property->translate(\App::getLocale())->title);*/
                              //Mail content and link.
                            $text='Check it out'.' '.$url;
                            $email_links=Share::load($text, 'About')->services('email');

                            $social_links=array_merge($social_links, $email_links);

                            $social_icons=array('facebook'=>'facebook','twitter'=>'twitter','gplus'=>'google','email'=>'mail');
                        @endphp
                        <ul class="fh5co-social-icons">
                            @foreach($social_links as $key=>$link)
                                <li><a href="{{ $link}}" target="_blank"><i
                                                class="icon-{{$social_icons[$key]}}"></i></a></li>
                            @endforeach
                        </ul>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-google-plus3"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person1.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
                        <h3>Hush Raven</h3>
                        <strong class="role">Front-end Developer</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co-staff">
                        <img src="images/person1.jpg" alt="Free HTML5 Templates by FreeHTML5.co">
                        <h3>Alex King</h3>
                        <strong class="role">Back-end Developer</strong>
                        <p>Quos quia provident consequuntur culpa facere ratione maxime commodi voluptates id repellat velit eaque aspernatur expedita. Possimus itaque adipisci.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            <li><a href="#"><i class="icon-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection