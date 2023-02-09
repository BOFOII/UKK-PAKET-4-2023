@if (session()->has('success'))
    <script type="text/javascript">
        var isRtl = $('html').attr('data-textdirection') === 'rtl';
        toastr['success'](
            '👋 Jelly-o macaroon brownie tart ice cream croissant jelly-o apple pie.',
            'Success!', {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            }
        );
    </script>
@endif

@if (session()->has('error'))
    <script type="text/javascript">
        var isRtl = $('html').attr('data-textdirection') === 'rtl';
        toastr['error'](
            '👋 Jelly-o marshmallow marshmallow cotton candy dessert candy.',
            'Error!', {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            }
        );
    </script>
@endif

@if (session()->has('info'))
    <script type="text/javascript">
        var isRtl = $('html').attr('data-textdirection') === 'rtl';
        toastr['info'](
            '👋 Chupa chups biscuit brownie gummi sugar plum caramels.',
            'Info!', {
                closeButton: true,
                tapToDismiss: false,
                rtl: isRtl
            }
        );
    </script>
@endif
