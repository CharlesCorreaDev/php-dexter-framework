# Lê e analisa o corpor da requisição e retorna o resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.request-parse-body.php

---

# request\_parse\_body

(PHP 8 >= 8.4.0)

request\_parse\_body — Lê e analisa o corpor da requisição e retorna o resultado

### Descrição

function **request\_parse\_body**([?](language.types.null.md)[array](language.types.array.md) `$options` = **`null`**): [array](language.types.array.md)

Esta função lê o corpo da requisição e analisa-o de acordo com o
cabeçalho `Content-Type`. Atualmente, dois tipos de conteúdo são
suportados:

- `application/x-www-form-urlencoded`
- `multipart/form-data`

Esta função é usada primariamente para analisar
requisições `multipart/form-data` com verbos HTTP diferentes de
`POST` que não populam automaticamente as
superglobais [$\_POST](reserved.variables.post.md) e [$\_FILES](reserved.variables.files.md).

**Cuidado**

O corpo da requisição pode ser consumido apenas uma vez.
**request\_parse\_body()** consome o corpo da requisição sem
fazer buffer para o fluxo `php://input`.
Por outro lado, se o corpo já tiver sido lido (ex.: por
`php://input`), **request\_parse\_body()**
retornará dados vazios.

### Parâmetros

`options`
:   O parâmetro `options` aceita um array associativo
    para substituir as seguintes configurações globais do php.ini para analisar o
    corpo da requisição.

    - `max_file_uploads`
    - `max_input_vars`
    - `max_multipart_body_parts`
    - `post_max_size`
    - `upload_max_filesize`

### Valor Retornado

**request\_parse\_body()** retorna um array com o
equivalente de [$\_POST](reserved.variables.post.md) no índice `0` e o de
[$\_FILES](reserved.variables.files.md) no índice `1`.

### Erros/Exceções

Quando o corpo da requisição for inválido,
de acordo com o cabeçalho `Content-Type`,
uma exceção [RequestParseBodyException](class.requestparsebodyexception.md) é lançada.

Uma exceção [ValueError](class.valueerror.md) é lançada quando
`options` contiver chaves inválidas ou
valores inválidos para a chave correspondente.

### Examples

**Exemplo #1 Exemplo de **request\_parse\_body()****

```
<?php
// Analisa o resultado e armazena-o nas superglobais $_POST e $_FILES.
[$_POST, $_FILES] = request_parse_body();
// Exibe o conteúdo de um arquivo transferido
echo file_get_contents($_FILES['file_name']['tmp_name']);
?>
```

**Exemplo #2 Exemplo de **request\_parse\_body()** com opções personalizadas**

```
<?php
// form.php

assert_logged_in();

// Apenas para este formulário, um tamanho maior de envio é permitido.
[$_POST, $_FILES] = request_parse_body([
    'post_max_size' => '10M',
    'upload_max_filesize' => '10M',
]);

// Faz algo com os arquivos enviados.
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
