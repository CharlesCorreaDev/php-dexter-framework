# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wincache.requirements.php

---

## Dependências

Atualmente, a extensão é suportada apenas nas seguintes configurações:

Sistemas Operacionais Windows:

- Windows XP SP3 com IIS 5.1 e [» extensão FastCGI](https://www.iis.net/extensions/fastcgi)
- Windows Server 2003 com IIS 6.0 e [» extensão FastCGI](https://www.iis.net/extensions/fastcgi)
- Windows Vista SP1 com IIS 7.0 e módulo FastCGI
- Windows Server 2008 com IIS 7.0 e módulo FastCGI
- Windows 7 com IIS 7.5 e módulo FastCGI
- Windows Server 2008 R2 com IIS 7.5 e módulo FastCGI

PHP:

- PHP 5.2.X, construção NTS (não seguro para threads)
- PHP 5.3 X86, construção VC9 NTS (não seguro para threads)

> **Nota**:
>
> A extensão WinCache só pode ser usada quando o IIS estiver configurado para executar PHP via FastCGI.

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
