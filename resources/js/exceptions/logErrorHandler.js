window.swal = require('sweetalert2');

export default function (error) {
    if (!!error) {
        window.errores = error;
        if (!!errores.response && !!errores.response.data && !!errores.response.data.errors) {
            let keys = Object.keys(errores.response.data.errors);
            let logErrorId = errores.response.data.logErrorId;
            let parrafoLogError = `<p>Log del error: ${logErrorId}</p>`;
            let listaErrores = `${logErrorId ? parrafoLogError : ''}<br><ul style="text-align: left">`;
            let subListaErrores = '';
            keys.forEach(item => {
                listaErrores += `<li><strong style="text-transform: uppercase;">${item.replace(/_/g, ' ')}</strong>`;
                subListaErrores = '';
                errores.response.data.errors[item].forEach((err, k) => {
                    subListaErrores += `<li>${errores.response.data.errors[item][k]}</li>`;
                })
                listaErrores += `<ul>${subListaErrores}</ul></li>`;
            });
            listaErrores += '</ul>';
            swal.fire(errores.response.data.message, listaErrores, 'warning')
        } else if (!!errores.response && !!errores.response.data.logErrorId) {
            swal.fire('Error Interno', `Log del error: ${errores.response.data.logErrorId}`, 'warning')
        } else {
            swal.fire('Error Interno', 'Intente otra vez', 'error')
        }
    }
}
