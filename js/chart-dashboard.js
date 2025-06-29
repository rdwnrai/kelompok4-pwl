document.addEventListener('DOMContentLoaded', function () {
    const salesData = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
            label: 'Penjualan Bulanan',
            data: [12000000, 15000000, 10000000, 18000000, 22000000, 16000000, 25000000, 20000000, 23000000, 19000000, 21000000, 28000000],
            backgroundColor: 'rgba(0, 123, 255, 0.7)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 1,
            borderRadius: 5
        }]
    };

    const salesConfig = {
        type: 'bar',
        data: salesData,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Total Penjualan (Rp)'
                    },
                    ticks: {
                        callback: function (value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            },
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.dataset.label || '';
                            if (label) label += ': ';
                            if (context.parsed.y !== null) {
                                label += 'Rp ' + context.parsed.y.toLocaleString('id-ID');
                            }
                            return label;
                        }
                    }
                }
            }
        }
    };

    new Chart(document.getElementById('salesChart'), salesConfig);
});
