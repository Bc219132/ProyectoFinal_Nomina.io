<div class="mx-auto">
    <Form action="{{url('/dolar/'.$dolar->id)}}" method="POST" enctype="multipart/form-date">
        @csrf
        {{ method_field('PATCH')}}
        @include('persona.dolar.form')

    </Form>
</div>
