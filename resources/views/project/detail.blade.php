@extends('layouts.master')

@section('title', 'Dự án')

@section('menu')
@parent
@endsection

@section('content')
<div class="w-container">
    <div class="top-title">
        <div class="align-center">
            <div class="sub-text-title" data-ix="show-go-top-on-scroll">Kenny Paint</div>
            <h1>{{$project->name}}</h1></div>
    </div>
    <div>
        <div class="w-row">
            <div class="w-col w-col-6">
                <div><img sizes="(max-width: 767px) 96vw, (max-width: 991px) 354px, 460px" src="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w"></div>
            </div>
            <div class="w-col w-col-6">
                <div><img sizes="(max-width: 767px) 96vw, (max-width: 991px) 354px, 460px" src="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b98_port10.jpg 1100w"></div>
            </div>
        </div>
    </div>
    <div class="more top-margin">
        <div class="w-row">
            <div class="w-col w-col-8">
                <div class="left-more-padding">
                    <h4 class="small-title">Mô tả dự án</h4>
                    <div class="top-margin">
                        <div class="w-richtext">
                            {{$project->details}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <div class="left-more-padding top-margin-device">
                    <h4 class="small-title">Thông số kỹ thuật</h4>
                    <div class="top-margin">
                        <ul class="w-list-unstyled">
                            <li>
                                <div class="details-wrapper">
                                    <p class="details-text">Project Type:</p>
                                    <p class="details-text dynamic">Painting</p>
                                </div>
                            </li>
                            <li>
                                <div class="details-wrapper more">
                                    <p class="details-text">Client:</p>
                                    <p class="details-text dynamic">Kreshnik</p>
                                </div>
                            </li>
                            <li>
                                <div class="details-wrapper more">
                                    <p class="details-text">Completion Date:</p>
                                    <p class="details-text dynamic">7 March 2012</p>
                                </div>
                            </li>
                            <li>
                                <div class="details-wrapper more">
                                    <p class="details-text">Project Size:</p>
                                    <p class="details-text dynamic">3350 Square Feet</p>
                                </div>
                            </li>
                            <li>
                                <div class="details-wrapper more">
                                    <p class="details-text">Location:</p>
                                    <p class="details-text dynamic">New York</p>
                                </div>
                            </li>
                            <li>
                                <div class="details-wrapper more">
                                    <p class="details-text">Contact Value:</p>
                                    <p class="details-text dynamic">1.000.000$</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line-divider">
        <div class="border-top"></div>
    </div>
    <div>
        <div class="w-row">
            <div class="w-col w-col-4">
                <div class="algin-center-device">
                    <div class="w-dyn-list">
                        <div class="w-dyn-items">
                            <div class="w-dyn-item"><a class="button-icon previous w-button" href="/project/etiam-utif">Previous Project</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-col w-col-4">
                <div class="align-center top-bit-margin"><a class="button-icon no-icon w-button" href="/projects/project-style-1">All Projects</a></div>
            </div>
            <div class="w-col w-col-4">
                <div class="algin-center-device align-right top-bit-margin">
                    <div>
                        <div class="w-dyn-list">
                            <div class="w-dyn-items">
                                <div class="w-dyn-item"><a class="button-icon next-project w-button" href="/project/etiam-utif">Next Project</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @parent
@endsection