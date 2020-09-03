"use strict";
var KTDatatablesDataSourceHtml = (function () {
    var initTable1 = function () {
        var table = $("#kt_datatable");

        // begin first table
        table.DataTable({
            responsive: true,
            columnDefs: [
                {
                    // targets: -1,
                    // title: "Actions",
                    // orderable: false,
                    // render: function (data, type, full, meta) {
                    //     return '\
                    // 		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon EditeService" title="Edit details">\
                    // 			<i class="la la-edit"></i>\
                    // 		</a>\
                    // 		<a href="javascript:;" class="btn btn-sm btn-clean btn-icon DeleteService" title="Delete">\
                    // 			<i class="la la-trash"></i>\
                    // 		</a>\
                    // 	';
                    // },
                },
            ],
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            initTable1();
        },
    };
})();

jQuery(document).ready(function () {
    KTDatatablesDataSourceHtml.init();
});
