@extends('frontend.layouts.common')
@section('title','Home || DAC-Rapide')

@section('content')
     <!-- Start Slider -->
     <div id="slider" style="position: relative;">
        <div class="tp-banner-container">
            <div class="fullwidthbanner-4">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="300"
                        data-thumb="{{ asset('assets/frontend/img/home4/slider/bg3.jpg') }}" data-saveperformance="off" data-title="Slide3">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/img/home4/slider/bg3.jpg') }}" alt="slidebg1" data-bgposition="center top"
                            data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption largeHeadingBlack h1 customin ltr tp-resizeme" data-x="center"
                            data-hoffset="0" data-y="center" data-voffset="-185"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="500" data-easing="Back.easeInOut" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="Back.easeIn"
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                            <h1>IN A LIBRARY</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption largeHeadingBlack global-link-color customin ltr tp-resizeme"
                            data-x="center" data-hoffset="-1" data-y="center" data-voffset="-90"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="1200" data-easing="Back.easeInOut" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="Back.easeIn"
                            style="z-index: 6; max-width: ; max-height: ; white-space: normal;">
                            <h1>SERIOUS ATTENTION</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption detailTextBlack p lfl tp-resizeme" data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="-5" data-speed="1200" data-start="1950"
                            data-easing="easeInOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.1"
                            data-endelementdelay="0.1" data-endspeed="300"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: normal;">
                            <p style="text-align:center;">A small river named Duden flows by their place and
                                supplies<br> it with the necessary regelialia.</p>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfl tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="85" data-speed="1200" data-start="2750" data-easing="easeInOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#'
                                class='readon large'>Buy Now</a>
                        </div>
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="300"
                        data-thumb="{{ asset('assets/frontend/img/home4/slider/bg1.jpg') }}" data-saveperformance="off" data-title="Slide2">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/img/home4/slider/bg1.jpg') }}" alt="darkblurbg" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption largeHeadingWhite h1 customin ltr tp-resizeme" data-x="550"
                            data-y="center" data-voffset="-135"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="700" data-easing="easeInOutExpo" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="Back.easeIn"
                            style="z-index: 5; max-width: auto; max-height: auto; white-space: normal;">
                            <h1>SUCCESS PATH</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption largeHeadingWhite h1 customin ltr tp-resizeme" data-x="550"
                            data-y="center" data-voffset="-49"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="1300" data-easing="Back.easeInOut" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="easeInOutExpo"
                            style="z-index: 6; max-width: ; max-height: ; white-space: normal;">
                            <h1>GROUPWISE STUDY</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfb tp-resizeme" data-x="555" data-hoffset="-450" data-y="center"
                            data-voffset="55" data-speed="1200" data-start="1900" data-easing="easeInOutExpo"
                            data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                            data-endspeed="300"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#'
                                class='readon large'>Buy Now</a>
                        </div>
                    </li>
                    <!-- SLIDE 3 -->
                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="300"
                        data-thumb="{{ asset('assets/frontend/img/home4/slider/bg2.jpg') }}" data-saveperformance="off" data-title="Slide1">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/frontend/img/home4/slider/bg2.jpg') }}" alt="darkblurbg" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption largeHeadingWhite h1 customin customout tp-resizeme" data-x="125"
                            data-y="center" data-voffset="-145"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="500" data-easing="Back.easeInOut" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="Back.easeIn"
                            style="z-index: 5; max-width: ; max-height: ; white-space: normal;">
                            <h1>STUDY BREAK</h1>
                        </div>
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption largeHeading customin customout tp-resizeme" data-x="125" data-y="center"
                            data-voffset="-42"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-speed="1200" data-start="1250" data-easing="Back.easeInOut" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            data-endeasing="Back.easeIn"
                            style="z-index: 6; max-width: auto; max-height: auto; white-space: normal;">
                            <h1>FOR ENTERTAINMENT</h1>
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption lfb tp-resizeme" data-x="125" data-y="center" data-voffset="48"
                            data-speed="1200" data-start="1950" data-easing="easeInOutExpo" data-splitin="none"
                            data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="400"
                            style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href='#'
                                class='readon large'>Buy Now</a>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div>
    <!-- End Slider -->
    <!-- Start Work Proses -->
    <div class="work-proses">
        <div class="container-fluid container-md container-lg">
            <div class="row text-center">
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 p-0">
                    <div class="card">
                        <div class="front">
                            <div class="featured4-one">
                                <i class="fa fa-rocket"></i>
                                <p>VIEW MORE DETAILS</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="featured4-one bac">
                                <i class="fa fa-rocket"></i>
                                <h3>CERTIFICATION</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 p-0">
                    <div class="card">
                        <div class="front">
                            <div class="featured4-one fe-two">
                                <i class="fa fa-check"></i>
                                <p>VIEW MORE DETAILS</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="featured4-one fe-two bac">
                                <i class="fa fa-diamond"></i>
                                <h3>CERTIFICATION</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 p-0">
                    <div class="card">
                        <div class="front">
                            <div class="featured4-one fe-three">
                                <i class="fa fa-book"></i>
                                <p>VIEW MORE DETAILS</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="featured4-one fe-three bac">
                                <i class="fa fa-book"></i>
                                <h3>CERTIFICATION</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 p-0">
                    <div class="card">
                        <div class="front">
                            <div class="featured4-one fe-four">
                                <i class="fa fa-graduation-cap"></i>
                                <p>VIEW MORE DETAILS</p>
                            </div>
                        </div>
                        <div class="back">
                            <div class="featured4-one fe-four bac">
                                <i class="fa fa-graduation-cap"></i>
                                <h3>CERTIFICATION</h3>
                                <p>Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xs-none col-sm-4 col-md-4 col-lg-4">
                    <!-- empty spacer -->
                </div>
            </div>
            <div class="row flex-md-row flex-sm-column-reverse flex-xs-column-reverse">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 px-md-5 px-lg-5 px-sm-5 px-xs-5 py-md-5 py-lg-5 py-sm-3 py-xs-3"
                    style="
                        background: #20c997;">
                    <h4 class="h2">Who we are?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia numquam dolorem totam
                        praesentium ipsum, quae vero necessitatibus earum. Possimus.</br> Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Voluptatem, modi!</p>

                    <button class="c-btn d-flex gap-3 mt-4 py-3 px-4"><a class="text-black" href="/aboutus.html">More
                            about us <i class="fa-solid fa-circle-right"></i></a></button>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 p-0">
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/A8rFSwnJJyE"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work Proses -->
    <!-- Search formator -->
    <div class="search-formator">
        <div class="row text-center my-4">
            <div class="search-sec">
                <div class="container">
                    <form action="#" method="post" novalidate="novalidate">
                        <div class="row py-lg-5 py-md-5 py-sm-2 py-xs-1">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="card">
                                    <div class="row card-body p-0" style="
                                            border: 1px solid #69ffd3;
                                            padding: .8em 1em !important;
                                            border-radius: 1.2em;">
                                        <!-- <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6"></div> -->
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 py-2 py-md-4">
                                            <input type="text" class="form-control search-slt"
                                                placeholder="Search By Keywords">
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 py-2 py-md-4">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>All Country</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 py-2 py-md-4">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>All type of CTD</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                                <option>Example one</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 d-flex align-items-center">
                                            <button type="button" class="btn btn-danger wrn-btn" style="background: #20c997;
                                                border-radius: 0 10px 10px 0; font-size: 1.2rem;">Click to find your
                                                CTD</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    <div class="d-flex justify-content-around align-items-center py-sm-4 py-5 py-lg-4 py-md-4 gap-3">
                        <button class="c-btn d-flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 501.56" width="20px"
                                height="20px">
                                <path
                                    d="M15.47 366.66h481.06c8.52 0 15.47 6.95 15.47 15.47v103.95c0 8.52-6.95 15.48-15.47 15.48H15.47C6.96 501.56 0 494.6 0 486.08V382.13c0-8.52 6.96-15.47 15.47-15.47zM210.58 154.5H159.6a8.986 8.986 0 0 1-5.05-1.6c-4.01-2.78-5-8.29-2.21-12.3L247.73 3.78c.58-.81 1.29-1.54 2.14-2.14 3.97-2.83 9.48-1.9 12.31 2.07l97.02 136.27a8.829 8.829 0 0 1 2.05 5.67c0 4.88-3.96 8.85-8.85 8.85h-50.96v142.69c0 4.71-2.29 8.9-5.97 11.79-3.06 2.42-7.18 3.93-11.61 3.93h-55.7c-4.42 0-8.55-1.5-11.62-3.92-3.68-2.89-5.96-7.06-5.96-11.8V154.5z" />
                            </svg>
                            Upload your
                            CTD</button>
                        <button class="c-btn d-flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 501.59" width="20px"
                                height="20px">
                                <path
                                    d="M15.47 366.69h481.06c8.51 0 15.47 6.96 15.47 15.47v103.96c0 8.51-6.96 15.47-15.47 15.47H15.47C6.96 501.59 0 494.63 0 486.12V382.16c0-8.51 6.96-15.47 15.47-15.47zM159.6 158.41h50.98V15.72c0-4.75 2.28-8.92 5.95-11.8C219.61 1.51 223.74 0 228.17 0h55.69c4.43 0 8.55 1.51 11.61 3.93 3.67 2.88 5.97 7.07 5.97 11.79v142.69h50.96c4.89 0 8.85 3.96 8.85 8.85 0 2.15-.77 4.13-2.05 5.66l-97.02 136.29c-2.83 3.97-8.34 4.9-12.31 2.07a8.694 8.694 0 0 1-2.13-2.15l-95.4-136.83c-2.79-4.01-1.79-9.52 2.21-12.3a8.823 8.823 0 0 1 5.05-1.59z" />
                            </svg>Download your
                            CTD</button>
                    </div>

                    <div class="row text-center">
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="count-box">
                                <svg width="50px" height="50px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 122.88 122.88"
                                    style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                    <g>
                                        <path
                                            d="M61.44,0c8.32,0,16.25,1.66,23.5,4.66l0.11,0.05c7.47,3.11,14.2,7.66,19.83,13.3l0,0c5.66,5.65,10.22,12.42,13.34,19.95 c3.01,7.24,4.66,15.18,4.66,23.49c0,8.32-1.66,16.25-4.66,23.5l-0.05,0.11c-3.12,7.47-7.66,14.2-13.3,19.83l0,0 c-5.65,5.66-12.42,10.22-19.95,13.34c-7.24,3.01-15.18,4.66-23.49,4.66c-8.31,0-16.25-1.66-23.5-4.66l-0.11-0.05 c-7.47-3.11-14.2-7.66-19.83-13.29L18,104.87C12.34,99.21,7.78,92.45,4.66,84.94C1.66,77.69,0,69.76,0,61.44s1.66-16.25,4.66-23.5 l0.05-0.11c3.11-7.47,7.66-14.2,13.29-19.83L18.01,18c5.66-5.66,12.42-10.22,19.94-13.34C45.19,1.66,53.12,0,61.44,0L61.44,0z M16.99,94.47l0.24-0.14c5.9-3.29,21.26-4.38,27.64-8.83c0.47-0.7,0.97-1.72,1.46-2.83c0.73-1.67,1.4-3.5,1.82-4.74 c-1.78-2.1-3.31-4.47-4.77-6.8l-4.83-7.69c-1.76-2.64-2.68-5.04-2.74-7.02c-0.03-0.93,0.13-1.77,0.48-2.52 c0.36-0.78,0.91-1.43,1.66-1.93c0.35-0.24,0.74-0.44,1.17-0.59c-0.32-4.17-0.43-9.42-0.23-13.82c0.1-1.04,0.31-2.09,0.59-3.13 c1.24-4.41,4.33-7.96,8.16-10.4c2.11-1.35,4.43-2.36,6.84-3.04c1.54-0.44-1.31-5.34,0.28-5.51c7.67-0.79,20.08,6.22,25.44,12.01 c2.68,2.9,4.37,6.75,4.73,11.84l-0.3,12.54l0,0c1.34,0.41,2.2,1.26,2.54,2.63c0.39,1.53-0.03,3.67-1.33,6.6l0,0 c-0.02,0.05-0.05,0.11-0.08,0.16l-5.51,9.07c-2.02,3.33-4.08,6.68-6.75,9.31C73.75,80,74,80.35,74.24,80.7 c1.09,1.6,2.19,3.2,3.6,4.63c0.05,0.05,0.09,0.1,0.12,0.15c6.34,4.48,21.77,5.57,27.69,8.87l0.24,0.14 c6.87-9.22,10.93-20.65,10.93-33.03c0-15.29-6.2-29.14-16.22-39.15c-10-10.03-23.85-16.23-39.14-16.23 c-15.29,0-29.14,6.2-39.15,16.22C12.27,32.3,6.07,46.15,6.07,61.44C6.07,73.82,10.13,85.25,16.99,94.47L16.99,94.47L16.99,94.47z" />
                                    </g>
                                </svg>
                                <h2><span class="counter">75,000</span></h2>
                                <p>Downloaded.</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="count-box">
                                <svg width="50px" height="50px" xmlns="http://www.w3.org/2000/svg"
                                    shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                    image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                    viewBox="0 0 512 279.07">
                                    <path
                                        d="M10.53 258.07h45.62c-3.85-1-6.75-4.56-6.75-8.71V8.99C49.4 4.06 53.46 0 58.39 0H435.3c4.93 0 8.99 4.06 8.99 8.99v72.85c-4.58-3.42-9.3-5.98-14.13-7.78V14.08H64.78V246.8h232.1c-2.23 6.26-3.97 13.69-5.16 22.54l-.39 2.44c-.23 1.86-.38 3.44-.38 4.46 0 .95.04 1.9.13 2.83H10.53c-5.8 0-10.53-4.73-10.53-10.53 0-5.75 4.73-10.47 10.53-10.47zM361.51 131.1c24.99-30.89 53.8-47.69 75.44-20.21 24.85 1.3 35.51 39.04 18.41 57.65 1.22-.01 2.38.24 3.38.78 1.3.71 2.28 1.87 2.8 3.51.49 1.62.49 3.72-.21 6.31l-.11.33c-.29.88-.56 2.03-.84 3.21-1.14 4.97-2.4 10.44-8.06 10.13l-.91-.1c-.13 6.48-2.18 10.76-5.31 14.58-1 1.22-2.38 2.19-3.32 3.58-3.43 5.12-2.08 6.98 3 11.31 5.63 4.82 14.6 7.95 17.44 8.81 20.9 6.36 43.57 3.96 48.49 42.92.18.77.29 1.54.29 2.33 0 1.54-1.25 2.79-2.8 2.79H319.87c-1.55 0-2.8-1.25-2.8-2.79 0-.8.11-1.59.3-2.36 4.49-35.52 22.84-36.14 42.6-41.3 5.9-1.54 16.66-4.82 22.94-10.32 3.44-3.02 5.53-6.73 4.7-11.18-4.77-4.43-8.44-9.21-9.27-18.33l-.57.01c-1.33-.02-2.61-.32-3.8-1-2.63-1.5-4.07-4.36-4.77-7.63-.88-4.15-.59-9.07-.16-12.17l.16-.6c.92-2.59 2.08-3.98 3.54-4.58-.66-12.32 1.43-31.85-11.23-35.68zM233.24 262h29.58c6.68 0 6.68 10.11 0 10.11h-29.58c-6.68 0-6.71-10.11 0-10.11z" />
                                </svg>
                                <h2><span class="counter">12500</span></h2>
                                <p>Active public officers!</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="count-box">
                                <svg height="50px" weight="50px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" width="122.88px" height="122.88px" viewBox="0 0 122.88 122.88"
                                    enable-background="new 0 0 122.88 122.88" xml:space="preserve">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M61.439,0c33.928,0,61.44,27.513,61.44,61.439c0,33.929-27.513,61.44-61.44,61.44 C27.512,122.88,0,95.368,0,61.439C0,27.513,27.512,0,61.439,0L61.439,0z M78.314,6.495c20.618,6.853,36.088,24.997,39.068,47.101 l-1.953-0.209c-0.347,1.495-0.666,1.533-0.666,3.333c0,1.588,2,2.651,2,6.003c0,0.898-2.109,2.694-2.202,3.007l-3.132-3.674v4.669 l-0.476-0.018l-0.844-8.615l-1.749,0.551l-2.081-6.409l-6.855,7.155l-0.082,5.239l-2.238,1.501l-2.377-13.438l-1.422,1.039 l-3.22-4.345l-4.813,0.143l-1.844-2.107l-1.887,0.519l-3.712-4.254l-0.717,0.488l2.3,5.878h2.669v-1.334h1.333 c0.962,2.658,2.001,1.084,2.001,2.669c0,5.547-6.851,9.625-11.339,10.669c0.24,1.003,0.147,2.003,1.333,2.003 c2.513,0,1.264-0.44,4.003-0.667c-0.127,5.667-6.5,12.435-9.221,16.654l1.218,8.69c0.321,1.887-3.919,3.884-5.361,6.009 l0.692,3.329l-1.953,0.789c-0.342,3.42-3.662,7.214-7.386,7.214h-4c0-4.683-3.336-11.366-3.336-14.675 c0-2.81,1.333-3.188,1.333-6.669c0-3.216-3.333-7.828-3.333-8.67v-5.336h-2.669c-0.396-1.487-0.154-2-2-2h-0.667 c-2.914,0-2.422,1.333-5.336,1.333h-2.669c-2.406,0-6.669-7.721-6.669-8.671v-8.003c0-3.454,3.161-7.214,5.336-8.672v-3.333 l3.002-3.052l1.667-0.284c3.579,0,3.154-2,5.336-2H49.4v4.669L56,43.532l0.622-2.848c2.991,0.701,3.769,2.032,7.454,2.032h1.333 c2.531,0,2.667-3.358,2.667-6.002l-5.343,0.528l-2.324-5.064l-2.311,0.615c0.415,1.812,0.642,1.059,0.642,2.587 c0,0.9-0.741,1-1.335,1.334l-2.311-5.865l-4.969-3.549l-0.66,0.648l4.231,4.452c-0.562,1.597-0.628,6.209-2.961,2.979l2.182-1.05 l-5.438-5.699l-3.258,1.274l-3.216,3.08c-0.336,2.481-1.012,3.729-3.608,3.729c-1.728,0-0.685-0.447-3.336-0.667v-6.669h6.002 l-1.945-4.442l-0.721,0.44V24.04l9.747-4.494c-0.184-1.399-0.408-0.649-0.408-2.175c0-0.091,0.655-1.322,0.667-1.336l2.521,1.565 l-0.603-2.871l-3.889,0.8l-0.722-3.49c3.084-1.624,9.87-7.34,12.028-7.34h2.002c2.107,0,7.751,2.079,8.669,3.333L62.057,7.49 l3.971,3.271l0.381-1.395l2.964-0.812l0.036-1.855h1.336v2L78.314,6.495L78.314,6.495z M116.963,71.835 c-0.154,0.842-0.324,1.676-0.512,2.504l-0.307-2.152L116.963,71.835L116.963,71.835z M115.042,79.398 c-0.147,0.446-0.297,0.894-0.455,1.336h-0.49v-1.336H115.042L115.042,79.398z M11.758,93.18 c-3.624-5.493-6.331-11.641-7.916-18.226l10.821,5.218l0.055,3.229c0,1.186-2.025,3.71-2.667,4.669L11.758,93.18L11.758,93.18z" />
                                    </g>
                                </svg>
                                <h2 class="counter">28</h2>
                                <p>Countries!</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                            <div class="count-box count-box-border">
                                <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                    text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                    fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 441 512.02" height="50px"
                                    weight="50px">
                                    <path
                                        d="M324.87 279.77c32.01 0 61.01 13.01 82.03 34.02 21.09 21 34.1 50.05 34.1 82.1 0 32.06-13.01 61.11-34.02 82.11l-1.32 1.22c-20.92 20.29-49.41 32.8-80.79 32.8-32.06 0-61.1-13.01-82.1-34.02-21.01-21-34.02-50.05-34.02-82.11s13.01-61.1 34.02-82.1c21-21.01 50.04-34.02 82.1-34.02zM243.11 38.08v54.18c.99 12.93 5.5 23.09 13.42 29.85 8.2 7.01 20.46 10.94 36.69 11.23l37.92-.04-88.03-95.22zm91.21 120.49-41.3-.04c-22.49-.35-40.21-6.4-52.9-17.24-13.23-11.31-20.68-27.35-22.19-47.23l-.11-1.74V25.29H62.87c-10.34 0-19.75 4.23-26.55 11.03-6.8 6.8-11.03 16.21-11.03 26.55v336.49c0 10.3 4.25 19.71 11.06 26.52 6.8 6.8 16.22 11.05 26.52 11.05h119.41c2.54 8.79 5.87 17.25 9.92 25.29H62.87c-17.28 0-33.02-7.08-44.41-18.46C7.08 432.37 0 416.64 0 399.36V62.87c0-17.26 7.08-32.98 18.45-44.36C29.89 7.08 45.61 0 62.87 0h173.88c4.11 0 7.76 1.96 10.07 5l109.39 118.34c2.24 2.43 3.34 5.49 3.34 8.55l.03 119.72c-8.18-1.97-16.62-3.25-25.26-3.79v-89.25zm-229.76 54.49c-6.98 0-12.64-5.66-12.64-12.64 0-6.99 5.66-12.65 12.64-12.65h150.49c6.98 0 12.65 5.66 12.65 12.65 0 6.98-5.67 12.64-12.65 12.64H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h142.52c3.71 0 7.05 1.6 9.37 4.15a149.03 149.03 0 0 0-30.54 21.14H104.56zm0 72.3c-6.98 0-12.64-5.66-12.64-12.65 0-6.98 5.66-12.64 12.64-12.64h86.2c-3.82 8.05-6.95 16.51-9.29 25.29h-76.91zm187.98 17.13 20.56 19.44 41.38-42.02c3.86-3.92 6.27-7.05 11.05-2.17l15.45 15.82c5.06 5.01 4.8 7.94.01 12.63l-59.09 58.07c-10.07 9.88-8.33 10.51-18.54.34l-36.84-36.62c-2.1-2.3-1.88-4.63.42-6.96l17.93-18.57c2.72-2.82 4.88-2.64 7.67.04z" />
                                </svg>
                                <h2><span class="counter">12,05,000</span></h2>
                                <p>Downloaded.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Search formator -->
    <!-- working process -->
    <div class="accountent py-md-0 py-sm-3 py-lg-0">
        <div id="owl-demo" class="off-acc owl-carousel owl-theme">
            <div class="item">
                <div class="container">
                    <h2 style="font-size: 3.2rem;text-align: center;color: #2ecc71;">How It Works!</h2>
                    <div class="row d-flex flex-row flex-md-row col-lg-row flex-sm-column">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
                            <div class="card mb-3 d-flex  flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg width="40px" height="40px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 122.88 122.88"
                                        style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M61.44,0c8.32,0,16.25,1.66,23.5,4.66l0.11,0.05c7.47,3.11,14.2,7.66,19.83,13.3l0,0c5.66,5.65,10.22,12.42,13.34,19.95 c3.01,7.24,4.66,15.18,4.66,23.49c0,8.32-1.66,16.25-4.66,23.5l-0.05,0.11c-3.12,7.47-7.66,14.2-13.3,19.83l0,0 c-5.65,5.66-12.42,10.22-19.95,13.34c-7.24,3.01-15.18,4.66-23.49,4.66c-8.31,0-16.25-1.66-23.5-4.66l-0.11-0.05 c-7.47-3.11-14.2-7.66-19.83-13.29L18,104.87C12.34,99.21,7.78,92.45,4.66,84.94C1.66,77.69,0,69.76,0,61.44s1.66-16.25,4.66-23.5 l0.05-0.11c3.11-7.47,7.66-14.2,13.29-19.83L18.01,18c5.66-5.66,12.42-10.22,19.94-13.34C45.19,1.66,53.12,0,61.44,0L61.44,0z M16.99,94.47l0.24-0.14c5.9-3.29,21.26-4.38,27.64-8.83c0.47-0.7,0.97-1.72,1.46-2.83c0.73-1.67,1.4-3.5,1.82-4.74 c-1.78-2.1-3.31-4.47-4.77-6.8l-4.83-7.69c-1.76-2.64-2.68-5.04-2.74-7.02c-0.03-0.93,0.13-1.77,0.48-2.52 c0.36-0.78,0.91-1.43,1.66-1.93c0.35-0.24,0.74-0.44,1.17-0.59c-0.32-4.17-0.43-9.42-0.23-13.82c0.1-1.04,0.31-2.09,0.59-3.13 c1.24-4.41,4.33-7.96,8.16-10.4c2.11-1.35,4.43-2.36,6.84-3.04c1.54-0.44-1.31-5.34,0.28-5.51c7.67-0.79,20.08,6.22,25.44,12.01 c2.68,2.9,4.37,6.75,4.73,11.84l-0.3,12.54l0,0c1.34,0.41,2.2,1.26,2.54,2.63c0.39,1.53-0.03,3.67-1.33,6.6l0,0 c-0.02,0.05-0.05,0.11-0.08,0.16l-5.51,9.07c-2.02,3.33-4.08,6.68-6.75,9.31C73.75,80,74,80.35,74.24,80.7 c1.09,1.6,2.19,3.2,3.6,4.63c0.05,0.05,0.09,0.1,0.12,0.15c6.34,4.48,21.77,5.57,27.69,8.87l0.24,0.14 c6.87-9.22,10.93-20.65,10.93-33.03c0-15.29-6.2-29.14-16.22-39.15c-10-10.03-23.85-16.23-39.14-16.23 c-15.29,0-29.14,6.2-39.15,16.22C12.27,32.3,6.07,46.15,6.07,61.44C6.07,73.82,10.13,85.25,16.99,94.47L16.99,94.47L16.99,94.47z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Create you account & login</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="card mb-3  d-flex flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 501.59" width="40px"
                                        height="40px">
                                        <path
                                            d="M15.47 366.69h481.06c8.51 0 15.47 6.96 15.47 15.47v103.96c0 8.51-6.96 15.47-15.47 15.47H15.47C6.96 501.59 0 494.63 0 486.12V382.16c0-8.51 6.96-15.47 15.47-15.47zM159.6 158.41h50.98V15.72c0-4.75 2.28-8.92 5.95-11.8C219.61 1.51 223.74 0 228.17 0h55.69c4.43 0 8.55 1.51 11.61 3.93 3.67 2.88 5.97 7.07 5.97 11.79v142.69h50.96c4.89 0 8.85 3.96 8.85 8.85 0 2.15-.77 4.13-2.05 5.66l-97.02 136.29c-2.83 3.97-8.34 4.9-12.31 2.07a8.694 8.694 0 0 1-2.13-2.15l-95.4-136.83c-2.79-4.01-1.79-9.52 2.21-12.3a8.823 8.823 0 0 1 5.05-1.59z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Download your CTD</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="card mb-3  d-flex flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 452 512.11" width="40px"
                                        height="40px">
                                        <path
                                            d="M336.47 255.21h64.36v-12.46c-3.68-13.63-9.54-22.87-17.13-28.49-7.59-5.61-17.43-8.01-28.98-7.93l-263.96.06c-6.5 0-11.76-5.27-11.76-11.76 0-6.5 5.26-11.76 11.76-11.76l263.65.03c16.59-.16 31.23 3.62 43.25 12.53 1.08.8 2.14 1.64 3.17 2.52v-7.07c0-10.98-4.53-21.02-11.82-28.31-7.23-7.29-17.25-11.8-28.29-11.8h-8.49l-1.09-.05-4.15 15.56h-28.52l16.92-63.47c-14.22-3.8-22.7-18.5-18.89-32.72l-94.11-25.21c-3.81 14.21-18.5 22.71-32.7 18.9l-27.63 102.5h-29.41L177.4 0l199.7 53.51-19.69 73.73h3.31c17.45 0 33.36 7.19 44.9 18.72 11.56 11.51 18.73 27.45 18.73 44.92v64.99c6.79 1.35 12.86 4.71 17.57 9.42 6.21 6.21 10.08 14.81 10.08 24.28v77.35c0 9.87-4.04 18.85-10.52 25.32-4.63 4.63-10.53 8.02-17.13 9.57v46.66c0 17.46-7.18 33.39-18.72 44.93l-.74.68c-11.5 11.13-27.11 18.03-44.17 18.03H63.63c-17.47 0-33.4-7.17-44.94-18.7C7.17 481.89 0 465.98 0 448.47V190.88c0-17.52 7.16-33.43 18.68-44.95 11.52-11.52 27.44-18.69 44.95-18.69h37.12l.16.01L130.46 17.5l28.19 7.55-38.73 141.23H90.4l4.18-15.51H63.63c-11.01 0-21.04 4.52-28.32 11.79-7.27 7.27-11.79 17.31-11.79 28.32v257.59c0 11.01 4.53 21.03 11.81 28.3 7.28 7.29 17.32 11.82 28.3 11.82h297.09c10.73 0 20.54-4.3 27.74-11.25l.54-.58c7.29-7.28 11.83-17.32 11.83-28.29v-45.71h-64.36c-19.88 0-37.96-8.14-51.02-21.2l-1.23-1.35c-12.36-13-19.98-30.52-19.98-49.68v-3.1c0-19.79 8.13-37.83 21.21-50.94l.13-.13c13.1-13.05 31.12-21.15 50.89-21.15zm-95.71-93.06c17.19 4.6 34.89-5.6 39.49-22.8 4.61-17.19-5.61-34.89-22.8-39.49-17.2-4.6-34.9 5.6-39.5 22.8-4.6 17.19 5.62 34.88 22.81 39.49zM362.3 309.07l.06.05c10.93 10.96 10.9 28.79-.02 39.74l-.05.06c-10.96 10.93-28.79 10.9-39.75-.02l-.05-.05c-10.93-10.96-10.9-28.79.02-39.75l.05-.05c10.96-10.93 28.79-10.91 39.74.02z" />
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Begin to postulate!</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>

                            </div>
                        </div>
                        <div
                            class="col-xs-12 col-md-6 col-lg-6 col-sm-12 d-flex align-items-center justify-content-center">
                            <button class="c-btn" onClick="pressBtn()">Companies</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <h2 style="font-size: 3.2rem;text-align: center;color: #2ecc71;">How It Works!</h2>
                    <div class="row d-flex flex-row flex-md-row col-lg-row flex-sm-column">
                        <div class="col-xs-12 col-md-6 col-lg-6 col-sm-12">
                            <div class="card mb-3 d-flex  flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg width="40px" height="40px" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 122.88 122.88"
                                        style="enable-background:new 0 0 122.88 122.88" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M61.44,0c8.32,0,16.25,1.66,23.5,4.66l0.11,0.05c7.47,3.11,14.2,7.66,19.83,13.3l0,0c5.66,5.65,10.22,12.42,13.34,19.95 c3.01,7.24,4.66,15.18,4.66,23.49c0,8.32-1.66,16.25-4.66,23.5l-0.05,0.11c-3.12,7.47-7.66,14.2-13.3,19.83l0,0 c-5.65,5.66-12.42,10.22-19.95,13.34c-7.24,3.01-15.18,4.66-23.49,4.66c-8.31,0-16.25-1.66-23.5-4.66l-0.11-0.05 c-7.47-3.11-14.2-7.66-19.83-13.29L18,104.87C12.34,99.21,7.78,92.45,4.66,84.94C1.66,77.69,0,69.76,0,61.44s1.66-16.25,4.66-23.5 l0.05-0.11c3.11-7.47,7.66-14.2,13.29-19.83L18.01,18c5.66-5.66,12.42-10.22,19.94-13.34C45.19,1.66,53.12,0,61.44,0L61.44,0z M16.99,94.47l0.24-0.14c5.9-3.29,21.26-4.38,27.64-8.83c0.47-0.7,0.97-1.72,1.46-2.83c0.73-1.67,1.4-3.5,1.82-4.74 c-1.78-2.1-3.31-4.47-4.77-6.8l-4.83-7.69c-1.76-2.64-2.68-5.04-2.74-7.02c-0.03-0.93,0.13-1.77,0.48-2.52 c0.36-0.78,0.91-1.43,1.66-1.93c0.35-0.24,0.74-0.44,1.17-0.59c-0.32-4.17-0.43-9.42-0.23-13.82c0.1-1.04,0.31-2.09,0.59-3.13 c1.24-4.41,4.33-7.96,8.16-10.4c2.11-1.35,4.43-2.36,6.84-3.04c1.54-0.44-1.31-5.34,0.28-5.51c7.67-0.79,20.08,6.22,25.44,12.01 c2.68,2.9,4.37,6.75,4.73,11.84l-0.3,12.54l0,0c1.34,0.41,2.2,1.26,2.54,2.63c0.39,1.53-0.03,3.67-1.33,6.6l0,0 c-0.02,0.05-0.05,0.11-0.08,0.16l-5.51,9.07c-2.02,3.33-4.08,6.68-6.75,9.31C73.75,80,74,80.35,74.24,80.7 c1.09,1.6,2.19,3.2,3.6,4.63c0.05,0.05,0.09,0.1,0.12,0.15c6.34,4.48,21.77,5.57,27.69,8.87l0.24,0.14 c6.87-9.22,10.93-20.65,10.93-33.03c0-15.29-6.2-29.14-16.22-39.15c-10-10.03-23.85-16.23-39.14-16.23 c-15.29,0-29.14,6.2-39.15,16.22C12.27,32.3,6.07,46.15,6.07,61.44C6.07,73.82,10.13,85.25,16.99,94.47L16.99,94.47L16.99,94.47z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Create you account & login</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="card mb-3  d-flex flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 501.56" width="40px"
                                        height="40px">
                                        <path
                                            d="M15.47 366.66h481.06c8.52 0 15.47 6.95 15.47 15.47v103.95c0 8.52-6.95 15.48-15.47 15.48H15.47C6.96 501.56 0 494.6 0 486.08V382.13c0-8.52 6.96-15.47 15.47-15.47zM210.58 154.5H159.6a8.986 8.986 0 0 1-5.05-1.6c-4.01-2.78-5-8.29-2.21-12.3L247.73 3.78c.58-.81 1.29-1.54 2.14-2.14 3.97-2.83 9.48-1.9 12.31 2.07l97.02 136.27a8.829 8.829 0 0 1 2.05 5.67c0 4.88-3.96 8.85-8.85 8.85h-50.96v142.69c0 4.71-2.29 8.9-5.97 11.79-3.06 2.42-7.18 3.93-11.61 3.93h-55.7c-4.42 0-8.55-1.5-11.62-3.92-3.68-2.89-5.96-7.06-5.96-11.8V154.5z" />
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Upload your CTD</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="card mb-3  d-flex flex-row">
                                <div class="col-2 d-flex justify-content-center align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 452 512.11" width="40px"
                                        height="40px">
                                        <path
                                            d="M336.47 255.21h64.36v-12.46c-3.68-13.63-9.54-22.87-17.13-28.49-7.59-5.61-17.43-8.01-28.98-7.93l-263.96.06c-6.5 0-11.76-5.27-11.76-11.76 0-6.5 5.26-11.76 11.76-11.76l263.65.03c16.59-.16 31.23 3.62 43.25 12.53 1.08.8 2.14 1.64 3.17 2.52v-7.07c0-10.98-4.53-21.02-11.82-28.31-7.23-7.29-17.25-11.8-28.29-11.8h-8.49l-1.09-.05-4.15 15.56h-28.52l16.92-63.47c-14.22-3.8-22.7-18.5-18.89-32.72l-94.11-25.21c-3.81 14.21-18.5 22.71-32.7 18.9l-27.63 102.5h-29.41L177.4 0l199.7 53.51-19.69 73.73h3.31c17.45 0 33.36 7.19 44.9 18.72 11.56 11.51 18.73 27.45 18.73 44.92v64.99c6.79 1.35 12.86 4.71 17.57 9.42 6.21 6.21 10.08 14.81 10.08 24.28v77.35c0 9.87-4.04 18.85-10.52 25.32-4.63 4.63-10.53 8.02-17.13 9.57v46.66c0 17.46-7.18 33.39-18.72 44.93l-.74.68c-11.5 11.13-27.11 18.03-44.17 18.03H63.63c-17.47 0-33.4-7.17-44.94-18.7C7.17 481.89 0 465.98 0 448.47V190.88c0-17.52 7.16-33.43 18.68-44.95 11.52-11.52 27.44-18.69 44.95-18.69h37.12l.16.01L130.46 17.5l28.19 7.55-38.73 141.23H90.4l4.18-15.51H63.63c-11.01 0-21.04 4.52-28.32 11.79-7.27 7.27-11.79 17.31-11.79 28.32v257.59c0 11.01 4.53 21.03 11.81 28.3 7.28 7.29 17.32 11.82 28.3 11.82h297.09c10.73 0 20.54-4.3 27.74-11.25l.54-.58c7.29-7.28 11.83-17.32 11.83-28.29v-45.71h-64.36c-19.88 0-37.96-8.14-51.02-21.2l-1.23-1.35c-12.36-13-19.98-30.52-19.98-49.68v-3.1c0-19.79 8.13-37.83 21.21-50.94l.13-.13c13.1-13.05 31.12-21.15 50.89-21.15zm-95.71-93.06c17.19 4.6 34.89-5.6 39.49-22.8 4.61-17.19-5.61-34.89-22.8-39.49-17.2-4.6-34.9 5.6-39.5 22.8-4.6 17.19 5.62 34.88 22.81 39.49zM362.3 309.07l.06.05c10.93 10.96 10.9 28.79-.02 39.74l-.05.06c-10.96 10.93-28.79 10.9-39.75-.02l-.05-.05c-10.93-10.96-10.9-28.79.02-39.75l.05-.05c10.96-10.93 28.79-10.91 39.74.02z" />
                                    </svg>
                                </div>
                                <div class="col-10"
                                    style="display: flex;flex-direction: column;justify-content: center;align-items: start;">
                                    <h4>Began To get Money!</h4>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>

                            </div>
                        </div>
                        <div
                            class="col-xs-12 col-md-6 col-lg-6 col-sm-12 d-flex align-items-center justify-content-center">
                            <button class="c-btn" onClick="pressBtn()">Public
                                Officers</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end working process -->
    <!-- Register and login form -->
    <div class="reg-view reg-popup" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="register-form">
                        <button type="button" class="close">
                            <a class="popup-close" href="javascript:void(0)" onclick="closeReg()">
                            </a></button>
                        <!-- <button class="btn-close"></button> -->
                        <h1>Register a Free Account.</h1>
                        <div class="social-media">
                            <a href="https://www.facebook.com" target="_blank">
                                <div class="social-bg add">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 506.86 506.86" width="40px" height="40px">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1877f2;
                                                }

                                                .cls-2 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <title>facebook-round-color</title>
                                        <path class="cls-1"
                                            d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                        <path class="cls-2"
                                            d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.gmail.com/" target="_blank">
                                <div class="social-bg add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px"
                                        height="40px">
                                        <path fill="#e0e0e0"
                                            d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z" />
                                        <path fill="#d9d9d9"
                                            d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z" />
                                        <path fill="#eee"
                                            d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z" />
                                        <path fill="#e0e0e0"
                                            d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z" />
                                        <path fill="#ca3737"
                                            d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z" />
                                        <path fill="#f5f5f5"
                                            d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z" />
                                        <path fill="#e84f4b"
                                            d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/" targe#logispant="_blank">
                                <div class="social-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                        width="40px" height="40px">
                                        <path
                                            d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                            fill="#0077b5" /></svg>
                                </div>
                            </a>
                        </div>
                        <div class="divider"><span></span><span>OR</span><span></span></div>
                        <div class="main-box">
                            <div class="form-cont">
                                <div class="top-buttons">
                                    <button class="to-signup top-active-button">
                                        Public Officer
                                    </button>
                                    <button class="to-signin">
                                        Bussiness
                                    </button>
                                </div>

                                <div class="form form-signup">
                                    <span>A Public Officer account is an account used to sell call for documents.</span>
                                    <svg class="my-3" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 122.88 108.91" style="enable-background:new 0 0 122.88 108.91"
                                        xml:space="preserve" width="50px" height="50px">
                                        <style type="text/css">
                                            .st0 {
                                                fill-rule: evenodd;
                                                clip-rule: evenodd;
                                            }
                                        </style>
                                        <g>
                                            <path class="st0"
                                                d="M2.79,41.59L61.44,0l58.95,41.59L2.79,41.59L2.79,41.59z M0,102.28h9.08v-6.33h1.32v-3.02l3.85,0V56.7H6.38 v-8.68h110.11v8.68h-7.86v36.23h3.85v3.02l1.32,0v6.33h9.08v6.63H0V102.28L0,102.28z M32.59,95.95h4.44v-3.02l3.85,0V56.7H28.74 v36.23h3.85V95.95L32.59,95.95L32.59,95.95z M59.22,95.95h4.45v-3.02l3.84,0V56.7H55.37v36.23h3.85V95.95L59.22,95.95L59.22,95.95z M85.85,95.95h4.45v-3.02l3.85,0V56.7H82v36.23h3.85V95.95L85.85,95.95L85.85,95.95z M41.69,31.1l19.84-15.22L81.48,31.1H41.69 L41.69,31.1z" />
                                        </g>
                                    </svg>
                                    <div class="form-btn" onclick="poReg()">Create Public Officer Account</div>
                                    <div class="d-flex flex-row pt-3">
                                        <p class="my-0 mx-2">Already Have CTD Account?</p>
                                        <a href="#" class="lined-link to-signin-link">
                                            Sign In</a>
                                    </div>
                                </div>
                                <div class="form form-signin text-center">
                                    <div>A business account is an account used by a company to purchase tender documents
                                        in order to apply
                                        for a public tender.</div>
                                    <svg class="my-3" height="50px" width="50px" id="Layer_1" data-name="Layer 1"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118.79 122.88">
                                        <path
                                            d="M92.42,0a15.48,15.48,0,0,1,11,26.42h0a15.53,15.53,0,0,1-15.13,4l-.9,1.7a34.93,34.93,0,0,1,4.82,4,34.2,34.2,0,0,1,0,48.35l-.74.71,6,7.92a15.18,15.18,0,0,1,5.85-1.15,15.44,15.44,0,0,1,10.94,4.53h0a15.48,15.48,0,1,1-21.88,21.9h0a15.5,15.5,0,0,1-.16-21.74l-5.76-7.56A34.17,34.17,0,0,1,39.21,78.72L29,84a15.47,15.47,0,0,1-2.59,18.44h0a15.48,15.48,0,0,1-21.88,0h0a15.5,15.5,0,0,1,0-21.9l.18-.16a15.46,15.46,0,0,1,20-1.3A1.75,1.75,0,0,1,25,79l11.29-5.87A34.24,34.24,0,0,1,39,42.1L26.9,32.78l-.06,0a15.45,15.45,0,0,1-21.7-.16h0A15.48,15.48,0,1,1,27,10.78h0a15.5,15.5,0,0,1,3.41,16.77,2.82,2.82,0,0,1,.31.21l12.12,9.33,1-1a34.23,34.23,0,0,1,38-7.1l.81-1.53c-.4-.32-.78-.67-1.15-1l-.16-.18a15.45,15.45,0,0,1,.16-21.7h0A15.45,15.45,0,0,1,92.42,0ZM69.24,61.46H66.73a.18.18,0,0,0-.1,0,.13.13,0,0,0,0,.1v5.28a.18.18,0,0,0,0,.1.13.13,0,0,0,.1,0h2.5a.15.15,0,0,0,.1,0,.16.16,0,0,0,0-.1V61.6a.14.14,0,0,0,0-.1.11.11,0,0,0-.09,0ZM53,50.26h8.67V47.77A1.37,1.37,0,0,1,63,46.41H73a1.37,1.37,0,0,1,1.36,1.36v2.49H83a1.93,1.93,0,0,1,1.92,1.93v4.64a42.85,42.85,0,0,1-6.73,3.8A37.35,37.35,0,0,1,71,63V61.18a1.54,1.54,0,0,0-1.55-1.55h-2.9A1.54,1.54,0,0,0,65,61.18V63a37.4,37.4,0,0,1-7-2.36,43.76,43.76,0,0,1-6.91-3.92V52.19A1.95,1.95,0,0,1,53,50.26Zm31.93,9.33V72.2a1.87,1.87,0,0,1-.56,1.35,1.92,1.92,0,0,1-1.36.57H53a1.95,1.95,0,0,1-1.93-1.92V59.47a44.57,44.57,0,0,0,5.87,3.18A39.32,39.32,0,0,0,65,65.3v2a1.57,1.57,0,0,0,.45,1.1,1.54,1.54,0,0,0,1.09.45h2.91A1.54,1.54,0,0,0,71,67.3V65.21l0,.12a39.92,39.92,0,0,0,8.22-2.68,43.93,43.93,0,0,0,5.68-3.06Zm-13-11.32H64.06a.13.13,0,0,0-.12,0,.17.17,0,0,0-.06.12v1.77h8.2V48.44a.17.17,0,0,0-.17-.17ZM82.77,35.61a3,3,0,0,1-.74-.28,3.45,3.45,0,0,1-.75-.55,28.21,28.21,0,1,0,1.49.83Zm27.33,65a9.62,9.62,0,0,0-13.44-.13l-.13.14a9.58,9.58,0,0,0,0,13.56h0a9.59,9.59,0,1,0,13.56-13.56ZM22.27,84.74a9.62,9.62,0,0,0-13.44-.13l-.13.14a9.58,9.58,0,0,0,0,13.56h0a9.58,9.58,0,0,0,13.56,0h0a9.62,9.62,0,0,0,0-13.57Zm.59-69.81A9.59,9.59,0,0,0,9.3,28.5h0a9.62,9.62,0,0,0,13.44.13l.13-.14a9.61,9.61,0,0,0,0-13.56ZM99.2,8.7a9.58,9.58,0,0,0-13.56,0h0a9.61,9.61,0,0,0-.12,13.44l.13.12a9.58,9.58,0,0,0,13.56,0h0a9.61,9.61,0,0,0,0-13.57Z" />
                                    </svg>
                                    <div class="form-btn" onclick="bReg()">Create a Business Account</div>
                                    <br>
                                    <div class="d-flex flex-row">
                                        <p class="my-0 mx-2">Already Have Business Account?</p>
                                        <a href="#" class="lined-link to-signup-link"> Sign In</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clear-fix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            </div>

        </div>
    </div>
    <div class="poRegistration reg-popup" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="register-form">
                        <button type="button" class="close">
                            <a class="popup-close" href="javascript:void(0)" onclick="closeReg()">
                            </a></button>
                        <h1>Register a Free Account.</h1>
                        <div class="social-media">
                            <a href="https://www.facebook.com" target="_blank">
                                <div class="social-bg add">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 506.86 506.86" width="40px" height="40px">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1877f2;
                                                }

                                                .cls-2 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <title>facebook-round-color</title>
                                        <path class="cls-1"
                                            d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                        <path class="cls-2"
                                            d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.gmail.com/" target="_blank">
                                <div class="social-bg add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px"
                                        height="40px">
                                        <path fill="#e0e0e0"
                                            d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z" />
                                        <path fill="#d9d9d9"
                                            d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z" />
                                        <path fill="#eee"
                                            d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z" />
                                        <path fill="#e0e0e0"
                                            d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z" />
                                        <path fill="#ca3737"
                                            d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z" />
                                        <path fill="#f5f5f5"
                                            d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z" />
                                        <path fill="#e84f4b"
                                            d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/" targe#logispant="_blank">
                                <div class="social-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                        width="40px" height="40px">
                                        <path
                                            d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                            fill="#0077b5" /></svg>
                                </div>
                            </a>
                        </div>
                        <div class="divider"><span></span><span>OR</span><span></span></div>
                        <div class="form-bg">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-container">
                                            <h3 class="title">Create a Publlic officer account using your e-mail
                                                address.</h3>
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password">
                                                </div>
                                                <div class="check-terms">
                                                    <input type="checkbox" class="checkbox">
                                                    <span class="check-label">Subscribe to newsletter.</span>
                                                </div>
                                                <div class="check-terms d-flex">
                                                    <input type="checkbox" class="checkbox">
                                                    <span class="check-label">I aggree with <a href="http://">Terms &
                                                            Policy</a> and <a href="#">Privacy Statment</a> of
                                                        DACRapid.</span>
                                                </div>
                                                <span class="signin-link">Already have an account? Click here to <a
                                                        href="javascript:void(0)" onclick="toLogIn()">Login</a></span>
                                                <button class="btn signup">Create Account</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            </div>
        </div>
    </div>
    <div class="bRegistration reg-popup" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="register-form">
                        <button type="button" class="close">
                            <a class="popup-close" href="javascript:void(0)" onclick="closeReg()">
                            </a></button>
                        <h1>Register a Free Account.</h1>
                        <div class="social-media">
                            <a href="https://www.facebook.com" target="_blank">
                                <div class="social-bg add">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 506.86 506.86" width="40px" height="40px">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1877f2;
                                                }

                                                .cls-2 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <title>facebook-round-color</title>
                                        <path class="cls-1"
                                            d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                        <path class="cls-2"
                                            d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.gmail.com/" target="_blank">
                                <div class="social-bg add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px"
                                        height="40px">
                                        <path fill="#e0e0e0"
                                            d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z" />
                                        <path fill="#d9d9d9"
                                            d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z" />
                                        <path fill="#eee"
                                            d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z" />
                                        <path fill="#e0e0e0"
                                            d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z" />
                                        <path fill="#ca3737"
                                            d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z" />
                                        <path fill="#f5f5f5"
                                            d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z" />
                                        <path fill="#e84f4b"
                                            d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/" targe#logispant="_blank">
                                <div class="social-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                        width="40px" height="40px">
                                        <path
                                            d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                            fill="#0077b5" /></svg>
                                </div>
                            </a>
                        </div>
                        <div class="divider"><span></span><span>OR</span><span></span></div>
                        <div class="form-bg">
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-container">
                                            <h3 class="title">Create a Business account using your e-mail
                                                address.</h3>
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email ID</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Confirm Password">
                                                </div>
                                                <div class="check-terms">
                                                    <input type="checkbox" class="checkbox">
                                                    <span class="check-label">Subscribe to newsletter.</span>
                                                </div>
                                                <div class="check-terms d-flex">
                                                    <input type="checkbox" class="checkbox">
                                                    <span class="check-label">I aggree with <a href="http://">Terms &
                                                            Policy</a> and <a href="#">Privacy Statment</a> of
                                                        DACRapid.</span>
                                                </div>
                                                <span class="signin-link">Already have an account? Click here to <a
                                                        href="javascript:void(0)" onclick="toLogIn()">Login</a></span>
                                                <button class="btn signup">Create Account</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
            </div>
        </div>
    </div>
    <div class="logInpopIn reg-popup" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="register-form">
                        <button type="button" class="close">
                            <a class="popup-close" href="javascript:void(0)" onclick="closeReg()">
                            </a></button>
                        <h1>Login</h1>
                        <div class="social-media">
                            <a href="https://www.facebook.com" target="_blank">
                                <div class="social-bg add">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 506.86 506.86" width="40px" height="40px">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #1877f2;
                                                }

                                                .cls-2 {
                                                    fill: #fff;
                                                }
                                            </style>
                                        </defs>
                                        <title>facebook-round-color</title>
                                        <path class="cls-1"
                                            d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z" />
                                        <path class="cls-2"
                                            d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.gmail.com/" target="_blank">
                                <div class="social-bg add">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40px"
                                        height="40px">
                                        <path fill="#e0e0e0"
                                            d="M5.5,40.5h37c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11v26C2,38.933,3.567,40.5,5.5,40.5z" />
                                        <path fill="#d9d9d9"
                                            d="M26,40.5h16.5c1.933,0,3.5-1.567,3.5-3.5V11c0-1.933-1.567-3.5-3.5-3.5h-37C3.567,7.5,2,9.067,2,11L26,40.5z" />
                                        <path fill="#eee"
                                            d="M6.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L6.745,40.5z" />
                                        <path fill="#e0e0e0"
                                            d="M25.745,40.5H42.5c1.933,0,3.5-1.567,3.5-3.5V11.5L18.771,31.616L25.745,40.5z" />
                                        <path fill="#ca3737"
                                            d="M42.5,9.5h-37C3.567,9.5,2,9.067,2,11v26c0,1.933,1.567,3.5,3.5,3.5H7V12h34v28.5h1.5c1.933,0,3.5-1.567,3.5-3.5V11C46,9.067,44.433,9.5,42.5,9.5z" />
                                        <path fill="#f5f5f5"
                                            d="M42.5,7.5H24H5.5C3.567,7.5,2,9.036,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.036,44.433,7.5,42.5,7.5z" />
                                        <path fill="#e84f4b"
                                            d="M43.246,7.582L24,21L4.754,7.582C3.18,7.919,2,9.297,2,11c0,1.206,1.518,2.258,1.518,2.258L24,27.756l20.482-14.497c0,0,1.518-1.053,1.518-2.258C46,9.297,44.82,7.919,43.246,7.582z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="https://www.linkedin.com/" targe#logispant="_blank">
                                <div class="social-bg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 333333 333333"
                                        shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                                        image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                                        width="40px" height="40px">
                                        <path
                                            d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z"
                                            fill="#0077b5" /></svg>
                                </div>
                            </a>
                        </div>
                        <div class="divider"><span></span><span>OR</span><span></span></div>
                        <div class="card px-md-5 px-lg-5 px-sm-3 px-xs-3 py-md-5 py-lg-5 py-sm-3 py-xs-3" id="form1">
                            <div class="form-data" v-if="!submitted">
                                <div class="forms-inputs mb-5"> <span>Email or username</span> <input autocomplete="off"
                                        type="text" v-model="email"
                                        v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}"
                                        v-on:blur="emailBlured = true">
                                    <div class="invalid-feedback">A valid email is required!</div>
                                </div>
                                <div class="forms-inputs mb-5"> <span>Password</span> <input autocomplete="off"
                                        type="password" v-model="password"
                                        v-bind:class="{'form-control':true, 'is-invalid' : !validPassword(password) && passwordBlured}"
                                        v-on:blur="passwordBlured = true">
                                    <div class="invalid-feedback">Password must be 8 character!</div>
                                </div>
                                <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn w-100"
                                        style="background-color: #1abc9c;">Login</button> </div>
                                <span class="signin-link"><a href="#">Forget Your Password?</a></span>
                            </div><br>
                            <span class="signin-link">No Profile Yet? <a href="">Sign Up </a>Now! It's Free.</span>
                        </div>
                        <!-- <div class="success-data" v-else>
                            <div class="text-center d-flex flex-column"> <i class='bx bxs-badge-check'></i> <span class="text-center fs-1">You have been logged in <br> Successfully</span> </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
        </div>
    </div>
    <!-- Start CTD Area -->
    <div class="ctd-area">
        <div class="container">
            <div class="row">
                <div
                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex flex-column justify-content-center arrower1 position-relative py-4 py-md-5 py-lg-5 py-sm-3 py-sm-3 py-xl-5 py-xxl-5 d-flex justify-content-center align-items-center">
                    <h2>New CTD.</h2>
                    <p style="text-align: center;">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Error possimus molestias
                        libero!</p>
                    <div class="mt-lg-5 mt-md-5 mt-sm-3 mt-xs-2">
                        <a href="#"><button class="c-btn">Start Selling.</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 py-md-5 py-lg-5 py-sm-3 py-sm-3 py-xl-5 py-xxl-5">
                    <div class="slider-container">
                        <div class="slick-horizontal">
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#">Single Lot.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD" onclick="prevdata('1')">
                                                <i class="fa-regular fa-eye"></i>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <i class="fa-regular fa-cart-plus"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                                width="30px">
                                            <span>21/05/2022</span>
                                        </div>

                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#" class="multi-lot">3 lots.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <i class="fa-regular fa-eye"></i>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <i class="fa-regular fa-cart-plus"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                            width="30px">
                                        <span>21/05/2022</span>
                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#">Single Lot.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <i class="fa-regular fa-eye"></i>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <i class="fa-regular fa-cart-plus"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                                width="30px">
                                            <span>21/05/2022</span>
                                        </div>

                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#" class="multi-lot">3 lots.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <i class="fa-regular fa-eye"></i>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <i class="fa-regular fa-cart-plus"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                            width="30px">
                                        <span>21/05/2022</span>
                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-md-row-reverse flex-lg-row-reverse">
                <div
                    class="col-xs-12 col-sm-12 col-md-4 col-lg-4 d-flex flex-column justify-content-center arrower2 position-relative py-4 py-md-5 py-lg-5 py-sm-3 py-sm-3 py-xl-5 py-xxl-5 d-flex justify-content-center align-items-center">
                    <h2>Latest Download.</h2>
                    <p style="text-align:center;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aspernatur dolorem porro quasi!
                    </p>
                    <div class="mt-lg-5 mt-md-5 mt-sm-3 mt-xs-2">
                        <a href="#"><button class="c-btn">Start Buying.</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 py-md-5 py-lg-5 py-sm-3 py-sm-3 py-xl-5 py-xxl-5">
                    <div class="slider-container">
                        <div class="slick-horizontal">
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#">Single Lot.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <a href="#"> <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                                width="30px">
                                            <span>21/05/2022</span>
                                        </div>

                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#" class="multi-lot">3 lots.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <a href="#"> <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                            width="30px">
                                        <span>21/05/2022</span>
                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#">Single Lot.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <a href="#"> <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                                width="30px">
                                            <span>21/05/2022</span>
                                        </div>

                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="CTD">
                                    <div class="c-head">
                                        2022-001/MWP-DP/SG
                                    </div>
                                    <div class="c-body">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                                <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                                <span>150 0000 F/CFA</span>
                                                <p class="d-flex align-items-center"><img
                                                        src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                        width="32px" />921 Pages</p>
                                                <a href="#" class="multi-lot">3 lots.</a>
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        <ul>
                                            <li>
                                                <div class="wrapper">
                                                    <div class="icon-wishlist"></div>
                                                </div>
                                            </li>
                                            <li class="previewCTD">
                                                <a href="#"> <i class="fa-regular fa-eye"></i>
                                                </a>
                                            </li>
                                            <li class="shareTo">
                                                <span>
                                                    <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                                </span>
                                            </li>

                                            <li class="cart-modal-toggle">
                                                <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="c-footer">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                            width="30px">
                                        <span>21/05/2022</span>
                                        <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt=""
                                            width="30px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="share-popup">
        <div class="preview-popup-modal modal">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="PreviewCTD bg-white">
                    <div class="container p-0">
                        <div class="card position-relative">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-header d-flex justify-content-center position-relative">
                                        <img class="position-absolute" style="left: 1%; top:20%;"
                                            src="https://cdn-icons-png.flaticon.com/512/630/630592.png"
                                            width="24px"></img>
                                        <span class="fw-bold text-uppercase">2022-001/mesri/sg/dmp</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="preview-card">
                                            <div class="preview-header">
                                                <span>Previewing 6 out of 304 pages.</span>
                                            </div>
                                            <div class="preview-card-body">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati
                                                    est
                                                    atque explicabo quam, laboriosam facere quisquam ad quaerat minima
                                                    quo
                                                    nostrum, omnis eos voluptate voluptates cumque sapiente architecto?
                                                    Quo,
                                                    voluptatum.</p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati
                                                    est
                                                    atque explicabo quam, laboriosam facere quisquam ad quaerat minima
                                                    quo
                                                    nostrum, omnis eos voluptate voluptates cumque sapiente architecto?
                                                    Quo,
                                                    voluptatum.</p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati
                                                    est
                                                    atque explicabo quam, laboriosam facere quisquam ad quaerat minima
                                                    quo
                                                    nostrum, omnis eos voluptate voluptates cumque sapiente architecto?
                                                    Quo,
                                                    voluptatum.</p>

                                            </div>
                                            <div class="preview-footer">
                                                <ul>
                                                    <li>
                                                        <div class="col-md-10 px-0 d-flex align-items-center">
                                                            <i class="fa-regular fa-cart-shopping h-100"></i>
                                                            <span>Purchased the document to apply to the tender.</span>
                                                        </div>
                                                        <span class="col-md-2 px-0">150 000F CFA</span>
                                                    </li>
                                                    <li>
                                                        <div class="col-md-8 px-0 d-flex align-items-center">
                                                            <i class="fa-regular fa-eye h-100"></i>
                                                            <span>Pay to just consult all the document.</span>
                                                        </div>
                                                        <span class="col-md-4 px-0">15 000F CFA</span>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="fa-regular fa-heart"></i>
                                                        <span>Add the document to wishlist.</span>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="fa-solid fa-share-from-square"></i>
                                                        <span>Share the document for more companies.</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                        <div class="cart-one-preview mb-3">
                                            <div class="card-body">
                                                <h3 class="summery-cart">CTD Details</h3>
                                                <ul>
                                                    <li>
                                                        <div class="col-md-10 px-0 d-flex align-items-center">
                                                            <i class="fa-regular fa-cart-shopping h-100"></i>
                                                            <span>Purchased the document to apply to the tender.</span>
                                                        </div>
                                                        <span class="col-md-2 px-0">150 000F CFA</span>
                                                    </li>
                                                    <li>
                                                        <div class="col-md-8 px-0 d-flex align-items-center">
                                                            <i class="fa-regular fa-eye h-100"></i>
                                                            <span>Pay to just consult all the document.</span>
                                                        </div>
                                                        <span class="col-md-4 px-0">15 000F CFA</span>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="fa-regular fa-heart"></i>
                                                        <span>Add the document to wishlist.</span>
                                                    </li>
                                                    <li class="d-flex align-items-center">
                                                        <i class="fa-solid fa-share-from-square"></i>
                                                        <span>Share the document for more companies.</span>
                                                    </li>
                                                </ul>
                                                <div><span class="flagged">
                                                        Download is directly avillable after payment.
                                                    </span></div>
                                                <div class="text-muted">
                                                    <p class="footer-preview">
                                                        <span class="text-white">1436 <i class="fa fa-eye ck"
                                                                aria-hidden="true"></i></span>
                                                    </p>
                                                    <p class="footer-preview">
                                                        <span class="text-white">870 <i
                                                                class="fa-regular fa-cloud-arrow-down"
                                                                aria-hidden="true"></i></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3 seller-user">
                                            <div class="card-header seller">
                                                <h5 class="preview-title">Seller Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="seller-info">
                                                    <div class="row new-ipda-seller">
                                                        <div class="col-md-4 col-4">
                                                            <img src="https://docmerit.com/images/256-512.png"
                                                                class="user-preview-img" alt="userpreviewimage">
                                                            <p class="reputation_badge"></p>
                                                        </div>
                                                        <div class="col-md-8 col-8">
                                                            <p class="username-privew"><a href="#" class="link">Mohamed
                                                                    Yabre </a></p>
                                                            <p class="desc-privew"> 787 documents uploaded</p>
                                                            <p class="desc-privew"> 207 documents sold</p>
                                                            <div class="preview-btn d-flex gap-3 mt-3">
                                                                <a href="#">
                                                                    <button class="comment">
                                                                        <i class="fa fa-comment icko"
                                                                            aria-hidden="true">
                                                                        </i> Send Message
                                                                    </button>
                                                                </a>
                                                                <button type="button" class="follow " id="Unfollow">
                                                                    Unfollow</button>

                                                                <button type="button" class="follow  hide" id="follow">
                                                                    <i class="fa fa-plus icko" aria-hidden="true">
                                                                    </i>
                                                                    Follow
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center card-footer border-0">
                            <a href="" class="">
                                <div class="s-more">Show More.</div>
                            </a>
                        </div>
                    </div>
                    <a class="popup-close PreviewCTDclose" data-dismiss="modal" href="#">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="share-popup2">
        <div class="MultiLotCTD-modal modal">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="MultiLotCTD bg-white">
                    <div class="card position-relative">
                        <div class="card-header d-flex justify-content-between">
                            <img class="" src="https://cdn-icons-png.flaticon.com/512/630/630592.png"
                                width="24px"></img>
                            <span class="fw-bold text-uppercase">2022-001/mesri/sg/dmp</span>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-primary" role="alert">
                                This call for tenders consists of several lots. So
                                choice depends on lots which you would like to apply.
                            </div>
                            <div class="row m-0">
                                <div class="col-7"></div>
                                <div class="col-5"><span
                                        style="display: flex;justify-content: center;padding: .6rem 1rem;border: 1px dashed;color: #40b54f;font-weight: 600;border-radius: .5rem;">100
                                        000F CFA</span></div>
                            </div>
                            <div class="row m-0">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lot-1
                                    </label>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. In quos iusto possimus omnis
                                        praesentium dolorem obcaecati facilis tenetur
                                        ratione qui!</p>
                                    <span class="text-uppercase" style="color: #40b54f;font-weight: 600;">75 000 f
                                        CFA</span>
                                </div>
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lot-2
                                    </label>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. In quos iusto possimus omnis
                                        praesentium dolorem obcaecati facilis tenetur
                                        ratione qui!</p>
                                    <span class="text-uppercase" style="color: #40b54f;font-weight: 600;">75 000 f
                                        CFA</span>
                                </div>
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Lot-3
                                    </label>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. In quos iusto possimus omnis
                                        praesentium dolorem obcaecati facilis tenetur
                                        ratione qui!</p>
                                    <span style="color: #40b54f;font-weight: 600;">75 000 f
                                        CFA</span>
                                </div>
                            </div>

                        </div>
                        <div class="text-center card-footer border-0">
                            <a href="" class="cart-modal-toggle">
                                <div class="btn btn-info">Validate</div>
                            </a>
                        </div>
                    </div>
                    <a class="popup-close MultiLotCTDclose" data-dismiss="modal" href="#">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="share-popup3">
        <div class="share-popup-modal modal">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="f-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="modal-header">
                                <a class="popup-close modal-close modal-toggle" data-dismiss="modal" aria-label="Close"
                                    href="#">
                                </a>
                                <h2 class="modal-heading">Share To...</h2>
                            </div>
                            <div class="popup-share show">
                                <div class="content">
                                    <p>Share this link via</p>
                                    <ul class="icons">
                                        <li>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fab fa-telegram-plane"></i></a>
                                        </li>
                                        <li>
                                            <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site http://www.website.com."
                                                title="Share by Email">
                                                <img
                                                    src="http://png-2.findicons.com/files/icons/573/must_have/48/mail.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="SMS">
                                                <img
                                                    src="https://cdn4.iconfinder.com/data/icons/chat-messages-1/128/Chat_Messages_sms_mobile_phone-512.png">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" title="Share Embed">
                                                <img src="http://simpleicon.com/wp-content/uploads/embed-close.png">
                                            </a>
                                        </li>
                                    </ul>
                                    <p>Or copy link</p>
                                    <div class="field-share">
                                        <img src="https://img.icons8.com/material-rounded/24/000000/link--v1.png" />
                                        <input class="input-share" type="text" readonly value="example.com/share-link">
                                        <button class="button-share">Copy</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="SingleLot-AddToCart">
        <div class="SingleLot-AddToCart-modal modal">
            <div class="modal-overlay modal-toggle"></div>
            <div class="modal-wrapper modal-transition">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-header">
                            <a class="popup-close modal-close" href="#"></a>
                            <h2 class="modal-heading">Item Added to your cart.</h2>
                        </div>
                    </div>
                </div>

                <div class="row m-0 py-4">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 klm">
                        <div class="row bundel_row">
                            <div class="bundle_left_col">
                                <div class="crt_bundlepre"><span class="bundle-doc-image bundle-doc-1"></span><span
                                        class="bundle-doc-image bundle-doc-2"></span><img src="{{ asset('assets/frontend/img/home4/doc.png') }}"
                                        class="search_find_doc" width="140px"></div>
                            </div>
                            <div class="bundle_right_col">
                                <p class="search_heading">2022-008/MESRI/SG/DMP</p>
                                <p class="top-heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere
                                    est commodi natus cum minima, ducimus libero rem.</p>
                            </div>
                        </div>
                        <div class="btn-div"> <a href=""></a><button type="button" class="conshopp"><a href=""><i
                                        class="fa fa-angle-left" aria-hidden="true"></i> Continue Shopping </a></button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="iner-show">
                            <h4 class="shipping">Shopping Cart</h4>
                            <div class="row">
                                <div class="col-md-6">1 items</div>
                                <div class="col-md-6"> $16.45</div>
                            </div> <a href="./carts"><button type="button" class="chekout">Chekout <i
                                        class="fa fa-chevron-circle-right" aria-hidden="true"></i> </button></a>
                        </div>
                    </div>
                </div>
                <div class="row m-0">
                    <div class="col-md-12">
                        <div class="deal-div">
                            <h4>The CTD may also interest you</h4>
                        </div>
                    </div>
                </div>
                <div class="row m-0 py-4">
                    <div class="col-md-6">
                        <div class="CTD">
                            <div class="c-head">
                                2022-001/MWP-DP/SG
                            </div>
                            <div class="c-body">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                        <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                        <span>150 0000 F/CFA</span>
                                        <p class="d-flex align-items-center"><img
                                                src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                width="32px" />921 Pages</p>
                                        <a href="#">Single Lot.</a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <ul>
                                    <li>
                                        <div class="wrapper">
                                            <div class="icon-wishlist"></div>
                                        </div>
                                    </li>
                                    <li class="previewCTD">
                                        <a href="#"> <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li class="shareTo">
                                        <span>
                                            <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                        </span>
                                    </li>

                                    <li class="cart-modal-toggle">
                                        <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-footer">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                        width="30px">
                                    <span>21/05/2022</span>
                                </div>

                                <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt="" width="30px">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="CTD">
                            <div class="c-head">
                                2022-001/MWP-DP/SG
                            </div>
                            <div class="c-body">
                                <div class="row">
                                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                        <img src="{{ asset('assets/frontend/img/home4/doc.png') }}" alt="" width="100%">
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                                        <span>150 0000 F/CFA</span>
                                        <p class="d-flex align-items-center"><img
                                                src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/undefined/external-page-financial-business-and-global-business-flatart-icons-outline-flatarticons.png"
                                                width="32px" />921 Pages</p>
                                        <a href="#" class="multi-lot">3 lots.</a>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                <ul>
                                    <li>
                                        <div class="wrapper">
                                            <div class="icon-wishlist"></div>
                                        </div>
                                    </li>
                                    <li class="previewCTD">
                                        <a href="#"> <i class="fa-regular fa-eye"></i>
                                        </a>
                                    </li>
                                    <li class="shareTo">
                                        <span>
                                            <i class="fa-regular fa-arrow-up-right-from-square"></i>
                                        </span>
                                    </li>

                                    <li class="cart-modal-toggle">
                                        <a href="#"> <i class="fa-regular fa-cart-plus"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="c-footer">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABLElEQVRIid3VzypFURQG8B9uXEoZKCmlUMamhpSpdzDzBJ7Azdib8AzyCBQzUgxE5Lp/FAPn1nHu2veec0f4ag/23mt937f3Pmct/iMaaOOz4mjjsIzA6wjkvfFSJBsPBI7RLeOkgG6W+wNjieBdzFQUaOKkuBidAKYrkidzUgLvIwg0qwjcjyAQ5qQELlR76C4uo42JREIHj1hEbQh5C2d4ijZTX1EPk1jHGuoB8TWuMkMhUldUFsMMDgxYwKZ+50W0cI6HaDP1BrPYwlRgqGiqhiXcCq4qJbCB+dy8jm3sYycTucNHjqeWrfU5ipAvFcs4wFwh5hlHuMnmbzgtEpUpFXsBuWxtLzcPa1eZUrGSiIHVRM5ANHw/VtVe0PGbGk7yzxyAjqDh/H18AZ7aZ5Ip0R3lAAAAAElFTkSuQmCC"
                                    width="30px">
                                <span>21/05/2022</span>
                                <img src="https://img.icons8.com/color/2x/minnesota-flag.png" alt="" width="30px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End CTD Area -->
    <!-- Services -->
    <div class="services py-md-5 py-sm-3 py-lg-5">
        <div class="row">
            <div class="container-fluid d-flex flex-row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #1abc9c;">
                    <h2 class="h2">Our Services!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sunt!</p>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-8 col-xs-8">
                    <div class="ct-box-slider ct-js-box-slider">

                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-calendar"></i><span>View Upcoming Events</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-users"></i><span>Connect with Others</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-ticket"></i><span>Purchase Tickets</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i class="fa fa-plane"></i><span>Book
                                                    a Flight</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-cutlery"></i><span>Dining Reservations</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i class="fa fa-ship"></i><span>Book
                                                    a Cruise</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-graduation-cap"></i><span>Find Tutorials</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-free-code-camp"></i><span>Enroll in Code Camp</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-file-code-o"></i><span>Source Code Descriptions</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-bar-chart"></i><span>Learn About Analytics</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-universal-access"></i><span>Learn About
                                                    Accessibility</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-wpforms"></i><span>Contact Webmaster</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client review -->
    <div class="client-review py-md-5 py-sm-3 py-lg-5">
        <div class="row">
            <div class="d-flex flex-sm-column-reverse flex-column-reverse flex-md-row flex-lg-row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 my-3">
                    <div id="testimonial-slider" class="owl-carousel px-md-5 px-sm-3 px-lg-5">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                    amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <div class="testimonial-info d-flex justify-content-start gap-3">
                                <img src="{{ asset('assets/frontend/img/home4/profile.png') }}" alt="" width="20%">
                                <div>
                                    <h3 class="title">John</h3>
                                    <span class="post">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                    amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <div class="testimonial-info d-flex justify-content-start gap-3">
                                <img src="{{ asset('assets/frontend/img/home4/profile.png') }}" alt="" width="20%">
                                <div>
                                    <h3 class="title">Kelle</h3>
                                    <span class="post">Web Designer</span>
                                </div>
                            </div>

                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                    amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <div class="testimonial-info d-flex justify-content-start gap-3">
                                <img src="{{ asset('assets/frontend/img/home4/profile.png') }}" alt="" width="20%">
                                <div>
                                    <h3 class="title">Steven</h3>
                                    <span class="post">Web Developer</span>
                                </div>
                            </div>

                        </div>

                        <div class="testimonial">
                            <div class="testimonial-content">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent bibendum dolor sit
                                    amet eros imperdiet, sit amet hendrerit nisi vehicula.
                                </p>
                            </div>
                            <div class="testimonial-info d-flex justify-content-start gap-3">
                                <img src="{{ asset('assets/frontend/img/home4/profile.png') }}" alt="" width="20%">
                                <div>
                                    <h3 class="title">Peter</h3>
                                    <span class="post">Web Developer</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #0cca4a;">
                    <h2 class="h2">Clients Testimonial.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sunt!</p>
                    <div class="mt-lg-5 mt-md-5 mt-sm-3 mt-xs-2">
                        <a href="#"><button class="c-btn">Create Testimonial.</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our partner -->
    <div class="partners py-md-5 py-sm-3 py-lg-5">
        <div class="row">
            <div class="container-fluid d-flex flex-row">
                <div class="col-4 col-md-4 col-lg-4 col-sm-12 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #1abc9c;">
                    <h2 class="h2">Our Partners.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sunt!</p>
                </div>
                <div class="col-8 col-md-8 col-lg-8 col-sm-12">
                    <!-- <div class="text-right ct-box-slider__arrows clearfix">
                            <button id="ct-js-box-slider--next" type="button" class="pull-right slick-arrow"><img alt="Arrow Next" src="https://www.solodev.com/assets/action-grid-slider/arrow-next.jpg"></button>
                            <button id="ct-js-box-slider--prev" type="button" class="pull-right slick-arrow"><img alt="Arrow Prev" src="https://www.solodev.com/assets/action-grid-slider/arrow-prev.jpg"></button>
                          </div> -->

                    <div class="ct-box-slider ct-js-box-slider">

                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-calendar"></i><span>View Upcoming Events</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-users"></i><span>Connect with Others</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-ticket"></i><span>Purchase Tickets</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i class="fa fa-plane"></i><span>Book
                                                    a Flight</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-cutlery"></i><span>Dining Reservations</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i class="fa fa-ship"></i><span>Book
                                                    a Cruise</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-graduation-cap"></i><span>Find Tutorials</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-free-code-camp"></i><span>Enroll in Code Camp</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-file-code-o"></i><span>Source Code Descriptions</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-bar-chart"></i><span>Learn About Analytics</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-universal-access"></i><span>Learn About
                                                    Accessibility</span></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4">
                                        <div onclick="location.href='#'" class="ct-box">
                                            <div class="inner" role="presentation"><i
                                                    class="fa fa-wpforms"></i><span>Contact Webmaster</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Package area -->
    <div class="package-area py-md-5 py-sm-3 py-lg-5">
        <div class="container-fluid">
            <div class="row d-flex flex-sm-column-reverse flex-column-reverse flex-md-row flex-lg-row">
                <div class="col-xs-12 col-md-8 col-lg-8 col-sm-12">
                    <section class="p-0">
                        <div class="pricing-plan mrgt15x mrgb15x">
                            <div class="pricing-content text-center">
                                <div class="plan-option">
                                    <ul class="nav nav-pills">
                                        <li class="active"><a style="border-radius: 5rem 0 0 5rem;" data-toggle="tab"
                                                href="#monthly" aria-expanded="true">MONTHLY</a></li>
                                        <li><span class="or-crircle">OR</span></li>
                                        <li><a style="border-radius: 0 5rem 5rem 0;" data-toggle="tab"
                                                href="#yearly">YEARLY</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content mrgt8x">
                                    <div id="monthly" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <h5 class="plan-name letterspace4x">BASIC</h5>
                                                            <p>Perfectly Suitable For Business</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>10</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>MONTH</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="transform: scale(1.08);" class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <div class="new-tag">
                                                                <span>NEW!</span>
                                                            </div>
                                                            <h5 class="plan-name letterspace4x">POPULAR</h5>
                                                            <p>Best Plan for Professionals Users</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>39</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>MONTH</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a style="background: #e54c4c !important;width: 100%;border-radius: 1.5rem; color: #ffffff;"
                                                                href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <h5 class="plan-name letterspace4x">PREMIUM</h5>
                                                            <p>Power User Select this Plan</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>79</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>MONTH</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="yearly" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <h5 class="plan-name letterspace4x">BASIC</h5>
                                                            <p>Perfectly Suitable For Business</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>80</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>YEAR</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <div class="new-tag">
                                                                <span>NEW!</span>
                                                            </div>
                                                            <h5 class="plan-name letterspace4x">POPULAR</h5>
                                                            <p>Best Plan for Professionals Users</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>39</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>YEAR</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="outer-border">
                                                    <div class="pricing-table">
                                                        <div class="upper-detail">
                                                            <h5 class="plan-name letterspace4x">PREMIUM</h5>
                                                            <p>Power User Select this Plan</p>
                                                            <div class="plan-price">
                                                                <h1><sup>$</sup>79</h1>
                                                                <sub><span
                                                                        class="underline">PER</span><span>YEAR</span></sub>
                                                            </div>
                                                        </div>
                                                        <div class="lower-detail">
                                                            <ul>
                                                                <li>Full statistics</li>
                                                                <li>Max 100 items/month</li>
                                                                <li>Up to 5 users</li>
                                                                <li>Unlimited queries</li>
                                                            </ul>
                                                            <a href="#" class="btn-get">GET STARTED</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 col-sm-12 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #0cca4a;">
                    <div class="section-heading blue-border text-center mrgb4x">
                        <h3 class="letterspace4x">SELECT PRICING PLAN</h3>
                        <p>Thundercats Portland aesthetic DIY pork belly mumblecore, ennui fixie synth Williamsburg
                            cliche<br>
                            beard post-ironic heirloom. Bespoke synth shabby chicen.
                        </p>
                        <button class="c-btn d-flex gap-3 mt-4 py-3 px-4"
                            style="display:   inline-block !important;width: fit-content;"><a class="text-black"
                                href="/pricing.html">More
                                about us <i class="fa-solid fa-circle-right"></i></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Package area -->
    <!-- Start our recent post4 -->
    <div class="our-recent-post4">
        <div class="row">
            <div class="container-fluid d-flex flex-row">
                <div class="col-4 col-md-4 col-lg-4 col-sm-12 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #1abc9c;">
                    <h2 class="h2">Our Recent posts.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, sunt!</p>
                    <button class="c-btn d-flex gap-3 mt-4 py-3 px-4"
                        style="background: #8dd538;display:   inline-block !important;width: fit-content;"><a
                            class="text-black" href="/blogPage.html">More
                            about us <i class="fa-solid fa-circle-right"></i></a></button>
                </div>
                <div class="col-8 col-md-8 col-lg-8 col-sm-12">
                    <div class="recent-post-box-area" style="display: flex;flex-wrap: wrap;">
                        <!-- Start recent post box -->
                        <div class="recent-post-box">
                            <div class="postImage">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog1.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">Selfie Moment With Sea</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the b...</p>
                            </div>
                        </div>
                        <!-- End recent post box -->
                        <!-- Start recent post box -->
                        <div class="recent-post-box">
                            <div class="postImage">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog2.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">It Is A Fantastic City Visit</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the b...</p>
                            </div>
                        </div>
                        <!-- End recent post box -->
                        <!-- Start recent post box -->
                        <div class="recent-post-box hidden-xs">
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">Awesome City Road And</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia.</p>
                            </div>
                            <div class="postImage postimage-meddil">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog3.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End recent post box -->
                        <!-- Start recent post box -->
                        <div class="recent-post-box hidden-xs">
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">Trial Transfer Here</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the b...</p>
                            </div>
                            <div class="postImage postimage-meddil">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog4.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End recent post box -->
                        <!-- Start recent post box -->
                        <div class="recent-post-box">
                            <div class="postImage">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog5.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">The Single Way Road</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the b...</p>
                            </div>
                        </div>
                        <!-- End recent post box -->
                        <!-- Start recent post box -->
                        <div class="recent-post-box">
                            <div class="postImage">
                                <a class="cbp-caption" href="#">
                                    <div class="recent-image">
                                        <img src="img/home3/recent-post/blog6.jpg" alt="">
                                        <div class="recent-caption">
                                            <p>VIEW POST</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="postDesc text-center">
                                <a class="cbp-l-grid-blog-title" href="#">Under Hill Road</a>
                                <div class="su-pgrid-meta">
                                    <span class="cbp-l-grid-blog-date">04 August 2021</span>
                                    <span class="cpb-category">Technology</span>
                                </div>
                                <p class="cbp-l-grid-blog-desc">Far far away, behind the word mountains, far from the
                                    countries Vokalia and Consonantia, there live the b...</p>
                            </div>
                        </div>
                        <!-- End recent post box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End our recent post4 -->
    <!-- Start newsletter area -->
    <div class="NewsletterArea py-md-5 py-sm-3 py-lg-5">
        <div class="container-fluid">
            <div class="row d-flex flex-sm-column-reverse flex-column-reverse flex-md-row flex-lg-row">
                <div class="col-xs-12 col-md-8 col-lg-8 col-sm-12 p-0">
                    <section id="section-cta">
                        <div class="sep-background-mask"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="quick_newsletter">
                                    <div class="newsletter-element">
                                        <form class="d-flex justify-content-center" action="inc/newsletter.php"
                                            method="post">
                                            <div class="row">
                                                <p class="col-xs-6 col-lg-4 col-md-4 col-sm-3">
                                                    <input class="newsletter-firstname input-text" type="text"
                                                        placeholder="Your Name">
                                                </p>
                                                <p class="col-xs-6 col-lg-4 col-md-4 col-sm-3">
                                                    <input class="newsletter-email input-text" type="email"
                                                        placeholder="Enter email">
                                                </p>
                                                <p class="col-xs-12 col-lg-4 col-md-4 col-sm-2">
                                                    <button class="w-100 newsletter-submit btn" type="submit"><i
                                                            class="fa fa-paper-plane"></i> Subscribe</button>
                                                </p>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 col-sm-12 px-4 py-5 d-flex justify-content-center flex-column"
                    style="background: #0cca4a;">
                    <h2 class="h2">Subscribe to our Newsletter.</h2>
                    <p>We Priomise, We won’t give you spam mails.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End newsletter area -->
@endsection