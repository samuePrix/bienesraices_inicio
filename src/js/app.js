document.addEventListener('DOMContentLoaded',function (){
    

    evenListeners();
    darkMode();
})
function evenListeners(){
     const mobileMenu = document.querySelector('.mobile-menu');
        mobileMenu.addEventListener('click', navegacionResponsive);}

        function navegacionResponsive(){
            const navegacion = document.querySelector('.navegacion');

            if(navegacion.classList.contains('mostrar')){
                navegacion.classList.remove('mostrar');
            }else{
                navegacion.classList.add('mostrar');
            };
            // navegacion.classList.toggle('mostrar')
};

function darkMode(){
    const body = document.body;
    const preferDarkMode = window.matchMedia('(prefers-color-scheme:dark)');
    // console.log(preferDarkMode);

    // window.matchMedia('(prefers-color-scheme)'); prefers-color-scheme: dark or clear

    if(preferDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    };

    preferDarkMode.addEventListener('change',function () {
     if(preferDarkMode.matches) {
        body.classList.add('dark-mode');
     }else{
        body.classList.remove('dark-mode');
     }
    })
    

    const btnDarkMode = document.querySelector('.dark-mode-boton')
    btnDarkMode.addEventListener('click', () => {

        if(body.classList.contains('dark-mode')){
            body.classList.remove('dark-mode');
        }else{
            document.body.classList.add('dark-mode');
        };
        // btnDarkMode.classList.toggle('dark-mode') MANERA SENCILLA DE HACER LO MISMO QUE EL IF-ELSE
    })
}


