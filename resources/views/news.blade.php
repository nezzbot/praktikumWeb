<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <h1>Top US News via API</h1>

    @foreach ($news as $article)
        <div>
            <h2>{{ $article['title'] }}</h2>
            <p>{{ $article['description'] }}</p>
            <p>{{ $article['content'] }}</p>
            <p>Published at: {{ $article['publishedAt'] }}</p>
            <a href="{{ $article['url'] }}" target="_blank">Read more</a>
            <img src="{{ $article['urlToImage'] }}" alt="Article Image" style="max-width: 100%;">
            <hr>
        </div>
    @endforeach
</body>
</html>

