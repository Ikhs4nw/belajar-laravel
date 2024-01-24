<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-bold" id="exampleModalLabel">Add New Cast</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <form action="/cast" method="POST">
            <div class="modal-body">
                <div class="form-group">
                <label for="name_cast">Name Cast</label>
                <input type="text" class="form-control" id="name_cast" placeholder="Enter Name Cast" name="name_cast" required>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div class="form-group">
                    <label for="age_cast">Age Cast</label>
                    <input type="number" class="form-control" id="age_cast" placeholder="Enter Age Cast" name="age_cast" required>
                </div>
                <div class="form-group">
                    <label for="bio_cast">Bio Cast</label>
                    <textarea class="form-control" name="bio_cast" id="bio_cast" cols="30" rows="10" placeholder="Enter Bio Cast" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
<!-- end modal -->
