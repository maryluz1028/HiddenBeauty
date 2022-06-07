
export function OpenModalSearch(btnOpenSearch,modal,btnCloseModal){
    document.addEventListener('click',(e)=>{{
        if(e.target.matches(btnOpenSearch) || e.target.matches(`${btnOpenSearch} *`)){
            document.querySelector(modal).classList.add('active-modal');
        }
        if(e.target.matches(btnCloseModal)|| e.target.matches(`${btnCloseModal} *`)){
            document.querySelector(modal).classList.remove('active-modal');
        }
    }})
}
export function InputPlaceholder(input){
    document.querySelector(input).setAttribute('placeholder','Buscar...');
}

