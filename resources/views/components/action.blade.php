@if(isset($delete) && $delete)
    <form action="{{ $action }}" method="POST">
        @csrf
        @method('DELETE')
        <a {{ $attributes->merge(['class' => 'link-primary trash']) }}
            href="{{ !empty($route) ? route($route, $parameters ?? '') : '#' }}"
            @if(!empty($tooltip))
                data-bs-toggle="tooltip"
                data-bs-title="{{ $tooltip }}"
            @endif
        >
            <i class="fa-solid fa-trash"></i>
        </a>
    </form>
@else
    <a {{ $attributes->merge(['class' => 'link-primary']) }}
       href="{{ !empty($route) ? route($route, $parameters ?? '') : '#' }}"
       @if(!empty($tooltip))
           data-bs-toggle="tooltip"
           data-bs-title="{{ $tooltip }}"
       @endif
    >
        {{ $slot }}
    </a>
@endif

<script>
    $('.trash').on('click', function(e) {
        e.preventDefault();
        $(this).closest('form').submit();
    })
</script>
