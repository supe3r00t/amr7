<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // عرض صفحة التواصل
    public function show()
    {
        return view('contact');
    }

    // معالجة النموذج (لو أردت تربطه لاحقًا بـ n8n)
    public function submit(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:2000',
        ]);

        // هنا ممكن ترسلها إلى n8n أو تخزنها في DB
        return back()->with('success', 'تم إرسال رسالتك بنجاح ✅');
    }
}
