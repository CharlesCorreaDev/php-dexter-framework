# Obtém a descrição do último erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.intl-get-error-message.php

---

# intl\_get\_error\_message

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.0)

intl\_get\_error\_message — Obtém a descrição do último erro

### Descrição

function **intl\_get\_error\_message**(): [string](language.types.string.md)

Obtém mensagem de erro da última função de internacionalização chamada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Descrição de um erro ocorrido na última chamada de função da API.

### Examples

**Exemplo #1 Exemplo de **intl\_get\_error\_message()****

```
<?php

$bundle = resourcebundle_create('en_US', __DIR__ . '/nao-existe', false);

if ($bundle === null) {
    $errorCode = intl_get_error_code();

    printf("Nome do erro: %s\n", intl_error_name($errorCode));
    printf("Mensagem de erro: %s\n", intl_get_error_message());
}
```

O exemplo acima produzirá:

```
Nome do erro: U_MISSING_RESOURCE_ERROR
Mensagem de erro: resourcebundle_create(): Cannot load libICU resource bundle: U_MISSING_RESOURCE_ERROR
```

### Veja também

- [intl\_error\_name()](function.intl-error-name.md) - Obtém nome simbólico para um código de erro informado
- [intl\_get\_error\_code()](function.intl-get-error-code.md) - Obtém o último código de erro
- [intl\_is\_failure()](function.intl-is-failure.md) - Verifica se o código de erro fornecido indica falha
- [collator\_get\_error\_message()](collator.geterrormessage.md) - Obtém o texto para o último código de erro do agrupador
- [numfmt\_get\_error\_message()](numberformatter.geterrormessage.md) - Obtém a última mensagem de erro do formatador

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
