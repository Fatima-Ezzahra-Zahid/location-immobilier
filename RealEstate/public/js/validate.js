
function change()
{
    var stuts=document.getElementById('statut');
    if(stuts.value=="4" || stuts.value=="5" || stuts.value=="6" )
    {
        document.getElementById('number of room').style.display="none";
        document.getElementById("number_r").removeAttribute("required");
    }
    else
    {
        document.getElementById('number of room').style.display="block";
        document.getElementById("number_r").setAttribute("required","true");
    }

    if(stuts.value=="2")
    {
        document.getElementById("Floor number").removeAttribute("hidden");
    }
    else
    {
        document.getElementById("Floor number").setAttribute("hidden","true");
        document.getElementById("floor_n").removeAttribute("required")
    }
}