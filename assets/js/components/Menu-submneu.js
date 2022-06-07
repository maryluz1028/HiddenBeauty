
export default function ActiveSubmenuClick(menuItem){
    document.addEventListener('click',(e)=>{
        if(e.target.matches(menuItem) || e.target.matches(`${menuItem} *`)){
            console.log(e.target);
            const $btnOpenSubMenu=document.querySelectorAll('.navbar-mobile .menu .menu-item a');
            $btnOpenSubMenu.forEach(el => {
                el.classList.remove('activeSubMenu');
            });
            e.target.classList.add('activeSubMenu');
        }
    })
}