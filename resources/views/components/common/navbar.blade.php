<div>
    <div class="navbar bg-base-100">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl">
                <img src="{{ asset('images/logo_192.png') }}" class="w-8 h-8 object-contain" />
                My Files</a>
        </div>
        <div class="flex-none">
            <x-common.themeSwitch />
            <button class="btn btn-warning btn-sm mx-2" onclick="addFileModal.showModal()">Add File</button>
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="Tailwind CSS Navbar component"
                            src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-28">
                    <li>
                        <a class="justify-between">
                            Profile

                        </a>
                    </li>
                    <li><a href="#" onclick="logoutModal.showModal()">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <livewire:auth.logout lazy />
    <livewire:files.add-file lazy />

</div>
