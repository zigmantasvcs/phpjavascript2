function authenticate(){
  while(slaptazodis != getUserPassword()){
    var slaptazodis = prompt("Iveskite slaptažodį");
  }
}
