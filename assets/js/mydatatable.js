/*!function(){$(function(){return $(".datatable").dataTable({aoColumnDefs:[{bSortable:!1,aTargets:[0,6]}],aaSorting:[]}),$(".datatable").each(function(){var a,t,e;return a=$(this),e=a.closest(".dataTables_wrapper").find("div[id$=_filter] input"),e.attr("placeholder","Search"),e.addClass("form-control input-sm"),t=a.closest(".dataTables_wrapper").find("div[id$=_length] select"),t.addClass("form-control input-sm"),t=a.closest(".dataTables_wrapper").find("div[id$=_info]"),t.css("margin-top","18px")})})}.call(this);
;*/



/*

! function() {
    $(function() {
        return $(".datatable").dataTable({
            aoColumnDefs: [{
                bSortable: !1,
                aTargets: [0, 6]

            }],
            aaSorting: []
        }), $(".datatable").each(function() {
            var a, t, e;
            return a = $(this), e = a.closest(".dataTables_wrapper").find("div[id$=_filter] input"), e.attr("placeholder", "Search"), e.addClass("form-control input-sm"), t = a.closest(".dataTables_wrapper").find("div[id$=_length] select"), t.addClass("form-control input-sm"), t = a.closest(".dataTables_wrapper").find("div[id$=_info]"), t.css("margin-top", "18px")
        })
    })
}.call(this);
*/

$(document).ready(function() {
    $('.datatable').DataTable( {
        columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 0 ]
        }, {
            targets: [ 1 ],
            orderData: [ 1, 0 ]
        }, {
            targets: [ 4 ],
            orderData: [ 4, 0 ]
        } ]
    } );
} );


/*

!function() {
    $(function() {
        return $(".datatable").each(function() {
            var a, t, e;
            return a = $(this), e = a.closest(".dataTables_wrapper").find("div[id$=_filter] input"), e.attr("placeholder", "Search"), e.addClass("form-control input-sm"), t = a.closest(".dataTables_wrapper").find("div[id$=_length] select"), t.addClass("form-control input-sm"), t = a.closest(".dataTables_wrapper").find("div[id$=_info]"), t.css("margin-top", "18px")
        })
    })
}.call(this);

*/