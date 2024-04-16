@include('partials.header')

<div class="container mx-auto mt-8 px-4 lg:px-0">
    <h1 class="text-4xl lg:text-5xl font-bold text-blue-500 mb-4 text-center">🚀 Startups Archive 2600</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="flex justify-center mt-8">
        <a href="{{ route('CMS.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">⤶ Back</a> 
    </div>
</div>

<div class="flex justify-center max-width:800px">
    <form method="post" action="{{route('CMS.update', ['startup' => $startup])}}">
        @csrf
        @method('put')

        <div class="input-field">
            <label class="text-blue-500 font-bold">Startup Name</label>
            <input type="text" name="capstone_name" placeholder="Startup name" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->capstone_name}}">
        </div>
        <div class="input-field">
            <label class="text-blue-500 font-bold">Description</label>
            <input type="text" name="description" placeholder="Describe your Project" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->description}}">
        </div>
        <div class="input-field">
            <label class="text-blue-500 font-bold">SDG</label>
            <input type="text" name="sdg" placeholder="SDG Number and Category" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->sdg}}">
        </div>
        <div class="input-field">
            <label class="text-blue-500 font-bold">TRL</label>
            <input type="text" name="trl" placeholder="Technology Readiness Level" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->trl}}">
        </div>
        <div class="input-field">
            <label class="text-blue-500 font-bold">Email</label>
            <input type="email" name="email" placeholder="Email" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->email}}">
        </div>
        <div class="input-field">
            <label class="text-blue-500 font-bold">School</label>
            <input type="text" name="school" placeholder="Where did you go to school" class="border border-gray-300 rounded-md px-4 py-2 mt-2 focus:outline-none focus:border-blue-500" value="{{$startup->school}}">
        </div>

        <div class="flex justify-center">
            <input class="save-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4" type="submit" value="💾 Update">
        </div>
    
    </form>
</div>

@include('partials.footer')
