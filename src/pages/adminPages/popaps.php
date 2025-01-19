<?php   
require_once('./../../classes/Admin.php');  
if(isset($_POST['titreCategory']) && isset($_POST['saveCategory']))
{
    $admin = new Admin();
    $category = new Category();
    $category->setName($_POST['titreCategory']);
    $admin->createCategory($category);
}
if(isset($_POST['titreTags']) && isset($_POST['saveTags']))
{
    $admin = new Admin();
    $tags = new Tags();
    $tags->setName($_POST['titreTags']);
    $admin->createTags($tags);
}
?>
                    <div class="flex min-h-screen z-30 hidden absolute inset-0 items-center justify-center bg-black/30 p-4 popapCategourie">
                        <div class="w-full max-w-md">
                            <div class="relative rounded-lg bg-white p-6 shadow-lg">
                                <!-- Header Section -->
                                <div class="mb-6 flex items-center justify-between">
                                    <h2 class="text-2xl font-semibold text-gray-800">Add a Category</h2>
                                    <button 
                                        class="absolute right-4 top-4 text-gray-400 hover:text-gray-600 focus:outline-none" 
                                        onclick="toggelPopapCategourie()">
                                        <svg 
                                            class="h-6 w-6" 
                                            fill="none" 
                                            stroke="currentColor" 
                                            viewBox="0 0 24 24" 
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path 
                                                stroke-linecap="round" 
                                                stroke-linejoin="round" 
                                                stroke-width="2" 
                                                d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Form Section -->
                                <form action="" method="POST" class="space-y-4">
                                    <!-- Title Field -->
                                    <div>
                                        <label 
                                            for="titreCategory" 
                                            class="block mb-2 text-sm font-medium text-gray-700">
                                            Title
                                        </label>
                                        <input 
                                            type="text" 
                                            id="titreCategory" 
                                            name="titreCategory" 
                                            class="w-full rounded-lg border border-gray-300 p-3 text-sm shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                                            placeholder="Enter the category title" 
                                            required />
                                    </div>

                                    <!-- Description Field -->
                                    <div>
                                        <label 
                                            for="description" 
                                            class="block mb-2 text-sm font-medium text-gray-700">
                                            Description
                                        </label>
                                        <textarea 
                                            id="description" 
                                            name="description" 
                                            rows="4" 
                                            class="w-full rounded-lg border border-gray-300 p-3 text-sm shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" 
                                            placeholder="Enter the category description" 
                                            required></textarea>
                                    </div>

                                    <!-- Image Field -->
                                    <div>
                                        <label 
                                            for="image" 
                                            class="block mb-2 text-sm font-medium text-gray-700">
                                            Image
                                        </label>
                                        <input 
                                            type="file" 
                                            id="image" 
                                            name="image" 
                                            class="w-full text-sm text-gray-600 file:mr-4 file:rounded-lg file:border-0 file:bg-gray-100 file:py-2 file:px-4 file:text-sm file:font-medium file:text-gray-700 hover:file:bg-gray-200" />
                                    </div>

                                    <!-- Submit Button -->
                                    <div>
                                        <button 
                                            type="submit" 
                                            name="saveCategory" 
                                            class="w-full rounded-lg bg-gray-900 py-2.5 text-sm font-medium text-white transition duration-300 hover:bg-gray-800" >
                                            Save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                        <!--  -->
                        <!--  -->
                    <div class="flex min-h-screen z-30 hidden absolute top-[0px] bottom-[0px] left-[0px] right-[0px] items-center justify-center bg-black/30 p-4 popapTages ">
                        <div class="w-full max-w-sm">
                            <div class="relative rounded-2xl bg-white p-6 shadow">
                                <div class="mb-4 flex items-center justify-between">
                                    <h2 class="text-xl font-semibold text-gray-900">Add a tages</h2>
                                    <button class="absolute right-5 top-5 text-gray-400 hover:text-gray-600" onclick="toggelPopapTages()">
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                                <p class="mb-4 text-center text-sm">You can add a new tages..</p>
                                <form action="" method="POST">
                                    <textarea 
                                    name="titreTags" 
                                    class="mb-3 w-full rounded-lg border border-gray-200 p-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                    rows="4" 
                                    placeholder="Enter the tages title"></textarea>
                                    
                                    <input 
                                    name="saveTags" 
                                    value="save" 
                                    class="w-full rounded-lg bg-gray-900 py-2.5 text-sm font-medium text-white transition duration-300 hover:bg-gray-800" 
                                    type="submit"/>
                                </form>
                            </div>
                        </div>
                    </div>

                     <!--  -->