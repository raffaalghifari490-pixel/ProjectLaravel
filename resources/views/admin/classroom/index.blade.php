<x-admin.layout>

    <!-- Header -->
    <div class="mb-6">

        <h1 class="text-2xl font-bold text-white">
            Classroom
        </h1>

        <p class="text-gray-400">
            Daftar data kelas
        </p>

    </div>

    <!-- Table -->
    <div class="bg-gray-800 rounded-lg overflow-hidden">

        <table class="w-full text-left text-white">

            <thead class="bg-gray-700">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Major</th>
                    <th class="px-6 py-3">Students</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($classrooms as $classroom)
                <tr class="border-b border-gray-700">

                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $classroom->name }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $classroom->major }}
                    </td>

                    <td class="px-6 py-4">
                        @foreach ($classroom->students as $students)
                        {{ $students->name }}<br>
                        @endforeach
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="3" class="px-6 py-4 text-center">
                        Belum ada data classroom.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</x-admin.layout>