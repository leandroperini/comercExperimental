var General = General || {

    init: function () {
        General.datatables();
    },

    datatables: function () {
        if ($("#data-table-admin").length > 0) {

            $("#data-table-admin").bootgrid({
                post: function ()
                {
                    return {
                        _token: $('meta[name="csrf-token"]').attr('content')
                    };
                },
                ajax: true,
                url: 'data_dashboard',
                css: {
                    icon: 'zmdi icon',
                    iconColumns: 'zmdi-view-module',
                    iconDown: 'zmdi-expand-more',
                    iconRefresh: 'zmdi-refresh',
                    iconUp: 'zmdi-expand-less'
                },
                formatters: {
                    "commands": function (column, row) {
                        return "<button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                    },
                    "id": function (column, row) {
                        return '#' + row.id ;
                    }
                }
            });
        }
    }

};
General.init();