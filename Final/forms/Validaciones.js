// Biblioteca de validaciones.
const expresionesRegulares = {
  numeroBoleta: new RegExp(/^([0-9]{10,10}|(PE|PP)[0-9]{8,8})(?!([A-Z]|[0-9]))$/),
  nombre: new RegExp(/^[a-zA-Z????????????????????????????????\u00f1\u00d1\s]{1,40}$/),
  apaterno: new RegExp(/^[a-zA-Z????????????????????????????????\u00f1\u00d1\s]{1,25}$/),
  amaterno: new RegExp(/^[a-zA-Z????????????????????????????????\u00f1\u00d1\s]{1,25}$/),
  curp: new RegExp(
    /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/
  ),
  colonia: new RegExp(/^[a-zA-Z????????????????????????????????\s]{1,40}$/),
  calle: new RegExp(/^[a-zA-Z????????????????????????????????0-9_.+\s]{1,30}$/),
  cel: new RegExp(/^\d{10}$/),
  cp: new RegExp(/^\d{5}$/),
  correo: new RegExp(
    /^[a-zA-Z????????????????????????????????0-9_.+-]+@[a-zA-Z????????????????????????????????0-9-]+\.[a-zA-Z????????????????????????????????0-9-.]+$/
  ),
  escuela: new RegExp(/^[a-zA-Z????????????????????????????????\s]{1,25}$/),
  promedio: new RegExp( /^([0-9]+\.?[0-9]{2})$/),
};

// Validar el n?mero de boleta.
const validarNumeroBoleta = () => {
  // Obtenener el campo asociado a la boleta.
  const campoBoleta = document.getElementById("boleta");

  // Obtener el texto dentro del campo.
  const textoBoleta = campoBoleta.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.numeroBoleta.test(textoBoleta)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "Numero de boleta invalido";
  }
};

// Validar el nombre
const validarNombre = () => {
  // Obtenener el campo asociado a la nombre.
  const nombre = document.getElementById("nombre");

  // Obtener el texto dentro del campo.
  const textoNombre = nombre.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.nombre.test(textoNombre)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El nombre es invalido, solamente se admiten letras";
  }
};

// Validar apellido paterno
const validarApaterno = () => {
  // Obtenener el campo asociado al apellido paterno.
  const apaterno = document.getElementById("apaterno");

  // Obtener el texto dentro del campo.
  const textoApaterno = apaterno.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.apaterno.test(textoApaterno)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El apellido paterno es invalido, solamente se admiten letras";
  }
};
// Validar apellido materno
const validarAmaterno = () => {
  // Obtenener el campo asociado al apellido materno.
  const amaterno = document.getElementById("amaterno");

  // Obtener el texto dentro del campo.
  const textoAmaterno = amaterno.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.amaterno.test(textoAmaterno)) {
    // Si es inv?lido, regresamos el mensaje de error. 
    return "El apellido materno es invalido, solamente se admiten letras";
  }
};

// Validar la fecha de nacimiento
const validarFechaNacimiento = () => {
  // Obtener el campo asociado a la fecha de nacimiento.
  const campoFechaDeNacimiento = document.getElementById("fecha");

  // Obtener el valor del campo.
  const textoFechaDeNacimiento = campoFechaDeNacimiento.value;

  // Convertir a fecha.
  const fechaDeNacimiento = Date.parse(textoFechaDeNacimiento);

  // Realizar
  if (fechaDeNacimiento >= Date.now()) {
    return "La fecha de nacimiento debe ser en el pasado";
  }
};

// Validar CURP
const validarCurp = () => {
  // Obtener el campo asociado al CURP.
  const campoCURP = document.getElementById("curp");

  // Obtener el valor del campo.
  const textoCURP = campoCURP.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.curp.test(textoCURP)) {
    return "El CURP es invalido";
  }
};

// Validar calle y numero
const validarCalle = () => {
  // Obtenener el campo asociado a calle y numero.
  const calle = document.getElementById("calle");

  // Obtener el texto dentro del campo.
  const textoCalle = calle.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.calle.test(textoCalle)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "La calle y numero es invalido, ";
  }
};

// Validar colonia
const validarColonia = () => {
  // Obtenener el campo asociado a colonia.
  const colonia = document.getElementById("colonia");

  // Obtener el texto dentro del campo.
  const textoColonia = colonia.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.colonia.test(textoColonia)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "La colonia es invalida ";
  }
};

// Validar codigo postal
const validarCodigoPostal = () => {
  // Obtenener el campo asociado al codigo postal
  const CP = document.getElementById("CP");

  // Obtener el texto dentro del campo.
  const textoCP = CP.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.cp.test(textoCP)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El codigo postal es invalido,solamente se admiten numeros";
  }
};

// Validar telefono o celular
const validarCelular = () => {
  // Obtenener el campo asociado a telefono o celular.
  const cel = document.getElementById("cel");

  // Obtener el texto dentro del campo.
  const textoCel = cel.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.cel.test(textoCel)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El celular es invalido,solamente se admiten numeros";
  }
};

// Validar correo
const validarCorreo = () => {
  // Obtenener el campo asociado a correo.
  const correo = document.getElementById("correo");

  // Obtener el texto dentro del campo.
  const textoCorreo = correo.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.correo.test(textoCorreo)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El correo electronico es invalido";
  }
};

// Validar escuela
const validarEscuela = () => {
  // Obtenener el campo asociado a escuela.
  const escuela = document.getElementById("escuela");

  // Obtener el texto dentro del campo.
  const textoEscuela = escuela.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (!expresionesRegulares.escuela.test(textoEscuela)) {
    // Si es inv?lido, regresamos el mensaje de error.
   // return "La escuela es inv?lida";
  }
};

// Validar promedio
const validarPromedio = () => {
  // Obtenener el campo asociado a promedio.
  const promedio = document.getElementById("promedio");

  // Obtener el texto dentro del campo.
  const textoPromedio = promedio.value;

  // Realizar la(s) validaci?n(es) pertinente(s).
  if (expresionesRegulares.escuela.test(textoPromedio)) {
    // Si es inv?lido, regresamos el mensaje de error.
    return "El promedio es invalido";
  }
};

// Validaci?n principal.
const validarCampos = (event) => {
  // Validaci?n de cada campo.
  const errorBoleta = validarNumeroBoleta();
  const errorNombre = validarNombre();
  const errorFecha = validarFechaNacimiento();
  const errorCURP = validarCurp();
  const errorApaterno = validarApaterno();
  const errorAmaterno = validarAmaterno();
  const errorCalle = validarCalle();
  const errorColonia = validarColonia();
  const errorCP = validarCodigoPostal();
  const errorCel = validarCelular();
  const errorCorreo = validarCorreo();
  const errorEscuela = validarEscuela();
  const errorPromedio = validarPromedio();

  // Verificamos el estado de la validaci?n.
  if (
    errorBoleta ||
    errorNombre ||
    errorFecha ||
    errorCURP ||
    errorApaterno ||
    errorAmaterno ||
    errorCalle ||
    errorColonia ||
    errorCP ||
    errorCel ||
    errorCorreo ||
    errorEscuela ||
    errorPromedio
  ) {
    // Desactivamos el env?o del formulario.
    event.preventDefault();

    // Texto inicial de alerta.
    let textoAlerta = ".:Formulario Invalido:.";

    // Texto de error por validaci?n.
    if (errorBoleta)
      textoAlerta += `\nError en numero de boleta: ${errorBoleta}`;
    if (errorNombre) textoAlerta += `\nError en nombre: ${errorNombre}`;
    if (errorFecha)
      // textoAlerta += '\nError en fecha de nacimiento: ' + errorFecha;
      textoAlerta += `\nError en fecha de nacimiento: ${errorFecha}`;
    if (errorCURP) textoAlerta += `\nError en CURP: ${errorCURP}`;
    if (errorApaterno)
      textoAlerta += `\nError en apellido paterno: ${errorApaterno}`;
    if (errorAmaterno)
      textoAlerta += `\nError en apellido materno: ${errorAmaterno}`;
    if (errorCalle) textoAlerta += `\nError en calle: ${errorCalle}`;
    if (errorColonia) textoAlerta += `\nError en colonia: ${errorColonia}`;
    if (errorCP) textoAlerta += `\nError en codigo postal: ${errorCP}`;
    if (errorCel) textoAlerta += `\nError en celular: ${errorCel}`;
    if (errorCorreo)
      textoAlerta += `\nError en correo electronico: ${errorCorreo}`;
    if (errorEscuela) textoAlerta += `\nError en escuela: ${errorEscuela}`;
    if (errorPromedio) textoAlerta += `\nError en promedio: ${errorPromedio}`;

    // Mostramos una alerta con el mensaje final de error.
    alert(textoAlerta);

    // Logueamos en la consola el error tambi?n.
    console.log(textoAlerta);
  } else {
    // Logueamos en la consola un mensaje de confirmaci?n.
    console.log("Formulario valido, enviando datos al servidor...");

    // Regresamos verdadero para reactivar el evento.
    return true;
  }
};

// Obtenemos el formulario mediante su ID.
const formulario = document.getElementById("formulario");

// A?adimos el evento de escucha para cuando se "env?e".
formulario.addEventListener("submit", validarCampos);