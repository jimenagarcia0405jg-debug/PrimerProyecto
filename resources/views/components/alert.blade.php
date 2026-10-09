<div class="alert alert-{{ $type ?? 'info' }}" role="alert">
    <strong>{{ $title ?? '' }}</strong>
    <div>{{ $slot }}</div>
</div>