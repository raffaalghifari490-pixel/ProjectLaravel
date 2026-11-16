<x-admin.layout>

    <!-- Header -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white">
            Subjects
        </h1>

        <p class="text-gray-400">
            Daftar data Subject
        </p>
    </div>

    <!-- Add Subjects -->
    <div class="mb-4">
        <button type="button" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
            + Add Subjects
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
                        Teacher list
                    </th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                @forelse ($subjects as $subject)
                <tr class="border-b border-gray-700 hover:bg-gray-700 transition">

                    <!-- No -->
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>

                    <!-- Name -->
                    <td class="px-6 py-4 font-medium text-white">
                        {{ $subject->name }}
                    </td>
                    <td class="px-6 py-4 font-medium text-white">
                        {{ $subject->teachers->name }}
                    </td>

                </tr>
                @empty
                <tr>
                    <td colspan="2" class="px-6 py-4 text-center text-gray-400">
                        Belum ada data Subjects.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</x-admin.layout>