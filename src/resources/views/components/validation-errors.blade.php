<div class="bg-red-100 border-t-4 border-red-400 rounded-b text-red-700 px-4 py-3 shadow-md my-2" role="alert">
    @if ($errors->any())
        <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg"
                class="stroke-2 stroke-current h-8 w-8 mr-2 "
                viewBox="0 0 24 24"
                fill="none"
                stroke-linecap="round"
                stroke-linejoin="round"
            >
                <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                <line x1="12" y1="8" x2="12" y2="12"></line>
                <line x1="12" y1="16" x2="12.01" y2="16"></line>
            </svg>
            <div class="alert alert-danger pt-1.5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
</div>