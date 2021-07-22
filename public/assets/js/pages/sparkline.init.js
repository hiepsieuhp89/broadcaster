!(function (e) {
    "use strict";
    var i = function () {};
    (i.prototype.init = function () {
        if (e.isFunction(e.fn.sparkline)) {
            var i = [10, 8, 5, 7, 4, 4, 7, 5, 2, 8, 3, 4, 5];
            e(".inlinesparkline").sparkline(i, {
                type: "line",
                width: "100%",
                height: "32",
                lineWidth: 2,
                lineColor: "rgba(26,41,66,0.7)",
                fillColor: "rgba(59,192,195,0.5)",
                highlightSpotColor: "#3bc0c3",
                highlightLineColor: "#1a2942",
                spotRadius: 3,
            }),
                e(".dynamicbar").sparkline(i, {
                    type: "bar",
                    barColor: "#3bc0c3",
                    height: "32",
                    barWidth: 5,
                    barSpacing: 2,
                }),
                e(".dynamicbar-big").sparkline(
                    [
                        8, 4, 1, 2, 6, 7, 1, 6, 2, 4, 3, 5, 6, 0, 3, 0, 4, 6, 5,
                        7, 6, 9, 0,
                    ],
                    {
                        type: "bar",
                        barColor: "#3bc0c3",
                        height: "32",
                        barWidth: 7,
                        barSpacing: 2,
                    }
                ),
                e(".compositeline").sparkline(
                    [
                        8, 4, 1, 2, 6, 7, 1, 6, 2, 4, 3, 5, 6, 0, 3, 0, 4, 6, 5,
                        7, 6,
                    ],
                    {
                        fillColor: !1,
                        changeRangeMin: 0,
                        chartRangeMax: 10,
                        type: "line",
                        width: "100%",
                        height: "32",
                        lineWidth: 2,
                        lineColor: "#1a2942",
                        highlightSpotColor: "#3bc0c3",
                        highlightLineColor: "#f13c6e",
                        spotRadius: 4,
                    }
                ),
                e(".sparkpie").sparkline([3, 4, 1, 2], {
                    type: "pie",
                    width: "100%",
                    height: "32",
                    sliceColors: ["#1a2942", "#f13c6e", "#3bc0c3", "#dcdcdc"],
                    offset: 0,
                    borderWidth: 0,
                    borderColor: "#00007f",
                }),
                e(".sparkpie-big").sparkline([3, 4, 1, 2], {
                    type: "pie",
                    width: "100%",
                    height: "50",
                    sliceColors: ["#1a2942", "#f13c6e", "#3bc0c3", "#dcdcdc"],
                    offset: 0,
                    borderWidth: 0,
                    borderColor: "#00007f",
                });
        }
    }),
        (e.Sparkline = new i()),
        (e.Sparkline.Constructor = i);
})(window.jQuery),
    (function (i) {
        "use strict";
        window.jQuery.Sparkline.init();
    })();
