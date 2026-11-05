# Obtém o valor de uma opção de configuração do PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-cfg-var.php

---

# get\_cfg\_var

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_cfg\_var — Obtém o valor de uma opção de configuração do PHP

### Descrição

function **get\_cfg\_var**([string](language.types.string.md) `$option`): [string](language.types.string.md)|[array](language.types.array.md)|[false](language.types.singleton.md)

Obtém o valor de uma opção de configuração do PHP definida em `option`.

Esta função não retornará informações de configuração definidas quando o PHP
foi compilado ou lidas de um arquivo de configuração do Apache.

Para verificar se o sistema está usando um [arquivo de configuração](configuration.file.md), tente recuperar o
valor da configuração cfg\_file\_path. Se estiver disponível, um
arquivo de configuração está sendo usado.

### Parâmetros

`option`
:   O nome da opção de configuração.

### Valor Retornado

Retorna o valor atual da variável de configuração do PHP especificada por
`option` ou **`false`** se ocorrer um erro.

### Veja também

- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [ini\_get\_all()](function.ini-get-all.md) - Obtém todas as opções de configuração

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
