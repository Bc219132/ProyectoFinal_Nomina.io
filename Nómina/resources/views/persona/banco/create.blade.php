<Form action="{{url('/banco')}}" method="POST" enctype="multipart/form-date">
    @csrf
    
    @include('persona.banco.form')

</Form>