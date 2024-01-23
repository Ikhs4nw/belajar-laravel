<!-- Modal -->
<div class="modal fade" id="show{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Cast id - {{ $item->id }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
            {!! Form::open() !!}
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- end modal -->
