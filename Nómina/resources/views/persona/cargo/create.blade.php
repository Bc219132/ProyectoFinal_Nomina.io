<Form action="{{url('/cargo')}}" method="POST" enctype="multipart/form-date">
    @csrf
    
    @include('persona.cargo.form')

</Form>