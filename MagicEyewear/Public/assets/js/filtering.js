$(document).ready(function() {
            filter_data();

            function filter_data() {
                $('.filter_data');
                var action = 'fetch_data';
                var minimum_price = $('#min_price_hide').val();
                var maximum_price = $('#max_price_hide').val();
                var brand = get_filter('brand');
                var color = get_filter('color');
                var gender = get_filter('gender');
                var frametype = get_filter('frametype');
                var frameshape = get_filter('frameshape');
                $.ajax({
                    url: "./Fetch",
                    method: "POST",
                    data: {
                        action: action,
                        minimum_price: minimum_price,
                        maximum_price: maximum_price,
                        gender: gender,
                        frametype: frametype,
                        brand: brand,
                        color: color,
                        frameshape:frameshape
                        
                    },
                    success: function(data) {
                        console.log(data);
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.filter_all').click(function() {
                filter_data();
            });

            $('#price_range').slider({
                range: true,
                min: 0,
                max: 5000,
                values: [0, 5000],
                step: 100,
                stop: function(event, ui) {
                    $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
                    $('#min_price_hide').val(ui.values[0]);
                    $('#max_price_hide').val(ui.values[1]);
                    filter_data();
                }
            });

        });