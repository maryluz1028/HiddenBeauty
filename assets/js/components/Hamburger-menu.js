export default function hamburgerMenu(btnToogle,menu){
    document.addEventListener('click',(e)=>{
        if(e.target.matches(btnToogle) || e.target.matches(`${btnToogle} *`)){
            document.querySelector(menu).classList.toggle('active_menu');
            const $icon=document.querySelector(`${btnToogle} i`);
            if($icon.classList.contains('fa-bars')){
                $icon.classList.replace('fa-bars','fa-times');
            }else{
                $icon.classList.replace('fa-times','fa-bars');
            }
        }
    });
}