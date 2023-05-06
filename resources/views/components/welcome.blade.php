<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    
    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Welcome, {{ Auth::user()->name }} 
    </h1>

</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
   
    <div>
        <div class="flex items-center">
            <span class="mdi mdi-chat-processing-outline text-2xl"></span>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{route('chat')}}">Chat Room</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Laravel Chat Room is built with Tailwind, an amazing utility first CSS framework that doesn't get in your way. You'll be amazed how easily you can build and maintain fresh, modern designs with this wonderful framework at your fingertips.
        </p>
    </div>

    <div>
        <div class="flex items-center">
            <span class="mdi mdi-account-check-outline text-2xl"></span>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Profile
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Authentication and registration views are included with Laravel , as well as support for user email verification and resetting forgotten passwords. So, you're free to get started with what matters most: building your application.
        </p>
    </div>
</div>
