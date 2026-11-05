# Inicializa um identificador compartilhado cURL persistente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-share-init-persistent.php

---

# curl\_share\_init\_persistent

(PHP 8 >= 8.5.0)

curl\_share\_init\_persistent — Inicializa um identificador compartilhado cURL **persistente**

### Descrição

function **curl\_share\_init\_persistent**([array](language.types.array.md) `$share_options`): [CurlSharePersistentHandle](class.curlsharepersistenthandle.md)

Inicializa um identificador compartilhado cURL **persistente**
com as opções de compartilhamento informadas. Diferente de [curl\_share\_init()](function.curl-share-init.md),
os identificadores criados por esta função não serão destruídos ao final da
requisição PHP. Se um identificador compartilhado persistente com o mesmo conjunto de
`share_options` for encontrado, ele será reutilizado.

### Parâmetros

`share_options`
:   Um array não vazio de constantes **`CURL_LOCK_DATA_*`**.

    > **Nota**:
    >
    > **`CURL_LOCK_DATA_COOKIE`**
    > não é permitida e, se utilizada, esta função lançará uma exceção
    > [ValueError](class.valueerror.md). Compartilhar cookies entre requisições
    > PHP pode levar a uma mistura inadvertida de cookies sensíveis entre usuários.

### Valor Retornado

Retorna um objeto [CurlSharePersistentHandle](class.curlsharepersistenthandle.md).

### Erros/Exceções

- Se `share_options` estiver vazio, esta função lança uma
  exceção [ValueError](class.valueerror.md).
- Se `share_options` contiver um valor que não corresponde
  a uma constante **`CURL_LOCK_DATA_*`**,
  esta função lança uma exceção [ValueError](class.valueerror.md).
- Se `share_options` contiver
  **`CURL_LOCK_DATA_COOKIE`**, esta função lança uma exceção
  [ValueError](class.valueerror.md).
- Se `share_options` contiver um valor não inteiro,
  esta função lança uma exceção [TypeError](class.typeerror.md).

### Examples

**Exemplo #1 Exemplo de **curl\_share\_init\_persistent()****

Este exemplo criará um identificador de compartilhamento cURL persistente e demonstrará
conexões compartilhadas entre si. Se isso for executado em um PHP SAPI
de longa duração, `$sh` sobreviverá entre as requisições SAPI.

```
<?php

// Cria ou recupera um identificador de compartilhamento cURL persistente definido para compartilhar pesquisas e conexões de DNS
$sh = curl_share_init_persistent([CURL_LOCK_DATA_DNS, CURL_LOCK_DATA_CONNECT]);

// Inicializa o primeiro identificador cURL e atribui a ele o identificador de compartilhamento
$ch1 = curl_init("http://example.com/");
curl_setopt($ch1, CURLOPT_SHARE, $sh);

// Executa o primeiro identificador cURL que pode reutilizar a conexão de uma solicitação SAPI anterior
curl_exec($ch1);

// Inicializa o segundo identificador cURL e atribui o identificador de compartilhamento a ele
$ch2 = curl_init("http://example.com/");
curl_setopt($ch2, CURLOPT_SHARE, $sh);

// Executa o segundo identificador cURL. Isso reutilizará a conexão de $ch1
curl_exec($ch2);

?>
```

### Veja também

- [curl\_setopt()](function.curl-setopt.md) - Define uma opção para uma transferência cURL
- [curl\_share\_init()](function.curl-share-init.md) - Inicializa um identificador de compartilhamento de cURL

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
