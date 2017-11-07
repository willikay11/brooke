<li>
    <a href="{{ route($lang.'.blogs.slug', $blog->slug) }}" title="{{ $blog->title }}">
        {!! $blog->title !!}
        {!! $blog->present()->thumb(null, 200) !!}
    </a>
</li>
