
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HSTU Alumni Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
   
    <div class="flex flex-col md:flex-row">
        <!-- Sidebar -->
        <nav class="w-full md:w-64 bg-white shadow-lg md:h-screen p-5">
            <h2 class="text-3xl font-bold text-center text-blue-600 mb-6">HSTU Alumni</h2>
            <ul class="space-y-3">
                <li>
                    <a href="#dashboard" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M3 12h18M3 21h18"/></svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#alumni" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11v2a4 4 0 01-8 0v-2m4-7v.01M8.3 16.3A9.956 9.956 0 0012 18a9.956 9.956 0 003.7-1.7"/></svg>
                        <span class="ml-3">Alumni Management</span>
                    </a>
                </li>
                <li>
                    <a href="#events" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8V4m0 0H8m4 0h4m-4 4v8m0 0h4m-4 0H8"/></svg>
                        <span class="ml-3">Events Management</span>
                    </a>
                </li>
                <li>
                    <a href="#notifications" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405 1.405A2.5 2.5 0 0116 22h-8a2.5 2.5 0 01-2.595-2.595L4 17h5m0 0v-6a6 6 0 00-6-6m0 0h12"/>
                        </svg>
                        <span class="ml-3">Notifications</span>
                        <span class="bg-red-500 text-white text-xs rounded-full px-1 ml-2">7</span> <!-- Notification count -->
                    </a>
                </li>
                
                
               
                <li>
                    <a href="#settings" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8.25v7.5M8.25 12H15.75M3 3h18v18H3V3z"/></svg>
                        <span class="ml-3">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#roles" class="flex items-center p-3 rounded-lg text-gray-700 hover:bg-blue-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m0 0l3-3m-3 3V8m-6 12v-4l-3-3m0 0l-3 3m3-3v4"/></svg>
                        <span class="ml-3">User Roles</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <div class="bg-white shadow rounded-lg mb-6">
                <div class="p-4 border-b bg-blue-100">
                    <h3 class="text-lg font-bold text-blue-600">Notifications</h3>
                </div>
                <div class="p-4">
                    <ul class="space-y-2">
                        <li class="bg-gray-200 p-2 rounded">New alumni registration: John Doe</li>
                        <li class="bg-gray-200 p-2 rounded">Upcoming event: Annual Meetup on Dec 15, 2024</li>
                        <li class="bg-gray-200 p-2 rounded">New notification sent!</li>
                    </ul>
                </div>
            </div>

            <h2 class="text-3xl font-semibold mb-6">Dashboard</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-blue-100 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">Total Alumni</h3>
                    <p class="text-2xl">1,200</p>
                </div>
                <div class="bg-green-100 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">Recent Registrations</h3>
                    <p class="text-2xl">15</p>
                </div>
                <div class="bg-yellow-100 p-4 rounded-lg shadow">
                    <h3 class="font-bold text-yellow-600">Notifications</h3>
                    <p class="text-2xl">8</p>
                </div>
            </div>

            <div id="alumni" class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Alumni Management</h2>

                <!-- Search and Filter -->
                <div class="flex flex-col md:flex-row items-center mb-4">
                    <input type="text" placeholder="Search Alumni..." class="border rounded-lg p-2 flex-1" />
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg md:ml-2 mt-2 md:mt-0">Search</button>
                </div>

                <!-- Add New Alumni Button -->
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 transition hover:bg-blue-500">Add New Alumni</button>
                
                <!-- Alumni Table -->
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-4 text-left">Select</th>
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">Year of Graduation</th>
                            <th class="py-3 px-4 text-left">Email</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4"><input type="checkbox" /></td>
                            <td class="py-2 px-4">John Doe</td>
                            <td class="py-2 px-4">2020</td>
                            <td class="py-2 px-4">johndoe@example.com</td>
                            <td class="py-2 px-4">
                                <button class="bg-yellow-400 text-white px-2 py-1 rounded-lg transition hover:bg-yellow-300">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg transition hover:bg-red-400">Delete</button>
                            </td>
                        </tr>
                        <!-- Additional alumni rows -->
                    </tbody>
                </table>

                <!-- Bulk Action Buttons -->
                <div class="flex justify-between mt-4">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-lg transition hover:bg-red-400">Delete Selected</button>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg transition hover:bg-blue-500">Send Notification</button>
                </div>
            </div>

            <!-- Events Management Section -->
            <div id="events" class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Events Management</h2>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 transition hover:bg-blue-500">Create New Event</button>
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-4 text-left">Event Name</th>
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Location</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4">Annual Meetup</td>
                            <td class="py-2 px-4">Dec 15, 2024</td>
                            <td class="py-2 px-4">University Hall</td>
                            <td class="py-2 px-4">
                                <button class="bg-yellow-400 text-white px-2 py-1 rounded-lg transition hover:bg-yellow-300">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg transition hover:bg-red-400">Delete</button>
                            </td>
                        </tr>
                        <!-- Additional events rows -->
                    </tbody>
                </table>
            </div>

            <!-- Notification Management Section -->
            <div id="notifications" class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Notification Management</h2>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 transition hover:bg-blue-500">Send New Notification</button>
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-4 text-left">Message</th>
                            <th class="py-3 px-4 text-left">Date</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4">Welcome to the Alumni Network!</td>
                            <td class="py-2 px-4">Oct 5, 2024</td>
                            <td class="py-2 px-4">
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg transition hover:bg-red-400">Delete</button>
                            </td>
                        </tr>
                        <!-- Additional notification rows -->
                    </tbody>
                </table>
            </div>

            <!-- User Roles Section -->
            <div id="roles" class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">User Roles Management</h2>
                <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mb-4 transition hover:bg-blue-500">Manage Roles</button>
                <table class="min-w-full bg-white rounded-lg shadow">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-3 px-4 text-left">Role</th>
                            <th class="py-3 px-4 text-left">Permissions</th>
                            <th class="py-3 px-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4">Admin</td>
                            <td class="py-2 px-4">Full Access</td>
                            <td class="py-2 px-4">
                                <button class="bg-yellow-400 text-white px-2 py-1 rounded-lg transition hover:bg-yellow-300">Edit</button>
                                <button class="bg-red-500 text-white px-2 py-1 rounded-lg transition hover:bg-red-400">Delete</button>
                            </td>
                        </tr>
                        <!-- Additional role rows -->
                    </tbody>
                </table>
            </div>



            <form action="add_alumni.php" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="year_of_graduation" placeholder="Year of Graduation" required>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Add Alumni</button>
            </form>
            
        </main>
    </div>



</body>
</html>
