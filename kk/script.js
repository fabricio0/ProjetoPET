function InserirEvent(){
const lateralInserir = document.querySelectorAll('.Inserir h3');
const lateralDesativado = document.querySelector('.esconder');
console.log(lateralInserir);
lateralInserir.forEach((item) =>{
	item.addEventListener('click',function (event) {
		item.classList.toggle('sobe');
		lateralDesativado.classList.toggle('esconder');
	});
});
}
InserirEvent();

function DeletarEvent(){
const lateralInserir = document.querySelectorAll('.Deletar h3');
const lateralDesativado = document.querySelector('.esconde');
console.log(lateralDesativado);
lateralInserir.forEach((item) =>{
	item.addEventListener('click',function (event) {
		item.classList.toggle('sobe');
		lateralDesativado.classList.toggle('esconde');
	});
});
}
DeletarEvent();