/**
 * --------------------------------------------------------------------------
 * General helpers.
 *
 * @todo - build this file.
 * --------------------------------------------------------------------------
 */

/**
 * Clear all all the elmeents that has a .clearable class
 * 
 * @see https://stackoverflow.com/questions/10543104/how-to-clear-all-input-fields-in-a-specific-div-with-jquery/10892768#10892768
 */
function clearClearableFields() {
    $(".clearable").each(function () {
        switch (this.type) {
            case 'password':
            case 'text':
            case 'textarea':
            case 'file':
            case 'select-one':
            case 'select-multiple':
            case 'date':
            case 'number':
            case 'tel':
            case 'email':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
                break;
        }
    });
}


/**
 * Flash the given className to the given element.
 *
 * @param element
 * @param className
 * @param duration
 */
function flashClass(element, className, duration) {
    var className = className || 'input-error';
    var duration = duration || 500;

    $(element).addClass(className).delay(duration).queue(function (next) {
        $(this).removeClass(className);
        next();
    });
}


/**
 * Debounce helper. Used for throttling the custom filter searching
 *
 * @todo - make it globaly or install lodash
 * @return callback
 */
function debounce(delay, callback) {
    var timer = null;
    return function () {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            callback.apply(context, args);
        }, delay);
    };
}

/**
 * --------------------------------------------------------------------------
 * Dataable helpers.
 * --------------------------------------------------------------------------
 */

/**
 * 
 */
function generateClearFiltersButton(index, dt, text) {
    return $('<button type="button" class="btn btn-primary">Clear Filters</button>')
        .appendTo($('#filters th').eq(index))
        .click(function (e) {
            e.stopPropagation();

            $(dt).find('#filters').find(':input').each(function () {
                $(this).val('');
            });

            $('.dt-datepicker-filter').datepicker('update', '').trigger('changeDate');;

            dt.api().draw();
        });
}

/**
* Generate a generic input element for custom filtering
* 
* @param int index - The index of the column
* @param column obj - Datatables column object
* @param placeholder text - input palceholder
* @return element
*/
function generateInputElement(index, column, placeholder, classes) {
    placeholder = typeof placeholder !== 'undefined' ? placeholder : '';
    classes = typeof classes !== 'undefined' ? classes : '';
    return $('<input type="text" class="form-control ' + classes + '" placeholder="' + placeholder + '">')
        .appendTo($('#filters th').eq(index))
        .click(function (e) {
            e.stopPropagation()
        })
        .keyup(debounce(300, function (e) {
            var val = $(this).val();
            column.search(val)
                .draw()
        }));
}


/**
* Generate a generic select element for custom filtering
* 
* @param int index - The index of the column
* @param column obj - Datatables column object
* @param placeholder text - Placeholder text
* @return element
*/
function generateSelectElement(index, column, placeholder) {
    placeholder = typeof placeholder !== 'undefined' ? placeholder : '--Select--';
    return $('<select class="form-control"><option value="">' + placeholder + '</option></select>')
        .appendTo($('#filters th').eq(index))
        .click(function (e) {
            e.stopPropagation()
        })
        .change(function (e) {
            var val = $(this).val();
            column.search(val)
                .draw()
        });
}


/**
* Generate a datepicker input element for custom filtering
* 
* @note - Requires bootstrap-datepicker
*
* @param int index - The index of the column
* @param column obj - Datatables column object
* @return void
*/
function generateDatepickerElement(index, column) {

    var component = [
        '<div class="input-group dt-datepicker-filter date">',
        '<input type="text" class="form-control" >',
        '<div class="input-group-addon">',
        '<span class="fa fa-calendar"></span>',
        '</div>',
        '</div>'
    ];

    var el = $(component.join(''))
        .appendTo($('#filters th').eq(index))

    $('.dt-datepicker-filter').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayBtn: 'linked',
        clearBtn: true,
        todayHighlight: true
    })
        .on('changeDate', function (e) {
            var value = (e.date) ? e.format() : '';

            column.search(value).draw();
        });
}


/**
* Generate a daterange picker input element for custom filtering
* 
* @note - Requires bootstrap-daterangepicker
*
* @param int index - The index of the column
* @param column obj - Datatables column object
* @return void
*/
function generateDateRangePickerElement(index, column, placeholder) {
    placeholder = typeof placeholder !== 'undefined' ? placeholder : 'Filter Date: From - To';

    var component = '<input type="text" placeholder="' + placeholder + '" class="form-control dt-daterangepicker-filter">';

    var el = $(component)
        .appendTo($('#filters th').eq(index))

    // Daterangepicker initialization
    $('.dt-daterangepicker-filter').daterangepicker({
        autoUpdateInput: false,
        locale: { cancelLabel: 'Clear' }
    })
        /**
         * Event handler when we select daterange
         */
        .on('apply.daterangepicker', function (ev, picker) {
            var dateRangeString = picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD');

            var dateRange = {
                'date_from': picker.startDate.format('YYYY-MM-DD'),
                'date_to': picker.endDate.format('YYYY-MM-DD')
            }

            $(this).val(dateRangeString);
            column.search(JSON.stringify(dateRange)).draw();
        })
        /**
         * Clears the daterangepicker value
         */
        .on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
            column.search('').draw();
        });
}




/**
 * --------------------------------------------------------------------------
 * Form Specific helpers.
 * --------------------------------------------------------------------------
 */


/**
 * Clear the error for the given field.
 *
 * @todo - Create a 'clearErrors' function for clearing all the errors for the form
 * @param field
 */
function clearError(field) {
    var parent = $('#input-' + field).closest('.form-group');

    if (!parent.length) {
        parent = $('#input-' + field).closest('.input-group');
    }

    var errorPlaceholder = $('#errors-' + field);

    parent.removeClass('has-error');
    errorPlaceholder.html('');
}

/**
 * This function manipulates the dom and add an error message based on the parameters specified.
 *
 * @note For bootstrap form and laravel validation response (422 Unprocessable Entity).
 * @see https://getbootstrap.com/docs/3.3/css/#forms-control-validation
 *
 * @param key - Field name
 * @param errors - The list of errors that will be appended to the field
 * @param parentClass - Possible value = '.form-group' and '.input-group'
 * @param tag - The tag that will be created and appended to the error placeholder
 * @param additionalClass - Additional class that will be appended to the tag
 */
function appendError(key, errors, parentClass, tag, additionalClass) {

    var tag = (tag) || 'span';
    var parentClass = (parentClass) || '.form-group';
    var additionalClasses = (additionalClass) || '';
    var parent = $('#input-' + key).closest(parentClass);
    var errorPlaceholder = $('#errors-' + key);

    parent.addClass('has-error');
    errorPlaceholder.html('');

    for (key in errors) {
        var elem = $(document.createElement(tag));
        elem.html(errors[key]);
        elem.addClass('text-danger help-block' + additionalClasses);
        elem.appendTo(errorPlaceholder);
    }

}

/**
 * Clear the field errors on keyup.
 * requires a name attribute.
 */
$('.form-input').change(function () {
    var fieldName = $(this).attr('name');
    clearError(fieldName);
});


/**
 * Make the text field only accepts number (with one dot)
 *
 * For key codes reference:
 * @see https://www.cambiaresearch.com/articles/15/javascript-char-codes-key-codes
 */
$(document).on("keydown", ".numeric-only", function (event) {

    // Allow: backspace, delete, tab, escape, and enter
    if (event.keyCode == 46 ||
        event.keyCode == 8 ||
        event.keyCode == 9 ||
        event.keyCode == 27 ||
        event.keyCode == 13 ||

        // Allow: Ctrl+A (Select All)
        (event.keyCode == 65 && event.ctrlKey === true) ||

        // Allow: Ctrl+C (Copy)
        (event.keyCode == 67 && event.ctrlKey === true) ||

        // Allow: Ctrl+V (Paste)
        (event.keyCode == 86 && event.ctrlKey === true) ||

        // Allow: Ctrl+X (Cut)
        (event.keyCode == 88 && event.ctrlKey === true) ||

        // Allow: home, end, left, right
        (event.keyCode >= 35 && event.keyCode <= 39) ||
        (event.keyCode == 190 || event.keyCode == 110)) {

        //allow only one dot
        if (this.value.split('.').length > 1 &&
            (event.keyCode == 190 || event.keyCode == 110)) {
            /* put a red border for 500 miliseconds */
            flashClass(this);
            return false;
        }
        // let it happen, don't do anything
        return;
    } else {

        // Ensure that it is a number and stop the keypress
        if (event.shiftKey ||
            (event.keyCode < 48 || event.keyCode > 57) &&
            (event.keyCode < 96 || event.keyCode > 105)) {

            //put a red highlight (500 milisec)
            flashClass(this);
            event.preventDefault();
        }

    }
});
