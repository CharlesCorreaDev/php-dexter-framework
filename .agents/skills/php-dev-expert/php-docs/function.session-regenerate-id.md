# Atualiza o id da sessão atual com um novo id gerado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-regenerate-id.php

---

# session\_regenerate\_id

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

session\_regenerate\_id — 
Atualiza o id da sessão atual com um novo id gerado

### Descrição

function **session\_regenerate\_id**([bool](language.types.boolean.md) `$delete_old_session` = **`false`**): [bool](language.types.boolean.md)

**session\_regenerate\_id()** substituirá o id da sessão
atual com um novo id e manterá a informação da sessão atual.

Quando [session.use\_trans\_sid](session.configuration.md#ini.session.use-trans-sid)
estiver habilitada, saídas (output) devem ser iniciadas depois de **session\_regenerate\_id()**
ser chamada. Caso contrário, o ID da sessão antiga é utilizado.

**Aviso**

Atualmente, session\_regenerate\_id não lida muito bem em redes instáveis
como, por exemplo, móvel e WiFi. Pode ocorrer perda da
sessão ao chamar session\_regenerate\_id.

Os dados de sessões antigas não devem ser destruídos imediatamente; ao invés disso, deve ser usado
timestamp para destruir a sessão e controlar o acesso aos dados de sessões antigas. Caso contrário,
acessos concorrentes à página podem resultar em um estado inconsistente, em
perda da sessão, ou pode causar uma condição de corrida no lado do cliente (navegador)
e pode criar vários IDs de sessão desnecessariamente. A remoção imediata
dos dados de sessão impossibilita a detecção de ataques de roubo de sessão,
e também a prevenção.

### Parâmetros

`delete_old_session`
:   Se o arquivo associado à sessão anterior deve ser excluído ou não.
    A sessão antiga não deve ser removida se for necessário evitar
    condições de corrida causadas pela remoção, ou se for necessário detectar/evitar ataques
    de roubo de sessão.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **session\_regenerate\_id()****

```
<?php
// NOTA: Este código não é totalmente funcional, mas apenas um exemplo!

session_start();

// Verifica o timestamp para remoção
if (isset($_SESSION['destroyed'])
    && $_SESSION['destroyed'] < time() - 300) {
    // Normalmente não deve acontecer. Isso pode ser um ataque ou então causado por uma rede instável.
    // Remove todos os status de autenticação da sessão deste usuário.
    remove_all_authentication_flag_from_active_sessions($_SESSION['userid']);
    throw(new DestroyedSessionAccessException);
}

$old_sessionid = session_id();

// Define o timestamp para remoção
$_SESSION['destroyed'] = time(); // session_regenerate_id() salva os dados da sessão anterior

// Apenas chamar session_regenerate_id() pode causar a perda da sessão, etc.
// Veja o próximo exemplo.
session_regenerate_id();

// A nova sessão não precisa da flag destroyed
unset($_SESSION['destroyed']);

$new_sessionid = session_id();

echo "Old Session: $old_sessionid<br />";
echo "New Session: $new_sessionid<br />";

print_r($_SESSION);
?>
```

O módulo de sessão atual não trabalha bem com redes instáveis. O programador deve
gerenciar o ID de sessão para evitar a perda da sessão causada por session\_regenerate\_id.

**Exemplo #2 Evitando a perda de sessão causada por **session\_regenerate\_id()****

```
<?php
// NOTA: Este código não é totalmente funcional, mas apenas um exemplo!
// my_session_start() e my_session_regenerate_id() evitam a perda da sessão causada por
// redes instáveis. Além disso, este código pode evitar que a sessão seja
// roubada por atacantes.

function my_session_start() {
    session_start();
    if (isset($_SESSION['destroyed'])) {
       if ($_SESSION['destroyed'] < time()-300) {
           // Normalmente não deve acontecer. Isso pode ser um ataque ou então causado por uma rede instável.
           // Remove todos os status de autenticação da sessão deste usuário.
           remove_all_authentication_flag_from_active_sessions($_SESSION['userid']);
           throw(new DestroyedSessionAccessException);
       }
       if (isset($_SESSION['new_session_id'])) {
           // Não está completamente expirado ainda. O cookie pode ter sido perdido por causa de uma rede instável.
           // Tenta novamente definir o cookie de ID de sessão.
           // NOTA: Não tente definir o ID de sessão novamente se você quiser remover
           // as flags de autenticação
           session_commit();
           session_id($_SESSION['new_session_id']);
           // O novo ID de sessão deve existir
           session_start();
           return;
       }
   }
}

function my_session_regenerate_id() {
    // Um novo ID de sessão é necessário para definir o ID de sessão corretamente
    // quando o ID de sessão não é configurado por causa de instabilidade na rede.
    $new_session_id = session_create_id();
    $_SESSION['new_session_id'] = $new_session_id;

    // Definie o timestamp para remoção
    $_SESSION['destroyed'] = time();

    // Escreve e fecha a sessão
    session_commit();

    // Inicia a sessão com um novo ID de sessão
    session_id($new_session_id);
    ini_set('session.use_strict_mode', 0);
    session_start();
    ini_set('session.use_strict_mode', 1);

    // A nova sessão não precisa destas informações
    unset($_SESSION['destroyed']);
    unset($_SESSION['new_session_id']);
}
?>
```

### Veja também

- [session\_id()](function.session-id.md) - Obtém e/ou define o id de sessão atual
- [session\_create\_id()](function.session-create-id.md) - Cria novo ID de sessão
- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session\_destroy()](function.session-destroy.md) - Destrói todos os dados registrados em uma sessão
- [session\_reset()](function.session-reset.md) - Reinicializa um array de sessão com os valores originais
- [session\_name()](function.session-name.md) - Obtém e/ou define o nome da sessão atual

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
