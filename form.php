        <h1>Generador de Números Aleatorios</h1>
        
        <form method="post" action="index.php">
            <label for="cantidad">Cantidad de números (1-1000):</label>
            <input type="number" id="cantidad" name="cantidad" min="1" max="1000" value="<?php echo isset($_POST['cantidad']) ? (int)$_POST['cantidad'] : ''; ?>" required>
            
            <label for="minimo">Valor mínimo:</label>
            <input type="number" id="minimo" name="minimo" min="1" max="100000" value="<?php echo isset($_POST['minimo']) ? (int)$_POST['minimo'] : '1'; ?>" required>
            
            <label for="maximo">Valor máximo:</label>
            <input type="number" id="maximo" name="maximo" min="1" max="100000" value="<?php echo isset($_POST['maximo']) ? (int)$_POST['maximo'] : '100'; ?>" required>
            
            <button type="submit">Generar</button>
        </form>
