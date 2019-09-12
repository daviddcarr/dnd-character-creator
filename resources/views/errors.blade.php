@if ($errors->any())
    <div class="bg-danger text-light w-100 rounded pt-3 mb-2">
        <ul>
            @foreach( $errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif