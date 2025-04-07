{{-- <form action="{{ url('admin/leads/import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" class="form-control">
    <button type="submit" class="btn btn-success">Import CSV</button>
</form> --}}

<form action="{{ url('admin/leads/import') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded bg-light">
    @csrf
    <div class="mb-3">
        <label for="csvFile" class="form-label fw-bold">Upload CSV File</label>
        <input type="file" name="file" id="csvFile" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success w-100">
        <i class="la la-file-import"></i> Import CSV
    </button>
</form>
