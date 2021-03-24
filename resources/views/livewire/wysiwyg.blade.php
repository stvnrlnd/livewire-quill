<div class="mt-2 bg-white" wire:ignore>
    <div
        x-data
        x-ref="quill"
        x-init="
        quill = new Quill($refs.quill, {theme: 'snow'});
        quill.on('text-change', function () {
            $dispatch('quill-input', quill.root.innerHTML);
        });
        "
        x-on:quill-input.debounce.2000ms="@this.set('body', $event.detail)"
    >
      {!! $body !!}
    </div>
</div>
