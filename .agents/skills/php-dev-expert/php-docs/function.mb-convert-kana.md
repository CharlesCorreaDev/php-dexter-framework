# Converte "kana" de um tipo para outro ("zen-kaku", "han-kaku" e mais)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.mb-convert-kana.php

---

# mb\_convert\_kana

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

mb\_convert\_kana — Converte "kana" de um tipo para outro ("zen-kaku", "han-kaku" e mais)

### Descrição

function **mb\_convert\_kana**([string](language.types.string.md) `$string`, [string](language.types.string.md) `$mode` = "KV", [?](language.types.null.md)[string](language.types.string.md) `$encoding` = **`null`**): [string](language.types.string.md)

Realiza uma conversão "han-kaku" - "zen-kaku" para a [string](language.types.string.md) `string`.
Esta função é útil apenas para o japonês.

### Parâmetros

`string`
:   A [string](language.types.string.md) a ser convertida.

`mode`
:   A opção de conversão.

    Especifique com uma combinação das seguintes opções.

    **Opções de Conversão Aplicáveis**

    | Opção | Significado |
    | --- | --- |
    | `r` | Converte alfabetos "zen-kaku" para "han-kaku" |
    | `R` | Converte alfabetos "han-kaku" para "zen-kaku" |
    | `n` | Converte números "zen-kaku" para "han-kaku" |
    | `N` | Converte números "han-kaku" para "zen-kaku" |
    | `a` | Converte alfabetos e números "zen-kaku" para "han-kaku" |
    | `A` | Converte alfabetos e números "han-kaku" para "zen-kaku" (Caracteres incluídos nas opções "a", "A" são U+0021 - U+007E, excluindo U+0022, U+0027, U+005C, U+007E) |
    | `s` | Converte espaço "zen-kaku" para "han-kaku" (U+3000 -> U+0020) |
    | `S` | Converte espaço "han-kaku" para "zen-kaku" (U+0020 -> U+3000) |
    | `k` | Converte "zen-kaku kata-kana" para "han-kaku kata-kana" |
    | `K` | Converte "han-kaku kata-kana" para "zen-kaku kata-kana" |
    | `h` | Converte "zen-kaku hira-gana" para "han-kaku kata-kana" |
    | `H` | Converte "han-kaku kata-kana" para "zen-kaku hira-gana" |
    | `c` | Converte "zen-kaku kata-kana" para "zen-kaku hira-gana" |
    | `C` | Converte "zen-kaku hira-gana" para "zen-kaku kata-kana" |
    | `V` | Colapsa a notação de som sonoro e converte-os em um caractere. Use com "K","H" |

`encoding`
:   O parâmetro `encoding`
    é a codificação de caracteres. Se for omitido ou **`null`**, o valor da codificação
    de caracteres interna será usado.

### Valor Retornado

A [string](language.types.string.md) convertida.

### Erros/Exceções

Gera um [ValueError](class.valueerror.md) se a combinação de
diferentes `mode`s for inválida.
Por exemplo, `"sS"`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.2.0 | Um [ValueError](class.valueerror.md) agora é gerado se a combinação de diferentes `mode`s for inválida. |
| 8.0.0 | O parâmetro `encoding` agora pode ser nulo. |

### Examples

**Exemplo #1 Exemplo de **mb\_convert\_kana()****

```
<?php
/* Converte todos "han-kaku" "kata-kana" para "zen-kaku" "hira-gana" */
echo mb_convert_kana('ﾔﾏﾀﾞ ﾊﾅｺ', "HV") . "\n";

/* Converte "han-kaku" "kata-kana" para "zen-kaku" "kata-kana"
   e alfanuméricos "zen-kaku" para "han-kaku" */
echo mb_convert_kana('ｺｳｻﾞﾊﾞﾝｺﾞｳ ０１２３４５６', "KVa") . "\n";
?>
```

O exemplo acima produzirá:

```
やまだ はなこ
コウザバンゴウ 0123456
```

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
