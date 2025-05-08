<!DOCTYPE html>
<html>
<head>
    <title>Form Admin</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h1>Form Tambah Admin</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('admin.store') }}" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>No. Hp:</label>
        <input type="text" name="telepon" value="{{ old('telepon') }}">
        @error('telepon')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Alamat:</label>
        <input type="text" name="alamat" value="{{ old('alamat') }}">
        @error('alamat')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Role:</label>
        <select name="role">
            <option value="">-- Pilih Role --</option>
            <option value="super-admin" {{ old('role') == 'super-admin' ? 'selected' : '' }}>Super Admin</option>
            <option value="kasir" {{ old('role') == 'kasir' ? 'selected' : '' }}>Kasir</option>
        </select>
        @error('role')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
