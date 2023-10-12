//Splash Screen
let splash = document.querySelector(".splash-screen");
let main_ = document.getElementById("main");
let main = document.getElementById("main").children;
/* Return button */
let returnButton = document.getElementById("rtnbtn01");
let create = document.querySelector(".createdb");
let connect = document.querySelector(".connectdb");
let tables = document.querySelector(".tables");
/* Main elements */
let m1 = document.getElementById("m1");
let m2 = document.getElementById("m2");
let m3 = document.getElementById("m3");
let m4 = document.getElementById("m4");
/* information elements */
let info1 = document.getElementById("info1");
let info2 = document.getElementById("info2");


window.addEventListener("load", event =>
{
    setTimeout(() =>
    {
        splash.classList.add("display-none");

        /* Display the elements after splash screen */
        for(let i = 0; i < main.length; i++)
        {
            main[i].style.display = "block";
        }
        m4.style.display = "block";

        setTimeout(() =>
        {
            info1.style.display = "block";
            info2.style.display = "block";
        }, 500);
        
    }, 2000);
})


returnButton.onclick = function(event)
{
    if(returnButton.onclick)
    {
        /* re-display of main elements */
        main_.style.display = "block";

        /* fade-out of createdb containers */
        create.style.animation =  "fadeOut 1s ease-in forwards";
        /* fade-out of connectdb containers */
        connect.style.animation = "fadeOut 1s ease-in forwards"; 
        /* Return button made hidden again */
        returnButton.style.display = "none";

        /* Remove the create/connect elements */
        create.style.dipslay = "none";
        connect.style.display = "none";
    }
}

m1.onclick = function(event)
{
    main_.style.display = "none";
    returnButton.style.display = "block";
    create.style.animation =  "fadeIn 1s ease-in forwards";  
    create.style.display = "block";
    tables.style.display = "block";
}
m2.onclick = function(event)
{
    main_.style.display = "none";
    returnButton.style.display = "block";
    connect.style.animation =  "fadeIn 1s ease-in forwards"; 
    connect.style.display = "block";
}
m3.onclick = function(event)
{
    window.location.href = 'About.php';
}















