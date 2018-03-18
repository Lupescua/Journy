<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</head>

<body>

    <form id="search" action="" method="post">
        <input id="search_box" type="text" name="search">
        <input type="button" value="search">
    </form>

    <div id="search_text"></div>

    <script>
        $('#search').on('submit', function (submit) {
            submit.preventDefault();
            var search_val = $('#search_box').val();
            $.ajax({
                method: 'GET',
                url: '/api/endpoint/url/',
                // figure out the api
                contentType: 'application/json; charset=utf-8',
                data: {
                    searched_term: search_val
                },
                success: function(text){
                    $('#search_text').append(text);
                }
            });
        });
    </script>


</body>

</html>