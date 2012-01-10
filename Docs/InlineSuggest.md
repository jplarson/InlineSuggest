InlineSuggest
===========

![Screenshot](http://www.jpl-consulting.com/projects/MooTools/InlineSuggest/ScreenShots/InlineSuggest0.gif)

Add auto-suggest functionality to any input or textarea.

Suggestions are made inline as selected text which can be accepted by hitting tab or enter, or typed over if not desired.  If multiple matches apply, they can be scrolled through with the up and down arrow keys.

How to Use
----------

An input can be made to support inline suggesting by passing it (or its ID) to the InlineSuggest constructor:

	#HTML
	<textarea id="theTextarea"></textarea>

	#JS
	var suggest = new TableSorter('theTextarea', ['first suggest value', 'second suggest value', ...]);

By default, inline suggestions are made only if a prefix of 3 or more characters matches a suggest value.  This can be overriden by the minLengthMatch option:

	#JS
	var suggest = new TableSorter('dataTable', { minLengthMatch: 2 });  // suggestions will be made with only two matching characters.
	

Dependancies
------------
	core:1.4.2/Events
	core:1.4.2/Options
	more:1.4.0.1/Element.Forms