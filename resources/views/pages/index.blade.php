@extends('layout')

@section('slider')
<!-- slider.html -->
<!-- slider -->
<!-- <div class="col-xs-12">
    <div class="slider-area">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider" class="slides nivoSlider">

                <a href="/dostavka/"><img src="/temple/pk/img/Доставка.jpg" alt="Доставка" /></a>

                <a href="/otsrochka_platezha/"><img src="/temple/pk/img/Отсрочка.jpg" alt="Отсрочка платежа" /></a>

                <a href="/sertifikaty/"><img src="/temple/pk/img/Сертификаты.jpg" alt="Сертификаты" /></a>
            </div>

        </div>
    </div>
</div> -->
<!-- slider end-->
@endsection

@section('content')
<div class="row">

    <div class="col-xs-12">
        <!-- main_block_spec.html -->
        <!-- START PRODUCT-AREA (2) -->

        <!-- END PRODUCT-AREA (2) -->
        <!-- end main_block_spec.html -->

        <!-- block_category.html -->
        <!-- START PRODUCT-AREA -->

        <div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1" style="font-family: Tahoma;">Каталог
                        </h3>
                    </div>
                </div>

                <!-- Product -->


                <!-- End Product-Menu -->
                <div class="clear"></div>
            </div>
        </div>
        <div class="product-area">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <!-- Start Product-->
                    <div role="tabpanel" class="tab-pane fade in  active" id="display-1-2">
                        <div class="row">
                            @foreach ($сatalog_menu as $c)
                            <div class="col-md-3 col-sm-4 col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="/catalog/{{$c->id}}">
                                            @foreach ($service_menu as $s)
                                            @if ($c->id == $s->catalog_id)
                                            <img class="primary-img" src="{{$s->img}}" alt="Опоры трубопроводов">
                                            @break
                                            @endif
                                            @endforeach
                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <h5 style="height: 25px;"><a ref="/catalog/{{$c->id}}" style="font-family: Arial;">Опоры
                                                трубопроводов</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach





                        </div>
                    </div>
                    <!-- End Product = TV -->
                </div>
            </div>
            <!-- End Product -->
        </div>
    </div>
</div>
<!-- END PRODUCT-AREA -->

<!-- end block_category.html -->

@endsection