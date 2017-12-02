<!-- Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    SMS
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/create" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="messageText" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="messageText" name="body" maxlength="160"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- JS code -->
<script>
    <!--JS below-->
    $('#messageModal').on('shown.bs.modal', function () {
        $('#messageText').focus()
    })
</script>