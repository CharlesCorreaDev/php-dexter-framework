# Adquire um semáforo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sem-acquire.php

---

# sem\_acquire

(PHP 4, PHP 5, PHP 7, PHP 8)

sem\_acquire — Adquire um semáforo

### Descrição

function **sem\_acquire**([SysvSemaphore](class.sysvsemaphore.md) `$semaphore`, [bool](language.types.boolean.md) `$non_blocking` = **`false`**): [bool](language.types.boolean.md)

**sem\_acquire()** bloqueia por padrão (se necessário) até que
o semáforo possa ser adquirido. Um processo que tenta adquirir um semáforo que
já adquiriu bloqueará para sempre se a aquisição do semáforo
fizer com que seu número máximo de semáforos seja excedido.

Após o processamento de uma solicitação, quaisquer semáforos adquiridos pelo processo, mas não
explicitamente liberados, serão liberados automaticamente e um alerta será
gerado.

### Parâmetros

`semaphore`
:   `semaphore` é um semáforo
    obtido de [sem\_get()](function.sem-get.md).

`non_blocking`
:   Especifica se o processo não deve aguardar a aquisição do semáforo.
    Se definido como **`true`**, a chamada retornará
    **`false`** imediatamente se um semáforo não puder ser adquirido
    imediatamente.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `semaphore` agora espera uma instância de [SysvSemaphore](class.sysvsemaphore.md); anteriormente, um [resource](language.types.resource.md) era esperado. |

### Veja também

- [sem\_get()](function.sem-get.md) - Obtém um ID de semáforo
- [sem\_release()](function.sem-release.md) - Libera um semáforo

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
