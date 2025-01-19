<?php  require_once('header.php')?>
                <main class="lg:col-span-9 xl:col-span-6">
<?php  require_once("popaps.php"); 
        include_once('./../../classes/Tags.php');
?>                    

                    <div class="px-4 sm:px-0">
                        <div class="sm:hidden">
                            <label for="question-tabs" class="sr-only">Select a tab</label>
                            <select id="question-tabs" class="block w-full rounded-md border-gray-300 text-base font-medium text-gray-900 shadow-sm focus:border-rose-500 focus:ring-rose-500">
                                
                                <option selected="">Cours</option>
                                
                                <option>Category</option>
                                
                                <option>Tages</option>
                                
                            </select>
                        </div>
                        <div class="hidden sm:block">
                            <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
                                <button onclick="cours()" aria-current="page" class="text-gray-900 rounded-l-lg  group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;text-gray-900&quot;, Default: &quot;text-gray-500 hover:text-gray-700&quot;">
                                    <span>Cours</span>
                                    <span aria-hidden="true" class="bg-rose-500 absolute inset-x-0 bottom-0 h-0.5 spanListCours"></span>
                                </button>
                                
                                <button onclick="category()" class="text-gray-500 hover:text-gray-700   group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-500 hover:text-gray-700&quot;">
                                    <span>Category</span>
                                    <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5 spanListCategory"></span>
                                </button>
                                
                                <button  onclick="tages()" class="text-gray-500 hover:text-gray-700  rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-6 text-sm font-medium text-center hover:bg-gray-50 focus:z-10" x-state-description="undefined: &quot;text-gray-900&quot;, undefined: &quot;text-gray-500 hover:text-gray-700&quot;">
                                    <span>Tages</span>
                                    <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5 spanListTages"></span>
                                </button>
                            </nav>
                        </div>
                    </div>
                    <div class="mt-4">
                        <ul role="list" class="space-y-4 listecours">
                        
                            <li class="bg-white px-4 py-6 shadow sm:rounded-lg sm:p-6">
                                <article aria-labelledby="question-title-81614">
                                    <div>
                                        <div class="flex space-x-3">
                                            <div class="flex-shrink-0">
                                                <img 
                                                class="h-10 w-10 rounded-full" 
                                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                                                alt="Dries Vincent">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">
                                                <a href="#" class="hover:underline">Dries Vincent</a>
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                <a href="#" class="hover:underline">
                                                    <time datetime="2020-12-09T11:43:00">December 9 at 11:43 AM</time>
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <img 
                                            src="https://images.unsplash.com/photo-1454496522488-7a8e488e8606" 
                                            alt="Mountain" 
                                            class="w-full h-64 object-cover rounded-lg">
                                        </div>
                                        <h2 id="question-title-81614" class="mt-4 text-base font-medium text-gray-900">
                                            You should use alpinejs framework
                                        </h2>
                                        <div class="mt-2 space-y-4 text-sm text-gray-700">
                                            <p>Arradawark touches Spark was an incredible idea and a magnificent feat of engineering, but poor protocols and a disregard for human safety killed what could have otherwise been one of the best businesses of our generation.</p>
                                            <p>Ultimately, I think that if you wanted to run the park successfully and keep visitors safe, the most important thing to prioritize would be…</p>
                                        </div>
                                        <div class="mt-6 flex justify-between space-x-8">
                                            <div class="flex space-x-6">
                                                <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">29</span>
                                                    <span class="sr-only">likes</span>
                                                </button>
                                                <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">11</span>
                                                    <span class="sr-only">replies</span>
                                                </button>
                                                <button type="button" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"></path>
                                                        <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">2.7k</span>
                                                    <span class="sr-only">views</span>
                                                </button>
                                            </div>
                                            <div class="flex text-sm">
                                                <form  method="post" action="deails.php">
                                                    <button type="submit" class="inline-flex items-center space-x-2 text-gray-400 hover:text-gray-500">
                                                        <span class="font-medium text-gray-900">see more</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        
                            <li class="bg-white px-4 py-6 shadow sm:rounded-lg sm:p-6">
                                <article aria-labelledby="question-title-89019">
                                    <div>
                                        <div class="flex space-x-3">
                                            <div class="flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <p class="text-sm font-medium text-gray-900">
                                                    <a href="#" class="hover:underline">Lindsay Walton</a>
                                                </p>
                                                <p class="text-sm text-gray-500">
                                                    <a href="#" class="hover:underline">
                                                        <time datetime="2020-12-08T22:45:00">December 8 at 10:45 PM</time>
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="flex flex-shrink-0 self-center">
                                                <div x-data="Components.menu({ open: false })" x-init="init()" @keydown.escape.stop="open = false; focusButton()" @click.away="onClickAway($event)" class="relative inline-block text-left">
                                                    <div>
                                                        <button type="button" class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600" id="options-menu-1-button" x-ref="button" @click="onButtonClick()" @keyup.space.prevent="onButtonEnter()" @keydown.enter.prevent="onButtonEnter()" aria-expanded="false" aria-haspopup="true" x-bind:aria-expanded="open.toString()" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()">
                                                            <span class="sr-only">Open options</span>
                                                            <svg class="h-5 w-5" x-description="Heroicon name: mini/ellipsis-vertical" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" x-ref="menu-items" x-description="Dropdown menu, show/hide based on menu state." x-bind:aria-activedescendant="activeDescendant" role="menu" aria-orientation="vertical" aria-labelledby="options-menu-1-button" tabindex="-1" @keydown.arrow-up.prevent="onArrowUp()" @keydown.arrow-down.prevent="onArrowDown()" @keydown.tab="open = false" @keydown.enter.prevent="open = false; focusButton()" @keyup.space.prevent="open = false; focusButton()">
                                                        <div class="py-1" role="none">
                                                            <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" x-state:on="Active" x-state:off="Not Active" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 0, 'text-gray-700': !(activeIndex === 0) }" role="menuitem" tabindex="-1" id="options-menu-1-item-0" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 0)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">
                                                                <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/star" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            <span>Add to favorites</span>
                                                            </a>
                                                            <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 1, 'text-gray-700': !(activeIndex === 1) }" role="menuitem" tabindex="-1" id="options-menu-1-item-1" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 1)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">
                                                                <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/code-bracket" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd" d="M6.28 5.22a.75.75 0 010 1.06L2.56 10l3.72 3.72a.75.75 0 01-1.06 1.06L.97 10.53a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 0zm7.44 0a.75.75 0 011.06 0l4.25 4.25a.75.75 0 010 1.06l-4.25 4.25a.75.75 0 01-1.06-1.06L17.44 10l-3.72-3.72a.75.75 0 010-1.06zM11.377 2.011a.75.75 0 01.612.867l-2.5 14.5a.75.75 0 01-1.478-.255l2.5-14.5a.75.75 0 01.866-.612z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span>Embed</span>
                                                            </a>
                                                            <a href="#" class="text-gray-700 flex px-4 py-2 text-sm" :class="{ 'bg-gray-100 text-gray-900': activeIndex === 2, 'text-gray-700': !(activeIndex === 2) }" role="menuitem" tabindex="-1" id="options-menu-1-item-2" @mouseenter="onMouseEnter($event)" @mousemove="onMouseMove($event, 2)" @mouseleave="onMouseLeave($event)" @click="open = false; focusButton()">
                                                                <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: mini/flag" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                    <path d="M3.5 2.75a.75.75 0 00-1.5 0v14.5a.75.75 0 001.5 0v-4.392l1.657-.348a6.449 6.449 0 014.271.572 7.948 7.948 0 005.965.524l2.078-.64A.75.75 0 0018 12.25v-8.5a.75.75 0 00-.904-.734l-2.38.501a7.25 7.25 0 01-4.186-.363l-.502-.2a8.75 8.75 0 00-5.053-.439l-1.475.31V2.75z"></path>
                                                                </svg>
                                                                <span>Report content</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 id="question-title-89019" class="mt-4 text-base font-medium text-gray-900">What's it like to be a golden retriever?</h2>
                                    </div>
                                    <div class="mt-2 space-y-4 text-sm text-gray-700">
                                        <p>Man I am glad you asked this question. I'm a 6 year old golden retriever and while I still have a few years left to experience, I think I've been around long enough to tell you what it's really like.</p>
                                        <p>Most people think being a dog is awesome. You sleep as much as you want, all of your meals are prepared for you, and someone literally picks up your poop you. And yeah, you know what, those parts <em>are</em> pretty awesome. But there's a dark side to being a golden retriever that they don't tell you about…</p>
                                    </div>
                                    <div class="mt-6 flex justify-between space-x-8">
                                        <div class="flex space-x-6">
                                            <span class="inline-flex items-center text-sm">
                                                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" x-description="Heroicon name: mini/hand-thumb-up" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M1 8.25a1.25 1.25 0 112.5 0v7.5a1.25 1.25 0 11-2.5 0v-7.5zM11 3V1.7c0-.268.14-.526.395-.607A2 2 0 0114 3c0 .995-.182 1.948-.514 2.826-.204.54.166 1.174.744 1.174h2.52c1.243 0 2.261 1.01 2.146 2.247a23.864 23.864 0 01-1.341 5.974C17.153 16.323 16.072 17 14.9 17h-3.192a3 3 0 01-1.341-.317l-2.734-1.366A3 3 0 006.292 15H5V8h.963c.685 0 1.258-.483 1.612-1.068a4.011 4.011 0 012.166-1.73c.432-.143.853-.386 1.011-.814.16-.432.248-.9.248-1.388z"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">316</span>
                                                    <span class="sr-only">likes</span>
                                                </button>
                                            </span>
                                            <span class="inline-flex items-center text-sm">
                                                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" x-description="Heroicon name: mini/chat-bubble-left-ellipsis" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M10 2c-2.236 0-4.43.18-6.57.524C1.993 2.755 1 4.014 1 5.426v5.148c0 1.413.993 2.67 2.43 2.902.848.137 1.705.248 2.57.331v3.443a.75.75 0 001.28.53l3.58-3.579a.78.78 0 01.527-.224 41.202 41.202 0 005.183-.5c1.437-.232 2.43-1.49 2.43-2.903V5.426c0-1.413-.993-2.67-2.43-2.902A41.289 41.289 0 0010 2zm0 7a1 1 0 100-2 1 1 0 000 2zM8 8a1 1 0 11-2 0 1 1 0 012 0zm5 1a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">41</span>
                                                    <span class="sr-only">replies</span>
                                                </button>
                                            </span>
                                            <span class="inline-flex items-center text-sm">
                                                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" x-description="Heroicon name: mini/eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M10 12.5a2.5 2.5 0 100-5 2.5 2.5 0 000 5z"></path>
                                                        <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 010-1.186A10.004 10.004 0 0110 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0110 17c-4.257 0-7.893-2.66-9.336-6.41zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">11.7k</span>
                                                    <span class="sr-only">views</span>
                                                </button>
                                            </span>
                                        </div>
                                        <div class="flex text-sm">
                                            <span class="inline-flex items-center text-sm">
                                                <button type="button" class="inline-flex space-x-2 text-gray-400 hover:text-gray-500">
                                                    <svg class="h-5 w-5" x-description="Heroicon name: mini/share" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M13 4.5a2.5 2.5 0 11.702 1.737L6.97 9.604a2.518 2.518 0 010 .792l6.733 3.367a2.5 2.5 0 11-.671 1.341l-6.733-3.367a2.5 2.5 0 110-3.475l6.733-3.366A2.52 2.52 0 0113 4.5z"></path>
                                                    </svg>
                                                    <span class="font-medium text-gray-900">Share</span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </li>              
                        </ul>
                        <ul role="list" class="space-y-4 hidden -my-4 divide-y divide-gray-200 listecategory">
                        
                            <li class="flex items-center space-x-3 py-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#">Leonard Krasner</a>
                                    </p>
                                </div>
                                <form method="POST" action="">
                                    <div class="flex-shrink-0">
                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                    </div>
                                </form>
                            </li> 
                            <li class="flex items-center space-x-3 py-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#">Leonard Krasner</a>
                                    </p>
                                </div>
                                <form method="POST" action="">
                                    <div class="flex-shrink-0">
                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                    </div>
                                </form>
                            </li>             
                        </ul>
                        <ul role="list" class="space-y-4 hidden listetages">
                            <li class="flex items-center space-x-3 py-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#">Leonard Krasner</a>
                                    </p>
                                </div>
                                <form method="POST" action="">
                                    <div class="flex-shrink-0">
                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                    </div>
                                </form>
                            </li> 
                            <li class="flex items-center space-x-3 py-4">
                                <div class="min-w-0 flex-1">
                                    <p class="text-sm font-medium text-gray-900">
                                        <a href="#">Leonard Krasner</a>
                                    </p>
                                </div>
                                <form method="POST" action="">
                                    <div class="flex-shrink-0">
                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                    </div>
                                </form>
                            </li>               
                        </ul>
                    </div>
                </main>
                <aside class=" xl:col-span-4 xl:block">
                    <div class="sticky top-4 space-y-4">
                        <section aria-labelledby="who-to-follow-heading">
                            <div class="rounded-lg bg-white shadow">
                                <div class="p-6">
                                    <h2 id="who-to-follow-heading" class="text-base font-medium text-gray-900">Category</h2>
                                    <div class="mt-6 flow-root">
                                        <ul role="list" class="-my-4 divide-y divide-gray-200">
                                            <li class="flex items-center space-x-3 py-4">
                                                <div class="min-w-0 flex-1">
                                                    <p class="text-sm font-medium text-gray-900">
                                                        <a href="#">Leonard Krasner</a>
                                                    </p>
                                                </div>
                                                <form method="POST" action="">
                                                    <div class="flex-shrink-0">
                                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                                    </div>
                                                </form>
                                            </li> 
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <button onclick="category()" class="block w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-center text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">View all</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section aria-labelledby="trending-heading">
                            <?php 
                                $tags = new  Tags();
                            ?>
                            <div class="rounded-lg bg-white shadow">
                                <div class="p-6">
                                    <h2 id="trending-heading" class="text-base font-medium text-gray-900">Tages</h2>
                                    <div class="mt-6 flow-root">
                                        <ul role="list" class="-my-4 divide-y divide-gray-200">
                                            <li class="flex items-center space-x-3 py-4">
                                                <div class="min-w-0 flex-1">
                                                    <p class="text-sm font-medium text-gray-900">
                                                        <a href="#">Leonard Krasner</a>
                                                    </p>
                                                </div>
                                                <form method="POST" action="">
                                                    <div class="flex-shrink-0">
                                                        <button type="submit"  class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                                        <button type="submit"  class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                                                    </div>
                                                </form>
                                            </li> 
                                        </ul>
                                    </div>
                                    <div class="mt-6">
                                        <button onclick="tages()" class="block w-full rounded-md border border-gray-300 bg-white px-4 py-2 text-center text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">View all</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <script src="./../../assets/js/adminPages.js"></script>
</body>
</html>

