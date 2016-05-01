<table class="table table-striped">
    <thead>
    <tr>
        <th>id</th>
        <th>url</th>
        <th>title</th>
        <th>snippet</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>

    <?php if (count($data)) { ?>
        <?php foreach($data as $el) { ?>
            <tr class="record_<?php print $el->nid; ?>">
                <td class="record_id"><?php print $el->nid; ?></td>
                <td class="record_url"><a target="_blank" href="<?php print $el->url; ?>"><?php print $el->url; ?></a></td>
                <td class="record_title"><?php print $el->title; ?></td>
                <td class="record_snippet"><?php print $el->snippet; ?></td>
                <td>
                    <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#google_change_modal" data-id="<?php print $el->nid; ?>">Change</a>
                    <br/><br/>
                    <a href="#" class="btn btn-warning btn-xs remove" data-id="<?php print $el->nid; ?>">Remove</a>
                </td>
            </tr>
        <?php } ?>
    <?php } else {  ?>
        <tr>
            <td colspan="5">No data...</td>
        </tr>
    <?php } ?>
    </tbody>
</table>