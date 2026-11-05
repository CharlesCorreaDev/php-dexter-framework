# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds.installation.php

---

## Instalação

A maneira mais fácil de instalar a extensão é através do [» PECL](https://pecl.php.net/package/ds)

```
pecl install ds
```

Pode-se também compilar diretamente a partir do código-fonte:

```
# Dependências que talvez precisem ser instaladas
# sudo apt-get install git build-essential php7.0-dev

git clone https://github.com/php-ds/extension "php-ds"
cd php-ds

# Compila e instala a extensão
phpize
./configure
make
make install

# Limpa os arquivos de compilação
make clean
phpize --clean
```

> **Nota**:
>
> Se estiver usando o Composer, é altamente recomendável incluir
> [» php-ds/php-ds](https://packagist.org/packages/php-ds/php-ds)
> em seu projeto para que seu código continue funcional em um ambiente onde a
> extensão não está instalada. A extensão terá prioridade se estiver instalada.

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
