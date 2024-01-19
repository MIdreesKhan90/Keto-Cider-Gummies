var us_states = {
    "AL": "Alabama",
    "AK": "Alaska",
    "AZ": "Arizona",
    "AR": "Arkansas",
    "CA": "California",
    "CO": "Colorado",
    "CT": "Connecticut",
    "DC": "District of Columbia",
    "DE": "Delaware",
    "FL": "Florida",
    "GA": "Georgia",
    "HI": "Hawaii",
    "ID": "Idaho",
    "IL": "Illinois",
    "IN": "Indiana",
    "IA": "Iowa",
    "KS": "Kansas",
    "KY": "Kentucky",
    "LA": "Louisiana",
    "ME": "Maine",
    "MD": "Maryland",
    "MA": "Massachusetts",
    "MI": "Michigan",
    "MN": "Minnesota",
    "MS": "Mississippi",
    "MO": "Missouri",
    "MT": "Montana",
    "NE": "Nebraska",
    "NV": "Nevada",
    "NH": "New Hampshire",
    "NJ": "New Jersey",
    "NM": "New Mexico",
    "NY": "New York",
    "NC": "North Carolina",
    "ND": "North Dakota",
    "OH": "Ohio",
    "OK": "Oklahoma",
    "OR": "Oregon",
    "PA": "Pennsylvania",
    "RI": "Rhode Island",
    "SC": "South Carolina",
    "SD": "South Dakota",
    "TN": "Tennessee",
    "TX": "Texas",
    "UT": "Utah",
    "VT": "Vermont",
    "VA": "Virginia",
    "WA": "Washington",
    "WV": "West Virginia",
    "WI": "Wisconsin",
    "WY": "Wyoming"
};
var ca_states = {
    "AB": "Alberta",
    "BC": "British Columbia",
    "MB": "Manitoba",
    "NB": "New Brunswick",
    "NL": "Newfoundland and Labrador",
    "NT": "Northwest Territories",
    "NS": "Nova Scotia",
    "NU": "Nunavut",
    "ON": "Ontario",
    "PE": "Prince Edward Island",
    "QC": "Quebec",
    "SK": "Saskatchewan",
    "YT": "Yukon"
};
var int_country = {
    "AF": "Afghanistan",
    "AX": "Aland Islands",
    "AL": "Albania",
    "DZ": "Algeria",
    "AS": "American Samoa",
    "AD": "Andorra",
    "AO": "Angola",
    "AI": "Anguilla",
    "AQ": "Antarctica",
    "AG": "Antigua and Barbuda",
    "AR": "Argentina",
    "AM": "Armenia",
    "AW": "Aruba",
    "AU": "Australia",
    "AT": "Austria",
    "AZ": "Azerbaijan",
    "BS": "Bahamas",
    "BH": "Bahrain",
    "BD": "Bangladesh",
    "BB": "Barbados",
    "BY": "Belarus",
    "BE": "Belgium",
    "BZ": "Belize",
    "BJ": "Benin",
    "BM": "Bermuda",
    "BT": "Bhutan",
    "BO": "Bolivia, Plurinational State of",
    "BQ": "Bonaire, Sint Eustatius and Saba",
    "BA": "Bosnia and Herzegovina",
    "BW": "Botswana",
    "BV": "Bouvet Island",
    "BR": "Brazil",
    "IO": "British Indian Ocean Territory",
    "BN": "Brunei Darussalam",
    "BG": "Bulgaria",
    "BF": "Burkina Faso",
    "BI": "Burundi",
    "KH": "Cambodia",
    "CM": "Cameroon",
    "CV": "Cape Verde",
    "KY": "Cayman Islands",
    "CF": "Central African Republic",
    "TD": "Chad",
    "CL": "Chile",
    "CN": "China",
    "CX": "Christmas Island",
    "CC": "Cocos (Keeling) Islands",
    "CO": "Colombia",
    "KM": "Comoros",
    "CG": "Congo",
    "CD": "Congo, the Democratic Republic of the",
    "CK": "Cook Islands",
    "CR": "Costa Rica",
    "HR": "Croatia",
    "CU": "Cuba",
    "CW": "Curaçao",
    "CY": "Cyprus",
    "CZ": "Czech Republic",
    "DK": "Denmark",
    "DJ": "Djibouti",
    "DM": "Dominica",
    "DO": "Dominican Republic",
    "EC": "Ecuador",
    "EG": "Egypt",
    "SV": "El Salvador",
    "GQ": "Equatorial Guinea",
    "ER": "Eritrea",
    "EE": "Estonia",
    "ET": "Ethiopia",
    "FK": "Falkland Islands (Malvinas)",
    "FO": "Faroe Islands",
    "FJ": "Fiji",
    "FI": "Finland",
    "FR": "France",
    "GF": "French Guiana",
    "PF": "French Polynesia",
    "TF": "French Southern Territories",
    "GA": "Gabon",
    "GM": "Gambia",
    "GE": "Georgia",
    "DE": "Germany",
    "GH": "Ghana",
    "GI": "Gibraltar",
    "GR": "Greece",
    "GL": "Greenland",
    "GD": "Grenada",
    "GP": "Guadeloupe",
    "GU": "Guam",
    "GT": "Guatemala",
    "GG": "Guernsey",
    "GN": "Guinea",
    "GW": "Guinea-Bissau",
    "GY": "Guyana",
    "HT": "Haiti",
    "HM": "Heard Island and McDonald Islands",
    "VA": "Holy See (Vatican City State)",
    "HN": "Honduras",
    "HK": "Hong Kong",
    "HU": "Hungary",
    "IS": "Iceland",
    "IN": "India",
    "ID": "Indonesia",
    "IR": "Iran, Islamic Republic of",
    "IQ": "Iraq",
    "IE": "Ireland",
    "IM": "Isle of Man",
    "IL": "Israel",
    "IT": "Italy",
    "JM": "Jamaica",
    "JP": "Japan",
    "JE": "Jersey",
    "JO": "Jordan",
    "KZ": "Kazakhstan",
    "KE": "Kenya",
    "KI": "Kiribati",
    "KP": "Korea, Democratic Peoples Republic of",
    "KR": "Korea, Republic of",
    "KW": "Kuwait",
    "KG": "Kyrgyzstan",
    "LA": "Lao Peoples Democratic Republic",
    "LV": "Latvia",
    "LB": "Lebanon",
    "LS": "Lesotho",
    "LR": "Liberia",
    "LY": "Libya",
    "LI": "Liechtenstein",
    "LT": "Lithuania",
    "LU": "Luxembourg",
    "MO": "Macao",
    "MK": "Macedonia, the former Yugoslav Republic of",
    "MG": "Madagascar",
    "MW": "Malawi",
    "MY": "Malaysia",
    "MV": "Maldives",
    "ML": "Mali",
    "MT": "Malta",
    "MH": "Marshall Islands",
    "MQ": "Martinique",
    "MR": "Mauritania",
    "MU": "Mauritius",
    "YT": "Mayotte",
    "MX": "Mexico",
    "FM": "Micronesia, Federated States of",
    "MD": "Moldova, Republic of",
    "MC": "Monaco",
    "MN": "Mongolia",
    "ME": "Montenegro",
    "MS": "Montserrat",
    "MA": "Morocco",
    "MZ": "Mozambique",
    "MM": "Myanmar",
    "NA": "Namibia",
    "NR": "Nauru",
    "NP": "Nepal",
    "NL": "Netherlands",
    "NC": "New Caledonia",
    "NZ": "New Zealand",
    "NI": "Nicaragua",
    "NE": "Niger",
    "NG": "Nigeria",
    "NU": "Niue",
    "NF": "Norfolk Island",
    "MP": "Northern Mariana Islands",
    "NO": "Norway",
    "OM": "Oman",
    "PK": "Pakistan",
    "PW": "Palau",
    "PS": "Palestinian Territory, Occupied",
    "PA": "Panama",
    "PG": "Papua New Guinea",
    "PY": "Paraguay",
    "PE": "Peru",
    "PH": "Philippines",
    "PN": "Pitcairn",
    "PL": "Poland",
    "PT": "Portugal",
    "PR": "Puerto Rico",
    "QA": "Qatar",
    "RE": "Réunion",
    "RO": "Romania",
    "RU": "Russian Federation",
    "RW": "Rwanda",
    "BL": "Saint Barthélemy",
    "SH": "Saint Helena, Ascension and Tristan da Cunha",
    "KN": "Saint Kitts and Nevis",
    "LC": "Saint Lucia",
    "MF": "Saint Martin (French part)",
    "PM": "Saint Pierre and Miquelon",
    "VC": "Saint Vincent and the Grenadines",
    "WS": "Samoa",
    "SM": "San Marino",
    "ST": "Sao Tome and Principe",
    "SA": "Saudi Arabia",
    "SN": "Senegal",
    "RS": "Serbia",
    "SC": "Seychelles",
    "SL": "Sierra Leone",
    "SG": "Singapore",
    "SX": "Sint Maarten (Dutch part)",
    "SK": "Slovakia",
    "SI": "Slovenia",
    "SB": "Solomon Islands",
    "SO": "Somalia",
    "ZA": "South Africa",
    "GS": "South Georgia and the South Sandwich Islands",
    "SS": "South Sudan",
    "ES": "Spain",
    "LK": "Sri Lanka",
    "SD": "Sudan",
    "SR": "Suriname",
    "SJ": "Svalbard and Jan Mayen",
    "SZ": "Swaziland",
    "SE": "Sweden",
    "CH": "Switzerland",
    "SY": "Syrian Arab Republic",
    "TW": "Taiwan, Province of China",
    "TJ": "Tajikistan",
    "TZ": "Tanzania, United Republic of",
    "TH": "Thailand",
    "TL": "Timor-Leste",
    "TG": "Togo",
    "TK": "Tokelau",
    "TO": "Tonga",
    "TT": "Trinidad and Tobago",
    "TN": "Tunisia",
    "TR": "Turkey",
    "TM": "Turkmenistan",
    "TC": "Turks and Caicos Islands",
    "TV": "Tuvalu",
    "UG": "Uganda",
    "UA": "Ukraine",
    "AE": "United Arab Emirates",
    "GB": "United Kingdom",
    "UM": "United States Minor Outlying Islands",
    "UY": "Uruguay",
    "UZ": "Uzbekistan",
    "VU": "Vanuatu",
    "VE": "Venezuela, Bolivarian Republic of",
    "VN": "Viet Nam",
    "VG": "Virgin Islands, British",
    "VI": "Virgin Islands, U.S.",
    "WF": "Wallis and Futuna",
    "EH": "Western Sahara",
    "YE": "Yemen",
    "ZM": "Zambia",
    "ZW": "Zimbabwe"

};

function getState(val, id, callback) {

    $(id).html("<option value='' selected disabled>Select State / Province</option>");

    if (val === 'US') {
        $.each(us_states, function (index, value) {
            $(id).append('<option value=' + index + '>' + value + '</option>')
        });
    } else if (val === 'CA') {
        $.each(ca_states, function (index, value) {
            $(id).append('<option value=' + index + '>' + value + '</option>')
        });
    }

    if (typeof callback === "function") {
        callback();
    }
}

function tryParseJSON(jsonString) {
    try {
        var o = JSON.parse(jsonString);

        // Handle non-exception-throwing cases:
        // Neither JSON.parse(false) or JSON.parse(1234) throw errors, hence the type-checking,
        // but... JSON.parse(null) returns null, and typeof null === "object",
        // so we must check for that, too. Thankfully, null is falsey, so this suffices:
        if (o && typeof o === "object") {
            return o;
        }
    } catch (e) {
    }
    return false;
};



function make_order(form_id, button_id, form_action) {

    //var success_link = doc_root + suc_link;
    var form = $(form_id);
    var ccButton = $(button_id);

    form.on('beforeSubmit', function (e) {
        e.preventDefault();
        return false;
    }).on('submit', function (e) {
        e.preventDefault();

    });
    $('#errModal').on('hidden.bs.modal', function (e) {
        ccButton.prop("disabled", false);
    })


    ccButton.on('click', function (e) {
        e.preventDefault();
        form.yiiActiveForm('validate', true);
        ccButton.prop("disabled", true);
        // form is valid
        $.ajax({
            type: 'post',
            url: form_action,
            data: form.serialize(),
            beforeSend: function () {
                $('.modal-header .modal-title').html("Please Wait");
                $('.err-modal-content').html('<div class="text-center"><i class="fa fa-circle-o-notch fa-spin h1-hero"></i><br><br>Processing your order...</div>');
                $('#errModal .modal-footer').hide();
                $('#errModal').modal('show');
            },
            success: function (response) {
                var res = tryParseJSON(response)
                // if value is not json
                if (res == false) {
                    $('.modal-header .modal-title').html("Error");
                    $('.err-modal-content').html('<div class="text-center"><i class="fa fa-times-circle h1-hero"></i></div>' + response);
                    $('#errModal .modal-footer').show();
                    $('#errModal').modal('show');
                    ccButton.prop("disabled", false);
                    return false;
                }

                // if value is json and have status  100 (all good)
                if (res.status == 100) {
                    $('.modal-header .modal-title').html("Success!");
                    $('.err-modal-content').html('<div class="text-center"><i class="fa fa-check-circle h1-hero text-success"></i><br>Your Order is approved</div>');
                    setTimeout(function(){
                        window.location.href = res.redirect_to;
                    }, 2500);

                    return true;
                } else {
                    $('.modal-header .modal-title').html("Error");
                    $('.err-modal-content').html('<div class="text-center"><i class="fa fa-times-circle h1-hero text-danger"></i><br>'+ response +'</div>');
                    $('#errModal .modal-footer').show();
                    $('#errModal').modal('show');

                    ccButton.prop("disabled", false);
                    return false;
                }
            },
            error: function () {
                $('.modal-header .modal-title').html("Error");
                $('.err-modal-content').html('<div class="text-center"><i class="fa fa-times-circle h1-hero text-danger"></i>Internal Error</div>');
                $('#errModal .modal-footer').show();
                $('#errModal').modal('show');

                ccButton.prop("disabled", false);
                return false;
            }
        });

        return false;
    });
}
function pp_upsell_submit(form_id, sub_id) {
    console.log('hello');
    var form = $(form_id).serialize() + '&pp_subscription_id=' + sub_id;
    $.ajax({
        type: 'post',
        url: '/order/upsell-process',
        data: form,
        success: function (response) {
            console.log('sent');
            console.log(response);
        }
    });
}


function pp_submit(form_id, sub_id) {
    console.log('hello');
    var form = $(form_id).serialize() + '&pp_subscription_id=' + sub_id;
    $.ajax({
        type: 'post',
        url: '/order/make-order',
        data: form,
        success: function (response) {
            console.log('sent');
            console.log(response);
        }
    });
}


function pp_confirm(sub_id, location_href) {
    $.get('/order/pp-confirm?id=' + sub_id, function () {
        console.log("Confirmed " + sub_id);
        window.location.href = location_href;

    });
}

function pp_cancel(sub_id) {
    $.get('/order/pp-cancel?id=' + sub_id, function () {
        console.log(sub_id);
    });
}

function pp_fail(sub_id, error) {
    $.post("/order/pp-fail", {id: sub_id, error: error});
}




$(function () {
    $("#orderform-shippingcountry, #shippingId").on("change", function () {

        var shipping_amount = '0.00';
        var product_price_total = $("#product_price").html();

        if ($("#orderform-shippingcountry").val() == 'US') {
            $('.cart .shipping-text').html('Shipping');

            if ($('#shippingId').is(':checked')) {
                shipping_amount = '19.95';
            } else {
                shipping_amount = '0.00';
            }

            $("#shipping_price").html(shipping_amount);

            $('.cart .shipping-amount').html((shipping_amount == 0.00) ? 'FREE' : shipping_amount);


        }
        if ($("#orderform-shippingcountry").val() == 'CA') {
            $('.cart .shipping-text').html('Shipping');
            if ($('#shippingId').is(':checked')) {
                shipping_amount = '24.95';
            } else {
                shipping_amount = '0.00';
            }
            $("#shipping_price").html(shipping_amount);
            $('.cart .shipping-amount').html(shipping_amount);
        }

        if ($("#orderform-shippingcountry").val() == 'INT') {
            $("#shipping_price").html('99.00');
            $('[for="shippingId"]').hide();
            $('#shippingId').prop('checked', false);
        } else {
            $('[for="shippingId"]').show();
        }

        $(".cart_total").html((+product_price_total + +shipping_amount).toFixed(2))
    })
})


