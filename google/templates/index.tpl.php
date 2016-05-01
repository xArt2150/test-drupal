<div class="row">
    <div class="col-sm-12">

        <?php print drupal_render($search_form); ?>

        <br/>

        <div id="google_results">
            <?php print theme("google_results", array('data'=>$data)) ?>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="google_change_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Change</h4>
                    </div>
                    <div class="modal-body">
                        <?php print drupal_render($change_form); ?>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
</div>