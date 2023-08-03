var stoque = [["pasta", "requeriamento"], ["servidor", "material"], ["salario", "livros"]]
    console.table(stoque);


function Person(stoque, lastName) {
  this.firstName = stoque;
  this.lastName = lastName;
}

    var protocolo3 = new Person("pasta", "requerimento");
    var protocolo2 = new Person("servidor", "material");
    var protocolo1 = new Person("salario", "livros");

console.table([protocolo1, protocolo2, protocolo3]);