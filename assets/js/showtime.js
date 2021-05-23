(function () {
    function checkTime(i) {
        return i < 10 ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            dayName = new Array(
                "Domingo",
                "Segunda",
                "Terça",
                "Quarta",
                "Quinta",
                "Sexta",
                "Sábado"
            ),
            monName = new Array(
                "Janeiro",
                "Fevereiro",
                "Março",
                "Abril",
                "Maio",
                "Junho",
                "Julho",
                "Agosto",
                "Setembro",
                "Outubro",
                "Novembro",
                "Dezembro"
            ),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById("time").innerHTML = dayName[today.getDay()] + ", " + today.getDate() + " de " + monName[today.getMonth()] + " às " + h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime();
        }, 500);
    }
    startTime();
})();