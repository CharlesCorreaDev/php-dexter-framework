# Gera uma string de um byte a partir de um número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.chr.php

---

# chr

(PHP 4, PHP 5, PHP 7, PHP 8)

chr — Gera uma string de um byte a partir de um número

### Descrição

function **chr**([int](language.types.integer.md) `$codepoint`): [string](language.types.string.md)

Retorna uma string de um caractere contendo o caractere especificado
pela interpretação do parâmetro `codepoint` como um inteiro sem sinal.

Esta função pode ser usada para criar uma string de um caracteres em uma codificação de 1-byte como ASCII, ISO-8859, ou Windows 1252, passando-se a posição do caractere desejado na tabela de mapeamento da codificação. Entretanto, observe que esta função não tem ciência de codificação de strings e, em particular, não pode receber um valor de ponto de código Unicode para gerar uma string em uma codificação multi-byte como UTF-8 ou UTF-16.

Esta função é complementar à função [ord()](function.ord.md).

### Parâmetros

`codepoint`
:   Um inteiro entre 0 e 255.

    Valores fora do intervalo válido (0..255) sofrerão operação binária AND com o valor 255,
    o que é equivalente ao algoritmo a seguir:

    ```
    while ($bytevalue < 0) {
        $bytevalue += 256;
    }
    $bytevalue %= 256;
    ```

### Valor Retornado

Uma string de um caractere contendo o byte especificado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Passar inteiros fora do intervalo `[0, 255]` foi descontinuado. |
| 7.4.0 | A função não mais aceita silenciosamente códigos não suportados no parâmetro `codepoint`, convertendo-os para `0`. |

### Examples

**Exemplo #1 Exemplo de **chr()****

```
<?php
// Assume que a string será usada como codificação ASCII ou compatível

$str = "A string termina com ESC: ";
$str .= chr(27); /* adiciona um caractere ESC ao final de $str */
echo $str, PHP_EOL;

/* Frequentemente isto é mais útil: */
$str = sprintf("A string termina com ESC: %c", 27);
echo $str, PHP_EOL;
?>
```

**Exemplo #2 Comportamento com parâmetro fora dos limites**

```
<?php
echo chr(-159), chr(833), PHP_EOL;
?>
```

O exemplo acima produzirá:

```
aA
```

**Exemplo #3 Construindo uma string UTF-8 a partir de bytes individuais**

```
<?php
$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str, PHP_EOL;
?>
```

O exemplo acima produzirá:

🐘

### Veja também

- [sprintf()](function.sprintf.md) - Retona uma string formatada com string de formatação `%c`
- [ord()](function.ord.md) - Converte o primeiro byte de uma string para um valor entre 0 e 255
- Uma [» tabela ASCII](https://www.man7.org/linux/man-pages/man7/ascii.7.html)
- [mb\_chr()](function.mb-chr.md) - Retorna um caractere pelo valor do ponto de código Unicode
- [IntlChar::chr()](intlchar.chr.md) - Retorna um caractere Unicode por valor de ponto de código

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
