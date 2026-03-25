        <?php if (!empty($numeros)): ?>
        <div class="resultados">
            <h2>Números Generados:</h2>
            <p style="word-wrap: break-word;"><?php echo htmlspecialchars(implode(', ', $numeros), ENT_QUOTES, 'UTF-8'); ?></p>
            
            <h2>Estadísticas:</h2>
            <ul>
                <li><strong>Suma:</strong> <?php echo htmlspecialchars((string)$resultados['suma'], ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Promedio:</strong> <?php echo htmlspecialchars(number_format($resultados['promedio'], 2), ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Mínimo:</strong> <?php echo htmlspecialchars((string)$resultados['minimo'], ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Máximo:</strong> <?php echo htmlspecialchars((string)$resultados['maximo'], ENT_QUOTES, 'UTF-8'); ?></li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>
