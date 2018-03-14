<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>examples</title>
    <link rel="stylesheet" href="assets/css/ssi-uploader.css"/>
</head>
<body>


<table class="ie table">
    
    <tr>
        <td>
            <input type="file" id="ssi-uploader" name="myInputName" multiple>
        </td>
    </tr>

</table>
<script src="https://code.jquery.com/jquery-1.12.3.min.js"
        integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="assets/js/ssi-uploader.js"></script>
<script>
    //ssi-uploader options
    $('#ssi-uploader').ssi_uploader({
        resultKey: 'validationKey',
        url: 'uplodadAction.php',
        dropZone: false,
        allowed: ['jpg', 'gif', 'txt', 'png', 'pdf']
    });

    // $('#ssi-uploader').ssi_uploader({url: 'uplodadAction.php', dropZone: false, allowed: ['jpg', 'gif', 'txt', 'png', 'pdf']});
</script>
</body>
</html>



