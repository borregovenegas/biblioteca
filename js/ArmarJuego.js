window.onload=function(){
    document.forms[0].reset();
    document.getElementById('1pregunta').focus();
};

function agregarRen(){
    var oJuego=document.getElementById('juego');
    var nFila=document.getElementById('fila').value;
    nFila++;
    //crear lista
    var trJuego=document.createElement('tr');
    trJuego.setAttribute('id','ren'+nFila);

    var tdNum = document.createElement('td');
    var textNum = document.createTextNode(document.getElementById('fila').value);
    tdNum.appendChild(textNum);

    //Pregunta
    var tdPregunta=document.createElement('td');
    var inpPregunta=document.createElement('input');
    inpPregunta.setAttribute('name',nFila+'pregunta');
    inpPregunta.setAttribute('id',nFila+'pregunta');
    tdPregunta.appendChild(inpPregunta);

    //Respuesta
    var tdRespuesta=document.createElement('td');
    var inpRespuesta=document.createElement('input');
    inpPregunta.setAttribute('name',nFila+'respuesta');
    inpPregunta.setAttribute('id',nFila+'respuesta');
    tdRespuesta.appendChild(inpRespuesta);

    //Puntos
    var tdPuntos=document.createElement('td');
    var inpPuntos=document.createElement('input');
    inpPuntos.setAttribute('name',nFila+'puntos');
    inpPuntos.setAttribute('id',nFila+'puntos');
    tdPuntos.appendChild(inpPuntos);

    //Tiempo
    var tdTiempo=document.createElement('td');
    var inpTiempo=document.createElement('input');
    inpTiempo.setAttribute('name',nFila+'tiempo');
    inpTiempo.setAttribute('id',nFila+'puntos');
    tdTiempo.appendChild(inpTiempo);

    trJuego.appendChild(tdNum);
    trJuego.appendChild(tdPregunta);
    trJuego.appendChild(tdRespuesta);
    trJuego.appendChild(tdPuntos);
    trJuego.appendChild(tdTiempo);

    oJuego.appendChild(trJuego);

    document.getElementById('fila').value=nFila;
}

function borrarRen(){
    var oJuego=document.getElementById('ventas');
    var nFila=document.getElementById('fila').value;
    if (nFila>1){
        var trJuego=document.getElementById('ren'+nFila);
        oJuego.removeChild(trJuego);
        nFila--;
        document.getElementById('fila').value=nFila;
    }
}
