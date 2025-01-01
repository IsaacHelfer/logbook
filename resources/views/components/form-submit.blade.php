<div {{ $attributes->merge(['class' => 'col-md-6 offset-md-6 text-end mt-3']) }}>
    <a href="{{ isset($route) ? route($route) : '#' }}" class="btn btn-outline-secondary btn-md">Back</a>
    <input type="submit" value="{{ $value ?? 'Submit' }}" class="btn btn-success ms-2 btn-md" />
</div>
