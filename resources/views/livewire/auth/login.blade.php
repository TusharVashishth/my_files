<div>
    <div class="h-screen flex justify-center items-center">
        <form class="w-[500px]" wire:submit='login'>
            <div class="mb-2">
                <x-common.alert />
            </div>
            <div class="flex justify-between">
                <div class="mb-2">
                    <h1 class="text-xl font-bold">Login</h1>
                    <p class="text-sm ">Welcome back to My files cloud.</p>
                </div>
                <x-common.themeSwitch />
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
                <button class="btn btn-warning w-full" type="submit" wire:loading.attr='disabled'>
                    <span class="loading loading-dots loading-xs" wire:loading></span>
                    <span wire:loading.remove>Submit</span>
                </button>
            </div>
            <p class="text-center"> -- OR --</p>
            <p class="text-center">Don't have an account ? <a href="{{ route('register') }}" wire:navigate
                    class="text-warning font-bold">Register</a>
            </p>
        </form>
    </div>
</div>
