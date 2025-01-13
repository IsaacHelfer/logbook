<div class="{{ $class ?? '' }}">
    @if(isset($id))
        <label for="{{ $for ?? $id }}" class="form-label">{{ $label ?? $for ?? ucfirst($id) }}@if(isset($required) && $required)<span> <i class="fa-regular fa-asterisk" style="color: #ff0000;"></i></span>@endif</label>
    @endif

    @if($type === 'textarea')
        <textarea id="{{ $id ?? '' }}" name="{{ $id ?? '' }}" class="form-control @if(isset($inputClass)){{ $inputClass }}@endif" rows="{{ $rows ?? '' }}" cols="{{ $cols ?? '' }}">{{ $slot }}</textarea>
    @elseif($type === 'select')
        <select id="{{ $id ?? '' }}" name="{{ $id ?? '' }}" class="form-control @if(isset($inputClass)){{ $inputClass }}@endif select" @if(isset($required) && $required) required @endif>
            @if(isset($default) && $default)
                <option value="0" selected>Select one</option>
            @endif
            {{ $slot }}
        </select>
    @elseif($type === 'file')
        <input type="file" 
               id="{{ $id ?? '' }}" 
               name="{{ $id ?? '' }}" 
               class="form-control @if(isset($inputClass)){{ $inputClass }}@endif" 
               @if(isset($required) && $required) required @endif 
               @if(isset($multiple) && $multiple) multiple @endif
        />
    @else
        <input type="{{ $type }}"
               class="form-control @if(isset($inputClass)){{ $inputClass }}@endif"
               id="{{ $id ?? '' }}"
               name="{{ $id ?? '' }}"
               value="{{ $value ?? '' }}"
               min="{{ $min ?? '' }}"
               placeholder="{{ $placeholder ?? '' }}"
               @if($type === 'number' && isset($step))step="{{ $step }}"@endif
               @if(isset($required) && $required) required @endif
        />
    @endif

    @if(isset($id))
        @error($id)
            <div class="text-danger">{{ $message }}</div>
        @enderror
    @endif
</div>

<script>
    $(document).ready(function() {
        $('.select').select2({
            theme: "bootstrap-5"
        });

        $('.number-input').on('change', function() {
            if ($(this).val() < 0) {
                $(this).val(0);
            }
        });
    });
</script>
