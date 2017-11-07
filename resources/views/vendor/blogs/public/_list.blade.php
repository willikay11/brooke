<ul class="list-blogs">
    @foreach ($items as $blog)
    @include('blogs::public._list-item')
    @endforeach
</ul>
