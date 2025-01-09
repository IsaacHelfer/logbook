@if(isset($id))
    <label for="{{ $for ?? $id }}" class="form-label">{{ $label ?? $for ?? ucfirst($id) }}@if(isset($required) && $required)<span> <i class="fa-regular fa-asterisk" style="color: #ff0000;"></i></span>@endif</label>
@endif

<select id="{{ $id }}" name="{{ $id }}" {{ $attributes }} @if(isset($multiple)) multiple @endif>
    {{ $slot }}
</select>

<script>
    $(function () {
        $("#{{ $id }}").selectize({
            create: true,
        });
    });
</script>
