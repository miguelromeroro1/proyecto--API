

require_once 'models/UsuarioModel.php';

class UsuarioController {
    private $usuarioModel;

    public function __construct() {
        $this->usuarioModel = new UsuarioModel();
    }

    // Función para manejar la solicitud de registro de usuario
    public function registrarUsuario() {
        // Verificar si se ha enviado la solicitud POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario de registro
            $nombreUsuario = $_POST['nombreUsuario'];
            $contrasena = $_POST['contrasena'];

            // Validar los datos ingresados (opcional)

            // Registrar al usuario en la base de datos
            $registroExitoso = $this->usuarioModel->registrarUsuario($nombreUsuario, $contrasena);

            // Enviar la respuesta al cliente
            if ($registroExitoso) {
                echo "Registro exitoso";
