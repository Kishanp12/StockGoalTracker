@extends('layouts.main')

@section('content')

<body class="bg-gray-300">
    <div class=" bg-gradient-to-br from-white to-gray-300">

        <div class="relative pb-24 bg-gray-700 lg:pt-12">
            <div class="absolute inset-x-0 bottom-0 h-64 bg-gray-300"></div>
            <div class="container relative px-4 mx-auto lg:px-0">
                <h2 class="mb-10 text-4xl font-bold text-purple-100 md:text-6xl ">Goal Calculator</h2>
                <div class="space-y-8 lg:flex lg:space-x-16 lg:space-y-0">

                    <div class="p-8 space-y-8 text-lg leading-relaxed text-gray-800 bg-white rounded shadow-2xl lg:w-2/3 lg:p-16">

                        <form action="{{ route('home') }}">
                            <label for="startingBalance">Starting Balance</label>
                            <input type="number" name="startingBalance" class="border border-2 border-opacity-100"><br><br>
                            <label for="goal">Goal</label>
                            <input type="number" name="goal" class="border border-2 border-opacity-100"><br><br>
                            <label>Choose a Goal Date from this list:</label>
                                <select name="months" class="border border-2 border-opacity-100">
                                  <option value="1">One Month</option>
                                  <option value="3">Three Months</option>
                                  <option value="6">Six Months</option>
                                  <option value="9">Nine Months</option>
                                  <option value="12">One Year</option>
                                  </select><br><br>
                            <input type="submit" value="Submit">
                        </form>

                    </div>

                    <div class="flex-grow space-y-4 text-lg italic">
                        <div class="p-10 text-green-400 bg-black rounded-lg">TSLA : <strong class="text-yellow-500 text-m">765</strong></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection
