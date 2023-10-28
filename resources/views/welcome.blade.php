<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Básica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            border: 1px solid #ccc;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.1);
        }
        .calculator h2 {
            text-align: center;
        }
        .calculator input[type="number"],
        .calculator select,
        .calculator button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        @media (max-width: 600px) {
            .calculator {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Calculadora De Operaciones Básicas</h2>
        <input type="number" id="num1" placeholder="Número 1">
        <select id="operator">
            <option value="add">Suma</option>
            <option value="subtract">Resta</option>
            <option value="multiply">Multiplicación</option>
            <option value="divide">División</option>
        </select>
        <input type="number" id="num2" placeholder="Número 2">
        <button onclick="calculate()">Calcular</button>
        <p id="result"></p>
    </div>
    <script>
        function calculate() {
            const num1 = document.getElementById("num1").value;
            const num2 = document.getElementById("num2").value;
            
            // Validación de entrada vacía
            if (!num1 || !num2) {
                alert("Por favor, introduce ambos números.");
                return;
            }

            const n1 = parseFloat(num1);
            const n2 = parseFloat(num2);
            
            // Validación de solo números
            if (isNaN(n1) || isNaN(n2)) {
                alert("Por favor, introduce solo números.");
                return;
            }

            const operator = document.getElementById("operator").value;
            
            let result;

            switch (operator) {
                case "add":
                    result = n1 + n2;
                    break;
                case "subtract":
                    result = n1 - n2;
                    break;
                case "multiply":
                    result = n1 * n2;
                    break;
                case "divide":
                    // Validación de división por cero
                    if (n2 === 0) {
                        alert("No se puede dividir por cero.");
                        return;
                    }
                    result = n1 / n2;
                    break;
                default:
                    alert("Operador no válido.");
                    return; 
            }

            document.getElementById("result").textContent = `Resultado: ${result}`;
        }
    </script>
</body>
</html>
