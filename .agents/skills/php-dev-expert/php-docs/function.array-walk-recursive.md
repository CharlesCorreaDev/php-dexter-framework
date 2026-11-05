# Aplica um função do usuário recursivamente para cada membro de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-walk-recursive.php

---

# array\_walk\_recursive

(PHP 5, PHP 7, PHP 8)

array\_walk\_recursive — Aplica um função do usuário recursivamente para cada membro de um array

### Descrição

function **array\_walk\_recursive**([array](language.types.array.md)|[object](language.types.object.md) `&$array`, [callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$arg` = **`null`**): [true](language.types.singleton.md)

Aplica a função `callback` definida pelo usuário para cada
elemento do array `array`. Esta função irá recursar
em arrays mais profundos.

Passar um objeto como o `array` é permitido, e será
tratado como se tivesse sido
[convertido](language.types.array.md#language.types.array.casting) para um array primeiro.
Independentemente de a função ter começado com um array ou um objeto, ela
não irá recursar em objetos internos.

### Parâmetros

`array`
:   O array de entrada.

`callback`
:   Tipicamente, `callback` usa dois
    parâmetros. O valor do parâmetro `array` sendo o primeiro, e
    a chave/índice o segundo.

    > **Nota**:
    >
    > Se `callback` precisa trabalhar com
    > atuais valores da array, especifique o primeiro parâmetro da
    > `callback` com uma
    > [referência](language.references.md). Então,
    > as modificações feitas para estes elementos serão feitas no
    > próprio array original.

`arg`
:   Se o parâmetro opcional `arg` for fornecido,
    ele será passado como o terceiro parâmetro para o
    `callback`.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | O tipo do retorno agora é **`true`**; anteriormente, era [bool](language.types.boolean.md). |

### Examples

**Exemplo #1 Exemplo da **array\_walk\_recursive()****

```
<?php
$doce = array('a' => 'maçã', 'b' => 'banana');
$frutas = array('doce' => $doce, 'azedo' => 'limão');

function test_print($item, $chave)
{
    echo "$chave contém $item\n";
}

array_walk_recursive($frutas, 'test_print');
?>
```

O exemplo acima produzirá:

```
a contém maçã
b contém banana
azedo contém limão
```

Pode-se notar que a chave '`doce`' nunca é exibida. Qualquer chave que contém um
[array](language.types.array.md) não será passada para a função.

### Veja também

- [array\_walk()](function.array-walk.md) - Aplica uma determinada função em cada elemento de um array

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
