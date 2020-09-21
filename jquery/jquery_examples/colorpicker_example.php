<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Colorpicker for Twitter Bootstrap</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="jquery_colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <section id="typeahead">
                    <div class="col-md-7 columns">
                        <div class="well">
                            <input type="text" class="form-control bscp" value="#8fff00" id="cp1" >
                        </div>
                    </div>
            </section>
        </div>
         <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
         <script src="jquery_colorpicker/bootstrap-colorpicker.min.js"></script>
       
        <script>
            $(function() {
                var _createColorpickers = function() {
                    $('#cp1').colorpicker({
                        format: 'hex'
                    });
               }
                _createColorpickers();
            });
        </script>
    </body>
</html>