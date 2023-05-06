<x-app-layout>
   <x-chatbox :auth="Auth::user()" :users="$users">
   </x-chatbox>
</x-app-layout>