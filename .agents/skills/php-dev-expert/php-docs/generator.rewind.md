# Executa o gerador até o primeiro "yield" inclusive

> **Fonte / Source:** https://www.php.net/manual/pt_BR/generator.rewind.php

---

# Generator::rewind

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

Generator::rewind — Executa o gerador até o primeiro "yield" inclusive

### Descrição

public function **Generator::rewind**(): [void](language.types.void.md)

Executa o gerador até o *primeiro* [`yield`](language.generators.syntax.md#control-structures.yield), inclusive.
Se o gerador já estiver no *primeiro* [`yield`](language.generators.syntax.md#control-structures.yield),
nenhuma ação será tomada.
Se o gerador já tiver avançado além de uma expressão [`yield`](language.generators.syntax.md#control-structures.yield),
este método lançará uma [Exception](class.exception.md).

> **Nota**:
>
> Este é o *primeiro* método chamado ao iniciar um
> laço [`foreach`](control-structures.foreach.md). Ele *não* será
> executado *após* os laços [`foreach`](control-structures.foreach.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Generator::rewind()****

```
<?php

function generator(): Generator
{
    echo "Eu sou um gerador!\n";

    for ($i = 1; $i <= 3; $i++) {
        yield $i;
    }
}

// Inicializa o gerador
$generator = generator();

// Retrocede o gerador para o início da primeira expressão yield,
// se já não estava lá
$generator->rewind(); // Eu sou um gerador!

// Nada acontece aqui. O gerador já está retrocedido.
$generator->rewind(); // Sem saída (NULL)

// Isto retrocede o gerador para a primeira expressão yield,
// se já não estava lá, e itera sobre o gerador.
foreach ($generator as $value) {
    // Após gerar o primeiro valor, o gerador permanece na
    // primeira expressão yield até que continue a execução e avance ao próximo yield
    echo $value, PHP_EOL; // 1

    break;
}

// Continua e retrocede novamente. Nenhum erro ocorre porque o gerador não avançou além do primeiro yield
$generator->rewind();

echo $generator->current(), PHP_EOL; // 1

// Nenhum erro ocorre, o gerador ainda está no primeiro yield
$generator->rewind();

// Isto avança o gerador para a segunda expressão yield
$generator->next();

try {
    // Aqui uma Exception é lançada
    // porque o gerador já avançou para o segundo yield
    $generator->rewind(); // Fatal error: Uncaught Exception: Cannot rewind a generator that was already run
} catch (Exception $e) {
    echo $e->getMessage();
}

?>
```

O exemplo acima produzirá:

```
Eu sou um gerador!
1
1
Cannot rewind a generator that was already run
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
