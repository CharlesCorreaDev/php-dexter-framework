# Obter e/ou definir a expiração do cache atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.session-cache-expire.php

---

# session\_cache\_expire

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

session\_cache\_expire — Obter e/ou definir a expiração do cache atual

### Descrição

function **session\_cache\_expire**([?](language.types.null.md)[int](language.types.integer.md) `$value` = **`null`**): [int](language.types.integer.md)|[false](language.types.singleton.md)

**session\_cache\_expire()** retorna a configuração atual de
`session.cache_expire`.

O prazo para o cache expirar é redefinido para o padrão de 180 guardado em
[session.cache\_expire](session.configuration.md#ini.session.cache-expire)
na inicialização da requisição. Então
você precisa chamar **session\_cache\_expire()** para cada
requesição (e antes que [session\_start()](function.session-start.md) seja utilizada).

### Parâmetros

`value`
:   Se `value` é informado e não **`null`**, a expiração do cache
    atual é modificado para `value`.

    > **Nota**:
    >
    > Definir o valor de `value` tem valor apenas se
    > `session.cache_limiter` é definido como um valor
    > *diferente* de `nocache`.

### Valor Retornado

Retorna a configuração atual de `session.cache_expire`.
O valor retornado deve ser lido em minutos, padrão de 180.
Caso não seja possível alterar o valor, **`false`** é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `value` é anulável agora. |

### Examples

**Exemplo #1 Exemplo de **session\_cache\_expire()****

```
<?php

/* define o limitador de cache para 'private' */

session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

/* define o prazo do cache em 30 minutos */
session_cache_expire(30);
$cache_expire = session_cache_expire();

/* inicia a sessão */

session_start();

echo "O limitador de cache está definido agora como $cache_limiter<br />";
echo "As sessões em cache irão expirar depois de $cache_expire minutos";
?>
```

### Veja também

- [session.cache\_expire](session.configuration.md#ini.session.cache-expire)
- [session.cache\_limiter](session.configuration.md#ini.session.cache-limiter)
- [session\_cache\_limiter()](function.session-cache-limiter.md) - Obtém e/ou define o limitador do cache atual

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
