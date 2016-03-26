@if (session()->has('flash_message.message'))
    @if (session()->has('flash_message.overlay'))
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title' => session('flash_message.title'),
            'body' => session('flash_message.message')
        ])
    @else
        <div class="alert alert-{{ session('flash_message.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session('flash_message.message') !!}
        </div>
    @endif
@endif