<x-user-layout title="クイズ一覧">
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>

    <div class="p-quiz-list__container">
        @if (session('message'))
            <div class="text-red-600 font-bold">{{ session('message') }}</div>
        @endif
        @foreach ($quizzes as $quiz)
            <div class="p-quiz-list__item mb-5">
                {{-- <div class="p-quiz-list__item__image-wrapper">
                    <img class="p-quiz-list__item__image" src="image/quiz/{{ $quiz->image }}" alt="クイズ{{ $loop->iteration }}" width="300" height="400">
                </div> --}}
                <h2 class="p-quiz-list__item__title">{{ $quiz->name }}</h2>
                <p class="p-quiz-list__item__description">{{ $quiz->description }}</p>
                @if ($quiz->deleted_at == NULL)
                    <a href="{{ route('admin.quizzes.detail', ['quiz' => $quiz]) }}" class="p-quiz-list__item__button">
                        <x-primary-button class="bg-blue-700">確認する</x-primary-button>
                    </a>
                @endif
                @if ($quiz->deleted_at !== null)
                    <p class="bg-gray-200">削除済みです</p>
                @endif
            </div>
        @endforeach
        <div class="mb-4">
            {{ $quizzes->links() }}
        </div>
    </div>
</x-user-layout>
