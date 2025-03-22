<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة مقال جديد</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #2b5876, #4e4376);
            color: #fff;
            text-align: center;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            max-width: 500px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }

        input {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        textarea {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 100px;
        }

        button {
            background: #ffcc00;
            color: #333;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #e6b800;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>إضافة مقال جديد</h1>
        <form action="{{ route('posts.index') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="عنوان المقال" required>
            <textarea name="description" placeholder="وصف المقال" required></textarea>
            <button type="submit">إضافة المقال</button>
        </form>
        
    </div>
</body>
</html>
