# Cria novo ID de sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-create-id.php

---

# session\_create\_id

(PHP 7 >= 7.1.0, PHP 8)

session\_create\_id — Cria novo ID de sessão

### Descrição

function **session\_create\_id**([string](language.types.string.md) `$prefix` = ""): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_create\_id()** é usado para criar
um novo id de sessão para a sessão atual. Ele retorna um ID de sessão
livre de colisão.

Se a sessão não estiver ativa, a verificação de colisão será omitida.

O id de sessão é criado de acordo com a configuração no php.ini.

É importante usar o mesmo ID de usuário do seu servidor web para
o script de tarefa do GC. Caso contrário, você poderá ter problemas de permissão, especialmente
com o gerenciador de salvamento de arquivos.

### Parâmetros

`prefix`
:   Se `prefix` for especificado, o novo id de sessão
    é prefixado por `prefix`. Nem todos
    os caracteres são permitidos no ID da sessão. Caracteres na
    faixa `[a-zA-Z0-9,-]` são permitidos. O comprimento máximo é de 256 caracteres.

### Valor Retornado

**session\_create\_id()** retorna um novo id de sessão livre de colisão
para a sessão atual. Se for usado sem uma sessão
ativa, a verificação de colisão é omitida.
Em caso de falha, **`false`** é retornado.

### Examples

**Exemplo #1 **session\_create\_id()** exemplo com [session\_regenerate\_id()](function.session-regenerate-id.md)**

```
<?php
// Minha função de início de sessão suporta gerenciamento de timestamp
function my_session_start() {
    session_start();
    // Não permitir o uso de ID de sessão muito antigo
    if (!empty($_SESSION['deleted_time']) && $_SESSION['deleted_time'] < time() - 180) {
        session_destroy();
        session_start();
    }
}

// Minha função de regeneração de id de sessão
function my_session_regenerate_id() {
    // Chame session_create_id() enquanto a sessão estiver ativa
    // para garantir que não haja colisões.
    if (session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    // AVISO: Nunca use strings confidenciais para prefixo!
    $newid = session_create_id('myprefix-');
    // Definir timestamp de exclusão. Os dados da sessão não devem ser excluídos imediatamente por motivos.
    $_SESSION['deleted_time'] = time();
    // Terminar sessão
    session_commit();
    // Certifique-se de aceitar o ID de sessão definido pelo usuário
    // NOTA: Você deve ativar use_strict_mode para operações normais.
    ini_set('session.use_strict_mode', 0);
    // Define novo ID de sessão personalizado
    session_id($newid);
    // Comece com um ID de sessão personalizado
    session_start();
}

// Certifique-se de que use_strict_mode está habilitado.
// use_strict_mode é obrigatório por motivos de segurança.
ini_set('session.use_strict_mode', 1);
my_session_start();

// O ID da sessão deve ser regenerado quando
// - Usuário se loga
// - Usuário se desloga
// - Certo período já passou
my_session_regenerate_id();

// Escreva códigos úteis
?>
```

### Veja também

- [session\_regenerate\_id()](function.session-regenerate-id.md) - Atualiza o id da sessão atual com um novo id gerado
- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
- [SessionHandler::create\_sid()](sessionhandler.create-sid.md) - Retorna um novo ID de sessão

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
