@extends('layouts.app')

@section('title', 'الخدمات - آمر سبعة')
@section('meta_description', 'مجموعة خدمات آمر سبعة لتأسيس وتشغيل الشركات في السعودية.')

@section('content')
    <section class="section">
        <div class="container text-center">
            <h1 class="mb-5">خدماتنا</h1>

            <div class="row g-4">
                @foreach(['تأسيس الشركات','تعديل عقود التأسيس','التراخيص الحكومية','العلامات التجارية','التحول القانوني'] as $service)
                    <div class="col-md-4">
                        <div class="p-4 bg-white shadow-sm rounded h-100">
                            <h4>{{ $service }}</h4>
                            <p>شرح مبسط عن {{ $service }}، يُستبدل لاحقًا من لوحة التحكم.</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
