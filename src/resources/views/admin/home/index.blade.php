Admin管理画面だよ

<x-user-layout title="admin管理画面">
    <x-slot name="header">
        <x-user.common.header />
    </x-slot>

    <div class="admin-menu block">
        <a href="{{ route('admin.quizzes.index') }}">クイズ一覧へ</a>
        <a href="{{ route('post.create') }}">クイズの新規作成</a>
        <a href="{{ route('admin.quizzes.new-question') }}">問題の新規作成</a>
    </div>
    <x-slot name="footer">
        <x-user.common.footer />
    </x-slot>
</x-user-layout>
