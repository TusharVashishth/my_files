<div>

    <div class="h-screen flex justify-center items-center">
        <form class="w-[500px]" wire:submit='register'>
            <div class="flex justify-between">
                <div class=" mb-2">
                    <h1 class="text-xl font-bold">Register</h1>
                    <p class="text-sm ">Create an account and start storing your files on the cloud.</p>
                </div>
                <x-common.themeSwitch />
            </div>


            <div class="mb-2">
                <label for="name">Name</label>
                <input type="text" placeholder="Type here" class="input input-bordered w-full " id="name"
                    wire:model='name' />
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2 ">
                <label for="email">Email</label>
                <input type="email" placeholder="Type here" class="input input-bordered w-full " id="email"
                    wire:model='email' />
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2 ">
                <label for="password">Password</label>
                <input type="password" placeholder="Type here" class="input input-bordered w-full " id="password"
                    wire:model='password' />
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2 ">
                <label for="cpassword">Confirm Password</label>
                <input type="password" placeholder="Type here" class="input input-bordered w-full " id="cpassword"
                    wire:model='password_confirmation' />
            </div>
            <div class="mb-2 ">
                <button class="btn btn-warning w-full" type="submit">Submit</button>
            </div>

            <p class="text-center"> -- OR --</p>
            <p class="text-center">Already have an account ? <a href="{{ route('login') }}" wire:navigate
                    class="text-warning font-bold">Login</a>
            </p>
        </form>
    </div>
</div>
