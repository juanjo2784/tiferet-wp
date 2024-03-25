//fetch('https://www.hebcal.com/shabbat/?cfg=json&geonameid=281184&m=50&leyning=on&a=off')
fetch('https://www.hebcal.com/shabbat?cfg=json&geonameid=281184&m=50&leyning=on&a=off')
    .then(res => res.json()).then(data => {
        document.getElementById("lugar").innerHTML = data.location.city;
        let Afecha = new Date(data.date)
        let actualOptios = {
            day: 'numeric',
            month: 'long',
            year: 'numeric',
            calendar: 'hebrew',
            timeZone: 'Asia/Jerusalem'
        }
        let actualDate = Afecha.toLocaleString('es-ES', actualOptios);
        dateRight = actualDate.substring(0,actualDate.length-3)
        console.log(data)
        
         document.getElementById("hayom").innerHTML = dateRight;
        for (let i = 0; i < data.items.length; i++) {
            let meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre")

            if (data.items[i].category == "parashat") {
                let item = data.items[i].title
                document.getElementById("contenido").innerHTML = item;
                document.getElementById("parasha").innerHTML = item;
                document.getElementById("parashah").innerHTML = data.items[i].hebrew;
                document.getElementById("haftarah").innerHTML = "Haftarah: " + data.items[i].leyning.haftarah;
                document.getElementById("lparasha").setAttribute("href",data.items[i].link);
            }

            if (data.items[i].category == "candles") {
                let velas = new Date(data.items[i].date);
                let options = {
                    weekday: 'long',
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true,
                };
                let hora = velas.toLocaleString('IL-JM', options)
                document.getElementById("velas").innerHTML = "Encendido de Velas: <b>" + hora + "</b> del " + velas.getDate() + " de " + meses[velas.getMonth()]; //+ " de " + velas.getFullYear()
            }

            if (data.items[i].category == "havdalah") {
                let havdala = new Date(data.items[i].date);
                let hoptions = {
                    weekday: 'long',
                    hour: 'numeric',
                    minute: 'numeric',
                    hour12: true,
                };
                let hhora = havdala.toLocaleString('IL-JM', hoptions)
                document.getElementById("havdalah").innerHTML = "Havdalah (50 min): <b>" + hhora + "</b> del " + havdala.getDate() + " de " + meses[havdala.getMonth()]; //+ " de " + havdala.getFullYear()
                if (!havdala) {
                    console.log('no registra inf. havdala');
                    $("div#havdalah").html('<h5>No registra informacion</h5>');
                }
            }

            if (data.items[i].category == "holiday") {
                let holidayTitle =data.items[i].title;
                let holiday = new Date(data.items[i].date);
                document.getElementById("fiestas").appendChild(document.createElement('h4')).innerHTML= holidayTitle + " - " + holiday.getDate() + "/" + meses[holiday.getMonth()];

            }else if (data.items[i].category == "roshchodesh") {
                let roshchodeshitle =data.items[i].title;
                let roshchodeshDay = new Date(data.items[i].date);
                //document.getElementById("fiestas").appendChild(nline);
                document.getElementById("fiestas").appendChild(document.createElement('h4')).innerHTML= roshchodeshitle + " - "+ roshchodeshDay.getDate() + "/" + meses[roshchodeshDay.getMonth()];

            } 

        }
        if (data.items.length<=3){
            document.getElementById("fiestas").appendChild(document.createElement('h4')).innerHTML= "No Tenemos Fechas importantes esta semana";  
        }
        
    })