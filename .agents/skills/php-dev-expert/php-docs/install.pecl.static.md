# Compilando extensões PECL estaticamente no PHP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.static.php

---

## Compilando extensões PECL estaticamente no PHP

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

Às vezes, pode ser necessário criar uma extensão PECL estaticamente no binário do PHP.
Para isso, o código-fonte da extensão precisará ser colocado no diretório
/caminho/para/o/diretorio/php/src/ext/,
e será necessário que o sistema de compilação do PHP gere o script de
configuração novamente.

```
$ cd /caminho/para/o/diretorio/php/src/ext
$ pecl download extname
$ gzip -d < extname.tgz | tar -xvf -
$ mv extname-x.x.x extname
```

Isso resultará no seguinte diretório:

```
/caminho/para/o/diretorio/php/src/ext/extname
```

Depois disso, o PHP precisa ser forçado a reconstruir o script de
configuração e, em seguida, pode ser compilado normalmente:

```
$ cd /caminho/para/o/diretorio/php/src
$ rm configure
$ ./buildconf --force
$ ./configure --help
$ ./configure --with-extname --enable-someotherext --with-foobar
$ make
$ make install
```

> **Nota**:
>
> Para executar o script **buildconf**, o
> **autoconf**
> `2.68`
> e o
> **automake**
> `1.4+`
> serão necessários.
> As versões mais recentes do **autoconf** podem funcionar,
> mas não são suportadas.

O uso de
**--enable-extname**
ou
**--with-extname**
depende da extensão.
Normalmente, uma extensão que não requer bibliotecas externas usa
**--enable**.
Para ter certeza, execute o seguinte após **buildconf**:

```
$ ./configure --help | grep extname
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
