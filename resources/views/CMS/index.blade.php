@include('partials.header')


<div class="cont">
    <h1>ITU NA ANG LISTAHAN NYO NG START-UPS</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <form action="{{route('CMS.insertView')}}">
    <input type="submit" value="Insert New Data">
    </form>
    
    <table border="1">
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
                <td><button><a href="{{route('CMS.edit' , ['startup' => $startup])}}">Edit</a></button></td>
                <td>
                    <form method="post" action="{{route('CMS.delete', ['startup' => $startup])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>

@include('partials.footer')
