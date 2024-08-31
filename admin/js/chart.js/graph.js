document.addEventListener('DOMContentLoaded', function () {
    var chartsBar = document.querySelectorAll(".chart-bar");


    chartsBar.forEach(function(chart) {
        if (!chart.getAttribute('data-chart-initialized')) {
            new Chart(chart, {
                type: "bar",
                data: {
                    labels: ["Semester", "Semester", "Semester", "Semester", "Semester", "Semester"],
                    datasets: [
                        {
                            label: "Semester",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            backgroundColor: "#52be80",
                            data: [25, 20, 30, 22, 50, 100],
                            maxBarThickness: 20,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        enabled: true,
                        mode: "index",
                        intersect: false,
                    },
                    scales: {
                        yAxes: [
                            {
                                gridLines: {
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    drawTicks: false,
                                    drawBorder: false,
                                    lineWidth: 1,
                                    zeroLineWidth: 0,
                                    zeroLineBorderDash: [0],
                                    zeroLineBorderDashOffset: [2],
                                },
                                ticks: {
                                    beginAtZero: true,
                                    padding: 10,
                                    fontSize: 13,
                                    lineHeight: 5,
                                    fontColor: "#8898aa",
                                    fontFamily: "Open Sans",
                                },
                            },
                        ],
                        xAxes: [
                            {
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                },
                                ticks: {
                                    padding: 20,
                                    fontSize: 13,
                                    fontColor: "#8898aa",
                                    fontFamily: "Open Sans",
                                },
                            },
                        ],
                    },
                },
            });
            chart.setAttribute("data-chart-initialized", "true");
        }
    });
});
