<a {{ $attributes->merge(['class' => 'link-secondary']) }} href="{{ !empty($route) ? route($route, $parameters ?? '') : '#' }}">
    {{ $slot }}
</a>
