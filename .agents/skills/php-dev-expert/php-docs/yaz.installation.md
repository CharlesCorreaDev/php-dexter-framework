# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaz.installation.php

---

## Instalação

Informações para instalar esta extensão PECL podem ser
encontradas no capítulo [Instalação de
Extensões PECL](install.pecl.md) do manual. Informações adicionais, como novas versões,
downloads, arquivos fontes, informações do mantenedor e um CHANGELOG, podem ser
encontradas aqui:
[» https://pecl.php.net/package/yaz](https://pecl.php.net/package/yaz)

Uma DLL para esta
extensão PECL não está disponível no momento. Veja também a seção
[Compilando no Windows](install.windows.building.md).

> **Nota**:
> **Informações específicas para usuários do Windows**  
>
> php\_yaz.dll depende de
> yaz.dll. O yaz.dll
> faz parte do Win32 ZIP do site PHP. Também faz parte
> da instalação do Windows YAZ disponível na
> [» área YAZ WIN32](http://ftp.indexdata.dk/pub/yaz/win32/).
>
> No Windows, não se esqueça de adicionar o diretório PHP ao PATH,
> para que o arquivo yaz.dll possa ser encontrado pelo sistema.

**Aviso**

As extensões [IMAP](book.imap.md), [recode](book.recode.md) e
[YAZ](book.yaz.md)
não podem ser usadas em conjunto, pois
compartilham os mesmos símbolos internos. Observação: a Yaz 2.0 e superiores não sofrem deste problema.

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
