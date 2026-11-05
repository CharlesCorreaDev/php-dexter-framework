# Torna uma string minúscula

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-strtolower.php

---

# mb\_strtolower

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

mb\_strtolower — Torna uma string minúscula

### Descrição

function **mb\_strtolower**([string](language.types.string.md) `$string`, [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Retorna a `string`
com todos os caracteres alfabéticos convertidos em minúsculas.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser convertida em minúsculas.

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

`string` com todos os caracteres alfabéticos convertidos em minúsculas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Implementadas regras condicionais de maiúscula/minúscula para a letra grega sigma. |

### Examples

**Exemplo #1 Exemplo de **mb\_strtolower()****

```
<?php
$str = "Maria Tinha Um Cordeirinho e Ela O AMAVA";
$str = mb_strtolower($str);
echo $str; // Imprime maria tinha um cordeirinho e ela o amava
?>
```

**Exemplo #2 Exemplo de **mb\_strtolower()** com texto UTF-8 não-Latin**

```
<?php
$str = "Τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός";
$str = mb_strtolower($str, 'UTF-8');
echo $str; // Imprime τάχιστη αλώπηξ βαφής ψημένη γη, δρασκελίζει υπέρ νωθρού κυνός
?>
```

### Notas

Ao contrário de [strtolower()](function.strtolower.md), 'alphabetic' é
determinado pelas propriedades de caractere Unicode.
Portanto, o comportamento desta função não é afetado pelas configurações de
localidade e pode converter qualquer caractere com uma propriedade 'alphabetic', como um trema (ä).

Para obter mais informações sobre as propriedades Unicode, consulte
[» https://www.unicode.org/reports/tr21/](https://www.unicode.org/reports/tr21/).

### Veja também

- [mb\_strtoupper()](function.mb-strtoupper.md) - Faz uma string ficar em maiúsculas
- [mb\_convert\_case()](function.mb-convert-case.md) - Realiza a conversão de caixa em uma string
- [strtolower()](function.strtolower.md) - Converte uma string para minúsculas

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
