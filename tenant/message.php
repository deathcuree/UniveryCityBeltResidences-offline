<?php
require_once 'includes/header.php';
require_once 'includes/sidebar.php';
require_once 'includes/navbar.php';
require_once 'includes/chatbox.php';
?>

<!--********************************** CONTENT BODY START ***********************************-->
<style>
  .chat-bx {
    cursor: pointer;
  }
</style>
<div class="content-body">
  <!-- row -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-xl-3 col-xxl-4">
                <div class="p-4">
                  <div
                    class="d-flex align-items-center justify-content-between mb-3"
                  >
                    <div>
                      <span class="fs-24 font-w700 mb-0 me-2">Inbox</span>
                      <button
                        class="btn btn-sm btn-primary"
                        id="requestAssistance_btn"
                      >
                        Request Assistance
                      </button>
                    </div>
                  </div>
                </div>

                <div class="" id="chatSidebar"></div>
              </div>

               <div class="col-xl-9 col-xxl-8">
                <div
                  class="d-flex justify-content-between align-items-center border-bottom px-4 pt-4 flex-wrap"
                >
                  <div class="d-flex align-items-center pb-3">
                    <div class="fillow-design">
                      <a href="javascript:void(0);"
                        ><img
                          src="./images/white_logo.png"
                          alt="logo"
                          width="45"
                          height="45"
                          viewbox="0 0 45 45"
                          fill="none"
                      /></a>
                    </div>
                    <div class="ms-3">
                      <h4 class="fs-20 font-w700">
                        UniverCity Belt Residences
                      </h4>
                      <span
                        >Contact our admin</span
                      >
                    </div>
                  </div>
                </div>

                <div
                  class="chat-box-area dlab-scroll chat-box-area"
                  id="chatArea"
                >
                  <div class="chat-box-area dz-scroll" id="chartBox"></div>
                </div>
                <div class="card-footer border-0 type-massage">
                  <div class="input-group">
                    <textarea
                      class="form-control"
                      id="msg_here"
                      rows="3"
                      placeholder="type message here..."
                    ></textarea>
                  </div>
                  <div
                    class="input-group-append d-flex justify-content-between flex-wrap"
                  >
                    <div></div>

                    <div>
                      <button
                        type="button"
                        class="btn btn-primary rounded text-white"
                        id="sendBtn"
                      >
                        <i class="far fa-paper-plane me-2"></i>SEND
                      </button>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--********************************** CONTENT BODY END ***********************************-->

<?php
require_once 'includes/footer.php';
?>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/common.js"></script>


<script src="https://cdn.datatables.net/autofill/2.5.3/js/dataTables.autoFill.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.5.3/css/autoFill.dataTables.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script type="text/javascript">
  var getAllChatLogs = ajaxPostLink({"action":"getUserChatLogs","id":userSession.id});
  var currentChatHistoryID;
  console.log(getAllChatLogs);

  if (getAllChatLogs.length>=1) {
    $("#requestAssistance_btn").addClass("d-none");
  }

  for (var x = 0; x < getAllChatLogs.length; x++) {
    var innerMsg = getAllChatLogs[x].chatMsg;

    if (innerMsg==null) {
      innerMsg = "No messages";
    }

    $("#chatSidebar").append(
      '<div class="chat-bx d-flex border-bottom" data-id="'+getAllChatLogs[x].id+'" id="chatSidebar_'+x+'">'+
        '<div class="chat-img">'+
          '<img src="images/user.jpg" alt="" />'+
        '</div>'+
        '<div class="w-100">'+
          '<div class="d-flex mb-1 align-items-center">'+
            '<span class="fs-16 text-black">'+getAllChatLogs[x].username+'</span>'+
          '</div>'+
          '<div class="d-flex justify-content-between">'+
            '<p class="mb-0">'+
              innerMsg+
            '</p>'+
          '</div>'+
        '</div>'+
      '</div>'
    );
  }

  $(".chat-bx").on("click", function(){
    console.log("im triggered");

    var msgLogs = ajaxPostLink({"action":"getChatMsgs","sentBy":"admin","historyID":$(this).attr("data-id")});
    currentChatHistoryID = $(this).attr("data-id");

    for (var i = 0; i < msgLogs.length; i++) {
      if (msgLogs[i].sentBy == "user") {
        $("#chartBox").append(
          '<div class="media my-4 justify-content-start align-items-start">'+
            '<div class="message-received">'+
              '<p class="mb-1">'+
                msgLogs[i].msg+
              '</p>'+
              '<span class="fs-12">'+msgLogs[i].dateAdded+'</span>'+
            '</div>'+
          '</div>'
        );
      }else{
        $("#chartBox").append(
          '<div class="media mb-4 justify-content-end align-items-end">'+
            '<div class="message-sent">'+
              '<p class="mb-1">'+
                msgLogs[i].msg+
              '</p>'+
              '<span class="fs-12">'+msgLogs[i].dateAdded+'</span>'+
            '</div>'+
          '</div>'
        );
      }

      setTimeout(function(){
        $("#chatArea").scrollTop($("#chatArea")[0].scrollHeight);
      },300);

      
    }

    var msgchecker = setInterval(function () {
      var msgLogs = ajaxPostLink({"action":"getChatMsgs","sentBy":"admin","historyID":currentChatHistoryID});

      for (var i = 0; i < msgLogs.length; i++) {
        if (msgLogs[i].isViewedAdmin == 0) {
          if (msgLogs[i].sentBy == "user") {
            $("#chartBox").append(
              '<div class="media my-4 justify-content-start align-items-start">'+
                '<div class="message-received">'+
                  '<p class="mb-1">'+
                    msgLogs[i].msg+
                  '</p>'+
                  '<span class="fs-12">'+msgLogs[i].dateAdded+'</span>'+
                '</div>'+
              '</div>'
            );
          }else{
            $("#chartBox").append(
              '<div class="media mb-4 justify-content-end align-items-end">'+
                '<div class="message-sent">'+
                  '<p class="mb-1">'+
                    msgLogs[i].msg+
                  '</p>'+
                  '<span class="fs-12">'+msgLogs[i].dateAdded+'</span>'+
                '</div>'+
              '</div>'
            );
          }
        }

        setTimeout(function(){
          $("#chatArea").scrollTop($("#chatArea")[0].scrollHeight);
        },300);

      }

    }, 2000);
  });

  $("#chatSidebar_0").trigger("click");

  $("#sendBtn").on("click", function(){
    var msg_here = $("#msg_here").val();
    console.log(msg_here);

    if (msg_here!="") {
      $("#msg_here").val("")
      var res = ajaxPostLink({
        "action":"sendMsg",
        "historyID":currentChatHistoryID,
        "sentBy":"admin",
        "msg":msg_here,
      });

      console.log(res);
    }
  });
  
  $('#msg_here').keyup(function(e) {
    if (e.keyCode == 13) {
      $("#sendBtn").trigger("click");
    }
  });

  $("#requestAssistance_btn").on("click", function(){
    ajaxPostLink({"action":"addNewChatToAssistance","userID":userSession.id});
    location.reload();
  });


  



  

  
</script>


