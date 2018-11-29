function graphData(){
    // alert('asd');
    var url = "http://ippcoin.com/site/socket";
    $.getJSON(url, function (data) {
        alert('asd');
        var value = [];
        var bid = [];
        var datetime = [];

        $.each(data, function(key, value){
            bid = value['bid'];
            datetime = value['datetime'];
            datetime = convertDate(datetime);
            value = bid + "," + datetime;
        });
        createGraph(value);
    });
}

function convertDate(date){
    var momentjs = moment(date);
    var d = new Date(momentjs.format('YYYY-MM-DD HH:mm:ss'));

    return d;
}

function createGraph(data){
    Highcharts.stockChart('container', {
        rangeSelector: {
            selected: 1
        },
        title: {
            text: 'AAPL Stock Price'
        },
        series: [{
            type: 'candlestick',
            name: 'AAPL Stock Price',
            data: data,
            dataGrouping: {
                units: [
                    [
                        'week', // unit name
                        [1] // allowed multiples
                    ], [
                        'month',
                        [1, 2, 3, 4, 6]
                    ]
                ]
            }
        }]
    });
}

(function($) {
    $(function () {
        graphData();
  });
})(jQuery);