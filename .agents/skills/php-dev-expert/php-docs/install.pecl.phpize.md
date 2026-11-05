# Compilando extensões PECL compartilhadas com phpize

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.pecl.phpize.php

---

## Compilando extensões PECL compartilhadas com phpize

**Aviso**

PECL está obsoleto.
O PHP Installer for Extensions (PIE) substitui o PECL e é o recomendado para instalar extensões.
Descubra mais em [» https://github.com/php/pie](https://github.com/php/pie)

Às vezes, usar o instalador **pecl** não é uma opção.
Isso pode ocorrer porque há um firewall ou porque a extensão que está sendo
instalada não está disponível como um pacote compatível com o PECL,
como extensões não lançadas do git.
Se tal extensão precisar ser compilada, as ferramentas de compilação de baixo
nível podem ser usadas para realizar a compilação manualmente.

O comando **phpize** é usado para preparar o ambiente de
compilação para uma extensão PHP.
No exemplo a seguir, o código-fonte de uma extensão está em um diretório
chamado extname:

```
$ cd extname
$ phpize
$ ./configure
$ make
# make install
```

Uma instalação bem sucedida criará um arquivo extname.so
e o colocará no diretório de extensões PHP
[extension\_dir](ini.core.md#ini.extension-dir).
O arquivo php.ini precisará ser ajustado, e uma
linha `extension=extname.so`
precisará ser adicionada antes que a extensão possa ser usada.

Se o sistema não tiver o comando **phpize** e pacotes
pré-compilados (como os do RPM) forem usados, certifique-se também de instalar a versão
de desenvolvimento apropriada dos pacotes PHP, pois ela geralmente inclui o
comando **phpize**
juntamente com os arquivos de cabeçalho apropriados para compilar o PHP e suas extensões.

Execute **phpize --help** para exibir informações de uso
adicionais.

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
