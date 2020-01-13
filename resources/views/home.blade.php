@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbkk12-3.fna.fbcdn.net/v/t51.2885-19/10518079_308333836006580_1183513980_a.jpg?_nc_ht=instagram.fbkk12-3.fna.fbcdn.net&_nc_ohc=qDT8pB5PoPoAX-l8hDM&oh=3ed7515d6010aec873b815e20046410c&oe=5EB6D90C" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>172</strong> posts</div>
                <div class="pr-5"><strong>221</strong> followers</div>
                <div class="pr-5"><strong>158</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Pete C</div>
        </div>

        <div class="d-flex">
            <div class="col-4">
                <img alt="Image may contain: drink and indoor" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=184ba3f83b5dc9fe0ff90878319c6c2b&amp;oe=5EDBF507 150w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=f8398779f560183fe190b4e91e3948b1&amp;oe=5ED88F4D 240w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=936b62561d2b4c80db942633422de058&amp;oe=5E9A23F7 320w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=8adb67510866242e9dece672f108a3b5&amp;oe=5ED773AD 480w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=674c75df8ca69d825159c60bfb831b20&amp;oe=5EA47DA0 640w" src="https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/79504436_166241878065357_1836761087781116310_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=XlVp7JkE5BEAX9MncFx&amp;oh=674c75df8ca69d825159c60bfb831b20&amp;oe=5EA47DA0" style="object-fit: cover;"></div>
            <div class="col-4">
                <img alt="Image may contain: ocean, sky, beach, outdoor, water and nature" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=9a22eedc86ec636968ec7741152357b4&amp;oe=5EA31707 150w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=27118776982cb323be26e9ad0e0aa368&amp;oe=5ED6CD4D 240w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=f954477464c7daf5f0c8e5914072c652&amp;oe=5EBA29F7 320w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=7587215b196f2824892c863bcdf41665&amp;oe=5EA220AD 480w,https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=e3386dba4bdacde4013801517c969d38&amp;oe=5E9FCAA0 640w" src="https://instagram.fbkk9-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/80092951_445735093016445_8352651167602688003_n.jpg?_nc_ht=instagram.fbkk9-2.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=wrrQTZrj78oAX9--byc&amp;oh=e3386dba4bdacde4013801517c969d38&amp;oe=5E9FCAA0" style="object-fit: cover;"></div>
            <div class="col-4">
                <img alt="Image may contain: 2 people, possible text that says 'SHINE'" class="FFVAD" decoding="auto" sizes="293px" srcset="https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.93.750.750a/s150x150/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=db51b6b6a4237b01b6f122ef066b66ad&amp;oe=5EA4B432 150w,https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.93.750.750a/s240x240/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=e37afb1247c9383afa5609cd184722ad&amp;oe=5EA0ED78 240w,https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.93.750.750a/s320x320/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=e2c115c8524adc57cfc0151937d993ba&amp;oe=5EDA34C2 320w,https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/e35/c0.93.750.750a/s480x480/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=df4f04f8730f08d4f8b0798331028573&amp;oe=5EA76698 480w,https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.93.750.750a/s640x640/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=9f046755dcf921e19d2ac045212e967a&amp;oe=5E9C5E38 640w" src="https://instagram.fbkk12-2.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.93.750.750a/s640x640/52319409_2279886205626269_585594066647800179_n.jpg?_nc_ht=instagram.fbkk12-2.fna.fbcdn.net&amp;_nc_cat=105&amp;_nc_ohc=Zp3D4WJUtfcAX9v44yj&amp;oh=9f046755dcf921e19d2ac045212e967a&amp;oe=5E9C5E38" style="object-fit: cover;"></div>
        </div>
    </div>
</div>
@endsection
