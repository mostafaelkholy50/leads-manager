<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads Manager</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-700 px-8 py-6">
                <h1 class="text-3xl font-bold text-white">Leads Management</h1>
                <p class="text-blue-100 mt-2">Manage your leads efficiently</p>
            </div>

            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <a href="{{ route('leads.create') }}"
                        class="inline-flex items-center bg-indigo-600 text-white font-medium px-6 py-3 rounded-xl hover:bg-indigo-700 transition shadow-md">
                        <i class="fas fa-plus mr-2"></i> Add New Lead
                    </a>
                </div>

                @if(session('success'))
                    <div
                        class="bg-green-50 border border-green-200 text-green-800 px-6 py-4 rounded-xl mb-8 flex items-center">
                        <i class="fas fa-check-circle mr-3 text-xl"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b-2 border-gray-200">
                                <th class="text-left py-4 px-6 font-semibold text-gray-700">Name</th>
                                <th class="text-left py-4 px-6 font-semibold text-gray-700">Email</th>
                                <th class="text-left py-4 px-6 font-semibold text-gray-700">Phone</th>
                                <th class="text-left py-4 px-6 font-semibold text-gray-700">Status</th>
                                <th class="text-left py-4 px-6 font-semibold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($leads as $lead)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="py-5 px-6 font-medium">{{ $lead->name }}</td>
                                    <td class="py-5 px-6 text-gray-600">{{ $lead->email }}</td>
                                    <td class="py-5 px-6 text-gray-600">{{ $lead->phone ?? '-' }}</td>
                                    <td class="py-5 px-6">
                                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium
                                                {{ $lead->status == 'new' ? 'bg-blue-100 text-blue-800' : '' }}
                                                {{ $lead->status == 'contacted' ? 'bg-amber-100 text-amber-800' : '' }}
                                                {{ $lead->status == 'closed' ? 'bg-green-100 text-green-800' : '' }}">
                                            <i class="fas fa-circle text-xs mr-2"></i>
                                            {{ ucfirst($lead->status) }}
                                        </span>
                                    </td>
                                    <td class="py-5 px-6">
                                        <a href="{{ route('leads.edit', $lead) }}"
                                            class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium mr-6">
                                            <i class="fas fa-edit mr-1"></i> Edit
                                        </a>
                                        <form action="{{ route('leads.destroy', $lead) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 font-medium"
                                                onclick="return confirm('Are you sure you want to delete this lead?')">
                                                <i class="fas fa-trash mr-1"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if($leads->isEmpty())
                        <div class="text-center py-12 text-gray-500">
                            <i class="fas fa-inbox text-5xl mb-4 opacity-30"></i>
                            <p class="text-xl">No leads found. Start by adding a new one!</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>

</html>
