window.onload= () => {
    const tabSwichters=document.querySelectorAll("[data-switcher]");
    
    for(let i=0; i<tabSwichters.length; i++){
        const tabSwichter = tabSwichters[i];
        const PageId=tabSwichter.dataset.tab;

        tabSwichter.addEventListener('click', ()=>{
            document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
            tabSwichter.parentNode.classList.add('is-active');

            SwitchPage(PageId);
        })
    }
}

function SwitchPage(PageId){
    const current_page=document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page= document.querySelector(`.pages .page[data-page="${PageId}"] `);
    next_page.classList.add('is-active');
}