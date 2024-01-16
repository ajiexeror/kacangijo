@props(['card_title' => null, 'card_toolbar' => null, 'slot' => null])
<div class="card">

    <div class="card-header border-0 pt-6">
        {{-- card title --}}
        <div class="card-title">
            {{ $card_title }}
        </div>

        <div class="card-toolbar">
            {{ $card_toolbar }}
        </div>

    </div>
    <div class="card-body pt-0">
        {{ $slot }}
    </div>
</div>
