var colorPalette = ['#00D8B6','#008FFB',  '#FEB019', '#FF4560', '#775DD0']

export function setupAreaChart(dataSeries) {
    return {
      chart: {
        height: 340,
        type: 'area',
        zoom: {
          enabled: false
        },
      },
      stroke: {
        curve: 'straight'
      },
      colors: colorPalette, // Asegúrate de que colorPalette esté definido antes de llamar a esta función.
      series: dataSeries,
      fill: {
        opacity: 1,
      },
      title: {
        text: 'Daily Visits Insights',
        align: 'left',
        style: {
          fontSize: '18px'
        }
      },
      markers: {
        size: 0,
        style: 'hollow',
        hover: {
          opacity: 5,
        }
      },
      tooltip: {
        intersect: true,
        shared: false,
      },
      xaxis: {
        tooltip: {
          enabled: false
        },
        labels: {
          show: false
        },
        axisTicks: {
          show: false
        }
      },
      yaxis: {
        tickAmount: 4,
        max: 12,
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
        labels: {
          style: {
            colors: '#78909c'
          }
        }
      },
      legend: {
        show: false
      }
    };
  }
  

 
  