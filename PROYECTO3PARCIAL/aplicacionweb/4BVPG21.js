//(funcion)(){
    var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre,
		correo = formulario.correo,
		duda = formulario.duda,
		error = document.getElementById('error');
function validarNombre(e){
    if(nombre.value == '' || nombre == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarCorreo(e){
     if(correo.value == '' || correo == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarDuda(e){
     if(duda.value == '' || duda == null){
        console.log('Ingresa tu consulta');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu duda</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}

function validarDuda(e){
     if(duda.value == '' || duda == null){
        console.log('Ingresa tu consulta');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa tu duda</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}


function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validarNombre(e);
   validarCorreo(e);
   validarDuda(e);
}


formulario.addEventListener('submit', validarForm);

//}())
