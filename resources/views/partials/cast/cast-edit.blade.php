<!-- Modal -->
<div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">edit New Cast id - {{ $item->id }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => '/cast/' . $item->id . '/update']) !!}
            <div class="mb-3">
                {!! Form::label('name_cast', 'Name Cast') !!}
                {!! Form::text('name_cast', $item->nama, ['class' => 'form-control', 'placeholder' => 'Input Name Cast', 'required']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('age_cast', 'Age') !!}
                {!! Form::number('age_cast', $item->umur, ['class' => 'form-control', 'placeholder' => 'Input Age', 'required']) !!}
            </div>
            <div class="mb-3">
                {!! Form::label('bio_cast', 'Bio') !!}
                {!! Form::textarea('bio_cast', $item->bio, ['class' => 'form-control', 'placeholder' => 'Input Bio', 'required']) !!}
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            {{Form::button('<i class="fa fa-check-square-o"></i> Update', ['class' => 'btn btn-success', 'type' => 'submit'])}}
            {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
<!-- end modal -->