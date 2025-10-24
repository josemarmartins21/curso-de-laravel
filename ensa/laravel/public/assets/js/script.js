/* const form = document.getElementById('form')

form.addEventListener('submit', function(event){
    event.preventDefault();

    const weight = document.getElementById('weight').value
    const height = document.getElementById('height').value

    const imc = (weight / (height * height)).toFixed(2);
    
    const value = document.getElementById('value')
    let description = ''
    
    document.getElementById('infos').classList.remove('hidden')

    if (imc < 18.5) {
        description = 'Você está a baixo do peso'
        value.classList.add('normal')
    } else if (imc >= 18.5 && imc <= 25) {
        description = 'Você está no peso ideal'
        value.classList.add('attetion')
    } else if (imc > 25 && imc <= 30) {
        description = 'Cuidado você está sobrepeso'
        value.classList.add('attetion')
    } else if (imc > 30 && imc <= 35) {
        description = 'Você está obesidade moderada'
        value.classList.add('attetion')
    } else if (imc > 35 && imc <= 40) {
        description = 'Cuidado você está obesidade severa'
        value.classList.add('attetion')
    } else {
        description = 'Cuidado você está obesidade morbida'
        value.classList.add('attetion')
    }

    value.textContent = imc.replace('.', ',')
    document.getElementById('description').textContent = description
}) */