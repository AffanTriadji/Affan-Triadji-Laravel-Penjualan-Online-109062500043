@if (session('success'))
    <div class="card" style="border-left: 4px solid #2e7d32; background: #edf7ed; color: #1e4620;">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="card" style="border-left: 4px solid #d32f2f; background: #fdeded; color: #5f2120;">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="card" style="border-left: 4px solid #d32f2f; background: #fdeded; color: #5f2120;">
        <ul style="margin: 0; padding-left: 18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif