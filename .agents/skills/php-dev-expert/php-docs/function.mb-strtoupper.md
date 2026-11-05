# Faz uma string ficar em maiúsculas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strtoupper.php

---

# mb\_strtoupper

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mb\_strtoupper — Faz uma string ficar em maiúsculas

### Descrição

function **mb\_strtoupper**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Retorna `string`
com todos os caracteres alfabéticos convertidos para maiúsculas.

### Parâmetros

`string`
:   A [string](language.types.string.md) que será convertida para maiúsculas.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

`string` com todos os caracteres alfabéticos convertidos para maiúsculas.

### Examples

**Exemplo #1 Exemplo de **mb\_strtoupper()****

```
<?php
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = mb_strtoupper($str);
echo $str; // Imprime MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
?>
```

**Exemplo #2 Exemplo de **mb\_strtoupper()** com texto UTF-8 não latino**

```
<?php
$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str = mb_strtoupper($str, 'UTF-8');
echo $str; // Imprime ΤΆΧΙΣΤΗ ΑΛΏΠΗΞ ΒΑΦΉΣ ΨΗΜΈΝΗ ΓΗ, ΔΡΑΣΚΕΛΊΖΕΙ ΥΠΈΡ ΝΩΘΡΟΎ ΚΥΝΌΣ
?>
```

### Notas

Ao contrário de [strtoupper()](function.strtoupper.md), 'alfabético' é
determinado pelas propriedades de caracteres Unicode. Assim, o comportamento desta
função não é afetado pelas configurações de localidade e pode converter qualquer
caractere que tenha a propriedade 'alfabético', como a-umlaut (ä).

Para obter mais informações sobre as propriedades Unicode, consulte [» https://www.unicode.org/reports/tr21/](https://www.unicode.org/reports/tr21/).

### Veja também

- [mb\_strtolower()](function.mb-strtolower.md) - Torna uma string minúscula
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string
- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas

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
