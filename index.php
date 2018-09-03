<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TaskList</title>
    <link rel="stylesheet" href="lib/jquery/jquery-ui.min.css"/>
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="src/css/lobilist.css">
</head>
<body>

<div class="container">
    <div id="lobilist">
        <div id="lobilist-examples">
            <h1>TaskList</h1>
            <hr>
            <div>
                <div >
                    <div id="task-lists"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-ui.min.js"></script>
<script src="lib/jquery/jquery.ui.touch-punch-improved.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="src/js/lobilist.js"></script>

<script src="lib/lobibox/js/lobibox.min.js"></script>
<script>

    $(document).ready(function(){
       var init =  {
            lists: [
                {
                    id: 'init',
                    title: 'Lista inicial',
                    items: [                       
                        {
                            title: 'Criar o banco no xampp'
                        }                       
                    ]
                }
            ]
        };

        try {
            $.post("list.php",function(data) {
                if (data !== null && data.length)
                    init = JSON.parse(data.trim());                        
            });
        } catch (e) {
        } finally {
            $('#task-lists').lobiList(init);
        }  
    });
</script>
</body>
</html>
