# Retorna uma string que descreve o código de erro informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-strerror.php

---

# curl\_strerror

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

curl\_strerror — Retorna uma string que descreve o código de erro informado

### Descrição

function **curl\_strerror**([int](language.types.integer.md) `$error_code`): [?](language.types.null.md)[string](language.types.string.md)

Retorna um texto descrevendo o código de erro informado como parâmetro.

### Parâmetros

`error_code`
:   Uma das constantes de [» códigos de erros do cURL](https://curl.haxx.se/libcurl/c/libcurl-errors.html).

### Valor Retornado

Retorna a descrição do erro ou **`null`** se o código de erro for inválido.

### Examples

**Exemplo #1 Exemplo de [curl\_errno()](function.curl-errno.md)**

```
<?php
// Cria um identificador curl com um protocolo escrito de forma incorreta na URL
$ch = curl_init("htp://example.com/");

// Envia a requisição
curl_exec($ch);

// Verifica se houve erros e exibe a mensagem de erro
if($errno = curl_errno($ch)) {
    $error_message = curl_strerror($errno);
    echo "Erro cURL ({$errno}):\n {$error_message}";
}
?>
```

O exemplo acima produzirá:

```
Erro cURL (1):
 Unsupported protocol
```

### Veja também

- [curl\_errno()](function.curl-errno.md) - Retorna o número do último erro
- [curl\_error()](function.curl-error.md) - Retorna uma string contendo o último erro da sessão atual
- [» Códigos de erros do cURL](https://curl.haxx.se/libcurl/c/libcurl-errors.html)

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
