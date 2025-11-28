<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - Pendaki Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-900 via-green-700 to-emerald-600 text-white">
  <!-- Background gambar -->
  <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center opacity-25"></div>

  <!-- Kotak form -->
  <div class="relative bg-green-800/80 backdrop-blur-md p-10 rounded-3xl shadow-2xl w-96">
    <div class="text-center mb-6">
      <img src="https://cdn-icons-png.flaticon.com/512/869/869636.png" alt="Logo" class="w-16 mx-auto mb-3">
      <h1 class="text-3xl font-extrabold">Pendaki Store</h1>
      <p class="text-sm text-green-200">Buat akun untuk mulai berpetualang!</p>
    </div>

    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="mb-4">
        <label class="block text-sm mb-2 text-green-100">Nama Lengkap</label>
        <input type="text" name="name" class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-lime-400" required>
      </div>

      <div class="mb-4">
        <label class="block text-sm mb-2 text-green-100">Email</label>
        <input type="email" name="email" class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-lime-400" required>
      </div>

      <div class="mb-6">
        <label class="block text-sm mb-2 text-green-100">Password</label>
        <input type="password" name="password" class="w-full px-4 py-2 rounded-lg text-gray-800 focus:outline-none focus:ring-2 focus:ring-lime-400" required>
      </div>

      <button type="submit" class="w-full bg-lime-600 hover:bg-lime-700 py-2 rounded-lg font-semibold transition duration-200">
        Daftar Sekarang
      </button>
    </form>

    <p class="text-center text-sm text-green-200 mt-4">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-lime-300 hover:underline">Login di sini</a>
    </p>
  </div>
</body>
</html>