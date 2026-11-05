# Obtém e/ou define o id de sessão atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-id.php

---

# session\_id

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_id — Obtém e/ou define o id de sessão atual

### Descrição

function **session\_id**([?](language.types.null.md)[string](language.types.string.md) `$id` = **`null`**): [string](language.types.string.md)|[false](language.types.singleton.md)

**session\_id()** é usado para obter ou definir o id de sessão
para a sessão atual.

A constante **`SID`** também pode ser usada para
obter o nome e id da sessão atual como uma string adequado para
adicionar em URLs. Veja também [Manipulação
de Sessão](ref.session.md).

### Parâmetros

`id`
:   Se `id` for especificado e não **`null`**, ele substituirá o
    id de sessão atual. **session\_id()** precisa ser chamado antes de
    [session\_start()](function.session-start.md) para este fim. Dependendo do
    manipulador de sessão, nem todos os caracteres são permitidos em um id de sessão.
    Por exemplo, o manipulador de sessão em arquivo permite apenas caracteres no
    intervalo `[a-zA-Z0-9,-]`!

    > **Nota**:
    >
    > Quando estiver usando cookies de sessão, especificar um `id`
    > para **session\_id()** sempre enviará um novo cookie
    > quando [session\_start()](function.session-start.md) for chamada, sem importar se o
    > id da sessão atual for idêntico ao que está sendo definido.

### Valor Retornado

**session\_id()** retorna o id de sessão para a sessão
atual ou uma string vazia (`""`) se não houver sessão
atual (não existe um id de sessão atual).
Em caso de falha, **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `id` é anulável agora. |

### Veja também

- [session\_regenerate\_id()](function.session-regenerate-id.md) - Atualiza o id da sessão atual com um novo id gerado
- [session\_start()](function.session-start.md) - Inicia uma nova sessão ou continua uma sessão existente
- [session\_set\_save\_handler()](function.session-set-save-handler.md) - Define funções de armazenamento de sessão à nível de usuário
- [session.save\_handler](session.configuration.md#ini.session.save-handler)

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
