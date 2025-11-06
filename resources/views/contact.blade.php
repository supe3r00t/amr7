@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">نموذج اقتراح الخدمة الذكي 🤖</h1>

        <form id="aiForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">
                صف ما تحتاجه وسنقترح الخدمة المناسبة لك:
            </label>
            <textarea name="description" id="description" rows="5"
                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                      placeholder="مثلاً: أريد تأسيس شركة جديدة أو صياغة عقد شراكة"></textarea>

            <button type="button" id="sendAI"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-3">
                اقترح الخدمة 🔍
            </button>
        </form>

        <div id="aiResult" class="mt-4 p-4 bg-gray-100 rounded border border-gray-300 text-lg font-semibold text-green-700">
            <span>النتيجة ستظهر هنا...</span>
        </div>
    </div>

    <script>
        document.getElementById('sendAI').addEventListener('click', async () => {
            const desc = document.getElementById('description').value.trim();

            if (!desc) {
                alert('يرجى كتابة وصف بسيط لاحتياجك أولاً.');
                return;
            }

            const res = await fetch('{{ route("ai.suggest") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ description: desc })
            });

            const data = await res.json();
            document.getElementById('aiResult').innerHTML = `
        <strong>🔹 الخدمة المقترحة:</strong> ${data.suggested_service || 'لم يتم التعرف على الخدمة المطلوبة 😕'}
    `;
        });
    </script>
@endsection
