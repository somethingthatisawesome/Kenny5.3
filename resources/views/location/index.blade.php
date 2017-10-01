@extends('layouts.master')

@section('title', 'Danh sách Sản phẩm')

@section('menu')
@parent
@endsection

@section('content')
<div class="contact-style-3 sub-banner">
 <div class="contact container-center uper w-container">
            <div class="align-center">
                <div class="sub-text-title white">Liên hệ với chung tôi ngay bây giờ</div>
                <h1 class="heading-white title-top">Chúng tôi muốn được nghe ý kiến của bạn</h1>
                <div class="top-margin"><a class="button-icon envelope w-button" data-ix="show-contact-wrapper-on-click" href="http://sangs-fresh-project.webflow.io/contact/contact-style-3#" style="transition: all 0.4s ease 0s;">Liên hệ với công ty</a></div>
            </div>
        </div>
        </div>
        <div class="clouds-top" data-ix="show-go-top-on-scroll" id="Top"></div>
    </div>
    <div class="gray section">
        <div class="w-container">
            <div class="w-row">
                <div class="w-col w-col-7">
                    <div class="left-more-padding">
                        <div class="w-tabs" data-duration-in="300" data-duration-out="100">
                            <div class="tab-contact w-tab-menu">
                                <select class="tab-link-contact w--current w-inline-block w-tab-link" data-w-tab="Tab 1">
                                    <option value="volvo">Volvo</option>
									  <option value="saab">Saab</option>
									  <option value="mercedes">Mercedes</option>
									  <option value="audi">Audi</option>
                                </select>
                                <a class="tab-link-contact w-inline-block w-tab-link" data-w-tab="Tab 2">
                                    <div>Paris</div>
                                </a>
                                <a class="tab-link-contact w-inline-block w-tab-link" data-w-tab="Tab 3">
                                    <div>Sydney</div>
                                </a>
                                <a class="tab-link-contact w-inline-block w-tab-link" data-w-tab="Tab 4">
                                    <div>London</div>
                                </a>
                            </div>
                            <div class="w-tab-content">
                                <div class="w--tab-active w-tab-pane" data-w-tab="Tab 1">
                                    <div>
                                        <div class="map w-widget w-widget-map" data-disable-scroll="1" data-widget-latlng="40.712784,-74.005941" data-widget-zoom="18" style="overflow: hidden;">
                                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                    <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                        <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: 122px; top: -138px;"></div>
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: 122px; top: 118px;"></div>
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: -134px; top: -138px;"></div>
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: -134px; top: 118px;"></div>
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: 378px; top: -138px;"></div>
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: 378px; top: 118px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 122px; top: -138px;">
                                                                            <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                        </div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 122px; top: 118px;">
                                                                            <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                        </div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -134px; top: -138px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -134px; top: 118px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 378px; top: -138px;"></div>
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 378px; top: 118px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden; width: 510px; height: 300px;"><img src="./Location_files/StaticMapService.GetMapImage" style="width: 510px; height: 300px;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                    <div style="position: absolute; left: 122px; top: -138px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="position: absolute; left: 122px; top: 118px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt(1)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="position: absolute; left: -134px; top: -138px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt(2)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="position: absolute; left: -134px; top: 118px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt(3)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="position: absolute; left: 378px; top: -138px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt(4)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                    <div style="position: absolute; left: 378px; top: 118px; transition: opacity 200ms ease-out;"><img src="./Location_files/vt(5)" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;" class="gm-style-pbc">
                                                            <p class="gm-style-pbt"></p>
                                                        </div>
                                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                            <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                        </div>
                                                        <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" href="https://maps.google.com/maps?ll=40.712784,-74.005941&amp;z=18&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Location_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                        </a>
                                                    </div>
                                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 105px; top: 60px;">
                                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                                        <div style="font-size: 13px;">Dữ liệu bản đồ ©2017 Google</div>
                                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Location_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 215px; bottom: 0px; width: 143px;">
                                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="">Dữ liệu bản đồ ©2017 Google</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2017 Google</div>
                                                    </div>
                                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 115px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                                    </div>
                                                    <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Location_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@40.712784,-74.005941,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                                    </div>
                                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 69px; right: 28px;">
                                                        <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;">
                                                            <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                                <div title="Phóng to" aria-label="Phóng to" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                <div title="Thu nhỏ" aria-label="Thu nhỏ" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                            <div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-tab-pane" data-w-tab="Tab 2">
                                    <div>
                                        <div class="map w-widget w-widget-map" data-disable-scroll="1" data-widget-latlng="48.856614,2.352222" data-widget-zoom="18" style="overflow: hidden;">
                                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                    <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                        <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: -214px; top: -247px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -214px; top: -247px;">
                                                                            <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                            <p class="gm-style-pbt"></p>
                                                        </div>
                                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                            <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                        </div>
                                                        <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" href="https://maps.google.com/maps?ll=48.856614,2.352222&amp;z=18&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Location_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                        </a>
                                                    </div>
                                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;">
                                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                                        <div style="font-size: 13px;"></div>
                                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Location_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;">
                                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="display: none;"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div>
                                                    </div>
                                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                                    </div>
                                                    <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Location_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@48.856614,2.352222,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                                    </div>
                                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 55px; right: 28px;">
                                                        <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;">
                                                            <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                                <div title="Phóng to" aria-label="Phóng to" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                <div title="Thu nhỏ" aria-label="Thu nhỏ" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                            <div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-tab-pane" data-w-tab="Tab 3">
                                    <div>
                                        <div class="map w-widget w-widget-map" data-disable-scroll="1" data-widget-latlng="-33.86882,151.209296" data-widget-zoom="18" style="overflow: hidden;">
                                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                    <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                        <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: -64px; top: -154px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -64px; top: -154px;">
                                                                            <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                            <p class="gm-style-pbt"></p>
                                                        </div>
                                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                            <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                        </div>
                                                        <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" href="https://maps.google.com/maps?ll=-33.86882,151.209296&amp;z=18&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Location_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                        </a>
                                                    </div>
                                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;">
                                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                                        <div style="font-size: 13px;"></div>
                                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Location_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;">
                                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="display: none;"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div>
                                                    </div>
                                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                                    </div>
                                                    <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Location_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@-33.86882,151.209296,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                                    </div>
                                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 55px; right: 28px;">
                                                        <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;">
                                                            <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                                <div title="Phóng to" aria-label="Phóng to" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                <div title="Thu nhỏ" aria-label="Thu nhỏ" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                            <div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-tab-pane" data-w-tab="Tab 4">
                                    <div>
                                        <div class="map w-widget w-widget-map" data-disable-scroll="1" data-widget-latlng="51.507351,-0.127758" data-widget-zoom="18" style="overflow: hidden;">
                                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                    <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
                                                        <div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; position: absolute; left: -248px; top: -161px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                    <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -248px; top: -161px;">
                                                                            <canvas draggable="false" height="256" width="256" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
                                                                <div style="overflow: hidden;"></div>
                                                            </div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                            <p class="gm-style-pbt"></p>
                                                        </div>
                                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                            <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                                        </div>
                                                        <div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" href="https://maps.google.com/maps?ll=51.507351,-0.127758&amp;z=18&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                                            <div style="width: 66px; height: 26px; cursor: pointer;"><img src="./Location_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                        </a>
                                                    </div>
                                                    <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 0px; height: 0px; position: absolute; left: 5px; top: 5px;">
                                                        <div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div>
                                                        <div style="font-size: 13px;"></div>
                                                        <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="./Location_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                    </div>
                                                    <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;">
                                                        <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                                            <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="display: none;"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);"></div>
                                                    </div>
                                                    <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div>
                                                    </div>
                                                    <div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="./Location_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                    <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
                                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                            <div style="width: 1px;"></div>
                                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                        </div>
                                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@51.507351,-0.127758,18z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div>
                                                    </div>
                                                    <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; user-select: none; position: absolute; bottom: 55px; right: 28px;">
                                                        <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;">
                                                            <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
                                                                <div title="Phóng to" aria-label="Phóng to" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                                <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                <div title="Thu nhỏ" aria-label="Thu nhỏ" tabindex="0" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
                                                                    <div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="./Location_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                                            <div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                            <div class="gm-tilt" style="width: 0px; height: 0px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="./Location_files/tmapctrl4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
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
                </div>
                <div class="w-col w-col-5">
				<div>
					<div class="top-margin-device">
                    <!--form here-->
					</div>
					   </div>
			</div>
            </div>
        </div>
        <div class="border-top second-navigation"></div>
    </div>
    <div class="blue section">
        <div class="w-container">
            <div class="top-title">
                <div class="align-center">
                    <div class="sub-text-title white">testimonials</div>
                    <h1 class="heading-white title-top">Các đại lý nói gì về chúng tôi</h1></div>
            </div>
            <div>
                <div class="carousel-slider w-slider" data-animation="slide" data-duration="500" data-infinite="1" data-nav-spacing="4">
                    <div class="w-slider-mask">
                        <div class="w-slide" style="transform: translateX(0px); opacity: 1;">
                            <div class="w-row">
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">Matrix Man</h4>
                                                <div class="sub-text-title">Jupiter INC</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="photo-2 testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">Sara Smith</h4>
                                                <div class="sub-text-title">Alba SHPK</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="photo-3 testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">John Doe</h4>
                                                <div class="sub-text-title">Deeny Interior</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-slide" style="transform: translateX(0px); opacity: 1;">
                            <div class="w-row">
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">Matrix Man</h4>
                                                <div class="sub-text-title">Jupiter INC</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="photo-2 testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">Sara Smith</h4>
                                                <div class="sub-text-title">Alba SHPK</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-col w-col-4">
                                    <div class="testimonials-wrapper">
                                        <div class="photo-3 testimonials-photo"></div>
                                        <p class="testimonials-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p>
                                        <div>
                                            <div>
                                                <h4 class="testimonials-title">John Doe</h4>
                                                <div class="sub-text-title">Deeny Interior</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="arrow-carousel left w-slider-arrow-left">
                        <div class="w-icon-slider-left"></div>
                    </div>
                    <div class="arrow-carousel w-slider-arrow-right">
                        <div class="w-icon-slider-right"></div>
                    </div>
                    <div class="slide-carousel w-round w-slider-nav whiter">
                        <div class="w-slider-dot w-active" data-wf-ignore="" style="margin-left: 4px; margin-right: 4px;"></div>
                        <div class="w-slider-dot" data-wf-ignore="" style="margin-left: 4px; margin-right: 4px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection