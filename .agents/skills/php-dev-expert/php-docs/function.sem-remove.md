# Remove um semáforo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sem-remove.php

---

# sem\_remove

(PHP 4 >= 4.1.0, PHP 5, PHP 7, PHP 8)

sem\_remove — Remove um semáforo

### Descrição

function **sem\_remove**([SysvSemaphore](class.sysvsemaphore.md) `$semaphore`): [bool](language.types.boolean.md)

**sem\_remove()** remove o semáforo fornecido.

Após remover o semáforo, ele não estará mais acessível.

### Parâmetros

`semaphore`
:   Um semáforo retornado
    por [sem\_get()](function.sem-get.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `semaphore` agora espera uma instância de [SysvSemaphore](class.sysvsemaphore.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [sem\_get()](function.sem-get.md) - Obtém um ID de semáforo
- [sem\_release()](function.sem-release.md) - Libera um semáforo
- [sem\_acquire()](function.sem-acquire.md) - Adquire um semáforo

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
