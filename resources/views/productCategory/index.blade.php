@extends('layouts.master')

@section('title', 'Danh sách Sản phẩm')

@section('menu')
@parent
@endsection

@section('content')
    <div class="no-bottom-pading section">
        <div class="border-top second-navigation"></div>
        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
            <div class="w-tab-content">
                @foreach($products as $product)
                    <div class="w-dyn-list">
                        <div class="w-clearfix w-dyn-items w-row">
                            <div class="dynamic-project-first w-col w-col-6 w-dyn-item">
                                <div>
                                    <div class="w-clearfix">
                                        <div class="project-content-style-3">
                                            <h4 class="less-marg small-title">{{$product->Product_name}}</h4>
                                            <div class="top-margin">
                                                <p>{{$product->description}}</p>
                                            </div>
                                            <div class="learn-bottom"><a class="learn-more" href="{{ URL::to('Product/Detail/'.$product->id) }}">Learn More &gt;</a></div>
                                        </div>
                                        <a class="project-photo w-inline-block" href="{{ URL::to('Product/Detail/'.$product->id) }}"><img class="project-image-second" sizes="(max-width: 479px) 100vw, (max-width: 991px) 50vw, 25vw" width="1476" src="./Product_files/5989714e76433a0001206b94_port12.jpg" srcset="https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-500x375.jpeg 500w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-800x600.jpeg 800w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12-p-1080x810.jpeg 1080w, https://daks2k3a4ib2z.cloudfront.net/5989714e76433a0001206a19/5989714e76433a0001206b94_port12.jpg 1100w"></a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection