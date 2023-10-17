<Form action="{{url('/gerencia')}}" method="POST" enctype="multipart/form-date">
    @csrf
    
    @include('persona.gerencia.form')

</Form>