! function(s) {
    "use strict";
    var a = function() {
        this.$body = s("body"), this.$realData = []
    };
    a.prototype.createPlotGraph = function(a, t, o, e, r, i, l) {
        s.plot(s(a), [{
            data: t,
            label: e[0],
            color: r[0]
        }, {
            data: o,
            label: e[1],
            color: r[1]
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: !0,
                    lineWidth: 1,
                    fillColor: {
                        colors: [{
                            opacity: .5
                        }, {
                            opacity: .5
                        }]
                    }
                },
                points: {
                    show: !0
                },
                shadowSize: 0
            },
            legend: {
                position: "nw",
                backgroundColor: "transparent"
            },
            grid: {
                hoverable: !0,
                clickable: !0,
                borderColor: i,
                borderWidth: 1,
                labelMargin: 10,
                backgroundColor: l
            },
            yaxis: {
                min: 0,
                max: 15,
                tickColor: "rgba(108, 120, 151, 0.1)",
                font: {
                    color: "#5d727c"
                }
            },
            xaxis: {
                tickColor: "rgba(108, 120, 151, 0.1)",
                font: {
                    color: "#5d727c"
                }
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%s: Value of %x is %y",
                shifts: {
                    x: -60,
                    y: 25
                },
                defaultTheme: !1
            }
        })
    }, a.prototype.randomData = function() {
        for (0 < this.$realData.length && (this.$realData = this.$realData.slice(1)); this.$realData.length < 300;) {
            var a = (0 < this.$realData.length ? this.$realData[this.$realData.length - 1] : 50) + 10 * Math.random() - 5;
            a < 0 ? a = 0 : 100 < a && (a = 100), this.$realData.push(a)
        }
        for (var t = [], o = 0; o < this.$realData.length; ++o) t.push([o, this.$realData[o]]);
        return t
    }, a.prototype.createRealTimeGraph = function(a, t, o) {
        return s.plot(a, [t], {
            colors: o,
            series: {
                lines: {
                    show: !0,
                    fill: !0,
                    lineWidth: 1,
                    fillColor: {
                        colors: [{
                            opacity: .45
                        }, {
                            opacity: .45
                        }]
                    }
                },
                points: {
                    show: !1
                },
                shadowSize: 0
            },
            grid: {
                borderColor: "rgba(108, 120, 151, 0.1)",
                borderWidth: 1,
                labelMargin: 15,
                backgroundColor: "transparent"
            },
            yaxis: {
                min: 0,
                max: 100,
                tickColor: "rgba(108, 120, 151, 0.1)",
                font: {
                    color: "#5d727c"
                }
            },
            xaxis: {
                show: !1
            }
        })
    }, a.prototype.init = function() {
        
        var t = this.createRealTimeGraph("#flotRealTime", this.randomData(), ["#d9d200"]);
        t.draw();
        var o = this;
        ! function a() {
            t.setData([o.randomData()]), t.draw(), setTimeout(a, 500)
        }();

        var j = this.createRealTimeGraph("#flotRealTime2", this.randomData(), ["#989faa"]);
        j.draw();
        var o = this;
        ! function a() {
            j.setData([o.randomData()]), j.draw(), setTimeout(a, 500)
        }();

    }, s.FlotChart = new a, s.FlotChart.Constructor = a
}(window.jQuery),
function(a) {
    "use strict";
    window.jQuery.FlotChart.init()
}();