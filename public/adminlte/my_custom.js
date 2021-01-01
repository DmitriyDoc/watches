$('.delete').click(function() {
    let res =  confirm('Подтвердите действие');
    if(!res) return false;
});

$('.sidebar-menu a ').each(function () {
    let location2 = window.location.protocol + '//' + window.location.host + window.location.pathname;
    let link = this.href;
    if (link == location2){
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }
});