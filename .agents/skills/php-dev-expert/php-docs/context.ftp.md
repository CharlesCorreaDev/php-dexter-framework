# Lista de opções de contexto do FTP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/context.ftp.php

---

# Opções de contexto do FTP

Opções de contexto do FTP — Lista de opções de contexto do FTP

### Descrição

Opções de contexto para os transportadores
`ftp://` e `ftps://`.

### Opções

`overwrite` [bool](language.types.boolean.md)
:   Permite a sobrescrita de arquivos existentes no servidor remoto.
    Aplicável somente no modo de escrita (uploading).

    **`false`** como padrão.

`resume_pos` [int](language.types.integer.md)
:   Deslocamento do arquivo a se começar a transferência. Aplicável somente no modo de leitura (downloading).

    `0` (Início do arquivo), como padrão.

`proxy` [string](language.types.string.md)
:   Requisição Proxy FTP pelo servidor proxy http. Aplicável em arquivos somente em
    operações de leitura. Ex: `tcp://squid.example.com:8000`.

### Notas

> **Nota**:
> **Opções de contexto de fluxos de socket subjacentes**  
>
> Opções de contextos adicionais podem ser suportadas pelo
> [transporte subjacente](transports.inet.md).
> Para fluxos `ftp://`, refira-se
> às opções para o transporte `tcp://`. Para
> `ftps://`, refira-se às opções de contexto do
> transporte `ssl://`.

### Veja também

- [ftp://](wrappers.ftp.md)
- [Opções de contexto de Socket](context.socket.md)
- [Opções de contexto de SSL](context.ssl.md)

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
