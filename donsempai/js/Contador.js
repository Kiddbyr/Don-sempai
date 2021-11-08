simplyCountdown('#cuenta', {
    year: 2022, // Requerido
    month: 6, // Requerido
    day: 28, // Requerido
    hours: 13, // Numero de Horas normal 0 [0-23] 
    minutes: 0, // Numero de Minutos normal 0 [0-59] Minutos 
    seconds: 0, // Numero de Segundos normal 0 [0-59] Segundos 
    words: { //Palabras que saldran en tu contador
        days: { singular: 'Dia', plural: 'Dias' },
        hours: { singular: 'Hora', plural: 'Horas' },
        minutes: { singular: 'Minuto', plural: 'Minutos' },
        seconds: { singular: 'Segundo', plural: 'Segundos' }
    },
    plural: true, //Uso de Plurarl
    inline: false, //Sirve para usar de manera que todo sea en linea
    inlineClass: 'simply-countdown-inline', //en caso de que digas true o false se trabajara como clases de ccs
    // en caso que sea falso seran divs
    enableUtc: true, //usara la zona horarial universal
    onEnd: function() { return; }, //Callback on countdown end, put your own function here
    refresh: 1000, // default refresh every 1s
    sectionClass: 'simply-section', //Nombre de la seccion del div para css
    amountClass: 'simply-amount', // seccion del div para css
    wordClass: 'simply-word', // la seccion del div para las palabras
    zeroPad: false,
    countUp: false
});

let myElement = document.querySelector('.my-countdown');
simplyCountdown(myElement, { /* opciones */ });

let multipleElements = document.querySelectorAll('.my-countdown');
simplyCountdown(multipleElements, { /* opciones */ });