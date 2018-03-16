function printRest() {
    var WinPrint = window.open('/resttemplate', '', 'left=50,top=50,width=500,height=640,toolbar=0,scrollbars=1,status=0');
    WinPrint.onload = function () {

        WinPrint.print();
        WinPrint.focus();
        WinPrint.close();
    };
}

function getData(data, url) {
    console.log(data);
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
       // dataType: 'json',
        success: function () {
            printRest()
        }
    });
}
