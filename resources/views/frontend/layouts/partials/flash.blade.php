@if (Session::has('flash_notification.message'))
    <div data-alert class="alert alert-{{ Session::get('flash_notification.level') }}">
        {{ Session::get('flash_notification.message') }}
        <a href="#" class="close">&times;</a>
    </div>
@endif