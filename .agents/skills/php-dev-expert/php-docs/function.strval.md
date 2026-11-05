# Retorna o valor string de uma variável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strval.php

---

# strval

(PHP 4, PHP 5, PHP 7, PHP 8)

strval — Retorna o valor string de uma variável

### Descrição

function **strval**([mixed](language.types.mixed.md) `$value`): [string](language.types.string.md)

Obtém o valor string de uma variável.
Consulte a documentação sobre [string](language.types.string.md) para maiores informações
sobre conversão para o tipo string.

Esta função não faz nenhuma formatação no valor retornado. Se o
objetivo for formatar um valor numérico como uma string, favor
consultar [sprintf()](function.sprintf.md) ou [number\_format()](function.number-format.md).

### Parâmetros

`value`
:   A variável que será convertida para o tipo [string](language.types.string.md).

    `value` pode ser qualquer tipo escalar, [null](language.types.null.md),
    ou um objeto ([object](language.types.object.md)) que implemente o método [\_\_toString()](language.oop5.magic.md#object.tostring).
    **strval()** não pode ser usado em arrays ou em
    objetos que não implementem o método
    [\_\_toString()](language.oop5.magic.md#object.tostring).

### Valor Retornado

O valor em [string](language.types.string.md) do parâmetro `value`.

### Examples

**Exemplo #1
Exemplo de **strval()** usando o método mágico
[\_\_toString()](language.oop5.magic.md#object.tostring).**

```
<?php
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}

// Prints 'StrValTest'
echo strval(new StrValTest);
?>
```

### Veja também

- [boolval()](function.boolval.md) - Obtém o valor booleano de uma variável
- [floatval()](function.floatval.md) - Obtém o valor em ponto flutuante da variável
- [intval()](function.intval.md) - Obtém o valor em número inteiro de uma variável
- [settype()](function.settype.md) - Define o tipo de uma variável
- [sprintf()](function.sprintf.md) - Retona uma string formatada
- [number\_format()](function.number-format.md) - Formata um número com milhares agrupados
- [Manipulação de tipos](language.types.type-juggling.md)
- [\_\_toString()](language.oop5.magic.md#object.tostring)

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
