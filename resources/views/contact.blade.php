@extends('layouts.app')

@section('title', 'تواصل معنا - آمر سبعة')
@section('meta_description', 'تواصل مع فريق آمر سبعة لأي استفسار أو طلب خدمة.')

@section('content')
    <section class="section">
        <div class="container text-center">
            <h1 class="mb-4">تواصل معنا</h1>
            <p class="mb-5">نسعد بتواصلك معنا عبر النموذج التالي أو من خلال واتساب.</p>

            <form class="row justify-content-center">
                <div class="col-md-6 text-end">
                    <input type="text" class="form-control mb-3" placeholder="الاسم الكامل">
                    <input type="email" class="form-control mb-3" placeholder="البريد الإلكتروني">
                    <textarea class="form-control mb-3" rows="4" placeholder="رسالتك"></textarea>
                    <button type="submit" class="amr7-btn amr7-btn--primary w-100">إرسال</button>
                </div>
            </form>

            <a href="https://wa.me/966538381925" target="_blank" class="amr7-btn amr7-btn--wa mt-4">
                تواصل عبر واتساب
            </a>
        </div>
    </section>
@endsection
