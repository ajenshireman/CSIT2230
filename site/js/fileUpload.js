$(function(){
    $('input[name="btnAddItem"]').click(function(e){
        e.preventDefault();
        uploadFile();
    });
    
    $('input[name="btnCancelItem"]').click(function(e){
        e.preventDefault();
        //uploadFile();
    });
    
    $('#addItemForm').submit(function(e){
        e.preventDefault();
        //alert('submit');
        uploadFile();
    });
});

// Calculate the size of the file in kb, mb, etc
function bytesToSize ( bytes ) {
   var unit = ['B', 'KB', 'MB', 'GB'];
   if ( bytes == 0 ) { return 'n/a'; }
   var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
   return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + unit[i];
}

// When the user selects a file, get the fie information
function fileSelected () {
    // Get the seected file
    var file = document.getElementById('upload_itemImage').files[0];
    
    // Show the file information
    document.getElementById('fileName').innerHTML = 'Name: ' + file.name;
    document.getElementById('fileSize').innerHTML = 'Size: ' + bytesToSize(file.size);
    document.getElementById('fileType').innerHTML = 'Type: ' + file.type;
}

// Upload the file
function uploadFile () {
    // Get form data
    var formData = new FormData(document.getElementById('addItemForm'));
    
    // Create XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    // Assign event handlers
    xhr.upload.addEventListener('progress', uploadProgress, false);
    xhr.addEventListener('load', uploadComplete, false);
    xhr.addEventListener('error', uploadError, false);
    xhr.addEventListener('abort', uploadAbort, false);
    // POST the form data
    xhr.open('POST', 'addItem.php');
    xhr.send(formData);
}

// Event Handlers for file upload
function uploadProgress ( e ) {
    if ( e.lengthComputable ) {
        var total = e.total;
        var loaded = e.loaded;
        var percentComplete = Math.round( (loaded * 100) / total );
        
        document.getElementById('uploadPercent').innerHTML = percentComplete + '%';
        
    } else {
        document.getElementById('uploadPercent').innerHTML = 'n/a';
    }
}

function uploadComplete ( e ) {
    document.getElementById('uploadResponse').innerHTML = e.target.responseText;
    document.getElementById('uploadResopnse').style.display = 'block';
}

function uploadError ( e ) {
    alert('Error');
}

function uploadAbort ( e ) {
    alert('Upload Aborted');
}