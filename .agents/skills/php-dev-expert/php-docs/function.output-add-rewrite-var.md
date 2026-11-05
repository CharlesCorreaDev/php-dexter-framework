# Adiciona valores de reescritor de URL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.output-add-rewrite-var.php

---

# output\_add\_rewrite\_var

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

output\_add\_rewrite\_var — Adiciona valores de reescritor de URL

### Descrição

function **output\_add\_rewrite\_var**([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [bool](language.types.boolean.md)

Esta função inicia o manipulador de buffer de saída `'URL-Rewriter'`
se ele não estiver ativo,
armazena os parâmetros `name` e `value`,
e quando o buffer é descarregado reescreve os URLs
e formulários com base nas configurações ini aplicáveis.
As chamadas subsequentes a esta função armazenarão todos os pares nome/valor adicionais
até que o manipulador seja desligado.

Quando o buffer de saída é descarregado
(chamando [ob\_flush()](function.ob-flush.md), [ob\_end\_flush()](function.ob-end-flush.md),
[ob\_get\_flush()](function.ob-get-flush.md) ou no final do script),
o manipulador `'URL-Rewriter'` adiciona os pares nome/valor
como parâmetros de consulta para URLs em atributos de etiquetas HTML
e adiciona campos ocultos aos formulários com base nos valores das
diretivas de configuração
[url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags) e
[url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.hosts).

Cada par nome/valor adicionado ao manipulador `'URL-Rewriter'`
é adicionado aos URLs e/ou formulários,
mesmo que isso resulte em parâmetros de consulta de URL duplicados
ou elementos com atributos de mesmo nome.

> **Nota**:
>
> Depois que o manipulador `'URL-Rewriter'` for desligado,
> ele não poderá ser iniciado novamente.

**Aviso**

Antes do PHP 8.4.0, os hosts a serem sobrescritos eram definidos em
[session.trans\_sid\_hosts](session.configuration.md#ini.session.trans-sid-hosts)
ao invés de [url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.hosts).

### Parâmetros

`name`
:   O nome da variável.

`value`
:   O valor da variável.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.1.0 | A partir do PHP 7.1.0, um buffer de saída dedicado é usado, [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags) é usado somente para funções de saída e [url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.tags) está disponível. Antes do PHP 7.1.0, variáveis ​​de reescrita definidas por **output\_add\_rewrite\_var()** compartilhavam um buffer de saída com suporte transparente para ID de sessão (veja [session.trans\_sid\_tags](session.configuration.md#ini.session.trans-sid-tags)). |

### Examples

**Exemplo #1 Exemplo de **output\_add\_rewrite\_var()****

```
<?php
ini_set('url_rewriter.tags', 'a=href,form=');

output_add_rewrite_var('var', 'value');

// alguns "links"
echo '<a href="file.php">link</a>
<a href="http://example.com">link2</a>';

// um formulário
echo '<form action="script.php" method="post">
<input type="text" name="var2" />
</form>';

print_r(ob_list_handlers());
?>
```

O exemplo acima produzirá:

```
<a href="file.php?var=value">link</a>
<a href="http://example.com">link2</a>

<form action="script.php" method="post">
<input type="hidden" name="var" value="value" />
<input type="text" name="var2" />
</form>

Array
(
    [0] => URL-Rewriter
)
```

### Veja também

- [output\_reset\_rewrite\_vars()](function.output-reset-rewrite-vars.md) - Redefine valores de reescritor de URL
- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_list\_handlers()](function.ob-list-handlers.md) - Lista todos os manipuladores de saída em uso
- [url\_rewriter.tags](outcontrol.configuration.md#ini.url-rewriter.tags)
- [url\_rewriter.hosts](outcontrol.configuration.md#ini.url-rewriter.hosts)

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
