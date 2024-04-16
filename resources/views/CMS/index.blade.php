@include('partials.header')


<div class="con">
    <h1 class="text-7x1 font-bold text-blue-500"> 🚀 Startups Archive 2600</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <form action="{{route('CMS.insertView')}}">
    <input type="submit" value="Insert New Data" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Capstone Name</th>
            <th>Description</th>
            <th>SDG</th>
            <th>TRL</th>
            <th>Email</th>
            <th>School</th>
            <th>Actions</th>
        </tr>
        @foreach ($startups as $startup)
            <tr>
                <td>{{$startup->id}}</td>
                <td>{{$startup->capstone_name}}</td>
                <td>{{$startup->description}}</td>
                <td>{{$startup->sdg}}</td>
                <td>{{$startup->trl}}</td>
                <td>{{$startup->email}}</td>
                <td>{{$startup->school}}</td>
                <td><button><a href="{{route('CMS.edit' , ['startup' => $startup])}}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a></button></td>
                <td>
                    <form method="post" action="{{route('CMS.delete', ['startup' => $startup])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="inline-block bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@include('partials.footer')
