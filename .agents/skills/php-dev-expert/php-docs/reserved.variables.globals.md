# Referencia todas variáveis disponíveis no escopo global

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reserved.variables.globals.php

---

# $GLOBALS

(PHP 4, PHP 5, PHP 7, PHP 8)

$GLOBALS — Referencia todas variáveis disponíveis no escopo global

### Descrição

Um [array](language.types.array.md) associativo contendo referências para todas as variáveis que
estão atualmente definidas no escopo global do script. O
nome das variáveis são chaves do array.

### Examples

**Exemplo #1 Exemplo da $GLOBALS**

```
<?php

function teste()
{
    $foo = "variável local";

    echo '$foo no escopo global: ' . $GLOBALS["foo"] . "\n";
    echo '$foo no escopo atual: ' . $foo . "\n";
}

$foo = "Conteúdo de exemplo";
teste();

?>
```

O exemplo acima produzirá
algo semelhante a:

```
$foo no escopo global: Conteúdo de exemplo
$foo no escopo atual: variável local
```

**Aviso**

A partir do 8.1.0, acesso de escrita a todo o array $GLOBALS não é mais suportado:

**Exemplo #2 Escrever em todo o $GLOBALS irá resultar em um erro.**

```
<?php

// Gera um erro em tempo de compilação:
$GLOBALS = [];
$GLOBALS += [];
$GLOBALS =& $x;
$x =& $GLOBALS;
unset($GLOBALS);
array_pop($GLOBALS);
// ...e qualquer outra operação de escrita/leitura em $GLOBALS

?>
```

### Notas

> **Nota**:
>
> Esta é uma variável 'superglobal' ou
> variável global automática. Isso significa simplesmente que ela está disponível em
> todos os escopos de um script. Não há necessidade de usar
> **global $variable;** para acessá-la dentro de funções ou métodos.

> **Nota**:
> **Disponibilidade da variável**  
>
> Diferente de todas as outras [superglobais](language.variables.superglobals.md),
> $GLOBALS tem essencialmente sempre estado disponível no PHP.

> **Nota**:
>
> A partir do PHP 8.1.0, $GLOBALS agora é uma cópia somente-leitura da
> [tabela de símbolos](features.gc.refcounting-basics.md) globais.
> Isto é, variáveis globais não podem ser modificadas por meio de suas cópias.
> Anteriormente, o array $GLOBALS era excluído do comportamento
> usual "por valor" dos arrays PHP e variáveis globais podiam ser modificadas por meio de suas cópias.
>
> ```
> <?php
>
> // Antes do PHP 8.1.0
> $a = 1;
>
> $globals = $GLOBALS; // Cópia ostensiva "por valor"
> $globals['a'] = 2;
> var_dump($a); // int(2)
>
> // A partir do PHP 8.1.0,
> // isto não mais modifica $a. O comportamento anterior violava a semântica "por valor".
> $globals = $GLOBALS;
> $globals['a'] = 1;
>
> // Para restaurar o comportamento anterior, itera sua cópia e atribui cada propriedade de volta ao $GLOBALS.
> foreach ($globals as $key => $value) {
>     $GLOBALS[$key] = $value;
> }
>
> ?>
> ```

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
