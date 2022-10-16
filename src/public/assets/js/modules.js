const prueba = () => {
    console.log("hola desde prueba");
}

const capitalizarPrimeraLetra = (str) => {
    str = str.toLowerCase();
    return str.charAt(0).toUpperCase() + str.slice(1);
}

export {
    prueba,
    capitalizarPrimeraLetra
}

