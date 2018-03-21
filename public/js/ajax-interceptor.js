/**
 * Global Ajax interceptor
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    statusCode: {
        /**
         * Global interceptor for redirecting unauthenticated ajax request.
         */
        401: function () {
            dhtmlx.alert({
                title: 'Session Expired',
                type: "alert-error",
                text: 'Please login again to continue.',
                callback: function (result) {
                    window.location.replace(window.baseUrl);
                }
            });
        },

        /**
         * Global interceptor for handling http code 500 on ajax request.
         */
        500: function (err) {
            var message = (err.responseJSON && err.responseJSON['message']) || 'Something went wrong on the server. Please try again or contact the system administrator.';
            dhtmlx.alert({
                title: 'Internal Server Error',
                type: "alert-error",
                text: message
            });
        }
    }
});


