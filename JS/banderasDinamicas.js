const selector = document.querySelector(".selected-lang");
const selectorul = document.querySelector('.ul')
const selectorli = selectorul.getElementsByTagName('li')

selector.style.backgroundImage = "url('https://flagsapi.com/ES/flat/32.png')"

for(var i=0; i<=selectorli.length; i++){
selectorli.addEventListener("click", function () {
    if (selectorli.style.backgroundImage === "url('https://flagsapi.com/US/flat/32.png')") {
        selector.style.backgroundImage = "url('https://flagsapi.com/US/flat/32.png')"

} else if  
       (selectorli.style.backgroundImage === "url('https://flagsapi.com/FR/flat/32.png')") {
        selector.style.backgroundImage = "url('https://flagsapi.com/FR/flat/32.png')"
}  

})
};