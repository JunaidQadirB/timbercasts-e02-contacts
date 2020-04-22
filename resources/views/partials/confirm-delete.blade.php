<div class="modal fade show" id="confirmDelete" tabindex="-1" data-backdrop="static"
     role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="false">
    <div class="modal-dialog modal-sm" role="document" style="min-width: 30rem">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete <span x-text="deleteName"></span>?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Cancel</button>
                <button x-on:click="deleteContact()" type="button" class="btn btn-danger">Delete
                </button>
            </div>
        </div>
    </div>
</div>
