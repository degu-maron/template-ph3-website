<x-user-layout title="問題一覧">
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>

    <div class="p-question-list__container">
        @if (session('message'))
            <div class="text-red-600 font-bold">{{ session('message') }}</div>
        @endif
        @foreach ($questions as $question)
            <div class="p-question-list__item mb-5 bg-slate-100">
                <h2 class="p-question-list__item__title">{{ $question->content }}</h2>
                <div class="p-question-list__item__content flex">
                    @foreach ($choices as $choice)
                        @if ($choice->question_id == $question->id)
                            <div class="ml-5 mr-5">・</div>
                            @if ($choice->is_correct == 1)
                                <div class="is-correct">「</div>
                            @endif
                            <div class="choice">{{ $choice->text }}</div>
                            @if ($choice->is_correct == 1)
                                <div class="is-correct">」</div>
                            @endif
                        @endif
                    @endforeach
                </div>
                {{-- @if ($question->deleted_at !== null)
                  <p class="bg-gray-200">削除済みです</p>
              @endif --}}
            </div>
        @endforeach
        <a href="{{ route('admin.quizzes.index') }}">クイズ一覧へ</a>
        <div class="mb-4">
            {{ $questions->links() }}
        </div>
    </div>
</x-user-layout>
