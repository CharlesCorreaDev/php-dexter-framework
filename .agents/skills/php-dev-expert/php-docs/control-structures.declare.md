# declare

> **Fonte / Source:** https://www.php.net/manual/pt_BR/control-structures.declare.php

---

## declare

(PHP 4, PHP 5, PHP 7, PHP 8)

A instrução `declare` é usada
para definir diretivas de execução para um bloco de código.
A sintaxe do `declare` é similar à
sintaxe de outros construtos de controle de fluxo:

```
declare (directive)
    statement
```

A seção `directive` permite que
o comportamento do bloco do `declare` seja
definido.
Atualmente somente três diretivas são reconhecidas:

- [`ticks`](control-structures.declare.md#control-structures.declare.ticks)
- [`encoding`](control-structures.declare.md#control-structures.declare.encoding)
- [`strict_types`](language.types.declarations.md#language.types.declarations.strict)

As diretivas são manipuladas na compilação do arquivo, somente literais podem
ser usadas como valores da diretiva. Variáveis e constantes não podem ser usadas. Para
ilustrar:

```
<?php
// Isto é válido:
declare(ticks=1);

// isto é inválido:
const TICK_VALUE = 1;
declare(ticks=TICK_VALUE);
```

A parte `statement` do bloco do
`declare` será executada - como
é executada e quais os efeitos colaterais que ocorrem durante
a execução depende da diretiva definida no bloco
`directive`.

O construtor do `declare` também pode ser usado
no escopo global, afetando todo o código que o segue (entretanto se o arquivo com o
`declare` for incluído, não afetará o
arquivo principal).

```
<?php
// Os exemplos abaixo tem o mesmo efeito

// Pode ser usado assim:
declare(ticks=1) {
    // script aqui
}

// ou assim:
declare(ticks=1);
// script inteiro aqui
```

### Tiques

Um tique é um evento que ocorre a cada
N declarações de baixo nível "ticáveis" executadas
pelo analisador dentro do bloco `declare`.
O valor de N é especificado
usando `ticks=N`
dentro do bloco `declare` da seção
`directive`.

Nem todas declarações são "ticáveis". Tipicamente, expressões de
condições e expressões de argumentos não são.

Os eventos que ocorrem em cada tique são especificados usando a função
[register\_tick\_function()](function.register-tick-function.md). Veja o exemplo
abaixo para mais detalhes. Note que mais de um evento pode ocorrer
para cada tique.

**Exemplo #1 Exemplo de uso do tique**

```
<?php

declare(ticks=1);

// A função a ser chamada em cada evento de tique
function gerenciador_de_tiques()
{
    echo "função gerenciador_de_tiques() chamada\n";
}

register_tick_function('gerenciador_de_tiques'); // Causa um evento de tique

$a = 1; // Causa um evento de tique

if ($a > 0) {
    $a += 2; // Causa um evento de tique
    print $a . "\n"; // Causa um evento de tique
}
```

O exemplo acima produzirá:

```
função gerenciador_de_tiques() chamada
função gerenciador_de_tiques() chamada
função gerenciador_de_tiques() chamada
3
função gerenciador_de_tiques() chamada
```

Consulte também [register\_tick\_function()](function.register-tick-function.md) e
[unregister\_tick\_function()](function.unregister-tick-function.md).

### Codificação

A codificação de um script pode ser especificada em cada arquivo com uma diretiva `encoding`.

**Exemplo #2 Declarando a codificação do script**

```
<?php
declare(encoding='ISO-8859-1');
// código aqui
```

**Cuidado**

Quando usada com namespaces, a única sintaxe válida para declarar
é `declare(encoding='...');` onde `...`
é o valor da codificação. `declare(encoding='...') {}`
irá resultar em um erro de sintaxe quando usada com namespaces.

Veja mais [zend.script\_encoding](ini.core.md#ini.zend.script-encoding).

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
