<x-admin.layout>

    <!-- Header -->
    <div class="mb-6">

        <h1 class="text-2xl font-bold text-white">
            Students
        </h1>

        <p class="text-gray-400">
            Daftar data siswa
        </p>

    </div>


    <!-- Add Student -->
    <div class="mb-4">

        <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
            class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
            + Add Student
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
                        NIS
                    </th>

                    <th class="px-6 py-4">
                        Name
                    </th>

                    <th class="px-6 py-4">
                        Classroom
                    </th>

                    <th class="px-6 py-4">
                        address
                    </th>

                    <th class="px-6 py-4">
                        Status
                    </th>

                </tr>

            </thead>


            <!-- Table Body -->
            <tbody>

                @foreach ($students as $student)
                <tr class="border-b border-gray-700 hover:bg-gray-700 transition">

                    <!-- No -->
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>


                    <!-- NIS -->
                    <td class="px-6 py-4">
                        {{ $student['nis'] }}
                    </td>


                    <!-- Name -->
                    <td class="px-6 py-4 font-medium text-white">
                        {{ $student['name'] }}
                    </td>


                    <!-- Classroom -->
                    <td class="px-6 py-4">
                        {{ $student->Classroom->name}}
                    </td>

                    <!-- Classroom -->
                    <td class="px-6 py-4">
                        {{ $student['address'] }}
                    </td>


                    <!-- Status -->
                    <td class="px-6 py-4">

                        @if ($student->status == 1)
                        <span class="px-3 py-1 text-sm font-medium text-green-400 bg-green-900 rounded-full">
                            Active
                        </span>
                        @else
                        <span class="px-3 py-1 text-sm font-medium text-red-400 bg-red-900 rounded-full">
                            Inactive
                        </span>
                        @endif

                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>

    </div>

    <!-- Modal Add Student -->
    @include('admin.student.create')

</x-admin.layout>