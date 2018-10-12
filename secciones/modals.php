
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON COMANDO</h2></br>
          <img class="img-fluid mb-5" src="images/command.jpg" alt="">
            <p class="mb-5 text-justify">
						El patrón Command encapsula acciones como objetos. Los objetos de comando permiten sistemas ligeramente acoplados al separar los objetos que emiten una solicitud de los objetos que realmente procesan la solicitud. Estas solicitudes se llaman eventos y el código que procesa las solicitudes se llama controladores de eventos. Los objetos de comando le permiten centralizar el procesamiento de estas acciones, una para cada operación. Por lo tanto, solo necesita un comando para procesar todas las solicitudes de corte, una para todas las solicitudes de copia y una para todas las solicitudes de pegado.
						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Command Pattern Example</h3><br>
          <p class="text-justify">Para calcular el cambio del billete, ingresar la cantidad a cambiar en la caja de texto.</p><br>

          <input onchange="mostrarCambio('capturarInput')" type="number" name="cajaES6" class="form-control col-lg-12 cajaES6"><br>
          <br> <button onclick="mostrarCambio(); return false" class="btn btn-lg btn-primary col-lg-12 calcularCaja">Calcular cambio!</button></br>

					<br></br>
			</div>
		</div>
	</div>
</div>
<!--MODAL2-->
<div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON OBSERVADOR</h2></br>
          <img class="img-fluid mb-5" src="images/command1.jpg" alt="">
            <p class="mb-5 text-justify">
							Es un patrón de diseño de software que define una dependencia del tipo uno a muchos entre objetos, de manera que cuando uno de los objetos cambia su estado, notifica este cambio a todos los dependientes. Se trata de un patrón de comportamiento (existen de tres tipos: creación, estructurales y de comportamiento), por lo que está relacionado con algoritmos de funcionamiento y asignación de responsabilidades a clases y objetos.

							Los patrones de comportamiento describen no solamente estructuras de relación entre objetos o clases sino también esquemas de comunicación entre ellos y se pueden clasificar en función de que trabajen con clases (método plantilla) u objetos (cadena de responsabilidad, comando, iterador, recuerdo, observador, estado, estrategia, visitante).

							La variación de la encapsulación es la base de muchos patrones de comportamiento, por lo que cuando un aspecto de un programa cambia frecuentemente, estos patrones definen un objeto que encapsula dicho aspecto. Los patrones definen una clase abstracta que describe la encapsulación del objeto.
						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Ejemplo de Patron Observador</h3><br>
          <p class="text-justify">He hecho un ejemplo práctico en la que vamos a interceptar cuando 2 pokemons peleen y uno de ellos ganen, jaaaaa seguro esperabas el "ejemplo del examen online". Pues no, vamos hacer un ejemplo más práctico para poder comprender la lógica.
					</p><br>
					<div align="center" id="ganador"></div>
					<div align="center" id="perdedor"></div>
	<center><button type="button" class="btn btn-primary btn-lg" id="combate" >COMBATE!</button></center>


			</div>
		</div>
	</div>
</div>
<!--MODAL3-->
<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON CADENA DE RESPONSABILIDAD.</h2></br>
          <img class="img-fluid mb-5" src="images/command2.jpg" alt="">
            <p class="mb-5 text-justify"> Es un patrón de comportamiento que evita acoplar el emisor de una petición a su receptor dando a más de un objeto la posibilidad de responder a una petición. Para ello, se encadenan los receptores y pasa la petición a través de la cadena hasta que es procesada por algún objeto. Este patrón es utilizado a menudo en el contexto de las interfaces gráficas de usuario donde un objeto puede estar compuesto de varios objetos (que generalmente heredan de una super clase "vista"). No se debe confundir con el patrón Composite (patrón de diseño) que se basa en un concepto similar. Según si el ambiente de ventanas genera eventos, los objetos los manejan o los "pasan" (transmiten) hasta que algún elemento consume dicho evento y se detiene la propagación. Un claro ejemplo de cadena de responsabilidades sería una estructura de datos que contiene nodos cuya implementación es opaca para el usuario de dicha estructura de datos (no conoce salvo la interfaz de la estructura de datos). Internamente los nodos se relacionan mediante punteros y una llamada a un método de la estructura de datos hará que un mensaje se propague por la cadena de nodos hasta llegar a su receptor. Es decir, una petición de "búsqueda(clave)" al contenedor de nodos hará que el mismo pase dicho mensaje a uno de los nodos (raíz, primero, etc; dependiendo de como se haya implementado la estructura de datos) devolviendo el nodo el resultado si su atributo clave coincide con la búsqueda o mandando dicho mensaje al siguiente nodo en caso contrario. Obviamente se daría este caso a niveles teóricos pues existen formas más optimas de solventar el anterior problema de ejemplo y; sobre todo, ha de tenerse en cuenta que una cadena muy grande de muchos elementos puede llegar a apilar en memoria una gran cantidad de llamadas a procedimientos hasta que la cadena retorne un resultado con su consiguiente coste asociado
						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Ejemplo de Cadena de Responsabilidad</h3><br>
          <p class="text-justify">
						El código demuestra una solución elegante para un problema de la máquina dispensadora de dinero. Por ejemplo, un cliente requiere $ 247 de un cajero automático. ¿Cuál es la combinación de los billetes de banco ($ 100, $ 50, $ 20, $ 10, $ 5, $ 1) que satisface esa solicitud?
					</p><br>
						<center><button onclick="run(); return false" type="button" class="btn btn-primary btn-lg"  >Pruebalo</button></center>
				</div>
		</div>
	</div>
</div>
<!--MODAL4-->
<div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON DE ESTRATEGIA</h2></br>
          <img class="img-fluid mb-5" src="images/command3.jpg" alt="">
            <p class="mb-5 text-justify">
							El patrón Estrategia (Strategy) es un patrón de diseño para el desarrollo de software. Se clasifica como patrón de comportamiento porque determina cómo se debe realizar el intercambio de mensajes entre diferentes objetos para resolver una tarea. El patrón estrategia permite mantener un conjunto de algoritmos de entre los cuales el objeto cliente puede elegir aquel que le conviene e intercambiarlo dinámicamente según sus necesidades.
							Cualquier programa que ofrezca un servicio o función determinada, que pueda ser realizada de varias maneras, es candidato a utilizar el patrón estrategia. Puede haber cualquier número de estrategias y cualquiera de ellas podrá ser intercambiada por otra en cualquier momento, incluso en tiempo de ejecución. Si muchas clases relacionadas se diferencian únicamente por su comportamiento, se crea una superclase que almacene el comportamiento común y que hará de interfaz hacia las clases concretas.

Si un algoritmo utiliza información que no deberían conocer los clientes, la utilización del patrón estrategia evita la exposición de dichas estructuras. Aplicando el patrón a una clase que defina múltiples comportamientos mediante instrucciones condicionales, se evita emplear estas instrucciones, moviendo el código a clases independientes donde se almacenará cada estrategia.

Efectivamente, como se comenta anteriormente, este patrón de diseño nos sirve para intercambiar un sin número de estrategias posibles.

						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Ejemplo de Estrategia de Patron</h3><br>
					<p class="text-justify">
					Supongamos que nos gusta probar el rendimiento de diferentes algoritmos de clasificación para una serie de números: ordenación de shell, ordenación de pila, clasificación de burbuja, ordenación rápida, etc. La aplicación del patrón de Estrategia a estos algoritmos permite que el programa de prueba recorra todos los algoritmos, simplemente cambiando ellos en tiempo de ejecución y prueba cada uno de estos contra la matriz
					</p><br>
						<center><button onclick="test(); return false" type="button" class="btn btn-primary btn-lg"  >Pruebalo</button></center>
				</div>
		</div>
	</div>
</div>
<!--MODAL5-->
<div class="modal fade" id="miModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON ITERADOR</h2></br>
          <img class="img-fluid mb-5" src="images/command4.jpg" alt="">
            <p class="mb-5 text-justify">
							En diseño de software, el patrón de diseño Iterador, define una interfaz que declara los métodos necesarios para acceder secuencialmente a un grupo de objetos de una colección. Algunos de los métodos que podemos definir en la interfaz Iterador son:

    Primero(), Siguiente(), HayMas() y ElementoActual().

Este patrón de diseño permite recorrer una estructura de datos sin que sea necesario conocer la estructura interna de la misma.
El patrón surge del deseo de acceder a los elementos de un contenedor de objetos (por ejemplo, una lista) sin exponer su representación interna. Además, es posible que se necesite más de una forma de recorrer la estructura siendo para ello necesario crear modificaciones en la clase.

La solución que propone el patrón es añadir métodos que permitan recorrer la estructura sin referenciar explícitamente su representación. La responsabilidad del recorrido se traslada a un objeto iterador.

El problema de introducir este objeto iterador reside en que los clientes necesitan conocer la estructura para crear el iterador apropiado.

Esto se soluciona generalizando los distintos iteradores en una abstracción y dotando a las estructuras de datos de un método de fabricación que cree un iterador concreto.
						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Ejemplo de Patron Iterador</h3><br>
					<p class="text-justify">
						El objeto Iterator mantiene una referencia a la colección y la posición actual. También implementa la interfaz Iterator 'estándar' con métodos como: primero , siguiente , hasNext , reset y cada uno .

	Se utilizan dos métodos de bucle: a incorporado para bucle y un recién creados cada método. El bucle for utiliza los métodos primero , hasNext y next para controlar la iteración. La cada método hace internamente exactamente de la misma (es decir, se ejecuta un bucle), pero al cliente la sintaxis se ha simplificado en gran medida.
					</p><br>
						<center><button onclick="best(); return false" type="button" class="btn btn-primary btn-lg"  >Pruebalo</button></center>
				</div>
		</div>
	</div>
</div>
<!--MODAL6-->
<div class="modal fade" id="miModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON VISITANTE</h2></br>
          <img class="img-fluid mb-5" src="images/command5.jpg" alt="">
            <p class="mb-5 text-justify">
							En programación orientada a objetos, el patrón visitor es una forma de separar el algoritmo de la estructura de un objeto.

	La idea básica es que se tiene un conjunto de clases elemento que conforman la estructura de un objeto. Cada una de estas clases elemento tiene un método aceptar (accept()) que recibe al objeto visitante (visitor) como argumento. El visitante es una interfaz que tiene un método visit diferente para cada clase elemento; por tanto habrá implementaciones de la interfaz visitor de la forma: visitorClase1, visitorClase2... visitorClaseN. El método accept de una clase elemento llama al método visit de su clase. Clases concretas de un visitante pueden entonces ser escritas para hacer una operación en particular.

	Cada método visit de un visitante concreto puede ser pensado como un método que no es de una sola clase, sino de un par de clases: el visitante concreto y clase elemento particular. Así el patrón visitor simula el envío doble (en inglés éste término se conoce como Double-Dispatch) en un lenguaje convencional orientado a objetos de envío único (Single-Dispatch), como son Java o C++.
						</p>
			</div>
			<div class="modal-body">
				<br><h3 class="text-center">Ejemplo de Patron Visitante</h3><br>
					<p class="text-justify">
						Los visitantes son útiles cuando se construye la extensibilidad en una biblioteca o marco. Si los objetos en su proyecto proporcionan un método de "visita" que acepta un objeto Visitante que puede hacer cambios en el objeto receptor, entonces está proporcionando una manera fácil para que los clientes implementen futuras extensiones.

En la mayoría de los lenguajes de programación, el patrón de visitante requiere que el desarrollador original anticipa ajustes funcionales en el futuro. Esto se hace mediante la inclusión de métodos que aceptan a un visitante y le permiten operar en la colección original de objetos.
					</p><br>
						<center><button onclick="gost(); return false" type="button" class="btn btn-primary btn-lg"  >Pruebalo</button></center>
				</div>
		</div>
	</div>
</div>

<!------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------>
<div class="modal fade" id="miModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON COMANDO</h2></br>
					<pre>
	// CREAMOS LA CLASE COMANDER
class Command {
constructor(execute, undo, value) { // DONDE EL CONSTRUCTOR RECIBIRÁ 3 PARAMETROS.
    // IGUALAMOS LOS PARAMETROS.
	this.execute = execute;
    this.undo = undo;
	this.value = value;
	}
	}</br>
	// CREAMOS FUNCIONES ANONIMAS PARA LAS OPERACIONES.
	<br>function suma(x, y) { return x + y; }</br>
	function resta(x, y) { return x - y; }
	function multi(x, y) { return x * y; }
	function divi(x, y) { return x / y; }
    function newCalculator() {
					 
	return function () {				 
	  var current = 0;				       
	var commands = [];						         		     
	 function action(command) {				        
	 var name = command.execute.toString().substr(9, 3);				        return name.charAt(0).toUpperCase() + name.slice(1);
	  }				       
		return {			         
		 execute: function (command) {			            
	 current = command.execute(current, command.value);
	commands.push(command);
	log.suma(action(command) + ": " + command.value);				                 
	},
	undo: function () {
	var command = commands.pop();
	current = command.undo(current, command.value);
	log.suma("Undo " + action(command) + ": " + command.value);
	},
	getCurrentValue: function () {
	return current;
	}
	};
	};
}				         

function newDivCommand() {
 return function (value) {
	 return new Command(divi, multi, value);
 };
}

function newMulCommand() {
 return function (value) {
	 return new Command(multi, divi, value);
 };
}

function newSubCommand() {
 return function (value) {
	 return new Command(resta, suma, value);
 };
}

function newAddCommand() {
 return function (value) {
	 return new Command(suma, resta, value);
 };
}

var AddCommand = newAddCommand();

var SubCommand = newSubCommand();

var MulCommand = newMulCommand();

var DivCommand = newDivCommand();

var Calculator = newCalculator()

// log helper

var log = (function () {
 var log = "";

 return {
	 suma: function (msg) { log += msg + "\n"; },
	 show: function () { alert(log); log = ""; }
 }
})();

function run() {
 var calculator = new Calculator();

 // issue commands

 calculator.execute(new AddCommand(100));
 calculator.execute(new SubCommand(24));
 calculator.execute(new MulCommand(6));
 calculator.execute(new DivCommand(2));

 // reverse last two commands

 calculator.undo();
 calculator.undo();

 log.suma("\nValue: " + calculator.getCurrentValue());
 log.show();
}

					</pre>
			</div>
		</div>
	</div>
</div>



<div class="modal fade" id="miModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON OBSERVADOR</h2></br>
            <pre>
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


						</pre>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="miModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON CADENA DE RESPONSABILIDAD</h2></br>
          <pre>
var Request = function(amount) {
    this.amount = amount;
    log.add("Requested: $" + amount + "\n");
}

Request.prototype = {
    get: function(bill) {
        var count = Math.floor(this.amount / bill);
        this.amount -= count * bill;
        log.add("Dispense " + count + " $" + bill + " bills");
        return this;
    }
}

// log helper

var log = (function() {
    var log = "";

    return {
        add: function(msg) { log += msg + "\n"; },
        show: function() { alert(log); log = ""; }
    }
})();

function run() {
    var request = new Request(378);

    request.get(100).get(50).get(20).get(10).get(5).get(1);

    log.show();
}

					</pre>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="miModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON DE ESTRATEGIA</h2></br>
            <pre>
var Shipping = function() {
    this.company = "";
};

Shipping.prototype = {
    setStrategy: function(company) {
        this.company = company;
    },

    calculate: function(package) {
        return this.company.calculate(package);
    }
};

var UPS = function() {
    this.calculate = function(package) {
        // calculations...
        return "$45.95";
    }
};

var USPS = function() {
    this.calculate = function(package) {
        // calculations...
        return "$39.40";
    }
};

var Fedex = function() {
    this.calculate = function(package) {
        // calculations...
        return "$43.20";
    }
};

// log helper

var log = (function() {
    var log = "";

    return {
        add: function(msg) { log += msg + "\n"; },
        show: function() { alert(log); log = ""; }
    }
})();

function test() {
    var package = { from: "76712", to: "10012", weigth: "lkg" };

    // the 3 strategies

    var ups = new UPS();
    var usps = new USPS();
    var fedex = new Fedex();

    var shipping = new Shipping();

    shipping.setStrategy(ups);
    log.add("UPS Strategy: " + shipping.calculate(package));
    shipping.setStrategy(usps);
    log.add("USPS Strategy: " + shipping.calculate(package));
    shipping.setStrategy(fedex);
    log.add("Fedex Strategy: " + shipping.calculate(package));

    log.show();
}

						</pre>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="miModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON ITERADOR</h2></br>
          <pre>
var Iterator = function(items) {
    this.index = 0;
    this.items = items;
}

Iterator.prototype = {
    first: function() {
        this.reset();
        return this.next();
    },
    next: function() {
        return this.items[this.index++];
    },
    hasNext: function() {
        return this.index <= this.items.length;
    },
    reset: function() {
        this.index = 0;
    },
    each: function(callback) {
        for (var item = this.first(); this.hasNext(); item = this.next()) {
            callback(item);
        }
    }
}

// log helper

var log = (function() {
    var log = "";
    return {
        add: function(msg) { log += msg + "\n"; },
        show: function() { alert(log); log = ""; }
    }
})();

function best() {
    var items = ["one", 2, "circle", true, "Applepie"];
    var iter = new Iterator(items);

    // using for loop

    for (var item = iter.first(); iter.hasNext(); item = iter.next()) {
        log.add(item);
    }
    log.add("");

    // using Iterator's each method

    iter.each(function(item) {
        log.add(item);
    });

    log.show();
}
						

					</pre>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="miModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<br><h1 align="center">PATRON VISITANTE</h2></br>
            <pre>
var Employee = function (name, salary, vacation) {
    var self = this;

    this.accept = function (visitor) {
        visitor.visit(self);
    };

    this.getName = function () {
        return name;
    };

    this.getSalary = function () {
        return salary;
    };

    this.setSalary = function (sal) {
        salary = sal;
    };

    this.getVacation = function () {
        return vacation;
    };

    this.setVacation = function (vac) {
        vacation = vac;
    };
};

var ExtraSalary = function () {
    this.visit = function (emp) {
        emp.setSalary(emp.getSalary() * 1.1);
    };
};

var ExtraVacation = function () {
    this.visit = function (emp) {
        emp.setVacation(emp.getVacation() + 2);
    };
};

// log helper

var log = (function() {
    var log = "";

    return {
        add: function(msg) { log += msg + "\n"; },
        show: function() { alert(log); log = ""; }
    }
})();

function gost() {

    var employees = [
        new Employee("John", 10000, 10),
        new Employee("Mary", 20000, 21),
        new Employee("Boss", 250000, 51)
    ];

    var visitorSalary = new ExtraSalary();
    var visitorVacation = new ExtraVacation();

    for (var i = 0, len = employees.length; i < len; i++) {
        var emp = employees[i];

        emp.accept(visitorSalary);
        emp.accept(visitorVacation);
        log.add(emp.getName() + ": $" + emp.getSalary() +
            " and " + emp.getVacation() + " vacation days");
    }

    log.show();
}

						</pre>
			</div>
		</div>
	</div>
</div>
