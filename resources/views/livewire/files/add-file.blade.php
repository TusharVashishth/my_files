<div>
    <dialog id="addFileModal" class="modal" wire:ignore.self>
        <div class="modal-box">
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-xg">Add File</h3>
                <form method="dialog">
                    <button class="btn btn-xs btn-circle"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
            </div>
            <div class="mt-2" x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
                <form wire:submit='store'>
                    <div class="mb-2">
                        <label for="title">Title</label>
                        <input type="title" placeholder="Type here" class="input input-bordered w-full "
                            id="title" wire:model='title' />
                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2 ">
                        <label class="form-control ">
                            <div class="label">
                                <span class="label-text">Pick a file</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered w-full" wire:model='image'
                                accept="image/png,image/jpeg,image/jpg,image/gif,image/webp" />
                        </label>
                        @error('image')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="w-full rounded-md object-contain my-2" />
                    @endif
                    <div class="mb-2">
                        <button class="btn btn-warning w-full" type="submit" wire:loading.attr='disabled'>
                            <span wire:loading wire:target='image'>Uploading...</span>
                            <span>Upload</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </dialog>

    @script
        <script>
            $wire.on('file-added', (event) => {
                document.getElementById("addFileModal").removeAttribute("open")
            })
        </script>
    @endscript
</div>
