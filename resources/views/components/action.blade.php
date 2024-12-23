@if(isset($delete) && $delete)
    <form action="{{ $action }}" method="POST">
        @csrf
        @method('DELETE')
        <a {{ $attributes->merge(['class' => 'link-secondary trash']) }} href="{{ !empty($route) ? route($route, $parameters ?? '') : '#' }}">
            <i class="fa-solid fa-trash"></i>
        </a>
    </form>
@else
    <a {{ $attributes->merge(['class' => 'link-secondary']) }} href="{{ !empty($route) ? route($route, $parameters ?? '') : '#' }}">
        {{ $slot }}
    </a>
@endif

<script>
    $('.trash').on('click', function(e) {
        e.preventDefault();
        $(this).closest('form').submit();
    })
</script>
