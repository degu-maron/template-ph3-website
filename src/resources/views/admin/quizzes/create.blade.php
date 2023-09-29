<x-user-layout title="クイズ作成">
  <x-slot name="header">
    <x-user.common.header />
  </x-slot>

  <div class="max-w-7xl mx-auto px-6">
    <form method="post" action="{{ route('post.store') }}">
      @csrf
      <div class="mt-8">
        <div class="w-full flex flex-col">
          <label for="name" class="font-semibold mt-4">クイズタイトル</label>
          <x-input-error :message="$errors->get('name')" class="mt-2" />
          <input type="text" name="name" id="name" class="w-auto py-2 border border-gray-300 rounded-md" value="{{ old('name') }}">
        </div>
      </div>
      <x-primary-button class="mt-4">登録する</x-primary-button>
    </form>
  </div>

</x-user-layout>