//------------------ Assignment 11 - Multiplication table ---------------------

function multiplicationTable(num) {
    for (let i = 1; i <= 10; i++) {
      const product = num * i;
      console.log(num + ' * ' + i + ' = ' + product);
    }
  }
  multiplicationTable(7);