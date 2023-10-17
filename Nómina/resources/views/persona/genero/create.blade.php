<Form action="{{url('/genero')}}" method="POST" enctype="multipart/form-date">
    @csrf
    
    @include('persona.genero.form')

</Form>