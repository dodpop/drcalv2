/*Export Table Init*/

"use strict";

$(document).ready(function() {


	// $('table.table').DataTable( {
	// 			fixedHeader: { header: true } ,
	// 			dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 ,
	// 		 initComplete: function () {
	// 				 this.api().columns().every( function () {
	// 						 var column = this;
	// 						 // var some = column.index();
	// 						 // if ( (column.index() != 2) && (column.index() != 3) && (column.index() != 9) && (column.index() != 10)) return;
	// 						 var select = $('<select><option value="">Select</option></select>')
	// 								 .appendTo( $(column.footer()).empty() )
	//
	// 								 .on( 'change', function () {
	// 										 var val = $.fn.dataTable.util.escapeRegex(
	// 												 $(this).val()
	// 										 );
	//
	// 										 column
	// 												 .search( val ? '^'+val+'$' : '', true, false )
	// 												 .draw();
	// 								 } );
	//
	// 						 column.data().unique().sort().each( function ( d, j ) {
	// 								 select.append( '<option value="'+d+'">'+d+'</option>' )
	// 						 } );
	//
	// 				 } );
	//
	// 		 }
	//  } );
  $('table.table_asc').DataTable( {	dom: 'Bfrtip', lengthMenu: [
              [ 10, 25, 50, -1 ],
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
          ],
         buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "asc" ]], "lengthChange": true, "pageLength": 50 } );

 $('table.table_desc').DataTable( {	dom: 'Bfrtip', lengthMenu: [
               [ 10, 25, 50, -1 ],
               [ '10 rows', '25 rows', '50 rows', 'Show all' ]
           ],
          buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": true, "pageLength": 50 } );

  $('table.table_nosort').DataTable( {	dom: 'Bfrtip', lengthMenu: [
              [ 10, 25, 50, -1 ],
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
          ],
         buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	,"aaSorting": [],"bSort":true, "lengthChange": true, "pageLength": 50 } );

 $('table.table_nosort500').DataTable( {	dom: 'Bfrtip', lengthMenu: [
             [ 10, 25, 50, -1 ],
             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
         ],
        buttons: [	 	'copy', 'csv', 'excel',  'print' ]	,"bSort": false, "lengthChange": true, "pageLength": 500 } );


  $('#dataTable_cfs1').DataTable( {	dom: 'Bfrtip', lengthMenu: [
              [ 10, 25, 50, -1 ],
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
          ],
         buttons: [
           'pageLength',
           {
                 extend: 'copy',
                 exportOptions: {
                   columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                 }
            },
            {
                  extend: 'csv',
                  exportOptions: {
                    columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                  }
             },
             {
                   extend: 'excel',
                   exportOptions: {
                     columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                   }
              },
              {
                    extend: 'print',
                    exportOptions: {
                      columns: [ 0,1,2,3,4,5,6,7,8,9,10 ]
                    }
               }]
                	,"aaSorting": [],"bSort":true, "lengthChange": true, "pageLength": 50 } );


  $('#dataTable_articles').DataTable( {	dom: 'Bfrtip', lengthMenu: [
              [ 10, 25, 50, -1 ],
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
          ],
         buttons: [
           'pageLength',
           {
                 extend: 'copy',
                 exportOptions: {
                   columns: [ 0,1,2,4,5,6 ]
                 }
            },
            {
                  extend: 'csv',
                  exportOptions: {
                    columns: [ 0,1,2,4,5,6 ]
                  }
             },
             {
                   extend: 'excel',
                   exportOptions: {
                     columns: [ 0,1,2,4,5,6 ]
                   }
              },
              {
                    extend: 'print',
                    exportOptions: {
                      columns: [ 0,1,2,4,5,6 ]
                    }
               }]
                  ,"aaSorting": [],"bSort":true, "lengthChange": true, "pageLength": 50 } );

 //
 // var dataTables1 = $('#datable_0_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //             [ 10, 25, 50, -1 ],
 //             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //         ],
 //        buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": false, "pageLength": 500 ,"showNEntries" : false} );
 //
 // $('.typefilter0').on( 'click',  function () {   dataTables1.column( 3 ).search( $(this).attr("title") ).draw(); } );
 //
 // var dataTables3 = $('#datable_3_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //             [ 10, 25, 50, -1 ],
 //             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //         ],
 //        buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": false, "pageLength": 500 ,"showNEntries" : false} );
 //
 // $('.typefilter3').on( 'click',  function () {   dataTables3.column( 3 ).search( $(this).attr("title") ).draw(); } );
 //
 // var dataTables4 = $('#datable_4_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //             [ 10, 25, 50, -1 ],
 //             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //         ],
 //        buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": false, "pageLength": 500 ,"showNEntries" : false} );
 //
 // $('.typefilter4').on( 'click',  function () {   dataTables4.column( 3 ).search( $(this).attr("title") ).draw(); } );
 //
 // var dataTables5 = $('#datable_5_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //             [ 10, 25, 50, -1 ],
 //             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //         ],
 //        buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": false, "pageLength": 500 ,"showNEntries" : false} );
 //
 //





 // $('.typefilter5').on( 'click',  function () {   dataTables5.column( 3 ).search( $(this).attr("title") ).draw(); } );
 //
 // var dataTables6 = $('#datable_6_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //             [ 10, 25, 50, -1 ],
 //             [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //         ],
 //        buttons: [	 'pageLength',		'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "lengthChange": false, "pageLength": 500 ,"showNEntries" : false} );
 //
 // $('.typefilter6').on( 'click',  function () {   dataTables6.column( 3 ).search( $(this).attr("title") ).draw(); } );
 //
 //
 //  var dataTablesc = $('#datable_depid_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
 //              [ 10, 25, 50, -1 ],
 //              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
 //          ],
 //         buttons: [	  		'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
 //
 //  $('.typefilterc').on( 'click',  function () {   dataTablesc.column( 1 ).search( $(this).attr("title") ).draw(); } );
 //
  var dataTablesc = $('#datable_depid_asset').DataTable( {	dom: 'Bfrtip', lengthMenu: [
              [ 10, 25, 50, -1 ],
              [ '10 rows', '25 rows', '50 rows', 'Show all' ]
          ],
         buttons: [	  		'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );

  $('.typefilterc').on( 'click',  function () {   dataTablesc.column( 1 ).search( $(this).attr("title") ).draw(); } );








   function cbDropdown(column) {
     return $('<ul>', {
       'class': 'cb-dropdown'
     }).appendTo($('<div>', {
       'class': 'cb-dropdown-wrap'
     }).appendTo(column));
   }

   $('.asset_tables').DataTable({

     initComplete: function() {
       this.api().columns().every(function() {
         var column = this;
         var ddmenu = cbDropdown($(column.header()))
           .on('change', ':checkbox', function() {
             var active;
             var vals = $(':checked', ddmenu).map(function(index, element) {
               active = true;
               return $.fn.dataTable.util.escapeRegex($(element).val());
             }).toArray().join('|');

             column
               .search(vals.length > 0 ? '^(' + vals + ')$' : '', true, false)
               .draw();

             // Highlight the current item if selected.
             if (this.checked) {
               $(this).closest('li').addClass('active');
             } else {
               $(this).closest('li').removeClass('active');
             }

             // Highlight the current filter if selected.
             var active2 = ddmenu.parent().is('.active');
             if (active && !active2) {
               ddmenu.parent().addClass('active');
             } else if (!active && active2) {
               ddmenu.parent().removeClass('active');
             }
           });

         column.data().unique().sort().each(function(d, j) {
           var // wrapped
             $label = $('<label>'),
             $text = $('<span>', {
               text: d
             }),
             $cb = $('<input>', {
               type: 'checkbox',
               value: d
             });

           $text.appendTo($label);
           $cb.appendTo($label);

           ddmenu.append($('<li>').append($label));
         });
       });
     },
     	dom: 'Bfrtip', lengthMenu: [
                  [ 10, 25, 50, -1 ],
                  [ '10 rows', '25 rows', '50 rows', 'Show all' ]
              ],
             buttons: [	  		'copy', 'csv', 'excel',  'print' ]	, "bSort": true,  "lengthChange": false, "pageLength": 10 ,"bInfo" : false

   });


// $('#datable_1_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_2_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_3_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_4_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_5_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_6_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_7_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
// $('#datable_8_as').DataTable( {	dom: 'Bfrtip', buttons: [ 'copy', 'csv', 'excel',  'print' ]	, "bSort": false,  "lengthChange": false, "pageLength": 500 ,"bInfo" : false} );
//
// $('#datable_0').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_1').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_3').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_4').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_5').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_6').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_7').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
// $('#datable_8').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 10 } );
//
// $('#datable_12').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_13').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_14').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_15').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_16').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_17').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_18').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );
// $('#datable_19').DataTable( {	dom: 'Bfrtip', buttons: [			'copy', 'csv', 'excel',  'print' ]	, "order": [[ 0, "desc" ]], "pageLength": 50 } );

} );
