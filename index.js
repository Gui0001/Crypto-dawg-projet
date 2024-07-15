const inputs = document.querySelectorAll('input')
const converts = document.getElementsByClassName('convert')
const span = document.getElementsByTagName('span')
const selects = document.querySelectorAll('select')
const results = document.querySelectorAll('.result')


for (let i=0; i < converts.length; i++) {
    converts[i].addEventListener('click', () => {
        if (selects[i].value.startsWith('eur-to')) {
            let conversion = inputs[i].value / span[i].textContent
            results[i].textContent = conversion 
        } else {
            let conversion = inputs[i].value * span[i].textContent
            results[i].textContent = conversion 
        }
    })
}

