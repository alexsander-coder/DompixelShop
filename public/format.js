// document.addEventListener("DOMContentLoaded", function () {
//   const priceInput = document.getElementById("price");

//   priceInput.addEventListener("input", function (event) {
//     // Obtenha o valor do campo de entrada
//     const inputValue = event.target.value;

//     // Remova caracteres não numéricos e converta para um número
//     const numericValue = parseFloat(inputValue.replace(/[^\d.,]/g, '').replace(',', '.'));

//     // Verifique se é um número válido
//     if (!isNaN(numericValue)) {
//       // Formate o número como moeda em formato BRL
//       const formattedValue = numericValue.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });

//       // Atualize o valor do campo de entrada com a formatação
//       event.target.value = formattedValue;
//     }
//   });
// });