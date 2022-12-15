/* Get the buttons */
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const btn3 = document.getElementById("btn3");
const btn4 = document.getElementById("btn4");
const btn5 = document.getElementById("btn5");


/* Get the modals */
const addInfo = document.getElementById("info1");
const updateInfo = document.getElementById("info2");
const createInfo = document.getElementById("info3");
const deleteInfo = document.getElementById("info4");
const deleteTable = document.getElementById("info5");

const edit = document.getElementById("edit");


btn1.onclick = function(event)
{
    if(btn1.onclick)
    {
        edit.style.display = "none";
        addInfo.style.display = "block";
    }
}
btn2.onclick = function(event)
{
    if(btn2.onclick)
    {
        edit.style.display = "none";
        updateInfo.style.display = "block";
    }
}
btn3.onclick = function(event)
{
    if(btn3.onclick)
    {
        edit.style.display = "none";
        createInfo.style.display = "block";
    }
}
btn4.onclick = function(event)
{
    if(btn4.onclick)
    {
        edit.style.display = "none";
        deleteInfo.style.display = "block";
    }
}
btn5.onclick = function(event)
{
    if(btn5.onclick)
    {
        edit.style.display = "none";
        deleteTable.style.display = "block";
    }
}
 /* Close button */
const closeButton1 = document.getElementById("span01");
const closeButton2 = document.getElementById("span02");
const closeButton3 = document.getElementById("span03");
const closeButton4 = document.getElementById("span04");
const closeButton5 = document.getElementById("span05");

closeButton1.onclick = function(event)
{
    if(closeButton1.onclick)
    {
        edit.style.display = "block";
        addInfo.style.display = "none";
    }
}
closeButton2.onclick = function(event)
{
    if(closeButton2.onclick)
    {
        edit.style.display = "block";
        updateInfo.style.display = "none";
    }
}
closeButton3.onclick = function(event)
{
    if(closeButton3.onclick)
    {
        edit.style.display = "block";
        createInfo.style.display = "none";
    }
}
closeButton4.onclick = function(event)
{
    if(closeButton4.onclick)
    {
        edit.style.display = "block";
        deleteInfo.style.display = "none";
    }
}
closeButton5.onclick = function(event)
{
    if(closeButton5.onclick)
    {
        edit.style.display = "block";
        deleteTable.style.display = "none";
    }
}