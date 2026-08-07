@if ($status === 'Aktif')
<span class="rounded bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
    {{ $status }}
</span>

@else

<span class="rounded bg-red-100 px-2 py-1 text-xs font-medium text-red-700">
    {{ $status }}
</span>

@endif