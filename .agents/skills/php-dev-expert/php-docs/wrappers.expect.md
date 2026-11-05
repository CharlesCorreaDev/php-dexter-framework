# Fluxos de Interação entre Processos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wrappers.expect.php

---

# expect://

expect:// — Fluxos de Interação entre Processos

### Descrição

Fluxos abertos através do empacotador expect:// fornecem
acesso ao stdin, stdout e stderr do processo via PTY.

> **Nota**:
> **Este empacotador não é habilitado por padrão**  
>
> Para usar o empacotador expect://,
> a extensão
> [» Expect](https://pecl.php.net/package/expect)
> disponível em [» PECL](https://pecl.php.net/) deve ser instalada.

expect:// (PECL)

### Uso

- expect://command

### Opções

**Sumário do Empacotador**

| Atributo | Suportado |
| --- | --- |
| Restrito por [allow\_url\_fopen](filesystem.configuration.md#ini.allow-url-fopen) | Não |
| Permite Leitura | Sim |
| Permite Escrita | Sim |
| Permite Adição | Sim |
| Permite Leitura e Escrita Simultâneas | Não |
| Suporta [stat()](function.stat.md) | Não |
| Suporta [unlink()](function.unlink.md) | Não |
| Suporta [rename()](function.rename.md) | Não |
| Suporta [mkdir()](function.mkdir.md) | Não |
| Suporta [rmdir()](function.rmdir.md) | Não |

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
