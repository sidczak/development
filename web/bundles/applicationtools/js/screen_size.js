jQuery(function ($) {
	

	// check size at startup and update size check console text
	__sizeCheck($(window));
	
	// resize handler for size check
	$(window).resize(function() {
		
		// check point :)
		__sizeCheck($(this));
	
	});
	
	/**
	 * Size checker.
	 */
	function __sizeCheck(element) {
		
		// current width
		var _cWidth = element.width();
		
		// update text
		_cText = 'desktop screens > 1200px';
	
		// check block
		if(_cWidth < 1200) {
			_cText = 'desktop computer ' + _cWidth + 'px';
		}
		if(_cWidth < 1024) {
			_cText = 'ipad landscape ' + _cWidth + 'px';
		}
		if(_cWidth < 768) {
			_cText = 'ipad portrait ' + _cWidth + 'px';
		}
		if(_cWidth < 480) {
			_cText = 'iphone landscape ' + _cWidth + 'px';
		}
		if(_cWidth < 320) {
			_cText = 'iphone portrait ' + _cWidth + 'px';
		}
		if(_cWidth < 240) {
			_cText = 'so small phones ' + _cWidth + 'px';
		}
	
		// update console text
		$('#console').text('').text( _cText );
	
	}

});