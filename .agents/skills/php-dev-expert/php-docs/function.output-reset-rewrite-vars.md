# Redefine valores de reescritor de URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.output-reset-rewrite-vars.php

---

# output\_reset\_rewrite\_vars

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

output\_reset\_rewrite\_vars — Redefine valores de reescritor de URL

### Descrição

function **output\_reset\_rewrite\_vars**(): [bool](language.types.boolean.md)

Esta função remove todas as variáveis ​​de reescrita previamente definidas pela
função [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | Antes do PHP 7.1.0, as variáveis de reescrita definidas por [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md) usavam o mesmo buffer de saída "trans sid" do módulo de sessão. Desde o PHP 7.1.0, um buffer de saída dedicado é usado e **output\_reset\_rewrite\_vars()** apenas remove variáveis de reescrita definidas por [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md). |

### Examples

**Exemplo #1 Exemplo de **output\_reset\_rewrite\_vars()****

```
<?php
ini_set('url_rewriter.tags', 'a=href');

output_add_rewrite_var('var', 'value');

echo '<a href="file.php">link</a>';
ob_flush();

output_reset_rewrite_vars();
echo '<a href="file.php">link</a>';
?>
```

O exemplo acima produzirá:

```
<a href="file.php?var=value">link</a>
<a href="file.php">link</a>
```

### Veja também

- [output\_add\_rewrite\_var()](function.output-add-rewrite-var.md) - Adiciona valores de reescritor de URL
- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_list\_handlers()](function.ob-list-handlers.md) - Lista todos os manipuladores de saída em uso
- [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags)
- [url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.hosts)
- [session.trans\_sid\_tags](session.configuration.md#ini.session.trans-sid-tags)
- [session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts)

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
