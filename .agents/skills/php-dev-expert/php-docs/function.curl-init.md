# Inicializa uma sessão cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-init.php

---

# curl\_init

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

curl\_init — Inicializa uma sessão cURL

### Descrição

function **curl\_init**([?](language.types.null.md)[string](language.types.string.md) `$url` = **`null`**): [CurlHandle](class.curlhandle.md)|[false](language.types.singleton.md)

Inicializa uma nova sessão e retorna um identificador cURL.

### Parâmetros

`url`
:   Se fornecido, a opção **`CURLOPT_URL`** será definida
    com este valor. Esta opção pode ser definida manualmente usando a função
    [curl\_setopt()](function.curl-setopt.md).

    > **Nota**:
    >
    > O protocolo `file` é desativado no cURL se
    > [open\_basedir](ini.core.md#ini.open-basedir) estiver definido.

### Valor Retornado

Retorna um identificador cURL em caso de sucesso, **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | No caso de sucesso, a função retorna uma instância de [CurlHandle](class.curlhandle.md); anteriormente retornava um [resource](language.types.resource.md). |
| 8.0.0 | `url` agora pode ser nulo. |

### Examples

**Exemplo #1
Inicializando uma nova sessão cURL e buscando uma página da web**

```
<?php

// Inicializa uma nova sessão cURL
$ch = curl_init();

// Configura o URL e outras opções
curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Executa a chamada e envia ao navegador
curl_exec($ch);

?>
```

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL

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
