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
    
    <form method="post" action="{{route('CMS.insert')}}">
        @csrf
        @method('post')

        <div class="input-field">
            <label>Capstone Name</label>
            <input type="text" name="capstone_name" placeholder="Capstone Name">
        </div>
        <div class="input-field">
            <label>Description</label>
            <input type="text" name="description" placeholder="Describe your Project">
        </div>
        <div class="input-field">
            <label>SDG</label>
            <input type="text" name="sdg" placeholder="SDG Number and Category">
        </div>
        <div class="input-field">
            <label>TRL</label>
            <input type="text" name="trl" placeholder="Technology Readiness Level">
        </div>
        <div class="input-field">
            <label>Email</label>
            <input type="email" name="email" placeholder="Email">
        </div>
        <div class="input-field">
            <label>School</label>
            <input type="text" name="school" placeholder="Where did you go to school">
        </div>

        <input class="save-button" type="submit" value="Save">
    
    </form>
</div>

@include('partials.footer')