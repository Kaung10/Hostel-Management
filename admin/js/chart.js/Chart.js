document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById("chart-pie");

    var chartPie = new ApexCharts(ctx, {
        chart: {
            width: 380,
            type: 'donut',
        },
        dataLabels: {
            enabled: false
        },
        plotOptions: {
            pie: {
                customScale: 1,
                expandOnClick: false,
                donut: {
                    size: "70%",
                }
            },
        },
        legend: {
            position: "right",
            verticalAlign: "center",
            containerMargin: {
                left: 35,
                right: 60
            }
        },
        series: seriesData,
        labels: ['all seat Free', '1 seat Free', '2 seat Free', 'full'],
        colors: ['#F6FB7A', '#B4E380', '#88D66C', '#73BBA3'],
        responsive: [
            {
                breakpoint: 1550,
                options: {
                    chart: {
                        width: 340,
                    },
                    legend: {
                        position: "bottom",
                        verticalAlign: "bottom",
                        containerMargin: {
                            left: 'auto',
                            right: 'auto'
                        }
                    },
                }
            },
            {
                breakpoint: 1450,
                options: {
                    chart: {
                        width: 300,
                    },
                }
            }
        ]
    });

    chartPie.render();
});