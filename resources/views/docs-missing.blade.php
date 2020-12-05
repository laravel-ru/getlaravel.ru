<h1>Страница не найдена.</h1>

@if($otherVersions->isEmpty())
    <p>Здесь ничего нет.</p>
@else
    <p>Эта страница не существует для этой версии Laravel, но была найдена в других версиях.</p>

    <div>
        <ul class="list-custom leading-4 space-y-3">
            @foreach($otherVersions as $key => $title)
                <li><a href="{{ url('/docs/'.$key.'/'.$page) }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
