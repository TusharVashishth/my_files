<div>
    <div class="px-2 flex justify-center flex-col items-center">
        <input type="text" class="input input-bordered w-96 rounded-2xl mb-4" placeholder="Search..."
            wire:model.live='search' />
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2">
            @if (count($files) > 0)
                @foreach ($files as $key => $file)
                    <div class="card w-96 bg-base-100  shadow-xl">
                        <a href="{{ route('show.file', ['id' => $file->id]) }}" wire:navigate>
                            <figure><img src="{{ asset('storage/' . $file->image) }}" alt="your_img"
                                    class="h-52 object-cover w-full" />
                            </figure>
                        </a>

                        <div class="card-body p-4">
                            <div class="flex justify-between">
                                <div>
                                    <p class="card-title">{{ $file->title }}</p>
                                    <p>{{ $file->created_at->format('d-m-Y h:m:s a') }}</p>
                                </div>
                                <livewire:files.delete-file :id="$file->id" :key="$key" />
                            </div>

                        </div>
                    </div>
                @endforeach
            @else
                <p>No Image found!</p>
            @endif

        </div>


    </div>
    <div class="text-center px-10 lg:px-32">
        {{ $files->links() }}
    </div>

</div>
