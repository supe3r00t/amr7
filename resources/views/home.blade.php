@extends('layouts.app')

@section('title', 'الرئيسية - آمر سبعة')
@section('meta_description', 'شركة آمر سبعة تقدم خدمات تأسيس الشركات، التراخيص، والدعم القانوني في السعودية.')

@section('content')
    @include('components.hero')

    <section class="section text-center">
        <div class="container">
            <h2 class="mb-4">خدماتنا الرئيسية</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <h4>تأسيس الشركات</h4>
                        <p>نساعدك في جميع مراحل تأسيس شركتك داخل السعودية من البداية للنهاية.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <h4>الخدمات القانونية</h4>
                        <p>نقدّم الاستشارات القانونية، وصياغة العقود، ودعم الامتثال النظامي.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="p-4 shadow-sm bg-white rounded">
                        <h4>الخدمات الإدارية</h4>
                        <p>حلول موارد بشرية وتشغيلية تسهّل إدارة منشأتك اليومية.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
