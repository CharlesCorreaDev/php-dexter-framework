# Instalação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/fann.installation.php

---

## Instalação

A extensão PHP do FANN deve funcionar em todos os sistemas Linux.

- [Instalação da biblioteca FANN](fann.installation.md#fann.installation.lib)
- [Instalação PECL](fann.installation.md#fann.installation.pecl)
- [Instalação Manual](fann.installation.md#fann.installation.manual)

## Instalação da biblioteca FANN

Antes de iniciar a instalação deve-se garantir que a *libfann* está instalada
no sistema. É parte do repositório principal na maioria das distribuições Linux
(pesquise por *fann*). Será necessária uma versão de desenvolvedor.

Se não estiver instalada, é necessário instalá-la primeiro. Pode ser obtida da
[» página oficial](https://leenissen.dk/fann/wp/) ou do repositório
da distribuição Linux. Por exemplo, no Fedora:

```
$ sudo yum install fann-devel
```

ou no Ubuntu:

```
$ sudo apt-get install libfann-dev
```

Se a biblioteca precisar ser reinstalada manualmente, todos os arquivos antigos devem ser removidos
antes da reinstalação caso contrário a versão antiga da biblioteca poderá ser usada na compilação.

## Instalação PECL

Esta extensão está disponível na PECL. A instalação é muito simples. Apenas execute:

```
$ sudo pecl install fann
```

## Instalação Manual

Para desenvolvedores e interessados nas últimas modificações, pode-se
compilar o driver a partir da última versão do código-fonte no
[» Github](https://github.com/bukka/php-fann).
Vá ao Github e clique no botão "Download ZIP". Depois execute:

```
$ unzip php-fann-master.zip
$ cd php-fann-master
$ phpize
$ ./configure
$ make all
$ sudo make install
```

Faça as seguintes alterações no php.ini:

- Certifique-se que a variável *extension\_dir* esteja apontando para
  o diretório que contém o arquivo *fann.so*. A instalação mostrará onde
  está instalando o driver PHP com uma saída similar a:

  ```
  Installing '/usr/lib/php/extensions/no-debug-non-zts-20060613/fann.so'
  ```

  Certifique-se que é o mesmo caminho do diretório de extensões PHP, executando:

  ```
  $ php -i | grep extension_dir
    extension_dir => /usr/lib/php/extensions/no-debug-non-zts-20060613 =>
                     /usr/lib/php/extensions/no-debug-non-zts-20060613
  ```

  Se não for, altere o *extension\_dir* no php.ini ou
  mova o arquivo *fann.so*.
- Para carregar a extensão na inicialização do PHP, adicione uma linha:

  ```
  extension=fann.so
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
