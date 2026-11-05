# Carrega um novo dicionário com lista de palavras pessoal

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-new-personal.php

---

# pspell\_new\_personal

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_new\_personal — Carrega um novo dicionário com lista de palavras pessoal

### Descrição

function **pspell\_new\_personal**(  
    [string](language.types.string.md) `$filename`,  
    [string](language.types.string.md) `$language`,  
    [string](language.types.string.md) `$spelling` = "",  
    [string](language.types.string.md) `$jargon` = "",  
    [string](language.types.string.md) `$encoding` = "",  
    [int](language.types.integer.md) `$mode` = 0  
): [PSpell\Dictionary](class.pspell-dictionary.md)|[false](language.types.singleton.md)

**pspell\_new\_personal()** abre um novo dicionário com
uma lista de palavras pessoal. A lista de palavras pode ser modificada e salva com
[pspell\_save\_wordlist()](function.pspell-save-wordlist.md), se desejado. No entanto, os
pares de substituição não são salvos. Para salvar os pares de substituição,
deve-se criar uma configuração usando [pspell\_config\_create()](function.pspell-config-create.md),
definir o arquivo da lista de palavras pessoal com
[pspell\_config\_personal()](function.pspell-config-personal.md),
definir o arquivo para pares de substituição com
[pspell\_config\_repl()](function.pspell-config-repl.md) e abrir um novo dicionário com
[pspell\_new\_config()](function.pspell-new-config.md).

Para mais informações e exemplos, confira o manual do site do
pspell:[» http://aspell.net/](http://aspell.net/).

### Parâmetros

`filename`
:   O arquivo onde as palavras adicionadas à lista pessoal serão armazenadas.
    Deve ser um nome de arquivo absoluto começando com '/', pois, caso contrário,
    será relativo a $HOME, que é "/root" para a maioria dos sistemas, e
    provavelmente não é o que se deseja.

`language`
:   O código de idioma consiste no código de idioma ISO 639 de duas letras
    e um código de país ISO 3166 opcional de duas letras após um hífen
    ou sublinhado.

`spelling`
:   A grafia solicitada para idiomas com mais de uma grafia, como
    o inglês. Os valores conhecidos são 'american', 'british' e 'canadian'.

`jargon`
:   Informações extras para distinguir duas listas de palavras diferentes que têm
    os mesmos parâmetros de idioma e ortografia.

`encoding`
:   A codificação em que se espera que as palavras estejam. Os valores válidos são
    `utf-8`, `iso8859-*`,
    `koi8-r`, `viscii`,
    `cp1252`, `machine unsigned 16`,
    `machine unsigned 32`.

`mode`
:   O modo como o corretor ortográfico funcionará. Há vários modos disponíveis:

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

**Exemplo #1 **pspell\_new\_personal()****

```
<?php
$pspell = pspell_new_personal ("/var/dictionaries/custom.pws",
        "en", "", "", "", PSPELL_FAST|PSPELL_RUN_TOGETHER);
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
