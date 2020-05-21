
const APP = {
    container : document.querySelector('.container'),
    ciemny : document.querySelector('.ciemny'),
    jasny : document.querySelector('.jasny'),
    base : document.querySelector('.base'),
    th : document.getElementsByTagName('th'),
    tr : document.getElementsByTagName('tr'),
    td : document.getElementsByTagName('td'),
    table : document.getElementsByTagName('table'),
    div: document.getElementsByTagName('div'),
    link : document.querySelectorAll(".link"),
    item : document.querySelectorAll(".item"),
    logo : document.querySelector(".logo"),

    /*cmotyw : function(){
        this.container.style.background="gray";
        for(var i=0; i<this.th.length; i++){
        this.th[i].style.background="black";
        this.th[i].style.color="white";
        this.th[i].style.border="2px solid black";
        };
        for(var i=0; i<this.tr.length; i++){
            this.tr[i].style.background="grey";
            this.tr[i].style.color="white";
            this.tr[i].style.border="2px solid black";
        }
        for(var i=0; i<this.td.length; i++){
            this.td[i].style.background="grey";
            this.td[i].style.color="white";
            this.td[i].style.border="2px solid black";
        }
        for(var i=1; i<this.div.length; i++){
            this.div[i].style.border="2px solid black";
        };
        

    }, */

    cmotyw : function(){
        this.container.classList.remove("jasne");
        this.container.classList.add("ciemne");
        for(var i=0; i<this.item.length; i++){
            this.item[i].classList.remove("jasnyborder");
            this.item[i].classList.add("ciemnyborder");
        };
        for(var i=0; i<this.th.length; i++){
            this.th[i].classList.remove("jth");
            this.th[i].classList.add("cth");
        };
        for(var i=0; i<this.tr.length; i++){
            this.tr[i].classList.remove("jtr");
            this.tr[i].classList.add("ctr");
        };
        for(var i=0; i<this.td.length; i++){
            this.td[i].classList.remove("jtd");
            this.td[i].classList.add("ctd");
        };
        for(var i=0; i<this.link.length; i++){
            this.link[i].classList.remove("jlink");
            this.link[i].classList.add("clink");
        };
    },

    jmotyw : function(){
        this.container.classList.remove("ciemne");
        this.container.classList.add("jasne");
        for(var i=0; i<this.item.length; i++){
            this.item[i].classList.remove("ciemnyborder");
            this.item[i].classList.add("jasnyborder");
        };
        for(var i=0; i<this.th.length; i++){
            this.th[i].classList.remove("cth");
            this.th[i].classList.add("jth");
        };
        for(var i=0; i<this.tr.length; i++){
            this.tr[i].classList.remove("ctr");
            this.tr[i].classList.add("jtr");
        };
        for(var i=0; i<this.td.length; i++){
            this.td[i].classList.remove("ctd");
            this.td[i].classList.add("jtd");
        };
        for(var i=0; i<this.link.length; i++){
            this.link[i].classList.remove("clink");
            this.link[i].classList.add("jlink");
        };
    }, 

    bmotyw : function(){
        this.container.classList.remove("ciemne");
        this.container.classList.remove("jasne");
        for(var i=0; i<this.item.length; i++){
            this.item[i].classList.remove("ciemnyborder");
            this.item[i].classList.remove("jasnyborder");
        };
        for(var i=0; i<this.th.length; i++){
            this.th[i].classList.remove("cth");
            this.th[i].classList.remove("jth");
        };
        for(var i=0; i<this.tr.length; i++){
            this.tr[i].classList.remove("ctr");
            this.tr[i].classList.remove("jtr");
        };
        for(var i=0; i<this.td.length; i++){
            this.td[i].classList.remove("ctd");
            this.td[i].classList.remove("jtd");
        };
        for(var i=0; i<this.link.length; i++){
            this.link[i].classList.remove("clink");
            this.link[i].classList.remove("jlink");
        };
    }, 

    
    startlogo :function(){
        this.logo.style.cursor="pointer";

        this.logo.style.transform = "translateY(3px) rotate(20deg)";
    },

    stoplogo :function(){
        this.logo.style.cursor="default";

        this.logo.style.transform = "";
    },

    init:function(){
        this.ciemny.addEventListener('click', this.cmotyw.bind(this));
        this.jasny.addEventListener('click',this.jmotyw.bind(this)); 
        this.base.addEventListener('click',this.bmotyw.bind(this)); 
        this.logo.addEventListener('mouseenter',this.startlogo.bind(this));
        this.logo.addEventListener('mouseleave',this.stoplogo.bind(this));
    }

}

APP.init();

