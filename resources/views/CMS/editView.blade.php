@include('partials.header')


<div class="cont">

    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>

                
                    
                @endforeach
            </ul>
      
        @endif
    </div>
    
    <form method="post" action="{{route('CMS.update', ['startup' => $startup])}}">
        @csrf
        @method('put')

        <div class="input-field">
            <label>Capstone Name</label>
            <input type="text" name="capstone_name" placeholder="Capstone Name" value="{{$startup->capstone_name}}">
        </div>
        <div class="input-field">
            <label>Description</label>
            <input type="text" name="description" placeholder="Describe your Project" value="{{$startup->description}}">
        </div>
        <div class="input-field">
            <label>SDG</label>
            <input type="text" name="sdg" placeholder="SDG Number and Category"value="{{$startup->sdg}}">
        </div>
        <div class="input-field">
            <label>TRL</label>
            <input type="text" name="trl" placeholder="Technology Readiness Level"value="{{$startup->trl}}">
        </div>
        <div class="input-field">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email"value="{{$startup->email}}">
        </div>
        <div class="input-field">
            <label>School</label>
            <input type="text" name="school" placeholder="Where did you go to school"value="{{$startup->school}}">
        </div>

        <input class="save-button" type="submit" value="Update">
    
    </form>
</div>

@include('partials.footer')