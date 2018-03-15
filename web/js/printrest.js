function printRest(response) {
    var WinPrint = window.open('/resttemplate', '', 'left=50,top=50,width=500,height=640,toolbar=0,scrollbars=1,status=0');
    WinPrint.onload = function () {
        WinPrint.document.getElementById('width').innerHTML = response.width;
        WinPrint.document.getElementById('height').innerHTML = response.height;
        WinPrint.document.getElementById('ldf_name').innerHTML = response.ldf;
        JsBarcode(WinPrint.document.getElementById('code128'), response.barcode, {height: 40});
        WinPrint.print();
        WinPrint.focus();
        WinPrint.close();
    };
}

function getData(data, url) {
    $.ajax({
        url: url,
        type: 'POST',
        data: {'id': data},
        dataType: 'json',
        success: function (response) {
            printRest(response)
        }
    });
}
