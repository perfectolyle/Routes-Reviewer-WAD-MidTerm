<div>
    <h1>Dynamic Array Page</h1>
    <h3>Students Page</h3>
    <p>Section: {{ $section }}</p>
    <ul>
        @foreach ($students as $student)
            <li>{{ $student }}</li>
        @endforeach
    </ul>
</div>
