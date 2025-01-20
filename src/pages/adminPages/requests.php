<?php  require_once('header.php')?>
                <main class="col-span-9">
<?php  require_once("popaps.php"); ?> 



<body class="bg-white dark:bg-gray-900">

 

    <!-- Table Container -->
    <div class="container mx-auto p-6">
        <div class="overflow-x-auto rounded-lg shadow">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <!-- Table Header -->
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <button class="flex items-center">
                                Name
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                                </svg>
                            </button>
                        </th>
                        <th scope="col" class="px-6 py-3">cour</th>
                        <th scope="col" class="px-6 py-3">Image</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody>
                   
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="px-6 py-4">Jane Smith</td>
                        <td class="px-6 py-4">Project Manager</td>
                        <td class="px-6 py-4">
                            <img src="https://res.cloudinary.com/djv4xa6wu/image/upload/v1735722161/AbhirajK/Abhirajk2.webp" alt="Jane" class="w-10 h-10 rounded-full">
                        </td>
                        <td class="px-6 py-4 text-red-500">Inactive</td>
                        <td class="px-6 py-4">
                            
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Accept</a>
                            <a href="#" class="ml-2 text-red-600 hover:text-red-900">Reject</a> 
                        </td>
                        </tr>
                    
                </tbody>
            </table>

            
        </div>
    </div>
    <script src="./../../assets/js/adminPages.js"></script>    
</body>
</html>