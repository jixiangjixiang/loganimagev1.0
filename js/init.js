function initbackgroundimg() {
	var clientHeight = document.documentElement.clientHeight;
	var clientWidth = document.documentElement.clientWidth;
	var scale = clientWidth / clientHeight;
	var x = clientHeight + 'px';
	document.getElementById("back").style.height = x;
	if (parseFloat(scale) < 1.5) {
		document.getElementById("backImg").style.width="auto";
		document.getElementById("backImg").style.height=x;
	}
}
function initmenu() {
	var leftWidth = document.getElementById("left").offsetWidth;
	var marpx = (document.body.clientWidth - leftWidth - 950) / 2;
	if (marpx > 0) {
		document.getElementById("left").style.left = marpx + "px";
	}

}
function initcontentimg() {
	var marpx = (document.body.scrollWidth - 1150) / 2;
	var contentleft = marpx + 205;
	document.getElementById("content").style.left = contentleft + "px";
}