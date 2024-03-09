<div>
    <button class="btn btn-sm btn-error " onclick="deleteFile_{{ $id }}.showModal()">Del</button>
    <dialog id="deleteFile_{{ $id }}" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-xg">Delete File</h3>
            <p class="py-1">Once it's deleted then you can't recover it!</p>
            <div class="modal-action">
                <button class="btn btn-error btn-sm" wire:click='delete'>Yes Delete it</button>
                <form method="dialog">
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>
