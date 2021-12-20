function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            updateChart(this);
        }
    };
    xhttp.open("GET", "chart_infos.xml", true);
    xhttp.send();
}
function updateChart(xml) {
    var i;
    var parser = new DOMParser();
    var xmlDoc = parser.parseFromString(xml.responseText, "application/xml");
    var charts = '<table class="chart-table">';
    var x = xmlDoc.getElementsByTagName("chart");
    for (i = 0; i < x.length; i++) {
        let val = x[i].getElementsByTagName("num")[0].childNodes[0].nodeValue;
        let height = parseInt(x[i].getElementsByTagName("num")[0].childNodes[0].nodeValue) * 0.5;
        if (height < 8) height = 8;
        charts += '<td><div class="chart-back"><div class="chart-front" style="height:' + height + '%;">';
        charts += val;
        charts += '</div></div></td>';
    }
    charts += '</table>';
    document.getElementById("container").innerHTML = charts;
}

function addRandom() {
    var xhr = new XMLHttpRequest();
    xhr.open('OPEN', 'addChart.php', true);
    xhr.send();
}