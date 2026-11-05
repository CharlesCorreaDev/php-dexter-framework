# Carrega um novo dicionário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-new.php

---

# pspell\_new

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_new — Carrega um novo dicionário

### Descrição

function **pspell\_new**(  
    [string](language.types.string.md) `$language`,  
    [string](language.types.string.md) `$spelling` = "",  
    [string](language.types.string.md) `$jargon` = "",  
    [string](language.types.string.md) `$encoding` = "",  
    [int](language.types.integer.md) `$mode` = 0  
): [PSpell\Dictionary](class.pspell-dictionary.md)|[false](language.types.singleton.md)

**pspell\_new()** abre um novo dicionário e
retorna uma instância de [PSpell\Dictionary](class.pspell-dictionary.md) para uso em outras funções
pspell.

Para mais informações e exemplos, confira o manual no site do
pspell:[» http://aspell.net/](http://aspell.net/).

### Parâmetros

`language`
:   O parâmetro language é o código do idioma, que consiste no código de
    idioma ISO 639 de duas letras e um código de país ISO 3166 opcional de
    duas letras após um hífen ou sublinhado.

`spelling`
:   O parâmetro spelling é a ortografia solicitada para idiomas
    com mais de uma ortografia, como o inglês. Os valores conhecidos são
    'american', 'british' e 'canadian'.

`jargon`
:   O parâmetro jargon contém informações extras para distinguir
    duas listas de palavras diferentes que possuem os mesmos parâmetros de idioma e
    ortografia.

`encoding`
:   O parâmetro de codificação é a codificação em que se espera que as palavras
    estejam. Os valores válidos são 'utf-8', 'iso8859-\*', 'koi8-r',
    'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
    32'. Este parâmetro ainda não foi testado, portanto, tenha cuidado ao
    usá-lo.

`mode`
:   O parâmetro mode define o modo em que o corretor ortográfico funcionará.
    Há vários modos disponíveis:

    - **`PSPELL_FAST`** - Modo rápido (menor número de
      sugestões)
    - **`PSPELL_NORMAL`** - Modo normal (mais sugestões)
    - **`PSPELL_BAD_SPELLERS`** - Modo lento (muitas
      sugestões)
    - **`PSPELL_RUN_TOGETHER`** - Considera palavras que se juntam
      como palavras compostas legais. Ou seja, "thecat" será uma palavra composta legal em inglês,
      embora deva haver um espaço entre as duas palavras. Alterar esta
      configuração afeta apenas os resultados retornados por
      [pspell\_check()](function.pspell-check.md); [pspell\_suggest()](function.pspell-suggest.md)
      ainda retornará sugestões.

    Mode é uma máscara de bits construída a partir das diferentes constantes listadas acima.
    No entanto, **`PSPELL_FAST`**,
    **`PSPELL_NORMAL`** e
    **`PSPELL_BAD_SPELLERS`** são mutuamente exclusivas, portanto,
    deve-se selecionar apenas uma delas.

### Valor Retornado

Retorna uma instância de [PSpell\Dictionary](class.pspell-dictionary.md) em caso de sucesso, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Agora, retorna uma instância de [PSpell\Dictionary](class.pspell-dictionary.md); anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 **pspell\_new()****

```
<?php
$pspell = pspell_new("en", "", "", "",
                     (PSPELL_FAST|PSPELL_RUN_TOGETHER));
?>
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
