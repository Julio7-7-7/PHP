 <?php

  // class persona
  // {

  //   public $nombre;
  //   private $edad;
  //   protected $altura;

  //   public function __construct($nombre, $edad, $altura)
  //   {
  //     $this->nombre = $nombre;
  //     $this->edad = $edad;
  //     $this->altura = $altura;
  //   }

  //   public function asignarNombre($nuevoNombre)
  //   {
  //     $this->nombre = $nuevoNombre;
  //   }

  //   public function imprimirNombre()
  //   {
  //     echo "Hola soy " . $this->nombre;
  //   }

  //   public function mostrarEdad()
  //   {
  //     $this->edad = 21;
  //     return $this->edad;
  //   }

  //   public function presentar()
  //   {
  //     return "Hola soy " . $this->nombre . " , tengo " . $this->edad . " años y mido " . $this->altura;
  //   }
  // }

  // $alumno = new persona("Julio", 21, 173);
  // echo $alumno->presentar();


  class persona
  {
    public $nombre;
    public $apellido;
    public $edad;
    public $altura;

    public function __construct($nombre, $apellido, $edad, $altura)
    {
      $this->nombre = $nombre;
      $this->apellido = $apellido;
      $this->edad = $edad;
      $this->altura = $altura;
    }

    public function saludar()
    {
      echo "Hola. Soy " . $this->nombre . " " . $this->apellido . ". Tengo " . $this->edad . " años y mido " . $this->altura;
    }
  }

  $persona = new persona("Julio", "Toledo", 21, 173);
  $persona->saludar();

  class trabajador extends persona
  {
    public $puesto;

    public function __construct($nombre, $apellido, $edad, $altura, $puesto)
    {
      parent::__construct($nombre, $apellido, $edad, $altura);
      $this->puesto = $puesto;
    }

    public function presentar()
    {
      echo "Hola soy " . $this->nombre . " " . $this->apellido . " y soy" . " " . $this->puesto;
    }
  }

  $trabajador = new trabajador("Julio", "Toledo", 21, 173, "Auxiliar");
  "<br/>";
  $trabajador->presentar();
