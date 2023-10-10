
import { randomizeArray } from './randomize'

export function setupSparklineChart(chartId, seriesName, sparklineData) {
    return {
      chart: {
        id: chartId,
        group: 'sparklines',
        type: 'area',
        height: 160,
        sparkline: {
          enabled: true
        },
      },
      stroke: {
        curve: 'straight'
      },
      fill: {
        opacity: 1,
      },
      series: [{
        name: seriesName,
        data: randomizeArray(sparklineData)
      }],
      labels: [...Array(24).keys()].map(n => `2018-09-0${n + 1}`),
      yaxis: {
        min: 0
      },
      xaxis: {
        type: 'datetime',
      },
    //   colors: ['#DCE6EC'],
      colors: ['#008FFB'],
      title: {
        text: `$${Math.floor(Math.random() * 100000)}`,
        offsetX: 30,
        style: {
          fontSize: '24px',
          cssClass: 'apexcharts-yaxis-title'
        }
      },
      subtitle: {
        text: seriesName,
        offsetX: 30,
        style: {
          fontSize: '14px',
          cssClass: 'apexcharts-yaxis-title'
        }
      }
    };
  }
  
//   // Luego, para crear e inicializar el gráfico, puedes llamar a la función y renderizarlo
//   const spark1Config = setupSparklineChart('sparkline1', 'Sales', sparklineData);
//   const spark1Chart = new ApexCharts(document.querySelector("#spark1"), spark1Config);
//   spark1Chart.render();
  
  