
    <div class="col-sm-12">
        <? if( $this->uri->segment(3) ) : ?>

        <table class="table table-striped table-bordered bootstrap-datatable datatable">
            <thead>
            <tr>
                <th>Claim Attachments</th>
            </tr>
            </thead>
            <tbody>
            <?
            $arr = $this->uploads_model->no_claim();
            $rcount = count( $arr );

            foreach( $arr as $c ) : ?>
                <tr>
                    <td><? echo $c->file_title; ?></td>

                </tr>
            <? endforeach;
            for($c=$rcount;$c<=5;++$c) : ?>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                </tr>
            <?
            endfor; ?>
            <tr>
                <td align="right">
                    <b>+</b> <a href="<? echo base_url(); ?>index.php/attachments/claim/<? echo $row->claim_id; ?>">Upload New Attachment</a>
                </td>
            </tr>
            </tbody>
        </table>
<? endif; ?>
    </div><!--/col-->

