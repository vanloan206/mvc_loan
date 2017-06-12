$(function() {
        
    $(document).on('click', '.del', function(e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;
    });
});