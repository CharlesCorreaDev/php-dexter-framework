# Converte o primeiro byte de uma string para um valor entre 0 e 255

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ord.php

---

# ord

(PHP 4, PHP 5, PHP 7, PHP 8)

ord — Converte o primeiro byte de uma string para um valor entre 0 e 255

### Descrição

function **ord**([string](language.types.string.md) `$character`): [int](language.types.integer.md)

Interpreta o valor binário do primeiro byte de
`character` como um inteiro sem sinal entre 0 e 255.

Se a string estiver em codificação de um byte, como ASCII, ISO-8859 ou Windows 1252, é equivalente a retornar a posição de um caractere na tabela de mapeamento do conjunto de caracteres. Entretanto, note que esta função não tem ciência da codificação da string, e em particular nunca irá identificar um ponto de código Unicode em uma codificação multi-byte como UTF-8 ou UTF-16.

Esta função complementa a função [chr()](function.chr.md).

### Parâmetros

`character`
:   A string que terá o primeiro caractere avaliado.

### Valor Retornado

Um inteiro entre 0 e 255.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Passar uma string que não seja um byte único foi descontinuado. |

### Examples

**Exemplo #1 Exemplo de **ord()****

```
<?php
$str = "\n";
if (ord($str) == 10) {
    echo "O primeiro caractere de \$str é uma nova linha.\n";
}
?>
```

**Exemplo #2 Examinando os bytes individuais de uma string UTF-8**

```
<?php
$str = "🐘";
for ( $pos=0; $pos < strlen($str); $pos ++ ) {
 $byte = substr($str, $pos);
 echo 'Byte ' . $pos . ' de $str tem valor ' . ord($byte) . PHP_EOL;
}
?>
```

O exemplo acima produzirá:

Byte 0 de $str tem valor 240  
Byte 1 de $str tem valor 159  
Byte 2 de $str tem valor 144  
Byte 3 de $str tem valor 152

### Veja também

- [chr()](function.chr.md) - Gera uma string de um byte a partir de um número
- [» Tabela ASCII](https://www.man7.org/linux/man-pages/man7/ascii.7.html)
- [mb\_ord()](function.mb-ord.md) - Obtém o ponto de código Unicode do caractere
- [IntlChar::ord()](intlchar.ord.md) - Retorna o valor do ponto de código Unicode do caractere

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
