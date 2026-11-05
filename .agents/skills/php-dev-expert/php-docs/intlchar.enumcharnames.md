# Enumera todos os caracteres Unicode atribuídos dentro de um intervalo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/intlchar.enumcharnames.php

---

# IntlChar::enumCharNames

(PHP 7, PHP 8)

IntlChar::enumCharNames — Enumera todos os caracteres Unicode atribuídos dentro de um intervalo

### Descrição

public static function **IntlChar::enumCharNames**(  
    [int](language.types.integer.md)|[string](language.types.string.md) `$start`,  
    [int](language.types.integer.md)|[string](language.types.string.md) `$end`,  
    [callable](language.types.callable.md) `$callback`,  
    [int](language.types.integer.md) `$type` = **`IntlChar::UNICODE_CHAR_NAME`**  
): [bool](language.types.boolean.md)

Enumera todos os caracteres Unicode atribuídos entre o início e os pontos de código limite (início inclusive, pontos de código exclusive)
e chama uma função para cada, passando o valor de ponto de código e o nome do caractere.

Para nomes Unicode 1.0, são enumerados somente os que são diferentes dos nomes modernos.

### Parâmetros

`start`
:   O primeiro ponto de código no intervalo de enumeração.

`end`
:   Um a mais que o último ponto de código no intervalo da enumeração (o primeiro depois do intervalo).

`callback`
:   A função que deve ser chamada para cada nome de caractere. Os três argumentos a seguir serão passados na função:

    - [int](language.types.integer.md) `$codepoint` - O valor numérico do ponto de código
    - [int](language.types.integer.md) `$nameChoice` - O mesmo valor do parâmetro `type` abaixo
    - [string](language.types.string.md) `$name` - O nome do caractere

`type`
:   Seletor para o tipo de nomes e enumerar. Pode ser uma destas constantes:

    - **`IntlChar::UNICODE_CHAR_NAME`** (padrão)
    - **`IntlChar::UNICODE_10_CHAR_NAME`**
    - **`IntlChar::EXTENDED_CHAR_NAME`**
    - **`IntlChar::CHAR_NAME_ALIAS`**
    - **`IntlChar::CHAR_NAME_CHOICE_COUNT`**

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Este método agora retorna **`false`** em caso de falha; anteriormente retornava **`null`**. |

### Examples

**Exemplo #1 Exemplo de enumeração em uma faixa de pontos de código**

```
<?php
IntlChar::enumCharNames(0x2600, 0x2610, function($codepoint, $nameChoice, $name) {
    printf("U+%04x %s\n", $codepoint, $name);
});
?>
```

O exemplo acima produzirá:

```
U+2600 BLACK SUN WITH RAYS
U+2601 CLOUD
U+2602 UMBRELLA
U+2603 SNOWMAN
U+2604 COMET
U+2605 BLACK STAR
U+2606 WHITE STAR
U+2607 LIGHTNING
U+2608 THUNDERSTORM
U+2609 SUN
U+260a ASCENDING NODE
U+260b DESCENDING NODE
U+260c CONJUNCTION
U+260d OPPOSITION
U+260e BLACK TELEPHONE
U+260f WHITE TELEPHONE
```

### Veja também

- [IntlChar::charName()](intlchar.charname.md) - Obtém o nome de um caractere Unicode
- [IntlChar::charFromName()](intlchar.charfromname.md) - Encontra um caractere Unicode pelo nome e retorna seu valor de ponto de código

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
