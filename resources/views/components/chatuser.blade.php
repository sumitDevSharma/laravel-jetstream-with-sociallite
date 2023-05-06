@foreach($users as $user)
<button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
    <div class="flex items-center relative">
        <img class="rounded-full items-start flex-shrink-0 mr-3" src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-01_pfck4u.jpg" width="32" height="32" alt="{{$user->name}}" />
        <div class="">
            <h4 class="text-sm font-semibold text-gray-900">{{$user->name}}
            </h4>
            <div class="text-[13px]">The video chat ended · 2hrs</div>
            <span class="absolute text-red-500 right-0 top-4">
            <svg width="20" height="20">
                <circle cx="5" cy="5" r="5" fill="currentColor"></circle>
            </svg>
        </span>
        </div>
       
       
    </div>
</button>
@endforeach