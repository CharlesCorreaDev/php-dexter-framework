# Executa uma sessão cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-exec.php

---

# curl\_exec

(PHP 4 >= 4.0.2, PHP 5, PHP 7, PHP 8)

curl\_exec — Executa uma sessão cURL

### Descrição

function **curl\_exec**([CurlHandle](class.curlhandle.md) `$handle`): [string](language.types.string.md)|[bool](language.types.boolean.md)

Executa a sessão cURL fornecida.

Esta função deve ser chamada após inicializar uma sessão cURL e todas
as opções para a sessão são definidas.

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

### Valor Retornado

Em caso de sucesso, esta função descarrega o resultado diretamente em
`stdout` e retorna **`true`**, ou **`false`** em caso de falha.
No entanto, se a opção **`CURLOPT_RETURNTRANSFER`**
estiver [definida](function.curl-setopt.md), ela retornará
o resultado em caso de sucesso ou **`false`** em caso de falha.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

> **Nota**:
>
> Observe que os códigos de retorno que indicam erros (por exemplo, `404
> Not found`) não são tratados como falhas.
> Use [curl\_getinfo()](function.curl-getinfo.md) para verificar esses casos.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1 Obtendo uma página da web**

```
<?php
// Cria um novo identificador cURL
$ch = curl_init();

// Configura o URL e as opções
curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);

// Obtém os dados
curl_exec($ch);
?>
```

### Veja também

- [curl\_multi\_exec()](function.curl-multi-exec.md) - Executa as subconexões do identificador cURL atual

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
