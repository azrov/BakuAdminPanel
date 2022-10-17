// Baku Admin Panel

function toast(type, msg) {

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    switch (type) {
        case "s":
            toastr.success(msg);
            break;
        case "i":
            toastr.info(msg);
            break;
        case "w":
            toastr.warning(msg);
            break;
        case "e":
            toastr.error(msg);
            break;
        default:
            console.log(msg);
    }
}