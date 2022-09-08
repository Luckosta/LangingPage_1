const elems = document.querySelectorAll('input[type="checkbox"]');
const elems_cnt = document.querySelectorAll('.products input[type="text"]');
const res = document.querySelector('.result');
const btn = document.querySelector('.btn');
const field = document.querySelector('.container');
const user = document.querySelectorAll('.user__data input')

field.addEventListener('click', function() {
    let sum = 0;
    for (let i = 0; i < elems.length; i++) if (elems[i].checked) sum += elems_cnt[i].value * elems_cnt[i].dataset.price;
    res.innerHTML = `Total: ${sum} $.`;
})

for (let elem of elems) {
    elem.addEventListener('click', function() {
        if (elem.checked) elem.parentNode.lastElementChild.value = 1;
        else elem.parentNode.lastElementChild.value = 0;
    })
}

btn.addEventListener('click', function() {
    alert(`Customer: ${user[0].value} ${user[1].value}\n${res.innerHTML}`);
})
