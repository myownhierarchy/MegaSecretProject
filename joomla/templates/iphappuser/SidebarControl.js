/**
 * Created by ThorbenHartmann on 18.04.17.
 */
window.addEventListener("load", function(){
    var button = document.getElementById("sidebar-left-button");
    var sidebar = document.getElementById("sidebar-left");
    var close = document.getElementById("close");
    function displayButton() {
        button.setAttribute("style","display: block; position: absolute;");
        sidebar.setAttribute("style","display: none;");
        close.setAttribute("style","display: none;");
    }
    function displaySidebar(){
        sidebar.setAttribute("style","display: block; position: absolute;");
        button.setAttribute("style","display: none;");
        close.setAttribute("style","display: block;");
    }
    function defaultView() {
        if(window.innerWidth > 767) {
            sidebar.setAttribute("style", "");
            button.setAttribute("style", "");
            close.setAttribute("style","");
            button.removeEventListener("click", displaySidebar);
            close.removeEventListener("click", displayButton);

        } else {
            button.addEventListener("click", displaySidebar);
            close.addEventListener("click", displayButton);
        }
    }
    defaultView();
    window.addEventListener("resize", defaultView);

});

