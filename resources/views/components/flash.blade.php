<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    @if (Session::has('mensaje'))
    <div class="alert alert-{{Session::get('css')}} alert-dismissible fade show" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="btn btn-close" 
            data-bs-dismiss="alert" aria-label="Close"></button>

    </div>
@endif
</div>