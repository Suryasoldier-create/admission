tColorA=document.getElementById('tColorA');
tColorB=document.getElementById('tColorB');
tColorC=document.getElementById('tColorC');
iconA=document.querySelector('fa-credit-card');
iconB=document.querySelector('fa-building-columns');
iconC=document.querySelector('fa-wallet');
cDetails=document.querySelector('.card-details');
function dofun(){
    tColorA.style.color="greenyellow";
    tColorB.style.color="#444";
    tColorC.style.color="#444";
    iconA.style.color="greenyellow";
    iconB.style.color="#aaa";
    iconC.style.color="#aa";
    cDetails.style.display="block";
}
function dofunA(){
    tColorA.style.color="444";
    tColorB.style.color="greenyellow";
    tColorC.style.color="444";
    iconA.style.color="#aaa";
    iconB.style.color="#greenyellow";
    iconC.style.color="#aaa";
    cDetails.style.display="none";
}
function dofunB(){
    tColorA.style.color="444";
    tColorC.style.color="greenyellow";
    tColorB.style.color="444";
    iconA.style.color="#aaa";
    iconC.style.color="#greenyellow";
    iconB.style.color="#aaa";
    cDetails.style.display="none";
}