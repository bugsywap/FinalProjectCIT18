@include('partials.header')

<div class="container mx-auto mt-8 px-4 lg:px-0">
    <h1 class="text-4xl lg:text-5xl font-bold text-blue-500 mb-4 text-center">🚀 Startups Archive 2600</h1>
    @if (session()->has('success'))
        <div class="bg-green-200 text-green-800 py-2 px-4 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-center mt-8">
        <form action="{{ route('CMS.insertView') }}">
            <input type="submit" value="📝 Register New Startup" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
</div>

<div class="flex justify-center container mx-auto mt-8">
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-300">
            <thead>
                <tr class="text-blue-500 bg-red-900 font-bold border border-red-200">
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">ID</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Capstone Name</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Description</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">SDG</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">TRL</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Email</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">School</th>
                    <th class="px-4 py-2 bg-gray-100 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($startups as $startup)
                    <tr class="border-b border-gray-300">
                        <td class="px-4 py-2">{{ $startup->id }}</td>
                        <td class="px-4 py-2">{{ $startup->capstone_name }}</td>
                        <td class="px-4 py-2">{{ $startup->description }}</td>
                        <td class="px-4 py-2">{{ $startup->sdg }}</td>
                        <td class="px-4 py-2">{{ $startup->trl }}</td>
                        <td class="px-4 py-2">{{ $startup->email }}</td>
                        <td class="px-4 py-2">{{ $startup->school }}</td>
                        <td class="px-4 py-2">
                            <a href="{{ route('CMS.edit', ['startup' => $startup]) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form class="inline-block" method="post" action="{{ route('CMS.delete', ['startup' => $startup]) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('partials.footer')
