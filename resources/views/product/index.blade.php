@extends('layouts.master')

@section('title', 'Sản phẩm')

@section('menu')
@parent
@endsection

@section('content')
    <div class="style-1 sub-banner" data-ix="show-go-top-on-scroll" id="Top">
        <div class="container-center w-container">
            <div class="align-center">
                <div class="sub-text-title white">our projects</div>
                <h1 class="heading-white title-top">The buildings we create inspire us,<br> reflect who we are as a society.</h1></div>
        </div>
    </div>
    <div class="no-bottom-pading section">
        <div class="border-top second-navigation"></div>
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
            <div class="project-tab w-tab-menu">
                <!--category-->
                @foreach ($productCategories as $category)
                <a class="line-dark tab-link-project w-inline-block w-tab-link" data-w-tab="Tab {{$category->id}}"><div>{{$category->name}}</div></a>
                @endforeach
            </div>
            <div class="w-tab-content">
                @foreach ($productCategories as $category)
                <div class="w--tab-active w-tab-pane" data-w-tab="Tab {{$category->id}}">
                @foreach($category->sub_categories as $sub_category)
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <div class="category-name style-3">{{$category->name}}</div>
                                            <h4 class="less-marg small-title">{{$sub_category->name}}</h4>
                                            <div class="top-margin">
                                                <p>{{$sub_category->description}}</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="{{ URL::to('Product/Category',$sub_category->id) }}">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="{{ URL::to('Product/Category',$sub_category->id) }}"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @parent
@endsection