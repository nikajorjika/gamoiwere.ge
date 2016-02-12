$('.delete').on('click', function(){
    var ans = confirm('ნამდვილად გსურთ წაშლა?');
    if(ans){
        return true;
    }else{
        return false;
    }
});

// menu drag
$(document).ready(function()
{

    function updateOutput(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    }

    $('.dd').nestable({
        group: 1,
        maxDepth: 3
    }).on('change', updateOutput);

    updateOutput($('.dd').data('output', $('#nestable-output')));

});
