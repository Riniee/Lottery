$(document).ready(function() {
        //Alert Set Timeout
        $(".alert-dismissible").fadeTo(2000, 500).slideUp(500, function() {});
        //Active Menu
        var url = window.location;
        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function() {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function() {
            return this.href == url;
        }).closest('.treeview').addClass('active');
    });