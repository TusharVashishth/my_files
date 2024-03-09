<div class="toast toast-end">
    @if (session('success'))
        <div class="alert alert-success" x-show="show" x-transition x-data="{
            show: true,
            init() {
                setTimeout(() => {
                    this.show = false;
                }, 3000)
            }
        }">
            <span>{{ session('success') }}</span>
        </div>
    @elseif(session('error'))
        <div class="alert alert-error" x-show="show" x-transition x-data="{
            show: true,
            init() {
                setTimeout(() => {
                    this.show = false;
                }, 3000)
            }
        }">
            <span>{{ session('error') }}</span>
        </div>
    @endif


</div>
