$(document).ready(function () {
    (() => {
        $.post("../php/Personal_Info.php", {
                username: sessionStorage.username,
            },
            function (data, status) {
                console.log("数据: \n" + data + "\n状态: " + status);
                if (data[0].brief != null) {
                    $('.introTag2').eq(0).html(data[0].brief);
                } else {
                    $('.introTag2').eq(0).html("这个人很懒，什么都没写");
                }
                $('.introTag2').eq(1).html(data[0].username);
                $('.introTag2').eq(2).html(data[0].id);
                $('.introTag2').eq(3).html(data[0].age);
                $('.introTag2').eq(4).html(data[0].sex == 0 ? '男' : '女');
                $('.introTag2').eq(5).html(data[0].addr);
            });
    })()

    $('.rightTopBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.leftBottomBound').eq(0).click(function () {
        $('.kok-menu').eq(0).css("display", "block");
    })

    $('.kok-menu-close').eq(0).click(function () {
        $('.kok-menu').eq(0).fadeOut();
    })

    //highcharts图表
    Highcharts.chart('container1', {
        chart: {
            type: 'bar'
        },
        title: {
            text: '你的喜欢'
        },
        subtitle: {
            text: '数据服务由SharingArkNet提供'
        },
        xAxis: {
            categories: ['视频', '图片', '文字'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: '没感觉',
            data: [107, 31, 635]
        }, {
            name: '一般',
            data: [133, 156, 947]
        }, {
            name: '喜欢',
            data: [814, 841, 3714]
        }, {
            name: '深爱',
            data: [1216, 1001, 4436]
        }]
    });

    Highcharts.chart('container2', {
        chart: {
            type: 'column'
        },
        title: {
            text: '优秀用户排行'
        },
        subtitle: {
            text: '你当前排行99999'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '2020年度值: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['kok', 24.2],
                ['小胖子', 20.8],
                ['半佛', 14.9],
                ['扎克伯格', 13.7],
                ['Elon Musk', 13.1],
                ['普通人', 9.3]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });

    Highcharts.chart('container3', {
        chart: {
            type: 'column',
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: '每月数据分析'
        },
        subtitle: {
            text: '这里显示了你的年度数据个月份占比'
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: Highcharts.getOptions().lang.shortMonths,
            labels: {
                skew3d: true,
                style: {
                    fontSize: '16px'
                }
            }
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Sales',
            data: [2, 3, null, 4, 0, 5, 1, 4, 6, 3]
        }]
    });

    Highcharts.chart('container4', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: '24小时活跃占比'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['军事区', 45.0],
                ['经济区', 26.8],
                {
                    name: '掉线占比',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['娱乐区', 8.5],
                ['人文区', 6.2]
            ]
        }]
    });
})