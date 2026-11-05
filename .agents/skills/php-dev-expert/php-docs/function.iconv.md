# Converte uma string de uma codificação de caracteres para outra

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.iconv.php

---

# iconv

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

iconv — Converte uma string de uma codificação de caracteres para outra

### Descrição

function **iconv**([string](language.types.string.md) `$from_encoding`, [string](language.types.string.md) `$to_encoding`, [string](language.types.string.md) `$string`): [string](language.types.string.md)|[false](language.types.singleton.md)

Converte `string` de `from_encoding`
para `to_encoding`.

### Parâmetros

`from_encoding`
:   A codificação atual usada para interpretar `string`.

`to_encoding`
:   A codificação desejada do resultado.

    Se a string `//TRANSLIT` for anexada a
    `to_encoding`, a transliteração será ativada. Isso
    significa que, quando um caractere não pode ser representado no conjunto de caracteres de destino,
    ele pode ser aproximado por meio de um ou vários caracteres de aparência
    semelhante. Se a string `//IGNORE` for anexada,
    os caracteres que não podem ser representados no charset de destino são
    descartados silenciosamente. Caso contrário, **`E_NOTICE`** é gerado e
    a função retornará **`false`**.

    **Cuidado**

    Como `//TRANSLIT` funciona exatamente depende da
    implementação do iconv() do sistema (cf. **`ICONV_IMPL`**).
    Algumas implementações são conhecidas por ignorar `//TRANSLIT`,
    então a conversão provavelmente falhará para caracteres que são ilegais
    para `to_encoding`.

`string`
:   A [string](language.types.string.md) a ser convertida

### Valor Retornado

Retorna a string convertida, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo **iconv()****

```
<?php
$text = "Este é o símbolo do Euro '€'.";

echo 'Original : ', $text, PHP_EOL;
echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), PHP_EOL;
echo 'Plain    : ', iconv("UTF-8", "ISO-8859-1", $text), PHP_EOL;

?>
```

O exemplo acima produzirá
algo semelhante a:

```
Original : Este é o símbolo do Euro '€'.
TRANSLIT : Este é o símbolo do Euro 'EUR'.
IGNORE   : Este é o símbolo do Euro ''.
Plain    :
Notice: iconv(): Detected an illegal character in input string in .\iconv-example.php on line 7
```

### Notas

> **Nota**:
>
> As codificações de caracteres e as opções disponíveis dependem da implementação instalada
> do iconv. Se o argumento para `from_encoding` ou
> `to_encoding` não for suportado no sistema atual, **`false`**
> será retornado.

### Veja também

- [mb\_convert\_encoding()](function.mb-convert-encoding.md) - Converte uma string de uma codificação de caracteres para outra
- [UConverter::transcode()](uconverter.transcode.md) - Converte uma string de uma codificação de caracteres para outra

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
