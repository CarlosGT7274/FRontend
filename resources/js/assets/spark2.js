export function setupBarChart(chartData, chartLabels, colorPalette) {
    return {
      chart: {
        type: 'bar',
        height: 380,
        width: '100%',
        stacked: true,
      },
      plotOptions: {
        bar: {
          columnWidth: '45%',
        }
      },
      colors: colorPalette,
      series: chartData.map(data => ({ name: data.name, data: data.values })),
      labels: chartLabels,
      xaxis: {
        labels: {
          show: false
        },
        axisBorder: {
          show: false
        },
        axisTicks: {
          show: false
        },
      },
      yaxis: {
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
      title: {
        text: 'Monthly Sales',
        align: 'left',
        style: {
          fontSize: '18px'
        }
      }
    };
  }
  
  