<x-user-layout title="クイズ作成">
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>

    <div class="max-w-7xl mx-auto px-6">
        <form method="post" action="{{ route('post.store.question') }}">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="quiz_id" class="font-semibold mt-4">クイズタイトル</label>
                    <x-input-error :message="$errors->get('quiz_id')" class="mt-2" />
                    <select name="quiz_id">
                        @foreach ($quizzes as $quiz)
                            <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full flex flex-col">
                    <label for="content" class="font-semibold mt-4">問題文</label>
                    <x-input-error :message="$errors->get('content')" class="mt-2" />
                    <input type="text" name="content" id="content"
                        class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('content') }}">
                </div>
                <div class="flex">
                    <div class="w-full flex flex-col">
                        <label for="text1" class="font-semibold mt-4">選択肢1</label>
                        <x-input-error :message="$errors->get('text1')" class="mt-2" />
                        <input type="text" name="text1" id="text1"
                            class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('text1') }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="text2" class="font-semibold mt-4">選択肢2</label>
                        <x-input-error :message="$errors->get('text2')" class="mt-2" />
                        <input type="text" name="text2" id="text2"
                            class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('text2') }}">
                    </div>
                    <div class="w-full flex flex-col">
                        <label for="text3" class="font-semibold mt-4">選択肢3</label>
                        <x-input-error :message="$errors->get('text3')" class="mt-2" />
                        <input type="text" name="text3" id="text3"
                            class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('text3') }}">
                    </div>
                </div>
                <div class="w-full flex flex-col">
                    <label for="correct" class="font-semibold mt-4">正解の選択肢</label>
                    <x-input-error :message="$errors->get('correct')" class="mt-2" />
                    <input type="radio" name="correct" value="1">選択肢1
                    <input type="radio" name="correct" value="2">選択肢2
                    <input type="radio" name="correct" value="3">選択肢3
                </div>
            </div>
            <x-primary-button class="mt-4">登録する</x-primary-button>
        </form>
    </div>
</x-user-layout>
