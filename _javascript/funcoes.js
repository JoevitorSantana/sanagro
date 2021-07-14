function mudaFoto (foto)
{
    document.getElementById("symbolmap").src = foto;
}
function mudaFoto1 (foto)
{
    document.getElementById("symbolinfo").src = foto;
}
function mudaFoto2 (foto)
{
    document.getElementById("symboluser").src = foto;
}
function mudaFoto3 (foto)
{
    document.getElementById("symbolsafra").src = foto;
}
function mudaFoto4(foto)
{
    document.getElementById("symbolpatrimonio").src = foto;
}
function mudaFoto5 (foto)
{
    document.getElementById("symbolestoque").src = foto;
}
function mudaFoto6 (foto)
{
    document.getElementById("symbolfinanceiro").src = foto;
}
function mudaFoto7 (foto)
{
    document.getElementById("symbolrelatorio").src = foto;
}
function callcadarea(){
    var maps = window.document.getElementById('maps').style.display = 'none'
    var showcad = window.document.getElementById('cadarea').style.visibility = 'visible'
    var arrow = window.document.getElementById('arrow').style.visibility = 'visible'    
}
function backmap() {
    window.location.reload()
}
function popup() {
    varpop = window.open('cadarea.html','popup',
    'width=800, height=500, top=100, left=250, scrollbars=no, menubar=no' )
}
