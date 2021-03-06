<?php
$url = app('Flarum\Http\UrlGenerator');
?>
<div class="container">
    <h2>{{ $translator->trans('fof-user-directory.forum.page.nav') }}</h2>
    <ul>
        <h1>Testing 1 2 3</h1>
        @foreach ($apiDocument->data as $user)
            <li>
                {{ $user->attributes->username }}
            </li>
        @endforeach
    </ul>

    <a href="{{ $url->to('forum')->route('fof_user_directory') }}?page={{ $page + 1 }}">{{ $translator->trans('core.views.index.next_page_button') }} &raquo;</a>
</div>
