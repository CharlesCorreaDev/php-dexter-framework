# Destrói todos os dados registrados em uma sessão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-destroy.php

---

# session\_destroy

(PHP 4, PHP 5, PHP 7, PHP 8)

session\_destroy — Destrói todos os dados registrados em uma sessão

### Descrição

function **session\_destroy**(): [bool](language.types.boolean.md)

**session\_destroy()** destrói todos os dados associados com a
sessão atual. Ela não apaga nenhuma das variáveis globais
associadas à sessão atual, nem apaga o cookie de sessão.
Para usar as variáveis de sessão novamente, [session\_start()](function.session-start.md) deve
ser chamada.

> **Nota**:
>
> Não é necessário chamar **session\_destroy()** em um código
> habitual. Ao invés de destruir os dados da sessão, limpe o array $\_SESSION.

Para matar a sessão completamente, o
ID da sessão também deve ser apagado. Se um cookie for usado para propagar o
ID da sessão (funcionamento padrão), então o cookie de sessão deve ser excluído.
[setcookie()](function.setcookie.md) pode ser usado para isso.

Quando [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
está habilitado, não é necessário remover o cookie de ID das sessões obsoletas porque
o módulo de sessão não aceitará um cookie de ID de sessão quando não houver
dados associados ao ID de sessão, e irá criar um novo cookie de ID de sessão.
Habilitar [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
é recomendado para todos os sites.

**Aviso**

A remoção imediata da sessão pode causar resultados indesejados. Quando há
requisições concorrentes, outras conexões podem perder de forma repentina os dados da
sessão, como por exemplo, requisições originadas no JavaScript e/ou requisições de links.

Embora o módulo de sessão atual não aceita um cookie de ID de sessão
vazio, a remoção imediata da sessão pode resultar em um cookie de ID de sessão
vazio por causa da condição de corrida no navegador do usuário. Isso fará
com que o usuário crie vários IDs de sessão desnecessariamente.

Para evitar isso, deve ser definido um timestamp de removação em $\_SESSION e
o acesso à sessão deve ser rejeitado algum tempo depois. Ou então a aplicação não pode
ter requisições concorrentes. Isso se aplica à [session\_regenerate\_id()](function.session-regenerate-id.md) também.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Destruindo uma sessão com [$\_SESSION](reserved.variables.session.md)**

```
<?php
// Inicializa a sessão.
// Se estiver sendo usado session_name("something"), não esqueça de usá-lo agora!
session_start();

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
// Nota: Isto destruirá a sessão, e não apenas os dados!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Por último, destrói a sessão
session_destroy();
?>
```

### Veja também

- [session.use\_strict\_mode](session.configuration.md#ini.session.use-strict-mode)
- [session\_reset()](function.session-reset.md) - Reinicializa um array de sessão com os valores originais
- [session\_regenerate\_id()](function.session-regenerate-id.md) - Atualiza o id da sessão atual com um novo id gerado
- [unset()](function.unset.md) - unset remove a definição de uma variável informada
- [setcookie()](function.setcookie.md) - Envia um cookie

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
