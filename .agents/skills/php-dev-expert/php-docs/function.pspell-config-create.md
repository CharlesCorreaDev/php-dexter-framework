# Cria uma configuração usada para abrir um dicionário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.pspell-config-create.php

---

# pspell\_config\_create

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

pspell\_config\_create — Cria uma configuração usada para abrir um dicionário

### Descrição

function **pspell\_config\_create**(  
    [string](language.types.string.md) `$language`,  
    [string](language.types.string.md) `$spelling` = "",  
    [string](language.types.string.md) `$jargon` = "",  
    [string](language.types.string.md) `$encoding` = ""  
): [PSpell\Config](class.pspell-config.md)

Cria uma configuração usada para abrir um dicionário.

**pspell\_config\_create()** tem uma sintaxe muito semelhante a
[pspell\_new()](function.pspell-new.md). De fato, usar
**pspell\_config\_create()** imediatamente seguido por
[pspell\_new\_config()](function.pspell-new-config.md) produzirá exatamente o mesmo resultado.
No entanto, após criar uma nova configuração, também podem ser usadas as funções
**pspell\_config\_\*()** antes de chamar
[pspell\_new\_config()](function.pspell-new-config.md) para aproveitar algumas
funcionalidades avançadas.

Para mais informações e exemplos, confira o manual no site do
pspell:[» http://aspell.net/](http://aspell.net/).

### Parâmetros

`language`
:   O parâmetro language é o código do idioma, que consiste no
    código de idioma ISO 639 de duas letras e um código de país ISO 3166
    opcional de duas letras após um hífen ou sublinhado.

`spelling`
:   O parâmetro spelling é a ortografia solicitada para idiomas
    com mais de uma grafia, como o inglês. Os valores conhecidos são
    'american', 'british' e 'canadian'.

`jargon`
:   O parâmetro jargon contém informações extras para distinguir
    duas listas de palavras diferentes que possuem os mesmos parâmetros de idioma e
    ortografia.

`encoding`
:   O parâmetro encoding é a codificação em que se espera que as palavras
    estejam. Os valores válidos são 'utf-8', 'iso8859-\*', 'koi8-r',
    'viscii', 'cp1252', 'machine unsigned 16', 'machine unsigned
    32'. Este parâmetro ainda não foi testado, portanto, tenha cuidado ao
    usá-lo.

### Valor Retornado

Retorna uma instância de [PSpell\Config](class.pspell-config.md).

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Retorna uma instância de [PSpell\Config](class.pspell-config.md) agora; anteriormente, um [resource](language.types.resource.md) era retornado. |

### Examples

**Exemplo #1 **pspell\_config\_create()****

```
<?php
$pspell_config = pspell_config_create("en");
pspell_config_personal($pspell_config, "/var/dictionaries/custom.pws");
pspell_config_repl($pspell_config, "/var/dictionaries/custom.repl");
$pspell = pspell_new_personal($pspell_config, "en");
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
