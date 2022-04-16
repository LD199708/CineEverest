


document.querySelector("#Calcular").onclick= function () { 
    let nombre = document.querySelector("#nombre").value;
    let edad= document.querySelector("#edad").value;
    let titulatipo = document.querySelector("#titulo").value;
    let guardartipo = "a";
    let dedicacion = 0
    let salarioOrdi = parseInt (document.querySelector("#salario").value);
    let montoCo = parseInt( document.querySelector("#comisiones").value);
    let montoOT = parseInt(document.querySelector("#horasextra").value);
    let salarioneto1 =salarioOrdi+montoCo+montoOT
    
    let impuesto= 0 
    let enfema = salarioneto1*0.055;
    let invama = salarioneto1*0.0384;
    let aporte = salarioneto1*0.01;
    let aso = salarioneto1*0.05;

    if (titulatipo=="tecnico") {
        dedicacion= salarioOrdi * 0
    } else if (titulatipo=="bachiller") {
        dedicacion= salarioOrdi * 0.25
    } else if (titulatipo=="licenciado") {
        dedicacion= salarioOrdi * 0.55
    }


    if (salarioOrdi<=799000) {
        impuesto = 0
    } else if (salarioOrdi>799000 && salarioOrdi < 1199000) {
        impuesto = (salarioOrdi - 799000) * 0.1
    } else if (salarioOrdi>1199000 ) {
        impuesto = (salarioOrdi - 1199000) * 0.15
    }


    let salarioneto2= salarioneto1-impuesto-enfema-invama-aporte-aso



    document.querySelector("#salario2").innerHTML= salarioOrdi;
    console.log(salarioOrdi)
    document.querySelector("#dedicacion").innerHTML=dedicacion;
    document.querySelector("#comisione3").innerHTML=montoCo;
    document.querySelector("#OT").innerHTML=montoOT;
    document.querySelector("#Salaneto").innerHTML=salarioneto1;
    document.querySelector("#impuesto").innerHTML= impuesto;
    document.querySelector("#enfema").innerHTML= enfema;
    document.querySelector("#invama").innerHTML=invama;
    document.querySelector("#aporte").innerHTML= aporte;
    document.querySelector("#aso").innerHTML=aso;
    document.querySelector("#totaldec").innerHTML=impuesto+enfema+invama+aporte+aso;
    document.querySelector("#salaneto").innerHTML=salarioneto2;


    document.querySelector(".contenedor2").style.display= "block"




}