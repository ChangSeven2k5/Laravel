<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculateSum</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <form class="form" method="POST" >
        @csrf 
        {{-- Chứng thực việc gửi dữ liệu --}}
        <div class="container">
            <h2 class="heading">Tong cua 2 so</h2>
            <div class="small-form down">
                <label class="numberA">Enter So A</label>
                <input type="number" class="number1" name="number1" value="{{ $numberA ?? '' }}">
            </div>
            <div class="small-form down">
                <label class="numberB">Enter So B</label>
                <input type="number" class="number2" name="number2" value="{{ $numberB ?? '' }}">
            </div>
            <button class="submit" name="submit">Submit</button>
            
            <div class="result">
                <label class="sum">
                    {{ isset($sum) ? 'Sum is: ' . $sum : 'Vui lòng nhập số và nhấn Submit' }}
                </label>
            </div>
        </div>
    </form>
</body>
</html>