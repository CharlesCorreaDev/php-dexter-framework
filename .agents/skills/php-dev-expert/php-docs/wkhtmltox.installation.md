# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/wkhtmltox.installation.php

---

## Instalação

O código fonte desta extensão e os binários para Windows são hospedados pelo [» github](https://github.com/krakjoe/wkhtmltox),

Buscando o código-fonte e construindo a extensão:

```
git clone https://github.com/krakjoe/wkhtmltox
cd wkhtmltox
phpize
./configure --with-wkhtmltox=/path/to/wkhtmltox/installation
make
sudo make install
```

Buscando atualizações e reconstruindo a extensão:

```
cd wkhtmltox
phpize --clean
git pull origin master
phpize
./configure --with-wkhtmltox=/path/to/wkhtmltox/installation
make
sudo make install
```

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
