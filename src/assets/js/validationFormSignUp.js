
const objectReject = {
    name: /^[a-zA-Z\s]{3,10}$/,  
    firstName: /^[a-zA-Z\s]{3,10}$/,  
    email: /^[a-zA-Z0-9_]{3,10}@gmail\.com$/,  
    phone: /^0[6|7][0-9]{8}$/, //  
    role: /^(student|teacher)$/, // 
    password: /^[0-9a-zA-Z_"'&#.;:,?$*=+°)[{\]}é~¨^%!]{8,100}$/,  
};

let form = document.querySelector('form');
let selectElement = form.querySelector('select');
form.addEventListener('submit', (event) => {
    event.preventDefault();
    let valide = true;
    if (!objectReject.role.test(selectElement.value.trim())) {
        selectElement.classList.add('bg-red-500');  
        valide = false;
    } else {
        selectElement.classList.remove('bg-red-500');  
        selectElement.classList.add('bg-green-500');  
    }
    form.querySelectorAll('input').forEach((input) => {
        let inputName = input.getAttribute('name'); 
        if (objectReject[inputName] && !objectReject[inputName].test(input.value.trim())) {
            input.classList.add('bg-red-500'); 
            input.classList.remove('bg-green-500'); 
            valide = false;
        } else {
            input.classList.remove('bg-red-500'); 
            input.classList.add('bg-green-500'); 
        }
    });

    if (valide) {
        location.reload();
    }
});

