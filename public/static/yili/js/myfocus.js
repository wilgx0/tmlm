(function ($) {
	$.fn.Myfocus = function (o) {
		/**
		 * 焦点图
		 * @param  {HTMLElement} elem 父节点
		 * @param  {Object} o         参数对象
		 * @config {[Number]} [index]     初始化显示第几个 
		 * @config {[Number]} [auto]     自动切换标识，传入数字为间隔多久切换【毫秒】，不传递为不自动切换 
		 * @config {[Number]} [speed]    动画速率
		 * @config {[HTMLElement]} [prev]    上一页按钮
		 * @config {[HTMLElement]} [next]    下一页按钮
		 */
		function focus(elem, o) {
			var index = o.index || 0,
				speed = o.speed || 1000,
				items = $(elem).children(),
				elem = $(elem),
				max = items.length,
				consoleItem,
				timer,
				prevElem,
				nextElem;

			createConsole();
			// 初始化显示第几张
			reset();
			if ( o.callback ) {
				o.callback(index, items[index]);
			}

			if ( o.auto ) {
				auto();
			}

			// 注册上一页下一页事件
			if ( o.prev ) {
				prevElem = typeof o.prev == "function" ? o.prev(elem) : o.prev;
				$(prevElem).click(function() {
					show(getIndex(-1));
					return false;
				});
			}
			if ( o.next ) {
				nextElem = typeof o.next == "function" ? o.next(elem) : o.next;
				$(nextElem).click(function() {
					show(getIndex(+1));
					return false;
				});
			}

			function auto() {
				clearTimeout(timer);
				timer = setTimeout(function() {
					show(getIndex(+1));
				}, o.auto);
			}

			function reset() {
				items.css({
					"z-index": "1",
					"opacity": "0"
				});
				items.eq(index).css({
					"z-index": "2",
					"opacity": "1"
				});
			};
			
			function show(n) {
				index = n;
				items.eq(index).css({
					"z-index": "3"
				});
				items.eq(n).animate({'opacity': 1}, speed, function() {
					reset();
				});
				// 设置控制台
				consoleItem.removeClass("current").eq(index).addClass("current");

				if ( o.auto ) {
					auto();
				}

				if ( o.callback ) {
					o.callback(index, items[index]);
				}
			};

			// 获取上一页或下一页的index
			function getIndex(n) {
				var n = n || 0;
				var _index = index + n;
				if (_index < 0) {
					_index = max - 1;
				}
				if (_index >= max) {
					_index = 0;
				}
				return _index;
			}

			function createConsole() {
				var html;
				html = '<div class="console-dot">';
				items.each(function(i) {
					html += '<em>'+ (i+1) +'</em>';
				});
				html += '</div>';
				elem.after(html);

				consoleItem = elem.parent().find(".console-dot em");
				consoleItem.eq(index).addClass("current");
				consoleItem.click(function() {
					clearTimeout(timer);
					show(parseInt($(this).html()) - 1);
					return false;
				});
			}
		}

		this.each(function() {
			focus($(this), o);
		});
	}
})(jQuery);