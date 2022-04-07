@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">

        <div class="row">
            <div class="col-xs-12">
                <!-- Start Product-Menu -->
                <div class="product-menu">
                    <div class="product-title">
                        <h3 class="title-group-2 gfont-1">О компании</h3>
                    </div>
                </div>
                <!-- End Product-Menu -->
                <div class="clear"></div>
            </div>
        </div>



        <div class="product-area">
            <div class="row">
                <div class="col-md-12">



                    <div style="font-family: Tahoma;font-size: 16px;">
                        <h3>{{$settings->name}} - изоляционные материалы, услуги по изоляции, трубы и комплектующие в изоляции<span style="font-size: 20px;"><br></span></h3>
                        <p class="MsoNormal">В нашей компании Вы можете купить трубы и комплектующие в изоляции, изоляционные материалы, а также заказать изоляцию ЦПП, ВУС, УС, ППУ, ППМИ для труб и комплектующих. Мы предлагает справедливые цены на качественную изоляцию. Вся реализуемая продукция соответствует требованиям российских и международных стандартов.</p>
                        <p class="MsoNormal"><img src="/temple/pk/img/d1a3d1_293c0ea51b884d39918beb85d7ef16a7_mv2_d_2592_1728_s_2.jpg_srz_1905_1270_85_22_0.50_1.20_0.00_jpg_srz" alt="" width="1905" height="1270"></p>
                        <p>&nbsp;</p>
                        <h3>Преимущества работы с {{$settings->name}}:</h3>
                        <p class="MsoNormal">- качественная продукция;</p>
                        <p class="MsoNormal">- собственные склады и производственные цеха в городах Москва, Санкт-Петербург, Екатеринбург;</p>
                        <p class="MsoNormal">- доставка по всей территории России и СНГ;</p>
                        <p class="MsoNormal">- отсрочка платежа до 30 календарных дней;</p>
                        <p class="MsoNormal">- сопутствующие услуги.</p>
                        <p>&nbsp;</p>
                        <p class="MsoNormal"><strong>С компанией {{$settings->name}}, Вы всегда можете быть уверены в оперативной обработке вашей заявки и своевременной доставке продукции.</strong></p>
                    </div>





                </div>
            </div>
        </div>
    </div>


</div>
@endsection