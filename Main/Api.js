//Splash Screen
const splash = document.querySelector(".splash-screen");

window.addEventListener("load", event =>
{
    setTimeout(() =>
    {
        splash.classList.add("display-none");
    }, 2000);
})

//Info Hider

const hider = document.getElementById("id-hid");
const show = document.getElementById("id-show");
const information = document.getElementById("info1");
const dbinfo = document.getElementById("info2");

hider.onclick = function(event)
{
    if(hider.onclick)
    {
        information.style.display = "none";
        dbinfo.style.display = "none";
    }
}
show.onclick = function(event)
{
    if(hider.onclick)
    {
        information.style.display = "block";
        dbinfo.style.display = "block";
    }
}



/* Return button */
const returnButton = document.getElementById("rtnbtn01");
const create = document.querySelector(".createdb");
const connect = document.querySelector(".connectdb");

returnButton.onclick = function(event)
{
    if(returnButton.onclick)
    {
        /* re-display of main elements */
        m1.style.display = "block";
        m2.style.display = "block";
        m3.style.display = "block";
        m4.style.display = "block";  
        /* fade-in animation */
        m1.style.animation = "fadeIn 1s ease-in forwards";
        m2.style.animation = "fadeIn 1s ease-in forwards";
        m3.style.animation = "fadeIn 1s ease-in forwards";
        m4.style.animation = "fadeIn 1s ease-in forwards";
        /* fade-out of createdb containers */
        create.style.animation =  "fadeOut 1s ease-in forwards";
        /* fade-out of connectdb containers */
        connect.style.animation = "fadeOut 1s ease-in forwards"; 
        /* Return button made hidden again */
        returnButton.style.display = "none";

        /* Reset all containers to their default values */
        connect.style.left = "1000px";
        create.style.left = "300px";
    }
}

/* Main elements Hider */
const m1 = document.getElementById("m1");
const m2 = document.getElementById("m2");
const m3 = document.getElementById("m3");
const m4 = document.getElementById("m4");


m1.onclick = function(event)
{
    if(m1.onclick)
    {   
        
        m1.style.display = "none";
        m2.style.display = "none";
        m3.style.display = "none";
        m4.style.display = "none";
        
        create.style.left = "655px";
        create.style.animation =  "fadeIn 1s ease-in forwards";  
        returnButton.style.display = "block"; 
    }
}

m2.onclick = function(event)
{
    if(m2.onclick)
    {
        m1.style.display = "none";
        m2.style.display = "none";
        m3.style.display = "none";
        m4.style.display = "none";
        
        connect.style.left = "650px";
        returnButton.style.display = "block";
        connect.style.animation = "fadeIn 1s ease-in forwards";
    }
}

/* About */
m3.onclick = function(event)
{
    if(m3.onclick)
    {
        window.location.href = 'About.php';
    }
}















