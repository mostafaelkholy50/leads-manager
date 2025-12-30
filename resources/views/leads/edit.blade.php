<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lead</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-12 max-w-2xl">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-purple-600 to-pink-700 px-8 py-6">
                <h1 class="text-3xl font-bold text-white flex items-center">
                    <i class="fas fa-edit mr-3"></i> Edit Lead
                </h1>
            </div>

            <div class="p-8">
                <form action="{{ route('leads.update', $lead) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" value="{{ old('name', $lead->name) }}"
                                class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-200 focus:border-purple-500 transition"
                                required>
                            @error('name') <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email <span
                                    class="text-red-500">*</span></label>
                            <input type="email" name="email" value="{{ old('email', $lead->email) }}"
                                class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-200 focus:border-purple-500 transition"
                                required>
                            @error('email') <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $lead->phone) }}"
                                class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-200 focus:border-purple-500 transition">
                            @error('phone') <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Status <span
                                    class="text-red-500">*</span></label>
                            <select name="status"
                                class="w-full px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-4 focus:ring-purple-200 focus:border-purple-500 transition"
                                required>
                                <option value="new" {{ old('status', $lead->status) == 'new' ? 'selected' : '' }}>New
                                </option>
                                <option value="contacted" {{ old('status', $lead->status) == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                <option value="closed" {{ old('status', $lead->status) == 'closed' ? 'selected' : '' }}>
                                    Closed</option>
                            </select>
                            @error('status') <span class="text-red-600 text-sm mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 mt-10">
                        <a href="{{ route('leads.index') }}"
                            class="px-6 py-3 bg-gray-200 text-gray-800 font-medium rounded-xl hover:bg-gray-300 transition">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-8 py-3 bg-gradient-to-r from-purple-600 to-pink-700 text-white font-medium rounded-xl hover:from-purple-700 hover:to-pink-800 transition shadow-lg">
                            <i class="fas fa-save mr-2"></i> Update Lead
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
