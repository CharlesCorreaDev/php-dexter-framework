# Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.libxml-use-internal-errors.php

---

# libxml\_use\_internal\_errors

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

libxml\_use\_internal\_errors — 
Desabilita erros da libxml e permite que o usuário obtenha informações de erro conforme necessário

### Descrição

function **libxml\_use\_internal\_errors**([?](language.types.null.md)[bool](language.types.boolean.md) `$use_errors` = **`null`**): [bool](language.types.boolean.md)

A função **libxml\_use\_internal\_errors()** permite desabilitar
os erros padrão da libxml e habilitar o tratamento de erros do usuário.

### Parâmetros

`use_errors`
:   Habilita (**`true`**) ou desabilita (**`false`**) o tratamento de erros do usuário. Desabilitar também limpará quaisquer erros libxml existentes.

### Valor Retornado

Esta função retorna o valor anterior de
`use_errors`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `use_errors` agora pode ser nulo. Anteriormente, o padrão era **`false`**. |

### Examples

**Exemplo #1 Exemplo de **libxml\_use\_internal\_errors()****

Este exemplo demonstra o uso básico dos erros da libxml e o valor retornado
por esta função.

```
<?php

// habilita o tratamento de erros do usuário
var_dump(libxml_use_internal_errors(true));

// carrega o documento
$doc = new DOMDocument;

if (!$doc->load('arquivo.xml')) {
    foreach (libxml_get_errors() as $erro) {
        // trata os erros aqui
    }

    libxml_clear_errors();
}

?>
```

O exemplo acima produzirá:

```
bool(false)
```

### Veja também

- [libxml\_clear\_errors()](function.libxml-clear-errors.md) - Limpa o buffer de erro da libxml
- [libxml\_get\_errors()](function.libxml-get-errors.md) - Obtém um array de erros

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
