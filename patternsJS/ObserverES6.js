function Observable() {
  this.observers = [];

  this.add = function (observer) {
    this.observers.push(observer);
  };

  this.notify = function (obj) {
    this.observers.forEach(function (observer) {
      observer.call(null, obj);
    });
  };
}

function PokemonCombate(pokemon1, pokemon2){
  this.observable = new Observable();

  this.pokemon1 = pokemon1;
  this.pokemon2 = pokemon2;
  this.ronda = 1;
}

PokemonCombate.prototype.combatir = function () {
    var ganador,
        perdedor;

  if(Math.floor((Math.random() * 2) + 1) === 1) {
      ganador = this.pokemon1;
      perdedor = this.pokemon2;
  } else {
      ganador = this.pokemon2;
      perdedor = this.pokemon1;
  }

  this.observable.notify({
    ganador: ganador,
    perdedor: perdedor,
    ronda: this.ronda
  });

  this.ronda++;
};

window.onload = function(){
  var combate = new PokemonCombate('Pikachu', 'Meowth');

  combate.observable.add(function(obj){
    document.getElementById("ganador").innerHTML = ('El ganador de la ronda ' + obj.ronda + ' es: ' + obj.ganador);
  });

  combate.observable.add(function(obj){
  	document.getElementById("perdedor").innerHTML = ('El perdedor de la ronda ' + obj.ronda + ' es: ' + obj.perdedor);
  });

  document.querySelector('#combate').addEventListener('click', function(){
    combate.combatir();
  })
}
