# Booleanos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/language.types.boolean.php

---

## Booleanos

O tipo [bool](language.types.boolean.md) tem apenas dois valores e é usado para expressar
um valor de verdade. Pode ser **`true`** ou **`false`**.

### Sintaxe

Para especificar um [bool](language.types.boolean.md) literal, use as palavras-chave **`true`**
ou **`false`**. Ambas são case-insensitive.

```
<?php

$foo = True; // atribui o valor True para $foo

var_dump($foo); // bool(true)
?>
```

Tipicamente, o resultado de um [operador](language.operators.md)
que retorne um valor [bool](language.types.boolean.md), é passado para
uma [estrutura de controle](language.control-structures.md).

```
<?php

$acao = "mostrar_versao";
$exibir_separadores = true;

// == É um operador que testa
// igualdade e retorna um booleano.
if ($acao == "mostrar_versao") {
    echo "A versão é 1.23";
}

// isto não é necessário ...
if ($exibir_separadores == TRUE) {
    echo "<hr>\n";
}

// ... porque pode simplesmente ser escrito assim:
if ($exibir_separadores) {
    echo "<hr>\n";
}
?>
```

### Convertendo para booleano

Para converter explicitamente um valor em [bool](language.types.boolean.md), use a conversão
`(bool)`. Geralmente isso não é necessário porque quando
um valor é usado em um contexto lógico ele será automaticamente interpretado
como um valor do tipo [bool](language.types.boolean.md). Para obter mais informações,
consulte a página [Manipulação de tipos](language.types.type-juggling.md).

Ao converter para [bool](language.types.boolean.md), os seguintes valores são considerados
**`false`**:

- o próprio [booleano](language.types.boolean.md) **`false`**
- o [inteiro](language.types.integer.md)
  `0` (zero)
- os [pontos flutuantes](language.types.float.md)
  `0.0` e `-0.0` (zero)
- uma [string](language.types.string.md) vazia `""`,
  e a [string](language.types.string.md) `"0"`
- um [array](language.types.array.md) sem elementos
- o tipo especial [NULL](language.types.null.md) (incluindo variáveis
  não definidas)
- Objetos internos que sobrecarregam seu comportamento de conversão para booleano.
  Por exemplo, objetos [GMP](class.gmp.md) que representam o valor
  `0`.

Todos os outros valores são considerados **`true`**
(incluindo [resource](language.types.resource.md)
e **`NAN`**).

**Aviso**

`-1` é considerado **`true`**, como qualquer número que não seja zero (negativos
ou positivos)!

**Exemplo #1 Convertendo para booleano**

```
<?php
var_dump((bool) "");        // bool(false)
var_dump((bool) "0");       // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
?>
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
