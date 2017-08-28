$(document).ready(function(){
    $.fn.dataTable.moment( 'D/M/YYYY' );
    var table = $('#schedule').DataTable({
        responsive: true,
        "order": [[ 3, 'asc' ]],
        columnDefs: [
            { responsivePriority: 0, targets: 0 },
            { responsivePriority: 1, targets: 1 },
            { responsivePriority: 1, targets: 2 },
            { responsivePriority: 0, targets: 3 },
            { responsivePriority: 0, targets: 4 },
            { responsivePriority: 1, targets: 5 },
            { responsivePriority: 1, targets: 6 },
        ]
    });


   $('.schedule-view').click(function() {
       $('#main-view').fadeToggle(400, function() {
           $('#schedule-view').fadeToggle(400);
           table.responsive.recalc();
       });

       $('.schedule-view').fadeToggle(400, function() {
           $('.main-view').fadeToggle(400);
       });
   });

    $('.main-view').click(function() {
        $('#schedule-view').fadeToggle(400, function() {
            $('#main-view').fadeToggle(400);
        });

        $('.main-view').fadeToggle(400, function() {
            $('.schedule-view').fadeToggle(400);
        });;
    });


   $('.home-subtitle').click(function() {
       $('.home-info').toggle();
   })

    $('.counter').click(function() {
        $('.home-info').toggle();
    })
});