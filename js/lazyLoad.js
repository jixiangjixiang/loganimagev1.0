lazyLoad = (function() {
	var map_element = {};
	var element_obj = [];
	var download_count = 0;
	var last_offset = -1;
	var doc_body;
	var doc_element;
	var lazy_load_tag;
	function initVar(tags) {
		doc_body = document.body;
		doc_element = document.compatMode == 'BackCompat' ? doc_body
				: document.documentElement;
		lazy_load_tag = tags || [ "img", "iframe" ];
	}
	;
	function initElementMap() {
		var all_element = [];
		for ( var i = 0, len = lazy_load_tag.length; i < len; i++) {
			var el = document.getElementsByTagName(lazy_load_tag[i]);
			for ( var j = 0, len2 = el.length; j < len2; j++) {
				if (typeof (el[j]) == "object"
						&& el[j].getAttribute("lazy_src")) {
					element_obj.push(el[j]);
				}
			}
		}

		for ( var i = 0, len = element_obj.length; i < len; i++) {
			var o_img = element_obj[i];
			var t_index = getAbsoluteTop(o_img);
			if (map_element[t_index]) {
				map_element[t_index].push(i);
			} else {
				var t_array = [];
				t_array[0] = i;
				map_element[t_index] = t_array;
				download_count++;
			}
		}

	}
	;
	function initDownloadListen() {
		if (!download_count)
			return;
		var scrollTop = document.documentElement.scrollTop
				|| window.pageYOffset || document.body.scrollTop;
		var offset = scrollTop;
		var visio_offset = offset + doc_element.clientHeight;
		if (last_offset == visio_offset) {
			setTimeout(initDownloadListen, 200);
			return;
		}
		last_offset = visio_offset;
		var visio_height = doc_element.clientHeight;
		var img_show_height = visio_height + offset;
		for ( var key in map_element) {
			if (img_show_height > key) {
				var t_o = map_element[key];
				var img_vl = t_o.length;
				for ( var l = 0; l < img_vl; l++) {
					element_obj[t_o[l]].src = element_obj[t_o[l]]
							.getAttribute("lazy_src");
				}
				delete map_element[key];
				download_count--;
			}
		}
		setTimeout(initDownloadListen, 200);
	}
	;
	function getAbsoluteTop(element) {
		if (arguments.length != 1 || element == null) {
			return null;
		}
		var offsetTop = element.offsetTop;
		var ii = element.getAttribute("lazy_src");
		while (element = element.offsetParent) {
			offsetTop += element.offsetTop;
		}
		return offsetTop;
	}
	function init(tags) {
		initVar(tags);
		initElementMap();
		initDownloadListen();
	}
	;
	return {
		init : init
	}
})();