export default function PixelGoTop(btn){
        document.addEventListener('scroll',(e)=>{
            const $containerBtn = document.querySelector('.go-top');
            let $scrollTop=window.scrollY;
            if($scrollTop >= 450){
                $containerBtn.classList.add('active');
            }else{
                $containerBtn.classList.remove('active');
            }
        });

        document.addEventListener('click',(e)=>{
            if(e.target.matches(btn) || e.target.matches(`${btn} *`)){
                window.scrollTo({
                    behavior:'smooth',
                    top:0
                })
            }
        })
}