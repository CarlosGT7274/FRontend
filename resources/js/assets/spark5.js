var colorPalette = ['#00D8B6','#008FFB',  '#FEB019', '#FF4560', '#775DD0']

export function setupLineChart(dataSeries) {
    return {
      chart: {
        height: 340,
        type: 'line',
        zoom: {
          enabled: false
        }
      },
      plotOptions: {
        stroke: {
          width: 4,
          curve: 'smooth'
        },
      },
      colors: colorPalette, // Asegúrate de que colorPalette esté definido antes de llamar a esta función.
      series: dataSeries,
      title: {
        floating: false,
        text: 'Customers',
        align: 'left',
        style: {
          fontSize: '18px'
        }
      },
      subtitle: {
        text: '168,215',
        align: 'center',
        margin: 30,
        offsetY: 40,
        style: {
          color: '#222',
          fontSize: '24px',
        }
      },
      markers: {
        size: 0
      },
      grid: {},
      xaxis: {
        labels: {
          show: false
        },
        axisTicks: {
          show: false
        },
        tooltip: {
          enabled: false
        }
      },
      yaxis: {
        tickAmount: 2,
        labels: {
          show: false
        },
        axisBorder: {
          show: false,
        },
        axisTicks: {
          show: false
        },
        min: 0,
      },
      legend: {
        position: 'top',
        horizontalAlign: 'left',
        offsetY: -20,
        offsetX: -30
      }
    };
  }
  
