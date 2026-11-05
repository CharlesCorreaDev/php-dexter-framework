# Define múltiplas opções para uma transferência cURL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.curl-setopt-array.php

---

# curl\_setopt\_array

(PHP 5 >= 5.1.3, PHP 7, PHP 8)

curl\_setopt\_array — Define múltiplas opções para uma transferência cURL

### Descrição

function **curl\_setopt\_array**([CurlHandle](class.curlhandle.md) `$handle`, [array](language.types.array.md) `$options`): [bool](language.types.boolean.md)

Define múltiplas opções para uma sessão cURL. Esta função é
útil para definir um alto número de opções cURL sem chamar repetidas vezes
a função [curl\_setopt()](function.curl-setopt.md).

### Parâmetros

`handle`
:   Um manipulador cURL retornado por
    [curl\_init()](function.curl-init.md).

`options`
:   Um [array](language.types.array.md) especificando que opções serão definidas e seus valores.
    As chaves devem ser constantes válidas da função [curl\_setopt()](function.curl-setopt.md) ou
    suas equivalentes em número inteiro.

### Valor Retornado

Retorna **`true`** se todas as opções forem definidas com sucesso. Se uma opção não puder
ser definida com sucesso, **`false`** é retornado imediatamente, ignorando quaisquer
opções posteriores do array `options`.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | O parâmetro `handle` agora espera uma instância de [CurlHandle](class.curlhandle.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Examples

**Exemplo #1
Inicializando uma nova sessão cURL e recebendo uma página da web**

```
<?php
// cria um novo identificador cURL
$ch = curl_init();

// define URL e outras opções apropriadas
$options = array(CURLOPT_URL => 'http://www.example.com/',
                 CURLOPT_HEADER => false
                );

curl_setopt_array($ch, $options);

// captura a URL e passa ao navegador
curl_exec($ch);
?>
```

### Notas

> **Nota**:
>
> Assim como a função [curl\_setopt()](function.curl-setopt.md), passar um array em
> **`CURLOPT_POST`** irá codificar os dados como
> *multipart/form-data*, enquanto que passar uma
> string codificada como URL irá codificar os dados como
> *application/x-www-form-urlencoded*.

### Veja também

- [curl\_setopt()](function.curl-setopt.md) - Define uma opção para uma transferência cURL

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
