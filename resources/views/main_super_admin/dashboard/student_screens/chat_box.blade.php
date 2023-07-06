@include('main_super_admin.dashboard.include.header')
<style>
  
  </style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('main_super_admin.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center"> "Campus Name" </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Chat</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                   
                    {{-- chat box --}}
                    <div id="frame">
                       
                        <div class="content">
                            <div class="contact-profile">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>Student Name</p>
                            </div>
                            <div class="messages">
                                <ul>
                                    <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                                    </li>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>When you're backed against the wall, break the god damn thing down.</p>
                                    </li>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Excuses don't win championships.</p>
                                    </li>
                                    <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p>Oh yeah, did Michael Jordan tell you that?</p>
                                    </li>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>No, I told him that.</p>
                                    </li>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>What are your choices when someone puts a gun to your head?</p>
                                    </li>
                                    <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p>What are you talking about? You do what they say or they shoot you.</p>
                                    </li>
                                    <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="message-input">
                                <div class="wrap">
                                <input type="text" placeholder="Write your message..." />
                                <i class="fa fa-paperclip attachment" aria-hidden="true" id="uploadButton"></i>
                                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                <input type="file" id="fileInput" class="hidden">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- chat box script --}}
<script >$(".messages").animate({ scrollTop: $(document).height() }, "fast");

$("#profile-img").click(function() {
	$("#status-options").toggleClass("active");
});

$(".expand-button").click(function() {
  $("#profile").toggleClass("expanded");
	$("#contacts").toggleClass("expanded");
});

$("#status-options ul li").click(function() {
	$("#profile-img").removeClass();
	$("#status-online").removeClass("active");
	$("#status-away").removeClass("active");
	$("#status-busy").removeClass("active");
	$("#status-offline").removeClass("active");
	$(this).addClass("active");
	
	if($("#status-online").hasClass("active")) {
		$("#profile-img").addClass("online");
	} else if ($("#status-away").hasClass("active")) {
		$("#profile-img").addClass("away");
	} else if ($("#status-busy").hasClass("active")) {
		$("#profile-img").addClass("busy");
	} else if ($("#status-offline").hasClass("active")) {
		$("#profile-img").addClass("offline");
	} else {
		$("#profile-img").removeClass();
	};
	
	$("#status-options").removeClass("active");
});

function newMessage() {
	message = $(".message-input input").val();
	if($.trim(message) == '') {
		return false;
	}
	$('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
	$('.message-input input').val(null);
	$('.contact.active .preview').html('<span>You: </span>' + message);
	$(".messages").animate({ scrollTop: $(document).height() }, "fast");
};

$('.submit').click(function() {
  newMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    newMessage();
    return false;
  }
});
//# sourceURL=pen.js

document.getElementById('uploadButton').addEventListener('click', function() {
      document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
      var selectedFile = document.getElementById('fileInput').files[0];
      console.log('File selected:', selectedFile);
      // You can perform further actions with the selected file here.
    });
</script>
@include('main_super_admin.dashboard.include.footer')
