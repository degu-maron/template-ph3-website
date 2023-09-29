<x-user-layout title="クイズ-{{ $quiz->name }}">
    <x-slot name="head">
        <link rel="stylesheet" href="{{ asset('/css/modal.css') }}">
        <script src="{{ asset('/js/common.js') }}" defer></script>
        <script src="{{ asset('/js/quiz.js') }}" defer></script>
        <script src="{{ asset('/js/modal.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
        {{-- モーダル表示用
      @livewireStyles --}}
    </x-slot>
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>

    {{-- モーダル部分 --}}
    <div class="modal" id="modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        {{-- form-inline:文字の量に合わせてモーダルの大きさが変化する --}}
        <form method="post" action="{{ route('post.destroy', $quiz) }}" class="flex-2">
            @csrf
            @method('delete')
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">削除確認</h4>
                    </div>
                    <div class="modal-body-container">
                        <p id="modalBody"></p>
                    </div>
                    <div class="modal-footer">
                        <x-primary-button type="button" class="bg-slate-300 hover:bg-slate-200"
                            id="closeModalButton">キャンセル
                        </x-primary-button>
                        <button type="submit" class="bg-red-500" id="destroyButton">削除する</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <x-user.quiz.title title="{{ $quiz->name }}" />
    <div class="text-right flex">
        <a href="{{ route('post.edit', $quiz) }}">
            <x-primary-button>編集</x-primary-button>
        </a>
        <a id="openModalButton" data-title="{{ $quiz->name }}">
            <x-primary-button class="bg-red-700 hover:bg-red-500">削除</x-primary-button>
        </a>
    </div>

    <div class="p-quiz-container l-container">
        @foreach ($quiz->questions as $i => $question)
            <section class="p-quiz-box js-quiz" data-quiz="{{ $i }}">
                <div class="p-quiz-box__question">
                    <h2 class="p-quiz-box__question__title">
                        <span class="p-quiz-box__label">Q{{ $i + 1 }}</span>
                        <span class="p-quiz-box__question__title__text">{{ $question->content }}</span>
                    </h2>
                    <figure class="p-quiz-box__question__image">
                        <img src="/image/quiz/{{ $question->image }}" alt="">
                    </figure>
                </div>
                <a href="{{ route('admin.quizzes.edit.question', $question) }}">
                    <x-primary-button>この設問の編集</x-primary-button>
                </a>
                <a href="{{ route('admin.quizzes.destroy.question', $question) }}" class="delete_question_button">
                    <x-primary-button class="bg-red-700 hover:bg-red-500">削除する</x-primary-button>
                </a>
                {{-- <a id="deleteQuestionButton" data-title="{{ $question->content }}">
                    <x-primary-button class="bg-red-700 hover:bg-red-500">削除する</x-primary-button>
                </a> --}}
                <div class="p-quiz-box__answer">
                    <span class="p-quiz-box__label p-quiz-box__label--accent">A</span>
                    <ul class="p-quiz-box__answer__list">
                        @foreach ($question->choices as $key => $choice)
                            <li class="p-quiz-box__answer__item">
                                <button class="p-quiz-box__answer__button js-answer" data-answer="{{ $i }}"
                                    data-correct="{{ $choice->is_correct }}">
                                    {{ $choice->text }}<i class="u-icon__arrow"></i>
                                </button>
                            </li>
                        @endforeach
                    </ul>
                    <div class="p-quiz-box__answer__correct js-answerBox">
                        <p class="p-quiz-box__answer__correct__title js-answerTitle"></p>
                        <p class="p-quiz-box__answer__correct__content">
                            <span class="p-quiz-box__answer__correct__content__label">A</span>
                            <span class="js-answerText"></span>
                        </p>
                    </div>
                </div>
                @if ($question->supplement)
                    <cite class="p-quiz-box__note">
                        <i class="u-icon__note"></i>{{ $question->supplement }}
                    </cite>
                @endif
            </section>
        @endforeach
        <!-- ./p-quiz-box -->
    </div>
    <!-- /.l-container .p-quiz-container -->
    <x-slot name="footer">
        <x-user.common.footer />
    </x-slot>
</x-user-layout>
<script>
    'use strict';
    {
        document.querySelectorAll('.delete_question_button').forEach(element => {
            element.addEventListener('click', () => {
                alert('本当に削除しますか？')
            });
        });
    }
</script>
