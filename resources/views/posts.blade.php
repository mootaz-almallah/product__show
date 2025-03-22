<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المقالات</title>
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
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
        }

        h1 {
            color: #ffcc00;
            margin-bottom: 20px;
        }

        .post {
            background: rgba(255, 255, 255, 0.1);
            padding: 15px;
            margin: 15px 0;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .post:hover {
            transform: scale(1.05);
        }

        .post h2 {
            color: #ffcc00;
        }

        .post p {
            color: #ddd;
            line-height: 1.6;
        }

        .created-by {
            margin-top: 10px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            display: inline-block;
        }

        .created-by select {
            padding: 10px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid #ffcc00;
            border-radius: 5px;
            color: #ffcc00;
        }

        .created-by option {
            background: #333;
            color: #ffcc00;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>قائمة المقالات</h1>

        @foreach ($r as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post['description'] }}</p>
                @endforeach
                 
                <div class="created-by">
                    <h3>Created by:</h3>
                    @foreach ($s as $ss)
                    <div>

                        <select>
                            <option value="">{{ $ss->name }}</option>
                            <option value="">{{ $ss->email }}</option>
                        </select>
                    </div>
               
                </div>
            </div>
        @endforeach

    </div>

</body>
</html>
