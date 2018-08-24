function f(tb)
		{
        
			document.getElementById(tb).style.border="2px solid black";
		}
		function f1(tb)
		{
        
			document.getElementById(tb).style.border="none";
		}

		function changeTab(c)
    {
         var arr = document.getElementsByClassName('course');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.display = "none";
         }
       
        document.getElementById(c).style.display = "inline-block";
    }
function call(a)
{
    document.getElementById(a).style.display = "inline-block";
}
function about(p)
{
document.getElementById(p).style.display = "inline-block";
}
function aboutp(p1)
{document.getElementById('index6').style.display = "none";
document.getElementById(p1).style.display = "inline-block";
}

function about1(s)
{
 document.getElementById(s).style.display = "inline-block";

}
function ime(i)
{
        
document.getElementById(i).style.display = "inline-block";

}
function iml(il)
{
    document.getElementById(il).style.display = "none";

}
function lgn1()
{
        document.getElementById('fm2').style.display = "none";
        document.getElementById('fm1').style.display = "inline-block";
           document.getElementById('eight').style.backgroundColor = "#ffe6f2";
           document.getElementById('seven').style.backgroundColor = "#ff668c";
              document.getElementById('fm1').style.backgroundColor = "#ff668c";
}
function lgn2()
{
        document.getElementById('fm1').style.display = "none";
        document.getElementById('fm2').style.display = "inline-block";
           document.getElementById('seven').style.backgroundColor = "#ffe6f2";
           document.getElementById('eight').style.backgroundColor = "#ff668c";
              document.getElementById('fm2').style.backgroundColor = "#ff668c";
}
function adminTab(ad)
    {
         var arr = document.getElementsByClassName('admn');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.display = "none";
         }
       
        document.getElementById(ad).style.display = "inline-block";
        

    }
    function adl(l)
    {
        document.getElementById(l).style.display = "none";
    }
function stdTab(st)
    {
         var arr = document.getElementsByClassName('stdln');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.display = "none";
         }
       
        document.getElementById(st).style.display = "inline-block";
    }
    function stdl(sl)
    {
        document.getElementById(sl).style.display = "none";
    }
function stdTab1(st1)
    {
         var arr = document.getElementsByClassName('studform');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.display = "none";
         }
       
        document.getElementById(st1).style.display = "inline-block";
    }
    function stdl1()
    {
        document.getElementById('qy').style.display = "none";
        document.getElementById('fd').style.display = "none";
        document.getElementById('s1').style.display = "none";
        document.getElementById('s2').style.display = "none";
    }
    function adminTab1(cl)
    {   var arr = document.getElementsByClassName('std');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.backgroundColor = "#ff1a8c";
         }
       
        document.getElementById(cl).style.backgroundColor = "#ff668c";
    }
    function stdTab2(sl)
    {   var arr = document.getElementsByClassName('std');
        for(i=0; i<arr.length; i++)
        {
            arr[i].style.backgroundColor = "#ff3399";
         }
       
        document.getElementById(sl).style.backgroundColor = "#ff668c";
    }