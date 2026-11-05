# Define o valor de uma opção de configuração

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ini-set.php

---

# ini\_set

(PHP 4, PHP 5, PHP 7, PHP 8)

ini\_set — Define o valor de uma opção de configuração

### Descrição

function **ini\_set**([string](language.types.string.md) `$option`, [string](language.types.string.md)|[int](language.types.integer.md)|[float](language.types.float.md)|[bool](language.types.boolean.md)|[null](language.types.null.md) `$value`): [string](language.types.string.md)|[false](language.types.singleton.md)

Define o valor da opção de configuração fornecida. A opção de configuração
manterá este novo valor durante a execução do script e será restaurada
ao final do script.

### Parâmetros

`option`
:   Nem todas as opções disponíveis podem ser alteradas usando
    **ini\_set()**. Há uma lista de todas as opções disponíveis
    no [apêndice](ini.list.md).

`value`
:   O novo valor da opção.

### Valor Retornado

Retorna o valor antigo em caso de sucesso, **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | `value` agora aceita qualquer tipo escalar (incluindo **`null`**). Anteriormente, apenas valores [string](language.types.string.md) eram aceitos. |

### Examples

**Exemplo #1 Configurando uma opção ini**

```
<?php
echo ini_get('display_errors');

if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

echo ini_get('display_errors');
?>
```

### Veja também

- [get\_cfg\_var()](function.get-cfg-var.md) - Obtém o valor de uma opção de configuração do PHP
- [ini\_get()](function.ini-get.md) - Obtém o valor de uma opção de configuração
- [ini\_get\_all()](function.ini-get-all.md) - Obtém todas as opções de configuração
- [ini\_restore()](function.ini-restore.md) - Restaura o valor de uma opção de configuração
- [Como alterar as definições de configuração](configuration.changes.md)

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
