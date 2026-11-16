<!-- Modal Add Student -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full bg-black/60 p-4">

    <!-- Modal Container -->
    <div class="relative w-full max-w-xl">

        <div class="relative p-8 bg-gray-800 rounded-xl shadow-2xl">

            <!-- Header -->
            <div class="flex justify-between items-center pb-5 mb-6 border-b border-gray-600">

                <h3 class="text-xl font-semibold text-white">
                    Add Student
                </h3>

                <button type="button" data-modal-hide="defaultModal" class="text-gray-400 hover:text-white text-2xl">
                    &times;
                </button>

            </div>

            <!-- Form -->
            <form action="{{ route('admin.student.store') }}" method="POST" class="p-4">
                @csrf

                <div class="grid grid-cols-1 gap-5">

                    <!-- NIS -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-white">NIS</label>
                        <input type="text" name="nis"
                            class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Enter NIS" required>
                    </div>

                    <!-- Name -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-white">Name</label>
                        <input type="text" name="name"
                            class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Enter student name" required>
                    </div>


                    <!-- Classroom -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-white">
                            Classroom
                        </label>

                        <select name="classroom_id" id="classroom_id" required
                            class="w-full p-3 text-sm text-gray-900 bg-gray-50 border border-gray-300 rounded-lg">

                            <option value="">-- Pilih Kelas --</option>

                            @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}"
                                {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                                {{ $classroom->name }}
                            </option>
                            @endforeach

                        </select>
                    </div>

                    <!-- Address -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-white">Address</label>
                        <input type="text" name="address"
                            class="w-full p-3 rounded-lg bg-gray-700 border border-gray-600 text-white focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            placeholder="Enter address" required>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="flex gap-3 mt-7">

                    <button type="submit"
                        class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition">
                        + Add Student
                    </button>

                    <button type="button" data-modal-hide="defaultModal"
                        class="px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg transition">
                        Cancel
                    </button>

                </div>

            </form>

        </div>
    </div>
</div>