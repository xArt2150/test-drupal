jQuery(function ($) {

    var id = 0;

    var $googleChangeModal = $('#google_change_modal');

    $googleChangeModal.on('show.bs.modal', function(event)
    {
        var button = $(event.relatedTarget);
        id = button.data('id');

        if( id )
        {
            var $row = $('#google_results').find('.record_'+id);

            $googleChangeModal.find('#edit-id').val(id);
            $googleChangeModal.find('#edit-url').val(
                $row.find('.record_url>a').html()
            );
            $googleChangeModal.find('#edit-title').val(
                $row.find('.record_title').html()
            );
            $googleChangeModal.find('#edit-snippet').val(
                $row.find('.record_snippet').html()
            );
        }
    });

    $googleChangeModal.on('hide.bs.modal', function(event)
    {
        $googleChangeModal.find('#edit-id').val('');
        $googleChangeModal.find('#edit-url').val('');
        $googleChangeModal.find('#edit-title').val('');
        $googleChangeModal.find('#edit-snippet').val('');
        id = 0;
    });

    Drupal.ajax.prototype.commands.googleCloseModal = function (ajax, response, status)
    {
        var id = response.id;
        var $row = $('#google_results').find('.record_'+id);
        $row.find('.record_url>a').html($googleChangeModal.find('#edit-url').val());
        $row.find('.record_url>a').attr('href',$googleChangeModal.find('#edit-url').val());
        $row.find('.record_title').html($googleChangeModal.find('#edit-title').val());
        $row.find('.record_snippet').html($googleChangeModal.find('#edit-snippet').val());
        $googleChangeModal.modal('hide');
    };

    $('#google_results').on('click', '.remove', function(e)
    {
        e.preventDefault();

        var button = $(this);
        id = button.attr('data-id');

        var ajax = new Drupal.ajax(false, false, {url : 'hello-i-am-test-page/'+id+'/remove'});
        ajax.eventResponse(ajax, {});
    })

});