<!-- Modal -->
<div wire:ignore.self class="modal fade" id="edit_export" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id" wire:model="ids">
            <div class="form-group">
                <label for="amount">Employee</label>
                <input type="text" class="form-control" id="employee" wire:model="employee">
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" class="form-control" id="amount" wire:model="amount">
            </div>
            <div class="form-group">
                <label for="amount">Reason</label>
                <input type="text" class="form-control" id="reason" wire:model="reason">
            </div>
            <div class="form-group">
                <div class="row row-sm">
                    <div class="input-group col-md-12">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                            </div>
                        </div><input class="form-control" id="datetimepicker2" type="text" value="2018-12-20 21:05">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click="update">Edit</button>
        </div>
      </div>
    </div>
  </div>

