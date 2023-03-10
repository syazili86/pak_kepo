@extends('layouts.app')
@section('content')
    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/chartist.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/owlcarousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('theme/viho/assets/css/prism.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="col-xl-12 col-md-12 des-xl-100 box-col-12">
            <div class="row">
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>984</h5>
                                <p>Total Like</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right second">
                    <div class="card income-card card-primary">
                        <div class="card-body">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="50" data-height="70" data-thickness=".3"
                                        data-fgcolor="#24695c" data-linecap="round" data-angleoffset="0"
                                        value="60">
                                </div>
                                <h5>455</h5>
                                <p>Total View</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>984</h5>
                                <p>Total Share</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 box-col-3 chart_data_right">
                    <div class="card income-card card-secondary">
                        <div class="card-body align-items-center">
                            <div class="round-progress knob-block text-center">
                                <div class="progress-circle">
                                    <input class="knob1" data-width="10" data-height="70" data-thickness=".3"
                                        data-angleoffset="0" data-linecap="round" data-fgcolor="#ba895d"
                                        data-bgcolor="#e0e9ea" value="60">
                                </div>
                                <h5>984</h5>
                                <p>Total User</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 box-col-12 des-xl-100 invoice-sec">
                <div class="card">
                    <div class="card-header">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                            <h5>User Overview </h5>
                            <div class="center-content">
                                <p class="d-sm-flex align-items-center"><span class="m-r-10">$5,56548k</span><i
                                        class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>94% More Than Last Year</p>
                            </div>
                            <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                    <li>
                                        <div class="setting-primary"><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code font-primary"></i></li>
                                    <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                    <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div id="timeline-chart"></div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#invoice-overview"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="invoice-overview">&lt;div class="card"&gt;
 &lt;div class="card-header"&gt;
   &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
     &lt;h5&gt;Invoice Overview &lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p class="d-sm-flex align-items-center"&gt;
         &lt;span class="m-r-10"&gt;$5,56548k&lt;/span&gt;
           &lt;i class="toprightarrow-primary fa fa-arrow-up m-r-10"&gt;&lt;/i&gt;94% More Than Last Year
       &lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="setting-list"&gt;
       &lt;ul class="list-unstyled setting-option"&gt;
         &lt;li&gt;
           &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
         &lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body p-0"&gt;
   &lt;div id="timeline-chart"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 box-col-12 des-xl-100 top-dealer-sec">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="header-top d-sm-flex justify-content-between align-items-center">
                            <h5>Top Kontributor</h5>
                            <div class="center-content">
                                <p class="d-sm-flex align-items-center"><span class="m-r-10">845 Dealer</span><i
                                        class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More Than Last Year</p>
                            </div>
                            <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                    <li>
                                        <div class="setting-primary"><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code font-primary"></i></li>
                                    <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                    <li><i class="icofont icofont-error close-card font-primary"> </i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="owl-carousel owl-theme" id="owl-carousel-14">
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/1.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Johnson allon</h6>
                                                        <p>Bangladesh</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/3.png') }}"
                                                            alt="...">
                                                        <h6>williams reed</h6>
                                                        <p>Belgium</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/4.png') }}"
                                                            alt="...">
                                                        <h6> Jones king</h6>
                                                        <p>Canada</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/5.png') }}"
                                                            alt="...">
                                                        <h6>Brown davis</h6>
                                                        <p>China</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/6.png') }}"
                                                            alt="...">
                                                        <h6>Wilson Hill</h6>
                                                        <p>Denmark</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/7.png') }}"
                                                            alt="...">
                                                        <h6>Anderson ban</h6>
                                                        <p>Japan</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/1.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Johnson allon</h6>
                                                        <p>Bangladesh</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/3.png') }}"
                                                            alt="...">
                                                        <h6>williams reed</h6>
                                                        <p>Belgium</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/4.png') }}"
                                                            alt="...">
                                                        <h6> Jones king</h6>
                                                        <p>Canada</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/5.png') }}"
                                                            alt="...">
                                                        <h6>Brown davis</h6>
                                                        <p>China</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/6.png') }}"
                                                            alt="...">
                                                        <h6>Wilson Hill</h6>
                                                        <p>Denmark</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/7.png') }}"
                                                            alt="...">
                                                        <h6>Anderson ban</h6>
                                                        <p>Japan</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/1.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Johnson allon</h6>
                                                        <p>Bangladesh</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/3.png') }}"
                                                            alt="...">
                                                        <h6>williams reed</h6>
                                                        <p>Belgium</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/4.png') }}"
                                                            alt="...">
                                                        <h6> Jones king</h6>
                                                        <p>Canada</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/5.png') }}"
                                                            alt="...">
                                                        <h6>Brown davis</h6>
                                                        <p>China</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/6.png') }}"
                                                            alt="...">
                                                        <h6>Wilson Hill</h6>
                                                        <p>Denmark</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/7.png') }}"
                                                            alt="...">
                                                        <h6>Anderson ban</h6>
                                                        <p>Japan</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/1.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Johnson allon</h6>
                                                        <p>Bangladesh</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/3.png') }}"
                                                            alt="...">
                                                        <h6>williams reed</h6>
                                                        <p>Belgium</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/4.png') }}"
                                                            alt="...">
                                                        <h6> Jones king</h6>
                                                        <p>Canada</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="owl-carousel-16 owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/5.png') }}"
                                                            alt="...">
                                                        <h6>Brown davis</h6>
                                                        <p>China</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/6.png') }}"
                                                            alt="...">
                                                        <h6>Wilson Hill</h6>
                                                        <p>Denmark</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/7.png') }}"
                                                            alt="...">
                                                        <h6>Anderson ban</h6>
                                                        <p>Japan</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card">
                                                    <div class="top-dealerbox text-center">
                                                        <img class="card-img-top"
                                                            src="{{ asset('assets/images/dashboard-2/8.png') }}"
                                                            alt="...">
                                                        <h6>Thompson lee</h6>
                                                        <p>Malasiya</p>
                                                        <a class="btn btn-rounded" href="#">View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#top-dealer"
                                title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                            <pre><code class="language-html" id="top-dealer">&lt;div class="card"&gt;
 &lt;div class="card-header pb-0"&gt;
   &lt;div class="header-top d-sm-flex justify-content-between align-items-center"&gt;
       &lt;h5&gt;Top Dealer&lt;/h5&gt;
       &lt;div class="center-content"&gt;
         &lt;p class="d-sm-flex align-items-center"&gt;&lt;span class="m-r-10"&gt;845 Dealer&lt;/span&gt;&lt;i class="toprightarrow-primary fa fa-arrow-up m-r-10"&gt;&lt;/i&gt;86% More Than Last Year&lt;/p&gt;
       &lt;/div&gt;
       &lt;div class="setting-list"&gt;
           &lt;ul class="list-unstyled setting-option"&gt;
             &lt;li&gt;
               &lt;div class="setting-primary"&gt;&lt;i class="icon-settings"&gt;&lt;/i&gt;&lt;/div&gt;
             &lt;/li&gt;
             &lt;li&gt;&lt;i class="view-html fa fa-code font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-maximize full-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card font-primary"&gt;&lt;/i&gt;&lt;/li&gt;
             &lt;li&gt;&lt;i class="icofont icofont-error close-card font-primary"&gt; &lt;/i&gt;&lt;/li&gt;
            &lt;/ul&gt;
       &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body"&gt;
     &lt;div id="owl-carousel-14" class="owl-carousel owl-theme"&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/1.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/5.png') }}" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/6.png') }}" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/7.png') }}" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/1.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/5.png') }}" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/6.png') }}" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/7.png') }}" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
       &lt;div class="item"&gt;
         &lt;div class="row"&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/1.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;johnson allon&lt;/h6&gt;
                   &lt;p&gt;bangladeshlt&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt;williams reed&lt;/h6&gt;
                   &lt;p&gt;Belgium&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/3.png') }}" alt="..."&gt;
                   &lt;h6&gt; Jones king&lt;/h6&gt;
                   &lt;p&gt;Canada&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/5.png') }}" alt="..."&gt;
                   &lt;h6&gt;Brown davis&lt;/h6&gt;
                   &lt;p&gt;China&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/6.png') }}" alt="..."&gt;
                   &lt;h6&gt;Wilson Hill&lt;/h6&gt;
                   &lt;p&gt;Denmark&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/7.png') }}" alt="..."&gt;
                   &lt;h6&gt;Anderson ban&lt;/h6&gt;
                   &lt;p&gt;Japan&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
           &lt;div class="col-sm-3"&gt;
               &lt;div class="card"&gt;
                 &lt;div class="top-dealerbox text-center"&gt;&lt;img class="card-img-top" src="{{ asset('assets/images/dashboard-2/8.png') }}" alt="..."&gt;
                   &lt;h6&gt;Thompson lee&lt;/h6&gt;
                   &lt;p&gt;Malasiya&lt;/p&gt;&lt;a class="btn btn-rounded" href="javascript:void(0)"&gt;View More&lt;/a&gt;
                 &lt;/div&gt;
               &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{asset('theme/viho/assets/js/chart/chartjs/chart.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/chartist/chartist.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/knob/knob.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/counter/counter-custom.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/owlcarousel/owl-custom.js')}}"></script>
    <script src="{{asset('theme/viho/assets/js/dashboard/dashboard_2.js')}}"></script>
@endpush
@endsection
