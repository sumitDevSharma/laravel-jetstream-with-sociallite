<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="mx-auto">
               <div class=" border rounded">
                  <div class="flex">
                     <div class="w-1/3 border-r shadow-lg rounded-lg h-screen">
                     
                        <div class="relative mx-auto bg-white ">
                           <!-- Card header -->
                           <div class="pt-6 pb-4 px-5 border-b border-gray-200">
                              <div class="flex justify-between items-center mb-3">
                                 <div class="flex items-center justify-center flex-wrap">
                                    <a class="inline-flex items-start mr-3" href="#0">
                                     <div class="relative">
                                    <span class="absolute text-green-500 right-0 bottom-0">
                                       <svg width="20" height="20">
                                          <circle cx="8" cy="8" r="8" fill="currentColor"></circle>
                                       </svg>
                                    </span>
                                    <img src="https://images.unsplash.com/photo-1549078642-b2ba4bda0cdb?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=144&amp;h=144" alt="" class="w-10 sm:w-16 h-10 sm:h-16 rounded-full">
                                 </div>
                                    
                                    </a>
                                    <div class="pr-1">
                                       <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                                          <h2 class="text-xl leading-snug font-bold">{{$name}}</h2>
                                       </a>
                                       <a class="block text-sm font-medium hover:text-indigo-500"
                                          href="#0">{{$email}}</a>
                                    </div>
                                 </div>
                                 <!-- Settings button -->
                                 <div class="relative inline-flex flex-shrink-0">
                                    <button
                                       class="text-gray-400 hover:text-gray-500 rounded-full focus:ring-0 outline-none focus:outline-none">
                                       <span class="sr-only">Settings</span>
                                       <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                                          <path
                                             d="m15.621 7.015-1.8-.451A5.992 5.992 0 0 0 13.13 4.9l.956-1.593a.5.5 0 0 0-.075-.611l-.711-.707a.5.5 0 0 0-.611-.075L11.1 2.87a5.99 5.99 0 0 0-1.664-.69L8.985.379A.5.5 0 0 0 8.5 0h-1a.5.5 0 0 0-.485.379l-.451 1.8A5.992 5.992 0 0 0 4.9 2.87l-1.593-.956a.5.5 0 0 0-.611.075l-.707.711a.5.5 0 0 0-.075.611L2.87 4.9a5.99 5.99 0 0 0-.69 1.664l-1.8.451A.5.5 0 0 0 0 7.5v1a.5.5 0 0 0 .379.485l1.8.451c.145.586.378 1.147.691 1.664l-.956 1.593a.5.5 0 0 0 .075.611l.707.707a.5.5 0 0 0 .611.075L4.9 13.13a5.99 5.99 0 0 0 1.664.69l.451 1.8A.5.5 0 0 0 7.5 16h1a.5.5 0 0 0 .485-.379l.451-1.8a5.99 5.99 0 0 0 1.664-.69l1.593.956a.5.5 0 0 0 .611-.075l.707-.707a.5.5 0 0 0 .075-.611L13.13 11.1a5.99 5.99 0 0 0 .69-1.664l1.8-.451A.5.5 0 0 0 16 8.5v-1a.5.5 0 0 0-.379-.485ZM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <!-- Meta -->
                              <div class="flex flex-wrap justify-center sm:justify-start space-x-4">
                                 <div class="flex items-center">
                                    <x-svg_location/>
                                    <span class="text-sm whitespace-nowrap ml-2">Milan, IT</span>
                                 </div>
                                 <div class="flex items-center">
                                    <x-svg_attachment/>
                                    <a class="text-sm font-medium whitespace-nowrap text-indigo-500 hover:text-indigo-600 ml-2"
                                       href="#0">carolinmcneail.com</a>
                                 </div>
                              </div>
                           </div>
                           <!-- Card body -->
                           <div class="py-3 px-3">
                              <h3 class="text-xs font-semibold uppercase text-gray-400 mb-1">Chats</h3>
                              <!-- Chat list -->
                              <div class="divide-y h-screen divide-gray-200 overflow-y-auto scrollbar-thumb-blue scrollbar-thumb-rounded scrollbar-track-blue-lighter scrollbar-w-2 scrolling-touch">
                                 <!-- User -->
                                 @for($i=0; $i<=15; $i++)
                                    <x-chatuser></x-chatuser>
                                 @endfor
                                 <!-- User -->
                              </div>
                           </div>
                           <!-- Bottom right button -->
                           
                        </div>
                        <!-- <x-newchatbtn /> -->
                     </div>
                     <div class="w-2/3">
                     <x-message-box />
                  </div>
               </div>
            </div>
</div>