<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-xl p-8 w-5/12">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-700">Update Data</h1>
        </div>

        <form action="{{ URL('student/create') }}" method="post" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block font-semibold text-gray-600">Name:</label>
                <input type="text" name="name" value="" id="name" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div>
                <label for="last_name" class="block font-semibold text-gray-600">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div>
                <label for="score" class="block font-semibold text-gray-600">Score:</label>
                <input type="number" name="score" id="score" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>
            <div>
                <label for="age" class="block font-semibold text-gray-600">Age:</label>
                <input type="number" name="age" id="age" required
                       class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div class="text-center">
                <button type="submit"
                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition">
                    Submit
                </button>
            </div>

        </form>
    </div>

</body>
</html>
