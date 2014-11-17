var components = {
    "packages": [
        {
            "name": "bootstrap",
            "main": "bootstrap-built.js"
        },
        {
            "name": "datatables",
            "main": "datatables-built.js"
        },
        {
            "name": "jquery",
            "main": "jquery-built.js"
        },
        {
            "name": "highcharts",
            "main": "highcharts-built.js"
        }
    ],
    "shim": {
        "bootstrap": {
            "deps": [
                "jquery"
            ]
        }
    },
    "baseUrl": "components"
};
if (typeof require !== "undefined" && require.config) {
    require.config(components);
} else {
    var require = components;
}
if (typeof exports !== "undefined" && typeof module !== "undefined") {
    module.exports = components;
}