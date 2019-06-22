( function( api ) {

	// Extends our custom "expert-movers" section.
	api.sectionConstructor['expert-movers'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );