<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit New Cast</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => 'save']) !!}
            <div class="mb-3">
                {!! Form::label('firstname', 'Firstname') !!}
                {!! Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Input Firstname', 'required']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('lastname', 'Lastname') !!}
                {!! Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Input Lastname', 'required']) !!}
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
<!-- end modal -->
