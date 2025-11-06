@extends('layouts.app')

@section('title', 'من نحن - آمر سبعة')
@section('meta_description', 'تعرف على فريق وآلية عمل شركة آمر سبعة لتأسيس الشركات.')

@section('content')
    <section class="section">
        <div class="container text-center">
            <h1 class="mb-4">من نحن</h1>
            <p class="lead mb-5">
                آمر سبعة شركة سعودية تقدم خدمات تأسيس الشركات، الحلول القانونية، والخدمات التشغيلية للمستثمرين ورواد الأعمال.
            </p>
            <img src="{{ asset('assets/images/team.jpg') }}" alt="فريق آمر سبعة" class="img-fluid rounded shadow-sm">
        </div>
    </section>
@endsection
