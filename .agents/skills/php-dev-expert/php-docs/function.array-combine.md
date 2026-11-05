# Cria um array usando um array para chaves e outro para valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-combine.php

---

# array\_combine

(PHP 5, PHP 7, PHP 8)

array\_combine — Cria um array usando um array para chaves e outro para valores

### Descrição

function **array\_combine**([array](language.types.array.md) `$keys`, [array](language.types.array.md) `$values`): [array](language.types.array.md)

Cria um [array](language.types.array.md) usando os valores do array
`keys` como chaves e os valores do array
`values` como valores correspondentes.

### Parâmetros

`keys`
:   Array a ser usado como chaves. Valores ilegais para chave serão
    convertidos para [string](language.types.string.md).

`values`
:   [Array](language.types.array.md) a ser usado como valores

### Valor Retornado

Retorna o [array](language.types.array.md) combinado.

### Erros/Exceções

A partir do PHP 8.0.0, a [ValueError](class.valueerror.md) é disparado se o número de elementos em
`keys` e `values`
não correspondem.
Antes do PHP 8.0.0, um **`E_WARNING`** será disparado no lugar.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **array\_combine()** será agora dispara [ValueError](class.valueerror.md) se o numero de elementos para cada array não é igual; antes esta função retorna **`false`** no lugar. |

### Examples

**Exemplo #1 Um simples exemplo usando a função **array\_combine()****

```
<?php
$a = array('verde', 'vermelho', 'amarelo');
$b = array('abacate', 'maçã', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>
```

O exemplo acima produzirá:

```
Array
(
    [verde] => abacate
    [vermelho] => maçã
    [amarelo] => banana
)
```

### Veja também

- [array\_merge()](function.array-merge.md) - Combina um ou mais arrays
- [array\_walk()](function.array-walk.md) - Aplica uma determinada função em cada elemento de um array
- [array\_values()](function.array-values.md) - Retorna todos os valores de um array
- [array\_map()](function.array-map.md) - Aplica uma função em todos os elementos dos arrays dados

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
