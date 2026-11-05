# Adiciona um ou mais elementos no final de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-push.php

---

# array\_push

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_push — Adiciona um ou mais elementos no final de um array

### Descrição

function **array\_push**([array](language.types.array.md) `&$array`, [mixed](language.types.mixed.md) `...$values`): [int](language.types.integer.md)

**array\_push()** trata `array` como uma
pilha, e adiciona as variáveis passadas como argumentos no final de
`array`. O tamanho do `array`
aumenta de acordo com o número de variáveis adicionadas. Tem o mesmo efeito de:

```
<?php
$array[] = $var;
?>
```

repetido para cada argumento.

> **Nota**:
>
> Se a função **array\_push()** for usada para adicionar um elemento ao
> array, é melhor usar `$array[] =`  porque desta forma
> não há uma chamada a uma função.

> **Nota**:
>
> **array\_push()** irá emitir um aviso se o primeiro argumento
> não for um array. Isto era diferente do funcionamento de
> `$var[]` onde um novo array era criado, antes do PHP 7.1.0.

### Parâmetros

`array`
:   O array de entrada.

`values`
:   Os valores a serem colocados no final do `array`.

### Valor Retornado

Retorna o novo número de elementos do array.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | Essa função agora pode ser chamada com apenas um parâmetro. Anteriormente, pelo menos dois parâmetros eram necessários. |

### Examples

**Exemplo #1 Exemplo de **array\_push()****

```
<?php
$cesta = array("laranja", "morango");
array_push($cesta, "melancia", "batata");
print_r($cesta);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => laranja
    [1] => morango
    [2] => melancia
    [3] => batata
)
```

### Veja também

- [array\_pop()](function.array-pop.md) - Extrai um elemento do final do array
- [array\_shift()](function.array-shift.md) - Retira o primeiro elemento de um array
- [array\_unshift()](function.array-unshift.md) - Adiciona um ou mais elementos no início de um array

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
