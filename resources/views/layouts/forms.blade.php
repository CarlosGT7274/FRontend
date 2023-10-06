<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {}
                }
            }
        }
    </script> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <title>Document</title>
</head>
<body>
    
    <div id="main-container">
        @yield('content')
    </div>

 
    {{-- <script>
        // Datos de ejemplo (reemplaza esto con tus datos reales)
        const datos = {
          "error": false,
          "mensaje": "",
          "data": {
            "dates": {
                "2023-10-04": {
				"asistencias": 0,
				"faltas": 3
			},
			"2023-10-03": {
				"asistencias": 1,
				"faltas": 2
			},
			"2023-10-02": {
				"asistencias": 3,
				"faltas": 0
			},
			"2023-10-01": {
				"asistencias": 2,
				"faltas": 1
			},
              // ... otros datos ...
            }
          }
        };
      
        // Extraer las fechas y sus correspondientes asistencias y faltas
        const fechas = Object.keys(datos.data.dates);
        const asistencias = fechas.map(fecha => datos.data.dates[fecha].asistencias);
        const faltas = fechas.map(fecha => datos.data.dates[fecha].faltas);
      
        // Crear un objeto de configuración del gráfico
        const options = {
          chart: {
            type: 'area',
            height: 400,
            width: 600
          },
          xaxis: {
            categories: fechas,
          },
          series: [
            {
              name: 'Asistencias',
              data: asistencias,
            },
            {
              name: 'Faltas',
              data: faltas,
            },
          ],
        };
      
        // Crear el gráfico utilizando ApexCharts
        const chart = new ApexCharts(document.querySelector('#grafico'), options);
        chart.render();
      </script>
      
      <script>
        // Datos de estadísticas generales
        const datosEstadisticas = {
            "total": 12,
            "hombres": {
                "total": 4,
                "con_hijos": 1,
                "edades": {
                    "<25": 2,
                    "25-35": 1,
                    "35-49": 0,
                    "50+": 1
                }
            },
            "mujeres": {
                "total": 8,
                "con_hijos": 5,
                "edades": {
                    "<25": 2,
                    "25-35": 3,
                    "35-49": 2,
                    "50+": 1
                }
            },
            "capacitaciones": 20
        };

        // Extraer datos para el gráfico
        const categorias = ['Hombres', 'Mujeres'];
        const conHijos = [datosEstadisticas.hombres.con_hijos, datosEstadisticas.mujeres.con_hijos];
        const edadesHombres = [
            datosEstadisticas.hombres.edades["<25"],
            datosEstadisticas.hombres.edades["25-35"],
            datosEstadisticas.hombres.edades["35-49"],
            datosEstadisticas.hombres.edades["50+"]
        ];
        const edadesMujeres = [
            datosEstadisticas.mujeres.edades["<25"],
            datosEstadisticas.mujeres.edades["25-35"],
            datosEstadisticas.mujeres.edades["35-49"],
            datosEstadisticas.mujeres.edades["50+"]
        ];

        // Crear un objeto de configuración para el gráfico de barras apiladas
        const optionsEstadisticas = {
            chart: {
                type: 'bar',
                height: 400,
                width: 600,
                stacked: true
            },
            xaxis: {
                categories: categorias,
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                },
            },
            series: [
                {
                    name: 'Con Hijos',
                    data: conHijos,
                },
                {
                    name: '<25',
                    data: edadesHombres,
                },
                {
                    name: '25-35',
                    data: edadesMujeres,
                },
                {
                    name: '35-49',
                    data: [0, 2], // Agrega tus datos si es necesario
                },
                {
                    name: '50+',
                    data: [1, 1], // Agrega tus datos si es necesario
                }
            ],
            legend: {
                position: 'top',
            },
            fill: {
                opacity: 0.85,
            }
        };

        // Crear el gráfico de barras apiladas utilizando ApexCharts
        const chartEstadisticas = new ApexCharts(document.querySelector('#graficoesgenerales'), optionsEstadisticas);
        chartEstadisticas.render();
    </script>


<script>
    // Datos de salarios
    const datosSalarios = {
        "total": 415.59,
        "puestos": [
            {
                "puesto": "Administrador General",
                "unidad": "Food Truck",
                "empleados": 1,
                "salario": 15.36
            },
            {
                "puesto": "Cocinero",
                "unidad": "Restaurante",
                "empleados": 1,
                "salario": 25.36
            },
            {
                "puesto": "Mesero",
                "unidad": "Restaurante",
                "empleados": 1,
                "salario": 18.65
            }
        ]
    };

    // Extraer datos para el gráfico
    const puestos = datosSalarios.puestos.map(item => item.puesto);
    const salarios = datosSalarios.puestos.map(item => item.salario);

    // Crear un objeto de configuración para el gráfico de barras
    const optionsSalarios = {
        chart: {
            type: 'bar',
            height: 400,
            width:600
        },
        xaxis: {
            categories: puestos,
        },
        plotOptions: {
            bar: {
                horizontal: false,
            },
        },
        series: [
            {
                name: 'Salario',
                data: salarios,
            },
        ],
        legend: {
            position: 'top',
        },
    };

    // Crear el gráfico de barras utilizando ApexCharts
    const chartSalarios = new ApexCharts(document.querySelector('#graficosalarios'), optionsSalarios);
    chartSalarios.render();
</script>

<script>
    // Datos de rotaciones
    const datosRotaciones = {
        "total": 5,
        "hombres": 2,
        "mujeres": 3,
        "unidades": [
            {
                "puestos": [
                    {
                        "total": 1,
                        "puesto": "1"
                    }
                ],
                "motivos": [
                    {
                        "total": 1,
                        "motivo": "Nada"
                    }
                ]
            }
        ]
    };

    // Extraer datos para el gráfico
    const generos = ['Hombres', 'Mujeres'];
    const rotacionesPorGenero = [datosRotaciones.hombres, datosRotaciones.mujeres];
    const unidades = datosRotaciones.unidades.map(unidad => unidad.puestos[0].puesto); // Suponiendo que hay solo una unidad

    // Crear un objeto de configuración para el gráfico de barras agrupadas
    const optionsRotaciones = {
        chart: {
            type: 'bar',
            height: 400,
            width: 600
        },
        xaxis: {
            categories: unidades,
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '50%',
            },
        },
        series: [
            {
                name: 'Hombres',
                data: rotacionesPorGenero,
            },
            {
                name: 'Mujeres',
                data: rotacionesPorGenero,
            },
        ],
        legend: {
            position: 'top',
        },
    };

    // Crear el gráfico de barras agrupadas utilizando ApexCharts
    const chartRotaciones = new ApexCharts(document.querySelector('#graficorotaciones'), optionsRotaciones);
    chartRotaciones.render();
</script> --}}
      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    {{-- <script src="{{ asset('js/assets/data.js') }}"></script>
    <script src="{{ asset('js/assets/scripts.js') }}"></script>
    <script src="{{ asset('js/dist/apexcharts.js') }}"></script> --}}
    
    @vite('resources/js/app.js')
</body>
</html>