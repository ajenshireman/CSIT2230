<?php
require_once 'includes/global.php';

?>
<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#searchField').keyup(function(){
                lookup($(this).val());
            }); 
        });
        
        function lookup ( inputString ) {
            if ( inputString.length == 0 ) {
                $('#searchResults').fadeOut();
            } else {
                $.post('search.php', { searchField: inputString }, function(data){
                    $('#searchResults').fadeIn();
                    $('#searchResults').html(data);
                });
            }
        }
    </script>
    <style>
        #searchForm input {
            width: 200px;
        }
        
        #searchResults {
            display: none;
            padding: 0;
            width: 200px;
            position: relative;
            left: 46px;
            background: #efefef;
        }
        
        #searchResults #results {
            padding: 0;
            margin: 0;
        }
        
        #searchResult result {
            display: block;
        }
    </style>
</head>
<body>
    <form id="searchForm">
        <div>
            Name: <input id="searchField" type="text" value="" />
        </div>
        <div id="searchResults"></div>
    </form>
</body>
</html>