#formWrap {
    padding:10px; position:absolute; float:left; background-color:#000;
    background:rgba(0,0,0,.5); -moz-border-radius:10px;
    -webkit-border-radius:10px; border-radius:10px;
}
#messageForm {
 width:326px; border:1px solid #666; background-color:#eee;
}
#messageForm fieldset {
    padding:0; margin:0; position:relative; border:none;
    background-color:#eee;
}
#messageForm legend { visibility:hidden; height:0; }
#messageForm span {
    display:block; width:326px; padding:10px 0; margin:0 0 20px;
    text-indent:20px; background-color:#bbb;
    border-bottom:1px solid #333;   font:18px Georgia, Serif; color:#fff;
}
#friends {
    width:274px; padding:3px 3px 0; margin:0 auto;
    border:1px solid #aaa; background-color:#fff; cursor:text;
}
#messageForm #to {
    width:30px; margin:0 0 2px 0; padding:0 0 3px;
    position:relative; top:0; float:left; border:none;
}
#messageForm input, #messageForm textarea {
    display:block; width:274px; padding:3px; margin:0 auto 20px;
    border:1px solid #aaa;
}
#messageForm label {
    display:block; margin:20px 0 3px; text-indent:22px;
    font:bold 11px Verdana, Sans-serif; color:#666;
}
#messageForm #toLabel { margin-top:0; }
#messageForm button { float:right; margin:0 0 20px 0; }
#messageForm #cancel { margin-right:20px; }
#friends span {
    display:block; margin:0 3px 3px 0; padding:3px 20px 4px 8px;
    position:relative; float:left; background-color:#eee;
    border:1px solid #333; -moz-border-radius:7px;
    -webkit-border-radius:7px; border-radius:7px; color:#333;
    font:normal 11px Verdana, Sans-serif;
}
#friends span a {
    position:absolute; right:8px; top:2px; color:#666;
    font:bold 12px Verdana, Sans-serif; text-decoration:none;
}
#friends span a:hover { color:#ff0000; }
.ui-menu .ui-menu-item { white-space:nowrap; padding:0 10px 0 0; }