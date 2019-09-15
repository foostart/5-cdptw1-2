<!DOCTYPE html>
<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/830.less', 'css/830.css');
?>
<html lang="en">
    <head>
        <title>830</title>
        <meta charset="utf-8">
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Basic usage demo">
        <meta name="author" content="David Deutsch">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <link href="<?php echo $url_path ?>/css/830.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-latest.js"></script>

     

    </head>
    <body>
        <?php include '../830/830-content.php'; ?>
        <script>
            $("#select_all").change(function(){   
                var status = this.checked; 
                 $('.checkbox').each(function(){ 
                    this.checked = status; 
                });
            });

            $('.checkbox').change(function(){ 
                if(this.checked == false){ 
                    $("#select_all")[0].checked = false; 
                }   
                if ($('.checkbox:checked').length == $('.checkbox').length ){ 
                    $("#select_all")[0].checked = true; 
                }
        });
</script>
    </body>
</html>