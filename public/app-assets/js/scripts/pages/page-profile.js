/*=========================================================================================
    File Name: page-profile.js
    Description: User Profile jQuery Plugin Initialization
    --------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  // variables
  var blockElement = $('.block-element');

  //  block Examples
  if (blockElement.length) {
    blockElement.on('click', function () {
      var block_ele = $(this);
      $(block_ele).block({
        message: '<div class="spinner-border text-primary font-medium-3"></div>',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
          backgroundColor: '#fff',
          opacity: 0.8,
          cursor: 'wait'
        },
        css: {
          border: 0,
          padding: 0,
          backgroundColor: 'transparent',
          display: 'flex',
          justifyContent: 'center',
          alignItems: 'center'
        }
      });
    });
  }

  var dtUserTable = $('.user-list-table'),
    select = $('.select2');

  var assetPath = '../../../app-assets/',
    userView = 'app-user-view-account.html';

  if ($('body').attr('data-framework') === 'laravel') {
    assetPath = $('body').attr('data-asset-path');
    userView = assetPath + 'app/user/view/account';
  }

  select.each(function () {
    var $this = $(this);
    $this.wrap('<div class="position-relative"></div>');
    $this.select2({
      // the following code is used to disable x-scrollbar when click in select input and
      // take 100% width in responsive also
      dropdownAutoWidth: true,
      width: '100%',
      dropdownParent: $this.parent()
    });
  });

  // Users List datatable
  if (dtUserTable.length) {
    dtUserTable.DataTable({
      ajax: '/app-assets/data/history-list.json', // JSON file to add data
      columns: [
        // columns according to JSON
        { data: '' },
        { data: 'id_history' },
        { data: 'penawaran_harga' },
        { data: '' }
      ],
      columnDefs: [
        {
          // For Responsive
          className: 'control',
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, full, meta) {
            return '';
          }
        },
        {
          // User full name and username
          targets: 1,
          responsivePriority: 4,
          render: function (data, type, full, meta) {
            var $name = full['barang']['nama_barang'],
              $desc= full['barang']['deskripsi_barang'],
              $image = full['barang']['images'][0].url;
            if ($image) {
              // For Avatar image
              var $output =
                '<img src="' + assetPath + 'images/avatars/' + $image + '" alt="Avatar" height="32" width="32">';
            } else {
              // For Avatar badge
              var stateNum = Math.floor(Math.random() * 6) + 1;
              var states = ['success', 'danger', 'warning', 'info', 'dark', 'primary', 'secondary'];
              var $state = states[stateNum],
                $name = full['full_name'],
                $initials = $name.match(/\b\w/g) || [];
              $initials = (($initials.shift() || '') + ($initials.pop() || '')).toUpperCase();
              $output = '<span class="avatar-content">' + $initials + '</span>';
            }
            var colorClass = $image === '' ? ' bg-light-' + $state + ' ' : '';
            // Creates full output for row
            var $row_output =
              '<div class="d-flex justify-content-left align-items-center">' +
              '<div class="avatar-wrapper">' +
              '<div class="avatar ' +
              colorClass +
              ' me-1">' +
              $output +
              '</div>' +
              '</div>' +
              '<div class="d-flex flex-column">' +
              '<a href="' +
              userView +
              '" class="user_name text-truncate text-body"><span class="fw-bolder">' +
              $name +
              '</span></a>' +
              '<small class="emp_post text-muted">' +
              $desc+
              '</small>' +
              '</div>' +
              '</div>';
            return $row_output;
          }
        },
        {
          // User Role
          targets: 2,
          render: function (data, type, full, meta) {
            var $role = full['penawaran_harga'];
            return "<span class='text-truncate align-middle'>" + $role + '</span>';
          }
        },
        {
          // Actions
          targets: -1,
          title: 'Actions',
          orderable: false,
          render: function (data, type, full, meta) {
            return (
              '<div class="btn-group">' +
              '<a class="btn btn-sm dropdown-toggle hide-arrow" data-bs-toggle="dropdown">' +
              feather.icons['more-vertical'].toSvg({ class: 'font-small-4' }) +
              '</a>' +
              '<div class="dropdown-menu dropdown-menu-end">' +
              '<a href="' +
              userView +
              '" class="dropdown-item">' +
              feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) +
              'Details</a>' +
              '<a href="javascript:;" class="dropdown-item delete-record">' +
              feather.icons['trash-2'].toSvg({ class: 'font-small-4 me-50' }) +
              'Delete</a></div>' +
              '</div>' +
              '</div>'
            );
          }
        }
      ],
      order: [[1, 'desc']],
      dom:
        '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
        '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
        '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
        '>t' +
        '<"d-flex justify-content-between mx-2 row mb-1"' +
        '<"col-sm-12 col-md-6"i>' +
        '<"col-sm-12 col-md-6"p>' +
        '>',
      language: {
        sLengthMenu: 'Show _MENU_',
        search: 'Search',
        searchPlaceholder: 'Search..'
      },
      // Buttons with Dropdown
      buttons: [],
      // For responsive popup
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['full_name'];
            }
          }),
          type: 'column',
          renderer: function (api, rowIdx, columns) {
            var data = $.map(columns, function (col, i) {
              return col.columnIndex !== 6 // ? Do not show row in modal popup if title is blank (for check box)
                ? '<tr data-dt-row="' +
                    col.rowIdx +
                    '" data-dt-column="' +
                    col.columnIndex +
                    '">' +
                    '<td>' +
                    col.title +
                    ':' +
                    '</td> ' +
                    '<td>' +
                    col.data +
                    '</td>' +
                    '</tr>'
                : '';
            }).join('');
            return data ? $('<table class="table"/>').append('<tbody>' + data + '</tbody>') : false;
          }
        }
      },
      language: {
        paginate: {
          // remove previous & next text from pagination
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      },
      // initComplete: function () {
      //   // Adding role filter once table initialized
      //   this.api()
      //     .columns(2)
      //     .every(function () {
      //       var column = this;
      //       var label = $('<label class="form-label" for="UserRole">Role</label>').appendTo('.user_role');
      //       var select = $(
      //         '<select id="UserRole" class="form-select text-capitalize mb-md-0 mb-2"><option value=""> Select Role </option></select>'
      //       )
      //         .appendTo('.user_role')
      //         .on('change', function () {
      //           var val = $.fn.dataTable.util.escapeRegex($(this).val());
      //           column.search(val ? '^' + val + '$' : '', true, false).draw();
      //         });

      //       column
      //         .data()
      //         .unique()
      //         .sort()
      //         .each(function (d, j) {
      //           select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
      //         });
      //     });
      //   // Adding plan filter once table initialized
      //   this.api()
      //     .columns(3)
      //     .every(function () {
      //       var column = this;
      //       var label = $('<label class="form-label" for="UserPlan">Plan</label>').appendTo('.user_plan');
      //       var select = $(
      //         '<select id="UserPlan" class="form-select text-capitalize mb-md-0 mb-2"><option value=""> Select Plan </option></select>'
      //       )
      //         .appendTo('.user_plan')
      //         .on('change', function () {
      //           var val = $.fn.dataTable.util.escapeRegex($(this).val());
      //           column.search(val ? '^' + val + '$' : '', true, false).draw();
      //         });

      //       column
      //         .data()
      //         .unique()
      //         .sort()
      //         .each(function (d, j) {
      //           select.append('<option value="' + d + '" class="text-capitalize">' + d + '</option>');
      //         });
      //     });
      //   // Adding status filter once table initialized
      //   this.api()
      //     .columns(5)
      //     .every(function () {
      //       var column = this;
      //       var label = $('<label class="form-label" for="FilterTransaction">Status</label>').appendTo('.user_status');
      //       var select = $(
      //         '<select id="FilterTransaction" class="form-select text-capitalize mb-md-0 mb-2xx"><option value=""> Select Status </option></select>'
      //       )
      //         .appendTo('.user_status')
      //         .on('change', function () {
      //           var val = $.fn.dataTable.util.escapeRegex($(this).val());
      //           column.search(val ? '^' + val + '$' : '', true, false).draw();
      //         });

      //       column
      //         .data()
      //         .unique()
      //         .sort()
      //         .each(function (d, j) {
      //           select.append(
      //             '<option value="' +
      //               statusObj[d].title +
      //               '" class="text-capitalize">' +
      //               statusObj[d].title +
      //               '</option>'
      //           );
      //         });
      //     });
      // }
    });
  }
});