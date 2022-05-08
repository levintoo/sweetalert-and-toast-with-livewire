<div class="container">

    <div>
        <button wire:click="toast" class="btn btn-info">Toast</button>
        <p>{{ $this->counttoast }}</p>
    </div>

    <div>
        <button wire:click="sweetalert" class="btn btn-info">Sweet alert</button>
        <p>{{ $this->count }}</p>
    </div>

</div>

@push('scripts')
<script>

    window.addEventListener('toaster:info', event => {
        toastr.info(event.detail.message);
    });

    window.addEventListener('swal:modal', event => {
        swal({
            title: event.detail.title,
            text: event.detail.text,
            icon: event.detail.icon,
            button: event.detail.button,
        });
    });
    
</script>
@endpush