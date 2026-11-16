<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resource/css/app.css')
</head>
<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>
<body>
  <div class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- mengambil component navbar -->
    <x-admin.navbar/>
    <x-admin.sidebar/>
    <!-- Sidebar -->


    <main class="p-4 md:ml-64 h-auto pt-20">
        <div class="mx-autio max-w-7xl px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
