@foreach ($data_cast as $item)
<!-- Modal -->
<div class="modal fade" id="show{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          </button><button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h3 class="modal-title text-bold" id="exampleModalLabel">Detail Data Cast Name - ( {{ $item->nama }} )</h3>
        </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Cast: </label>
                        <label class="col-sm-10 col-form-label">{{ $item->nama }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Age Cast: </label>
                        <label class="col-sm-10 col-form-label">{{ $item->umur }}</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bio Cast</label>
                        <label class="col-sm-10 col-form-label">{{ $item->bio }}</label>
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>
<!-- end modal -->
@endforeach

