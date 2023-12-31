import ApexCharts from 'apexcharts';
import { setupSparklineChart } from './spark1'
import { setupBarChart } from './spark2'
import { setupAreaChart } from './spark3'
import { setupDonutChart } from './spark4'
import { setupLineChart } from './spark5'

Apex.grid = {
  padding: {
    right: 0,
    left: 0
  }
}

Apex.dataLabels = {
  enabled: false
}

var randomizeArray = function (arg) {
  var array = arg.slice();
  var currentIndex = array.length, temporaryValue, randomIndex;

  while (0 !== currentIndex) {

    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}

// data for the sparklines that appear below header area
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

// the default colorPalette for this dashboard
//var colorPalette = ['#01BFD6', '#5564BE', '#F7A600', '#EDCD24', '#F74F58'];
var colorPalette = ['#00D8B6','#008FFB',  '#FEB019', '#FF4560', '#775DD0']


// var monthlyEarningsOpt = {
//   chart: {
//     type: 'area',
//     height: 260,
//     background: '#eff4f7',
//     sparkline: {
//       enabled: true
//     },
//     offsetY: 20
//   },
//   stroke: {
//     curve: 'straight'
//   },
//   fill: {
//     type: 'solid',
//     opacity: 1,
//   },
//   series: [{
//     data: randomizeArray(sparklineData)
//   }],
//   xaxis: {
//     crosshairs: {
//       width: 1
//     },
//   },
//   yaxis: {
//     min: 0,
//     max: 130
//   },
//   colors: ['#dce6ec'],

//   title: {
//     text: 'Total Earned',
//     offsetX: -30,
//     offsetY: 100,
//     align: 'right',
//     style: {
//       color: '#7c939f',
//       fontSize: '16px',
//       cssClass: 'apexcharts-yaxis-title'
//     }
//   },
//   subtitle: {
//     text: '$135,965',
//     offsetX: -30,
//     offsetY: 100,
//     align: 'right',
//     style: {
//       color: '#7c939f',
//       fontSize: '24px',
//       cssClass: 'apexcharts-yaxis-title'
//     }
//   }
// }

const spark1Config = setupSparklineChart('sparkline1', 'Sales', sparklineData);
new ApexCharts(document.querySelector("#spark1"), spark1Config).render();
const spark2Config = setupSparklineChart('sparkline2', 'Expenses', sparklineData);
new ApexCharts(document.querySelector("#spark2"), spark2Config).render();
const spark3Config = setupSparklineChart('sparkline3', 'Profits', sparklineData);
new ApexCharts(document.querySelector("#spark3"), spark3Config).render();

// var monthlyEarningsChart = new ApexCharts(document.querySelector("#monthly-earnings-chart"), monthlyEarningsOpt);

const dataSeries = [
  {
    name: "Blog",
    data: [
      { x: 0, y: 0 },
      { x: 4, y: 5 },
      { x: 5, y: 3 },
      { x: 9, y: 8 },
      { x: 14, y: 4 },
      { x: 18, y: 5 },
      { x: 25, y: 0 },
    ],
  },
  {
    name: "Social Media",
    data: [
      { x: 0, y: 0 },
      { x: 4, y: 6 },
      { x: 5, y: 4 },
      { x: 14, y: 8 },
      { x: 18, y: 5.5 },
      { x: 21, y: 6 },
      { x: 25, y: 0 },
    ],
  },
  {
    name: "External",
    data: [
      { x: 0, y: 0 },
      { x: 2, y: 5 },
      { x: 5, y: 4 },
      { x: 10, y: 11 },
      { x: 14, y: 4 },
      { x: 18, y: 8 },
      { x: 25, y: 0 },
    ],
  },
];

const optionsArea = setupAreaChart(dataSeries);

const chartArea = new ApexCharts(document.querySelector('#area'), optionsArea);
chartArea.render();

const chartData = [
  {
    name: "Clothing",
    values: [42, 52, 16, 55, 59, 51, 45, 32, 26, 33, 44, 51, 42, 56],
  },
  {
    name: "Food Products",
    values: [6, 12, 4, 7, 5, 3, 6, 4, 3, 3, 5, 6, 7, 4],
  }
];

const chartLabels = [10,11,12,13,14,15,16,17,18,19,20,21,22,23];

const optionsBar = setupBarChart(chartData, chartLabels, colorPalette);
var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
chartBar.render();


const dataSeriesDonut = [21, 23, 19, 14, 6];
const chartLabelsDonut = ['Clothing', 'Food Products', 'Electronics', 'Kitchen Utility', 'Gardening'];

const optionsDonut = setupDonutChart(dataSeriesDonut, chartLabelsDonut);

const donut = new ApexCharts(document.querySelector("#donut"), optionsDonut);
donut.render();



function trigoSeries(cnt, strength) {
  var data = [];
  for (var i = 0; i < cnt; i++) {
      data.push((Math.sin(i / strength) * (i / strength) + i / strength+1) * (strength*2));
  }

  return data;
}



const dataSeriesLine = [
  {
    name: "Day Time",
    data: trigoSeries(52, 20)
  },
  {
    name: "Night Time",
    data: trigoSeries(52, 27)
  },
];

const optionsLine = setupLineChart(dataSeriesLine);

const chartLine = new ApexCharts(document.querySelector('#line'), optionsLine);
chartLine.render();


// a small hack to extend height in website sample dashboard
chartLine.render().then(function () {
  var ifr = document.querySelector("#wrapper");
  if (ifr.contentDocument) {
    ifr.style.height = ifr.contentDocument.body.scrollHeight + 20 + 'px';
  }
});


// on smaller screen, change the legends position for donut
var mobileDonut = function() {
  if($(window).width() < 768) {
    donut.updateOptions({
      plotOptions: {
        pie: {
          offsetY: -15,
        }
      },
      legend: {
        position: 'bottom'
      }
    }, false, false)
  }
  else {
    donut.updateOptions({
      plotOptions: {
        pie: {
          offsetY: 20,
        }
      },
      legend: {
        position: 'left'
      }
    }, false, false)
  }
}

$(window).resize(function() {
  mobileDonut()
});
