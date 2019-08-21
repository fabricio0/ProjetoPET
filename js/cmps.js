function InserirEvent(){
  const lateralInserir = document.querySelectorAll('.Inserir h4');
  const lateralDesativado = document.querySelector('.esconder');
  console.log(lateralInserir);
  lateralInserir.forEach((item,index) => {
    item.addEventListener('click',function (event) {
      item.classList.toggle('sobe');
      hanndleEscutas(index);
    });
  });
  }
  InserirEvent();

  function hanndleEscutas(index){
    const lateralInserir = document.querySelectorAll('.Inserir ul');
    lateralInserir[index].classList.toggle('esconder');
  }



function removeModal(){
  const ativamodal = document.querySelector('section.container-modal');
  const button = document.querySelector('section.container-modal button')
  button.addEventListener('click',function(e){
    e.preventDefault();
    ativamodal.classList.remove('ativos');
  });
 console.log(button);
}
function adicionaModal(){
 const ativamodal = document.querySelector('section.container-modal');
 const escultaA = document.querySelectorAll('.sup-nav ul li');
  escultaA[2].addEventListener('click', function(e){
      ativamodal.classList.add('ativos');
  });
}
function cliqueforaModal(){
  const ativamodal = document.querySelector('section.container-modal');
  ativamodal.addEventListener('click',(e)=>{
    if(e.target === ativamodal)
    ativamodal.classList.remove('ativos');
  });
}
adicionaModal();
cliqueforaModal();
removeModal();

function removeModals(){
  const ativamodal = document.querySelector('section.modal-cadastro');
  const button = document.querySelector('section.modal-cadastro button')
  button.addEventListener('click',function(e){
    e.preventDefault();
    ativamodal.classList.remove('ativos');
  });
 console.log(button);
}
function adicionaModals(){
 const ativamodal = document.querySelector('section.modal-cadastro');
 const escultaA = document.querySelectorAll('.sup-nav ul li');
  escultaA[1].addEventListener('click', function(e){
      ativamodal.classList.add('ativos');
  });
}
function cliqueforaModals(){
  const ativamodal = document.querySelector('section.modal-cadastro');
  ativamodal.addEventListener('click',(e)=>{
    if(e.target === ativamodal)
    ativamodal.classList.remove('ativos');
  });
}
adicionaModals();
cliqueforaModals();
removeModals();




