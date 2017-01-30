
window.onload = function() {
    var chart1 = new CanvasJS.Chart("chartContainer1",
            {
                animationEnabled: true,
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center"
                },
                theme: "theme1",
                data: [
                    {
                        type: "pie",
                        indexLabelFontFamily: "Garamond",
                        indexLabelFontSize: 20,
                        indexLabelFontWeight: "bold",
                        startAngle: 0,
                        indexLabelFontColor: "MistyRose",
                        indexLabelLineColor: "darkgrey",
                        indexLabelPlacement: "inside",
                        toolTipContent: "{name}",
                        showInLegend: true,
                        indexLabel: "#percent%",
                        dataPoints: [
                            {y: 52, name: "Sample item 1", legendMarkerType: "triangle"},
                            {y: 44, name: "Sample item 2", legendMarkerType: "square"},
                            {y: 12, name: "Sample item 3", legendMarkerType: "circle"}
                        ]
                    }
                ]
            });
            
    var chart2 = new CanvasJS.Chart("chartContainer2",
            {
                zoomEnabled: false,
                animationEnabled: true,
            
                axisY2: {
                    valueFormatString: "0.00",
                    maximum: 1.2,
                    interval: .2,
                    interlacedColor: "#F5F5F5",
                    gridColor: "#D7D7D7",
                    tickColor: "#D7D7D7"
                },
                theme: "theme2",
                toolTip: {
                    shared: true
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center",
                    fontSize: 15,
                    fontFamily: "Lucida Sans Unicode"

                },
                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        axisYType: "secondary",
                        showInLegend: true,
                        name: "Rep 1",
                        dataPoints: [
                            {x: new Date(2001, 0), y: 0},
                            {x: new Date(2002, 0), y: 0.001},
                            {x: new Date(2003, 0), y: 0.01},
                            {x: new Date(2004, 0), y: 0.05},
                            {x: new Date(2005, 0), y: 0.1},
                            {x: new Date(2006, 0), y: 0.15},
                            {x: new Date(2007, 0), y: 0.22},
                            {x: new Date(2008, 0), y: 0.38},
                            {x: new Date(2009, 0), y: 0.56},
                            {x: new Date(2010, 0), y: 0.77},
                            {x: new Date(2011, 0), y: 0.91},
                            {x: new Date(2012, 0), y: 0.94}


                        ]
                    },
                    {
                        type: "line",
                        lineThickness: 3,
                        showInLegend: true,
                        name: "Rep 2",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.18},
                            {x: new Date(2002, 00), y: 0.2},
                            {x: new Date(2003, 0), y: 0.25},
                            {x: new Date(2004, 0), y: 0.35},
                            {x: new Date(2005, 0), y: 0.42},
                            {x: new Date(2006, 0), y: 0.5},
                            {x: new Date(2007, 0), y: 0.58},
                            {x: new Date(2008, 0), y: 0.67},
                            {x: new Date(2009, 0), y: 0.78},
                            {x: new Date(2010, 0), y: 0.88},
                            {x: new Date(2011, 0), y: 0.98},
                            {x: new Date(2012, 0), y: 1.04}


                        ]
                    },
                    {
                        type: "line",
                        lineThickness: 3,
                        showInLegend: true,
                        name: "Rep 3",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.16},
                            {x: new Date(2002, 0), y: 0.17},
                            {x: new Date(2003, 0), y: 0.18},
                            {x: new Date(2004, 0), y: 0.19},
                            {x: new Date(2005, 0), y: 0.20},
                            {x: new Date(2006, 0), y: 0.23},
                            {x: new Date(2007, 0), y: 0.261},
                            {x: new Date(2008, 0), y: 0.289},
                            {x: new Date(2009, 0), y: 0.3},
                            {x: new Date(2010, 0), y: 0.31},
                            {x: new Date(2011, 0), y: 0.32},
                            {x: new Date(2012, 0), y: 0.33}


                        ]
                    }



                ],
                legend: {
                    cursor: "pointer",
                    itemclick: function(e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        }
                        else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    var chart3 = new CanvasJS.Chart("chartContainer3",
            {
                zoomEnabled: false,
                animationEnabled: true,
            
                axisY2: {
                    valueFormatString: "0.00",
                    maximum: 1.2,
                    interval: .2,
                    interlacedColor: "#F5F5F5",
                    gridColor: "#D7D7D7",
                    tickColor: "#D7D7D7"
                },
                theme: "theme2",
                toolTip: {
                    shared: true
                },
                legend: {
                    verticalAlign: "bottom",
                    horizontalAlign: "center",
                    fontSize: 15,
                    fontFamily: "Lucida Sans Unicode"

                },
                data: [
                    {
                        type: "line",
                        lineThickness: 3,
                        axisYType: "secondary",
                        showInLegend: true,
                        name: "Route 1",
                        dataPoints: [
                            {x: new Date(2001, 0), y: 0},
                            {x: new Date(2002, 0), y: 0.001},
                            {x: new Date(2003, 0), y: 0.01},
                            {x: new Date(2004, 0), y: 0.05},
                            {x: new Date(2005, 0), y: 0.1},
                            {x: new Date(2006, 0), y: 0.15},
                            {x: new Date(2007, 0), y: 0.22},
                            {x: new Date(2008, 0), y: 0.38},
                            {x: new Date(2009, 0), y: 0.56},
                            {x: new Date(2010, 0), y: 0.77},
                            {x: new Date(2011, 0), y: 0.91},
                            {x: new Date(2012, 0), y: 0.94}


                        ]
                    },
                    {
                        type: "line",
                        lineThickness: 3,
                        showInLegend: true,
                        name: "Route 2",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.18},
                            {x: new Date(2002, 00), y: 0.2},
                            {x: new Date(2003, 0), y: 0.25},
                            {x: new Date(2004, 0), y: 0.35},
                            {x: new Date(2005, 0), y: 0.42},
                            {x: new Date(2006, 0), y: 0.5},
                            {x: new Date(2007, 0), y: 0.58},
                            {x: new Date(2008, 0), y: 0.67},
                            {x: new Date(2009, 0), y: 0.78},
                            {x: new Date(2010, 0), y: 0.88},
                            {x: new Date(2011, 0), y: 0.98},
                            {x: new Date(2012, 0), y: 1.04}


                        ]
                    },
                    {
                        type: "line",
                        lineThickness: 3,
                        showInLegend: true,
                        name: "Route 3",
                        axisYType: "secondary",
                        dataPoints: [
                            {x: new Date(2001, 00), y: 0.16},
                            {x: new Date(2002, 0), y: 0.17},
                            {x: new Date(2003, 0), y: 0.18},
                            {x: new Date(2004, 0), y: 0.19},
                            {x: new Date(2005, 0), y: 0.20},
                            {x: new Date(2006, 0), y: 0.23},
                            {x: new Date(2007, 0), y: 0.261},
                            {x: new Date(2008, 0), y: 0.289},
                            {x: new Date(2009, 0), y: 0.3},
                            {x: new Date(2010, 0), y: 0.31},
                            {x: new Date(2011, 0), y: 0.32},
                            {x: new Date(2012, 0), y: 0.33}


                        ]
                    }



                ],
                legend: {
                    cursor: "pointer",
                    itemclick: function(e) {
                        if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        }
                        else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });

    chart1.render();
    chart2.render();
    chart3.render();
     
};

 