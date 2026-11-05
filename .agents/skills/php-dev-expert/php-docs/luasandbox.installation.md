# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/luasandbox.installation.php

---

## Instalação

Se o sistema operacional for Debian 10 ou posterior, ou Ubuntu 18.04 ou posterior, então
Luasandbox normalmente deve ser instalado a partir do pacote
`php-luasandbox`:

```
sudo apt-get install php-luasandbox
```

Para instalar LuaSandbox usando [» PIE](https://github.com/php/pie),
execute o seguinte comando:

```
pie install wikimedia/luasandbox
```

> **Nota**:
>
> Versões anteriores podem ser encontradas no [» pacote PECL LuaSandbox](https://pecl.php.net/package/luasandbox).

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
