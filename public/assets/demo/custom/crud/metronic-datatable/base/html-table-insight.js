//== Class definition

var DatatableHtmlTableDemo = function() {
	//== Private functions

	// demo initializer
	var demo = function() {

		var datatable = $('.m-datatable').mDatatable({
			data: {
				saveState: {cookie: false},
			},
			search: {
				input: $('#generalSearch'),
			},
			columns: [
{
					field: 'Area',
					title: 'Area',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Cheras'},
							2: {'title': 'Kuala Selangor'},
							3: {'title': 'Putrajaya'},
							4: {'title': 'Sungai Besar'},
						};
						return '<span + status[row.Area].class>' + status[row.Area].title + '</span>';
					},
				}, {
					field: 'Quarter',
					title: 'Quarter',
					// callback function support for column rendering
					template: function(row) {
						var status = {
							1: {'title': 'Q5 (2018)'},
							2: {'title': 'Q3 (2018)'},
							3: {'title': 'Q2 (2018)'},
							4: {'title': 'Q1 (2018)'},
						};
						
						return '<span + status[row.Quarter].class>' + status[row.Quarter].title + '</span>';
					},
				},
			],
		});

		$('#m_form_status').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Area');
		});

		$('#m_form_type').on('change', function() {
			datatable.search($(this).val().toLowerCase(), 'Quarter');
		});

		$('#m_form_status, #m_form_type').selectpicker();

	};

	return {
		//== Public functions
		init: function() {
			// init dmeo
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	DatatableHtmlTableDemo.init();
});