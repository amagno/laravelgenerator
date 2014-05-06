<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

    <style>
        body { padding-top: 20px; }
    </style>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')

        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
{{ HTML::script('/assets/tablesorter/jquery.tablesorter.min.js')}}

<script>
    $(document).ready(function(){
        $('input[name="searchtable"]').keyup(function(){
            var searchitem = $(this).val();

            if(searchitem.length > 3){
                var match = $('tr.data-row:contains("' + searchitem + '")');
                var nomatch = $('tr.data-row:not(:contains("' + searchitem + '"))');
                match.addClass('info');
                nomatch.css('display', 'none');
            }else {
                $('tr.data-row').css('display', '');

                $('tr.data-row').removeClass('info');
            }
        })
    })
</script>
</body>
</html>