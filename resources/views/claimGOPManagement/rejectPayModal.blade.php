<div id="rejectPayModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Reject Payment </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                {{ Form::open(array('url' => '/admin/claim/requestManagerGOP/'.$data->id, 'method'=>'post', 'files' => true))}}
                
                {{ Form::label('message', 'Message', ['class' => 'labelas mt-1']) }}
                {{ Form::textarea('message', null, array('id' => 'message_reject','class' => 'form-control')) }}<br>
                <div class="row">
                    <div id = 'button_save' class="pull-right">
                        {!! Form::button('Ok', ['type' => 'submit','name'=>'type_submit','value' => 'reject','class' => ' btn btn-info' ]) !!}
                        <button type="button" class="btn btn-secondary btn-cancel-delete" 
                            data-dismiss="modal">Close</button>
                    </div><br>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>