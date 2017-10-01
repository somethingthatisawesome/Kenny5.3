@extends('layouts.master')

@section('title', 'Dự án')

@section('menu')
@parent
@endsection

@section('content')
<div class="style-3 sub-banner" data-ix="show-go-top-on-scroll" id="Top">
    <div class="container-center focus uper w-container">
            <div class="with-focus">
                <div class="sub-text-title white">our projects</div>
                <h1 class="heading-white title-top">The buildings we create inspire us,<br> reflect who we are as a society.</h1></div>
        </div>
    </div>
</div>
    <div class="tabs-project w-tabs" data-duration-in="300" data-duration-out="100">
        <div class="no-margin project-tab w-tab-menu">
             @foreach ($projectCategories as $category)
              <a class="new-style tab-link-project w-inline-block w-tab-link" data-w-tab="Tab {{$category->id}}">
                <div>{{$category->name}}</div>
              </a>
            @endforeach
        </div>
        <div class="w-tab-content">
            @foreach ($projectCategories as $category)
                <div class="w--tab-active w-tab-pane" data-w-tab="Tab {{$category->id}}">
                 <div class="dynamic-wrapper w-dyn-list">
                 <div class="w-clearfix w-dyn-items w-row">
                @foreach($category->projects as $project)
                     <div class="dynamic-project-first w-clearfix w-col w-col-3 w-dyn-item">
                            <a class="project-wrapper-style-1 w-inline-block" data-ix="show-project-content-on-hover" href="{{ URL::to('Project/Detail/'.$project->id) }}" style="transition: all 0.3s ease 0s;">
                                <div><img sizes="100vw" src="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w">
                                    <div class="project-overlay" data-ix="project-overlay-first-apper" style="opacity: 0; transition: opacity 200ms;">
                                        <div class="project-content">
                                            <h4 class="less-marg small-title" data-ix="move-up-small-title-on-project" style="opacity: 0; transform: translateX(0px) translateY(-15px) translateZ(0px); transform-style: preserve-3d; transition: opacity 200ms, transform 200ms;">{{$project->name}}</h4>
                                            <div class="category-name" data-ix="move-up-small-title-on-project-2" style="opacity: 0; transform: translateX(0px) translateY(15px) translateZ(0px); transform-style: preserve-3d; transition: opacity 200ms, transform 200ms;">Painting</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                @endforeach
                </div>
                </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
@section('footer')
    @parent
@endsection