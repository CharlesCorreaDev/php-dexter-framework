# Encontra o tamanho do segmento inicial que não corresponde à máscara

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.strcspn.php

---

# strcspn

(PHP 4, PHP 5, PHP 7, PHP 8)

strcspn — Encontra o tamanho do segmento inicial que não corresponde à máscara

### Descrição

function **strcspn**(  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `$characters`,  
    [int](language.types.integer.md) `$offset` = 0,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**  
): [int](language.types.integer.md)

Retorna o tamanho do segmento inicial de
`string` que *não*
contiver nenhum dos caracteres definidos no parâmetro `characters`.

Se `offset` e `length`
forem omitidos, então tudo da `string` será
examinado. Se forem incluídos, então o efeito será o mesmo que
chamar `strcspn(substr($string, $offset, $length),
$characters)` (consulte [substr](function.substr.md)
para mais informações).

### Parâmetros

`string`
:   O string a ser examinado.

`characters`
:   A string contendo os caracteres não permitidos.

`offset`
:   A posição na `string` para
    iniciar a pesquisa.

    Se `offset` for informado e não negativo,
    a função **strcspn()** começará a
    examinar a `string` na posição
    `offset`. Por exemplo, na
    string '`abcdef`', o caractere na
    posição `0` é '`a`', na
    posição `2` é
    '`c`', e assim por diante.

    Se `offset` for informado e negativo,
    a função **strcspn()** começará a
    examinar a `string` na posição
    `offset` a partir do final
    da `string`.

`length`
:   O tamanho do segmento da `string`
    a ser examinado.

    Se `length` for informado e não negativo,
    a `string` será examinada pelo
    número de caracteres em `length` a partir
    da posição inicial.

    Se `length` for informado e negativo,
    a `string` será examinada a partir
    da posição inicial até o número de caracteres informado em `length`
    contados a partir do final da `string`.

### Valor Retornado

Retorna o tamanho do segmento inicial da `string`
que consiste inteiramente de caracteres que *não* estejam em `characters`.

> **Nota**:
>
> Quando `offset` estiver definido, o tamanho retornado
> é contado a partir deste posição, e não a partir do início da
> `string`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Antes do PHP 8.4.0, quando `characters` fosse uma string vazia, a pesquisa incorretamente encerraria no primeiro byte nulo em `string`. |
| 8.0.0 | `length` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **strcspn()****

```
<?php
$a = strcspn('banana', 'a');
$b = strcspn('banana', 'abcd');
$c = strcspn('banana', 'z');
$d = strcspn('abcdhelloabcd', 'a', -9);
$e = strcspn('abcdhelloabcd', 'a', -9, -5);

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>
```

O exemplo acima produzirá:

```
int(1)
int(0)
int(6)
int(5)
int(4)
```

### Notas

> **Nota**:
>
> Esta função é
> compatível com dados binários.

### Veja também

- [strspn()](function.strspn.md) - Encontra o comprimento do segmento inicial de uma string composta
  totalmente de caracteres contidos em uma máscara informada

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
