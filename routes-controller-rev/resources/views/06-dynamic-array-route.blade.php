<div>
    <h1>Students Page</h1>
    <p>Section: {{ $section }}</p>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>
</div>
