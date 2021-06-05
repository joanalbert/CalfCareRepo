var coleccioPeriodes = document.getElementsByClassName('periode');
var coleccioPrimeraDosi = document.getElementsByClassName('primeraDosi');
var divisor = 30.417;

///CONVERTIR DIES PERIODES DE VACUNA A MESOS
for(let i = 0; i < coleccioPeriodes.length; i++){
    let dies = coleccioPeriodes[i].innerHTML;
    let mesos = dies / divisor;
    
    if(mesos >= 1) (dies == 1) ? coleccioPeriodes[i].innerHTML = `${Math.round(mesos)} Mes` : coleccioPeriodes[i].innerHTML = `${Math.round(mesos)} Mesos`;    
    else coleccioPeriodes[i].innerHTML = `${coleccioPeriodes[i].innerHTML} Dies`; 
}

//CONVERTIR DIES EDAT PRIMERA DOSI A MESOS
for(let i = 0; i < coleccioPrimeraDosi.length; i++){
    let dies = coleccioPrimeraDosi[i].innerHTML;
    let mesos = dies / divisor;
    
    if(mesos >= 1) (dies == 1) ? coleccioPrimeraDosi[i].innerHTML = `${Math.round(mesos)} Mes` : coleccioPrimeraDosi[i].innerHTML = `${Math.round(mesos)} Mesos`;    
    else coleccioPrimeraDosi[i].innerHTML = `${coleccioPrimeraDosi[i].innerHTML} Dies`; 
}