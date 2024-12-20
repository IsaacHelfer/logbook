<div class="{{ $class ?? '' }}">
    @if(isset($id))
        <label for="{{ $for ?? $id }}" class="form-label">{{ $label ?? $for ?? ucfirst($id) }}@if(isset($required) && $required)<span> <i class="fa-regular fa-asterisk" style="color: #ff0000;"></i></span>@endif</label>
    @endif

    @if($type === 'textarea')
        <textarea id="{{ $id ?? '' }}" name="{{ $id ?? '' }}" class="form-control @if(isset($inputClass)){{ $inputClass }}@endif" rows="{{ $rows ?? '' }}" cols="{{ $cols ?? '' }}"></textarea>
    @elseif($type === 'select')
        <select id="{{ $id ?? '' }}" name="{{ $id ?? '' }}" class="form-control @if(isset($inputClass)){{ $inputClass }}@endif" @if(isset($required) && $required) required @endif>
            @if(isset($default) && $default)
                <option value="0" selected>Select one</option>
            @endif
            {{ $slot }}
        </select>
    @else
        <input type="{{ $type }}"
               class="form-control @if(isset($inputClass)){{ $inputClass }}@endif"
               id="{{ $id ?? '' }}"
               name="{{ $id ?? '' }}"
               value="{{ $value ?? '' }}"
               min="{{ $min ?? '' }}"
               placeholder="{{ $placeholder ?? '' }}"
               @if(isset($required) && $required) required @endif
        />
    @endif
</div>
