<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 10 Image Upload Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h2>Laravel 10 Image Upload Example</h2>
        </div>
        <div class="panel-body">
            <!-- Pesan Sukses -->
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                <!-- Menampilkan gambar yang berhasil diunggah -->
                <img src="{{ Storage::url(Session::get('image')) }}" alt="Uploaded Image" class="img-thumbnail">
            @endif

            <!-- Form Unggah Gambar -->
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="inputImage" class="form-label">Pilih Gambar:</label>
                    <input type="file" name="image" id="inputImage" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Unggah</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
