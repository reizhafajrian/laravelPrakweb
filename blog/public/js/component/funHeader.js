const funHeader=()=>{
    let last_known_scroll_position = 0;
    let ticking = false;

    function doSomething(scroll_pos) {
        const header = document.getElementById('header');
        if(scroll_pos==0){
            header.style.position = 'static'
        } else {
            header.style.position = 'fixed'
        }
    }

    window.addEventListener('scroll', function(e) {
    last_known_scroll_position = window.scrollY;

    if (!ticking) {
        window.requestAnimationFrame(function() {
        doSomething(last_known_scroll_position);
        ticking = false;
        });
        ticking = true;
        }
    });
}
export default funHeader;
