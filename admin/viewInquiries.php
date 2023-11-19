<div>
    <h1>Inquiry Details</h1>
    <small>All responses are from contact us page</small>

    <hr>

    <form id="room_edit">
        <div class="row">
            <div class="col-md-6 m-2">
                <b>Name</b><br>
                <span id="name_container"></span>
            </div>

            <div class="col-md-6 m-2">
                <b>Email</b><br>
                <span id="email_container"></span>
            </div>

            <div class="col-md-6 m-2">
                <b>Phone</b><br>
                <span id="phone_container"></span>
            </div>

            <div class="col-md-12 m-2">
                <b>Messages</b><br>
                <span id="message_container"></span>
            </div>
        </div>
    </form>



    <div id="buttons_container" class="d-flex flex-row-reverse">
        <button class="btn btn-danger m-1" onclick="bootbox.hideAll();">Close</button>
        <!-- <button class="btn btn-primary m-1" id="save_btn">Save Edits</button> -->
    </div>
</div>

<script type="text/javascript">
    $("#name_container").text(selectedData.name);
    $("#email_container").text(selectedData.email);
    $("#phone_container").text(selectedData.phone);
    $("#message_container").text(selectedData.message);
</script>