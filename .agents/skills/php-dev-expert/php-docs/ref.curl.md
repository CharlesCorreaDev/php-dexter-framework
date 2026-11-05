# Funções cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ref.curl.php

---

# Funções cURL

## Índice

- [curl\_close](function.curl-close.md) — Fecha uma sessão cURL
- [curl\_copy\_handle](function.curl-copy-handle.md) — Copia um identificador cURL com todas as suas opções
- [curl\_errno](function.curl-errno.md) — Retorna o número do último erro
- [curl\_error](function.curl-error.md) — Retorna uma string contendo o último erro da sessão atual
- [curl\_escape](function.curl-escape.md) — Codifica uma string para o formato URL
- [curl\_exec](function.curl-exec.md) — Executa uma sessão cURL
- [curl\_getinfo](function.curl-getinfo.md) — Obtém informação sobre uma transferência específica
- [curl\_init](function.curl-init.md) — Inicializa uma sessão cURL
- [curl\_multi\_add\_handle](function.curl-multi-add-handle.md) — Adiciona um identificador cURL comum a um multi-identificador cURL
- [curl\_multi\_close](function.curl-multi-close.md) — Remove todos os identificadores cURL de um multi-identificador
- [curl\_multi\_errno](function.curl-multi-errno.md) — Retorna o último número de erro de curl\_multi
- [curl\_multi\_exec](function.curl-multi-exec.md) — Executa as subconexões do identificador cURL atual
- [curl\_multi\_get\_handles](function.curl-multi-get-handles.md) — Return an array of CurlHandle objects currently attached to a CurlMultiHandle
- [curl\_multi\_getcontent](function.curl-multi-getcontent.md) — Retorna o conteúdo de um identificador cURL se CURLOPT\_RETURNTRANSFER estiver definido
- [curl\_multi\_info\_read](function.curl-multi-info-read.md) — Obtém informação sobre as transferências atuais
- [curl\_multi\_init](function.curl-multi-init.md) — Retorna um multi-identificador cURL
- [curl\_multi\_remove\_handle](function.curl-multi-remove-handle.md) — Remove um identificador de um conjunto de identificadores cURL
- [curl\_multi\_select](function.curl-multi-select.md) — Aguarda até que leitura ou escrita seja possível em qualquer conexão multi-identificadores cURL
- [curl\_multi\_setopt](function.curl-multi-setopt.md) — Define múltiplas opções para cURL
- [curl\_multi\_strerror](function.curl-multi-strerror.md) — Retorna uma string que descreve o código de erro
- [curl\_pause](function.curl-pause.md) — Pausa ou continua uma conexão
- [curl\_reset](function.curl-reset.md) — Redefine todas as opções de um identificador de sessão libcurl
- [curl\_setopt](function.curl-setopt.md) — Define uma opção para uma transferência cURL
- [curl\_setopt\_array](function.curl-setopt-array.md) — Define múltiplas opções para uma transferência cURL
- [curl\_share\_close](function.curl-share-close.md) — Fecha um identificador de compartilhamento de cURL
- [curl\_share\_errno](function.curl-share-errno.md) — Retorna o último número de erro do curl compartilhado
- [curl\_share\_init](function.curl-share-init.md) — Inicializa um identificador de compartilhamento de cURL
- [curl\_share\_init\_persistent](function.curl-share-init-persistent.md) — Inicializa um identificador compartilhado cURL persistente
- [curl\_share\_setopt](function.curl-share-setopt.md) — Configura uma opção para um identificador de compartilhamento cURL
- [curl\_share\_strerror](function.curl-share-strerror.md) — Retorna uma string descrevendo o código de erro fornecido
- [curl\_strerror](function.curl-strerror.md) — Retorna uma string que descreve o código de erro informado
- [curl\_unescape](function.curl-unescape.md) — Decodifica a parte codificada da URL fornecida
- [curl\_upkeep](function.curl_upkeep.md) — Executa qualquer verificação de manutenção de conexão
- [curl\_version](function.curl-version.md) — Obtém informação de versão do cURL

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
