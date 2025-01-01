<div class="table-responsive">
    <table {{ $attributes->merge(['class' => 'table table-hover table-striped']) }}>
        {{ $slot }}
    </table>
</div>
