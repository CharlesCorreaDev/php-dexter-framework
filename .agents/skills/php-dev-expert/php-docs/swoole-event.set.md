# Modifica os callbacks e a máscara do listener de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/swoole-event.set.php

---

# Swoole\Event::set

(PECL swoole >= 1.9.0)

Swoole\Event::set — Modifica os callbacks e a máscara do listener de eventos

### Descrição

public static function **Swoole\Event::set**(  
    [mixed](language.types.mixed.md) `$sock`,  
    [callable](language.types.callable.md) `$read_callback`,  
    [callable](language.types.callable.md) `$write_callback` = ?,  
    [int](language.types.integer.md) `$flags` = ?  
): [bool](language.types.boolean.md)

Modifica os callbacks e a máscara do listener de eventos para o descritor de arquivo fornecido.

> **Nota**:
>
> Quando $read\_callback não for nulo, a função de callback de evento de leitura será modificada para a função especificada.

> **Nota**:
>
> Quando $write\_callback não for nulo, a função de callback de evento de escrita será atualizada para a função especificada.

> **Nota**:
>
> Configurar apenas SWOOLE\_EVENT\_READ desativa a escuta de eventos de escrita,
> enquanto configurar apenas SWOOLE\_EVENT\_WRITE desativa a escuta de eventos de leitura.

**Aviso**

Swoole\Event::set substitui os callbacks, mas não os libera.
Especificar null para os callbacks (por exemplo, read\_callback/write\_callback)
preserva os callbacks existentes em vez de limpá-los.

**Aviso**

Escutar SWOOLE\_EVENT\_READ sem um read\_callback (ou SWOOLE\_EVENT\_WRITE sem um write\_callback)
fará com que a operação falhe e retorne false.

### Parâmetros

`sock`
:   Descritor de arquivo, recurso de fluxo, recurso de socket ou objeto.

`read_callback`
:   Função de callback para eventos de leitura.

`write_callback`
:   Função de callback para eventos de escrita.

`flags`
:   Máscara de tipo de evento (por exemplo, **`SWOOLE_EVENT_READ`**, **`SWOOLE_EVENT_WRITE`**
    ou **`SWOOLE_EVENT_READ`** | **`SWOOLE_EVENT_WRITE`**).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
