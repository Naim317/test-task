$(document).ready(function () {
    $('#upload_csv').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url: "test.php",
            method: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success: function (jsonData) {
                toastr.success('File upload Successfull !!!');
                $('#csv_file').val('');
                $('#data-table').DataTable({
                    data: jsonData,
                    columns: [
                        { data: 'Name' },
                        { data: 'Position' },
                        { data: 'Office' },
                        { data: 'Age' },
                        { data: 'Start_date' }
                    ]
                });

            },
            error: function (){
                toastr.error('File size is very long !!!'); //It will pop-up an error message if the file size is bigger than 1MB.
            }
            
   
        });

    });

});