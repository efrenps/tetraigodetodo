
function showErrorMessage(field, message) 
{
    field.focus();
    toastr.error(message + '.', "Message");
}

function validateNumericField(id, message) 
{
    var field = $('#' + id);

    if (field.val() && !isNaN(field.val()))
        return true;
    else
        showErrorMessage(field, message);
        return false;
}