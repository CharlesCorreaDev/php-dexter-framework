# Envia uma mensagem de erro para as rotinas de tratamento de erros definidas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.error-log.php

---

# error\_log

(PHP 4, PHP 5, PHP 7, PHP 8)

error\_log — Envia uma mensagem de erro para as rotinas de tratamento de erros definidas

### Descrição

function **error\_log**(  
    [string](language.types.string.md) `$message`,  
    [int](language.types.integer.md) `$message_type` = 0,  
    [?](language.types.null.md)[string](language.types.string.md) `$destination` = **`null`**,  
    [?](language.types.null.md)[string](language.types.string.md) `$additional_headers` = **`null`**  
): [bool](language.types.boolean.md)

Envia uma mensagem de erro para o registro de erros do servidor web ou para um arquivo.

### Parâmetros

`message`
:   A mensagem de erro que deve ser registrada.

`message_type`
:   Indica para onde o erro deve ser direcionado. Os possíveis tipos de mensagem são os
    seguintes:

    **Tipos de logs de **error\_log()****

    |  |  |
    | --- | --- |
    | 0 | `message` é enviado para sistema de logs do PHP, usando o mecanismo de log do sistema operacional ou um arquivo, dependendo do que a diretiva de configuração [error\_log](errorfunc.configuration.md#ini.error-log) estiver definida. Esta é a opção padrão. |
    | 1 | `message` é enviado por e-mail para o endereço no parâmetro `destination`. Este é o único tipo de mensagem em que o quarto parâmetro, `additional_headers`, é utilizado. |
    | 2 | Não é mais uma opção. |
    | 3 | `message` é adicionada ao arquivo `destination`. Uma nova linha não é automaticamente adicionada ao final da string `message`. |
    | 4 | `message` é enviado diretamente para o manipulador de log do SAPI. |

`destination`
:   O destino. Seu significado depende do parâmetro
    `message_type`, conforme descrito acima.

`additional_headers`
:   Os cabeçalhos adicionais. É usado quando o parâmetro `message_type`
    está definido como `1`.
    Este tipo de mensagem usa a mesma função interna que
    [mail()](function.mail.md) utiliza.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.
Se `message_type` for zero, esta função sempre retorna **`true`**,
independentemente de o erro poder ser registrado ou não.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `destination` e `additional_headers` agora permitem null. |

### Examples

**Exemplo #1 Exemplos **error\_log()****

```
<?php
// Envia uma notificação através do registro do servidor se não conseguirmos
// conectar ao banco de dados.
if (!Ora_Logon($username, $password)) {
    error_log("Banco de dados Oracle não disponível!", 0);
}

// Notificar o administrador por e-mail se ficarmos sem FOO
if (!($foo = allocate_new_foo())) {
    error_log("Grande problema, estamos sem FOOs!", 1,
               "operator@example.com");
}

// Outra forma de chamar error_log():
error_log("Você cometeu um erro!", 3, "/var/tmp/my-errors.log");
?>
```

### Notas

**Aviso**

**error\_log()** não é seguro para binários. `message` será truncado pelo caractere nulo.

**Dica**

`message` não deve conter o caractere nulo. Observe que `message` pode ser enviado para arquivo, e-mail, syslog, etc. Use a função apropriada de conversão/escape, como [base64\_encode()](function.base64-encode.md), [rawurlencode()](function.rawurlencode.md) ou [addslashes()](function.addslashes.md) antes de chamar **error\_log()**.

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
