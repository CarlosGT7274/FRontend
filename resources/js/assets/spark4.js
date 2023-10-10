var colorPalette = ['#01BFD6', '#5564BE', '#F7A600', '#EDCD24', '#F74F58'];
export function setupDonutChart(dataSeries, chartLabels) {
    return {
      chart: {
        type: 'donut',
        width: '100%',
        height: 400,
      },
      dataLabels: {
        enabled: false,
      },
      plotOptions: {
        pie: {
          customScale: 0.8,
          donut: {
            size: '75%',
          },
          offsetY: 20,
        },
        stroke: {
          colors: undefined,
        },
      },
      colors: colorPalette, // Asegúrate de que colorPalette esté definido antes de llamar a esta función.
      title: {
        text: 'Department Sales',
        style: {
          fontSize: '18px',
        },
      },
      series: dataSeries,
      labels: chartLabels,
      legend: {
        position: 'left',
        offsetY: 80,
      },
    };
  }
