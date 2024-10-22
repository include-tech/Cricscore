( function( api ) {

	// Extends our custom "cricket-league" section.
	api.sectionConstructor['cricket-league'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );