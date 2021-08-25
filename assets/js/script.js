function today() {
    $(document).ready(function() {
        var date = new Date();
        var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
    
        $('#datepicker1').datepicker({
            format: 'dd-mm-yyyy',
            orientation: 'bottom'
        });
    
        $('#datepicker1').datepicker('setDate', today);
    
    });
}
