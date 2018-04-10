var General = General || {

    init: function () {
        General.datatables.init();
    },

    datatables: {
        init: function () {

            if ($("#data-table-admin").length > 0) {

                var data_table_admin = $("#data-table-admin").bootgrid({
                    post: function () {
                        return {
                            _token: $('meta[name="csrf-token"]').attr('content')
                        };
                    },
                    ajax: true,
                    url: 'reports/data_dashboard',
                    css: {
                        icon: 'zmdi icon',
                        iconColumns: 'zmdi-view-module',
                        iconDown: 'zmdi-expand-more',
                        iconRefresh: 'zmdi-refresh',
                        iconUp: 'zmdi-expand-less'
                    },
                    formatters: {
                        "id": function (column, row) {
                            return '<span>\#' + row.id + '</span>';
                        },
                        "datetime": function (column, row) {
                            var datetime = moment(row.created_at);
                            return datetime.format("D/M/YYYY HH:mm");
                        },
                        "commands": function (column, row) {
                            return '<button onclick="General.modals.events.modal_report_edit_show(' + row.id + ')"  type="button" class="btn btn-icon command-edit waves-effect waves-circle" data-row-id="' + row.id + '"><span class="zmdi zmdi-edit"></span></button> ' +
                                '<button type="button" class="btn btn-icon command-delete waves-effect waves-circle" data-row-id="' + row.id + '"><span class="zmdi zmdi-delete"></span></button>';
                        },
                    }
                }).on("loaded.rs.jquery.bootgrid", function () {
                    /* Executes after data is loaded and rendered */
                    data_table_admin.find(".command-edit").on("click", function (e) {
                    }).end().find(".command-delete").on("click", function (e, data_table_admin) {
                        var that = this;
                        swal({
                            title: "Tem certeza que deseja excluir esse item?",
                            text: "Não será possível recuperar o item.",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#DD6B55",
                            confirmButtonText: "Remover",
                            closeOnConfirm: true
                        }, function () {
                            $('.page-loader').show();
                            $.ajax({
                                method: "delete",
                                url: "reports",
                                data: {_token: $('meta[name="csrf-token"]').attr('content'), id: $(that).data("row-id")}
                            }).done(function (msg) {

                                $("#data-table-admin").bootgrid('reload');
                                swal("Conteúdo excluido com sucesso.", "", "success")

                            }).fail(function () {

                                swal("Erro inesperado ao excluir.", "", "error")

                            }).always(function (msg) {

                                $('.page-loader').fadeOut();

                            });
                        });

                    });
                });
            }
        },
        events: {}
    },
    modals: {
        init: function () {

        },
        events: {
            modal_report_edit_show: function (id) {

                $('.page-loader').show();
                $.ajax({
                    method: "get",
                    url: "reports",
                    data: {_token: $('meta[name="csrf-token"]').attr('content'), id: id}
                }).done(function (msg) {
                    $('#modalEditReport form input[name=id]').val(msg.id)
                    $('#modalEditReport form input[name=name]').val(msg.name)
                    $('#modalEditReport form input[name=value]').val(msg.value)
                    $('#modalEditReport').modal('show');

                }).fail(function () {

                    swal("Erro inesperado ao obter dados.", "", "error")

                }).always(function (msg) {

                    $('.page-loader').fadeOut();

                });

            },
            modal_report_edit_save: function () {
                $('#modalEditReport').modal('hide');
                $('.page-loader').show();
                $.ajax({
                    method: "put",
                    url: $('#modalEditReport form').attr('action'),
                    data: $('#modalEditReport form').serialize()
                }).done(function (msg) {
                    $('#modalEditReport form input[name=id]').val(msg.id)
                    $('#modalEditReport form input[name=name]').val(msg.name)
                    $('#modalEditReport form input[name=value]').val(msg.value)
                    swal("Conteúdo alterado com sucesso.", "", "success")
                }).fail(function () {

                    swal("Erro inesperado ao alterar dados.", "", "error")

                }).always(function (msg) {

                    $("#data-table-admin").bootgrid('reload');
                    $('.page-loader').fadeOut();

                });

            },
            modal_report_insert_show: function () {

                $('#modalInsertReport').modal('show');
            },
            modal_report_insert_save: function () {
                $('#modalInsertReport').modal('hide');
                $('.page-loader').show();
                $.ajax({
                    method: "post",
                    url: $('#modalInsertReport form').attr('action'),
                    data: $('#modalInsertReport form').serialize()
                }).done(function (msg) {
                    $('#modalInsertReport form input[name=id]').val(msg.id)
                    $('#modalInsertReport form input[name=name]').val(msg.name)
                    $('#modalInsertReport form input[name=value]').val(msg.value)
                    swal("Conteúdo inserido com sucesso.", "", "success")
                }).fail(function () {

                    swal("Erro inesperado ao inserir dados.", "", "error")

                }).always(function (msg) {

                    $("#data-table-admin").bootgrid('reload');
                    $('.page-loader').fadeOut();

                });

            }
        }
    }
};
General.init();