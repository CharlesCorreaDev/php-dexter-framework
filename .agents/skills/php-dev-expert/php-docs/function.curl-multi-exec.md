# Executa as subconexões do identificador cURL atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-multi-exec.php

---

# curl\_multi\_exec

(PHP 5, PHP 7, PHP 8)

curl\_multi\_exec — Executa as subconexões do identificador cURL atual

### Descrição

function **curl\_multi\_exec**([CurlMultiHandle](class.curlmultihandle.md) `$multi_handle`, [int](language.types.integer.md) `&$still_running`): [int](language.types.integer.md)

Processa cada um dos identificadores na pilha. Este método pode ser chamado independentemente de um identificador
precisar ou não ler ou gravar dados.

### Parâmetros

`multi_handle`
:   Um manipulador cURL múltiplo retornado por
    [curl\_multi\_init()](function.curl-multi-init.md).

`still_running`
:   Uma referência a um sinalizador para informar se as operações ainda estão em execução.

### Valor Retornado

Um código cURL definido nas [Constantes Predefinidas](curl.constants.md) cURL.

> **Nota**:
>
> Esta função apenas retorna erros relacionados a toda a pilha de multi-identificadores. Ainda pode ter
> ocorrido problemas em transferências individuais mesmo quando esta função retorna
> **`CURLM_OK`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `multi_handle` agora espera uma instância de [CurlMultiHandle](class.curlmultihandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Exemplo de **curl\_multi\_exec()****

Este exemplo criará dois identificadores cURL para uma lista de URLs que serão adicionados a um
multi-identificador e executados de forma assíncrona.

```
<?php

$urls = [
    "https://www.php.net/",
    "https://www.example.com/",
];

$mh = curl_multi_init();
$map = new WeakMap();

foreach ($urls as $url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_multi_add_handle($mh, $ch);
    $map[$ch] = $url;
}

do {
    $status = curl_multi_exec($mh, $unfinishedHandles);
    if ($status !== CURLM_OK) {
        throw new \Exception(curl_multi_strerror(curl_multi_errno($mh)));
    }

    while (($info = curl_multi_info_read($mh)) !== false) {
        if ($info['msg'] === CURLMSG_DONE) {
            $handle = $info['handle'];
            curl_multi_remove_handle($mh, $handle);
            $url = $map[$handle];

            if ($info['result'] === CURLE_OK) {
                $statusCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

                echo "A requisição a {$url} terminou com o status HTTP {$statusCode}:", PHP_EOL;
                echo curl_multi_getcontent($handle);
                echo PHP_EOL, PHP_EOL;
            } else {
                echo "A requisição a {$url} falhou com erro: ", PHP_EOL;
                echo curl_strerror($info['result']);
                echo PHP_EOL, PHP_EOL;
            }
        }
    }

    if ($unfinishedHandles) {
        if (($updatedHandles = curl_multi_select($mh)) === -1) {
            throw new \Exception(curl_multi_strerror(curl_multi_errno($mh)));
        }
    }
} while ($unfinishedHandles);

curl_multi_close($mh);

?>
```

### Veja também

- [curl\_multi\_init()](function.curl-multi-init.md) - Retorna um multi-identificador cURL
- [curl\_multi\_select()](function.curl-multi-select.md) - Aguarda até que leitura ou escrita seja possível em qualquer conexão multi-identificadores cURL
- [curl\_exec()](function.curl-exec.md) - Executa uma sessão cURL

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
