@if ($errors->any())
<div class="alert alert-danger alert-dismissable">
    @foreach ( $errors->all() as $error )
    {!! $error !!} <br>
    @endforeach
</div>
@endif
