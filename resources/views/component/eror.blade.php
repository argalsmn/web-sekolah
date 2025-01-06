@if ($errors->any())
<div class="absolute w-full text-2xl capitalize font-semibold text-white bg-red-500 p-4">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
