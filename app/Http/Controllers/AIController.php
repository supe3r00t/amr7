<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function suggestService(Request $request)
    {
        $text = $request->input('description');
        $provider = config('services.ai.provider');
        $apiKey = config('services.ai.key');

        if (!$apiKey) {
            return response()->json(['error' => 'API key missing'], 500);
        }

        $prompt = "أنت مساعد ذكي متخصص في خدمات الأعمال. بناءً على هذا النص، اقترح الخدمة المناسبة من القائمة التالية:
        - تأسيس الشركات
        - الاستشارات القانونية
        - صياغة العقود
        - التحول الرقمي
        - الحلول التقنية
        النص: {$text}";

        if ($provider === 'gemini') {
            $response = Http::withToken($apiKey)->post(
                'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent',
                [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]],
                    ],
                ]
            );

            $result = $response->json('candidates.0.content.parts.0.text') ?? 'لم يتم التعرف على الخدمة المناسبة.';
        } else {
            $response = Http::withToken($apiKey)->post(
                'https://api.openai.com/v1/chat/completions',
                [
                    'model' => 'gpt-4o-mini',
                    'messages' => [['role' => 'user', 'content' => $prompt]],
                ]
            );

            $result = $response->json('choices.0.message.content') ?? 'لم يتم التعرف على الخدمة المناسبة.';
        }

        return response()->json(['suggested_service' => trim($result)]);
    }
}
