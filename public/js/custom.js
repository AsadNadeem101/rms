$(document).ready(function()
{
    $('.delete-content').on('click',function()
    {
        var url=$(this).attr('data-url');

        $('.delete-form').attr('action',url);
    });
});
