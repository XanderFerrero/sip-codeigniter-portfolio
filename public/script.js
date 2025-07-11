function classConfig(name, add)
{
    let x = document.querySelectorAll(name);
    x.forEach((y) => {
        y.classList.add(add);
    })
}

classConfig('.card','has-background-success-20')
classConfig('.title, .subtitle',"has-text-dark")
classConfig('.menu-list li','has-text-dark')


const form = document.getElementById("contact-form")

form.onsubmit = (e) => {
    e.preventDefault();
    const name = document.getElementById("contact-name");
    const email = document.getElementById("contact-email");
    const msg = document.getElementById("contact-message");

    if(name.value && email.value && msg.value)
    {
        alert("SUBMITTED")
    }else{
        alert("Please enter all fields")
    }
}

let targetString =".section,.container,.title:not(#hero-title),.card,.message, input, textarea, button, .tag, label,.notification, p:not(#navbar-title), .footer, .block:not(.non-animate-block)"; 

let tan = document.querySelectorAll(targetString);

tan.forEach(child => {
    child.classList.add("animation-scrolldown");
})


window.onscroll = () => {
    tan.forEach(child => {
            if(child.getBoundingClientRect().top < 450){
            child.style.animationPlayState = 'running';
        }
    })
    
}