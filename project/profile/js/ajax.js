//delete  data
function deleteRow(id) {
    if (confirm("are you sure")) {
        $.ajax({
            url: `http://localhost/test/project/dashboard/delete.php`,
            method: "get",
            data: {
                id: id,
            },
            success: function(data) {
                
                alert('Category Successfully deleted');
                $('form').trigger('reset');
                window.location.href = 'http://localhost/test/project/dashboard/include/logout.php';
            },
            error: function(xhr, status, error) {
                // Handle errors if needed
                console.error(error);
            }
        });
    }
}


//