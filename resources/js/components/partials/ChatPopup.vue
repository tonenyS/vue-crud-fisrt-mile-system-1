<template>
    <div class="popup-box chat-popup" id="qnimate">
        <div class="popup-head">
            <div class="popup-head-left float-left">
                <img
                    src="/images/chat_placeholder.png"
                    alt="Issue Icon"
                />
                #{{ conversation.ticket_id }} - {{ conversation.title.substring(0,15)+'...' }}
            </div>
            <div class="popup-head-right float-right">
                <button
                    data-widget="remove"
                    id="removeClass"
                    class="chat-header-button float-right"
                    type="button"
                    @click="toggleChatPopup"
                >
                    <i class="mdi mdi-power"></i>
                </button>
            </div>
        </div>
        <div class="popup-messages">
            <div class="direct-chat-messages">
                <div class="chat-box-single-line">
                    <abbr class="timestamp">October 8th, 2015</abbr>
                </div>

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name float-left">Osahan</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img
                        alt="message user image"
                        src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg"
                        class="direct-chat-img"
                    /><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp float-right"
                            >3.36 PM</span
                        >
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-img-reply-small float-left">
                        </span>
                        <span class="direct-chat-reply-name">Singh</span>
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->

                <div class="chat-box-single-line">
                    <abbr class="timestamp">October 9th, 2015</abbr>
                </div>

                <!-- Message. Default to the left -->
                <div class="direct-chat-msg doted-border">
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name float-left">Osahan</span>
                    </div>
                    <!-- /.direct-chat-info -->
                    <img
                        alt="iamgurdeeposahan"
                        src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg"
                        class="direct-chat-img"
                    /><!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                        Hey bro, how’s everything going ?
                    </div>
                    <div class="direct-chat-info clearfix">
                        <span class="direct-chat-timestamp float-right"
                            >3.36 PM</span
                        >
                    </div>
                    <div class="direct-chat-info clearfix">
                        <img
                            alt="iamgurdeeposahan"
                            src="http://bootsnipp.com/img/avatars/bcf1c0d13e5500875fdd5a7e8ad9752ee16e7462.jpg"
                            class="direct-chat-img big-round"
                        />
                        <span class="direct-chat-reply-name">Singh</span>
                    </div>
                    <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
            </div>
        </div>
        <div class="popup-messages-footer">
            <textarea
                id="status_message"
                placeholder="Type a message..."
                rows="10"
                cols="40"
                name="message"
            ></textarea>
            <div class="btn-footer">
                <button class="chat-header-button">
                    <i class="mdi mdi-filmstrip"></i>
                </button>
                <button class="chat-header-button">
                    <i class="bi bi-camera"></i>
                </button>
                <button class="chat-header-button">
                    <i class="bi bi-paperclip"></i>
                </button>
                <button class="chat-header-button float-right">
                    <i class="bi bi-hand-thumbs-up"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["conversation"],
    methods: {
        toggleChatPopup() {
            console.log('toggle-chat-popup');
            if($("#qnimate").hasClass('popup-box-on')){
                $("#qnimate").removeClass('popup-box-on');
            }else{
                $("#qnimate").addClass('popup-box-on');
            }
        }
    },
    mounted() {
        this.$parent.$on("toggle-chat-popup", this.toggleChatPopup);
    }
};
</script>

<style>
.popup-box {
   background-color: #ffffff;
    border: 1px solid #b0b0b0;
    border-radius: 3px 3px 0px 0px;
    bottom: 0;
    display: none;
    height: 475px;
    position: fixed;
    right: 70px;
    width: 430px;
    font-size: 16px;
    flex-direction: row;
    flex-grow: inherit;
    flex-flow: row;
    justify-content: space-between;
    align-items: center;
}
.round.hollow {
    margin: 40px 0 0;
}
.round.hollow a {
    border: 2px solid #ff6701;
    border-radius: 35px;
    color: red;
    color: #ff6701;
    font-size: 23px;
    padding: 10px 21px;
    text-decoration: none;
}
.round.hollow a:hover {
    border: 2px solid #000;
    border-radius: 35px;
    color: red;
    color: #000;
    font-size: 23px;
    padding: 10px 21px;
    text-decoration: none;
}
.popup-box-on {
    display: block !important;
}
.popup-box .popup-head {
    background-color: #fff;
    clear: both;
    color: #7b7b7b;
    display: flex;
    justify-content: space-between;
    padding: 7px 10px;
    width: 100%;
    font-size: 16px;
}
.bg_none i {
    border: 1px solid #ff6701;
    border-radius: 25px;
    color: #ff6701;
    font-size: 17px;
    height: 33px;
    line-height: 30px;
    width: 33px;
}
.bg_none:hover i {
    border: 1px solid #000;
    border-radius: 25px;
    color: #000;
    font-size: 17px;
    height: 33px;
    line-height: 30px;
    width: 33px;
}
.bg_none {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
}

.popup-head-left img {
    border: 1px solid #7b7b7b;
    border-radius: 50%;
    width: 32px;
}
.popup-messages-footer > textarea {
    border-bottom: 1px solid #b2b2b2 !important;
    height: 58px !important;
    margin: 7px;
    padding: 5px !important;
    border: medium none;
    width: 95% !important;
    resize: none;
}
.popup-messages-footer {
    background: #fff none repeat scroll 0 0;
    bottom: 0;
    position: absolute;
    width: 100%;
}
.popup-messages-footer .btn-footer {
    overflow: hidden;
    padding: 2px 5px 10px 6px;
    width: 100%;
}
.simple_round {
    background: #d1d1d1 none repeat scroll 0 0;
    border-radius: 50%;
    color: #4b4b4b !important;
    height: 21px;
    padding: 0 0 0 1px;
    width: 21px;
}

.popup-box .popup-messages {
    background: #3f9684 none repeat scroll 0 0;
    height: 325px;
    overflow: auto;
}
.direct-chat-messages {
    overflow: auto;
    padding: 10px;
    transform: translate(0px, 0px);

}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages abbr.timestamp {
    background: #3f9684 none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}

.popup-head-right .btn-group {
    display: inline-flex;
	margin: 0 3px 0 0;
	vertical-align: middle !important;
}
.chat-header-button {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #636364;
    border-radius: 50%;
    font-size: 14px;
    height: 30px;
    width: 30px;
}
.popup-head-right .btn-group .dropdown-menu {
    border: medium none;
    min-width: 122px;
	padding: 0;
}
.popup-head-right .btn-group .dropdown-menu li a {
    font-size: 12px;
    padding: 3px 10px;
	color: #303030;
}

.popup-messages abbr.timestamp {
    background: #3f9684  none repeat scroll 0 0;
    color: #fff;
    padding: 0 11px;
}
.popup-messages .chat-box-single-line {
    border-bottom: 1px solid #a4c6b5;
    height: 12px;
    margin: 7px 0 20px;
    position: relative;
    text-align: center;
}
.popup-messages .direct-chat-messages {
    height: auto;
}
.popup-messages .direct-chat-text {
    background: #dfece7 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}

.popup-messages .direct-chat-timestamp {
    color: #fff;
    opacity: 0.6;
}

.popup-messages .direct-chat-name {
	font-size: 15px;
	font-weight: 600;
	margin: 0 0 0 49px !important;
	color: #fff;
	opacity: 0.9;
}
.popup-messages .direct-chat-info {
    display: block;
    font-size: 12px;
    margin-bottom: 0;
}
.popup-messages  .big-round {
    margin: -9px 0 0 !important;
}
.popup-messages  .direct-chat-img {
    border: 1px solid #fff;
	background: #3f9684  none repeat scroll 0 0;
    border-radius: 50%;
    float: left;
    height: 40px;
    margin: -21px 0 0;
    width: 40px;
}
.direct-chat-reply-name {
    color: #fff;
    font-size: 15px;
    margin: 0 0 0 10px;
    opacity: 0.9;
}

.direct-chat-img-reply-small
{
    border: 1px solid #fff;
    border-radius: 50%;
    float: left;
    height: 20px;
    margin: 0 8px;
    width: 20px;
	background:#3f9684;
}

.popup-messages .direct-chat-msg {
    margin-bottom: 10px;
    position: relative;
}

.popup-messages .doted-border::after {
	background: transparent none repeat scroll 0 0 !important;
    border-right: 2px dotted #fff !important;
	bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
	 display: inline;
	  z-index: -2;
}

.popup-messages .direct-chat-msg::after {
    background: #fff none repeat scroll 0 0;
    border-right: medium none;
    bottom: 0;
    content: "";
    left: 17px;
    margin: 0;
    position: absolute;
    top: 0;
    width: 2px;
	 display: inline;
	  z-index: -2;
}
.direct-chat-text::after, .direct-chat-text::before {

    border-color: transparent #dfece7 transparent transparent;

}
.direct-chat-text::after, .direct-chat-text::before {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: transparent #d2d6de transparent transparent;
    border-image: none;
    border-style: solid;
    border-width: medium;
    content: " ";
    height: 0;
    pointer-events: none;
    position: absolute;
    right: 100%;
    top: 15px;
    width: 0;
}
.direct-chat-text::after {
    border-width: 5px;
    margin-top: -5px;
}
.popup-messages .direct-chat-text {
    background: #dfece7 none repeat scroll 0 0;
    border: 1px solid #dfece7;
    border-radius: 2px;
    color: #1f2121;
}
.direct-chat-text {
    background: #d2d6de none repeat scroll 0 0;
    border: 1px solid #d2d6de;
    border-radius: 5px;
    color: #444;
    margin: 5px 0 0 50px;
    padding: 5px 10px;
    position: relative;
}
</style>
