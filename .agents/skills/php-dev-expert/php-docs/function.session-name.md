# Obtém e/ou define o nome da sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-name.php

---

# session\_name

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_name — Obtém e/ou define o nome da sessão atual

### Descrição

function **session\_name**([?](language.types.null.md)[string](language.types.string.md) `$name` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_name()** retorna o nome da sessão
atual. Se `name` for informado,
**session\_name()** irá atualizar o nome da sessão e retornar
o nome da sessão *antiga*.

Se um novo nome de sessão for informado no parâmetro `name`,
**session\_name()** modificará o cookie HTTP
(e exibir o conteúdo quando [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid) estiver
habilitado). Assim que o cookie HTTP tiver sido
enviado, chamar **session\_name()** gerará um **`E_WARNING`**.
**session\_name()** deve ser chamada
antes de [session\_start()](function.session-start.md) para a sessão funcionar
apropriadamente.

O nome da sessão é redefinido para o padrão guardado em
`session.name` na inicialização da requisição. Por isso, deve-se
chamar **session\_name()** para cada requisição (e antes que
[session\_start()](function.session-start.md) seja chamada).

### Parâmetros

`name`
:   O nome da sessão, que é
    usado em cookies e URLs (por exemplo, `PHPSESSID`). Ele
    deve conter apenas caracteres alfanuméricos; deve ser curto e
    descritivo (para usuários com avisos de cookie habilitados).
    Se `name` for informado e diferente de **`null`**, o nome da sessão atual
    será modificado para o novo valor.

    **Aviso**

    O nome da sessão não pode consistir apenas de dígitos, pelo menos uma letra
    deve estar presente. Caso contrário um novo ID de sessão é gerado toda vez.

### Valor Retornado

Retorna o nome da sessão atual. Se `name` for informado
e a função atualizar o nome da sessão, o nome da sessão *antiga*
será retornado, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `name` é anulável agora. |
| 7.2.0 | **session\_name()** verifica status de sessão; anteriormente, apenas verificava status de cookie. Portanto, a versão antiga de **session\_name()** permitia chamar **session\_name()** após [session\_start()](function.session-start.md), que poderia travar o PHP e resultar em comportamento inesperado. |

### Examples

**Exemplo #1 Exemplo de **session\_name()****

```
<?php

/* define o nome da sessão para WebsiteID */

$previous_name = session_name("WebsiteID");

echo "O nome da sessão anterior era $previous_name<br />";
?>
```

### Veja também

- [session.name](session.configuration.md#ini.session.name) (diretiva de
  configuração)

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
