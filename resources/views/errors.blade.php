@if ($errors->any())
    <div style="color: red;">
        <ul style="list-style-type: none; padding-left: 0; text-align:center">
            @foreach ($errors->all() as $error)
                <br>
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
