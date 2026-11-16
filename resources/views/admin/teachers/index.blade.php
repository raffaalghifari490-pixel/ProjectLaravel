<x-admin.layout>

    <!-- Header -->
    <div class="mb-6">

        <h1 class="text-2xl font-bold text-white">
            Teachers
        </h1>

        <p class="text-gray-400">
            Daftar data guru
        </p>

    </div>


    <!-- Add Teacher -->
    <div class="mb-4">

        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">

            + Add Teacher

        </button>

    </div>


    <!-- Table -->
    <div class="overflow-x-auto bg-gray-800 rounded-xl shadow-lg">

        <table class="w-full text-sm text-left text-gray-300">

            <!-- Table Header -->
            <thead class="text-xs text-gray-300 uppercase bg-gray-700">

                <tr>

                    <th class="px-6 py-4">
                        No
                    </th>

                    <th class="px-6 py-4">
                        Name
                    </th>

                    <th class="px-6 py-4">
                        NIY
                    </th>

                    <th class="px-6 py-4">
                        Subjects
                    </th>

                    <th class="px-6 py-4">
                        Start Date
                    </th>

                </tr>

            </thead>


            <!-- Table Body -->
            <tbody>

                @foreach ($teachers as $teacher)
                <tr class="border-b border-gray-700 hover:bg-gray-700 transition">

                    <!-- No -->
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>


                    <!-- Name -->
                    <td class="px-6 py-4 font-medium text-white">
                        {{ $teacher['name'] }}
                    </td>


                    <!-- NIY -->
                    <td class="px-6 py-4">
                        {{ $teacher['niy'] }}
                    </td>


                    <!-- Subjects -->
                    <td class="px-6 py-4">
                        {{ $teacher ->subject -> name}}
                    </td>


                    <!-- Start Date -->
                    <td class="px-6 py-4">
                        {{ $teacher['start__date'] }}
                    </td>

                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

</x-admin.layout>