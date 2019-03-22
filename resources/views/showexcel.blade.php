<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link href="{{ asset('vendors/dynatable/jquery.dynatable.css') }}" rel="stylesheet" type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('vendors/dynatable/jquery.dynatable.css') }}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/clusterize.js/0.18.0/clusterize.css" rel="stylesheet">
    <link href="https://unpkg.com/tabulator-tables@4.2.3/dist/css/tabulator.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  




</head>
<body>

        <table id="showExcel" class="cell-border compact stripe">
                <thead>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

            <!--HTML-->

            
            <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('vendors/dynatable/jquery.dynatable.js') }}" type="text/javascript"></script>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/clusterize.js/0.18.0/clusterize.css" rel="stylesheet">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/clusterize.js/0.18.0/clusterize.js"></script>
            <script type="text/javascript" src="https://unpkg.com/tabulator-tables@4.2.3/dist/js/tabulator.min.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
            <script>
                $(document).ready(function(){
                    data = {!! $json !!};
                    console.log(data);
                    Object.values(data.columns).forEach(column => {
                        $('#showExcel').children().children().append("<th>"+column+"</th>");
                    });
                    $('#showExcel').dynatable({
                        table: {
                            defaultColumnIdStyle: 'trimDash'
                        },
                        dataset: {
                            records: data.data
                        }
                    });
                })
                // JavaScript
                // var clusterize = new Clusterize({
                // scrollId: 'scrollArea',
                // contentId: 'contentArea'
                // });

            </script>
    
</body>
</html>
