<x-user-layout title="クイズ編集">
  <x-slot name="head">
      <script src="{{ asset('/js/common.js') }}" defer></script>
  </x-slot>
  <x-slot name="header">
      <x-user.common.header />
  </x-slot>

  <x-user.quiz.title title="{{ $post->name }}の編集" />
  <form method="post" action="{{ route('post.update', $post) }}">
    @csrf
    @method('patch')
    <div class="mt-8">
      <div class="w-full flex flex-col">
        <label for="name" class="font-semibold mt-4">クイズ名</label>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
        <input type="text" name="name" class="w-auto py-2 border border-gray-300 rounded-md" id="name" value="{{old('name', $post->name)}}">
      </div>
    </div>
    <x-primary-button class="mt-4">更新する</x-primary-button>
  </form>
  
  <x-slot name="footer">
      <x-user.common.footer />
  </x-slot>
</x-user-layout>
