<html>
    <body>
        @foreach($contents as $content)
            <h1>{{$content->title}}</h1>
            <p>
                <a href="/contentTest/{{$content->id}}">{{$content->brief_description}}</a>
            </p>
        @endforeach

    </body>
</html>