/* ------------------------------------------------------------------------------
 *
 *  # Datatables data sources
 *
 *  Demo JS code for datatable_data_sources.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var DatatableDataSources = function() {


    //
    // Setup module components
    //

    // Basic Datatable examples
    var _componentDatatableDataSources = function() {
        if (!$().DataTable) {
            console.warn('Warning - datatables.min.js is not loaded.');
            return;
        }

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            }
        });


        // HTML sourced data
        $('.datatable-html').dataTable({
            columnDefs: [{ 
                orderable: false,
                width: 100,
                targets: [ 5 ]
            }]
        });


        // AJAX sourced data
		
      //  $('.datatable-ajax').dataTable({
           // ajax: '../../public/global_assets/demo_data/tables/datatable_ajax.json'
            //ajax: '../../scholarshipapplicants/cspabovejson'
      //  });
	  //var currentyear = document.getElementById("year").value;
		   
	   $('.datatableapplicant-ajax').DataTable( {
		 "order": [[ 0, "desc" ]],   
        "ajax": {
            "url": "ticket/indexjson",
            "dataSrc": ""
  
        },
        "columns": [
           
		   { data: "ticketid",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a target='_self' href='../profile/"+oData.ticketid+"'>"+oData.ticketid+"</a>");
						}
					},
			{ data: "time_stamp" },
			{ data: "problem" },
			{ data: "cfname" },
			{ data: "name" },
			{ data: "status",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							if(oData.application_status=="VALIDATED"){
								var classdb = "label-success";
							}else{
								var classdb = "label-warning";
							}
							$(nTd).html(" <span class='label "+classdb+"'>"+oData.status+"</span>");
						}
					},
					{ data: "categoryid" },
					{ data: "priority" },
					
					

					{ data: "ticketid",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a href='https://stufaps.chedro1.com/application/stufpdf/reprint/"+oData.ticketid+"/"+oData.ticketid+"'><button type='reset' class='btn btn-effect-ripple btn-success btn-xs'><i class='fa fa-file-pdf-o'></i></button></a> <button  onclick='deleteapplicant("+oData.ticketid+");' type='reset' class='btn btn-effect-ripple btn-danger btn-xs'><i class='fa fa-times'></i></button>");
							//$(nTd).html("<form action='https://stufaps.chedro1.com/application/index.php/print_application' method='post' id='printpdf'><input type='hidden' id='applicationno' name='applicationno' value='"+oData.applicantid+"'><input type='hidden' id='mno' name='mno' value='"+oData.contactno+"'><input type='hidden' id='ptype' name='ptype' value='view'><button onclick='tmp_print();' type='reset' class='btn btn-effect-ripple btn-success btn-xs'><i class='fa fa-file-pdf-o'></i></button> <button  onclick='deleteapplicant("+oData.applicantid+");' type='reset' class='btn btn-effect-ripple btn-danger btn-xs'><i class='fa fa-times'></i></button></form>");
						}
					}
										
					 
					
					
        ],
		columnDefs: [
			{
				targets: "_all",
				className: 'dt-body-center',
				targets: -3,
				className: 'dt-body-left'
				
				
			}
		  ]
    } );
	  
	 /* 
	  $('.datatableapplicantonline-ajax').DataTable( {
		"order": [[ 0, "desc" ]],  
        "ajax": {
            "url": "../../scholarshipapplicants/applicantlistonlinejson/"+currentyear,
            "dataSrc": ""
  
        },
        "columns": [
           { data: "applicantid" },
		   { data: "concat_name",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a target='_self' href='../profile/"+oData.applicantid+"'>"+oData.concat_name+"</a>");
						}
					},
			
			{ data: "application_status",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							if(oData.application_status=="VALIDATED"){
								var classdb = "label-success";
							}else{
								var classdb = "label-warning";
							}
							$(nTd).html(" <span class='label "+classdb+"'>"+oData.application_status+"</span>");
						}
					},
					{ data: "gender" },
					{ data: "contactno" },
					{ data: "province" },
					{ data: "yearapplied" },
					{ data: "app_source" },
					{ data: "congressionaldistrict" },
					{ data: "applicantid",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a href='https://stufaps.chedro1.com/application/stufpdf/reprint/"+oData.applicantid+"/"+oData.contactno+"'><button type='reset' class='btn btn-effect-ripple btn-success btn-xs'><i class='fa fa-file-pdf-o'></i></button></a> <button  onclick='deleteapplicant("+oData.applicantid+");' type='reset' class='btn btn-effect-ripple btn-danger btn-xs'><i class='fa fa-times'></i></button>");
							//$(nTd).html("<form action='https://stufaps.chedro1.com/application/index.php/print_application' method='post' id='printpdf'><input type='hidden' id='applicationno' name='applicationno' value='"+oData.applicantid+"'><input type='hidden' id='mno' name='mno' value='"+oData.contactno+"'><input type='hidden' id='ptype' name='ptype' value='view'><button onclick='tmp_print();' type='reset' class='btn btn-effect-ripple btn-success btn-xs'><i class='fa fa-file-pdf-o'></i></button> <button  onclick='deleteapplicant("+oData.applicantid+");' type='reset' class='btn btn-effect-ripple btn-danger btn-xs'><i class='fa fa-times'></i></button></form>");
						}
					}
										
					 
					
					
        ],
		columnDefs: [
			//{	orderData: [ 0, 1 ],    
				//targets: 1
				//className: 'dt-body-center',
				//targets: -3,
				//className: 'dt-body-left'

			//}
			{ 
			width: 40, 
			targets: 8 
			}
           
		  ]
    } );
	
	
	
	
	  $('.datatableapplicantoffice-ajax').DataTable( {
		"order": [[ 0, "desc" ]],    
        "ajax": {
            "url": "../../scholarshipapplicants/applicantlistofficejson/"+currentyear,
            "dataSrc": ""
  
        },
        "columns": [
           { data: "applicantid" },
		   { data: "concat_name",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a target='_self' href='../profile/"+oData.applicantid+"'>"+oData.concat_name+"</a>");
						}
					},
			
			{ data: "application_status",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							if(oData.application_status=="VALIDATED"){
								var classdb = "label-success";
							}else{
								var classdb = "label-warning";
							}
							$(nTd).html(" <span class='label "+classdb+"'>"+oData.application_status+"</span>");
						}
					},
					{ data: "gender" },
					{ data: "contactno" },
					{ data: "province" },
					{ data: "congressionaldistrict" },
					{ data: "yearapplied" },
					{ data: "app_source" },
					{ data: "cong_usergroup" },
					{ data: "applicantid",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a href='https://stufaps.chedro1.com/application/stufpdf/reprint/"+oData.applicantid+"/"+oData.contactno+"'><button type='reset' class='btn btn-effect-ripple btn-success btn-xs'><i class='fa fa-file-pdf-o'></i></button></a> <button  onclick='deleteapplicant("+oData.applicantid+");' type='reset' class='btn btn-effect-ripple btn-danger btn-xs'><i class='fa fa-times'></i></button>");
							//$(nTd).html("<button  onclick='deleteapplicant("+oData.applicantid+");' type='reset' class='btn btn-effect-ripple btn-danger'><i class='fa fa-times'></i></button>");
						}
					}
										
					 
					
					
        ],
		columnDefs: [
			{
				targets: "_all",
				className: 'dt-body-center',
				targets: -3,
				className: 'dt-body-left'
				
				
			}
		  ]
    } );
	
	
	
	  


    $('.datatable-ajax').DataTable( {
        "ajax": {
            "url": "../../scholarshipapplicants/cspabovejson",
            "dataSrc": ""
  
        },
        "columns": [
           { data: "applicantid" },
		   { data: "concat_name",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a href='../profile/"+oData.applicantid+"'>"+oData.concat_name+"</a>");
						}
					},
					{ data: "gender" },
					{ data: "contactno" },
					{ data: "province" },
					{ data: "roundgrade" },
			{ data: "cspequivgradeabove",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html(oData.cspequivgradeabove+" ("+oData.totalgrade+")");
						}
					},
					{ data: "income" },
			{ data: "cspequivincome",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html(oData.cspequivincome+" ("+oData.totalincome+")");
						}
					},
					{ data: "grandtotal" },
					{ data: "pluspoint" },
					{ data: "totalwithplus" },
					{ data: "yearapplied" }
										
					 
					
					
        ],
		columnDefs: [
			{
				targets: "_all",
				className: 'dt-body-center',
				targets: -12,
				className: 'dt-body-left'
				
				
			}
		  ]
    } );
	
	 */

/*

		$('.datatable-ajax').dataTable({
				ajax: {
					url: "../../scholarshipapplicants/cspabovejson"
				},
				columns: [
					{ data: "applicantid" },
					{ data: "lastname" },
					{ data: "firstname" },
					{ data: "middlename" },
					{ data: "extension" },
					{ data: "contact_name" },
					{ data: "cspequivgradeabove" }
				]
			} );
*/
        //
        // Javascript sourced data
        //

        // Data
		
		
		 $('.datatablectdp-ajax').DataTable( {
        "ajax": {
            "url": "../../scholarshipapplicants/ctdpbelowjson",
            "dataSrc": ""
  
        },
        "columns": [
           { data: "applicantid" },
		   { data: "concat_name",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html("<a href='../profile/"+oData.applicantid+"'>"+oData.concat_name+"</a>");
						}
					},
					{ data: "gender" },
					{ data: "contactno" },
					{ data: "province" },
					{ data: "roundgrade" },
			{ data: "ctdpequivgrade",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html(oData.ctdpequivgrade+" ("+oData.totalgrade+")");
						}
					},
					{ data: "income" },
			{ data: "ctdpequivincome",
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							$(nTd).html(oData.ctdpequivincome+" ("+oData.totalincome+")");
						}
					},
					{ data: "grandtotal" },
					{ data: "year_level" },
					{ data: "type" },
					{ data: "yearapplied" }
					
					
										
					 
					
					
        ],
		columnDefs: [
			{
				targets: "_all",
				className: 'dt-body-center'
				
				
			}
		  ]
    } );
	
	
	
        var dataSet = [
            ['Trident','Internet Explorer 4.0','Win 95+','4','X'],
            ['Trident','Internet Explorer 5.0','Win 95+','5','C'],
            ['Trident','Internet Explorer 5.5','Win 95+','5.5','A'],
            ['Trident','Internet Explorer 6','Win 98+','6','A'],
            ['Gecko','Firefox 1.0','Win 98+ / OSX.2+','1.7','A'],
            ['Gecko','Firefox 1.5','Win 98+ / OSX.2+','1.8','A'],
            ['Gecko','Firefox 2.0','Win 98+ / OSX.2+','1.8','A'],
            ['Gecko','Firefox 3.0','Win 2k+ / OSX.3+','1.9','A'],
            ['Gecko','Camino 1.0','OSX.2+','1.8','A'],
            ['Gecko','Camino 1.5','OSX.3+','1.8','A'],
            ['Webkit','Safari 1.2','OSX.3','125.5','A'],
            ['Webkit','Safari 1.3','OSX.3','312.8','A'],
            ['Webkit','Safari 2.0','OSX.4+','419.3','A'],
            ['Presto','Opera 7.0','Win 95+ / OSX.1+','-','A'],
            ['Presto','Opera 7.5','Win 95+ / OSX.2+','-','A'],
            ['Misc','NetFront 3.1','Embedded devices','-','C'],
            ['Misc','NetFront 3.4','Embedded devices','-','A'],
            ['Misc','Dillo 0.8','Embedded devices','-','X'],
            ['Misc','Links','Text only','-','X']
        ];

        // Initialize
        $('.datatable-js').dataTable({
            data: dataSet,
            columnDefs: []
        });


        //
        // Nested object data
        //

        $('.datatable-nested').dataTable({
            ajax: '../../../../global_assets/demo_data/tables/datatable_nested.json',
            columns: [
                {data: "name[, ]"},
                {data: "hr.0" },
                {data: "office"},
                {data: "extn"},
                {data: "hr.2"},
                {data: "hr.1"}
            ]
        });


        //
        // Generate content for a column
        //

        // Table config
        var table = $('.datatable-generated').DataTable({
            ajax: '../../../../global_assets/demo_data/tables/datatable_ajax.json',
            columnDefs: [{
                targets: 2,
                data: null,
                defaultContent: "<a class='badge badge-secondary text-white cursor-pointer'>Show</a>"
            },
            { 
                orderable: false,
                targets: [0, 2]
            }]
        });
        
        // Location alert
        $('.datatable-generated tbody').on('click', 'a', function () {
            var data = table.row($(this).parents('tr')).data();
            alert(data[0] +"'s location is: "+ data[ 2 ]);
        });
    };

    // Select2 for length menu styling
    var _componentSelect2 = function() {
        if (!$().select2) {
            console.warn('Warning - select2.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity,
            dropdownAutoWidth: true,
            width: 'auto'
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentDatatableDataSources();
            _componentSelect2();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    DatatableDataSources.init();
});