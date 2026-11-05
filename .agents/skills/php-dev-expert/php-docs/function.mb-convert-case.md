# Realiza a conversão de caixa em uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-convert-case.php

---

# mb\_convert\_case

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mb\_convert\_case — Realiza a conversão de caixa em uma string

### Descrição

function **mb\_convert\_case**([string](language.types.string.md) `$string`, [int](language.types.integer.md) `$mode`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realiza a conversão de caixa em uma [string](language.types.string.md), convertida da maneira especificada por
`mode`.

### Parâmetros

`string`
:   A [string](language.types.string.md) sendo convertida.

`mode`
:   O modo de conversão. Pode ser um dos
    **`MB_CASE_UPPER`**,
    **`MB_CASE_LOWER`**,
    **`MB_CASE_TITLE`**,
    **`MB_CASE_FOLD`**,
    **`MB_CASE_UPPER_SIMPLE`**,
    **`MB_CASE_LOWER_SIMPLE`**,
    **`MB_CASE_TITLE_SIMPLE`**,
    **`MB_CASE_FOLD_SIMPLE`**.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

Uma versão da `string` com conversão de caixa conforme
especificado por `mode`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Implementadas regras condicionais de maiúsculas/minúsculas para a letra grega sigma que só se aplicam aos modos **`MB_CASE_LOWER`** e **`MB_CASE_TITLE`**, e não a **`MB_CASE_LOWER_SIMPLE`** e **`MB_CASE_TITLE_SIMPLE`**. |
| 7.3.0 | Adicionado suporte para **`MB_CASE_FOLD`**, **`MB_CASE_UPPER_SIMPLE`**, **`MB_CASE_LOWER_SIMPLE`**, **`MB_CASE_TITLE_SIMPLE`**, e **`MB_CASE_FOLD_SIMPLE`** como `mode`. |

### Examples

**Exemplo #1 Exemplo de **mb\_convert\_case()****

```
<?php
$str = "mary had a Little lamb and she loved it so";
$str = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");
echo $str, PHP_EOL;
$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
echo $str, PHP_EOL;
?>
```

**Exemplo #2 Exemplo de **mb\_convert\_case()** com texto UTF-8 não latino**

```
<?php
$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str = mb_convert_case($str, MB_CASE_UPPER, "UTF-8");
echo $str, PHP_EOL;
$str = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
echo $str, PHP_EOL;
?>
```

### Notas

Ao contrário das funções padrão de conversão de caixa, como
[strtolower()](function.strtolower.md) e [strtoupper()](function.strtoupper.md),
a conversão de caixa é realizada com base nas propriedades dos caracteres
Unicode. Assim, o comportamento desta função não é afetado
pelas configurações de localidade e ela pode converter qualquer caractere que tenha
a propriedade 'alfabética', como o a-umlaut (ä).

Para obter mais informações sobre as propriedades Unicode, consulte [» https://www.unicode.org/reports/tr21/](https://www.unicode.org/reports/tr21/).

### Veja também

- [mb\_strtolower()](function.mb-strtolower.md) - Torna uma string minúscula
- [mb\_strtoupper()](function.mb-strtoupper.md) - Faz uma string ficar em maiúsculas
- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas
- [strtoupper()](function.strtoupper.md) - Converte uma string em maiúsculas
- [ucfirst()](function.ucfirst.md) - Transforma o primeiro caractere de uma string em maiúsculo
- [ucwords()](function.ucwords.md) - Converte para maiúsculas o primeiro caractere de cada palavra

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
