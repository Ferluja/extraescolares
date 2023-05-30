<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn btn-close" 
            data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
@endif
</div>