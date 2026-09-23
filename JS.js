

function Password()
{
    var p=document.getElementById("pass").value;
    var c_p=document.getElementById("cpass").value;

    if(p!=c_p)
        {
            alert("Password And Confirm Password Are Must Be Same ");
                                
        }

}

function nmck()
{
    var fname = document.getElementById("fname").value;

    if(fname.lenght>=20)
    {
        alert("Name is to long......");
        return false;s
    }else if(fname.lengt<=2)
    {
        console.log("Name is to short.......");
    }
}